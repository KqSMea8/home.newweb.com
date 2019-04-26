<?php /*a:6:{s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\collegemoney.html";i:1552975129;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1551955433;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1551670345;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1552959452;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1552966128;s:89:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_undergraduate.html";i:1552974870;}*/ ?>
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

		
		<!-- 当前网页样式 -->
		<link rel="stylesheet" href="/static/home/css/page/collegemoney.css">
	</head>
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
		<!-- banner -->
		<div class="banner">
			<div class="gWidth1170">
				<h1>美国本科留学费用全解析</h1>
				<h2>备足money  未雨绸缪去留学</h2>
				<a href="javascript:;" onclick="go()">美国本科一年费用多少？</a>
			</div>
		</div>
		
		<!-- 美国本科留学前期费用 -->
		<div class="qianqi_feiyong gWidth1170">
			<h3 class="title">美国本科留学前期费用</h3>
			<div class="content clearfix">
				<div class="fl">
					<h3>考试费用</h3>
					<div class="hidden">
						<p>托福：¥1500<br />送分费：¥120/所学校<br />雅思：¥1680<br />送分费：选择不同快递费用不同<br />SAT： $49<br />送分费：$11/所学校<br />SSAT：$225<br />送分费：选择不同快递费用不同</p>
					</div>
				</div>
				<div class="fr">
					<div class="box fl">
						<h3>担保金</h3>
						<div class="hidden">
							<p>担保金：¥50万</p>
						</div>
					</div>
					<div class="box box2 fl">
						<h3>学校申请费</h3>
						<div class="hidden">
							<p>学校申请费：$50-100/所</p>
						</div>
					</div>
					<div class="box box3 fl">
						<h3>材料邮寄费</h3>
						<div class="hidden">
							<p>材料邮寄费：¥300/份(不同州有所差异)</p>
						</div>
					</div>
					<div class="box box4 fl">
						<h3>SEVIS费用</h3>
						<div class="hidden">
							<p>SEVIS费用：$350</p>
						</div>
					</div>
					<div class="box box5 fl">
						<h3>体检费用</h3>
						<div class="hidden">
							<p>体检费用：¥400-1000(以体检项目不同有所差异)</p>
						</div>
					</div>
					<div class="box box6 fl">
						<h3>机票</h3>
						<div class="hidden">
							<p>机票：¥5000-15000元</p>
						</div>
					</div>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">去美国读本科一共需要准备多少钱</a>
		</div>

		<!-- 美国本科TOP50名校学费 -->
		<div class="top50">
			<div class="gWidth1170">
				<h3 class="title">美国本科TOP50名校学费</h3>
				<div class="content">
					<div class="top5 clearfix">
						<div class="box fl">
							<img src="/static/home/img/page/benke_feiyong/school1.png" alt="普林斯顿大学" title="普林斯顿大学">
							<h4>TOP1</h4>
							<p>普林斯顿大学</p>
							<p>$47,140/年</p>
							<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/benke_feiyong/school2.png" alt="哈佛大学" title="哈佛大学">
							<h4>TOP2</h4>
							<p>哈佛大学</p>
							<p>$50,420/年</p>
							<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/benke_feiyong/school3.png" alt="哥伦比亚大学" title="哥伦比亚大学">
							<h4>TOP3</h4>
							<p>哥伦比亚大学</p>
							<p>$59,430/年</p>
							<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/benke_feiyong/school4.png" alt="麻省理工学院" title="麻省理工学院">
							<h4>TOP3</h4>
							<p>麻省理工学院</p>
							<p>$51,832/年</p>
							<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/benke_feiyong/school5.png" alt="芝加哥大学" title="芝加哥大学">
							<h4>TOP3</h4>
							<p>芝加哥大学</p>
							<p>$57,006/年</p>
							<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
						</div>
					</div>
					<div class="table">
						<div class="table1">
							<table>
								<tr><th>排名</th><th>学校名称</th><th>学校英文名称</th><th>学费/年</th><th>免费测录取率</th></tr>
							</table>
						</div>
						<div class="table2">
							<table>
								<tr><td>3</td><td>耶鲁大学</td><td>Yale University</td><td>$53,430 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>7</td><td>斯坦福大学</td><td>Stanford University</td><td>$51,354 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>8</td><td>杜克大学</td><td>Duke University</td><td>$55,960 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>8</td><td>宾夕法尼亚大学</td><td>University of Pennsylvania</td><td>$55,584 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>10</td><td>约翰霍普金斯大学</td><td>Johns Hopkins University</td><td>$53,740 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>10</td><td>西北大学</td><td>Northwestern University</td><td>$54,567 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>12</td><td>加州理工学院</td><td>California Institute of Technology</td><td>$52,362 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>12</td><td>达特茅斯学院</td><td>Dartmouth College</td><td>$55,035 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>14</td><td>布朗大学</td><td>Brown University</td><td>$55,656 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>14</td><td>范德堡大学</td><td>Vanderbilt University</td><td>$49,816 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>16</td><td>康奈尔大学</td><td>Cornell University</td><td>$55,188 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>16</td><td>莱斯大学</td><td>Rice University</td><td>$47,350 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>18</td><td>圣母大学</td><td>University of Notre Dame</td><td>$53,391 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>19</td><td>加州大学洛杉矶分校</td><td>University of California, Los Angeles</td><td>$41,294 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>19</td><td>圣路易斯华盛顿大学</td><td>Washington University in St. Louis</td><td>$53,399 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>21</td><td>艾茉莉大学</td><td>Emory University</td><td>$51,306 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>22</td><td>乔治敦大学</td><td>Georgetown University</td><td>$54,104 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>22</td><td>加州大学伯克利分校</td><td>University of California, Berkeley</td><td>$43,232 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>22</td><td>南加州大学</td><td>University of Southern California</td><td>$56,225 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>25</td><td>卡耐基梅隆大学</td><td>Carnegie Mellon University</td><td>$55,465 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>25</td><td>弗吉尼亚大学</td><td>University of Virginia</td><td>$48,891 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>27</td><td>塔夫斯大学</td><td>Tufts University</td><td>$56,382 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>27</td><td>密歇根大学安娜堡分校</td><td>University of Michigan, Ann Arbor</td><td>$49,350 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>27</td><td>维克森林大学</td><td>Wake Forest University</td><td>$53,322 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>30</td><td>纽约大学</td><td>New York University</td><td>$51,828 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>30</td><td>加州大学圣塔芭芭拉分校</td><td>University of California, Santa Barbara</td><td>$42,486 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>30</td><td>北卡罗来纳大学教堂山分校</td><td>University of North Carolina, Chapel Hill</td><td>$35,169 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>33</td><td>加州大学尔湾分校</td><td>University of California, Irvine</td><td>$43,530 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>33</td><td>罗切斯特大学</td><td>University of Rochester</td><td>$53,926 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>35</td><td>布兰迪斯大学</td><td>Brandeis University</td><td>$55,395 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>35</td><td>佐治亚理工学院</td><td>Georgia Institute of Technology</td><td>$33,020 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>35</td><td>佛罗里达大学</td><td>University of Florida</td><td>$28,658 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>38</td><td>波士顿学院</td><td>Boston College</td><td>$55,464 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>38</td><td>威廉玛丽学院</td><td>College of William and Mary</td><td>$44,701 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>38</td><td>加州大学戴维斯分校</td><td>University of California, Davis</td><td>$43,458 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>41</td><td>加州大学圣地亚哥分校</td><td>University of California, San Diego</td><td>$42,074 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>42</td><td>波士顿大学</td><td>Boston University</td><td>$53,948 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>42</td><td>凯斯西储大学</td><td>Case Western Reserve University</td><td>$49,042 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>44</td><td>东北大学</td><td>Northeastern University</td><td>$51,387 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>44</td><td>杜兰大学</td><td>Tulane University</td><td>$54,820 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>46</td><td>佩伯代因大学</td><td>Pepperdine University</td><td>$53,932 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>46</td><td>佐治亚大学</td><td>University of Georgia</td><td>$30,404 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>46</td><td>伊利诺伊大学厄本那-香槟分校</td><td>University of Illinois, Urbana-Champaign</td><td>$32,568 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>49</td><td>伦斯勒理工学院</td><td>Rensselaer Polytechnic Institute</td><td>$53,880 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>49</td><td>德克萨斯大学奥斯汀分校</td><td>University of Texas, Austin</td><td>$37,480 </td><td><a href="javascript:;" onclick="go()">测录取率</a></td></tr>
							</table>
						</div>
					</div>
				</div>
				<a href="javascript:;" onclick="go()">了解心仪院校留学学费</a>
			</div>
		</div>

		<!-- 美国留学各地区生活费 -->
		<div class="shenghuofei gWidth1170">
			<h3 class="title">美国留学各地区生活费</h3>
			<div class="content clearfix">
				<div class="box fl">
					<div class="boxTop">中西部地区</div>
					<h3>全美生活成本最低的地区</h3>
					<p><b>生活费：</b>约$600~1000/年</p>
					<p><b>校内住宿：</b>约$600~1000/月</p>
					<p><b>校内租房：</b>约$400~800/月</p>
				</div>
				<div class="box box2 fl">
					<div class="boxTop">五大湖地区</div>
					<h3>生活费用略高于其他地区</h3>
					<p><b>生活费：</b>约$600~1200/年</p>
					<p><b>校内住宿：</b>约$600~900/月</p>
					<p><b>校内租房：</b>约$600~1000/月</p>
				</div>
				<div class="box box3 fl">
					<div class="boxTop">东部地区</div>
					<h3>生活费用略高于其他地区</h3>
					<p><b>生活费：</b>约$1000~1800/年</p>
					<p><b>校内住宿：</b>约$700~1700/月</p>
					<p><b>校内租房：</b>约$550~1500/月</p>
				</div>
				<div class="box box4 fl">
					<div class="boxTop">西海岸</div>
					<h3>生活费用略高于其他地区</h3>
					<p><b>生活费：</b>约$600~1200/年</p>
					<p><b>校内住宿：</b>约$700~1400/月</p>
					<p><b>校内租房：</b>约$500~1200/月</p>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">了解你想去的城市生活费具体多少钱？</a>
		</div>

		<!-- 美国留学衣食住行费用 -->
		<div class="yishizhuxing gWidth1170">
			<h3 class="title">美国留学衣食住行费用</h3>
			<div class="content clearfix">
				<div class="box fl">
					<img src="/static/home/img/page/benke_feiyong/ICON1.png" alt="">
					<p>衣</p>
					<div class="hidden">
						<p>美国衣服设计简约，不适合亚洲人身材，建议留学生带些自己喜欢的衣服。在美国除了Party外，平时穿的都比较休闲，所以不用太多的正装。 如果在美国买衣服，一些工厂直销店和特价商店会有比较好的价格。通常在八月中或圣诞节前后是打折季。比如李维斯类的牛仔裤$53,Zara的连衣裙$43,耐克运动鞋$94......</p>
						<a href="javascript:;" onclick="go()">详情&gt;</a>
					</div>
				</div>
				<div class="box box2 fl">
					<img src="/static/home/img/page/benke_feiyong/ICON2.png" alt="">
					<p>食</p>
					<div class="hidden">
						<p>留学生在饮食方面有以下选择：在学校餐厅，比较省时省事，一顿午餐大约需要$4-8。也可以选择外出就餐， 美国小快餐店一顿汉堡、三明治或比萨大概要$5-8，好一点的餐厅大约$15-30不等。自己做饭，可去中国人开的超市买各种食料，不仅能满足对美食的需求，而且还能省下不少钱。</p>
						<a href="javascript:;" onclick="go()">详情&gt;</a>
					</div>
				</div>
				<div class="box box3 fl">
					<img src="/static/home/img/page/benke_feiyong/ICON3.png" alt="">
					<p>住</p>
					<div class="hidden">
						<p>在美国的留学生有学校公寓、寄宿家庭、校外租房3种住宿方式。学校公寓安全性高，租金也较高，一学期约$12000-18000。对于想快速提高自己的外语水平，尽快融入当地生活的留学生来说，可以选择寄宿家庭，费用约为$5400-11700。如果想提高自立能力同时有独立空间，可以选择校外租房,费用约为$3600-7200。</p>
						<a href="javascript:;" onclick="go()">详情&gt;</a>
					</div>
				</div>
				<div class="box box4 fl">
					<img src="/static/home/img/page/benke_feiyong/ICON4.png" alt="">
					<p>行</p>
					<div class="hidden">
						<p>美国城市街道呈方块状，没有死胡同，所以一般不会迷路。美国交通规则条款并不多，但管理严格，一定不要心存侥幸。 纽约这样的大城市，公共汽车和地铁通到每一个角落，出行方便，票价不贵。地铁月票为$81。1日无限次乘车票价$7.5，1周内无限次乘车票价$25，每次刷卡收费为$2。</p>
						<a href="javascript:;" onclick="go()">详情&gt;</a>
					</div>
				</div>
				<div class="box box5 fl">
					<img src="/static/home/img/page/benke_feiyong/ICON5.png" alt="">
					<p>游</p>
					<div class="hidden">
						<p>美国是一个旅游国家，留学生平时学习压力大，可以趁假期出去游玩，放松心情，感受美国当地风景。同时以学生身份出去旅游是有优惠的， 能让你充分享受学生福利，有相关优惠网站可以参考，而且价格仅仅只针对学生，有时候会推出便宜的惊人的学生机票，能不能抢得到就得看你的运气和手速了。</p>
						<a href="javascript:;" onclick="go()">详情&gt;</a>
					</div>
				</div>
				<div class="box box6 fl">
					<img src="/static/home/img/page/benke_feiyong/ICON6.png" alt="">
					<p>医疗保险</p>
					<div class="hidden">
						<p>美国的医疗费用极为昂贵，校方对于其家庭不在美国健康保险范围内的外国学生安排了一种强化医疗保险策略。 该项至少收费$500，保险包括看门诊、医药、住院、外科手术、急救、X射线及其他实验室检查的费用。一名家庭成员的医疗保险费每月至少$200。美国大学综合医疗保险费一般为$500-$800。</p>
						<a href="javascript:;" onclick="go()">详情&gt;</a>
					</div>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">去美国留学除学费外应该准备多少钱？</a>
		</div>

		<!-- 去美国留学如何省钱 -->
		<div class="shengqian">
			<div class="gWidth1170">
				<h3 class="title">去美国留学如何省钱</h3>
				<div class="content">
					<div class="sqTitle">
						<div>
							<span class="active">申请奖学金</span><em>|</em><span>打工实习</span>
						</div>
					</div>
					<div class="sqBox">
						<p>美国大学是所有国家对国际学生发放奖学金较多的。国际学生常申请的 1000 所美国大学中，有差不多 3/4都有奖学金发放给国际学生，申请到奖学金能减轻留学经济负担，同时也是对自己的一种肯定。</p>
						<div class="clearfix">
							<div class="box fl">
								<div class="div1">
									<img src="/static/home/img/page/benke_feiyong/jiangxuejin_1.png" alt="">
									<span></span>
									<h3>择优奖学金</h3>
									<p>（Merit-Based Scholarship）</p>
								</div>
								<div class="hidden">
									<h3>择优奖学金</h3>
									<p>此奖学金是学校根据学生的学习成绩优良程度而颁给学生的</p>
									<a href="javascript:;" onclick="go()">我要申请</a>
								</div>
							</div>
							<div class="box fl">
								<div class="div1">
									<img src="/static/home/img/page/benke_feiyong/jiangxuejin2.png" alt="">
									<span></span>
									<h3>需求奖学金</h3>
									<p>（Need-Based Scholarship）</p>
								</div>
								<div class="hidden">
									<h3>需求奖学金</h3>
									<p>该奖学金会根据你的家庭情况来决定你是否应该得到奖学金以及可以获得多少数额</p>
									<a href="javascript:;" onclick="go()">我要申请</a>
								</div>
							</div>
							<div class="box fl">
								<div class="div1">
									<img src="/static/home/img/page/benke_feiyong/jiangxuejin3.png" alt="">
									<span></span>
									<h3>全奖</h3>
									<p>（Fellowship）</p>
								</div>
								<div class="hidden">
									<h3>全奖</h3>
									<p>该奖学金一般是学校拨款的不需要你花钱而且往往还能赚一笔	</p>
									<a href="javascript:;" onclick="go()">我要申请</a>
								</div>
							</div>
							<div class="box fl">
								<div class="div1">
									<img src="/static/home/img/page/benke_feiyong/jiangxuejin4.png" alt="">
									<span></span>
									<h3>学费减免</h3>
									<p>（Tuition Waiver）</p>
								</div>
								<div class="hidden">
									<h3>学费减免</h3>
									<p>学校可能视你的情况免掉或者减掉一定的学费</p>
									<a href="javascript:;" onclick="go()">我要申请</a>
								</div>
							</div>
							<div class="box fl">
								<div class="div1">
									<img src="/static/home/img/page/benke_feiyong/jiangxuejin5.png" alt="">
									<span></span>
									<h3>助教</h3>
									<p>（Teaching Assistant）</p>
								</div>
								<div class="hidden">
									<h3>助教</h3>
									<p>一般由学院发放该奖学金一次只给一年第二年是否发放要看你是否达到要求</p>
									<a href="javascript:;" onclick="go()">我要申请</a>
								</div>
							</div>
							<div class="box fl">
								<div class="div1">
									<img src="/static/home/img/page/benke_feiyong/jiangxuejin6.png" alt="">
									<span></span>
									<h3>助研</h3>
									<p>（Research Assistant）</p>
								</div>
								<div class="hidden">
									<h3>助研</h3>
									<p>拿这个奖学金要给老师打工该奖学金的来源一般是导师或者你所在系的科研项目款</p>
									<a href="javascript:;" onclick="go()">我要申请</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">了解奖学金申请条件</a>
					</div>
					<div class="sqBox clearfix">
						<div class="clearfix" style="margin-bottom: 30px;">
							<div class="box1 fl">
								<div class="img">
									<img src="/static/home/img/page/benke_feiyong/DG1.jpg" alt="">
									<span>校内打工</span>
								</div>
								<div class="con">
									<p><b>打工政策：</b>是指读书期间，院校提供专业相关全职带薪实习机会，实习时间总长从6-18个月不等。</p>
									<p><b>项目优势：</b>除了提供薪资外，还可以让学生积累海外工作经验，是学生留美工作的优质渠道。</p>
									<a href="javascript:;" onclick="go()">更多打工小贴士&gt;&gt;</a>
									<em></em>
								</div>
							</div>
							<div class="box1 fl">
								<div class="con">
									<p><b>打工政策：</b>国际生被允许在校内每周工作20小时，假期可工作40小时，每小时工资一般不得低于5美金。</p>
									<p><b>热门工作地点：</b>电脑房、图书馆、学校餐厅等。</p>
									<a href="javascript:;" onclick="go()">更多打工小贴士&gt;&gt;</a>
									<em></em>
								</div>
								<div class="img">
									<img src="/static/home/img/page/benke_feiyong/DG2.jpg" alt="">
									<span>Co-op带薪实习</span>
								</div>
							</div>
							<div class="box1 fl">
								<div class="img">
									<img src="/static/home/img/page/benke_feiyong/DG3.jpg" alt="">
									<span>校外实习</span>
								</div>
								<div class="con">
									<p><b>实习政策：</b>美国政府针对国际学生设置，完成学位后可申请相关专业进行实习，时间一般为1年。</p>
									<p><b>热门专业：</b>应用学科、工程应用、数学等专业Optional Practical Training（OPT）实习时间提升到29个月。</p>
									<a href="javascript:;" onclick="go()">更多打工小贴士&gt;&gt;</a>
									<em></em>
								</div>
							</div>
							<div class="box1 fl">
								<div class="con">
									<p><b>实习政策：</b>美国大学提供Curricular Practical Trainingprograms(CPT)，时间总和是一年。</p>
									<p><b>申请条件：</b>在上学期间，完成大部分课程以后，或者在假期期间，学生可申请学校的实习项目。</p>
									<a href="javascript:;" onclick="go()">更多打工小贴士&gt;&gt;</a>
									<em></em>
								</div>
								<div class="img">
									<img src="/static/home/img/page/benke_feiyong/DG4.jpg" alt="">
									<span>带薪实习OPT</span>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()" style="margin-top: 70px;">了解更多省钱方式</a>
					</div>
				</div>
			</div>
		</div>

		<!-- 彬彬教育致力让每一个学生牵手世界名校 -->
		<div id="mydiv" class="zh_index" style="height: 625px;">
			<div class="box gWidth1170 clearfix">
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
		<script type="text/javascript">
			
			fadeIn($('.qianqi_feiyong .content>div.fl'));
			fadeIn($('.qianqi_feiyong .content>div.fr .box'));
			
			function fadeIn (fater) {
				fater.hover(function () {
					$(this).children('h3').stop().fadeOut();
					$(this).children('.hidden').stop().fadeIn();
				}, function () {
					$(this).children('h3').stop().fadeIn();
					$(this).children('.hidden').stop().fadeOut();
				})
			}
			$('.qianqi_feiyong .content>div.fr .box:nth-child(2n)').css({'margin-right': '0'});
			// 
			$('.top50 .content .top5 .box:last-child').css({'margin-right': '0'});
			
			var tableOne = $('.top50 .content .table .table1');
			var tableIndex = $('.top50 .content .table .table2');
			tdWidth(tableOne, true);
			tdWidth(tableIndex, false);
			function tdWidth (father, isTitle) {
				for ( var i=0; i<father.length; i++) {
					var fatherTr = father[i].getElementsByTagName('tr');
					for ( var k=0; k<fatherTr.length; k++ ) {
						fatherTr[k].children[0].style.width = '122px';
						fatherTr[k].children[1].style.width = '270px';
						fatherTr[k].children[2].style.width = '346px';
						fatherTr[k].children[3].style.width = '222px';
						if(isTitle){
							fatherTr[k].children[4].style.width = '204px';
						}else{
							fatherTr[k].children[4].style.width = '186px';
						}
					}
				}
			}
			// 
			$('.yishizhuxing .content .box').hover(function () {
				$(this).children('img').stop().fadeOut();
				$(this).children('p').stop().fadeOut();
				$(this).children('.hidden').stop().fadeIn();
			}, function () {
				$(this).children('img').stop().fadeIn();
				$(this).children('p').stop().fadeIn();
				$(this).children('.hidden').stop().fadeOut();
			})
			// 
			$('.shengqian .content .sqBox').eq(0).css({'display': 'block'});
			$('.shengqian .content .sqTitle span').on('click', function () {
				var index = $('.shengqian .content .sqTitle span').index($(this));
				$(this).addClass('active').siblings('span').removeClass('active');
				$('.shengqian .content .sqBox').eq(index).stop().fadeIn().siblings('.sqBox').css({'display': 'none'});
			})
			$('.shengqian .content .sqBox .box').hover(function () {
				$(this).children('.div1').stop().fadeOut();
				$(this).children('.hidden').stop().fadeIn();
			}, function () {
				$(this).children('.div1').stop().fadeIn();
				$(this).children('.hidden').stop().fadeOut();
			})
			$('.shengqian .content .sqBox .box:nth-child(3n)').css({'margin-right': '0'});
			//
			$(window).scroll(function () {
				if( $(window).scrollTop() + 700 >= $('#mydiv').offset().top ){
					$('#mydiv .box .dq>div').css({'background-position-x': 'right'});	 
				}
				
				if( $(window).scrollTop() + 700 < $('#mydiv').offset().top ){
					$('#mydiv .box .dq>div').css({'background-position-x': 'left'});	 
				}
			})
			// 
			window.onload = function() {
				//配置
				var config = {
					vx: 4,	//小球x轴速度,正为右，负为左
					vy: 4,	//小球y轴速度
					height: 2,	//小球高宽，其实为正方形，所以不宜太大
					width: 2,
					count: 200,		//点个数
					color: "228,228,228", 	//点颜色
					stroke: "228,228,228", 		//线条颜色
					dist: 30000, 	//点吸附距离
					e_dist: 20000, 	//鼠标吸附加速距离
					max_conn: 10 	//点到点最大连接数
				}
			
				//调用
				CanvasParticle(config);
			}
			// 
			$('.shengqian .content .sqBox .box1:nth-child(2n)').children('.con').children('em').css({
				'left': '0',
				'border-color': 'transparent transparent transparent #F6DDDD'
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
		
	</body>
</html>
