<?php
namespace app\home\controller;
use think\Db;
// 导师类型表
use app\home\model\TutorTypeModel;
// 背景提升类型表
use app\home\model\PromoteTypeModel;
// 活动型表
use app\home\model\ActivityModel;
use app\home\model\ActivityTypeModel;       //活动---类型
// 文章类型表
use app\home\model\WhArticleType;
// 文章表
use app\home\model\WhArticle;
// 成功案例
use app\home\model\WhCase;
// 广告表
use app\home\model\WhAdv;

class Index extends Common{
    public function initialize(){
        parent::initialize();
        // 团队列表模型
        $this->tutor_type_model = new TutorTypeModel();
        // 背景提升类型表
        $this->promote_type_model = new PromoteTypeModel();
        // 活动表
        $this->activity_model = new ActivityModel();
        $this->activity_type_model = new ActivityTypeModel();
        // 文章表
        $this->article_model = new WhArticle();
        // 文章类型表
        $this->article_type_model = new WhArticleType();
        $this->article_type_list = change_key($this->article_type_model->field('id,title,rewrite')->select()->toArray());
        // 成功案例
        $this->case_model = new WhCase();
        // 广告表
        $this->adv_model = new WhAdv();

    }
    public function index(){
        // 导师团队
        $list = $this->tutor_type_model->teacher_team_list();
        // 背景提升
        $bj_promote = $this->promote_type_model->get_list();
        foreach ($bj_promote as $key => &$val) {
            $val['promote_home'] = config('admin_path') . $val['promote_home'];
            $val['promote_icon'] = config('admin_path') . $val['promote_icon'];
        }
        // $activity_list = $this->activity_model->recommendId_to_list(9,'id,title,lecture_time,name,lecture_venue,end_time,thumbnail');
        //活动推荐
        $activity_list = $this->activity_model->where('open',1)->where('recommend_id','like','%31%')->field('id,title,lecture_time,name,lecture_venue,end_time,home_pic,type')->order('sort desc,add_time desc')->limit(3)->select();
        foreach ($activity_list as $k => &$v) {
            $activity_type = $this->activity_type_model->where('id',$v['type'])->field('rewrite')->find();
            $v['rewrite'] = $activity_type['rewrite'];

            $v['home_pic'] = config('admin_path').$v['home_pic'];
        }



        // 美国留学资讯(高中)
        $gao_article_list = $this->article_model->applystageId_to_list(1,'id,title,type,apply_stage,is_show,index_sort,cover_pic',6,1);
        foreach ($gao_article_list as $key => &$val) {
            $val['rewrite'] = $this->article_type_list[$val['type']]['rewrite'];
        }

        // 本科
        $ben_article_list = $this->article_model->applystageId_to_list(2,'id,title,type,apply_stage,is_show,index_sort,cover_pic',6,1);
        foreach ($ben_article_list as $key => &$val) {
            $val['rewrite'] = $this->article_type_list[$val['type']]['rewrite'];
        }
        // 研究生
        $yan_article_list = $this->article_model->applystageId_to_list(3,'id,title,type,apply_stage,is_show,index_sort,cover_pic',6,1);
        foreach ($yan_article_list as $key => &$val) {
            $val['rewrite'] = $this->article_type_list[$val['type']]['rewrite'];
        }

        // 成功案例推荐，最多显示6条
        $case_list = $this->case_model->field('id,title,student_name,score,apply_stage,xx_logo,head_img,xx_offer,xx_major,xx_name,sort,small_head_img')->where('tui_ids','like',"%15%")->limit(6)->order('sort desc,add_time desc')->select()->toArray();
        
        $adv_list = $this->adv_model->where('adv_type_id',5)->order('sort desc,add_time desc')->select()->toArray();
        foreach ($adv_list as $key => &$val) {
            $val['pic'] = config('admin_path') . $val['pic'];
        }
        foreach ($case_list as $key => &$val) {
            foreach ($val as $key2 => &$val2) {
                if( strstr($key2,'xx_') ){
                    $tmp_arr = json_decode($val2,true);
                    if( $key2!='xx_name' ){
                        $val[$key2] = $tmp_arr[0];
                    }else{
                        $val[$key2] = $tmp_arr;
                    }
                }
            }
            $val['xx_logo'] = config('admin_path') . $val['xx_logo'];
            $val['xx_offer'] = config('admin_path') . $val['xx_offer'];
            $val['head_img'] = config('admin_path') . $val['head_img'];
            $val['small_head_img'] = config('admin_path') . $val['small_head_img'];
            $val['xx_name'] = implode(',',$val['xx_name']);
        }

        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);


        $link_list = Db::table('clt_new_link')->where('open',1)->order('sort desc')->select();
        $this->assign('link_list',$link_list);
        
        $this->assign('adv_list',$adv_list);
        $this->assign('case_list',$case_list);
        $this->assign('admin_path',config('admin_path'));
        $this->assign('list',$list);
        $this->assign('bj_promote',$bj_promote);
        $this->assign('activity_list',$activity_list);
        $this->assign('gao_article_list',$gao_article_list);
        $this->assign('ben_article_list',$ben_article_list);
        $this->assign('yan_article_list',$yan_article_list);


        // TDK
        $column_tdk_res = $this->pagetdk->tdk_info(1,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        
        return $this->fetch();
    }



    //竞超--- 推广页面的院校数据
    public function content()
    {
        $type = input('type');
        $school_list = Db::table('clt_new_school_ranking')->where('type',$type)->select();
        // 订单生成成功
        if($school_list){
            return json_msg( 1,'获取成功', $school_list );
        }else{
            return json_msg(-1,'获取失败');
        }
    }

    /**
     * @function [关于我们]
     * @Author   JFY
     * @DateTime 2019-03-13T16:54:18+0800
     * @return   [type]                   [description]
     */
    public function ws(){
		$column_tdk_res['title'] = '公司简介_彬彬留学';
		$column_tdk_res['description'] = '彬彬教育为提供高中留学、本科留学及研究生留学等出国考试辅导，背景提升，学业规划，职业规划，活动规划，留学申请，海外监管、寄宿家庭安置、游学和海外后续服务在内的一站式国际教育交流服务。';
		$column_tdk_res['keywords'] = '彬彬留学,彬彬教育,彬彬';
		$this->assign('column_tdk_res',$column_tdk_res);
        return $this->fetch();
    }

}