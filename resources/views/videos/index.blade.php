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
            <h2>IMAGE + LIEN YOUTUBE (HTTPS://WWW...)</h2>
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
        <th width="80px" class="text-center">N° ID</th>
        <th class="text-center">IMAGE</th>
        
        <th class="text-center">LIEN YOUTUBE</th>
        
        <th width="140px" class="text-center">
            <a class="btn btn-success btn-sm" href="{{ route('videos.create') }}"><i class="glyphicon glyphicon-plus"></i></a>
        </th>
    </tr>
@foreach ($videos as $video)
<tr>
    <td>{{ $video->id }}</td>
    <td>{{ $video->img_video }}</td>
    <td>{{ $video->lien_video }}</td>
    
    <td class="text-center">
        <a class="btn btn-info btn-sm" href="{{ route('videos.show',$video->id) }}"><i class="glyphicon glyphicon-th-large"></i></a>
        <!-- <a class="btn btn-primary btn-sm" href="{{ route('videos.edit',$video->id) }}"><i class="glyphicon glyphicon-pencil"></i></a> -->
        {!! Form::open(['method' => 'DELETE','route' => ['videos.destroy', $video->id],'style'=>'display:inline']) !!}
        <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
        {!! Form::close() !!}
    </td>
</tr>
@endforeach
</table>
{!! $videos->render() !!}
@endsection