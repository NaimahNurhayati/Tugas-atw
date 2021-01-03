Harga : {{$produk->harga}} |
			<br>
			stok : {{$produk->stok}} |
			<br>
			berat : {{$produk->berat}} kg |
			<br>
			size : {{$produk->size}} |
			<br>
			color : {{$produk->color}} |
			<br>
			Seller : {{$produk->seller->nama}}
			<br>
			Tanggal produksi : {{$produk->created_at->diffforHumans()}}
			<img src="{{url("public",$produk->foto)}}" alt="">