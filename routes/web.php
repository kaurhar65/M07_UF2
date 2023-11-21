<?php

use Illuminate\Support\Facades\Route;


//PRÁCTICA 1 RUTAS CONTROLADOR

Route::get('/sign/signin/{v1}/{v2}/{v3}/{v4}', [App\Http\Controllers\SignController::class, 'signIn']);
Route::get('/sign/signup/{v1}/{v2}/{v3}', [App\Http\Controllers\SignController::class, 'signUp']);



//-------------------ALTRES EXEMPLES DE RUTES---------------
Route::get('/', function () {
    return view('welcome');
});

Route::get('/getNom/{nom}', function ($nom) {
    return 'Hello World' . $nom;
});
// ('getNom/{aqui le pasas el valor de la varibale que le quieres pasar})

//es poden declarar mes de una variable
Route::get('/getNom/{nom}/{id}', function ($nom, $id) {
    return 'Hello World' . ' '.$nom . $id ;
});

Route::get('/getNom', function ($nom) {
    return 'Hello World' . $nom;
});

Route::get('/mosta', function () {
    return view('mosta');
});

// Route::get('/sign/signin/{v1}/{v2}', function($v1, $v2){
//     $titol_controlador = "hola " . $v1 . $v2;
//     return view('signIn').with('titol_vista', $titol_controlador);
// });

// Route::get('/sign/signup', function(){
//     $var = "hello";
//     return view('signUp') ->with('nomUsauari', 'valorDeLaVariable');
//     //return view('signUp') ->with('nomUsauari', $var);
// });


