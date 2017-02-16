<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD




















































































//后台分类
Route::controller('/admin/cate','admin\CateController');
//后台商品管理
Route::controller('/admin/goods','admin\GoodsController');



































































































//注册
Route::controller('/home/zhuce','home\ZhuceController');

//验证码
Route::get('/code','CodeController@index');
//主页
Route::controller('/home/home','home\ZhuyeController');
//登录
Route::controller('/home/login','home\LoginController');















=======
Route::get('/admin','admin\AdminController@index');
// 用户模块控制器
Route::controller('/admin/user','admin\UserController');
>>>>>>> 5c3f6112e7e785ce3162f28053352adae7a0a8b8
