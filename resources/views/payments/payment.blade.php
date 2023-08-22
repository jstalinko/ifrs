{{-- @dd($customers) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <a href="/transaction/payment/create" class="waves-effect waves-light btn mb-4">Tambah Pembayaran Baru</a>
    <table class="striped">
        <thead>
          <tr>
              <th>nama kredior</th>
              <th>description</th>
              <th>paid</th>
              <th>diskon</th>
            </tr>
        </thead>

        @foreach ($payments as $p)
        <tbody>
                <tr>
                    <th>{{ $p->creditor_name }}</th>
                    <th>{{ $p->description}}</th>
                    <th>{{ $p->paid }}</th>
                    <th>{{ $p->discount }}</th>
                </tr>
            </tbody>
            @endforeach
      </table>
</main>

@endsection