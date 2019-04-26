<?php
namespace app\home\controller;
use think\db;
use think\Request;
// 文章表
use app\home\model\WhArticle;
// 申请阶段表
use app\home\model\WhApplyStage;
// 文章类型表
use app\home\model\WhArticleType;
// 标签表
use app\home\model\WhLabel;
// 活动表
use app\home\model\ActivityModel;           //活动模型
use app\home\model\ActivityTypeModel;       //活动---类型
// 背景提升表
use app\home\model\PromoteModel;
use app\home\model\PromoteTypeModel;        //背景提升---类型
// 成功案例表
use app\home\model\WhCase;
class Article extends Common{

    public function initialize(){
        parent::initialize();
        // 文章表
        $this->article_model = new WhArticle();
        // 申请阶段表
        $this->applyStage_model = new WhApplyStage();
        $this->apply_stage_list = change_key($this->applyStage_model->get_list('id,title,url'));
        $this->assign('apply_stage_list',$this->apply_stage_list);
        // 文章类型表
        $this->articleType_model = new WhArticleType();
        $this->articleType_list = change_key($this->articleType_model->get_list('id,title,describe,keyword'));
        $this->assign('article_type_list',$this->articleType_list);
        // 标签表
        $this->label_model = new WhLabel();
        // 活动表
        $this->activity_model = new ActivityModel();
        $this->activity_type_model = new ActivityTypeModel();
        // 背景提升表
        $this->promote_model = new PromoteModel();
        $this->Promote_type_model = new PromoteTypeModel();
        // 成功案例表
        $this->case_model = new WhCase();
    }
    
    /**
     * @function [详情页]
     * @Author   JFY
     * @DateTime 2019-01-25T19:33:28+0800
     * @return   [type]                   [description]
     */
    public function info(){

        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);

        $data = input();
        $article_info = $this->article_model->where('id',$data['id'])->find();
        //TDk   发布时间  更新时间     百度因子规范
        $column_tdk_res['add_time'] = date('Y-m-d',$article_info['add_time']).'T'.date('H:i:s',$article_info['add_time']);
        if(!empty($article_info['edit_time'])){
            $column_tdk_res['edit_time'] = date('Y-m-d',$article_info['edit_time']).'T'.date('H:i:s',$article_info['edit_time']);
        }
        $column_tdk_res['title'] = $article_info['title'];
        $column_tdk_res['description'] = $article_info['describe'];
        $column_tdk_res['keywords'] = $article_info['keyword']; 

        if(empty($article_info)){
            abort(404, '页面异常');
        }
        // 标签
        $article_info['keyword'] = explode(',',$article_info['keyword']);
        $article_info['head_pic'] = config('admin_path').$article_info['head_pic'];

        // 如果定时时间不为空的话，显示定时时间，否则显示修改时间
        if(!empty($article_info['timing'])){
            $article_info['edit_time'] = date('Y-m-d',$article_info['timing']);
        }else{
            $article_info['edit_time'] = date('Y-m-d',$article_info['edit_time']);
        }
        // 分页数据

        // $article_info['content'] = explode('_ueditor_page_break_tag_', $article_info['content']);
        // foreach ($article_info['content'] as $key => $val) {
        //     $tmp_arr['total'] = count($article_info['content']);
        //     $tmp_arr['per_page'] = 1;
        //     $tmp_arr['current_page'] = $_GET['page'];
        //     $tmp_arr['last_page'] = count($article_info['content']);
        //     $tmp_arr['data'][$key+1] = $val;
        // }   
        // $article_info['content'] = $tmp_arr;
        // 分页数据

        // 文章推荐列表
        $tui_list = $this->article_model->tui_list( $article_info['id'], 'id,title,cover_pic,introduction,describe,add_time,type,content',3,$article_info['apply_stage'],$article_info['type'] );

