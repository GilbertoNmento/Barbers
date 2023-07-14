<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class CadastrarCliente extends Controller
{
    public function cadastrarCliente( Request $request) {
        //dd($request);

        $cadastros= new Clientes();
        
        $cadastros->cpf=$request->cpf;
        $cadastros->nome=$request->nome;
        $cadastros->telefone=$request->telefone;

        $cadastros->save();

         // $cadastros=Clientes::all();
        return redirect()->route('cadastrar.cliente.view');


    }

    public function dashboard(){
//dd('estou aqui');
        $cadastros=Clientes::all();
        //dd($cadastros);
        return view('Clientes', compact('cadastros'));
        
    }
}
