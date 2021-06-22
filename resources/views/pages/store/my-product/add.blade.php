@extends('layouts.default')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Product</h4>
            <div class="row">
                <div class="col-md-6 mb-2">
                    @include('components.account.form-input', ['label' => 'Name', 'type' => 'text', 'name' => 'name'])
                </div>
                <div class="col-md-6 mb-2">
                    @include('components.account.form-input', ['label' => 'Price', 'type' => 'number', 'name' => 'price'])
                </div>
                <div class="col-md-6 mb-2">
                    @include('components.account.form-input', ['label' => 'Stock', 'type' => 'number', 'name' => 'stock'])
                </div>
                <div class="col-md-6 mb-2">
                    @include('components.account.form-input', ['label' => 'Category', 'type' => 'text', 'name' => 'category'])
                </div>
                <div class="col-md-6 mb-2">
                    @include('components.account.form-input', ['label' => 'Picture', 'type' => 'text', 'name' => 'picture'])
                </div>
                <div class="col-md-6 mb-2">
                    @include('components.account.form-input', ['label' => 'Description', 'type' => 'text', 'name' => 'description'])
                </div>
            </div>
            <div class="d-grid gap-2 mt-3">
                <button class="btn btn-primary" type="button">Save</button>
                <a class="btn btn-danger" href="/my-store/products">Back to My Product</a>
            </div>
        </div>
    </div>
</div>
@endsection