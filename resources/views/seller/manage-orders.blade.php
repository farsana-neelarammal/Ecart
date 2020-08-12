@extends('seller/seller-template') @section('content')
<h4>Manage Orders</h4>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="pills-pending-tab" data-toggle="pill" href="#pills-pending" role="tab" aria-controls="pills-pending" aria-selected="true">Pending</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-unshipped-tab" data-toggle="pill" href="#pills-unshipped" role="tab" aria-controls="pills-unshipped" aria-selected="false">Unshipped</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-cancelled-tab" data-toggle="pill" href="#pills-cancelled" role="tab" aria-controls="pills-cancelled" aria-selected="false">Cancelled</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-sent-tab" data-toggle="pill" href="#pills-sent" role="tab" aria-controls="pills-sent" aria-selected="false">Sent</a>
    </li>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group list-group-flush">
                    Refine by
                    <div class="list-group-item list-group-item-action ">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Payment method</h5>
                        </div>
                        <ul style="list-style-type: none;">
                            <li><input type="checkbox"> COD</li>
                            <li><input type="checkbox"> Online Payment</li>
                        </ul>
                    </div>
                    <div class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Customer Option</h5>
                        </div>
                        <ul style="list-style-type: none;">
                            <li><input type="checkbox"> Standard</li>
                            <li><input type="checkbox"> Fast Track</li>

                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <form class="form-inline">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Product Name" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Shipped Date (ascending)</a>
                            <a class="dropdown-item" href="#">Shipped Date (decending)</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary">Results per page 15</button>
                    </div>-
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table thead-dark table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox">
                                    </th>
                                    <th scope="col">Order Date</th>
                                    <th scope="col">Order Details</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product Details</th>
                                    <th scope="col">Customer Option</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>10-01-2020</td>
                                    <td>123-152-145</td>
                                    <td></td>
                                    <td>Shirt</td>
                                    <td>Standard</td>

                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>15-01-2020</td>
                                    <td>145-458-456</td>
                                    <td></td>
                                    <td>Shirt</td>
                                    <td>Fast Track</td>

                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>21-02-2020</td>
                                    <td>154-525-565</td>
                                    <td></td>
                                    <td>Shirt</td>
                                    <td>Standard</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="pills-unshipped" role="tabpanel" aria-labelledby="pills-unshipped-tab">...</div>
    <div class="tab-pane fade" id="pills-cancelled" role="tabpanel" aria-labelledby="pills-cancelled-tab">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group list-group-flush">
                    Refine by
                    <div class="list-group-item list-group-item-action ">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Payment method</h5>
                        </div>
                        <ul style="list-style-type: none;">
                            <li><input type="checkbox"> COD</li>
                            <li><input type="checkbox"> Online Payment</li>
                        </ul>
                    </div>
                    <div class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Shipment status</h5>
                        </div>
                        <ul style="list-style-type: none;">
                            <li><input type="checkbox"> At destination FC</li>
                            <li><input type="checkbox"> At origin FC</li>
                            <li><input type="checkbox"> Damaged in transit</li>
                            <li><input type="checkbox"> Delivered to Buyer</li>
                            <li><input type="checkbox"> Label Cancelled</li>
                            <li><input type="checkbox"> Lost in transit</li>
                            <li><input type="checkbox"> Out for delivery</li>
                            <li><input type="checkbox"> Picked up</li>
                            <li><input type="checkbox"> Rejected by buyer</li>
                            <li><input type="checkbox"> Returning to seller</li>
                            <li><input type="checkbox"> Returned to seller</li>
                            <li><input type="checkbox"> Undeliverable</li>
                            <li><input type="checkbox"> Waiting for pickup</li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <form class="form-inline">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Product Name" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sort
                    </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Shipped Date (ascending)</a>
                            <a class="dropdown-item" href="#">Shipped Date (decending)</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary">Results per page 15</button>
                    </div>-
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table thead-dark table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox">
                                    </th>
                                    <th scope="col">Order Date</th>
                                    <th scope="col">Order Details</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product Details</th>
                                    <th scope="col">Customer Option</th>
                                    <th scope="col">Order Status</th>
                                    <th scope="col">Cancellation Reason</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>10-01-2020</td>
                                    <td>123-152-145</td>
                                    <td></td>
                                    <td>Shirt</td>
                                    <td>Standard</td>
                                    <td>At Origin FC</td>
                                    <td>Damaged on transit</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>15-01-2020</td>
                                    <td>145-458-456</td>
                                    <td></td>
                                    <td>Shirt</td>
                                    <td>Fast Track</td>
                                    <td>Returned to Seller</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>21-02-2020</td>
                                    <td>154-525-565</td>
                                    <td></td>
                                    <td>Shirt</td>
                                    <td>Standard</td>
                                    <td>Delivered to Buyer</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="pills-sent" role="tabpanel" aria-labelledby="pills-sent-tab">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group list-group-flush">
                    Refine by
                    <div class="list-group-item list-group-item-action ">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Payment method</h5>
                        </div>
                        <ul style="list-style-type: none;">
                            <li><input type="checkbox"> COD</li>
                            <li><input type="checkbox"> Online Payment</li>
                        </ul>
                    </div>
                    <div class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Shipment status</h5>
                        </div>
                        <ul style="list-style-type: none;">
                            <li><input type="checkbox"> At destination FC</li>
                            <li><input type="checkbox"> At origin FC</li>
                            <li><input type="checkbox"> Damaged in transit</li>
                            <li><input type="checkbox"> Delivered to Buyer</li>
                            <li><input type="checkbox"> Label Cancelled</li>
                            <li><input type="checkbox"> Lost in transit</li>
                            <li><input type="checkbox"> Out for delivery</li>
                            <li><input type="checkbox"> Picked up</li>
                            <li><input type="checkbox"> Rejected by buyer</li>
                            <li><input type="checkbox"> Returning to seller</li>
                            <li><input type="checkbox"> Returned to seller</li>
                            <li><input type="checkbox"> Undeliverable</li>
                            <li><input type="checkbox"> Waiting for pickup</li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <form class="form-inline">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Product Name" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Shipped Date (ascending)</a>
                            <a class="dropdown-item" href="#">Shipped Date (decending)</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary">Results per page 15</button>
                    </div>-
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table thead-dark table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox">
                                    </th>
                                    <th scope="col">Order Date</th>
                                    <th scope="col">Order Details</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product Details</th>
                                    <th scope="col">Customer Option</th>
                                    <th scope="col">Order Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>10-01-2020</td>
                                    <td>123-152-145</td>
                                    <td></td>
                                    <td>Shirt</td>
                                    <td>Standard</td>
                                    <td>At Origin FC</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>15-01-2020</td>
                                    <td>145-458-456</td>
                                    <td></td>
                                    <td>Shirt</td>
                                    <td>Fast Track</td>
                                    <td>Returned to Seller</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>21-02-2020</td>
                                    <td>154-525-565</td>
                                    <td></td>
                                    <td>Shirt</td>
                                    <td>Standard</td>
                                    <td>Delivered to Buyer</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection