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
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input name="firstName" type="text" class="form-control py-3" id="first-name"
                                                        placeholder="FirstName" :value="old('firstName')">
                                                    <div id="Name"></div>
                                                    <label for="first-name"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input name="lastName" type="text" class="form-control py-3"
                                                    id="last-name"placeholder="LastName" :value="old('lastName')">
                                                    <div id="LastName"></div>
                                                    <label for="last-name"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input name="email" type="email" class="form-control py-3" id="email"
                                                placeholder="Emailaddress " :value="old('email')">
                                            <div id="EMAIL"></div>
                                            <label for="inputEmail"></label>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input name="password" type="password" class="form-control py-3" id="password"
                                                        placeholder="password" :value="old('password')">
                                                    <div id="pass"></div>
                                                    <label for="pass"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input name="confirmPassword" type="password" class="form-control py-3"
                                                        id="confirmpassword"placeholder="Confirm Password" :value="old('confirmPassword')">
                                                    <div id="confirmpass"></div>
                                                    <label for="Confirm-password"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
                                        <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        <x-input-error :messages="$errors->get('confirmPassword')" class="mt-2" />
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"> 
                                                <button class="btn btn-primary btn-block d-block">Sign Up</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="card-footer text-center">
                                        <div class="small" style="font-size: 15px; text-decoration: underline;"><a
                                                href="{{ route('login') }}">Already have an account? Goto Login</a>
                                        </div>
                                </div>
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

