@extends('layouts.main')

@section('title')
  <h1>Categories</h1>

  <div class="container mt-4">
    <div class="row">
      @foreach ($categories as $category)
        <div class="col-md-4">
          <a href="/blogs?category={{ $category->slug }}">
            <div class="card text-white">
              <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title flex-fill p-2 text-center fs-4 fw-bold" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
@endsection