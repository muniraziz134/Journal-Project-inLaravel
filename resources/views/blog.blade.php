@extends('layout.masterlayouts')
<!-- BLOG SECTION -->
@section('contents')
    <section id="blog" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card-columns">
                        @foreach ($papers as $paper)
                            <div class="card">
                                <img src="http://www.lorempixel.com/500/500/city/1" alt=""
                                    class="card-img-top img-fluid">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $paper->title }}</h4>
                                    <small class="text-muted">Written by Liwal 07/20</small>
                                    <hr>
                                    <p class="card-text">
                                        {{ $paper->description }}
                                    </p>
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
