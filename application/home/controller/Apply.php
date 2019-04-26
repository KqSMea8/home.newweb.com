<?php

/**
 * @Author: Administrator
 * @Date:   2019-02-01 11:50:41
 * @Last Modified by:   dingxufeng
 * @Last Modified time: 2019-04-19 19:34:14
 */
namespace app\home\controller;
// 推荐位
use app\home\model\WhAdv;
// 视频表
use app\home\model\WhVideo;
// 视频表
use app\home\model\WhFamily;
// 关怀活动
use app\home\model\WhCareActivities;
// 活动表
use app\home\model\ActivityModel;
use app\home\model\ActivityTypeModel;       //活动---类型

// 文章表
use app\home\model\WhArticle;
// 文章类型表
use app\home\model\WhArticleType;
// 导师类型表
use app\home\model\TutorTypeModel;
// 背景提升类型
use app\home\model\PromoteTypeModel;
// 背景提升表
use app\home\model\PromoteModel;
// 成功案例表
use app\home\model\WhCase;
// OFFER表
use app\home\model\WhOffer;

class Apply extends Common{

    public function initialize(){
        // 广告表
        $this->adv_model = new WhAdv();
        // 视频表
        $this->video_model = new WhVideo();
        // 寄宿家庭表
        $this->family_model = new WhFamily();
        // 关怀活动表
        $this->activiti_model = new WhCareActivities();
        // 活动表
        $this->activity_model = new ActivityModel();
        $this->activity_type_model = new ActivityTypeModel();

        // 文章表
        $this->article_model = new WhArticle();
        // 文章类型表
        $this->article_type_model = new WhArticleType();
        // 团队列表模型
        $this->tutor_type_model = new TutorTypeModel();
        // 背景提升类型表
        $this->promote_type_model = new PromoteTypeModel();
        // 背景提升表
        $this->promote_model = new PromoteModel();
        // 成功案例表
        $this->case_model = new WhCase();
        // OFFER表
        $this->offer_model = new WhOffer();
        $this->assign('admin_path',config('admin_path'));

        parent::initialize();
    }

    /**
     * @function [高中]
     * @Author   JFY
     * @DateTime 2019-02-13T14:28:19+0800
     * @return   [type]                   [description]
     */
    public function high_school(){
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);

        // 顶部轮播图
        $pics = $this->adv_model->typeId_to_list(1,'id,title,pic,is_target,url');
        // 招生官寄语
        $zsg_list = $this->video_model->videoTypeId_to_list(7);
        // 学校介绍
        $js_list = $this->video_model->videoTypeId_to_list(8);
        // 学校支持
        $zc_list = $this->video_model->videoTypeId_to_list(9);
        // 生活指导
        $zd_list = $this->video_model->videoTypeId_to_list(10);
        // 院校开发和家庭招募
        $zm_list = $this->video_model->videoTypeId_to_list(11);
        // 寄宿家庭实景
        $sj_list_tmp = $this->family_model->sj_list();
        $sj_list['list1'] = array_slice($sj_list_tmp,0,5);
        $sj_list['list2'] = array_slice($sj_list_tmp,5);
        // 关怀活动
        $gh_list_tmp = $this->activiti_model->get_list('id,title,cover_pic');
        $gh_list['list1'] = array_slice($gh_list_tmp,0,5);
        $gh_list['list2'] = array_slice($gh_list_tmp,5);
        //活动推荐
        $activity_list = $this->activity_model->where('open',1)->where('recommend_id','like','%32%')->field('id,title,lecture_time,name,lecture_venue,end_time,details_portrait,type')->order('sort desc,add_time desc')->limit(2)->select();

        foreach ($activity_list as $k => &$v) {
            $activity_type = $this->activity_type_model->where('id',$v['type'])->field('rewrite')->find();
            $v['rewrite'] = $activity_type['rewrite'];

            $v['details_portrait'] = config('admin_path').$v['details_portrait'];
        }

        // 留学咨询
        $article_type_list = $this->article_type_model->applyStageId_get_articleType(1,'id,title,rewrite',6,'204,65,203,61,202,101');
        foreach ($article_type_list as $key => &$val) {
            if($val['id']==204){
                $val['children'] = $this->case_model->where('apply_stage',1)->where('is_show',1)->limit(5)->order('sort desc,add_time desc')->select()->toArray();
            }else{
                $val['children'] = $this->article_model->tuiId_to_list($val['id'],16,1);
            }
        }
        $this->assign('zsg_list',$zsg_list);
        $this->assign('js_list',$js_list);
        $this->assign('zc_list',$zc_list);
        $this->assign('zd_list',$zd_list);
        $this->assign('zm_list',$zm_list);
        $this->assign('sj_list',$sj_list);
        $this->assign('gh_list',$gh_list);
        $this->assign('activity_list',$activity_list);
        $this->assign('article_type_list',$article_type_list);
        $this->assign('pics',$pics);

        // TDK
        $column_tdk_res = $this->pagetdk->tdk_info(2,1);
        $this->assign('column_tdk_res',$column_tdk_res);

