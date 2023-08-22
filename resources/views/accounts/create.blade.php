@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <div class="row">
        <form class="col s12" action="/account/save" method="post">
          @csrf
          <div class="row">
            <div class="input-field col s12">
              <input id="account_number" name="account_number" type="text" class="validate">
              <label for="account_number">Nomor</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="account_name" name="account_name" type="text" class="validate">
              <label for="account_name">Nama</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
                <input id="account_type" name="account_type" type="text" class="validate">
                <label for="account_type">Tipe</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="account_balance" name="account_balance" type="text" class="validate">
              <label for="account_balance">balance</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="account_description" name="account_description" type="text" class="validate">
              <label for="account_description">deskripsi</label>
            </div>
          </div>
          <input id="account_description" type="submit" class="validate waves-effect waves-light btn">
        </form>
      </div>
</main>

@endsection