@extends('admin.layout.master')

@section('section-title')
    All Journals
@endsection

@section('section-content')
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
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" data-id="{{ $journal->id }}" type="checkbox"  id="toggleJournal" @if ($journal->is_selected)
                                                checked=""
                                            @endif>

                                        <div class="btn-group">
                                            <button class="btn btn-danger btn-sm" id="DeleteJournal" data-id="{{ $journal->id }}"><i class="bi bi-trash"></i></button>
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
            $(document).on('change','#toggleJournal',function(even){
                let id = this.dataset.id;
                $.ajaxSetup({
              headers :{
                'X-CSRF-TOKEN':$("meta[name=csrf-token").attr('content')
              }
              });
              $.ajax({
                 type:"POST",
                 url:"/admin/toggle_journal",
                 data: {
                   _token: $("input[name=_token]").val(),
                   id: id
                 },
                 dataType:'json',
                 success:function(data){
                    console.log(true)
                 },
                 error:function(error){
                 }
               });
            });
            $(document).on('click','#DeleteJournal',function(even){
                let id = this.dataset.id;
                $.ajaxSetup({
              headers :{
                'X-CSRF-TOKEN':$("meta[name=csrf-token").attr('content')
              }
              });
              $.ajax({
                 type:"DELETE",
                 url:"/paper/"+id,
                 data: {
                   _token: $("input[name=_token]").val(),
                   id: id
                 },
                 dataType:'json',
                 success:function(data){
                    console.log(true);
                    window.location.reload();
                 },
                 error:function(error){
                 }
               });
            });
            $(document).on('click','#PublishJournal',function(even){
                let id = this.dataset.id ;
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
                   id: id
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
@endsection
