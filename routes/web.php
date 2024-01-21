<?php

# importação das classes de dependências
use Illuminate\Support\Facades\Route;

# rota retornando o arquivo views\home.blade.php
Route::get("/", function(){
    return view("home");
}) ->name('inicio');

# redireciona para uma pasta
Route::get("/notas", function(){
    return redirect("https://notas.lazybyte.com.br");
    # return redirect()->route('inicio');
})->name("notas");


Route::group([ 'prefix' => 'sistema', 'as' => 'sistema.'], function(){

    Route::get('/', function(){
        return view( "sistema/index" );
    })-> name("painel");

    Route::get('/login/', function(){
        return view( "sistema/index",  [ "operacao" => 'login' ] );
    })-> name("login");

    //Route::get('/', [NotaController::class, 'index'])->name('index');
});
