<?php

/**
 * @Author: Administrator
 * @Date:   2019-01-31 11:36:31
 * @Last Modified by:   dingxufeng
 * @Last Modified time: 2019-04-19 19:41:09
 */
namespace app\home\model;
use think\Model;
use app\home\model\TutorModel;      //导师表
// 活动讲座
class TutorTypeModel extends Model
{
    protected $name = 'new_tutor_type';
    // 获取导师团队列表
    public function teacher_team_list(){
    	$return = [];
    	// 导师表
    	$teacher_model = new TutorModel();

    	// 类型列表
    	$return['type_list'] = $this->select()->toArray();

    	//全程咨询导师
	    	$type1 = $teacher_model->where(['open'=>1,'type'=>1])->field('id,title,thumbnail,adept,type')->limit(6)->order('sort desc,add_time desc')->select()->toArray();
    	//全能主申请导师
	    	$type2 = $teacher_model->where(['open'=>1,'type'=>2])->field('id,title,thumbnail,adept,type')->limit(6)->order('sort desc,add_time desc')->select()->toArray();
    	//海外同专业导师
	    	$type3 = $teacher_model->where(['open'=>1,'type'=>3])->field('id,title,thumbnail,school,major,type,add_time')->limit(6)->order('sort desc,add_time desc')->select()->toArray();
    	//资深流程导师
	    	$type4 = $teacher_model->where(['open'=>1,'type'=>4])->field('id,title,thumbnail,adept,type')->limit(6)->order('sort desc,add_time desc')->select()->toArray();
    	//名校外籍文笔导师
	    	$type5 = $teacher_model->where(['open'=>1,'type'=>5])->field('id,title,thumbnail,school,major,type')->limit(6)->order('sort desc,add_time desc')->select()->toArray();
    	//专家督导导师-----再议
	    	$type6 = $teacher_model->where(['open'=>1,'type'=>6])->field('id,title,thumbnail,adept,type,major')->limit(6)->order('sort desc,add_time desc')->select()->toArray();

        //添加静态链接
        $return['type_list'][0]['rewrite'] = 'teacher';
        $return['type_list'][1]['rewrite'] = 'teacher';
        $return['type_list'][2]['rewrite'] = 'sister';
	    $return['type_list'][0]['teacher_list'] = $type1;
	    $return['type_list'][1]['teacher_list'] = $type2;
	    $return['type_list'][2]['teacher_list'] = $type3;
	    $return['type_list'][3]['teacher_list'] = $type4;
	    $return['type_list'][4]['teacher_list'] = $type5;
	    $return['type_list'][5]['teacher_list'] = $type6;

	    return $return;
    }

}