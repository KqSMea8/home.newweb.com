<?php

/**
 * @Author: Administrator
 * @Date:   2018-11-14 11:22:45
 * @Last Modified by:   Administrator
 * @Last Modified time: 2019-02-28 17:53:36
 */
namespace app\home\model;
use think\Model;
// 文章类型表
class WhArticleType extends Model
{
    protected $name = 'new_article_type';

    /**
     * @function [根据applyStageId获取文章类型列表]
     * @Author   JFY
     * @DateTime 2019-01-31T10:23:20+0800
     * @return   [type]                   [description]
     */
    public function applyStageId_get_articleType( $applyStageId, $field="*", $limit=null, $ids=null ){
    	$list = $this
    		  ->field( $field )
    		  ->where('apply_stage_ids','like',"%".$applyStageId."%")
    		  ->where('status',1);
              if( !empty($ids) ){
                $list = $this->whereIn('id',$ids);
              }
    		  $list = $list->order('sort','desc')
              ->limit( $limit )
    		  ->select()
    		  ->toArray()
    	;
    	return $list;
    }

    /**
     * @function [获取所有文章类型]
     * @Author   JFY
     * @DateTime 2019-01-31T12:06:08+0800
     * @return   [type]                   [description]
     */
    public function get_list( $field="*" ){
    	$list = $this->field( $field )->where('status',1)->order('sort','desc')->select()->toArray();
    	return $list;
    }
}