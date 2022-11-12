@extends("layouts.main")

@section('title')
  <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-md-8">
        <article class="mt-2">
          <h4>{{ $post->title }}</h4>
          <p>By <a href="/blogs?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blogs?{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
          @if ($post->image)
            <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
          @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
          @endif
          <article class="my-3">
            <p class="mb-2">{!! $post->body !!}</p>
          </article>
        </article>
        <a href="/blogs">Back</a>
      </div>
    </div>
  </div>
  

  
@endsection