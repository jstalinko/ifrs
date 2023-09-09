<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['suppliers'] = Supplier::all();
        return view('supplier.index' , $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['isEdit'] = false;
        $data['edit'] = null;
        return view('supplier.form' , $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // show the all suplier

            $data['suppliers'] = Supplier::all();
            return view('supplier.index' , $data);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // edit supplier
        {
            $data['isEdit'] = true;
            $data['edit'] = Supplier::find($id);
            return view('supplier.form' , $data);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // update supplier id
        $request->validate([
            'code' => 'required|unique:suppliers,code,' . $id,
            'name' => 'required',
            'description' => 'nullable'
        ]);

        Supplier::find($id)->update($request->all());
        return redirect()->route('supplier.index')->with('success' , 'Supplier updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // remove  suplier
        Supplier::find($id)->delete();
        return redirect()->route('supplier.index')->with('success' , 'Supplier deleted successfully');

    }
}
