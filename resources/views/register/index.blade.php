@extends('layouts.main')

@section('title')
<div class="row justify-content-center">
  <div class="col-md-5">
    <main class="form-registration w-100 m-auto">
      <form action="/register" method="POST">

        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
    
        <div class="form-floating">
          <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" name="name" required>
          <label for="name">Name</label>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" required autocomplete="off">
          <label for="username">Username</label>
          @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email"  required>
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required autocomplete="off">
          <label for="password">Password</label>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
    
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
      </form>
      <small class="text-center d-block mt-2">
        Already Register? <a href="/login" class="text-decoration-none">Login Now</a>
      </small>
    </main>
  </div>
</div>
@endsection