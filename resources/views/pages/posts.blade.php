{{-- @dd($posts) --}}
@extends('layouts.master')

@section('content')
@foreach ($posts as $p)

<article class="mb-4 mt-4 mx-2 border-bottom pb-4">
    <div class="card border-none  bg-light text-dark">
        <h5 class="card-header">
          <p>By <a href="#" class="text-decoration-none">{{ $p->user->name }}</a> in <a class="text-decoration-none" href="categories/{{ $p->category->slug }}">{{ $p->category->name }}</a></p>
        </h5>
        <div class="card-body">
          <h5 class="card-title">{{ $p->title}}</h5>
          <h6>{{ $p->excerpt }}</h6>
          <a href="/blog/{{ $p->slug }}" class="btn btn-primary text-decoration-none">Go somewhere</a>
        </div>
      </div>
</article>
@endforeach
    <h2></h2>
@endsection