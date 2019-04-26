<?php

/**
 * @Author: Administrator
 * @Date:   2019-02-01 11:50:41
 * @Last Modified by:   dingxufeng
 * @Last Modified time: 2019-04-19 17:42:19
 */
namespace app\home\controller;

use app\home\model\TutorModel;      //服务团队模型
use app\home\model\TutorTypeModel;      
// 成功案例表
use app\home\model\WhCase;		

use think\Request;
use think\db;
class Tutor extends Common{

    public function initialize(){
        parent::initialize();
        $this->model = new TutorModel();
        $this->tutor_type_model = new TutorTypeModel();
        // 成功案例表
        $this->case_model = new WhCase();
    }


    /**
     * @function [服务团队---聚合页]
     * @Author   DingXuFeng
     * @DateTime 2019-02-01T14:37:04+0800
     * @return   [type]                   [description]
     */
    public function special()
    {

            //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);

    	//全程咨询导师
	    	$consultation = $this->model->where(['open'=>1,'type'=>1])->field('id,title,thumbnail,adept')->order('add_time desc,sort desc')->limit(6)->select();
    	//全能主申请导师
	    	$apply = $this->model->where(['open'=>1,'type'=>2])->field('id,title,thumbnail,adept')->order('add_time desc,sort desc')->select();
    	//海外同专业导师
	    	$major = $this->model->where(['open'=>1,'type'=>3])->field('id,title,thumbnail,school,major')->order('add_time desc,sort desc')->select();
    	//资深流程导师
	    	$senior_process = $this->model->where(['open'=>1,'type'=>4])->field('id,title,thumbnail,major')->order('add_time desc,sort desc')->limit(6)->select();
    	//名校外籍文笔导师
	    	$foreign_nationality = $this->model->where(['open'=>1,'type'=>5])->field('id,title,thumbnail,school,major,personal_profile')->order('add_time desc,sort desc')->select();
    	//专家督导导师
	    	$supervisor = $this->model->where(['open'=>1,'type'=>6])->field('id,title,thumbnail,major')->order('add_time desc,sort desc')->limit(5)->select();

            // 导师类型的，类型描述和导师类型擅长
            $tourt_type_list = change_key($this->tutor_type_model->field('id,describe,adept')->select()->toArray());

            $column_tdk_res = $this->pagetdk->tdk_info(6,1);

	    	$this->assign([
                'column_tdk_res'=>  $column_tdk_res,
	    		'consultation'	=>	$consultation,					
	    		'apply'	=>	$apply,
	    		'major'	=>	$major,
	    		'senior_process'	=>	$senior_process,
                'foreign_nationality'   =>  $foreign_nationality,
	    		'supervisor'	=>	$supervisor,
                'tourt_type_list'   => $tourt_type_list
	    	]);
    	return $this->fetch();
    }



    /**
     * @function [导师详情页面]
     * @Author   DingXuFeng
     * @DateTime 2019-02-01T14:37:39+0800
     * @return   [type]                   [description]
     */
    public function teacher()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);

    	$id = input('id');
    	$tutor_info = $this->model->where(['id'=>$id])->field('title,describe,keyword,name,details_portrait,cover_pic,video,adept,personal_profile,student_evaluation,experience,adept_field,offer_pic,type,add_time,edit_time')->find();
        
        if(empty($tutor_info)){
            abort(404, '页面异常');
        }

        $case_list = $this->case_model->where('tutor_id',$id)->where('is_show',1)->order('sort','desc')->limit(6)->select();


        foreach ($case_list as $key => &$val) {
            $val['head_img'] = config('admin_path') . $val['head_img'];
            if(!empty($val['xx_name'])){
                $val['xx_name'] = json_decode($val['xx_name'],true);
                $xx_logo = json_decode($val['xx_logo'],true);
            }
            $val['xx_logo'] = config('admin_path') . $xx_logo[0];
        }
        
    	//offer图片展示
    	if(!empty($tutor_info['offer_pic'])){
    		$offer_pic = json_decode($tutor_info['offer_pic']);
    	}

        $tutor_type = $this->tutor_type_model->where('id',$tutor_info['type'])->find();
    	//导师类型
    	$tutor_info['type'] = $tutor_type['tutor_type'];

        //TDk   发布时间  更新时间     百度因子规范
        $column_tdk_res['add_time'] = date('Y-m-d',$tutor_info['add_time']).'T'.date('H:i:s',$tutor_info['add_time']);
        if(!empty($tutor_info['edit_time'])){
            $column_tdk_res['edit_time'] = date('Y-m-d',$tutor_info['edit_time']).'T'.date('H:i:s',$tutor_info['edit_time']);
        }
        $column_tdk_res['title'] = $tutor_info['title'];
        $column_tdk_res['description'] = $tutor_info['describe'];
        $column_tdk_res['keywords'] = $tutor_info['keyword'];

    	$this->assign([
    		'column_tdk_res'=>	$column_tdk_res,
    		'tutor_info'	=>	$tutor_info,
    		'offer_pic'		=>	$offer_pic,
            'case_list'     =>  $case_list,
    	]);
    	return $this->fetch();
    }
}