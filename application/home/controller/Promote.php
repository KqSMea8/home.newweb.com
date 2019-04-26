<?php
/**
 * @Author: Administrator
 * @Date:   2019-01-29 14:38:32
 * @Last Modified by:   dingxufeng
 * @Last Modified time: 2019-04-19 19:36:03
 */
namespace app\home\controller;
use app\home\model\PromoteModel;			//背景提升
use app\home\model\PromoteTypeModel;		//背景提升---类型
use app\home\model\PromoteRecommendModel;	//背景提升---推荐位
use app\home\model\ActivityModel;           //活动模型
use app\home\model\ActivityTypeModel;       //活动---类型
// 文章表
use app\home\model\WhArticle;
use think\Request;
use think\db;
class Promote extends Common{

    public function initialize(){
        parent::initialize();
        $this->promote_model = new PromoteModel();
        $this->Promote_type_model = new PromoteTypeModel();
        $this->Promote_recommend_model = new PromoteRecommendModel();
        $this->activity_model = new ActivityModel();
        $this->activity_type_model = new ActivityTypeModel();
        // 文章表
        $this->article_model = new WhArticle();

        $this->phase_arr = [['id'=>1,'phase_type'=>'高中'],['id'=>2,'phase_type'=>'本科'],['id'=>3,'phase_type'=>'研究生']];
    }
    
    /**
     * @function [背景提升--聚合页]
     * @Author   DingXuFeng
     * @DateTime 2019-01-31T13:36:03+0800
     * @return   [type]                   [description]
     */
    public function index(){
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);

        //关联属性   提取背景提升类型  字段
        $promote_hot = $this->promote_model->where(['open'=>1])->field('id,title,thumbnail,target_object,is_hot,type')->order('sort desc,add_time desc')->withJoin(['info' => function($query){
            $query->field('bg_promote_type,promote_brief,promote_map,rewrite');
        }])->select()->toArray();

        foreach ($promote_hot as $k => &$v) {
            unset($v['info']);
            $v['thumbnail'] = config('admin_path').$v['thumbnail'];
            $promote_arr[$v['type']]['bg_promote_type'] = $v['bg_promote_type'];
            $promote_arr[$v['type']]['promote_brief'] = $v['promote_brief'];
            $promote_arr[$v['type']]['promote_map'] = config('admin_path').$v['promote_map'];
            $promote_arr[$v['type']]['rewrite'] = $v['rewrite'];
            //判断  该背景提升 是否是推荐
            if( $v['is_hot'] == 1){
                $promote_arr[$v['type']]['hot'][] = $v;
            }else{
                $promote_arr[$v['type']]['cool'][] = $v;
            }
        }
        //按照背景提升类型---来进行排序
        //
        ksort($promote_arr);
        $case_list = $this->article_model->field('id,title,cover_pic')->where('is_show',1)->where('tui_ids','like',19)->order('sort','desc')->select()->toArray();

        foreach ($case_list as $key => &$val) {
            $val['cover_pic'] = config('admin_path') . $val['cover_pic'];
        }

        $column_tdk_res = $this->pagetdk->tdk_info(5,1);


		$this->assign([
            'column_tdk_res'=>  $column_tdk_res,
			'promote_arr'	=>	$promote_arr,
            'case_list'     =>  $case_list
		]);

