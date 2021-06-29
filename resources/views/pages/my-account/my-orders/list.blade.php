@extends('layouts.default')

@section('content')
<div class="container mt-3">
    <h3>My Orders</h3>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col" style="width: 5%">Pic</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Quantity</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $order)
            @include('components.orders.order-row', ['order' => $order])
            @endforeach
        </tbody>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lacak Pesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action">Pembayaran sudah Diverifikasi.</button>
                    <button type="button" class="list-group-item list-group-item-action">Pemesanan sudah diproses oleh penjual.</button>
                    <button type="button" class="list-group-item list-group-item-action">Menunggu Pick Up</button>
                    <button type="button" class="list-group-item list-group-item-action">Pesanan telah dikirim.</button>
                    <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                        Pesanan sedang memasuki Mars Sorting Gate.
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection