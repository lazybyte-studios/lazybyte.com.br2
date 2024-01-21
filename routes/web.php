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


// Route::group([ 'prefix' => 'sistema', 'as' => 'sistema.'], function(){

//     Route::get('/', function( ){
//         return view( "sistema/index" );
//     })-> name("painel");

//     # enviando diretamente sem usar a controller
//     Route::get('/usuarios/{op?}', function( $op = null ){
//         return view( "sistema/usuarios",  [ "op" => $op ] );
//     })->name("usuarios")-> name("usuarios");

// });

# enviando parâmetro através da rota
# Route::get('/produto/{id?}', [ProdutoController::class, 'show'])->name('produto.show');


