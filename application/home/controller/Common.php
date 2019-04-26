<?php
namespace app\home\controller;
use think\Db;
use clt\Leftnav;
use think\Controller;

// TDK
use app\home\model\PageModel;

class Common extends Controller{

    protected $pagesize,$changyan;
    public function initialize(){
        if(isMobile()){
            header("Location:http://m.beliwin.com");
        }

        //获取控制方法
        $action = request()->action();
        $controller = request()->controller();

        //TDK  模型
        $this->pagetdk = new PageModel();
    }
  

}