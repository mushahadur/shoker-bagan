@extends('backend.layout.app')
@section('title')
    User Profile
@endsection
@section('contain')
    <div class="pagetitle">
        <h1>User Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">User</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
          <div class="col-xl-4">

              <div class="card">
                  <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                      <img src="{{ asset('/storage/user/profile-images/' . $user->image) }}" alt="Profile"
                          class="rounded-circle">
                      <h2>{{ $user->name }}</h2>
                      <h3>{{ $user->job }}</h3>
                      <div class="social-links mt-2">
                          <a href="{{ $user->twitter_link }}" class="twitter"><i class="bi bi-twitter"></i></a>
                          <a href="{{ $user->facebook_link }}" class="facebook"><i class="bi bi-facebook"></i></a>
                          <a href="{{ $user->instagram_link }}" class="instagram"><i class="bi bi-instagram"></i></a>
                          <a href="{{ $user->linkedin_link }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                      </div>
                  </div>
              </div>

          </div>

          <div class="col-xl-8">

              <div class="card">
                  <div class="card-body pt-3">
                      <!-- Bordered Tabs -->
                      <ul class="nav nav-tabs nav-tabs-bordered">

                          <li class="nav-item">
                              <button class="nav-link active" data-bs-toggle="tab"
                                  data-bs-target="#profile-overview">Overview</button>
                          </li>

                          <li class="nav-item">
                              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                  Profile</button>
                          </li>

                      </ul>
                      <div class="tab-content pt-2">

                          <div class="tab-pane fade show active profile-overview" id="profile-overview">
                              <h5 class="card-title">About</h5>
                              <p class="small fst-italic">{{ $user->description }}</p>

                              <h5 class="card-title">Profile Details</h5>

                              <div class="row">
                                  <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                  <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                              </div>


                              <div class="row">
                                  <div class="col-lg-3 col-md-4 label">Job</div>
                                  <div class="col-lg-9 col-md-8">{{ $user->job }}</div>
                              </div>

                              <div class="row">
                                  <div class="col-lg-3 col-md-4 label">Address</div>
                                  <div class="col-lg-9 col-md-8">{{ $user->address }}</div>
                              </div>


                              <div class="row">
                                  <div class="col-lg-3 col-md-4 label">Phone</div>
                                  <div class="col-lg-9 col-md-8">{{ $user->phone }}</div>
                              </div>

                              <div class="row">
                                  <div class="col-lg-3 col-md-4 label">Email</div>
                                  <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                              </div>

                          </div>

                          <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                              <!-- Profile Edit Form -->
                              <form action="{{ route('update.profile', ['id' => $user->id]) }}" method="POST"
                                  enctype="multipart/form-data">
                                  @csrf
                                  <div class="row mb-3">
                                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                          Image</label>
                                      <div class="col-md-8 col-lg-9">
                                          <img src="{{ asset('/storage/user/profile-images/' . $user->image) }}"
                                              alt="Profile">
                                          <div class="pt-2">
                                              <a href="#" class="btn btn-primary btn-sm"
                                                  title="Upload new profile image"><i class="bi bi-upload"> <input
                                                          type="file" name="image"></i></a>
                                              {{-- <a href="#" class="btn btn-danger btn-sm"
                                                  title="Remove my profile image"><i class="bi bi-trash"></i></a> --}}
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                      <div class="col-md-8 col-lg-9">
                                          <input name="name" type="text" class="form-control" id="fullName"
                                              value="{{ $user->name }}">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                      <div class="col-md-8 col-lg-9">
                                          <textarea name="description" class="form-control" id="about" style="height: 100px">{{ $user->description }}</textarea>
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                      <div class="col-md-8 col-lg-9">
                                          <input name="job" type="text" class="form-control" id="Job"
                                              value="{{ $user->job }}">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                      <div class="col-md-8 col-lg-9">
                                          <input name="address" type="text" class="form-control" id="Address"
                                              value="{{ $user->address }}">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                      <div class="col-md-8 col-lg-9">
                                          <input name="phone" type="text" class="form-control" id="Phone"
                                              value="{{ $user->phone }}">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                      <div class="col-md-8 col-lg-9">
                                          <input name="email" type="email" class="form-control" id="Email"
                                              value="{{ $user->email }}">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter
                                          Profile</label>
                                      <div class="col-md-8 col-lg-9">
                                          <input name="twitter_link" type="text" class="form-control"
                                              id="Twitter" value="{{ $user->twitter_link }}">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook
                                          Profile</label>
                                      <div class="col-md-8 col-lg-9">
                                          <input name="facebook_link" type="text" class="form-control"
                                              id="Facebook" value="{{ $user->facebook_link }}">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram
                                          Profile</label>
                                      <div class="col-md-8 col-lg-9">
                                          <input name="instagram_link" type="text" class="form-control"
                                              id="Instagram" value="{{ $user->instagram_link }}">
                                      </div>
                                  </div>

                                  <div class="row mb-3">
                                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin
                                          Profile</label>
                                      <div class="col-md-8 col-lg-9">
                                          <input name="linkedin_link" type="text" class="form-control"
                                              id="Linkedin" value="{{ $user->linkedin_link }}">
                                      </div>
                                  </div>

                                  <div class="text-center">
                                      <button type="submit" class="btn btn-primary">Save Changes</button>
                                  </div>
                              </form><!-- End Profile Edit Form -->

                          </div>



                      </div><!-- End Bordered Tabs -->

                  </div>
              </div>

          </div>
      </div>
  </section>
@endsection
