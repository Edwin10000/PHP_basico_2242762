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
         case 5:
                    return redirect()->to("https://yandex.com/search/?text=$termino");
                    break;
         case 6:
                        return redirect()->to("https://es.ask.com/web?q=$termino");
                        break;
         case 7:
                            return redirect()->to("https://search.naver.com/search.naver?where=nexearch&sm=top_hty&fbm=1&ie=utf8&query=$termino");
                            break;
        case 8:
                                return redirect()->to("https://www.ecosia.org/search?q=$termino");
                                break;
        case 9:
                                    return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                                    break;
        case 10:
                                        return redirect()->to("https://search.seznam.cz/?q=$termino");
                                        break;
    }
    //print_r($_POST);
    }}
