<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
//cliente
    public function formulario_buscador()
{
    //mostrar formulario del metabuscador
    return view('metabuscador');
}
//servidor:llegan los datos aqui
     public function buscar()
     {
         //1. almacenar los datos transmitidos en respectivas variables
         $termino=$_POST["termino"];
         $motores=$_POST["motores"];
         //2. determinar cual motor de busqueda fue el elegido
         switch($motores){
         case 1://redireccionar a google de busqueda
            return redirect()->to("https://www.google.com.co/search?q=$termino");
            break;
         case 2:
            return redirect()->to("https://www.bing.com/search?q=$termino");
            break;
         case 3:
            return redirect()->to("https://duckduckgo.com/?q=$termino&t=hc&va=u&ia=web");
            break;
         case 4:
                return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
    }
    //print_r($_POST);
    }}
