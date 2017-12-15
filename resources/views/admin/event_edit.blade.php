@extends('template.admin')

@section('content')
<div class="container">
    <h1>Modifier l'événement</h1>
    <form action="{{route('admin.event_update', ['id' => $event->id])}}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $event->id }}">
        <label>Titre :</label><br><input type="text" placeholder="titre" name="titre" value="{{ $event->titre }}"><br>
        <label>Description :</label><br><textarea id="" cols="30" rows="5" placeholder="contenu" name="description">{{ $event->description }}</textarea><br>
        <label>Date et heure:</label><br><input type="text" name="timestamp" id="datepicker" value="{{ $event->date }}"><br>
        <label>Lieu :</label><br><input type="text" placeholder="lieu" name="lieu" value="{{ $event->lieu }}"><br>
        <label>Adresse :</label><br><input type="text" placeholder="adresse" name="adresse" value="{{ $event->adresse }}"><br>
        <label>Lien billetterie :</label><br><input type="text" placeholder="URL de la billetterie" name="lien_billetterie" value="{{ $event->lien_billetterie }}"><br>
        <label>Lien image :</label><br><input type="text" placeholder="URL de l'image" name="lien_image" value="{{ $event->lien_image }}"><br>
        <input type="submit" value="Enregistrer">
    </form>
    <a href="{{route('admin.event_delete', ['id' => $event->id])}}" class="btn btn-danger">Supprimer</a>
</div>
@endsection

@push('script')
    <script>
            $( function() {
                $( "#datepicker" ).datetimepicker();
            } );
    </script>
@endpush