<?php

/**
 * @Author: Administrator
 * @Date:   2018-11-14 11:22:45
 * @Last Modified by:   dingxufeng
 * @Last Modified time: 2019-04-19 19:42:25
 */
namespace app\home\model;
use think\Model;
// 城市表
use app\home\model\WhCity;
// 州表
use app\home\model\WhState;
// 寄宿家庭表
class WhFamily extends Model
{
    protected $name = 'new_family';

    /**
     * @function [根据id获取详细信息]
     * @Author   JFY
     * @DateTime 2019-01-29T17:26:19+0800
     * @return   [type]                   [description]
     */
    public function get_info( $familyId ){
    	return $this->where('id',$familyId)->where('is_show',1)->find();
    }

    /**
     * @function [获取推荐列表]
     * @Author   JFY
     * @DateTime 2019-01-29T18:27:06+0800
     * @return   [type]                   [description]
     */
    public function tui_list( $field="*",$id ){
    	$city_model = new WhCity();
    	$state_model = new WhState();
    	
    	$list = $this->field( $field )->where('id','<>',$id)->where('is_show',1)->limit(4)->order('sort desc,add_time desc')->select()->toArray();
    	if(!empty($list)){
    		foreach ($list as $key => &$val) {
    			$val['cover_pic'] = config('admin_path') . $val['cover_pic'];
    			// 城市信息
		        $city_info = $city_model->get_info($val['city_id'],'id,title,state_id');
		        // 州的信息
		        $state_info = $state_model->get_info($city_info['state_id'],'id,title');

		        $val['city_id'] = $city_info['title'];
		        $val['state_id'] = $state_info['title'];
    		}
    	}
    	return $list;
    }

    /**
     * @function [高中页面的寄宿家庭实景]
     * @Author   JFY
     * @DateTime 2019-02-13T17:59:24+0800
     * @return   [type]                   [description]
     */
    public function sj_list(){
        $list = $this->field('id,title,pics,cover_pic')->where('is_show',1)->where('tui_ids',5)->order('sort desc,add_time desc')->limit(10)->select()->toArray();
        foreach ($list as $key => &$val) {
            // $pics_arr = json_decode($val['pics'],true);
            // $val['cover_pic'] = config('admin_path') . $pics_arr[0];
            $val['cover_pic'] = config('admin_path') . $val['cover_pic'];
        }
        return $list;
    }

}