@extends('template.base')
{{ $menuOn = false }}
@section('content')
<div class="container">
    <div class="row espace">
      <h1>GALERIE IMAGES</h1>
    </div>
    <div data-aos="fade-right">
        <div class="row">
                <?php $count = 0; ?>
                @foreach($photos as $Media)
                    @if($count < 24)
                        <div style="margin-bottom: 10px;" class='col-md-3'>
                            <div class='thumb'>
                                <a data-fancybox='photos' href="{{  url('uploads/projet/galerie/' . $Media->galerie_img) }}">
                                    <img class='img-responsive preview center-block' src="{{  url('uploads/projet/galerie/' . $Media->galerie_img)}}" alt='{{ $Media->nom }}'>
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