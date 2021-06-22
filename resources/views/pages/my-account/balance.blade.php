@extends('layouts.default')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-3 md-2">
            <div class="card">
                <div class="card-body">
                    <span class="badge bg-success">Saldo:</span>
                    <h3>Rp 9.000.000</h3>
                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-primary" type="button">Deposit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 md-2">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Perubahan</th>
                        <th scope="col">Tersisa</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @include('components.account.balance-product-row')
                    @include('components.account.balance-product-row')
                    @include('components.account.balance-product-row')
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection