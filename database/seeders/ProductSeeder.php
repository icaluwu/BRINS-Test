<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            ['NamaProduk' => 'Asuransi Kendaraan', 'Qty' => 10],
            ['NamaProduk' => 'Asuransi Properti',  'Qty' => 5],
            ['NamaProduk' => 'Asuransi Perjalanan', 'Qty' => 8],
        ]);
    }
}