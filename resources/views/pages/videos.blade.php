@extends('template.base')
{{ $homePage = false }}
@section('content')
@include('partials.navbar_multi')
<div class="container">
    <div class="row espace">
      <h1>{{trans('sections.videos')}}</h1>
    </div>
    <div class="row">
        @foreach($videos as $video)
            <div class="col-md-3">
                <div class="thumb">
                <a data-fancybox href="{{$video->lien}}">
                <img src="{{ url('/storage/' . $video->miniature) }}">
                </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection