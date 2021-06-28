@extends('layouts.guest')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            @if($errors->first())
            <div class="alert alert-danger" role="alert">
                {!! $errors->first() !!}
            </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <form action="/auth/register" method="post">
                        @csrf
                        <h4 class="card-title">Register</h4>
                        <div class="row">
                            <div class="col-12 mb-2">
                                @include('components.account.form-input', ['label' => 'Email', 'type' => 'email', 'name' => 'email'])
                            </div>
                            <div class="col-12 mb-2">
                                @include('components.account.form-input', ['label' => 'Name', 'type' => 'text', 'name' => 'name'])
                            </div>
                            <div class="col-12 mb-2">
                                @include('components.account.form-input', ['label' => 'Birthday', 'type' => 'date', 'name' => 'birthday'])
                            </div>
                            <div class="col-12 mb-2">
                                @include('components.account.form-input', ['label' => 'Phone Number', 'type' => 'number', 'name' => 'notelp'])
                            </div>
                            <div class="col-12 mb-2">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Gender
                                </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Laki-laki" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Perempuan">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                @include('components.account.form-input', ['label' => 'Address', 'type' => 'text', 'name' => 'address'])
                            </div>
                            <div class="col-12 mb-2">
                                @include('components.account.form-input', ['label' => 'Password', 'type' => 'password', 'name' => 'password'])
                            </div>
                            <div class="col-12 mb-2">
                                @include('components.account.form-input', ['label' => 'Password Confirmation', 'type' => 'password', 'name' => 'password_confirm'])
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection