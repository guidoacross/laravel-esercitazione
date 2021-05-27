<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login(Request $request) {
        $cred = $request->only(['email','password']);
        $token = auth()->attempt($cred);

        return response()->json(['token' => $token]);
    }
}
