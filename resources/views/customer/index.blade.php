{{-- @dd($accounts) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <div class="m-l-2">
        <div class="card">
           
            <div class="card-content">
                <div class="card-title">
                    <h3>Kelola Pelanggan</h3>
                </div>
                <a href="/category/create" class="waves-effect waves-light btn m-b-lg"><i class="material-icons left">add</i> Tambah kategori</a>
                <table class="display responsive-table  datatable">
                    <thead>
                      <tr>
                        <th>NOMOR</th>
                          <th>NAMA</th>
                          <th>ALAMAT</th>
                          <th>NO. HP</th>
                          <th>EMAIL</th>
                          <th>DESKRIPSI</th> 
                          <td>
                            AKSI</td>                         
                      </tr>
                    </thead>
            
                    @foreach ($customers as $cus)
                    <tbody>
                            <tr>
                                <td>
                                    {{$cus->customer_number}}
                                </td>
                                <td>
                                    {{$cus->customer_name}}
                                </td>
                                <td>
                                    {{$cus->customer_address}}
                                </td>
                                <td>
                                    {{$cus->customer_phone}}
                                </td>
                                <td>
                                    {{$cus->customer_email}}
                                </td>
                                <td>
                                    {{$cus->customer_description}}
                                </td>
                                <td>
                                    <a class="waves-effect waves-light btn pink" href="/customer/edit/{{$cus->id}}">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a class="waves-effect waves-light btn green" href="/customer/delete/{{$cus->id}}">
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