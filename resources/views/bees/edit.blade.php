@extends('layouts.template')

@section('title', 'Bee Edit')

{{-- agregar token de seguridad CSRF --}}

@section('content')
    <h2>pagina con destino para reconstruir abejas o apiarios con formulario</h2>

        <form action="{{route('bees.update', $kbee)}}" method="POST">

            @csrf

            @method('PUT')

            <label><input placeholder="Nombre" type="text" name="name" value="{{old('name',$kbee->name)}}"></label>
            @error('name') <br> <small>{{$message}}</small>@enderror <br><br>
            <label><input placeholder="Region" type="text" name="ecogeography" value="{{old('ecogeography',$kbee->ecogeography)}}"></label>
            @error('ecogeography') <br> <small>{{$message}}</small>@enderror <br><br>
            <label><input placeholder="Ecosistema" type="text" name="ecosystem" value="{{old('ecosystem',$kbee->ecosystem)}}"></label>
            @error('ecosystem') <br> <small>{{$message}}</small>@enderror <br><br>
            <label><input placeholder="Latitud" type="text" name="latitude" value="{{old('latitude',$kbee->latitude)}}"></label>
            @error('latitude') <br> <small>{{$message}}</small>@enderror <br><br>
            <label><input placeholder="Clima" type="text" name="weather" value="{{old('weather',$kbee->weather)}}"></label>
            @error('weather') <br> <small>{{$message}}</small>@enderror <br><br>
            <label><input placeholder="Funcion" type="text" name="job_function" value="{{old('job_function',$kbee->job_function)}}"></label>
            @error('job_function') <br> <small>{{$message}}</small>@enderror <br><br>
            <br>
            <br>
            <button type="submit">Reconstruir Colmena</button>

        </form>



@endsection


