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

           {{ Form::open(array('route' => 'galerieimg.store', 'files' => true, 'enctype' => 'multipart/form-data')) }}

 
  
    {!! Form::file('galerie_img', null, array('class' => 'form-control', 'enctype' => 'multipart/form-data')) !!}
    {{ Form::submit('Upload') }}
{{ Form::close() }}

@endsection