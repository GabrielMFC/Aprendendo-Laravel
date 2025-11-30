@extends("layouts.main")

@section('title', 'Eventos')

@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{$event->image}}" alt="Imagem do evento" class="img-fluid">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{$event->name}}</h1>
                <p>{{$event->location}}</p>
                <p>Participantes</p>
                <p>Dono do evento: Gabriel</p>
                <a href="#">Confirmar presença</a>
            </div>
            <div class="col-md-12" id="description-container">
                <h2>Sobre o evento:</h2>
                <p>{{$event->description}}</p>
            </div>
        </div>
    </div>
@endsection