<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class , 'product_id');
    }

    public function orderWhereBetween($from , $to)
    {
        return $this->whereBetween('created_at' , [$from , $to])->groupBy('invoice')->get();
    }

    public function orderGroupByInvoice()
    {
        return $this->orderBy('id' , 'desc')->groupBy('invoice')->get();
    }
}
