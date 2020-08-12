@extends('main-template')
@section('main-content')
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <!-- <a class="navbar-brand" href="#"><img src="{{asset('Images/Ecart.PNG')}}" alt="Ecart Logo"></a> -->
            <a class="navbar-brand" href="{{url('')}}">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('profile')}}">Hello,</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Orders</a>
                            <a class="dropdown-item" href="#">Wishlist</a>
                            <a class="dropdown-item" href="#">Contact Us</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Address</a>
                            <a class="dropdown-item" href="#">Cards</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Edit Profile</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Wishlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('content')
@endsection