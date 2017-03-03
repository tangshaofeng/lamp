<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Mail;

class ZhuceController extends Controller
{
   public function getIndex()

   {
     
       return view('home.zhuce.index');  
   }

   public function postInsert(Request $request){
    if(session('code') != $request-> input('code')){
        return back()->withInput()->with('error','验证码错误');
    }

    if(strlen($request->input('userpwd')) < 6 || strlen($request->input('userpwd')) >18 ){
        return back()->withInput()->with('error','密码是6----18之间的数字和字母');
    }
   
     //表单自动验证
     $this ->validate($request,[
        'email'=>'required',
        'userpwd'=> 'required',
        'reuserpwd'=>'required|same:userpwd'
        
        ],[
        'email.required'=>'用户名不存在',
        'userpwd.required'=> '密码不存在',
        'reuserpwd.required'=>'确认密码不存在',
        'reuserpwd.same'=>'确认密码不一致'
       
        ]);
      //数据的组装
    $s = $request -> only(['email','userpwd']);
    $s['userpwd']= Hash::make($request -> input('userpwd'));
    $s['usertoken']= str_random(50);
    $s['usertime']=date('Y-m-d H:i:s',time());
    //插入数据
    $id = DB::table('user')->insertGetId($s);
    if($id > 0){
        //发送的邮箱$s['email']  发送的$id  token值
        self::mailto($s['email'],$id,$s['usertoken']);
            return view('home.email.success');
     }

   }


   static  public  function mailto($email,$id,$usertoken){
         Mail::send('home.email.index', ['id' => $id,'usertoken'=>$usertoken], function ($m) use ($email) {
            // $m->from('hello@app.com', 'Your Application');

            $m->to($email)->subject('注册邮件！！！');

        });
   }

   public function getJihuo(Request $request){
    // dd($request->all());
    // 接受激活时传过来的值
    $arr = $request->only(['id','usertoken']);
        //修改状态吗 
    $arr['status'] = '2';
    // dd($arr);

    //根据ID和token值进行修改
    $res = DB::table('user')-> where('id',$arr['id']) -> Where('usertoken',$arr['usertoken'])->update($arr);
    if($res){
        // //重新随机随机码
        // $azz['usertoken']= str_random(50);
        // //将新的随机码插入数据库
        // $ee =DB::table('user')-> where('id',$arr['id'])->update($azz);
        // //判断是否插入成功
        // if($ee){
             return view('home/denglu/index');
        // }
       // echo '激活成功';
       return view('home.home.index');
    }else{
        return back()->with('error','激活失败请您重新激活');
    }
   }


  
        //请求数据到短信接口，检查环境是否 开启 curl init。
    static public    function Post($curlPost,$url){
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_HEADER, false);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_NOBODY, true);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
                $return_str = curl_exec($curl);
                curl_close($curl);
                return $return_str;
        }

        //将 xml数据转换为数组格式。
     static public  function xml_to_array($xml){
            $reg = "/<(\w+)[^>]*>([\\x00-\\xFF]*)<\\/\\1>/";
            if(preg_match_all($reg, $xml, $matches)){
                $count = count($matches[0]);
                for($i = 0; $i < $count; $i++){
                $subxml= $matches[2][$i];
                $key = $matches[1][$i];
                    if(preg_match( $reg, $subxml )){
                        $arr[$key] = self::xml_to_array( $subxml );
                    }else{
                        $arr[$key] = $subxml;
                    }
                }
            }
            return $arr;
        }

   //手机号注册v
   public function postPhone(){
        //短信接口地址
        $target = "http://106.ihuyi.cn/webservice/sms.php?method=Submit";
        //获取手机号
        $mobile = $_POST['mobile'];
       
        //生成的随机数
        // $mobile_code = self::random(4,1);
        session(['phone_code'=>rand(100000,999999)]);
        $mobile_code = session('phone_code');
        if(empty($mobile)){
            exit('手机号码不能为空');
        }
        // //防用户恶意请求
        // if(empty($_SESSION['send_code']) or $send_code!=$_SESSION['send_code']){
        //     exit('请求超时，请刷新页面后重试');
        // }

        $post_data = "account=C76742294&password=f805a1247a6c93de6685d565871063c1&mobile=".$mobile."&content=".rawurlencode("您的验证码是：".$mobile_code."。请不要把验证码泄露给其他人。");
        //用户名请登录用户中心->验证码、通知短信->帐户及签名设置->APIID
        //查看密码请登录用户中心->验证码、通知短信->帐户及签名设置->APIKEY
        $gets =  self::xml_to_array(self::Post($post_data, $target));
        
        echo $gets['SubmitResult']['msg'];
   }

   public function postInsert2(Request $request){
    if(session('phone_code') != $request ->input('code')){
        return back() ->withInput() ->with('error','验证错误');
    }

    //  if(strlen($request->input('phonenum')) != 11){
    //    return back()->with('error','手机号码不正确');
    // }

     if(strlen($request->input('userpwd')) < 6 || strlen($request->input('userpwd')) >18 ){
        return back()->withInput()->with('error','密码是6----18之间的数字和字母');
    }
   
     //表单自动验证
     $this ->validate($request,[
         
        'userpwd'=> 'required',
        'reuserpwd'=>'required|same:userpwd'
        
        ],[
         
        'userpwd.required'=> '密码不存在',
        'reuserpwd.required'=>'确认密码不存在',
        'reuserpwd.same'=>'确认密码不一致'
       
        ]);
      //数据的组装
     $s['phonenum']= $request->input('phonenum');
    $s['userpwd']= Hash::make($request -> input('userpwd'));
    $s['usertoken']= str_random(50);
    $s['usertime']=date('Y-m-d H:i:s',time());
    $s['status']= 2;
    //插入数据
    
    $res = DB::table('user')->insert($s);
   if($res){
                
            return view('home.login.index');
        }else{
            return back()->with('error','注册失败');
        }
   }

   //手机号的ajsx验证
   public function getAjax(Request $request){
      $phone= $request->input('name');
       // echo $phone;
       // dd();

   $res = DB::table('user')->where('phonenum',$phone)->first();
    if($res){
        echo '该用户已注册，请登录';
    }else{
        echo '用户未注册，零食网欢迎您';
    }


   }
   
    public function postEmail(Request $request){
      $email= $request->input('name');
       // echo $phone;
       // dd();
   $res = DB::table('user')->where('email',$email)->first();
    if($res){
        echo '该用户已注册，请登录';
    }else{
        echo '用户未注册，零食网欢迎您';
    }


   }

   // static public function getCatePid($pid){
   //      //遍历出所有分类及等级
   //      $data = DB::table('cate')->where('pid',$pid)->get();
   //      $arr = array();

   //      foreach($data as $k=>$v){
   //          $v['sub'] = self::getCatePid($v['id']);
   //          $arr[] = $v;
   //      }
   //      return $arr;
   //  }
     
   //前台退出登录
   public function getPaolu(Request $request){
      $request->session()->forget('aaa');

       $lunbotu = DB::table('lunbotu')->get();
    //遍历出所有分类及等级
     $data= ZhuyeController::getCatePid(0);
     $gonggao = DB::table('gonggao')->get();
    $goods = DB::table('goods')->get();
    return view('home/home/index',['lunbotu'=>$lunbotu,'data'=>$data,'gonggao'=>$gonggao,'goods'=>$goods]);
   }
   
   
   
   
}
