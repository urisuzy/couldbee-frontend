@extends('layouts.default')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-6 mb-2">
            <h3>My Product</h3>
        </div>
        <div class="col-md-6 mb-2">
            <a class="btn btn-success float-end mb-2" href="/my-store/product/add"><i class="fas fa-plus-circle"></i> Add Product</a>
        </div>
    </div>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">Pic</th>
                <th scope="col">Nama</th>
                <th scope="col">Stock</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            @include('components.products.product-row', ['product' => $product])
            @endforeach
        </tbody>

    </table>
</div>

@endsection