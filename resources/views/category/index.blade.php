{{-- @dd($accounts) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <div class="m-l-2">
        <div class="card">
           
            <div class="card-content">
                <div class="card-title">
                    <h3>Kelola kategori</h3>
                </div>
                <a href="/category/create" class="waves-effect waves-light btn m-b-lg"><i class="material-icons left">add</i> Tambah kategori</a>
                <table class="display responsive-table  datatable">
                    <thead>
                      <tr>
                          <th>CODE</th>
                          <th>NAMA KATEGORI</th>
                          <th>DESKRIPSI</th>
                          <th>AKSI</th>
                          
                      </tr>
                    </thead>
            
                    @foreach ($categories as $cat)
                    <tbody>
                            <tr>
                                <td>
                                    <a href="/category/{{$cat->id}}/edit">{{$cat->code}}</a>

                                </td>
                                <td>{{$cat->name}}</td>
                                <td>{{$cat->description}}</td>
                                <td>
                                    <a class="waves-effect waves-light btn pink" href="/category/edit/{{$cat->id}}">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a class="waves-effect waves-light btn green" href="/category/delete/{{$cat->id}}">
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