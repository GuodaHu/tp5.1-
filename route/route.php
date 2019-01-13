<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//下面get后面第一个参数是定义的路由规则，
//第二个参数是该路由规则调用的方法或找的控制器中的方法。
Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});
//我自定义一个路由规则
Route::get('alist',function (){
    return '我是加载文章列表的方法';
});
//定义第二种路由规则
//需要注意的是：若设置了路由器，访问指定方法的时候，只能通过路由的方式(即：/方法名)，不能再通过 模块/控制器/方法名 的方式访问。
Route::get('add','index/article/add');
Route::get('code','index/login/code');

Route::get('slist','index/stu/index');
//定义路由规则
//下面resource后面第一个参数是定义的路由规则；
//第二个参数是该规则去找的控制器的方法名
//资源路由会自动根据资源路由所定义的方式，生成对应的每个方法的请求方式和路由地址。
Route::resource('stu','index/Stu');
Route::get('hello/:name', 'index/hello');

return [

];
