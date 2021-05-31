<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\User;
use Exception;

class SearchController extends Controller
{
    public function filter() {

        try{
            /*
            // metodo when()
            $query = User::query();
            $query->when(request('email')== true , function ($q) {
                return $q->where('email', request('email'));
            });
            $query->when(request('name')== true , function ($q) {
                return $q->where('name', ucfirst(request('name')));
            });
            $query->when(request('type')== true , function ($q) {
                return $q->whereHas('types', function ($q) {
                    return $q->where('name', request('type'));
                });
            });
            $users = $query->get();
            */
            // metodo OOP
            $users = User::with('types')->filterBy(request()->all())->get();
            if ($users->isEmpty()) {
                throw new Exception('',204);
            }
            return UserResource::collection($users);
        } catch (Exception $e) {
            return response()
                ->json([
                'message' => $e->getMessage(),
                ])
                ->setStatusCode($e->getCode());
        }
    }
}
