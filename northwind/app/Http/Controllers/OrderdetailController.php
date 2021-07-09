<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orderdetail;

class OrderdetailController extends Controller
{
    public function index(){
        $order_details = orderdetail::all();
        return view('orderdetail', compact('order_details'));
    }

    public function add_orderdetail(Request $request){
        orderdetail::insert([
            'order_id' => $request->orderid,
            'product_id' => $request->productid,
            'unit_price' => $request->unitprice,
            'quantity'=> $request->quantity,
            'discount'=> $request->discount
        ]);
        return redirect()->back();
    }

    public function edit($order_id){
        $order_details = orderdetail::find($order_id);
        return view('edit_orderdetail', compact('order_details'));
    }

    //public function update(Request $request){
      //  shipper::where('shipper_id', $request->id)->update([
        //    'company_name' => $request->companyname,
          //  'phone' => $request->phonenumber
       // ]);
        //return redirect()->route('index');
    //}
}
