@extends('layouts.default')
<?php $uri = isset($_REQUEST['q']) && isset($_REQUEST['col']) && $_REQUEST['col'] == 'category' ? $_REQUEST['q'] : '' ?>
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <form action="/search">
                        <h5 class="card-title">Advanced Filter</h5>
                        <input type="hidden" value="category" name="col" />
                        <div class="mb-2">
                            <label for="selectCat" class="form-label">Category</label>
                            <select class="form-select mb-2" onchange='this.form.submit()' name="q" id="selectCat">
                                <option <?= $uri == 'Bags' ? 'selected' : ''; ?>>Bags</option>
                                <option <?= $uri == 'Boots' ? 'selected' : ''; ?>>Boots</option>
                                <option <?= $uri == 'Gadget' ? 'selected' : ''; ?>>Gadget</option>
                                <option <?= $uri == 'Hot Wheels' ? 'selected' : ''; ?>>Hot Wheels</option>
                                <option <?= $uri == 'Kitchen' ? 'selected' : ''; ?>>Kitchen</option>
                                <option <?= $uri == 'Laptop' ? 'selected' : ''; ?>>Laptop</option>
                                <option <?= $uri == 'Motorcycle' ? 'selected' : ''; ?>>Motorcycle</option>
                                <option <?= $uri == 'Outer' ? 'selected' : ''; ?>>Outer</option>
                                <option <?= $uri == 'Outerwear' ? 'selected' : ''; ?>>Outerwear</option>
                                <option <?= $uri == 'Petcare' ? 'selected' : ''; ?>>Petcare</option>
                                <option <?= $uri == 'Skincare' ? 'selected' : ''; ?>>Skincare</option>
                                <option <?= $uri == 'Tablets' ? 'selected' : ''; ?>>Tablets</option>
                                <option <?= $uri == 'TV' ? 'selected' : ''; ?>>TV</option>
                                <option <?= $uri == 'Watches' ? 'selected' : ''; ?>>Watches</option>
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
                    </form>
                </div>
            </div>

        </div>
        <div class="col-md-9">
            <div class="row">
                @foreach($products as $data)
                <div class="col-6 col-md-4 my-2">
                    @include('components.products.product-card', ['name' => $data->name, 'price' => $data->price, 'image' => $data->picture, 'store' => $data->store, 'id' => $data->id])
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection