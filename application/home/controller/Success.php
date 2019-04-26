<?php
namespace app\home\controller;
// 成功案例表
use app\home\model\WhCase;
// 背景提升表
use app\home\model\PromoteModel;
// 背景提升类型表
use app\home\model\PromoteTypeModel;
// 活动表
use app\home\model\ActivityModel;
// 活动类型表
use app\home\model\ActivityTypeModel;
// 文章类型表
use app\home\model\WhArticleType;
// 文章表
use app\home\model\WhArticle;
// 申请阶段表
use app\home\model\WhApplyStage;
use think\db;
class Success extends Common{
    public function initialize(){
        parent::initialize();
        // 成功案例表
        $this->case_model = new WhCase();
        // 背景提升表
        $this->promote_model = new PromoteModel();
        // 背景提升类型
        $this->promote_type_model = new PromoteTypeModel();
        $this->promote_type_list = change_key($this->promote_type_model->field('id,bg_promote_type,rewrite')->select()->toArray());
        $this->assign('promote_type_list',$this->promote_type_list);
        // 活动表
        $this->activity_model = new ActivityModel();
        // 活动类型表
        $this->activity_type_model = new ActivityTypeModel();
        $this->activity_type_list = change_key($this->activity_type_model->field('id,rewrite')->select()->toArray());
        $this->assign('activity_type_list',$this->activity_type_list);
        // 申请阶段表
        $this->applyStage_model = new WhApplyStage();
        $this->apply_stage_list = change_key($this->applyStage_model->get_list('id,title,url'));
        $this->assign('apply_stage_list',$this->apply_stage_list);
        // 文章类型表
        $this->articleType_model = new WhArticleType();
        //文章表
        $this->article_model = new WhArticle();
        $this->articleType_list = change_key($this->articleType_model->get_list('id,title'));
        $this->assign('article_type_list',$this->articleType_list);

        $this->assign('admin_path',config('admin_path'));


    }
    public function info(){
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);


        $id = input('id');
        $info = $this->case_model->where('id',$id)->find();

        if(empty($info)){
            abort(404, '页面异常');
        }


        $info['xx_logo'] = !empty($info['xx_logo'])  ? json_decode($info['xx_logo'],true) : null ;
        // if(!empty($info['xx_logo'])){
        //     foreach ($info['xx_logo'] as $key => &$val) {
        //         $val = config('admin_path') . $val;
        //     }
        // }
        
        $info['xx_offer'] = !empty($info['xx_offer'])  ? json_decode($info['xx_offer'],true) : null ;
        // if(!empty($info['xx_offer'])){
        //     foreach ($info['xx_offer'] as $key => &$val) {
        //         $val = config('admin_path') . $val;
        //     }
        // }


        //TDk   发布时间  更新时间     百度因子规范
        $column_tdk_res['add_time'] = date('Y-m-d',$info['add_time']).'T'.date('H:i:s',$info['add_time']);
        if(!empty($info['edit_time'])){
            $column_tdk_res['edit_time'] = date('Y-m-d',$info['edit_time']).'T'.date('H:i:s',$info['edit_time']);
        }
        $column_tdk_res['title'] = $info['title'];
        $column_tdk_res['description'] = $info['describe'];
        $column_tdk_res['keywords'] = $info['label'];


        $info['xx_name'] = !empty($info['xx_name'])  ? json_decode($info['xx_name'],true) : null ;
        $info['xx_major'] = !empty($info['xx_major'])  ? json_decode($info['xx_major'],true) : null ;
        $info['xx_degree'] = !empty($info['xx_degree'])  ? json_decode($info['xx_degree'],true) : null ;

        $info['label'] = explode(',',$info['label']);
        $info['head_img'] = config('admin_path') . $info['head_img'];
        $info['add_time'] = date('Y-m-d H:i',$info['add_time']);

        //  背景提升推荐列表
        $promote_list = $this->promote_model->recommendId_to_list(26,'id,title,thumbnail,type,add_time,activity_time,target_object',$info['apply_stage'],3);

        // 热门活动列表   添加筛选条件  按申请阶段
        $activity_list = $this->activity_model->tui_list(36,'id,title,thumbnail,type,lecture_time',$info['apply_stage']);

        //根据当前申请阶段  推荐成功案例
        $case_list = $this->case_model->type_to_list($info['apply_stage'],'id,title,head_img',4,22);

        // 面包屑二级分类
        $level_two['id'] = $this->apply_stage_list[$info['apply_stage']]['id'];
        $level_two['url'] = $this->apply_stage_list[$info['apply_stage']]['url'];
        $level_two['title'] = $this->apply_stage_list[$info['apply_stage']]['title'];
        $info['level_two'] = $level_two;
        // 面包屑三级分类
        $level_three['id'] = $this->articleType_list[$info['type']]['id'];
        $level_three['title'] = $this->articleType_list[$info['type']]['title'];
        $info['level_three'] = $level_three;



        //成功案例---文章推荐
        $article_tui = $this->article_model->where('apply_stage',$info['apply_stage'])->order('add_time desc')->limit(5)->select();

        foreach ($article_tui as $article_key => &$article_val) {
            $rewrite = $this->articleType_model->where('id',$article_val['type'])->field('rewrite')->find();
            $article_val['rewrite'] = $rewrite['rewrite'];
        }
          //热门标签
        $label_list = Db::table('clt_new_label')->where('recommend_id','like','%43%')->field('title,href')->select();
        $this->assign('label_list',$label_list);
        $this->assign('article_tui',$article_tui);
        
        $this->assign('column_tdk_res',$column_tdk_res);
        $this->assign('activity_list',$activity_list);
        $this->assign('promote_list',$promote_list);
        $this->assign('info',$info);
        $this->assign('case_list',$case_list);
        return $this->fetch();
    }

}