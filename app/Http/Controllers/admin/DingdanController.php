<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class DingdanController extends Controller
{
   
   public function getIndex(Request $request){
     $count = $request -> input('count',5);
        $search = $request -> input('search','');
        // 查询数据  并且分页
        $data = DB::table('porder')->where('ostatus','like','%'.$search.'%')->paginate($count);
        return view('admin.dingdan.index',['data'=>$data,'request'=>$request->all()]);
    }
    public function getDelete($id){
        $res = DB::table('porder')->where('id',$id)->delete();
        if($res){
            return redirect('/admin/dingdan/index')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
   
   

    public function getEdit($id){
        $data = DB::table('porder')->where('id',$id)->first();
        return view('/admin/dingdan/edit',['data'=>$data]);
    }

     public function postUpdate(Request $request){
        // 获取数据
        $arr = $request -> except('_token','id');
       // var_dump($arr);
        $res = DB::table('porder') -> where('id',$request -> input('id'))->update($arr);
        // dd($res);
        if($res){
            return redirect('/admin/dingdan/index')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }
}
