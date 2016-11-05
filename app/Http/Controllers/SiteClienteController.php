<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Request;

class SiteClienteController extends Controller
{
	public function create(){
		return view('site.client');
	}

	public function store(Request $request){
		return $request->get('value');
	}
}
