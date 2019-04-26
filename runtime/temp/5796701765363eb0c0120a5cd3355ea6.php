<?php /*a:6:{s:75:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\art_high.html";i:1552974566;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1551955433;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1551670345;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1552959452;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1552979867;s:86:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_highSchool.html";i:1552974318;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title><?php echo htmlentities($column_tdk_res['title']); ?>_彬彬教育</title>
	<meta name="description" content="<?php echo htmlentities($column_tdk_res['description']); ?>">
	<meta name="keywords" content="<?php echo htmlentities($column_tdk_res['keywords']); ?>">
	<meta name="shenma-site-verification" content="60cb3d48af49fea76b809fd89a870ef9_1532595802"> 
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<link rel="s<>hortcut icon" href="/static/home/img/favicon.ico">
		<!-- 公共样式 -->
		<link rel="stylesheet" href="/static/home/css/public/share.css" />
		<!-- jQuery -->
		<script type="text/javascript" src="/static/home/js/public/jquery-1.12.3.min.js"></script>

		<link rel="canonical" href="http://www.beliwin.com<?php echo htmlentities($pc_url); ?>">
		<meta name="applicable-device" content="pc">
		<meta http-equiv="Cache-Control" content="no-transform">
		<meta name="renderer" content="webkit|ie-comp|ie-stand" />

		
		<!-- swiper -->
		<link rel="stylesheet" href="/static/home/css/public/swiper/idangerous.swiper.css" />
		<script src="/static/home/js/public/swiper/idangerous.swiper.min.js" type="text/javascript" charset="utf-8"></script>

		
		<!--引入 主css-->
		<link rel="stylesheet" href="/static/home/css/page/art_high.css" />
	</head>
	<style type="text/css">
		.banner {background: url(/static/home/img/page/yishugaozhong/banner.jpg) no-repeat center center;background-size: cover;width: 100%;height: 532px;position: relative;}
		.anniu {width:375px;height:50px;background:rgba(209,127,127,1);border-radius:4px;position: absolute;bottom:80px;left:40%;}
		.anniu a{text-align: center;color: #fff;line-height: 50px;font-size: 24px;letter-spacing: 1px;background:#fff;color:rgba(209,127,127,1);border: 1px solid rgba(209,127,127,1);}
		.anniu a:hover{background:rgba(209,127,127,1);color: #fff;}
		.bannerNav {width: 100%;height: 60px;background-color: #EEEEEE;line-height: 60px;font-size: 0;}
		.bannerNav>div {height: 60px;}
		.bannerNav span {font-size: 17px;margin-right:42px;cursor: pointer;}
		.bannerNav span.active {color:#D17F7F;font-weight: bold;}
		.why li{width:370px;height:130px;border-radius:4px;border:2px solid #D17F7F;margin: 45px 30px 0 0;float: left;box-sizing: border-box;}
		.why li img{width:98px;height:98px;margin: 16px 26px 0 26px;float: left;}
		.why li p{line-height:24px;float: left;margin-top:36px;color: #000000;letter-spacing: 2px;}
		.titles {font-size:38px;font-weight:bold;color: rgba(0, 0, 0, 1);text-align: center;margin:0px 0 5px 0;padding-top:80px;}
		.banner h1{
			font-size: 64px;
			line-height: 88px;
			padding-top: 144px;
			padding-bottom: 6px;
			font-weight: normal;
			text-shadow:0px 3px 4px rgba(0,0,0,0.72);
			color: #FFFFFF;
			text-align: center;
		}
	</style>
	<body>
		<!-- 导航 -->
		<style type="text/css">
	
	/* topNav */
	.topNav{
		width: 100%;
		height: 99px;
		background-color: #fff;
		position: relative;
		z-index: 999;
		box-shadow: 0px 3px 6px rgba(0,0,0,0.16);
	}
	.topNavBox{
		width: 1536px;
		margin-left: auto;
		margin-right: auto;
		position: static;
	}
	.topNav .topNavBox>a>img{
		width: 187px;
		margin-top: 27px;
		margin-right: 32px;
	}
	
	.topNav .nav{
		position: static;
	}
	.topNav .nav>div.fl{
		position: static;
	}
	.topNav .nav>div.fl>a{
		float: left;
		line-height: 96px;
		margin: 0 14px;
		font-size: 16px;
		color: #000000;
		font-weight: 400;
	}
	.topNav .nav>div.fl:hover>a{
		color: #FF5B5A;
		border-bottom: 3px solid #FF7062;
	}
	.topNav .nav>div.fl a.active{
		border-bottom: 3px solid #FF7062;
	}
	.topNav .nav>div.fl .box{
		width: 100%;
		background-color: #FFFFFF;
		background-color: rgba(255,255,255,0.9);
		left: 0;
		top: 99px;
		position: absolute;
		display: none;
		padding-bottom: 32px;
		z-index: 999;
	}
	.topNav .nav>div.fl .box>div{
		width: 1040px;
		margin-left: auto;
		margin-right: auto;
	}
	.topNav .nav>div.fl .box>div h3{
		font-size: 15px;
		color: #FF5B5A;
		margin-top: 22px;
		margin-bottom: 10px;
	}
	.topNav .nav>div.fl .box>div>div a{
		font-size: 15px;
		color: #333333;
		width: 140px;
		display: inline-block;
	}
	.topNav .nav>div.fl .box>div>div a:hover{
		color: #FF5B5A;
	}
	
	.topNavBox .ss{
		border-left: 2px solid #333333;
		padding-left: 15px;
		margin-top: 37px;
	}
	.topNavBox .ss h3{
		display: inline-block;
		height: 22px;
		cursor:pointer;
		margin-right: 40px;
	}
	.topNavBox .ss h3 img{
		width: 21px;
		height: 22px;
	}
	.topNavBox .ss .input{
		height: 30px;
		border: 1px solid #FF7062;
		border-radius: 4px;
		line-height: 30px;
		font-size: 13px;
		display: none;
		margin-right: 17px;
	}
	.topNavBox .ss .input input{
		float: left;
		height: 30px;
		text-indent: 15px;
	}
	.topNavBox .ss .input button{
		width: 41px;
		height: 30px;
		background-color: #FF7062;
		border-radius: 0 4px 4px 0;
		float: left;
		position: relative;
	}
	.topNavBox .ss .input button img{
		width: 18px;
	    height: 19px;
		position: absolute;
		left: 50%;
		top: 50%;
		margin-top: -9.5px;
		margin-left: -9px;
	}
	
	.topNav .phoneR{
		line-height: 99px;
		font-size: 0;
		color: #222222;
		font-weight: bold;
	}
	.topNav .phoneR>img{
		width: 52px;
		height: 52px;
		margin-right: 12px;
		vertical-align: middle;
		cursor:pointer;
	}
	.topNav .phoneR span{
		font-size: 24px;
		vertical-align: middle;
		overflow: hidden;
		display: inline-block;
		white-space: nowrap;
	}
	
	/* 媒体查询 判定在小屏幕下改变顶部导航样式 */
	@media screen and (max-width: 1440px) {
		.topNavBox{
			width: 1360px;
			margin-right: auto;
			margin-left: auto;
		}
		.topNav .topNavBox>a>img{
			width: 177px;
		}
		.topNav .nav>div.fl>a{
			font-size: 14px;
			margin: 0 11px;
		}
		.topNav .phoneR>img{
			width: 50px;
			height: 50px;
		}
		.topNav .phoneR span{
			font-size: 22px;
		}
	}
</style>

