@extends('layouts.main')

@section('title', 'Criar Eventos')

@section('content')
    <link rel="stylesheet" href="/css/events.css">
    <div class="centralize">
        <h1>Criar Eventos</h1>
        <form class="centralize formEventContainer" action="/events" method="POST">
            @csrf
            <input type="date" placeholder="Data..." name="date">
            <input type="text" placeholder="Nome..." name="name">
            <textarea placeholder="Descrição..." name="description"></textarea>
            <input type="text" placeholder="Localização..." name="location">
            <label for="acess">O evento é privado?</label>
            <select name="private" id="acess">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
            <input type="submit" value="Criar!" style="width: 70%;" name="create">
        </form>
    </div>
@endsection