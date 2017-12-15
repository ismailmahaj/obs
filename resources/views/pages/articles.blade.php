@extends('template.base')
{{ $menuOn = false }}
@section('content')
@include('partials.navbar_multi')
<div class="container" id="presse">
    <div class="row espace">
        <h1>{{ trans('sections.presse' )}}</h1>
    </div>
            <div class="row">
        <div class="col-md-3"><div class="thumb">
                <a data-fancybox="gallery" href="/images-oussama/articles/Article-1.jpg"><img class="img-responsive preview center-block" src="{{url('/images-oussama/articles/Article-1.jpg')}}" alt=""></a>
                </div></div>
        <div class="col-md-3"><div class="thumb">
                    <a data-fancybox="gallery" href="/images-oussama/articles/Article-2.jpg"><img class="img-responsive preview center-block" src="{{url('/images-oussama/articles/Article-2.jpg')}}" alt="" ></a>
                </div></div>
        <div class="col-md-3"><div class="thumb">
                    <a data-fancybox="gallery" href="/images-oussama/articles/Article-4.jpg"><img class="img-responsive preview center-block" src="{{url('/images-oussama/articles/Article-4.jpg')}}" alt="" ></a>
                </div></div>
        <div class="col-md-3"><div class="thumb">
                    <a data-fancybox="gallery" href="/images-oussama/articles/Article-5.jpg"><img class="img-responsive preview center-block" src="{{url('/images-oussama/articles/Article-5.jpg')}}" alt="" ></a>
                </div></div>
        </div>
        <div class="row">
            <div class="col-md-3"><img class="img-responsive" src  ="{{url('/img/iconepresse/lacapitale.png')}}"></div>
            <div class="col-md-3"><img class="img-responsive" src  ="{{url('/img/iconepresse/lacapitale.png')}}"></div>
            <div class="col-md-3"><img class="img-responsive" src  ="{{url('/img/iconepresse/leconomiste.png')}}"></div>
            <div class="col-md-3"><img class="img-responsive" src  ="{{url('/img/iconepresse/dimabladna.png')}}"></div>
        </div>
</div>
@endsection
