<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
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
        $dat = DB::table('add')->where('uid','2085')->get();
        // $dat=$dat['0'];
        return view('home.infomation.address',['dat'=>$dat]);
        
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
        public function getEdit1($id){
           $data = DB::table('add')->where('id',$id)->first();
           // dd($data);
           return view('home.infomation.edit1',['data'=>$data]);
        }

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

         public function postPasswords(){
           
         } 

    //订单管理
    public function getOrder(){
        
        return view('home.infomation.order');
    } 
    //退款售后
    public function getChange(){
        
        return view('home.infomation.change');
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
        
        return view('home.infomation.bill');
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

