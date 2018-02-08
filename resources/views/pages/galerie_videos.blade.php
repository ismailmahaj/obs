@extends('template.base')
{{ $menuOn = false }}
@section('content')
<div class="container">
    <div class="row espace">
      <h1>GALERIE VIDEOS</h1>
    </div>
    <div data-aos="fade-left">
    <div class="row text-center">
    <?php $count = 0; ?>

        @foreach($videos as $video)
        
            @if($count < 24 && $video->ordre <= 24)
            <div style="margin-bottom: 10px;" class="col-md-3">
                <div class="thumb">
                <a data-fancybox="photos" target='_blank' href="{{ $video->lien_video }}">
                <img class='img-responsive preview center-block' src="{{ url('uploads/projet/galerie/videos/' . $video->img_video) }}">
                </a>
                </div>
            </div>
            @endif
            <?php $count++; ?>
        @endforeach
            
    </div>
</div>

</div>

@endsection