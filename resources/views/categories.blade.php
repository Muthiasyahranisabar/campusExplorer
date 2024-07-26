@extends('layouts.main')

@section('container')

    <h1 class="mb-5">Post Categories</h1>

    <div class="container">
        <div class="row">    
        @foreach($categories as $category)
            <div class="col-md-4 mb-3">
                <a href="/blog?category={{ $category->slug }}" class="text-white">
                    <div class="card text-bg-dark text-white">
                    <img src="{{ asset('asset/logokampuss.jpg') }}" class="img-fluid w-100 rounded-start p-0" alt="">
                    <div class="card-img-overlay d-flex align-items-center">
                        <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0,0,0, 0.7)">{{ $category->nama }}</h5>
                    </div>
                </a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection