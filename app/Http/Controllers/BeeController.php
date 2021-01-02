<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bee;


class BeeController extends Controller
{
    public function index(){
        /* $bees = Bee::all(); */
        $bees = Bee::orderBy('name','asc')->paginate(25);
        return view('bees.index',compact('bees')) ;
    }

    public function create(){
        return view('bees.create') ;
    }

    public function store(Request $request){
        /* return $request->all();     Test de ver objeto enviado*/
        $kbee = new Bee();
        $kbee->name = $request->name;
        $kbee->ecogeography = $request->ecogeography;
        $kbee->ecosystem= $request->ecosystem;
        $kbee->latitude = $request->latitude;
        $kbee->weather = $request->weather;
        $kbee->job_function = $request->job_function;

        $kbee->save();

        return redirect()->route('bees.show', $kbee);
    }

    public function show (Bee $kbee){

        return view('bees.show', compact('kbee'));
    }

    public function edit(Bee $kbee){

        return view('bees.edit', compact('kbee'));
    }

    public function update(Request $request, Bee $kbee){
        $kbee->name = $request->name;
        $kbee->ecogeography = $request->ecogeography;
        $kbee->ecosystem= $request->ecosystem;
        $kbee->latitude = $request->latitude;
        $kbee->weather = $request->weather;
        $kbee->job_function = $request->job_function;

        $kbee->save();

        return redirect()->route('bees.show', $kbee);
    }
}

// index=pg main      create=form       show=el. particular