        return $this->fetch();
    }

    /**
     * @function [本科]
     * @Author   JFY
     * @DateTime 2019-02-13T14:28:13+0800
     * @return   [type]                   [description]
     */
    public function undergraduate(){

        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);


        // 顶部轮播图
        $pics = $this->adv_model->typeId_to_list(2,'id,title,pic,is_target,url');
        // 导师团队
        $list = $this->tutor_type_model->teacher_team_list();
        // 背景提升类型列表
        $bj_list = $this->promote_type_model->get_list('id,bg_promote_type,rewrite','4,5,6');
        foreach ($bj_list as $key => &$val) {
            $val['children'] = $this->promote_model->type_to_list($val['id'],'id,title,is_hot,harvest,target_object,type,thumbnail,activity_time,recommend_id','',24,2);
        }
        // OFFER
        $offer_list = $this->offer_model->get_list(2);
        // 成功案例
        $case_list = $this->case_model->type_to_list(2,'id,student_name,score,school_name,head_img,xx_offer,xx_name,tui_ids',10,17);
        //活动推荐
        $activity_list = $this->activity_model->where('open',1)->where('recommend_id','like','%33%')->field('id,title,lecture_time,name,lecture_venue,end_time,details_portrait,type')->order('sort desc,add_time desc')->limit(2)->select();
        foreach ($activity_list as $k => &$v) {
            $activity_type = $this->activity_type_model->where('id',$v['type'])->field('rewrite')->find();
            $v['rewrite'] = $activity_type['rewrite'];

            $v['details_portrait'] = config('admin_path').$v['details_portrait'];
        }

        // 留学咨询
        $article_type_list = $this->article_type_model->applyStageId_get_articleType(2,'id,title,rewrite',6,'65,203,61,200,199,101,198');
        foreach ($article_type_list as $key => &$val) {
            $val['children'] = $this->article_model->tuiId_to_list($val['id'],17,2);
        }

        // TDK
        $column_tdk_res = $this->pagetdk->tdk_info(3,1);
        $this->assign('column_tdk_res',$column_tdk_res);

        $this->assign('offer_list',$offer_list);
        $this->assign('case_list',$case_list);
        $this->assign('list',$list);
        $this->assign('bj_list',$bj_list);
        $this->assign('activity_list',$activity_list);
        $this->assign('article_type_list',$article_type_list);
        $this->assign('pics',$pics);
        return $this->fetch();
    }

    /**
     * @function [研究生]
     * @Author   JFY
     * @DateTime 2019-02-13T14:28:51+0800
     * @return   [type]                   [description]
     */
    public function graduate_student(){
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);


        $pics = $this->adv_model->typeId_to_list(3,'id,title,pic,is_target,url');
        // 导师团队
        $list = $this->tutor_type_model->teacher_team_list();

         // 背景提升类型列表
        $bj_list = $this->promote_type_model->get_list('id,bg_promote_type as pro_title,rewrite','4,5,6');
        foreach ($bj_list as $key => $val) {
            $bj_list[$key]['children'] = $this->promote_model->type_to_list($val['id'],'id,title,is_hot,harvest,type,target_object,thumbnail,activity_time','',25,3);
        }
        // OFFER
        $offer_list = $this->offer_model->get_list(3);
        
        // 成功案例
        $case_list = $this->case_model->type_to_list(3,'id,student_name,score,school_name,xx_offer,initials,experience,case_introduction_small,xx_name,xx_major,xx_degree',6,18);
        // 名字首字母数组
        foreach ($case_list as $key => $val) {
            $initials_arr[] = $val['initials'];
        }

        //活动推荐
        $activity_list = $this->activity_model->where('open',1)->where('recommend_id','like','%34%')->field('id,title,lecture_time,name,lecture_venue,end_time,details_portrait,type')->order('add_time desc, sort desc')->limit(2)->select();
        foreach ($activity_list as $k => &$v) {
            $activity_type = $this->activity_type_model->where('id',$v['type'])->field('rewrite')->find();
            $v['rewrite'] = $activity_type['rewrite'];

            $v['details_portrait'] = config('admin_path').$v['details_portrait'];
        }

        // 留学咨询
        $article_type_list = $this->article_type_model->applyStageId_get_articleType(3,'id,title,rewrite',6,'65,203,61,200,199,101,198');
        foreach ($article_type_list as $key => &$val) {
            $val['children'] = $this->article_model->tuiId_to_list($val['id'],18,3);
        }

        // TDK
        $column_tdk_res = $this->pagetdk->tdk_info(4,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        // TDK

        $this->assign('offer_list',$offer_list);
        $this->assign('initials_arr',$initials_arr);
        $this->assign('case_list',$case_list);
        $this->assign('list',$list);
        $this->assign('bj_list',$bj_list);
        $this->assign('activity_list',$activity_list);
        $this->assign('article_type_list',$article_type_list);
        $this->assign('pics',$pics);
        return $this->fetch();
    }
}