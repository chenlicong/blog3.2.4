<?php
namespace Home\Controller;

use Home\Controller\BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        $this->title = "首页";
        $this->keywords = "首页关键字";
        $this->description = "首页描述";
        $this->display();
    }

}