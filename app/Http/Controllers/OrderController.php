<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        $data['isEdit'] = false;
        $data['edit'] = null;
        return view('order.form' , $data);
    }
}
