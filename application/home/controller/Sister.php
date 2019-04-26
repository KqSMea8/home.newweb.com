<?php

/**
 * @Author: Administrator
 * @Date:   2019-02-01 11:50:41
 * @Last Modified by:   dxf250
 * @Last Modified time: 2019-03-13 15:41:24
 */
namespace app\home\controller;

use app\home\model\TutorModel;		//服务团队模型
use app\home\model\TutorTypeModel;  
use think\Request;
use think\db;
class Sister extends Common{

    public function initialize(){
        parent::initialize();
        $this->model = new TutorModel();
        $this->tutor_type_model = new TutorTypeModel();

    }



    /**
     * @function [学长学姐详情页面]
     * @Author   DingXuFeng
     * @DateTime 2019-02-01T14:37:39+0800
     * @return   [type]                   [description]
     */
    public function detail()
    {

        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);


    	$id = input('id');
    	$sister_info = $this->model->where(['id'=>$id])->field('title,describe,keyword,name,details_portrait,cover_pic,video,school,major,degree,personal_profile,student_evaluation,type,add_time')->find();


        if(empty($sister_info)){
            abort(404, '页面异常');
        }


        $tutor_type = $this->tutor_type_model->where('id',$tutor_info['type'])->find();
        //导师类型
        $sister_info['type'] = $tutor_type['tutor_type'];

        
    	//TDk   发布时间  更新时间     百度因子规范
        $column_tdk_res['add_time'] = date('Y-m-d',$sister_info['add_time']).'T'.date('H:i:s',$sister_info['add_time']);
        if(!empty($sister_info['edit_time'])){
            $column_tdk_res['edit_time'] = date('Y-m-d',$sister_info['edit_time']).'T'.date('H:i:s',$sister_info['edit_time']);
        }
        $column_tdk_res['title'] = $sister_info['title'];
        $column_tdk_res['description'] = $sister_info['describe'];
        $column_tdk_res['keywords'] = $sister_info['keyword'];

    	$this->assign([
    		'column_tdk_res'=>	$column_tdk_res,
    		'sister_info'	=>	$sister_info,
    	]);
    	return $this->fetch();
    }
}