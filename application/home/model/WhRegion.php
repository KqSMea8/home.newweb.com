<?php

/**
 * @Author: Administrator
 * @Date:   2018-11-14 11:22:45
 * @Last Modified by:   Administrator
 * @Last Modified time: 2019-02-26 16:25:14
 */
namespace app\home\model;
use think\Model;
// 州表
use app\home\model\WhState;
// 地区表（寄宿家庭）
class WhRegion extends Model
{
    protected $name = 'new_region';

    /**
     * @function [获取所有地区]
     * @Author   JFY
     * @DateTime 2019-01-29T11:53:49+0800
     * @return   [type]                   [description]
     */
    public function get_all_region(){
    	$state_model = new WhState();
    	$list = $this->field('id,title')->select();
    	if(!empty($list)){
    		foreach ($list as $key => &$val) {
    			// $arr[$val['id']]['title'] = $val['title'];
    			// $arr[$val['id']]['id'] = $val['id'];
    			$arr[] = $state_model->regionId_to_state($val['id']);
            }
        }
    	return $arr;
    }

    /**
     * @function [根据id获取详细信息]
     * @Author   JFY
     * @DateTime 2019-01-29T14:07:55+0800
     * @return   [type]                   [description]
     */
    public function get_info( $regionId, $field='*' ){
        $info = $this->where('id',$regionId)->field( $field )->find();
        return $info;
    }

}