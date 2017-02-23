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
























































































//后台管理
Route::get('/admin','admin\AdminController@index');
//后台用户管理
Route::controller('/admin/user','admin\UserController');
//后台分类
Route::controller('/admin/cate','admin\CateController');
//轮播图
Route::controller('/admin/lunbotu','admin\LunbotuController');
//评论管理
Route::controller('/admin/comment','admin\CommentController');
//回收站管理
Route::controller('/admin/huishou','admin\HuishouController');
//公告管理
Route::controller('/admin/gonggao','admin\GonggaoController');












































































































Route::controller('/home/home','home\ZhuyeController');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin','admin\AdminController@index');
// 用户模块控制器
Route::controller('/admin/user','admin\UserController');
// 友情链接控制器
Route::controller('/admin/flink','admin\FlinkController');
//商品管理控制器
Route::controller('/admin/goods','admin\GoodsController');
//分类管理控制器
Route::controller('/admin/cate','admin\CateController');
//前台商品搜索页面控制器
Route::controller('/home/search','home\SearchController');
