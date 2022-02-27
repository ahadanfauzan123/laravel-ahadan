
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background: rgba(0, 0, 0, 0.7)">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                </>
              </a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ $isActive === 'home' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $isActive === 'about' ? 'active' : '' }}" href="/about">about</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $isActive === 'categories' ? 'active' : '' }}" href="/categories">categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $isActive === 'blog' ? 'active' : '' }}" href="/blog">posts</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li> --}}
            </ul>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="/login" class="nav-link active"><i class="bi bi-box-arrow-in-right"></i> Sign In</a>
              </li>
              <li class="nav-item">
                <a href="/register" class=" btn btn-primary btn-sm nav-link active">Sign up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>