@extends('layouts.auth.auth')

@section('title', 'Login')

@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <form method="POST" action="/user/login/auth">
        @csrf

        <img src="../aset/images/logos/vertical_logo.png" alt="" class="img-fluid mx-auto d-block">
        <h1 class="h3 mb-3 fw-normal">Login</h1>
        <div class="form-floating">
            <input type="email" class="form-control mb-3" name="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control mb-3" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-dark" type="submit">Login</button>

        <!-- Teks kecil untuk tautan ke halaman registrasi -->
        <p class="mt-3 text-muted">
            Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
        </p>

    </form>
@endsection
