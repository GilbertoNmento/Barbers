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

route::get('/cliente/editar/{id}', [CadastrarCliente::class,'edit'])->name('edit.form');
route::put('/cliente/editar/update', [CadastrarCliente::class, 'update'])->name('cadastro.update');
route::delete('/cliente/delete/{id}', [CadastrarCliente::class,'destroy'])->name('cadastro.cliente.delete');


// Barbeiros


route::get('/cadastrarBarbeiro', [CadastrarBarbers::class, 'CadastrarBarbeiro'])->name('cadastrar.barbeiro');

route::get('/tela.cadastroBarbeiro', function(){
    return view('CadastrarBarbeiro');
})->name('form.cadastrobarbeiro');

route::get('/tabelaBarbeiro', [CadastrarBarbers::class, 'tabelaBarbeiro'])->name('tabelaBarbeiro.home');

route::get('/barbeiro/editar/{id}', [CadastrarBarbers::class, 'edit'])->name('barbeiroEdit.form');
route::put('/barbeiro/editar/update', [CadastrarBarbers::class, 'update'])->name('barbeiro.update');
route::delete('/{id}', [CadastrarBarbers::class,'destroy'])->name('cadastroBarbeiro.delete');





//login

route::get('/valida/login', [Logins::class, 'validaUsuario'])->name('validar.usuario');



