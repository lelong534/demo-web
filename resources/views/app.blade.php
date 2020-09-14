<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @isset($title)
                {{ $title }}
            @endisset
        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="wrap">
            <!-- header -->
            @include('common.header')
            @include('common.banner')

            <!-- content -->
            @yield('content')

            <!-- footer -->
            @include('common.footer')
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/employ.js') }}"></script>
        <script src="{{ asset('js/modal.js') }}"></script>
    </body>
</html>
