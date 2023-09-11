<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function create()
    {
        return view('purchase.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:categories,code',
            'name' => 'required',
            'description' => 'nullable'
        ]);

        Category::create($request->all());
        return redirect()->route('category.index')->with('success' , 'Category created successfully');
    }
}
