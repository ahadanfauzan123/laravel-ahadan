{{-- @dd($posts) --}}
@extends('layouts.master')

@section('content')
@foreach ($posts as $p)

<article class="mb-4 mx-2">
    <div class="card border-dark  bg-warning text-white">
        <h5 class="card-header">{{ $p["author"] }}</h5>
        <div class="card-body">
          <h5 class="card-title">{{ $p["title" ]}}</h5>
          <a href="/blog/{{ $p['slug'] }}" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
</article>
@endforeach
    <h2></h2>
@endsection