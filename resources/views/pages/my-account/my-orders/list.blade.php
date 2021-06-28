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

@endsection