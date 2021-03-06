<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
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
    // Token de autenticação
    //     $token = $user->createToken('newtoken')->plainTextToken;
    //     // $response = [
    //     //     'user'=> $user,
    //     //     'token' => $token
    //     // ];
        // $user->save();
        return redirect('/login');

  }

    //Login do Usuário
        public function login(Request $request){
           $request->validate([

            'email' => 'required|string|',
            'password' =>'required|string'
        ]);

        //checar se o email do usuário existe no banco de dados
        $user = User::where('email', $request->email)->first();

        //valida o usuário e checa a senha

        if(!$user || !Hash::check($request->password, $user->password)){
            return redirect('/');
        }
        $token = $user->createToken('newtoken')->plainTextToken;
        $response = [
            'user'=> $user,
            'token' => $token
        ];

        return redirect('/register');

   }

        /*Logout do usuário
            public function logout(){
            auth()->user()->tokens()->delete();

            return [
                'message' => 'Logouting susessfuly and token has deleted.'
            ];
             }*/
}
