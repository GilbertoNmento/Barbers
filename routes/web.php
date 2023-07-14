<?php

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

route::get('/cadastarCliente', [CadastrarCliente::class, 'cadastrarCliente'])->name('cadastrar.clientes');
route::get('/tabelaCliente', [CadastrarCliente::class, 'dashboard'])->name('dashboard.home');



Route::get('/cadastrar-cliente', function () {
    return view('CadastrarCliente');
})->name('cadastrar.cliente.view');

Route::get('/cadastrar-barbeiro', function () {
    return view('CadastrarBarbeiro');
})->name('cadastrar.barbeiro.view');

route::get('/cadastrarBarbeiro', [Cadas::class, 'cadastrarBarbeiro'])->name('cadastrar.barbeiro');

//route::get('/dashboard', function(){ 
 //   return view('Dashboard');
//})->name('Dashboard.home');

route::get('/valida/login', [Logins::class, 'validaUsuario'])->name('validar.usuario');

