<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class EmployeeController extends Controller
{
    public function index(){
        $employees = employee::all();
        return view('employee', compact('employees'));
    }

    public function add_employee(Request $request){
        employee::insert([
            'employee_id' => $request->employeeid,
            'last_name' => $request->lastname,
            'first_name' => $request->firstname,
            'title'=> $request->title,
            'title_of_courtesy'=> $request->titleofcourtesy,
            'birth_date'=> $request->birthdate,
            'hire_date'=> $request->hiredate,
            'address'=> $request->address,
            'city'=> $request->city,
            'region'=> $request->region,
            'postal_code'=> $request->postalcode,
            'country'=> $request->country,
            'home_phone'=> $request->homephone,
            'extension'=> $request->extension,
            'photo'=> $request->photo,
            'notes'=> $request->notes,
            'reports_to'=> $request->reportsto,
            'photo_path'=> $request->photopath,
        ]);
        return redirect()->back();
    }

    public function edit($employee_id){
        $employees = employee::find($employee_id);
        return view('edit_employee', compact('employees'));
    }

    //public function update(Request $request){
      //  shipper::where('shipper_id', $request->id)->update([
        //    'company_name' => $request->companyname,
          //  'phone' => $request->phonenumber
       // ]);
        //return redirect()->route('index');
    //}
}
