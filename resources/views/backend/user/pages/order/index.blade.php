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
                                <table class="table table-borderless datatable datatable-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>
                                                <b>N</b>ame
                                            </th>
                                            <th>Categor</th>
                                            <th>Nursery</th>
                                            <th>Contact</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $order->name }}</td>
                                                <td>{{ $order->category }}</td>
                                                <td>{{ $order->user->name }}</td>
                                                <td>{{ $order->user->phone }}</td>
                                                <td>$ {{ $order->price }}</td>
                                                <td><img src="{{asset('/storage/product-images/'.$order->product->image)}}" alt="{{$order->product->image}}" height="50" width="60"/></td>
                                                <td class="green"><span
                                                        class="badge bg-warning">{{ $order->status }}</span></td>
                                            </tr>
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
