@extends('layout.masterlayouts')

@section('contents')
    <!-- ABOUT SECTION -->
    <section id="about" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>{{__ ('about.about_title')}}</h1>
                    <p>{{__ ('about.pargraph_about')}}</p>
                    <p>{{__ ('about.S_pargraph')}}</p>
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
                <div class="col-md-6">
                    <div class="card bg-danger text-center text-white">
                        <div class="card-body">
                           
                            <h3>{{__ ('about.announcement')}}</h3>
                            {{__ ('about.announcement_message')}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-danger text-center text-white">
                        <div class="card-body">
                            
                            <h3>{{__ ('about.chat')}}</h3>
                            {{__ ('about.chat_message')}}
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
