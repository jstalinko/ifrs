{{-- @dd($customers) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <a href="/transaction/general/create" class="waves-effect waves-light btn mb-4">Tambah Transaksi Baru</a>
    <table class="striped">
        <thead>
          <tr>
              <th>nama akun</th>
              <th>normal balance</th>
              <th>balance</th>
          </tr>
        </thead>

        @foreach ($transactions as $t)
        <tbody>
                <tr>
                    <th>{{ $t->account_number }}</th>
                    <th>{{ $t->normal_balance}}</th>
                    <th>{{ $t->balance }}</th>
                </tr>
            </tbody>
            @endforeach
      </table>
</main>

@endsection