<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;

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

/*Route::get('user/{id}/{name}', function ($id, $name) {
    // 同时指定 id 和 name 的数据格式
    return "名字是：" . $name . ",ID是：" . $id;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);*/

/*Route::get('search/{search}', function ($search){
    return $search;
})->where('search','.*');*/

/*Route::get('user/profile', function (){
    //通过路由名称生成URL
    return '我的URL：' . route('profile');
})->name('profile');*/

//命名路由名称为profile
//Route::get('user/profile', [UserProfileController::class, 'show'])->name('profile');

//route(‘profile’)生成url
//redirect()->route('profile')生成重定向
/*Route::get('redirect', function() {
    // 通过路由名称进行重定向
    return redirect()->route('profile');
});*/

/*Route::get('user/{id}/profile', function ($id){
    $url = route('profile',['id'=>$id]);
    return $url;
})->name('profile');*/

/*Route::domain('{account}.laravel-blog.vip')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        return 'This is ' . $account . ' page of User ' . $id;
    });
});*/

/*Route::prefix('admin')->group(function (){
    Route::get('users', function (){
        return "这是admin里的users";
    });
});*/

/*Route::name('admin.')->group(function (){
    Route::get('users',function (){
        return "这里是新的路由名称，名称为admin.users";
    })->name('users');
});*/
//中间件路由
/*Route::post('/hello', function (){
    //
    return "这是age路由";
})->middleware('age');*/

//中间件组路由
/*Route::group(['middleware' => ['blog']], function (){
    //如果访问时不带上blog中间件组中的age参数，则会重定向到首页
    Route::get('/', function (){
        return view('welcome');
    });

    //访问带上age参数，则跳转到正确hello路由视图
    Route::view('/hello','hello',['name'=>'学员君']);
});*/

//中间件参数
Route::put('post/{id}', function ($id){
    //
})->middleware('role:editor');

//兜底路由，兜底路由应该总是放到应用注册的所有路由的最后。
Route::fallback(function () {
    //
});
