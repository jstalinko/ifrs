{{-- @dd($accounts) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <a href="/journal/general/create" class="waves-effect waves-light btn mb-4">Tambah Jurnal</a>
    <table class="striped">
        <thead>
          <tr>
              <th>Nomor</th>
              <th>tipe</th>
              <th>tanggal</th>
              <th>reference</th>
              <th>Deskripsi</th>
              <th>debit</th>
              <th>kredit</th>
          </tr>
        </thead>

        @foreach ($journals as $j)
        <tbody>
                <tr>
                    <th>{{ $j->journal_number }}</th>
                    <th>{{ $j->journal_type }}</th>
                    <th>{{ $j->journal_date }}</th>
                    <th>{{ $j->journal_reference }}</th>
                    <th>{{ $j->journal_description }}</th>
                    <th>{{ $j->debit }}</th>
                    <th>{{ $j->credit }}</th>
                </tr>
            </tbody>
            @endforeach
      </table>
</main>

@endsection