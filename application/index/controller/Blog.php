<?php

namespace app\index\controller;

use think\Controller;

class Blog extends Controller
{
    //
    public function index()
    {
        return '执行列表';
    }

    public function create()
    {
        return '执行新增操作';
    }

    public function save()
    {
        return '执行保存';
    }

    public function read($id = '11')
    {
        return '查看 【id：' . $id . '】';
    }

    public function edit($id = '11')
    {
        return '编辑 【id：' . $id . '】';
    }

    public function update($id = '11')
    {
        return '更新 【id：' . $id . '】';
    }

    public function delete($id = '11')
    {
        return '删除 【id：' . $id . '】';
    }
}
