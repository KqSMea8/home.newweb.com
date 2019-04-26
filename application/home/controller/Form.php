<?php

namespace app\home\controller;
use app\home\model\FormModel;
use app\home\controller;
use think\Db;
use app\home\controller\Verification;



/**
 * 美国本科
 */
class Form extends Common
{
    public function addForm(){
        header("Access-Control-Allow-Origin: *");
//        $servername = $_SERVER['SERVER_NAME'];//当前服务器
//        $url_from = $_SERVER['HTTP_REFERER']; //前一URL
//
//        if ('/'.$servername.'/' != substr($url_from, 7, strlen($servername))) {
//            $is_same_site = false;
//        } else {
//            $is_same_site = true;
//        }
//        print_r($servername);
//        print_r(substr($url_from, 7, strlen($servername)));
//        die;
//        /* 动作 */
//        if (!$is_same_site) {
//            die('禁止爬墙~~');
//        }
//       apd_dump_function_table
        if (!empty(input('param.phone')) ){
            if(preg_match("/^1[34578]{1}\d{9}$/",input('param.phone'))){
                $param = input('param.');
                $param['ipsite'] = $_SERVER["REMOTE_ADDR"];
                $param['add_time'] = time();
                // $param['uname'] = input('param.uname');     
                // $param['iphone'] = input('param.iphone');
                // $param['question'] = input('param.question');
                // $param['course'] = input('param.course');
                // $param['sclass'] = input('param.sclass');
                // $param['degree'] = input('param.degree');
                // $param['purpose'] = input('param.purpose');
                // $param['zclass'] = input('param.zclass');
                // $param['cg_time'] = input('param.cg_time');
                // $param['address'] = input('param.address');
                // $param['type'] = input('param.type');
                // $param['urlsite'] = input('param.urlsite');
                // $param['add_time'] = date('Y-m-d H:i:s');

                $pcform=new FormModel();

                $where['phone']=$param['phone'];
                $where1['ipsite']=$param['ipsite'];
                $count=$pcform->iphoneCount($where);
                $count1=$pcform->iphoneCount($where1);
                //判断type类型
                if( $param['type'] !== ''){
                    $msg = '免费电话，咨询手机号：{$var},咨询姓名:'.$param['name'].'';
                }else{
                    $msg = '表单信息，咨询手机号：{$var},咨询姓名:'.$param['name'].'';
                }
                // 判断 IP出现几次
                // if($count1 < 3){
                    // 判断 手机号出现几次
                    if($count<6){
                            // $data_iphone=['15201619891','17611322825','17600782315'];
                            // $data_iphone=['15176240239'];
                            $data_iphone=['15201619891','13911948461','13401042310'];
                            // $data_iphone=['17611322825'];
                            $clapi = new Verification();
                            for ($i=0;$i<count($data_iphone);$i++){
                                $params = $data_iphone[$i].','. $param['phone'];
                                $result = $clapi->sendVariableSMS($msg, $params);
                            }

                        $add_pcform = $pcform->save($param);

                        return json_msg(1, '', '您的电话已提交，稍后会有专职顾问与您联系，请保持电话畅通。');
                    }

                    return json_msg(1, '', '您的电话已提交，稍后会有专职顾问与您联系，请保持电话畅通。');
                // }
                // return json_msg(1, '', '您的电话已提交，稍后会有专职顾问与您联系，请保持电话畅通。');
            }else{
                return json_msg(2, '', '请注意输入的手机号格式');
            }
        }
    }
    /**
     * 发送短信
     *
     * @param string $mobile 		手机号码
     * @param string $msg 			短信内容
     * @param string $needstatus 	是否需要状态报告
     */
    public function sendSMS( $mobile, $msg, $needstatus = 'true') {
        $chuanglan_config['api_send_url'] = 'http://smssh1.253.com/send/json';
        //创蓝账号 替换成你自己的账号
        $chuanglan_config['api_account']	= 'N7506544';
        //创蓝密码 替换成你自己的密码
        $chuanglan_config['api_password']	= '3JN18BfVEpd0df';

        //创蓝接口参数
        $postArr = array (
            'account'  =>  $chuanglan_config['api_account'],
            'password' => $chuanglan_config['api_password'],
            'msg' => urlencode($msg),
            'phone' => $mobile,
            'report' => $needstatus
        );

        $result = $this->curlPost($chuanglan_config['api_send_url'] ,$postArr);
        return $result;
    }



    /**
     * 发送变量短信
     *
     * @param string $msg 			短信内容
     * @param string $params 	最多不能超过1000个参数组
     */
    public function sendVariableSMS( $msg, $params) {
        $chuanglan_config['API_VARIABLE_URL'] = 'http://smssh1.253.com/variable/json';
        //创蓝账号 替换成你自己的账号
        $chuanglan_config['api_account']	= 'N7506544';
        //创蓝密码 替换成你自己的密码
        $chuanglan_config['api_password']	= '3JN18BfVEpd0df';

        //创蓝接口参数
        $postArr = array (
            'account' => $chuanglan_config['api_account'],
            'password' =>$chuanglan_config['api_password'],
            'msg' => $msg,
            'params' => $params,
            'report' => 'true'
        );

        $result = $this->curlPost( $chuanglan_config['API_VARIABLE_URL'], $postArr);
        return $result;
    }

    /**
     * 通过CURL发送HTTP请求
     * @param string $url  //请求URL
     * @param array $postFields //请求参数
     * @return mixed
     */
    private function curlPost($url,$postFields){
        $postFields = json_encode($postFields);
        $ch = curl_init ();
        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json; charset=utf-8'
            )
        );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $ch, CURLOPT_POST, 1 );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $postFields);
        curl_setopt( $ch, CURLOPT_TIMEOUT,1);
        curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
        $ret = curl_exec ( $ch );
        if (false == $ret) {
            $result = curl_error(  $ch);
        } else {
            $rsp = curl_getinfo( $ch, CURLINFO_HTTP_CODE);
            if (200 != $rsp) {
                $result = "请求状态 ". $rsp . " " . curl_error($ch);
            } else {
                $result = $ret;
            }
        }
        curl_close ( $ch );
        return $result;
    }
}