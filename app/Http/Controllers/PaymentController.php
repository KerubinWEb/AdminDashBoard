<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use DB;

class PaymentController extends Controller
{
    public function show()
    {
        $payment = DB::select('SELECT p.payment_id AS pp,payment_date,first_name,last_name,amount,status FROM `payment` AS p INNER JOIN `orders` AS o ON p.order_id=o.order_id
        INNER JOIN `customers` AS c ON o.customer_id=c.customer_id');
        return view('pages.payment',compact('payment'));
    }
}
