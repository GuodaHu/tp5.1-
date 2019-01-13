<?php
namespace app\index\controller;

use app\common\model\Users;
use think\Db;
use think\facade\Cache;

class Index
{
    public function index()
    {

//        使用Cache类来存储缓存数据
//Cache::set('name','大帅哥');
//        获取缓存数据
//halt(Cache::get('name'));
//存储一个有效期为5秒的缓存数据
//Cache::set('username','勒布朗.詹姆斯',100);
//        删除缓存中的某个数据
//Cache::rm('username');
//
//取出某个缓存数据然后将其从缓存中删除
//Cache::pull('username');
//        halt(Cache::get('username'));

//        对缓存中数据操作方法2之  cache()方法
//        cache('age','28');
//        echo cache('age');
//        用cache()方法设置一个有效的缓存时间
//        cache('sex','男',5);
//        用cache()方法删除某个缓存
//        cache('born','上海');
//        cache('born',null);
//        删除缓存数据
//        cache(null);



        return view();
//        下面获取users表中的所有数据(获取数据表数据方法1)
//      $users = Users::select();
//        halt($users);
//       获取某个主键ID值得数据(获取数据表数据方法2)
//              $users = Users::find(4);
//        halt($users);
//如果需要找到users表中nickname字段值是大果果数据的实现方法如下：(获取数据表数据方法3)
//     $users = Users::where('nickname','=','颜色不一样的烟火')->select();
//        halt($users);
//        还可以用TP框架中特有的Db()类获取相应表的数据，(获取数据表数据方法4)
//    $users = Db::table('users')->select();
//        halt($users);
//        另外还可以使用助手函数获取数据（获取表数据的方法5）
//        $users = \Db('users')->find(4);
//        halt($users);
//        $user=[
//           [ 'id'=>1,
//               'name'=>'胡大果',
//               'nickname'=>'hudaguo'],
//            [
//                'id'=>2,
//                'name'=>'马云',
//                'nickname'=>'mayun'
//            ],
//            [
//                'id'=>3,
//                'name'=>'刘强东',
//                'nickname'=>'liuqiangdong'
//            ],
//        ];
//        halt(compact('user'));
//        return view('',compact('user'));
       }
//如果在定义路由的时候，需要传递一些参数，可以用该路由规则后面加冒号和参数值。
//该参数值会自动的被传递给当前路由所调用的方法，作为方法的参数自动被接收。
    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
