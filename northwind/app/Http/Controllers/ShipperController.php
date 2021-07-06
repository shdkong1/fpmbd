<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shipper;

class ShipperController extends Controller
{
    public function index(){
        $shippers = shipper::all();
        return view('shipper', compact('shippers'));
    }

    public function add_shipper(Request $request){
        shipper::insert([
            'shipper_id' => $request->shipperid,
            'company_name' => $request->companyname,
            'phone' => $request->phonenumber
        ]);
        return redirect()->back();
    }

    public function edit($shipper_id){
        $shippers = shipper::find($shipper_id);
        return view('edit_shipper', compact('shippers'));
    }

    //public function update(Request $request){
      //  shipper::where('shipper_id', $request->id)->update([
        //    'company_name' => $request->companyname,
          //  'phone' => $request->phonenumber
       // ]);
        //return redirect()->route('index');
    //}
}
