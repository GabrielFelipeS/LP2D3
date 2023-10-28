@extends('layouts.layout')
@section('title', 'paz no Oriente Médio')

@section('titulo')
    <h1>Produto</h1>
@endsection

@section('content')
    @if(empty($produto)) 
        <p>{{$erro}} </p>
    @else 
        <p>O nome do produto é: {{$produto}} </p>
    @endif
@endsection