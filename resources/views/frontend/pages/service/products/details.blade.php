@extends('frontend.layout.app')
@section('title')
    Product Details
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
                        <li class="current">Products</li>
                        <li class="current">Details</li>
                    </ol>
                </div>
              </div>
            </nav>
        </div><!-- End Page Title -->

        
    <!-- Blog-details Section - Blog Details Page -->
    <section id="blog-details" class="blog-details">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row g-5">
  
            <div class="col-lg-7">
  
              <article class="article">
  
                <div class="post-img">
                  <img src="{{asset('/storage/product-images/'.$product->image)}}" alt="" class="img-fluid">
                </div>
  
                <h2 class="title">{{$product->name}}</h2>
  
                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">Jan 1, 2022</time></a></li>

                  </ul>
                </div><!-- End meta top -->
  
              </article><!-- End post article -->
  
            </div>
  
            <div class="col-lg-5">
  
              <div class="sidebar">
  
                <div class="sidebar-item recent-posts">
                  <h3 class="sidebar-title">Product Description : </h3>
                  <p>{{$product->description}}</p>
  
                </div><!-- End sidebar recent posts-->
  
                <div class="sidebar-item tags">
                  <h3 class="sidebar-title">Tags</h3>
                  <ul class="mt-3">
                    <li><a href="#">Fruits</a></li>
                    <li><a href="#">Flowers</a></li>
                    <li><a href="#">Instruments</a></li>
                  </ul>
                </div><!-- End sidebar tags-->
  
              </div><!-- End Sidebar -->
  
            </div>
  
          </div>
  
        </div>
  
      </section><!-- End Blog-details Section -->
  
    </main>
@endsection
