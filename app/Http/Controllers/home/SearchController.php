<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class SearchController extends Controller
{
<<<<<<< HEAD
   public function getIndex(Request $request,$id,$d=''){
    	 
        $search = $request -> input('search','');
        if(!empty($d)){
        	$data = DB::table('goods')->where('cid',$id)->where('goodsname','like','%'.$search.'%')->orderBy($d,'desc')->paginate(20);
        }else{
        	$data = DB::table('goods')->where('cid',$id)->where('goodsname','like','%'.$search.'%')->paginate(20);
        }
        
        return view('home.search.index',['data'=>$data,'request'=>$request->all(),'id'=>$id]);
=======
    public function getIndex(Request $request){
        $search = $request -> input('search','');
        $data = DB::table('goods')->where('goodsname','like','%'.$search.'%')->paginate(20);
        return view('home.search.index',['data'=>$data,'request'=>$request->all()]);
>>>>>>> 1dbadd43b516494b2038fe61e11955d6fe41508a
    }
}
