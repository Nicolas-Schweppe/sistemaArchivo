<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class ControladorVistas extends Controller
{
    public function inicio(){
        return view('inicio');
    }

    public function cargarArchivos(){
        return view('cargarArchivos');
    }

    public function verArchivos(){
        $archivo=App\Archivo::all();
        
        return view('verArchivos',compact('archivo'));
    }

    public function usuarios(){
        return view('usuarios');
    }
}
