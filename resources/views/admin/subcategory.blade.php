@extends('admin/admin-template') @section('bodyContent')
<div class="row">
    <div class="col-lg-8 mx-auto">
        <form class="mt-4">
            <div class="form-group row">
                <label for="sub-dept" class="col-sm-2 col-form-label">Department</label>
                <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" id="cat-dept" name="cat-dept"> -->
                    <select class="form-control" id="sub-dept">
                        <option selected>Choose one</option>
                        <option value="1">Fashion</option>
                        <option value="1">Baby Care</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="sub-cat" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" id="cat-dept" name="cat-dept"> -->
                    <select class="form-control" id="sub-cat">
                        <option selected>Choose one</option>
                        <option value="1">Women</option>
                        <option value="1">Men</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Sub-Category</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Add Sub-Category</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 mx-auto">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Categories</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Tops</td>
                    <td><i class="fas fa-trash-alt"></i> <i class="fas fa-edit"></i></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Bottom</td>
                    <td><i class="fas fa-trash-alt"></i> <i class="fas fa-edit"></i></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>


@endsection