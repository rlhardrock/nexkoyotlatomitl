@extends('layouts.template')

@section('title', 'Bee Create')

{{-- agregar token de seguridad CSRF --}}

@section('content')
    <h2>pagina con destino para crear abejas o apiarios con formulario</h2>

        <form action="{{route('bees.store')}}" method="POST">

            @csrf

            <label><input placeholder="Nombre" type="text" name="name"><br></label>
            <label><input placeholder="Region" type="text" name="ecogeography"><br></label>
            <label><input placeholder="Ecosistema" type="text" name="ecosystem"><br></label>
            <label><input placeholder="Latitud" type="text" name="latitude"><br></label>
            <label><input placeholder="Clima" type="text" name="weather"><br></label>
            <label><input placeholder="Funcion" type="text" name="job_function"><br></label>
            <br>
            <br>
            <button type="submit">Aterrizar en Colmena</button>

        </form>



@endsection

