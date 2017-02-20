<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class AddressController extends Controller
{
    public function getIndex(Request $request){
         $count = $request -> input('count',5);
        $search = $request -> input('search','');
        // 查询数据  并且分页
        $data = DB::table('add')->where('oname','like','%'.$search.'%')->orWhere('ophone','like','%'.$search.'%')->paginate($count);
        return view('admin.address.index',['data'=>$data,'request'=>$request->all()]);

        // $data = DB::table('add')->get();
        // return view('admin.address.index',['data'=>$data]);
    }
}
