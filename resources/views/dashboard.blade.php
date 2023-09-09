@extends('layouts.app')

@section('content')
            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                               
                                <span class="card-title">Laba bersih</span>
                                <span class="stats-counter"><span class="counter">
                                {{Helper::rupiah($laba_thismonth )}}    
                                </span><small>Bulan ini ( {{date('F')}} )</small></span>
                            </div>
                            <div class="progress stats-card-progress">
                                <div class="determinate" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                        <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li><a href="javascript:void(0)"><i class="material-icons">more_vert</i></a></li>
                                    </ul>
                                </div>
                                <span class="card-title">Pengeluaran</span>
                                <span class="stats-counter"><span class="counter">{{Helper::rupiah($pengeluaran_thismonth)}}</span><small>Bulan ini ( {{date('F')}} )</small></span>
                            </div>
                            <div class="progress stats-card-progress">
                                <div class="determinate" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <span class="card-title">Omset</span>
                                <span class="stats-counter"><span class="counter">{{Helper::rupiah($omset_thismonth)}}</span><small>Bulan ini ( {{date('F')}} )</small></span>
                            </div>
                            <div class="progress stats-card-progress">
                                <div class="determinate" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                               
                                <span class="card-title">Laba bersih</span>
                                <span class="stats-counter">Rp<span class="counter">
                                {{Helper::rupiah($totallaba , false)}}    
                                </span><small>Keseluruhan</small></span>
                            </div>
                            <div class="progress stats-card-progress">
                                <div class="determinate" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                        <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li><a href="javascript:void(0)"><i class="material-icons">more_vert</i></a></li>
                                    </ul>
                                </div>
                                <span class="card-title">Pengeluaran</span>
                                <span class="stats-counter"><span class="counter">{{Helper::rupiah($totalpengeluaran)}}</span><small>Keseluruhan</small></span>
                            </div>
                            <div class="progress stats-card-progress">
                                <div class="determinate" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <span class="card-title">Omset</span>
                                <span class="stats-counter"><span class="counter">{{Helper::rupiah($totalomset)}}</span><small>Keseluruhan</small></span>
                            </div>
                            <div class="progress stats-card-progress">
                                <div class="determinate" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            
                    <div class="row no-m-t no-m-b ">
                        <div class="col s12 m4">
                            <div class="card">
                                <div class="card-content">
                                    <span class="card-title">Shortcut button</span>
                                    <a class="waves-effect waves-grey btn white m-b-xs">
                                        <i class="material-icons left">add</i>
                                        <span class="btn-text">Penjualan baru</span>
                                    </a>
                                    <a class="waves-effect waves-light btn indigo m-b-xs">
                                        <i class="material-icons left">add</i>
                                        <span class="btn-text">Pelanggan baru</span>
                                    </a>
                                    <a class="waves-effect waves-light btn pink m-b-xs">
                                        <i class="material-icons left">add</i>
                                        <span class="btn-text">Pengeluaran baru</span>
                                    </a>
                                    {{-- <a class="waves-effect waves-light btn blue m-b-xs">Blue</a>
                                    <a class="waves-effect waves-light btn green m-b-xs">Green</a>
                                    <a class="waves-effect waves-light btn orange m-b-xs">Orange</a>
                                    <a class="waves-effect waves-light btn red m-b-xs">Red</a>
                                    <a class="waves-effect waves-light btn purple m-b-xs">Purple</a><br> --}}

                                </div>
                            </div>
                        </div>

                        <div class="col s12 m8">
                            <div class="card">
                                <div class="card-content">
                                    <span class="card-title">
                                        Pesanan terakhir
                                    </span>

                                    <table class="table">
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
                    </div>
                </div>
                <div class="inner-sidebar">
                    <span class="inner-sidebar-title">Order Terbaru</span>
                    <div class="message-list">
                    <div class="info-item message-item"><img class="circle" src="{{asset('assets/images/profile-image-2.png')}}" alt=""><div class="message-info"><div class="message-author">Ned Flanders</div><small>3 hours ago</small></div></div>
                    <div class="info-item message-item"><img class="circle" src="{{asset('assets/images/profile-image.png')}}" alt=""><div class="message-info"><div class="message-author">Peter Griffin</div><small>4 hours ago</small></div></div>
                    <div class="info-item message-item"><img class="circle" src="{{asset('assets/images/profile-image-1.png')}}" alt=""><div class="message-info"><div class="message-author">Lisa Simpson</div><small>2 days ago</small></div></div>
                    </div>
                   
                </div>
            </main>
           
            @endsection