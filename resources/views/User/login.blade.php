@include('Component.header')
@extends('master')
@section('content')

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 400px;">
        <h4 class="text-center font-weight-bold">Login</h4>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="form-group mt-2">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block mt-3">LOGIN</button>
        </form>

        <p class="text-center mt-3">Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
    </div>
</div>
@endsection
