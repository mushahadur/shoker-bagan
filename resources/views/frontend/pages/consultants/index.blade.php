@extends('frontend.layout.app')
@section('title')
    Consultants
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
                        </ol>
                    </div>
                    <div>
                        <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
                            <input type="text" class="form-control px-3" placeholder="Search Consultants">
                            <button class="btn btn-primary mr-2"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <section class="team">

            <!--  Section Title -->
            <div class="container section-title aos-init aos-animate" data-aos="fade-up">
                <h2>Consultants</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">
                    @if ($consultants->isEmpty())
                        <h4 class="text-danger text-center">Consultant Not Found</h4>
                    @else
                        @foreach ($consultants as $consultant)
                            <div class="col-lg-4 col-md-6 member aos-init aos-animate" data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="member-img">
                                    @if ($consultant->image)
                                    <img src="{{ asset('/storage/consultant/profile-images/' . $consultant->image) }}"
                                    class="img-fluid" alt="Profile">
                                    @else
                                       <img src="{{ asset('/') }}assets/frontend/img/default_profile.png"
                                       class="img-fluid" alt="Profile">
                                    @endif
                                    <div class="social">
                                        <a href="{{ $consultant->twitter_link }}" class="twitter"><i
                                                class="bi bi-twitter"></i></a>
                                        <a href="{{ $consultant->facebook_link }}" class="facebook"><i
                                                class="bi bi-facebook"></i></a>
                                        <a href="{{ $consultant->instagram_link }}" class="instagram"><i
                                                class="bi bi-instagram"></i></a>
                                        <a href="{{ $consultant->linkedin_link }}" class="linkedin"><i
                                                class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info text-center">
                                    <h4>{{ $consultant->name }}</h4>
                                    <span>{{ $consultant->job }}</span>
                                    <p>{{ $consultant->description }}</p>
                                </div>
                            </div><!-- End Team Member -->
                        @endforeach
                    @endif



                </div>

            </div>

        </section>

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
