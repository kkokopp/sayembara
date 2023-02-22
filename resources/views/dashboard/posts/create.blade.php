@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid mt-3 p-0 mb-3">
  {{-- <div class=""> --}}

      <div class="col-auto p-0 m-0">
          <form action="/dashboard/posts" method="POST" class="row p-0 m-0 gap-3" enctype="multipart/form-data">
            @csrf
            <div class="col-md-8 bg-white shadow-sm rounded p-3">
            <div class="mb-3">
              <label for="title" class="form-label">Judul Workshop</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required value="{{ old('title') }}">
              @error('title')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly required value="{{ old('slug') }}">
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="pemateri" class="form-label">Pemateri</label>
              <input type="text" class="form-control @error('pemateri') is-invalid @enderror" id="pemateri" name="pemateri" required value="{{ old('pemateri') }}">
              @error('pemateri')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="tanggal" class="col-3 col-form-label">Tanggal Mulai</label>
                  <div class="input-group">
                  <input type="text" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required value="{{ old('tanggal') }}">
                  <span class="input-group-text bg-light d-block">
                    <i class="bi bi-calendar"></i>
                  </span>
                  @error('tanggal')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="tanggal_selesai" class="col-3 col-form-label">Tanggal Selesai</label>
                  <div class="input-group">
                  <input type="text" class="form-control @error('tanggal_selesai') is-invalid @enderror" id="tanggal_selesai" name="tanggal_selesai" required value="{{ old('tanggal_selesai') }}">
                  <span class="input-group-text bg-light d-block">
                    <i class="bi bi-calendar"></i>
                  </span>
                  @error('tanggal_selesai')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="jam" class="col-3 col-form-label">Waktu Mulai</label>
                  <div class="input-group">
                  <input type="text" class="form-control @error('jam') is-invalid @enderror" id="jam" name="jam" required value="{{ old('jam') }}">
                  <span class="input-group-text bg-light d-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                  </span>
                  @error('jam')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="jam_selesai" class="col-3 col-form-label">Waktu Selesai</label>
                  <div class="input-group">
                  <input type="text" class="form-control @error('jam_selesai') is-invalid @enderror" id="jam_selesai" name="jam_selesai" required value="{{ old('jam_selesai') }}">
                  <span class="input-group-text bg-light d-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                  </span>
                  @error('jam_selesai')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="slug" class="form-label">Tema</label>
              <select class="form-select" id="category_id" name="category_id">
                @foreach ($categories as $category)
                  @if (old('category_id') == $category->id)
                      <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                  @else
                      <option value="{{ $category->id }}">{{ $category->name }}</option> 
                  @endif
                @endforeach
              </select>
            </div>

            <div class="mb-3">
              <label for="poster" class="form-label pt-1 ps-1">Poster</label>
              <input class="form-control" type="file" id="poster" name="poster" class="form-control @error('poster') is-invalid @enderror" required onchange="previewImage()">
              @error('poster')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
              <div class="mt-3 container bg-purple-ver d-none justify-content-between pt-3 pb-3 rounded" id="prev" style="height: 100px">
                <div class="bg-white p-2">
                  {{-- <div class="bg-white container-fluid p-2 "> --}}
                    <img class="img-preview img-fluid d-flex jusitfy-content-center" style="max-height: 100%; width: auto; height: auto;">
                    {{-- <img src="/img/header-bg.jpg" alt="" class="img-fluid img-preview" style="max-height: 100%; width: auto;"> --}}
                  {{-- </div> --}}
                </div>
                {{-- <div class="d-flex"> --}}
                  <a type="button" onclick="resetFile()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="text-white bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                  </a>
                {{-- </div> --}}
              </div>
          </div>

            <div class="mb-3">
              <label for="body" class="form-label">Deskripsi</label>
              <input id="body" type="hidden" name="body" value="{{ old('body') }}">
              <trix-editor input="body"></trix-editor>
            </div>
          </div>

          <div class="col col-md-3 card border-0 me-0 bg-white shadow-sm rounded">
            <h5 class="mb-3 mt-3">Ketentuan</h5>
            <div class="mb-3">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="terms" checked name="terms">
                <label class="form-check-label" for="terms">Terbuka untuk umum</label>
              </div>
            </div>

            <div class="mb-3">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="sertifikat" checked name="sertifikat">
                <label class="form-check-label" for="sertifikat">Sertifikat</label>
              </div>
            </div>

            <div class="mb-3">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="online" checked name="online">
                <label class="form-check-label" for="online">Online</label>
              </div>
            </div>
    
            <div class="mb-3">
              <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" role="switch" id="range" name="range" onchange="dis()">
                <label class="form-check-label" for="range">Berbayar</label>
              </div>
              <div class="input-group mb-1">
                <span class="input-group-text">Rp</span>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="harga" name="harga" disabled>
              </div>
            </div>


            <div class="mb-3">
              <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" role="switch" id="fee" name="fee" onchange="dis_peserta()">
                <label class="form-check-label" for="fee">Peserta Terbatas</label>
              </div>
              <div class="input-group mb-1">
                {{-- <span class="input-group-text"></span> --}}
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="jmlh" name="jmlh" disabled>
                <span class="input-group-text">Orang</span>
              </div>
            </div>

            <button type="submit" class="btn btn-dark mb-3">Submit</button>
          </div>
          </form>
      </div>
    </div>
  {{-- </div> --}}

      <script>
          const title = document.querySelector('#title');
          const slug = document.querySelector('#slug');

            title.addEventListener('change', function(){
              fetch('/dashboard/posts/checkSlug?title='+ title.value)
                .then((response) => response.json())
                .then((data) => slug.value = data.slug);
            });

        
      </script>
@endsection