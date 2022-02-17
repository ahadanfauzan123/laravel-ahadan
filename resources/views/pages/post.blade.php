
@extends('layouts.master')
@section('content')
    <h2>{{ $post->title }}</h2>
    {!! $post->body !!}
@endsection

{{-- Post::create([
    'title' => 'judul kedua',
    'slug' => 'judul-kedua',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum neque ex illum error iure iusto consequuntur? Nesciunt eius obcaecati dolor magni maiores maxime! Dolorem, expedita, necessitatibus corrupti aspernatur cupiditate velit vel quia in quisquam veniam qui sint non doloribus illo. sit amet consectetur adipisicing elit. Quis amet minima magni.</p>'
]) --}}