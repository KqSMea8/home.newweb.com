<?php

/**
 * @Author: Administrator
 * @Date:   2018-11-14 11:22:45
 * @Last Modified by:   dingxufeng
 * @Last Modified time: 2019-04-19 19:42:34
 */
namespace app\home\model;
use think\Model;
// OFFER表
class WhOffer extends Model
{
    protected $name = 'new_offer';

    /**
     * @function [function]
     * @Author   JFY
     * @DateTime 2019-02-22T14:49:46+0800
     * @param    [type]                   $apply_stageId [description]
     * @return   [type]                                  [description]
     */
    public function get_list( $apply_stageId='' ){
        $list = $this->where('is_show',1)->where('apply_stage',$apply_stageId)->order('sort desc,add_time desc')->limit(8)->select()->toArray();
        foreach ($list as $key => &$val) {
            $val['pic'] = config('admin_path') . $val['pic'];
            $val['icon'] = config('admin_path') . $val['icon'];
        }
        return $list;
    }
}