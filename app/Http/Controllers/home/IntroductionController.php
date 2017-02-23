<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class IntroductionController extends Controller
{
   public function getIndex($id){
        $data = DB::table('goods')->where('id',$id)->first();
         //dd($data);
        return view('home.introduction.index',['data'=>$data]);
   }
}
