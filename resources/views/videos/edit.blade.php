@extends('layouts.default')

 

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit Post</h2>

        </div>

        <div class="pull-right">

            <br/>

            <a class="btn btn-primary" href="{{ route('posts.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>

        </div>

    </div>

</div>

{!! Form::model($video, ['method' => 'GET','route' => ['videos.edit', $video->id]]) !!}

    @include('videos.form')

{!! Form::close() !!}

@endsection