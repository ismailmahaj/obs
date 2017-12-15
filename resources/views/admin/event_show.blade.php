@extends('template.admin')

@section('content')

<div class="container">
    <h1>Gestion des events</h1>
        
        <ul class="list-group">
            <li class="list-group-item">
                <div class="row">
                    <div class="col-xs-2">
                        <img src="{{ $event->lien_image }}" alt="" class="img-responsive">
                    </div>
                    <div class="col-xs-10">
                        <h2>{{ $event->titre }}</h2>
                        <p>{{ $event->date }} à {{ $event->heure }}</p>
                        <p>{{ $event->lieu }}, {{ $event->adresse }}</p>
                        <p>{{ $event->description }}</p>
                        <p>Lien pour réservation : {{ $event->lien_billeterie }}</p>
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="{{route('admin.event_edit', ['id' => $event->id])}}" class="btn btn-primary">Editer</a>
                        </div>
                    </div>
                    </div>
                </div>
            </li>
        </ul>

</div>

@endsection