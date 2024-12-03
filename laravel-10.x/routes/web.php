<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\EmprestimoController;
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

Route::get('/',[AdministrativoController::class,'indexadm']);


Route::get('/usuarios',[UsuarioController::class,'index']);
Route::get('/usuarios/cadastro',[UsuarioController::class, 'cadastro']);
Route::get('/usuarios/cadastro/{id}',[UsuarioController::class, 'cadastro']);
Route::post('/usuarios/salvar',[UsuarioController::class,'salvar']);
Route::get('/usuarios/remover/{id}',[UsuarioController::class, 'remover']);

Route::get('/autores',[AutorController::class,'index']);
Route::get('/autores/cadastro',[AutorController::class, 'cadastro']);
Route::get('/autores/cadastro/{id}',[AutorController::class, 'cadastro']);
Route::post('/autores/salvar',[AutorController::class,'salvar']);
Route::get('/autores/remover/{id}',[AutorController::class, 'remover']);

Route::get('/livros',[LivroController::class,'index']);
Route::get('/livros/cadastro',[LivroController::class, 'cadastro']);
Route::get('/livros/cadastro/{id}',[LivroController::class, 'cadastro']);
Route::post('/livros/salvar',[LivroController::class,'salvar']);
Route::get('/livros/remover/{id}',[LivroController::class, 'remover']);

Route::get('/emprestimos',[EmprestimoController::class,'index']);
Route::get('/emprestimos/cadastro',[EmprestimoController::class, 'cadastro']);
Route::get('/emprestimos/cadastro/{id}',[EmprestimoController::class, 'cadastro']);
Route::post('/emprestimos/salvar',[EmprestimoController::class,'salvar']);
Route::get('/emprestimos/remover/{id}',[EmprestimoController::class, 'remover']);