{{-- @dd($accounts) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <div class="m-l-2">
        <div class="card">
           
            <div class="card-content">
                <div class="card-title">
                    <h3>@if($isEdit) Edit @else Tambah @endif Pelanggan</h3>
                </div>
                <form method="POST" @if($isEdit) action="/customer/update/{{$edit->id}}" @else action="/customer/store" @endif>
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <input  type="text" class="validate" name="customer_number" @if($isEdit) value="{{$edit->customer_number}}" disabled @else value="{{Helper::genCode('customer')}}" @endif>
                            <label for="disabled">Nomor Pelanggan</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input  type="text" class="validate" name="customer_name" @if($isEdit) value="{{$edit->customer_name}}" @else value="" @endif>
                            <label for="disabled">Nama Pelanggan</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                           <textarea name="customer_address" id="" cols="30" rows="10" class="materialize-textarea">{{$isEdit ? $edit->customer_address : ''}}</textarea>
                           <label for="description">Alamat Pelanggan</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                           <textarea name="customer_phone" id="" cols="30" rows="10" class="materialize-textarea">{{$isEdit ? $edit->customer_phone : ''}}</textarea>
                           <label for="description">No. HP Pelanggan</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                           <textarea name="customer_email" id="" cols="30" rows="10" class="materialize-textarea">{{$isEdit ? $edit->customer_email : ''}}</textarea>
                           <label for="description">Email Pelanggan</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                           <textarea name="customer_description" id="" cols="30" rows="10" class="materialize-textarea">{{$isEdit ? $edit->customer_description : ''}}</textarea>
                           <label for="description">Deskripsi Pelanggan</label>
                        </div>
                    </div>

                <button type="submit" class="waves-effect waves-light btn green">
                    <i class="material-icons left">save</i>
                    Simpan</button>
            </div>
        </div>
    </div>
</main>
@endsection