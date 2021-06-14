<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //controladores esta compuesto de acciones 
    //cada accion esta vinculada a su correspondiente ruta 

    public function mostrar_formulario(){
        //mostrar la vista del metabuscador
        return view('metabuscador');
    }

    //realizar busqueda del mortor 
    public function buscar_termino(){
        //realizar la busqueda
       $termino = $_POST["termino"];
       $motor = $_POST["motores"];

       //La busqueda se realizara conforme al motor
       //de busqueda elegido 
       switch($motor){
           case 1: return redirect() -> to("https://www.google.com/search?q=$termino");
            break;
           case 2:  return redirect() -> to("https://www.bing.com/search?q=$termino");
            break;
            case 3:  return redirect() -> to("https://espanol.search.yahoo.com/search?p=$termino");
            break;
            case 4:  return redirect() -> to("https://www.youtube.com/results?search_query=$termino");
            break;
            case 5:  return redirect() -> to("https://www3.animeflv.net/browse?q=$termino");
            break;
            case 6:  return redirect() -> to("https://www.facebook.com/search/top?q=$termino");
            break;
            case 7:  return redirect() -> to("https://www.tiktok.com/search?q=$termino");
            break;
            case 8:  return redirect() -> to("https://gigablast.com/search?c=main&qlangcountry=en-us&q=$termino");
            break;
            case 9:  return redirect() -> to("http://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&rsv_idx=1&tn=baidu&wd=$termino");
            break;
            case 10:  return redirect() -> to("https://www.sogou.com/sogou?query=$termino");
            break;
            
       }
    }
}
