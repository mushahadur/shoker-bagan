<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> @yield('title') || Dashboard Shokher Bagan</title>

  {{-- include css file --}}
  @include('backend.layout.partials.style')
  
</head>

<body>

  <!-- ======= Header ======= -->
  @include('backend.layout.components.header')
 <!-- End Header -->

 <!-- ======= Sidebar ======= -->
  @include('backend.layout.components.sidebar')
 <!-- End Sidebar -->


  <main id="main" class="main">

    @yield('contain')
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  {{-- include Footer file --}}
  @include('backend.layout.components.footer')

{{-- include JS file --}}
  @include('backend.layout.partials.script')

</body>

</html>