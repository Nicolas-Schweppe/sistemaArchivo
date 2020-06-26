<?php


Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('fotos/{numero?}',function($numero = 'sin numero'){//si no hay parametro sin numero
    return 'galeria de fotos : '.$numero;
})->where('numero','[0-9]+');//si no ingresa un numero = error
*/

Route::get('inicio', function () {
    return view('inicio');
})-> name('inicio');

Route::get('cargarArchivos', function () {
    return view('cargar');
})-> name('cargarArchivos');

Route::get('verArchivo', function () {
    return view('verArchivo');
})-> name('verArchivo');

Route::get('usuario', function () {
    return view('usuario');
})-> name('usuario');

Route::view('galeria','fotos',['numero'=> 500]);
