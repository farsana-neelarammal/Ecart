@extends('customer/profile-template') @section('profile content title')

<h5>Profile Details</h5>
<hr class="green-hr"> @endsection @section('profile content')

<table class="table table-borderless">
    <tbody>
        <tr>
            <td>Name</td>
            <td>Farsana N</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>farsana.nnn@gmail.com</td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td>+91 8547532065</td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>Female</td>
        </tr>
        <tr>
            <td>Alternate Mobile</td>
            <td>-not added -</td>
        </tr>
    </tbody>
</table>
<button class="btn btn-primary">Edit</button> @endsection