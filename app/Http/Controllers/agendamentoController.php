<?php

namespace App\Http\Controllers;

use App\Models\agendamentos;
use App\Models\Barbers;
use App\Models\Clientes;
use App\Models\horarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class agendamentoController extends Controller
{
    public function agendamento (){

        $clientes=Clientes::all();
        $horarios=horarios::all();
        $barbeiros=Barbers::all();

        // dd($clientes, $horarios, $barbeiros);


        return view('agendamento', compact('clientes', 'horarios', 'barbeiros'));

    }
    
    public function cadastrarAgendamento (Request $request){

        //dd($request);

        $data= date('Y-m-d ');

        $cadastros= new agendamentos();

        $cadastros->cpf=$request->cpf;
        $cadastros->nome=$request->nome;
        $cadastros->barbeiro=$request->barbeiro;
        $cadastros->horario=$request->horario;
        $cadastros->data=$data;

        $cadastros -> save();

        return redirect()->route('tabela.horarios');

    }


    public function tabelaHorarios()
{
    $clientes = Clientes::all();
    $horarios = horarios::all();
    $barbeiros = Barbers::all();
    $data = date('Y-m-d');

    $agendamentos = DB::table('agendamentos')
        ->select('nome', 'cpf', 'barbeiro', 'horario', 'data')
        ->where('data', $data)
        ->get();

   
    $cadastros = agendamentos::all();

    return view('listahorarios', compact('clientes', 'horarios', 'barbeiros', 'agendamentos', 'cadastros'));
}


    // public function tabelaHorarios(){

    //    //$agendamento=agendamentos::all();
    //    //dd($agendamento);
       
    //    $clientes=Clientes::all();
    //    $horarios=horarios::all();
    //    $barbeiros=Barbers::all();

    //    // dd($clientes, $horarios, $barbeiros);

       
    //     // dd($data);

    //     $data= date('Y-m-d ');

    //     $agendamentos=DB::table('agendamentos')
    //     ->select('nome', 'cpf', 'barbeiro', 'horario', 'data')
    //     ->where('data', $data)
    //     ->get();

    //     //dd($agendamentos);

        
    //     return view('listahorarios', compact('clientes', 'horarios', 'barbeiros', 'agendamentos'));
    // }
    
}
