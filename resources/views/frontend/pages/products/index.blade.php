@extends('frontend.layout.app')
@section('title')
    Products 
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
                <div>
                  <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
                    <input type="text" class="form-control px-3" placeholder="Search Product">
                    <button class="btn btn-primary mr-2" ><i class="bi bi-search"></i></button>
                  </form>
                </div>
              </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Blog Section - Blog Page -->
        <section class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 posts-list">
                  @if($products->isEmpty())
                    <h4 class="text-danger text-center">Product Not Found</h4>
                  @else
                    @foreach ($products as $product)
                      <div class="col-xl-4 col-lg-6">
                          <article style="height: 350px">
                            <a href="#">
                              <div class="post-img">
                                  <img src="{{asset('/storage/product-images/'.$product->image)}}" alt=""
                                      class="img-fluid">
                              </div>
                              <div class="d-flex justify-content-between text-primary">

                                  <p class="post-author">TK. {{$product->price}}</p>
                                  <p>Stock {{{$product->stock}}}</p>
                              </div>

                              <h2 class="title">Name : <a href="#">{{$product->name}}</a></h2>
                            </a>
                          </article>
                      </div>
                    @endforeach 
                  @endif

                  
                </div><!-- End blog posts list -->

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
