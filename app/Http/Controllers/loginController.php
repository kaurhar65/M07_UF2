<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;


class loginController extends Controller
{

    //------------Control Login práctica crud-----------------
    public function loginCrud(){
        $email=Request('email');
        $password=Request('password');

        $consulta = Usuari::where('email', $email)->where('password', $password)->first();

        
        if($consulta->rol == "professor"){
            $lista_alumne = Usuari::where('rol', "estudiant") -> get();
            return view('centre.profe')->with('listaAlumno' , $lista_alumne);
        }
        else if($consulta->rol == "admin"){
            $lista_profe = Usuari::where('rol', "professor") -> get();
            return view('centre.admin')->with('lista' , $lista_profe);
        }else if($consulta->rol == "estudiant"){
            return view('centre.alumne');
        }
        else{
            return view('practica02.error');
        }
    }

    //--------------------Páctica 3 -Login--------------
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

    public function datosUser(){
        $nom= request('nom');
        $cognom = request('cognom');
        $email= request('email');
    
        return view('practica03.mostrarInfo')->with([
            'nom' => $nom,
            'cognom' => $cognom,
            'email' => $email,
            ]);

        
    }


}
