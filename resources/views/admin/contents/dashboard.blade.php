@extends('admin.layout.master')

@section('section-title')
    @if (auth()->user()->role == 'admin')
    Dashboard
    @else
    Pending Journals
    @endif
@endsection
@section('section-content')
    @if (auth()->user()->role == 'admin')
    <div class="row">
        <div class="col-lg-8">
            <div class="row">

              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Total Authors <span></span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      </div>
                      <div class="ps-3">
                        <h4>{{ $authors }}</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Total Journals <span></span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      </div>
                      <div class="ps-3">
                        <h4> {{ $journals }} </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Pending Journals <span></span></h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      </div>
                      <div class="ps-3">
                        <h4> {{ $pending_journals }} </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Reports -->
              <div class="col-12">
                <div class="card">



                  <div class="card-body">
                    <h5 class="card-title">Reports <span>/Month</span></h5>

                    <!-- Line Chart -->
                    <div id="reportsChart" style="min-height: 365px;"></div>

                    <script>
                        const data = @json($report);

                      document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#reportsChart"), {
                          series: [{
                            name: 'Journal',
                            data: data.map(v => v.paper),
                          }],
                          chart: {
                            height: 350,
                            type: 'area',
                            toolbar: {
                              show: false
                            },
                          },
                          markers: {
                            size: 4
                          },
                          colors: ['#4154f1', '#2eca6a', '#ff771d'],
                          fill: {
                            type: "gradient",
                            gradient: {
                              shadeIntensity: 1,
                              opacityFrom: 0.3,
                              opacityTo: 0.4,
                              stops: [0, 90, 100]
                            }
                          },
                          dataLabels: {
                            enabled: false
                          },
                          stroke: {
                            curve: 'smooth',
                            width: 2
                          },
                          xaxis: {
                            type: 'string',
                            categories: data.map(v => v.date)
                          },
                          tooltip: {

                          }
                        }).render();
                      });
                    </script>
                    <!-- End Line Chart -->

                  </div>

                </div>
              </div><!-- End Reports -->


            </div>
          </div>
    </div>
    @else
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div style="height: 40px">
                        <div class="progress" id="await" style="display:none;">
                            <div class="progress-bar progress-bar-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                              <span class="sr-only"></span>
                            </div>
                          </div>
                    </div>
                    <table class="table datatable table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>desciption</th>
                                <th>Author</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Article</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($journals as $journal)
                                <tr>
                                    <td> {{ $journal->id }} </td>
                                    <td> {{ $journal->title }} </td>
                                    <td> {{ $journal->category }} </td>
                                    <td> {{ $journal->description }} </td>
                                    <td> {{ $journal->author->firstName }} </td>
                                    <td> {{ $journal->created_at }} </td>
                                    <td> <div class="badge {{ $journal->status == 'published'? 'bg-primary':'bg-warning' }}">{{ $journal->status }}</div> </td>
                                    <td> <a href="{{ $journal->coverPhoto }}" target="_blank" rel="noopener noreferrer"><img width="50" height="50" src="{{ $journal->coverPhoto }}" alt=""></a> <a href="{{ $journal->article }}" target="_blank" rel="noopener noreferrer">{{ $journal->article }}</a> </td>
                                    <td>
                                        <div class="btn-group">

                                            @if ($journal->status == 'pending')
                                            <button class="btn btn-primary btn-sm" id="PublishJournal" data-id="{{ $journal->id }}"><i class="bi bi-check-lg"></i></button>
                                            @endif
                                        </div>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
<script src="/jquery-3.3.1.min.js"></script>
    <script>
        $(function(){
            $(document).on('click','#PublishJournal',function(even){
                $.ajaxSetup({
              headers :{
                'X-CSRF-TOKEN':$("meta[name=csrf-token").attr('content')
              }
              });
              $.ajax({
                 type:"POST",
                 url:"/published",
                 data: {
                   _token: $("input[name=_token]").val(),
                   id: event.target.dataset.id
                 },
                 dataType:'json',
                 success:function(data){
                    window.location.reload();
                 },
                 error:function(error){
                 }
               });
            });
            $(document).ajaxStart(function(){
                $("#await").show();
            });
            $(document).ajaxComplete(function(){
              $("#await").hide();
            });
        })
    </script>
    @endif
@endsection
