<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class HuishouController extends Controller
{
    // public function getAdd($id){
    //     $data = ['comment','gonggao'];
    //     // dd($data);
    //     foreach($data as $k=>$v){
    //         $arr[$v] = DB::table($v)->where('sign','0')->get();
            
    //     }
    //     dd($arr);
    // }

   public function getAdd($id = '',$name = ''){

        // dd($_GET['id']);
        //从表单接id值将其放进回收站（加一个标识码）
        $arr['sign'] = '0';
        $res = DB::table($_GET['name'])->where('id',$_GET['id'])->update($arr);
         //进行删除判断
        if($res){
            return redirect('admin/'.$_GET['name'].'/index')->with('success','添加回收站成功');
        }else{
            return back()->with('error','添加回收站失败');
        }
        return view('admin/'.$_GET['name'].'/index');
    }

    public function getIndex(){
        $arr = ['comment','gonggao'];
        //从数据库中取出被标记为回收站的数据
        // foreach($arr as $k=>$v){
        //     $data[$v] = DB::table($v)->join('goods',function($join){$join->on('goods.id',"'".$v.gid."'")->where($v.sign,'0');})->select("'".$v.id."'",'goods.goodsname')->get();
        // }
        $data['comment'] = DB::table('comment')->join('goods',function($join){$join->on('goods.id','=','comment.gid')->where('comment.sign','=','0');})->select('comment.*','goods.goodsname')->get();
        $data['gonggao'] = DB::table('gonggao')->join('goods',function($join){$join->on('goods.id','=','gonggao.gid')->where('gonggao.sign','=','0');})->select('gonggao.*','goods.goodsname')->get();
        
        // foreach($data as $k=>$v){
        //     var_dump($v);
        //     foreach($v as $kk=>$vv){
        //         var_dump($vv['id']);
        //         var_dump($vv['goodsname']);
        //         var_dump($vv['content']);
        //     }
        // }
        // dd();
        return view('admin/huishou/index',['data'=>$data]);
    }

    public function getDelete($id = '',$name = ''){
       //接受传值进行数据库操作
        // $arr['content'] = '此评论因包含违禁信息，已被删除。'; 
        // $arr['sign'] = '1';
        $res = DB::table($_GET['name'])->where('id',$_GET['id'])->delete();
        //进行删除判断
        if($res){
            return redirect('admin/'.$_GET['name'].'/index')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }

    public function getRecovery($id = '',$name = ''){
        $arr['sign'] = '1';
        $res = DB::table($_GET['name'])->where('id',$_GET['id'])->update($arr);
        //进行删除判断
        if($res){
            return redirect('admin/'.$_GET['name'].'/index')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
