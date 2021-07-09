<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customerdemographic;

class CustomerdemographicController extends Controller
{
    public function index(){
        $customer_demographics = customerdemographic::all();
        return view('customerdemographic', compact('customer_demographics'));
    }

    public function add_customerdemographic(Request $request){
        customerdemographic::insert([
            'customer_type_id' => $request->customertypeid,
            'customer_desc' => $request->customerdesc
        ]);
        return redirect()->back();
    }

    public function edit($customer_type_id){
        $customer_demographics = customerdemographic::find($customer_type_id);
        return view('edit_customerdemographic', compact('customer_demographics'));
    }

    //public function update(Request $request){
      //  shipper::where('shipper_id', $request->id)->update([
        //    'company_name' => $request->companyname,
          //  'phone' => $request->phonenumber
       // ]);
        //return redirect()->route('index');
    //}
}
