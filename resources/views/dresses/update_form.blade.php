@extends('layout.app')

@section('title_page', 'update form')

@section('content')

    @if ($errors->any()) 
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{route('dresses.update', ["dress" => $dress['id']])}}" method="post">
        @csrf
        @method('PUT')

        <label for="taglia"> UPDATE taglia</label>
        <input type="text" name="taglia" id="taglia" value="{{$dress->taglia}}">

        <label for="tipo">tipo</label>
        <input type="text" name="tipo" id="tipo" value="{{$dress->tipo}}">

        <label for="colore">colore</label>
        <input type="text" name="colore" id="colore" value="{{$dress->colore}}">

        <label for="sesso">sesso</label>
        <input type="text" name="sesso" id="sesso" value="{{$dress->sesso}}">

        <label for="costo">costo</label>
        <input type="number" name="costo" id="costo" value="{{$dress->costo}}">

        <label for="marca">marca</label>
        <input type="text" name="marca" id="marca" value="{{$dress->marca}}">

        <label for="immagine">immagine</label>
        <textarea name="immagine" id="immagine" cols="30" rows="10">{{$dress->immagine}}</textarea>

        <button type="submit">submit</button>
    </form>
@endsection