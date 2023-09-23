{{-- @dd($accounts) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <div class="m-l-2">
        <div class="card">
            <!-- datepicker -->
            <form method="GET" action="/report/all">
                @csrf
            <div class="row">
                <div class="col m3">
                    <h6> Filter laporan </h6>
                </div>
                <div class="col m3">
                    <label for="from">Filter dari tanggal</label>
                    <input id="from" name="from" type="date" class="datepicker required">
                </div>
                <div class="col m3">
                    <label for="to">Ke tanggal</label>
                    <input id="to" name="to" type="date" class="datepicker required">
                </div>
                <div class="col m3">
                    <button role="button" type="submit"  class="waves-effect waves-light btn m-b-lg">Filter</button>
                    <a href="/report/print?type=transaction&from={{Request::get('from')}}&to={{Request::get('to')}}" class="waves-effect waves-light btn red m-b-lg">Print PDF</a>
                </div>
            </div>
            </form>

            <div class="card-content">
                <span class="card-title">
                    Laporan semua transaksi
                </span>

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
                            @if($o->payment_status == 'paid')
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
                                    @if($o->payment_status == 'paid')
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
            </div>
        </div>
    </div>
</main>

@endsection

@section('js')
<script>

$('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        autoClose:true,
        format:'yyyy-mm-dd 00:00'
    });

</script>
@endsection