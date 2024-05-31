@extends('frontend.layout.app')
@section('title')
    All Products 
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
                    </ol>
                </div>
              </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Blog Section - Blog Page -->
        <section class="blog">
          <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
              <div class="col-8">
                <div class="row gy-4 posts-list">
                  @if($products->isEmpty())
                    <h4 class="text-danger text-center">Product Not Found</h4>
                  @else
                    @foreach ($products as $product)
                      <div class="col-xl-4 col-lg-6">
                          <article style="height: 300px">
                            <a href="{{route('home.product.details',$product->id)}}">
                              <div class="post-img">
                                  <img src="{{asset('/storage/product-images/'.$product->image)}}" alt=""
                                      class="img-fluid">
                              </div>
                              <div class="d-flex justify-content-between text-primary">

                                  <p class="post-author">TK. {{$product->price}}</p>
                                  <p>Stock {{{$product->stock}}}</p>
                              </div>

                              <h2 class="title">{{$product->name}}</h2>
                            </a>
                          </article>
                      </div>
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
        
                    <div class="sidebar-item categories">
                      <h3 class="sidebar-title">Categories</h3>
                      <ul class="mt-3">
                        <li><a href="#">Fruits <span>(25)</span></a></li>
                        <li><a href="#">Flowers <span>(12)</span></a></li>
                        <li><a href="#">Instruments <span>(5)</span></a></li>
                      </ul>
                    </div><!-- End sidebar categories-->
        
                    <div class="sidebar-item recent-posts">
                      <h3 class="sidebar-title">Recent Products</h3>
                      @if($products->isEmpty())
                        <h4 class="text-danger text-center">Product Not Found</h4>
                      @else
                        @foreach ($products as $product)
                        <div class="post-item">
                          <img src="{{asset('/storage/product-images/'.$product->image)}}" alt="Image" class="flex-shrink-0">
                          <div>
                            <h4><a href="blog-details.html">{{$product->name}}</a></h4>
                            <time datetime="2020-01-01">{{ $product->created_at->format('M j, Y') }}</time>
                          </div>
                        </div>
                        @endforeach 
                        @endif
                    </div><!-- End sidebar recent posts-->
        
                  </div><!-- End Sidebar -->
        
                </div>
            </div>

              <div class="pagination d-flex justify-content-center">
                  <ul>
                      <li><a href="#">1</a></li>
                      <li class="active"><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                  </ul>
              </div><!-- End pagination -->
          </div>
        </section><!-- End Blog Section -->
    </main>
@endsection
