<?php


use Illuminate\Support\Facades\Route;

Route::get('/menu', function () {
     return view('paginas/telaMenu'); })->name('menu');

Route::get('/login', function () {
     return view('paginas/telaUsuario'); })->name('login');

Route::get('/dicas', function () {
     return view('paginas/telaDicas'); })->name('dicas');

Route::get('/perguntas', function () {
     return view('paginas/telaPerguntas'); })->name('faq');

Route::get('/relatorio', function () {
     return view('paginas/telaRelatorio'); })->name('relatorio');

Route::get('/diario', function () {
     return view('paginas/teladiario'); })->name('diario');


