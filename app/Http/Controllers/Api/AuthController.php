<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register (Request $request) {

        #1 validate
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required|string|min:8|confirmed'
        ]);

        #store user
        $user = User::create([
            'name'=> $validated['name'],
            'email'=> $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);
        
        #3 issue token
        $token = $user->createToken('blogToken')->accessToken;
         
        return response()->json([
            'message' => 'Logged in successfully.',
            'user' => $user,
            'token' => $token
        ], 200);

    }
}
