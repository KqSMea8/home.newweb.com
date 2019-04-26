<?php

/**
 * @Author: Administrator
 * @Date:   2019-01-31 11:36:31
 * @Last Modified by:   dingxufeng
 * @Last Modified time: 2019-04-02 09:54:14
 */
namespace app\home\model;
use think\Model;
// 表单
class PageModel extends Model
{
    protected $name = 'new_tdk';

    public function tdk_info( $id, $type )
    {
    	return $this->where(array('id'=>$id,'type'=>$type))->find();
    }

   
}