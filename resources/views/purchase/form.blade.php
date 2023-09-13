{{-- @dd($accounts) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar" x-data="order">
    <div class="m-l-2" >
        <div class="card">
            <div class="card-content">
                <div class="card-title">
                    <h3>
                        Pengeluaran baru
                    </h3>
                </div>
               
                <form method="POST" action="/purchase/store">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="supplier_id" id="supplier_id" class="validate">
                                <option value="" disabled >Pilih supplier</option>
                                @foreach (\App\Models\Supplier::all() as $cat)
                                <option value="{{$cat->id}}" @if($isEdit && $edit->supplier_id == $cat->id) selected @endif>{{$cat->supplier_name}}</option>
                                @endforeach
                            </select>
                            <label for="supplier_id">Supplier</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="category_id" id="category_id" class="validate">
                                <option value="" disabled >Pilih Kategori</option>
                                @foreach (\App\Models\Category::all() as $cat)
                                <option value="{{$cat->id}}" @if($isEdit && $edit->category_id == $cat->id) selected @endif>{{$cat->name}}</option>
                                @endforeach
                            </select>
                            <label for="category_id">Kategori</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="payment_status" id="payment_status" class="validate">
                                <option value="" disabled >Pilih Kategori</option>
                                <option value="paid" @if($isEdit && $edit->payment_status == 'paid') selected @endif>  LUNAS</option>
                                <option value="unpaid" @if($isEdit && $edit->payment_status == 'unpaid') selected @endif> BELUM LUNAS</option>
                            </select>
                            <label for="payment_status">Status Bayar</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea name="description" class="materialize-textarea" ></textarea> 
                            <label for="description">Deskripsi pembelian</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="number" class="validate" name="total" value="{{$isEdit ? $edit->total : ''}}">
                            <label for="total">Total</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input type="number" class="validate" name="grand_total" value="{{$isEdit ? $edit->grand_total : ''}}">
                            <label for="grand_total">Grand Total</label>
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