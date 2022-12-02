<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table ='payment';

    protected $fillable =[
        'order_id',
        'payment_date',
        'amount',
        'status',
    ];
}
