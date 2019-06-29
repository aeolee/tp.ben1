<?php

namespace app\index\controller;

use think\Controller;

class Template extends Controller
{
    //
    public function index()
    {
        $this->assign('title','Welocome');
        $this->assign('names',['aeolus','lookCloud']);
        return $this->fetch('index/hello');
    }

    //
    public function user()
    {
        return $this->fetch('index/user',[
            'users' => [
                ['name' => '张三','age' => 20],
                ['name' => '李四','age' => 30],
                ['name' => '王五','age' => 25],
            ],
        ]);
    }
}
