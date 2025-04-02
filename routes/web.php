<?php

use Illuminate\Support\Facades\Route;

Route::get('/menu', function () {
    return view('paginas/telaMenu');
});

Route::get('/usuario', function () {
    return view('paginas/telaUsuario');
});

Route::get('/dicas', function () {
    return view('paginas/telaDicas');
});

Route::get('/perguntas', function () {
    return view('paginas/telaPerguntas');
});

Route::get('/relatorio', function () {
    return view('paginas/telaRelatorio');
});