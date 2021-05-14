@extends('layout.app')

@section('title_page', "vestiti")

@section('content')
    <h1>Vestiti</h1>
    <button><a href="{{route("dresses.create")}}">crea nuovo prodotto</a></button>
    <div style="display: flex; justify-content: space-between">
        @foreach ($dresses as $dress)
            <div style="text-align: center">
                <img src="{{$dress["immagine"]}}" alt="">
                <p><strong>MARCA:</strong> {{$dress["marca"]}}</p>
                <p><strong>TIPO:</strong> {{$dress["tipo"]}}</p>
                <p><strong>TAGLIA:</strong> {{$dress["taglia"]}}</p>
                <p><strong>COLORE:</strong> {{$dress["colore"]}}</p>
                <p><strong>COSTO:</strong> {{$dress["costo"]}} €</p>
                <p><strong>SESSO:</strong> {{$dress["sesso"]}}</p>
                <button><a href="{{route("dresses.show", ["dress" => $dress['id']])}}">Dettaglio</a></button>
            </div>
        @endforeach
    </div>
@endsection