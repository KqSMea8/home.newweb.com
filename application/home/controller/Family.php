<?php
namespace app\home\controller;
// 地区表
use app\home\model\WhRegion;
// 州表
use app\home\model\WhState;
// 借宿家庭表
use app\home\model\WhFamily;
// 城市表
use app\home\model\WhCity;
// 标签表
use app\home\model\WhLabel;
// 视频表
use app\home\model\WhVideo;

//专题页面--学校接口
use app\home\model\SchoolRankingModel;
use think\db;
use think\Request;
class Family extends Common{

    public function initialize(){
        parent::initialize();
        // 地区表
        $this->region_model = new WhRegion();
        // 州表
        $this->state_model = new WhState();
        // 寄宿家庭表
        $this->family_model = new WhFamily();
        // 城市表
        $this->city_model = new WhCity();
        // 标签表
        $this->label_model = new WhLabel();

        $this->video_model = new WhVideo();

        //专题页面
        $this->school_ranking_model = new SchoolRankingModel();
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


        $id = input('id');

        $family_info = $this->family_model->get_info($id);
        if(empty($family_info)){
            abort(404, '页面异常');
        }


        //TDk   发布时间  更新时间     百度因子规范
        $column_tdk_res['add_time'] = date('Y-m-d',$family_info['add_time']).'T'.date('H:i:s',$family_info['add_time']);
        if(!empty($family_info['edit_time'])){
            $column_tdk_res['edit_time'] = date('Y-m-d',$family_info['edit_time']).'T'.date('H:i:s',$family_info['edit_time']);
        }
        $column_tdk_res['title'] = $family_info['title'];
        $column_tdk_res['description'] = $family_info['introduction'];
        $column_tdk_res['keywords'] = $family_info['keyword'];

        // 城市信息
        $city_info = $this->city_model->get_info($family_info['city_id'],'id,title,state_id');
        // 州的信息
        $state_info = $this->state_model->get_info($city_info['state_id'],'id,title');

        $family_info['custom_fields'] = str_replace('\n', '<br/>', $family_info['custom_fields']);

        $family_info['custom_fields'] = !empty($family_info['custom_fields']) ? json_decode($family_info['custom_fields'],true) : [];
        
        $tmp_arr = [];
        if(!empty($family_info['pics'])){
            $tmp_arr = json_decode($family_info['pics'],true);
            foreach ($tmp_arr as $key => &$val) {
                $val = config('admin_path') . $val;
            }
            $family_info['pics'] = $tmp_arr;
        }
        // // 所在城市
        $family_info['city_id'] = $city_info['title'];
        // 所在州
        $family_info['state_id'] = $state_info['title'];
        // 推荐
        $tui_list = $this->family_model->tui_list('id,title,cover_pic,city_id',$id);

        $this->assign('tui_list',$tui_list);
        $this->assign('info',$family_info);
        $this->assign('column_tdk_res',$column_tdk_res);

        return $this->fetch();
    }

    /**
     * @function [列表页]
     * @Author   JFY
     * @DateTime 2019-01-25T19:34:28+0800
     * @return   [type]                   [description]
     */
    public function index(){
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);


        // 州列表
        $address_list = change_key($this->state_model->regionId_to_state());

        // 这一快后期需要优化
        foreach ($address_list as $key => &$val) {
            $num = Db::table('clt_new_state')
                    ->field('f.id as f_id,f.title as f_title')
                    // 州
                    ->alias('z')
                    // 城市
                    ->join('clt_new_city c','c.state_id = z.id')
                    // 家庭
                    ->join('clt_new_family f','f.city_id = c.id')
                    ->where('z.id',$val['id'])
                    ->select();
            if(!empty($num)){
                $val['num'] = count($num);
            }else{
                $val['num'] = 0;
            }
        }

        foreach ($address_list as $key => &$val) {
            if($val['num']==0){
                unset($address_list[$key]);
            }
            if($val['num']>=5){
                // 需要加hot标签
                $val['is_hot'] = 1;
            }else{
                // 不需要加hot标签
                $val['is_hot'] = 0;
            }
        }

        $key = input('post.key');
        // 当前页
        $now_page = input('page')?input('page'):1;
        // 州id
        $state_id = input('state_id');

        $pageSize =input('limit')?input('limit'):8;

