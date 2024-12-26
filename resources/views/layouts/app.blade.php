<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    <title>{{ config('app.name', 'Tương tác nấu ăn') }}</title>--}}
    <title> Cooking Diary | Hỗ trợ nấu ăn</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{route('trang-chu')}}">
                    <!-- {{ config('app.name', 'Tương tác nấu ăn') }}Quay lại trang chủ -->
                    <a href="{{ route('trang-chu') }}"><img width="39px" height="39px" src="upload/icon/home.png"
                            alt=""></a>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Hỗ trợ nấu ăn tương tToggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logins') }}">{{ __('Đăng nhập') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('registers') }}">{{ __('Đăng ký') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div> -->
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer id="mu-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-footer-area">
                            <div class="mu-footer-social">
                                <a href="https://www.facebook.com"><img
                                        style="border-radius:50%; width:45px; height:45px"
                                        src="upload/logo/facebook.png" alt=""></a>
                                <a href="https://twitter.com"><img style="border-radius:50%; width:45px; height:45px"
                                        src="upload/logo/twitter.png" alt=""></a>
                                <a href="https://google.com"><img style="border-radius:50%;width:45px; height:45px"
                                        src="upload/logo/google.png" alt=""></a>
                                <a href="https://linkedin.com/"><img style="border-radius:50%;width:45px; height:45px"
                                        src="upload/logo/linkedin.png" alt=""></a>
                                <a href="https://youtube.com/"><img style="border-radius:50%;width:45px; height:45px"
                                        src="upload/logo/youtube.png" alt=""></a>
                            </div>
                            <div class="mu-footer-copyright">
                                <p>&copy; Copyright <a rel="nofollow" href="http://markups.io">Cooking Diary</a>. All right
                                    reserved.</p>
                                <p> Trường Đại Học Công Nghiệp Hà Nội</p>
                                <p> Đinh Phương Nam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>

<style>
    #mu-footer {
        background-color: #444;
        display: inline;
        float: left;
        padding: 50px 0;
        width: 100%;
    }

    .mu-footer-area {
        display: inline;
        float: left;
        width: 100%;
        text-align: center;
    }

    .mu-footer-social {
        display: inline;
        float: left;
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
    }

    .mu-footer-social a {
        background-color: #555;
        border-radius: 50%;
        color: #fff;
        display: inline-block;
        font-size: 20px;
        height: 45px;
        line-height: 47px;
        margin: 5px;
        text-align: center;
        width: 45px;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
    }

    .mu-footer-copyright {
        display: inline;
        float: left;
        width: 100%;
    }

    .mu-footer-copyright p {
        font-family: "Open Sans", sans-serif;
        font-size: 16px;
        letter-spacing: 0.5px;
        color: #fff;
    }

    .mu-footer-copyright p a {
        color: #fff;
    }
</style>