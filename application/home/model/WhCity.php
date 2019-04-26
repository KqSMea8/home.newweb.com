<?php

/**
 * @Author: Administrator
 * @Date:   2018-11-14 11:22:45
 * @Last Modified by:   Administrator
 * @Last Modified time: 2019-02-28 13:46:49
 */
namespace app\home\model;
use think\Model;
use app\home\model\WhFamily;
// 城市表 (寄宿家庭)
class WhCity extends Model
{
    protected $name = 'new_city';

    /**
     * @function [获取城市列表]
     * @Author   JFY
     * @DateTime 2019-01-29T13:59:44+0800
     * @return   [type]                   [description]
     */
    public function get_list( $field='*' ){
    	return $this->field( $field )->select()->toArray();
    }

    /**
     * @function [获取城市的详细信息]
     * @Author   JFY
     * @DateTime 2019-01-29T14:14:23+0800
     * @return   [type]                   [description]
     */
    public function get_info( $ciytId, $field='*' ){
        $info = $this->where('id',$ciytId)->field( $field )->find();
        return $info;
    }

}