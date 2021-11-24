@extends('layouts.main')
@section('title','Parâmetros de URL')
@section('content')
<!-- <p>Recebendo o id {{$id}}</p> -->
@if($id!=null)
    <p>Recebendo o id {{$id}}</p>
@endif

@for($i = 0; $i < count($arr); $i++)
    <p>{{$arr[$i]}} -- {{$i}}</p>
    @if($i == 3)
        <p>Achau o {{$i}}</p>
    @endif
@endfor    
@php
    $nome = 'joao';
    echo $nome;
@endphp

@foreach($names as $names)
    <p>{{$loop->index}}</p>
    <p>O nome do ser é {{$names}}</p>
@endforeach
@endsection