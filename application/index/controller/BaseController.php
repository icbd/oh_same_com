<?php

namespace app\index\controller;

use think\Controller;

class BaseController extends Controller
{
    protected function _initialize()
    {
        parent::_initialize();

        // 页面标签替换
        $this->view->replace([
            '__PUBLIC__/' => '/', //本站入口文件同级目录
            '__STATIC__/' => '/static/', //静态资源
        ]);


        $this->view->is_logged_in = false;
    }
}