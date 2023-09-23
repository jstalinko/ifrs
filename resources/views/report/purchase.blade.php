{{-- @dd($accounts) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <div class="m-l-2">
        <div class="card">
            <!-- datepicker -->
            <form method="GET" action="/report/out">
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
                    <a href="/report/print?type=purchase&from={{Request::get('from')}}&to={{Request::get('to')}}" class="waves-effect waves-light btn red m-b-lg">Print PDF</a>

                    
                </div>
            </div>
            </form>

            <div class="card-content">
                <span class="card-title">
                    Laporan pembelian
                </span>
             
                <table class="table striped hover border responsive-table">
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