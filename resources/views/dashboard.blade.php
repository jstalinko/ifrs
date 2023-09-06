@extends('layouts.app')

@section('content')
            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                               
                                <span class="card-title">Pemasukan</span>
                                <span class="stats-counter">$<span class="counter">48190</span><small>This month</small></span>
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
                                <span class="stats-counter"><span class="counter">83710</span><small>This month</small></span>
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
                                <span class="stats-counter"><span class="counter">23230</span><small>This month</small></span>
                            </div>
                            <div class="progress stats-card-progress">
                                <div class="determinate" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            
                    <div class="row no-m-t no-m-b ">
                        <div class="col s4 m4">
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