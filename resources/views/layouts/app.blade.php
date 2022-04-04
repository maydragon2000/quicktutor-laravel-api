<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/Latofont.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/Robotofont.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/Roboto2font.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="{{URL::asset('js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{URL::asset('js/jquery.slim.min.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
    <div id="app">
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    {{route('login')}}
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    {{route('register')}}
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->
        <nav class="navbar bg-dark navbar-dark">
            <div class="container">
                <a href="/">
                    <img class="white-img" src="{{url('assets/image/a216b605626b87ed5097b77216439dcb.svg')}}">
                    <img class="special-img" src="{{url('assets/image/d8cdb7a12ed7538612e66612979a6e41.svg')}}">
                </a>
                <div class="nav-Learn">
                    <a href="#">
                        Learn
                    </a>
                </div>
                <div class="nav-Teach">
                    <a href="#">
                        Teach
                    </a>
                </div>
                <div class="dropdown">
                    <button class="btn dropbtn">Get the app</button>
                    <div class="triangle-up"></div>
                    <div class="dropdown-content">
                        <a href="#">
                            <img src="{{url('assets/icons/apple.svg')}}">
                        </a>
                        <a class="between">
                            |
                        </a>
                        <a href="#">
                            <img src="{{url('assets/icons/google.svg')}}">
                        </a>
                    </div>
                </div>
                @guest
                    @if (Route::has('login'))
                        <div class="login">
                            <a class="btn" href="{{ route('login') }}" onclick="login()">Login</a>
                        </div>
                    @endif
                    @if (Route::has('register'))
                        <div class="Register" onclick="register()">
                            <a class="btn" href="{{ route('register') }}">Register</a>
                        </div>  
                    @endif
                @else
                    <!-- <div class="Register" >
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                            @csrf
                            <input type = submit class="btn logout" value="Logout">
                        </form>
                    </div> -->
                    <li class="nav-item dropdown logout-drop">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </div>
                    </li>
                @endguest
                <button class="navbar-toggler" onclick="sideNav()" type="button" >
                    <img class="brrger" src="{{url('assets/icons/burger@1x.svg')}}">
                    <img class="cross" src="{{url('assets/icons/cross@1x.svg')}}">
                </button>
            </div>
        </nav>
        <div id="mySidepanel" class="sidepanel">
            <div class="sidepanel-inner">
                <div class="about">
                    <h5>About Us</h4>
                        <a href="#">Careers</a>
                        <a href="#">Contact Us</a>
                        <a href="#">FAQ</a>
                        <a href="#">Why QuickTutor</a>
                </div>
                <div class="community">
                    <h5>Community</h5>
                    <a href="#">Blog</a>
                    <a href="#">Community GuideLines</a>
                    <a href="#">User safety</a>
                    <a href="#">Non Discrimition Policy</a>
                </div>
                <div class="legal">
                    <h5>Legal</h5>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Service Terms of Use</a>
                    <a href="#">Payment Terms of service</a>
                    <a href="#">Independent Tutor Agrement</a>
                </div>
                <div class="made-with text-center">
                    <h6 class="d-flex">Made with  <a href="#"><i class="fa fa-heart heartColor"></i></a>  in Michigan</h6>
                </div>
                <div class="download-app d-flex justify-content-center">
                    <a href="#"> <img class="" src="{{url('assets/icons/Download@1x.svg')}}"></a>
                    <a href="#"> <img class="" src="{{url('assets/icons/google-play-badge.svg')}}"></a>
                </div>
                <div class="icon d-flex justify-content-between">
                    <a href="#"><img src="{{url('assets/icons/twitter-color.svg')}}"></a>
                    <a href="#"><img src="{{url('assets/icons/linkedin-color.svg')}}"></a>
                    <a href="#"><img src="{{url('assets/icons/instagram-color.svg')}}"></a>
                    <a href="#"><img src="{{url('assets/icons/youtube-color.svg')}}"></a>
                    <a href="#"><img src="{{url('assets/icons/facebook-color.svg')}}"></a>
                </div>
                <div class="company">
                    <a href="#"><img class="BBB" src="{{url('assets/icons/BBB.png')}}"></a>
                    <a href="#"><img class="green" src="{{url('assets/icons/green.png')}}"></a>
                </div>
                <div class="side-footer text-center">
                    <a>© 2022 QuickTutor, LLC. All Rights Reserved.</a>
                </div>
            </div>
            
        </div>
        <main>
            @yield('content')
        </main>
        <div class="footer">
            <div class="container">
                <div class="footer-top row">
                    <div class="footer-top-single col-lg-3 col-md-4">
                        <h5>About Us</h4>
                            <a href="#">Careers <img src="{{url('assets/icons/right@1x.svg')}}"></a>
                            <a href="#">Contact Us <img src="{{url('assets/icons/right@1x.svg')}}"></a>
                            <a href="#">FAQ <img src="{{url('assets/icons/right@1x.svg')}}"></a>
                            <a href="#">Why QuickTutor <img src="{{url('assets/icons/right@1x.svg')}}"></a>
                    </div>
                    <div class="footer-top-single col-lg-3 col-md-4">
                        <h5>Community</h5>
                        <a href="#">Blog <img src="{{url('assets/icons/right@1x.svg')}}"></a>
                        <a href="#">Community GuideLines <img src="{{url('assets/icons/right@1x.svg')}}"></a>
                        <a href="#">User safety <img src="{{url('assets/icons/right@1x.svg')}}"></a>
                        <a href="#">Non Discrimition Policy <img src="{{url('assets/icons/right@1x.svg')}}"></a>
                    </div>
                    <div class="footer-top-single col-lg-3 col-md-4">
                        <h5>Legal</h5>
                        <a href="#">Privacy Policy <img src="{{url('assets/icons/right@1x.svg')}}"></a>
                        <a href="#">Service Terms of Use <img src="{{url('assets/icons/right@1x.svg')}}"></a>
                        <a href="#">Payment Terms of service <img src="{{url('assets/icons/right@1x.svg')}}"></a>
                        <a href="#">Independent Tutor Agrement <img src="{{url('assets/icons/right@1x.svg')}}"></a>
                    </div>
                    <div class="footer-top-single col-lg-3 col-md-12 text-center manufacture" >
                        <h5>Made with<a class="footer-manufacture" href="#"><i class="fa fa-heart heartColor"></i></a>in Michigan
                        </h5>
                    </div>
                </div>
                <div class="footer-middle d-flex justify-content-between">
                    <div class="footer-dropdown">
                        <a href="#"><img class="" src="{{url('assets/icons/Download@1x.svg')}}"></a>
                        <a href="#"><img class="" src="{{url('assets/icons/google-play-badge.svg')}}"></a>
                    </div>
                    <div class="footer-company">
                        <a href="#"><img class="BBB" src="{{url('assets/icons/BBB.png')}}"></a>
                        <a href="#"><img class="green" src="{{url('assets/icons/green.png')}}"></a>
                    </div>
                    <div class="footer-icon">
                        <a href="#"><img src="{{url('assets/icons/twitter-color.svg')}}"></a>
                        <a href="#"><img src="{{url('assets/icons/linkedin-color.svg')}}"></a>
                        <a href="#"><img src="{{url('assets/icons/instagram-color.svg')}}"></a>
                        <a href="#"><img src="{{url('assets/icons/youtube-color.svg')}}"></a>
                        <a href="#"><img src="{{url('assets/icons/facebook-color.svg')}}"></a>
                    </div>
                </div>
                <div class="footer-bottom text-center">
                    <p>© <span class="currently-year"></span> QuickTutor, LLC. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
        var dt = new Date();
        $(".currently-year").html(dt.getFullYear());
        var sideheight = window.innerHeight - 100;
        console.log(sideheight);
         $(".sidepanel").css("height", sideheight);
         
        window.onscroll = function () { scrollFunction() };
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                $(".navbar").css("cssText", "background-color: #1b1b26 !important");
                $(".navbar").css("transition", "0.4s");
                $(".dropdown").css("display", "block");
                $(".white-img").css("display", "none");
                $(".special-img").css("display", "block")
            } else {
                $(".navbar").css("cssText", "background-color: transparent !important");
                $(".navbar").css("transition", "0.4s");
                $(".dropdown").css("display", "none");
                $(".white-img").css("display", "block");
                $(".special-img").css("display", "none")
            }
        }
        function sideNav(){
            if(document.getElementById("mySidepanel").style.right == "0px")
            {
                document.getElementById("mySidepanel").style.right = "-1000px";
                $(".navbar").css("cssText", "background-color: transparent !important");
                $(".cross").css("display", "none");
                $(".brrger").css("display", "initial");
            }
            else{
                    $(".cross").css("display", "initial");
                    $(".brrger").css("display", "none");
                    $(".navbar").css("cssText", "background-color: #1b1b26 !important");
                    document.getElementById("mySidepanel").style.right = "0px";
            }
        }
    </script>
</html>
