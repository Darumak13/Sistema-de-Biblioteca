<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AutorController;

use App\Models\Usuario;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('',[UsuarioController::class,'indexadm']);
Route::get('/usuarios',[UsuarioController::class,'index']);
Route::get('/usuarios/cadastro',[UsuarioController::class, 'cadastro']);
Route::get('/usuarios/cadastro/{id}',[UsuarioController::class, 'cadastro']);
Route::post('/usuarios/salvar',[UsuarioController::class,'salvar']);
Route::get('/usuarios/remover/{id}',[UsuarioController::class, 'remover']);


Route::get('',[AutorController::class,'indexadm']);
Route::get('/autores',[AutorController::class,'index']);
Route::get('/autores/cadastro',[AutorController::class, 'cadastro']);
Route::get('/autores/cadastro/{id}',[AutorController::class, 'cadastro']);
Route::post('/autores/salvar',[AutorController::class,'salvar']);
Route::get('/autores/remover/{id}',[AutorController::class, 'remover']);

