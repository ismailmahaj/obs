<div class="bg">
    <div class="row contact" id="contact">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="text-center titre-white">{{ trans('sections.contact')}}</h1>
            <form action="{{route('contact')}}" method="POST" class="form-horizontal contenu-contact" role="form">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="nom" value="" id="contact-nom" placeholder="Votre nom" class="form-control"
                                style="width: 100%;">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="email" value="" id="contact-email" placeholder="Votre email" class="form-control input-contact"
                                style="width: 100%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="message" value="" rows="5" type="text" class="form-control" placeholder="Votre message"></textarea>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                                <input type="submit" class="btn btn-block btn-danger contact_btn" value="Envoyer">

                        </div>
                    </div>
                </div>
            </form>
            @if (count($errors) > 0)
                @push('script')
                <script>
                    function bas_de_page(){
                        window.location.href = "{{route('pages.index')}}#contact";
                    }
                    bas_de_page();
                </script>
                @endpush

                <div class="alert-danger newsletter-errors">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
               </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="newsletter" id="newsletter">
            <div class="container">
                <h3 class="text-center">{{trans('sections.newsletter')}}</h3>
                    <form action="{{route('subscribe')}}" method="POST" class="form-horizontal text-center">
                            {{ csrf_field() }}
                            <input type="email" name="email" class="form-control newsletter_input" required="required" placeholder="Votre email">
                            <input type="submit" id="btn-newsletter" class="btn btn-danger newsletter_btn" value="S'inscrire">
                    </form>
                    @if (count($errors) > 0)
                        @push('script')
                        <script>
                            function bas_de_page(){
                                window.location.href = "{{route('pages.index')}}#newsletter";
                            }
                            bas_de_page();
                        </script>
                        @endpush

                        <div class="alert-danger newsletter-errors">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            </div>
        </div>
    </div>
</div>
    
        <div class="sub_footer">
        <div class="container">
            <div class="col-md-12 text-center">
                <span>Oussama Benali © 2017 - Tous droits réservés. Made MolenGeek by Amaya | MolenIT</span>
            </div>
        </div>
    </div>
