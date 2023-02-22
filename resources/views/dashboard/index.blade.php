@extends('dashboard.layouts.main')

@section('container')
{{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
  <p>{{ $formulir }}</p>
</div> --}}

    <div class="row">
      <div class="col-lg-2 mb-3 order-2">
        <div class="card border-0 mb-3 rounded shadow-sm">
          <div class="d-flex bg-purple-ver rounded-top justify-content-center align-items-center pt-2 pb-2">
            <h6 class="card-title text-white">Workshop</h6>
          </div>
          <div class="card-body d-flex justify-content-center align-items-center">
            <h1> {{ $jmlh_post }}</h1>
          </div>
        </div>

        <div class="card border-0 roundedn shadow-sm mb-3">
          <div class="d-flex bg-purple-ver rounded-top justify-content-center align-items-center pt-2 pb-2">
            <h6 class="card-title text-white">Pendaftar</h6>
          </div>
            <div class="card-body d-flex justify-content-center align-items-center">
              <h1> {{ $daftar->count() }}</h1>
            </div>
        </div>
        <div class="card border-0 roundedn shadow-sm">
          <div class="d-flex bg-purple-ver rounded-top justify-content-center align-items-center pt-2 pb-2">
            <h6 class="card-title text-white">Student</h6>
          </div>
            <div class="card-body d-flex justify-content-center align-items-center">
              <h1> {{ $peserta->count() }}</h1>
            </div>
        </div>
      </div>
      {{-- <a class="btn btn-danger float-end" href="/dashboard/download">Export User Data</a> --}}
      <div class="col-lg-10 order-1">
          <div class="container-fluid p-0 mb-3 bg-white rounded shadow-sm">
            <div class="d-flex bg-secondary rounded-top">
              <h6 class="m-3 text-white text-center">Pendaftar</h6>
            </div>
            <div class="table-responsive p-3">
              <table class="table table-hover table-sm table-borderless table-font">
                <thead>
                  <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Nama Pendaftar</th>
                    <th scope="col">Judul Workshop</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($daftar as $f)
                    @if($f->status == "On Review")
                  
                          <tr>
                              {{-- <td>{{ $loop->iteration }}</td> --}}
                              <td>{{ $f->user->name }}</td>
                              <td>{{ \Illuminate\Support\Str::limit($f->post->title , 20, $end='...') }}</td>
                              <td>{{ $f->user->email }}</td>
                              <td>{{ \Illuminate\Support\Str::limit($f->alamat, 40, $end='...') }}</td>
                              <td>{{ $f->status }}</td>
                              <td class="d-flex">
                                <form action="/dashborad/status" method="post" class="me-3">
                                  @method('put')
                                  @csrf
                                  <input type="hidden" name="id" value="{{ $f->id }}">
                                  <input type="hidden" name="user_id" value="{{ $f->user->id }}">
                                  <input type="hidden" name="status" value="Diterima">
                                  <button type="submit" class="btn btn-primary btn-sm">Terima</button>
                                </form>
                                <form action="/dashborad/status" method="post">
                                  @method('put')
                                  @csrf
                                  <input type="hidden" name="id" value="{{ $f->id }}">
                                  <input type="hidden" name="user_id" value="{{ $f->user->id }}">
                                  <input type="hidden" name="status" value="Ditolak">
                                  <button type="submit" class="btn btn-danger btn-sm">Tolak</button>
                                </form>
                              </td>
                          </tr>
                          @endif
                        @endforeach
                      </tbody>
                    </table>
                  {{-- <div class="d-flex mt-3 float-end">
                    {{ $invoice->links() }}    
                  </div>  --}}
                </div>
          </div>

          <div class="container-fluid p-0 bg-white rounded shadow-sm">
            <div class="d-flex bg-secondary rounded-top">
              <h6 class="m-3 text-white text-center">Student</h6>
            </div>
            <div class="table-responsive p-3">
              <table class="table table-hover table-sm table-borderless table-font">
                <thead>
                  <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Nama Pendaftar</th>
                    <th scope="col">Judul Workshop</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($peserta as $f)
                      @if($f->status == 'Diterima')
                            <tr>
                                <td>{{ $f->user->name }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($f->post->title , 20, $end='...') }}</td>
                                <td>{{ $f->user->email }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($f->alamat, 40, $end='...') }}</td>
                                <td>{{ $f->status }}</td>
                            </tr>
                        @endif
                    @endforeach
                      </tbody>
                    </table>
                </div>
          </div>
      </div>
    </div>


  {{-- <div class="container-fluid mt-3 p-0 bg-white rounded shadow-sm">
    <div class="d-flex bg-secondary rounded-top">
      <h6 class="m-3 text-white">List Pendaftar</h6>
    </div>
    <div class="table-responsive p-3">
    <table class="table table-hover table-sm table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Email</th>
          <th scope="col">Nama Pendaftar</th>
          <th scope="col">Judul Workshop</th>
          <th scope="col">Judul Workshop</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($invoice as $f)
        
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td class="fs-table">{{ $f->user->email }}</td>
            <td class="fs-table">{{ $f->user->name }}</td>
            <td class="fs-table">
              <div style="height: 50px; width: 150px; overflow:hidden;">
                <img src="{{ asset('storage/'. $f->foto_ktp) }}" alt="">
              </div>
            </td>
            <td class="fs-table">{{ $f->post->title }}</td>
            <td>
              <div class="float-end dropstart-centered dropstart">
                <span type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false" id="btn-drop">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                        </svg>
                      </span>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
  </div> --}}
@endsection