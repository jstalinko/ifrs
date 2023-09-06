<?php

namespace App\Http\Controllers;

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
}
