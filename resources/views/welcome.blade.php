<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/Latofont.css">
        <link rel="stylesheet" href="css/Robotofont.css">
        <link rel="stylesheet" href="css/Roboto2font.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/jquery.slim.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <nav class="navbar bg-dark navbar-dark">
            <div class="container">
                <a href="#">
                    <img class="white-img" src="assets/image/a216b605626b87ed5097b77216439dcb.svg">
                    <img class="special-img" src="assets/image/d8cdb7a12ed7538612e66612979a6e41.svg">
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
                            <img src="assets/icons/apple.svg">
                        </a>
                        <a class="between">
                            |
                        </a>
                        <a href="#">
                            <img src="assets/icons/google.svg">
                        </a>
                    </div>
                </div>
                @guest
                    @if (Route::has('login'))
                        <div class="login">
                            <a class="btn" href="{{ route('login') }}">Login</a>
                        </div>
                    @endif
                    @if (Route::has('register'))
                        <div class="Register" >
                            <a class="btn" href="{{ route('register') }}">Register</a>
                        </div>  
                    @endif
                @else
                    <div class="Register" >
                        <a class="btn" href="{{ route('register') }}">Logout</a>
                    </div> 
                @endguest
                <button class="navbar-toggler" onclick="sideNav()" type="button" >
                    <img class="brrger" src="assets/icons/burger@1x.svg">
                    <img class="cross" src="assets/icons/cross@1x.svg">
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
                    <a href="#"> <img class="" src="assets/icons/Download@1x.svg"></a>
                    <a href="#"> <img class="" src="assets/icons/google-play-badge.svg"></a>
                </div>
                <div class="icon d-flex justify-content-between">
                    <a href="#"><img src="assets/icons/twitter-color.svg"></a>
                    <a href="#"><img src="assets/icons/linkedin-color.svg"></a>
                    <a href="#"><img src="assets/icons/instagram-color.svg"></a>
                    <a href="#"><img src="assets/icons/youtube-color.svg"></a>
                    <a href="#"><img src="assets/icons/facebook-color.svg"></a>
                </div>
                <div class="company">
                    <a href="#"><img class="BBB" src="assets/icons/BBB.png"></a>
                    <a href="#"><img class="green" src="assets/icons/green.png"></a>
                </div>
                <div class="side-footer text-center">
                    <a>© 2022 QuickTutor, LLC. All Rights Reserved.</a>
                </div>
            </div>
            
        </div>
        <div class="header row no-gutters">
            
            <div class="header-img col-lg-6 col-md-6" style="background-image: url(assets/image/68f6498c0df2149a13134006a3c918be.png);">
                <div class="header-img-inner justify-content-center">
                    <img class="download-img" src="assets/icons/Download@1x.svg">
                    <img class="googelplay-img" src="assets/icons/google-play-badge.svg">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 header-right">
                <div class=" header-learn ">
                        <h2 class="">
                            Learn Anything
                        </h2>
                        <a href="#">
                            Learn
                            <img src="assets/icons/right@1x.svg">
                        </a>
                </div>
                <div class="header-teach ">
                    <h2 class="">
                        Teach Anyone
                    </h2>
                    <a href="#">
                        Teach
                        <img src="assets/icons/right@1x.svg">
                    </a>
                </div>
            </div>
        </div>
        <div class="introduce">
            <div class="container introduce-inner">
                <div class="single-introduce">
                    <div class="title-image">
                        <img src="assets/icons/you-in-control.svg">
                    </div>
                    <div class="description">
                        <h5>Learn instantly</h5>
                        <p>Get a tutor with the tap of a button. Connect, message, and schedule sessions. Payments are simple and easy.
                        </p>
                    </div>
                </div>
                <div class="single-introduce">
                    <div class="title-image">
                     <img src="assets/icons/online-person.svg">
                    </div>
                    <div class="description">
                        <h5>Anything, anytime</h5>
                        <p>Learn or teach anything, at anytime — in person or online with the tap of a button.</p>
                    </div>
                </div>
                <div class="single-introduce">
                    <div class="title-image">
                        <img src="assets/icons/a-tutor-fit.svg">
                    </div>
                    <div class="description">
                        <h5>Anyone can teach</h5>
                        <p>Tutors set their own prices, work on their own schedule, and are provided tools to earn more money. Anyone
                            can tutor.</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="possibility">
            <div class="row pd-bt-50 no-gutters">
                <div class="col-6">
                    <div class="sub-title text-center">
                        <h2>Infinite Possibilities</h2>
                    </div>
                </div>
            </div>
            <div class="category row no-gutters">
                <div class="category-left row">
                    <div class="col-lg-4 col-md-4 col-sm-6  single-col">
                        <div class="single-col-inner">
                            <div class="single">
                                <a href="#">
                                    <div class="up">
                                        <img src="assets/image/3fca3f2bf3eedb56c0fb8f6b639f95eb.png">
                            
                                    </div>
                                    <div class="down">
                                        <div class="down-img">
                                            <img src="assets/icons/comunity-icons/stack.svg">
                            
                                        </div>
                                        <div class="down-title">
                                            <span>The Arts</span>

                                        </div>
                            
                                    </div>
                                </a>
                            </div>
                            <div class="single">
                                <a href="#">
                                    <div class="up">
                                        <img src="assets/image/ae87819df597779d7891fa5fa677e606.png">
                                    </div>
                                    <div class="down">
                                        <div class="down-img">
                                            <img src="assets/icons/comunity-icons/tv.svg">
                            
                                        </div>
                                        <div class="down-title">
                                            <span>Technology</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 single-col">
                        <div class="single-col-inner">
                        <div class="single">
                            <a href="#">
                                <div class="up">
                                    <img src="assets/image/cd7af7227338f6f737f5f261b4599b97.png">
                                </div>
                                <div class="down">
                                    <div class="down-img">
                                        <img src="assets/icons/comunity-icons/car.svg">
                        
                                    </div>
                                    <div class="down-title">
                                        <span>Auto</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="single">
                            <a href="#">
                                <div class="up">
                                    <img src="assets/image/79a99e34992112ebbe6b7127c324c722.png">
                                </div>
                                <div class="down">
                                    <div class="down-img">
                                        <img src="assets/icons/comunity-icons/remedial.svg">
                        
                                    </div>
                                    <div class="down-title">
                                        <span>Remedial</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="single">
                            <a href="#">
                                <div class="up">
                                    <img src="assets/image/4aaf61e989d730378655566343893c61.png">
                                </div>
                                <div class="down">
                                    <div class="down-img">
                                        <img src="assets/icons/comunity-icons/academics.svg">
                        
                                    </div>
                                    <div class="down-title">
                                        <span>Academics</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 single-col">
                        <div class="single-col-inner">
                            <div class="single">
                                <a href="#">
                                    <div class="up">
                                        <img src="assets/image/cd28603089010e130342b8698ed4735b.png">
                                    </div>
                                    <div class="down">
                                        <div class="down-img">
                                            <img src="assets/icons/comunity-icons/auto.png">
                                        </div>
                                        <div class="down-title">
                                            <span>Trades</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="single-direction">
                                <a href="#">
                                    <div class="direction-title">
                                        <span>Learn</span>
                                    </div>
                                    <div class="direction-img">
                                        <img src="assets/image/d5ddd913484f0e1bf3f0ce47034ff8bf.svg">
                                    </div>
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
                <div class="category-right row">
                    <div class="col-lg-4 col-md-4 col-sm-6 single-col">
                        <div class="single-col-inner">
                            <div class="single-direction">
                                <a href="#">
                                    <div class="direction-title">
                                        <span>Teach</span>
                                    </div>
                                    <div class="direction-img">
                                        <img src="assets/image/d5ddd913484f0e1bf3f0ce47034ff8bf.svg">
                                    </div>
                            
                                </a>
                            </div>
                            <div class="single">
                                <a href="#">
                                    <div class="up">
                                        <img src="assets/image/95942996e77fb256a009b3112959eba1.png">
                                    </div>
                                    <div class="down">
                                        <div class="down-img">
                                            <img src="assets/icons/comunity-icons/sport.svg">
                            
                                        </div>
                                        <div class="down-title">
                                            <span>Sports &Games</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 single-col">
                        <div class="single-col-inner">
                            <div class="single">
                                <a href="#">
                                    <div class="up">
                                        <img src="assets/image/2db5546585016329e1c859e5aea963ce.png">
                                    </div>
                                    <div class="down">
                                        <div class="down-img">
                                            <img src="assets/icons/comunity-icons/briefcase.svg">
                            
                                        </div>
                                        <div class="down-title">
                                            <span>Bussiness</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="single">
                                <a href="#">
                                    <div class="up">
                                        <img src="assets/image/28eac104e18745afc17bc95e443ed44d.png">
                                    </div>
                                    <div class="down">
                                        <div class="down-img">
                                            <img src="assets/icons/comunity-icons/compass.svg">
                            
                                        </div>
                                        <div class="down-title">
                                            <span>Outdoors</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="single">
                                <a href="#">
                                    <div class="up">
                                        <img src="assets/image/77e19dd0a8f74df3dbe76a234be902ed.png">
                                    </div>
                                    <div class="down">
                                        <div class="down-img">
                                            <img src="assets/icons/comunity-icons/single-message.svg">
                            
                                        </div>
                                        <div class="down-title">
                                            <span>Language</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 single-col">
                        <div class="single-col-inner">
                            <div class="single">
                                <a href="#">
                                    <div class="up">
                                        <img src="assets/image/f0a8236cdf1e5dd6613ff6516b716f1b.png">
                                    </div>
                                    <div class="down">
                                        <div class="down-img">
                                            <img src="assets/icons/comunity-icons/single-user.svg">
                            
                                        </div>
                                        <div class="down-title">
                                            <span>Lifestyle</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="single">
                                <a href="#">
                                    <div class="up">
                                        <img src="assets/image/507caad579a7293eaa8ccecbb3d22299.png">
                                    </div>
                                    <div class="down">
                                        <div class="down-img">
                                            <img src="assets/icons/comunity-icons/heartbeat.svg">
                            
                                        </div>
                                        <div class="down-title">
                                            <span>Health</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <div class="category-mobile">
                <div class="single">
                    <a href="#">
                        <div class="up">
                            <img src="assets/image/3fca3f2bf3eedb56c0fb8f6b639f95eb.png">
                
                        </div>
                        <div class="down">
                            <div class="down-img">
                                <img src="assets/icons/comunity-icons/stack.svg">
                
                            </div>
                            <div class="down-title">
                                <span>The Arts</span>
                
                            </div>
                
                        </div>
                    </a>
                </div>
                <div class="single">
                    <a href="#">
                        <div class="up">
                            <img src="assets/image/cd7af7227338f6f737f5f261b4599b97.png">
                        </div>
                        <div class="down">
                            <div class="down-img">
                                <img src="assets/icons/comunity-icons/car.svg">
                
                            </div>
                            <div class="down-title">
                                <span>Auto</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="single">
                    <a href="#">
                        <div class="up">
                            <img src="assets/image/ae87819df597779d7891fa5fa677e606.png">
                        </div>
                        <div class="down">
                            <div class="down-img">
                                <img src="assets/icons/comunity-icons/tv.svg">
                
                            </div>
                            <div class="down-title">
                                <span>Technology</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="single">
                    <a href="#">
                        <div class="up">
                            <img src="assets/image/79a99e34992112ebbe6b7127c324c722.png">
                        </div>
                        <div class="down">
                            <div class="down-img">
                                <img src="assets/icons/comunity-icons/remedial.svg">
                
                            </div>
                            <div class="down-title">
                                <span>Remedial</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="single">
                    <a href="#">
                        <div class="up">
                            <img src="assets/image/cd28603089010e130342b8698ed4735b.png">
                        </div>
                        <div class="down">
                            <div class="down-img">
                                <img src="assets/icons/comunity-icons/auto.png">
                            </div>
                            <div class="down-title">
                                <span>Trades</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="single">
                    <a href="#">
                        <div class="up">
                            <img src="assets/image/4aaf61e989d730378655566343893c61.png">
                        </div>
                        <div class="down">
                            <div class="down-img">
                                <img src="assets/icons/comunity-icons/academics.svg">
                
                            </div>
                            <div class="down-title">
                                <span>Academics</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="single">
                    <a href="#">
                        <div class="up">
                            <img src="assets/image/2db5546585016329e1c859e5aea963ce.png">
                        </div>
                        <div class="down">
                            <div class="down-img">
                                <img src="assets/icons/comunity-icons/briefcase.svg">
                
                            </div>
                            <div class="down-title">
                                <span>Bussiness</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="single-direction">
                    <a href="#">
                        <div class="direction-title">
                            <span>Teach</span>
                        </div>
                        <div class="direction-img">
                            <img src="assets/image/d5ddd913484f0e1bf3f0ce47034ff8bf.svg">
                        </div>
                
                    </a>
                </div>
                <div class="single-direction">
                    <a href="#">
                        <div class="direction-title">
                            <span>Learn</span>
                        </div>
                        <div class="direction-img">
                            <img class="learn-direction" src="assets/image/d5ddd913484f0e1bf3f0ce47034ff8bf.svg">
                        </div>
                
                    </a>
                </div>
                <div class="single">
                    <a href="#">
                        <div class="up">
                            <img src="assets/image/f0a8236cdf1e5dd6613ff6516b716f1b.png">
                        </div>
                        <div class="down">
                            <div class="down-img">
                                <img src="assets/icons/comunity-icons/single-user.svg">
                
                            </div>
                            <div class="down-title">
                                <span>Lifestyle</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="single">
                    <a href="#">
                        <div class="up">
                            <img src="assets/image/28eac104e18745afc17bc95e443ed44d.png">
                        </div>
                        <div class="down">
                            <div class="down-img">
                                <img src="assets/icons/comunity-icons/compass.svg">
                
                            </div>
                            <div class="down-title">
                                <span>Outdoors</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="single">
                    <a href="#">
                        <div class="up">
                            <img src="assets/image/507caad579a7293eaa8ccecbb3d22299.png">
                        </div>
                        <div class="down">
                            <div class="down-img">
                                <img src="assets/icons/comunity-icons/heartbeat.svg">
                
                            </div>
                            <div class="down-title">
                                <span>Health</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="single">
                    <a href="#">
                        <div class="up">
                            <img src="assets/image/77e19dd0a8f74df3dbe76a234be902ed.png">
                        </div>
                        <div class="down">
                            <div class="down-img">
                                <img src="assets/icons/comunity-icons/single-message.svg">
                
                            </div>
                            <div class="down-title">
                                <span>Language</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="single">
                    <a href="#">
                        <div class="up">
                            <img src="assets/image/95942996e77fb256a009b3112959eba1.png">
                        </div>
                        <div class="down">
                            <div class="down-img">
                                <img src="assets/icons/comunity-icons/sport.svg">
                
                            </div>
                            <div class="down-title">
                                <span>Sports &Games</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="service">
            <div class="service-inner container ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 Service-left">
                        <div class="service-img">
                            <img src="assets/icons/FAQ.png">
                        </div>
                        <div class="service-description">
                            <h3>Frequently asked questions</h3>
                            <p>Support is just a tap away. We can also answer any questions you might have in our FAQ section.</p>
                            <a href="#">Get help<img src="assets/icons/right-purple@1x.svg"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 service-right">
                        <div class="service-img">
                            <img src="assets/icons/Why_QT.png">
                        </div>
                        <div class="service-description">
                            <h3>Why QuickTutor?</h3>
                            <p>Turn your knowledge into dollars & become your own boss today.</p>
                            <a href="#">Learn more<img src="assets/icons/right-purple@1x.svg"></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="footer-top row">
                    <div class="footer-top-single col-lg-3 col-md-4">
                        <h5>About Us</h4>
                            <a href="#">Careers <img src="assets/icons/right@1x.svg"></a>
                            <a href="#">Contact Us <img src="assets/icons/right@1x.svg"></a>
                            <a href="#">FAQ <img src="assets/icons/right@1x.svg"></a>
                            <a href="#">Why QuickTutor <img src="assets/icons/right@1x.svg"></a>
                    </div>
                    <div class="footer-top-single col-lg-3 col-md-4">
                        <h5>Community</h5>
                        <a href="#">Blog <img src="assets/icons/right@1x.svg"></a>
                        <a href="#">Community GuideLines <img src="assets/icons/right@1x.svg"></a>
                        <a href="#">User safety <img src="assets/icons/right@1x.svg"></a>
                        <a href="#">Non Discrimition Policy <img src="assets/icons/right@1x.svg"></a>
                    </div>
                    <div class="footer-top-single col-lg-3 col-md-4">
                        <h5>Legal</h5>
                        <a href="#">Privacy Policy <img src="assets/icons/right@1x.svg"></a>
                        <a href="#">Service Terms of Use <img src="assets/icons/right@1x.svg"></a>
                        <a href="#">Payment Terms of service <img src="assets/icons/right@1x.svg"></a>
                        <a href="#">Independent Tutor Agrement <img src="assets/icons/right@1x.svg"></a>
                    </div>
                    <div class="footer-top-single col-lg-3 col-md-12 text-center manufacture" >
                        <h5>Made with<a class="footer-manufacture" href="#"><i class="fa fa-heart heartColor"></i></a>in Michigan
                        </h5>
                    </div>
                </div>
                <div class="footer-middle d-flex justify-content-between">
                    <div class="footer-dropdown">
                        <a href="#"><img class="" src="assets/icons/Download@1x.svg"></a>
                        <a href="#"><img class="" src="assets/icons/google-play-badge.svg"></a>
                    </div>
                    <div class="footer-company">
                        <a href="#"><img class="BBB" src="assets/icons/BBB.png"></a>
                        <a href="#"><img class="green" src="assets/icons/green.png"></a>
                    </div>
                    <div class="footer-icon">
                        <a href="#"><img src="assets/icons/twitter-color.svg"></a>
                        <a href="#"><img src="assets/icons/linkedin-color.svg"></a>
                        <a href="#"><img src="assets/icons/instagram-color.svg"></a>
                        <a href="#"><img src="assets/icons/youtube-color.svg"></a>
                        <a href="#"><img src="assets/icons/facebook-color.svg"></a>
                    </div>
                </div>
                <div class="footer-bottom text-center">
                    <p>© <span class="currently-year"></span> QuickTutor, LLC. All Rights Reserved.</p>
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
