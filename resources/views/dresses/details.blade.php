@extends('layout.app')

@section('title_page', 'dettaglio')

@section('content')
    <div style="display: flex; justify-content: center">
        <div style="text-align: center">
            <img src="{{$dress["immagine"]}}" alt="">
            <p><strong>MARCA:</strong> {{$dress["marca"]}}</p>
            <p><strong>TIPO:</strong> {{$dress["tipo"]}}</p>
            <p><strong>TAGLIA:</strong> {{$dress["taglia"]}}</p>
            <p><strong>COLORE:</strong> {{$dress["colore"]}}</p>
            <p><strong>COSTO:</strong> {{$dress["costo"]}} €</p>
            <p><strong>SESSO:</strong> {{$dress["sesso"]}}</p>
        </div>
    </div>
@endsection