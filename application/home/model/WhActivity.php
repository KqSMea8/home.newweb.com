<?php

/**
 * @Author: Administrator
 * @Date:   2018-11-14 11:22:45
 * @Last Modified by:   Administrator
 * @Last Modified time: 2019-02-01 15:52:36
 */
namespace app\home\model;
use think\Model;
use thiin\db;
// 活动表
class WhActivity extends Model
{
    protected $name = 'new_activity';

    /**
     * @function [根据推荐位来获取推荐的活动列表]
     * @Author   JFY
     * @DateTime 2019-02-01T15:26:45+0800
     * @return   [type]                   [description]
     */
    public function tui_list( $tui_id, $field="*", $limit=2 ){
        $list = $this
                ->field( $field )
                ->where('recommend_id','like',"%".$tui_id."%")
                ->where('open',1)
                ->limit( $limit )
                ->order('sort','desc')
                ->select()
            ;
        foreach ($list as $key => &$val) {
            $val['thumbnail'] = config('admin_path') . $val['thumbnail'];
        }
        return $list;
    }

}