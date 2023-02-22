@extends('layouts.main')


@section('container')

{{-- <div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}.
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating  mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}.
                    </div>
                    @enderror
                </div>
                <div class="input-group has-validation mb-2">

                    <div class="form-floating is-invalid">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <span class="input-group-text" onclick="password_show_hide();">
                        <i class="fas fa-eye" id="show_eye"></i>
                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                    </span>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}.
                    </div>
                    @enderror

                </div>

                <div class="input-group">
                    <div class="form-floating">
                        <input type="password" name="password_confirmation" class="form-control rounded-bottom" id="password" placeholder="Konfirmasi Password" required>
                        <label for="password">Konfirmasi Password</label>
                    </div>
                </div>
            
                <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login!</a></small>
        </main>
    </div>
</div> --}}

<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/register" method="post">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}.
                </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating  mb-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}.
                </div>
                @enderror
            </div>
            <div class="input-group has-validation mb-2">
  
                <div class="form-floating is-invalid">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <span class="input-group-text" onclick="password_show_hide();">
                    <i class="fas fa-eye" id="show_eye"></i>
                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                </span>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}.
                </div>
                @enderror
  
            </div>
  
            <div class="input-group">
                <div class="form-floating">
                    <input type="password" name="password_confirmation" class="form-control rounded-bottom" id="password" placeholder="Konfirmasi Password" required>
                    <label for="password">Konfirmasi Password</label>
                </div>
            </div>
            <button class="w-100 btn btn-lg btn-dark mt-3" type="submit" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Register</button>
        </form>
        <small class="d-block text-center mt-3">Already Registered? <button class="border-0 text-primary bg-white" data-bs-target="#exampleModalToggle1" data-bs-toggle="modal" onclick="register(this)">Login!</button></small>
        </div>
      </div>
    </div>
  </div>


@endsection
