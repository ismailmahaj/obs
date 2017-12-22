<div id="videos">
    <div class="container">
        <div class="row espace">
        <h1 class="titre-black">{{trans('sections.videos')}}</h1>
        </div>
        <div data-aos="fade-left">
            <div class="row">
                @foreach($videos as $video)
                    @if($video->ordre <= 8 && $video->ordre != 0)
                    <div class="col-md-3">
                        <div class="thumb">
                        <a data-fancybox href="{{$video->lien}}">
                        <img src="{{ url('/storage/' . $video->miniature) }}">
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
                    <button type="button" class="btn btn-default bouton-articles">Voir plus
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
<hr style="border: 1px solid grey;">
