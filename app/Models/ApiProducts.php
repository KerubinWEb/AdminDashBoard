<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiProducts extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table ='products';

    protected $fillable =[
        'product_name',
        'category_id',
        'stock',
        'price',
        'product_description',
        'image',
    ];
}
