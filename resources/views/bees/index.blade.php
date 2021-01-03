@extends('layouts.template')

@section('title', 'Bee')

@section('content')
    <h2>pagina web en blanco para renderizar abejas</h2>
    <a href="{{route('bees.create')}}">Crear Apiarios o Abejas</a>
    <ul>
        @foreach ($bees as $kbee)
            <li>
                <a href="{{route('bees.show',$kbee)}}">{{$kbee->name}}</a>
               <br>

            </li>
        @endforeach
    </ul>

    {{$bees->links()}}

@endsection
