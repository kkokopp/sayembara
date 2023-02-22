{{-- @dd($post) --}}
@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col">
        <div class="col p-3 bg-dark container-fluid text-light" style="min-height:250px;">
            <div class="container">
                <a href="/posts" class="d-block h6 text-secondary text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/>
                </svg>Courses</a>
                <div class="row">
                    <div class="col-lg-9 col-md-9 p-3">
                        <h1 class="mb-3">{{ $posts->title }}</h1>
                        <p style="font-size: 1.2rem;">{{ $posts->excerpt }}</p>
                        <span class="h6 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                              </svg>
                              {{ $posts->daftar->count() }}
                              Pendaftar
                        </span>
                    </div>           
                    <div class="border-start col-lg-3 col-sm-3 col-md-3 d-flex flex-column justify-content-center align-items-start">
                        <p class="fs h6 mb-1 mt-1">Dibuat oleh <a href="/posts?author={{ $posts->author->username }}" class="fs h6">{{ $posts->author->name }}</a></p>
                        <p class="fs h6 mb-3 mt-1">Kategori <a href="/posts?category={{ $posts->category->slug }}" class="fs h6">{{ $posts->category->name }}</a></p>
                        
                        <span class="mt-1 fs mb-3">
                            <i class="bi bi-exclamation-circle"></i>
                            Last update {{ $update }}
                        </span>
                        <a class="btn btn-success" href="whatsapp://send?text=https://sayembara.kelasmm3.com/posts/{{ $posts->slug }}" data-action="share/whatsapp/share">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                                <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                            </svg>
                            Share
                        </a>
                    </div>
                </div>
    
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container" style="min-height: 150vh">
    @if(session()->has('pesan'))
  
  <!-- Modal -->
    <div class="modal fade" id="modal_alert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-expanded="true">
        <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header mb-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body m-0">
                <p class="h6">{{ session('pesan') }}</p>
            </div>
        </div>
        </div>
    </div>
    
    @endif

    <div class="row justify-content-center mb-5" style="min-height: 100vh;">
        <div class="col mt-3">
            <div class="card border-0 shadow bg-white">
                <div class="card-body">
                    {{-- <img src="https://source.unsplash.com/1200x400?{{ $posts->category->name }}" class="img-fluid" alt="{{ $posts->category->name }}" > --}}


                            <img src="../storage/{{ $posts->poster }}" class="m-0 p-0 img-fluid img-post rounded" alt="{{ $posts->category->name }}" onclick="img_view()">

                            <div class="d-flex p-3 border-1">
                                <ul class="list-group">
                                    <li class="l-group rounded-top">
                                        <span>
                                            <i class="bi bi-person"></i>
                                            Narasumber : {{ $posts->pemateri }}
                                        </span>
                                    </li>
                                    <li class="l-group">
                                        <span>
                                            <i class="bi bi-calendar-check"></i>
                                            Hari/Tanggal : {{ $hari }} {{ $posts->tanggal }} - {{ date('l', strtotime($posts->tanggal_selesai)) }} {{ $posts->tanggal_selesai }}
                                        </span>
                                    </li>
                                    <li class="l-group border-1 rounded-bottom">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                              </svg>
                                            Waktu : {{ $posts->jam }} - {{ $posts->jam_selesai }}
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        <div class="p-3">
                            <article class="my-3 fs-6">
                                <p class="h6">Deskripsi</p>
                                {!! $posts->body !!}
                            </article>
                        </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 mt-3" style="position: sticky">
            <div class="card border-0 shadow bg-white ">
                <div class="card-body">
                    <div class="text-center">
                        <h4 class="mb-3 fw-bold">Daftar Sekarang</h4>
                    </div> 
                    <hr>
                    <p class="h6">Ketentuan</p>
                    <ul class="p-0 m-0">
                        <li class="list-group-item">
                            @if($posts->terbatas_tidak == NULL)
                            <p class="fs"><i class="bi bi-check-lg"></i> Jumlah Peserta Tidak Terbatas</p>
                            @else
                            <p class="fs"><i class="bi bi-check-lg"></i> {{ $posts->terbatas_tidak }} maksimal {{ $posts->jmlh_peserta }} peserta</p>
                            @endif
                        </li>
                        <li class="list-group-item">
                            @if($posts->terbuka_tidak == NULL)
                            <p class="fs"><i class="bi bi-check-lg"></i> Tertutup untuk umum</p>
                            @else
                            <p class="fs"><i class="bi bi-check-lg"></i> {{ $posts->terbuka_tidak }}</p>
                            @endif
                        </li>
                        <li class="list-group-item"> 
                            @if($posts->online_offline == NULL)
                            <p class="fs"><i class="bi bi-check-lg"></i> Offline</p>
                            @else                       
                            <p class="fs"><i class="bi bi-check-lg"></i> {{ $posts->online_offline }}</p>
                            @endif
                        </li>
                    </ul>
                    <p class="h6">Benefit</p>
                    <div class="d-flex flex-wrap">
                        <i class="bi bi-award"></i>
                        <p>{{ $posts->sertifikat }}</p>
                    </div>
                    <hr>
                    @if($posts->harga == NULL)
                    <h3 class="mb-3 text-dark">Gratis</h3>
                    @else
                    <h3 class="mb-3 text-dark">Rp {{ $posts->harga }}</h3>
                    @endif
                        @if (Auth::user() && auth()->user()->role === 'admin')
                        <form action="/favorite/tambah/{{ $posts->slug }}" method="get" class="mb-3">
                            @csrf
                            <button class="btn btn-outline-dark input-block-level form-control" disabled><i class="bi bi-star"></i></button>
                        </form>
                        @else
                        <form action="/favorite/tambah/{{ $posts->slug }}" method="get" class="mb-3">
                            @csrf
                            <button class="btn btn-outline-dark input-block-level" style="width: 100%;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                            </svg></i></button>
                        </form>                           
                        @endif
                        <button type="button" class="btn bg-purple-ver text-light" style="width: 100%;" data-bs-target="#daftar_modal" data-bs-toggle="modal"><h6>Enroll</h6></button>
                </div>
            </div>
        </div>            
    </div>
