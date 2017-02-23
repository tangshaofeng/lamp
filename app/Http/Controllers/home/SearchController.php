<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class SearchController extends Controller
{
    public function getIndex(Request $request){
        $data = DB::table('goods')->paginate(20);
        return view('home.search.index',['data'=>$data,'request'=>$request->all()]);
    }
}
