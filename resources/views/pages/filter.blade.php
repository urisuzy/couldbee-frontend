@extends('layouts.default')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Advanced Filter</h5>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Search</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="selectCat" class="form-label">Category</label>
                        <select class="form-select mb-2" aria-label="Default select example" id="selectCat">
                            <option selected>Rumah Tangga</option>
                            <option value="1">Elektronik</option>
                            <option value="2">Gaming</option>
                            <option value="3">Gadget</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="selectCat" class="form-label">Rating</label>
                        <select class="form-select mb-2" aria-label="Default select example" id="selectCat">
                            <option>5.0</option>
                            <option>4.5</option>
                            <option>4.0</option>
                        </select>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">Search</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-4 my-2">
                    @include('components.products.product-card')
                </div>
                <div class="col-md-4 my-2">
                    @include('components.products.product-card')
                </div>
                <div class="col-md-4 my-2">
                    @include('components.products.product-card')
                </div>
                <div class="col-md-4 my-2">
                    @include('components.products.product-card')
                </div>
                <div class="col-md-4 my-2">
                    @include('components.products.product-card')
                </div>
                <div class="col-md-4 my-2">
                    @include('components.products.product-card')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection