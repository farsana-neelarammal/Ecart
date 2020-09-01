@extends('admin/admin-template')

@section('bodyContent')

<div class="row">
    <div class="col-lg-8 mx-auto">
        <form class="mt-4">
            <div class="form-group row">
                <label for="sub-dept" class="col-sm-2 col-form-label">Recipient</label>
                <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" id="cat-dept" name="cat-dept"> -->
                    <select class="form-control" id="sub-dept">
                        <option selected>Choose one</option>
                        <option value="1">Customers</option>
                        <option value="1">Sellers</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="sub-cat" class="col-sm-2 col-form-label">Notification Type</label>
                <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" id="cat-dept" name="cat-dept"> -->
                    <select class="form-control" id="sub-cat">
                        <option selected>Choose one</option>
                        <option value="1">Push Notification</option>
                        <option value="1">Email</option>
                        <option value="1">Both</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection