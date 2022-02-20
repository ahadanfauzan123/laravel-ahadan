{{-- @dd($posts) --}}
@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-center">
  @foreach ($categories as $category)

  <article class="mb-2 mt-4 mx-2">
      <div class="card" style="width: 18rem;">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $category->name }}</li>
          </ul>
          <div class="card-footer">
            <a href="/categories/{{ $category->slug }}">show more</a>
          </div>
      </div>
  </article>
  @endforeach
</div>
@endsection