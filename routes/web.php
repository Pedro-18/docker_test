<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
     return view('welcome');
});


/*Route::get('/',function(){
    return "Hello,world!";
});*/

/*Route::get('hello', function (){
   return "hello laravel!";
});*/

/*Route::match(['get','post'],'foo',function (){
   return "这是来自get或post的请求";
});*/
/*Route::any('bar', function (){
   return "这是来自任何HTTP谓词的请求";
});*/

/*Route::get('form', function (){
    return '<form method="POST" action="/foo">' . csrf_field() . '<button type="submit">提交</button></form>';
});*/

#Route::view('hello','hello',['name' => '学院君']);
/*Route::get('user/{id}', function ($id){
    return '用户ID：' . $id;
});*/
/*Route::get('posts/{post}/comments/{comment}', function ($postId,$commentId){
    return $postId . '_' . $commentId;
});*/
/*Route::get('user/{name?}', function ($name = 'Pedro'){
    return '你好，' . $name;
});*/
/*Route::get('user/{name}', function ($name) {
    // $name 必须是字母且不能为空
})->where('name', '[A-Za-z]+');*/

/*Route::get('user/{id}', function ($id) {
    // $id 必须是数字
})->where('id', '[0-9]+');*/

Route::get('user/{id}/{name}', function ($id, $name) {
    // 同时指定 id 和 name 的数据格式
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
