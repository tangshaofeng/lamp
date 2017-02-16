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























































































































































































//注册
Route::controller('/home/zhuce','home\ZhuceController');

//验证码
Route::get('/code','CodeController@index');
//主页
Route::controller('/home/home','home\ZhuyeController');
//登录
Route::controller('/home/login','home\LoginController');















