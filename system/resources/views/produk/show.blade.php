@extends('templateadmin.admin')

@section('content')

<div class="product-status mg-tb-15" style="height: 430px">
  	<div class="container-fluid">
  		<h3 style="text-align: center;">Detail Data Produk</h3>
	</div>
	<div class="card-body">
		<h3>{{$produk->nama}}</h3>
		<hr>
		<p>
			Rp. {{number_format($produk->harga)}}
			stok : {{$produk->stok}}
			berat : {{$produk->berat}} gr
		</p>
		<p>
			{!! nl2br($produk->deskripsi)!!}
		</p>
	</div>

	</form>
	</div>
</div>

@endsection