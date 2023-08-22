{{-- @dd($customers) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <a href="/transaction/receipt/create" class="waves-effect waves-light btn mb-4">Tambah kuitansi Baru</a>
    <table class="striped">
        <thead>
          <tr>
              <th>nama pengguna</th>
              <th>deskripsi</th>
              <th>terima</th>
              <th>diskon</th>
            </tr>
        </thead>

        @foreach ($receipts as $r)
        <tbody>
                <tr>
                    <th>{{ $r->customer_name }}</th>
                    <th>{{ $r->description}}</th>
                    <th>{{ $r->receipted }}</th>
                    <th>{{ $r->discount }}</th>
                </tr>
            </tbody>
            @endforeach
      </table>
</main>

@endsection