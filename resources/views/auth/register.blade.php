@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 text-center registration-card">
        
        <main class="form-registration">
            <img class="mb-4 text-center" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <form>
              <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
          
              <div class="form-floating">
                <input type="text" class="form-control" id="name" placeholder="name" name="name" autocomplete="null" autofocus>
                <label for="name">name</label>
              </div>
              <div class="form-floating">
                <input type="text" class="form-control" id="username" placeholder="username" name="username" autocomplete="null">
                <label for="username">username</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="password" name="password">
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
            </form>
            <small>Already have account <a class="text-decoration-none" href="/login"> Sign In</a></small>
        </main>
    </div>
</div>
@endsection