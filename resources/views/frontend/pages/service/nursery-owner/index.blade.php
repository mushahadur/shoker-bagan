@extends('frontend.layout.app')
@section('title')
    Nursery Owner
@endsection
@section('contain')
    <main id="main" id="blog">

        <!-- Blog Page Title & Breadcrumbs -->
        <div data-aos="fade" class="page-title ">
            <div class="heading">
            </div>
            <nav class="breadcrumbs" style="padding: 30px 0!important;">
                <div class="d-flex justify-content-between">
                    <div class="container">
                        <ol>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="current">Nursery Owner</li>
                        </ol>
                    </div>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <section class="team">

            <!--  Section Title -->
            <div class="container section-title aos-init aos-animate" data-aos="fade-up">
                <h2>Nursery Owner</h2>
                <p>Nursery owners can sell their seedlings They can sell their nearby fruits and flowers They can sell their gardening tools and get help from plant consultants</p>
            </div><!-- End Section Title -->
        </section>
        <section class="team">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
              <div class="row">
                <div class="col-8">
                  <div class="row gy-4 posts-list">
                    @if ($nursery_owners->isEmpty())
                        <h4 class="text-danger text-center">Consultant Not Found</h4>
                    @else
                        @foreach ($nursery_owners as $nurseryList)
                            <div class="col-lg-4 col-md-6 member aos-init aos-animate" data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="member-img-nursery">
                                    @if ($nurseryList->image)
                                    <img src="{{ asset('/storage/user/profile-images/' . $nurseryList->image) }}"
                                    class="img-fluid" alt="Profile">
                                    @else
                                    <img src="{{ asset('/') }}assets/frontend/img/default_profile.png"
                                    class="img-fluid" alt="Profile">
                                    @endif
                                </div>
                                <a href="{{route('nurseryOwner.details',$nurseryList->id)}}">
                                <div class="member-info text-center">
                                    <h4>{{ $nurseryList->name }}</h4>
                                    <span>{{ $nurseryList->job }}</span>
                                </div>
                            </a>
                            </div><!-- End Team Member -->
                        @endforeach
                    @endif
  
                    
                  </div><!-- End blog posts list -->
  
                </div>
                  <div class="col-lg-4 blog-details">
                    <div class="sidebar">
                      <div class="sidebar-item search-form">
                        <h3 class="sidebar-title">Search</h3>
                        <form action="" class="mt-3">
                          <input type="text">
                          <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                      </div><!-- End sidebar search formn-->
          
                      <div class="sidebar-item recent-posts">
                        <h3 class="sidebar-title">Most Popular Consultants</h3>
          
                        @if ($nursery_owners->isEmpty())
                            <h4 class="text-danger text-center">Consultant Not Found</h4>
                        @else
                            @foreach ($nursery_owners as $nurseryList)
                                <div class="post-item">
                                    @if ($nurseryList->image)
                                        <img src="{{ asset('/storage/user/profile-images/' . $nurseryList->image) }}"
                                        class="flex-shrink-0" alt="Profile">
                                        @else
                                        <img src="{{ asset('/') }}assets/frontend/img/default_profile.png"
                                        class="flex-shrink-0" alt="Profile">
                                        @endif
                                    <div>
                                    <h4><a href="blog-details.html">{{ $nurseryList->name }}</a></h4>
                                    {{-- <time datetime="2020-01-01">Jan 1, 2020</time> --}}
                                    <time datetime="2020-01-01">{{ $nurseryList->created_at->format('M j, Y') }}</time>
                                    </div>
                                </div><!-- End recent post item-->
                            @endforeach
                        @endif
                        
          
                      </div><!-- End sidebar recent posts-->
          
                    </div><!-- End Sidebar -->
          
                  </div>
              </div>
            </div>
          </section><!-- End Blog Section -->

        <!-- Call-to-action Section - Home Page -->
        <section id="call-to-action" class="call-to-action">

            <img src="{{ asset('/') }}assets/frontend/img/cta-bg.jpg" alt="">

            <div class="container">
                <div class="row justify-content-center aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Call To Action</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                            <a class="cta-btn" href="#">Call To Action</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
@endsection
