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
                 <li><a href="{{ route('about') }}">About</a></li>
                 <li class="dropdown has-dropdown"><a href="{{ route('about') }}"><span>Services</span> <i
                             class="bi bi-chevron-down"></i></a>
                     <ul class="dd-box-shadow">
                         <li><a href="{{ route('all.products') }}">Pure Products</a></li>
                         <li><a href="{{ route('all.consultants') }}">Plant Expertis</a></li>
                         <li><a href="#">Nursery Support</a></li>
                     </ul>
                 </li>
                 <li><a href="{{ route('blog') }}">Blog</a></li>
                 <li><a href="{{ route('faqs') }}">FAQ's</a></li>
                 <li><a href="{{ route('contact') }}">Contact</a></li>
             </ul>

             <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
         </nav><!-- End Nav Menu -->
         @if(Session::get('user_id'))
         <a class="btn-getstarted" href="{{ route('user.dashboard') }}"> 
          {{-- <img src="{{ asset('/') }}assets/frontend/img/default_profile.png" height="40" width="40" alt="Profile" class="rounded-circle"> --}}
          @if (Auth::user()->image)
            <img src="{{ asset('/storage/user/profile-images/' .Auth::user()->image) }}"  height="30" width="30" alt="Profile" class="rounded-circle">
            @else
            <img src="{{ asset('/') }}assets/frontend/img/default_profile.png" alt="Profile"  height="30" width="30" class="rounded-circle">
            @endif
          <span  class="pl-3">{{Session::get('user_name')}}</span>
        </a>
         @else
         <a class="btn-getstarted" href="{{ route('login') }}">Get Started</a>
         @endif

     </div>
 </header>
 <!-- End Header -->
