@extends('layouts.main')


@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Profile</h1>
            <form action="/profile" method="post">
                @csrf
                <div class="d-flex mb-3 justify-content-center align-items-center">
                    {{-- <div class="small-12 medium-2 large-2 columns justify-content-center align-items-center"> --}}
                      <div class="circle">
                        <img class="profile-pic img-e" src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg">
                      </div>
                      <div class="p-image">
                        <i class="fa fa-camera upload-button"></i>
                         <input class="file-upload" type="file" accept="image/*"/>
                      </div>
                   {{-- </div> --}}
                 </div>
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name', $user->name) }}">
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}.
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username', $user->username) }}">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating  mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email', $user->email) }}" disabled>
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}.
                    </div>
                    @enderror
                </div>
                {{-- <div class="input-group has-validation mb-2">

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
                </div> --}}
            
                <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Submit</button>
            </form>
            {{-- <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login!</a></small> --}}
        </main>
    </div>
</div>

@endsection