</div>
  
  <!-- Modal -->
  <div class="modal fade" id="modals" tabindex="-1" aria-labelledby="modals" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <img src="../storage/{{ $posts->poster }}" class="img-fluid" alt="{{ $posts->category->name }}" >
      </div>
    </div>
  </div>


  <!-- Modal -->
  @if(Auth::user())
  <div class="modal fade" id="daftar_modal" aria-hidden="true" aria-labelledby="daftar_modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="h3 mb-3 fw-normal text-center">Formulir Pendaftaran Workshop</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/daftar" method="post" enctype="multipart/form-data">
            @csrf
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
                <input type="text" name="workshop_title" class="form-control rounded-top @error('workshop_title') is-invalid @enderror" id="workshop_title" required value="{{ $posts->title }}" readonly>
                <label for="name">Workshop</label>
                @error('workshop_title')
                <div class="invalid-feedback">
                    {{ $message }}.
                </div>
                @enderror
            </div>
                <input type="hidden" name="workshop_id" value="{{ $posts->id }}">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <input type="hidden" name="author_id" value="{{ $posts->user_id }}">
            <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="user_id" placeholder="Username" required value="{{ old('username', $user->username) }}" readonly>
                <label for="username">Username</label>
                @error('useename')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating  mb-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email', $user->email) }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}.
                </div>
                @enderror
            </div>

            <div class="form-floating  mb-3">
                <input type="text" name="nomor" class="form-control @error('nomor') is-invalid @enderror" id="nomor" placeholder="081XXX" required>
                <label for="nomor">Nomor HP</label>
                @error('nomor')
                <div class="invalid-feedback">
                    {{ $message }}.
                </div>
                @enderror
            </div>

            <div class="form-floating  mb-3">
                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Jl.Kemangi" required>
                <label for="alamat">Alamat</label>
                @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}.
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="foto_ktp" class="form-label pt-1 ps-1">Foto KTP/Kartu Identitas</label>
                <input class="form-control" type="file" id="foto_ktp"  name="foto_ktp" class="form-control @error('foto_ktp') is-invalid @enderror"  placeholder="name@example.com" required>
            </div>

            {{-- <div class="mb-3">
                <label for="bukti" class="form-label pt-1 ps-1">Bukti Pembayaran</label>
                <input class="form-control" type="file" id="bukti_pembayaran" name="bukti_pembayaran"  class="form-control @error('bukti_pembayaran') is-invalid @enderror"  placeholder="name@example.com" required>
            </div> --}}

            <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Daftar</button>
        </form>
        </div>
      </div>
    </div>
  </div>
@endif

{{-- @if($errors->has('email') || $errors->has('name') || $errors->has('username') || $errors->has('password') || $errors->has('password_confirmation')) {
    <script>
        window.onload = function(){
            $('#exampleModalToggle2').modal('show')
        }
    </script>
}
@endif --}}
    

@endsection