<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'MS_PRODUCT';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = ['NamaProduk', 'Qty'];
}