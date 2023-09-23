<html>
    <head>
        <title> Laporan Penjualan </title>
    </head>
    <body>
        <h1> Laporan Penjualan </h1>
        <h3> Filter dari tanggal {{$from}} ke tanggal {{$to}} </h3>
        <hr>
        <hr>
        <table border="1" style="border:1px solid #000;border-collapse:collapse">
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
                        {{Helper::rupiah($or->grand_total)}}
                    </td>
                    <td>
                        {{$or->created_at}}
                    </td>
                </tr>
                @endforeach
        
            </tbody>
        </table>
    </body>
</html>