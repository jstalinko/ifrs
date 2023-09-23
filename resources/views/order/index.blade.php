{{-- @dd($accounts) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <div class="m-l-2">
        <div class="card">
            <div class="card-content">
                <span class="card-title">
                    Pesanan terakhir
                </span>

                <table class="table responsive-table">
                    <thead>
                        <th>
                        Invoice 
                        </th>   
                        <th>
                        Produk
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
                        @foreach($recentorders as $or)
                        <tr>
                            <td>
                                <a href="/order/{{$or->invoice}}">{{$or->invoice}}</a>
                            </td>
                            <td>
                                {{$or->product?->name}}
                            </td>
                            <td>
                                {{$or->customer?->name ?? 'Pelanggan'}}
                            </td>
                            <td>
                                {{$or->status}}
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