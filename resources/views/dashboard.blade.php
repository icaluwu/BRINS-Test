@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1 class="h4 mb-4">Dashboard ical le</h1>

<div class="row g-3">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-body">
                <p class="text-muted mb-1">Jumlah User</p>
                <p class="display-5 fw-bold mb-0">{{ $totalUsers }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-body">
                <p class="text-muted mb-1">Jumlah Produk Terdaftar</p>
                <p class="display-5 fw-bold mb-0">{{ $totalProducts }}</p>
            </div>
        </div>
    </div>
</div>
@endsection