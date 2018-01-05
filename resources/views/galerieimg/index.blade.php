@extends('layouts.default')
@section('content')
<div class="panel-heading">Galerie Image</div>

      <div class="panel-body">
        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
        </div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>PHOTOCRUD</h2>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-bordered">
    <tr>
        <th width="80px">No</th>
        <th>image</th>
        
        <th>Lien vidéo</th>
        
        <th width="140px" class="text-center">
            <a class="btn btn-success btn-sm" href="{{ route('galerieimg.create') }}"><i class="glyphicon glyphicon-plus"></i></a>
        </th>
    </tr>
@foreach ($medias as $video)
<tr>
    <td>{{ ++$i }}</td>
    <td>{{ $video->galerie_img }}</td>
    
    
    <td>
        <a class="btn btn-info btn-sm" href="{{ route('galerieimg.show',$video->id) }}"><i class="glyphicon glyphicon-th-large"></i></a>
        <a class="btn btn-primary btn-sm" href="{{ route('galerieimg.edit',$video->id) }}"><i class="glyphicon glyphicon-pencil"></i></a>
        {!! Form::open(['method' => 'DELETE','route' => ['galerieimg.destroy', $video->id],'style'=>'display:inline']) !!}
        <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
        {!! Form::close() !!}
    </td>
</tr>
@endforeach
</table>
{!! $medias->render() !!}
@endsection