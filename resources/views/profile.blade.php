@extends('layout.masterlayout')

@section('content')

<section id="guide">
    <div class="contianer">
        <center><h3 class="mt-5">User Profile</h3></center>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-lg-4 mt-3">
                <div class="card">
                    <div class="card-body">
                        @if (Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Profile Has Been Updated
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @endif
                        <form action="{{ route('User.update',$user->id) }}" method="POST" class="row">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="role" value="{{ $user->role }}">
                            <div class=" mt-3 col-12">
                                <label for="">First Name</label>
                                <input type="text" name="firstName" value="{{ $user->firstName }}" placeholder="" class="form-control">
                            </div>
                            <div class=" mt-3 col-12">
                                <label for="">Last Name</label>
                                <input type="text" name="lastName" value="{{ $user->lastName }}" placeholder="" class="form-control">
                            </div>
                            <div class=" mt-3 col-12">
                                <label for="">Email</label>
                                <input type="email" name="email" value="{{ $user->email }}" placeholder="" class="form-control">
                            </div>
                            <div class=" mt-3 col-12">
                                <label for="">Password</label>
                                <input type="password" name="password" placeholder="Type New Password" class="form-control">
                            </div>
                            <div class=" mt-3 col-12">
                                <button type="submit"  class="btn btn-primary btn-block">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>

@endsection
