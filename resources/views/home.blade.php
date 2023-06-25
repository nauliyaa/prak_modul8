@extends('layouts.app')
@vite('resources/sass/app.scss')
@section('content')

<div class="container-fluid ">
<div class="container pt-5 ">
<div class="row d-flex justify-content-center pt-5">
<div class="col-sm-6">
  <h2 class="my-4  ">Dashboard</h2>
  <p class="mb-4">Website ini dibuat untuk keperluan Ujian Tengah Semester mata kuliah Pemrograman Framework. Terdapat halaman profil (About), dan list barang. Fitur yang terdapat didalamnya antara lain CRUD. </p>
  <button class="btn btn-primary mt-2"><a class="dropdown-item text-light" href="{{ route('barangs.index') }}">List Product</a></button>
  </div>
  <div class="col-sm-6 d-flex justify-content-center">
  <img class="img-fluid-center" src="{{ Vite::asset('resources/images/dashboard.png') }}" alt="New York" width="90%"> 
</div>
</div>
</div>
</div>
</div>
</body>
@endsection

