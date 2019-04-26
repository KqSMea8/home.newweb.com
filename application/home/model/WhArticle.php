<?php

/**
 * @Author: Administrator
 * @Date:   2018-11-14 11:22:45
 * @Last Modified by:   dingxufeng
 * @Last Modified time: 2019-04-24 14:41:00
 */
namespace app\home\model;
use think\Model;
// 文章表
class WhArticle extends Model
{
    protected $name = 'new_article';

    /**
     * @function [推荐文章列表]
     * @Author   JFY
     * @DateTime 2019-02-01T15:02:25+0800
     * @return   [type]                   [description]
     */
    public function tui_list( $aritcleId, $field="*", $limit='', $applystageId='', $articleTypeId='' ){
    	$list = $this
    			->field( $field )
    			->where('id','<>',$aritcleId);
                if(!empty($applystageId)){
                    $list = $list->where('apply_stage',$applystageId);
                }
                if(!empty($articleTypeId)){
                    $list = $list->where('type',$articleTypeId);
                }
    			$list = $list->where('is_show',1)
    			->limit($limit)
    			->order('sort desc,add_time desc')
    			->select()
    			->toArray()
    		;
    	foreach ($list as $key => &$val) {
    		// $val['cover_pic'] = config('admin_path') . $val['cover_pic'];
    		$val['add_time'] = date('Y-m-d',$val['add_time']);
    	}
    	return $list;
    }

    /**
     * @function [根据类型获取推荐列表（首页）1，高中，2、本科，3、研究生]
     * @Author   JFY
     * @DateTime 2019-02-11T17:29:59+0800
     * @return   [type]                   [description]
     */
    public function applystageId_to_list( $applystageId, $field='*', $limit=7, $tui_id=1, $order='index_sort' ){
        $tui_list = $this
                    ->where('is_show',1)
                    ->where('apply_stage',$applystageId)
                    ->where('tui_ids','like',"%" . $tui_id . "%")
                    ->field( $field )
                    ->limit( $limit )
                    ->order( "add_time desc,$order desc" )
                    ->select()
                    ->toArray()
                    ;
        foreach ($tui_list as $key => &$val) {
            $val['cover_pic'] = config('admin_path') . $val['cover_pic'];
        }
        return $tui_list;
    }

    /**
     * @function [根据类型获取文章列表]
     * @Author   JFY
     * @DateTime 2019-02-14T10:59:33+0800
     * @return   [type]                   [description]
     */
    public function type_to_list( $type, $field="*", $applystageId='', $order='sort' ){
        $list = $this
                ->field( $field );
                if(!empty($applystageId)){
                    $list = $list->where('apply_stage',$applystageId);
                }
                $list = $list->where('type',$type)
                ->limit(5)
                ->order( $order ,'desc')
                ->where('is_show',1)
                ->select()
                ->toArray()
            ;
        return $list;
    }

    /**
     * @function [根据文章推荐位获取列表]
     * @Author   JFY
     * @DateTime 2019-03-01T08:57:04+0800
     * @return   [type]                   [description]
     */
    public function tuiId_to_list( $type_id, $tui_id, $applystageId, $limit=5 ){
        $list = $this->where('type',$type_id)->where('apply_stage',$applystageId)->where('is_show',1)->order(' sort desc,add_time desc')->limit($limit)->select()->toArray();
        foreach ($list as $key => &$val) {
            if(!empty($val['timing'])){
                $val['add_time'] = $val['timing'];
            }else{
                $val['add_time'] = $val['add_time'];
            }
        }
        return $list;
    }



}