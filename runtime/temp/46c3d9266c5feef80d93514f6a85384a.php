<?php /*a:6:{s:77:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\collegejxj.html";i:1554198526;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1553677718;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1553062603;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1554184743;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1554189517;s:89:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_undergraduate.html";i:1554189591;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/collegejxj.css" />
	</head>
	<style>
		.banner{background: url(/static/home/img/page/benke_jiangxuejin/banner.jpg) no-repeat center center;background-size: cover;width: 100%;height: 532px;}
		.title{margin:0px 0 30px 0;font-size:38px;font-weight:bold;text-align: center;padding-top: 80px;}
		.titles{margin:0px 0 30px 0;font-size:38px;font-weight:bold;text-align: center;padding-top: 80px;}
		.anniu {position: absolute;bottom: 130px;left:30%;width: 800px;}
		.anniu img{margin-bottom: 30px;}
		.anniu a {width: 272px;height:44px;text-align: center;line-height:44px;font-size: 20px;background-color:#FFFFFF;color: #7F8BD1;margin-left:80px;box-shadow:0px 2px 4px rgba(0,0,0,0.26);}		
		.anniu a:hover {background-color:#7F8BD1;color: #FFFFFF;}
		
		.bannerNav {width: 100%;height: 60px;background-color: #EEEEEE;line-height: 60px;font-size: 0;}
		.bannerNav>div {height: 60px;}
		.bannerNav span {font-size: 17px;margin-right:42px;cursor: pointer;}
		.bannerNav span.active {color: #A28450;font-weight: bold;}
		.know{width:100%;height:740px;}
		.know li{float: left;width:364px;height:212px;border:1px solid rgba(127,139,209,1);border-radius:3px;margin:26px 38px 0 0;text-align: center;box-sizing: border-box;position: relative;}
		.know li img{margin-top: 34px;}
		.know li em{width:36px;height:1px;border-top:1px solid #BCBCBC;display: block;margin: 10px auto;}
		
		.hidden1{width: 100%;height: 100%;text-align: center;display: none;position: absolute;top: 0px;left: 0px;}
		.hidden1 h3{font-size:22px;font-weight:bold;color:rgba(51,51,51,1);margin:30px 0 10px 0;}
		.hidden1 p{font-size:15px;font-weight:400;line-height: 22px;padding: 0 20px;text-align:left;}
		.hidden1 a{width:112px;height:30px;border:1px solid rgba(51,51,51,1);border-radius:3px;font-size:15px;font-weight:400;line-height: 30px;position: absolute;left: 50%;bottom: 20px;margin-left: -56px;}
		.hidden1 a:hover{background-color: #A28450;border-color: #A28450;color: #FFFFFF;}
		.banner h1{
			font-size: 64px;
			line-height: 88px;
			padding-top: 104px;
			padding-bottom: 6px;
			font-weight: normal;
			text-shadow:0px 3px 4px rgba(0,0,0,0.72);
			color: #FFFFFF;
			text-align: center;
		}
		.formFd button{margin-top: 0;}
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
						<div><a href="/page/seniorsqgl.html" target="_blank">申请攻略</a><a href="/page/interview.html" target="_blank">面试流程</a><a href="/page/seniorsort.html" target="_blank">院校排名</a><a href="/page/seniorcompass.html" target="_blank">选校指南</a><a href="/page/seniormoney.html" target="_blank">留学费用</a></div>
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
				<div class="box">
					<div>
						<h3>出国考试</h3>
						<div><a href="/page/testprep.html" target="_blank">标化考试</a><a href="/page/slate.html" target="_blank">Slate考试</a></div>
					</div>
				</div>
			</div>
			<div class="fl">
				<a href="/article/0-0-1.html" target="_blank">留学资讯</a>
			</div>
		</div>
		<!-- <div class="fl ss">
			<h3><img src="/static/home/img/home/sousuo.png" alt=""></h3>
			<div class="fl input">
				<form action="<?php echo url('search/index'); ?>" method="get" id="form1">
					<input type="text" id="keywords" name="keywords" autocomplete="off" value="" placeholder="搜索感兴趣的内容">
					<button><img src="/static/home/img/home/search.png" alt=""></button>
				</form>
			</div>
		</div> -->
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
	
	$('.topNavBox .ss .input button').click(function(){
		var keywords = $("#keywords").val();
		if( keywords == '' ){
			alert('请输入搜索内容~');
			return false;
		}
	})
	
</script>
		<!--banner-->
		<div class="banner">
			<h1>美国大学奖学金申请指南</h1>
			<!-- 按钮 -->
			<div class="anniu clearfix">
				<a  href="javascript:;" onclick="go()" class="fl one">美国大学奖学金申请方案</a>
				<a  href="javascript:;" onclick="go()" class="fl two">查看美国名校奖学金</a>
			</div>
		</div>
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">奖学金分类</span>
				<span>"土豪"学校</span>
				<span>申请条件</span>
				<span>申请技巧</span>
				<span>注意事项</span>
				<span>背景提升</span>
				<span>申请方案</span>
				<span>申请流程</span>
				<span>成功案例</span>
				<span style="margin-right: 0px;">彬彬优势</span>
			</div>
		</div>
		
		<!--美国大学奖学金分类-->
		<div class="know gk_index huadou">
			<div class="title">美国大学奖学金分类</div>
			<div class="gWidth1170">
				<ul class="clearfix">
					<li>
						<div class="hidden">
							<img src="/static/home/img/page/benke_jiangxuejin/icon1.png" alt="" />
							<em></em>
							<h3>择优奖学金</h3>
							<p>（Merit-Based Scholarship）</p>
						</div>
						
						<div class="hidden1">
							<h3>择优奖学金</h3>
							<p>以申请人的学习成绩为决定因素，不考虑经济上是否需要帮助只要学校认可都会给予奖学金。</p>
							<a  href="javascript:;" onclick="go()">我要申请</a>
						</div>
					</li>
					<li>
						<div class="hidden">
							<img src="/static/home/img/page/benke_jiangxuejin/icon3.png" alt="" />
							<em></em>
							<h3>需求奖学金</h3>
							<p>（Merit-Based Scholarship）</p>
						</div>
						<div class="hidden1">
							<h3>需求奖学金</h3>
							<p>根据申请人家庭经济状况决定是否给予助学金，以申请人的需求为主要决定因素来决定给予奖学金的多少。</p>
							<a  href="javascript:;" onclick="go()">我要申请</a>
						</div>
					</li>
					<li style="margin-right: 0px;">
						<div class="hidden">
							<img src="/static/home/img/page/benke_jiangxuejin/icon2.png" alt="" />
							<em></em>
							<h3>全奖</h3>
							<p>（Fellowship）</p>
						</div>
						<div class="hidden1">
							<h3>全奖</h3>
							<p>该奖学金一般由学校拨款，不需要花钱，而且往往还能赚一笔，比较难争取。</p>
							<a  href="javascript:;" onclick="go()">我要申请</a>
						</div>
					</li>
					<li>
						<div class="hidden">
							<img src="/static/home/img/page/benke_jiangxuejin/icon4.png" alt="" />
							<em></em>
							<h3>助研</h3>
							<p>（Research Assistant）</p>
						</div>
						<div class="hidden1">
							<h3>助研</h3>
							<p>助研奖学金需要给老师打工。该奖学金来源一般是导师或者所在的department或division的科研项目款。</p>
							<a  href="javascript:;" onclick="go()">我要申请</a>
						</div>
					</li>
					<li>
						<div class="hidden">
							<img src="/static/home/img/page/benke_jiangxuejin/icon5.png" alt="" />
							<em></em>
							<h3>助教</h3>
							<p>（Teaching Assistant）</p>
						</div>
						<div class="hidden1">
							<h3>助教</h3>
							<p>助教奖学金一般由学院发放，该奖学金一次只给一年，第二年要看是否达到要求。</p>
							<a  href="javascript:;" onclick="go()">我要申请</a>
						</div>
					</li>
					<li style="margin-right: 0px;">
						<div class="hidden">
							<img src="/static/home/img/page/benke_jiangxuejin/icon6.png" alt="" />
							<em></em>
							<h3>学费减免</h3>
							<p>（Tuition Waiver）</p>
						</div>
						<div class="hidden1">
							<h3>学费减免</h3>
							<p>学校会视学生个人情况免掉或者减掉一定的学费。</p>
							<a  href="javascript:;" onclick="go()">我要申请</a>
						</div>
					</li>
				</ul>	
			</div>
		</div>
		<!--美国大学奖学金分类-->

		<!--奖学金丰厚的“土豪”美国大学-->
		<div class="tuhao gk_index">
			<div class="titles">
				奖学金丰厚的“土豪”美国大学
			</div>
			<div class="zhifan gWidth1170">
				<ul class="clearfix">
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/school1.png" alt="耶鲁大学" title="耶鲁大学" />
						<h3>耶鲁大学</h3>
						<p>平均财政资助：$48,261</p>
						<a  href="javascript:;" onclick="go()">马上申请>></a>
					</li>
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/school2.png" alt="哈佛大学" title="哈佛大学" />
						<h3>哈佛大学</h3>
						<p>平均财政资助：$47,475</p>
						<a  href="javascript:;" onclick="go()">马上申请>></a>
					</li>
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/school3.png" alt="斯坦福大学" title="斯坦福大学" />
						<h3>斯坦福大学</h3>
						<p>平均财政资助：$47,000</p>
						<a  href="javascript:;" onclick="go()">马上申请>></a>
					</li>
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/school4.png" alt="哥伦比亚大学" title="哥伦比亚大学" />
						<h3>哥伦比亚大学</h3>
						<p>平均财政资助：$46,516</p>
						<a  href="javascript:;" onclick="go()">马上申请>></a>
					</li>
					<li style="margin-right: 0px;">
						<img src="/static/home/img/page/benke_jiangxuejin/school5.png" alt="范德堡大学" title="范德堡大学" />
						<h3>范德堡大学</h3>
						<p>平均财政资助：$45,477</p>
						<a  href="javascript:;" onclick="go()">马上申请>></a>
					</li>
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/school6.png" alt="南加州大学" title="南加州大学" />
						<h3>南加州大学</h3>
						<p>平均财政资助：$45,308</p>
						<a  href="javascript:;" onclick="go()">马上申请>></a>
					</li>
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/school7.png" alt="达特茅斯学院" title="达特茅斯学院" />
						<h3>达特茅斯学院</h3>
						<p>平均财政资助：$45,258</p>
						<a  href="javascript:;" onclick="go()">马上申请>></a>
					</li>
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/school8.png" alt="杜克大学" title="杜克大学" />
						<h3>杜克大学</h3>
						<p>平均财政资助：$44,635</p>
						<a  href="javascript:;" onclick="go()">马上申请>></a>
					</li>
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/school9.png" alt="普林斯顿大学" title="普林斯顿大学" />
						<h3>普林斯顿大学</h3>
						<p>平均财政资助：$44,047</p>
						<a  href="javascript:;" onclick="go()">马上申请>></a>
					</li>
					<li style="margin-right: 0px;">
						<img src="/static/home/img/page/benke_jiangxuejin/school10.png" alt="康奈尔大学" title="康奈尔大学" />
						<h3>康奈尔大学</h3>
						<p>平均财政资助：$43,416</p>
						<a  href="javascript:;" onclick="go()">马上申请>></a>
					</li>
				</ul>
			</div>
		</div>
		<!--奖学金丰厚的“土豪”美国大学-->
		
		<!--美国大学奖学金申请条件-->
		<div class="condition gk_index">
			<div class="title">
				美国大学奖学金申请条件
			</div>
			<div class="huzi gWidth1170">
				<ul class="clearfix">
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/tj1.png" alt="" />
						<h3>语言/学术成绩</h3>
						<p>TOEFL、SAT/ACT成绩</p>
						<a  href="javascript:;" onclick="go()">提升语言能力>></a>
					</li>
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/tj2.png" alt="" />
						<h3>GPA成绩</h3>
						<p>GPA成绩在3.0以上</p>
						<a  href="javascript:;" onclick="go()">提升GPA成绩>></a>
					</li>
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/tj3.png" alt="" />
						<h3>班级及学年排名</h3>
						<p>排名较突出/靠前</p>
						<a  href="javascript:;" onclick="go()">提升排名竞争力>></a>
					</li>
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/tj4.png" alt="" />
						<h3>课外实践</h3>
						<p>课外活动或社会实践</p>
						<a  href="javascript:;" onclick="go()">参加课外活动>></a>
					</li>
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/tj5.png" alt="" />
						<h3>个人陈述及申请材料</h3>
						<p>体现个性特征/可塑性</p>
						<a  href="javascript:;" onclick="go()">文书写作指导>></a>
					</li>
					<li style="margin-right: 0px;">
						<img src="/static/home/img/page/benke_jiangxuejin/tj6.png" alt="" />
						<h3>工作经验</h3>
						<p>商科/法学看重</p>
						<a  href="javascript:;" onclick="go()">获取工作机会>></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="artifice gk_index">
			<div class="title">
				美国大学奖学金申请技巧
			</div>
			 <div class="gWidth1170 nan">
			 	<ul class="clearfix">
			 		<li>
			 			<img src="/static/home/img/page/benke_jiangxuejin/jq1.jpg" alt="尽可能提前申请" title="尽可能提前申请" />
			 			<div class="show">
			 				<h3>尽可能提前申请</h3>
			 			</div>
			 			<div class="none">
			 				<h3>尽可能提前申请</h3>
			 				<p>对于大部分学校的奖学金申请来说，尤其是许多文理学院，提前申请奖学金的成功机率要比正常申请大很多。</p>
			 			</div>
			 		</li>
			 		<li>
			 			<img src="/static/home/img/page/benke_jiangxuejin/jq2.jpg" alt="结合自身条件选校" title="结合自身条件选校" />
			 			<div class="show">
			 				<h3>结合自身条件选校</h3>
			 			</div>
			 			<div class="none">
			 				<h3>结合自身条件选校</h3>
			 				<p>美国大学一般会说明奖学金的发放政策，对于申请的影响程度，基本要求等，有不少学校会明确说明有无针对国际学生的奖学金、数额、名额等，申请人可根据自身的经济条件，综合背景来做判断，尤其是会影响录取率的学校，一定要慎重考虑。</p>
			 			</div>
			 		</li>
			 		<li>
			 			<img src="/static/home/img/page/benke_jiangxuejin/jq3.jpg" alt="突出自我" title="突出自我" />
			 			<div class="show" style="left: 102px;">
			 				<h3>突出自我</h3>
			 			</div>
			 			<div class="none">
			 				<h3>突出自我</h3>
			 				<p>为了能够在第一时间吸引教授的眼球，完美的申请材料必不可少。其中个人陈述最为重要，学生要通过有限的字数来阐述自己的学术背景、学习计划、主攻方向和对未来的打算。导师的推荐信也是教授客观了解学生优点和不足的一个重要途径。</p>
			 			</div>
			 		</li>
			 		<li style="margin-right:0px;">
			 			<img src="/static/home/img/page/benke_jiangxuejin/jq4.jpg" alt="深思熟虑鱼和熊掌不可兼得" title="深思熟虑鱼和熊掌不可兼得" />
			 			<div class="show" style="top:70px;">
			 				<h3>深思熟虑<br />鱼和熊掌不可兼得</h3>
			 			</div>
			 			<div class="none">
			 				<h3>深思熟虑鱼和熊掌不可兼得</h3>
			 				<p>对于家庭资金有限，要靠全部或部分奖学金才能出国的学生来说，要综合自身软硬件来合理选定目标，很多学校因申请人的奖学金要求太高而无法满足，反而会影响到学校的录取结果。</p>
			 			</div>
			 		</li>
			 	</ul>
			</div>
			
			<div class="phone">
				<a  href="javascript:;" onclick="go()" class="" style="margin-right:60px;">奖学金申请成功捷径</a>
				<a  href="javascript:;" onclick="go()" class="">留学咨询热线：400-900-9770</a>
			</div>
		</div>
		<!--美国大学奖学金申请条件-->
		
		<!--美国大学奖学金申请注意事项-->
		<div class="attention gk_index">
			<div class="titles">美国大学奖学金申请注意事项</div>
			<div class="xiee gWidth1170">
				<ul class="clearfix">
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/sx1.jpg"/ class="bgc" alt="专业方面" title="专业方面">
						<div class="hide">
							<h3>专业方面</h3>
							<img src="/static/home/img/page/benke_jiangxuejin/111.png" alt="" />
						</div>
						<div class="hide1">
							<div class="black">
								<h3>专业不同奖学金额度不同</h3>
								<p>工科、理科比文科、商科更容易得到奖学金。"热门"专业获得政府的拨款以及企业和私人的资助较多，因此奖学金的数额要比其他专业多。</p>
								<h3>专业不同竞争程度不同​</h3>
								<p>工商行政管理学、牙医学、法律学、外科医学等专业竞争最激烈；数学、统计学、普通物理学、高能物理学等专业竞争较弱。</p>
							</div>
						</div>
					</li>
					<li style="margin-right:0px;">
						<img src="/static/home/img/page/benke_jiangxuejin/sx2.jpg"/  class="bgc" alt="学校性质" title="学校性质">
						<div class="hide">
							<h3>学校性质</h3>
							<img src="/static/home/img/page/benke_jiangxuejin/111.png" alt="" />
						</div>
						<div class="hide1">
							<div class="black">
								<h3>地理位置</h3>
								<p>不同大学因为地理位置，资金来源等因素有不同的资金实力，自然提供给学生的奖学金也各不相同。比如哈佛大学就有全美最多的奖学金储备，而一些加州州立大学因为奖学金来源主要由政府资助，所以奖学金的申请有些困难。学校越好，奖学金的申请就更加激烈</p>
							</div>
						</div>
					</li>
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/sx3.jpg"/  class="bgc" alt="套磁问题" title="套磁问题">
						<div class="hide">
							<h3>套磁问题</h3>
							<img src="/static/home/img/page/benke_jiangxuejin/111.png" alt="" />
						</div>
						<div class="hide1">
							<div class="black">
								<h3>理工科</h3>
								<p>理工科学生套磁意义最大，通常来说，使用"套磁"申请博士要比申请硕士有用；申请理工科比文科有用，因为你所拿到的奖学金是教授的研究经费的一部分，与其说是学校给你发奖学金不如说是教授给你发。</p>
								<h3>文科</h3>
								<p>研究经费一般由院系决定，教授可以起到的作用有限。</p>
							</div>
						</div>
					</li>
					<li  style="margin-right:0px;">
						<img src="/static/home/img/page/benke_jiangxuejin/sx4.jpg"/  class="bgc" alt="申请材料" title="申请材料">
						<div class="hide">
							<h3>申请材料</h3>
							<img src="/static/home/img/page/benke_jiangxuejin/111.png" alt="" />
						</div>
						<div class="hide1">
							<div class="black">
								<h3>实践能力和科研背景尤为重要</h3>
								<p>招生官在浏览学生的申请材料时，除了必要考试分数"达标"，更看重实践能力和科研背景，重点强调学术活动，科研能力等方面的优势。</p>
								<h3>推荐信</h3>
								<p>推荐信理想的人选是系主任、专业课教授和自己的导师。推荐信客观、实在，优点和不足兼顾，往往比对学生一味说好更能让校方信服</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="phone">
				<a  href="javascript:;" onclick="go()" class="" style="margin-right:60px;">在线评估奖学金申请胜算</a>
				<a  href="javascript:;" onclick="go()" class="">留学咨询热线：400-900-9770</a>
			</div>
		</div>
		<!--美国大学奖学金申请注意事项-->
		
		<!--全维度高品质背景提升项目-->
		<div class="hoist gk_index">
			<div class="title">
				全维度高品质背景提升项目
			</div>
			<div class="item gWidth1170">
				<ul class="clearfix">
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/bj1.jpg" alt="斯坦福国际精英大学先修项" title="斯坦福国际精英大学先修项" />
						<div class="shows">
							<h3>斯坦福国际精英大学先修项</h3>
						</div>
						<div class="shows1">
							<h3>斯坦福国际精英大学先修项</h3>
							<p>科研时间：2019年8月6日 - 8月18日（13天）</p>
							<a  href="javascript:;" onclick="go()">查看详情</a>
						</div>
					</li>
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/bj2.jpg" alt="加州大学伯克利分校暑期夏校项目" title="加州大学伯克利分校暑期夏校项目" />
						<div class="shows" style="left: 30px;">
							<h3>加州大学伯克利分校暑期夏校项目</h3>
						</div>
						<div class="shows1">
							<h3>加州大学伯克利分校暑期夏校项目</h3>
							<p>科研时间：2019年7月14日-7月27。</p>
							<a  href="javascript:;" onclick="go()">查看详情</a>
						</div>
					</li>
					<li style="margin-right: 0px;">
						<img src="/static/home/img/page/benke_jiangxuejin/bj3.jpg" alt="RSI麻省理工科学研究暑期项目" title="RSI麻省理工科学研究暑期项目" />
						<div class="shows" style="left:44px;">
							<h3>RSI麻省理工科学研究暑期项目</h3>
						</div>
						<div class="shows1">
							<h3>RSI麻省理工科学研究暑期项目</h3>
							<p>科研时间：每年暑假开始招生。</p>
							<a  href="javascript:;" onclick="go()">查看详情</a>
						</div>
					</li>
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/bj4.jpg" alt="商业领导力夏令营" title="商业领导力夏令营" />
						<div class="shows" style="left: 100px;">
							<h3>商业领导力夏令营</h3>
						</div>
						<div class="shows1">
							<h3>商业领导力夏令营</h3>
							<p>科研时间：每年七、八月份开始。</p>
							<a  href="javascript:;" onclick="go()">查看详情</a>
						</div>
					</li>
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/bj5.jpg" alt="写作人文类夏令营" title="写作人文类夏令营" />
						<div class="shows"  style="left: 100px;">
							<h3>写作人文类夏令营</h3>
						</div>
						<div class="shows1">
							<h3>写作人文类夏令营</h3>
							<p>科研时间：每年七、八月份开始，正是暑期时间。</p>
							<a  href="javascript:;" onclick="go()">查看详情</a>
						</div>
					</li>
					<li  style="margin-right: 0px;">
						<img src="/static/home/img/page/benke_jiangxuejin/bj6.jpg" alt="数学类夏令营" title="数学类夏令营" />
						<div class="shows"  style="left: 120px;">
							<div class="disa">
								<h3>数学类夏令营</h3>	
							</div>
						</div>
						<div class="shows1">
							<h3>数学类夏令营</h3>
							<p>科研时间：每年暑期开始。</p>
							<a  href="javascript:;" onclick="go()">查看详情</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!--全维度高品质背景提升项目-->
		
		<!--美国大学奖学金申请方案-->
		<div class="scheme gk_index">
			<div class="titles">美国大学奖学金申请方案</div>
			<div class="gWidth1170 fan">
				<div class="plan_top">
					<ul class="clearfix">
						<li>
							<h3>留学规划</h3>
							<p>精英团队全程规划方案</p>
							<div class="triangle_border_down"></div>
						</li>
						<li>
							<h3>语言培训</h3>
							<p>TOEFL、SAT1/2、ACT、AP/IB课程</p>
							<div class="triangle_border_down"></div>
						</li>
						<li>
							<h3>文书规划</h3>
							<p>专业文书写作、轻松<br />俘获招生官</p>
							<div class="triangle_border_down"></div>
						</li>
						<li style="margin-right: 0px;">
							<h3>后续服务</h3>
							<p>签证办理、海外租房、<br />实习就业</p>
							<div class="triangle_border_down"></div>
						</li>
					</ul>
				</div>
				<div class="plan_cet">
					<ul class="clearfix">
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
				<div class="plan_btm">
					<ul class="clearfix">
						<li>
							<div class="triangle_border_up"></div>
							<h3>背景提升</h3>
							<p>游学访校、夏校、志愿者、实习、科研</p>
						</li>
						<li>
							<div class="triangle_border_up"></div>
							<h3>语言培训</h3>
							<p>选校数量、流程、匹配合适院校</p>
						</li>
						<li>
							<div class="triangle_border_up"></div>
							<h3>文书规划</h3>
							<p>实时追踪、密切联系、一周直拿名校offer</p>
						</li>
					</ul>
				</div>
				<a  href="javascript:;" onclick="go()" class="button">量身定制留学方案</a>
			</div>
		</div>
		<!--美国大学奖学金申请方案-->
		
		<!--美国大学奖学金申请流程-->
		<div class="flow gk_index">
			<div class="title">
				美国大学奖学金申请流程
			</div>
			<div class="gWidth1170 fixeda clearfix">
				<div class="shenqing fl">
					<ul>
						<li>申请年8月</li>
						<li>申请年10月</li>
						<li>申请年11月</li>
						<li>申请年12月</li>
						<li>入学年1-3月</li>
						<li>入学年3-4月</li>
					</ul>
				</div>
				<div class="shenqing1 fl">
					<ul>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
				<div class="shenqing2 fl">
					<ul>
						<li>联系美国大学，询问奖学金对国际学生的设置情况和申请事宜。</li>
						<li>尽可能达到学校要求的TOEFL、SAT等必要考试。</li>
						<li>按学校要求准备申请材料，网申表格、要求文书及奖学金申请表格和资金证明、父母工作收入证明等。</li>
						<li>提交申请材料和奖学金申请材料。</li>
						<li>申请人及时查询申请状态，核实申请的完整性。</li>
						<li>等待申请结果，慎重选择Offer。</li>
					</ul>
				</div>
				<div class="shenqing3 fl">
					<img src="/static/home/img/page/benke_jiangxuejin/tu1.jpg">
				</div>
			</div>
			<a  href="javascript:;" onclick="go()" class="button">各环节如何细致规划</a>
		</div>
		<!--美国大学奖学金申请流程-->
		
		<!--名校奖学金申请案例-->
		<div class="anli gk_index">
			<div class="titles">
				名校奖学金申请案例
			</div>
			<div class="fuchu gWidth1170">
				<ul class="clearfix">
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/an11.jpg" alt="约翰霍普金斯大学" title="约翰霍普金斯大学"/>
						<div class="english">
							<h3>勤奋加努力<br />一路奖学金 完成大学梦</h3>
						</div>
						<div class="hanyu">
							<h3>吴同学</h3>
							<p><strong>获取奖学金：</strong>$16,000</p>
							<p><strong>录取学校：</strong>约翰霍普金斯大学</p>
							<a  href="javascript:;" onclick="go()">查看申请方案</a>
						</div>
					</li>
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/an22.jpg" alt="华盛顿学院" title="华盛顿学院"/>
						<div class="english">
							<h3>精彩文书助力<br />成功拿到华盛顿学院奖学金</h3>
						</div>
						<div class="hanyu">
							<h3>王同学</h3>
							<p><strong>获取奖学金：</strong>$15,000</p>
							<p><strong>录取学校：</strong>华盛顿学院</p>
							<a  href="javascript:;" onclick="go()">查看申请方案</a>
						</div>
					</li>
					<li>
						<img src="/static/home/img/page/benke_jiangxuejin/an33.jpg" alt="艾姆赫斯特学院" title="艾姆赫斯特学院"/>
						<div class="english">
							<h3>惊喜之中意料之外<br />既获录取通知书又拿到奖学金</h3>
						</div>
						<div class="hanyu">
							<h3>孙同学</h3>
							<p><strong>获取奖学金：</strong>$20,000</p>
							<p><strong>录取学校：</strong>艾姆赫斯特学院</p>
							<a  href="javascript:;" onclick="go()">查看申请方案</a>
						</div>
					</li>
					<li style="margin-right:0px;">
						<img src="/static/home/img/page/benke_jiangxuejin/an44.jpg" alt="哈维姆德学院" title="哈维姆德学院"/>
						<div class="english">
							<h3>潜力无限<br />背景提升后荣获奖学金</h3>
						</div>
						<div class="hanyu">
							<h3>李同学</h3>
							<p><strong>获取奖学金：</strong>$10,000</p>
							<p><strong>录取学校：</strong>哈维姆德学院</p>
							<a  href="javascript:;" onclick="go()">查看申请方案</a>
						</div>
					</li>
				</ul>
			</div>
			<a  href="javascript:;" onclick="go()" class="button">查看更多案例</a>
		</div>
		<!--名校奖学金申请案例-->
		<style type="text/css">
			.hanyu{position: absolute;top: 0px;left: 0px;color: #fff;text-align: center;    width: 272px;height: 192px;display: none;}
			.hanyu h3{margin: 20px 0;}
			.hanyu p{margin-bottom: 4px;}
			.hanyu a{width: 104px;
		    height: 30px;
		    border: 1px solid rgba(255,255,255,1);
		    text-align: center;
		    line-height: 30px;
		    border-radius: 3px;
		    color: #fff;
		    margin: 20px auto;}
			.english{text-align: center;margin-top:-130px;}
			.english h3{font-size:18px;font-weight:bold;line-height: 30px;color: #fff;}
			.anli{width:100%;height:553px;background:url(/static/home/img/page/benke_jiangxuejin/beijing3.jpg) no-repeat center center;background-size:cover;}
			.fuchu ul{margin-top:60px;}
			.fuchu li{width:272px;height:192px;float: left;margin-right: 26px;position: relative;}
			.fuchu li img{width:272px;height:192px;}
			.flow{height:540px;}
			.fixeda{border:1px solid rgba(181,190,245,1);height:315px;}
			.shenqing{background:rgba(255,255,255,1);border-radius:3px;margin-top: 14px;}
			.shenqing li{font-size:17px;font-weight:bold;margin-top: 22px;margin-left: 30px;}
			.shenqing1{margin-top: 40px;margin-left: 20px;}
			.shenqing2{margin: 10px 0 0 20px;}
			.shenqing3{margin: 30px 0 0 32px;}
			.shenqing2 li{font-size:16px;font-weight:400;margin-top: 24px;}
			.shenqing1 li:nth-child(odd){width:10px;height:10px;background:rgba(181,190,245,1);border-radius:50%;}
			.shenqing1 li:nth-child(even){width:1px;height:35px;border-left:1px solid rgba(181,190,245,1);margin-left: 4px;}
			.button{width:272px;height:40px;background:#fff;border-radius:3px;color: rgba(127,139,209,1);margin: 60px auto auto auto;text-align: center;line-height:40px;box-shadow: 0px 3px 6px rgba(0,0,0,0.23)}
			.button:hover{background:rgba(127,139,209,1);color: #fff;}
			.triangle_border_up {
			    width: 0;
			    height: 0;
			    border-width: 0 10px 10px;
			    border-style: solid;
			    border-color: transparent transparent #D9DDF9;
			    margin:0px auto;
			    position: relative;
			    bottom: 10px;
			}
			.triangle_border_down {
			    width: 0;
			    height: 0;
			    border-width: 10px 10px 0;
			    border-style: solid;
			    border-color: #D9DDF9 transparent transparent;
			    margin:8px auto;
			    position: relative;
			}
			.fan{margin-top: 60px;}
			.plan_cet{margin:40px 0 0 88px;}
			.plan_cet li:nth-child(even){width: 152px;height:1px;border-top: 1px solid #BEBCBC;    margin-top: 6px;}
			.plan_cet li:nth-child(odd){width:12px;height:12px;background:rgba(127,139,209,1);border-radius:50%;}
			.plan_cet li{float: left;}
			.plan_btm{margin: 30px 0 0 22px;}
			.plan_btm li{float: left;width:180px;height:92px;background: #D9DDF9;border-radius:5px;margin-left: 150px;text-align: center;}
			.plan_btm li h3{margin:0px 0 6px 0;font-size: 18px;}   
			.plan_top li{float: left;width:180px;height:92px;background: #D9DDF9;border-radius:5px;margin-right: 150px;text-align: center;}
			.plan_top li h3{font-size: 18px;margin: 14px 0 6px 0;}
			.plan_top li p{font-size:15px;height:40px;}
			.scheme{width:100%;height:602px;background: url(/static/home/img/page/benke_jiangxuejin/beijing-1.jpg) no-repeat center center;background-size:cover;margin-top: 60px;}
			.shows{position: absolute;top:100px;left:58px;}
			.shows h3{color: #fff;font-size: 20px;}
			.shows1{position:absolute;top:0px;left: 0px;text-align: center;color: #fff;width:364px;height:224px;background:rgba(0,0,0,.5);display:none;}
			.shows1 h3{font-size:18px;font-weight:bold;margin-top:60px;}
			.shows1 p{font-size:14px;font-weight:400;margin-top: 20px;}
			.shows1 a{width:104px;height:30px;border:1px solid rgba(255,255,255,1);text-align: center;line-height: 30px;border-radius:3px;color: #fff;margin: 20px auto;}
			.item li{width:364px;height:224px;float: left;margin:30px 38px 0 0;position: relative;}
			.attention{width:100%;height: 875px;background: #F8F8F8;}
			.xiee li{width:568px;height:240px;border-radius:3px;float: left;margin:30px 30px 0 0;position: relative;}
			.bgc{width:568px;height:240px;}
			.black{width:458px;margin:20px auto;}
			.black h3{margin-top: 16px;}
			.black p{margin-top: 6px;}
			.hide1{width:568px;height:240px;background:rgba(0,0,0,.5);border-radius:3px;position: absolute;top: 0px;left:0px;color: #fff;display: none;}
			.hide{width:568px;height:240px;text-align: center;background:rgba(255,255,255,.5);position: absolute;top: 0px;left:0px;}
			.hide h3{font-size:24px;font-weight:bold;margin-top:86px;}
			.hide img{width:28px;height:14px;margin: 20px auto;}
			.phone{width:660px;margin:40px auto;}
			.phone a{width:272px;
			height:40px;
			background:rgba(255,255,255,1);
			box-shadow:0px 3px 6px rgba(0,0,0,0.23);border-radius:3px;text-align:center;line-height: 40px;display: inline-block;}
			.phone a:hover{background:rgba(127,139,209,1);color: #fff;}
			.nan{margin-top:60px;}
			.artifice li{float:left;margin-right: 20px;position: relative;}
			.artifice li img{width:272px;height:192px;}
			.show {position: absolute;top:80px;left:74px;color: #fff;text-align: center;}
			.none{position: absolute;top:0px;left:0px;color: #fff;text-align: left;padding: 0 20px;}
			.none h3{margin-top: 20px;font-size: 16px;text-align: center;}
			.none p{margin-top:10px;font-size: 14px;}
			.huzi{margin-top: 60px;}
			.huzi li{float: left;width:180px;height:216px;background:rgba(255,255,255,1);border:1px solid rgba(181,190,245,1);border-radius:3px;text-align: center;margin-right: 18px;box-sizing: border-box;}
			.huzi li img{width:48px;height:48px;margin: 25px 0 20px 0;}
			.huzi li h3{font-size:17px;font-weight:bold;margin-bottom:8px;}
			.huzi li p{font-size:15px;font-weight:400;color:rgba(51,51,51,1);margin-bottom: 22px;}
			.huzi li a{font-size:17px;font-weight:400;color:rgba(99,114,204,1);}
			.tuhao{width:100%;height:834px;background:url(/static/home/img/page/benke_jiangxuejin/beijing1.jpg) no-repeat center center;background-size:cover;}
			.zhifan li{float: left;width:208px;height:252px;background:rgba(255,255,255,1);border:1px solid rgba(219,219,219,1);border-radius:3px;margin:36px 30px 0 0;text-align: center;}
			.zhifan li img{width:96px;height:96px;margin: 30px 0 16px 0;}
			.zhifan li h3{font-size:16px;font-weight:bold;margin-bottom: 8px;}
			.zhifan li p{font-size:15px;font-weight:400;margin-bottom: 10px;}
			.zhifan li a{font-size:17px;font-weight:400;color:rgba(99,114,204,1);}
		</style>
		<div id="mydiv" class="ys_index gk_index" style="height:628px;">
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
		</div>
	</body>
	<!-- 底部 -->
		
<!-- 底部 -->
<div class="bottomD">
	<div class="bottomTop">
		<div class="gWidth1170 clearfix">
			<!-- logo 地址 联系方式 -->
			<div class="fl logo">
				<a href="/"><img src="/static/home/img/home/logodi.png" alt="美国留学_专业的美国留学服务中介机构_彬彬教育" title="美国留学_专业的美国留学服务中介机构_彬彬教育"></a>
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
				<img src="/static/home/img/rwm.jpg" alt="">
				<p>扫一扫<br />留学课程免费听</p>
			</div>
			<div class="fr ewm rwm">
				<img src="/static/home/img/home/845167097512794061.png" alt="">
				<p>扫一扫<br />留学问题早知道</p>
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
	var height = 540;
	var width = 688;
	var top=Math.round((window.screen.height-height)/2);
	var left=Math.round((window.screen.width-width)/2);
    window.open("http://uclient.yunque360.com/frame.html?company_id=ca455t16093i&id=dft35023157&lng=cn&r=&rf1=http%3A//m.beliwin&rf2=.com/&p=http%3A//m.beliwin.com/page/collegeseniormoney.html&cid=1535016066310391295601&sid=c9b247e1cad84b46a6831b00506930d1","newwindow", "height=" + height + ", width=" + width + ", top=" + top + ", left= " + left + ", toolbar =no, menubar=no, scrollbars=no, resizable=no, location=no, status=no");
}
// function go() {
//          window.open('http://uclient.yunque360.com/frame.html?company_id=ca455t16093i&id=dft35023157&lng=cn&r=&rf1=http%3A//m.beliwin&rf2=.com/&p=http%3A//m.beliwin.com/page/collegeseniormoney.html&cid=1535016066310391295601&sid=c9b247e1cad84b46a6831b00506930d1');
//       }
if($('.youqing').children().length == 0){
	$('.bottomD').css({'height': '670px'});
}
</script>
<!-- 云雀客服 -->
		<script> (function(scope, globalName, ApiAddress) { window[globalName] = window[globalName] || function(company_id) { (window[globalName].company_id = window[globalName].company_id || company_id); }; var ele = document.createElement("script"); ele.src = ApiAddress + "?v=" + new Date().getUTCDate(); document.getElementsByTagName("body")[0].appendChild(ele); })(window, "_YUNQUE", "//dist.yunque360.com/bundle.js"); _YUNQUE("ca455t16093i"); </script>


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
		var path_source = document.referrer;
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
				path_source:path_source,
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
	.hid button{width: 120px;height: 24px;background-color: #000000;color: #FFFFFF;font-size: 12px;line-height: 24px;border-radius: 2px;display: block;margin: 0 auto;cursor:pointer;border: none;}
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
<!-- 点击标签，跳转到搜索页面 -->
<script type="text/javascript">
	$(".label").click(function(){
		// http://www.beliwin.com/home/search/index.html?keywords=%E7%BE%8E%E5%9B%BD&page=1
		var keywords = $(this).html();
		var url = "<?php echo url('search/index'); ?>?keywords="+keywords+"&page=1";
		window.open(url);
	});
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
				}else if(top<=$('.huadou').offset().top){
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
			}
			$('.bannerNav span').on('click', function () {
				var index = $('.bannerNav span').index($(this));
				var offsetTop = $('.gk_index').eq(index).offset().top;
				$('body, html').stop().animate({scrollTop: offsetTop - 50}, 1500);
			})
		
		
		$('.fuchu li').hover(function(){
			$(this).children('.english').stop().fadeOut();
			$(this).children('.hanyu').stop().fadeIn();
			}, function (){
			$(this).children('.hanyu').stop().fadeOut();
			$(this).children('.english').stop().fadeIn();
		});
		
		$('.nan li').hover(function(){
			$(this).children('.show').stop().fadeOut();
			$(this).children('.none').stop().fadeIn();
			}, function (){
			$(this).children('.none').stop().fadeOut();
			$(this).children('.show').stop().fadeIn();
		});
		$('.xiee li').hover(function(){
			$(this).children('.hide').stop().fadeOut();
			$(this).children('.hide1').stop().fadeIn();
			}, function (){
			$(this).children('.hide1').stop().fadeOut();
			$(this).children('.hide').stop().fadeIn();
		});
		
		$('.know li').hover(function(){
			$(this).children('.hidden').stop().fadeOut();
			$(this).children('.hidden1').stop().fadeIn();
			}, function (){
			$(this).children('.hidden1').stop().fadeOut();
			$(this).children('.hidden').stop().fadeIn();
		});
		
		$('.item li').hover(function(){
			$(this).children('.shows').stop().fadeOut();
			$(this).children('.shows1').stop().fadeIn();
			}, function (){
			$(this).children('.shows1').stop().fadeOut();
			$(this).children('.shows').stop().fadeIn();
		});
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

	<!-- 本科表单 -->
	<!-- 浮动表单 -->
		<div class="formFd">
			<div class="gWidth1170">
				<h3>美国本科留学VIP申请</h3>
				<input type="text" class="name" placeholder="姓名：" />
				<input type="text" class="phone" placeholder="电话：" />
				<input type="text" class="zhuanye" placeholder="申请专业">
				<button class="button">提交</button>
				<img src="/static/home/img/clear2.png" alt="">
			</div>
		</div>
		<div class="formGb"><p>美国本科<br />VIP申请</p></div>
		
		<style type="text/css">
		.formFd{width: 100%;height: 84px;background-color: #000000;background-color: rgba(0,0,0,0.8);position: fixed;bottom: 0; overflow: hidden;	}
		.formFd h3{display: inline-block;font-size: 22px;color: #FFFFFF;line-height: 84px;color: #FFFFFF;font-weight: normal;margin-right: 35px;}
		.formFd input{width: 210px;height: 34px;border: 1px solid #ADADAD;border-radius: 3px;text-indent: 15px;color: #FFFFFF;margin-right: 30px;line-height: 34px;}
		.formFd select{width: 212px;height: 36px;border: 1px solid #ADADAD;border-radius: 3px;color: #999999;text-indent: 15px;line-height: 36px;margin-right: 32px;}
		.formFd button{width: 92px;height: 36px;background-color: #FFFFFF;text-align: center;line-height: 36px;font-size: 18px;border-radius: 3px;cursor:pointer;}
		.formFd button:hover{background-color: #FF7062;border-color: #FF7062;}
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
				var Question = $('.formFd .zhuanye').val();
				var url = window.location.href;
				var path_source = document.referrer;
				if( Name == '' || Phone == '' || Question == '' ){
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
						question: Question,
						urlsite: url,
						path_source:path_source
					},
					success: function (res) {
						alert(res.datas);
						$('.formFd .name').val('');
						$('.formFd .phone').val('');
						$('.formFd .zhuanye').val('');
					}
				})
			})
		</script>

</html>