<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Exception;
use Tymon\JWTAuth\Exceptions\UserNotDefinedException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function authUser() 
    {
        try {
            $user = auth()->userOrFail();
        } catch (UserNotDefinedException $e) {
            return response()->json(['error' => $e->getMessage()], 404);
        } catch (TokenInvalidException $e) {
            return response()->json(['error' => $e->getMessage()], 404);
        }

        return $user;
    }
}
