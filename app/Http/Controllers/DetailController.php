<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;

class DetailController extends Controller{
	public function index(){
		$data = Detail::all();
		return view('data',['data'=>$data]);
	}
}
