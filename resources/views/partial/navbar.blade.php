
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                </>
              </a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ $title === 'home' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $title === 'about' ? 'active' : '' }}" href="/about">about</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $title === 'categories' ? 'active' : '' }}" href="/categories">categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $title === 'blog' ? 'active' : '' }}" href="/blog">posts</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li> --}}
            </ul>
          </div>
        </div>
      </nav>