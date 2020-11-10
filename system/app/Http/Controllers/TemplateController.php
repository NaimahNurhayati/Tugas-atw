<?php
namespace App\Http\Controllers;

class TemplateController extends Controller{
	
	function showTemplate()
	{
		return view('template.base');
	}

	function showTemplatedetail()
	{
		return view('template.detail');
	}

	function showTemplatelogin()
	{
		return view('template.login');
	}

	function showTemplateproduk()
	{
		return view('template.produk');
	}
}