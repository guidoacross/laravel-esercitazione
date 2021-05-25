<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;
use App\Http\Resources\TypeResource;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use App\Type;
use Exception;
use PhpParser\Node\Stmt\TryCatch;

/**
 * @group Users
 * 
 * Managing users
 */

class UserController extends Controller
{

    /**
     * Get Users
     * 
     * List all the users.
     */

    public function index() {
        $users = User::with('types')->get();
        return UserResource::collection($users);
    }

    /**
     * Get User
     * 
     * Retriew an user by ID.
     */

    public function show(User $user) {
        return new UserResource($user) ;
    }

    /**
     * Post User
     * 
     * Store the user in the database.
     */

    public function store(StoreUserRequest $request) {
        $request->validated();
        try {            
            $user = User::create([
                'name'          =>  $request->name,
                'lastname'      =>  $request->lastname, 
                'date_of_birth' =>  $request->date_of_birth,
                'age'           =>  $this->calcAge($request->date_of_birth)
            ]);
            foreach ($request->types as $type) {   
                $typeId = Type::select('id')->where('name',$type)->get();
                $user->types()->attach($typeId);
            }
            return new UserResource($user);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Put User
     * 
     * Update a user in the database by ID.
     */

    public function update(User $user, StoreUserRequest $request) {
        $request->validated();
        try {
            $user->update([
                'name'          =>  $request->name,
                'lastname'      =>  $request->lastname,
                'date_of_birth' =>  $request->date_of_birth,
                'age'           =>  $this->calcAge($request->date_of_birth)
            ]);
            $idList = array();
            foreach ($request->types as $type) {
                $typeId = Type::select('id')->where('name', $type)->pluck('id')->first();
                array_push($idList,$typeId);
            }
            $user->types()->sync($idList);
            return new UserResource($user);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Delete User
     * 
     * Delete a user by ID.
     */

    public function destroy(User $user) {
        $user->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }

    private function calcAge($value) {
        $date = Carbon::parse($value);
        $now  = Carbon::now();
        $interval = $date->diff($now);
        return $interval->y;
    }
}
