@extends('seller/seller-template') @section('content')
<div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search Name,SKU etc." aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
        </div>
    </div>

    <table class="table thead-dark table-hover table-responsive">
        <thead>
            <tr>
                <th>
                    <input type="checkbox">
                </th>
                <th scope="col">Status</th>
                <th scope="col">Image</th>
                <th scope="col">SKU</th>
                <th scope="col">Product Name</th>
                <th scope="col">Created On</th>
                <th scope="col">Stock</th>
                <th scope="col">Price</th>
                <th scope="col">Fee</th>
                <th scope="col">Shipping</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="checkbox"></td>
                <td>Active</td>
                <td></td>
                <td>123-456-789</td>
                <td>Shirt</td>
                <td>10-01-2020</td>
                <td>5</td>
                <td>550</td>
                <td>65</td>
                <td>80</td>
                <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>Active</td>
                <td></td>
                <td>123-456-789</td>
                <td>Shirt</td>
                <td>10-01-2020</td>
                <td>5</td>
                <td>550</td>
                <td>65</td>
                <td>80</td>
                <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>Active</td>
                <td></td>
                <td>123-456-789</td>
                <td>Shirt</td>
                <td>10-01-2020</td>
                <td>5</td>
                <td>550</td>
                <td>65</td>
                <td>80</td>
                <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td>
            </tr>
        </tbody>
    </table>
</div>

@endsection