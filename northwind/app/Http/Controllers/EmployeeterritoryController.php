<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employeeterritory;

class EmployeeterritoryController extends Controller
{
    public function index(){
        $employee_territories = employeeterritory::all();
        return view('employeeterritory', compact('employee_territories'));
    }

    public function add_employeeterritory(Request $request){
        employeeterritory::insert([
            'employee_id' => $request->employeeid,
            'territory_id' => $request->territoryid
        ]);
        return redirect()->back();
    }

    public function edit($employee_id){
        $employee_territories = employeeterritory::find($employee_id);
        return view('edit_employeeterritory', compact('employee_territories'));
    }

    //public function update(Request $request){
      //  shipper::where('shipper_id', $request->id)->update([
        //    'company_name' => $request->companyname,
          //  'phone' => $request->phonenumber
       // ]);
        //return redirect()->route('index');
    //}
}
