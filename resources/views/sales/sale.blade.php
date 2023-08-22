{{-- @dd($customers) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <a href="/transaction/sale/create" class="waves-effect waves-light btn mb-4">Tambah Penjualan Baru</a>
    <table class="striped">
        <thead>
          <tr>
              <th>nama pengguna</th>
              <th>deskripsi</th>
              <th>sold</th>
              <th>cost of goods sold</th>
            </tr>
        </thead>

        @foreach ($sales as $s)
        <tbody>
                <tr>
                    <th>{{ $s->customer_name }}</th>
                    <th>{{ $s->description}}</th>
                    <th>{{ $s->sold }}</th>
                    <th>{{ $s->cost }}</th>
                </tr>
            </tbody>
            @endforeach
      </table>
</main>

@endsection