<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;

class LoginController extends Controller
{

    public function login(Request $request) {
        
        $credentials = $request->only('email','password');
        $token = Auth::attempt($credentials);
        if (!$token){
            return response()->json(['error' => 'Invalid email or password!'], 404);
        }
        return response()->json(['token' => $token]);
    }
}
