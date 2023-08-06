<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addpaper</title>
    <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
</head>

<body style="background-color: #413f3f;">
    <div class="LayoutAuthentication">
        <div class="LayoutAuthentication-content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-4">
                                <div class="card-header text-center bg-primary text-white">
                                    <h3>Add Paper</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('paper.store') }}" class="Custom_Form"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" name="title">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="authorId" value="{{ auth()->id() }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <input type="text" class="form-control" name="category">
                                        </div>
                                        <div class="form-group">
                                            <label for="file">Article Upload</label>
                                            <input type="file" class="form-control-file" name="article">
                                            <small class="form-text text-muted">Max Size 3mb</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="file"> Cover photo Upload</label>
                                            <input type="file" class="form-control-file" name="coverPhoto">
                                            <small class="form-text text-muted">Max Size 2mb</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="body">Description</label>
                                            <textarea class="form-control" name="description"></textarea>
                                        </div>
                                        <div class="card-footer">
                                            <button
                                                class="btn btn-primary mr-auto
                                        ">Submit</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
    </div>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
