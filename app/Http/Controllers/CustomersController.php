<?php

namespace App\Http\Controllers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customers;
use DB;
use Session;

class CustomersController extends Controller
{
     public function show(){

        $customers=Customers::paginate(10);
        return view('pages.customers',compact('customers'));
    }

     public function add(){
        return view('pages.addcustomer');

    }

     public function insert(Request $request){

        // $customers = new Customers;
        // $customers->first_name= $request->input('first_name');
        // $customers->last_name=$request->input('last_name');
        // $customers->email_address=$request->input('email_address');
        // $customers->address=$request->input('address');
        // $customers->password=$request->input('password');
        // $customers->mobile_number=$request->input('mobile_number');
        // $customers->save();

        // return redirect("/dashboard/customers");

        // $data =$request->validate();
        // $customers=Customers::create($data);
        // return redirect('/dashboard/customers');

        $first_name=$request->input('first_name');
        $last_name=$request->input('last_name');
        $email_address=$request->input('email_address');
        $address=$request->input('address');
        $password=$request->input('password');
        $mobile_number=$request->input('mobile_number');
        $gender=$request->input('gender');
        $birthdate=$request->input('birthdate');
        $data=array('first_name'=>$first_name,'last_name'=>$last_name,'email_address'=>$email_address,'address'=>$address,'password'=>$password,
        'mobile_number'=>$mobile_number,'gender'=>$gender,'birthdate'=>$birthdate);
        DB::table('customers')->insert($data);

        return redirect('/dashboard/customers')->with('message', 'Your registration was successful!');
    }

    public function edit($id)
    {
        $customers =DB::select("SELECT * FROM customers WHERE customer_id=". $id);

        return view('pages.editcustomer', compact("customers"));

    }

    public function update(Request $request, $id)
    {
        $customers=Customers::where('customer_id',$id)
        ->update([
            'first_name'=>$request->input("first_name"),
            'last_name'=>$request->input("last_name"),
            'email_address'=>$request->input("email_address"),
            'address'=>$request->input("address"),
            'password'=>$request->input("password"),
            'mobile_number'=>$request->input("mobile_number"),
            'gender'=>$request->input("gender"),
            'birthdate'=>$request->input("birthdate"),
        ]);
        return redirect('/dashboard/customers');
    }

    public function destroy($id)
    {
        $customers = Customers::where('customer_id',$id)->delete();


        return redirect('/dashboard/customers');
    }


    public function search(Request $request)
    {
        $customers = DB::select ("SELECT * FROM `customers`
        WHERE first_name LIKE '%" . $request->input('search') . "%'
        OR last_name LIKE '%" . $request->input('search') . "%'");

        return view('pages.searchCustomers', compact('customers'));
    }
    
}
