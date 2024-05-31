@extends('backend.layout.app')
@section('title')
    Product  Update
@endsection
@section('contain')
 <div class="pagetitle">
      <h1>Product Update</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Product Update</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

      <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Product Update Form</h5>
                    <div class="row">
                    <div class="col-12">
                    <form action="{{route('product.update', $product->id)}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="row pb-3">
                            <div class="col-2"> Category Select </div>
                            
                                <div class="col-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category" id="exampleRadios1" value="fruits" checked>
                                        <label class="form-check-label" for="exampleRadios1"> Fruits </label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category" id="exampleRadios2" value="flowers">
                                        <label class="form-check-label" for="exampleRadios2"> Flowers </label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category" id="exampleRadios3" value="instruments">
                                        <label class="form-check-label" for="exampleRadios3"> Instruments </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- General Form Elements -->
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" value="{{$product->name}}">
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-3 col-form-label">Price</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="price" value="{{$product->price}}">
                                    @error('price')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- General Form Elements -->
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Stock</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="stock" value="{{$product->stock}}">
                                    @error('stock')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" id="formFile" name="image">
                                        @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" style="height: 80px; width:100%" name="description"> {{$product->description}}</textarea>
                                 @error('description')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="pt-2 d-flex flex-row-reverse">
                        <button class="btn btn-primary px-5"> Update</button>
                        </div>
                    </form>
                    <!-- End General Form Elements -->
                </div>
            </div>
        </div>
    </section>
@endsection