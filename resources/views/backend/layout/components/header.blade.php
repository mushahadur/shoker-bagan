
  <!-- ======= Header ======= -->
  
  <header id="header" class="header fixed-top d-flex align-items-center">

    @if(Auth::check()) <!-- Check if a user is logged in -->
        @if(Auth::user()->role == 1)
            <!-- Admin Sidebar -->
            @include('backend.layout.components.include.header._admin_header')
        @elseif(Auth::user()->role == 2)
            <!-- Menu Type 2 -->
            @include('backend.layout.components.include.header._nursery_owner_header')
        @elseif(Auth::user()->role == 3)
            <!-- Menu Type 3 -->
            @include('backend.layout.components.include.header._consultant_header')
        @elseif(Auth::user()->role == 4)
            <!-- Menu Type 4 -->
           @include('backend.layout.components.include.header._user_header')
        @endif
    
@else
    <!-- Default menu for non-authenticated users -->
    {{-- Admin --}}
@endif


  </header><!-- End Header -->