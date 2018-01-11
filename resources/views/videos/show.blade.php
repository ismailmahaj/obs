@extends('layouts.default')

 

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Voir Info Image/Vidéo</h2>

        </div>

        <div class="pull-right">

            <br/>

            <a class="btn btn-primary" href="{{ route('posts.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>

        </div>

    </div>

</div>

<div class="row">

    
    
    
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Image:</strong>
            {{ $video->img_video}}
            <br>
            <strong>Lien Vidéo:</strong>
            {{ $video->lien_video}}
        </div>

    </div>

</div>

@endsection