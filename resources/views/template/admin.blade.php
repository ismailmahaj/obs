<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Oussama Benali</title>

        <link rel="stylesheet" href="{{url('css/app.css')}}">
    </head>
    <body>
        
            @yield('content')
       
    <script src="{{url('js/app.js')}}"></script>
    @stack('script')
    </body>
</html>