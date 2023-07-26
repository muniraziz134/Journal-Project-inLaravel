<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="./bootstrap/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>

<body style="background-color: #413f3f;">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light-bold my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-floating mb-2">
                                            <input type="email" class="form-control py-3" id="inputEmail"
                                                placeholder="Email">
                                            <label for="email"></label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="password" class="form-control py-3" id="inputPassword"
                                                placeholder="password">
                                            <label for="password"></label>
                                        </div>
                                        <div class="form-check mb-2 ml-3">
                                            <input type="checkbox" class="form-check-input" id="inputRememberPassword"
                                                value="/">
                                            <label for="inputRememberPassword">Remember Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="#"
                                                style=" font-size: 15px; text-decoration: underline;">Forgot
                                                Password?</a>
                                            <a class="btn btn-primary" href="{{ route('home') }}">Login</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-4">
                                    <div class="small" style="font-size: 15px; text-decoration: underline;"> <a
                                            href="{{ route('signup') }}">Need an account? Sign Up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script> -->
    <script src="js/scripts.js"></script>
    <script src="./js/jquery-3.2.1.js"></script>
    <script src="./bootstrap/bootstrap.min.js"></script>
    <script src="./bootstrap/popper.min.js"></script>

</body>

</html>
@section('title')
    Login in
@endsection
