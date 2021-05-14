@extends('layout.app')

@section('title_page', 'form')

@section('content')
    <form action="{{route('dresses.store')}}" method="post">
        @csrf
        @method('POST')

        <label for="taglia">taglia</label>
        <input type="text" name="taglia" id="taglia">

        <label for="tipo">tipo</label>
        <input type="text" name="tipo" id="tipo">

        <label for="colore">colore</label>
        <input type="text" name="colore" id="colore">

        <label for="sesso">sesso</label>
        <input type="text" name="sesso" id="sesso">

        <label for="costo">costo</label>
        <input type="number" name="costo" id="costo">

        <label for="marca">marca</label>
        <input type="text" name="marca" id="marca">

        <label for="immagine">immagine</label>
        <textarea name="immagine" id="immagine" cols="30" rows="10"></textarea>

        <button type="submit">submit</button>
    </form>
@endsection