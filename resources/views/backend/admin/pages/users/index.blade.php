@extends('backend.layout.app')
@section('title')
   User List - Admin  
@endsection
@section('contain')
 <div class="pagetitle">
      <h1>Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Users</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
              <h5 class="card-title">User List</h5>
              <div class="py-3">
              <a  href="#" class="btn btn-primary" title="Add User">
               <i class="ri-user-add-fill pa-3"></i>
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
                    <th>Email</th>
                    <th>Phone</th>
                    <th>User Type</th>
                    <th>Status</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($userList as $users)
                @if ($users->role )
                    
                @endif
                  <tr @if ($users->role == '1') class="d-none" @endif >
                    <td>{{$loop->iteration}}</td>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                    <td>{{$users->phone}}</td>
                    <td>
                        @if ($users->role == '2')
                          Nursery Owner
                        @elseif($users->role == '3')
                          Conseltrant
                        @elseif($users->role == '4')
                          User
                        @endif
                    </td>
                    <td>{{$users->status}}</td>
                    {{-- <td><img src="{{asset($users->image)}}" alt="{{$users->title}}" height="50" width="70"/></td> --}}
                    {{-- <td>{{$users->status == 1 ? 'Published' : 'Unpublished'}}</td>
                    <td>{{$users->offer_status == 1 ? 'Published' : 'Unpublished'}}</td> --}}
                    <td>{{$users->starting_date}}</td>
                    <td>
                        <a href="#" class="btn btn-outline-success" title="User Details">
                            <i class="bi bi-info-circle"></i>
                        </a>
                        <a href="#" class="btn btn-outline-info" title="User Status">
                            <i class="bi bi-arrow-down-circle"></i>
                        </a>
                        <a href="#" class="btn btn-outline-primary" title="User Edit">
                            <i class="ri-edit-box-line"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger" title="User Delete">
                            <i class="bi bi-trash-fill"></i>
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