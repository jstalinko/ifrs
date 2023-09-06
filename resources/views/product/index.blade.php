{{-- @dd($accounts) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <div class="m-l-2">
        <div class="card">
           
            <div class="card-content">
                <div class="card-title">
                    <h3>Kelola Produk</h3>
                </div>
                <a href="/product/create" class="waves-effect waves-light btn m-b-lg"><i class="material-icons left">add</i> Tambah produk</a>
                <table class="display responsive-table  datatable">
                    <thead>
                      <tr>
                          <th>CODE</th>
                          <th>KATEGORI</th>
                            <th>SUPPLIER</th>
                          <th>NAMA PRODUK</th>
                          <th>DESKRIPSI</th>
                            <th>HARGA</th>
                            <th>HARGA MODAL</th>
                            <th>STOK</th>
                            
                          <th>AKSI</th>
                          
                      </tr>
                    </thead>
            
                    @foreach ($products as $pro)
                    <tbody>
                            <tr>
                                <td>
                                    <a href="/product/edit/{{$pro->id}}">{{$pro->code}}</a>

                                </td>
                                <td>{{$pro->category?->name}}</td>
                                <td>
                                    @foreach(json_decode($pro->supplier_id) as $sup)
                                    <b> {{$sup}}</b> /
                                    @endforeach
                                </td>
                                <td>
                                    {{$pro->name}}
                                </td>
                                <td>{{$pro->description}}</td>
                                <td>{{$pro->price}}</td>
                                <td>{{$pro->price_modal}}</td>
                                <td>{{$pro->stock}}</td>

                                <td>
                                    <a class="waves-effect waves-light btn pink" href="/product/edit/{{$pro->id}}">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a class="waves-effect waves-light btn green" href="/product/delete/{{$pro->id}}">
                                        <i class="material-icons">delete</i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                  </table>
            </div>
        </div>
    </div>
</main>

@endsection

@section('js')

@include('layouts.datatable')

@endsection