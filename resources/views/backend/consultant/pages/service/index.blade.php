@extends('backend.layout.app')
@section('title')
    Service List
@endsection
@section('contain')
    <div class="pagetitle">
        <h1>Service List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Service List</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        {{-- <h5 class="card-title">Service List <span>| Today</span></h5> --}}
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">Service List</h5>
                            <div class="py-3">
                            <a  href="{{route('service.create')}}" class="btn btn-primary" title="Add User">
                             <i class="ri-add-fill"></i>Add Service
                            </a>
                            </div>
                          </div>

                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            <div class="datatable-top">
                                <div class="datatable-dropdown">
                                    <label>
                                        <select class="datatable-selector" name="per-page">
                                            <option value="5">5</option>
                                            <option value="10" selected="">10</option>
                                            <option value="15">15</option>
                                            <option value="-1">All</option>
                                        </select> entries per page
                                    </label>
                                </div>
                                <div class="datatable-search">
                                    <input class="datatable-input" placeholder="Search..." type="search" name="search"
                                        title="Search within table">
                                </div>
                            </div>
                            <div class="datatable-container">
                                <table class="table table-borderless datatable datatable-table">
                                    <thead>
                                        <tr>
                                            <th scope="col" data-sortable="true" >
                                                <button class="datatable-sorter">Si No</button>
                                            </th>
                                            <th scope="col" data-sortable="true">
                                                <button class="datatable-sorter">Title</button>
                                            </th>
                                            <th scope="col" data-sortable="true" >
                                                <button class="datatable-sorter">Services</button>
                                            </th>
                                            <th scope="col" data-sortable="true">
                                                <button class="datatable-sorter">Certificate</button>
                                            </th>
                                            <th scope="col" data-sortable="true" class="red"
                                               ><button
                                                    class="datatable-sorter">Action</button></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($serviceList as $item)
                                        <tr>
                                          <td>{{$loop->iteration}}</td>
                                          <td>{{$item->title}}</td>
                                          <td>{{$item->service}}</td>
                                          <td><img src="{{ asset('/storage/consultant/certificates/' . $item->image) }}"
                                            alt="" height="50" width="60"></td>
                                            <td class="d-flex justify-content-start">
                     
                                                <a href="#" class="btn btn-outline-primary mr-1" title="Product Edit">
                                                    <i class="ri-edit-box-line"></i>
                                                </a>
                                            </td>
                                      @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                            <div class="datatable-bottom">
                                <div class="datatable-info">Showing 1 to 5 of 5 entries</div>
                                <nav class="datatable-pagination">
                                    <ul class="datatable-pagination-list"></ul>
                                </nav>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
