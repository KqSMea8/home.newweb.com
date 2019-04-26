<?php

/**
 * @Author: Administrator
 * @Date:   2019-01-31 11:36:31
 * @Last Modified by:   dxf250
 * @Last Modified time: 2019-03-19 10:02:49
 */
namespace app\home\model;
use think\Model;
// 表单
class FormModel extends Model
{
    protected $name = 'new_form';

    /**
     * 根据获取提交手机号
     * @param $where
     */
    public function iphoneCount($where)
    {
        return $this->where($where)->count();
    }
}