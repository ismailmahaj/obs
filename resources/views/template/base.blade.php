<!doctype html>


<html lang="{{ config('app.locale') }}" dir={{ (config('app.locale')=="ar")?"rtl":"ltr" }}>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Oussama Benali</title>
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css">
        <link rel="stylesheet" href="{{url('css/app.css')}}">
        <link rel="stylesheet" href="{{url('admin/bower_components/css/style.css')}}">
        
    </head>
    <body>
            @include('pages.header')
            
            @yield('content')

        <footer>
            @include('footer')
       </footer>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js"></script>
    <script src="{{url('js/app.js')}}"></script>
        <script>
            AOS.init({
                offset: 200,
                duration: 600,
                easing: 'ease-in-sine',
                delay: 0,
                });
            $(window).on('load', function () {
                AOS.refresh();
            });

           

  $(function() {
        var pull = $('#mobile-menu');
        menu = $('nav ul');
        menuHeight = menu.height();
        $(pull).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });
        $(window).resize(function() {
            var w = $(window).width();
            if (w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    });




        </script>
      
    @stack('script', '')
    </body>
</html>