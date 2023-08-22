{{-- @dd($accounts) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <a href="/account/create" class="waves-effect waves-light btn mb-4">Tambah Akun</a>
    <table class="striped">
        <thead>
          <tr>
              <th>Nomor</th>
              <th>Nama</th>
              <th>Tipe</th>
              <th>Balance</th>
              <th>Deskripsi</th>
          </tr>
        </thead>

        @foreach ($accounts as $account)
        <tbody>
                <tr>
                    <th>{{ $account->account_number }}</th>
                    <th>{{ $account->account_name }}</th>
                    <th>{{ $account->account_type }}</th>
                    <th>{{ $account->account_balance }}</th>
                    <th>{{ $account->account_description }}</th>
                </tr>
            </tbody>
            @endforeach
      </table>
</main>

@endsection