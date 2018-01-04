    @if(isset($menuOn ))
    <?php $navEventLink = "" ?>
    @else
    <?php $navEventLink = "events-link" ?>
    @endif
    
    <div class="mobile-menu" id="mobile-menu"> 
		<h3 class="text-center">Menu</h3> <img src="http://www.shoredreams.net/wp-content/uploads/2014/02/show-menu-icon.png">
	</div>
    <nav id="navbar" class="navbar navbar-default navigation" role="navigation">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <div class="container">
                <ul class="nav navbar-nav">
                        <li><a class="liens" href="{{route('pages.index')}}" >@lang('nav.accueil')</a></li>
                        <li><a class="liens events-link" href="{{route('pages.index')}}#evenements" >@lang('nav.evenements')</a></li>
                        <li><a class="liens events-link" href="{{route('pages.index')}}#galerie" >@lang('nav.photos')</a></li>
                        <li><a class="liens events-link" href="{{route('pages.index')}}#videos" >@lang('nav.videos')</a></li>
                        <li><a class="liens events-link" href="{{route('pages.index')}}#biographie">@lang('nav.bio')</a></li>
                        <li><a class="liens events-link" href="{{route('pages.index')}}#presse" >@lang('nav.presse')</a></li>
                        <li><a class="liens events-link" href="{{route('pages.index')}}#contact" >@lang('nav.contact')</a></li>
                        <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        {{ config('app.locale') }}
    </a>
    <ul class="dropdown-menu">
        @foreach (config('app.languages') as $language)
        
            @if ($language != config('app.locale'))
                <li>
                    <a href="{{ route('lang.switch', $language) }}">{{$language}}</a>
                </li>
            @endif
        @endforeach
    </ul>
</li>
                </ul>
                
                
                <!--<ul class="nav navbar-nav nav-right pull-right">
                    <li><a href="https://www.facebook.com/" target="_blank" class="social-media-head"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/" target="_blank" class="social-media-head"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li><a href="https://instagram.com/" target="_blank" class="social-media-head"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                </ul>-->


   

          <a href="#" class="lang">
        {{ config('app.locale') }}
    </a>
    
        @foreach (config('app.languages') as $language)
        
            @if ($language != config('app.locale'))

                
                    <a class="lang fr" href="{{ route('lang.switch', $language) }}">{{$language}}</a>


                
            @endif
        @endforeach

   
    
   </ul>   


                

            
                
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>


@section('navmobile')
<div class="wrap">
<span class="decor"></span>
<nav>
  <ul class="primary">
    <li>
      <a href="">Menu Mobile</a>
      <ul class="sub">
        <li><a href="{{route('pages.index')}}">{{ trans('nav.accueil') }}</a></li>
        <li><a href="{{route('pages.index')}}#evenements">{{ trans('nav.evenements') }}</a></li>
        <li><a href="{{route('pages.index')}}#galerie">{{ trans('nav.photos') }}</a></li>
        <li><a href="{{route('pages.index')}}#videos">{{ trans('nav.videos') }}</a></li>
        <li><a href="{{route('pages.index')}}#biographie">{{ trans('nav.bio') }}</a></li>
        <li><a href="{{route('pages.index')}}#presse">{{ trans('nav.presse') }}</a></li>
        <li><a href="{{route('pages.index')}}#contact">{{ trans('nav.contact') }}</a></li>
      </ul>
    </li>
  </ul>
</nav>
</div>

@endsection;