<!-- topNav -->
<div class="topNav clearfix">
	<!-- 导航版心部分 -->
	<div class="topNavBox clearfix">
		<a href="/" class="fl"><img src="/static/home/img/home/logoding.png" alt="美国留学_专业的美国留学服务中介机构_彬彬教育" title="美国留学_专业的美国留学服务中介机构_彬彬教育"></a>
		<div class="nav fl">
			<div class="fl">
				<a href="/" class="active">首页</a>
			</div>
			<div class="fl">
				<a href="/middle/" target="_blank">美国中学</a>
				<div class="box">
					<div>
						<h3>我要申请</h3>
						<div><a href="/page/attnd_high.html" target="_blank">走读高中</a><a href="/page/lodging.html" target="_blank">寄宿高中</a><a href="/page/art_high.html" target="_blank">艺术高中</a><a href="/page/blue_ribbon.html" target="_blank">蓝带高中</a></div>
						<h3>规划攻略</h3>
						<div><a href="/page/seniorsqgl.html" target="_blank">申请条件</a><a href="/page/interview.html" target="_blank">面试流程</a><a href="/page/seniorsort.html" target="_blank">院校排名</a><a href="/page/seniorcompass.html" target="_blank">选校指南</a><a href="/page/seniormoney.html" target="_blank">留学费用</a></div>
						<h3>我要就读</h3>
						<div><a href="/page/middle_school.html" target="_blank">初中</a><a href="/page/high_school.html" target="_blank">高中</a></div>
					</div>
				</div>
			</div>
			<div class="fl">
				<a href="/college/" target="_blank">美国本科</a>
				<div class="box">
					<div>
						<h3>我要申请</h3>
						<div><a href="/page/comprehensive.html" target="_blank">综合类大学</a><a href="/page/sciences.html" target="_blank">文理学院</a><a href="/page/community.html" target="_blank">社区大学</a></div>
						<h3>规划攻略</h3>
						<div><a href="/page/collegesqgl.html" target="_blank">申请攻略</a><a href="/page/collegecompass.html" target="_blank">选校指南</a><a href="/page/collegemajor.html" target="_blank">专业介绍</a><a href="/page/university_ranking.html" target="_blank">院校排名</a><a href="/page/collegejxj.html" target="_blank">奖学金</a><a href="/page/collegemoney.html" target="_blank">留学费用</a></div>
						<h3>我要就读</h3>
						<div><a href="/page/helicopter.html" target="_blank">本科直申</a><a href="/page/transfer.html" target="_blank">本科转学</a></div>
					</div>
				</div>
			</div>
			<div class="fl">
				<a href="/graduate/" target="_blank">美国研究生</a>
				<div class="box">
					<div>
						<h3>我要申请</h3>
						<div><a href="/page/engineering.html" target="_blank">工科</a><a href="/page/commerce.html" target="_blank">商科</a><a href="/page/science.html" target="_blank">理科</a><a href="/page/liberal_arts.html" target="_blank">文科</a><a href="/page/postgraduate_art.html" target="_blank">艺术</a></div>
						<h3>规划攻略</h3>
						<div><a href="/article/3-65-1.html" target="_blank">申请规划</a><a href="/article/3-199-1.html" target="_blank">奖学金</a><a href="/article/3-198-1.html" target="_blank">文书写作</a><a href="/article/3-101-1.html" target="_blank">留学费用</a><a href="/article/3-203-1.html" target="_blank">院校排名</a></div>
					</div>
				</div>
			</div>
			<div class="fl">
				<a href="/page/polymerization.html" target="_blank">背景提升</a>
			</div>
			<div class="fl">
				<a href="/page/overseashome.html" target="_blank">海外服务</a>
				<div class="box">
					<div>
						<h3>海外服务</h3>
						<div><a href="/page/overseashome.html" target="_blank">海外监管服务</a><a href="/fmfml/0-1.html" target="_blank">寄宿家庭精选</a><a href="/page/goclass.html" target="_blank">出国衔接课程</a></div>
					</div>
				</div>
			</div>
			<div class="fl">
				<a href="/tutor/special/" target="_blank">服务团队</a>
			</div>
			<!-- <div class="fl">
				<a href="">院校库</a>
			</div> -->
			<div class="fl">
				<a href="/article/0-204-1.html" target="_blank">成功故事</a>
			</div>
			<div class="fl">
				<a href="/activity/0-0-1.html" target="_blank">活动讲座</a>
			</div>
			<div class="fl">
				<a href="/page/testprep.html" target="_blank">出国考试</a>
			</div>
			<div class="fl">
				<a href="/article/0-0-1.html" target="_blank">留学资讯</a>
			</div>
		</div>
		<div class="fl ss">
			<h3><img src="/static/home/img/home/sousuo.png" alt=""></h3>
			<div class="fl input">
				<form action="<?php echo url('search/index'); ?>" method="post">
					<input type="text" name="keywords" placeholder="搜索感兴趣的内容">
					<button><img src="/static/home/img/home/search.png" alt=""></button>
				</form>
			</div>
		</div>
		<div class="phoneR fr">
			<img src="/static/home/img/home/xzixun.png" alt="">
			<span>400 900 9770</span>
		</div>
	</div>
</div>
<div class="abcBannav"></div>
<style type="text/css">
	.abcBannav{
		width: 100%;
		height: 99px;
		display: none;
	}
</style>

