<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;


class loginController extends Controller
{
    public function login(){

        $email = Request('email');
        $password = Request('password');
        if($email === 'professor@email.com'){
            return view('practica02.professor')->with('email',$email);
        }
        else if($email === 'alumne@email.com'){
            return view('practica02.alumne')->with('email',$email);
        }
        else if($email === 'centre@email.com'){
            return view('practica02.centre')->with('email',$email);
        }
        else{
            return view('practica02.error');
        }
    
    } 

    public function error(){
        return view('practica02.error');
    }

}