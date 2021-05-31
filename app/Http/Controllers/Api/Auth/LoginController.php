<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginUserRequest $request) {
        //prelevo le keys email e password dalla request
        $credentials = $request->only('email','password');
        //eseguo l'autenticazione che mi restituisce il token JWT
        $token = Auth::attempt($credentials);
        //se non ricevo il token lancio un errore
        if (!$token){
            return response()->json(['error' => 'Invalid data!'], 404);
        }
        return response()->json(['token' => $token]);
    }

    public function refresh(){
        $newToken = auth()->refresh(true, true);
        return response()->json(['token' => $newToken]);     
    }
}
