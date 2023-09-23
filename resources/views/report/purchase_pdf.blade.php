
<html>
    <head>
        <title> Laporan Pembelian </title>
    </head>
    <body>
        <h1> Laporan Pembelian </h1>
        <h3> Filter dari tanggal {{$from}} ke tanggal {{$to}} </h3>
        <hr>
        <hr>
<table border="1" style="border:1px solid #000;border-collapse:collapse;">
    <thead>
        <th>
        Invoice 
        </th>   
        <th>
            Supplier
        </th> 
        <th>
            Kategori
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
        @foreach($purchases as $or)
        <tr>
            <td>
                <a href="#">{{$or->invoice}}</a>
            </td>
            <td>
             {{$or?->supplier?->supplier_name ?? 'Tidak ada nama'}}
            </td>
            <td>
                {{$or->category?->name}}
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