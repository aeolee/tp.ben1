<?php

namespace app\index\controller;

use think\Controller;

class Hello extends Controller
{
    //
    public function index($name="test")
    {
        return 'Hello,' . $name . '!';
    }

    public function tes($name='tes!!!')
    {
         return '测试路由参数name = ' . $name; 
    }
}
