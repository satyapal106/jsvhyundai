<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('assets/logo.png') }}" width="200px" alt="logo"/>
    </a>
    <!-- Toggle button for mobile view -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Close button inside the navbar for mobile view -->
      <button type="button" class="btn-close d-lg-none ms-auto" aria-label="Close" onclick="toggleNavbar()"></button>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="hatchbackDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hatchback
          </a>
          <ul class="dropdown-menu" aria-labelledby="hatchbackDropdown">
            <li><a class="dropdown-item" href="{{ url('/grand-i10-nios') }}">GRAND i10 NIOS</a></li>
            <li><a class="dropdown-item" href="{{ url('/all-new-i20') }}">All New i20</a></li>
            <li><a class="dropdown-item" href="{{ url('/i20-n-line') }}">i20 N Line</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="sedanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sedan
          </a>
          <ul class="dropdown-menu" aria-labelledby="sedanDropdown">
            <li><a class="dropdown-item" href="{{ url('/aura') }}">Aura</a></li>
            <li><a class="dropdown-item" href="{{ url('/verna') }}">Verna</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="suvDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SUV
          </a>
          <ul class="dropdown-menu" aria-labelledby="suvDropdown">
            <li><a class="dropdown-item" href="{{ url('/exter') }}">Exter</a></li>
            <li><a class="dropdown-item" href="{{ url('/creta') }}">Creta</a></li>
            <li><a class="dropdown-item" href="{{ url('/tucson') }}">Tucson</a></li>
            <li><a class="dropdown-item" href="{{ url('/venue') }}">Venue</a></li>
            <li><a class="dropdown-item" href="{{ url('/venue-n-line') }}">Venue N Line</a></li>
            <li><a class="dropdown-item" href="{{ url('/alcazar') }}">Alcazar</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/services') }}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
