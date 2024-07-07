@extends('backend.layout.app')
@section('title')
   Website Visitor List - Admin  
@endsection
@section('contain')
 <div class="pagetitle">
      <h1>Website Visitor</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Visitor</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
              <h5 class="card-title">Website Visitor List</h5>
              <div class="py-3">
              {{-- <a  href="#" class="btn btn-primary" title="Add User">
               <i class="ri-user-add-fill pa-3"></i>
              </a> --}}
              </div>
            </div>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                   <th>#</th>
                    <th>
                      IP Address
                    </th>
                    <th>Time</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($visitors as $visitorList)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$visitorList->ip_address}}</td>
                    <td>{{$visitorList->visit_time}}</td>
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