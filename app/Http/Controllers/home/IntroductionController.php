<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class IntroductionController extends Controller
{
	 static public function getComment($pid,$gid){
        //遍历出所有分类及等级
        $data = DB::table('comment')->where('pid',$pid)->where('gid',$gid)->orderBy('ctime','asc')->get();
        $arr = array();

        foreach($data as $k=>$v){
            $v['sub'] = self::getComment($v['id'],$gid);
            $arr[] = $v;
        }
        return $arr;
    }

   public function getIndex($id){
   		//接受传的商品id
        $data = DB::table('goods')->where('id',$id)->first();
        // //从数据库中查询并排序数据
        // // $comment = DB::table('comment')->select(DB::raw("*,concat(path,',',id) as paths"))->where('gid',4)->orderBy('paths')->get();
        // // $comment = DB::table('comment')->join('goods',function($join){$join->on('comment.gid','=','goods.id')});
        //  // dd($comment);
        

        // // $comment = DB::table('comment')->where('id',5)->get();
        // dd($comment);
        // $user = DB::table('user')->get();
   		// $comment = DB::table('comment')->where('pid',0)->where('gid',$id)->get();
   		// foreach($comment as $k=>$v){
   		// 	// $arr[] = $v['id'];
   		// 	// $arr[] = self::getComment($v['id']);
   		// 	$comment[] = self::getComment($v['id']);
   		// 	// var_dump($v['id']);
   		// }
   		$comment = self::getComment(0,$id);
   		// foreach($replay as $k=>$v){
   		// 		foreach($v as $kk=>$vv){
   		// 		var_dump($vv['id']);
   		// 	}
   		// }
   		// dd($comment);
   		// $comment = DB::table('comment')->get();
   		$user = DB::table('comment')->join('user',function($join){$join->on('comment.uid','=','user.id');})->select('comment.*','user.*')->get();
        
        return view('home.introduction.index',['gid'=>$id,'data'=>$data,'comment'=>$comment,'user'=>$user]);
   }

   public function postReplay(Request $request){
   		//接受回复表单传的数据
   		$arr = $request->only(['pid','content','gid']);
   		$arr['ctime'] = time();
   		$arr['uid'] = '16';
   		//把数据插入数据库
   		$res = DB::table('comment')->insert($arr);
   		//判断并处理
   		if($res){
   			$data = DB::table('goods')->where('id',$arr['gid'])->first();
   			$comment = self::getComment(0,$arr['gid']);
   			$user = DB::table('comment')->join('user',function($join){$join->on('comment.uid','=','user.id');})->select('comment.*','user.*')->get();
   			return view('home.introduction.index',['gid'=>$arr['gid'],'data'=>$data,'comment'=>$comment,'user'=>$user]);
   		}else{
   			return back();
   		}
   }
}
