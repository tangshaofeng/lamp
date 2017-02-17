<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class WebController extends Controller
{
    public function getIndex(){
         $dat = DB::table('web')->get();
         
         $data = $dat['0'];
         // dd($data);
        return view('admin.web.index',['data'=>$data]);
        
    }

    // public function getAdd(){
    //     return view('admin.web.add');
    // }

    // public function postInsert(Request $request){
    //        // 表单自动验证
    //     $this->validate($request, [
    //     'webname' => 'required',
    //     'keyword' => 'required',
    //     'logo' => 'required',
    //     'webstatus' => 'required'
    // ],[
    //     'webname.required' => '网站名称未填写',
    //     'logo.required' => '网站logo不能为空',
    //     'keyword.required' => '网站关键字未填写',
    //     'webstatus.required' => '网站描述未填写'
    // ]);
    //      //数据组装
    //      $arr = $request -> only(['webname','keyword','webstatus']);

         
    //      // $arr['usertime'] = date('Y-m-d H:i:s',time());
    //     //头像上传   检测是否有文件上传并储存至文件夹
    //      if($request->hasFile('logo')){
    //         // 随机文件名
    //         $picname = rand(100,999);
    //         // 获取文件后缀
    //         $hz = $request -> file('logo') ->getClientOriginalExtension();
    //         // 拼接文件名
    //         $name = $picname.'.'.$hz;
    //         // 储存文件
    //         $request->file('logo')->move('./upload/pic', $name);
    //         $arr['logo'] = $name;
    //      }
    //      // 插入数据库
    //      $res = DB::table('web') -> insert($arr);
    //      if($res){
    //         return redirect('/admin/web/index') -> with('success','添加成功');
    //      }else{
    //         return back() -> with('error','添加失败');
    //      }
    // }
    public function getEdit(){
        // if(session('userqx')== '超级管理员'){
              $dat = DB::table('web')->get();
         
             $data = $dat['0'];
            return view('admin.web.edit',['data'=>$data]);
        // }else{
        //     return back()->with('error','对不起您的权限不够');
        // }
        
    }
    public function postUpdate(Request $request){
               // 表单自动验证
        $this->validate($request, [
        'webname' => 'required',
        'keyword' => 'required',
        'logo' => 'required',
        'webstatus' => 'required'
    ],[
        'webname.required' => '网站名称未填写',
        'logo.required' => '网站logo不能为空',
        'keyword.required' => '网站关键字未填写',
        'webstatus.required' => '网站描述未填写'
    ]);
       $arr = $request -> only(['webname','keyword','webstatus','webcontent']);
        // dd($request->all());
        if($request->hasFile('logo')){
           
            // 获取文件后缀
            $hz = $request -> file('logo') ->getClientOriginalExtension();
            // 拼接文件名
            $name = 'logo'.'.'.$hz;
            // 储存文件
            $request->file('logo')->move('/d/images', $name);
            $arr['logo'] = $name;
         }else{
            $arr['logo']='logo.png';
         }
         // var_dump($arr);
        $res = DB::table('web')->where('id','=','1')->update($arr);
        // dd($res);
        if($res){
             $dat = DB::table('web')->get();
         
             $data = $dat['0'];
            return view('admin.web.index',['data'=>$data])->with('success','配置修改成功');
        }else{
            return back()->with('error','配置修改失败,一旦点击修改就必须修改文字部分，否则会一直报错修改失败');
        }
    }
    
}
