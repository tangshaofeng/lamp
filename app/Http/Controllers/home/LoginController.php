<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Hash;


class LoginController extends Controller
{
   
    public function getIndex(){
        return view('home.login.index');
    }

    //登录验证
    public function postDenglu(Request $request){
        if(session('code') != $request-> input('code')){
        return back()->withInput()->with('error','验证码错误');
    }
        $name = $request -> input('name');
        // var_dump($name);
        $userpwd = $request -> input('userpwd');
        // var_dump($request ->all());
        $res = DB::table('user')->where('phonenum',$name)->orWhere('email',$name) ->first();
        // dd($res);
        if($res['email'] || $res['phonenum']){
           // $res['userpwd']; 
           if (!Hash::check($userpwd, $res['userpwd'])){
                return back()->with('error','用户名或密码错误');
           }else{
                // $request ->session() ->push(['xxoo'=>'xxoo']);
                session(['id'=>$res['id'],'phonenum'=>$res['phonenum'],'email'=>$res['email']]);

                return view('home.home.index');
           }

        }else{
            return back()->with('error','用户名或密码错误');
        }
        
    }



















}
