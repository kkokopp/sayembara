@extends('dashboard.layouts.main')

@section('container')

{{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h2 class="h2">My Post {{ auth()->user()->name }}</h2>
</div> --}}

@if (session()->has('succes'))
{{-- <div class="col-8">
  <div class="pt-3 container-fluid alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('succes') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> --}}
{{-- </div> --}}
@endif

{{-- <div class="container row bg-light gx-5">
  <div class="col  p-3 mt-3 mb-3 rounded">
  <h6>Jumlah Postingan</h6>
  <div class="align-items-center">
      <h1>{{ $jmlh_post }}</h1>
    </div>
</div>
<div class="col p-3 mt-3 mb-3 rounded">
  <h6>Jumlah Postingan</h6>
  <div class="align-items-center">
      <h1>{{ $jmlh_post }}</h1>
    </div>
</div>
</div> --}}
{{-- <div class="container-fluid px-4 pb-3 text-center">
  <div class="row pt-3 gx-5">
    <div class="col p-3 me-3 bg-white shadow-sm rounded">
     <div class="">
      <h6 class="text-secondary">Jumlah Postingan</h6>
      <div class="align-items-center">
          <h1>{{ $jmlh_post }}</h1>
        </div>
     </div>
    </div>
    <div class="col p-3 bg-white shadow-sm rounded">
      <div class="bg-white">
        <h6>Jumlah Postingan</h6>
        <div class="align-items-center">
            <h1>{{ $jmlh_post }}</h1>
          </div>
      </div>
    </div>
  </div>
</div> --}}

{{-- <div class="bg-white container-fluid p-3 mt-3 mb-3 rounded">
  <a href="/dashboard/posts/create" class="btn btn-primary mb-3 mt-3 ">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
    </svg> Create
  </a>
  <a href="/dashboard/posts/create" class="btn btn-primary m-3 ">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
    </svg> Create
  </a>
</div> --}}

  {{-- <div class="container-fluid pt-3 bg-white rounded shadow-sm">
    <div class="table-responsive">
      <div class="d-flex">
      <h6 class="m-3 text-secondary">POSTINGAN</h6>
        <form action="/dashboard/posts" class="d-flex ms-auto mt-3 mb-3" oninput="dapat();"> 
          <select class="form-select " name="slug">
            <option>Category</option>
            <option>Tanggal Dibuat</option>
          </select>
        </form>
      </div>
    <table class="table table-hover table-sm table-borderless">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Created At</th>
          <th scope="col">Category</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($post as $p)
        
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->title }}</td>
            <td>{{ $p->created_at }}</td>
            <td>{{ $p->category->name }}</td>
            <td>
              <div class="float-end dropstart-centered dropstart">
                <span type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false" id="btn-drop">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                        </svg>
                      </span>
                      <ul class="dropdown-menu border-0 shadow bg-white">
                        <li>
                          <a href="/dashboard/posts/{{ $p->slug }}" class="dropdown-item"><span data-feather="eye"></span> Lihat</a>
                      </li>
                      <li>
                        <a href="/dashboard/posts/{{ $p->slug }}/edit" class="dropdown-item"><span data-feather="edit"></span> Edit</a>
                      </li>
                      <li>
                        <form action="/dashboard/posts/{{ $p->slug }}" method="post">
                          @method('delete')
                          @csrf
                          <button type="submit" class="dropdown-item" onclick="del()">Hapus</button>
                        </form>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
            <div class="d-flex mt-3 float-end">
              {{ $post->links() }}    
            </div>
        </div>
  </div> --}}
     <div class="container-fluid pt-3">
      <div class="row">
        @foreach($post as $p)
        <div class="col-lg-3 mb-3">
          <div class="card border-0 shadow-sm">
            @if ($p->status === 'on')           
            <div class="d-flex bg-dark text-white rounded-top p-3">
              <h6 class="card-title me-auto head-card">{{ \Illuminate\Support\Str::limit($p->title, $limit = 70, $end = '...') }}</h6>
              <div class="float-end dropstart-centered dropstart">
                <span type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false" id="btn-drop">
                  <i class="bi bi-three-dots-vertical text-white"></i>
                      </span>
                      <ul class="dropdown-menu border-0 shadow bg-white">
                        <li>
                          <a href="/dashboard/posts/{{ $p->slug }}" class="dropdown-item"><span data-feather="eye"></span> Lihat</a>
                      </li>
                      <li>
                        <a href="/dashboard/posts/{{ $p->slug }}/edit" class="dropdown-item"><span data-feather="edit"></span> Edit</a>
                      </li>
                      <li>
                        <form action="/dashboard/posts/{{ $p->slug }}" method="post">
                          @method('delete')
                          @csrf
                          <button type="submit" class="dropdown-item" onclick="del()">Hapus</button>
                        </form>
                      </li>
                    </ul>
                  </div>
            </div>
            <div class="card-body">
            <form action="/dashboard/posts/{{ $p->slug }}" method="post" id="status-form"> 
              @method('put')
              @csrf         
              <div class="mb-3">
                <div class="form-check form-switch">
                  <label class="form-check-label" for="online">Status</label>
                  <input class="form-check-input" type="checkbox" role="switch" id="status" name="status" {{ $p->status == true && $p->status === 'on' ? 'checked' : '' }} onchange="document.forms.status-form.submit()" for="status">
                </div>
              </div>
            </form>
            <p class="card-text">Dibuat : {{ $p->created_at }}</p>
            <p class="card-text">Pendaftar : {{ $p->daftar->where('status', 'On Review')->count() }}</p>
            <p class="card-text">Student : {{ $p->daftar->where('status', 'Diterima')->count() }}</p>
            <p class="card-text">Update : {{ $p->updated_at }}</p>
          </div>
            @else
            <div class="d-flex bg-secondary text-white rounded-top p-3">
              <h6 class="card-title m-auto">{{ \Illuminate\Support\Str::limit($p->title, $limit = 50, $end = '...') }}</h6>
              <div class="float-end dropstart-centered dropstart">
                <span type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false" id="btn-drop">
                  <i class="bi bi-three-dots-vertical text-white"></i>
                      </span>
                      <ul class="dropdown-menu border-0 shadow bg-white">
                        <li>
                          <a href="/dashboard/posts/{{ $p->slug }}" class="dropdown-item"><span data-feather="eye"></span> Lihat</a>
                      </li>
                      <li>
                        <a href="/dashboard/posts/{{ $p->slug }}/edit" class="dropdown-item"><span data-feather="edit"></span> Edit</a>
                      </li>
                      <li>
                        <form action="/dashboard/posts/{{ $p->slug }}" method="post">
                          @method('delete')
                          @csrf
                          <button type="submit" class="dropdown-item" onclick="del()">Hapus</button>
                        </form>
                      </li>
                    </ul>
                  </div>
            </div>
            <div class="card-body">
            <form action="/dashboard/posts/{{ $p->slug }}" method="post" id="status-form"> 
              @method('put')
              @csrf         
              <div class="mb-3">
                <div class="form-check form-switch">
                  <label class="form-check-label" for="online">Status</label>
                  <input class="form-check-input" type="checkbox" role="switch" id="status" name="status" {{ $p->status == true && $p->status === 'on' ? 'checked' : '' }} onchange="document.forms.status-form.submit()" for="status">
                </div>
              </div>
            </form>
              <p class="card-text">Dibuat : {{ $p->created_at }}</p>
              <p class="card-text">Diupdate : {{ $p->updated_at }}</p>
            </div>
            @endif
         </div>
        </div>
        @endforeach
      </div>
     </div>

     <div class="create-btn" style="right: 0;">
      <a href="/dashboard/posts/create" class="float">
        <button class="btn btn-primary rounded-circle shadow" style="width: 50; height: 50;">
          <i class="fs-4 bi bi-plus"></i>
        </button>
      </a>
    </div>

      @endsection