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
@endsection
