{{-- <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="/">MSM Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
        <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/blog">Post's</a>
        <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" href="/categories">Categories</a>
      </div>
    </div>
  </div>
</nav> --}}

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/blog">Post's</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" href="/categories">Categories</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="/login" class="nav-link {{ $active === 'login' ? 'active' : '' }}">Login <i class="bi bi-box-arrow-in-right"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
