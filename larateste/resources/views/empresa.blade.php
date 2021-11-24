@extends('layouts.main')
@section('title','Filme Locadora')
@section('content')
<p>Locadora do {{$nome}}</p>

@if($nome == 'Pedro')
    <p>vc não é pedro</p>
@else
    <p>Seu nome é {{$nome}}</p>
@endif    
@for($i=0; $i < count($array);$i++)
<p>Pessoas na Locardora: {{$array[$i]}}</p>
@endfor

@foreach($numeros as $numeros)
    <!-- <p>{{$numeros}}</p> -->
    <p>{{$loop->index}}</p>
@endforeach 

@if($busca != '')
    <p>O usuario está buscando por {{$busca}}</p>
@endif
@endsection