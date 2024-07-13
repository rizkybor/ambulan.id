<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.templates.head')
</head>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center fixed-top">
    @include('layouts.templates.nav')
  </header>

  <main class="main">
        @yield('content')
  </main>


  <footer id="footer" class="footer">
    @include('layouts.templates.foots')
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  @include('layouts.templates.script')

</body>

</html>