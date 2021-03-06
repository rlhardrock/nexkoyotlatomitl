<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bee;
use App\Http\Requests\StoreBee;


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

    public function store(StoreBee $request){
       /* return $request->all();     Test de ver objeto enviado*/

       /* regla de validacion antigua */
       /*  $request->validate([
            'name' => 'required' | max(15)
        ]); */

        /* modo convencional

        $kbee = new Bee();

        $kbee->name = $request->name;
        $kbee->ecogeography = $request->ecogeography;
        $kbee->ecosystem= $request->ecosystem;
        $kbee->latitude = $request->latitude;
        $kbee->weather = $request->weather;
        $kbee->job_function = $request->job_function;

        $kbee->save(); */

        $kbee = Bee::create($request->all());

        return redirect()->route('bees.show', $kbee);
    }

    public function show (Bee $kbee){

        return view('bees.show', compact('kbee'));
    }

    public function edit(Bee $kbee){

        return view('bees.edit', compact('kbee'));
    }

    public function update(Request $request, Bee $kbee){

        $request->validate([
            'name'=>'required',
            'ecogeography'=>'required',
            'ecosystem'=>'required',
            'latitude'=>'required',
            'weather'=>'required',
            'job_function'=>'required',
        ]);

       /*  $kbee->name = $request->name;
        $kbee->ecogeography = $request->ecogeography;
        $kbee->ecosystem= $request->ecosystem;
        $kbee->latitude = $request->latitude;
        $kbee->weather = $request->weather;
        $kbee->job_function = $request->job_function;

        $kbee->save();  */

        $kbee->update($request->all());

        return redirect()->route('bees.show', $kbee);
    }

    public function destroy(Bee $kbee){
        $kbee->delete();
        return redirect()->route('bees.index');
    }

}

// index=pg main      create=form       show=el. particular
