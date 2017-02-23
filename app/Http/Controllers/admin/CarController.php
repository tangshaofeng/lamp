<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class CarController extends Controller
{
   public function getIndex(Request $request){
        $count = $request -> input('count',5);
        $search = $request -> input('search','');
        // 查询数据  并且分页
        $data = DB::table('car')->where('gid','like','%'.$search.'%')->paginate($count);
        return view('admin.car.index',['data'=>$data,'request'=>$request->all()]);
    // return view('admin.car.index');
   }
}
