<?php


Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('fotos/{numero?}',function($numero = 'sin numero'){//si no hay parametro sin numero
    return 'galeria de fotos : '.$numero;
})->where('numero','[0-9]+');//si no ingresa un numero = error
*/

Route::get('inicio','ControladorVistas@inicio')-> name('inicio');

Route::get('cargarArchivos','ControladorVistas@cargarArchivos')-> name('cargarArchivos');

Route::get('verArchivo','ControladorVistas@verArchivos')-> name('verArchivo');

Route::get('usuarios','ControladorVistas@usuarios')-> name('usuarios');

Route::view('galeria','fotos',['numero'=> 500]);
