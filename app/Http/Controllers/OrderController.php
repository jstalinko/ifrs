<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        $data['isEdit'] = false;
        $data['edit'] = null;
        $data['products'] = \App\Models\Product::all();
        $data['customers'] = \App\Models\Customer::all();
        return view('order.form' , $data);
    }
}
