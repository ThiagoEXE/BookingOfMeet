<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InvitationController extends Controller{

    public function accept(Request $request){
        $request->validate([
           'acceptance' => 'required|boolean'

        ]);

        if($request->validate(true)){
            return Redirect::to('/login');
        }else{
            return response([
                'message' => 'You do not accept the invitation'
            ], 401); // CASO A PESSOA REJEITE O CONVITE RECEBERA A MENSAGEM
        }

    }

    public function show()
    {
        $booking = Booking::findOrFail($id);//pendente subir a classe Booking

        return view('/invitation', compact($booking));/*criar uma blade para buscar pelo id a
        data e hora, tem e descrição da reunião*/
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *      * @return \Illuminate\Http\Response
     */
}
