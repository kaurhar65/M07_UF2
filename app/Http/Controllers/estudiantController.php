<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;

//Controlador que té les funcions CRUD per un usuari que sigui professor

class estudiantController extends Controller
{
    function index(){
        $llistaAlum = Usuari::where('rol', 'estudiant')->get();
        return View("centre.profe")->with('listaAlumno', $llistaAlum);
    }

    function create(){
        return View("estudiant.addEs");
    }

    function edit($id){
        $alumno = Usuari::find($id);
        return View("estudiant.editarEs")->with("alumno", $alumno);
    }

    function store(Request $request){
        $usuari = new Usuari();

        $usuari->nom = $request->nom;
        $usuari->cognoms = request('cognoms');
        $usuari->password = request('password');
        $usuari->email = request('email');
        $usuari->rol = request('rol');
        $usuari->actiu = request()->has('actiu');

        $usuari->save();
        
        $listaAlum= Usuari::where('rol', 'estudiant')->get();
        return View("centre.profe")->with('listaAlumno', $listaAlum);
    }

    function update($id){
        $usuari = Usuari::find($id);

        $usuari->id = request('id');
        $usuari->nom = request('nom');
        $usuari->cognoms = request('cognoms');
        $usuari->password = request('password');
        $usuari->email = request('email');
        $usuari->rol = request('rol');
        $usuari->actiu = request()->has('actiu');

        $usuari->save();
        $listaAlum = Usuari::where('rol','estudiant')->get();
        return view('centre.profe')->with('listaAlumno',$listaAlum);
    }

    function destroy($id){
        $user = Usuari::find($id);
        $user->delete();
        $listaAlum = Usuari::where('rol','estudiant')->get();
        return view('centre.profe')->with('listaAlumno', $listaAlum);
    }
}
