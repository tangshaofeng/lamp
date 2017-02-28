<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class SearchController extends Controller
{
    public function getIndex(Request $request){
        $search = $request -> input('search','');
        $data = DB::table('goods')->where('goodsname','like','%'.$search.'%')->paginate(20);
        return view('home.search.index',['data'=>$data,'request'=>$request->all()]);
    }
}
