@extends('layouts.default')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-8 mb-2">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="http://localhost:8000/product.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-10">
                            <h5>Notale Air Purifier with HEPA UV Sterilizer Up 50m2 - AP HEPA 13</h5>
                            <b>Rp 80.000</b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pengiriman</h4>
                    <div class="row">
                        <div class="col-12 mb-2">
                            @include('components.account.form-input', ['label' => 'Alamat', 'type' => 'text', 'name' => 'address'])
                        </div>
                        <div class="col-12 mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Ekspedisi</label>
                            <select class="form-select" aria-label="Default select example" id="exampleFormControlInput1">
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
                        <div class="col-6 mb-1"><span class="float-end">Rp80.000</span> </div>
                        <div class="col-6 mb-1">Total Ongkir</div>
                        <div class="col-6 mb-1"><span class="float-end">Rp27.000</span></div>
                        <hr class="mt-3">
                        <div class="col-6"><b>Total Harga</b></div>
                        <div class="col-6"><b><span class="float-end">Rp107.000</span></b></div>
                        <hr class="mt-3">
                        <div class="col-6 mb-1">Metode Pembayaran</div>
                        <div class="col-6 mb-1"><span class="float-end">Saldo</span> </div>
                        <div class="col-6 mb-1">Saldo</div>
                        <div class="col-6 mb-1"><span class="float-end">Rp80.000</span></div>
                        <hr class="mt-3">
                        <div class="d-grid gap-2">
                            <a class="btn btn-primary" type="button" href="/order/success/1"><i class="fas fa-money-check"></i> Bayar</a>
                            <button class="btn btn-success" type="button"><i class="fas fa-money-check"></i> Deposit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection