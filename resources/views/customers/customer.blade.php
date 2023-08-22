{{-- @dd($customers) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <a href="/customer/create" class="waves-effect waves-light btn mb-4">Tambah Pelanggan</a>
    <table class="striped">
        <thead>
          <tr>
              <th>Nomor</th>
              <th>Nama</th>
              <th>alamat</th>
              <th>No.Tlp</th>
              <th>email</th>
              <th>Deskripsi</th>
          </tr>
        </thead>

        @foreach ($customers as $customer)
        <tbody>
                <tr>
                    <th>{{ $customer->customer_number }}</th>
                    <th>{{ $customer->customer_name }}</th>
                    <th>{{ $customer->customer_address }}</th>
                    <th>{{ $customer->customer_phone }}</th>
                    <th>{{ $customer->customer_email }}</th>
                    <th>{{ $customer->customer_description }}</th>
                </tr>
            </tbody>
            @endforeach
      </table>
</main>

@endsection