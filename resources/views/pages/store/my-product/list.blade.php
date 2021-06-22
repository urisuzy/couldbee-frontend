@extends('layouts.default')

@section('content')
<div class="container mt-3">
    <a class="btn btn-success float-end mb-2" href="/my-store/product/add"><i class="fas fa-plus-circle"></i> Add Product</a>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">Pic</th>
                <th scope="col">Nama</th>
                <th scope="col">Stock</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @include('components.products.product-row')
            @include('components.products.product-row')
            @include('components.products.product-row')
        </tbody>

    </table>
</div>

@endsection