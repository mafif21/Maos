@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <article class="mt-2">
    <h4>{{ $post->title }}</h4>
    <a href="/dashboard/posts" class="btn btn-success my-3"><span data-feather="chevron-left" class="align-text-bottom"></span>Back To All My Post</a>
    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning my-3"><span data-feather="edit" class="align-text-bottom"></span>Edit</a>
    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
      @method('delete')
      @csrf
      <button class="btn btn-danger my-3" onclick="return confirm('Are your sure? ')"><span data-feather="x-circle" class="align-text-bottom"></span>Delete</button>
    </form>
    @if ($post->image)
      <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
    @else
      <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
    @endif
          
    <article class="my-3">
      <p class="mb-2">{!! $post->body !!}</p>
    </article>
  </article>
</main>
@endsection


