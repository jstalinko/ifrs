<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Purchase;
use Illuminate\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() :View
    {
        $data['totalomset']  = Order::where('payment_status' , 'paid')->sum('grand_total');
        $data['totalpengeluaran'] = Purchase::where('payment_status' , 'paid')->sum('total');
        $data['totallaba'] = ($data['totalomset'] - $data['totalpengeluaran']);

        $data['omset_thismonth'] = Order::where('payment_status' , 'paid')->whereMonth('created_at' , date('m'))->sum('grand_total');
        $data['pengeluaran_thismonth'] = Purchase::where('payment_status' , 'paid')->whereMonth('created_at' , date('m'))->sum('total');
        $data['laba_thismonth'] = ($data['omset_thismonth'] - $data['pengeluaran_thismonth']);
        
        $data['recentorders'] = Order::where('payment_status','paid')->orderBy('id','desc')->groupBy('invoice')->take(10)->get();
        return view('dashboard' , $data);
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
