<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    static public function getCatePid($pid){
        //遍历出所有分类及等级
        $data = DB::table('cate')->where('pid',$pid)->get();
        $arr = array();

        foreach($data as $k=>$v){
            $v['sub'] = self::getCatePid($v['id']);
            $arr[] = $v;
        }
        return $arr;
    }

    static public function getCate(){
        //从数据库中查询并排序数据
        $data = DB::table('cate')->select(DB::raw("*,concat(path,',',id) as paths"))->orderBy('paths')->get();
        //遍历并切改变分类级别的显示方式
        foreach($data as $k=>$v){
            $l = substr_count($v['path'],',');
            $data[$k]['name'] = str_repeat('|----',$l).$v['name'];
        }
        return $data;
    }

    public function getAdd($id = '')
    {
        
        return view('admin.cate.add',['data'=>self::getCate(),'id'=>$id]);
    }

    public function postInsert(Request $request){
        //从模板中取出数据
        $arr = $request -> only(['name','pid']);
        $pid = $request -> input('pid');
        //判断pid(父分类id)的值，进行操作
        if($pid == 0){
            $arr['path'] = 0;
        }else{
            $res = DB::table('cate')->where('id',$pid)->first();
            $arr['path'] = $res['path'].','.$pid;
        }
        //插入数据
        $res = DB::table('cate')->insert($arr);
        //进行插入判断
        if($res){
            return redirect('admin/cate/index')->with('success','分类添加成功');
        }else{
            return back()->with('error','分类添加失败');
        }
        dd($arr);
    }

    public function getIndex(Request $request){
        //接受列表页传的页面显示数和搜索值
        // $count = $request -> input('count',10);
        // $search = $request -> input('search','');
        // $data = DB::table('cate')->where('name','like','%'.$search.'%')->paginate($count);
        // $data = DB::table('cate')->get();

        // $data = self::getCatePid(0);
        // dd($data);
        return view('admin.cate.index',['data'=>self::getCate()]);
    }

    public function getDelete($id){
        //判断分类下有没有子类
        $data = DB::table('cate')->where('pid',$id)->first();
        if($data){
            return back()->with('error','当前类别下有子类不能删除');
        }
        //数据库操作删除数据并判断
        $res = DB::table('cate')->where('id',$id)->delete();
        if($res){
            return redirect('/admin/cate/index')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }

    public function getEdit($id){
        $res = DB::table('cate')->where('id',$id)->first();
        return view('admin.cate.edit',['data'=>self::getCate(),'res'=>$res]);
    }

    public function postUpdate(Request $request){
        //接受数据
        $arr = $request -> only(['name','pid']);
        $pid = $request -> input('pid');
        $id = $request->input('id');
        //判断分类下有没有子类
        $data = DB::table('cate')->where('pid',$id)->first();
        if($data){
            return back()->with('error','当前类别下有子类不能修改');
        }
        //判断pid(父分类id)的值，进行操作
        if($pid == 0){
            $arr['path'] = 0;
        }else{
            $res = DB::table('cate')->where('id',$pid)->first();
            $arr['path'] = $res['path'].','.$pid;
        }
        //插入数据并判断
        $res = DB::table('cate')->where('id',$id)->update($arr);
        if($res){
            return redirect('/admin/cate/index')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }

    // public function getReadd($id)
    // {
        
    //     return view('admin.cate.readd',['data'=>self::getCate(),'id'=>$id]);
    // }
}
