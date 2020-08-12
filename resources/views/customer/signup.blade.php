@extends('home-template') @section('content')

<div class="card">
    <h5 class="card-header">Signup</h5>
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="signup-name">Name</label>
                <input type="text" class="form-control" id="signup-name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="signup-mobile">Mobile</label>
                <input type="tel" class="form-control" id="signup-mobile">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Signup</button>
        </form>
    </div>
</div>
<p>Already have an account? <a href="{{url('login')}}">Login</a></p>
@endsection