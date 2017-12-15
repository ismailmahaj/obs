    @if(isset($menuOn ))
    <?php $navEventLink = "" ?>
    @else
    <?php $navEventLink = "events-link" ?>
    @endif
    
    <nav id="navbar" class="navbar navbar-default navigation" role="navigation">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <div class="container">
                <ul class="nav navbar-nav">
                        <li><a class="liens" href="{{route('pages.index')}}" >{{ trans('nav.accueil') }}</a></li>
                        <li><a class="liens events-link" href="{{route('pages.index')}}#evenements" >{{ trans('nav.evenements') }}</a></li>
                        <li><a class="liens events-link" href="{{route('pages.index')}}#galerie" >{{ trans('nav.photos') }}</a></li>
                        <li><a class="liens events-link" href="{{route('pages.index')}}#videos" >{{ trans('nav.videos') }}</a></li>
                        <li><a class="liens events-link" href="{{route('pages.index')}}#biographie">{{ trans('nav.bio') }}</a></li>
                        <li><a class="liens events-link" href="{{route('pages.index')}}#presse" >{{ trans('nav.presse') }}</a></li>
                        <li><a class="liens events-link" href="{{route('pages.index')}}#contact" >{{ trans('nav.contact') }}</a></li>
                </ul>
                
                
                <ul class="nav navbar-nav nav-right pull-right">
                    <li><a href="https://www.facebook.com/" target="_blank" class="social-media-head"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/" target="_blank" class="social-media-head"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li><a href="https://instagram.com/" target="_blank" class="social-media-head"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>

                    {!! Form::open(['method' => 'POST', 'route' => 'changelocale', 'class' => 'form-inline navbar-select']) !!}

                    <div class="form-group @if($errors->first('locale')) has-error @endif pull-right btnLocale">
                        {!! Form::select(
                            'locale',
                            ['fr' => 'FR', 'ar' => 'AR'],
                            \App::getLocale(),
                            [
                                'id'       => 'locale',
                                'class'    => 'form-control',
                                'required' => 'required',
                                'onchange' => 'this.form.submit()',
                            ]
                        ) !!}
                        <small class="text-danger">{{ $errors->first('locale') }}</small>
                    </div>

                    <div class="btn-group pull-right sr-only">
                        {!! Form::submit("Change", ['class' => 'btn btn-success']) !!}
                    </div>

                    {!! Form::close() !!}
                </ul>
            
                
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>