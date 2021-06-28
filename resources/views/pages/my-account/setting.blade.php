@extends('layouts.default')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <form action="/my-account/setting" method="post">
            @csrf
                <h4 class="card-title">Setting Account</h4>
                <div class="row">
                    <div class="col-md-6 mb-2">
                        @include('components.account.form-input', ['label' => 'Name', 'type' => 'text', 'name' => 'name', 'value' => $user->name])
                    </div>
                    <div class="col-md-6 mb-2">
                        @include('components.account.form-input', ['label' => 'Address', 'type' => 'text', 'name' => 'address', 'value' => $user->address])
                    </div>
                    <div class="col-md-6 mb-2">
                        @include('components.account.form-input', ['label' => 'No Hp', 'type' => 'number', 'name' => 'notelp', 'value' => $user->notelp])
                    </div>
                    <div class="col-md-6 mb-2">
                        @include('components.account.form-input', ['label' => 'Birthday', 'type' => 'date', 'name' => 'birthday', 'value' => $user->birthday])
                    </div>
                    <div class="col-md-6 mb-2">
                        @include('components.account.form-input', ['label' => 'Gender', 'type' => 'text', 'name' => 'gender', 'value' => $user->gender])
                    </div>
                </div>
                <div class="d-grid gap-2 mt-3">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection