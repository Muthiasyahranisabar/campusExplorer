@extends('layouts.main')

@section('container')

    <h1 class="mb-3 text-center">Semua Informasi Kampus</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6 container-with-padding">
            <div class="search-background">
                <form action="/blog">
                    @if (request('category'))
                    <input type="hidden" name="category" value="{{request('category')}}">
                    @endif
                    @if (request('author'))
                    <input type="hidden" name="author" value="{{request('author')}}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Pencarian..." name="search" value="{{request('search')}}">
                        <button class="btn btn-outline-info" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if($posts->count())
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)">
                    <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none text-white">
                        {{ $posts[0]->category->nama }}</a>
                </div>
                <div class="row g-0">
                    <div class="col-md-4">
                        @if ($posts[0]->image)
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid rounded-start" 
                        alt="{{ $posts[0]->category->nama }}" style="max-width: 300px;">
                        @else
                        <img src="{{ asset('asset/logokampuss.jpg') }}" alt="" class="img-fluid rounded-start" style="max-width: 300px;">
                        @endif
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $posts[0]->title }}</h5>
                            <p>
                                <small class="text-muted">
                                    By. <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none text-dark">
                                        {{ $posts[0]->author->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ $posts[0]->excerpt }}</p>
                            <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-outline-primary">Lanjut Baca..</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <div class="container">
            <div class="row">
                @foreach($posts->skip(1) as $post)
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0, 0.7)">
                            <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none text-white">
                                {{ $post->category->nama}}</a></div>
                            <div class="row g-0">
                                <div class="col-md-4">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid w-100 rounded-start col-sm-3" 
                                    alt="{{ $post->category->nama }}" class="img-fluid" style="max-width: 300px;">
                                @else
                                    <img src="{{ asset('asset/logokampuss.jpg') }}" alt="" class="img-fluid w-100 rounded-start" 
                                    style="max-width: 300px;">
                                @endif
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p>
                                            <small class="text-muted">
                                                By. <a href="/blog?author={{ $post->author->username}}" class="text-decoration-none text-dark">
                                                {{ $post->author->name}}</a> {{ $post->created_at->diffForHumans() }}
                                            </small>
                                        </p>
                                        <p class="card-text">{{ $post->excerpt }}</p>
                                        <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-outline-primary">Lanjut Baca..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach        
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
<div class="d-flex justify-content-end">
{{ $posts->links() }}
</div> 

@endsection