        if(empty($state_id) && $state_id == 0){
            $list = WhFamily::
                where('f.title', 'like', "%" . $key . "%")
                ->field('f.id,f.cover_pic,f.title,f.city_id,f.is_show,f.city_id,f.introduction,f.add_time,f.sort,c.title c_title,s.title s_title')
                ->alias('f')
                ->join('clt_new_city c','f.city_id = c.id')
                ->join('clt_new_state s','c.state_id = s.id')
                ->where('is_show',1)
                ->order('sort desc,add_time desc')
                ->paginate(array('list_rows'=>$pageSize,'page'=>$now_page))
                ->toArray();

            $page_list = WhFamily::
                where('f.title', 'like', "%" . $key . "%")
                ->field('f.id,f.cover_pic,f.title,f.city_id,f.is_show,f.city_id,f.introduction,f.add_time,f.sort,c.title c_title,s.title s_title')
                ->alias('f')
                ->join('clt_new_city c','f.city_id = c.id')
                ->join('clt_new_state s','c.state_id = s.id')
                ->where('is_show',1)
                ->order('sort desc,add_time desc')
                ->paginate(array('list_rows'=>$pageSize,'page'=>$now_page))
                ; 
        }else{
            $list = Db::table('clt_new_family')
                ->field('f.id,f.cover_pic,f.title,f.city_id,f.is_show,f.city_id,f.introduction,foadd_time,f.sprt,c.title c_title,s.title s_title')
                ->alias('f')
                ->join('clt_new_city c','f.city_id = c.id')
                ->join('clt_new_state s','c.state_id = s.id')
                ->where('s.id',$state_id)
                ->where('f.is_show',1)
                ->order('sort desc,add_time desc')
                ->paginate(array('list_rows'=>$pageSize,'page'=>$now_page))
                ->toArray();
            $page_list = Db::table('clt_new_family')
                ->field('f.id,f.cover_pic,f.title,f.city_id,f.is_show,f.city_id,f.introduction,f.add_time,fosprt,c.title c_title,s.title s_title')
                ->alias('f')
                ->join('clt_new_city c','f.city_id = c.id')
                ->join('clt_new_state s','c.state_id = s.id')
                ->where('s.id',$state_id)
                ->where('f.is_show',1)
                ->order('sort desc,add_time desc')
                ->paginate(array('list_rows'=>$pageSize,'page'=>$now_page))
                ;

        }

        // $page_list->appends(request()->param());
        $page = $page_list->render();
        // 城市列表
        $city_list = $this->city_model->get_list('id,title');
        $change_key_city_list = change_key($city_list);

        foreach ($list['data'] as $k=>&$v){
            $v['add_time'] = date('Y-m-d H:i',$v['add_time']);
            $v['cover_pic'] = config('admin_path') . $v['cover_pic'];
        }

        $video_list = $this->video_model->where('tui_ids','like',20)->order('sort desc,add_time desc')->select()->toArray();
        foreach ($video_list as $key => &$val) {
            $val['video'] = config('admin_path') . $val['video'];
            $val['cover_pic'] = config('admin_path') . $val['cover_pic'];
        }
        
        //TDK
        if(empty($state_id) && $state_id == 0){

            $column_tdk_res['title'] = '美国留学租房_美国寄宿家庭_美国寄宿高中排名';
            $column_tdk_res['description'] = '美国留学租房、美国寄宿家庭、美国寄宿高中选择来彬彬教育筛选，两万家寄宿家庭详细信息给您最好的选择！';
            $column_tdk_res['keywords'] = '美国留学租房,寄宿家庭,美国寄宿家庭';
        }else{
            $state_tdk = $this->state_model->where('id',$state_id)->field('title,keyword,describe')->find();

            $column_tdk_res['title'] = '美国'.$state_tdk['title'].'寄宿家庭_寄宿高中信息';
            $column_tdk_res['description'] = $state_tdk['describe'];
            $column_tdk_res['keywords'] = $state_tdk['keyword'];
        }

        $this->assign('column_tdk_res',$column_tdk_res);
         //热门标签
        $label_list = Db::table('clt_new_label')->where('recommend_id','like','%44%')->field('title,href')->select();
        
        $this->assign('video_list',$video_list);
        $this->assign('state_id',$state_id);
        $this->assign('label_list',$label_list);
        $this->assign('now_page',$now_page);
        $this->assign('page', $page);
        $this->assign('address_list',$address_list);
        $this->assign('testkey', $key);
        $this->assign('page_list',$page_list);
        $this->assign('list',$list);
        return $this->fetch();
    }

    /**
     * @function [function]
     * @Author   JFY
     * @DateTime 2019-03-06T09:31:10+0800
     * @return   [type]                             [description]
     */
    public function periphery_school(){
        $data = input();
        if(empty($data['familyId'])){
            return json_msg(-1,'家庭id不能为空');
        }
        $list = $this->family_model->where('id',$data['familyId'])->find();
        $school_name = json_decode($list['school_name'],true);
        $school_logo = json_decode($list['school_logo'],true);
        $school_grade = json_decode($list['school_grade'],true);

        $school_list = [];

        if(!empty($school_name)){
            foreach ($school_name as $key => $val) {
                $school_list[$key]['name'] = $val;
                $school_list[$key]['logo'] = config('admin_path') . $school_logo[$key];
                $school_list[$key]['grade'] = $school_grade[$key];
            } 
        }else{
            $return = [];
        }

        if($data['limit']==1){
            // 截取前4个
            $return = array_slice($school_list,0,4);
        }elseif($data['limit']==0){
            // 返回除了前4个的所有
            $return = array_slice($school_list,4);
        }

        $arr = [];
        $arr['count'] = count($school_list);
        $arr['datas'] = $return; 
        echo json_encode($arr,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);die;

    }

}