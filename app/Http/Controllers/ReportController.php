<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Purchase;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function purchases(Request $request)
    {
        
        if($request->from && $request->to){
            $data['purchases'] = Purchase::whereBetween('created_at', [$request->from, $request->to])->get();
        }else{
            $data['purchases'] = Purchase::all();
        }
        return view('report.purchase' , $data);
    }

    public function orders(Request $request)
    {
        // if($request->from !== '' && $request->to !== ''){
        //     $data['orders'] = Order::whereBetween('created_at', [$request->from, $request->to])->get();
        // }else{
        //     $data['orders'] = Order::all();
        // }
        $data['orders'] = Order::all();

        return view('report.order' , $data);
    }

    public function transactions(Request $request)
    {
        if($request->from && $request->to){
            $data['orders'] = Order::whereBetween('created_at', [$request->from, $request->to])->get();
            $data['purchases'] = Purchase::whereBetween('created_at', [$request->from, $request->to])->get();
        }else{
            $data['orders'] = Order::all();
            $data['purchases'] = Purchase::all();
        }

        return view('report.transaction' , $data);
    }
}
