@extends('layouts.default')

@section('content')
<form action="/order/buy/success" method="post" class="container mt-3">
    @csrf
    <div class="row">
        <div class="col-md-8 mb-2">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{$product->picture}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-10">
                            <h5>{{$product->name}}</h5>
                            <b>Rp {{number_format($product->price)}}</b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pengiriman</h4>
                    <div class="row">
                        <div class="col-12 mb-2">
                            @include('components.account.form-input', ['label' => 'Alamat', 'type' => 'text', 'name' => 'address', 'value' => $user->address, 'disable' => true])
                        </div>
                        <div class="col-12 mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Ekspedisi</label>
                            <select class="form-select" aria-label="Default select example" id="exampleFormControlInput1" name="">
                                <option value="1">JNE</option>
                                <option value="2">JNT</option>
                                <option value="3">POS Indonesia</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 mb-1"><b>Ringkasan Belanja</b></div>
                        <div class="col-6 mb-1">Total Harga Barang</div>
                        <div class="col-6 mb-1"><span class="float-end">Rp {{number_format($product->price)}}</span> </div>
                        <div class="col-6 mb-1">Total Ongkir</div>
                        <div class="col-6 mb-1"><span class="float-end">Rp {{number_format($ongkir)}}</span></div>
                        <hr class="mt-3">
                        <div class="col-6"><b>Total Harga</b></div>
                        <div class="col-6"><b><span class="float-end">Rp {{number_format($product->price + $ongkir)}}</span></b></div>
                        <hr class="mt-3">
                        <div class="col-6 mb-1">Metode Pembayaran</div>
                        <div class="col-6 mb-1"><span class="float-end">Saldo</span> </div>
                        <div class="col-6 mb-1">Saldo</div>
                        <div class="col-6 mb-1"><span class="float-end">Rp {{number_format($balance->balance)}}</span></div>
                        <hr class="mt-3">
                        <div class="d-grid gap-2">
                            <input type="hidden" value="1" name="quantity" />
                            <input type="hidden" value="{{Cookie::get('user_id')}}" name="user_id" />
                            <input type="hidden" value="{{$product->user_id}}" name="seller_id" />
                            <input type="hidden" value="{{$product->price + $ongkir}}" name="total_price" />
                            <input type="hidden" value="{{$product->id}}" name="product_id" />
                            <input type="hidden" value="{{date('Y-m-d H:i:s')}}" name="date" />
                            <input type="hidden" value="dibayar" name="status" />
                            @if($buyable) <button class="btn btn-primary" type="submit"><i class="fas fa-money-check"></i> Bayar</button>
                            @else
                            <div class="alert alert-danger" role="alert">
                                Saldo tidak cukup, deposit dulu gan
                            </div>
                            <a class="btn btn-success" href="/my-account/balance"><i class="fas fa-money-check"></i> Deposit</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection