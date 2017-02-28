<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class LunbotuController extends Controller
{
  
    public function getIndex(){
        //轮播图列表页数据
        $data = DB::table('lunbotu')->get();
        return view('admin.lunbotu.index',['data'=>$data]);
    }

    // public function getAdd(){
    //     $data = DB::table('goods')->get();

    //     return view('admin/lunbotu/add',['data'=>$data]);
    // }

    // public function postInsert(Request $request){

    //     $arr = $request -> only(['pic','gid']);
        
        //获取轮播图数据库中的id信息
        // $data = DB::table('lunbotu')->first();
        // $arr = array();
        //获取提交的轮播图信息，并上传，保存至数据库
        //判断数据库中轮播图的数量
    //     $num = DB::table('lunbotu')->count();
    //     if($num >= 4){
    //         return back()->with('error','轮播图只能添加四张，请删除几张再添加');
    //     }
    //     //判断是否有文件上传
    //     if($request -> hasFile('pic')){
    //         $temp_name = md5(time().rand(100000,99999));
    //         $hz = $request -> file('pic') -> getClientOriginalExtension();
    //         // echo $hz;
    //         $name = $temp_name.'.'.$hz;
    //         $request -> file('pic') -> move('./upload/image',$name);
    //         $arr['pic'] = $name;
    //     }
    //         // if($request -> hasFile('pictwo')){
    //         //     $temp_name = md5(time().rand(1000000,999999));
    //         //     $hz = $request -> file('pictwo') -> getClientOriginalExtension();
    //         //     // echo $hz;
    //         //     $name = $temp_name.'.'.$hz;
    //         //     $request -> file('pictwo') -> move('./upload/image',$name);
    //         //     $arr['pictwo'] = $name;
    //         // }else{
    //         //     $arr['pictwo'] = $data['pictwo'];
    //         // } 
    //         // if($request -> hasFile('picthree')){
    //         //     $temp_name = md5(time().rand(10000000,9999999));
    //         //     $hz = $request -> file('picthree') -> getClientOriginalExtension();
    //         //     // echo $hz;
    //         //     $name = $temp_name.'.'.$hz;
    //         //     $request -> file('picthree') -> move('./upload/image',$name);
    //         //     $arr['picthree'] = $name;
    //         // }else{
    //         //     $arr['picthree'] = $data['picthree'];
    //         // }
    //         // if($request -> hasFile('picfour')){
    //         //     $temp_name = md5(time().rand(100000000,99999999));
    //         //     $hz = $request -> file('picfour') -> getClientOriginalExtension();
    //         //     // echo $hz;
    //         //     $name = $temp_name.'.'.$hz;
    //         //     $request -> file('picfour') -> move('./upload/image',$name);
    //         //     $arr['picfour'] = $name;
    //         // }else{
    //         //     $arr['picfour'] = $data['picfour'];
    //         // }
    //     // var_dump();
    //     // $res = DB::table('lunbotu')->where('id',$data['id'])->update($arr);
    //     //进行插入判断
    //     if($res){
    //         return redirect('admin/lunbotu/index')->with('success','轮播图添加成功');
    //     }else{
    //         return back()->with('error','轮播图添加失败');
    //     }
    //     // $data = DB::table('lunbotu')->first();
    //     return view('admin/lunbotu/index');
    // }

    public function getDelete($pic = ''){
        $data = DB::table('lunbotu')->where('id',$pic)->first();
        $arr['pic'] = ' ';
        $arr['gid'] = $data['gid'];
        // $arr[$pic] = '';
        // dd($arr);
        $res = DB::table('lunbotu')->where('id',$pic)->update($arr);
        if($res){
            return redirect('admin/lunbotu/index')->with('success','轮播图删除成功');
        }else{
            return back()->with('error','轮播图删除失败');
        }
    }
    public function getReedit($gid){
        //传递轮播图中商品ID，同时获取商品表中其商品名称
        $gname = DB::table('goods')->where('id',$gid)->first();
        //获取轮播图表中与该gid相匹配的结果
        $ldata = DB::table('lunbotu')->where('gid',$gid)->first();
        //取出goods表中内容，在select中显示
        $data = DB::table('goods')->get();
        return view('admin.lunbotu.edit',['ldata'=>$ldata,'data'=>$data,'gname'=>$gname]);
    }
    public function postEdit(Request $request){
        //接受变单传过来的picname值
        $id = $_POST['id'];
        // $pic = $_POST['pic'];
        $arr['gid'] =$_POST['gid'];
        //取出数据库中轮播图的值
        $data = DB::table('lunbotu')->where('id',$id)->first();
        //文件上传判断
        if($request -> hasFile('pic')){
                $temp_name = md5(time().rand(100000,99999));
                $hz = $request -> file('pic') -> getClientOriginalExtension();
                $name = $temp_name.'.'.$hz;
                $request -> file('pic') -> move('./upload/image',$name);
                $arr['pic'] = $name;
            }else{
                $arr['pic'] = $data['pic'];
            }
            //数据库修改语句
            $res = DB::table('lunbotu')->where('id',$id)->update($arr);

             //进行插入判断
            if($res){
                return redirect('admin/lunbotu/index')->with('success','轮播图添加成功');
            }else{
                return back()->with('error','轮播图添加失败');
            }
            $data = DB::table('lunbotu')->first();
            return view('admin.lunbotu.edit');
    }

}
