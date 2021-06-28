@extends('layouts.default')

@section('content')
<div class="container mt-4">
    <p class="mb-2">Home > Product</p>
    <div class="row">
        <div class="col-md-4 mt-2">
            <img src="{{$product->picture}}" alt="" width="100%">
        </div>
        <div class="col-md-5 mt-2">
            <h4><b>{{$product->name}}</b></h4>
            <p>Stok {{$product->stock}} | <i class="fas fa-star" style="color:gold"></i> 4.5</p>
            <nav class="mt-3 mb-1">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Info</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">{{$product->description}}</div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Produk ini tidak disediakan oleh <b>Cloudbee</b>, semua produk disediakan oleh masing-masing penjual. Semua kecacatan produk adalah sepenuhnya tanggung jawab penjual.</div>
            </div>

            <div class="my-2">
                @include('components.products.store-card', ['name' => $user->name])
            </div>

        </div>
        <div class="col-md-3 mt-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><b>Rp {{number_format($product->price)}}</b></h5>
                    <p class="card-text"><span class="badge bg-danger">50%</span> <small><s>Rp {{number_format($product->price*2)}}</s></small></p>
                    <hr>
                    <p><i class="fas fa-map-marked-alt"></i> Barang siap diantar ke <b><?= !empty($userAuth->address) ? $userAuth->address : 'Rumahmu' ?></b></p>
                    <p><i class="fas fa-shipping-fast"></i> Ongkir <b>Gratis</b></p>
                    <p><i class="fas fa-clock"></i> Estimasi tiba <b>Besok</b></p>
                    @if($product->stock > 0)
                    <div class="d-grid gap-2">
                        <a href="/order/buy/{{$product->id}}" class="btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i> Buy</a>
                    </div>
                    @else
                    <div class="alert alert-danger" role="alert">
                        Maaf, stok habis
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection