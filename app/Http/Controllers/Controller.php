<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

/**
 * function mostrar(){
 *  return view('mostra');
 
 * }
 * 
 * 
 * function mostrar(){
 *  return view('mostra)->with('identificador',$id)
 * 
 * entre comillas simple(identificador) hay que poner el mismo nombre en el view
 * }
 */