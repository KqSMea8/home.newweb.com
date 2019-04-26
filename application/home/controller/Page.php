<?php

/**
 * @Author: Administrator
 * @Date:   2019-02-01 11:50:41
 * @Last Modified by:   dingxufeng
 * @Last Modified time: 2019-04-03 16:51:32
 */
namespace app\home\controller;

use think\Request;
use think\db;

use app\home\model\TutorModel;      //导师表

// 导师类型表
use app\home\model\TutorTypeModel;
class Page extends Common{

    public function initialize(){
        parent::initialize();

        //导师类型  导师
        $this->tutor_model = new TutorModel();
        $this->tutor_type_model = new TutorTypeModel();


    }
        
    /**
     * @function [高中费用]
     * @Author   DingXuFeng
     * @DateTime 2019-02-25T14:50:35+0800
     * @return   [type]                   [description]
     */
    public function seniormoney()
    {   
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(7,1);
        $this->assign('column_tdk_res',$column_tdk_res);
    	return $this->fetch();
    }

    /**
     * @function [高中申请]
     * @Author   DingXuFeng
     * @DateTime 2019-02-25T15:19:58+0800
     * @return   [type]                   [description]
     */
    public function seniorsqgl()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(8,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        return $this->fetch();
    }

    /**
     * @function [高中排名]
     * @Author   DingXuFeng
     * @DateTime 2019-02-27T14:58:36+0800
     * @return   [type]                   [description]
     */
    public function seniorsort()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(9,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        return $this->fetch();
    }

    /**
     * @function [9-12年级]
     * @Author   DingXuFeng
     * @DateTime 2019-02-27T14:59:21+0800
     * @return   [type]                   [description]
     */
    public function high_school()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(10,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        return $this->fetch();
    }



    /**
     * @function [7-8年级]
     * @Author   DingXuFeng
     * @DateTime 2019-02-27T15:49:31+0800
     * @return   [type]                   [description]
     */
    public function middle_school()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(11,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        return $this->fetch();
    }


    /**
     * @function [出国考试]
     * @Author   DingXuFeng
     * @DateTime 2019-02-27T16:41:05+0800
     * @return   [type]                   [description]
     */
    public function testprep()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(12,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        return $this->fetch();
    }

    /**
     * @function [衔接课程]
     * @Author   DingXuFeng
     * @DateTime 2019-02-28T13:35:55+0800
     * @return   [type]                   [description]
     */
    public function goclass()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(13,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        return $this->fetch();
    }

    /**
     * @function [海外监管]
     * @Author   DingXuFeng
     * @DateTime 2019-02-28T16:12:22+0800
     * @return   [type]                   [description]
     */
    public function overseashome()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(14,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        return $this->fetch();
    }


    /**
     * @function [研究生工科]
     * @Author   DingXuFeng
     * @DateTime 2019-02-28T16:12:37+0800
     * @return   [type]                   [description]
     */
    public function engineering()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(15,1);
        
