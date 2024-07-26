<!-- resources/views/home.blade.php -->

@extends('layouts.main')

@section('container')
<div class="container mt-5">
    <!-- Hero Section -->
    <div class="hero position-relative text-center p-5 rounded mb-4" style="background-image: url('https://source.unsplash.com/featured/?library'); background-size: cover; background-position: center; height: 400px;">
        <div class="hero-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 1;"></div>
        <h1 class="display-4 text-white position-relative" style="z-index: 2;">Welcome to Campus Explorer</h1>
        <p class="lead text-white position-relative" style="z-index: 2;">Cari informasi Kampus impianmu</p>
        <a href="/blog" class="btn btn-primary btn-lg position-relative mt-3" style="z-index: 2;"><i class="bi bi-book"></i> Visit Our Blog</a>
    </div>
    </div>
@endsection
