<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
use App\Models\Payment;
use App\Models\Customers;
use App\Models\Orders;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Session;

class ChartController extends Controller
{
    


    public function showDashboard()
    {
        return view('dashboard', compact('chart'));
    }

}