        $tutor_arr = $this->tui_info(58);
        $this->assign([
            'column_tdk_res'=>$column_tdk_res,
            'tutor_arr'=>$tutor_arr
        ]);
        return $this->fetch();
    }


    /**
     * @function [研究生理科]
     * @Author   DingXuFeng
     * @DateTime 2019-02-28T17:50:50+0800
     * @return   [type]                   [description]
     */
    public function science()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(16,1);
        
        $tutor_arr = $this->tui_info(62);
        $this->assign([
            'column_tdk_res'=>$column_tdk_res,
            'tutor_arr'=>$tutor_arr
        ]);
        return $this->fetch();
    }


    /**
     * @function [研究生文科]
     * @Author   DingXuFeng
     * @DateTime 2019-02-28T18:01:54+0800
     * @return   [type]                   [description]
     */
    public function liberal_arts()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(17,1);
        
        $tutor_arr = $this->tui_info(60);
        $this->assign([
            'column_tdk_res'=>$column_tdk_res,
            'tutor_arr'=>$tutor_arr
        ]);
        return $this->fetch();
    }


    /**
     * @function [研究生商科]
     * @Author   DingXuFeng
     * @DateTime 2019-02-28T20:41:57+0800
     * @return   [type]                   [description]
     */
    public function commerce()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(18,1);
        

        $tutor_arr = $this->tui_info(55);
        $this->assign([
            'column_tdk_res'=>$column_tdk_res,
            'tutor_arr'=>$tutor_arr
        ]);
        return $this->fetch();
    }


    /**
     * @function [研究生艺术]
     * @Author   DingXuFeng
     * @DateTime 2019-02-28T20:57:31+0800
     * @return   [type]                   [description]
     */
    public function postgraduate_art()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(19,1);
        
        $tutor_arr = $this->tui_info(61);
        $this->assign([
            'column_tdk_res'=>$column_tdk_res,
            'tutor_arr'=>$tutor_arr
        ]);
        return $this->fetch();
    }

    /**
     * @function [高中面试]
     * @Author   DingXuFeng
     * @DateTime 2019-02-28T21:03:32+0800
     * @return   [type]                   [description]
     */
    public function interview()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(20,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        return $this->fetch();
    }


    /**
     * @function [综合大学]
     * @Author   DingXuFeng
     * @DateTime 2019-02-28T21:18:43+0800
     * @return   [type]                   [description]
     */
    public function comprehensive()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(21,1);
        
        $tutor_arr = $this->tui_info(57);
        $this->assign([
            'column_tdk_res'=>$column_tdk_res,
            'tutor_arr'=>$tutor_arr
        ]);
        return $this->fetch();
    }


    /**
     * @function [文理学院]
     * @Author   DingXuFeng
     * @DateTime 2019-02-28T21:28:42+0800
     * @return   [type]                   [description]
     */
    public function sciences()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(22,1);
        
        $tutor_arr = $this->tui_info(63);
        $this->assign([
            'column_tdk_res'=>$column_tdk_res,
            'tutor_arr'=>$tutor_arr
        ]);
        return $this->fetch();
    }


    /**
     * @function [社区大学]
     * @Author   DingXuFeng
     * @DateTime 2019-03-01T10:47:07+0800
     * @return   [type]                   [description]
     */
    public function community()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        //TDK        
        $column_tdk_res = $this->pagetdk->tdk_info(23,1);

        $tutor_arr = $this->tui_info(56);
        $this->assign([
            'column_tdk_res'=>$column_tdk_res,
            'tutor_arr'=>$tutor_arr
        ]);
        return $this->fetch();
    }


    /**
     * @function [艺术高中]
     * @Author   DingXuFeng
     * @DateTime 2019-03-01T11:09:16+0800
     * @return   [type]                   [description]
     */
    public function art_high()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(24,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        return $this->fetch();
    }

    /**
     * @function [蓝带高中]
     * @Author   DingXuFeng
     * @DateTime 2019-03-01T11:22:31+0800
     * @return   [type]                   [description]
     */
    public function blue_ribbon()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(25,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        return $this->fetch();
    }

    /**
     * @function [寄宿高中]
     * @Author   DingXuFeng
     * @DateTime 2019-03-01T11:26:38+0800
     * @return   [type]                   [description]
     */
    public function lodging()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(26,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        return $this->fetch();
    }

    /**
     * @function [走读高中]
     * @Author   DingXuFeng
     * @DateTime 2019-03-01T11:34:22+0800
     * @return   [type]                   [description]
     */
    public function attnd_high()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(27,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        return $this->fetch();
    }

    /**
     * @function [高中选校]
     * @Author   DingXuFeng
     * @DateTime 2019-03-01T14:42:01+0800
     * @return   [type]                   [description]
     */
    public function seniorcompass()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(28,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        return $this->fetch();
    }

    /**
     * @function [本科申请条件]
     * @Author   DingXuFeng
     * @DateTime 2019-03-01T15:00:27+0800
     * @return   [type]                   [description]
     */
    public function collegesqgl()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(29,1);
        
        $tutor_arr = $this->tui_info(54);
        $this->assign([
            'column_tdk_res'=>$column_tdk_res,
            'tutor_arr'=>$tutor_arr
        ]);
        return $this->fetch();
    }

    /**
     * @function [本科选校]
     * @Author   DingXuFeng
     * @DateTime 2019-03-01T15:19:29+0800
     * @return   [type]                   [description]
     */
    public function collegecompass()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(30,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        return $this->fetch();
    }


    /**
     * @function [本科奖学金]
     * @Author   DingXuFeng
     * @DateTime 2019-03-01T15:47:56+0800
     * @return   [type]                   [description]
     */
    public function collegejxj()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(31,1);
        $this->assign([
            'column_tdk_res'    =>  $column_tdk_res

        ]);
        return $this->fetch();
    }


    /**
     * @function [本科留学费用]
     * @Author   DingXuFeng
     * @DateTime 2019-03-01T16:06:11+0800
     * @return   [type]                   [description]
     */
    public function collegemoney()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(32,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        return $this->fetch();

    }

    /**
     * @function [本科转学]
     * @Author   DingXuFeng
     * @DateTime 2019-03-01T16:19:55+0800
     * @return   [type]                   [description]
     */
    public function transfer()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(33,1);
        
        $tutor_arr = $this->tui_info(64);
        $this->assign([
            'column_tdk_res'=>$column_tdk_res,
            'tutor_arr'=>$tutor_arr
        ]);
        return $this->fetch();
    }

    /**
     * @function [本科直升]
     * @Author   DingXuFeng
     * @DateTime 2019-03-01T16:22:26+0800
     */
    public function helicopter()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(34,1);
        

        $tutor_arr = $this->tui_info(59);
        $this->assign([
            'column_tdk_res'=>$column_tdk_res,
            'tutor_arr'=>$tutor_arr
        ]);
        return $this->fetch();
    }

    /**
     * @function [本科专业]
     * @Author   DingXuFeng
     * @DateTime 2019-03-01T16:28:14+0800
     * @return   [type]                   [description]
     */
    public function collegemajor()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);

        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(35,1);

        $tutor_arr = $this->tui_info(53);
        $this->assign([
            'column_tdk_res'=>$column_tdk_res,
            'tutor_arr'=>$tutor_arr
        ]);
        return $this->fetch();
    }


    /**
     * @function [大学排名]
     * @Author   DingXuFeng
     * @DateTime 2019-03-01T16:41:15+0800
     * @return   [type]                   [description]
     */
    public function university_ranking()
    {
        //网址规范标签
        $pc_url = $_SERVER['REQUEST_URI'];
        $this->assign('pc_url',$pc_url);
        
        //TDK
        $column_tdk_res = $this->pagetdk->tdk_info(36,1);
        $this->assign('column_tdk_res',$column_tdk_res);
        return $this->fetch();
    }
	
	/**
	 * slate
	 */
	public function slate()
	{
		//网址规范标签
		$pc_url = $_SERVER['REQUEST_URI'];
		$this->assign('pc_url',$pc_url);
        
        //TDK		
        $column_tdk_res = $this->pagetdk->tdk_info(37,1);
		$this->assign('column_tdk_res',$column_tdk_res);
		return $this->fetch();
	}

    function tui_info( $tui_id )
    {
        //查询类型
        $type_arr = $this->tutor_type_model->select()->toArray();

        //根据类型查询数据
        foreach ($type_arr as $k => $v) {
            
            if( $v['id'] == 1 || $v['id'] == 2  ){
                $type_arr[$k]['rewrite'] = 'teacher';
            }else if( $v['id'] == 3 ){
                $type_arr[$k]['rewrite'] = 'sister';
            }else{
                unset($type_arr[$k]['rewrite']);
            }


            if( $v['id'] == 1 ){
                $field = "id,title,thumbnail,adept";
            }else if( $v['id'] == 2 ){
                $field = "id,title,thumbnail,adept";
            }else if( $v['id'] == 3 ){
                $field = "id,title,thumbnail,school,major";
            }else if( $v['id'] == 4 ){
                $field = "id,title,thumbnail,adept";
            }else if( $v['id'] == 5 ){
                $field = "id,title,thumbnail,school,major";
            }else{
                $field = "id,title,thumbnail,adept,type,major";
            }



            $type_arr[$k]['tree'] = $this->tutor_model->where('type',$v['id'])->where('tui_id','like','%'.$tui_id.'%')->order('sort','desc')->field($field)->limit(6)->select()->toArray();
        }
        return $type_arr;

    }
	
	/**
	 * @function [百利1]
	 * @Author   DingXuFeng
	 * @DateTime 2019-03-01T16:28:14+0800
	 * @return   [type]                   [description]
	 */
	public function yingxiao1()
	{
// 	    //网址规范标签
// 	    $pc_url = $_SERVER['REQUEST_URI'];
// 	    $this->assign('pc_url',$pc_url);
// 	
// 	    //TDK
// 	    $column_tdk_res = $this->pagetdk->tdk_info(35,1);
// 	
// 	    $tutor_arr = $this->tui_info(53);
// 	    $this->assign([
// 	        'column_tdk_res'=>$column_tdk_res,
// 	        'tutor_arr'=>$tutor_arr
// 	    ]);
	    return $this->fetch();
	}

	/**
	 * @function [百利2]
	 * @Author   DingXuFeng
	 * @DateTime 2019-03-01T16:28:14+0800
	 * @return   [type]                   [description]
	 */
	public function yingxiao2()
	{
// 	    //网址规范标签
// 	    $pc_url = $_SERVER['REQUEST_URI'];
// 	    $this->assign('pc_url',$pc_url);
// 	
// 	    //TDK
// 	    $column_tdk_res = $this->pagetdk->tdk_info(35,1);
// 	
// 	    $tutor_arr = $this->tui_info(53);
// 	    $this->assign([
// 	        'column_tdk_res'=>$column_tdk_res,
// 	        'tutor_arr'=>$tutor_arr
// 	    ]);
	    return $this->fetch();
	}
	
	/**
		 * @function [百利3]
		 * @Author   DingXuFeng
		 * @DateTime 2019-03-01T16:28:14+0800
		 * @return   [type]                   [description]
		 */
		public function yingxiao3()
		{
	// 	    //网址规范标签
	// 	    $pc_url = $_SERVER['REQUEST_URI'];
	// 	    $this->assign('pc_url',$pc_url);
	// 	
	// 	    //TDK
	// 	    $column_tdk_res = $this->pagetdk->tdk_info(35,1);
	// 	
	// 	    $tutor_arr = $this->tui_info(53);
	// 	    $this->assign([
	// 	        'column_tdk_res'=>$column_tdk_res,
	// 	        'tutor_arr'=>$tutor_arr
	// 	    ]);
		    return $this->fetch();
		}
	
	
}