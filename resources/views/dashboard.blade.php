@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<section class="dashboard-page">
    <div class="page-heading">
        <div>
            <span class="eyebrow">Overview / 01</span>
            <h1>Dashboard</h1>
            <p>Ringkasan singkat dari data yang sedang dikelola.</p>
        </div>
        <span class="date-stamp">{{ now()->format('d M Y') }}</span>
    </div>

    <div class="metrics-grid">
        <article class="metric-card metric-card--dark">
            <div class="metric-card__top">
                <span>Pengguna terdaftar</span>
                <span class="metric-index">01</span>
            </div>
            <strong>{{ $totalUsers }}</strong>
            <p>Akun yang tersedia di sistem.</p>
        </article>

        <article class="metric-card metric-card--accent">
            <div class="metric-card__top">
                <span>Produk tersedia</span>
                <span class="metric-index">02</span>
            </div>
            <strong>{{ $totalProducts }}</strong>
            <p>Produk yang siap untuk inquiry.</p>
        </article>
    </div>

    <div class="dashboard-note">
        <div>
            <span class="panel-kicker">Product inquiry</span>
            <h2>Data ringkas, keputusan lebih cepat.</h2>
        </div>
        <p>Gunakan API inquiry produk untuk mengambil data secara terproteksi menggunakan JWT.</p>
    </div>
</section>
@endsection