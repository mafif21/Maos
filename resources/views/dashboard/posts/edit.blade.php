@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 fw-semibold">Edit Post</h1>
  </div>

  <div class="col-lg-8">
    <form method="POST" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
      @method('put')
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
        @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required readonly value="{{ old('slug', $post->slug) }}">
        @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category_id">
          @foreach ($categories as $category)
            @if (old('category_id', $post->category_id) == $category->id)
              <option selected value="{{ $category->id }}">{{ $category->name }}</option>
            @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label @error('image') is-invalid @enderror">Post Image</label>
        <input type="hidden" name="oldImage" value="{{ $post->image }}">
        @if ($post->image)
          <img src="{{ asset('storage/'.$post->image) }}" class="img-preview img-fluid col-sm-5 mb-3 d-block">
        @else
          <img src="" class="img-preview img-fluid col-sm-5 mb-3">
        @endif
        <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
        @error('image')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        @error('body')
          <p class="text-danger">{{ $message }}</p>
        @enderror
        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
        <trix-editor input="body"></trix-editor>
      </div>
      <button type="submit" class="btn btn-primary mb-5">Update Post</button>
    </form>
  </div>
</main>

<script>
  const title = document.querySelector('#title')
  const slug = document.querySelector('#slug')

  title.addEventListener('change', function(){
    fetch('/dashboard/posts/checkslug?title=' + title.value)
      .then((response) => response.json())
      .then((data) => slug.value = data.slug )
  })

  function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }

  }
</script>
@endsection