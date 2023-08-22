{{-- @dd($customers) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <a href="/transaction/purchase/create" class="waves-effect waves-light btn mb-4">Tambah Pembelian Baru</a>
    <table class="striped">
        <thead>
          <tr>
              <th>nama kreditor</th>
              <th>Deskripsi</th>
              <th>pembelian</th>
          </tr>
        </thead>

        @foreach ($purchases as $p)
        <tbody>
                <tr>
                    <th>{{ $p->creditor_name }}</th>
                    <th>{{ $p->description}}</th>
                    <th>{{ $p->purchased }}</th>
                </tr>
            </tbody>
            @endforeach
      </table>
</main>

@endsection