<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;

class ShippingController extends Controller
{
    public function show()
    {
        $shipping = DB::select("SELECT shipping_id,shipping_address,first_name,last_name,gender,mobile_number,amount FROM `shipping` AS s INNER JOIN `customers` AS c ON s.customer_id=c.customer_id
        INNER JOIN `orders` AS o ON s.order_id=o.order_id
        INNER JOIN `payment` AS p ON o.payment_id=p.payment_id");
        return view('pages.delivery',compact('shipping'));
    }
}
