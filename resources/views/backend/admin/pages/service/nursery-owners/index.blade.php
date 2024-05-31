@extends('backend.layout.app')
@section('title')
   Nursery Owner List - Admin  
@endsection
@section('contain')
 <div class="pagetitle">
      <h1>Nursery Owner List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Nursery Owner</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">Nursery Owner List</h4>
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
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Job</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($nurseryOwners as $nurseryOwner)
                    <tr >
                      <td>{{$loop->iteration}}</td>
                      <td>{{$nurseryOwner->name}}</td>
                      <td>{{$nurseryOwner->email}}</td>
                      <td>{{$nurseryOwner->phone}}</td>
                      <td>{{$nurseryOwner->job}}</td>
                      <td><img src="{{asset('/storage/user/profile-images/'.$nurseryOwner->image)}}" alt="{{$nurseryOwner->image}}" height="50" width="60"/></td>
                      <td>{{$nurseryOwner->status}}</td>
                      <td>{{ $nurseryOwner->created_at->format('M j, Y') }}</td>
                      <td>
                          <a href="#" class="btn btn-outline-success" title="User Details">
                              <i class="bi bi-info-circle"></i>
                          </a>
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