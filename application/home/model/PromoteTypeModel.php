<?php

/**
 * @Author: Administrator
 * @Date:   2019-01-29 16:25:35
 * @Last Modified by:   dingxufeng
 * @Last Modified time: 2019-04-19 17:31:08
 */
namespace app\home\model;
use think\Model;

// 背景提升---类型表
class PromoteTypeModel extends Model
{
    protected $name = 'new_bg_promote_type';

    /**
     * @function [获取背景提升类型列表]
     * @Author   JFY
     * @DateTime 2019-02-11T15:29:52+0800
     * @return   [type]                   [description]
     */
    public function get_list( $field="*", $ids='' ){
        if( empty($ids) ){
            $list = $this->field( $field )->select()->toArray();
        }else{
            $list = $this->field( $field )->whereNotIn('id',$ids)->select()->toArray();
        }
        return $list;
    }

    
}