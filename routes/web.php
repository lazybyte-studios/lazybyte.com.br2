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


Route::group([ 'prefix' => 'sistema', 'as' => 'sistema.'], function(){
    
    Route::get('/', function(){ 
        return view( "sistema/index" , [ "tema" => 'index' ]  );
    })-> name("index");

    Route::get('/dashboard/', function(){ 
        return view( "sistema/index",  [ "tema" => 'painel' ] );
    })-> name("dashboard");

    //Route::get('/', [NotaController::class, 'index'])->name('index');
});
