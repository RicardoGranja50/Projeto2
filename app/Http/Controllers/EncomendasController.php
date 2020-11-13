<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encomenda;

class EncomendasController extends Controller
{
    //

    public function index(){

        $encomendas = Encomenda::where('id_encomenda', '>','0')->with('cliente')->get();
        
		return view ('encomendas.index', [
			'encomendas'=>$encomendas
		]);
    }

    public function show(Request $r){

        $idEncomenda = $r->id;

        $encomendas = Encomenda::where('id_encomenda',$idEncomenda)->with('cliente')->first();
		return view('encomendas.show',[
			'encomendas'=>$encomendas
		]);
    }
}
