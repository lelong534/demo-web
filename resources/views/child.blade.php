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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/jquery-ui.css">
        <link href="{{ asset('css/base.css') }}" rel="stylesheet">
        <link href="{{ asset('css/button.css') }}" rel="stylesheet">
        <link href="{{ asset('css/input.css') }}" rel="stylesheet">
        <link href="{{ asset('css/lightslider/lightslider.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/icon.css') }}" rel="stylesheet">
        <link href="{{ asset('css/service.css') }}" rel="stylesheet">
        <link href="{{ asset('css/circle-progress.css') }}" rel="stylesheet">
        <link href="{{ asset('css/user.css') }}" rel="stylesheet">
        <link href="{{ asset('css/employ.css') }}" rel="stylesheet">
        <link href="{{ asset('css/utilities.css') }}" rel="stylesheet">
        <link href="{{ asset('css/pagination.css') }}" rel="stylesheet">
        <link href="{{ asset('css/avatar_upload.css') }}" rel="stylesheet">
        <link href="{{ asset('css/Chart.min.css') }}" rel="stylesheet">
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

                            @isset($page_link_first_level)
                                <span>
                                    <img 
                                        src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
                                        class="icon"       
                                    />
                                </span>&nbsp;&nbsp;&nbsp;
                                <h2>{{$page_link_first_level}}</h2>&nbsp;&nbsp;&nbsp;
                            @endisset

                            @isset($page_link_second_level)
                                @if (isset($page_link_third_level))
                                <span>
                                    <img 
                                        src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
                                        class="icon"     
                                    />
                                </span>&nbsp;&nbsp;&nbsp;
                                <h2>{{$page_link_second_level}}</h2>&nbsp;&nbsp;&nbsp;
                                @else
                                <span>
                                    <img 
                                        src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
                                        class="icon"     
                                    />
                                </span>&nbsp;&nbsp;&nbsp;
                                <h2 class="text-primary">{{$page_link_second_level}}</h2>&nbsp;&nbsp;&nbsp;
                                @endif
                            @endisset

                            @isset($page_link_third_level)
                                @if(isset($page_link_fourth_level))
                                <span>
                                    <img 
                                        src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
                                        class="icon"     
                                    />
                                </span>&nbsp;&nbsp;&nbsp;
                                <h2>{{$page_link_third_level}}</h2>&nbsp;&nbsp;&nbsp;
                                @else
                                <span>
                                    <img 
                                        src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
                                        class="icon"     
                                    />
                                </span>&nbsp;&nbsp;&nbsp;
                                <h2 class="text-primary">{{$page_link_third_level}}</h2>&nbsp;&nbsp;&nbsp;
                                @endif
                            @endisset

                            @isset($page_link_fourth_level)
                                <span>
                                    <img 
                                        src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
                                        class="icon"     
                                    />
                                </span>&nbsp;&nbsp;&nbsp;
                                <h2 class="text-primary">{{$page_link_fourth_level}}</h2>
                            @endisset
                        </div>
                        @yield('content')                     
                    </div>
                </div>
            </main>

            <!-- FOOTER -->
            @include('common.footer_mobile')
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/home.js')}}"></script>
        <script src="{{ asset('js/lightslider/lightslider.js')}}"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="{{ asset('js/slide.js')}}"></script>
        <script src="{{ asset('js/Chart.min.js')}}"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </body>
</html>