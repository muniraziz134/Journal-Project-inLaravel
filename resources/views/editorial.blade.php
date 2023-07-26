    @extends('layout.masterlayouts')
    <!-- showcase section -->
    @section('contents')
        <section id="showcase">
            <div class="container mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="mt-3 text-center">Editorial Board</h3>
                        <h5>Editor</h5>
                        <div><span style="font-weight: bold;">Name:</span>Walliams</div>
                        <div><span style="font-weight: bold;">Degree:</span>PHD</div>
                        <div><span style="font-weight: bold;">Country:</span>Indonesia</div>
                        <div><span style="font-weight: bold;">Department:</span>Department of Education</div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('img/person1.jpg') }}" alt="" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-md-6 mb-3">
                        <div style="border-bottom: 1px solid #333;"></div>
                        <h5>Editor</h5>
                        <div><span style="font-weight: bold;">Name:</span>Sara</div>
                        <div><span style="font-weight: bold;">Degree:</span>Bachlor</div>
                        <div><span style="font-weight: bold;">Country:</span>Afghanistan</div>
                        <div><span style="font-weight: bold;">Department:</span>Department of Science</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="{{ asset('img/person2.jpg') }}" alt="" class="img-fluid rounded-circle">
                    </div>

                    <div class="col-md-6 mb-3">
                        <div style="border-bottom: 1px solid #333;"></div>
                        <h5>Editor</h5>
                        <div><span style="font-weight: bold;">Name:</span>David</div>
                        <div><span style="font-weight: bold;">Degree:</span>Bachlor</div>
                        <div><span style="font-weight: bold;">Country:</span>Afghanistan</div>
                        <div><span style="font-weight: bold;">Department:</span>Department of Science</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="{{ asset('img/person3.jpg') }}" alt="" class="img-fluid rounded-circle">
                    </div>
                </div>
            </div>
        </section>
    @endsection
@section('title')
Editorial
@endsection