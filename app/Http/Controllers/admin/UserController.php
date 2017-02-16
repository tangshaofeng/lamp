<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;
use DB;
class UserController extends Controller
{
    public function getAdd(){
        return view('admin.user.add');
    }
    public function postInsert(Request $request){
        // 表单自动验证
        $this->validate($request, [
        'username' => 'required',
        'userpwd' => 'required',
        'userpwds' => 'required | same:userpwd',
        'phonenum' => 'required',
        'sex' => 'required'
    ],[
        'username.required' => '用户名不存在',
        'userpwd.required' => '密码未填写',
        'userpwds.required' => '确认密码未填写',
        'userpwds.same' => '确认密码与密码不一致',
        'phonenum.required' => '手机号未填写',
        'sex.required' => '性别未选择'
    ]);
         //数据组装
         $arr = $request -> only(['username','phonenum','sex','userqx']);

         $arr['userpwd'] = Hash::make($request -> input('userpwd'));
         $arr['usertoken'] = str_random(50);
         $arr['usertime'] = date('Y-m-d H:i:s',time());
        //头像上传   检测是否有文件上传并储存至文件夹
         if($request->hasFile('userpic')){
            // 随机文件名
            $picname = md5(time().rand(100000,999999));
            // 获取文件后缀
            $hz = $request -> file('userpic') ->getClientOriginalExtension();
            // 拼接文件名
            $name = $picname.'.'.$hz;
            // 储存文件
            $request->file('userpic')->move('./upload/pic', $name);
            $arr['userpic'] = $name;
         }
         // 插入数据库
         $res = DB::table('user') -> insert($arr);
         if($res){
            return redirect('/admin/user/index') -> with('success','添加成功');
         }else{
            return back() -> with('error','添加失败');
         }
    }
    public function getIndex(Request $request){
        $count = $request -> input('count',5);
        $search = $request -> input('search','');
        // 查询数据  并且分页
        $data = DB::table('user')->where('username','like','%'.$search.'%')->paginate($count);
        return view('admin.user.index',['data'=>$data,'request'=>$request->all()]);
    }
    public function getDelete($id){
        $res = DB::table('user')->where('id',$id)->delete();
        if($res){
            return redirect('/admin/user/index')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
    public function getEdit($id){
        $data = DB::table('user')->where('id',$id)->first();
        return view('/admin/user/edit',['data'=>$data]);
    }
    public function postUpdate(Request $request){
        // 获取数据
        $arr = $request -> except('_token','id');
        //头像上传   检测是否有文件上传并储存至文件夹
        if($request->hasFile('userpic')){
            // 随机文件名
            $picname = md5(time().rand(100000,999999));
            // 获取文件后缀
            $hz = $request -> file('userpic') ->getClientOriginalExtension();
            // 拼接文件名
            $name = $picname.'.'.$hz;
            // 储存文件
            $request->file('userpic')->move('./upload/pic', $name);
            $arr['userpic'] = $name;
        }
        $res = DB::table('user') -> where('id',$request -> input('id'))->update($arr);
        if($res){
            return redirect('/admin/user/index')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }
}
