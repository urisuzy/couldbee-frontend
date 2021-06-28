@extends('layouts.default')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            @if($errors->first())
            <div class="alert alert-danger" role="alert">
                {!! $errors->first() !!}
            </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Login</h4>
                    <form method="post" action="/auth/login">
                        <div class="row">
                            @csrf
                            <div class="col-12 mb-2">
                                @include('components.account.form-input', ['label' => 'Email', 'type' => 'email', 'name' => 'email'])
                            </div>
                            <div class="col-12 mb-2">
                                @include('components.account.form-input', ['label' => 'Password', 'type' => 'password', 'name' => 'password'])
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary" type="submit">Login</button>
                            <a class="btn btn-secondary" href="/auth/register">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
@endsection