<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiCustomers extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table ='customers';

    protected $fillable =[
        'first_name',
        'last_name',
        'email_address',
        'address',
        'password',
        'mobile_number'
    ];

    
}
