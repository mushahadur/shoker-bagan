<!-- =======================================================
  * Createor Name: Mushahedur Rahman Khan
  * Deignation: Software Engineer at ICT Layer
  * Contact: pulockmrk@gmail.com
  ======================================================== -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <title>@yield('title') Page || Shoker Bagan</title>

  <!-- Favicons -->
  <link href="{{ asset('/') }}assets/frontend/img/logo.png" rel="icon">
  <link href="{{ asset('/') }}assets/frontend/img/logo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    
  {{-- include css file --}}
  @include('frontend.layout.partials.style')
  
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  @include('frontend.layout.components.header')
  <!-- End Header -->

  {{-- Main Section Start --}}
  @yield('contain')
  {{-- Main Section End --}}
  

  <!-- ======= Footer ======= -->
  @include('frontend.layout.components.footer')
  <!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

    {{-- include JS file --}}
    @include('frontend.layout.partials.script')
  

</body>

</html>