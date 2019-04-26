<?php

/**
 * @Author: Administrator
 * @Date:   2018-11-14 11:22:45
 * @Last Modified by:   Administrator
 * @Last Modified time: 2019-02-26 17:02:34
 */
namespace app\home\model;
use think\Model;
// 州表（寄宿家庭）
class WhState extends Model
{
    protected $name = 'new_state';

    /**
     * @function [根据regionId获取state列表]
     * @Author   JFY
     * @DateTime 2019-01-28T19:03:39+0800
     * @return   [type]                   [description]
     */
    public function regionId_to_state(  ){
        // if(!empty($regionId)){
            $list = $this->field('id,region_id,title')->order('sort asc')->select()->toArray();
        //     foreach ($list as $key => $val) {
        //         $arr[] = $val;
        //     }
        // // }
        return $list;
    }

    /**
     * @function [根据id获取详细信息]
     * @Author   JFY
     * @DateTime 2019-01-29T14:07:55+0800
     * @return   [type]                   [description]
     */
    public function get_info( $stateId, $field='*' ){
        $info = $this->where('id',$stateId)->field( $field )->find();
        return $info;
    }

}