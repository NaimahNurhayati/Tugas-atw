@extends('templateadmin.admin')

@section('content')

	<div class="product-status mg-tb-15">
  		<div class="container-fluid">
  			<h3 style="text-align: center;">Daftar Produk</h3>
		    <div class="card-header">
		      <a href="{{url('produk/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a>
		    </div><br>
		    <table class="table table-hover">
		      <thead>
		        <tr>
		          <th scope="col">Image</th>
		          <th scope="col">Product Title</th>
		          <th scope="col">Status</th>
		          <th scope="col">Purchases</th>
		          <th scope="col">Product sales</th>
		          <th scope="col">Stock</th>
		          <th scope="col">Price</th>
		          <th scope="col">Setting</th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td><img src="{{url('public')}}/assets/images/products/p6_hover.jpg" style="width: 100px;"></td>
		          <td>Jewelery Title 1</td>
		          <td>
		            <button class="pd-setting">Active</button>
		          </td>
		          <td>50</td>
		          <td>$750</td>
		          <td>Out Of Stock</td>
		          <td>$15</td>
		          <td>
		            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
		            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed bg-danger"><i class="fa fa-trash-o text-danger bg-danger" aria-hidden="true"></i></button>
		          </td>
		        </tr>
		        <tr>
		          <td><img src="{{url('public')}}/assets/images/products/p5.jpg" style="width: 100px;"></td>
		          <td>Jewelery Title 2</td>
		          <td>
		            <button class=" ps-setting">Paused</button>
		          </td>
		          <td>60</td>
		          <td>$1020</td>
		          <td>In Stock</td>
		          <td>$17</td>
		          <td>
		            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
		            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
		          </td>
		        </tr>
		        <tr>
		          <td><img src="{{url('public')}}/assets/images/products/p1.jpg" style="width: 100px;"></td>
		          <td>Jewelery Title 5</td>
		          <td>
		            <button class=" pd-setting">Active</button>
		          </td>
		          <td>30</td>
		          <td>$540</td>
		          <td>Out Of Stock</td>
		          <td>$18</td>
		          <td>
		            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
		            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
		          </td>
		        </tr>
		        <tr>
		          <td><img src="{{url('public')}}/assets/images/products/p2.jpg" style="width: 100px;"></td>
		          <td>Jewelery Title 6</td>
		          <td>
		            <button class=" ps-setting">Paused</button>
		          </td>
		          <td>400</td>
		          <td>$4000</td>
		          <td>In Stock</td>
		          <td>$10</td>
		          <td>
		            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
		            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
		          </td>
		        </tr>
		      </tbody>
		    </table>
	  </div>
</div>

@endsection