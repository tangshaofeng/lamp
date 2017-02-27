<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

use Hash;

class HoutaiController extends Controller
{
	public function getIndex(){
		return view('admin.houtai.index');
	}

	public function postDenglu(Request $request){

		  if(session('code') != $request-> input('code')){
        return back()->withInput()->with('error','验证码错误');
    }
		   // 表单自动验证
        $this->validate($request, [
        'username' => 'required',
        'userpwd' => 'required'
      
    ],[
        'username.required' => '用户名不存在',
        'userpwd.required' => '密码未填写'
       
    ]);
       $name = $request -> input('username');
       $userpwd = $request -> input('userpwd');
      $res = DB::table('user')->where('phonenum',$name)->orWhere('email',$name) ->first();
      // dd($res);
      if( $res['userqx'] != '普通用户'){
	      if($res['email'] || $res['phonenum']){
	           // $res['userpwd']; 
	           if (!Hash::check($userpwd, $res['userpwd'])){
	                return back()->with('error','用户名或密码错误');
	           }else{
	                // $request ->session() ->push(['xxoo'=>'xxoo']);
	                session(['res'=>$res]);
	                // dd(session('res'));
	                return view('admin.admin.index');
	           }

	        }else{
	            return back()->with('error','用户名或密码错误');
	        }
			dd($request->all());
		}else{
			return back()->with('error','对不起您的不是管理员');
		}



		echo 1;
		dd($request->all());

	}
}