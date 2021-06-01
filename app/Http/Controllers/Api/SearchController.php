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
            /**
             * metodo when()
             * 
             * Applico i filtri dichiarati in request utilizzando il metodo when() di eloquent
             */  

            $query = User::query();
            //email
            $query->when(request('email')== true , function ($q) {
                return $q->where('email', request('email'));
            });
            //name
            $query->when(request('name')== true , function ($q) {
                return $q->where('name', ucfirst(request('name')));
            });
            //type
            $query->when(request('type')== true , function ($q) {
                return $q->whereHas('types', function ($q) {
                    return $q->where('name', request('type'));
                });
            });
            //ordino il risultato finale per nome
            $users = $query->orderBy('name','ASC')->get();

            /**
             * metodo OOP 
             * 
             * Dichiaro lo scope FilterBy all'interno del model 'user' che istanzia un' abstact class passando i parametri 'query' e 'filters' ricevuti in request 
             */ 
              
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
