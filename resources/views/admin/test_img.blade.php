@extends('template.admin')

@section('content')
<div class="container">
    <h1>Créer un événement</h1>
    <form action="{{route('admin.event_store_img')}}" method="POST">
        {{ csrf_field() }}
        <label>Lien image :</label><br><input type="file" name="lien_image" accept="image/*"><br>
        <input type="submit" value="Créer">
    </form>
</div>
@endsection