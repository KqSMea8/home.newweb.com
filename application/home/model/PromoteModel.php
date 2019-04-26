<?php

/**
 * @Author: Administrator
 * @Date:   2019-01-29 16:25:35
 * @Last Modified by:   dingxufeng
 * @Last Modified time: 2019-04-19 19:40:05
 */
namespace app\home\model;
use think\Model;
use app\home\model\PromoteTypeModel;		//背景提升---类型
use app\home\model\PromoteRecommendModel;	//背景提升---推荐位
// 背景提升
class PromoteModel extends Model
{
    protected $name = 'new_bg_promote';



    /**
     * @function [模型关联----一对一]
     * @Author   DingXuFeng
     * @DateTime 2019-01-30T09:31:32+0800
     * @return   [type]                   [description]
     */
    public function info()
    {
        return $this->hasOne('PromoteTypeModel','id','type');
    }
    
    /**
     * @function [根据申请阶段Id获取背景提升推荐列表]
     * @Author   JFY
     * @DateTime 2019-02-01T15:58:32+0800
     * @return   [type]                   [description]
     */
    public function tui_list( $apply_stage_id, $field="*", $limit=2 ){
        $list = $this->field( $field )->where('phase',$apply_stage_id)->where('open',1)->order('sort','desc')->limit( $limit )->select();
        foreach ($list as $key => &$val) {
            $val['thumbnail'] = config('admin_path') . $val['thumbnail'];
        }
        return $list;
    }

    /**
     * @function [根据类型获取背景提升列表]
     * @Author   JFY
     * @DateTime 2019-02-14T14:37:38+0800
     * @return   [type]                   [description]
     */
    public function type_to_list( $typeId, $field="*", $limit='' ,$recommend_id = '',$phase = ''){

        $list = $this->field( $field )->where('type',$typeId)->where('open',1)->where('recommend_id','like','%'.$recommend_id.'%')->where('phase','like','%'.$phase.'%')->limit( $limit )->order('sort desc,add_time desc')->select()->toArray();
        foreach ($list as $key => &$val) {
            $val['thumbnail'] = config('admin_path') . $val['thumbnail'];
            if($val['is_hot'] == 1){
                $list_arr['hot'][] = $val;
            }else{
                $list_arr['cool'][] = $val;
            }
        }
        return $list_arr;
    }

    /**
     * @function [根据推荐位置获取列表]
     * @Author   JFY
     * @DateTime 2019-02-18T20:12:33+0800
     * @return   [type]                   [description]
     */
    public function recommendId_to_list( $recommendId, $field="*",$phase, $limit='' ){
        $list = $this->where('recommend_id','like',"%".$recommendId."%")->where('phase','like',"%".$phase."%")->order('sort desc')->field( $field )->where('open',1)->limit( $limit )->select()->toArray();
        foreach ($list as $key => &$val) {
            $val['thumbnail'] = config('admin_path') . $val['thumbnail'];
        }

        return $list;
    }

}