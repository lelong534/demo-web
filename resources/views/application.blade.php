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
        <link href="{{ asset('css/base.css') }}" rel="stylesheet">
        <link href="{{ asset('css/customer.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/introduction.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="wrap">
            <!-- HEADER -->
            @include('common.header_mobile')

            <!-- MAIN CONTENT -->
            <main class="l-main">
                <div class="main-content">
                    <div class="inner">
                        <div class="content-title is-desktop">
                            <h2>Trang chủ</h2>&nbsp;&nbsp;&nbsp;
                            <span>
                                <img 
                                    src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
                                    class="icon"       
                                />
                            </span>&nbsp;&nbsp;&nbsp;
                            <h2>Giới thiệu Mobifone</h2>
                        </div> 
                        @yield('content')      
                    </div>
                </div>
            </main>
            

            <!-- FOOTER -->
            @include('common.footer_mobile')
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/home.js')}}"></script>
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    </body>
</html>