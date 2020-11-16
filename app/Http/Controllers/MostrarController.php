<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MostrarController extends Controller
{
    //

    public function mostrar(Request $r){
       
        $nome = $r->nome;

        $cliente = Cliente::where('id_cliente',$nome)->first();


        return view('mostrar', [
            'nome'=>$nome,
            'cliente'=>$cliente
        ]);
    }
}
