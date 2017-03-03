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
Route::get('/admin','admin\AdminController@index');






	//后台登录
Route::controller('/admin/houtai','admin\HoutaiController');


// Route::group(['middleware' => 'as_admin'], function () {
		   //网站配置
		Route::controller('/admin/web','admin\WebController');
		// 地址管理
		Route::controller('/admin/dingdan','admin\DingdanController');
		//地址
		Route::controller('/admin/address','admin\AddressController');
		


		// 用户模块控制器
		Route::controller('/admin/user','admin\UserController');
		// 友情链接控制器
		Route::controller('/admin/flink','admin\FlinkController');
		//商品管理控制器
		Route::controller('/admin/goods','admin\GoodsController');
		





		Route::get('/admin','admin\AdminController@index');
		// 用户模块控制器
		Route::controller('/admin/user','admin\UserController');
		// 友情链接控制器
		Route::controller('/admin/flink','admin\FlinkController');
		//商品管理控制器
		Route::controller('/admin/goods','admin\GoodsController');
		//分类管理控制器
		Route::controller('/admin/cate','admin\CateController');
		//后台管理
		Route::get('/admin','admin\AdminController@index');
		//后台用户管理
		Route::controller('/admin/user','admin\UserController');
		
		//轮播图
		Route::controller('/admin/lunbotu','admin\LunbotuController');
		//公告管理
		Route::controller('/admin/gonggao','admin\GonggaoController');
		//评论管理
		// Route::controller('/home/comment','home\CommentController');
		Route::controller('/admin/comment','admin\CommentController');
		//回收站管理
		Route::controller('/admin/huishou','admin\HuishouController');
		


	 
// });













//验证码
Route::get('/code','CodeController@index');

//注册
Route::controller('/home/zhuce','home\ZhuceController');


//主页
Route::controller('/home/home','home\ZhuyeController');
//登录
Route::controller('/home/login','home\LoginController');

//前台商品搜索页面控制器
Route::controller('/home/search','home\SearchController');


//前台商品搜索页面控制器
Route::controller('/home/search','home\SearchController');
//前台商品详情页面控制器
Route::controller('/home/introduction','home\IntroductionController');

//商品收藏
Route::controller('/home/collection','home\CollectionController');




	//前台登录中间件
Route::group(['middleware' => 'as_home'], function () {



	//个人中心
	Route::controller('/home/infomation','home\InfomationController');


	// 前台购物车控制器
	Route::controller('/home/shopcar','home\ShopcarController');





});































//后台分类
Route::controller('/admin/cate','admin\CateController');
//轮播图
Route::controller('/admin/lunbotu','admin\LunbotuController');



// //评论管理
// Route::controller('/admin/comment','admin\CommentController');
// //回收站管理
// Route::controller('/admin/huishou','admin\HuishouController');
// //公告管理
// Route::controller('/admin/gonggao','admin\GonggaoController');






// //后台管理
// Route::get('/admin','admin\AdminController@index');

// //后台分类
// Route::controller('/admin/cate','admin\CateController');
// //轮播图
// Route::controller('/admin/lunbotu','admin\LunbotuController');

// //评论管理
// Route::controller('/admin/comment','admin\CommentController');
// //回收站管理
// Route::controller('/admin/huishou','admin\HuishouController');
// //公告管理
// Route::controller('/admin/gonggao','admin\GonggaoController');






































































































Route::controller('/home/home','home\ZhuyeController');
Route::controller('/home/shopcar','home\ShopcarController');


Route::get('/', function () {
    return view('welcome');
});













































































// //后台管理
// Route::get('/admin','admin\AdminController@index');
// //后台用户管理
// Route::controller('/admin/user','admin\UserController');
// //后台分类
// Route::controller('/admin/cate','admin\CateController');
// //轮播图
// Route::controller('/admin/lunbotu','admin\LunbotuController');
// //评论管理
// Route::controller('/home/comment','home\CommentController');

























































































//注册
Route::controller('/home/zhuce','home\ZhuceController');

//验证码
Route::get('/code','CodeController@index');
//主页
Route::controller('/home/home','home\ZhuyeController');
//登录
Route::controller('/home/login','home\LoginController');



//个人中心
Route::controller('/home/infomation','home\InfomationController');








