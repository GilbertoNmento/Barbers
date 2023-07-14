<?php

namespace App\Http\Controllers;

use App\Models\Barbers;
use Illuminate\Http\Request;

class CadastrarCliente extends Controller
{
    public function cadastrarBarbeiro( Request $request) {
        dd($request);

        $cadastros= new Barbers();
        
        $cadastros->cpf=$request->cpf;
        $cadastros->nome=$request->nome;
        $cadastros->data=$request->data;

        $cadastros->save();
        //dd($cadastros);
         // $cadastros=Clientes::all();
        return redirect()->route('dashboard.home');


    }

    public function dashboard(){
//dd('estou aqui');
        $cadastros=Barbers::all();
        //dd($cadastros);
        return view('Dashboard', compact('cadastros'));
        
    }
}
