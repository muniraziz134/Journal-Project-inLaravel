@extends('layout.masterlayouts')

@section('contents')
    <!-- ABOUT SECTION -->
    <section id="about" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>What We Do</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum sequi necessitatibus deleniti
                        accusamus provident dignissimos numquam fuga nulla quia voluptatibus, dolore voluptate excepturi
                        accusantium dolores temporibus fugit, voluptas velit omnis!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum sequi necessitatibus deleniti
                        accusamus provident dignissimos numquam fuga nulla quia voluptatibus, dolore voluptate excepturi
                        accusantium dolores temporibus fugit, voluptas velit omnis!</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/best5.jpg') }}" alt=""
                        class="about-img img-fluid rounded-circle d-none d-md-block">
                </div>
            </div>
        </div>
    </section>

    <!-- ICON BOXES -->
    <section id="icon-boxes" class="p-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card bg-danger text-center text-white">
                        <div class="card-body">
                            <i class="fa fa-building"></i>
                            <h3>Lorem ipsum</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, architecto.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-danger text-center text-white">
                        <div class="card-body">
                            <i class="fa fa-bullhorn"></i>
                            <h3>Lorem ipsum</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, architecto.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-danger text-center text-white">
                        <div class="card-body">
                            <i class="fa fa-comments"></i>
                            <h3>Lorem ipsum</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, architecto.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card bg-danger text-center text-white">
                        <div class="card-body">
                            <i class="fa fa-clock-o"></i>
                            <h3>Lorem ipsum</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, architecto.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-danger text-center text-white">
                        <div class="card-body">
                            <i class="fa fa-cc"></i>
                            <h3>Lorem ipsum</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, architecto.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-danger text-center text-white">
                        <div class="card-body">
                            <i class="fa fa-coffee"></i>
                            <h3>Lorem ipsum</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, architecto.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('title')
    About us
@endsection
