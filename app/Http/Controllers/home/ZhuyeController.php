<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ZhuyeController extends Controller
{

	static public function getCatePid($pid){
        //遍历出所有分类及等级
        $data = DB::table('cate')->where('pid',$pid)->get();
        // $data = DB::table('goods')->join('cate',function($join){$join->on('goods.cid','=','cate.id');})->select('goods.*','cate.*')->get();
        // $data = DB::table('cate')->where('pid',$pid)->get();
        $arr = array();

        foreach($data as $k=>$v){
            $v['sub'] = self::getCatePid($v['id']);
            $arr[] = $v;
        }
        return $arr;
    }

   public function getIndex(){
   	$lunbotu = DB::table('lunbotu')->first();
   	// $data = DB::table('goods')->join('cate',function($join){$join->on('goods.cid','=','cate.id');})->select('goods.*','cate.*')->get();
    //遍历出所有分类及等级
    // $data = DB::table('goods')->join('cate',function($join){$join->on('goods.cid','=','cate.id');})->select('goods.*','cate.*')->get();
     // dd($data);
     $data= self::getCatePid(0);
     $gonggao = DB::table('gonggao')->get();
    $goods = DB::table('goods')->get();
    return view('home/home/index',['lunbotu'=>$lunbotu,'data'=>$data,'gonggao'=>$gonggao,'goods'=>$goods]);
   }
}

