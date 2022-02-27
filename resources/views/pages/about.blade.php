@extends('layouts.master')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 justify-content-center text-center">
            <h1>halaman about</h1>
            <h1>{{ $name }}</h1>
            <h2>{{ $email }}</h2>
            <img src="https://source.unsplash.com/400x400/?girl" class="img-fluid" style="border-radius: 50%" alt="profile">
        </div>
    </div>
</div>
    @endsection