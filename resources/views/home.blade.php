@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="home-hero">
    <div class="hero-copy">
        <span class="eyebrow">BRINS Test · 2026</span>
        <h1>Data yang terasa ringan untuk dikelola.</h1>
        <p>Workspace sederhana untuk mengakses ringkasan sistem dan inquiry produk dengan alur yang aman.</p>
        <a href="{{ auth()->check() ? route('dashboard') : route('login') }}" class="button button--primary">
            {{ auth()->check() ? 'Buka dashboard' : 'Masuk ke workspace' }}
        </a>
    </div>
    <div class="hero-aside">
        <div class="hero-aside__number">01</div>
        <div>
            <span class="panel-kicker">Built for clarity</span>
            <p>Antarmuka yang fokus pada informasi penting, tanpa distraksi.</p>
        </div>
    </div>
</section>
@endsection