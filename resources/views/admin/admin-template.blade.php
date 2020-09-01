@extends('main-template') @section('main-content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admin
        </a>
                <div class="dropdown-menu" aria-labelledby="adminDropdown">
                    <a class="dropdown-item" href="{{url('brand')}}">Brand</a>
                    <a class="dropdown-item" href="{{url('department')}}">Department</a>
                    <a class="dropdown-item" href="{{url('category')}}">Category</a>
                    <a class="dropdown-item" href="{{url('subcategory')}}">Sub-Category</a>
                    <a class="dropdown-item" href="{{url('deliverable-locations')}}">Deliverable Locations</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{url('notifications')}}">Notification</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="sellerDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Seller
        </a>
                <div class="dropdown-menu" aria-labelledby="sellerDropdown">
                    <a class="dropdown-item" href="{{url('seller-registration')}}">Seller Registration</a>
                    <a class="dropdown-item" href="{{url('brand-approval')}}">Brand Approval</a>
                    <a class="dropdown-item" href="{{url('category-approval')}}">Category Approval</a>
                    <a class="dropdown-item" href="{{url('subcategory-approval')}}">Sub-Category Approval</a>
                    <a class="dropdown-item" href="{{url('messages')}}">Messages</a>
                </div>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<!-- Navbar END -->
<div class="row">
    <div class="col-lg-10 mx-auto mt-4 text-center">
        @yield('pageTitle')
    </div>
</div>
<div class="row">
    <div class="col-lg-10 mx-auto border mt-4 mb-4">
        @yield('bodyContent')
    </div>
</div>
@endsection