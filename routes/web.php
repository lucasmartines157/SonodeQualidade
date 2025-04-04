<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrarUsuarioController;

Route::get('/menu', function () {
     return view('paginas/telaMenu');
})->name('menu');

Route::get('/login', function () {
     return view('paginas/telaUsuario');
})->name('login');

Route::get('/dicas', function () {
     return view('paginas/telaDicas');
})->name('dicas');

Route::get('/perguntas', function () {
     return view('paginas/telaPerguntas');
})->name('faq');

Route::get('/relatorio', function () {
     return view('paginas/telaRelatorio');
})->name('relatorio');

Route::get('/diario', function () {
     return view('paginas/teladiario');
})->name('diario');

Route::get('/editar', function () {
     return view('paginas/telaeditar');
})->name('editar');

// Rota para o cadastro de usuários
Route::post('/registrar', [RegistrarUsuarioController::class, 'store'])->name('registrar');

// Rota para editar usuário
Route::put('/usuario/atualizar', [RegistrarUsuarioController::class, 'update'])->name('usuario.update');


// Rota para excluir usuário
Route::post('/usuario/destroy', [RegistrarUsuarioController::class, 'destroy']);


