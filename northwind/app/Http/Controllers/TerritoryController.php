<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\territory;

class TerritoryController extends Controller
{
    public function index(){
        $territories = territory::all();
        return view('territory', compact('territories'));
    }

    public function add_territory(Request $request){
        territory::insert([
            'territory_id' => $request->territoryid,
            'territory_description' => $request->territorydescription,
            'region_id' => $request->regionid
        ]);
        return redirect()->back();
    }

    public function edit($territory_id){
        $territories = territory::find($territory_id);
        return view('edit_territory', compact('territories'));
    }

    //public function update(Request $request){
      //  shipper::where('shipper_id', $request->id)->update([
        //    'company_name' => $request->companyname,
          //  'phone' => $request->phonenumber
       // ]);
        //return redirect()->route('index');
    //}
}
