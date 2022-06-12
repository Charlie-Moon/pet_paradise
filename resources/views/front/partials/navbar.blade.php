<nav class="navbar navbar-expand-lg bg-white shadow-sm border-top-0 sticky-md-top nav-front">
  <div class="container">
    <a class="navbar-brand me-0" href="{{ url('/') }}">
            <img src="{{ url('assets/img/pet-logo.png') }}" class="logo-lg" height="50" alt="{{ setting('app_name') }}">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse shadow-none bg-transparent" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link {{request()->is('/') ? 'active' : ''}}" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{request()->is('service*') ? 'active' : ''}}" href="{{ route('home.service') }}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{request()->is('product*') ? 'active' : ''}}" href="{{ route('home.products') }}">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{request()->is('contact*') ? 'active' : ''}}" href="{{ route('home.contact') }}">Contact</a>
        </li>
      </ul>
      <form action="/search" class="d-flex" role="search">
        <input class="form-control border-primary border-end-0" type="search" placeholder="Search" name="search"  aria-label="Search" value="{{ request()->search }}">
        <button class="btn border-start-0 btn-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
