<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

//PRÁCTICA 1 RUTAS CONTROLADOR

Route::get('/sign/signin/{v1}/{v2}/{v3}/{v4}', [App\Http\Controllers\SignController::class, 'signIn']);
Route::get('/sign/signup/{v1}/{v2}/{v3}', [App\Http\Controllers\SignController::class, 'signUp']);


//PRÁCTICA 2 
// Route::post('/login/professor',[App\Http\Controllers\loginController::class, 'professor']);
// Route::post('/login/alumne',[App\Http\Controllers\loginController::class, 'alumne']);
// Route::post('/login/centre',[App\Http\Controllers\loginController::class, 'centre']);

Route::get('/errorAcces',[App\Http\Controllers\loginController::class, 'error']) ->name('errorAcces');
Route::post('/login', [App\Http\Controllers\loginController::class, 'login']) -> middleware('LoginCheck');

//PRÁCTICA 3 VISTES
Route::get('/signin', [App\Http\Controllers\SignController::class, 'signInPractica3']);
Route::get('/signup', [App\Http\Controllers\SignController::class, 'signUpPractica3']);





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

// Route::post('/login/professor', function(){
//     $email = Request('email');
//     return view('professor').with('titol_vista', $email);

// });
