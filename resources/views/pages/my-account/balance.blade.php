@extends('layouts.default')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-3 md-2">
            <div class="card">
                <div class="card-body">
                    <form action="/my-account/balance/deposit" method="post">
                        @csrf
                        <h3>Rp {{number_format(Cookie::get('balance'))}}</h3>
                        <span>Total Saldo</span>
                        <hr class="my-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Total Deposit</label>
                            <input type="number" name="total_price" class="form-control" id="exampleFormControlInput1" placeholder="1000000">

                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary" type="submit">Deposit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-9 md-2">
        <h3>Mutasi Saldo</h3>
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Perubahan</th>
                        <th scope="col">Tersisa</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mutation as $mutasi)
                    @include('components.account.balance-product-row', ['mutation' => $mutasi])
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection