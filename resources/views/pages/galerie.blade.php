<div id="galerie">
<div class="container">
    <div class="row espace">
      <h1 class="titre-white">{{trans('sections.photos')}}</h1>
    </div>
    <div data-aos="fade-right">
        <div class="row">
                <?php $count = 0; ?>
                @foreach($photos as $photo)
                    @if($count < 8)
                        <div class='col-md-3'>
                            <div class='thumb'>
                                <a data-fancybox='photos' href="{{ url('/storage/' . $photo->lien) }}">
                                    <img class='img-responsive preview center-block' src="{{ url('/storage/'.$photo->lien)}}" alt='{{ $photo->nom }}'>
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
            
            <a href="{{route('photos')}}" id="voir-plus-images">
                <button type="button" class="btn btn-default bouton-images">Voir plus
                </button>
            </a>
        </div>
    </div>
</div>
</div>
