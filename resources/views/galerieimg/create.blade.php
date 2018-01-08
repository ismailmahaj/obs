@extends('layouts.default')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Post</h2>
        </div>
        <div class="pull-right">
        	<br/>
            <a class="btn btn-primary" href="{{ route('galerieimg.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
        </div>
    </div>
</div>

                     {!! Form::open(array('route' => 'galerieimg.store','method'=>'POST', 'files' => true)) !!}
  <div class="form-group">
            <strong>Fichier Image</strong>
            {!! Form::file('galerie_img', null, array('class' => 'form-control', 'enctype' => 'multipart/form-data')) !!}
            <!--<input type="file" name="lien_image" id="file">-->
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="submit" value="Upload" name="submit">
        </div>
{!! Form::close() !!}

@endsection