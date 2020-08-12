@extends('home-template') @section('content')
<div class="container">
    <div class="row profile-headerdiv">
        <div class="col-lg-12">
            <h4>Account</h4>
            <p>Farsana N</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 profile-sidebar">
            <div class="list-group list-group-flush">
                <div class="list-group-item list-group-item-action ">
                    <div class="d-flex w-100 justify-content-between">
                        <a href="#" class="mb-1 h5">Overview</a>
                    </div>
                </div>
                <div class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Orders</h5>
                    </div>
                    <a href="#" class="mb-1">Orders & Returns</a>
                </div>
                <div class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Account</h5>
                    </div>
                    <ul style="list-style-type: none;">
                        <li><a href="#" class="mb-1">Profile</a></li>
                        <li><a href="#" class="mb-1">Cards</a></li>
                        <li><a href="#" class="mb-1">Address</a></li>
                    </ul>
                </div>

            </div>

        </div>
        <div class="col-lg-9 profile-section">
            <div class="row profile-content-title">
                <div class="col-lg-12">
                    @yield('profile content title')
                </div>
            </div>
            <div class="row profile-content">
                <div class="col-lg-12">
                    @yield('profile content')
                </div>
            </div>


        </div>
    </div>
</div>
@endsection