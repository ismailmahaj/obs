@extends('layouts.default')
@section('content')
<div class="panel-heading">Tableau de Bord</div>

      <div class="panel-body">
        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
        </div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h2>ARTICLES - EVENEMENTS</h2>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-bordered text-center">
    <tr>
        <th class="text-center" width="80px">N° ID</th>
        <th class="text-center">TITRE</th>
        <th class="text-center">DATE</th>
        <th class="text-center">LIEU</th>
        <th class="text-center">ADRESSE</th>
        <th class="text-center">DESCRIPTION</th>
        <th class="text-center">LIEN BILLETERIE</th>
        <th class="text-center">LIEN IMAGE</th>
        <th width="140px" class="text-center">
            <a class="btn btn-success btn-sm" href="{{ url('home') }}"><i class="glyphicon glyphicon-plus"></i></a>
        </th>
    </tr>
@foreach ($posts as $post)
<tr class="text-center">
    <td>{{ ++$i }}</td>
    <td>{{ $post->titre }}</td>
    <td>{{ $post->date }}</td>
    <td>{{ $post->lieu }}</td>
    <td>{{ $post->adresse }}</td>
    <td>{{ $post->description }}</td>
    <td>{{ $post->lien_billetterie }}</td>
    <td>{{ $post->lien_image }}</td>
    <td>
        <a class="btn btn-info btn-sm" href="{{ route('posts.show',$post->id) }}"><i class="glyphicon glyphicon-th-large"></i></a>
        <a class="btn btn-primary btn-sm" href="{{ route('posts.edit',$post->id) }}"><i class="glyphicon glyphicon-pencil"></i></a>
        {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $post->id],'style'=>'display:inline']) !!}
        <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
        {!! Form::close() !!}
    </td>
</tr>
@endforeach
</table>
{!! $posts->render() !!}
@endsection