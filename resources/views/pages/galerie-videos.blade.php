<div id="videos">
    <div class="container">
        <div class="row espace">
        <h1 class="text-center">{{trans('sections.videos')}}</h1>
        </div>
        <div data-aos="fade-left">
            <div class="row text-center">
            <?php $count = 0; ?>
        
                @foreach($videos as $video)
                
                    @if($count < 12 && $video->ordre <= 12)
                    <div style="margin-bottom: 10px;" class="col-md-3">
                        <div class="thumb">
                        <a data-fancybox="photos" href="{{ $video->lien_video }}">
                        <img class='img-responsive preview center-block' src="{{ url('uploads/projet/galerie/videos/' . $video->img_video) }}">
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
                
                <a href="{{ route('galerie_videos') }}" id="voir-plus-images">
                    <button type="button" class="btn btn-default bouton-images">Voir plus
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
