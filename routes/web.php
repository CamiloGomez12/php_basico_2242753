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

Route::get('paises' , function(){
     $paises = [
    "colombia" =>[
        "capital" => "Bogota",
        "moneda" => "Pesos",
        "poblacion" => 51
    ],
    "peru" =>[
        "capital" => "Lima",
        "moneda" => "Sol",
        "poblacion" => 33.19
    ],
    "paraguay" =>[
        "capital" => "Asuncion",
        "moneda" => "Guarani",
        "poblacion" => "7"
    ]
];
//Recor el arreglo de paises
 foreach($paises as $indice => $valor){
     echo "<h1>$indice<h1>";
    echo"<pre>";
    print_r($valor["capital"]);
    echo"</pre>";
    echo "<hr/>";
 }
});

   