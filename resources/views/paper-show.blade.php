@extends('layout.masterlayout')

@section('content')

<section id="guide">
    <div class="contianer">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-lg-6 mt-3">
                <h2><strong>{{ $paper->title }}</strong></h2>
               <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $paper->id }}</td>
                    </tr>
                    <tr>
                        <th>Author</th>
                        <td>{{ $paper->author->firstName }}  {{  $paper->author->lastName }}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{ $paper->category }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $paper->description  }}</td>
                    </tr>
                    <tr>
                        <th>Cover Photo</th>
                        <td><img src="{{asset($paper->coverPhoto)}}" style="width: 100%" height="250" alt=""></td>
                    </tr>
                    <tr>
                        <th>Article</th>
                        <td> <iframe src="{{$paper->article}}" style="width: 100%;height:400px" frameborder="0"></iframe> </td>
                    </tr>
                </tbody>
               </table>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>

@endsection
