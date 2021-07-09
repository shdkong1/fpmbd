<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\region;

class RegionController extends Controller
{
    public function index(){
        $region = region::all();
        return view('region', compact('region'));
    }

    public function add_region(Request $request){
        region::insert([
            'region_id' => $request->regionid,
            'region_description' => $request->regiondescription
        ]);
        return redirect()->back();
    }

    public function edit($region_id){
        $region = region::find($region_id);
        return view('edit_region', compact('region'));
    }

    //public function update(Request $request){
      //  shipper::where('shipper_id', $request->id)->update([
        //    'company_name' => $request->companyname,
          //  'phone' => $request->phonenumber
       // ]);
        //return redirect()->route('index');
    //}
}
