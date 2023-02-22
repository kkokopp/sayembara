
    <div class="modal fade" id="exampleModalToggle1" aria-labelledby="exampleModalToggleLabel1" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="h4 mb-3 ms-auto text-center">Please Login</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            @if (session()->has('success'))
                <script>
                    window.onload = function(){
                        $('#exampleModalToggle1').modal('show')
                    }
                </script>
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

            <form action="/login" method="post">
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
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="remember" id="remember">
                <label class="form-check-label" for="remember">
                 <p>Remember Me</p> 
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-dark" type="submit">Login</button>
              <div class="d-flex mt-3 w-100 justicy-content-center align-items-center">
                  <a href="{{ route('google.login') }}" class="btn btn-lg btn-outline-dark w-100"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262"><path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"/><path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"/><path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"/><path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"/></svg></a>
              </div>
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
@endif

