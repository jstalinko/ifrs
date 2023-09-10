{{-- @dd($accounts) --}}
@extends('layouts.app')

@section('content')
<main class="mn-inner inner-active-sidebar" x-data="order">
    <div class="m-l-2" >
        <div class="card">
            <div class="card-content">
                <span class="card-title">
                    Penjualan baru
                </span>
                <a href="#addmodal" class="waves-effect waves-light btn modal-trigger"><i class="material-icons left">add</i> Tambah item</a>

                <form method="POST" action="/order/create" >
                    @csrf
                    <table class="table responsive-table striped hover">
                        <thead>
                            <th>Produk</th>
                            <th>Qty</th>
                            <th>@Harga</th>
                            <th>Total</th>
                            
                        </thead>
                        <tbody>
                            <template x-for="pro in products">
                                <tr>
                                    <td>
                                        <span x-text="pro.product_name"></span>
                                    </td>
                                    <td>
                                        <span x-text="pro.qty"></span>
                                    </td>
                                    <td>
                                        <span x-text="pro.price"></span>
                                    </td>
                                    <td>
                                        <span x-text="pro.total"></span>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                        <tfoot>
                            <tr style="background:#333;color:#eee">
                                <td colspan="3" style="text-align: right;><span class="right-align"> Grand Total</span></td>
                                <td>
                                    <span x-text="grandtotal()"></span>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                </form>
               
                
            </div>
        </div>
    </div>

     <!-- Modal Structure -->
 <div id="addmodal" class="modal">
    <div class="modal-content">
      <h4>Tambah item</h4>
      
      <form>
        <div class="row">
            <div class="input-field col s12">
                <select id="product_id" name="product_id"  class="js-states browser-default select2" tabindex="-1" style="width:100%">
                    <option value="" disabled>Pilih produk</option>
                    @foreach ($products as $pro)
                    <option value="{{$pro->id}}" data-productname="{{$pro->name}}" data-productprice="{{$pro->price}}">{{$pro->name}}</option>
                    @endforeach
                </select>
                
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="number" class="validate" name="qty" id="qty" value="1" >
                <label for="qty">Qty</label>
            </div>
        </div>
     
        <div class="row">
            <div class="input-field col s12">
                <button role="button" type="button"  @click="addProduct" class="waves-effect waves-light btn">Tambah</button>
            </div>
        </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-red btn-flat">Close</a>
    </div>
  </div>


</main>



@endsection

@section('js')



@include('layouts.alpine')
<script>
    document.addEventListener('alpine:init' ,function(){
        Alpine.data('order' , () => ({
            products: [],
            rupiah(amount)
            {
                return "Rp"+amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            },
            addProduct()
            {
                let productId = document.querySelector('#product_id').value;
                let productQty = document.querySelector('#qty').value;
                let productPrice = document.querySelector('#product_id').selectedOptions[0].dataset.productprice;
                let productName = document.querySelector('#product_id').selectedOptions[0].dataset.productname;

                this.products.push({
                    product_id: productId,
                    product_name: productName,
                    qty: productQty,
                    price: "@"+this.rupiah(productPrice),
                    total: productQty * productPrice,
                });

                
            },
            grandtotal()
            {
                let total = 0;
                this.products.forEach((pro) => {
                    total += pro.total;
                });
                return this.rupiah(total);
            }
        }));
    });
</script>

@endsection
