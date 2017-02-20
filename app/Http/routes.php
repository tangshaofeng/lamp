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
Route::controller('/home/comment','home\CommentController');












































































































Route::controller('/home/home','home\ZhuyeController');