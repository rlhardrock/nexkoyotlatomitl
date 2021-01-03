@extends('layouts.template')

@section('title', 'Bee')

@section('content')
    <h2>pagina web en blanco para renderizar abejas</h2>
    <a href="{{route('bees.create')}}">Crear Apiarios o Abejas</a>
    <ul>
        @foreach ($bees as $bee)
            <li>
                <a href="{{route('bees.show',$bee->id)}}">{{$bee->name}}</a>
                <br>
                {{route('bees.show',$bee->slug)}}
            </li>
        @endforeach
    </ul>

    {{$bees->links()}}

@endsection
