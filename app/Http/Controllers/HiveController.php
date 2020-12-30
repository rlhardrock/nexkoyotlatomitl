<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//invoke cuando se utiliza para una sola vista
class HiveController extends Controller
{
    public function __invoke(){
        return view('hive');
    }
}

