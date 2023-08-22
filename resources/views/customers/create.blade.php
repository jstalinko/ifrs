@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <div class="row">
        <form class="col s12" action="/customer/save" method="post">
          @csrf
          <div class="row">
            <div class="input-field col s12">
              <input id="account_number" name="customer_number" type="text" class="validate">
              <label for="account_number">Nomor</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="account_name" name="customer_name" type="text" class="validate">
              <label for="account_name">Nama</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
                <input id="account_type" name="customer_address" type="text" class="validate">
                <label for="account_type">Alamat</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="account_balance" name="customer_phone" type="text" class="validate">
              <label for="account_balance">No. Hp</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="account_email" name="customer_email" type="text" class="validate">
              <label for="account_email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="account_description" name="customer_description" type="text" class="validate">
              <label for="account_description">deskripsi</label>
            </div>
          </div>
          <input type="submit" class="validate waves-effect waves-light btn">
        </form>
      </div>
</main>

@endsection