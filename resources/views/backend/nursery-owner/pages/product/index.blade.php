@extends('backend.layout.app')
@section('title')
    Product List
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
              <h5 class="card-title">Product List</h5>
              <div class="py-3">
              <a  href="{{route('product.create')}}" class="btn btn-primary" title="Add User">
               <i class="ri-add-fill"></i>Add Product
              </a>
              </div>
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
                    <th>image</th>
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
                    <td class="d-flex justify-content-start">
                     
                        <a href="{{ route('product.edit', $product) }}" class="btn btn-outline-primary mr-1" title="Product Edit">
                            <i class="ri-edit-box-line"></i>
                        </a>
                        <form id="delete-form" action="{{ route('product.destroy', $product) }}" method="POST" >
                          @csrf
                          @method('DELETE')
                             <button class="btn btn-outline-danger" type="submit"><i class="bi bi-trash-fill"></i></button>
                      </form>
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