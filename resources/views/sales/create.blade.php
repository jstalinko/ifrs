@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <div class="row">
        <form class="col s12" action="/transaction/sale/save" method="post">
          @csrf
          <div class="row">
            <div class="input-field col s12">
              <input id="account_number" name="customer_name" type="text" class="validate">
              <label for="account_number">nama pengguna</label>
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
                <input id="account_type" name="sold" type="text" class="validate">
                <label for="account_type">sold</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
                <input id="account_type" name="cost" type="text" class="validate">
                <label for="account_type">cost of goods sold</label>
            </div>
          </div>
          <input type="submit" class="validate waves-effect waves-light btn">
        </form>
      </div>
</main>

@endsection