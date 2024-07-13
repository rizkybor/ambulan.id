<div class="container-fluid container-xl position-relative d-flex align-items-center">
    <a href="index.html" class="logo d-flex align-items-center me-auto">
      <h1 class="sitename">AMBULAN</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ url('/services') }}" class="{{ Request::is('services') ? 'active' : '' }}">Services</a></li>
        <li><a href="{{ url('/contact-us') }}" class="{{ Request::is('contact-us') ? 'active' : '' }}">Contact us</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
  </div>