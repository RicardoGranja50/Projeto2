<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encomenda;
use App\Models\Cliente;
use App\Models\Vendedor;
use App\Models\Produto;
use App\Models\EncomendaProduto;


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

        $encomendas = Encomenda::where('id_encomenda',$idEncomenda)->with(['cliente','vendedor','produtos'])->first();
		return view('encomendas.show',[
			'encomendas'=>$encomendas
		]);
    }

    public function create(){

        $clientes=Cliente::all();
        $produtos=Produto::all();
        $vendedores=Vendedor::all();

        return view('encomendas.create',[
            'clientes'=>$clientes,
            'produtos'=>$produtos,
            'vendedores'=>$vendedores
        ]);
        
    }

    public function store(Request $req){

        $novaEncomenda=$req->validate([
            'id_cliente'=>['numeric','required'],
            'id_vendedor'=>['numeric','required'],
            'data'=>['nullable','date'],
            'observacoes'=>['nullable','min:10','max:200']
        ]);
        
        $produto=$req->id_produto;
        $encomenda=Enocmenda::create($novaEncomenda);
        $encomenda->encomenda_produto()->attach($produto);

        return redirect()->route('encomendas.index',[
            'id'=>$encomenda->id_encomenda,
        ]);
        
    }
}
