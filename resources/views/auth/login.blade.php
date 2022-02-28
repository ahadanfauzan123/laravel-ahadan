@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        
        <main class="form-signin">
            <img class="mb-4 text-center" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            @if (session()->has('registered'))
            <div class="alert alert-success alert-dissmissible fade show" role="alert">
              {{ session('registered') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
              
            <form>
              <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
          
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <small>Not Register yet? <a class="text-decoration-none" href="/register"> Register Now</a></small>
        </main>
    </div>
</div>
@endsection