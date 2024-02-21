<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_code';
    protected $table = 'product_controllers';

    protected $fillable = [
        'product_code',
        'name_product',
        'detail_product',
        'price',
        'quantity',
    ];
}
