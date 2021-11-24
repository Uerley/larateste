@extends('layouts.main')
@section('title','Busca')
@section('content')

@for($i = 0; $i < count($cade);$i++)
    <p>Cadê o Pessoal {{$cade[$i]}} </p>
@endfor

@foreach($cade as $cade)
    <p>Velho {{$cade}}</p>
    <p>Oi {{$loop->index}}</p>
@endforeach

<h1>Achou o Fernardo</h1>
@endsection
