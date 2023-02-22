<div class="col col-auto sticky-top col-md-3 me-auto col-xl-2 px-sm-2 px-0 bg-purple min-vh-100 d-lg-block d-xl-block d-none">
          <div class="flex-column" id="sidebar">
              <a href="/" class="d-flex align-items-center p-3 mb-md-0 me-md-auto text-white text-decoration-none">
                  <span class="fs-4 fw-bold d-none d-sm-inline">Sayembara's</span>
              </a>
              <ul class="nav nav-pills flex-column mb-auto" aria-current="page">
                  {{-- <li class=" nav-item mb-2 rounded d-flex" >
                      <a class="nav-link ms-3 px-0 align-middle text-light" href="/" id="home_link" onmouseover="link_hov(this)" onmouseout="link_out(this)">
                          <i class="fs-6 bi bi-house"></i> <span class="h6 ms-3 d-none d-sm-inline">Home</span> 
                      </a>
                  </li> --}}
                  <li class="{{ Request::is('dashboard') ? 'border border-light' : '' }} nav-item mb-2  rounded d-flex">
                      <a class="nav-link px-0 ms-3 align-middle text-light" href="/dashboard" onmouseover="link_hov(this)" onmouseout="link_out(this)">
                          <i class="fs-6 bi-speedometer2"></i> <span class="h6 ms-3 d-none d-sm-inline">Dashboard</span> 
                      </a>
                  </li>
                  <li  class="{{ Request::is('dashboard/posts*') ? 'border border-light' : '' }} nav-item mb-2 rounded flex-column align-items-start justify-content-center">
                    <div class="d-flex p-auto">
                      <a class="ms-3 mb-auto me-auto nav-link px-0 align-middle text-light" href="/dashboard/posts" onmouseover="link_hov(this)" onmouseout="link_out(this)">
                        <i class="fs-6 bi bi-file-earmark-medical"></i><span class="h6 ms-3 d-none d-sm-inline">Workshop</span>
                      </a>
                      <a href="#mypost-collapse" id="drop" data-bs-toggle="collapse" class="ms-auto mt-2 me-3 {{ Request::is('dashboard/posts*') ? 'text-dark' : 'text-light' }} align-items-center text-light align-middle m-0 p-0">
                        <span class="text-light p-0 border-0" onclick="dropdown_show_hide(this);">
                          <i class="p-0 m-0 bi bi-chevron-compact-down d-block" id="show_drop"></i>
                          <i class="p-0 m-0 bi bi-chevron-compact-up d-none" id="hide_drop"></i>
                        </span>
                      </a>
                    </div>

                    <div class="collapse" id="mypost-collapse">
                        <ul class="nav flex-column pt-2 ps-4 pb-3" >
                          <li>
                            <a href="/dashboard/posts/create" class="dropdown-item mb-1 text-light"><span class="ms-1 d-none d-sm-inline"> Create</span>
                          </li>
                          <li>
                            <a href="/dashboard/posts" class="dropdown-item text-light"><span class="fs-8 ms-1 d-none d-sm-inline"> View</span>
                            </a>
                          </li>
                        </ul>
                    </div>
                   
                  </li>
                  @if(auth()->user()->role == 'superAdmin')
                    <hr>
                    <div class="ms-3">
                      <h6 class="text-white">SUPER USER</h6>
                    </div>
                   </li>
                   <li class="{{ Request::is('dashboard/categories') ? 'border border-light' : '' }} nav-item mb-2  rounded d-flex">
                     <a class="nav-link px-0 ms-3 align-middle text-light" href="/dashboard/categories" onmouseover="link_hov(this)" onmouseout="link_out(this)">
                      <i class="fs-6 bi bi-grid-3x2-gap"></i></i> <span class="h6 ms-3">Kategori</span> 
                     </a>
                 </li>
                  @endif
              </ul>
              <hr>
          </div>
