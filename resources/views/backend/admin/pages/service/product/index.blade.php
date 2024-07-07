@extends('backend.layout.app')
@section('title')
   Product List - Admin  
@endsection
@section('contain')
 <div class="pagetitle">
      <h1>Product List</h1>
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
                <h4 class="card-title">Product List</h4>
                <span class="alert alert-info alert-dismissible fade show" role="alert">
                  {{Session::get('message')}}
                  <span type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></span>
                </span>
                {{-- <p class="card-title text-info">{{Session::get('message')}}</p> --}}
              </div>
  
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                     <th>#</th>
                      <th>
                        <b>N</b>ame
                      </th>
                      <th>Price</th>
                      <th>Stock</th>
                      <th>Categor</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($products as $product)
                  
                      <tr >
                        <td>{{$loop->iteration}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->stock}}</td>
                        <td>{{$product->category}}</td>
                        <td><img src="{{asset('/storage/product-images/'.$product->image)}}" alt="{{$product->image}}" height="50" width="60"/></td>
                        {{-- <td>{{$product->status}}</td> --}}
                        @if ($product->status == 'active')
                        <td><span class="badge bg-success">Active</span></td>
                        
                        @else
                        <td><span class="badge bg-warning">Inactive</span></td>
                        
                        @endif
                        <td>
                          <a href="{{ route('product.details', ['id' => $product->id]) }}" class="btn btn-outline-success" title="Product Details">
                            <i class="bi bi-info-circle"></i>
                          </a>
                          <span>
                            @if ($product->status == 'active')
                            <a href="{{ route('product.activeStatus', ['id' => $product->id]) }}" class="btn btn-outline-info" title="Product Status">
                              <i class="bi bi-arrow-up-circle"></i>
                          </a>
                            @else
                            <a href="{{ route('product.inactiveStatus', ['id' => $product->id]) }}" class="btn btn-outline-warning" title="Product Status">
                              <i class="bi bi-arrow-down-circle"></i>
                          </a>
                            @endif
                          </span>
                            
                        </td>
                      </tr>
                  
                  @endforeach
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>

    

@endsection