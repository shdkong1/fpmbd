<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index(){
        $products = product::all();
        return view('product', compact('products'));
    }

    public function add_product(Request $request){
        product::insert([
            'product_id' => $request->productid,
            'product_name' => $request->productname,
            'supplier_id' => $request->supplierid,
            'category_id'=> $request->categoryid,
            'quantity_per_unit'=> $request->quantityperunit,
            'unit_price'=> $request->unitprice,
            'units_in_stock'=> $request->unitsinstock,
            'units_on_order'=> $request->unitsonorder,
            'reorder_level'=> $request->reorderlevel,
            'discontinued'=> $request->discontinued,
        ]);
        return redirect()->back();
    }

    public function edit($product_id){
        $products = product::find($product_id);
        return view('edit_product', compact('products'));
    }

    //public function update(Request $request){
      //  shipper::where('shipper_id', $request->id)->update([
        //    'company_name' => $request->companyname,
          //  'phone' => $request->phonenumber
       // ]);
        //return redirect()->route('index');
    //}
}
