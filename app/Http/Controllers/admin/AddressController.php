<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class AddressController extends Controller
{
    public function getIndex(Request $request){
         $count = $request -> input('count',5);
        $search = $request -> input('search','');
        // 查询数据  并且分页
        $data = DB::table('add')->where('oname','like','%'.$search.'%')->orWhere('ophone','like','%'.$search.'%')->paginate($count);
        return view('admin.address.index',['data'=>$data,'request'=>$request->all()]);

        // $data = DB::table('add')->get();
        // return view('admin.address.index',['data'=>$data]);
    }


     public function getEdit($id){
        //      $data = DB::table('add')->get();
        // return view('admin.address.edit',['data'=>$data]);
         $data = DB::table('add')->where('id',$id)->first();
        return view('/admin/address/edit',['data'=>$data]);
     } 

     public function postUpdate(Request $request){
        // 获取数据 
        $arr = $request -> except('_token','id');
       
        $res = DB::table('add') -> where('id',$request -> input('id'))->update($arr);
        if($res){
            return redirect('/admin/address/index')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
     }

     public function getDelete($id){
         $res= DB::table('add')->where('id',$id)->delete();
          if($res){
            return redirect('/admin/address/index')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
     }
}
