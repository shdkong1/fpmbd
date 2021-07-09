<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customercustomerdemo;

class CustomercustomerdemoController extends Controller
{
    public function index(){
        $customer_customer_demo = customercustomerdemo::all();
        return view('customercustomerdemo', compact('customer_customer_demo'));
    }

    public function add_customercustomerdemo(Request $request){
        customercustomerdemo::insert([
            'customer_id' => $request->customerid,
            'customer_type_id' => $request->customertypeid
        ]);
        return redirect()->back();
    }

    public function edit($customer_id){
        $customer_customer_demo = customercustomerdemo::find($customer_id);
        return view('edit_customercustomerdemo', compact('customer_customer_demo'));
    }

    //public function update(Request $request){
      //  shipper::where('shipper_id', $request->id)->update([
        //    'company_name' => $request->companyname,
          //  'phone' => $request->phonenumber
       // ]);
        //return redirect()->route('index');
    //}
}
