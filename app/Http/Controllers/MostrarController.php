<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Encomenda;

class MostrarController extends Controller
{
    //

    public function mostrar(Request $r){
       
        $pesquisa = $r->nome;

        $cliente = Cliente::where('nome',$pesquisa)->first();
        $clientes = Cliente::where('nome','like','%'.$pesquisa.'%')->with('encomenda')->get();

        return view('mostrar', [
            'pesquisa'=>$pesquisa,
            'cliente'=>$cliente,
            'clientes'=>$clientes
        ]);
    }
}
