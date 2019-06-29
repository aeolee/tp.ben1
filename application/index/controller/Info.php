<?php

namespace app\index\controller;

use think\Controller;



class Info extends Controller
{
    /**
     * 获取当前请求变量
     * @access public
     */
    public function param()
    {
        echo '请求变量';
        dump($this->request->param());
        echo '获取id和name变量';
        dump($this->request->only(['id','name']));
        return '';
    }
    /**
     * 获取当前访问域名
     * @access public
     */
    public function domain()
    {
        return $this->request->domain();
    }

    /**
     * 获取当前请求类型
     * @access public
     */
    public function method()
    {
        //用助手函数
        return request()->method();
    }

    /**
     * 获取当前URL
     * @access public
     */
    public function url()
    {
        return $this->request->url();
    }

    /**
     * 获取当前Pathinfo地址
     * @access public
     */
    public function pathinfo()
    {
        return $this->request->pathinfo();
    }

    /**
     * 获取当前URL后缀
     * @access public
     */
    public function ext()
    {
        return $this->request->ext();
    }

    /**
     * 获取当前模块名
     * @access public
     */
    public function module()
    {
        return $this->request->module();
    }

    /**
     * 获取当前控制器名
     * @access public
     */
    public function controller()
    {
        return $this->request->controller();
    }

    /**
     * 获取当前操作名
     * @access public
     */
    public function action()
    {
        return $this->request->action();
    }
}
