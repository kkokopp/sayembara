@extends('layouts.main')

@section('container')

<div class="bg-purple-ver">
    <div class="container text-white">
        <div class="container d-flex justify-content-center flex-nowrap text-center p-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="container-fluid col-lg-5 ">
                    <h3 class="fw-bold">{{ $title }}</h3>
                    <p>Eksplore dan temukan berbagai course dan wokrshop gratis dengan tawaran menarik untuk anda pelajari</p>
                </div>
                <div class="col-sm-6 d-lg-block d-xl-block">
                    <img src="../img/course_1.png" alt="" class="img-fluid course-head">
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <h4 class="mt-3 mb-3 text-center">{{ $title }}</h4> --}}
{{-- <hr> --}}
    <div class="container">
        <div class="row mb-3 justify-content-center align-items-center">
            <div class="col-md-6">
                <form action="/posts">
                    @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="input-group mt-3 mb-3">
                        <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                        <button class="btn bg-purple-ver text-white" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mb-3">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-items d-flex justify-content-end align-items-center {{ $title == "Courses" ? 'bg-purple-ver rounded' : '' }}">
                    <a href="/posts" class="course-font nav-link fw-bold {{ $title == "Courses" ? 'text-white' : 'text-secondary' }}">
                        All
                    </a>
                </li>
                <li class="nav-items d-flex justify-content-end align-items-center {{ $title == "Courses Terbaru" ? 'bg-purple-ver rounded' : 'text-secondary' }}">
                    <a href="/posts?new=new" class="course-font nav-link fw-bold {{ $title == "Courses Terbaru" ? 'text-white' : 'text-secondary' }}">New</a>
                </li>
                @foreach ($categories as $category)
                <li class="nav-items d-flex justify-content-end align-items-center {{ $title == 'Courses '.' in '. $category->name ? 'text-dark bg-purple-ver rounded' : 'text-secondary' }}">
                    <a href="/posts?category={{ $category->slug }}" class="course-font nav-link fw-bold {{ $title == 'Courses '.' in '. $category->name ? 'text-white' : 'text-secondary' }}">{{ $category->name }}</a>
                </li>
                @endforeach
            </ul>
    </div>


    @if ($posts->count())

    {{-- <div class="col-md-3 mb-3">
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="category">
        <div class="card-body text-center">
        <h5 class="card-title"> <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
        <p>
            <small class="text-muted">
                By. <a href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        @if(Auth::user())
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
        @else
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary" data-bs-target="#exampleModalToggle1" data-bs-toggle="modal">Read more..</a>
        @endif
        </div>
    </div>
    </div> --}}
        
    <div class="container" style="min-height: 100vh;">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-sm-5 col-md-3 col-lg-3 mb-3">
                            <div class="card shadow-sm border-0 bg-light h-100">
                                {{-- <div class="position-absolute px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.7)"></div> --}}
                                {{-- <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="category"> --}}
                                <img src="storage/{{ $post->poster }}" class="card-img-top img-work img-fluid" alt="category" style="height: 204px;">
                                <div class="card-body">
                                    @if(Auth::user())
                                        <a href="/posts/{{ $post->slug }}" class="card-title w-title fw-bold text-decoration-none w-title">{{ \Illuminate\Support\Str::limit($post->title , 60, $end='...') }}</a>
                                    @else
                                        <a href="/posts/{{ $post->slug }}" class="card-title w-title text-decoration-none w-title" data-bs-target="#exampleModalToggle1" data-bs-toggle="modal">{{ \Illuminate\Support\Str::limit($post->title , 60, $end='...') }}</a>
                                    @endif
                                <p class="mb-0">
                                    <small class="text-muted">
                                        <a href="/posts?author={{ $post->author->username }}" class="w-body fs">{{ $post->author->name }}</a>
                                    </small>
                                </p>
                                <p>
                                    <small class="text-muted">
                                        <a href="/posts?category={{ $post->category->slug }}" class="w-body fs text-decoration-none">Kategori {{ $post->category->name }}</a>
                                    </small>
                                </p>
                                </div>
                                <div class="card-footer border-0">
                                    @if($post->harga == NULL)
                                    <h5 class="pb-auto text-dark">Gratis</h5>
                                    @else
                                    <h5 class="pb-auto text-dark">Rp {{ $post->harga }}</h5>
                                    @endif
                                </div>
                            </div>
                    </div>
                @endforeach
            </div>     
    </div>

    @else
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <h1 class="text-center">No Course Found</h1>
    </div>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}    
    </div>
    
@endsection
