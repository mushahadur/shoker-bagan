@extends('backend.layout.app')
@section('title')
    Consultant Order List
@endsection
@section('contain')
    <div class="pagetitle">
        <h1>Consultant Order List</h1>
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
                                @if ($orders->isEmpty())
                                    <p>No orders found.</p>
                                @else
                                    <table class="table table-borderless datatable datatable-table">
                                        <thead>
                                            <tr>
                                                <th scope="col" data-sortable="true">
                                                    <button class="datatable-sorter">Si No</button>
                                                </th>
                                                <th scope="col" data-sortable="true">
                                                    <button class="datatable-sorter">Nursery Name</button>
                                                </th>
                                                <th scope="col" data-sortable="true">
                                                    <button class="datatable-sorter">Nursery Phone</button>
                                                </th>
                                                <th scope="col" data-sortable="true">
                                                    <button class="datatable-sorter">Product Name</button>
                                                </th>
                                                <th scope="col" data-sortable="true">
                                                    <button class="datatable-sorter">Product Price</button>
                                                </th>
                                                <th scope="col" data-sortable="true">
                                                    <button class="datatable-sorter">Product Image</button>
                                                </th>
                                                <th scope="col" data-sortable="true">
                                                    <button class="datatable-sorter">Status</button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nursery_name }}</td>
                                                    <td>{{ $item->nursery_phone }}</td>
                                                    <td>{{ $item->product_name }}</td>
                                                    <td>{{ $item->product_price }}</td>
                                                    <td>
                                                        <img src="{{ asset('/storage/product-images/'. $item->product_image) }}"
                                                            alt="" height="50" width="60">
                                                    </td>
                                                    <td class="green">
                                                        <span class="badge bg-warning">{{ $item->status }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
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
