<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\CateController;
use DB;
class GoodsController extends Controller
{
    public function getAdd(){
    	//获取分类数据
    	$data = CateController::getCatePid(0);
        return view('admin.goods.add',['data'=>$data]);
    }
    public function postInsert(Request $request){
    	 // 表单自动验证
        $this->validate($request, [
        'goodsname' => 'required',
        'gphoto' => 'required',
        'ginfo' => 'required',
        'gmoney' => 'required',
        'kucun' => 'required',
        'grecom' => 'required',
        'cid' => 'required'
    ],[
        'goodsname.required' => '商品名未填写',
        'gphoto.required' => '商品图片未添加',
        'ginfo.required' => '商品介绍未填写',
        'gmoney.required' => '商品价格未填写',
        'kucun.required' => '商品库存未填写',
        'grecom.required' => '商品是否首页推荐未选择',
        'cid.required' => '请选择商品分类'
    ]);
       //数据组装
       $arr = $request -> except('_token');
       $arr['gtime-up'] = date('Y-m-d H:i:s',time());
       //图片上传   检测是否有文件上传并储存至文件夹
    	if($request->hasFile('gphoto')){
	        // 随机文件名
	        $picname = md5(time().rand(100000,999999));
	        // 获取文件后缀
	        $hz = $request -> file('gphoto') ->getClientOriginalExtension();
	        // 拼接文件名
	        $name = $picname.'.'.$hz;
	        // 储存文件
	        $request->file('gphoto')->move('./upload/image', $name);
	        $arr['gphoto'] = $name;
    	}
    	if($request->hasFile('gphoto2')){
	        // 随机文件名
	        $picname2 = md5(time().rand(100000,999999));
	        // 获取文件后缀
	        $hz2 = $request -> file('gphoto2') ->getClientOriginalExtension();
	        // 拼接文件名
	        $name2 = $picname2.'.'.$hz2;
	        // 储存文件
	        $request->file('gphoto2')->move('./upload/image', $name2);
	        $arr['gphoto2'] = $name2;
    	}
    	if($request->hasFile('gphoto3')){
	        // 随机文件名
	        $picname3 = md5(time().rand(100000,999999));
	        // 获取文件后缀
	        $hz3 = $request -> file('gphoto3') ->getClientOriginalExtension();
	        // 拼接文件名
	        $name3 = $picname3.'.'.$hz3;
	        // 储存文件
	        $request->file('gphoto3')->move('./upload/image', $name3);
	        $arr['gphoto3'] = $name3;
    	}
    	if($request->hasFile('gphoto4')){
	        // 随机文件名
	        $picname4 = md5(time().rand(100000,999999));
	        // 获取文件后缀
	        $hz4 = $request -> file('gphoto4') ->getClientOriginalExtension();
	        // 拼接文件名
	        $name4 = $picname4.'.'.$hz4;
	        // 储存文件
	        $request->file('gphoto4')->move('./upload/image', $name4);
	        $arr['gphoto4'] = $name4;
    	}
	     // 插入数据库
	     $res = DB::table('goods') -> insert($arr);
	     if($res){
	        return redirect('/admin/goods/index') -> with('success','添加成功');
	     }else{
	        return back() -> with('error','添加失败');
		}
    }
    public function getIndex(Request $request){
    	$count = $request -> input('count',5);
        $search = $request -> input('search','');
        // 查询数据  并且分页
        $data = DB::table('goods')->join('cate','goods.cid','=','cate.id')->select('goods.*','cate.name')->where('goodsname','like','%'.$search.'%')->paginate($count);
        return view('admin.goods.index',['data'=>$data,'request'=>$request->all()]);
    }
    public function getDelete($id){
    	$res = DB::table('goods')->where('id',$id)->delete();
        if($res){
            return redirect('/admin/goods/index')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
	public function getEdit($id){
		$data2 = CateController::getCatePid(0);
        $data = DB::table('goods')->where('id',$id)->first();
        return view('/admin/goods/edit',['data'=>$data,'data2'=>$data2]);
    }
    public function postUpdate(Request $request){
    	//数据组装
		$arr = $request -> except('_token');
		$arr['gtime-up'] = date('Y-m-d H:i:s',time());
		// dd($arr);
		//图片上传   检测是否有文件上传并储存至文件夹
    	if($request->hasFile('gphoto')){
	        // 随机文件名
	        $picname = md5(time().rand(100000,999999));
	        // 获取文件后缀
	        $hz = $request -> file('gphoto') ->getClientOriginalExtension();
	        // 拼接文件名
	        $name = $picname.'.'.$hz;
	        // 储存文件
	        $request->file('gphoto')->move('./upload/image', $name);
	        $arr['gphoto'] = $name;
    	}
    	if($request->hasFile('gphoto2')){
	        // 随机文件名
	        $picname2 = md5(time().rand(100000,999999));
	        // 获取文件后缀
	        $hz2 = $request -> file('gphoto2') ->getClientOriginalExtension();
	        // 拼接文件名
	        $name2 = $picname2.'.'.$hz2;
	        // 储存文件
	        $request->file('gphoto2')->move('./upload/image', $name2);
	        $arr['gphoto2'] = $name2;
    	}
    	if($request->hasFile('gphoto3')){
	        // 随机文件名
	        $picname3 = md5(time().rand(100000,999999));
	        // 获取文件后缀
	        $hz3 = $request -> file('gphoto3') ->getClientOriginalExtension();
	        // 拼接文件名
	        $name3 = $picname3.'.'.$hz3;
	        // 储存文件
	        $request->file('gphoto3')->move('./upload/image', $name3);
	        $arr['gphoto3'] = $name3;
    	}
    	if($request->hasFile('gphoto4')){
	        // 随机文件名
	        $picname4 = md5(time().rand(100000,999999));
	        // 获取文件后缀
	        $hz4 = $request -> file('gphoto4') ->getClientOriginalExtension();
	        // 拼接文件名
	        $name4 = $picname4.'.'.$hz4;
	        // 储存文件
	        $request->file('gphoto4')->move('./upload/image', $name4);
	        $arr['gphoto4'] = $name4;
    	}
    	$res = DB::table('goods') -> where('id',$request -> input('id'))->update($arr);
        if($res){
            return redirect('/admin/goods/index')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }
}
