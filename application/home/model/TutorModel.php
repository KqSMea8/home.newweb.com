<?php

/**
 * @Author: Administrator
 * @Date:   2019-01-31 11:36:31
 * @Last Modified by:   Administrator
 * @Last Modified time: 2019-02-14 16:37:33
 */
namespace app\home\model;
use think\Model;
// 活动讲座
class TutorModel extends Model
{
    protected $name = 'new_tutor';

    /**
     * @function [根据类型获取导师列表]
     * @Author   JFY
     * @DateTime 2019-02-14T16:35:53+0800
     * @return   [type]                   [description]
     */
    public function sister_list( $type, $field="*" ){
    	$list = $this->field( $field )->where('open',1)->order('sort','desc')->select()->toArray();
    }
}