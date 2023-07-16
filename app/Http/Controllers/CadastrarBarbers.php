<?php

namespace App\Http\Controllers;

use App\Models\Barbers;
use Illuminate\Http\Request;

class CadastrarBarbers extends Controller
{
    public function CadastrarBarbeiro( Request $request) {
        //dd($request);

        $cadastros= new Barbers();
        
        $cadastros->cpf=$request->cpf;
        $cadastros->nome=$request->nome;
        $cadastros->data=$request->data;

        $cadastros->save();

         // $cadastros=Clientes::all();
        return redirect()->route('tabelaBarbeiro.home');


    }

    public function tabelaBarbeiro(){
        //dd('estou aqui');
                $cadastros=Barbers::all();
                //dd($cadastros);
                return view('Barbeiros', compact('cadastros'));
                
            }
        
}
