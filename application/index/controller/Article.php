<?php

namespace app\index\controller;

use app\common\model\Articles;
use app\common\model\Users;
use Phinx\Migration\MigrationInterface;
use think\Controller;
use think\Db;
use think\Request;

class Article extends Controller
{
   public function index(){
//       获取文章表中所有的数据
//    $articles = Articles::select();
//       halt($articles);
//       使用分页方法获取文章表中的数据
        $articles = Articles::paginate(4);
       return view('',compact('articles'));
   }
    public function add(){
//        return '我是第二种路由规则展示内容';
        return view();
    }
    public function store(Request $request){
//首先获取post数据
        $post = $request->param();
//        halt($post);
//      向post数据中添加作者信息
        $post['author']=session('username');
//        halt($post);
        Articles::create($post);
        return $this->success('文章添加成功！','/index/article/index');
    }
    public function edit(Request $request){
        $id = $request->param('id');
//        halt($id);
//           获取get参数的id值
//        获取对应参数的文章表数据
        $article = Articles::find($id);
//        halt($article);
        return view('',compact('article'));
    }
    public function update(Request $request){
//        修改数据方法一
//        echo '这是文章修改之后提交的页面';
//        第一步：获取Get参数中的ID值
//        $id = $request->param('id');
//        获取对应参数的文章表数据
//        $article =Articles::find($id);
//        $article->tittle =$request->param('tittle');
//        $article->content =$request->param('content');
////        $article->save();
//        返回文章列表页
//        return $this->success('文章编辑成功！','/index/article/index');

//        修改数据方法二
//        首先同样是获取Get参数中的ID值
       /* $id = $request->param('id');
//            halt($id);
//        使用对应表的数据模型调用update()方法来进行数据修改
            Articles::where('id',$id)->update([
                'tittle'=>$request->param('tittle'),
                'content'=>$request->param('content')
            ]);
        return $this->success('文章编辑成功！！！','/index/article/index');*/
//        修改数据方法三
//        还是首先获取get参数中的ID值
        $id = $request->param('id');
//        接收Post数据
        $post = $request->param();
//        然后是获取对应参数的文章数据
        $article = Articles::find($id);
        $article->save($post);
        return $this->success('文章修改成功！！！','/index/article/index');

    }
        public function delete(Request $request){
//    获取get参数中的ID值
       $id = $request->param('id');
//            删除方法一
//            首先找到对应ID文章的数据
            /*   $article = Articles::find($id);
              $article->delete();
  //            然后返回并提示删除完成信息
          return $this->success('删除成功！！！','/index/article/index');*/

//            删除方法二
//            使用模型删除单个主键ID值的数据
        Articles::destroy($id);
//            删除多个主键ID值的数据
//        Articles::destroy([1,2,3]);
            return $this->success('删除成功','/index/article/index');

        }





}
