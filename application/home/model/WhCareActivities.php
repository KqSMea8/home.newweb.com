<?php

/**
 * @Author: Administrator
 * @Date:   2019-01-31 11:36:31
 * @Last Modified by:   Administrator
 * @Last Modified time: 2019-03-02 13:50:13
 */
namespace app\home\model;
use think\Model;
// 寄宿家庭---关怀活动
class WhCareActivities extends Model
{
    protected $name = 'new_care_activities';
    /**
     * @function [获取关怀活动列表]
     * @Author   JFY
     * @DateTime 2019-02-14T09:37:33+0800
     * @return   [type]                   [description]
     */
    public function get_list( $field="*" ){
    	$list = $this->field( $field )->where('is_show',1)->order('sort','desc')->limit(10)->select()->toArray();
    	foreach ($list as $key => &$val) {
    		$val['cover_pic'] = config('admin_path') . $val['cover_pic'];
    	}
    	return $list;
    }
}