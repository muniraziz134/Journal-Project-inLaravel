<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./bootstrap/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>Sign Up</title>
</head>

<body style="background-color: #413f3f;">
    <div class="LayoutAuthentication">
        <div class="LayoutAuthentication-content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header text-center">
                                    <h3>Sign Up</h3>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input type="text" class="form-control py-3" id="first-name"
                                                        placeholder="FirstName">
                                                    <div id="Name"></div>
                                                    <label for="first-name"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control py-3"
                                                        id="last-name"placeholder="LastName">
                                                    <div id="LastName"></div>
                                                    <label for="last-name"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="email" class="form-control py-3" id="email"
                                                placeholder="Emailaddress ">
                                            <div id="EMAIL"></div>
                                            <label for="inputEmail"></label>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input type="password" class="form-control py-3" id="password"
                                                        placeholder="password">
                                                    <div id="pass"></div>
                                                    <label for="pass"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="password" class="form-control py-3"
                                                        id="confirmpassword"placeholder="Confirm Password">
                                                    <div id="confirmpass"></div>
                                                    <label for="Confirm-password"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"> <a class="btn btn-primary btn-block d-block"
                                                    href="{{ route('signup') }}">Sign Up</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small" style="font-size: 15px; text-decoration: underline;"><a
                                        href="{{ route('login') }}">Already have an account? Goto Login</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="./js/app.js"></script>
    <script src="./js/jquery-3.2.1.js"></script>
    <script src="./bootstrap/bootstrap.min.js"></script>
    <script src="./bootstrap/popper.min.js"></script>
</body>
@section
Sign Up
@endsection
