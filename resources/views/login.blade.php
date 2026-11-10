@extends('layouts.app')

@section('title', 'Masuk')

{{-- Menyembunyikan navbar pada halaman login --}}
@section('hide_nav', '1')

@section('content')
<div class="login-wrap">
    <div class="login-hero">
        <h1>Pustaka<span class="accent">Kita</span></h1>
        <p>Kelola koleksi buku, pantau peminjaman, dan temukan bacaan baru dalam satu tempat yang rapi.</p>
    </div>

    <div class="login-form">
        <h2>Masuk ke akun</h2>

        <form action="{{ route('login.process') }}" method="POST" novalidate>
            @csrf

            <div class="field">
                <label for="username">Username</label>
                <input type="text" id="username" name="username"
                       value="{{ old('username') }}" placeholder="contoh: rifqi" autofocus>
                @error('username')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Minimal 4 karakter">
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn">Masuk</button>
        </form>
    </div>
</div>
@endsection
