@extends('seller/seller-template') @section('content')
<div class="container">
    <h4>Find your Products</h4>
    <div>
        <form class="form-inline">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Product Name" aria-label="Product Name" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
    <div>
        <a href="{{url('product-search/add-single-product')}}">Add a new Product</a>
        <a href="{{url('product-search/add-multiple-products')}}">Upload a file to add multiple Products</a>
    </div>
</div>
@endsection