@extends('backend.layout.app')
@section('title')
   Product Details - Admin  
@endsection
@section('contain')
 <div class="pagetitle">
      <h1>Product Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Product</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">Product Details</h4>
                <div>

                  <a href="{{ route('admin.product') }}" class="btn btn-secondary" title="Back">
                    <i class="ri-arrow-left-fill"></i>
                  </a>
                </div>
                {{-- <a type="button" class="btn btn-secondary px-5"><i class="bi bi-arrow-left-square-fill"></i>Back</a> --}}
              </div>
  
                <!-- Table with stripped rows -->
                
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="{{asset('/storage/product-images/'.$product->image)}}" alt="{{$product->image}}" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Name : {{$product->name}}</h5>
                        <h6>Price : TK . <span class="text-success">{{$product->price}}</span> </h6>
                        <p class="card-text">{{$product->description}}</p>
                      </div>
                    </div>
                  </div>
                
                <!-- End Table with stripped rows -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>

    

@endsection