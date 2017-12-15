@extends('template.admin')

@section('content')

<div class="container">
    <h1>Gestion des events</h1>
        <ul class="list-group">
            @foreach($events as $event)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-xs-2">
                        <img src="{{ $event->lien_image }}" alt="" class="img-responsive">
                    </div>
                    <div class="col-xs-10">
                        <a href="{{route('admin.event_show', ['id' => $event->id])}}"><h2>{{ $event->titre }}</h2></a>
                        <p>{{ $event->date }} à {{ $event->heure }}</p>
                        <p>{{ $event->lieu }}, {{ $event->adresse }}</p>
                        <p>{{ $event->description }}</p>
                        <p><a href="{{ $event->lien_billeterie }}">Réserver ici</a></p> 
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
</div>

@endsection