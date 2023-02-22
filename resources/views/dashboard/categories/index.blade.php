@extends('dashboard.layouts.main')

@section('container')
<div class="row gap-3">
    <div class="col-lg-7 bg-white shadow-sm ms-3 p-3">
          <form action="/dashboard/categories/tambah" method="POST">
            @csrf
                <div class="mb-3">
                <label for="name" class="form-label">Kategori</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}">
                @error('name')
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
                <button class="btn btn-primary">Submit</button>
            </form>
      </div>

    <div class="col-lg-4 bg-white">
      <div class="table-responsive p-3">
          <table class="table table-hover table-sm">
            <thead>
              <tr>
                <th scope="col">Nama Kategori</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $c)
                <tr>
                          <td>{{ $c->name }}</td>
                          <td class="d-flex">
                            <form action="/categories/hapus/{{ $c->slug }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn text-secondary"><i class="bi bi-trash"></i></button>
                            </form>
                          </td>
                      </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>

      <script>
          const title = document.querySelector('#name');
          const slug = document.querySelector('#slug');

            title.addEventListener('change', function(){
              fetch('/dashboard/posts/checkSlug?title='+ title.value)
                .then((response) => response.json())
                .then((data) => slug.value = data.slug);
            });

        
      </script>
@endsection