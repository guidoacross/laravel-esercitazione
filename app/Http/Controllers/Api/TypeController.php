<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypeRequest;
use App\Http\Resources\TypeResource;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;
use App\Type;

/**
 * @group Types
 * 
 * Managing types
 */

class TypeController extends Controller
{
    /**
     * Get Types
     * 
     * List all the types.
     */

    public function index() {
        $types = Type::all();
        return TypeResource::collection($types);
    }

    /**
     * Get Type
     * 
     * Select a type by id.
     * @param Type $type 
     */

    public function show(Type $type) {
        return new TypeResource($type);
    }

    /**
     * Post Type
     * 
     * Create a type.
     */
    
    public function store(StoreTypeRequest $request) {
        $request->validated();
        try {
            $type = Type::create($request->all());
            return new TypeResource($type);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Put Type
     * 
     * Update a type by id.
     */
    
    public function update(Type $type, StoreTypeRequest $request) {
        $request->validated();
        try {
            $type->update($request->all());
            return new TypeResource($type);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Delete Type
     * 
     * Delete a type by id.
     */
    
    public function destroy(Type $type){
        $type->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }   
}
