<?php

namespace App\Http\Controllers;
use Illuminate\Database\Migrations\Migration;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class ProductsController extends Controller
{
   

    public function display(){

        $products = DB::select('SELECT product_name,product_description,price,image,category_name,stock,p.product_id AS pp FROM `products` AS p INNER JOIN `categories` AS c ON p.category_id=c.category_id LIMIT 20');
        return view('pages.product',compact('products'));

        // $products=Products::join('categories','category_id','=','products.category_id')
        // ->paginate(10)
        // -get();
        // return view('pages.product',compact('products'));
    }

    public function search(Request $request)
    {
        $search = DB::select ("SELECT product_name,product_description,price,image,category_name,stock,p.product_id AS pp FROM `products` AS p INNER JOIN `categories` AS c ON p.category_id=c.category_id
        WHERE product_name LIKE '%" . $request->input('search') . "%'
        OR category_name LIKE '%" . $request->input('search') . "%'");

        return view('pages.searchproduct', compact('search'));
    }
    

}
