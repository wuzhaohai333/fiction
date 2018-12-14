<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//前台路由
Route::group(['domain'=>'www.fictions.com'],function(){
    //首页
        Route::get('/',"Index\IndexController@in" );
    //天气测试
        Route::get('/index', "Index\IndexController@index");
    //登录视图
        Route::get('/login', "Index\LoginController@login");
    //执行登录
        Route::post('/login_do', "Index\LoginController@loginDo");
    //退出登录
        Route::get('/quit', "Index\LoginController@quit");
    //注册视图
        Route::get('/register', "Index\LoginController@register");
    //执行注册
        Route::post('/register_do', "Index\LoginController@registerDo");
    //获取验证码
        Route::get('/verif', "Index\LoginController@verif");
    //分类视图
        Route::get('/classify', "Index\ClassifyController@classify");
    //个人中心
        Route::get('person','Index\PersonController@person');
    //充值
        Route::get('pay','Index\PayController@pay');
    //列表
        Route::get('list','Index\ListController@fictionList');
    //列表
        Route::get('details','Index\ListController@fictionDetails');
    //章节内容
        Route::get('section','Index\ListController@section');
});
//接口路由
Route::group(['domain'=>'api.fictions.com'],function(){
    Route::get('/', function () {return 'api';});
    //登录
    Route::any('/login', "Api\LoginController@getVerify");
    //注册
    Route::post('/login_do', "Api\LoginController@loginDo");
    //推荐小说
    Route::any('/is_recommend', "Api\IndexController@isRecommend");
        //推荐小说
    Route::any('/sift', "Api\IndexController@isSift");
        //推荐小说
    Route::any('/collect', "Api\IndexController@collect");
    //分类列表
    Route::any('/classify_list', "Api\ClassifyController@classifyList");
    //采集内容
    Route::post('/content', "Api\ContentController@content");
});