@extends('templateadmin.admin')

@section('content')

	<div class="product-status mg-tb-15" style="height: 450px">
  		<div class="container-fluid">
  			<h3 style="text-align: center;">Daftar Produk</h3>
		    <div class="card-header">
		      <a href="{{url('produk/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a>
		    </div>
			<div class="card-body">
				<table class="table">
					<thead>
						<th>No</th>
						<th>Aksi</th>
						<th>Nama</th>
						<th>Harga</th>
						<th>Stok</th>
					</thead>
					<tbody>
						@foreach($list_produk as $produk)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>
								<a href="{{url('produk', $produk->id)}}" class="btn btn-success"> <i class="fa fa-info"></i></a>
								<a href="{{url('produk', $produk->id)}}/edit" class="btn btn-warning"> <i class="fa fa-edit"></i></a>
							</td>
							<td>{{$produk->nama}}</td>
							<td>{{$produk->harga}}</td>
							<td>{{$produk->stok}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>

		    
	 	</div>
	</div>

@endsection