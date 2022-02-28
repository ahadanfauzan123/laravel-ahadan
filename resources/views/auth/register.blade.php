@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 text-center registration-card">
        
        <main class="form-registration">
            <img class="mb-4 text-center" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <form action="/register" method="POST">
              @csrf
              <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
          
              <div class="form-floating">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" autocomplete="null" autofocus value="{{ old('name') }}">
                <label for="name">name</label>
                {{-- validasi --}}
                @error('name')
                <div id="" class="invalid-feedback" class="">
                  {{ $message }}
                </div>
                @enderror
              </div>

              {{-- username --}}
              <div class="form-floating">
                <input type="text" class="form-control @error('user_name') is-invalid @enderror" id="username" placeholder="username" name="user_name" autocomplete="null" value="{{ old('user_name') }}">
                <label for="username">username</label>
                {{-- username validation --}}
                @error('user_name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              {{-- email --}}
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}">
                <label for="email">Email address</label>
                {{-- email validation --}}
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              {{-- password --}}
              <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password" name="password">
                <label for="password">Password</label>
                {{-- password validation --}}
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              {{-- submit --}}
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
            </form>
            <small>Already have account <a class="text-decoration-none" href="/login"> Sign In</a></small>
        </main>
    </div>
</div>
@endsection