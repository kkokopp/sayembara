<header class="navbar flex-md-nowrap pt-3">
  {{-- <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> --}}
  {{-- <input class="form-control form-control-dark w-100 rounded border-0" type="text" placeholder="Search" aria-label="Search"> --}}
  <div class="container-fluid float-end pe-2 ps-2">
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center">
      <h1 class="h3">{{ $title }}</h1>
    </div>
    <div class="d-block d-lg-none d-xl-none ms-auto me-2">
      <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvasWithBothOptions">
        <i class="fs-6 bi bi-list"></i>
      </button>
    </div>
    <div class="dropdown">
      <ul class="dropdown mt-auto mb-auto ps-0">
        @auth
        <li class="nav-item d-flex list-group">
          <a class="nav-link dropdown-toggle d-flex flex-wrap justify-content-center align-items-center" href="#"
          role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="h2 purple-font">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
          </span>
          <span class="ms-2 fw-bold purple-font d-none d-sm-block"> {{ auth()->user()->name }}</span>
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
                    @if(auth()->user()->role == 'admin')
                      <span class="color-f fw-bold">Teacher</span>
                    @endif
                </div>
              </a>
            </li>
            <hr class="m-2">
            @can('admin')
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
        <li class="nav-item list-group">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle1" data-bs-toggle="modal">Login</button>
        </li>
      @endauth
      </ul>
    </div>
  </div>
</header>
<hr class="mt-0">
{{-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header> --}}