@extends('seller/seller-template') @section('content')
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="pills-category-tab" data-toggle="pill" href="#pills-category" role="tab" aria-controls="pills-category" aria-selected="true">Category</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-product-info-tab" data-toggle="pill" href="#pills-product-info" role="tab" aria-controls="pills-product-info" aria-selected="false">Product Info</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-variation-tab" data-toggle="pill" href="#pills-variation" role="tab" aria-controls="pills-variation" aria-selected="false">Variation</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-images-tab" data-toggle="pill" href="#pills-images" role="tab" aria-controls="pills-images" aria-selected="false">Images</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-more-tab" data-toggle="pill" href="#pills-more" role="tab" aria-controls="pills-more" aria-selected="false">More</a>
    </li>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-category" role="tabpanel" aria-labelledby="pills-category-tab">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Fashion
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Baby Care
            </li>
        </ul>
    </div>
    <div class="tab-pane fade" id="pills-product-info" role="tabpanel" aria-labelledby="pills-product-info-tab">
        <form>
            <div class="form-group row">
                <label for="part-no" class="col-sm-2 col-form-label">Part No.<sup>*</sup></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="part-no" placeholder="xyz-12569-4521">
                </div>
            </div>
            <div class="form-group row">
                <label for="item-name" class="col-sm-2 col-form-label">Item Name<sup>*</sup></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="item-name" placeholder="Salwar">
                </div>
            </div>
            <div class="form-group row">
                <label for="item-dept" class="col-sm-2 col-form-label">Department<sup>*</sup></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="item-dept" placeholder="Women">
                </div>
            </div>
            <div class="form-group row">
                <label for="item-brand" class="col-sm-2 col-form-label">Brand<sup>*</sup></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="item-brand" placeholder="Lee Cooper">
                </div>
            </div>
            <div class="form-group row">
                <label for="item-color" class="col-sm-2 col-form-label">Color<sup>*</sup></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="item-color" placeholder="Red">
                </div>
            </div>
            <div class="form-group row">
                <label for="item-material" class="col-sm-2 col-form-label">Material<sup>*</sup></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="item-material" placeholder="Cotton">
                </div>
            </div>
            <div class="form-group row">
                <label for="item-pattern" class="col-sm-2 col-form-label">Pattern<sup>*</sup></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="item-pattern" placeholder="Stripped">
                </div>
            </div>
            <div class="form-group row">
                <label for="item-desc" class="col-sm-2 col-form-label">Description<sup>*</sup></label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="item-desc"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="item-keywords" class="col-sm-2 col-form-label">Keywords<sup>*</sup></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="item-keywords" placeholder="Stripped">
                </div>
            </div>
            <button class="btn btn-primary">Next</button>
        </form>
    </div>
    <div class="tab-pane fade" id="pills-variation" role="tabpanel" aria-labelledby="pills-variation-tab">...</div>
    <div class="tab-pane fade" id="pills-images" role="tabpanel" aria-labelledby="pills-images-tab">
        <form>
            <div class="form-group">
                <label for="product-image">Upload product Images</label>
                <input type="file" class="form-control-file" id="product-image">
            </div>
        </form>


    </div>
    <div class="tab-pane fade" id="pills-more" role="tabpanel" aria-labelledby="pills-more-tab">...</div>

</div>
@endsection