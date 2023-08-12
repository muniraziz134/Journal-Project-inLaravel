    @extends('layout.masterlayouts')
    <!-- showcase section -->
    @section('contents')
        <section id="showcase">
            <div class="container mb-3">
               <center> <h3 class="mt-5"> Editorial Board </h3></center>
                <div class="row">
                    @foreach ($members as $member)
                    <div class="col-md-6">
                        <div><span style="font-weight: bold;">Name:</span>{{ $member->full_name }}</div>
                        <div><span style="font-weight: bold;">Degree:</span> {{ $member->degree }} </div>
                        <div><span style="font-weight: bold;">Country:</span> {{ $member->country }} </div>
                        <div><span style="font-weight: bold;">Department:</span>{{ $member->department }}</div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset($member->image) }}" alt="" width="150" height="100" class="img-fluid rounded-circle">
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endsection
@section('title')
Editorial
@endsection
