<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    //PRÁCTICA 2
    public function signIn($v1, $v2, $v3, $v4){
        $variableCont = 'Hola' . ' ' . $v1 . ' ' . $v2 . ' ' . $v3 . ' ' . $v4;
        return view('signIn') ->with('variableCont' , $variableCont);
    }

    public function signUp($v1, $v2, $v3){
        $variableCont2 = 'Hola' . ' ' . $v1 . ' ' . $v2 . ' ' . $v3;
        return view('signUp') ->with('variableCont2' , $variableCont2);;
    }

    //PRÁCTICA 3
    public function signInPractica3(){
        return view('practica03.signin');
    }
    public function signUpPractica3(){
        return view('practica03.signup');
    }
}

