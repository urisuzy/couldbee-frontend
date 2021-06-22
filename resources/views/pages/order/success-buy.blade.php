@extends('layouts.default')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title text-center">Pembayaran Diterima!!</h4>
            <div class="text-center">
                <p>Pesanan kamu #12 telah sukses dibayar menggunakan saldo akun pada tanggal 2021-06-22</p>
                <p>Silahkan cek status pesananmu dilaman Orders</p>
                <a class="btn btn-success" type="button" href="/my-account/orders">My Orders</a>
            </div>
        </div>
    </div>
</div>
@endsection