</div>

          {{-- Offcanvas --}}
          <div class="offcanvas bg-purple offcanvas-start d-block d-lg-none d-xl-none" tabindex="-1" id="offcanvas" style="width: 250px">
            <div class="d-flex flex-wrap justify-content-center align-items-center">
                <a href="/" class="d-flex align-items-center p-3 mb-md-0 me-md-auto text-white text-decoration-none">
                  <span class="fs-4 fw-bold ">Sayembara's</span>
                </a>
                <button type="button" class="ms-auto me-2 btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <ul class="nav nav-pills flex-column mb-auto" aria-current="page">
              {{-- <li class=" nav-item mb-2 rounded d-flex" >
                  <a class="nav-link ms-3 px-0 align-middle text-light" href="/" id="home_link" onmouseover="link_hov(this)" onmouseout="link_out(this)">
                      <i class="fs-6 bi bi-house"></i> <span class="h6 ms-3">Home</span> 
                  </a>
              </li> --}}
              <li class="{{ Request::is('dashboard') ? 'border border-light' : '' }} nav-item mb-2  rounded d-flex">
                  <a class="nav-link px-0 ms-3 align-middle text-light" href="/dashboard" onmouseover="link_hov(this)" onmouseout="link_out(this)">
                      <i class="fs-6 bi-speedometer2"></i> <span class="h6 ms-3">Dashboard</span> 
                  </a>
              </li>
              <li  class="{{ Request::is('dashboard/posts*') ? 'border border-light' : '' }} nav-item mb-2 rounded flex-column align-items-start justify-content-center">
                <div class="d-flex p-auto">
                  <a class="ms-3 mb-auto me-auto nav-link px-0 align-middle text-light" href="/dashboard/posts" onmouseover="link_hov(this)" onmouseout="link_out(this)">
                    <i class="fs-6 bi bi-file-earmark-medical"></i><span class="h6 ms-3">Workshop</span>
                  </a>
                  <a href="#mypost-collapse" id="drop" data-bs-toggle="collapse" class="ms-auto mt-2 me-3 {{ Request::is('dashboard/posts*') ? 'text-dark' : 'text-light' }} align-items-center text-light align-middle m-0 p-0">
                    <span class="text-light p-0 border-0" onclick="dropdown_show_hide(this);">
                      <i class="p-0 m-0 bi bi-chevron-compact-down d-block" id="show_drop"></i>
                      <i class="p-0 m-0 bi bi-chevron-compact-up d-none" id="hide_drop"></i>
                    </span>
                  </a>
                </div>

                <div class="collapse" id="mypost-collapse">
                    <ul class="nav flex-column pt-2 ps-4 pb-3" >
                      <li>
                        <a href="/dashboard/posts/create" class="dropdown-item mb-1 text-light"><span class="ms-1"> Create</span>
                      </li>
                      <li>
                        <a href="/dashboard/posts" class="dropdown-item text-light"><span class="fs-8 ms-1"> View</span>
                        </a>
                      </li>
                    </ul>
                </div>
               <hr>
               @if(auth()->user()->role == 'superAdmin')
               <hr>
               <div class="ms-3">
                 <h6 class="text-white">SUPER USER</h6>
               </div>
              </li>
              <li class="{{ Request::is('dashboard/categories') ? 'border border-light' : '' }} nav-item mb-2  rounded d-flex">
                <a class="nav-link px-0 ms-3 align-middle text-light" href="/dashboard/categories" onmouseover="link_hov(this)" onmouseout="link_out(this)">
                  <i class="fs-6 bi bi-grid-3x2-gap"></i></i> <span class="h6 ms-3">Kategori</span> 
                </a>
            </li>
             @endif
          </ul>
              <hr>
            {{-- <div class="dropup pb-2 ms-4 me-4">
              <a href="#" class="d-flex justify-content-between align-items-center link-light text-decoration-none" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false" >
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="float-start  rounded-circle me-2">
                <span class="mt-auto mb-0" onmouseover="link_hov(this)" onmouseout="link_out(this)"><h6>{{ auth()->user()->name }}</h6></span>
                <i class="bi bi-chevron-compact-right ms-auto"></i>
              </a>
              <ul class="dropdown-menu ms-3 text-small border-0 shadow" aria-labelledby="dropdownUser2">
                <li>
                  <a href="" class="ms-3 me-3 text-dark d-flex justify-content-center align-items-center text-decoration-none">
                    <img src="https://github.com/mdo.png" alt="" width="40" height="40" class="rounded-circle me-3">
                    <div class="d-flex flex-wrap">
                        <span class="h6 d-flex">{{ auth()->user()->name }}</span>
                        <span>{{ auth()->user()->email }}</span>
                    </div>
                  </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="px-3 btn border-0"> Logout <span data-feather="log-out" ></span></button>
                    </form>
                </li>
              </ul>
            </div> --}}
          </div>

