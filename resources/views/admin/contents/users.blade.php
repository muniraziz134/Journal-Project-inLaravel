@extends('admin.layout.master')

@section('section-title')
    All Users
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
                        Actions on User has been successfully Completed
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
                    @if (isset($user))
                    <form action="{{ route('User.update',$user->id) }}" enctype="multipart/form-data"  method="POST" class="row">
                        @csrf
                        @method('PUT')
                        <div class="col">
                            <input type="text" name="firstName" value="{{ $user->firstName }}" placeholder="Full Name" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" name="lastName" value="{{ $user->lastName }}" placeholder="Last Name" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" name="email" value="{{ $user->email }}" placeholder="Email" class="form-control">
                        </div>
                        <div class="col">
                            <select type="text" name="role" placeholder="Role"  class="form-control">
                                <option value="admin" @if ($user->role == 'admin')
                                    selected
                                @endif >Admin</option>
                                <option value="member" @if ($user->role == 'member')
                                    selected
                                @endif>Community Memeber</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-dark">Update</button>
                        </div>
                    </form>
                    @else
                    <form action="{{ route('User.store') }}" enctype="multipart/form-data"  method="POST" class="row">
                        @csrf
                        <div class="col">
                            <input type="text" name="firstName" placeholder="First Name" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" name="lastName" placeholder="Last Name" class="form-control">
                        </div>
                        <div class="col">
                            <input type="email" name="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="col">
                            <select type="text" name="role" placeholder="Role" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="member">Community Memeber</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="password" name="password"  placeholder="Password" class="form-control">
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
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td> {{ $user->id }} </td>
                                    <td> {{ $user->firstName }} </td>
                                    <td> {{ $user->lastName }} </td>
                                    <td> <div class="badge bg-primary">{{ $user->role }}</div> </td>
                                    <td> {{ $user->email }} </td>
                                    <td> {{ $user->created_at }} </td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="{{ route('User.destroy',$user->id) }}" method="POST"> @csrf @method('DELETE') <button class="btn btn-danger btn-sm" type="submit"><i class="bi bi-trash"></i></button></form>
                                            @if ($user->role != 'author')
                                            <a href="{{ route('User.edit',$user->id) }}" class="btn btn-primary btn-sm" id="Publishuser" data-id="{{ $user->id }}"><i class="bi bi-pencil-square"></i></a>
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

@endsection
