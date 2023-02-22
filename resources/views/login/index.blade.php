@extends('layouts.main')


@section('container')
    
{{-- <div class="modal" id="exampleModalToggle1" aria-labelledby="exampleModalToggleLabel1" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
      
          @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          <form action="/login" method="POST">
            @csrf
            <div class="form-row">
                <div class="col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        <div class="form-floating ">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}" aria-describedby="basic-addon1">
                            <label for="email">Email address</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
             </div>
             <div class="col-12">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                    <div class="form-floating p-0">
                        <input type="password" name="password" id="password" class="form-control" id="password" placeholder="Password" required aria-describedby="basic-addon1">
                        <label for="password">Password</label>
                    </div>
                    <span class="input-group-text" onclick="password_show_hide();">
                        <i class="fas fa-eye" id="show_eye"></i>
                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                    </span>
                </div>
            </div>
            <button class="w-100 btn btn-lg btn-dark" type="submit">Login</button>
            </div>
        </form>
        <small class="d-block text-center mt-3">Not Registered?<button class="border-0 bg-white text-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Register Now!</button></small>
        </div>
      </div>
    </div>
  </div>

@if($errors->has('email') || session()->has('loginError'))
  <script>
      window.onload = function(){
          $('#exampleModalToggle1').modal('show')
      }
  </script>
@endif --}}

<div class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

@endsection