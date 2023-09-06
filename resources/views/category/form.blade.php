@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <div class="m-l-2">
        <div class="card">
         
            <div class="card-content">
                <div class="card-title">
                    <h3>
                        @if($isEdit) Edit @else Tambah @endif Kategori</h3>
                </div>
                <form method="POST" @if($isEdit) action="/category/update/{{$edit->id}}" @else action="/category/store" @endif>
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <input  type="text" class="validate" name="code" @if($isEdit) value="{{$edit->code}}" disabled @else value="{{Helper::genCode('category')}}" @endif>
                            <label for="disabled">Code</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="name" value="{{$isEdit ? $edit->name : ''}}">
                            <label for="name">Nama Produk</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                           <textarea name="description" id="" cols="30" rows="10" class="materialize-textarea">{{$isEdit ? $edit->description : ''}}</textarea>
                           <label for="description">Deskripsi </label>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</main>
@endsection

