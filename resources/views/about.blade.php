@extends('layouts.main')

@section('title')
  <h1>Halaman About</h1>

  <div class="data mt-5">
    <h4>{{ $nama }}</h4>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $nama }}" class="img-thumbnail rounded-circle" width="200">
  </div>
@endsection


