<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class GonggaoController extends Controller
{
    public function getIndex(){
        //从数据库中取出特惠信息和商品名称
        $data = DB::table('gonggao')->join('goods',function($join){$join->on('gonggao.gid','=','goods.id');})->select('gonggao.*','goods.goodsname')->get();
        return view('admin.gonggao.index',['data'=>$data]);
    }

    public function getDelete($id){
        //接受id值并执行删除操作
        $res = DB::table('gonggao')->where('id',$id)->delete();
        //进行删除判断
        if($res){
            return redirect('admin/gonggao/index')->with('success','公告删除成功');
        }else{
            return back()->with('error','公告删除失败');
        }
        return view('admin/gonggao/add');
    }

    public function getEdit($id){
        $data = DB::table('gonggao')->where('id',$id)->first();
        $datasecond = DB::table('goods')->get();
       
        return view('admin.gonggao.edit',['data'=>$data,'datasecond'=>$datasecond]);
    }

    public function postUpdate(Request $request){
        //获取表单值进行数据库操作
        $arr = $request->only(['gid','content']);
        $res = DB::table('gonggao')->where('id',$request['id'])->update($arr);
        //进行修改判断
        if($res){
            return redirect('admin/gonggao/index')->with('success','公告修改成功');
        }else{
            return back()->with('error','公告修改失败');
        }
    }

    public function getAdd(){
        //从数据库中取出数据并返回模板
        $data = DB::table('goods')->get();
        return view('admin.gonggao.add',['data'=>$data]);
    }

    public function postReadd(Request $request){
        //选择接受表单传的值
        $arr = $request->only(['gid','content']);
        $res = DB::insert('insert into gonggao(gid,content) value(?,?)',[$arr['gid'],$arr['content']]);
         //进行修改判断
        if($res){
            return redirect('admin/gonggao/index')->with('success','公告添加成功');
        }else{
            return back()->with('error','公告添加失败');
        }
    }
}
