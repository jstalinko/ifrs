@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar">
    <div class="m-l-2">
        <div class="card">
         
            <div class="card-content">
                <div class="card-title">
                    <h3>
                        @if($isEdit) Edit @else Tambah @endif Produk</h3>
                </div>
                <form method="POST" @if($isEdit) action="/product/update/{{$edit->id}}" @else action="/product/store" @endif>
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <input  type="text" class="validate" name="code" @if($isEdit) value="{{$edit->code}}" disabled @else value="{{Helper::genCode('product')}}" @endif>
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
                           <label for="description">Deskripsi produk</label>
                        </div>
                    </div>

                 

                    <div class="row">
                        <div class="input-field col s12">
                            <input type="number" class="validate" name="price" value="{{$isEdit ? $edit->price : ''}}">
                            <label for="price">Harga</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input type="number" class="validate" name="price_modal"  value="{{$isEdit ? $edit->price_modal : ''}}">
                            <label for="price_modal">Harga Modal</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input type="number" class="validate" name="stock" value="{{$isEdit ? $edit->stock : ''}}">
                            <label for="stock">Stok produk</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <select name="category_id" id="category_id" class="validate">
                                <option value="" disabled >Pilih kategori</option>
                                @foreach (\App\Models\Category::all() as $cat)
                                <option value="{{$cat->id}}" @if($isEdit && $edit->category?->id == $cat->id) selected @endif>{{$cat->name}}</option>
                                @endforeach
                            </select>
                            <label for="category_id">Kategori</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="supplier_id[]" id="supplier" class="validate select2-multiple" multiple>
                                <option value="" disabled >Pilih supplier</option>
                                @foreach (\App\Models\Supplier::all() as $cat)
                                <option value="{{$cat->supplier_name}}" >{{$cat->supplier_name}}</option>
                                @endforeach
                            </select>
                            <label for="supplier">Daftar supplier</label>
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