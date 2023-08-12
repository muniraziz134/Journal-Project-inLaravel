@extends('layout.masterlayouts')
<!-- BLOG SECTION -->
@section('contents')
    <section id="blog" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card-columns">
                        @foreach ($papers as $paper)
                        <div class="col-md">
                            <div class="card bg-dark text-light mb-3"  style="height: 70vh">
                                <div class="">
                                    <img src="{{ asset($paper->coverPhoto) }}" height="250rem" class="card-img-top imge-fluid"
                                        alt="">
                                </div>
                                <div class="card-body text-center">
                                    <h3 class="card-title mb-3">{{$paper->title}}</h3>
                                    <p class="card-tilte mb-3">{{$paper->firstName}} {{$paper->lastName}}</p>
                                   <h4 class="card-tilte mb-3">></h4>

                                    <p class="card-text">Publishd on {{$paper->created_at}}</p>
                                    <p class="card-text">{{ substr($paper->description,0,100) }}</p>

                                    <a href="{{ LaravelLocalization::localizeUrl(route('paper.show',$paper->id),LaravelLocalization::getCurrentLocale()) }}" style="margin-top: 30px" class="btn btn-warning">Read more</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('title')
    Blog
@endsection
