<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use DB;

class OrdersController extends Controller
{
    public function show()
    {
        $orders = DB::select("SELECT o.order_id AS o,order_date AS od,first_name,last_name,gender,product_name,price,quantity FROM `orders` AS o INNER JOIN `customers` AS c on o.customer_id=c.customer_id
        INNER JOIN `products` AS p ON o.product_id=p.product_id
        INNER JOIN `payment` as pa ON o.payment_id=pa.payment_id");
        return view('pages.order',compact('orders'));
    }
}
