<?php

namespace App\Http\Controllers;

class AuthController extends Controller{

	function showLogin(){
		return view('login');
	}

	function processLogin(){

	}

	function logout(){

	}

	function showRegister(){
		return view('register');
	}

	function forgotPassword(){

	}
}