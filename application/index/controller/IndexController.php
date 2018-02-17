<?php

namespace app\index\controller;

class IndexController extends BaseController
{
    public function home()
    {
        return $this->fetch('home');
    }
}
