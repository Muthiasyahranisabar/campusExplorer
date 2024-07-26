@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $posts->title }}</h2>
                <p>By. <a href="/blog?author={{ $posts->author->username }}" class="text-decoration-none">{{ $posts->author->name }}</a>
                <a href="/blog?category={{ $posts->category->slug }}" class="text-decoration-none">{{ $posts->category->nama }}</a></p>
                <div class ="text-center">
                @if ($posts->image)
                    <img src="{{ asset('storage/' . $posts->image) }}" class="img-fluid rounded-start" style="max-width: 300px;" alt="{{ $posts->category->nama }}">
                @else
                    <img src="{{ asset('asset/tes.jpg') }}" alt="" class="img-fluid rounded-start" style="max-width: 300px;">
                @endif
                </div>
                <article class="my-3 fs-5">{!! $posts->body !!}</article> 
                <br>
                <a href="/blog" class="d-block mt-3">Kembali ke Post</a>
            </div>  
        </div>
    </div>
@endsection