{{-- <div class="offcanvas offcanvas-start p-3 rounded" style="width: 280px" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions">
  <div class="offcanvas-header p-3">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Sayembara's</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class=" offcanvas-body p-0 overflow-hidden">
    <div class="position-sticky sidebar-sticky ">
      <ul class="nav flex-column">
        <li class="mb-2">
          <div class="d-block">
          <a class="border border-dark border-1 flex-lg-fill rounded  fs-6 nav-link {{ Request::is('dashboard') ? 'bg-dark text-light' : 'text-dark ' }}" href="/dashboard">
            <span data-feather="home" class="me-2 align-text-bottom"></span>
            Dashboard
          </a>
        </div>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled">
            <li><a href="#" class="link-dark rounded">New</a></li>
          </ul>
        </div>
        </li>

        <li class="nav-item mb-2">
          <div class="d-flex ">
            <a class="border border-dark w-100 border-1 fs-6 nav-link rounded-start {{ Request::is('dashboard/posts*') ? 'bg-dark text-light' : 'text-dark' }}" href="/dashboard/posts">
              <span data-feather="file-text" class="me-2 align-text-bottom"></span>
              My Post
            </a>
            <button class="bg-dark rounded-end collapsed text-light" data-bs-toggle="collapse" data-bs-target="#mypost-collapse" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
                <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/>
              </svg>
            </button>
          </div>
            <div class="collapse" id="mypost-collapse">
              <ul class="btn-toggle-nav list-unstyled">
                <li>
                  <a href="/dashboard/posts/create" class="dropdown-item m-3 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                    </svg> Create
                  </a>
                </li>
                <li>
                  <a href="/dashboard/posts" class="dropdown-item m-3 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                      <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                      <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                    </svg> View
                  </a>
                </li>
              </ul>
            </div>
        </li>

        <li class="nav-item mb-2">
          <div class="d-flex">
          <a class="border border-dark border-1 w-100 rounded-start fs-6 nav-link {{ Request::is('dashboard/setting') ? 'bg-dark text-light' : 'text-dark ' }}" href="/dashboard">
            <span data-feather="home" class="me-2 align-text-bottom"></span>
            Setting
          </a>
          <button class="bg-dark rounded-end text-light align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#setting-collapse" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
              <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/>
            </svg>
          </button>
        </div>
        <div class="collapse" id="setting-collapse">
          <ul class="btn-toggle-nav list-unstyled">
            <li><a href="#" class="link-dark rounded">New</a></li>
          </ul>
        </div>
        </li>

      </ul>
    </div>
  </div>
  <hr>
  <div class="dropdown">
    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
      <strong>{{ auth()->user()->name }}</strong>
    </a>
    <li><hr class="dropdown-divider"></li>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li><hr class="dropdown-divider"></li>
      <li>
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="px-3 bg-light border-0"> Logout <span data-feather="log-out" ></span></button>
            </form>
      </li>
    </ul>
  </div>
</div> --}}