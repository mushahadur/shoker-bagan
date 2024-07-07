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
                                <img src="{{ asset('/storage/product-images/' . $product->image) }}" alt=""
                                    class="img-fluid">
                            </div>

                            <h2 class="title">{{ $product->name }}</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="#">{{ $product->user->name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="#"><time datetime="2020-01-01">{{ ($product->created_at)->format('M j, Y') }}</time></a></li>
                                </ul>
                                {{-- ->format('M j, Y') --}}
                            </div><!-- End meta top -->

                        </article><!-- End post article -->

                    </div>

                    <div class="col-lg-5">

                        <div class="sidebar">
                          <div class="row">
                            <div class="col-6"><h5 >Product Name :</h5></div>
                            <div class="col-6">{{ $product->name }}</div>
                          </div>
                          <div class="row">
                            <div class="col-6"><h5 >Product Price :</h5></div>
                            <div class="col-6">{{ $product->price }}</div>
                          </div>
                          <div class="row">
                            <div class="col-6"><h5 >Product Price :</h5></div>
                            <div class="col-6">{{ $product->price }}</div>
                          </div>
                          <div class="row">
                            <div class="col-6"><h5 > Category :</h5></div>
                            <div class="col-6">{{ $product->category }}</div>
                          </div>
                          <div class="row">
                            <div class="col-6"><h5 >Product Stock :</h5></div>
                            <div class="col-6">{{ $product->stock }}</div>
                          </div>
                          <div class="row">
                            <div class="col-6"><h5 >Nursery Name :</h5></div>
                            <div class="col-6">{{ $product->user->name }}</div>
                          </div>
                          <div class="row">
                            <div class="col-6"><h5 >Contact :</h5></div>
                            <div class="col-6">{{ $product->user->phone }}</div>
                          </div>
                            

                            <div class="sidebar-item recent-posts">
                                <h5> Description : </h5>
                                <p>{{ $product->description }}</p>

                            </div><!-- End sidebar recent posts-->

                            <div class="sidebar-item tags">
                                <ul class="mt-3">
                                  @if (Auth::user())
                                    @if (Auth::user()->role == 3)
                                        <a href="{{ route('confirmOrder.consultant', ['nursery_id' => $product->user->id, 'product_id' => $product->id]) }}">Confirm Order</a>
                                    @else
                                        <a href="{{ route('confirmOrder', ['nursery_id' => $product->user->id, 'product_id' => $product->id]) }}">Confirm Order</a>
                                    @endif
                                  @else
                                    <li><a href="{{route('login')}}">Confirm Order</a></li>
                                  @endif
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End Sidebar -->

                    </div>

                </div>

            </div>

        </section><!-- End Blog-details Section -->

    </main>
@endsection
