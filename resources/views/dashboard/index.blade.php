@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selamat Bekerja, {{ auth()->user()->name}}</h1>
</div>

<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="display-4 fst-italic">Welcome To Campus Explorer</h1>
        <p class="lead my-3">Terima kasih telah berkontribusi dalam menyediakan 
          informasi berkualitas kepada calon mahasiswa dan masyarakat luas.
          Pastikan setiap informasi yang Anda bagikan akurat dan terkini, sehingga dapat membantu 
          banyak orang dalam membuat keputusan pendidikan yang tepat. Mari bersama-sama menciptakan 
          sumber informasi yang terpercaya dan bermanfaat!</p>
      </div>
      <div class="col-lg-6">
        <img src="{{ asset('asset/logokampuss.jpg') }}" class="card-img-top" alt="Gambar">
      </div>
    </div>
  </div>
</main>
@endsection