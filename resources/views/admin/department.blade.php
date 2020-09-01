@extends('admin/admin-template') @section('bodyContent')
<div class="row mt-4 mb-4">
    <div class="col-lg-8 mx-auto">
        <form class="form-inline">
            <label class="sr-only" for="dept">Name</label>
            <input type="text" class="form-control  mr-sm-2 " id="dept" name="dept" placeholder="Enter Department Name">

            <button type="submit" class="btn btn-primary " name="addDeptBtn">Add Department</button>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 mx-auto">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Department</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Fashion</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Baby Care</td>

                </tr>

            </tbody>
        </table>
    </div>
</div>


@endsection