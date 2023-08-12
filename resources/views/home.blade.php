@extends('layout.masterlayout')


@section('content')
    <!-- SHOWCASE SLIDER -->
    <section id="showcase">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image-1 active">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block text-right mb-5">
                            <h1 class="display-3">{{__ ('home.welcome') }}</h1>
                            <p class="lead">{{__ ('home.afterWelcome') }}</p>

                        </div>

                    </div>
                </div>

                <div class="carousel-item carousel-image-2">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block mb-5">
                            <h1 class="display-3">For Learining and Research</h1>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
                                consequuntur architecto eius magni nobis nulla eaque. Deserunt sunt, distinctio quos.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="carousel-item carousel-image-3">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block text-right mb-5">
                            <h1 class="display-3">Get and Obtain Some Things</h1>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
                                consequuntur architecto eius magni nobis nulla eaque. Deserunt sunt, distinctio quos.
                            </p>
                            <a href="#" class="btn btn-success btn-lg">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
                <span class="carousel-control-prev-icon"></span>
            </a>

            <a href="#myCarousel" data-slide="next" class="carousel-control-next">
                <span class="carousel-control-next-icon"></span>
            </a>
            <a href="#myCarousel" data-slide="next" class="carousel-control-next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>
    <!-- HOME ICON SECTION -->
    <section id="Expoler-section" class="text-white py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('img/blog.jpg') }}" alt="" class=" imge-fluid mb-3" width="500px"
                        height="300px" />
                </div>

                <div class="col-md-6">
                    <h3>{{__ ('home.Explor')}}</h3>
                    <p class="">
                        {{__ ('home.InExplor')}}
                    </p>
                    <div class="d-flex flex-row">
                        <div class="p-4 align-self-start">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="p-4 align-self-start">
                            {{__ ('home.afterExplor')}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="bg-dark text-light p-2">
        <div class="container">
            <div class="d-flex align-items-center ">
                <div>
                    <h3 class="mb-3"> {{__ ('home.signup_bu')}}</h3>
                </div>
                <div class="input-group input-news">
                    <input type="text" placeholder="{{__ ('home.Enter')}}" class="form-control">
                    <button class="btn btn-warning btn-lg" type="button">{{__ ('home.Button')}}</button>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="text-center bg-dark text-white py-2 mb-3 ">
                <h2>{{__ ('home.newPost')}}</h2>
            </div>
            <div class="row">

                @foreach ($posts as $post)
                <div class="col-md">
                    <div class="card bg-dark text-light mb-3">
                        <div class="">
                            <img src="{{ asset($post->coverPhoto) }}" height="250rem" class="card-img-top imge-fluid"
                                alt="">
                        </div>
                        <div class="card-body text-justify">

                            <h3 class="card-title mb-3">{{  $post->title }}</h3>
                            <div>
                                <p>{{ $post->author->firstName }}</span></p>
                            </div>
                            <p class="card-text">{{ $post->description }}
                            </p>
                            <a href="{{ LaravelLocalization::localizeUrl(route('paper.show',$post->id),LaravelLocalization::getCurrentLocale()) }}" class="btn btn-warning">Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- HOME HEADING SECTION -->
    <section id="home-heading" class="p-5">
        <div class="dark-overlay">
            <div class="row">
                <div class="col">
                    <div class="container pt-5">
                        <h1>{{__ ('home.Getready')}}</h1>
                        <p class="d-none d-md-block">{{__ ('home.aftergetready')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- INFO SECTION -->
    <section id="info" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <h3>{{__ ('home.info')}}</h3>
                    <p>{{__ ('home.afterInfo')}}</p>
                    <a href="#" class="btn btn-outline-danger btn-lg">{{__ ('home.readmore')}}</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/laptop.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- VIDEO PLAY SECTION -->

    <section id="video-play">
        <div class="dark-overlay">
            <div class="row">
                <div class="col">
                    <div class="container p-5">
                        <a href="#" class="video" data-video="public.Video.Video" data-toggle="modal"
                            data-target="#videoModal">
                            <i class="fa fa-play"></i>
                        </a>
                        <h1>{{__ ('home.Giude')}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Paper GALLERY -->
    <section id="gallery" class="py-5">
        <div class="container">
            <h1 class="text-center">{{__ ('home.Article')}}</h1>
            <p class="text-center">{{__ ('home.papuler')}}</p>
            <div class="row mb-4">


            @foreach ($articles as $article)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset($article->coverPhoto) }}" style="height: 30vh" alt="" class="img-fluid">
                    <div class="card-body">
                       <center> <h3><b>{{ $article->title }}</b></h3>
                        <h5>{{ $article->author->firstName }}</h5>
                        <a href="{{ LaravelLocalization::localizeUrl(route('paper.show',$article->id),LaravelLocalization::getCurrentLocale()) }}" style="margin-top: 30px" class="btn btn-warning">Read more</a></center>
                    </div>
                </div>
            </div>
            @endforeach

            </div>
        </div>
    </section>
@endsection
@section('title')
    Home
@endsection

