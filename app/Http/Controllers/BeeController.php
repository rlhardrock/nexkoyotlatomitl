<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeeController extends Controller
{
    public function index(){
        return "pagina web en blanco para renderizar abejas" ;
    }

    public function create(){
        return "pagina con destino para crear ciber apiarios con formulario" ;
    }

    public function show ($specialty){
        return "pagina web en blanco para renderizar abejas $specialty" ;
    }
}

// index=pg main      create=form       show=elemto particular
