<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function index(){
        $categories = category::all();
        return view('category', compact('categories'));
    }

    public function add_category(Request $request){
        category::insert([
            'category_id' => $request->categoryid,
            'category_name' => $request->categoryname,
            'description'=> $request->description,
            'picture'=> $request->picture
        ]);
        return redirect()->back();
    }

    public function edit($category_id){
        $categories = category::find($category_id);
        return view('edit_category', compact('categories'));
    }

    //public function update(Request $request){
      //  shipper::where('shipper_id', $request->id)->update([
        //    'company_name' => $request->companyname,
          //  'phone' => $request->phonenumber
       // ]);
        //return redirect()->route('index');
    //}
}
