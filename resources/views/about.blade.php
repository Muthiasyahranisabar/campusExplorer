@extends('layouts.main')

@section('container')

<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="display-4 fst-italic">Selamat Datang di Campus Explorer!</h1>
        <p class="lead my-3">Kami senang menyambut Anda di Campus Explorer, sebuah platform yang dirancang untuk memudahkan pengelolaan dan akses informasi kampus.</p>
      </div>
      <div class="col-lg-6">
        <img src="{{ asset('asset/logokampuss.jpg') }}" class="card-img-top" alt="Gambar">
      </div>
    </div>
  </div>
</main>

@endsection
