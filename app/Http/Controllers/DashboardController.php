<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers    = User::count();
        $totalProducts = Product::count();

        return view('dashboard', compact('totalUsers', 'totalProducts'));
    }
}