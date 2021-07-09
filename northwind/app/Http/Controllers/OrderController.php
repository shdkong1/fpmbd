<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class OrderController extends Controller
{
    public function index(){
        $orders = order::all();
        return view('order', compact('orders'));
    }

    public function add_order(Request $request){
        order::insert([
            'order_id' => $request->orderid,
            'customer_id' => $request->customerid,
            'employee_id' => $request->employeeid,
            'order_date'=> $request->orderdate,
            'required_date'=> $request->requireddate,
            'shipped_date'=> $request->shippeddate,
            'ship_via'=> $request->shipvia,
            'freight'=> $request->freight,
            'ship_name'=> $request->shipname,
            'ship_address'=> $request->shipaddress,
            'ship_city'=> $request->shipcity,
            'ship_region'=> $request->shipregion,
            'ship_postal_code'=> $request->shippostalcode,
            'ship_country'=> $request->shipcountry
        ]);
        return redirect()->back();
    }

    public function edit($order_id){
        $orders = order::find($order_id);
        return view('edit_order', compact('orders'));
    }

    //public function update(Request $request){
      //  shipper::where('shipper_id', $request->id)->update([
        //    'company_name' => $request->companyname,
          //  'phone' => $request->phonenumber
       // ]);
        //return redirect()->route('index');
    //}
}
