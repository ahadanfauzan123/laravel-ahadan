{{-- @dd($posts) --}}
@extends('layouts.master')

@section('content')

<h2>Post category : {{ $category }}</h2>
@foreach ($posts as $p)

<article class="mb-4 mt-4 mx-2">
    <div class="card border-dark  bg-warning text-white">
        <h5 class="card-header">{{ $p->created_at }}</h5>
        <div class="card-body">
          <h5 class="card-title">{{ $p->title}}</h5>
          <h6>{{ $p->excerpt }}</h6>
          <a href="/blog/{{ $p->slug }}" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
</article>
@endforeach
    <h2></h2>
@endsection