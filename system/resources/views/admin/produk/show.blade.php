@extends("admin.template")
@section('content')
<!-- start coding -->

   
   <div class="container">
   	<div class="card mt-3 pt-3">
   	<div class="row ml-1 mr-2 mb-3">
   		<h4>Detail Data Produk</h4>
   	</div>

   	<div class="container">
   		<div class="card-body">
   			<h3>{{$produk->nama}}</h3>
            <hr>
            <p>Rp. {{number_format($produk->harga)}} |
               Brand : {{$produk->brand}} |
               Stok : {{$produk->stok}} |
               Seller : {{$produk->seller->nama}}
            </p>
            {!! nl2br ($produk->deskripsi) !!}
   			</div>	
   		</div>
   		
   	</div>

   	</div>
   </div>

<!-- end coding -->
@endsection

