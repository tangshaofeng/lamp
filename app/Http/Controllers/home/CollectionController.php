<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class CollectionController extends Controller
{
   public function getAdd($gid){
        //接受传过来的商品id值
        //判断用户是否收藏过此商品，
        $data = DB::table('collection')->where('gid',$gid)->where('uid',16)->count();
        if($data){
            return '此商品您已收藏';
        }
        //执行商品收藏操作
        $res = DB::insert('insert into collection (uid, gid) values (?, ?)', [16, $gid]);
        if($res){
            return '商品收藏成功';
        }else{
            return '商品收藏失败';
        }
        
        return view('home.introduction.index',['id'=>$gid]);
    }

    public function getRemove($id){
       //接受传过来的商品id值,执行商品取消收藏操作
    //    dd($id);
       $res = DB::table('collection')->where('gid',$id)->where('uid','16')->delete();
        //     //判断取消收藏结果
        //    if($res){
        //         alert('商品收藏成功');
        //     }else{
        //         alert('商品收藏失败');
        //     }
        //获取收藏现有的商品
        // $data = DB::table('collection')->join('goods',function($join){$join->on('goods.id','=','collection.gid');})->select('collection.*','goods.*')->get();;
            
        // return redirect('/home/infomation/collection',['data'=>$data]);
        return back();
    }
}
