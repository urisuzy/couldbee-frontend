@extends('layouts.default')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Setting Account</h4>
            <div class="row">
                <div class="col-md-6 mb-2">
                    @include('components.account.form-input', ['label' => 'Name', 'type' => 'text', 'name' => 'name'])
                </div>
                <div class="col-md-6 mb-2">
                    @include('components.account.form-input', ['label' => 'Address', 'type' => 'text', 'name' => 'address'])
                </div>
                <div class="col-md-6 mb-2">
                    @include('components.account.form-input', ['label' => 'No Hp', 'type' => 'number', 'name' => 'notelp'])
                </div>
                <div class="col-md-6 mb-2">
                    @include('components.account.form-input', ['label' => 'Birthday', 'type' => 'date', 'name' => 'birthday'])
                </div>
                <div class="col-md-6 mb-2">
                    @include('components.account.form-input', ['label' => 'Gender', 'type' => 'text', 'name' => 'gender'])
                </div>
            </div>
            <div class="d-grid gap-2 mt-3">
                <button class="btn btn-primary" type="button">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection