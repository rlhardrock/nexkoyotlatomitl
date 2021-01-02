<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bee;


class BeeController extends Controller
{
    public function index(){
        /* $bees = Bee::all(); */
        $bees = Bee::paginate();
        return view('bees.index',compact('bees')) ;
    }

    public function create(){
        return view('bees.create') ;
    }

    public function show ($id){
        $kbee = Bee::find($id);
        return view('bees.show', compact('kbee')) ;
    }
}

// index=pg main      create=form       show=el. particular
