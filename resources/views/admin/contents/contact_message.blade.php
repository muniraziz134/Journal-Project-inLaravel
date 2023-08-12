@extends('admin.layout.master')

@section('section-title')
    All Contact Messages
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
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Created At</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                                <tr>
                                    <td> {{ $message->id }} </td>
                                    <td> {{ $message->firstName }} </td>
                                    <td> {{ $message->lastName }} </td>
                                    <td> {{ $message->email }} </td>
                                    <td> {{ $message->phone }} </td>
                                    <td> {{ $message->created_at }} </td>
                                    <td> {{ $message->message }} </td>
                                    <td>
                                        <div class="form-check form-switch">
                                        <div class="btn-group">
                                            <form action="{{ route('contact.destroy',$message->id) }}" method="POST"> @csrf @method('DELETE') <button class="btn btn-danger btn-sm" type="submit"><i class="bi bi-trash"></i></button></form>
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

@endsection
