<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class FlinkController extends Controller
{
    public function getAdd(){
        return view('admin.flink.add');
    }
    public function postInsert(Request $request){
        $this->validate($request, [
        'linkname' => 'required',
        'linkurl' => 'required',
        'description' => 'required',
        'linkpic' => 'required',
    ],[
        'linkname.required' => '链接名称不存在',
        'linkurl.required' => '链接地址未填写',
        'description.required' => '链接描述未填写',
        'linkpic.required' => '链接图片未添加',
    ]);
        //组装数据
        $arr = $request -> except('_token');
        $arr['linktime'] = date('Y-m-d H:i:s',time());
        //图片上传   检测是否有文件上传并储存至文件夹
        if($request->hasFile('linkpic')){
        // 随机文件名
        $picname = md5(time().rand(100000,999999));
        // 获取文件后缀
        $hz = $request -> file('linkpic') ->getClientOriginalExtension();
        // 拼接文件名
        $name = $picname.'.'.$hz;
        // 储存文件
        $request->file('linkpic')->move('./upload/linkpic', $name);
        $arr['linkpic'] = $name;
        }
        // 插入数据库
        $res = DB::table('flink') -> insert($arr);
        if($res){
        return redirect('/admin/flink/index') -> with('success','添加成功');
        }else{
        return back() -> with('error','添加失败');
        }
    }
    public function getIndex(Request $request){
        $count = $request -> input('count',5);
        $search = $request -> input('search','');
        // 查询数据  并且分页
        $data = DB::table('flink')->where('linkname','like','%'.$search.'%')->paginate($count);
        return view('admin.flink.index',['data'=>$data,'request'=>$request->all()]);
    }
    public function getDelete($id){
        $res = DB::table('flink')->where('id',$id)->delete();
        if($res){
            return redirect('/admin/flink/index')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
    public function getEdit($id){
        $data = DB::table('flink')->where('id',$id)->first();
        return view('admin.flink.edit',['data'=>$data]);
    }
    public function postUpdate(Request $request){
        // 获取数据
        $arr = $request -> except('_token','id');
        //图片上传   检测是否有文件上传并储存至文件夹
        if($request->hasFile('linkpic')){
        // 随机文件名
        $picname = md5(time().rand(100000,999999));
        // 获取文件后缀
        $hz = $request -> file('linkpic') ->getClientOriginalExtension();
        // 拼接文件名
        $name = $picname.'.'.$hz;
        // 储存文件
        $request->file('linkpic')->move('./upload/linkpic', $name);
        $arr['linkpic'] = $name;
        }
        $res = DB::table('flink') -> where('id',$request -> input('id'))->update($arr);
        if($res){
            return redirect('/admin/flink/index')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }
}
