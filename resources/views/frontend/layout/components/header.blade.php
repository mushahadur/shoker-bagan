 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('/') }}assets/frontend/img/logo.png" alt=""> -->
        <h1>Shoker Bagan</h1>
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}" class="active">Home</a></li>
          <li><a href="{{ route('about') }}#about">About</a></li>
          <li class="dropdown has-dropdown"><a href="{{ route('about') }}"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="#">User</a></li>
              <li><a href="#">Nurcery</a></li>
              <li><a href="#">Plan</a></li>
              <li><a href="#">Pure Product</a></li>
            </ul>
          </li>
          <li><a href="{{ route('blog') }}#blog">Blog</a></li>
          <li><a href="{{ route('faqs') }}#faq">FAQ's</a></li>
          <li><a href="{{ route('contact') }}#contact">Contact</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <a class="btn-getstarted" href="index.html#about">Get Started</a>

    </div>
  </header>
  <!-- End Header -->