<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('MS_PRODUCT', function (Blueprint $table) {
            $table->id('ID');
            $table->string('NamaProduk', 100);
            $table->unsignedInteger('Qty')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('MS_PRODUCT');
    }
};
