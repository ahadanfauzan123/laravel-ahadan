{{-- @dd($posts) --}}
@extends('layouts.master')

@section('content')

<div class="container">
  <div class="row">
    @foreach ($categories as $category)
        
    <div class="col-md-4 my-3">
      <a href="/blog?category={{ $category->slug }}" class="text-decoration-none">
            <div class="card bg-dark text-white border-0">
              <img src="https://source.unsplash.com/600x600/?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title fs-3 text-center flex-fill p-3" style="background: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                
              </div>
            </div>
          </a>   
    </div>
    @endforeach
  </div>
</div>


@endsection