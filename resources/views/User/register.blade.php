@include('Component.header')
@extends('master')
@section('content')

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4 mt-5" style="width: 400px;">
        <h4 class="text-center font-weight-bold">Register</h4>

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="form-group mt-2">
                <label>Full Name</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label>Address</label>
                <input type="text" name="address" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-3">SIGN UP</button>

        </form>

        <p class="text-center mt-3">Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>
</div>
@endsection

