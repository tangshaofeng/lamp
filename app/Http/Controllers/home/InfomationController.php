<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class InfomationController extends Controller
{
    public function getIndex(){
        // $data = DB::table('user')->get();
        // // dd($data);
        return view('home.infomation.index');
    }  
    public function postInsert(Request $request){
       $arr = $request -> only(['username','sex','birthday','nickname']);
        //头像上传   检测是否有文件上传并储存至文件夹
         if($request->hasFile('userpic')){
            // 随机文件名
            $picname = time().rand(100000,999999);
            // 获取文件后缀
            $hz = $request -> file('userpic') ->getClientOriginalExtension();
            // 拼接文件名
            $name = $picname.'.'.$hz;
            // 储存文件
            $request->file('userpic')->move('./upload/pic', $name);
            $arr['userpic'] = $name;
         }

          // 插入数据库
         $res = DB::table('user') -> where('id','2085')-> insert($arr);
         if($res){
            return view('/home/infomation/index');
         }else{
            return back() -> with('error','添加失败');
         }
    }


























    //安全设置
    public function getSafety(){
      
        return view('home.infomation.safety');
    } 
    //收货地址
    public function getAddress(){
        $dat = DB::table('add')->where('uid',session('aaa')['id'])->get();
        // $dat=$dat['0'];
        return view('home.infomation.address',['dat'=>$dat]);
        
    }  
    //删除收货地址
    public function getDelete1($id){
      $res = DB::table('add')->delete($id);
      if($res){
          echo '<script>alert("删除成功");window.location.href="/home/infomation/address"<script>';

      }else{
        echo '<script>alert("删除失败");window.location.href="/home/infomation/address/{{$id}}"<script>';

      }
    }

    public function postInsert1(Request $request){
        // dd($request ->all());
        $arr = $request->only(['province','country','town','addr','oname','ophone']);
       
        
       
         $re = DB::table('add')->where('id','2')->update($arr);
        if($re){
               // $crr= DB::table('porder')
               //      ->join('user', 'user.id', '=', 'porder.uid')
               //      ->select('porder.*', 'ophone', 'oname','oaddress')
               //      ->get();

               $data = DB::table('add')->where('uid','2085')->get();
               
                return view('home.infomation.address',['data'=>$data]);
            }else{
                return back();
            }
       


        }
        //地址修改
        public function getEdit1($id){
           $data = DB::table('add')->where('id',$id)->first();
           // dd($data);
           return view('home.infomation.edit1',['data'=>$data]);
        }
        //地址修改
         public function postUpdate1(Request $request){
            $arr = $request->except(['_token','id','x','y']);
           $res= DB::table('add')->where('id',$request->only('id'))->update($arr);
            if($res){
                return view('home.infomation.index');
            }else{
                return back();
            }

         }


         //密码更改
         public function getPassword($id){
           return view('home.infomation.password',['id'=>$id]);
         }

         public function postPasswords(Request $request){

             //表单自动验证
             $this ->validate($request,[
               
                'userpwd'=> 'required',
                'reuserpwd'=>'required|same:userpwd'
                
                ],[
               
                'userpwd.required'=> '密码不存在',
                'reuserpwd.required'=>'确认密码不存在',
                'reuserpwd.same'=>'确认密码不一致'
               
                ]);
            $data = $request->except(['_token','id','x','y']);
            if(strlen($data['userpwd']) <6 || strlen($data['userpwd']) > 18 ){
                echo '<script>alert("密码必须在6到18位之间");location.href="/home/infomation/password";<script>';
            }
            // var_dump($data);
           $res = DB::table('user')->where('id','25')->first();
           
          $a = Hash::check($data['password'], $res['userpwd']);
          if($a){
            $arr['userpwd']=Hash::make($data['userpwd']);
            // dd($arr);
            $re = DB::table('user')->where('id','25')->update($arr);
            if($re){
                return view('home.infomation.safety');
            }
                return back();
          }else{
            return back();
          }
         } 
         //支付密码
         public function getSetpay(){

            return view('home.infomation.setpay');
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

         public function postPhone(){
            // dd($request->except(['_token','x','y']));
        //短信接口地址
        $target = "http://106.ihuyi.cn/webservice/sms.php?method=Submit";
        //获取手机号
        $mobile = $_POST['mobile'];
      
        //生成的随机数
        // $mobile_code = self::random(4,1);
        session(['phone_code'=>rand(100000,999999)]);
        $mobile_code = session('phone_code');
        // dd($mobile_code);
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
         public function postInsert3(Request $request){
          $s= $request->except(['_token','x','y','zhi_code','zhipassword','rezhipassword']);
          // dd($s);
            if(session('phone_code') != $request ->input('zhi_code')){
                return back() ->withInput() ->with('error','验证错误');
            }
            // dd(1);             
            if(strlen($request->input('zhipassword')) < 6 || strlen($request->input('zhipassword')) >18 ){
                return back()->withInput()->with('error','密码是6----18之间的数字和字母');
            }
            // dd(2);
            
             //表单自动验证
             $this ->validate($request,[
                 
                'rezhipassword'=>'required|same:zhipassword'
                
                ],[
                 
               
                'rezhipassword.required'=>'确认密码不存在',
                'rezhipassword.same'=>'确认密码不一致'
               
                ]);

              //数据的组装
             
            $s['zhipassword']= Hash::make($request -> input('zhipassword'));
            $s['zhitoken']= str_random(50);
            //插入数据
            // dd($s);
            $res = DB::table('zhifu')->insert($s);
            // dd($res);
           if($res){
                 
                    return view('home.infomation.safety');
                }else{
                    return back()->with('error','注册失败');
                }
         }














    //订单管理
    public function getOrder(){
      // var_dump(session('id'));
       $data =  DB::table('porder')->where('uid','28')->get();
       // var_dump($data);

        return view('home.infomation.order',['data'=>$data]);
    } 
    //删除订单
    public function getDelete($id){
     $res = DB::table('porder')->delete($id);
     if($res){
        echo '<script>alert("删除成功");window.location.href="/home/infomation/order"<script>';
     }else{
         echo '<script>alert("删除失败");window.location.href="/home/infomation/order"<script>';
     }
    }

    //订单支付
    public function getPay($id){
      $data = DB::table('porder')->where('id',$id)->first();
      // var_dump($data);
      // 通过用户的uid查询这个人的所有地址
     $arr = DB::table('add')->where('uid',$data['uid'])->get();
     // dd($arr);
      return view('home.infomation.pay',['data'=>$data,'arr'=>$arr]);
    }

    //提交订单
    public function getSuccess(Request $request){
        // dd($request->all());
       $kk = $request->input('kk');
       $id = $request->input('id');
       //通过ID查询用户的订单
        $arr = DB::table('porder')->where('id',$id)->first();
        // dd($arr);
        // 通过用户的ID获取所有的地址
       $data = DB::table('add')->where('id',$id)->get();
       // dd($data);
       $data=$data[0];
       return view('home.infomation.success',['data'=>$data,'arr'=>$arr]);
    }

    //查看详情
    public function getXxoo($id){
      // dd($aid);
    $data =  DB::table('add')->where('id',$id)->get();
      $data =$data['0'];
      // dd($data);
       $arr = DB::table('porder')->where('id',$data['oid'])->get();
       $arr =$arr['0'];
       return view('home.infomation.logistics',['data'=>$data,'arr'=>$arr]);
    }
    //退款售后
    public function getChange(){
      //查询的是用户的地址
        $data = DB::table('add')->where('uid',session('aaa')['id'])->get();
       $arr = DB::table('porder')->where('uid',session('aaa')['id'])->get();
        return view('home.infomation.change',['data'=>$data,'arr'=>$arr]);
    }  
      //退款的钱的去向
     public function getRecord($id){
         $data = DB::table('add')->where('uid',session('aaa')['id'])->get();
       $arr = DB::table('porder')->where('uid',session('aaa')['id'])->get();
        return view('home.infomation.record',['data'=>$data,'arr'=>$arr]);
     }
    //优惠券
    public function getCoupon(){
        
        return view('home.infomation.coupon');
    }  
    //红包
    public function getBonus(){
        
        return view('home.infomation.bonus');
    } 
    //账单明细
     public function getBill(){
       $data = DB::table('porder')->where('uid',27)->get();
        return view('home.infomation.bill',['data'=>$data]);
    } 

    public function getAdd(Request $request){
         // var_dump($request->all());
            //商品的数量
          $p['gnum'] =  $data['count'];
          //商品的id
        $p['gid'] = $data['gid'];
        $p['uid'] = session('aaa')['id'];
       $gg = DB::table('goods')->where('id',$p['gid'])->first();
       $p['goodsname'] = $gg['goodsname'];
       $p['gprice'] = $gg['gprice'];
        $p['ginfo']= $gg['ginfo'];
        $p['gpic'] = $gg['gpic'];
        $p['ordernum']= '10000'.rand(1000,100000);
        $p['ostatus'] = '待付款';
        $p['otime'] = date('Y-m-d H:i:s',time());
        $id = DB::table('porder')->insertGetId($p);
        if($id > 0 ){
            return view('home.infomation.pay',['id'=>$id]);
        }else{
            return back()->with('error','订单异常');
        }
        // echo $id;
    } 
    //收藏
    public function getCollection(){
        
        return view('home.infomation.collection');
    } 
    //评价
    public function getComment(){
        
        return view('home.infomation.comment');
    }
}

