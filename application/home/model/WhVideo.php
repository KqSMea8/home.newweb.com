<?php

/**
 * @Author: Administrator
 * @Date:   2018-11-14 11:22:45
 * @Last Modified by:   dingxufeng
 * @Last Modified time: 2019-04-19 19:42:49
 */
namespace app\home\model;
use think\Model;
// 视频表
class WhVideo extends Model
{
    protected $name = 'new_video';

    /**
     * @function [根据videoTypeId获取视频列表]
     * @Author   JFY
     * @DateTime 2019-02-13T17:16:35+0800
     * @return   [type]                   [description]
     */
    public function videoTypeId_to_list( $videoTypeId ){
    	$list = $this
    			->where('video_type_id',$videoTypeId)
    			->where('is_show',1)
    			->order('sort desc,add_time desc')
    			->select()
    			->toArray()
    		;
    	foreach ($list as $key => &$val) {
    		$val['video'] = config('admin_path') . $val['video'];
    		$val['cover_pic'] = config('admin_path') . $val['cover_pic'];
    	}

    	return $list;
    }
}