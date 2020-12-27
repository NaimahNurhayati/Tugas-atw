@extends('templateadmin.admin')

@section('content')

<div class="product-status mg-tb-15" style="height: 430px">
	<div class="container-fluid">
		<h3 style="text-align: center;">Detail Data Produk</h3>
	</div>
	<div class="card-body">
		<h3>{{$produk->nama}}</h3>
		<hr size="10">
		<p>
			{{$produk->harga}} |
			<br>
			stok : {{$produk->stok}} |
			<br>
			berat : {{$produk->berat}} gr |
			<br>
			size : {{$produk->size}} |
			<br>
			color : {{$produk->color}} |
			<br>
			Seller : {{$produk->seller->nama}}
			<br>
			Tanggal produksi : {{$produk->created_at->diffforHumans()}}
		</p>
		<hr>
		<p>
			{!! nl2br($produk->deskripsi)!!}
		</p>
	</div>

	</form>
</div>
</div>

@endsection