        return $this->fetch();
    }



    /**
     * @function [背景提升--筛选页]
     * @Author   DingXuFeng
     * @DateTime 2019-01-31T13:36:37+0800
     * @return   [type]                   [description]
     */
    public function bg_list(){

        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);


        //背景提升类型
        $type = input('type');
        //申请阶段
        $stage_type = input('stage_type');
        // 当前页
        $now_page = input('page')?input('page'):1;
        //每页显示几条数据
        $pageSize =input('limit')?input('limit'):1;

        //判断是否有申请阶段类型 
        if(!empty($stage_type)){
            $phase_arr = $this->promote_model->where('phase','like','%'.$stage_type.'%')->field('type')->select();
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
            $phase_in['phase'] = $stage_type;

        }else{
            $phase_arr = $this->Promote_type_model->where('is_hot',1)->field('id')->select();
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
        $promote_list = Db::table('clt_new_bg_promote')
            ->alias('p')
            ->join('clt_new_bg_promote_type t','p.type = t.id','left')
            ->field('p.id,p.phase,p.title,p.thumbnail,p.target_object,p.activity_time,t.bg_promote_type,t.pro_title,t.pro_describe,t.pro_keyword,t.rewrite')
            ->where('p.phase','like','%'.$phase_in['phase'].'%')
            ->where('p.open',1)
            ->order('sort desc,add_time desc')
            ->where($where)
            ->paginate(8,false,[
                'page'=>$now_page,
                // 'query' => request()->param(),//不丢失已存在的url参数
            ]);
            // dump($type);
            // dump($stage_type);
            // die; 
        // 获取分页显示
        $page = $promote_list->render();
        //TDK
        $num = $stage_type - 1;
        $str = $this->phase_arr[$num]['phase_type'];
        if($type == 0 && $stage_type == 0){
            $column_tdk_res['title'] = '留学背景提升_美国高中_本科_研究生优质背景提升项目';
            $column_tdk_res['description'] = '留学背景提升,名校申请竞争力提升-彬彬教育海内外科研资源,真实研究院环境,课程标准成绩单,名校认可结业证书,教授学术推荐信,拓宽人脉,提高素养';
            $column_tdk_res['keywords'] = '背景提升,留学背景提升,美国留学背景提升';
        }else if($type == 0 && $stage_type != 0){

            $column_tdk_res['title'] = '美国'.$str.'背景提升项目';
            $column_tdk_res['description'] = '彬彬教育提供优质端美国高中背景提升项目,美国本科背景提升项目,美国研究生背景提升项目，为您打造完美的个人留学简历！';
            $column_tdk_res['keywords'] = '美国高中背景提升项目,美国本科背景提升项目,美国研究生背景提升项目';
        }else{
            foreach ($promote_list as $tdk_k => $tdk_v) {
                $column_tdk_res['title'] = $str.$tdk_v['pro_title'];
                $column_tdk_res['description'] = $tdk_v['pro_describe'];
                $column_tdk_res['keywords'] = $tdk_v['pro_keyword'];
            }
        }



        $promote_type = $this->Promote_type_model->where('is_hot',1)->field('id,bg_promote_type')->select();


        //活动推荐--->改成背景提升案例
        // $activity_info = $this->activity_model->where('open',1)->where('recommend_id','like','%8%')->field('id,title,details_portrait,lecture_time,type')->order('sort desc')->limit(4)->select();
        // foreach ($activity_info as $k => &$v) {
        //     $activity_type = $this->activity_type_model->where('id',$v['type'])->field('rewrite')->find();
        //     $v['rewrite'] = $activity_type['rewrite'];
        // }


        //热门标签
        $label_list = Db::table('clt_new_label')->where('is_hot',1)->where('recommend_id','like','%49%')->field('title,href')->select();


        // 背景提升案例
        $case_bjts = $this->article_model->field('id,title,add_time,cover_pic,content')->where('is_show',1)->where('type',197)->order('add_time desc, sort desc')->limit(4)->select();
        foreach ($case_bjts as $key => &$val) {
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

            $val['add_time'] = date('Y-m-d',$val['add_time']);
        }

        $this->assign([
            'label_list'    =>  $label_list,
            'case_bjts'     =>  $case_bjts,
            'column_tdk_res'=>  $column_tdk_res,//TDK
            'promote_type'  =>  $promote_type,  //全部的背景提升类型
            'promote_list'  =>  $promote_list,  //背景提升数据
            'phase_type'    =>  $phase_type,    //申请阶段--筛选
            'page'          =>  $page,          //分页
        ]);

        return $this->fetch();
    }


    /**
     * @function [背景提升--详情页]
     * @Author   DingXuFeng
     * @DateTime 2019-01-31T13:37:53+0800
     * @return   [type]                   [description]
     */
    public function content(){
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);


        
        $id = input('id');

        $promote_list = Db::table('clt_new_bg_promote')
            ->alias('p')
            ->join('clt_new_bg_promote_type t','p.type = t.id')
            ->field('p.id,p.phase,p.title,p.describe,p.keyword,p.thumbnail,p.target_object,p.activity_time,p.project_location,p.content,t.bg_promote_type,t.id')
            ->where(['p.id'=>$id,'open'=>1])
            ->find();
            // $promote_list['content'] = nl2br($promote_list['content']);
            $promote_list['content'] = json_decode($promote_list['content'],true);

            foreach ($promote_list['content'] as $k => &$v) {
                $v['project_title'] = $v['project_title'];
                $v['project_content'] = str_replace(" ","&nbsp;",$v['project_content']);
                $v['project_content'] = nl2br($v['project_content']);
            }

        if(empty($promote_list)){
            abort(404, '页面异常');
        }

            //TDk   发布时间  更新时间     百度因子规范
            $column_tdk_res['add_time'] = date('Y-m-d',$promote_list['add_time']).'T'.date('H:i:s',$promote_list['add_time']);
            if(!empty($promote_list['edit_time'])){
                $column_tdk_res['edit_time'] = date('Y-m-d',$promote_list['edit_time']).'T'.date('H:i:s',$promote_list['edit_time']);
            }
            $column_tdk_res['title'] = $promote_list['title'];
            $column_tdk_res['description'] = $promote_list['describe'];
            $column_tdk_res['keywords'] = $promote_list['keyword'];


            // dump($promote_list['phase']);die;
            
            // if(strlen($promote_list['phase']) > 1){
            //     $list['data'][$k]['phase'] = explode(',',$v['phase']);
            // }else{
            //     $list['data'][$k]['phase'] = array($v['phase']);
            // }

        //更多推荐
           $popular_info = $this->promote_model->where('open',1)->field('id,title,thumbnail,type')->order('sort desc,add_time desc')->limit(8)->select(); 
           foreach ($popular_info as $key => &$val) {
               $proType = $this->Promote_type_model->where('id',$val['type'])->field('rewrite')->find();
               $val['rewrite'] = $proType['rewrite']; 
           }
        $this->assign([
            'column_tdk_res'=>  $column_tdk_res,
            'promote_list'  =>  $promote_list,
            'popular_info'  =>  $popular_info,
        ]);
        return $this->fetch();
    }
}