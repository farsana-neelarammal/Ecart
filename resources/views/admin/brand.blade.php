@extends('admin/admin-template') @section('pageTitle')
<h2>Brands</h3>
@endsection 
@section('bodyContent')
<div class="row mt-4 mb-4">
    <div class="col-lg-10 mx-auto">
        <form>
            <div class="form-group row">
                <label for="brand" class="col-sm-2 col-form-label">Brand</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="brand">
                </div>
            </div>
            <div class="form-group row">
                <label for="brand-dept" class="col-sm-2 col-form-label">Department</label>
                <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" id="cat-dept" name="cat-dept"> -->
                    <select class="form-control" multiple id="brand-dept">
                        <option selected>Choose multiple</option>
                        <option value="1">Fashion</option>
                        <option value="1">Baby Care</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Add Brand</button>
                </div>
            </div>
        </form>

    </div>
</div>
<div class="row">
    <div class="col-lg-10 mx-auto">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Brands</th>
                    <th scope="col">Departments</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Lee Cooper</td>
                    <td>Fashion</td>
                    <td><i class="fas fa-trash-alt"></i> <i class="fas fa-edit"></i></td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Juniors</td>
                    <td>Fashion</td>
                    <td><i class="fas fa-trash-alt"></i> <i class="fas fa-edit"></i></td>

                </tr>

            </tbody>
        </table>
    </div>
</div>


@endsection