<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::all();
        return view('category.index' , $data);
    }

    public function create()
    {
        $data['isEdit'] = false;
        $data['edit'] = null;
        return view('category.form' , $data);
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

    public function edit($id)
    {
        $data['isEdit'] = true;
        $data['edit'] = Category::find($id);
        return view('category.form' , $data);
    }
    public function update(Request $request , $id)
    {
        $request->validate([
            'code' => 'required|unique:categories,code,' . $id,
            'name' => 'required',
            'description' => 'nullable'
        ]);

        Category::find($id)->update($request->all());
        return redirect()->route('category.index')->with('success' , 'Category updated successfully');
    }

    public function delete($id)
    {
        Category::find($id)->delete();
        return redirect()->route('category.index')->with('success' , 'Category deleted successfully');
    }
}