        foreach ($tui_list as $tui_k => &$tui_v) {
            $tui_type = $this->articleType_model->where('id',$tui_v['type'])->field('title,rewrite')->find();
            $tui_v['rewrite'] = $tui_type['rewrite'];
            $tui_v['type_title'] = $tui_type['title'];
            if(!empty($tui_v['cover_pic'])){
                $tui_v['cover_pic'] = config('admin_path') . $tui_v['cover_pic'];
            }else{
                $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
                $content = $tui_v['content'];  //文章内容
                preg_match_all($pattern,$content,$matchContent);
                if(isset($matchContent[1][0])){
                    $tui_v['cover_pic'] = $matchContent[1][0];
                }
            }  
        }
        //rigth   文章推荐
        $rigth_list = $this->article_model->tui_list( $article_info['id'], 'id,title,cover_pic,introduction,describe,add_time,type,content',8,$article_info['apply_stage']);

        foreach ($rigth_list as $rigth_k => &$rigth_v) {
            $tui_type = $this->articleType_model->where('id',$rigth_v['type'])->field('title,rewrite')->find();
            $rigth_v['rewrite'] = $tui_type['rewrite'];
            $rigth_v['type_title'] = $tui_type['title'];
        }


        // 面包屑二级分类
        $level_two['id'] = $this->apply_stage_list[$article_info['apply_stage']]['id'];
        $level_two['title'] = $this->apply_stage_list[$article_info['apply_stage']]['title'];
        $level_two['url'] = $this->apply_stage_list[$article_info['apply_stage']]['url'];
        $article_info['level_two'] = $level_two;
        // dump($article_info);die;
        // 面包屑三级分类
        $level_three['id'] = $this->articleType_list[$article_info['type']]['id'];
        $level_three['title'] = $this->articleType_list[$article_info['type']]['title'];
        $article_info['level_three'] = $level_three;

        //活动推荐
        $activity_info = $this->activity_model->where('open',1)->where('phase',$article_info['apply_stage'])->where('recommend_id','like','%35%')->field('id,title,details_portrait,lecture_time,type')->order('sort desc,add_time desc')->limit(2)->select();
        foreach ($activity_info as $k => &$v) {
            $activity_type = $this->activity_type_model->where('id',$v['type'])->field('rewrite')->find();
            $v['details_portrait'] = config('admin_path').$v['details_portrait'];
            $v['rewrite'] = $activity_type['rewrite'];
        }

        //背景提升推荐
        $promote_info = $this->promote_model->where('open',1)->where('recommend_id','like','%29%')->field('id,title,thumbnail,type')->order('sort desc,add_time desc')->limit(3)->select();
        foreach ($promote_info as $kk => &$vv) {
            $proType = $this->Promote_type_model->where('id',$vv['type'])->field('rewrite')->find();
            $vv['thumbnail'] = config('admin_path').$vv['thumbnail'];
            $vv['rewrite'] = $proType['rewrite']; 
        }

         //热门标签
        $label_list = Db::table('clt_new_label')->where('recommend_id','like','%43%')->field('title,href')->select();
        $this->assign('label_list',$label_list);
        // TDK
        $this->assign('column_tdk_res',$column_tdk_res);

        $this->assign('tui_list',$tui_list);
        $this->assign('info',$article_info);

