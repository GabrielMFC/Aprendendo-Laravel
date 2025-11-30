@extends("layouts.main")

@section('title', 'Eventos')

@section('content')
    <link rel="stylesheet" href="/css/events.css">
        <div class="centralize">
            <h1>Meus Eventos</h1>
            <ul class="centralize" style="list-style: none;">
                @foreach($events as $event)
                        <li class="eventContainer centralize">
                            <h3>{{ $event->name }}</h3>
                            <p>{{ $event->description }}</p>
                            <img src="/img/events/{{$event->image}}" alt="Imagem do evento">
                            <a href="/events/{{$event->id}}">Saber mais</a>
                        </li>
                @endforeach
            </ul>
        </div>
@endsection