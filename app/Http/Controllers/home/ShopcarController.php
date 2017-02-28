<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class ShopcarController extends Controller
{
    public function getAdd(Request $request){
        $data = $request->all();
        //数据组装
        $arr['count'] = $data['count'];
        $arr['gid'] = $data['gid'];
        $arr['ctime'] = date('Y-m-d H:i:s',time());
        $arr['gmoneys'] = $data['gmoney']*$data['count'];
        $res = DB::table('car') -> insert($arr); 
        if($res){
            return back() -> with('添加成功');
         }else{
            return back() -> with('添加失败');
         };
    }
    public function getIndex(Request $request){
        $search = $request -> input('search','');
        $data = DB::table('car')->join('goods','car.gid','=','goods.id')->select('car.count','car.gmoneys','car.carid','goods.*')->where('uid','1')->get();
        $jiage = null;
        $shuliang = null;
        foreach ($data as $k => $v){
            $jiage += $v['gmoneys'];
            $shuliang += $v['count'];
            $arr['zongliang'] = $shuliang;
            $arr['zongjia'] = $jiage;
        }
        return view('home.shopcar.index',['data'=>$data,'arr'=>$arr]);
    }
    public function getDelete(Request $request){
        $id = $request -> all()['id'];
        $res = DB::table('car')->where('carid',$id)->delete();
        if($res){
            return back();
        }else{
            return back() -> with('添加失败');
        }
    }
    public function getUpdate1(Request $request){
        $id = $request->all()['id'];
        $gmoney = $request->all()['gmoney'];
        $gmoneys1 = $request->all()['gmoneys'];
        $arr['gmoneys'] = $gmoneys1-$gmoney;
        if($arr['gmoneys'] < $gmoney){
            $arr['gmoneys'] = $gmoney;
        }
        $arr['count'] = $request->all()['count'] - 1;
        if($arr['count'] < 1){
            $arr['count'] = 1;
        }
        $res = DB::table('car')->where('carid',$id)->update($arr);
        if($res){
            return back();
        }else{
            return back();
        }
    }
    public function getUpdate2(Request $request){
        $id = $request->all()['id'];
        $gmoney = $request->all()['gmoney'];
        $gmoneys1 = $request->all()['gmoneys'];
        $arr['gmoneys'] = $gmoneys1+$gmoney;
        $arr['count'] = $request->all()['count'] + 1;
        $res = DB::table('car')->where('carid',$id)->update($arr);
        if($res){
            return back();
        }else{
            return back();
        }
    }

}
