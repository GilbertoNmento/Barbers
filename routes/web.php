<?php

use App\Http\Controllers\CadastrarBarbers;
use App\Http\Controllers\CadastrarCliente;
use App\Http\Controllers\Logins;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   return view('Login');
}); 

// Dashboard
route::get('/dashboard', function(){ 
    return view('Dashboard');
})->name('Dashboard.home');

//  Clientes
route::get('/cadastarCliente', [CadastrarCliente::class, 'cadastrarCliente'])->name('cadastrar.clientes');

route::get('/tabelaCliente', [CadastrarCliente::class, 'tabelaCliente'])->name('tabelaCliente.home');


Route::get('/cadastrar-cliente', function () {
    return view('CadastrarCliente');
})->name('cadastrar.cliente.view');


// Barbeiros


route::get('/cadastrarBarbeiro', [CadastrarBarbers::class, 'CadastrarBarbeiro'])->name('cadastrar.barbeiro');

route::get('/tela.cadastroBarbeiro', function(){
    return view('CadastrarBarbeiro');
})->name('form.cadastrobarbeiro');

route::get('/tabelaBarbeiro', [CadastrarBarbers::class, 'tabelaBarbeiro'])->name('tabelaBarbeiro.home');






//login

route::get('/valida/login', [Logins::class, 'validaUsuario'])->name('validar.usuario');

