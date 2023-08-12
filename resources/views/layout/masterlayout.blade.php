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
<style>
    body{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
</style>
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
                                {{ __('he_fo_nav.title') }} <br />{{ __('he_fo_nav.S_title') }}
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-row justify-content-around">
                            <h4 class="text-white align-self-center d-none d-sm-block">
                                {{ __('he_fo_nav.Title') }} <br /> {{ __('he_fo_nav.S_Title') }}
                            </h4>
                            <img src="{{ asset('img/د مدرسې  لوګو.jpg') }}" alt="logo"
                                class="rounded-circle imge-fluid d-none d-sm-block" width="80px" height="80px" />
                        </div>
                        <div class="dropdown">

                            <ul>
                                <select onchange="changeLanguage(this)">
                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <option value="{{ LaravelLocalization::localizeUrl(url()->current(),$localeCode) }}" @if (LaravelLocalization::getCurrentLocale() === $localeCode) selected @endif>
                                            {{ $properties['native'] }}
                                        </option>
                                    @endforeach
                                </select>

                                <script>
                                    function changeLanguage(selectElement) {
                                        window.location.href = selectElement.value;
                                    }
                                </script>


                            </ul>

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

                            <a href="{{ route('home') }}" class="nav-link">{{ __('he_fo_nav.home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link">{{ __('he_fo_nav.about') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('editorial') }}" class="nav-link">{{ __('he_fo_nav.Editorial') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog') }}" class="nav-link">{{ __('he_fo_nav.blog') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('autherguide') }}" class="nav-link">{{ __('he_fo_nav.authorguide') }} </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">{{ __('he_fo_nav.contact') }}</a>
                        </li>
                        @auth
                        <li>
                            <a href="@if (auth()->user()->role == 'admin')
                            {{route('dashboard') }}
                            @else
                            {{route('memberdashboard') }}

                            @endif" class="nav-link">{{ __('he_fo_nav.dashboard')}}</a>
                        </li>
                        <li>
                            <a href="{{route('profile.edit',auth()->id()) }}" class="nav-link">Profile</a>
                        </li>
                        @endauth
                    </ul>

                </div>
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('he_fo_nav.Log Out') }}
                    </button>
                </form>
                @endauth
                @guest
                <a href="{{ route('signup') }}" class="btn btn-info mr-1 ml-auto">{{ __('he_fo_nav.signup') }}</a>
                <a href="{{ route('login') }}" class="btn btn-info">{{ __('he_fo_nav.login') }}</a>
                @endguest
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
                                    <h4>{{ __('he_fo_nav.Find') }}</h4>
                                    <span> {{ __('he_fo_nav.faculty') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-4 mb-30">
                            <div class="single-cta">
                                <i class="fas fa-phone"></i>
                                <div class="cta-text">
                                    <h4>{{ __('he_fo_nav.Call') }}</h4>
                                    <span>{{ __('he_fo_nav.phone') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-4 mb-30">
                            <div class="single-cta">
                                <i class="fas fa-envelope-open"></i>
                                <div class="cta-text">
                                    <h4>{{ __('he_fo_nav.Email') }}</h4>
                                    <span>{{ __('he_fo_nav.email_address') }}</span>
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
                                    <p>{{ __('he_fo_nav.footer_text') }}</p>
                                </div>
                                <div class="footer-social-icon">
                                    <span>{{ __('he_fo_nav.Follow') }}</span>
                                    <a href="#"> <i class="fab fa-facebook-f facebook-bg"></i></a>
                                    <a href="#"> <i class="fab fa-twitter twitter-bg"></i></a>
                                    <a href="#"> <i class="fab fa-instagram instagram-bg"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>{{ __('he_fo_nav.link') }}</h3>
                                </div>
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}" class="nav-link">{{ __('he_fo_nav.home') }}</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="{{ route('about') }}" class="nav-link">{{ __('he_fo_nav.about') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('editorial') }}"
                                            class="nav-link">{{ __('he_fo_nav.Editorial') }}</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="{{ route('blog') }}" class="nav-link">{{ __('he_fo_nav.blog') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('autherguide') }}"
                                            class="nav-link">{{ __('he_fo_nav.authorguide') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('contact') }}"
                                            class="nav-link">{{ __('he_fo_nav.contact') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>{{ __('he_fo_nav.Subscrib') }}</h3>
                                </div>
                                <div class="footer-text">
                                    <p>{{__('he_fo_nav.subscrib')}}</p>
                                </div>

                                <div class="suscribe-form input-group mb-3">
                                    <input type="text" class="form-control" placeholder="{{ __('he_fo_nav.Email') }}">
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
                                <p>{{ __('he_fo_nav.copyright') }} &copy; {{ __('he_fo_nav.reserved') }}</p>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 text-right d-none d-lg-block">
                            <div class="footer-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">{{ __('he_fo_nav.home') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('autherguide') }}">{{ __('he_fo_nav.authorguide') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('autherguide') }}">{{ __('he_fo_nav.authorguide') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">{{ __('he_fo_nav.contact') }}</a>
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
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.js"></script>
    <script src="/js/main.js"></script>
</body>
