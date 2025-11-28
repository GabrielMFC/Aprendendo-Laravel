@extends("layouts.main")

@section('title', 'Eventos')

@section('content')
    <link rel="stylesheet" href="/css/events.css">
    <div class="centralize">
        <h1>Meus Eventos</h1>
        <ul class="eventsListContainer centralize" style="list-style: none;">
            @foreach($events as $event)
                    <li class="eventContainer centralize">
                        <h3>{{ $event->name }}</h3>
                        <p>{{ $event->description }}</p>
                        <img src="/build/assets/event_placeholder.jpg" alt="">
                    </li>
            @endforeach
        </ul>
    </div>
@endsection