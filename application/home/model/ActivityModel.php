<?php

/**
 * @Author: Administrator
 * @Date:   2019-01-31 11:36:31
 * @Last Modified by:   dxf250
 * @Last Modified time: 2019-03-25 09:56:51
 */
namespace app\home\model;
use think\Model;
// 活动讲座
class ActivityModel extends Model
{
    protected $name = 'new_activity';

    /**
     * @function [模型关联----一对一]
     * @Author   DingXuFeng
     * @DateTime 2019-01-30T09:31:32+0800
     * @return   [type]                   [description]
     */
    public function info()
    {
        return $this->hasOne('ActivityTypeModel','id');
    }

    /**
     * @function [根据推荐位的id，获取活动列表]
     * @Author   JFY
     * @DateTime 2019-02-11T16:46:33+0800
     * @return   [type]                   [description]
     */
    public function recommendId_to_list( $recommendId, $field='*', $limit=2 ){
        $list = $this->where('open',1)->where('recommend_id','like',"%" . $recommendId . "%")->field( $field )->limit( $limit )->order('sort','desc')->select();
        foreach ($list as $key => &$val) {
            $val['thumbnail'] = config('admin_path') . $val['thumbnail'];
        }
        return $list;
    }


    /**
     * @function [根据推荐位来获取推荐的活动列表]
     * @Author   JFY
     * @DateTime 2019-02-01T15:26:45+0800
     * @return   [type]                   [description]
     */
    public function tui_list( $tui_id, $field="*",$phase='', $limit=2 ){
        $list = $this
                ->field( $field )
                ->where('recommend_id','like',"%".$tui_id."%")
                ->where('open',1)
                ->where('phase',$phase)
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