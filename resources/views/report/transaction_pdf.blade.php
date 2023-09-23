<html>
    <head>
        <title> Laporan transaksi </title>
    </head>
    <body>
        <h1> Laporan transaksi </h1>
        <h3> Filter dari tanggal {{$from}} ke tanggal {{$to}} </h3>
        <hr>
        <hr>
        <table class="table striped hover border">
            <thead>
                <th>
                Tanggal 
                </th>   
                <th>
                Tipe Transaksi
                </th> 
                <th>
                Total
                </th>    
                <th>
                Status
                </th> 
                <th>
                Keterangan
                </th>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5">
                        <center><b>Transaksi Keluar</b></center>
                    </td>
                </tr>
                @if(count($out) < 1)
                <tr>
                    <td colspan="5">
                        <center><b>Tidak ada transaksi keluar</b></center>
                    </td>
                </tr>
                @else
                @foreach ($out as $o)
               <tr>
                <td>
                    {{ $o->created_at }}
                </td>
                <td>
                    <b><font color="red">KREDIT</font></b>
                </td>
                <td>
                    {{Helper::rupiah($o->grand_total) }}
                </td>
                <td>
                    @if($i->payment_status == 'paid')
                    <b><font color="green">LUNAS</font></b>
                @endif
                </td>
                <td>
                    {{ $o->description }}
                </td>
               </tr>
                @endforeach
                @endif

                <tr>
                    <td colspan="5">
                        <center><b>Transaksi Masuk</b></center>
                    </td>
                </tr>
                @if(count($in) < 1)
                <tr>
                    <td colspan="5">
                        <center><b>Tidak ada transaksi masuk</b></center>
                    </td>
                </tr>
                @else

                @foreach ($in as $i)
                    <tr>
                        <td>
                            {{ $i->created_at }}
                        </td>
                        <td>
                            <b><font color="green">DEBIT</font></b>
                        </td>
                        <td>
                            {{Helper::rupiah( $i->grand_total) }}
                        </td>
                        <td>
                            @if($i->payment_status == 'paid')
                                <b><font color="green">LUNAS</font></b>
                            @endif
                        </td>
                        <td>
                           Order invoice :  {{ $i->invoice }}
                        </td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </body>
</html>