@extends('layouts.default')

@section('content')
<div class="container mt-3">
    <h3>Sales</h3>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Pic</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Quantity</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $order)
            @include('components.account.sales-list-row', ['order' => $order])
            @endforeach
        </tbody>
    </table>
</div>
@endsection