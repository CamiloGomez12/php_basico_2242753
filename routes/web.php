<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("variables" , function(){
    $mensaje = 20;
    //funcion nativa de php : analizar el contenido de la
    //variable: tipo de dato, datos contenidos
    var_dump($mensaje);
    echo "<hr />";
    $mensaje= "Hola 2242753";
    var_dump($mensaje);
} );

Route::get('arreglos' , function(){
    //Definir un arreglo en php
    $estudiantes = [ "Ana" , "Maria" , "Jorge"  ];
    print_r($estudiantes);
    echo "<pre>";
    print_r($estudiantes);
    echo "</pre>";

});