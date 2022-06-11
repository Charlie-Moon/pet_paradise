<nav class="navbar navbar-expand-lg bg-white shadow-sm border-top-0 sticky-md-top">
  <div class="container">
    <a class="navbar-brand" href="#">Pet Paradise</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse shadow-none bg-transparent" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home.service') }}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home.products') }}">Products</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
