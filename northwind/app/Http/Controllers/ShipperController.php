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

    public function edit($id){
        $shippers = shipper::findOrFail($id);
        return view('edit_shipper', compact('shippers'));
    }

    public function update(Request $request, $id){
        //shipper::findOrFail($id);
        
        shipper::where('shipper_id', $request->id)->insert([
                'company_name' => $request->company_name,
                'phone' => $request->phone
            ]);
            return redirect()->route('indexshipper');
    }

    public function delete($id)
    {
        $shippers = Product::findOrFail($id);

        if ($shippers->delete()) {
            return redirect(route('indexshipper'));
        }

        return redirect(route('indexshipper'));
    }
}
