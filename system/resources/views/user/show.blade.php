@extends('templateadmin.admin')

@section('content')

<div class="product-status mg-tb-15" style="height: 430px">
  	<div class="container-fluid">
  		<p>Detail Data User</p>
	
	<hr>
	<div class="card-body">
		<p>{{$user->nama}}</p>
		<p>
			{{"@".$user->username}} |
			Email : {{$user->email}}
		</p>
		<br>
	</div>
</div>
	</div>

@endsection