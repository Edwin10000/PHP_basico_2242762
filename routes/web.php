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
//callback
Route::get('variables' , function(){
    //definir una variable
    //en php
    $mensaje = 20;
    //funcion var_dump:analizar una variable
    //muestra tipo de dato y valor
    print_r($mensaje);
    echo "<hr />";
    $mensaje = true;
    var_dump($mensaje);
});

Route::get('arreglos' , function(){
    //Arreglo: estructura de datos
    $estudiantes = [ "AN" => 'Ana' ,
                     'MA' => "Maria" ,
                     'JO' => 1 ];
    echo "<pre>";
    var_dump($estudiantes);
    echo '</pre>';
});

Route::get("paises" , function(){

    $paises= [  "Colombia" => [
        "capital" => "Bogota",
        "moneda" => "Peso",
        "poblacion" => 51

                              ],
                "Peru" => [
                    "capital" => "Lima",
                    "moneda" => "Sol",
                    "poblacion" => 32.8
                          ],
                "Paraguay" => [
                    "capital" => "Asuncion",
                    "moneda" => "Guarani",
                    "poblacion" => 7.3

                    ]];
$suma = 0;
    foreach($paises as $nombre => $pais){
        $suma += $pais["poblacion"];
    }

    echo "La suma de los paises es $suma";

    echo "<pre>";
    print_r($paises["Colombia"]["poblacion"]);
    echo "</pre>";
});
