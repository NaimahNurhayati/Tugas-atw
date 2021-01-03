@extends('templateadmin.admin')

@section('content')

	<div class="container-fluid">
		<h3 style="text-align: center;">Detail Data Produk</h3>
	</div>
	<div class="card-body">
		<h3>{{$produk->nama}}</h3>
		<hr size="10">
		<p>
			@include('produk.show.detail')
		</p>
		<hr>
		<p>
			Deskripsi Produk: {!! nl2br($produk->deskripsi)!!}
		</p>
	</div>

	</form>
</div>

@endsection