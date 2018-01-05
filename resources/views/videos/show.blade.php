@extends('layouts.default')

 

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2> Show Post</h2>

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

            <strong>Title:</strong>

            {{ $post->titre}}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Content:</strong>

            {{ $post->description}}

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>date:</strong>

            {{ $post->date}}

        </div>

    </div>

</div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>lieu:</strong>

            {{ $post->lieu}}

        </div>

    </div>

</div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>adreesse:</strong>

            {{ $post->adresse}}

        </div>

    </div>

</div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>billeterie:</strong>

            {{ $post->lien_billetterie}}

        </div>

    </div>

</div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>image:</strong>

            {{ $post->lien_image}}
            {{ $post->img_video}}

        </div>

    </div>

</div>

@endsection