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
        $aaa = DB::table('user')->where('phonenum',$name)->orWhere('email',$name) ->first();
        // dd($res);
        if($aaa['email'] || $aaa['phonenum']){
           // $res['userpwd']; 
           if (!Hash::check($userpwd, $aaa['userpwd'])){
                return back()->with('error','用户名或密码错误');
           }else{
                // $request ->session() ->push(['xxoo'=>'xxoo']);
                session(['aaa'=>$aaa]);
                //获取轮播图及商品分类
                $lunbotu = DB::table('lunbotu')->get();
                //遍历出所有分类及等级
                $data= ZhuyeController::getCatePid(0);
                $gonggao = DB::table('gonggao')->get();
                $goods = DB::table('goods')->get();
                return view('home/home/index',['lunbotu'=>$lunbotu,'data'=>$data,'gonggao'=>$gonggao,'goods'=>$goods]);
                            // return view('home.home.index');
           }

        }else{
            return back()->with('error','用户名或密码错误');
        }
        
    }



















}
