<?php

/**
 * @Author: Administrator
 * @Date:   2019-01-29 16:25:35
 * @Last Modified by:   Administrator
 * @Last Modified time: 2019-01-29 16:50:57
 */
namespace app\home\model;
use think\Model;
use app\home\model\PromoteTypeModel;		//背景提升---类型
use app\home\model\PromoteRecommendModel;	//背景提升---推荐位

// 背景提升-----推荐位
class PromoteRecommendModel extends Model
{
    protected $name = 'new_bg_promote_recommend';

    
    public function indexSelect( $where=" ", $field=" ", $type=" " ,$recommend_id=[] )
    {
    	return $this->where($where,$type,$recommend_id)->field($field)->select();
    }
}