<?php

/**
 * @Author: Administrator
 * @Date:   2018-11-14 11:22:45
 * @Last Modified by:   Administrator
 * @Last Modified time: 2019-03-07 12:35:16
 */
namespace app\home\model;
use think\Model;
use think\db;
// 标签表
class WhLabel extends Model
{
    protected $name = 'new_label';

    /**
     * @function [获取标签列表]
     * @Author   JFY
     * @DateTime 2019-01-29T17:06:44+0800
     * @return   [type]                   [description]
     */
    public function get_list( $field="*" ){
    	return $this->field( $field )->select();
    }

    /**
     * @function [根据文章的id获取标签的列表]
     * @Author   JFY
     * @DateTime 2019-01-31T10:38:50+0800
     * @return   [type]                   [description]
     */
    public function actileId_get_labelList( $articleId, $field='*' ){
        $list = db('new_label_link_article')
              ->where('article_id',$articleId)
              ->select()
            ;
        // 文章ids
        $label_ids = [];
        if($list){
            foreach ($list as $key => $val) {
                $label_ids[] = $val['label_id'];
            }
        }
        $label_list = $this->field( $field )->whereIn('id',$label_ids)->select();
        return $label_list;
    }

    /**
     * @function [获取热门标签]
     * @Author   JFY
     * @DateTime 2019-02-01T16:21:05+0800
     * @return   [type]                   [description]
     */
    public function hot_label( $field="*", $limit=6 ){
        $list = $this->field( $field )->where('is_hot',1)->order('sort','desc')->limit( $limit )->select();
        return $list;
    }

    /**
     * @function [根据推荐位的id获取，标签列表]
     * @Author   JFY
     * @DateTime 2019-03-07T12:31:10+0800
     * @return   [type]                   [description]
     */
    public function tuiId_to_list( $tui_id ){
        return $this->field('id,title,href,sort')->where('recommend_id','like',"%" . $tui_id . "%")->order('sort','desc')->select()->toArray();
    }
}