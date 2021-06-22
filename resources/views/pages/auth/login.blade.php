@extends('layouts.guest')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Login</h4>
                    <div class="row">
                        <div class="col-12 mb-2">
                            @include('components.account.form-input', ['label' => 'Email', 'type' => 'email', 'name' => 'email'])
                        </div>
                        <div class="col-12 mb-2">
                            @include('components.account.form-input', ['label' => 'Password', 'type' => 'password', 'name' => 'password'])
                        </div>
                    </div>
                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-primary" type="button">Login</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
@endsection