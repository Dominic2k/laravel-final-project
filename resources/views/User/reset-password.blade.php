@include('Component.header')
@extends('master')
@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 400px;">
        <h4 class="text-center font-weight-bold">Reset Password</h4>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group mt-2">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            </div>

            <div class="form-group mt-2">
                <label>New Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label>Confirm New Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-3">
                <button type="submit" class="btn btn-primary">Reset Password</button>
            </div>

        </form>

        <p class="text-center mt-3">Remember your password? <a href="{{ route('login') }}">Login</a></p>
    </div>
</div>
@endsection
