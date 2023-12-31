{{-- @dd($accounts) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <div class="m-l-2">
        <div class="card">
           
            <div class="card-content">
                <div class="card-title">
                    <h3>Kelola Supplier</h3>
                </div>
                <a href="/supplier/create" class="waves-effect waves-light btn m-b-lg"><i class="material-icons left">add</i> Tambah supplier</a>
                <table class="display responsive-table  datatable">
                    <thead>
                      <tr>
                          <th>NUMBER</th>
                          <th>NAMA</th>
                            <th>ALAMAT</th>
                          <th>NO. HP</th>
                          <th>EMAIL</th>
                            <th>DESKRIPSI</th>
                          <th>AKSI</th>
                          
                      </tr>
                    </thead>
            
                    @foreach ($suppliers as $sup)
                    <tbody>
                            <tr>
                                <td>
                                    {{$sup->supplier_number}}
                                </td>
                                <td>
                                    {{$sup->supplier_name}}
                                </td>
                                <td>
                                    {{$sup->supplier_address}}
                                </td>
                                <td>
                                    {{$sup->supplier_phone}}
                                </td>
                                <td>
                                    {{$sup->supplier_email}}
                                </td>
                                <td>
                                    {{$sup->supplier_description}}
                                </td>
                                <td>
                                    <a class="waves-effect waves-light btn pink" href="/supplier/edit/{{$sup->id}}">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a class="waves-effect waves-light btn green" href="/supplier/delete/{{$sup->id}}">
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