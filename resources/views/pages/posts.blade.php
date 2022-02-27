{{-- @dd($posts) --}}
@extends('layouts.master')

@section('content')
<h1 class="text-center mt-4">{{ $title }}</h1>

<div class="row justify-content-center my-4">
  <div class="col-md-6">
    <form action="/blog" method="get">
      @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="cari.." value="{{ request('search') }}" name="search" aria-describedby="button-addon2" autofocus>
        <button class="btn btn-dark text-white" type="submit" id="button-addon2">Search</button>
      </div>
    </form>
  </div>
</div>


@if ($posts->count() > 0)
   
    <div class="card mb-3">
      <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title">{{ $posts[0]->title }}</h3>
        <small>
            <a href="/blog?author={{ $posts[0]->author->user_name }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a>
            in <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
             {{ $posts[0]->created_at->diffForHumans() }}
        </small>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
      </div>
    </div>


    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $p)
        <div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem; height:25rem;">
            <div class="position-absolute bg-dark p-1 rounded-end text-white">
              <a href="/blog?category={{ $p->category->slug }}" class="text-decoration-none text-white">{{ $p->category->name }}</a>
            </div>
            <img src="https://source.unsplash.com/500x400/?{{ $p->category->name }}" class="card-img-top" alt="{{ $p->category->name }}">
            <h5 class="card-title">{{ $p->title }}</h5>
            <div class="card-body excerpt-card" style="overflow-y: scroll; overflow-x: hidden;">
              <small>
                <a href="/blog/?author={{ $p->author->user_name }}" class="text-decoration-none">{{ $p->author->name }}</a>
                {{ $posts[0]->created_at->diffForHumans() }}
              </small>
              <p class="card-text">{{ $p->excerpt }}</p>
            </div>
              <a href="blog/{{ $p->slug }}" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        
        @endforeach
      </div>
    </div>
@else
    <p class="text-center fs-4">No posts found.</p>
@endif

{{-- pagination --}}
<div class="d-flex justify-content-end my-3 mx-2">
  {{ $posts->links() }}
</div>

@endsection