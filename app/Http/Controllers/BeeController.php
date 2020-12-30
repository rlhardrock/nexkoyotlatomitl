<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeeController extends Controller
{
    public function index(){
        return view('bees.index') ;
    }

    public function create(){
        return view('bees.create') ;
    }

    public function show ($ekosystem){
        return view('bees.show', compact('ekosystem')) ;
    }
}

// index=pg main      create=form       show=el. particular
