<?php

namespace App\Http\Controllers;
use App\Models\user;

class UserController extends Controller{
	function index(){
		$data['list_user'] = user::all();
		return view('user.index', $data);
	}

	function create(){
		return view('user.create');
	}

	function store(){
		$user = new user;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->save();

		return redirect('user')->with('success', 'Data Berhasil Ditambahkan');
	}

	function show(user $user){
		$data['user'] = $user;
		return view('user.show', $data);
	}

	function edit(user $user){
		$data['user'] = $user;
		return view('user.edit', $data);
	}

	function update(user $user){
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		if(request('password'))	$user->password = request('password');
		$user->save();

		return redirect('user')->with('warning', 'Data Berhasil Diedit');
	}

	function destroy(user $user){
		$user->delete();

		return redirect('user')->with('danger', 'Data Berhasil Dihapus');
	}
}
