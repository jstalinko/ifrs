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

        $cat = new Category();
        $cat->code = $request->code;
        $cat->name = $request->name;
        $cat->description = $request->description;
        $cat->save();
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

        $cat = Category::find($id);
        $cat->code = $request->code;
        $cat->name = $request->name;
        $cat->description = $request->description;
        $cat->save();
        return redirect()->route('category.index')->with('success' , 'Category updated successfully');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->route('category.index')->with('success' , 'Category deleted successfully');
    }
}
