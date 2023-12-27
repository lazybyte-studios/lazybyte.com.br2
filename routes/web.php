<?php

use App\Http\Controllers\Wireframes\WireframeController;
use Illuminate\Support\Facades\Route;


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get("/wireframe", [WireframeController::class, "index"])->name("wireframe.index");

// Route::group([ 'prefix' => 'notas', 'as' => 'notas.'], function(){
//     Route::get('/', [NotaController::class, 'index'])->name('index');
// });
