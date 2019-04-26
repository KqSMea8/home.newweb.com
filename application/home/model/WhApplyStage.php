<?php

/**
 * @Author: Administrator
 * @Date:   2018-11-14 11:22:45
 * @Last Modified by:   Administrator
 * @Last Modified time: 2019-02-01 17:23:15
 */
namespace app\home\model;
use think\Model;
// 文章类型表
use app\home\model\WhArticleType;
// 申请阶段表
class WhApplyStage extends Model
{
    protected $name = 'new_apply_stage';

    /**
     * @function [获取列表]
     * @Author   JFY
     * @DateTime 2019-01-31T10:11:32+0800
     * @return   [type]                   [description]
     */
    public function get_list( $field='*' ){
    	return $this->field( $field )->where('status',1)->order('sort','desc')->select()->toArray();
    }
}