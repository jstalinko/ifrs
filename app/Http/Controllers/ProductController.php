<?php

namespace App\Http\Controllers;

use Helper;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = Product::all();
        return view('product.index' , $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['isEdit'] = false;
        $data['edit'] = null;
        return view('product.form' , $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description  = $request->description;
        $product->category_id = $request->category_id;
        $product->price_modal = $request->price_modal;
        $product->code = $request->code;
        $product->stock = $request->stock;
        $product->supplier_id = json_encode($request->supplier_id);
        $product->save();

        return redirect()->route('product.index')->with('success' , 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['isEdit'] = true;
        $data['edit'] = Product::find($id);
        return view('product.form' , $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description  = $request->description;
        $product->category_id = $request->category_id;
        $product->price_modal = $request->price_modal;
       // $product->code = $request->code;
        $product->stock = $request->stock;
        $product->supplier_id = json_encode($request->supplier_id);
        $product->save();

        return redirect()->route('product.index')->with('success' , 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect()->route('product.index')->with('success' , 'Product deleted successfully');
    }

    public function addProduct(Request $request)
    {
        /**
         *   $table->string('invoice');
            $table->integer('customer_id')->nullable();
            $table->integer('total');
            $table->integer('discount')->nullable();
            $table->integer('qty');
            $table->integer('grand_total');
            $table->enum('payment_status' , ['paid' , 'unpaid'])->default('unpaid');
            $table->integer('product_id');
         */
        $invoice = Helper::genCode('invoice');
        $data=[];
        $success=0;
        foreach($request->order as $pro)
        {
            $product = new Order();

            $product->invoice = $invoice;
            $product->customer_id = $request->customer_id;
            $product->total = $pro['total'];
            $product->discount = 0;
            $product->qty = $pro['qty'];
            $product->grand_total = str_replace("Rp" , "" , str_replace("." , "" , $request->grand_total));
            $product->payment_status = $request->payment_status;
            $product->product_id = $pro['product_id'];
            $product->save();
            $success++;
        }

        return json_encode(
            ['success' => $success , 'data' => $data , 'message' => 'success add order with invoice ' . $invoice]
        );
    }

}
