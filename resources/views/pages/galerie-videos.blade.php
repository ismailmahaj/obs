<div id="videos">
    <div class="container">
        <div class="row espace">
        <h1 class="text-center">{{trans('sections.videos')}}</h1>
        </div>
        <div data-aos="fade-left">
            <div class="row">
                @foreach($videos as $video)
                    @if($video->ordre <= 8 && $video->ordre != 0)
                    <div class="col-md-3">
                        <div class="thumb">
                        <a data-fancybox="photos" href="{{$video->lien_video}}">
                        <img src="{{ url('uploads/projet/galerie/videos/' . $video->img_video) }}">
                        </a>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="row espace">
            <div class="col-md-2 col-md-offset-5 more">
                
                <a href="{{ route('videos') }}" id="voir-plus-images">
                    <button type="button" class="btn btn-default bouton-images">Voir plus
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
