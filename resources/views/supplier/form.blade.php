{{-- @dd($accounts) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <div class="m-l-2">
        <div class="card">
            <div class="card-content">
                <div class="card-title">
                    <h3>
                        @if($isEdit) Edit @else Tambah @endif Supplier</h3>
                    </h3>
                </div>
   
                <form method="POST" @if(!$isEdit) action="/supplier/store" @else action="/supplier/update/{{$edit->id}}" @endif>
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <input  type="text" class="validate" name="supplier_number" @if($isEdit) value="{{$edit->supplier_number}}" disabled @else value="{{Helper::genCode('supplier')}}" @endif>
                            <label for="disabled">Nomor Supplier</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input  type="text" class="validate" name="supplier_name" @if($isEdit) value="{{$edit->supplier_name}}" @else value="" @endif>
                            <label for="disabled">Nama Supplier</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                           <textarea name="supplier_address" id="" cols="30" rows="10" class="materialize-textarea">{{$isEdit ? $edit->supplier_address : ''}}</textarea>
                           <label for="supplier_address">Alamat Supplier</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="number" class="validate" name="supplier_phone" value="{{$isEdit ? $edit->supplier_phone : ''}}">
                            <label for="supplier_phone">No. HP Supplier</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                           <input type="email" class="validate" name="supplier_email" value="{{$isEdit ? $edit->supplier_email : ''}}">
                           <label for="supplier_email">Email Supplier</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                           <textarea name="supplier_description" id="" cols="30" rows="10" class="materialize-textarea">{{$isEdit ? $edit->supplier_description : ''}}</textarea>
                           <label for="supplier_description">Deskripsi Supplier</label>
                        </div>
                    </div>

                    <button type="submit" class="waves-effect waves-light btn green">
                        <i class="material-icons left">save</i>
                        Simpan</button>
                    
                </form>
            </div>
        </div>
    </div>
</main>
@endsection