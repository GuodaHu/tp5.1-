<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Article extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
//       定义表的名称
        $table = $this->table('articles');
//        给当前表添加字段
//        addColumn()第一个参数是字段名称;
//        第二个参数是字段的类型
//        第三个参数一般以数组形式填入，一般可以设置字段的默认填入值；字段的描述等。
        $table->addColumn('tittle','string',['comment'=>'文章标题'])->addColumn('content','string',['comment'=>'文章内容'])->addColumn('author','string',['comment'=>'文章作者','default'=>'幸福小海豚'])->create();
    }
}
