<?php

/**
 * @Author: Administrator
 * @Date:   2019-01-31 11:35:55
 * @Last Modified by:   dingxufeng
 * @Last Modified time: 2019-04-19 15:30:12
 */
namespace app\home\controller;
use app\home\model\ActivityModel;			//活动模型
use app\home\model\ActivityTypeModel;		//活动---类型
use app\home\model\PromoteModel;			//背景提升
use app\home\model\PromoteTypeModel;        //背景提升---类型
// 成功案例表
use app\home\model\WhCase;
use think\Request;
use think\db;
class Activity extends Common{

    public function initialize(){
        parent::initialize();
        $this->activity_model = new ActivityModel();
        $this->activity_type_model = new ActivityTypeModel();
        $this->promote_model = new PromoteModel();
        $this->Promote_type_model = new PromoteTypeModel();
        $this->case_model = new WhCase();

        $this->phase_arr = [['id'=>1,'phase_type'=>'高中'],['id'=>2,'phase_type'=>'本科'],['id'=>3,'phase_type'=>'研究生']];
    }


    /**
     * @function [活动讲座---筛选页]
     * @Author   DingXuFeng
     * @DateTime 2019-01-31T15:59:46+0800
     * @return   [type]                   [description]
     */
    public function activity_list()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);


    	//活动讲座类型
        $type = input('type');
        //申请阶段
        $stage_type = input('stage_type');
        // 当前页
        $now_page = input('page')?input('page'):1;

        //判断是否有申请阶段类型 
        if(!empty($stage_type)){
            $phase_arr = $this->activity_model->where('phase',$stage_type)->field('type')->select();
            foreach ($phase_arr as $k => $v) {
                $arr['type'][] = $v['type'];
                $phase_type = array_unique($arr['type']);
            }
            //作为筛选
            if( $type == 0){
                $where['type'] = $phase_type;
            }else{
                $where['type'] = $type;
            }
            $where['phase'] = $stage_type;

        }else{
            $phase_arr = $this->activity_type_model->field('id')->select();
            foreach ($phase_arr as $key => $val) {
                $phase_type[] = $val['id'];
            }
            //作为筛选
            if( $type == 0){
                $where['type'] = $phase_type;
            }else{
                $where['type'] = $type;
            }

        }

        $activity_list = Db::table('clt_new_activity')
            ->alias('a')
            ->join('clt_new_activity_articletype t','a.type = t.id','left')
            ->field('a.id,a.title,a.type,a.thumbnail,a.end_time,a.lecture_time,a.lecture_venue,t.art_title,t.art_describe,t.art_keyword,t.rewrite')
            ->where('open',1)
            ->where($where)
            ->order('add_time desc,sort desc')
            ->paginate(8,false,[
                'page'=>$now_page,
                // 'query' => request()->param(),//不丢失已存在的url参数
            ]);
        // 获取分页显示
        $page = $activity_list->render();
        //判断时间是否过期
        foreach ($activity_list as $key => &$val) {
            if( time() >= strtotime(date('Y-m-d',$val['end_time']).' 23:59:59') ){
                $end_time[$key]['end'] = 0;
            }else{
                $end_time[$key]['end'] = 1;
            }
        }


        //TDK
        $num = $stage_type - 1;
        $str = $this->phase_arr[$num]['phase_type'];
        if($type == 0 && $stage_type == 0){
            $column_tdk_res['title'] = '美国高中_本科_研究生留学面试_美国留学活动讲座';
            $column_tdk_res['description'] = '高中、本科、研究生美国留学活动讲座，美国留学面试，全方位美国留学分析，量身定制美国留学方案，选择彬彬留学一站式留学专家。';
            $column_tdk_res['keywords'] = '高中活动讲座,本科活动讲座,研究生活动讲座';
        }else if($type == 0 && $stage_type != 0){

            $column_tdk_res['title'] = '美国'.$str.'留学面试_美国留学活动讲座';
            $column_tdk_res['description'] = '高中、本科、研究生美国留学活动讲座，美国留学面试，全方位美国留学分析，量身定制美国留学方案，选择彬彬留学一站式留学专家。';
            $column_tdk_res['keywords'] = '高中活动讲座,本科活动讲座,研究生活动讲座';
        }else{
            foreach ($activity_list as $tdk_k => $tdk_v) {
                $column_tdk_res['title'] = $str.$tdk_v['art_title'];
                $column_tdk_res['description'] = $tdk_v['art_describe'];
                $column_tdk_res['keywords'] = $tdk_v['art_keyword'];
            }
        }



        //活动类型
        $activity_type = $this->activity_type_model->field('id,article_type')->select();


        //背景提升推荐
    	$promote_info = $this->promote_model->where('open',1)->where('recommend_id','like','%48%')->field('id,title,thumbnail,type')->order('add_time desc,sort desc')->limit(3)->select();
        foreach ($promote_info as $kk => &$vv) {
            $proType = $this->Promote_type_model->where('id',$vv['type'])->field('rewrite')->find();
            $vv['rewrite'] = $proType['rewrite']; 
        }

        // 成功案例列表
        $case_list = $this->case_model->field('id,title')->where('tui_ids','like',"%21%")->order('add_time desc,sort desc')->select()->toArray();
         //热门标签
        $label_list = Db::table('clt_new_label')->where('is_hot',1)->where('recommend_id','like','%42%')->field('title,href')->select();

        $this->assign([
            'label_list'    =>  $label_list,
            'column_tdk_res'=>  $column_tdk_res,//TDK
            'activity_type'  =>  $activity_type,  //全部的活动类型
            'activity_list'  =>  $activity_list,  //活动数据
            'phase_type'    =>  $phase_type,    //申请阶段--筛选
            'page'          =>  $page,          //分页

            'end_time'		=>	$end_time,		//活动时间----做判断
            'promote_info'	=>	$promote_info,	//背景提升
            'case_list'     =>  $case_list
        ]);



    	return $this->fetch();
    }


    /**
     * @function [活动详情]
     * @Author   DingXuFeng
     * @DateTime 2019-03-13T14:52:39+0800
     * @return   [type]                   [description]
     */
    public function activity_content()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);


    	$id = input('id');


        $activity_info = Db::table('clt_new_activity')
            ->alias('a')
            ->join('clt_new_activity_articletype t','a.type = t.id')
            ->field('a.id,a.title,a.describe,a.keyword,a.phase,a.name,a.add_time,a.edit_time,a.recommend_id,a.lecture_venue,a.lecture_time,a.activity_content,a.details_portrait,a.activity_type,a.activity_type,a.end_time,a.type,t.article_type')
            ->where(['a.open'=>1,'a.id'=>$id])
            ->find();

        if(empty($activity_info)){
            abort(404, '页面异常');
        }

        //TDk   发布时间  更新时间  百度因子规范
        $column_tdk_res['add_time'] = date('Y-m-d',$activity_info['add_time']).'T'.date('H:i:s',$activity_info['add_time']);
        if(!empty($activity_info['edit_time'])){
            $column_tdk_res['edit_time'] = date('Y-m-d',$activity_info['edit_time']).'T'.date('H:i:s',$activity_info['edit_time']);
        }
        $column_tdk_res['title'] = $activity_info['title'];
        $column_tdk_res['description'] = $activity_info['describe'];
        $column_tdk_res['keywords'] = $activity_info['keyword'];

        $activity_info['activity_type'] = $activity_info['activity_type'] == 1 ? "线上" : "线下";
        $activity_info['add_time'] = date('Y.m.d',$activity_info['add_time']);
        //活动---关键字
        $activity_info['key_arr'] = explode(',',$activity_info['keyword']);

        $activity_info['status'] = date('Y-m-d',$activity_info['end_time']).' 23:59:59' <= time() ? 1 : 0 ;
        if( time() <= strtotime( date('Y-m-d',$activity_info['end_time']).' 23:59:59') ) {
            $activity_info['status'] = 1;
        }else{
            $activity_info['status'] = 2;
        }

    	//热门活动讲座
    	$popular_list = $this->activity_model->whereNotIn('id',$id)->where('recommend_id','like','%46%')->field('id,title,lecture_time,details_portrait,type')->order('add_time desc,sort desc')->limit(5)->select();

        foreach ($popular_list as $k => &$v) {
            $popular_type = $this->activity_type_model->where('id',$v['type'])->field('rewrite')->find();
            $v['rewrite'] = $popular_type['rewrite'];
        }
    	//背景提升---推荐数据
    	$promote_info = $this->promote_model->where('open',1)->where('phase','like','%'.$activity_info['phase'].'%')->where('recommend_id','like','%48%')->order('add_time desc,sort desc')->field('id,title,thumbnail,activity_time,target_object,add_time,type')->limit(3)->select();
    	foreach ($promote_info as $key => &$val) { 
            $proType = $this->Promote_type_model->where('id',$val['type'])->field('rewrite')->find();
            $val['rewrite'] = $proType['rewrite']; 
            $val['add_time'] = date('Y.m.d',$val['add_time']);
            
        }

        //热门标签
        $label_list = Db::table('clt_new_label')->where('is_hot',1)->where('recommend_id','like','%42%')->field('title,href')->select();

    	$this->assign([
            'label_list'    =>  $label_list,
    		'column_tdk_res'=>	$column_tdk_res,
    		'activity_info'	=>	$activity_info, 	//当前活动数据
    		'popular_list'	=>	$popular_list,		//热门活动数据
    		'promote_info'	=>	$promote_info,		//背景提升
    	]);
    	return $this->fetch();

    }
}