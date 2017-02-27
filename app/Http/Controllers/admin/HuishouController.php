<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class HuishouController extends Controller
{
   public function getAdd($id){
        //从表单接id值将其放进回收站（加一个标识码）
        $arr['sign'] = '0';
        $res = DB::table('comment')->where('id',$id)->update($arr);
         //进行删除判断
        if($res){
            return redirect('admin/comment/index')->with('success','评论添加回收站成功');
        }else{
            return back()->with('error','评论添加回收站失败');
        }
        return view('admin/comment/index');
    }

    public function getIndex(){
        //从数据库中取出被标记为回收站的数据
        $data = DB::table('comment')->join('goods',function($join){$join->on('goods.id','=','comment.gid')->where('comment.sign','=','0');})->select('comment.*','goods.goodsname')->get();
        return view('admin/huishou/index',['data'=>$data]);
    }

    public function getDelete($id){
       //接受传值进行数据库操作
        $arr['content'] = '此评论因包含违禁信息，已被删除。'; 
        $arr['sign'] = '1';
        $res = DB::table('comment')->where('id',$id)->update($arr);
        //进行删除判断
        if($res){
            return redirect('admin/comment/index')->with('success','评论删除成功');
        }else{
            return back()->with('error','评论删除失败');
        }
    }

    public function getRecovery($id){
        $arr['sign'] = '1';
        $res = DB::table('comment')->where('id',$id)->update($arr);
        //进行删除判断
        if($res){
            return redirect('admin/comment/index')->with('success','评论删除成功');
        }else{
            return back()->with('error','评论删除失败');
        }
    }
}
