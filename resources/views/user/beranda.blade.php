@extends('layouts.main')


@section('container')
<div class="bg-dark text-white d-flex align-items-end flex-wrap pb-0 mb-0" style="min-height:250px;">
  <div class="container">
    <div class="container pt-5">
      <p>{{ auth()->user()->name }}</p>
      <h2>My Learning</h2>
    </div>
  </div>
    <div class="container">
      <ul class="nav nav-pills">
          <li class="nav-items {{ $title == "Courses" ? 'bg-purple-ver rounded' : '' }}">
              <a href="/beranda" class="h5 nav-link fw-bold {{ $title == "Courses" ? 'text-white' : 'text-secondary' }}">
                  All Workshop
              </a>
          </li>
          {{-- <li class="nav-items {{ $title == "Courses Terbaru" ? 'bg-purple-ver rounded' : 'text-secondary' }}">
              <a href="/beranda?status=on" class="h5 nav-link fw-bold {{ $title == "Courses Terbaru" ? 'text-white' : 'text-secondary' }}">New</a>
          </li> --}}
      </ul>
    </div>
</div>
<div class="container">
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
  
    <div class="row overflow-hidden pb-5" style="min-height: 100vh">
      <div class="col-lg-9">
        {{-- <div class="d-flex text-white justify-content-center align-items-center bg-purple-ver p-3 rounded-top">
          <h5 >Workshop Anda : {{ $diterima->count() }}</h5>
        </div> --}}
        @if( $diterima->count())
          <div class="container pt-3">
              <div class="row">
                @foreach($diterima as $d)
                  <div class="col-lg-4">
                      <div class="card shadow-sm mb-3">
                        <img src="../storage/{{ $d->post->poster }}" class="card-img-top img-work img-fluid" style="height: 204px;">
                          <div class="card-body">
                            <a href="/posts/{{ $d->post->slug }}" class="text-dark text-decoration-none">
                              <h6 class="card-title">{{ \Illuminate\Support\Str::limit($d->post->title, $limit = 60, $end = '...') }}</h6>
                            </a>
                            <hr>
  
                            <p class="card-text">{{ $d->post->excerpt }}</p>
                            <ul class="list-group">
                              <li class="list-group">
                                <span class="w-body">
                                  <i class="bi bi-calendar-check"></i>
                                  Hari/Tanggal : {{ date('l', strtotime($d->post->tanggal)) }} {{ $d->post->tanggal }} - {{ date('l', strtotime($d->post->tanggal_selesai)) }} {{ $d->post->tanggal_selesai }}
                              </span>
                              </li>
                              <li class="list-group">
                                <span class="w-body">
                                  Kategori : {{ $d->post->category->name }}
                              </span>
                              </li>
                              <li class="list-group">
                                <span class="w-body">
                                  Pemateri : {{ $d->post->pemateri }}
                              </span>
                              </li>
                              @if($d->post->status == 'on')
                              <li class="list-group">
                                <span class="w-body">
                                  Status : Workshop Aktif
                              </span>
                              </li>
                              @endif
                              @if($d->post->status == 'off')
                              <li class="list-group">
                                <span class="w-body">
                                  Status : Workshop Tidak Aktif
                              </span>
                              </li>
                              @endif
                          
                            </ul>
                          </div>
                        </div>
                  </div>
                @endforeach
              </div>
          </div>    
          @else 
          <div class="container pt-3 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            {{-- <img src="../img/notfound.jpg" alt="" style="height: 100px; width:100px;"> --}}
            <h2 class="text-center">Cari <a href="/posts" class="purple-font">workshop</a> anda sekarang!</h2>
          </div>
          @endif 
          <div class="d-flex justify-content-end">
            {{ $diterima->links() }}    
          </div>
      </div>


      <div class="col-lg-3 border-start pt-3 overflow-y-auto">
        <div class="d-flex text-white justify-content-center bg-dark align-items-center p-3 rounded">
          <i class="bi bi-card-list me-2 h6"></i>
          <h5 >Proses Daftar</h5>
        </div>
        @if($daftar->count())
          <div class="container pt-3 overflow-y-auto">
              @foreach ($daftar as $d)
                @if($d->status === 'On Review' || $d->status === 'Ditolak' )
                  <div class="card mb-3 shadow-sm rounded show">
                    <div class="d-flex text-white rounded-top pt-3 ps-3 pe-3">
                      <h6 class="card-title text-dark mb-0 me-auto">{{ \Illuminate\Support\Str::limit($d->post->title, $limit = 60, $end = '...') }}</h6>
                      {{-- <form action="/favorite/hapus/{{ $d->id }}" method="post">
                        @method('delete')
                        @csrf
                        <a class="btn" type="button submit"><i class="bi bi-trash"></i></a>
                      </form> --}}
                    </div>
                    <div class="card-body pt-0">
                      <p class="w-body">{{ $d->post->tanggal }}</p>
                      {{-- <p class="w-body">{{ $d->post->tanggal }}</p> --}}
                      <p class="w-body">{{ $d->post->pemateri }}</p>
                      <a href="/posts/{{ $d->post->slug }}" class="btn btn-secondary status-font">Lihat</a>
                      @if($d->status === 'On Review')
                        <button type="submit" class="btn course-font btn-warning status-font">{{ $d->status }}</button>
                      @else
                        <button type="submit" class="btn course-font btn-danger status-font">{{ $d->status }}</button>
                      @endif
                    </div>
                  </div>
                  @endif
              @endforeach
            </div>
        @else
        <div class="container pt-3 d-flex justify-content-center align-items-center">
          <h6 class="text-center">Belum ada post terdaftar</h6>
        </div>
        @endif
      </div>
    </div>



</div>
@endsection

