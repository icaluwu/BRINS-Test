<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query()
            ->when($request->query('search'), fn ($query, $search) => $query->where('NamaProduk', 'like', "%{$search}%"))
            ->get();

        return response()->json(['data' => $products]);
    }

    public function show(int $id)
    {
        $product = Product::find($id);

        if (! $product) {
            return response()->json(['message' => 'Produk tidak ditemukan.'], 404);
        }

        return response()->json(['data' => $product]);
    }
}
