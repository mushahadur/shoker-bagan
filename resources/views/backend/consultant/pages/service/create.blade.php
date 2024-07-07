@extends('backend.layout.app')
@section('title')
    Service  Add
@endsection
@section('contain')
 <div class="pagetitle">
      <h1>Service Add</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Service Add</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

      <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Service Add Form</h5>
                    <form action="{{route('service.store')}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- General Form Elements -->
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="title">
                                        @error('title')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Morning Time</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="mn_time">
                                        @error('mn_time')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- General Form Elements -->
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Evening Time</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="ev_time">
                                        @error('ev_time')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-3 col-form-label">Night Time</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="formFile" name="nt_time">
                                            @error('nt_time')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-6">
                                    <!-- General Form Elements -->
                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-3 col-form-label">Certificate</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" name="certificate">
                                            @error('certificate')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row mb-3">
                                        <label for="inputNumber" class="col-md-3 col-sm-3 col-form-label">Services</label>
                                            <div class="col-md-9 col-sm-9">
                                                <textarea class="form-control" rows="3" style="width:100%" name="service"></textarea>
                                        @error('service')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                            </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        
                            <div class="pt-2 d-flex flex-row-reverse">
                            <button class="btn btn-primary px-5"> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
@endsection