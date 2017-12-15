@extends('template.admin')

@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
    <h1>Créer un événement</h1>
    <form action="{{route('admin.event_store')}}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id">
        <label>Titre :</label><br><input type="text" placeholder="titre" name="titre"><br>
        <label>Description :</label><br><textarea id="" cols="30" rows="5" placeholder="contenu" name="description"></textarea><br>
        <label>Date et heure:</label><br><input type="text" name="timestamp" id="datepicker"><br>
        <label>Lieu :</label><br><input type="text" placeholder="lieu" name="lieu"><br>
        <label>Adresse :</label><br><input type="text" placeholder="adresse" name="adresse"><br>
        <label>Lien billetterie :</label><br><input type="text" placeholder="URL de la billetterie" name="lien_billetterie"><br>
        <label>Lien image :</label><br><input type="text" placeholder="URL de l'image" name="lien_image" ><br>
        <input type="submit" value="Créer">
    </form>
</div>
@endsection

@push('script')
    <script>
            $( function() {
                $( "#datepicker" ).datetimepicker();
            } );
    </script>
@endpush