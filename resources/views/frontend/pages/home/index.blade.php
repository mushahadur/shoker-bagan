@extends('frontend.layout.app')
@section('title')
    Home 
@endsection
@section('contain')
<main id="main">

    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

      <img src="{{ asset('/') }}assets/frontend/img/hero-bg.jpeg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">Shoker Bagan.com</h2>
            <p data-aos="fade-up" data-aos-delay="200">Welcome to Our Shoker Bagan.com , This is our inovetive service project for gerdening</p>
          </div>
        </div>
      </div>

    </section><!-- End Hero Section -->

        <!-- Portfolio Section - Home Page -->
        <section class="portfolio">

          <!--  Section Title -->
          <div class="container section-title" >
            <h2>Recent Products</h2>
            <p>"Shoker Bagan" recently introduced a premium subscription service that offers exclusive access to advanced gardening tips, personalized advice from top horticulture experts, and significant discounts on high-quality gardening supplies. Additionally, we have launched a new feature that allows users to schedule real-time consultations with gardening consultants directly through the platform, ensuring timely and expert guidance for all their gardening needs.</p>
          </div><!-- End Section Title -->
    
          <div class="container">
    
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
    
              <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-flower">Flowers </li>
                <li data-filter=".filter-fruits">Fruits</li>
                <li data-filter=".filter-instruments">Instruments </li>
              </ul><!-- End Portfolio Filters -->
    
              <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-flower">
                  <img src="{{ asset('/') }}assets/frontend/img/products/flowers/1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="{{ asset('/') }}assets/frontend/img/products/flowers/2.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-fruits">
                  <img src="{{ asset('/') }}assets/frontend/img/products/fruits/2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Product 1</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="{{ asset('/') }}assets/frontend/img/products/fruits/3.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-instruments">
                  <img src="{{ asset('/') }}assets/frontend/img/products/instruments/1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Branding 1</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="{{ asset('/') }}assets/frontend/img/products/instruments/2.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-flower">
                  <img src="{{ asset('/') }}assets/frontend/img/products/flowers/3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>App 2</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="{{ asset('/') }}assets/frontend/img/products/flowers/4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-fruits">
                  <img src="{{ asset('/') }}assets/frontend/img/products/fruits/5.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Product 2</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="{{ asset('/') }}assets/frontend/img/products/fruits/4.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-instruments">
                  <img src="{{ asset('/') }}assets/frontend/img/products/instruments/3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Branding 2</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="{{ asset('/') }}assets/frontend/img/products/instruments/4.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-flower">
                  <img src="{{ asset('/') }}assets/frontend/img/products/flowers/5.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>App 3</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="{{ asset('/') }}assets/frontend/img/products/flowers/6.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-fruits">
                  <img src="{{ asset('/') }}assets/frontend/img/products/fruits/6.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Product 3</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="{{ asset('/') }}assets/frontend/img/products/fruits/7.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-instruments">
                  <img src="{{ asset('/') }}assets/frontend/img/products/instruments/5.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Branding 3</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="{{ asset('/') }}assets/frontend/img/products/instruments/6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->
    
              </div><!-- End Portfolio Container -->
    
            </div>
    
          </div>
    
        </section><!-- End Portfolio Section -->

    <!-- Services Section - Home Page -->
    <section id="services" class="services">

      <!--  Section Title -->
      <div class="container section-title">
        <h2>Services</h2>
        <p>This is one our the several types of service that the service we provide every single day</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-basket"></i></div>
              <div>
                <h4 class="title"><a href="{{ route('all.products') }}" class="stretched-link">Pure Product</a></h4>
                <p class="description">Our city is full of formalized fruits and we can get pure fresh fruits and flowers from here.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><a href="{{ route('all.nurseryOwners') }}" class="stretched-link">Nursery Owners</a></h4>
                <p class="description">Nursery owners can sell their seedlings They can sell their nearby fruits and flowers They can sell their gardening tools and get help from plant consultants</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
              <div>
                <h4 class="title"><a href="{{ route('all.consultants') }}" class="stretched-link">Plant Expertis</a></h4>
                <p class="description">Here experienced plant consultants can help garden owners and nursery owners with various advice on plants and earn extra income.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          

        </div>

      </div>

    </section><!-- End Services Section -->

      <!-- Buy NOw Section - Home Page -->
      <section >

        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Buy Now</h2>
          <p>We have launched a new feature that allows users to schedule real-time consultations with gardening consultants directly through the platform, ensuring timely and expert guidance for all their gardening needs.</p>
        </div><!-- End Section Title -->
        <div class="container layout_padding">
          <div class="product_container">
            @foreach ($products as $product)
            @if($product->status == "active")
              <a href="{{route('home.product.details',$product->id)}}">
                <div class="product_box">
                  <div class="product_img-box">
                    <img src="{{asset('/storage/product-images/'.$product->image)}}" alt="" style="height: 220px">
                    <span>
                      Sale
                    </span>
                  </div>
                  <div class="product_detail-box">
                    <span>
                      TK. {{$product->price}}
                    </span>
                    <p>
                      {{$product->name}}
                    </p>
                  </div>
                </div>
              </a>
            @endif
            @endforeach 
          </div>
        </div>
        </div>
      </section><!-- End Features Section -->
    
    

    <!-- Features Section - Home Page -->
    <section id="features" class="features">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Features</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 align-items-center features-item">
          <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h3>You can find your perfect solution with the help of a plant expert</h3>
            <p>
              Navigating the world of plants can be daunting, but fear not – our team of seasoned plant experts is here to guide you every step of the way.
              With their wealth of experience and passion for all things green, you can trust our plant experts to help you find the perfect solution tailored to your specific needs and preferences.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> <span>Available in the Morning time.</span></li>
              <li><i class="bi bi-check"></i><span> Available in the Evening time.</span></li>
              <li><i class="bi bi-check"></i> <span>Available in the Night time</span>.</li>
            </ul>
            <a href="{{ route('login') }}" class="btn btn-get-started">Get Started</a>
          </div>
          <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <div class="image-stack">
              <img src="{{ asset('/') }}assets/frontend/img/tree-doctor/016.jpg" alt="" class="stack-back">
              <img src="{{ asset('/') }}assets/frontend/img/tree-doctor/8.jpg" alt="" class="stack-front">
            </div>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-stretch justify-content-between features-item ">
          <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
            <img src="{{ asset('/') }}assets/frontend/img/n1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
            <h3>Services Offered by Nursery Owners on "Shoker Bagan"</h3>
            <p>Nursery owners play a crucial role in the "Shoker Bagan" ecosystem, offering a wide range of services that cater to the needs of gardening enthusiasts and professional horticulturists alike. The platform is designed to empower nursery owners by providing them with tools and opportunities to expand their businesses and reach a broader audience. Below are the key services that nursery owners can offer through "Shoker Bagan": </p>
            <ul>
              <li><i class="bi bi-check"></i> <span>Manpower Provision.</span></li>
              <li><i class="bi bi-check"></i><span> Instrument Support.</span></li>
              <li><i class="bi bi-check"></i> <span>Sale of Trees, Seeds, Flowers, and Fruit</span>.</li>
              <li><i class="bi bi-check"></i> <span>Soil and Fertilizer Supply</span>.</li>
              <li><i class="bi bi-check"></i> <span>Instrument Sales and Rentals</span>.</li>
            </ul>
            <a href="{{ route('login') }}" class="btn btn-get-started align-self-start">Get Started</a>
          </div>
        </div><!-- Features Item -->

      </div>

    </section><!-- End Features Section -->
  </main>
@endsection