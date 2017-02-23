<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class HoutaiController extends Controller
{
	public function getIndex(){
		return view('admin.houtai.index');
	}

	public function postDenglu(Request $request){
		echo 1;
		dd($request->all());
	}
}