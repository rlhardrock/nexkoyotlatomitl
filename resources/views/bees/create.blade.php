@extends('layouts.template')

@section('title', 'Bee Create')

{{-- agregar token de seguridad CSRF --}}

@section('content')
    <h2>pagina con destino para crear abejas o apiarios con formulario</h2>

        <form action="{{route('bees.store')}}" method="POST">

            @csrf

            <label><input placeholder="Nombre" type="text" name="name" value="{{old('name')}}"></label>
            @error('name') <br> <small>{{$message}}</small>@enderror <br><br>
            <label><input placeholder="Region" type="text" name="ecogeography" value="{{old('ecogeography')}}"></label>
            @error('ecogeography') <br> <small>{{$message}}</small>@enderror <br><br>
            <label><input placeholder="Ecosistema" type="text" name="ecosystem" value="{{old('ecosystem')}}"></label>
            @error('ecosystem') <br> <small>{{$message}}</small>@enderror <br><br>
            <label><input placeholder="Latitud" type="text" name="latitude" value="{{old('latitude')}}"></label>
            @error('latitude') <br> <small>{{$message}}</small>@enderror <br><br>
            <label><input placeholder="Clima" type="text" name="weather" value="{{old('weather')}}"></label>
            @error('weather') <br> <small>{{$message}}</small>@enderror <br><br>
            <label><input placeholder="Funcion" type="text" name="job_function" value="{{old('job_function')}}"></label>
            @error('job_function') <br> <small>{{$message}}</small>@enderror <br><br>
            <br>
            <br>
            <button type="submit">Aterrizar en Colmena</button>

        </form>



@endsection

