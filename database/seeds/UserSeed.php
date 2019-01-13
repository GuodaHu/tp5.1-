<?php

use think\migration\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
//用db()方法定义往哪个表里填充数据，然后用insert()方法设置插入的数据。
        db('users')->insert(['username'=>'幸福的果果','password'=>md5('admin888'),'nickname'=>'大果果']);
        db('users')->insert(['username'=>'幸福的萌萌','password'=>md5('admin888')]);
        db('users')->insert(['username'=>'潇洒的屌丝','password'=>md5('admin888')]);
        db('users')->insert(['username'=>'快乐的男神','password'=>md5('admin888')]);
    }
}