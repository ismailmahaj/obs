@extends('template.base')
{{ $menuOn = false }}
{{ $homePage = false }}
@section('content')
@include('partials.navbar_multi')
<div class="container">
    <div class="row espace">
      <h1>{{trans('sections.photos')}}</h1>
    </div>
   <?php
    $c = 0;
    $cp = $photos->count();
    ?>
                @foreach($photos as $photo)
                 <?php  $c++; ?> 
              @if($c==1)  <div class="row">   @endif
                    <div class='col-md-3'>
                        <div class='thumb'>
                            <a data-fancybox='photos' href="{{ url('/storage/' . $photo->lien) }}">
                                <img class='img-responsive preview center-block' src="{{ url('/storage/'.$photo->lien)}}" alt='{{ $photo->nom }}'>
                            </a>
                        </div>
                    </div>
                  @if($c == 4||$c >=$cp)    </div> <?php $c = 0?> @endif
                 
                @endforeach
    </div>
</div>
@endsection