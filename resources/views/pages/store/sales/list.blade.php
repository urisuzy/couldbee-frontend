@extends('layouts.default')

@section('content')
<div class="container mt-3">
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
            @include('components.account.sales-list-row')
            @include('components.account.sales-list-row')
            @include('components.account.sales-list-row')
        </tbody>
    </table>
</div>
@endsection