@extends('backend.layout.app')
@section('title')
    User Order List
@endsection
@section('contain')
    <div class="pagetitle">
        <h1>User Order List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Order List</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">Order List <span>| Today</span></h5>

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
                                            <th scope="col" data-sortable="true" style="width: 10.655737704918032%;">
                                                <button class="datatable-sorter">#</button>
                                            </th>
                                            <th scope="col" data-sortable="true" style="width: 23.442622950819672%;">
                                                <button class="datatable-sorter">Title</button>
                                            </th>
                                            <th scope="col" data-sortable="true" style="width: 39.34426229508197%;">
                                                <button class="datatable-sorter">Product</button>
                                            </th>
                                            <th scope="col" data-sortable="true" style="width: 11.80327868852459%;">
                                                <button class="datatable-sorter">Image</button>
                                            </th>
                                            <th scope="col" data-sortable="true" style="width: 11.80327868852459%;">
                                                <button class="datatable-sorter">Price</button>
                                            </th>
                                            <th scope="col" data-sortable="true" class="red"
                                                style="width: 14.754098360655737%;"><button
                                                    class="datatable-sorter">Status</button></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-index="0">
                                            <td scope="row"><a href="#">#2457</a></td>
                                            <td>Brandon Jacob</td>
                                            <td><a href="#" class="text-primary">At praesentium minu</a></td>
                                            <td><img src="{{ asset('/storage/user/profile-images/' .Auth::user()->image) }}" alt="" height="50" width="60"></td>
                                            <td>$64</td>
                                            <td class="green"><span class="badge bg-success">Approved</span></td>
                                        </tr>
                                       
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
