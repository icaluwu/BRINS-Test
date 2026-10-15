@extends('layouts.app')

@section('title', 'Login')

@section('content')
<section class="auth-layout">
    <div class="auth-intro">
        <span class="eyebrow">BRINS internal workspace</span>
        <h1>Satu ruang untuk melihat data dengan lebih jelas.</h1>
        <p>Masuk untuk mengakses ringkasan pengguna dan produk pada lingkungan kerja BRINS.</p>
        <div class="intro-note">
            <span class="intro-note__line"></span>
            <span>Secure access · Product inquiry</span>
        </div>
    </div>

    <div class="form-panel">
        <div class="form-panel__heading">
            <span class="panel-kicker">Akun Anda</span>
            <h2>Login</h2>
            <p>Gunakan kredensial yang sudah terdaftar.</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="stack-form">
            @csrf

            <div class="field-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username"
                       class="@error('username') has-error @enderror"
                       value="{{ old('username') }}" autocomplete="username" autofocus>
                @error('username')
                    <div class="field-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="field-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password"
                       class="@error('password') has-error @enderror"
                       autocomplete="current-password">
                @error('password')
                    <div class="field-error">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="button button--primary">Masuk</button>
        </form>
    </div>
</section>
@endsection