<?php /*a:6:{s:74:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\lodging.html";i:1552974500;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1551955433;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1551670345;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1552990534;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1552992994;s:86:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_highSchool.html";i:1552974318;}*/ ?>
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
	<link rel="stylesheet" href="/static/home/css/page/lodging.css" />
	
</head>
<style type="text/css">
		.banner {background: url(/static/home/img/page/jisugaozhong/banner.png) no-repeat center center;background-size: cover;width: 100%;height: 532px;}
		.anniu {width: 648px;position: absolute;bottom: 141px;left: 50%;margin-left: -324px; text-align: center;}
		.anniu a {width: 226px;height: 50px;text-align: center;line-height: 52px;font-size: 22px;color: #FFFFFF; display: inline-block;}
		.anniu a.two {background-color:#fff;color: #7FC3D1;margin-right: 100px;}
		.anniu a:hover{background-color:#7FC3D1;color: #fff;}
		
		.bannerNav {width: 100%;height: 60px;background-color: #EEEEEE;line-height: 60px;font-size: 0;}
		.bannerNav>div {height: 60px;}
		.bannerNav span {font-size: 17px;margin-right:42px;cursor: pointer;}
		.bannerNav span.active {color:#7FC3D1;font-weight: bold;}
		.hiddenn{height:413px;width: 1164px;overflow-y: scroll;border-bottom:1px solid #7FC3D1;}
		.hiddenn tr td{width:152px;text-align: center;box-sizing: border-box;}
		.hiddenn tr td:nth-child(2){width:295px;}
		.hiddenn tr td:nth-child(3){width:302px;}
		.hiddenn tr td:nth-child(4){width:226px;}
		.hiddenn tr td:nth-child(5){width:170px;}
		.top_rank{margin-top:40px;display:none;}
		.top_rank.on{display: block;}
		.top_rank tr{display: block;}
		.top_rank th{text-align: center;height:40px;font-weight: normal;border-top: 1px solid #7FC3D1;border-left: 1px solid #7FC3D1;box-sizing: border-box;}
		.top_rank th a:hover,.top_rank td a:hover{color: #7FC3D1;}
    	.top_rank td {text-align: center;height:40px;border-top: 1px solid #7FC3D1;border-left: 1px solid #7FC3D1;box-sizing: border-box;}

		.top_rank td{font-size:16px;font-weight:400;text-align: center;}
		.top_rank li{color: #fff;float: left;width:152px;height:70px;line-height:70px;text-align: center;font-size: 16px;background:#7FC3D1;box-sizing: border-box;border-left: 1px solid #fff;text-align: center;}
		.title {font-size:38px!important;font-weight:bold;color: rgba(0, 0, 0, 1);text-align: center;margin: 80px 0 48px 0;}
		.titles {font-size:38px;font-weight:bold;color: rgba(0, 0, 0, 1);text-align: center;margin:0px 0 48px 0;padding-top:80px;}
		.hundred{width: 900px;margin: 0 auto;}
		.hundred li{float: left;width:154px;height:40px;background:#fff;border-radius:4px;margin-right: 30px;text-align: center;line-height: 40px;color:#7FC3D1;font-size: 18px;border: 1px solid #7FC3D1;cursor: pointer;}
		.hundred li.on{background:#7FC3D1;color: #fff;font-weight: bold;}
		.hidden11 img{width:25px;height:14px;margin-top:40px;}
		.back{width:1170px;height:476px;}
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
				<form action="<?php echo url('search/index'); ?>" method="get">
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
	<div class="banner">
		<h1>美国顶级寄宿高中申请指南</h1>
		<!-- 按钮 -->
		<div class="anniu clearfix">
			<a href="javascript:;" onclick="go()" class="two">获取留学规划</a>
			<a href="javascript:;" onclick="go()" class="two" style="margin-right: 0px;">开启选校测评</a>
		</div>
	</div>
	
	<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">寄宿高中排名</span>
				<span>寄宿高中特点</span>
				<span>作息时间</span>
				<span>申请条件</span>
				<span>申请流程</span>
				<span>精彩案例</span>
				<span>背景提升</span>
				<span>留学课堂</span>
				<span>海外监管服务</span>
				<span style="margin-right: 0px;">彬彬优势</span>
			</div>
		</div>
		
	<!--美国顶级寄宿高中排名一览表-->
	<div class="outside gk_index huadou">
		<div class="gWidth1170">
			<div class="titles">
				美国顶级寄宿高中排名一览表
			</div>
			<div class="hundred">
				<ul class="clearfix">
					<li class="on">TOP 1-20</li>
					<li>TOP 21-40</li>
					<li>TOP 41-60</li>
					<li>TOP 61-80</li>
					<li style="margin-right: 0px;">TOP 81-100</li>
				</ul>
			</div>
			<div class="top_rank on">
				<ul class="clearfix">
	                <li>排名</li>
	                <li style="width:295px;">学校名称（中文）</li>
	                <li style="width:303px;">学校名称（英文）</li>
	                <li style="width:226px;">所在州</li>
	                <li style="width:180px;">马上申请</li>
	            </ul>
				<div class="hiddenn">
					<table border="0" cellspacing="0" cellpadding="0">
					<tbody>
						<tr><td>1</td><td><img src="/static/home/img/page/jisugaozhong/xing.png"/>菲利普斯学校安多佛</td><td>Phillips Academy</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>2</td><td><img src="/static/home/img/page/jisugaozhong/xing.png"/>菲利普斯埃克塞特中学</td><td>Phillips Exeter Academy</td><td>新罕布什尔州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>3</td><td><img src="/static/home/img/page/jisugaozhong/xing.png"/>乔特罗斯玛丽中学</td><td>Choate Rosemary Hall</td><td>康涅狄格州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>4</td><td><img src="/static/home/img/page/jisugaozhong/xing.png"/>圣保罗中学</td><td>St. Paul's School</td><td>新罕布什尔州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>5</td><td><img src="/static/home/img/page/jisugaozhong/xing.png"/>劳伦斯威尔高中</td><td>The Lawrenceville School</td><td>新泽西州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>6</td><td><img src="/static/home/img/page/jisugaozhong/xing.png"/>迪尔菲尔德学院</td><td>Deerfield Academy</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>7</td><td>撒切尔学校</td><td>The Thacher Schoo</td><td>加利福尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>8</td><td>米尔顿高中</td><td>Milton Academy</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>9</td><td>格里诺贵族学校</td><td>Noble and Greenough School</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>10</td><td>格罗顿学校</td><td>Groton School</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>11</td><td>凯特中学</td><td>Cate School</td><td>加利福尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>12</td><td>克瑞布鲁克中学</td><td>Cranbrook Schools</td><td>密歇根州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>13</td><td><img src="/static/home/img/page/jisugaozhong/xing.png"/>米德尔塞克斯中学</td><td>Middlesex School</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>14</td><td><img src="/static/home/img/page/jisugaozhong/xing.png"/>鲁米斯查菲高中</td><td>The Loomis Chaffee School</td><td>康涅狄格州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>15</td><td>霍奇基斯中学</td><td>The Hotchkiss School</td><td>康涅狄格州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>16</td><td>佩迪中学</td><td>Peddie School</td><td>新泽西州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>17</td><td>霍克黛女子学校</td><td>The Hockaday School</td><td>得克萨斯州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>18</td><td>哈克里中学</td><td>Hackley School</td><td>纽约州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>19</td><td>圣安德鲁学校</td><td>St. Andrew's School</td><td>特拉华州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
							<tr><td>20</td><td>圣奥尔本斯中学</td><td>St. Albans School</td><td>华盛顿特区</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
					</tbody>
					</table>
				</div>
			</div>
			
			<div class="top_rank">
				<ul class="clearfix">
	                <li>排名</li>
	                <li style="width:295px;">学校名称（中文）</li>
	                <li style="width:303px;">学校名称（英文）</li>
	                <li style="width:226px;">所在州</li>
	                <li style="width:180px;">马上申请</li>
	            </ul>
				<div class="hiddenn">
					<table border="0" cellspacing="0" cellpadding="0">
					<tbody>
						<tr><td>21</td><td>湖森中学</td><td>Lake Forest Academy</td><td>伊利诺州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>22</td><td><img src="/static/home/img/page/jisugaozhong/xing.png"/>塔夫脱中学</td><td>The Taft School</td><td>康涅狄格州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>23</td><td>伍德赛德中学</td><td>Woodside Priory School</td><td>加利福尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>24</td><td>桑迪赛德学院</td><td>Shady Side Academy</td><td>宾夕法尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>25</td><td>圣马克学校</td><td>St. Mark's School</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>26</td><td>康科德学院</td><td>Concord Academy</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>27</td><td>圣斯蒂芬教会学校</td><td>St. Stephen's Episcopal School</td><td>得克萨斯州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>28</td><td>俄勒冈主教高中</td><td>Oregon Episcopal School</td><td>俄勒冈州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>29</td><td>韦伯中学</td><td>The Webb Schools</td><td>加利福尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>30</td><td>摩尔西斯堡学院</td><td>Mercersburg Academy</td><td>宾夕法尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>31</td><td>库欣高中</td><td>Cushing Academy</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>32</td><td>西储学院</td><td>Western Reserve Academy</td><td>俄亥俄州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>33</td><td>艾玛威拉德女子中学</td><td>Emma Willard School</td><td>纽约州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>34</td><td>雅典纳中学</td><td>The Athenian School</td><td>加利福尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>35</td><td>世界联合学院</td><td>United World College USA</td><td>新墨西哥州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>36</td><td>伊奥拉尼学校</td><td>Iolani School</td><td>夏威夷州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>37</td><td>布莱尔学院</td><td>Blair Academy</td><td>新泽西州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>38</td><td>普林斯顿胡恩中学</td><td>The Hun School of Princeton</td><td>新泽西州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>39</td><td>北野山高中</td><td>Northfield Mount Hermon School</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>40</td><td><img src="/static/home/img/page/jisugaozhong/xing.png"/>希尔中学</td><td>The Hill School</td><td>宾夕法尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
					</tbody> 
					</table>
				</div>
			</div>
			<div class="top_rank">
				<ul class="clearfix">
	                <li>排名</li>
	                <li style="width:295px;">学校名称（中文）</li>
	                <li style="width:303px;">学校名称（英文）</li>
	                <li style="width:226px;">所在州</li>
	                <li style="width:180px;">马上申请</li>
	            </ul>
				<div class="hiddenn">
					<table border="0" cellspacing="0" cellpadding="0">
					<tbody>
						<tr><td>41</td><td>印第安泉中学</td><td>Indian Springs School</td><td>阿拉巴马州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>42</td><td>主教高中</td><td>Episcopal High School</td><td>弗吉尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>43</td><td>玛黛拉女子中学</td><td>The Madeira School</td><td>弗吉尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>44</td><td>莫米谷走读中学</td><td>Maumee Valley Country Day School</td><td>俄亥俄州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>45</td><td>威利学校</td><td>The Village School</td><td>得克萨斯州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>46</td><td>河石国际学校</td><td>Riverstone International School</td><td>爱荷华州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>47</td><td>乔治高中</td><td>George School</td><td>宾夕法尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>48</td><td>迈斯特中学</td><td>The Masters School</td><td>纽约州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>49</td><td>乔治城预科学校</td><td>Georgetown Preparatory School</td><td>马里兰州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>50</td><td>布鲁克斯学校</td><td>Brooks School</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>51</td><td>西城中学</td><td>Westtown School</td><td>宾夕法尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>52</td><td>托马斯杰斐逊学校</td><td>Thomas Jefferson School</td><td>密苏里州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>53</td><td>肯特高中</td><td>Kent School</td><td>康涅狄格州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>54</td><td>波特女子高中</td><td>Miss Porter's School</td><td>康涅狄格州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>55</td><td>麦克多纳学校</td><td>McDonogh School</td><td>马里兰州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>56</td><td>石溪中学</td><td> The Stony Brook School</td><td>纽约州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>57</td><td>阿什维尔学校</td><td>Asheville School</td><td>北卡罗来纳州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>58</td><td>威斯敏斯特学院</td><td>Westminster School</td><td>康涅狄格州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>59</td><td>史蒂文森中学</td><td>Stevenson School</td><td>加利福尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>60</td><td>费尔蒙特预备中学</td><td>Fairmont Preparatory Academy</td><td>加利福尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
					</tbody>
					</table>
				</div>
			</div>
			
			<div class="top_rank">
				<ul class="clearfix">
	                <li>排名</li>
	                <li style="width:295px;">学校名称（中文）</li>
	                <li style="width:303px;">学校名称（英文）</li>
	                <li style="width:226px;">所在州</li>
	                <li style="width:180px;">马上申请</li>
	            </ul>
				<div class="hiddenn">
					<table border="0" cellspacing="0" cellpadding="0">
					<tbody>
						<tr><td>61</td><td>柯尔沃学院</td><td>Phillips Academy</td><td>印地安那州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>62</td><td>西北中学</td><td>The Northwest School</td><td>华盛顿特区</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>63</td><td>潘宁顿中学</td><td>The Pennington School</td><td>新泽西州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>64</td><td>麦卡利中学</td><td>McCallie School</td><td>田纳西州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>65</td><td>梳士巴利男子学校</td><td>Salisbury School</td><td>康涅狄格州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>66</td><td>明尼苏达国际学校</td><td>The International School of Minnesota</td><td>明尼苏达州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>67</td><td>圣乔治学校</td><td>St. George's School</td><td>罗得岛州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>68</td><td>格里尔女子中学</td><td>Grier Schoo</td><td>宾夕法尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>69</td><td>达娜豪尔女子高中</td><td>Dana Hall School</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>70</td><td>乌德贝里森林学校</td><td>Woodberry Forest School</td><td>弗吉尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>71</td><td>福利斯特里奇女子中学</td><td>Forest Ridge School of the Sacred Heart</td><td>华盛顿特区</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>72</td><td>圣安德鲁学校</td><td>Saint Andrew's School</td><td>佛罗里达州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>73</td><td>圣卡塔利娜学校</td><td>Santa Catalina School</td><td>加利福尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>74</td><td>查塔姆霍尔学校</td><td>Chatham Hall</td><td>弗吉尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>75</td><td>林顿女子中学</td><td>Linden Hall</td><td>宾夕法尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>76</td><td>怀俄明高中</td><td>Wyoming Seminary College Preparatory School</td><td>宾夕法尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>77</td><td>朴茨茅斯修道院中学</td><td>Portsmouth Abbey School</td><td>罗得岛州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>78</td><td>湖沙克中学</td><td>Hoosac School</td><td>纽约州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>79</td><td>萨菲尔德中学</td><td>Suffield Academy</td><td>康涅狄格州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>80</td><td>威斯多佛学校</td><td>Westover School</td><td>康涅狄格州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
					</tbody>
					</table>
				</div>
			</div>
			
			<div class="top_rank">
				<ul class="clearfix">
	                <li>排名</li>
	                <li style="width:295px;">学校名称（中文）</li>
	                <li style="width:303px;">学校名称（英文）</li>
	                <li style="width:226px;">所在州</li>
	                <li style="width:180px;">马上申请</li>
	            </ul>
				<div class="hiddenn">
					<table border="0" cellspacing="0" cellpadding="0">
					<tbody>
						<tr><td>81</td><td>伍德兰兹圣心学院</td><td>Woodlands Academy of the Sacred Heart</td><td>伊利诺州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>82</td><td>美国希伯来学院</td><td>American Hebrew Academy</td><td>北卡罗来纳州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>83</td><td>伽文纳中学</td><td>The Governor's Academy</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>84</td><td>福临特里奇圣心学院</td><td> Flintridge Sacred Heart Academy</td><td>加利福尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>85</td><td>泰博学院</td><td>Tabor Academy</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>86</td><td>佛得谷学校</td><td>Verde Valley School</td><td>亚利桑那州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>87</td><td>圣詹姆斯学校</td><td>Saint James School</td><td>马里兰州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>88</td><td>威斯顿剑桥中学</td><td>The Cambridge School of Weston</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>89</td><td>米斯豪司女子高中</td><td>Miss Hall's School</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>90</td><td>朝圣者学校</td><td>Pilgrim School</td><td>加利福尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>91</td><td>博尔斯学校</td><td> The Bolles School</td><td>佛罗里达州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>92</td><td>德克萨斯主教中学</td><td>TMI Episcopal</td><td>得克萨斯州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>93</td><td>马赫西学校</td><td>Maharishi School</td><td>爱荷华州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>94</td><td>圣约翰中学</td><td>Saint John's Preparatory School</td><td>明尼苏达州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>95</td><td>伍斯特学院</td><td>Worcester Academy</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>96</td><td>韦伯中学</td><td>The Webb School</td><td>田纳西州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>97</td><td>庞弗雷特中学</td><td>Pomfret School</td><td>康涅狄格州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>98</td><td>贝勒中学</td><td>Baylor School</td><td>田纳西州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>99</td><td>科罗拉多喷泉谷学校</td><td>Fountain Valley School of Colorado</td><td>科罗拉多州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>100</td><td>胡桃山艺术高中</td><td>Walnut Hill School for the Arts</td><td>马萨诸塞州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
					</tbody>
					</table>
				</div>
			</div>
			<div class="biaoshi"><img src="/static/home/img/page/jisugaozhong/xing.png" alt="" /><span>星标学校为美国十大联盟学校</span></div>
			
			
		</div>
		<div class="yiqian">
				<a href="javascript:;" onclick="go()" class="buttons fl">什么是十大联盟学校</a>
				<a href="javascript:;" onclick="go()" class="buttons fr">我要申请寄宿高中</a>
			</div>
	</div>
	<!--美国顶级寄宿高中排名一览表-->
	
	<!--美国寄宿高中特点-->
	<div class="lodge gk_index">
		<div class="gWidth1170">
			<div class="titles">
				美国寄宿高中特点
			</div>
			<div class="liuxue">
					<div class="content clearfix">
					<div class="boxs fl">
						<div class="hidden1" >选择性小</div>
						<div class="hidden2">
							<p>院校选择较少，接受中国学生的寄宿中学全美大约有300所左右，其中大部分历史悠久，学术科目较多。</p>
						</div>
					</div>
					<div class="boxs box2 fl">
						<div class="hidden1">国际生比例</div>
						<div class="hidden2">
							<p>学校平均规模在300人左右，国际生比例15%-30%左右。</p>
						</div>
					</div>
					<div class="boxs box3 fl">
						<div class="hidden1">课余活动</div>
						<div class="hidden2">
							<p>以校园活动为主，学生可根据自身爱好安排参加活动时间。</p>
						</div>
					</div>
					<div class="boxs box4 fl">
						<div class="hidden1">申请要求</div>
						<div class="hidden2">
							<p  style="margin-top: 30px;">寄宿学校申请要求相对较高，大多数院校要求托福需要达到80分以上，如果申请TOP 30顶尖高中，托福至少在100分以上才能拿到面试机会。</p>
						</div>
					</div>
					<div class="boxs box5 fl" style="margin-right: 0px;">
						<div class="hidden1">学费情况</div>
						<div class="hidden2">
							<p>寄宿中学的费用比寄宿中学低。走读中学一年学费和生活费一般在＄45,000-＄80,000。</p>
						</div>
					</div>
					
				</div>
				<a href="javascript:;" onclick="go()" class="button">我要申请寄宿高中</a>
			</div>
		</div>
	</div>
	<!--美国寄宿高中特点-->

	<!--美国寄宿高中作息时间表-->
	<div class="recess gk_index">
		<div class="gWidth1170">
			<div class="titles">
				美国寄宿高中作息时间表
			</div> 
			<div class="liuchengs">
				<ul class="clearfix">
					<li><img src="/static/home/img/page/jisugaozhong/zaocan.png" alt="" /><p>7：30-8：15 <br />早餐，看报纸</p></li>
					<li><img src="/static/home/img/page/jisugaozhong/chenhui.png" alt="" /><p>8：15-8：35 <br />全校晨会</p></li>
					<li><img src="/static/home/img/page/jisugaozhong/shangwusitangke.png" alt="" /><p>8：40-11：35<br />上午四堂课<br />课间休息5分钟</p></li>
					<li><img src="/static/home/img/page/jisugaozhong/wucan.png" alt="" /><p>11：40-13：05<br />午餐</p></li>
					<li><img src="/static/home/img/page/jisugaozhong/xaiwuliangtangke.png" alt="" /><p>13：10-14：35<br />下午两堂课<br />课间休息5分钟</p></li>
					<li><img src="/static/home/img/page/jisugaozhong/ziyoushijian.png" alt="" /><p>14：40-15：20<br />自由时间</p></li>
					<li><img src="/static/home/img/page/jisugaozhong/lanqiiu.png" alt="" /><p>15：30-17：30<br />体育活动</p></li>
					<li><img src="/static/home/img/page/jisugaozhong/wancan.png" alt="" /><p>17：30-19：00<br />晚餐 </p></li>
					<li><img src="/static/home/img/page/jisugaozhong/ziyoushijian2.png" alt="" /><p>19：00-20：00<br />自由时间</p></li>
					<li><img src="/static/home/img/page/jisugaozhong/wanzixishijian.png" alt="" /><p>20：00-22：00<br />晚自习时间</p></li>
					<li><img src="/static/home/img/page/jisugaozhong/xishu.png" alt="" /><p>22：00-23：00<br />睡前洗漱<br />宿舍巡逻</p></li>
					<li><img src="/static/home/img/page/jisugaozhong/xiuxi.png" alt="" /><p>23：00<br />熄灯休息</p></li>
				</ul>
			</div>
			<div class="liuxue">
				<div class="content clearfix" style="margin-top: 65px;">
					<div class="boxxx fl">
						<div class="hidden11">
							<h3>关于课堂</h3>
							<img src="/static/home/img/page/jisugaozhong/gengduo.png"/>
						</div>
						<div class="hidden2">
							<h4>关于课堂</h4>
							<span>每堂课为40分钟，课间只有5分钟的空隙，因此老师绝对不可以延课。 </span>
							<span>学生必须要学会如何整理问题，通过预约时间，找老师一次性解决多个问题；另外一种解决方式就是整理好问题之后，写电子邮件给老师。 </span> 
							<span> 在白天的七节课中，不少学生会有一节自由安排的课，如何利用自由时间完全取决于个人。 </span>
							<span> 有些学生选择图书馆学习，有些学生回宿舍补觉，还有的去音乐室练琴，等等。 </span>
							<a href="javascript:;" onclick="go()">查看详情</a>
						</div>
					</div>
					<div class="boxxx box21 fl">
						<div class="hidden11">	
							<h3>体育活动</h3>
							<img src="/static/home/img/page/jisugaozhong/gengduo.png"/>
						</div>
						<div class="hidden2">
							<h4>体育活动</h4>
							<span>一天的课程到下午3点多结束，之后马上就要参加2~3个小时的体育训练。</span>
							<span>学校里有各式各样的体育队伍，比如篮球、排球、足球、美式橄榄球、曲棍球、游泳、击剑等等。 </span> 
							<span>一个学年分秋、冬、春三个赛季，学生可以根据兴趣，在每一个赛季选择参加一种体育运动，一年就是三种。</span>
							<span>在美国学校里，体育和学习二者地位几乎是旗鼓相当，因此在课业上表现不是很突出的学生，往往可以通过体育在众人面前找回自信心。 </span>
							<a href="javascript:;" onclick="go()">查看详情</a>
						</div>
					</div>
					<div class="boxxx box31 fl" style="margin-right: 0px;">
						<div class="hidden11">
							<h3>课余生活</h3>
							<img src="/static/home/img/page/jisugaozhong/gengduo.png"/>
						</div>
						<div class="hidden2">
							<h4>课余生活</h4>
							<span>晚自习准时从晚8点开始，学生一般在自己的房间里学习。</span>
							<span>值班老师在晚自习的时间肩扛几大任务：一是要管理秩序并监督学习，二是课业指导。 </span> 
							<span>在寄宿学校，老师和学生都要学会如何利用杂碎的时间来完成自己一天的任务。 </span>
							<span>从10点到11点为自由时间，学生迎来一天里较后一个小高潮，虽然是短短的60分钟，但绝不能小看，因为这是学生之间巩固关系的重要机会</span>
							<a href="javascript:;" onclick="go()">查看详情</a>
						</div>
					</div>	
				</div>
				<a href="javascript:;" onclick="go()" class="button">我要申请寄宿高中</a>
			</div>
		</div>
	</div>
	<!--美国寄宿高中作息时间表-->
	
	<!--美国高中申请要素-->
		<div class="yaosu gk_index"> 
			<div class="gWidth1170">
				<div class="titless">美国高中申请要素</div>
				<div class="clearfix border">
					<div class="term fl">
						<div class="yingxing"><span>硬性条件</span></div>
						<div class="contents">
							<p>● 美国普通中学</p>
							<span>GPA成绩/SLEP成绩/资金证明/面试</span>
							<a href="javascript:;" onclick="go()">如何提高个人成绩</a>
						</div>
						<div class="contents">
							<p>● 美国精品中学</p>
							<span>GPA成绩/TOEFL/ SSAT美国中学入学考试；  资金证明；  面试</span>
							<a href="javascript:;" onclick="go()">如何提高个人成绩</a>
						</div>
						<div class="contents">
							<p>● 彬彬留学专家提醒：</p>
							<span>申请的年级越高，对成绩的要求也会略高些，主要体现在托福、SSAT、面试及在校成绩等方面。</span>
						</div>
					</div>
					<div class="bgc fl">
						<div class="tiaojian"><span>软性背景</span></div>
						<div class="contentss">
							<p>● 课外活动</p>
							<span>学校的社团活动； 志愿者活动； 国际化背景； 学生研究、发明</span>
						</div>
						<div class="contentss">
							<p>● 奖励荣誉</p>
							<span>数学、奥数、科学竞赛； 辩论赛、英语演讲比赛、模拟联合国等</span>
						</div>
						<div class="contentss">
							<p>● 特长兴趣爱好</p>
							<span>文艺活动：钢琴、绘画等； 体育活动：篮球、游泳等</span>
						</div>
						<div class="contentss">
							<p>● 社会实践</p>
						</div>
						<div class="contents">
							<a href="javascript:;" onclick="go()">我要提高软性背景</a>
						</div>
					</div>
					
				</div>
				<a href="javascript:;" onclick="go()" class="button">你与美国名校只有一步之遥</a>
			</div>
		</div>
		<!--美国高中申请要素-->
		
		<!--美国顶级寄宿高中申请流程-->
		<div class="shenq gk_index">
			<div class="gWidth1170">
				<div class="title">
					美国顶级寄宿高中申请流程
				</div>
				
				<div class="flow">
					<ul class="clearfix">
						<li>
							<div class="fixeds">
								<span>彬彬制定专属留学计划、学习计划和家庭资金计划</span>
							</div>
							<div class="texts">
								<em>●</em>
								<p>3-6月<br />申请启动阶段</p>	
							</div>
						</li>
						<li>
							<div class="fixeds">
								<span>注册托福、SSAT考试</span>
							</div>
							<div class="texts">
								<em>●</em>
								<p>7-8月<br />语言考试培训</p>
							</div>
						</li>
						<li>
							<div class="fixeds">
								<span>参加托福考试、根据分数确定要申请的学校</span>
							</div>
							<div class="texts">
								<em>●</em>
								<p>9月<br />择校阶段</p>
							</div>
						</li>
						<li>
							<div class="fixeds">
								<span>全程申请导师辅助填写申请资料，缴纳申请费，安排面试。</span>
							</div>
							<div class="texts">
								<em>●</em>
								<p>10月<br />申请准备阶段</p>	
							</div>
						</li>
						<li>
							<div class="fixeds">
								<span>学科导师进行考前一对一辅导</span>
							</div>
							<div class="texts">
								<em>●</em>
								<p>11月<br />参加SSAT考试</p>
							</div>
						</li>
						<li>
							<div class="fixeds">
								<span>提交申请，模拟面试，跟进学校</span>
							</div>
							<div class="texts">
								<em>●</em>
								<p>12月<br />进度跟进</p>	
							</div>
						</li>
					</ul>
				</div>
				<div class="dasheds">
					<img src="/static/home/img/page/jisugaozhong/jisugaozhong.png"/>
				</div>
				<div class="flows">
					<ul class="clearfix">
						<li>
							<div class="fixedss">
								<span>继续跟进申请情况</span>
							</div>
							<div class="textss">
								<p>次年2月<br />持续跟进</p>
								<em>●</em>
							</div>
						</li>
						<li>
							<div class="fixedss">
								<span>拿到录取offer，确定住宿，申请护照</span>
							</div>
							<div class="textss">
								<p>次年3月<br />录取阶段</p>
								<em>●</em>
								
							</div>
						</li>
						<li>
							<div class="fixedss">
								<span>签订入学合同，提交押金，取得I-20，预定赴美机票</span>
							</div>
							<div class="textss">
								<p>次年4月<br />准备入学</p>
								<em>●</em>
							</div>
						</li>
						<li>
							<div class="textss">
								<p>次年5月<br />准备阶段</p>	
								<em>●</em>
							</div>
							<div class="fixedss">
								<span>预约签证，模拟签证面试辅导</span>
							</div>
						
						</li>
						<li>
							<div class="fixedss">
								<span>获得签证，购买机票，整理行李</span>
							</div>
							<div class="textss">
								<p>次年6-7月<br />成型阶段</p>
								<em>●</em>
							</div>
						</li>
						<li>
							<div class="fixedss">
								<span>提前到达学校，调整时差，开始留学生活</span>
							</div>
							<div class="textss">
								<p>次年8月<br />报道阶段</p>	
								<em>●</em>
								
							</div>
						</li>
					</ul>
				</div>
			</div>
			<a href="javascript:;" onclick="go()" class="button" style="margin-top: 90px;">量身定制留学方案</a>
		</div>
		<!--美国顶级寄宿高中申请流程-->
		<style type="text/css">
			.dasheds{width:100%;height:232px;position: absolute;bottom:-15px;}
			.texts{margin-top: 20px;}
			.texts.on{color:#7FC3D1;}
			.fixeds.on{display:block;}
			.fixeds{position: absolute;left:12px;top:-90px;display:none;width:164px;height:109px;background:rgba(255,255,255,1);box-shadow:0px 2px 8px 0px rgba(0,0,0,0.17);border-radius:4px 4px 4px 0px;font-weight:400;font-size:14px;color:rgba(0,0,0,1);line-height:20px;letter-spacing:2px;}
			.fixeds span{display: block;padding:20px 16px;}
			
			.textss{margin-top: 20px;}
			.textss.on{color:#7FC3D1;}
			.fixedss.on{display:block;}
			.fixedss{position: absolute;left:12px;bottom:-140px;display:none;width:164px;height:109px;background:rgba(255,255,255,1);box-shadow:0px 2px 8px 0px rgba(0,0,0,0.17);border-radius:4px 4px 4px 0px;font-weight:400;font-size:14px;color:rgba(0,0,0,1);line-height:20px;letter-spacing:2px;}
			.fixedss span{display: block;padding:20px 16px;}
			
			.flow{color: #ddd;margin-top: 130px;}
			.flow li{float: left;width: 16.5%;margin:-28px auto;text-align: center;position: relative;z-index: 111;cursor:pointer;}
			.flow li em{margin:10px auto;font-size: 28px;}
			.flow li p{font-size:22px;font-weight:400;}
			
			.flows{color: #ddd;margin-top: 110px;}
			.flows li{float: left;width: 16.5%;margin:-28px auto;text-align: center;position: relative;z-index: 111;cursor:pointer;}
			.flows li em{margin:10px auto;font-size: 28px;}
			.flows li p{font-size:22px;font-weight:400;}
		</style>
		<!--申请寄宿高中精彩案例-->
		<div class="shenqi gk_index">
			<div class="gWidth1170">
				<div class="titles">
					申请寄宿高中精彩案例
				</div>
				<div class="borders">
					<ul class="clearfix">
						<li>
							<div class="woman clearfix">
								<div class="womanleft fl">
									<img src="/static/home/img/page/jisugaozhong/guigehuizhongyangxuexiao.png" alt="威斯顿剑桥学校" title="威斯顿剑桥学校" />
									<a href="/success/115.html" class="bubians" target="_blank">查看详情</a>
								</div>
								<div class="womanright fl">
									<h3>姓名：K同学</h3>
									<h4>录取院校：威斯顿剑桥学校</h4>
									<p><strong>考试成绩：</strong>托福103, SSAT：2220,GPA：3.8</p>
								</div>
							</div>
						</li>
							<li>
							<div class="woman clearfix">
								<div class="womanleft fl">
									<img src="/static/home/img/page/jisugaozhong/qiaoliaitetianzhujiaoxuexiao.png" alt="韦伯中学" title="韦伯中学" />
									<a href="/success/114.html" class="bubians" target="_blank">查看详情</a>
								</div>
								<div class="womanright fl">
									<h3>姓名：X同学</h3>
									<h4>录取院校：韦伯中学</h4>
									<p><strong>考试成绩：</strong>托福105,SSAT：2100,GPA：4.0</p>
								</div>
							</div>
						</li>
							<li>
							<div class="woman clearfix">
								<div class="womanleft fl">
									<img src="/static/home/img/page/jisugaozhong/lankasitexuexiao.png" alt="罗格斯预科学校" title="罗格斯预科学校" />
									<a href="/success/108.html" class="bubians" target="_blank">查看详情</a>
								</div>
								<div class="womanright fl">
									<h3>姓名：G同学</h3>
									<h4>录取院校：罗格斯预科学校</h4>
									<p><strong>考试成绩：</strong>GPA：3.5+,TOEFL：90+,SSAT：2000+</p>
								</div>
							</div>
						</li>
							<li>
							<div class="woman clearfix">
								<div class="womanleft fl">
									<img src="/static/home/img/page/jisugaozhong/zhujiaobuleidizhongxue.png" alt="伯特利教会学校" title="伯特利教会学校" />
									<a href="/success/95.html" class="bubians" target="_blank">查看详情</a>
								</div>
								<div class="womanright fl">
									<h3>姓名：Aviva</h3>
									<h4>录取院校：伯特利教会学校</h4>
									<p><strong>考试成绩：</strong>GPA3.8,TOEFL101,SSAT2375</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<a href="javascript:;" onclick="go()" class="button">我要申请</a>
			</div>
		</div>
		<!--申请寄宿高中精彩案例-->
		
		<!--定制背景提升活动-->
		<!--定制背景活动-->
		<div class="flexsb gk_index">
			<div class="gWidth1170">
				<div class="titles">定制背景提升活动</div>
				<div class="zation clearfix">
					<div class="custom">
						<img src="/static/home/img/page/jisugaozhong/chaban.jpg" alt="插班" title="插班" />
						<div class="shadow">
							<h3>插班</h3>
							<div class="bordere">
								<span>中国学生利用不同国家学校放假和开学的时间差，赴国外走进当地的学校，进行短期学习，深度体验国外的课堂，感受多元文化。</span>
							</div>
						</div>
					</div>
					<div class="custom">
						<img src="/static/home/img/page/jisugaozhong/fangxiao.jpg" alt="访校" title="访校" />
						<div class="shadow">
							<h3>访校</h3>
							<div class="bordere">
								<span>利用美国当地学校开放日，进入美国精英学校，让孩子体验美高课程，了解美国文化，提升跨文化交流的能力</span>
							</div>
						</div>
					</div>
					<div class="custom" style="margin-right:0px;">
						<img src="/static/home/img/page/jisugaozhong/fugaiquanlei.jpg" alt="夏令营" title="夏令营" />	
						<div class="shadow">
							<h3>夏令营</h3>
							<div class="bordere">
								<span>全真体验世界著名学府，拓宽国际视野，丰富人生阅历，增强主动性，培养个性以及国际化、多元化的文化理念和思维习惯。</span>
							</div>
						</div>
					</div>
				</div>
				<div class="text on">
					彬彬教育提供私人一对一定制化插班服务<br />根据您孩子的实际情况和您的需求，为您孩子匹配最合适的海外插班课堂！
				</div>
				<div class="text">
					彬彬留学提供私人定制化访校服务，<br />学习+游览，让您的孩子收获满满！
				</div>
				<div class="text">
					彬彬教育可提供私人定制路线<br />满足不同家长及学生的需求，切身体验外国学校生活，有效提高学生的综合能力。
				</div>
				<a href="javascript:;" onclick="go()" class="button">马上进行私人定制</a>
			</div>
		</div>
		<!--定制背景活动-->
		<!--定制背景提升活动-->
		
		<!--彬彬教育专属留学课堂-->
		<div class="classroom gk_index">
			<h3 class="titles" style="margin-bottom: 60px;">彬彬教育留学专属课堂</h3>
			<div class="gWidth1170">
				<div class="train clearfix">
					<div class="white">
						<div class="black">
							<h4>AP课程</h4>
							<p><span>课程目的：</span>紧抓2019AP考点、难点、全程学习，突破5分轻松冲刺美国名校。 </p>
							<p><span>课程涵盖：</span>AP文学与创作、AP微积、AB/BC、AP统计、AP宏观经济等，37个学科均可授课。 </p>
							<p><span>适用年级: </span>7-12年级</p>
							<a href="javascript:;" onclick="go()">我要申请免费试听</a>
						</div>
					</div>
					<div class="white">
						<div class="black">
							<h4>语言课程</h4>
							<p><span>课程目的：</span>提前熟悉美国英语课程要求，提高英语水平。</p>
							<p><span>课程涵盖：</span>英语（语言文学）、英语写作、英语听说、 ESL等。</p>
							<p><span>适用年级: </span>7-12年级</p>
							<a href="javascript:;" onclick="go()">我要申请免费试听</a>
						</div>
					</div>
					<div class="white" style="margin-right: 0px;">
						<div class="black">
							<h4>数学课程</h4>
							<p><span>课程目的：</span>帮助了解美国数学课程侧重点，着重知识的应用能力。</p>
							<p><span>课程涵盖：</span>数学、高等函数、微积分与向量、统计学等。</p>
							<p><span>适用年级: </span>7-12年级</p>
							<a href="javascript:;" onclick="go()">我要申请免费试听</a>
						</div>
					</div>
					<div class="white">
						<div class="black">
							<h4>自然科学课程</h4>
							<p><span>课程目的：</span>美国原版教材，提前了解美国自然科学课程，比如海洋科学、生理学等。 </p>
							<p><span>课程涵盖：</span>生物、化学、物理、地理、环境科学、天文学等。  </p>
							<p><span>适用年级: </span>7-12年级 </p>
							<a href="javascript:;" onclick="go()">我要申请免费试听</a>
						</div>
					</div>
					<div class="white">
						<div class="black">
							<h4>社会科学课程</h4>
							<p><span>课程目的：</span>海外精英讲师授课，快速并准确了解美国背景及发展历史。 </p>
							<p><span>课程涵盖：</span>美国地理、美国历史、世界历史、经济、心理学、政府和政治、美国政治、圣经等。</p>
							<p><span>适用年级: </span>7-12年级</p>
							<a href="javascript:;" onclick="go()">我要申请免费试听</a>
						</div>
					</div>
					<div class="white"  style="margin-right: 0px;">
						<div class="black">
							<h4>艺术课程</h4>
							<p><span>课程目的：</span>美国本土资深艺术教师授课，帮你提高艺术基础，指点学生如何突破瓶颈。 </p>
							<p><span>课程涵盖：</span>视觉设计、音乐、创意写作、舞蹈、电影&数字媒体等。</p>
							<p><span>适用年级: </span>7-12年级</p>
							<a href="javascript:;" onclick="go()">我要申请免费试听</a>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!--彬彬教育专属留学课堂-->
		
		<!--彬彬海外监管服务-->
		<div class="buzhidao gk_index">
			<div class="titles">彬彬海外监管服务</div>
			<p class="diand">国内独一提供全方位，一站式管家服务的留学机构</p>
			<div class="gWidth1170">
				<div class="liuxue">
					<div class="content clearfix">
					<div class="boxsa fl" style="width:370px;height:450px;">
						<div class="hidden111" style="line-height:500px;">寄宿家庭安置全服务</div>
						<div class="hidden22">
							<div class="sisi">
							<h3>寄宿家庭安置全服务</h3>
							<p>提供寄宿家庭选择十个月食宿费用<br />上、下学交通国际学生监护免费寄宿家庭更换</p>
							<a href="javascript:;" onclick="go()">查看详情</a>
							</div>
						</div>
					</div>
					<div class="boxsa box32 fl">
						<div class="hidden111">住宿管理</div>
						<div class="hidden22">
							<h3>住宿管理</h3>
							<p>7*24紧急情况协助匹配服务团队<br />随时沟通协助处理出现、<br />就医等定期家访、校访生活矛盾处理</p>
							<a href="javascript:;" onclick="go()">查看详情</a>
						</div>
					</div>
					<div class="boxsa box33 fl" style="margin-right: 0px;">
						<div class="hidden111">学业跟踪</div>
						<div class="hidden22">
							<h3>学业跟踪</h3>
							<p>校规培训及介绍成绩跟踪及反馈<br />选课及学习指导升学规划转学申请</p>
							<a href="javascript:;" onclick="go()">查看详情</a>
						</div>
					</div>
					<div class="boxsa box34 fl">
						<div class="hidden111">留学课堂</div>
						<div class="hidden22">
							<h3>留学课堂</h3>
							<p>背景提升美国风俗文化授课名校学长<br />传授留学经验美国生活指导定期组织课外活动</p>
							<a href="javascript:;" onclick="go()">查看详情</a>
						</div>
					</div>
					<div class="boxsa box35 fl" style="margin-right: 0px;">
						<div class="hidden111">行前指导</div>
						<div class="hidden22">
							<h3>行前指导</h3>
							<p>机票购买指导行前行李准备<br />出入境指导安全培训选课、校服、疫苗体检等指导</p>
							<a href="javascript:;" onclick="go()">查看详情</a>
						</div>
					</div>
					</div>
				</div>	
			</div>
		</div>
		<!--彬彬海外监管服务-->
		
		<!--海外监管服务团队-->
		<div class="serve">
			 <div class="titles">彬彬海外监管服务</div>
			<div class="gWidth1170">
				<div class="tabs">
				 	<ul class="clearfix"> 
				 		<li class="on">生活指导团队<em></em></li>
				 		<li>学业支持团队<em></em></li>
				 		<li style="margin-right: 0px;">院校开发与家庭招募团队<em></em></li>
				 	</ul>
				 </div>
				 
				 <div class="acindexs on">
				 	<h4>帮助学生顺利度过留美迷茫期，促进学生明确留学目标，塑造全新留学生形象。</h4>
					<img src="/static/home/img/page/LowAge/生活指导.jpg" class="back" alt="Vicky" title="Vicky">
					<div class="hidden">
						<h3>Vicky</h3>
						<span></span>
						<p>Vicky毕业于德州大学奥斯汀分校。Vicky老师非常擅长沟通，从业三年，针对留学生初到美国的抗拒心理有自己的解决办法，深受留学生喜爱。</p>
						<a href="javascript:;" onclick="go()">向TA咨询</a>
					</div>
					<img src="/static/home/img/page/zoudugaozhong/bofang.jpg" data-videosrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/121cd42f5285890786332134781/zshGuWryQv8A.mp4" class="bf" alt="">
				</div>
				 <div class="acindexs">
					 <h4> 以学生为中心，为学生提供选好专业、学好课程、做好实习、提升研究服务。</h4>
					<img src="/static/home/img/page/LowAge/学业支持.jpg" class="back" alt="Lisa" title="Lisa" >
					<div class="hidden">
						<h3>Lisa</h3>
						<span></span>
						<p>Lisa老师是哥伦比亚大学教育学硕士。她已经在美国生活十余年，深刻理解美国高等教育体系。了解东部文化生活，热爱教育事业，对美国K-12教育体系具有独到见解。</p>
						<a href="javascript:;" onclick="go()">向TA咨询</a>
					</div>
					<img src="/static/home/img/page/zoudugaozhong/bofang.jpg" data-videosrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/121de3685285890786332136502/4FuplOp9nt4A.mp4" class="bf" alt="">
				</div>
				 <div class="acindexs">
				 	<h4>团队老师覆盖全美，为学生提供最顶级的院校资源和最舒适的住宿环境。</h4>
					<img src="/static/home/img/page/LowAge/院校开发和家庭招募.jpg" class="back" alt="Angela Gong" title="Angela Gong">
					<div class="hidden">
						<h3>Angela Gong</h3>
						<span></span>
						<p>普渡大学大学传播学学士。主要负责美国东北部地区院校开发和家庭招募工作，每年与多家优质学校建立合作关系，对招募家庭标准把控也非常严格。</p>
						<a href="javascript:;" onclick="go()">向TA咨询</a>
					</div>
					<img src="/static/home/img/page/zoudugaozhong/bofang.jpg" data-videosrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/deb0aa565285890786664841640/An90AkRbSoYA.mp4" class="bf" alt="">
				</div>
			</div>
			 <a href="javascript:;" onclick="go()" class="button">点击查看更多监管服务</a>
		</div>
		<!-- 弹出的视频 -->
		<div class="tc_video">
			<div class="video">
				<video src="" autoplay="autoplay" controls="controls">
					您的浏览器不支持video标签
				</video>
				<img src="/static/home/img/page/LowAge/video_gb.png" alt="">
			</div>
		</div>
		<!--海外监管服务团队-->
		
		<div id="mydiv" class="gk_index" style="height:628px;">
			<div class="box gWidth1170 gk_index clearfix">
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
<style>
	.hidden2 h4{font-size:20px;font-weight:bold;color:#fff;margin-top:26px;}
	.hidden2 span{display: block;line-height:24px;font-size:14px;letter-spacing: 1px;text-align:left;padding: 0 20px;margin-top: 8px;}
	.serve .hidden{
			width: 50%;
			height: 476px;
			background-color: rgba(0,0,0,0.5);
			position: absolute;
			top:54px;
			right: 0;
			color: #fff;
			padding-left: 72px;
			box-sizing: border-box;
		}
		.serve .hidden h3{
			font-size: 32px;
			margin-top: 95px;
			margin-bottom: 17px;
			font-weight: normal;
		}
		.serve .hidden span{
			width: 48px;
			height: 2px;
			background-color:rgba(127,149,209,1);
			display: block;
			margin-bottom: 27px;
		}
		.serve .hidden p{
			font-size: 14px;
			width: 464px;
			line-height: 24px;
			margin-bottom: 34px;
		}
		.serve .hidden a{
			width: 122px;
			height: 34px;
			color: #fff;
			border: 1px solid #fff;
			text-align: center;
			line-height: 34px;
			border-radius: 5px;
			font-size: 16px;
		}
		.serve .hidden a:hover{background-color: #7FC3D1; border-color: #7FC3D1;}
		.bf{
			width: 64px;
			height: 64px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin: -32px 0 0 -32px;
			cursor:pointer;
		}
		.tc_video {
		    width: 100%;
		    height: 100%;
		    background-color: rgba(0,0,0,0.5);
		    position: fixed;
		    top: 0;
		    left: 0;
		    display: none;
		}
		.tc_video .video {
		    width: 1100px;
		    height: 540px;
		    background-color: #000000;
		    position: absolute;
		    left: 50%;
		    top: 50%;
		    margin-top: -270px;
		    margin-left: -550px;
		
		}
		.tc_video .video video {
		    width: 100%;
		    height: 100%;
		    background-color: #000000;
		}
		.tc_video .video img {
		    width: 18px;
		    height: 18px;
		    position: absolute;
		    right: 15px;
		    top: 15px;
		    cursor: pointer;
		}
		.sisi{margin-top:120px;}
		.acindexs.on{display:block;}
		.acindexs{display: none;}
		.acindexs h4{font-size:18px;color:rgba(0,0,0,1);margin:30px 0 30px 0;text-align:center;}
		.tabs{width:100%;margin-top:46px;}
		.tabs ul{width: 70%;margin: 10px auto;}
		.tabs li{float: left;font-size:22px;color:rgba(0,0,0,1);letter-spacing: 1px;width:33%;text-align:center;cursor: pointer;}
		.tabs li em{width:139px;height:6px;background:#7FC3D1;display:block;margin: 10px auto;display: none;}
		.tabs li.on em{display: block;color:#7FC3D1;}
		.serve{width:100%;height:980px;background: url(/static/home/img/page/zoudugaozhong/haiwaijianguanfuwubeijing.jpg) no-repeat center center;background-size: cover;margin-top: 60px;}
		.boxsa .hidden111 {position: absolute;left: 0;top: 0;width: 100%;height: 100%;font-size: 20px;color: #FFFFFF;font-weight: bold;text-align: center;line-height: 224px;background: rgba(0,0,0,.5);display: block;}
		.boxsa .hidden22  a{;text-align:center;width:163px;height:36px;border-radius:4px;border:1px solid rgba(255,255,255,1);font-size:16px;font-weight:bold;color:rgba(255,255,255,1);line-height:36px;letter-spacing:2px;margin: 20px auto;}
		.boxsa .hidden22 a:hover{background-color: #7FC3D1;border-color: #7FC3D1;}
		.boxsa .hidden22 h3 {font-size: 18px;padding-top: 34px;padding-bottom: 20px;}
		.boxsa .hidden22{position: absolute;left: 0;top:0;width: 100%;height: 100%;background: rgba(23,14,1,0.6);color: #FFFFFF;text-align: center;display: none;}
		.boxsa{width:370px;height:210px;background: url(/static/home/img/page/zoudugaozhong/jisujiatinganzhifuwu.jpg) no-repeat center center;background-size: cover;position: relative;margin-right:30px;margin-top: 30px;}
		.diand {text-align: center;margin-top:-28px;}
		.classroom{width:100%;height:1114px;background:url(/static/home/img/page/zoudugaozhong/zhuanshuketang.jpg) no-repeat center center;background-size:cover;}
		.black{width:300px;height:363px;border:2px solid rgba(127,149,209,1);margin: 18px auto;padding: 0 20px;}
		.black h4{font-size:24px;font-weight:bold;color:rgba(0,0,0,1);text-align: center;margin:18px auto;}
		.black p{font-size:16px;color:rgba(0,0,0,1);margin-top:24px;}
		.black p span{font-weight: bold;}
		.black a{width:201px;height:40px;border-radius:4px;border:2px solid rgba(127,149,209,1);margin:40px auto;text-align: center;line-height:40px;transition: all 0.2s ease-in-out;}
		.black a:hover{background: #7F95D1;color: #fff;}
		.white{width:370px;height:399px;background: #fff;float: left;margin:0 30px 20px 0;}
		.white:nth-child(2){margin-top:36px;}
		.white:nth-child(5){margin-top:36px;}
		.text {font-size: 18px;color: rgba(0,0,0,1);text-align: center;line-height: 28px;margin-top: 50px;display: none;}
		.text.on {display: block;}
		.zation{margin-top: 60px;}
		.custom{width:370px;height:273px;float: left;margin-right:30px;position: relative;overflow:hidden;}
		.custom img{width:370px;height:273px;}
		.shadow{width:370px;height:273px;background: rgba(0,0,0,.5);position: absolute;left: 0px;top:204px;transition: all 0.4s ease-in-out;}
		.shadow:hover{top: 0px;}
		.shadow h3{font-size:24px;font-weight:bold;color:#fff;text-align: center;margin: 22px 0 20px 0;}
		.bordere{width:320px;height:169px;margin:10px auto;}
		.bordere span{color: #fff;padding: 0 24px;display: block;color:rgba(255,255,255,1);line-height:21px;margin-top: 30px;letter-spacing: 1px;}
		
		.shenqi{width:100%;height:774px;background:url(/static/home/img/page/jisugaozhong/jingcaianli.png)  no-repeat center center;background-size:cover;}
		.womanright{width:378px;margin-left: 28px;}
		.womanright h3{font-size:20px;font-weight:bold;color:rgba(0,0,0,1);margin-top:22px;}
		.womanright h4{font-size:20px;font-weight:bold;color:rgba(0,0,0,1);margin-top:8px;}
		.womanright p{font-size:16px;color:rgba(0,0,0,1);margin-top: 6px;line-height: 24px;}
		.womanleft{margin-left: 40px;}
		.womanleft img{width:94px;height:94px;border:1px solid #7FC3D1;margin:16px 0 0 10px;border-radius:50%;}
		.bubians{width:114px;height:34px;background:#7FC3D1;border-radius:17px;font-size:16px;color:rgba(255,255,255,1);margin-top:17px;text-align: center;line-height: 34px;}
		.bubians:hover{opacity: 0.8;}
		.shenq{width:100%;height:656px;}
		.borders li{float: left;width:566px;height:185px;border-radius:4px;border:2px solid rgba(79,156,172,1);margin:28px 30px 0px 0;}
		.borders li:nth-child(even){margin-right: 0px;}
		.contents{margin:46px 0 0 62px;}
		.contents p{font-size:18px;color:rgba(255,255,255,1);color:#fff;margin-top:10px;}
		.contents span{font-size:16px;display:block;color:rgba(255,255,255,1);margin-top:6px;}
		.contents a{font-size:18px;font-family:MicrosoftYaHei;color:#7FC3D1;margin-top: 12px;}
		.contents a:hover{text-decoration: underline;}
		.contentss{margin: 36px 0 0 62px;}
		.contentss p{font-size:18px;color:rgba(255,255,255,1);color:#fff;margin-top:10px;color:#000000;}
		.contentss span{font-size:16px;display:block;color:rgba(255,255,255,1);margin-top:6px;color: #000;}
		.contentss a{font-size:18px;font-family:MicrosoftYaHei;color:#7FC3D1;margin-top: 12px;}
		.yaosu{width:100%;height:778px;background:url(/static/home/img/page/jisugaozhong/shenqingtiaojian.png)  no-repeat center center;background-size:cover;}
		.term{width:554px;height:432px;background:url(/static/home/img/page/jisugaozhong/yingxingtiaojian.jpg)  no-repeat center center;background-size:cover;}
		.bgc{width:550px;height:432px;background: #D6E4FF;}
		.titless{font-size:38px;font-weight:bold;color:rgba(0,0,0,1);text-align: center;padding-top: 80px;margin-bottom:54px;}
		.yingxing{cursor: pointer;width:60px;height:187px;background:#7FC3D1;position: absolute;top: 0px;left:-24px;font-size:26px;font-weight:bold;color:rgba(255,255,255,1);text-align: center;}
		.yingxing span{width: 50px;display: block;margin:20px auto;}
		.tiaojian{cursor: pointer;width:60px;height:187px;background:#7FC3D1;position: absolute;right:-30px;bottom: 0px;font-size:26px;font-weight:bold;color:rgba(255,255,255,1);text-align: center;}
		.tiaojian span{width: 50px;display: block;margin:20px auto;}
		.hidden11{text-align: center;}
		.hidden11 h3{font-size:24px;font-family:MicrosoftYaHei-Bold;font-weight:bold;margin-top: 143px;}
		.hidden11 p{font-size:16px;
		color:rgba(255,255,255,1);font-size: 20px;margin-top: 12px;font-weight:400;}
		.hidden11{position: absolute;left: 0;top: 0;width: 100%;height: 100%;font-size: 20px;color: #FFFFFF;font-weight: bold;text-align: center;background:rgba(0,0,0,.5);display: block;}
		.hidden11 span{display:block;font-size:36px;margin-top: 40px;}
		.hidden111{text-align: center;}
		.hidden111 h3{font-size:24px;font-family:MicrosoftYaHei-Bold;font-weight:bold;margin-top: 143px;}
		.hidden111 p{font-size:16px;
		color:rgba(255,255,255,1);font-size: 20px;margin-top: 12px;font-weight:400;}
		.hidden111{position: absolute;left: 0;top: 0;width: 100%;height: 100%;font-size: 20px;color: #FFFFFF;font-weight: bold;text-align: center;background:rgba(0,0,0,.5);display: block;}
		.hidden111 span{display:block;font-size:36px;margin-top: 40px;}
		.boxxx{width:370px;height:394px;background: url(/static/home/img/page/jisugaozhong/guanyuketang.png) no-repeat center center;background-size: cover;position: relative;margin-right:30px;}
		.boxxx .hidden2  a{width:163px;height:36px;border-radius:4px;border:1px solid rgba(255,255,255,1);font-size:16px;font-weight:bold;color:rgba(255,255,255,1);line-height:36px;letter-spacing:2px;margin: 20px auto;}
		.boxxx .hidden2 a:hover{background-color: #7FC3D1; border-color: #7FC3D1;}
		.boxxx .hidden2 h3 {font-size: 18px;padding-top: 34px;padding-bottom: 20px;}
		.boxxx .hidden1 {position: absolute;left: 0;top: 0;width:370px;height:394px;font-size: 20px;color: #FFFFFF;font-weight: bold;text-align: center;line-height: 224px;background:rgba(0,0,0,.5);display: block;}
		.boxxx .hidden2 {position: absolute;left: 0;top: 0;width:370px;height:394px;background: rgba(23,14,1,0.6);color: #FFFFFF;text-align: center;display: none;}
		.liuchengs li{width:16.5%;float: left;text-align: center;margin-top:40px;height:110px;}
		.boxs {width:210px;height: 203px;background: url(/static/home/img/page/jisugaozhong/xuanzexingxiao.jpg) no-repeat center center;background-size: cover;position: relative;margin-right:30px;}
		.boxss{width:210px;height: 203px;background: url(/static/home/img/page/zoudugaozhong/jisujiatinganzhifuwu.jpg) no-repeat center center;background-size: cover;position: relative;margin-right:30px;}
		.box2{background: url(/static/home/img/page/jisugaozhong/guojishengbili.jpg) no-repeat center center;width:210px;height: 203px;background-size: cover;}
		.box3{background: url(/static/home/img/page/jisugaozhong/keyuhuodong.png) no-repeat center center;width:210px;height: 203px;background-size: cover;}
		.box21{background: url(/static/home/img/page/jisugaozhong/tiyuhuodong.png) no-repeat center center;width:370px;height:394px;background-size: cover;}
		.box31{background: url(/static/home/img/page/jisugaozhong/keyuhuodong.png) no-repeat center center;width:370px;height:394px;background-size: cover;}
		.box4{background: url(/static/home/img/page/jisugaozhong/shenqingyaoqiu.png) no-repeat center center;width:210px;height: 203px;background-size: cover;}
		.box5{background: url(/static/home/img/page/jisugaozhong/jisufeiyong.png) no-repeat center center;width:210px;height: 203px;background-size: cover;}
		.box32{background: url(/static/home/img/page/zoudugaozhong/zhusuguanli.jpg) no-repeat center center;width:370px;height:210px;background-size: cover;}
		.box33{background: url(/static/home/img/page/zoudugaozhong/xueyegenzong.jpg) no-repeat center center;width:370px;height:210px;background-size: cover;}
		.box34{background: url(/static/home/img/page/zoudugaozhong/liuxueketang.jpg) no-repeat center center;width:370px;height:210px;background-size: cover;}
		.box35{background: url(/static/home/img/page/zoudugaozhong/xingqianzhidao.jpg) no-repeat center center;width:370px;height:210px;background-size: cover;}
		.boxs .hidden1 {position: absolute;left: 0;top: 0;width: 100%;height: 100%;font-size: 20px;color: #FFFFFF;font-weight: bold;text-align: center;line-height: 210px;background:rgba(0,0,0,.5);display: block;}
		.boxs .hidden2 {position: absolute;left: 0;top: 0;width: 100%;height: 100%;background: rgba(23,14,1,0.6);color: #FFFFFF;text-align: center;display: none;}
		.boxs .hidden2:before{content: '';width: 0;height: 100%;display: inline-block;vertical-align: middle;}
		.hidden2 p{text-align:left;vertical-align: middle;display: inline-block;width: 200px;}
		.boxs .hidden2  a{width:163px;height:36px;border-radius:4px;border:1px solid rgba(255,255,255,1);font-size:16px;font-weight:bold;color:rgba(255,255,255,1);line-height:36px;letter-spacing:2px;margin: 20px auto;}
		.boxs .hidden2 h3 {font-size: 18px;padding-top: 34px;padding-bottom: 20px;}
		.outside{height:930px;}
		.lodge{width:100%;height:542px;background:url(/static/home/img/page/jisugaozhong/gaozhongtedian.png) no-repeat center center;}
		.yiqian{width:900px;margin: 0 auto;}
		.biaoshi{font-size:14px;color:rgba(74,74,74,1);margin-top: 17px;}
		.biaoshi span{vertical-align:middle;}
		.biaoshi img{width:23px;height:22px;margin-right: 10px;vertical-align: middle;}
		.buttons{transition:all 0.2s ease-in-out;border:2px solid rgba(127,195,209,1);width:352px;height:50px;background:#fff;border-radius:4px;font-size:20px;color:#7FC3D1;line-height:50px;text-align: center;margin:50px auto;}
		.buttons:hover{background: #7FC3D1;color: #fff;}
		.button{width:352px;height:50px;background:#7FC3D1;border-radius:4px;font-size:20px;color:#fff;line-height:50px;text-align: center;margin:50px auto;}
		.button:hover{opacity: 0.8;}
	</style>
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
				<img src="/static/home/img/rwm.jpg" alt="">
				<p>传播最有价值<br />的留学知识</p>
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
		$('.flow li').hover(function(e){
			$(this).children('.texts').addClass('on');
			$(this).children('.fixeds').addClass('on');
		},function(){
			$(this).children('.texts').removeClass('on');
			$(this).children('.fixeds').removeClass('on');
		});
		$('.flows li').hover(function(e){
			$(this).children('.textss').addClass('on');
			$(this).children('.fixedss').addClass('on');
		},function(){
			$(this).children('.textss').removeClass('on');
			$(this).children('.fixedss').removeClass('on');
		});
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
					if( top>=$('.gk_index').eq(i).offset().top - 300 && top<$('.gk_index').eq(i+1).offset().top ){
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
				$('body, html').stop().animate({scrollTop: offsetTop - 50}, 1500);
			})
		// 海外向监管服务选项卡效果 以及 点击弹出视频
		$('.bf').on('click', function () {
			var src = $(this).attr('data-videoSrc');
			$('.tc_video').children('.video').children('video').attr('src', src);
			$('.tc_video').fadeIn();
		})
		
		$('.tc_video .video img').on('click', function () {
				$('.tc_video').fadeOut();
				$(this).siblings('video').removeAttr('src');
			})
		
		$('.tabs').on('click','li',function(e){
			$(this).addClass('on').siblings().removeClass('on');
			$('.acindexs').eq($(this).index()).addClass('on').siblings().removeClass('on');
		});
		$('.custom').hover(function(){
			$('.text').eq($(this).index()).addClass('on').siblings().removeClass('on');
		});
		$('.hundred').on('click','li',function(e){
			$(this).addClass('on').siblings().removeClass('on');
			$('.top_rank').eq($(this).index()).addClass('on').siblings().removeClass('on');
		});
		$('.boxs').hover(function () {
			$(this).children('.hidden1').stop().fadeOut();
			$(this).children('.hidden2').stop().fadeIn();
		}, function (){
			$(this).children('.hidden2').stop().fadeOut();
			$(this).children('.hidden1').stop().fadeIn();
		});
		$('.boxxx').hover(function () {
			$(this).children('.hidden11').stop().fadeOut();
			$(this).children('.hidden2').stop().fadeIn();
		}, function (){
			$(this).children('.hidden2').stop().fadeOut();
			$(this).children('.hidden11').stop().fadeIn();
		});
		$('.boxsa').hover(function () {
			$(this).children('.hidden111').stop().fadeOut();
			$(this).children('.hidden22').stop().fadeIn();
		}, function (){
			$(this).children('.hidden22').stop().fadeOut();
			$(this).children('.hidden111').stop().fadeIn();
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

</html>


