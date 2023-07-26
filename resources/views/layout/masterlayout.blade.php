<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Educational Journal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.css" />
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- header -->
    <main>
        <header id="header" class="text-white">
            <div class="container-fluid">
                <div class="row pb-4 pt-4 px-2 justify-content-between">
                    <div class="col-md-6 ">
                        <div class="d-flex flex-row justify-content-around">
                            <img src="{{ asset('img/د مدرسې  لوګو.jpg') }}" alt="logo"
                                class="rounded-circle imge-fluid" width="80" height="80px" />
                            <h4 class="text-white align-self-center">
                                Internatioanl journal <br />of Education and research
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-row justify-content-around">
                            <h4 class="text-white align-self-center d-none d-sm-block">
                                Kandahar Univercity <br />of Education and research
                            </h4>
                            <img src="{{ asset('img/د مدرسې  لوګو.jpg') }}" alt="logo"
                                class="rounded-circle imge-fluid d-none d-sm-block" width="80px" height="80px" />
                        </div>
                        <div class="dropdown">
                            <select name="" id="">
                                <option value="1">English</option>
                                <option value="2">Dari</option>
                                <option value="3">Arabic</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </header>
            {{-- novbar --}}
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navNavbar"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                        
                            <a href="{{ route('home') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('editorial') }}" class="nav-link">Editorail Board</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('autherguide') }}" class="nav-link">Auther GuideLine</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
                        </li>
                    </ul>

                </div>
                <a href="{{ route('signup') }}" class="btn btn-info mr-1 ml-auto">Sign Up Now</a>
                <a href="{{ route('login') }}" class="btn btn-info">Login Now</a>
            </div>

        </nav>
    </main>
    <main>
        <article>

            @yield('content')

        </article>
    </main>

    <!-- footer  -->
    <main>
        <section class="footer-section">
            <div claiss="container">
                <div class="footer-cta py-5">
                    <div class="row">
                        <div class="col-sm-6 col-xl-4 mb-30">
                            <div class="single-cta">
                                <i class="fas fa-map-marker"></i>
                                <div class="cta-text">
                                    <h4>Find Us</h4>
                                    <span> KDR University Sharaih Faculty</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-4 mb-30">
                            <div class="single-cta">
                                <i class="fas fa-phone"></i>
                                <div class="cta-text">
                                    <h4>Call Us</h4>
                                    <span>+93 718478545</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-4 mb-30">
                            <div class="single-cta">
                                <i class="fas fa-envelope-open"></i>
                                <div class="cta-text">
                                    <h4>Email Us</h4>
                                    <span>Sharaih Faculty@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="#"><img src="{{ asset('img/blog.jpg') }}" alt=""
                                            class="img-fluid"></a>
                                </div>
                                <div class="footer-text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur,Lorem ipsum
                                        dolor
                                        sit amet, consectetur adipisicing elit. Ut, possimus? error?</p>
                                </div>
                                <div class="footer-social-icon">
                                    <span>Follow Us</span>
                                    <a href="#"> <i class="fab fa-facebook-f facebook-bg"></i></a>
                                    <a href="#"> <i class="fab fa-twitter twitter-bg"></i></a>
                                    <a href="#"> <i class="fab fa-instagram instagram-bg"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3> Useful Links</h3>
                                </div>
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ 'about' }}">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ 'editorial' }}">Editorail Board</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ 'blog' }}">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ 'contact' }}">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ 'autherguide' }}">AutherGuideLine</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Subscribe</h3>
                                </div>
                                <div class="footer-text">
                                    <p>Dont miss to suscribe to our new feeds ,please fill the form below </p>
                                </div>

                                <div class="suscribe-form input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Email">
                                    <span><button><i class="fab fa-telegram-plane"></i></button></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footercopyright-area">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                            <div class="copyright-text">
                                <p>copyright &copy; 2023, All Right Are Reserved</p>

                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 text-right d-none d-lg-block">
                            <div class="footer-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('autherguide') }}">Privacy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('autherguide') }}">policy</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Javascripts scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.js"></script>
    <script src="js/main.js"></script>
</body>