<script type="text/javascript">
	
	
</script>
		<!--banner-->
		<div class="banner">
			<h1>美国艺术高中留学</h1>
			<!-- 按钮 -->
			<div class="anniu">
				<a href="javascript:;" onclick="go()"  class="one">获取顶尖艺术高中申请技巧</a>
			</div>
		</div>
		<!--banner-->
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">艺术留学优势</span>
				<span>中美差异</span>
				<span>作品集</span>
				<span>名校推荐</span>
				<span>申请条件</span>
				<span>申请流程</span>
				<span>留学费用</span>
				<span>成功案例</span>
				<span>特色服务</span>
				<span style="margin-right: 0px;">彬彬优势</span>
			</div>
		</div>
		<!--为什么选择美国艺术高中-->
		<div class="why gk_index">
			<div class="titles">为什么选择美国艺术高中</div>
			<div class="gWidth1170">
				 <ul class="clearfix">
				 	<li>
				 		<img src="/static/home/img/page/yishugaozhong/bikaigaokao.png" alt="避开国内艺考竞争压力减半" title="避开国内艺考竞争压力减半" />
				 		<p>避开国内艺考<br />竞争压力减半</p>
				 	</li>
				 	<li>
				 		<img src="/static/home/img/page/yishugaozhong/haiwaiziyuan.png" alt="文化课和语言要求相对普通美国高中较低" title="文化课和语言要求相对普通美国高中较低" />
				 		<p>文化课和语言要求相<br />对普通美国高中较低</p>
				 	</li>
				 	<li style="margin-right: 0px;">
				 		<img src="/static/home/img/page/yishugaozhong/jiuyeqianjinghao.png" alt="很多美国艺术院校可以申请奖学金" title="很多美国艺术院校可以申请奖学金" />
				 		<p>很多美国艺术院校<br />可以申请奖学金</p>
				 	</li>
				 	<li>
				 		<img src="/static/home/img/page/yishugaozhong/shenqingjiangxuejin.png" alt="美国院校艺术氛围浓厚有助于艺术背景提升" title="美国院校艺术氛围浓厚有助于艺术背景提升" />
				 		<p>美国院校艺术氛围浓厚<br />有助于艺术背景提升</p>
				 	</li>
				 	<li>
				 		<img src="/static/home/img/page/yishugaozhong/wenhuake.png" alt="海外资源丰富有利于艺术提升" title="海外资源丰富有利于艺术提升" />
				 		<p>海外资源丰富有<br />利于艺术提升</p>
				 	</li>
				 	<li style="margin-right: 0px;">
				 		<img src="/static/home/img/page/yishugaozhong/yishubeijingtisheng.png" alt="海归艺术人才更具有竞争力，就业前景好" title="海归艺术人才更具有竞争力，就业前景好" />
				 		<p>海归艺术人才更具有<br />竞争力，就业前景好</p>
				 	</li>
				 </ul>
			</div>
		</div>
		<!--为什么选择美国艺术高中-->
		
		<!--美国艺术高中 VS 国内艺术考试-->
		<div class="usa gk_index">
			 <div class="titles">
			 	美国艺术高中 VS 国内艺术考试
			 </div>
			 <div class="gWidth1170">
			 	<div class="craft clearfix">
			 		<div class="craleft fl">
			 			<div class="border">美国艺术高中</div>
			 			<div class="mengs">
			 				<p>西方当代艺术领域，看重学生的个性和创造力，艺术专业分类广泛。 </p>
		 					<p>有些公立院校免学费，当地政府设立艺术留学奖学金计划。</p>
		 					<p>文化课：对成绩要求不高，专业程度：中国学生更占优势。</p>
		 					<p>回国工作/任教/国外就业品牌企业、艺术高校更加青睐海归艺术生。</p>
			 			</div>
			 			
			 			<div class="center">
			 				<button>教学特点</button>
			 				<button>学习费用</button>
			 				<button>升学难度</button>
			 				<button>就业前景</button>
			 			</div>
			 		</div>
			 		<div class="craright fl">
			 			<div class="meng">
			 				<p>前苏联式的艺术教育方式，重视艺术基础和技巧学习，专业课程非常扎实。 </p>
		 					<p>应试、音乐、美术等专业平均，学费一般都在1万-3万之间。</p>
		 					<p>文化课：控制录取分数线大幅提升，专业程度：竞争强度大。</p>
		 					<p>艺术专业就业率不超过45%，多数企业认为国外艺术留学生的含金量更高。</p>
			 			</div>
			 			<div class="borders">国内艺术考试</div>
			 		</div>
			 	</div>
			 </div>
			 <a href="javascript:;" onclick="go()"  class="button">美国艺术高中优势众多，马上申请</a>
		</div>
		<style type="text/css">
			.center{position:absolute;top:24px;right:-54px;z-index:111;}
			.center button{width:120px;height:30px;background:#D17F7F;border-radius:4px;font-size:18px;font-family:MicrosoftYaHei;color:rgba(255,255,255,1);line-height:30px;letter-spacing:1px;color: #fff;text-align: center;margin-top:45px;display:block;}
			.meng{width:463px;margin: 66px 20px 0 90px;}
			.meng p{font-size:18px;color:rgba(0,0,0,1);line-height:24px;margin-top: 20px;color: #fff;}
			.mengs{width:463px;    margin: 30px 23px 0 40px;}
			.mengs p{font-size:18px;color:rgba(0,0,0,1);line-height:24px;margin-top: 20px;color: #000;}
			.craft{margin-top:40px;}
			.border{width:239px;height:50px;background:rgba(246,156,156,1);font-size:22px;font-weight:bold;color:rgba(255,255,255,1);line-height:50px;text-align: center;}
			.borders{width:239px;height:50px;background:rgba(246,156,156,1);font-size:22px;font-weight:bold;color:rgba(255,255,255,1);line-height:50px;text-align: center;position: absolute;bottom: 0px;right: 0px;}
			.craleft{width:586px;height:430px;background:rgba(191,116,118,.5);position: relative;}
			.craright{width:584px;height:430px;background:url(/static/home/img/page/yishugaozhong/guoneiyishukaoshi.png) no-repeat center center;background-size:cover ;}
			.usa{width:100%;height:802px;background:url(/static/home/img/page/yishugaozhong/meiguoyihsugaozhongVS.png) no-repeat center center;background-size:cover;margin-top: 60px;}
			
			.lodge {width: 100%;height:600px;}
			.boxs {width:270px;height: 273px;background: url(/static/home/img/page/yishugaozhong/zhengtihua.png) no-repeat center center;background-size: cover;position: relative;margin-right:30px;}
			.boxss{width:210px;height: 203px;background: url(/static/home/img/page/zoudugaozhong/jisujiatinganzhifuwu.jpg) no-repeat center center;background-size: cover;position: relative;margin-right:30px;}
			.box2{background: url(/static/home/img/page/yishugaozhong/shoujisucai.png) no-repeat center center;width:270px;height: 273px;background-size: cover;}
			.box3{background: url(/static/home/img/page/yishugaozhong/guochengdezhongyaoxing.png) no-repeat center center;width:270px;height: 273px;background-size: cover;}
			.box4{background: url(/static/home/img/page/yishugaozhong/chuangyilingganzhuanhua.png) no-repeat center center;width:270px;height: 273px;background-size: cover;margin-right: 0px;}
			.boxs .hidden1 {position: absolute;left: 0;top: 0;width: 100%;height: 100%;font-size: 20px;color: #FFFFFF;font-weight: bold;text-align: center;line-height: 270px;background:rgba(0,0,0,.5);display: block;}
			.boxs .hidden2 {
			    position: absolute;
			    left: 0;
			    top: 0;
			    width: 100%;
			    height: 100%;
			    background: rgba(23,14,1,0.6);
			    color: #FFFFFF;
			    text-align: center;
			    display: none;
			}
			.boxs .hidden2:before{content: '';width: 0;height: 100%;display: inline-block;vertical-align: middle;}
			.boxs .hidden2>div{width: 220px;display: inline-block;vertical-align: middle;}
			.boxs .hidden2 p{text-align: left;}
			.boxs .hidden2  a{width:163px;height:36px;border-radius:4px;border:1px solid rgba(255,255,255,1);font-size:16px;font-weight:bold;color:rgba(255,255,255,1);line-height:36px;letter-spacing:2px;margin: 20px auto;}
			.boxs .hidden2 h3 {font-size: 18px;padding-bottom: 20px;}
			.button {width: 352px;height: 50px;background:#fff;border-radius: 4px;font-size: 20px;
			    color:#D17F7F;
			    line-height: 50px;
			    text-align: center;
			    margin: 50px auto;
			    border: 1px solid #D17F7F;
			}
			.button:hover{background:#D17F7F;color: #fff;}
			.liuxue{margin-top: 40px;}
		</style>
		<!--美国艺术高中 VS 国内艺术考试-->
		
		<!--美国寄宿高中特点-->
	<div class="lodge gk_index">
		<div class="gWidth1170">
			<div class="titles">
				如何快速打造高逼格作品集
			</div>
			<div class="liuxue">
					<div class="content clearfix">
					<div class="boxs fl">
						<div class="hidden1" >整体化，切忌局部放大</div>
						<div class="hidden2">
							<div>
								<h3>整体化，切忌局部放大</h3>
								<p>院校选择较少，接受中国学生的寄宿中学全美大约有300所左右，其中大部分历史悠久，学术科目较多。</p>
							</div>
						</div>
					</div>
					<div class="boxs box2 fl">
						<div class="hidden1">收集一手素材</div>
						<div class="hidden2">
							<div>
								<h3>收集一手素材</h3>
								<p>尽量多的准备一手材料，比如自己的创意拼贴、创意手绘、摄影作品、模型等，只要是自己做的都算是一手，美国艺术高中特别看重独立创作能力。</p>
							</div>
						</div>
					</div>
					<div class="boxs box3 fl">
						<div class="hidden1">过程的重要性</div>
						<div class="hidden2">
							<div>
								<h3>过程的重要性</h3>
								<p>美国艺术高中强调的是过程论而不是国内的结果论，国外的学校更希望在作品集中看到同学们发现问题、解决问题的能力与整个过程记录。</p>
							</div>
						</div>
					</div>
					<div class="boxs box4 fl">
						<div class="hidden1">创意灵感转化</div>
						<div class="hidden2">
							<div>
								<h3>创意灵感转化</h3>
								<p>除了可以将之前收集的素材做一些视觉元素的提炼之外，还需要根据之前所确定的主题进行故事情节内容的具体推敲，并在每一个部分都尽可能的去细化。</p>
							</div>
						</div>
					</div>
					
				</div>
				<a href="javascript:;" onclick="go()"  class="button">联系彬彬打造高逼格作品集</a>
			</div>
		</div>
	</div>
	<!--美国寄宿高中特点-->
	<!--名校喜欢的作品集风格-->
	<div class="fengge">
		<div class="titles">
				名校喜欢的作品集风格
			</div>
		<div class="gWidth1170">
			<div class="zao">
				<ul class="clearfix">
					<li><img src="/static/home/img/page/yishugaozhong/u394.png" alt="留学生作品集" /></li>
					<li><img src="/static/home/img/page/yishugaozhong/u396.png" alt="留学生作品集" /></li>
					<li><img src="/static/home/img/page/yishugaozhong/u256.png" alt="留学生作品集" / style="width:580px;height:267px;margin-right:0px;"></li>
					<li><img src="/static/home/img/page/yishugaozhong/u260.png" alt="留学生作品集" /  style="width:580px;height:267px;"></li>
					<li><img src="/static/home/img/page/yishugaozhong/u398.png" alt="留学生作品集" /></a></li>
					<li><img src="/static/home/img/page/yishugaozhong/u258.png" alt="留学生作品集" / style="margin-right: 0px;"></li>
				</ul>	
			</div>
		</div>
		<a href="javascript:;" onclick="go()"  class="button">联系彬彬导师指导作品集</a>
	</div>
	<!--名校喜欢的作品集风格-->
	
	<!--美国高中艺术学校-->
	<div class="gWidth1170 gk_index">
		<div class="titles">
			美国高中艺术学校
		</div>
		<div class="skill">
			<ul class="clearfix">
				<li>
					<img src="/static/home/img/page/yishugaozhong/hutaoshanyishugaozhong.png" alt="胡桃山艺术高中" title="胡桃山艺术高中" />
					<div class="none1"><p>胡桃山艺术高中</p><span>Walnuts Hill School for the Arts</span></div>
					<div class="none2">
						<div class="nonetop">
							<p>胡桃山艺术高中</p>
							<span>Walnuts Hill School for the Arts</span>
						</div>
						<div class="nonebtm">
							<p><span>建校时间：</span>1893年 </p>
							<p><span>地理位置：</span>波士顿近郊 </p>
							<p><span>学校特色：</span>美国最古老的艺术高中之一。学校有芭蕾、音乐、戏剧、视觉艺术、写作和出版在艺术领域的教育举世闻名。</p>
							<a href="javascript:;" onclick="go()" >我要申请</a>
						</div>
					</div>
				</li>
				<li><img src="/static/home/img/page/yishugaozhong/aidi.png" alt="艾迪怀德艺术高中" title="艾迪怀德艺术高中" />
				<div class="none1"><p>艾迪怀德艺术高中</p><span>Idyllwild Arts Academy</span></div>
					<div class="none2">
						<div class="nonetop">
							<p>艾迪怀德艺术高中</p>
							<span>Idyllwild Arts Academy</span>
						</div>
						<div class="nonebtm">
							<p><span>建校时间：</span>1986年 </p>
							<p><span>地理位置：</span>西海岸地区 </p>
							<p><span>学校特色：</span>以艺术为主的独立寄宿高中，美国最好的高中之一，小班教学，热门专业有创意写作、舞蹈、电影、影片制作、音乐、戏剧、视觉艺术、AP课程。 </p>
							<a href="javascript:;" onclick="go()" >我要申请</a>
						</div>
					</div>
				
				</li>
				<li style="margin-right: 0px;"><img src="/static/home/img/page/yishugaozhong/yintelao.png" alt="因特劳肯艺术学院" title="因特劳肯艺术学院" />
				<div class="none1"><p>因特劳肯艺术学院</p><span>Interlochen Arts Academy</span></div>
					<div class="none2">
						<div class="nonetop">
							<p>因特劳肯艺术学院</p>
							<span>Interlochen Arts Academy</span>
						</div>
						<div class="nonebtm">
							<p><span>建校时间：</span>1928年 </p>
							<p><span>地理位置：</span>密歇根州的西北部  </p>
							<p><span>学校特色：</span>：美国第一所提供视觉艺术和表演艺术教育的男女混校寄宿高中，主要专业方向包括音乐、戏剧、比较艺术、创意写作、动画艺术、舞蹈和视觉艺术等。  </p>
							<a href="javascript:;" onclick="go()" >我要申请</a>
						</div>
					</div>
				
				</li>
				
				<li><img src="/static/home/img/page/yishugaozhong/jiazhouyishugaozhong.png" alt="弗兰克西纳特拉艺术学校" title="弗兰克西纳特拉艺术学校" />
				<div class="none1"><p>弗兰克西纳特拉艺术学校</p><span>Frank SinatraSchool of the Arts</span></div>
					<div class="none2">
						<div class="nonetop">
							<p>弗兰克西纳特拉艺术学校</p>
							<span>Frank SinatraSchool of the Arts</span>
						</div>
						<div class="nonebtm">
							<p><span>建校时间：</span>2001年 </p>
							<p><span>地理位置：</span>纽约皇后区 </p>
							<p><span>学校特色：</span>学校专注艺术领域的教学，在六个艺术专业包括美术、舞蹈、声乐、器乐、戏剧和电影中开设工作室。每个工作室都有自己的专门的教师、教室、乐团,和表演/展览,学生可向公众展示他们的工作。所有的学生必须为入学试镜。</p>
							<a href="javascript:;" onclick="go()" >我要申请</a>
						</div>
					</div>
				</li>
				<li><img src="/static/home/img/page/yishugaozhong/zhijiage.png" alt="芝加哥艺术学院" title="芝加哥艺术学院" />
				<div class="none1"><p>芝加哥艺术学院</p><span>The Chicago Academy For The Arts</span></div>
					<div class="none2">
						<div class="nonetop">
							<p>芝加哥艺术学院</p>
							<span>The Chicago Academy For The Arts</span>
						</div>
						<div class="nonebtm">
							<p><span>建校时间：</span>1866年</p>
							<p><span>地理位置：</span>芝加哥市 </p>
							<p><span>学校特色：</span>国际肯尼迪中心授予的特色国家级学校，全美四所独立艺术高中之一！学校开设专业方向包括：舞蹈、媒体艺术（电影、动画、创意写作）、音乐、音乐剧、戏剧和视觉艺术。  </p>
							<a href="javascript:;" onclick="go()" >我要申请</a>
						</div>
					</div>
				</li>
				
				<li style="margin-right: 0px;"><img src="/static/home/img/page/yishugaozhong/xiusidun.png" alt="休斯敦艺术高中" title="休斯敦艺术高中" />
					<div class="none1"><p>休斯敦艺术高中</p><span>Art Institute of Houston</span></div>
					<div class="none2">
						<div class="nonetop">
							<p>休斯敦艺术高中</p>
							<span>Art Institute of Houston</span>
						</div>
						<div class="nonebtm">
							<p><span>建校时间：</span>1971年  </p>
							<p><span>地理位置：</span>休斯敦城中心附近  </p>
							<p><span>学校特色：</span>以器乐、声乐、戏剧、舞蹈、视觉艺术、创意写作为主题的学校，2009年被评为大休斯顿地区最好的高中之一。 </p>
							<a href="javascript:;" onclick="go()" >我要申请</a>
						</div>
					</div>
				</li>
			</ul>
		</div>	
		<a href="javascript:;" onclick="go()"  class="button">了解更多院校</a>
	</div>
	<!--美国高中艺术学校-->
	
	<!--美国艺术高中申请条件-->
	<div class="art gk_index">
		<div class="titles">
			美国艺术高中申请条件
		</div>
		<div class="gWidth1170 safir">
			<h4>您只需提供：</h4>
			<div class="text"> 存款证明、护照页、成绩单、提供作品集等材料、配合参加标化考试、积极参加美高面试</div>
			<h4>彬彬教育帮您：</h4>
			<div class="text"><em>01</em><span>制定留学计划 / 提升标准化考试成绩 / 提升语言成绩 / 进行家庭资金规划</span></div>
			<div class="text"><em>02</em><span>选校 / 文书写作 / 背景材料 / 润色指导 / 作品集</span></div>
			<div class="text"><em>03</em><span>递交申请材料 / 跟踪申请状态 / 确认申请结果 / 收获录取offer</span></div>
			<div class="text"><em>04</em><span>准备签证材料 / 面试辅导 / 安排寄宿家庭 / 安排监护团队</span></div>
			<div class="text"><em>05</em><span>缴纳费用 / 行前指导 / 安排体检</span></div>
			<div class="text"><em>06</em><span>预定机票 / 美国接机安排 / 入学指导</span></div>
			<!-- 按钮 -->
		<div class="annius clearfix">
			<a href="javascript:;" onclick="go()"  class="fl">了解申请详情</a>
			<a href="javascript:;" onclick="go()"  class="fl" style="margin-right: 0px;">留学服务热线：400 900 9770</a>
		</div>
		</div>
		
	</div>
	<!--美国艺术高中申请条件-->
	
	<!--美国艺术高中留学申请流程-->
	<div class="flow gk_index">
		<div class="gWidth1170">
			<div class="titles">美国艺术高中留学申请流程</div>
			<div class="sixs">
			<ul class="clearfix">
				<li><h4>入学测试</h4><div class="dashed"><span>基础评估或作<br />品集评估院校<br />评估</span></div></li>
				<li><p></p></li>
				<li><h4>作品集</h4><div class="dashed"><span>根据学校要<br />求制作3-5个<br />原创作品集</span></div></li>
				<li><p></p></li>
				<li><h4>递交申请</h4><div class="dashed"><span>文书写作 <br /> 申请材料整理<br />奖学金申请</span></div></li>
				<li><p></p></li>
				<li><h4>获得名校offer</h4><div class="dashed"><span>申请跟踪<br />直到获得<br />学校offer</span></div></li>
				<li><p></p></li>
				<li><h4>出国留学</h4><div class="dashed"><span>行前指导<br />学习及生活<br />注意事项</span></div></li>
				<li><p></p></li>
				<li><h4>海外服务</h4><div class="dashed"><span>彬彬独家<br />海外监管服务<br />24H在线</span></div></li>
			</ul>
		</div>
		<a href="javascript:;" onclick="go()"  class="button">专属定制留学方案</a>
		</div>
	</div>
	<!--美国艺术高中留学申请流程-->

	<!--彬彬教育专属留学课堂-->
		<div class="classroom gk_index">
			<h3 class="titles" style="margin-bottom: 60px;">彬彬教育留学专属课堂</h3>
			<div class="gWidth1170">
				<div class="train clearfix">
					<div class="white">
						<div class="black">
							<h4>学费</h4>
							<p>寄宿学校：每年约$45,000-$55,000 </p>
							<p>走读学校：每年约$20,000-$30,000 </p>
							<p style="color: #9C9C9C;">（具体费用请参考学校官网）</p>
							<a href="javascript:;" onclick="go()" >咨询具体学费</a>
						</div>
					</div>
					<div class="white">
						<div class="black">
							<h4>生活费</h4>
							<p>一般每年约$20,000，纽约、波士顿、旧金山等大城市生活费用会相对高一些。</p>
							<p style="color: #9C9C9C;">（具体费用根据学校而定）</p>
							<a href="javascript:;" onclick="go()" >咨询具体生活费</a>
						</div>
					</div>
					<div class="white" style="margin-right: 0px;">
						<div class="black">
							<h4>其他费用</h4>
							<p>医疗费每年约$500-$1000；书本费每年约$500-$800；课外活动费用每年约$300-$1000。</p>
							<p style="color: #9C9C9C;">（具体费用根据学校而定）</p>
							<a href="javascript:;" onclick="go()" >咨询具体费用</a>
						</div>
					</div>
				</div>	
			</div>
		</div>
	<!--彬彬教育专属留学课堂-->
	<!--美国艺术高中留学费用-->
	<style type="text/css">
		.nonebtm a{width:143px;height:32px;border-radius:4px;border:1px solid rgba(255,255,255,1);font-size:16px;font-weight:bold;color:rgba(255,255,255,1);line-height: 32px;text-align: center;position: absolute;bottom: 20px;left: 50%;margin-left: -71.5px;}
		.nonebtm a:hover{background-color: #D17F7F; border-color: #D17F7F;}
		.dashed{width:150px;height:160px;background:url(/static/home/img/page/yishugaozhong/xingzhuang.png) no-repeat center center; background-size:cover;text-align: center;}
		.sixs{margin-top: 50px;}
		.sixs li{width:148px;text-align: center;float: left;}
		.sixs li:nth-child(even){width:55px;height:2px;border-bottom:1px dashed #979797;margin-top: 122px;}
		.sixs li h4{font-size:22px;font-weight:bold;color:rgba(209,127,127,1);margin-bottom:10px;}
		.dashed span{display:inline-block;margin-top:60px;text-align: center;}
		.shaiz{margin-top: 40px;}
		.shaiz li{float: left;width:584px;height:264px;background: #fff;position: relative;}
		.shaiz li img{float: left;width:292px;height:264px;}
		.case{width:100%;height:868px;}
		.anquan li{position: relative;float: left;margin: 30px 30px 0 0;width:370px;height:226px;overflow: hidden;transition: all 0.4s ease-in-out;}
		.anquan li img:hover{transform: scale(1.2);}
		.anquan li img{width:370px;height:222px;overflow: hidden;}
		.anquan li>a>.texte{position: absolute;top: 0px;left: 0px;width:370px;height:222px;background:rgba(0,0,0,.3);color:#fff;text-align: center;font-size: 24px;font-weight: bold;line-height: 214px;}
		.safe{width:100%;height:820px;}
		.boxshdows{text-align: center;width:292px;height:50px;background:rgba(0,0,0,.5);position: absolute;bottom:0px;font-size:26px;font-weight:500;color:rgba(255,255,255,1);line-height:50px;}
		.guang{width:244px;float: left;margin:0 20px;}
		.guang a{width:130px;height:34px;border-radius:4px;line-height: 34px;text-align: center;display:inline-block;margin:30px 0 0 60px;color: #fff;border:1px solid rgba(209,127,127,1);color:#D17F7F;}
		.guang a:hover{background: #D17F7F;color: #fff;}
		.guang h2{font-size:18px;font-weight:500;color:rgba(0,0,0,1);margin: 20px 0px 16px 0px;}
		.guang P{font-size:14px;font-weight:400;margin-top:16px;}
		.guang h4{font-size:14px;font-weight:600;margin-top:20px;}
	</style>
	<!--申请走读高中精彩案例-->
		<div class="case gk_index">
			<div class="titles">美国艺术高中名校录取offer</div>
			<div class="gWidth1170">
				<div class="shaiz clearfix">
					<ul class="clearfix">
						<li>
							<img src="/static/home/img/page/yishugaozhong/li.png" alt="L同学" title="L同学"/>
							<div class="boxshdows">中学-绘画</div>
							<div class="guang">
								<h2>L同学<br />录取学校： </h2>
								
								<h4>休斯敦艺术高中 / 胡桃山艺术中学 / 因特陆前艺术高中</h4>
								<a href="/studentstory/153.html" target="_blank">案例详情</a>
							</div>
						</li>
						<li style="margin-right: 0px;">
							<img src="/static/home/img/page/yishugaozhong/shen.png" alt="S同学" title="S同学"/>
							<div class="boxshdows">中学-艺术表演</div>
							<div class="guang">
								<h2>S同学<br />录取学校： </h2>
								
								<h4>法兰克辛那屈艺术高中 / 艾迪怀德艺术高中</h4>
								<a href="/studentstory/721.html" target="_blank" >案例详情</a>
							</div>
						</li>
						<li> 
							<div class="guang">
								<h2>Y同学<br />录取学校： </h2>
								
								<h4>因特劳肯艺术高中 / 艾迪怀德艺术高中</h4>
								<a href="/studentstory/722.html" target="_blank" >案例详情</a>
							</div>
							<img src="/static/home/img/page/yishugaozhong/yang.png" alt="Y同学" title="Y同学" style="float: right;">
							<div class="boxshdows" style="right:0px;">中学-平面设计</div>
						
						</li>
						<li style="margin-right: 0px;">
							<div class="guang">
								<h2>Z同学<br />录取学校： </h2>
								
								<h4>芝加哥艺术学校 / 艾迪怀德艺术高中 / 德州休斯敦艺术高中</h4>
								<a href="/studentstory/719.html" target="_blank" >案例详情</a>
							</div>
							<img src="/static/home/img/page/yishugaozhong/zhang.png" alt="Z同学" title="Z同学" style="float: right;">
							<div class="boxshdows"  style="right:0px;">中学-建筑设计</div>
						</li>
					</ul>
				</div>
				<a href="javascript:;" onclick="go()"  class="button">了解更多申请案例</a>
			</div>
			
		</div>
		<!--申请走读高中精彩案例-->
		
		<!--彬彬留学艺术中心独家特色服务-->
		<div class="taste gk_index">
			<div class="gWidth1170">
				<div class="titles">
					彬彬留学艺术中心独家特色服务
				</div>
				<div class="there">
					<ul class="clearfix">
						<li><img src="/static/home/img/page/yishugaozhong/zuopinjifudao.png" alt="专业作品集辅导" title="专业作品集辅导" /><div class="hidden">专业作品集辅导</div><div class="hidden1"><h4>专业作品集辅导</h4><p>美国艺术名校导师全程指导作品集，从课题选择到课程设计，让学生能在学习过程中真正与海外名校资源无缝对接。</p><a href="javascript:;" onclick="go()" >马上匹配导师</a></div></li>
						<li><img src="/static/home/img/page/yishugaozhong/jisujiating.png" alt="寄宿家庭服务" title="寄宿家庭服务" /><div class="hidden">寄宿家庭服务</div><div class="hidden1"><h4>寄宿家庭服务</h4><p>每个学生至少提供2-3个寄宿家庭选择，包含十个月食宿费用、上/下学交通，国际学生监护，免费寄宿家庭更换。</p><a href="javascript:;" onclick="go()" >提前预约寄宿家庭</a></div></li>
						<li style="margin-right:0px;"><img src="/static/home/img/page/yishugaozhong/haiwaijianguan.png" alt="海外监管服务" title="海外监管服务"/><div class="hidden">海外监管服务</div><div class="hidden1"><h4>海外监管服务</h4><p>彬彬提供全面的海外监管服务。让留学生能够尽快克服因环境变化和文化差异带来的不适，顺利适应海外生活。</p><a href="javascript:;" onclick="go()" >更多服务</a></div></li>
					</ul>
				</div>
			</div>
		</div>
		<!--彬彬留学艺术中心独家特色服务-->
	<style type="text/css">
		.taste .hidden{width:370px;height:210px;background:rgba(0,0,0,0.5);font-size:24px;font-weight:600;color:rgba(255,255,255,1);position: absolute;top: 0px;left: 0px;text-align: center;line-height:200px;}
		.hidden1{display: none;width:370px;height:210px;background:rgba(0,0,0,0.5);position: absolute;top: 0px;left: 0px;text-align: center;}
		.there li{float: left;width:370px;height:210px;margin-right: 30px;position: relative;}
		.hidden1 h4{font-size:18px;font-weight:bold;color:rgba(255,255,255,1);margin: 24px 0 16px 0;}
		.hidden1 p{font-size:14px;color:rgba(255,255,255,1);width: 304px;margin: 0 auto;text-align: left;}
		.hidden1 a{margin: 14px auto;width:163px;height:36px;border-radius:4px;border:1px solid rgba(255,255,255,1);text-align: center;line-height: 36px;color: #fff;font-size: 16px;letter-spacing: 2px;}
		.hidden1 a:hover{background-color: #D17F7F;border-color: #D17F7F;}
		.there{margin-top:40px;}
		.taste{width:100%;height:450px;background:url(/static/home/img/page/yishugaozhong/tesefuwu.png) no-repeat center center;background-size:cover;}
		.classroom{width:100%;height:581px;background:url(/static/home/img/page/yishugaozhong/tesefuwu.png) no-repeat center center;background-size:cover;}
		.black{width:300px;height:260px;border:2px solid #D17F7F;margin:12px auto;padding:0 20px;}
		.black h4{font-size:24px;font-weight:bold;color:rgba(0,0,0,1);text-align: center;margin:18px auto;}
		.black p{font-size:16px;color:rgba(0,0,0,1);margin-top:20px;text-align: center;}
		.black a{width:201px;height:40px;border-radius:4px;border:2px solid #D17F7F;margin:20px auto;text-align: center;line-height:40px;transition: all 0.2s ease-in-out;}
		.black a:hover{background: #D17F7F;color: #fff;}
		.white{width:370px;height:285px;background: #fff;float: left;margin:0 30px 20px 0;}
		.white:nth-child(2){margin-top:36px;}
		.white:nth-child(5){margin-top:36px;}
		.flow{width:100%;height:538px;}
		.art{width:100%;height:974px;background:url(/static/home/img/page/yishugaozhong/meiguoyishugaozhongshenqing.png) no-repeat center center;background-size:cover;}
		.annius{width:820px;margin:50px auto;}
		.annius a{width:352px;height:50px;line-height:50px;background:#fff;color: #D17F7F;text-align: center;border: 1px solid  #D17F7F;transition:all 0.2s ease-in-out;}
		.annius a:hover{background:#D17F7F;color: #fff;}
		.annius a:nth-child(1){margin-right: 110px;}
		.safir h4{margin-top: 20px;}
		.text{width:1064px;height:60px;background:#F6E0E0;border-radius:4px;line-height:60px;text-indent:20px;margin:20px 0 0 100px;}
		.text em{margin-left: -48px;display: inline-block;font-size:26px;font-weight:bold;color:rgba(141,65,65,1);}
		.text span{display: inline-block;vertical-align: top;}
		.nonebtm{width:300px;margin:26px auto;font-size:16px;color:#fff;position: static;}
		.nonebtm p{margin-top: 10px;}
		.nonebtm span{font-weight: bold;}
		
		.none1{width:370px;height:358px;background:rgba(0,0,0,.5);text-align: center;position: absolute;top:0px;left:0px;}
		.none2{position: absolute;top:0px;left:0px;background:rgba(0,0,0,.5);width:370px;height:358px;display: none;}
		.none1 p{color: #fff;font-weight:bold;margin-top: 156px;}
		.none1 span{color: #fff;display: block;margin-top:8px;}
		.nonetop{width:294px;height:76px;background:rgba(232,165,165,1);text-align: center;margin: 0 auto;}
		.nonetop p{font-size:18px;font-weight:bold;padding-top:14px;color: #fff;}
		.nonetop span{display: block;font-size:14px;color:rgba(255,255,255,1);}
		.fengge{width:100%;height:884px;background:url(/static/home/img/page/yishugaozhong/meiguoyishugaozhongshenqing.png) no-repeat center center;background-size:cover;}
		.skill li{float: left;margin:20px 30px 0 0;width:370px;height:358px;position: relative;}
		.zao{margin-top: 40px;}
		.zao li {float: left;position: relative;}
		.zao li img{width:285px;height:267px;margin-right: 10px;margin-top:10px;}
	</style>
		<!--海外监管服务团队-->
		<div id="mydiv" class="ys_index" style="height:628px;margin-top: 50px;">
			<div class="box gWidth1170 clearfix gk_index">
				<!-- title -->
				<h3 class="title">彬彬教育致力让每一个学生牵手世界名校</h3>
				<!-- content -->
				<div class="content gWidth1170">
					<div class="fl">
						<ul>
							<li class="li1">
								<h3>6位1体</h3>
								<p>业内首创“6位1体”服务模式<br />服务客户满意度高达100%</p>
							</li>
							<li class="li2">
								<h3>广资源</h3>
								<p>1000+校园独家代理；实地考察 真实可靠</p>
							</li>
							<li class="li3">
								<h3>多重认证</h3>
								<p>留学行业质量认证标准机构；国内十佳品牌诚信<br />留学机构；CSIET评审认证留学机构</p>
							</li>
						</ul>
					</div>
					<div class="dq">
						<div>
						</div>
					</div>
					<div class="fr">
						<ul>
							<li class="li1 clearfix">
								<h3>全覆盖</h3>
								<p class="fr">600+海外同专业导师覆盖全美TOP100名校<br />让学生提前了解校园生活并提供全程对应辅导</p>
							</li>
							<li class="li2 clearfix">
								<h3>大数据</h3>
								<p class="fr" style="width: 330px;">120000+超大申请数据库；科学手段狂揽offer</p>
							</li>
							<li class="li3 clearfix">
								<h3>两个“1”</h3>
								<p class="fr">国内独1拥有海外监管服务中心留学机构<br />国内独1拥有海外院校开发资质的留学机构</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
	</body>
	<!-- 底部 -->
		
<!-- 底部 -->
<div class="bottomD">
	<div class="bottomTop">
		<div class="gWidth1170 clearfix">
			<!-- logo 地址 联系方式 -->
			<div class="fl logo">
				<a href=""><img src="/static/home/img/home/logodi.png" alt="美国留学_专业的美国留学服务中介机构_彬彬教育" title="美国留学_专业的美国留学服务中介机构_彬彬教育"></a>
				<div class="clearfix">
					<img src="/static/home/img/home/dingwei.png" class="fl" alt="">
					<p class="fl">北京市朝阳区呼家楼京广中心商务楼10层</p>
				</div>
				<p class="fl"><img src="/static/home/img/home/dianhua.png" class="fl" alt="">400-900-9770</p>
			</div>
			<!-- 底部导航 -->
			<div class="fl botNav">
				<div class="nav clearfix">
					<span class="fl">特色服务</span>
					<p class="fr">+</p>
					<div class="hidden">
						<p><a href="/page/polymerization.html" target="_blank">背景提升</a></p>
						<p><a href="/page/overseashome.html" target="_blank">海外监管服务</a></p>
						<p><a href="/fmfml/0-1.html" target="_blank">寄宿家庭精选</a></p>
						<p><a href="/page/goclass.html" target="_blank">出国衔接课程</a></p>
						<!-- <p><a href="">海外无忧管家</a></p>
						<p><a href="">出国衔接课程</a></p>
						<p><a href="">留学活动讲座</a></p> -->
					</div>
				</div>
				<div class="nav clearfix">
					<span class="fl">美国留学</span>
					<p class="fr">+</p>
					<div class="hidden">
						<p><a href="/middle" target="_blank">中学留学</a></p>
						<p><a href="/college" target="_blank">本科留学</a></p>
						<p><a href="/graduate" target="_blank">研究生留学</a></p>
						<p><a href="/activity/0-0-1.html" target="_blank">活动讲座</a></p>
						<p><a href="/page/testprep.html" target="_blank">留学考试</a></p>
						<p><a href="/article/0-204-1.html" target="_blank">成功故事</a></p>
						<!-- <p><a href="">留学活动讲座</a></p> -->
					</div>
				</div>
				<div class="nav clearfix">
					<span class="fl">留学资讯</span>
					<p class="fr">+</p>
					<div class="hidden">
						<p><a href="/article/0-101-1.html" target="_blank">留学费用</a></p>
						<p><a href="/article/0-203-1.html" target="_blank">院校排名</a></p>
						<p><a href="/article/0-200-1.html" target="_blank">专业解析</a></p>
						<p><a href="/article/0-66-1.html" target="_blank">考试资讯</a></p>
						<p><a href="/article/0-64-1.html" target="_blank">行前指南</a></p>
						<p><a href="/article/0-63-1.html" target="_blank">海外生活</a></p>
						<!-- <p><a href="">留学活动讲座</a></p> -->
					</div>
				</div>
				<div class="nav clearfix">
					<span class="fl">关于彬彬</span>
					<p class="fr">+</p>
					<div class="hidden">
						<p><a href="/home/index/ws" target="_blank">公司简介</a></p>
						<p><a href="/tutor/special" target="_blank">导师团队</a></p>
						<!-- <p><a href="">院校插班营</a></p>
						<p><a href="">留学背景提升</a></p>
						<p><a href="">海外无忧管家</a></p>
						<p><a href="">出国衔接课程</a></p>
						<p><a href="">留学活动讲座</a></p> -->
					</div>
				</div>
			</div>
			<div class="fr ewm">
				<img src="/static/home/img/home/845167097512794061.png" alt="">
				<p>扫一扫<br />了解美国留学资讯</p>
			</div>
		</div>
	</div>
	<div class="bottomBot gWidth1170">
			<div class="youqing">
		<?php if(!(empty($link_list) || (($link_list instanceof \think\Collection || $link_list instanceof \think\Paginator ) && $link_list->isEmpty()))): ?>
				<p>友情链接：&nbsp;&nbsp;&nbsp;友链交换QQ：806828023</p>
				<div class="clearfix">
					<?php if(is_array($link_list) || $link_list instanceof \think\Collection || $link_list instanceof \think\Paginator): $i = 0; $__LIST__ = $link_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<a href="<?php echo htmlentities($vo['url']); ?>" class="fl" target="_blank"><?php echo htmlentities($vo['name']); ?></a>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
		<?php endif; ?>
			</div>
		<div class="bot">
			<p>Beliwin Company @ 2016 . Privacy Polocy 京ICP备16012183号</p>
			<p>彬彬国际教育咨询（北京）有限公司版权所有 beliwin.com  彬彬留学京公网安备 京公网安备 11010502034288号</p>
		</div>
	</div>
</div>

<script type="text/javascript">
	
// function go(){
//     window.location.href='http://uclient.yunque360.com/frame.html?company_id=ca455t16093i';
// }
function go() {
    window.open("http://uclient.yunque360.com/frame.html?company_id=ca455t16093i&id=dft35023157&lng=cn&r=&rf1=http%3A//m.beliwin&rf2=.com/&p=http%3A//m.beliwin.com/page/collegeseniormoney.html&cid=1535016066310391295601&sid=c9b247e1cad84b46a6831b00506930d1","newwindow", "height=540, width=688, toolbar =no, menubar=no, scrollbars=no, resizable=no, location=no, status=no");
}

// function go() {
//          window.open('http://uclient.yunque360.com/frame.html?company_id=ca455t16093i&id=dft35023157&lng=cn&r=&rf1=http%3A//m.beliwin&rf2=.com/&p=http%3A//m.beliwin.com/page/collegeseniormoney.html&cid=1535016066310391295601&sid=c9b247e1cad84b46a6831b00506930d1');
//       }
if($('.youqing').children().length == 0){
	$('.bottomD').css({'height': '670px'});
}
</script>



<!-- 返回顶部 -->
<div class="goTop">
	<div class="wx"><img src="/static/home/img/weilegexin.png" class="img1" alt=""></div>
	<!-- <div class="zixun" onclick="go()"><img src="/static/home/img/zixun.png" alt=""></div> -->
	<div class="dianhua"><img src="/static/home/img/dian_hua.png" alt=""><div onclick="go()">400-900-9770</div></div>
	<div class="shenqing"><img src="/static/home/img/shenqing.png" alt=""><div><h3>留学评估</h3><input type="text" class="name" placeholder="姓名"><input type="text" class="phone" placeholder="电话"><select class="nianji"><option value="">申请阶段</option><option value="中学">中学</option><option value="本科">本科</option><option value="研究生">研究生</option></select><button class="button1">免费评估</button></div></div>
	<div class="gotopBox"><img src="/static/home/img/gotop.png" class="img2" alt=""></div>
	<img src="/static/home/img/weixin1.png" alt="">
</div>

<style type="text/css">
	.goTop{position: fixed;right: 20px;top: 20%;z-index: 999999;cursor:pointer}
	.goTop>div{width: 44px;height: 44px;background-color: #000000;text-align: center;}
	.goTop div.zixun img{width: 28px;height: 28px;display: inline-block;margin-top: 8px;}
	.goTop div.dianhua img{width: 28px;height: 28px;display: inline-block;margin-top: 8px;}
	.goTop div.shenqing img{width: 20px;height: 20px;display: inline-block;margin-top: 12px;}
	.goTop div.gotopBox{background-color: #000000;}
	.goTop>div:hover{background-color: #000000;}
	.goTop>div{width: 44px;height: 44px;background-color: #7F7F7F;text-align: center;margin-top: 1px;}
	.goTop>div>.img1{display: inline-block;width: 32px;height: 32px;margin-top: 6px;}
	.goTop>div>.img2{display: inline-block;width: 20px;height: 10px;margin-top: 17px;}
	.goTop .wx{background-color: #7F7F7F;}
	.goTop>img{position: absolute;top: 0;right: 50px;display: none;}
	.goTop div.zixun div{width: 136px;position: absolute;right: 50px;top: 0;display: none;}
	.goTop div.zixun div span{width: 136px;height: 44px;background-color: #656565;display: block;margin-bottom: 1px;color: #FFFFFF;font-size: 16px;text-align: center;line-height: 44px;}
	.goTop div.zixun div span:hover,.goTop div.dianhua div:hover{background-color: #000000;}
	.goTop div.dianhua div{width: 136px;height: 44px;background-color: #656565;color: #FFFFFF;font-size: 16px;text-align: center;line-height: 44px;position: absolute;right: 50px;top: 0;display: none;}
	.goTop div.shenqing div{width: 136px;height: 223px;background-color: #656565;color: #FFFFFF;font-size: 16px;text-align: center;line-height: 44px;position: absolute;right: 50px;bottom: 0;display: none;}
	.goTop div.shenqing div h3{text-align: center;font-weight: normal;margin-bottom: 7px;padding-top: 10px;}
	.goTop div.shenqing div input{display: block;width: 96px;height: 24px;border: 1px solid #FFFFFF; font-size: 14px;margin: 0 auto;margin-bottom: 9px;text-indent: 7px;color: #FFFFFF;opacity: 0.8;}
	.goTop div.shenqing div input::-webkit-input-placeholder{color: #FFFFFF;}
	.goTop div.shenqing div select{width: 98px;height: 26px;border: 1px solid #FFFFFF;display: block;margin: 0 auto;color: #FFFFFF;padding-left: 3px; opacity: 0.8;}
	.goTop div.shenqing div select option{color: #000000;}
	.goTop div.shenqing div button{width: 98px;height: 28px;background-color: #333333;border-radius: 3px;font-size: 14px;text-align: center;line-height: 28px;color: #FFFFFF;cursor:pointer;}
	.goTop div.shenqing div button:hover{opacity: 0.8;}
	.goTop div.shenqing{background-image: none;}
</style>

<script type="text/javascript">
	var goTop2 = document.documentElement.scrollTop || document.body.scrollTop;
	if(goTop2 <= 100){
		$('.goTop').css({'display': 'none'})
	}
	$(window).scroll(function () {
		var goTop = document.documentElement.scrollTop || document.body.scrollTop;
		if( goTop <= 100 ){
			$('.goTop').stop().fadeOut(500);
		}else{
			$('.goTop').stop().fadeIn(500);
		}
	})
	$('.goTop .gotopBox').click(function () { $('body,html').stop(true).animate({ scrollTop: 0 }, 1500); });
	$('.goTop>div').mouseover(function () {$(this).children('div').stop().fadeIn()});
	$('.goTop>div').mouseout(function (e) {var o = e.relatedTarget || e.toElement;
                    if (!o) return; $(this).children('div').stop().fadeOut(); })
	$('.goTop .wx').hover(function () {$('.goTop>img').stop().fadeIn();}, function () {$('.goTop>img').stop().fadeOut();});
	var cinv;
	$('.goTop input').focus(function () { if($(this).attr('placeholder')){cinv = $(this).attr('placeholder')}; $(this).removeAttr('placeholder'); })
	$('.goTop input').blur(function () { if(cinv){$(this).attr('placeholder', cinv)}; })
	
	// 验证手机号
	function isPhoneNo(phone) { 
		var pattern = /^1[34578]\d{9}$/; 
		return pattern.test(phone); 
	}
	$('.goTop div.shenqing div button').on('click', function () {
		var Name = $('.goTop .name').val();
		var Phone = $('.goTop .phone').val();
		var Sclass = $('.goTop select').val();
		var url = window.location.href;
		if( Name == '' || Phone == '' || Sclass == '' ){
			alert('选项内容不能为空！');
			return;
		}
		// 判断手机号是否合法
		if( !isPhoneNo(Phone) ){
			alert('请您输入正确的号码');
			return;
		}
		$.ajax({
			'url': '/home/form/addform',
			'dataType': 'json',
			'type': 'post',
			'data': {
				name: Name,
				phone: Phone,
				sclass: Sclass,// 中学 0  本科 1 研究生 2  -----> 初中-高中年级 7-12
				urlsite: url,
				page_title: $('title').eq(0).html(),
			},
			success: function (res) {
				alert(res.datas);
				$('.form .name').val('');
				$('.form .phone').val('');
				$('.form select').val('');
			}
		})
	})
</script>

<style type="text/css">
	.leftTc{width: 44px;height: 44px;background-color: #333333;position: fixed;left: 0;top: 550px;z-index: 99999;border-radius: 3px;text-align: center;cursor:pointer;}
	.leftTc:after{content: '';width: 0;height: 100%;display: inline-block;vertical-align: middle;}
	.leftTc img{width: 28px;height: 28px;display: inline-block;vertical-align: middle;}
	.hid{width: 148px;height: 140px;border-radius: 3px;background-color: #000000;background-color: rgba(0,0,0,0.4);position: fixed;left: 0;top: 436px;z-index: 99999;display: none;text-align: center;}
	.hid h2{text-align: center;font-size: 16px;color: #FFFFFF;font-weight: normal;margin-top: 16px;}
	.hid p{font-size: 16px;color: #FFFFFF;margin-bottom: 10px;}
	.hid input{width: 120px;height: 24px;background-color: #FFFFFF;display: block;margin: 0 auto;font-size: 12px;text-indent: 6px;line-height: 24px;border-radius: 2px;margin-bottom: 8px;}
	.hid button{width: 120px;height: 24px;background-color: #000000;color: #FFFFFF;font-size: 12px;line-height: 24px;border-radius: 2px;display: block;margin: 0 auto;cursor:pointer;}
	.hid>img{width: 8px;height: 8px;position: absolute;right: 8px;top: 8px;cursor:pointer;}
	.hid .bbqwer{width: 306px;height: auto;background: #f5f5f5;line-height: 15px;padding: 17px 0;border: none;text-align: left;position: absolute;left: 165px;top: 10px;display: none;}
	.hid .bbqwer span{font-size: 12px;color: #ff7062;display: block;    width: 255px;margin: 0 auto;text-align: left;}
	.hid .bbqwer p{width: 255px;margin: 0 auto;margin-top: 10px;font-size: 12px;color: #ff7062;}
	.hid .bbqwer em{width: 0;height: 0;display: block;border-style: solid;border-color: transparent #f5f5f5 transparent transparent;border-width: 10px;position: absolute;left: -20px;bottom: 10px;}
	.hid .bbqwer>b{font-size: 12px;line-height: 1.2em;height: 12px;right: 5px;top: 5px;font-weight: 700;font-family: 宋体;cursor: pointer; position: absolute; color: #000;}
</style>

<div class="leftTc">
	<img src="/static/home/img/phone.png" alt="">
</div>
<div class="hid">
	<h2>留学问题轻松问</h2>
	<p>400-900-9770</p>
	<input type="text" class="phone" placeholder="请输入电话号码" />
	<button class="button">立即给您回电</button>
	<img src="/static/home/img/leftX.png" alt="">
	<div class="bbqwer">
	    <span class="span1">手机请直接输入：如1860086xxxx</span>
	    <p>输入您的电话号码，点击通话，稍后您将接到我们的电话，该通话对您<b>完全免费</b>，请放心接听！</p>
	    <em></em>
	    <b>╳</b>
	</div>
</div>

<script type="text/javascript">
	var LeftTcTime = setTimeout(function () {
		$('.leftTc').stop().fadeOut();
		$('.hid').stop().fadeIn();
		clearTimeout(LeftTcTime);
	}, 3000)
	$('.leftTc').on('click', function () {
		$(this).stop().fadeOut();
		$('.hid').stop().fadeIn();
	})
	$('.hid>img').on('click', function () {
		$('.hid').stop().fadeOut();
		$('.leftTc').stop().fadeIn();
	})
	var LeftVal = '';
	$('.hid input').focus(function () {
		if($(this).attr('placeholder')){
			LeftVal = $(this).attr('placeholder');
		}
		$(this).removeAttr('placeholder');
		$('.hid .bbqwer').stop().fadeIn();
	})
	$('.hid input').blur(function () {
		if(LeftVal){
			$(this).attr('placeholder', LeftVal);
		}
		$('.hid .bbqwer').stop().fadeOut();
	})
	$('.hid .bbqwer>b').on('click', function () {
		$('.hid .bbqwer').stop().fadeOut();
	})
	$('.hid button').on('click', function () {
		var Phone = $('.hid .phone').val();
		var url = window.location.href;
		if(Phone == ''){
			alert('手机号不能为空！');
			return;
		}
		// 判断手机号是否合法
		if( !isPhoneNo(Phone) ){
			alert('请您输入正确的号码');
			return;
		}
		$.ajax({
			'url': '/home/form/addform',
			'dataType': 'json',
			'type': 'post',
			'data': {
				phone: Phone,
				urlsite: url,
				type: '免费电话',
				page_title: $('title').eq(0).html(),
			},
			success: function (res) {
				alert(res.datas);
				$('.hid .phone').val('');
			}
		})
	})
</script>

<!-- 判断  是否是移动端 -->
<script>
    $(function(){
	    if(navigator.userAgent.match(/mobile/i)) {
	        top.location='http://m.beliwin.com';
	    }
	});
</script>


<!-- 导航++底部  CSS++JS -->
<link rel="stylesheet" href="/static/home/css/index/public.css" />
<script type="text/javascript" src="/static/home/js/index/public.js"></script>
<!-- 粒子链接 -->
<script type="text/javascript" src="/static/home/js/public/canvas-particle.js"></script>
<!-- 数字滚动插件 -->
<script type="text/javascript" src="/static/home/js/public/countUp.min.js"></script>
<?php if(!(empty($column_tdk_res['add_time']) || (($column_tdk_res['add_time'] instanceof \think\Collection || $column_tdk_res['add_time'] instanceof \think\Paginator ) && $column_tdk_res['add_time']->isEmpty()))): if(empty($column_tdk_res['edit_time']) || (($column_tdk_res['edit_time'] instanceof \think\Collection || $column_tdk_res['edit_time'] instanceof \think\Paginator ) && $column_tdk_res['edit_time']->isEmpty())): ?>
	<!-- 百度因子规范 -->
		<script type="application/ld+json">
			{
				"@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
				"@id": "http://www.beliwin.com<?php echo htmlentities($pc_url); ?>",
				"title": "<?php echo htmlentities($column_tdk_res['title']); ?>",
				"description": "<?php echo htmlentities($column_tdk_res['description']); ?>",
				"pubDate": "<?php echo htmlentities($column_tdk_res['add_time']); ?>",
				"isOriginal": 1,
				"data": {
					"WebPage": {
						"headline": "<?php echo htmlentities($column_tdk_res['title']); ?>",
						"pcUrl": "http://www.beliwin.com<?php echo htmlentities($pc_url); ?>",
						"datePublished": "<?php echo htmlentities($column_tdk_res['add_time']); ?>"
					}
				}
			}
		</script>
	<?php else: ?>
	<script type="application/ld+json">
			{
				"@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
				"@id": "http://www.beliwin.com<?php echo htmlentities($pc_url); ?>",
				"title": "<?php echo htmlentities($column_tdk_res['title']); ?>",
				"description": "<?php echo htmlentities($column_tdk_res['description']); ?>",
				"pubDate": "<?php echo htmlentities($column_tdk_res['add_time']); ?>",
				"upDate": "<?php echo htmlentities($column_tdk_res['edit_time']); ?>",
				"isOriginal": 1,
				"data": {
					"WebPage": {
						"headline": "<?php echo htmlentities($column_tdk_res['title']); ?>",
						"pcUrl": "http://www.beliwin.com<?php echo htmlentities($pc_url); ?>",
						"datePublished": "<?php echo htmlentities($column_tdk_res['add_time']); ?>"
					}
				}
			}
		</script>
	<?php endif; endif; ?>

<!-- 云雀客服 -->
<script> (function(scope, globalName, ApiAddress) { window[globalName] = window[globalName] || function(company_id) { (window[globalName].company_id = window[globalName].company_id || company_id); }; var ele = document.createElement("script"); ele.src = ApiAddress + "?v=" + new Date().getUTCDate(); document.getElementsByTagName("body")[0].appendChild(ele); })(window, "_YUNQUE", "//dist.yunque360.com/bundle.js"); _YUNQUE("ca455t16093i"); </script>

<!-- 百度统计代码 -->
<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "https://hm.baidu.com/hm.js?01e274a68687048b409421c6d427bdd1";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
</script>

<script type="text/javascript">
        window._pt_lt = new Date().getTime();
        window._pt_sp_2 = [];
        _pt_sp_2.push('setAccount,259adec7');
        var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        (function() {
            var atag = document.createElement('script'); atag.type = 'text/javascript'; atag.async = true;
            atag.src = _protocol + 'js.ptengine.cn/259adec7.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(atag, s);
        })();
</script>
	<script type="text/javascript">
			var t = document.documentElement.scrollTop || document.body.scrollTop;
			var scroll = true;
			if(t>=100){
				$('.abcBannav').css({'display': 'none'});
				$('.topNav').css({'position': 'static'});
			}
			var nav = $('.bannerNav').offset().top;
			$gkLength = $('.gk_index').length;
			window.onscroll = function () { 
				var top = document.documentElement.scrollTop || document.body.scrollTop;
				if(top>=nav){
					$('.bannerNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999'});
					$('.navHidden').css({'display': 'block'});
				}else if(top<=$('.why').offset().top){
					$('.bannerNav').css({'position': 'static', 'top':''});
					$('.navHidden').css({'display': 'none'});
				}
				for( var i=0; i<$gkLength; i++ ){
					if( i == $gkLength - 1 ){
						if( top>=$('.gk_index').eq(i).offset().top ){
							$('.bannerNav span').removeClass('active');
							$('.bannerNav span').eq(i).addClass('active');
						}
						return;
					}
					if( top>=$('.gk_index').eq(i).offset().top && top<$('.gk_index').eq(i+1).offset().top ){
						$('.bannerNav span').removeClass('active');
						$('.bannerNav span').eq(i).addClass('active');
					}
				}
				
				var top = document.documentElement.scrollTop || document.body.scrollTop;
				if( !scroll ){
					return;
				}
				if( top >= 100 ){
					if( $('.topNav').css('position') == 'relative' ){
						$('.abcBannav').css({'display': 'none'});
						$('.topNav').css({'position': 'static'});
					}
				}else if(top == 0) {
					$('.abcBannav').css({'display': 'none'});
					$('.topNav').css({'position': 'relative'});
				}
			}
			$('.bannerNav span').on('click', function () {
				var index = $('.bannerNav span').index($(this));
				var offsetTop = $('.gk_index').eq(index).offset().top;
				$('body, html').stop().animate({scrollTop: offsetTop}, 1500);
			})
			
			$('.skill li').hover(function(){
				$(this).children('.none1').stop().fadeOut();
				$(this).children('.none2').stop().fadeIn();
			}, function (){
				$(this).children('.none2').stop().fadeOut();
				$(this).children('.none1').stop().fadeIn();
			});
			
			$('.there li').hover(function(){
				$(this).children('.hidden').stop().fadeOut();
				$(this).children('.hidden1').stop().fadeIn();
			}, function (){
				$(this).children('.hidden1').stop().fadeOut();
				$(this).children('.hidden').stop().fadeIn();
			});
			$('.boxs').hover(function () {
				$(this).children('.hidden1').stop().fadeOut();
				$(this).children('.hidden2').stop().fadeIn();
			}, function (){
				$(this).children('.hidden2').stop().fadeOut();
				$(this).children('.hidden1').stop().fadeIn();
			})
		// 粒子链接配置文件--不用改 放过去就行
		window.onload = function() {
			//配置
			var config = {
				vx: 4, //小球x轴速度,正为右，负为左
				vy: 4, //小球y轴速度
				height: 2, //小球高宽，其实为正方形，所以不宜太大
				width: 2,
				count: 200, //点个数
				color: "228,228,228", //点颜色
				stroke: "228,228,228", //线条颜色
				dist: 30000, //点吸附距离
				e_dist: 20000, //鼠标吸附加速距离
				max_conn: 10 //点到点最大连接数
			}
			//调用
			CanvasParticle(config);
		}
		// 地球滚动 直接复制.
		$(window).scroll(function() {
			if($(window).scrollTop() + 700 >= $('#mydiv').offset().top) {
				$('#mydiv .box .dq>div').css({
					'background-position-x': 'right'
				});
			}

			if($(window).scrollTop() + 700 < $('#mydiv').offset().top) {
				$('#mydiv .box .dq>div').css({
					'background-position-x': 'left'
				});
			}
		})
	</script>
	
	
	
	<!-- 高中表单 -->
	<!-- 浮动表单 -->
		<div class="formFd">
			<div class="gWidth1170">
				<h3>美国高中留学VIP申请</h3>
				<input type="text" class="name" placeholder="姓名：" />
				<input type="text" class="phone" placeholder="电话：" />
				<input type="text" class="nianji" placeholder="申请年级">
				<button class="button">提交</button>
				<img src="/static/home/img/clear2.png" alt="">
			</div>
		</div>
		<div class="formGb"><p>美国高中<br />VIP申请</p></div>
		
		<style type="text/css">
		.formFd{width: 100%;height: 84px;background-color: #000000;background-color: rgba(0,0,0,0.8);position: fixed;bottom: 0; overflow: hidden;z-index: 999999;}
		.formFd h3{display: inline-block;font-size: 22px;color: #FFFFFF;line-height: 84px;color: #FFFFFF;font-weight: normal;margin-right: 35px;}
		.formFd input{width: 210px;height: 34px;border: 1px solid #ADADAD;border-radius: 3px;text-indent: 15px;color: #FFFFFF;margin-right: 30px;line-height: 34px;}
		.formFd select{width: 212px;height: 36px;border: 1px solid #ADADAD;border-radius: 3px;color: #999999;text-indent: 15px;line-height: 36px;margin-right: 32px;}
		.formFd button{width: 92px;height: 36px;background-color: #FFFFFF;text-align: center;line-height: 36px;font-size: 18px;border-radius: 3px;cursor:pointer;}
		.formFd button:hover{background-color: #FF7062;color: #FFFFFF;}
		.formFd img{width: 20px;height: 20px;position: absolute;right: 0;top: 33px;cursor:pointer;}
		.formGb{width: 84px;height: 84px;background-color: #000000;background-color: rgba(0,0,0,0.8);position: fixed;left: 20px;bottom: 20px;text-align: center;display: none;border-radius: 3px;cursor:pointer;}
		.formGb:before{content: '';width: 0;height: 100%;vertical-align: middle;display: inline-block;}
		.formGb p{font-size: 16px;line-height: 24px;color: #FFFFFF;display: inline-block;vertical-align: middle;}
		</style>
		
		<script type="text/javascript">
			$('.formFd img').click(function () { $('.formFd').stop().animate({'width': '0'}, function (){ $('.formGb').stop().fadeIn(); }); });
			$('.formGb').click(function () { $(this).stop().fadeOut();  $('.formFd').stop().animate({'width': '100%'}); });
			var Val;
			$('.formFd input').focus(function () { if($(this).attr('placeholder')) { Val = $(this).attr('placeholder') } $(this).removeAttr('placeholder'); })
			$('.formFd input').blur(function () { if( Val ){ $(this).attr('placeholder', Val) } })
			// 验证手机号
			function isPhoneNo(phone) { 
				var pattern = /^1[34578]\d{9}$/; 
				return pattern.test(phone); 
			}
			$('.formFd .button').on('click', function () {
				var Name = $('.formFd .name').val();
				var Phone = $('.formFd .phone').val();
				var Sclass = $('.formFd .nianji').val();
				var url = window.location.href;
				if( Name == '' || Phone == '' || Sclass == '' ){
					alert('选项内容不能为空！');
					return;
				}
				// 判断手机号是否合法
				if( !isPhoneNo(Phone) ){
					alert('请您输入正确的号码');
					return;
				}
				$.ajax({
					'url': '/home/form/addform',
					'dataType': 'json',
					'type': 'post',
					'data': {
						name: Name,
						phone: Phone,
						sclass: Sclass ,// 低龄||高中 0  本科 1 研究生 2  -----> 初中-高中年级 7-12
						urlsite: url,
					},
					success: function (res) {
						alert(res.datas);
						$('.formFd .name').val('');
						$('.formFd .phone').val('');
						$('.formFd .nianji').val('');
					}
				})
			})
		</script>
	<style type="text/css">
		.formFd button{border: none;color: #333333;margin: 0;}
	</style>
	
</html>