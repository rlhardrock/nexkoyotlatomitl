<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\SpectreMail;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request){

        $request->validate([
            'name'=> 'required',
            'correo'=> 'required | email',
            'mensaje'=> 'required' | max(50),
        ]);

        $correo = new SpectreMail($request->all());
        Mail::to('rlhardrock@gmail.com')->send($correo);
        return redirect()->route('contactanos.index')->with('infovar', 'Mensaje enviado satisfactoriamente');
    }
}
