<?php

namespace App\Http\Controllers;
use App\Models\produk;

class ProdukController extends Controller{
	function index(){
		$data['list_produk'] = produk::all();
		return view('produk.index', $data);
	}

	function create(){
		return view('produk.create');
	}

	function store(){
		$produk = new produk;
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->stok = request('stok');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('produk');
	}

	function show($produk){
		$data['produk'] = produk::find($produk);
		return view('produk.show', $data);
	}

	function edit(){
		
	}

	function update(){
		
	}

	function destroy(){
		
	}
}