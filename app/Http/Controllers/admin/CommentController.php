<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class CommentController extends Controller
{
    public function getIndex(){
        // $data = DB::table('comment')->get();
        //从数据库中联合查询取出数据
        // $first = DB::table('comment')->join('goods','goods.id','=','comment.gid')->select('comment.*','goods.goodsname')->get();
        $data = DB::table('comment')->join('goods',function($join){$join->on('goods.id','=','comment.gid')->where('comment.sign','=','1');})->select('comment.*','goods.goodsname')->get();
        // $data = DB::table('comment')->where('sign','1')->union($first)->get();
        //高级join查询
        // DB::table('users')
        // ->join('contacts', function ($join) {
        //     $join->on('users.id', '=', 'contacts.user_id')
        //          ->where('contacts.user_id', '>', 5);
        // })
        // ->get();
        return view('admin/comment/index',['data'=>$data]);
    }

    public function getEdit($id){
        //接受id值从数据库取出数据
        $data = DB::table('comment')->where('id',$id)->first();
        return view('admin/comment/edit',['data'=>$data]);
    }

    public function postAdd(Request $request){
        // dd($request->all());
        //获取表单传来的id和content
        $arr = $request->only(['id','content']);
        $data = DB::table('comment')->where('id',$arr['id'])->first();
        $arr['ctime'] = time();
        // dd($data);
        //判断pid(父分类id)的值，进行操作
    
            $arr['path'] = $data['path'].','.$arr['id'];
            var_dump($arr);
        
        $res = DB::insert('insert into comment(uid,gid,ctime,pid,path,content) value(?,?,?,?,?,?)',['admin',$data['gid'],$arr['ctime'],$arr['id'],$arr['path'],$arr['content']]);
        //进行添加判断
        if($res){
            return redirect('admin/comment/index')->with('success','评论添加成功');
        }else{
            return back()->with('error','评论添加失败');
        }
        return view('admin/comment/add');
    }

    public function getDelete($id){
        //接受传值进行数据库操作
        $arr['content'] = '此评论因包含违禁信息，已被删除。'; 
        $res = DB::table('comment')->where('id',$id)->update($arr);
        //进行删除判断
        if($res){
            return redirect('admin/comment/index')->with('success','评论删除成功');
        }else{
            return back()->with('error','评论删除失败');
        }
    }

    
}
