<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModalidadeController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TreinoController;
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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/',[HomeController::class,'index'])->name('home'); //Página "Home"
Route::get('/sobre', [SobreController::class,'index'])->name('sobre');//Página "Sobre"
Route::get('/modalidade', [ModalidadeController::class,'index'])->name('modalidade');//Página "Modalidade"
Route::get('/noticia', [NoticiasController::class,'index'])->name('noticia');//Página "Noticias"
Route::get('/treino', [TreinoController::class,'index'])->name('treino');//Página "Treino"
Route::get('/contato', [ContatoController::class,'index'])->name('contato');//Página "Contato"
Route::get('/modalidades/musculacao', [ModalidadeController::class, 'musculacao'])->name('modalidades.musculacao');



