<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Registrar um novo usuário
    public function register(Request $request){

        $request->validate([
            //'id' => 'incre'
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' =>'required|string|confirmed'
        ]);

        $user = User::create([
             'name' => $request->name,
             'email' => $request->email,
             'password' => bcrypt($request->password)
    ]);

    //Token de autenticação
        $token = $user->createToken('newtoken')->plainTextToken;

        $response = [
            'user'=> $user,
            'token' => $token
        ];

        return response($response, 201);

  }

}
