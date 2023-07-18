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
        return redirect()->route('tabelaCliente.home');


    }

    public function tabelaCliente(){
//dd('estou aqui');
        $cadastros=Clientes::all();
        //dd($cadastros);
        return view('Clientes', compact('cadastros'));
        
    }

    public function edit($id){
        //dd($id);
        $cliente = Clientes::where('id', $id)->first();
        //dd($cadastro);
        return view('clienteEdit', compact('cliente'));
    }

    public function update(Request $request){

            //dd($request);
        $data=[
            'cpf'=>$request->cpf,
            'nome'=>$request->nome,
            'telefone'=>$request->telefone,
        ];
        Clientes::where('id',$request->id)->update($data);
        return redirect()->route('tabelaCliente.home');

    }

    public function destroy($id){
        //dd($id);
        Clientes::where('id', $id)->delete();
        return redirect()->route('tabelaCliente.home');
    }
}
