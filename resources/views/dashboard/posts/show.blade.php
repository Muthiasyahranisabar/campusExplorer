@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-success my-3">
                    <i class="bi bi-arrow-left-circle"></i> Kembali ke Post
                </a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning my-3">
                    <i class="bi bi-pencil-square"></i> Edit pos
                </a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger my-3" onclick="return confirm('Anda yakin ingin menghapus?')">
                        <i class="bi bi-x-circle"></i> Hapus
                    </button>
                </form>

                <div class="text-center"> <!-- Tambahkan class text-center -->
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded mb-3" alt="{{ $post->category->nama }}" style="width: 100%; height: auto;">
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->nama }}" alt="{{ $post->category->nama }}" class="img-fluid rounded mb-3" style="width: 100%; height: auto;">
                    @endif
                </div>

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
