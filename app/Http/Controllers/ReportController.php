<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Purchase;
use PDF;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function purchases(Request $request)
    {
        
        if($request->from && $request->to){
            $data['purchases'] = Purchase::whereBetween('created_at', [$request->from, $request->to])->orderBy('id','desc')->get();
        }else{
            $data['purchases'] = Purchase::orderBy('id','desc')->orderBy('id','desc')->get();
        }
        return view('report.purchase' , $data);
    }

    public function orders(Request $request)
    {
        if(isset($request->from) && isset($request->to)){
            $data['orders'] = Order::whereBetween('created_at', [$request->from, $request->to])->groupBy('invoice')->orderBy('id' , 'desc')->get();
        }else{
            $data['orders'] = Order::orderBy('id','desc')->groupBy('invoice')->get();
        }

        return view('report.order' , $data);
    }

    public function transactions(Request $request)
    {
        if($request->from && $request->to){
            $data['in'] = Order::where('payment_status' , 'paid')->whereBetween('created_at', [$request->from, $request->to])->orderBy('id','desc')->get();
            $data['out'] = Purchase::where('payment_status','paid')->whereBetween('created_at', [$request->from, $request->to])->orderBy('id','desc')->get();
        }else{
            $data['in'] = Order::where('payment_status' , 'paid')->get();
            $data['out'] = Purchase::where('payment_status' , 'paid')->get();
        }

        return view('report.transaction' , $data);
    }


    public function printPdf(Request $request)
    {
        $type = $request->type;
        $from = $request->from;
        $to = $request->to;
        if(!empty($type))
        {
            if($type == 'order')
            {
                if($from && $to){
                    $data['orders'] = Order::whereBetween('created_at', [$from, $to])->groupBy('invoice')->orderBy('id' , 'desc')->get();
                }else{
                    $data['orders'] = Order::orderBy('id','desc')->groupBy('invoice')->get();
                }
                $data['from'] = ($from ?? 'semua');
                $data['to'] = ($to ?? 'semua');
                $pdf = PDF::loadview('report.order_pdf' , $data);
                return $pdf->stream('report-order.pdf');
            }
            elseif($type == 'purchase')
            {
                if($from && $to){
                    $data['purchases'] = Purchase::whereBetween('created_at', [$from, $to])->orderBy('id','desc')->get();
                }else{
                    $data['purchases'] = Purchase::orderBy('id','desc')->get();
                }
                $data['from'] = ($from ?? 'semua');
                $data['to'] = ($to ?? 'semua');
                $pdf = PDF::loadview('report.purchase_pdf' , $data);
                return $pdf->stream('report-purchase.pdf');
            }
            elseif($type == 'transaction')
            {  if($request->from && $request->to){
                $data['in'] = Order::where('payment_status' , 'paid')->whereBetween('created_at', [$request->from, $request->to])->orderBy('id','desc')->get();
                $data['out'] = Purchase::where('payment_status','paid')->whereBetween('created_at', [$request->from, $request->to])->orderBy('id','desc')->get();
            }else{
                $data['in'] = Order::where('payment_status' , 'paid')->get();
                $data['out'] = Purchase::where('payment_status' , 'paid')->get();
            }
    
                $data['from'] = ($from ?? 'semua');
                $data['to'] = ($to ?? 'semua');
                $pdf = PDF::loadview('report.transaction_pdf' , $data);
                return $pdf->stream('transaction.pdf');
            }
        }
    }
}
