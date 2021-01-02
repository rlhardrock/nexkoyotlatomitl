@extends('layouts.template')

@section('title', 'Bee Edit')

{{-- agregar token de seguridad CSRF --}}

@section('content')
    <h2>pagina con destino para reconstruir abejas o apiarios con formulario</h2>

        <form action="{{route('bees.update', $kbee)}}" method="POST">

            @csrf

            @method('PUT')

            <label><input placeholder="Nombre" type="text" name="name" value="{{$kbee->name}}"><br></label>
            <label><input placeholder="Region" type="text" name="ecogeography" value="{{$kbee->ecogeography}}"><br></label>
            <label><input placeholder="Ecosistema" type="text" name="ecosystem" value="{{$kbee->ecosystem}}"><br></label>
            <label><input placeholder="Latitud" type="text" name="latitude" value="{{$kbee->latitude}}"><br></label>
            <label><input placeholder="Clima" type="text" name="weather" value="{{$kbee->weather}}"><br></label>
            <label><input placeholder="Funcion" type="text" name="job_function" value="{{$kbee->job_function}}"><br></label>
            <br>
            <br>
            <button type="submit">Reconstruir Colmena</button>

        </form>



@endsection

