@extends('layouts.main')

@section('title', 'Configurações')

@section('content')
<h1>Options</h1>
<a href="/">Home</a>

@for($i = 1; $i < count($arr); $i++)
    <p>{{$i}}</p>
@endfor

@php 
    $name = "João";

    echo "<h1>$name</h1>"
@endphp

@foreach($nome as $nomes)
    <p>{{$nomes}}</p>
    <p>{{$loop->index}}</p>
@endforeach
@endsection