<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Helper;
class PurchaseController extends Controller
{
    public function create()
    {
        $data['isEdit'] = false;
        $data['edit'] = null;
        return view('purchase.form' , $data);
    }

    public function store(Request $request)
    {
       

        $purchase = new Purchase();
        $purchase->invoice = Helper::genCode('invoice');
        $purchase->supplier_id = $request->supplier_id;
        $purchase->total = $request->total;
        $purchase->discount = 0;
        $purchase->grand_total = $request->grand_total;
        $purchase->payment_status  = $request->payment_status;
        $purchase->description = $request->description;
        $purchase->category_id = $request->category_id;
        $purchase->save();
        
        return redirect()->route('category.index')->with('success' , 'Category created successfully');
    }

    public function update(Request $request ,$id)
    {
       

        $purchase = Purchase::find($id);

        $purchase->supplier_id = $request->supplier_id;
        $purchase->total = $request->total;
        $purchase->discount = 0;
        $purchase->grand_total = $request->grand_total;
        $purchase->payment_status  = $request->payment_status;
        $purchase->description = $request->description;
        $purchase->category_id = $request->category_id;
        $purchase->save();
        
        return redirect()->route('category.index')->with('success' , 'Category created successfully');
    }

    public function edit(Request $request,$id)
    {
        $data['isEdit'] = true;
        $data['edit'] = Purchase::find($id);
        return view('purchase.form' , $data);
    }
}
