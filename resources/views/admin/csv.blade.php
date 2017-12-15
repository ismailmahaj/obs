@extends('template.admin')

@section('content')
<a href="{{route('admin.generate_csv')}}"><h1>Télécharger fichier CSV</h1></a>
@endsection