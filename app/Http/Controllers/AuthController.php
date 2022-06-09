<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //Register a new user
    public function register(Request $request)
    {
        $request->validate([
            //'id' => 'incre'
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        //Autentication token
        $token = $user->createToken('newtoken')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    //User login
    public function login(Request $request)
    {
        $request->validate([

            'email' => 'required|string|',
            'password' => 'required|string'
        ]);

        //Checks if the emails user exists into the database
        $user = User::where('email', $request->email)->first();

        //Validates the user and checks the password
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => 'Invalid Credentials'
            ], 401);
        }
        $token = $user->createToken('newtoken')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    /*Logout do usuário
            public function logout(){
            auth()->user()->tokens()->delete();

            return [
                'message' => 'Logouting susessfuly and token has deleted.'
            ];
             }*/
}
