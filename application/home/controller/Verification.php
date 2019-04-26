<?php

namespace app\home\controller;

use think\Controller;

class Verification extends Controller
{
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
		//返回json字符串
		$postFields = json_encode($postFields);       	

		//启动一个curl会话
		$ch = curl_init ();			

		//要访问的路径
		curl_setopt( $ch, CURLOPT_URL, $url ); 			

		//设置head头   抓取指定页面内容
		curl_setopt( $ch, CURLOPT_HTTPHEADER, array(		
			'Content-Type: application/json; charset=utf-8'	
			)
		);

		//获取的信息以文件流的形式返回
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );		

		//发送一个常规的post请求
		curl_setopt( $ch, CURLOPT_POST, 1 );			

		//post提交的数据包
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $postFields);		

        //设置超时限制防止死循环
        curl_setopt( $ch, CURLOPT_TIMEOUT,1); 

        //从证书中检查ssl加密算法是否存在
        curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);

        //对认证证书来源的检查
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);

        //执行操作
		$ret = curl_exec ( $ch );
        if (false == $ret) {
            $result = curl_error(  $ch);
        } else {
        	//抓捕异常
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
