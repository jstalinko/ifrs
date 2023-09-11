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
      
        $sup = new Supplier();
        $sup->supplier_number = $request->supplier_number;
        $sup->supplier_name = $request->supplier_name;
        $sup->supplier_address = $request->supplier_address;
        $sup->supplier_phone = $request->supplier_phone;
        $sup->supplier_email = $request->supplier_email;
        $sup->supplier_description = $request->supplier_description;
        $sup->save();

        return redirect('/supplier')->with('success' , 'Data berhasil disimpan');
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
        
            $data['isEdit'] = true;
            $data['edit'] = Supplier::find($id);
            return view('supplier.form' , $data);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // update supplier id
        $sup = Supplier::find($id);
        
        $sup->supplier_name = $request->supplier_name;
        $sup->supplier_address = $request->supplier_address;
        $sup->supplier_phone = $request->supplier_phone;
        $sup->supplier_email = $request->supplier_email;
        $sup->supplier_description = $request->supplier_description;
        $sup->save();

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
