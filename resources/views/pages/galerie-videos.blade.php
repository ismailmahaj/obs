<div id="videos">
    <div class="container">
        <div class="row espace">
        <h1 class="titre-white">{{trans('sections.videos')}}</h1>
        </div>
        <div data-aos="fade-left">
            <div class="row">
                @foreach($events as $event)
                    @if($event->ordre <= 8 && $event->ordre != 0)
                    <div class="col-md-3">
                        <div class="thumb">
                        <a data-fancybox href="{{$event->lien}}">
                        <img src="{{ url('/storage/' . $event->miniature) }}">
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
