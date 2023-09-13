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
                </div>
            </div>
            </form>

            <div class="card-content">
                <span class="card-title">
                    Laporan pembelian
                </span>
             
                <table class="table striped hover border">
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
                                <a href="/purchase/{{$or->invoice}}">{{$or->invoice}}</a>
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