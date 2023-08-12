@extends('admin.layout.master')

@section('section-title')
    All Community Members
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
                    @if (Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Actions on Memeber has been successfully Completed
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
                    @if (isset($member))
                    <form action="{{ route('member.update',$member->id) }}" enctype="multipart/form-data"  method="POST" class="row">
                        @csrf
                        @method('PUT')
                        <div class="col">
                            <input type="text" name="full_name" value="{{ $member->full_name }}" placeholder="Full Name" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" name="department" value="{{ $member->department }}" placeholder="Department" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" name="degree" value="{{ $member->degree }}" placeholder="Degree" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" name="country" value="{{ $member->country }}" placeholder="Country" class="form-control">
                        </div>
                        <div class="col">
                            <input type="file" name="image" value="{{ $member->image }}" placeholder="Image" class="form-control">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-dark">Update</button>
                        </div>
                    </form>
                    @else
                    <form action="{{ route('member.store') }}" enctype="multipart/form-data"  method="POST" class="row">
                        @csrf
                        <div class="col">
                            <input type="text" name="full_name" placeholder="Full Name" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" name="department" placeholder="Department" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" name="degree" placeholder="Degree" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" name="country" placeholder="Country" class="form-control">
                        </div>
                        <div class="col">
                            <input type="file" name="image"  placeholder="Image" class="form-control">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    @endif
                    <table class="table datatable table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Department</th>
                                <th>Degree</th>
                                <th>Country</th>
                                <th>Created At</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($members as $member)
                                <tr>
                                    <td> {{ $member->id }} </td>
                                    <td> {{ $member->full_name }} </td>
                                    <td> {{ $member->department }} </td>
                                    <td> {{ $member->degree }} </td>
                                    <td> {{ $member->country }} </td>
                                    <td> {{ $member->created_at }} </td>
                                    <td> <a href="{{ $member->image }}" target="_blank" rel="noopener noreferrer"><img width="50" height="50" src="{{ $member->image }}" alt=""></a> </td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="{{ route('member.destroy',$member->id) }}" method="POST"> @csrf @method('DELETE') <button class="btn btn-danger btn-sm" type="submit"><i class="bi bi-trash"></i></button></form>
                                            <a href="{{ route('member.edit',$member->id) }}" class="btn btn-primary btn-sm" id="Publishmember" data-id="{{ $member->id }}"><i class="bi bi-pencil-square"></i></a>
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
