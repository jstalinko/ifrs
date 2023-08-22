@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <div class="row">
        <form class="col s12" action="/transaction/purchase/save" method="post">
          @csrf
          <div class="row">
            <div class="input-field col s12">
              <input id="account_number" name="creditor_name" type="text" class="validate">
              <label for="account_number">Nama kreditor</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="account_name" name="description" type="text" class="validate">
              <label for="account_name">deskripsi</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
                <input id="account_type" name="purchased" type="text" class="validate">
                <label for="account_type">pembelian</label>
            </div>
          </div>
          <input type="submit" class="validate waves-effect waves-light btn">
        </form>
      </div>
</main>

@endsection