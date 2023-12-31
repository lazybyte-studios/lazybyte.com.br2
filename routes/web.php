<?php

# importação das classes de dependências
use Illuminate\Support\Facades\Route;

# rota retornando o arquivo views\home.blade.php
Route::get("/", function(){
    return view("home");
});

Route::get("/notas", function(){
    return redirect("_notas");
})->name("notas");


// Route::group([ 'prefix' => 'notas', 'as' => 'notas.'], function(){
//     Route::get('/', [NotaController::class, 'index'])->name('index');
// });
