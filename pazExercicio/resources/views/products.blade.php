@extends('layouts.layout')

@section('title', 'paz no Oriente Médio')

@section('titulo')
    <h1>Produtos</h1>
@endsection

@section('content')
    @foreach($produtos as $produto)
        <p>O nome do produto: {{$produto}} </p>
    @endforeach
@endsection