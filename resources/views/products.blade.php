@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    <h1>Products page</h1>
    @if(isset($search))
        <p>{{$search}}</p>
    @endif
@endsection