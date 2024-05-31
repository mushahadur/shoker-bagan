@extends('frontend.layout.app')
@section('title')
Consultants Details 
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
                        <li class="current">Consultants</li>
                        <li class="current">Details</li>
                    </ol>
                </div>
              </div>
            </nav>
        </div><!-- End Page Title -->

        
      <!-- Service Details Section -->
      <section id="service-details" class="service-details">

        <div class="container">
  
          <div class="row gy-5">
  
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="service-box">
                <h4>Service List</h4>
                <div class="services-list">
                  <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Live Communications</span></a>
                  <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Dream Support</span></a>
                  <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Tree Treatment</span></a>
                </div>
              </div><!-- End Services List -->
  
              <div class="help-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-headset help-icon"></i>
                <h4>Have a Question?</h4>
                <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i>  <a href="tel:{{ $consultant->phone }}"><span>{{ $consultant->phone }}</span></a></p>
                <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:{{ $consultant->email }}">{{ $consultant->email }}</a></span></p>
              </div>
  
            </div>
  
            <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
              <img src="{{ asset('/storage/consultant/profile-images/' . $consultant->image) }}" alt="" class="img-fluid services-img">
              <h3>{{ $consultant->name }}</h3>
              <p>{{ $consultant->description }}</p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
              </ul>
            </div>
  
          </div>
  
        </div>
  
      </section><!-- End Service-details Section -->
    
    </main>
@endsection
