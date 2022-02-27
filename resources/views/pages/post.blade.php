@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>
            <img src="https://source.unsplash.com/1200x800/?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
        
            <p>By. <a href="/blog?author={{ $post->author->user_name }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <article class="my-3">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>


    
@endsection

{{-- Post::create([
    'title' => 'judul kedua',
    'slug' => 'judul-kedua',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum neque ex illum error iure iusto consequuntur? Nesciunt eius obcaecati dolor magni maiores maxime! Dolorem, expedita, necessitatibus corrupti aspernatur cupiditate velit vel quia in quisquam veniam qui sint non doloribus illo. sit amet consectetur adipisicing elit. Quis amet minima magni.</p>'
]) --}}