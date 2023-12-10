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
            $professors = [
                [
                    'id' => 1,
                    'nom' => 'Oriol',
                    'email' => 'oriol@exemple.com',
                    'curs' => '1',
                ],
                [
                    'id' => 2,
                    'nom' => 'Joana',
                    'email' => 'joana@exemple.com',
                    'curs' => '1',
                ],
                [
                    'id' => 3,
                    'nom' => 'Carla',
                    'email' => 'carla@exemple.com',
                    'curs' => '2',
                ]
                ];
            return view('practica02.centre')->with('email',$email)->with('professors', $professors);
        }
        else{
            return view('practica02.error');
        }
    
    } 
    public function error(){
        return view('practica02.error');
    }

}