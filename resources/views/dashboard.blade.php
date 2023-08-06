<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>publish journals</h1>
    @foreach ($published as $paper)
        <div class="card">
            <img src="http://www.lorempixel.com/500/500/city/1" alt=""
                class="card-img-top img-fluid">
            <div class="card-body">
                <h4 class="card-title">{{ $paper->title }}</h4>
                <small class="text-muted">Written by Liwal 07/20</small>
                <hr>
                <p class="card-text">
                    {{ $paper->coverPhoto }}
                </p>
                <form method="POST" action="{{ route('paper.download') }}">
                    @csrf
                    <input name="storage" type="hidden" value="{{ $paper->article }}" />
                    <button>DownLoad</button>
                </form>
                <img src="{{ asset($paper->coverPhoto) }}" alt="Image">  
            </div>
        </div>
    @endforeach
    <h1>pending journals</h1>
    @foreach ($pending as $paper)
        <div class="card">
            <img src="http://www.lorempixel.com/500/500/city/1" alt=""
                class="card-img-top img-fluid">
            <div class="card-body">
                <h4 class="card-title">{{ $paper->title }}</h4>
                <small class="text-muted">Written by Liwal 07/20</small>
                <hr>
                <p class="card-text">
                    {{ $paper->coverPhoto }}
                </p>
                <form method="POST" action="{{ route('paper.download') }}">
                    @csrf
                    <input name="storage" type="hidden" value="{{ $paper->article }}" />
                    <button>DownLoad</button>
                </form>
                <form method="POST" action="{{ route('paper.publish') }}">
                    @csrf
                    <input name="id" type="hidden" value="{{ $paper->id }}" />
                    <button>Publish</button>
                </form>
                <img src="{{ asset($paper->coverPhoto) }}" alt="Image">  
            </div>
        </div>
    @endforeach
    <h1>Community members </h1>
    @foreach ($members as $member)
        <div class="card">
            <img src="http://www.lorempixel.com/500/500/city/1" alt=""
                class="card-img-top img-fluid">
            <div class="card-body">
                <h4 class="card-title">{{ $member->firstName }}</h4>
                <small class="text-muted">Written by Liwal 07/20</small>
                <hr>
                <p class="card-text">
                    {{ $paper->description }}
                </p>
            </div>
        </div>
    @endforeach
</body>
</html>
