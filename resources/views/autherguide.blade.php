    @extends('layout.masterlayouts')
    <!-- main content -->
    @section('contents')
        <section id="guide">
            <div class="contianer">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-lg-6 mt-3">
                        <h4 class="text-center">{{__ ('authorguide.title')}}</h4>
                        <p style="font-size: 14px;">{{__ ('authorguide.title')}}</p>
                        <p>{{__ ('authorguide.pargraph1')}}</p>
                        <p>{{__ ('authorguide.pargraph2')}}</p>
                        <p>{{__ ('authorguide.pargraph3')}}</p>
                        <p>{{__ ('authorguide.pargraph4')}}</p>
                        <p>{{__ ('authorguide.pargraph5')}}</p>
                        <p>{{__ ('authorguide.pargraph6')}}</p>
                        <p>{{__ ('authorguide.pargraph7')}}</p>
                       

                        <a href="{{ route('paper.create') }}" class="btn btn-primary btn-block mb-3">
                            <p>{{__ ('authorguide.Button')}}</p>
                        </a>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </section>
    @endsection

    @section('title')
        Author GuideLine
    @endsection
