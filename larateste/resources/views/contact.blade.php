@extends('layouts.main')
@section('title','Contato')
@section('content')
<h1>Pagina de contanto</h1>
<p>90 é maior do que 100</p>
@if(90>100)
    <p>Está certo</p>
@else
    <p>Está errado</p>
@endif
<p>Onde vc mora??</p>
@if($nome == 'Ricardo' && $rua == 'joao Mathis')
    <p>é não. Meu nome é {{$nome}} </p>
@else
    <p>Meu nome é {{$nome}} moro na {{$rua}} e meu telefone {{$telefone}}</p>
@endif

@for($i = 0 ; $i < count($pessoas);$i++)
    <p>{{$pessoas[$i]}} - {{$i}}</p>
@endfor

@foreach($array as $array)
    <p>{{$array}}</p>
    <p>{{$loop->index}}</p>
@endforeach
<a href="/">Voltar para home</a>
@endsection