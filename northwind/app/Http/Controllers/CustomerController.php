<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomerController extends Controller
{
    public function index(){
        $customers = customer::all();
        return view('customer', compact('customers'));
    }

    public function add_customer(Request $request){
        customer::insert([
            'customer_id' => $request->customerid,
            'company_name' => $request->companyname,
            'contact_name' => $request->contactname,
            'contact_title' => $request->contacttitle,
            'address'=> $request->address,
            'city'=> $request->city,
            'region'=> $request->region,
            'postal_code'=> $request->postalcode,
            'country'=> $request->country,
            'phone'=> $request->phone,
            'fax'=> $request->fax
        ]);
        return redirect()->back();
    }

    public function edit($customer_id){
        $customers = customer::find($customer_id);
        return view('edit_customer', compact('customers'));
    }

    //public function update(Request $request){
      //  shipper::where('shipper_id', $request->id)->update([
        //    'company_name' => $request->companyname,
          //  'phone' => $request->phonenumber
       // ]);
        //return redirect()->route('index');
    //}
}
