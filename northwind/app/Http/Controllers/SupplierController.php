<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;

class SupplierController extends Controller
{
    public function index(){
        $suppliers = supplier::all();
        return view('supplier', compact('suppliers'));
    }

    public function add_supplier(Request $request){
        supplier::insert([
            'supplier_id' => $request->supplierid,
            'company_name' => $request->companyname,
            'contact_name' => $request->contactname,
            'contact_title'=> $request->contacttitle,
            'address'=> $request->address,
            'city'=> $request->city,
            'region'=> $request->region,
            'postal_code'=> $request->postalcode,
            'country'=> $request->country,
            'phone'=> $request->phone,
            'fax'=> $request->fax,
            'homepage'=> $request->homepage
        ]);
        return redirect()->back();
    }

    public function edit($supplier_id){
        $suppliers = supplier::find($supplier_id);
        return view('edit_supplier', compact('suppliers'));
    }

    //public function update(Request $request){
      //  shipper::where('shipper_id', $request->id)->update([
        //    'company_name' => $request->companyname,
          //  'phone' => $request->phonenumber
       // ]);
        //return redirect()->route('index');
    //}
}
