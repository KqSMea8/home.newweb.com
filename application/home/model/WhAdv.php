<?php

/**
 * @Author: Administrator
 * @Date:   2018-11-14 11:22:45
 * @Last Modified by:   dingxufeng
 * @Last Modified time: 2019-04-19 19:41:18
 */
namespace app\home\model;
use think\Model;
// 广告表
class WhAdv extends Model
{
    protected $name = 'new_adv';
    /**
     * @function [根据adv_type_id获取列表]
     * @Author   JFY
     * @DateTime 2019-02-13T16:36:59+0800
     * @return   [type]                   [description]
     */
    public function typeId_to_list( $adv_type_id, $field="*" ){
        $list = $this
                ->field( $field )
                ->where('adv_type_id',$adv_type_id)
                ->where('is_show',1)
                ->order('sort desc,add_time desc')
                ->select()
                ->toArray()
            ;
        foreach ($list as $key => &$val) {
            $val['pic'] = config('admin_path') . $val['pic'];
        }
        return $list;
    }
}