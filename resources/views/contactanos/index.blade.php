@extends('layouts.template')

@section('title', 'CONTACTANOS')

@section('content')
    <h1>Contactanos dejando un mensaje</h1>

    <form action="{{route('contactanos.store')}}" method="POST">

        @csrf

        <label><input placeholder="Nombre" type="text" name="name"></label><br>
        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br><br>
        <label><input placeholder="Correo" type="text" name="correo"></label><br>
        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br><br>
        <label><textarea placeholder="Mensaje" type="text" name="mensaje"></textarea></label><br>
        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br><br>

        <button type="submit">ENVIAR ...</button>
    </form>

    @if (session('infovar'))
        <script>
            alert("{{session('infovar')}}");
        </script>
    @else

    @endif

@endsection
