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
        $cadastros->Nome=$request->Nome;
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
        
    public function edit($id){
        //dd($id);
        $barbeiro = Barbers::where('id', $id)->first();
        
        
        return view('BarbeiroEdit', compact('barbeiro'));
    }
    public function update (Request $request){
//dd($request);
        $data=[
            'cpf'=>$request->cpf,
            'Nome'=>$request->Nome,
            'data'=>$request->data,
        ];
        //dd($data);  
        Barbers::where('id',$request->id)->update($data);
        return redirect()->route('tabelaBarbeiro.home');

    }

    public function destroy($id) {
        //dd($id);

        Barbers::where('id', $id)->delete();
        return redirect()->route('tabelaBarbeiro.home');
    }    
    
}
