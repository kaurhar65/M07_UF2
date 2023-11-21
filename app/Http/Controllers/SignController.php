<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{

    public function signIn($v1, $v2, $v3, $v4){
        $variableCont = 'Hola' . ' ' . $v1 . ' ' . $v2 . ' ' . $v3 . ' ' . $v4;
        return view('signIn') ->with('variableCont' , $variableCont);
    }

    public function signUp($v1, $v2, $v3){
        $variableCont2 = 'Hola' . ' ' . $v1 . ' ' . $v2 . ' ' . $v3;
        return view('signUp') ->with('variableCont2' , $variableCont2);;
    }
}

