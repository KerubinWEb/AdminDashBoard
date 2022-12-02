<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
use App\Models\Payment;
use App\Models\Customers;
use App\Models\Categories;
use App\Models\Orders;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Session;

class AdminController extends Controller
{


    public function TotalCustomers(){

        $latest = DB::select('SELECT first_name,last_name,email_address,amount FROM `orders` AS o INNER JOIN `customers` AS c ON o.customer_id=c.customer_id
        INNER JOIN `payment` AS p ON o.payment_id=p.payment_id ORDER BY amount DESC LIMIT 5');

        $iphone = DB::select('SELECT product_name,price,image FROM `products` WHERE category_id=3021
        ORDER BY price>100000 DESC LIMIT 5');

        $transaction = DB::select('SELECT first_name,last_name,amount,status FROM `orders` AS o INNER JOIN `customers` AS c ON o.customer_id=c.customer_id INNER JOIN `payment` AS p ON o.payment_id=p.payment_id LIMIT 6');

        $options = [
            'chart_title' =>'Product per Category ID',
            'report_type' =>'group_by_string',
            'model' => 'App\Models\Products',
            'group_by_field' => 'category_id',
            'chart_type' => 'bar',
            'chart_color'=>'255,0,0',
        ];



        $chart = new LaravelChart($options);
        $totaluser=Customers::count();
        $totalorder=Orders::count();

        $totalIncome = DB::table("payment")->sum('amount');
        print_r($totalIncome= number_format($totalIncome));

        return view('dashboard', compact('totaluser','totalorder','totalIncome', 'chart','latest','iphone','transaction'));
    }




   

}