        $this->assign('activity_info',$activity_info);
        $this->assign('promote_info',$promote_info);
        $this->assign('rigth_list',$rigth_list);    
        return $this->fetch();
    }

    /**
     * @function [列表页]
     * @Author   JFY
     * @DateTime 2019-01-25T19:34:28+0800
     * @return   [type]                   [description]
     */
    public function index(){
        $data = input();
        // 申请阶段
        $apply_stage_id = $data['apply_stage_id'];
        // 文章类型
        $article_type_id = $data['article_type_id'];

        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);

        // 根据申请阶段的id获取文章类型调用示例
        $data = input();
        // 当前页
        $now_page = input('page')?input('page'):1;
        $pageSize =input('limit')?input('limit'):8;

        // 成功案例需要走另一张表
        if($data['article_type_id']==204){
            $article_list = $this->case_model->where('is_show',1);
                            if(!empty($data['article_type_id'])){
                                $article_list = $article_list->where('type',$data['article_type_id']);
                            }
                            if(!empty($data['apply_stage_id'])){
                                $article_list = $article_list->where('apply_stage',$data['apply_stage_id']);
                            }
                            $article_list = $article_list->field('id,title,describe,head_img as cover_pic,edit_time,type,label as keyword')
                            ->order('sort desc,add_time desc')
                           ->paginate(array('list_rows'=>$pageSize,'page'=>$now_page));
            foreach ($article_list as $key => $val) {
                $val['content'] = $val['describe'];
            }
        }else{
           $article_list = $this
                           ->article_model
                           ->where('is_show',1);
                           if(!empty($data['apply_stage_id'])){
                               $article_list = $article_list->where('apply_stage',$data['apply_stage_id']);
                           }
                           if(!empty($data['article_type_id'])){
                               $article_list = $article_list->where('type',$data['article_type_id']);
                           }
                           if( !empty($data['apply_stage_id']) && !empty($data['article_type_id']) ){
                               $article_list = $article_list->where('type',$data['article_type_id'])->where('apply_stage',$data['apply_stage_id']);
                           }
                           $article_list = $article_list->field('id,title,describe,cover_pic,edit_time,timing,type,keyword,content')
                           ->order('sort desc,add_time desc')
                           ->paginate(array('list_rows'=>$pageSize,'page'=>$now_page))
                       ; 
        }
        
        $page = $article_list->render();

        if(!empty($article_list)){
            foreach ($article_list as $key => &$val) {
                if(!empty($val['cover_pic'])){
                    $val['cover_pic'] = config('admin_path').$val['cover_pic'];
                }else{
                    $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
                    $content = $val['content'];  //文章内容
                    preg_match_all($pattern,$content,$matchContent);
                    if(isset($matchContent[1][0])){
                        $val['cover_pic'] = $matchContent[1][0];
                    }
                }  

                $val['keyword'] = explode(',',$val['keyword']);
                // 定时时间不为空的情况下，显示定时时间，否则显示修改时间
                if(!empty($val['timing'])){
                    $val['edit_time'] = date('Y-m-d',$val['timing']);
                }else{
                    $val['edit_time'] = date('Y-m-d',$val['edit_time']);
                }
                $article_type = $this->articleType_model->where('id',$val['type'])->field('rewrite')->find();
                $val['rewrite'] = $article_type['rewrite'];
            }
        }
        
        //活动推荐--->改成成功故事
        // $activity_info = $this->activity_model->where('open',1)->where('recommend_id','like','%4%')->field('id,title,details_portrait,lecture_time,type')->order('sort desc')->limit(2)->select();
        // foreach ($activity_info as $k => &$v) {
        //     $activity_type = $this->activity_type_model->where('id',$v['type'])->field('rewrite')->find();
        //     $v['details_portrait'] = config('admin_path').$v['details_portrait'];
        //     $v['rewrite'] = $activity_type['rewrite'];
        // }

        $case_list = $this->case_model->field('id,title,student_name,add_time,head_img')->where('is_show',1)->order('add_time desc, sort desc')->limit(4)->select();
        // dump($case_list);die;
        foreach ($case_list as $key => &$val) {
            $val['head_img'] = config('admin_path') . $val['head_img'];
            $val['add_time'] = date('Y-m-d',$val['add_time']);
        }

        //背景提升推荐
        $promote_info = $this->promote_model->where('open',1)->where('phase','like','%'.$article_list['apply_stage'].'%')->where('recommend_id','like','%29%')->field('id,title,thumbnail,type')->order('add_time desc, sort desc')->limit(3)->select();
        foreach ($promote_info as $kk => &$vv) {
            $proType = $this->Promote_type_model->where('id',$vv['type'])->field('rewrite')->find();
            $vv['thumbnail'] = config('admin_path').$vv['thumbnail'];
            $vv['rewrite'] = $proType['rewrite']; 
        }

        if($apply_stage_id==1){
            $str = '高中';
        }elseif($apply_stage_id==2){
            $str = '本科';
        }elseif ($apply_stage_id==3) {
            $str = '研究生';
        }else{
            $str = '';
        }

        // 高本研（筛选页）
        if ( $apply_stage_id!=0 && $article_type_id==0 ) {
            $column_tdk_res['title'] = '美国'.$str.'留学咨询_美国留学攻略';
            $column_tdk_res['description'] = '彬彬教育为您提供专业的美国'.$str.'生留学服务，相关资讯及申请服务，想要了解更多美国高中留学相关的信息就上彬彬教育官网！';
            $column_tdk_res['keywords'] = $str.'留学'.',美国'.$str.'留学';
        }elseif ( $apply_stage_id!=0 && $article_type_id!=0 ){
            $column_tdk_res['title'] = '美国'.$str.$this->articleType_list[$article_type_id]['title'];
            $column_tdk_res['description'] = $this->articleType_list[$article_type_id]['describe'];
            $column_tdk_res['keywords'] = '美国'.$str.$this->articleType_list[$article_type_id]['keyword'];
        }elseif ( $apply_stage_id==0 && $article_type_id!=0 ) {
            $column_tdk_res['title'] = $this->articleType_list[$article_type_id]['title'];
            $column_tdk_res['description'] = $this->articleType_list[$article_type_id]['describe'];
            $column_tdk_res['keywords'] = $this->articleType_list[$article_type_id]['keyword'];
        }else{
            $column_tdk_res['title'] = '美国留学攻略-美国留学知识';
            $column_tdk_res['description'] = '美国留学知识、美国留学资讯、为您提供最全面端留学攻略_彬彬教育';
            $column_tdk_res['keywords'] = '美国留学攻略,美国留学知识';
        }


        //热门标签
        $label_list = Db::table('clt_new_label')->where('recommend_id','like','%43%')->field('title,href')->select();
        $this->assign('label_list',$label_list);

        $this->assign('column_tdk_res',$column_tdk_res);
        $this->assign('page',$page);
        $this->assign('list',$article_list);
        $this->assign('case_list',$case_list);
        $this->assign('promote_info',$promote_info);
        return $this->fetch();
    }

    /**
     * @function [获取当前阶段下面的所有文章类型]
     * @Author   JFY
     * @DateTime 2019-02-01T10:51:46+0800
     * @return   [type]                   [description]
     */
    public function get_article_types(){
        $data = input();
        if( !empty($data['apply_stage_id']) ){
            $type_list = $this->articleType_model->applyStageId_get_articleType( $data['apply_stage_id'],'id,title' );
        }else{
            $type_list = $this->articleType_model->field('id,title')->where('status',1)->order('sort','desc')->select()->toArray();
        }
        return json_msg(1,'成功',$type_list);
    }

    /**
     * @function [分页]
     * @Author   JFY
     * @DateTime 2019-01-17T10:01:24+0800
     * @return   [type]                   [description]
     */
    public function ajax_change_page(){
        $data = input();
        $article_info = $this->article_model-> where('id',$data['id'])-> find()->toArray();
        $article_info['content'] = explode('_ueditor_page_break_tag_', $article_info['content']);
        foreach ($article_info['content'] as $key => $val) {
            $tmp_arr['total'] = count($article_info['content']);
            $tmp_arr['per_page'] = 1;
            $tmp_arr['current_page'] = $data['page'];
            $tmp_arr['last_page'] = count($article_info['content']);
            $tmp_arr['data'][$key+1] = $val;
        }
        $article_info['content'] = $tmp_arr;
        echo json_encode($article_info,JSON_UNESCAPED_UNICODE);die;
    }
}