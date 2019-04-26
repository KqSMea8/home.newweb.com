<?php

/**
 * @Author: Administrator
 * @Date:   2018-11-14 11:22:45
 * @Last Modified by:   dingxufeng
 * @Last Modified time: 2019-04-19 19:41:59
 */
namespace app\home\model;
use think\Model;
// 成功案例表
class WhCase extends Model
{
    protected $name = 'new_case';
    
    // 根据type获取成功案例列表
    public function type_to_list( $apply_stage, $field='*', $limit='', $tui_id='' ){
        $list = $this
            ->field( $field )
            ->where('is_show',1)
            ->where('apply_stage',$apply_stage);
            if(!empty($tui_id)){
                $list = $list->where('tui_ids','like',"%".$tui_id."%");
            }
            $list = $list->order('sort desc,add_time desc')
            ->limit( $limit )
            ->select()
            ->toArray()
        ;
        foreach ($list as $key => &$val) {
            if(!empty($val['xx_offer'])){
                $offer_arr = json_decode($val['xx_offer'],true);
                $val['xx_offer'] = config('admin_path') . $offer_arr[0];
            }
            if(isset($val['head_img'])){
                $val['head_img'] = config('admin_path') . $val['head_img'];
            }

            if(isset($val['xx_name'])){
                $xx_name = json_decode($val['xx_name'],true);
                $val['xx_name'] = $xx_name[0];
            }

            if(isset($val['xx_major'])){
                $xx_major = json_decode($val['xx_major'],true);
                $val['xx_major'] = $xx_major[0];
            }

            if(isset($val['xx_degree'])){
                $xx_degree = json_decode($val['xx_degree'],true);
                $val['xx_degree'] = $xx_degree[0];
            }

        }
        return $list;
    }


}