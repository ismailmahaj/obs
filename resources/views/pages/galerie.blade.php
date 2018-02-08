<div id="galerie">
<div class="container">
    <div class="row espace">
      <h1 class="titre-white">{{trans('sections.photos')}}</h1>
    </div>
    <div data-aos="fade-right">
        <div class="row">
                <?php $count = 0; ?>
                @foreach($photos as $media)
                    @if($count < 12)
                        <div style="margin-bottom: 10px;" class='col-md-3'>
                            <div class='thumb'>
                                <a data-fancybox='photos' href="{{  url('uploads/projet/galerie/' . $media->galerie_img) }}">
                                    <img class='img-responsive preview center-block' src="{{  url('uploads/projet/galerie/' . $media->galerie_img)}}" alt='{{ $media->nom }}'>
                                </a>
                            </div>
                        </div>
                    @endif
                    <?php $count++; ?>
                @endforeach
        </div>
    </div>
    <div class="row espace">
        <div class="col-md-2 col-md-offset-5 more">
            
        <a href="{{ route('photos') }}" id="voir-plus-images">
                    <button type="button" class="btn btn-default bouton-images">Voir plus
                    </button>
                </a>
       
        </div>
    </div>
</div>
</div>
