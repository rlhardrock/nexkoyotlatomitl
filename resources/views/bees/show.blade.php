@extends('layouts.template')

@section('title', 'Bee '.$kbee->name)

@section('content')
    <h2>pagina web en blanco para renderizar abejas {{$kbee->name}} </h2>
    <br>
    <p>Ecosistema: {{$kbee->ecosystem}}</p>
    <br>
    <p>Region: {{$kbee->ecogeography}}</p>
    <br>
    <a href="{{route('bees.index')}}">Retorno a la Colmena</a>
    <br>
    <a href="{{route('bees.edit', $kbee)}}">Recuperar Enjambre</a>

    <form action="{{route('bees.destroy', $kbee)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Liberar Colonia</button>
    </form>


@endsection
