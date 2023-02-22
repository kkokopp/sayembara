
<nav class="navbar navbar-expand-lg sticky-top shadow bg-white">
  <div class="container flex-row">
    {{-- <div class="container-fluid ps-3 pe-3"> --}}
      <div class="d-flex me-auto">
        <a class="navbar-brand m-0 p-0" href="#"><span class="d-inline d-sm-none"><button class="btn p-0 btn-dark fw-bold">S's</button></span></a>
        <a class="navbar-brand m-0 p-0" href="#"><span class="d-none d-sm-inline"><button class="btn p-1 btn-dark"><h3>Sayembara's</h3></button></span></a>
      </div>

      <button class="d-block d-lg-none d-xl-none border-0 bg-white m-1 navbar-light collapsed"  data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse ps-3 pe-3 navbr" id="navbarNav">
        <hr>
        <ul class="navbar-nav" >
          @if (Auth::user())              
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/beranda">My Learning</a>
          </li>
          @else              
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          @endif
          @if (Auth::user())
          @else
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="#about">About</a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link {{ ($title === "All Posts") ? 'active' : '' }}" href="/posts">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Category") ? 'active' : '' }}" href="/categories" class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
            <div class="dropdown">
              <ul class="dropdown-menu mt-4 dropdown-menu-end">
                @foreach(App\Models\Category::all() as $c)
                <li><a class="dropdown-item" href="/posts?category={{ $c->slug }}">{{ $c->name }}</a></li>
                @endforeach
              </ul>
            </div>
          </li>
          @if(Auth::user() && auth()->user()->role == 'user')
          <li class="nav-item">
              <form action="/user/{{ auth()->user()->username }}" method="post">
                @csrf
                <input type="text" name="role" id="role" value="admin" hidden>
                <button class="btn bg-purple-ver nav-link fw-bold text-white">Join Tutor</button>
            </form>
            </li>
          @endif
        </ul>
      </div>

    @if (Auth::user())
      <div class="dropdown">
        <div class="d-flex me-3" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="dropwdown-toggle nav-link" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
              <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
            </svg>
              <span class="badge badge-secondary bg-dark">{{ App\Models\Favorite::where('user_id', auth()->user()->id)->count() }}</span>
              
          </span>
        </div>
        <ul class="dropdown-menu mt-4 drop-width dropdown-menu dropdown-menu-end bg-white p-1 overflow-y-auto" style="max-height: 50vh;">
          @if(App\Models\Favorite::where('user_id', auth()->user()->id)->count())
          @foreach( App\Models\Favorite::where('user_id', auth()->user()->id)->get() as $d )
          <div class="card mb-2">
            <div class="card-body mb-0 pb-0 d-flex">
              {{-- <img src="https://source.unsplash.com/5x5?{{ $d->post->category->name }}" class="card-img-top" alt="category"> --}}
              <a class="card-title me-auto text-decoration-none fw-bold" href="/posts/{{ $d->post->slug }}">{{  \Illuminate\Support\Str::limit($d->post->title , 25, $end='...') }}</a>
              <form action="/favorite/hapus/{{ $d->id }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn text-secondary"><i class="bi bi-trash"></i></button>
               </form>
              </div>
              <div class="card-body mt-0 pt-0 mb-0 pb-0">
                <p class="w-body">{{ $d->post->author->name }}</p>
              </div>
          </div>
          @endforeach
          @else
          <div class="container pt-3 d-flex justify-content-center align-items-center" style="min-height: 50vh;">
            <a href="/post"></a><h6 class="text-center">Belum ada post favorite</h6>
          </div>
          @endif
        </ul>
      </div>
      @else
      <span class="dropwdown-toggle nav-link" type="button">
        <i class="bi bi-star me-3"></i>
      </span>
      @endif

      {{-- <div class="dropdown">
        <div class="d-flex me-3">
          <span class="dropwdown-toggle nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-star"></i>
              @if (Auth::user())
              <span class="badge badge-secondary bg-dark">{{ App\Models\Favorite::where('user_id', auth()->user()->id)->count() }}</span>
              @endif
          </span>
        </div>
        <ul class="dropdown-menu" id="favorite">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div> --}}

      <ul class="dropdown mt-auto mb-auto ps-0">
        @auth
        <li class="nav-item d-flex list-group">
          <a class="nav-link dropdown-toggle d-flex flex-wrap justify-content-center align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="h2 purple-font">
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
            </span>
            {{-- <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle"> --}}
          </a>
          <ul class="mt-4 dropdown-menu dropdown-menu-end bg-white border-0 shadow" id="profil_drop">
            <li>
              <a href="" class="ms-3 me-3 text-dark d-flex flex-nowrap justify-content-center align-items-center text-decoration-none">
                <span class="h2 me-3 purple-font">
                  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>
                </span>
                {{-- <img src="https://github.com/mdo.png" alt="" width="40" height="40" class="rounded-circle me-3"> --}}
                <div class="">
                    <span class="h6 mb-0 d-flex flex-nowrap">{{ auth()->user()->name }}</span>
                    <span>{{ auth()->user()->email }}</span>
                    @if(auth()->user()->role == 'user')
                      <span class="color-f fw-bold">Student</span>
                    @endif
                </div>
              </a>
            </li>
            <hr class="m-2">
            @can('admin' || 'superUser')
            <li class="m-1 p-1 h li-font">
              <a class="d-flex ms-2 justify-content-start align-tems-end text-dark text-decoration-none" href="/dashboard">
                <i class="fs-6 bi bi-layout-text-sidebar-reverse me-2 "></i>
                <h6 class="mb-1 pb-0 mt-1 font-weight-bold font" id="font" name="font">My Tutor Dashboard</h6>
              </a>
            </li>
            @endcan
            <li class="m-1 p-1 h li-font">
              <a class="d-flex ms-2 justify-content-start align-tems-end text-dark text-decoration-none" href="/beranda">
                <i class="bi bi-card-heading me-2 fs-6"></i>
                <h6 class="mb-1 pb-0 mt-1 font-weight-bold font" id="font">My Learning</h6> 
              </a>
            </li>
            <hr>
            <li class="m-1 p-1 h li-font">
              <form action="/logout" method="POST" id="logout-form">
                @csrf
                <a type="submit" class="d-flex ms-2 justify-content-start align-tems-end text-dark text-decoration-none" onclick="document.getElementById('logout-form').submit()">
                  <i class="fs-6 bi bi-arrow-right-square me-2"></i>
                  <h6 class="mb-1 pb-0 mt-1 font-weight-bold font" id="font">Logout</h6> 
                </a>
                {{-- <button type="submit" class="li-font d-flex ms-0 p-1 ps-3 justify-content-start align-tems-center border-0 dropdown-item btn btn-lg"><i class="fs-6 bi bi-arrow-right-square me-2"></i></i><h6 class="mb-0 pb-0 mt-1 font-weight-bold font">Logout</h6></button> --}}
              </form>
          </ul>
        </li>
        @else
        <div class="d-flex">
          <li class="nav-item list-group me-3">
            <button class="btn btn-outline-dark fw-bold" data-bs-target="#exampleModalToggle1" data-bs-toggle="modal">Login</button>
          </li>
          <li class="nav-item list-group">
            <button class="btn bg-purple-ver text-white fw-bold" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Sign Up</button>
          </li>
        </div>
      @endauth
      </ul>

    {{-- </div> --}}
  </div>
</nav>

