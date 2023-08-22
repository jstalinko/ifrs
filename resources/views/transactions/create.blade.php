@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <div class="row">
        <form class="col s12" action="/transaction/general/save" method="post">
          @csrf
          <div class="row">
            <div class="input-field col s12">
              <input id="account_number" name="account_number" type="text" class="validate">
              <label for="account_number">nomor akun</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="account_name" name="normal_balance" type="text" class="validate">
              <label for="account_name">normal balance</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
                <input id="account_type" name="balance" type="text" class="validate">
                <label for="account_type">balance</label>
            </div>
          </div>
          <input type="submit" class="validate waves-effect waves-light btn">
        </form>
      </div>
</main>

@endsection