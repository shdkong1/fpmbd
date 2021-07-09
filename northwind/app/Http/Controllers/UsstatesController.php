<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usstate;

class UsstateController extends Controller
{
    public function index(){
        $us_states = usstate::all();
        return view('usstate', compact('us_states'));
    }

    public function add_usstate(Request $request){
        usstate::insert([
            'state_id' => $request->stateid,
            'state_name' => $request->statename,
            'state_abbr' => $request->stateabbr,
            'state_region'=> $request->stateregion
        ]);
        return redirect()->back();
    }

    public function edit($supplier_id){
        $us_states = usstate::find($state_id);
        return view('edit_usstate', compact('us_states'));
    }

    //public function update(Request $request){
      //  shipper::where('shipper_id', $request->id)->update([
        //    'company_name' => $request->companyname,
          //  'phone' => $request->phonenumber
       // ]);
        //return redirect()->route('index');
    //}
}
