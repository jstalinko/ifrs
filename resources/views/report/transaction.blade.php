{{-- @dd($accounts) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <div class="m-l-2">
        <div class="card">
            <!-- datepicker -->
            <div class="row">
                <div class="col m6">
                    
                </div>
                <div class="col m6">

                </div>
            </div>

            <div class="card-content">
                <span class="card-title">
                    Laporan penjualan
                </span>

                <table class="table striped hover border">
                    <thead>
                        <th>
                        Invoice 
                        </th>   
                        <th>
                        Produk detail
                        </th> 
                        <th>
                        Pelanggan
                        </th>    
                        <th>
                        Status
                        </th> 
                        <th>
                        Total
                        </th>
                        <th>
                        Tanggal
                        </th> 
                    </thead>
                    <tbody>
                        @foreach($orders as $or)
                        <tr>
                            <td>
                                <a href="/order/{{$or->invoice}}">{{$or->invoice}}</a>
                            </td>
                            <td>
                                @php
                                    $products = \App\Models\Order::where('invoice', $or->invoice)->get();
                                @endphp
                                @foreach($products as $product)
                                <li>{{$product->product?->name}} ({{$product->qty}})</li>
                                @endforeach
                            </td>
                            <td>
                                {{$or->customer?->name ?? 'Pelanggan'}}
                            </td>
                            <td>
                                {!! Helper::orderstatus($or->payment_status) !!}
                            </td>
                            <td>
                                {{Helper::rupiah($or->total)}}
                            </td>
                            <td>
                                {{$or->created_at->diffForHumans()}}
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection


@section('js')
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });

</script>
@endsection