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

Route::any('/', function () {
   
});
Route::any('/home',"home\HomeController@index");
// 个人中心

Route::any('/myuser',"MyuserController@index");
Route::any('/myauth',"MyuserController@myauth");
Route::any('/myaccount',"MyuserController@myaccount");
Route::any('/mylevel',"MyuserController@mylevel");
Route::any('/mylist',"MyuserController@mylist");
Route::any('/mysubscribe',"MyuserController@mysubscribe");
Route::any('/myren',"MyuserController@myren");//资料修改
Route::any('/myren_do',"MyuserController@myren_do");//修改保存
Route::any('/',"IndexController@index");
Route::any('/add',"IndexController@add");
Route::any('/cate',"CateController@show");
Route::any('/listcate',"CateController@listcate");
Route::any('/childcate',"CateController@childcate");
Route::any('/l',"ZbController@show");
Route::any('/sign',"IndexController@sign");
Route::any('/login',"IndexController@login");
Route::any('/login_do',"login\LoginController@login");//zyk
Route::any('/login_out',"login\LoginController@login_out");//zyk
Route::any('/regin',"login\LoginController@regin");//zyk
Route::any('/register',"IndexController@register");
Route::resource('home',"home\HomeController");
Route::resource('/yy',"YyController@index");
Route::any('/article',"ArticleController@index");