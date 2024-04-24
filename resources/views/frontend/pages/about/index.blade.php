@extends('frontend.layout.app')
@section('title')
    About Page
@endsection
@section('contain')
<main id="main">
  <!-- About Page Title & Breadcrumbs -->
  <div data-aos="fade" class="page-title pt-3">
    <div class="heading">
      <div class="container">
        {{-- <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>About</h1>
            <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
          </div>
        </div> --}}
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">About</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->
  
   <!-- About Section - Home Page -->
   <section id="about" class="about" style="background-color:#fffffff2;">

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-xl-center gy-5">

        <div class="col-xl-5 content">
          <h3>About Us</h3>
          <h2>Ducimus rerum libero reprehenderit cumque</h2>
          <p>Ipsa sint sit. Quis ducimus tempore dolores impedit et dolor cumque alias maxime. Enim reiciendis minus et rerum hic non. Dicta quas cum quia maiores iure. Quidem nulla qui assumenda incidunt voluptatem tempora deleniti soluta.</p>
          <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="col-xl-7">
          <div class="row gy-4 icon-boxes">

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <i class="bi bi-buildings"></i>
                <h3>Eius provident</h3>
                <p>Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor voluptatem</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <i class="bi bi-clipboard-pulse"></i>
                <h3>Rerum aperiam</h3>
                <p>Autem saepe animi et aut aspernatur culpa facere. Rerum saepe rerum voluptates quia</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <i class="bi bi-command"></i>
                <h3>Veniam omnis</h3>
                <p>Omnis perferendis molestias culpa sed. Recusandae quas possimus. Quod consequatur corrupti</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box">
                <i class="bi bi-graph-up-arrow"></i>
                <h3>Delares sapiente</h3>
                <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p>
              </div>
            </div> <!-- End Icon Box -->

          </div>
        </div>

      </div>
    </div>

  </section><!-- End About Section -->

   <!-- Stats Section - Home Page -->
   <section id="stats" class="stats">

    <img src="{{ asset('/') }}assets/frontend/img/stats-bg.jpg" alt="" data-aos="fade-in">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Users</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Nursary Woner</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
            <p>Plants Expat</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
            <p>Visitors</p>
          </div>
        </div><!-- End Stats Item -->

      </div>

    </div>

  </section><!-- End Stats Section -->

    <!-- Testimonials Section - Home Page -->
    <section id="testimonials" class="testimonials">

        <div class="container">
  
          <div class="row align-items-center">
  
            <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
              <h3>Testimonials</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
              </p>
            </div>
  
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
  
              <div class="swiper">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    }
                  }
                </script>
                <div class="swiper-wrapper">
  
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="d-flex">
                        <img src="{{ asset('/') }}assets/frontend/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                        <div>
                          <h3>Saul Goodman</h3>
                          <h4>Ceo & Founder</h4>
                          <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div><!-- End testimonial item -->
  
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="d-flex">
                        <img src="{{ asset('/') }}assets/frontend/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                        <div>
                          <h3>Sara Wilsson</h3>
                          <h4>Designer</h4>
                          <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div><!-- End testimonial item -->
  
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="d-flex">
                        <img src="{{ asset('/') }}assets/frontend/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                        <div>
                          <h3>Jena Karlis</h3>
                          <h4>Store Owner</h4>
                          <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div><!-- End testimonial item -->
  
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="d-flex">
                        <img src="{{ asset('/') }}assets/frontend/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                        <div>
                          <h3>Matt Brandon</h3>
                          <h4>Freelancer</h4>
                          <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div><!-- End testimonial item -->
  
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="d-flex">
                        <img src="{{ asset('/') }}assets/frontend/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                        <div>
                          <h3>John Larson</h3>
                          <h4>Entrepreneur</h4>
                          <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div><!-- End testimonial item -->
  
                </div>
                <div class="swiper-pagination"></div>
              </div>
  
            </div>
  
          </div>
  
        </div>
  
      </section><!-- End Testimonials Section -->
  

</main>
@endsection