<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\kategori;

class ClientProdukController extends Controller
{
	function showTemplateproduk()
	{
		$data['list_kategori'] = kategori::all();
		$dataa['list_produk'] = produk::all();
		return view('template.produk', $data, $dataa);
	}

	function show(produk $produk)
	{
		$dataa['list_kategori'] = kategori::all();
		$data['produk'] = $produk;

		return view('template.show', $data, $dataa);
	}
}
