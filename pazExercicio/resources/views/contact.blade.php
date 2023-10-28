@extends('layouts.layout')

@section('titulo')
    <h1>Formulario</h1>
@endsection

@section('content')
    @if($formulario)
        <form action="/contact/processsar-dados" method="post">
            @csrf
            <label for="nome">Nome: </label>
            <input type="text" name="nome">
            <label for="mensagem">Mensagem: </label>
            <input type="text" name="mensagem">
            <input type="submit" value="Enviar">
        </form>
    @else
        <h2>Mensagem enviada</h2>
        <p>{{$nome}} </p>
        <p>{{$mensagem}} </p>
    @endif
@endsection