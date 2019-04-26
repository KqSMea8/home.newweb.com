<?php /*a:6:{s:77:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\helicopter.html";i:1552975144;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1551955433;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1551670345;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1552959452;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1552966128;s:89:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_undergraduate.html";i:1552974870;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/helicopter.css">
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
				<h1>美国本科直申规划</h1>
				<h2>早申请 早规划 美国名校不是梦</h2>
				<div class="anniu">
					<a target="_blank" href="/page/collegesqgl.html">美国本科申请条件</a>
					<a  href="javascript:;" onclick="go()" class="a1">点击匹配美国名校</a>
				</div>
			</div>
		</div>
		
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">美本优势</span>
				<span>美本排名</span>
				<span>录取捷报</span>
				<span>申请条件</span>
				<span>录取方式</span>
				<span>申请规划</span>
				<span>申请流程</span>
				<span>导师团队</span>
				<span>选专业技巧</span>
				<span>背景提升</span>
				<span>留学费用</span>
				<span>彬彬优势</span>
			</div>
		</div>
		<div class="navHidden"></div>
		
		<!-- 美本优势知多少 -->
		<div class="zhiduoshao zs_index gWidth1170">
			<h3 class="title">美本优势知多少</h3>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<img src="/static/home/img/page/benke_zs/icon1.png" alt="">
					<span></span>
					<p>教学质量高</p>
					<em><p>美国高等院校的教育质量在全世界都是首屈一指，体现在教学设备、师资力量、教学水平、教育氛围等各个方面。</p></em>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/benke_zs/icon2.png" alt="">
					<span></span>
					<p>注重知识获取</p>
					<em><p>美国的大学不仅传授知识更注重知识的获取，鼓励开拓创新，更有利于杰出人才的培养。</p></em>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/benke_zs/icon3.png" alt="">
					<span></span>
					<p>培养全面人才</p>
					<em><p>美国本科更加注重学生的全面发展以及个性塑造，大一大二学习各科综合知识，大三大四学生才根据各自兴趣爱好选定所学专业。</p></em>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/benke_zs/icon4.png" alt="">
					<span></span>
					<p>提升个人素养</p>
					<em><p>提高英语水平，锻炼个人能力，开阔眼界，更多的实习机会，这些将是你回国或者继续在美国深造的一笔宝贵的财富。</p></em>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/benke_zs/icon4.png" alt="">
					<span></span>
					<p>更易获得奖学金</p>
					<em><p>美国本科毕业的学生，在申请美国TOP 30的研究生院校时，更容易获得奖学金。</p></em>
				</div>
			</div>
			<a  href="javascript:;" onclick="go()">马上申请美国本科</a>
		</div>
		
		<!-- 美国本科最新排名 -->
		<div class="top50 zs_index">
			<div class="gWidth1170">
				<h3 class="title">美国本科最新排名</h3>
				<div class="content">
					<div class="top5 clearfix">
						<div class="box fl">
							<img src="/static/home/img/page/benke_feiyong/school1.png" alt="普林斯顿大学" title="普林斯顿大学">
							<h4>TOP1</h4>
							<p>普林斯顿大学</p>
							<p>$47,140/年</p>
							<a  href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/benke_feiyong/school2.png" alt="哈佛大学" title="哈佛大学">
							<h4>TOP2</h4>
							<p>哈佛大学</p>
							<p>$50,420/年</p>
							<a  href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/benke_feiyong/school3.png" alt="哥伦比亚大学" title="哥伦比亚大学">
							<h4>TOP3</h4>
							<p>哥伦比亚大学</p>
							<p>$59,430/年</p>
							<a  href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/benke_feiyong/school4.png" alt="麻省理工学院" title="麻省理工学院">
							<h4>TOP3</h4>
							<p>麻省理工学院</p>
							<p>$51,832/年</p>
							<a  href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/benke_feiyong/school5.png" alt="芝加哥大学" title="芝加哥大学">
							<h4>TOP3</h4>
							<p>芝加哥大学</p>
							<p>$57,006/年</p>
							<a  href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
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
								<tr><td>3</td><td>耶鲁大学</td><td>Yale University</td><td>$53,430 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>7</td><td>斯坦福大学</td><td>Stanford University</td><td>$51,354 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>8</td><td>杜克大学</td><td>Duke University</td><td>$55,960 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>8</td><td>宾夕法尼亚大学</td><td>University of Pennsylvania</td><td>$55,584 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>10</td><td>约翰霍普金斯大学</td><td>Johns Hopkins University</td><td>$53,740 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>10</td><td>西北大学</td><td>Northwestern University</td><td>$54,567 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>12</td><td>加州理工学院</td><td>California Institute of Technology</td><td>$52,362 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>12</td><td>达特茅斯学院</td><td>Dartmouth College</td><td>$55,035 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>14</td><td>布朗大学</td><td>Brown University</td><td>$55,656 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>14</td><td>范德堡大学</td><td>Vanderbilt University</td><td>$49,816 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>16</td><td>康奈尔大学</td><td>Cornell University</td><td>$55,188 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>16</td><td>莱斯大学</td><td>Rice University</td><td>$47,350 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>18</td><td>圣母大学</td><td>University of Notre Dame</td><td>$53,391 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>19</td><td>加州大学洛杉矶分校</td><td>University of California, Los Angeles</td><td>$41,294 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>19</td><td>圣路易斯华盛顿大学</td><td>Washington University in St. Louis</td><td>$53,399 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>21</td><td>艾茉莉大学</td><td>Emory University</td><td>$51,306 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>22</td><td>乔治敦大学</td><td>Georgetown University</td><td>$54,104 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>22</td><td>加州大学伯克利分校</td><td>University of California, Berkeley</td><td>$43,232 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>22</td><td>南加州大学</td><td>University of Southern California</td><td>$56,225 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>25</td><td>卡耐基梅隆大学</td><td>Carnegie Mellon University</td><td>$55,465 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>25</td><td>弗吉尼亚大学</td><td>University of Virginia</td><td>$48,891 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>27</td><td>塔夫斯大学</td><td>Tufts University</td><td>$56,382 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>27</td><td>密歇根大学安娜堡分校</td><td>University of Michigan, Ann Arbor</td><td>$49,350 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>27</td><td>维克森林大学</td><td>Wake Forest University</td><td>$53,322 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>30</td><td>纽约大学</td><td>New York University</td><td>$51,828 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>30</td><td>加州大学圣塔芭芭拉分校</td><td>University of California, Santa Barbara</td><td>$42,486 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>30</td><td>北卡罗来纳大学教堂山分校</td><td>University of North Carolina, Chapel Hill</td><td>$35,169 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>33</td><td>加州大学尔湾分校</td><td>University of California, Irvine</td><td>$43,530 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>33</td><td>罗切斯特大学</td><td>University of Rochester</td><td>$53,926 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>35</td><td>布兰迪斯大学</td><td>Brandeis University</td><td>$55,395 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>35</td><td>佐治亚理工学院</td><td>Georgia Institute of Technology</td><td>$33,020 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>35</td><td>佛罗里达大学</td><td>University of Florida</td><td>$28,658 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>38</td><td>波士顿学院</td><td>Boston College</td><td>$55,464 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>38</td><td>威廉玛丽学院</td><td>College of William and Mary</td><td>$44,701 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>38</td><td>加州大学戴维斯分校</td><td>University of California, Davis</td><td>$43,458 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>41</td><td>加州大学圣地亚哥分校</td><td>University of California, San Diego</td><td>$42,074 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>42</td><td>波士顿大学</td><td>Boston University</td><td>$53,948 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>42</td><td>凯斯西储大学</td><td>Case Western Reserve University</td><td>$49,042 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>44</td><td>东北大学</td><td>Northeastern University</td><td>$51,387 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>44</td><td>杜兰大学</td><td>Tulane University</td><td>$54,820 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>46</td><td>佩伯代因大学</td><td>Pepperdine University</td><td>$53,932 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>46</td><td>佐治亚大学</td><td>University of Georgia</td><td>$30,404 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>46</td><td>伊利诺伊大学厄本那-香槟分校</td><td>University of Illinois, Urbana-Champaign</td><td>$32,568 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>49</td><td>伦斯勒理工学院</td><td>Rensselaer Polytechnic Institute</td><td>$53,880 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
								<tr><td>49</td><td>德克萨斯大学奥斯汀分校</td><td>University of Texas, Austin</td><td>$37,480 </td><td><a  href="javascript:;" onclick="go()">测录取率</a></td></tr>
							</table>
						</div>
					</div>
				</div>
				<div class="anniu">
					<a target="_blank" href="/page/university_ranking.html">查看更多院校排名</a>
					<a  href="javascript:;" onclick="go()" class="a1">查看名校申请条件</a>
				</div>
			</div>
		</div>
		
		<!-- 彬彬录取捷报榜 -->
		<div class="jiebao zs_index gWidth1170">
			<h3 class="title">彬彬录取捷报榜</h3>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="/static/home/img/page/benke_zs/al1.jpg" alt="G同学" title="G同学">
						<div>
							<p><b>姓名：</b>G同学</p>
							<p><b>录取院校：</b>弗吉尼亚大学</p>
							<p><b>录取专业：</b>经济学</p>
							<p><b>背景条件：</b>北师大附中</p>
							<p>GPA:3.92/4.0，TOEFL:111</p>
						</div>
						<a  href="/success/123.html" target="_blank">查看详情&gt;&gt;</a>
					</div>
					<div class="swiper-slide">
						<img src="/static/home/img/page/benke_zs/al2.jpg" alt="X同学" title="X同学">
						<div>
							<p><b>姓名：</b>X同学</p>
							<p><b>录取院校：</b>西北大学</p>
							<p><b>录取专业：</b>教育学</p>
							<p><b>背景条件：</b>山东省普高国际部</p>
							<p>TOEFL：110, SAT: 1530, GPA：4.0</p>
						</div>
						<a  href="/success/117.html" target="_blank">查看详情&gt;&gt;</a>
					</div>
					<div class="swiper-slide">
						<img src="/static/home/img/page/benke_zs/al3.jpg" alt="Y同学" title="Y同学">
						<div>
							<p><b>姓名：</b>Y同学</p>
							<p><b>录取院校：</b>康奈尔大学</p>
							<p><b>录取专业：</b>生物专业</p>
							<p><b>背景条件：</b>美高</p>
							<p>TOEFL：98, SAT：1550,SAT2：800/800/800,GPA：3.8</p>
						</div>
						<a  href="/success/116.html" target="_blank">查看详情&gt;&gt;</a>
					</div>
					<div class="swiper-slide">
						<img src="/static/home/img/page/benke_zs/al4.jpg" alt="P同学" title="P同学">
						<div>
							<p><b>姓名：</b>P同学</p>
							<p><b>录取院校：</b>埃默里大学</p>
							<p><b>录取专业：</b>工商管理</p>
							<p><b>背景条件：</b>北京某高中国际部</p>
							<p>TOEFL：105+,GPA：3.6,SAT:1460</p>
						</div>
						<a  href="/success/103.html" target="_blank">查看详情&gt;&gt;</a>
					</div>
					<div class="swiper-slide">
						<img src="/static/home/img/page/benke_zs/al5.jpg" alt="R同学" title="R同学">
						<div>
							<p><b>姓名：</b>R同学</p>
							<p><b>录取院校：</b>耶鲁大学</p>
							<p><b>录取专业：</b>数学</p>
							<p><b>背景条件：</b>北京八中</p>
							<p>GPA3.92，TOEFL:113</p>
						</div>
						<a  href="/success/92.html" target="_blank">查看详情&gt;&gt;</a>
					</div>
					<div class="swiper-slide">
						<img src="/static/home/img/page/benke_zs/al6.jpg" alt="D同学" title="D同学">
						<div>
							<p><b>姓名：</b>D同学</p>
							<p><b>录取院校：</b>加州艺术学院</p>
							<p><b>录取专业：</b>Fine arts</p>
							<p><b>背景条件：</b>北京某高中国际部</p>
							<p>SAT：1470,TOEFL：102,GPA：3.62</p>
						</div>
						<a  href="/success/98.html" target="_blank">查看详情&gt;&gt;</a>
					</div>
				</div>
			</div>
			<div class="btn btnleft"><img src="/static/home/img/page/benke_zs/zuo.png" alt=""></div>
			<div class="btn btnright"><img src="/static/home/img/page/benke_zs/you.png" alt=""></div>
			<div class="anniu">
				<a target="_blank" href="/page/helicopter.html">查看更多录取捷报</a>
				<a  href="javascript:;" onclick="go()" class="a1">免费进行留学评估</a>
			</div>
		</div>
		
		<!-- 美国本科留学申请条件 -->
		<div class="tiaojianBox zs_index">
			<div class="tiaojian gWidth1170">
				<h3 class="title">美国本科留学申请条件</h3>
				<div class="content clearfix">
					<div class="box fl">
						<h3>标准化考试</h3>
						<p>托福(TOEFL)    雅思(IELTS)   SAT(SAT1 &amp; SAT2)  ACT   AP   IB</p>
						<a  href="javascript:;" onclick="go()">咨询目标大学考试要求 &gt;&gt;</a>
					</div>
					<div class="box fl">
						<h3>学术成绩</h3>
						<p>因为美国高中是四年制，所以申请美国本科时，通常会要求9-12年级（国内初三到高三）的成绩单。</p>
						<a  href="javascript:;" onclick="go()">班级排名对申请的重要性 &gt;&gt;</a>
					</div>
					<div class="box fl">
						<h3>个人能力和课外活动</h3>
						<p>与学习能力一样，招生委员会可以从学生对课外活动和其他个人能力的描述中，了解到学生的个人品性。</p>
						<a  href="javascript:;" onclick="go()">个人能力提升 &gt;&gt;</a>
					</div>
					<div class="box fl">
						<h3>文书</h3>
						<p>彬彬教育专业文书导师进行指导，美式思维助力申请美国名校。</p>
						<a  href="javascript:;" onclick="go()">文书如何挖掘亮点 &gt;&gt;</a>
					</div>
					<div class="box fl">
						<h3>面试</h3>
						<p>不同学校的面试也不相同，有些学校面试时必须的，而有些学校则可以不用通过面试，想进名校的申请者还是尽早做准备比较好。</p>
						<a  href="javascript:;" onclick="go()">获取面试技巧 &gt;&gt;</a>
					</div>
					<div class="box fl">
						<h3>推荐信</h3>
						<p>通过推荐信可以对申请人在其他申请材料中所呈现出来的各种品质加以证实，并且可以体现申请人的人际交往能力，以及对自己周围环境产生影响的能力。</p>
						<a  href="javascript:;" onclick="go()">推荐信写作指导 &gt;&gt;</a>
					</div>
				</div>
				<a  href="javascript:;" onclick="go()">在线评估留学条件</a>
			</div>
		</div>
		
		<!-- 美国本科录取方式 -->
		<div class="luqu_fangshi zs_index gWidth1170">
			<h3 class="title">美国本科录取方式</h3>
			<div class="content clearfix">
				<div class="box fl">
					<p>提前录取<br />（ED/EA）</p>
					<div class="hidden">
						<p>即ED(具有约束力的提前录取)、EA(不具约束力的提前录取)提前录取适合申请美国排名前五十的大学学生，如果通过常规录取申请美国前五十名的学校，要求要比提前录取的高。截至日期一般是每年的11月1日到11月15日。</p>
						<a  href="javascript:;" onclick="go()">查看详情&gt;</a>
					</div>
				</div>
				<div class="box box2 fl">
					<p>常规录取<br />（RD）</p>
					<div class="hidden">
						<p>常规录取就是一般意义上的申请，可以同时申请多个学校，截至日期一般是在一月、二月。</p>
						<a  href="javascript:;" onclick="go()">查看详情&gt;</a>
					</div>
				</div>
				<div class="box box3 fl">
					<p>滚动录取<br />（Rolling）</p>
					<div class="hidden">
						<p>滚动录取是学校没有固定的截至日期，滚动录取。申请人可以在一个较长的 时间阶段内提交申请，一般为6个月左右。申请之后，学校会立即审核你的申请，并在几周内做出答复。</p>
						<a  href="javascript:;" onclick="go()">查看详情&gt;</a>
					</div>
				</div>
			</div>
			<a  href="javascript:;" onclick="go()">免费获取专属留学方案</a>
		</div>
		
		<!-- 美国本科申请规划 -->
		<div class="gh zs_index">
			<div class="gWidth1170">
				<h3 class="title">美国本科申请规划</h3>
				<div class="content">
					<div class="ctop clearfix">
						<div class="box fl">
							<h3>9年级</h3>
							<p>保持良好GPA和排名、托福基础、广泛涉及初级背景提升项目、了解美国文化及院校、准备申请材料。</p>
						</div>
						<div class="box fr">
							<h3>10年级</h3>
							<p>保持良好GPA和排名、托福强化80+、SAT首考1200、参加中级海外交流项目、实地深入了解美国院校、继续准备申请材料。</p>
						</div>
					</div>
					<!-- 美国文理学院申请规划 -->
					<div class="guihua">
						<div class="gWidth1170">
							<h3 class="title">美国文理学院申请规划</h3>
							<!-- content -->
							<div class="content clearfix">
								<div class="box">
									<ul>
										<li>
											<h3>1-3月<br />准备考试</h3>
											<p>收集标准化考试复习<br />材料，加强英语学习</p>
										</li>
									</ul>
								</div>
								<div class="box">
									<ul>
										<li>
											<h3>5-8月<br />参加考试</h3>
											<p>完成TOEFL、SAT等<br />考试</p>
										</li>
									</ul>
								</div>
								<div class="box">
									<ul>
										<li>
											<h3>6-8月<br />成绩冲高</h3>
											<p>标化成绩冲高，为申请学校做好准备</p>
										</li>
									</ul>
								</div>
								<div class="box">
									<ul>
										<li>
											<h3>9月<br />选校准备</h3>
											<p>搜集院校信息<br />申请要求等材料</p>
										</li>
									</ul>
								</div>
								<div class="box">
									<ul>
										<li>
											<h3>10-12月<br />网申</h3>
											<p>登录网申系统<br />提交申请材料</p>
										</li>
									</ul>
								</div>
								<div class="box">
									<ul>
										<li>
											<h3>次年1-3月<br />跟踪申请</h3>
											<p>实时查看申请状态</p>
										</li>
									</ul>
								</div>
								<div class="box">
									<ul>
										<li>
											<h3>次年3-4月<br />等待录取</h3>
											<p>等待录取结果、收到<br />录取offer确定入读院校</p>
										</li>
									</ul>
								</div>
								<div class="box">
									<ul>
										<li>
											<h3>次年6-7月<br />签证准备</h3>
											<p>准备材料办理签证</p>
										</li>
									</ul>
								</div>
								<div class="box">
									<ul>
										<li>
											<h3>次年8月<br />行前准备</h3>
											<p>打包行李、购买机票</p>
										</li>
									</ul>
								</div>
								<div class="box">
									<ul>
										<li>
											<h3>次年9月<br />准备入学</h3>
											<p>开启美好留学生活</p>
										</li>
									</ul>
								</div>
								<div class="xian">
									<div>
										<span></span>
									</div>
									<div>
										<span></span>
									</div>
									<div>
										<span></span>
									</div>
									<div>
										<span></span>
									</div>
									<div>
										<span></span>
									</div>
									<div>
										<span></span>
									</div>
									<div>
										<span></span>
									</div>
									<div>
										<span></span>
									</div>
									<div>
										<span></span>
									</div>
									<div>
										<span></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a  href="javascript:;" onclick="go()">定制个性化留学方案</a>
			</div>
		</div>
		
		<!-- 彬彬教育申请流程服务 -->
		<div class="lcfw zs_index">
			<div class="gWidth1170">
				<h3 class="title">彬彬教育申请流程服务</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="box">
						<ul>
							<li>
								<h3>整体规划</h3>
								<p>与学生初次沟通<br />为学生制定整体留学申<br />请规划方案</p>
							</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>专业定位</h3>
								<p>根据学生背景情况和未<br />来发展预期 选择适合的<br />申请专业</p>
							</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>学术背景提升指导</h3>
								<p>根据学生目前绩点<br />为学生制定接下来的选<br />课战略</p>
							</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>科研实习指导</h3>
								<p>为学生选择合适的科研<br />实习项目 全程指导高效<br />实习</p>
							</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>学校选定</h3>
								<p>根据学生背景情况<br />和未来职业发展预期选<br />择申请学校</p>
							</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>文书创作</h3>
								<p>根据学生过往经历深度<br />挖掘背景 写出特色的申<br />请文书</p>
							</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>网上申请</h3>
								<p>将所有学生的相关信息<br />准确提供给申请学校</p>
							</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>套磁面试辅导</h3>
								<p>为学生的面试提供指导<br />和帮助</p>
							</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>签证及行前准备</h3>
								<p>指导学生填写签证申请<br />在机票、住宿方面进行<br />指导</p>
							</li>
						</ul>
						<span></span>
					</div>
					<div class="xian">
						<div>
							<span></span>
						</div>
						<div>
							<span></span>
						</div>
						<div>
							<span></span>
						</div>
						<div>
							<span></span>
						</div>
						<div>
							<span></span>
						</div>
						<div>
							<span></span>
						</div>
						<div>
							<span></span>
						</div>
						<div>
							<span></span>
						</div>
						<div>
							<span></span>
						</div>
					</div>
				</div>
				<a  href="javascript:;" onclick="go()">定制个性化留学方案</a>
			</div>
		</div>
		
		<!-- 强大的国内外导师团队 -->
		<div class="daoshi_team zs_index">
			<div class="gWidth1170">
				<!-- title -->
				<h3 class="title">强大的国内外导师团队</h3>
				<!-- count -->
				<div class="count">
					<!-- 选项 -->
					<div class="clearfix t">
						<div class="tbox">
							<a href="javascript:;" class="fl">全程咨询导师</a><span class="fl">|</span>
							<a href="javascript:;" class="fl">海外同专业导师</a><span class="fl">|</span>
							<a href="javascript:;" class="fl">全能主申请导师</a><span class="fl">|</span>
							<a href="javascript:;" class="fl">资深流程导师</a><span class="fl">|</span>
							<a href="javascript:;" class="fl">名校外籍文笔导师</a><span class="fl">|</span>
							<a href="javascript:;" class="fl">专家督导导师</a>
						</div>
					</div>
					<!-- 内容 -->
					<div class="clearfix b">
						<div class="bBox clearfix">
							<div class="fl leftb">
								<h3>全程咨询导师</h3>
								<p>Full Consultation Tutor</p>
								<span></span>
								<em>在彬彬，40%拥有8年美国留学咨询(非中介)工作经验，人均6年工作经验，人均200+申请案例,成功率比同行高15%。</em>
								<em>擅长：全程申请规划、申请时间进度把控。</em>
								<div class="bBtn clearfix">
									<a href="javascript:;" onclick="go()" class="fl">匹配专属导师</a>
									<a href="/tutor/special/" target="_blank" class="fl">查看更多导师</a>
								</div>
							</div>
							<div class="fr rightb">
								<div class="fl">
									<img src="/static/home/img/daoshi/quanchengzixun/Will Zhang.jpg" alt="Will Zhang" title="Will Zhang">
									<div class="hiddenTitle">Will Zhang</div>
									<div class="hidden">
										<h3>Will Zhang</h3>
										<span></span>
										<p>名校申请规划，院校咨询，简历咨询，面试辅导</p>
										<a href="/teacher/33.html" target="_blank">个人介绍</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/quanchengzixun/Melody Zhao.jpg" alt="Arvin Xu" title="Arvin Xu">
									<div class="hiddenTitle">Arvin Xu</div>
									<div class="hidden">
										<h3>Arvin Xu</h3>
										<span></span>
										<p>美国留学申请规划服务,涵盖高中,本科,研究生申请。包括文,理,工,商,艺术专业方向</p>
										<a href="/teacher/35.html" target="_blank">个人介绍</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/quanchengzixun/Catharsis Wong.jpg" alt="Catharsis Wong" title="Catharsis Wong">
									<div class="hiddenTitle">Catharsis Wong</div>
									<div class="hidden">
										<h3>Catharsis Wong</h3>
										<span></span>
										<p>长线学习设计，选校定位，学习及生活辅导，简历咨询</p>
										<a href="/teacher/28.html" target="_blank">个人介绍</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/quanchengzixun/Doris Yang.jpg" alt="Doris Yang" title="Doris Yang">
									<div class="hiddenTitle">Doris Yang</div>
									<div class="hidden">
										<h3>Doris Yang</h3>
										<span></span>
										<p>咨询规划，申请时间进度把控，选校定位，推荐人筛选，简历咨询，文书咨询，面试辅导</p>
										<a href="/teacher/29.html" target="_blank">个人介绍</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/quanchengzixun/Kim Jin.jpg" alt="Kim Jin" title="Kim Jin">
									<div class="hiddenTitle">Kim Jin</div>
									<div class="hidden">
										<h3>Kim Jin</h3>
										<span></span>
										<p>全程申请规划，规划细节申请时间，选校定位，尤其在理科类文书</p>
										<a href="/teacher/30.html" target="_blank">个人介绍</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/quanchengzixun/Allen Wong.jpg" alt="Allen Wong" title="Allen Wong">
									<div class="hiddenTitle">Allen Wong</div>
									<div class="hidden">
										<h3>Allen Wong</h3>
										<span></span>
										<p>全程申请规划，规划细节申请时间，选校定位，尤其在理科类文书</p>
										<a href="/teacher/31.html" target="_blank">个人介绍</a>
									</div>
								</div>
							</div>
						</div>
						<div class="bBox clearfix">
							<div class="fl leftb">
								<h3>海外同专业导师</h3>
								<p>Overseas Mentors</p>
								<span></span>
								<em>彬彬教育的海外同专业导师团队作为彬彬教育独家特色之一，拥有非常强大的名校优秀校友资源，且校友均毕业于美国滕门名校，为学生提供独特的专业和职业建议。</em>
								<em class="clearfix"><i class="fl">擅长：</i><i class="fl w320">职业规划咨询、选校选专业咨询建议、文书素材把关、模拟面试</i></em>
								<div class="bBtn clearfix">
									<a href="javascript:;" onclick="go()" class="fl">匹配专属导师</a>
									<a href="/tutor/special/" target="_blank" class="fl">查看更多导师</a>
								</div>
							</div>
							<div class="fr rightb">
								<div class="fl">
									<img src="/static/home/img/daoshi/haiwaitongzhuanye/Mentor Du.jpg" alt="Mentor Du" title="Mentor Du">
									<div class="hiddenTitle">Mentor Du</div>
									<div class="hidden">
										<h3>Mentor Du</h3>
										<span></span>
										<p>加州大学戴维斯分校<br />经济学专业</p>
										<a href="/sister/39.html" target="_blank">个人介绍</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/haiwaitongzhuanye/Aaron Li.jpg" alt="Aaron Li" title="Aaron Li">
									<div class="hiddenTitle">Aaron Li</div>
									<div class="hidden">
										<h3>Aaron Li</h3>
										<span></span>
										<p>布朗大学<br />化学</p>
										<a href="/sister/63.html" target="_blank">个人介绍</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/haiwaitongzhuanye/Mentor Shen.jpg" alt="Mentor Shen" title="Mentor Shen">
									<div class="hiddenTitle">Mentor Shen</div>
									<div class="hidden">
										<h3>Mentor Shen</h3>
										<span></span>
										<p>哥伦比亚大学<br />计量经济学</p>
										<a href="/sister/34.html" target="_blank">个人介绍</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/haiwaitongzhuanye/Mentor Zhou.jpg" alt="Mentor Zhou" title="Mentor Zhou">
									<div class="hiddenTitle">Mentor Zhou</div>
									<div class="hidden">
										<h3>Mentor Zhou</h3>
										<span></span>
										<p>南加州大学<br />计量经济学</p>
										<a href="/sister/32.html" target="_blank">个人介绍</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/haiwaitongzhuanye/Mentor Liu.jpg" alt="Mentor Liu" title="Mentor Liu">
									<div class="hiddenTitle">Mentor Liu</div>
									<div class="hidden">
										<h3>Mentor Liu</h3>
										<span></span>
										<p>芝加哥大学<br />癌症生物学专业</p>
										<a href="/sister/36.html" target="_blank">个人介绍</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/haiwaitongzhuanye/Mentor Lu.jpg" alt="Mentor Lu" title="Mentor Lu">
									<div class="hiddenTitle">Mentor Lu</div>
									<div class="hidden">
										<h3>Mentor Lu</h3>
										<span></span>
										<p>加州大学圣地亚哥分校<br />计算机科学与工程理学</p>
										<a href="/sister/37.html" target="_blank">个人介绍</a>
									</div>
								</div>
							</div>
						</div>
						<div class="bBox clearfix">
							<div class="fl leftb">
								<h3>全能主申请导师</h3>
								<p>Main-apply instructor</p>
								<span></span>
								<em>彬彬教育的全能主导申请师专注于美国留学多年，拥有丰富的留美申请经验和大量的案例数据支撑，熟悉北美名校录取评判体系，对于学校的录取信息、学生的申请背景、文书写作都有非常独到的见解，为广大学子提供最优质的留学规划。</em>
								<em class="clearfix"><i class="fl">擅长：</i><i class="fl w320">全程申请规划、申请进度以及细节把控、材料咨询以及面试辅导。</i></em>
								<div class="bBtn clearfix">
									<a href="javascript:;" onclick="go()" class="fl">匹配专属导师</a>
									<a href="/tutor/special/" target="_blank" class="fl">查看更多导师</a>
								</div>
							</div>
							<div class="fr rightb">
								<div class="fl">
									<img src="/static/home/img/daoshi/quannengzhushenqing/Amanda Li.jpg" alt="Amanda Li" title="Amanda Li">
									<div class="hiddenTitle">Amanda Li</div>
									<div class="hidden">
										<h3>Amanda Li</h3>
										<span></span>
										<p>全程申请规划，简历咨询，转学规划</p>
										<a href="/teacher/38.html" target="_blank">个人介绍</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/quannengzhushenqing/Ruby Lu.jpg" alt="Ruby Lu" title="Ruby Lu">
									<div class="hiddenTitle">Ruby Lu</div>
									<div class="hidden">
										<h3>Ruby Lu</h3>
										<span></span>
										<p>文书辅导，奖学金申请指导，行前指导</p>
										<a href="/teacher/40.html" target="_blank">个人介绍</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/quannengzhushenqing/Alice Zhang.jpg" alt="Alice Zhang" title="Alice Zhang">
									<div class="hiddenTitle">Alice Zhang</div>
									<div class="hidden">
										<h3>Alice Zhang</h3>
										<span></span>
										<p>夏校申请，软实力打造，AP考试辅导</p>
										<a href="/teacher/42.html" target="_blank">个人介绍</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/quannengzhushenqing/Arvin Han.jpg" alt="Arvin Han" title="Arvin Han">
									<div class="hiddenTitle">Arvin Han</div>
									<div class="hidden">
										<h3>Arvin Han</h3>
										<span></span>
										<p>全能申请辅导，托福考试规划</p>
										<a href="/teacher/45.html" target="_blank">个人介绍</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/quannengzhushenqing/Hekki Hei.jpg" alt="Hekki Hei" title="Hekki Hei">
									<div class="hiddenTitle">Hekki</div>
									<div class="hidden">
										<h3>Hekki Hei</h3>
										<span></span>
										<p>个性选校，推荐信导师选择，背景提升项目推荐</p>
										<a href="/teacher/61.html" target="_blank">个人介绍</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/quannengzhushenqing/Gloria Zhao.jpg" alt="Gloria Zhao" title="Gloria Zhao">
									<div class="hiddenTitle">Gloria Zhao</div>
									<div class="hidden">
										<h3>Gloria Zhao</h3>
										<span></span>
										<p>就业及职业规划辅导，签证及面签辅导</p>
										<a href="/teacher/62.html" target="_blank">个人介绍</a>
									</div>
								</div>
							</div>
						</div>
						<div class="bBox clearfix">
							<div class="fl leftb">
								<h3>资深流程导师</h3>
								<p>Senior Consulting Advisor</p>
								<span></span>
								<em>彬彬教育的资深流程导师拥有丰富的网申答疑、材料认证等诸多留学申请流程经验，对申请中大大小小细节都了然于心，能够准确把控网申各环节的时间点并提供精准的服务。</em>
								<em class="clearfix"><i class="fl">擅长：</i><i class="fl w320">网申填写辅导、成绩认证辅导、语言成绩寄送辅导、申请材料的准备指导。</i></em>
								<div class="bBtn clearfix">
									<a href="javascript:;" onclick="go()" class="fl">匹配专属导师</a>
									<a href="/tutor/special/" target="_blank" class="fl">查看更多导师</a>
								</div>
							</div>
							<div class="fr rightb">
								<div class="fl">
									<img src="/static/home/img/daoshi/zishenliucheng/Cris Liao.jpg" alt="Cris Liao" title="Cris Liao">
									<div class="hiddenTitle">Cris Liao</div>
									<div class="hidden">
										<h3>Cris Liao</h3>
										<span></span>
										<p>网申填写辅导、成绩认证辅导</p>
										<a href="javascript:;" onclick="go()">与TA聊聊</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/zishenliucheng/Hyperion Jiu.jpg" alt="Hyperion Jiu" title="Hyperion Jiu">
									<div class="hiddenTitle">Hyperion Jiu</div>
									<div class="hidden">
										<h3>Hyperion Jiu</h3>
										<span></span>
										<p>申请材料准备指导，语言成绩寄送辅导</p>
										<a href="javascript:;" onclick="go()">与TA聊聊</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/zishenliucheng/Abbey Tang.jpg" alt="Abbey Tang" title="Abbey Tang">
									<div class="hiddenTitle">Abbey Tang</div>
									<div class="hidden">
										<h3>Abbey Tang</h3>
										<span></span>
										<p>填写并完善留美资料，材料认证</p>
										<a href="javascript:;" onclick="go()">与TA聊聊</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/zishenliucheng/Leo Cao.jpg" alt="Leo Cao" title="Leo Cao">
									<div class="hiddenTitle">Leo Cao</div>
									<div class="hidden">
										<h3>Leo Cao</h3>
										<span></span>
										<p>熟悉美国名校网申系统，指导学生准备完整材料</p>
										<a href="javascript:;" onclick="go()">与TA聊聊</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/zishenliucheng/Truman Li.jpg" alt="Truman Li" title="Truman Li">
									<div class="hiddenTitle">Truman Li</div>
									<div class="hidden">
										<h3>Truman Li</h3>
										<span></span>
										<p>准确把控时间节点，网申辅导以及材料精准递交</p>
										<a href="javascript:;" onclick="go()">与TA聊聊</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/zishenliucheng/Angelia Liu.jpg" alt="Angelia Liu" title="Angelia Liu">
									<div class="hiddenTitle">Angelia Liu</div>
									<div class="hidden">
										<h3>Angelia Liu</h3>
										<span></span>
										<p>申请流程全程跟踪，辅导并完善学生资料</p>
										<a href="javascript:;" onclik="go()">与TA聊聊</a>
									</div>
								</div>
							</div>
						</div>
						<div class="bBox clearfix">
							<div class="fl leftb">
								<h3>名校外籍文笔导师</h3>
								<p>College Essay Instrutor</p>
								<span></span>
								<em>作为另一个核心特色，彬彬教育外籍导师均为母语为英语且毕业于MIT、YALE等美国名校。修读专业为语言学、教育学、编剧、计算机、电子工程等。在文书写作方面有丰富经验。截止到现在，外籍导师团队在彬彬教育累积修改的文书超过一万篇，修改符合母语要求，生动优美，为学生申请带来独特的优势。</em>
								<em class="clearfix"><i class="fl">擅长：</i><i class="fl w320">文书母语润色、词汇句法优化、素材结构建议。</i></em>
								<div class="bBtn clearfix">
									<a href="javascript:;" onclick="go()" class="fl">匹配专属导师</a>
									<a href="/tutor/special/" target="_blank" class="fl">查看更多导师</a>
								</div>
							</div>
							<div class="fr rightb">
								<div class="fl">
									<img src="/static/home/img/daoshi/mingxiaowaiji/Megan Ince.jpg" alt="Megan Ince" title="Megan Ince">
									<div class="hiddenTitle">Megan Ince</div>
									<div class="hidden">
										<h3>Megan Ince</h3>
										<span></span>
										<p>蒙特沃德学院前招生副院长</p>								
										<a href="javascript:;" onclick="go()">与TA聊聊</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/mingxiaowaiji/Lousia Deng.jpg" alt="Lousia Deng" title="Lousia Deng">
									<div class="hiddenTitle">Lousia Deng</div>
									<div class="hidden">
										<h3>Lousia Deng</h3>
										<span></span>
										<p>约翰百斯特高中国际项目主任</p>										<
										<a href="javascript:;" onclick="go()">与TA聊聊</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/mingxiaowaiji/Tiare Police.jpg" alt="Tiare Police" title="Tiare Police">
									<div class="hiddenTitle">Tiare Police</div>
									<div class="hidden">
										<h3>Tiare Police</h3>
										<span></span>
										<p>夏威夷预备学校招生办主任</p>
										<a href="javascript:;" onclick="go()">与TA聊聊</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/mingxiaowaiji/Bruce Wiggins.jpg" alt="Bruce Wiggins" title="Bruce Wiggins">
									<div class="hiddenTitle">Bruce Wiggins</div>
									<div class="hidden">
										<h3>Bruce Wiggins</h3>
										<span></span>
										<p>特尔菲学校亚洲招生办公室主任</p>
										<a href="javascript:;" onclick="go()">与TA聊聊</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/mingxiaowaiji/Peter Zimmerman.jpg" alt="Peter Zimmerman" title="Peter Zimmerman">
									<div class="hiddenTitle">Peter Zimmerman</div>
									<div class="hidden">
										<h3>Peter Zimmerman</h3>
										<span></span>
										<p>所罗门基督教高中高级副主任</p>
										<a href="javascript:;" onclick="go()">与TA聊聊</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/mingxiaowaiji/Cathleen Sheils.jpg" alt="Cathleen Sheils" title="Cathleen Sheils">
									<div class="hiddenTitle">Cathleen Sheils</div>
									<div class="hidden">
										<h3>Cathleen Sheils</h3>
										<span></span>
										<p>斯坦福大学前招生官</p>
										<a href="javascript:;" onclick="go()">与TA聊聊</a>
									</div>
								</div>
							</div>
						</div>
						<div class="bBox clearfix">
							<div class="fl leftb">
								<h3>专家督导导师</h3>
								<p>Senior Supervisor</p>
								<span></span>
								<em>作为留学业内唯一拥有的为提升学生满意度而设立的岗位。彬彬教育督导导师均来自集团内部管理层，通过微信群全程跟踪学生的申请进度及情况，定期与各个环节的导师及时沟通学生申请情况。定期和学生家长沟通，在彬彬教育留学申请的满意度，充分确保学生申请顺利进行。</em>
								<em class="clearfix"><i class="fl">擅长：</i><i class="fl w320">跟踪学生申请进度、定期跟踪学生的申请体验、审核学生申请方案。</i></em>
								<div class="bBtn clearfix">
									<a href="javascript:;" onclick="go()" class="fl">匹配专属导师</a>
									<a href="/tutor/special/" target="_blank" class="fl">查看更多导师</a>
								</div>
							</div>
							<div class="fr rightb">
								<div class="fl">
									<img src="/static/home/img/daoshi/zhuanjiadudao/Amber Bai.jpg" alt="Amber Bai" title="Amber Bai">
									<div class="hiddenTitle">Amber Bai</div>
									<div class="hidden">
										<h3>Amber Bai</h3>
										<span></span>
										<p>专家督导导师组长</p>
										<a href="javascript:;" onclick="go()">与TA聊聊</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/zhuanjiadudao/Carrie Guo.jpg" alt="Carrie Guo" title="Carrie Guo">
									<div class="hiddenTitle">Carrie Guo</div>
									<div class="hidden">
										<h3>Carrie Guo</h3>
										<span></span>
										<p>专家督导导师副组长</p>
										<a href="javascript:;" onclick="go()">与TA聊聊</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/zhuanjiadudao/Logan.jpg" alt="Logan" title="Logan">
									<div class="hiddenTitle">Logan</div>
									<div class="hidden">
										<h3>Logan</h3>
										<span></span>
										<p>专家督导导师成员</p>
										<a href="javascript:;" onclick="go()">与TA聊聊</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/zhuanjiadudao/Martin.jpg" alt="Martin" title="Martin">
									<div class="hiddenTitle">Martin</div>
									<div class="hidden">
										<h3>Martin</h3>
										<span></span>
										<p>专家督导导师成员</p>
										<a href="javascript:;" onclick="go()">与TA聊聊</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/zhuanjiadudao/Gail.jpg" alt="Gail" title="Gail">
									<div class="hiddenTitle">Gail</div>
									<div class="hidden">
										<h3>Gail</h3>
										<span></span>
										<p>专家督导导师成员</p>
										<a href="javascript:;" onclick="go()">与TA聊聊</a>
									</div>
								</div>
								<div class="fl">
									<img src="/static/home/img/daoshi/zhuanjiadudao/Dale.jpg" alt="Dale" title="Dale">
									<div class="hiddenTitle">Dale</div>
									<div class="hidden">
										<h3>Dale</h3>
										<span></span>
										<p>专家督导导师成员</p>
										<a href="javascript:;" onclick="go()">与TA聊聊</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 彬彬导师教你如何选专业 -->
		<div class="xuanzhuanye zs_index gWidth1170">
			<h3 class="title">彬彬导师教你如何选专业</h3>
			<div class="content clearfix">
				<div class="box fl">
					<h3>花时间了解</h3>
					<div class="hidden">
						<p>对申请人来说，选择应该最适合自己的课程及专业，而不是盲目选择所谓的“最好的专业”或“最好的学校”。所以要多了解各个学院的课程，有时候本不感兴趣的专业，通过对它的了解可能会有新的看法。</p>
						<a  href="javascript:;" onclick="go()">心仪专业咨询&gt;&gt;</a>
					</div>
				</div>
				<div class="box box2 fl">
					<h3>咨询“过来人”</h3>
					<div class="hidden">
						<p>最便捷的一种方式就是咨询教授或者目标学校的高年级学生，一般教授都会给一些专业的经验和建议。同样学长会也会给出一些对各专业的了解，对于学校的专业他们是最有发言权的。</p>
						<a  href="javascript:;" onclick="go()">咨询彬彬同专业导师&gt;&gt;</a>
					</div>
				</div>
				<div class="box box3 fl">
					<h3>根据兴趣选择</h3>
					<div class="hidden">
						<p>兴趣是选择专业的首要参考点，俗话说兴趣是学习的最大动力。因此，只有结合自己专业特长和兴趣爱好，选择较易发挥自身优势和较有把握攻克的专业，才能在大学四年中学的比较轻松，以优异成绩毕业的几率也会更大。</p>
						<a  href="javascript:;" onclick="go()">心仪专业申请详情&gt;&gt;</a>
					</div>
				</div>
				<div class="box box4 fl">
					<h3>双专业</h3>
					<div class="hidden">
						<p>如果一个专业方向不能满足学术兴趣和才能发展，可以考虑双专业，选择两个类似的专业或者两个完全不同的专业，一般辅修专业要求的课程学分比主修专业少。双专业可以让学生了解和掌握两套不同的价值观、知识和词汇。</p>
						<a  href="javascript:;" onclick="go()">心仪专业申请详情&gt;&gt;</a>
					</div>
				</div>
			</div>
			<a  href="javascript:;" onclick="go()">马上申请美国本科</a>
		</div>
		
		<!-- 选择正确的背景提升 距离名校更近一步 -->
		<div class="bjts zs_index">
			<div class="box gWidth1170">
				<!-- title -->
				<h3 class="title">选择正确的背景提升 距离名校更近一步</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="fl">
						<img src="/static/home/img/page/wenli_xueyuan/bjts1.jpg" alt="麻省理工学院量子光学物理、通讯物理项目" title="麻省理工学院量子光学物理、通讯物理项目">
						<span class="hidden_a"><p>麻省理工学院<br />量子光学物理、通讯物理项目</p></span>
						<div class="hidden_b">
							<div class="juzhong">
								<h3>麻省理工学院<br />量子光学物理、通讯物理项目</h3>
								<p><b>面向对象：</b>对物理、量子光学物理、通讯物理感兴趣的学生<br /><b>科研时间：</b>寒假，暑假，每期时间长度为4周；具体情况根据学生面试情况由美方进行调整</p>
								<a target="_blank" href="/mxky/272.html">查看详情</a>
							</div>
						</div>
					</div>
					<div class="fr">
						<div class="box fl">
							<img src="/static/home/img/page/wenli_xueyuan/bjts2.jpg" alt="哈佛-麻省理工数学锦标赛(HMMT)" title="哈佛-麻省理工数学锦标赛(HMMT)">
							<span class="hidden_a"><p>哈佛-麻省理工<br />数学锦标赛(HMMT)</p></span>
							<div class="hidden_b">
								<div class="juzhong">
									<h3>哈佛-麻省理工数学锦标赛(HMMT)</h3>
									<p><b>面向对象：</b>世界各地优秀高中生，团队报名，每个团队6至8名同学<br /><b>科研时间：</b>11月，2月</p>
									<a target="_blank" href="/xsjs/327.html">查看详情</a>
								</div>
							</div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/wenli_xueyuan/bjts3.jpg" alt="斯坦福国际精英大学先修项目" title="斯坦福国际精英大学先修项目">
							<span class="hidden_a"><p>斯坦福国际精英大学先修项目</p></span>
							<div class="hidden_b">
								<div class="juzhong">
									<h3>斯坦福国际精英大学先修项目</h3>
									<p><b>面向对象：</b>中国高中生<br /><b>科研时间：</b>2019年8月6日 - 8月18日（13天）</p>
									<a target="_blank" href="/xxsy/331.html">查看详情</a>
								</div>
							</div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/wenli_xueyuan/bjts4.jpg" alt="蓝色光标传播集团实习项目" title="蓝色光标传播集团实习项目">
							<span class="hidden_a"><p>蓝色光标传播集团实习项目</p></span>
							<div class="hidden_b">
								<div class="juzhong">
									<h3>蓝色光标传播集团实习项目</h3>
									<p><b>面向对象：</b>申请海外数据分析、统计、商业分析等相关研究生专业的学生<br /><b>科研时间：</b>全年接受报名，实习时间1个月以上</p>
									<a target="_blank" href="/mqsx/294.html">查看详情</a>
								</div>
							</div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/wenli_xueyuan/bjts5.jpg" alt="奥地利文化沉浸项目" title="奥地利文化沉浸项目">
							<span class="hidden_a"><p>奥地利文化沉浸项目</p></span>
							<div class="hidden_b">
								<div class="juzhong">
									<h3>奥地利文化沉浸项目</h3>
									<p><b>面向对象：</b>年满18周岁<br /><b>科研时间：</b>每年7、8月</p>
									<a target="_blank" href="/gjyg/318.html">查看详情</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="anniu">
					<a  href="javascript:;" onclick="go()">了解更多背景提升项目</a>
					<a  href="javascript:;" onclick="go()" class="a1">点击匹配背景提升活动</a>
				</div>
			</div>
		</div>
		
		<!-- 美国本科留学费用全解析 -->
		<div class="feiyong_jiexi zs_index">
			<div class="gWidth1170">
				<h3 class="title">美国本科留学费用全解析</h3>
				<!-- 美国不同类型大学费用不同 -->
				<div class="feiyong_butong">
					<h3 class="title">美国不同类型大学费用不同</h3>
					<div class="content clearfix">
						<div class="box fl">
							<h3>公立大学</h3>
							<p>学费：约$25000~$45000/年</p>
							<p>奖学金：约$10000-$50000/年</p>
						</div>
						<div class="box box2 fl">
							<h3>私立大学</h3>
							<p>学费：约$15000~$30000/年</p>
							<p>奖学金：约6000$-$40000/年</p>
						</div>
						<div class="box box3 fl">
							<h3>美国文理学院</h3>
							<p>学费：约$25000~$45000/年</p>
							<p>奖学金：约$10000-$50000/年</p>
						</div>
						<div class="box box4 fl">
							<h3>美国社区大学</h3>
							<p>学费：约$9000~$18000/年</p>
							<p>奖学金：约$3000-$10000/年</p>
						</div>
					</div>
					<div class="anniu">
						<a  href="javascript:;" onclick="go()">匹配美国本科院校</a>
						<a  href="javascript:;" onclick="go()" class="a1">如何获得奖学金</a>
					</div>
				</div>
				<!-- 美国城市生活费用不同 -->
				<div class="shenghuof_butong">
					<h3 class="title">美国城市生活费用不同</h3>
					<div class="content clearfix">
						<div class="box fl">
							<div class="boxTop">美国特大城市</div>
							<p><b>代表城市：</b>纽约、洛杉矶、迈阿密、芝加哥、华盛顿首府等城市</p>
							<p><b>生活费用：</b>约$1000-2000/月</p>
						</div>
						<div class="box box2 fl">
							<div class="boxTop">美国大城市</div>
							<p><b>代表城市：</b>匹兹堡、西雅图、达拉斯、亚特兰大等城市</p>
							<p><b>生活费用：</b>约$800-1000/月</p>
						</div>
						<div class="box box3 fl">
							<div class="boxTop">美国三级城市</div>
							<p><b>代表城市：</b>美国南部、中西部、东南部州、德州、康州等一些地区</p>
							<p><b>生活费用：</b>约$600-800/月</p>
						</div>
						<div class="box box4 fl">
							<div class="boxTop">美国四级城市</div>
							<p><b>代表城市：</b>俄克拉荷马州、密苏里州、路易斯安那州等地区/p>
							<p><b>生活费用：</b>约$450-600/月</p>
						</div>
					</div>
					<a  href="javascript:;" onclick="go()">中美消费大对比</a>
				</div>
			</div>
		</div>
		
		<!-- 彬彬教育致力让每一个学生牵手世界名校 -->
		<div id="mydiv" class="zs_index" style="height: 695px;">
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
			var t = document.documentElement.scrollTop || document.body.scrollTop;
			var scroll = true;
			if(t>=100){
				$('.abcBannav').css({'display': 'none'});
				$('.topNav').css({'position': 'static'});
			}
			// 
			var nav = $('.bannerNav').offset().top;
			$gkLength = $('.zs_index').length;
			window.onscroll = function () {
				var top = document.documentElement.scrollTop || document.body.scrollTop;
				if(top>=nav){
					$('.bannerNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999'});
					$('.navHidden').css({'display': 'block'});
				}else if(top<=$('.zs_index').eq(0).offset().top){
					$('.bannerNav').css({'position': 'static', 'top':''});
					$('.navHidden').css({'display': 'none'});
				}
				for( var i=0; i<$gkLength; i++ ){
					if( i == $gkLength - 1 ){
						if( top>=$('.zs_index').eq(i).offset().top ){
							$('.bannerNav span').removeClass('active');
							$('.bannerNav span').eq(i).addClass('active');
						}
						return;
					}
					if( top>=$('.zs_index').eq(i).offset().top - 200 && top<$('.zs_index').eq(i+1).offset().top - 200 ){
						$('.bannerNav span').removeClass('active');
						$('.bannerNav span').eq(i).addClass('active');
					}
				}
			}
			$('.bannerNav span').on('click', function () {
				var index = $('.bannerNav span').index($(this));
				var offsetTop = $('.zs_index').eq(index).offset().top;
				$('body, html').stop().animate({scrollTop: offsetTop + 0}, 1500);
			})
			$('.bannerNav span:last-child').css({'margin-right': '0'});
			// 
			$('.zhiduoshao .content .box').hover(function () {
				$(this).css({'border-color': '#89D3DC'});
				$(this).children('img').stop().fadeOut();
				$(this).children('p').stop().fadeOut();
				$(this).children('span').stop().fadeOut();
				$(this).children('em').stop().fadeIn();
			}, function () {
				$(this).css({'border-color': '#E4E1E1'});
				$(this).children('img').stop().fadeIn();
				$(this).children('p').stop().fadeIn();
				$(this).children('span').stop().fadeIn();
				$(this).children('em').stop().fadeOut();
			})
			$('.zhiduoshao .content .box:last-child').css({'margin-right': '0'});
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
			// swiper
			var mySwiper = new Swiper('.swiper-container',{
				slidesPerView : 3,
				offsetPxBefore : 2,
			})
			$('.jiebao .swiper-container .swiper-slide:last-child').css({'margin-right': '0'});
			$('.btnleft').click(function() {
				mySwiper.swipePrev();
			});
			$('.btnright').click(function() {
				mySwiper.swipeNext();
			});
			// 
			$('.tiaojian .content .box').hover(function () {
				$(this).css({'color': '#ffffff', 'background-color': '#000000', 'background-image': 'url(/static/home/img/page/benke_xuanxiao/20190226142529.png)'});
				$(this).children('a').css({'color': '#ffffff'});
				
			}, function () {
				$(this).css({'color': '#333333', 'background-color': '#F9F9F8', 'background-image': 'url(/static/home/img/page/benke_xuanxiao/20190226142517.png)'});
				$(this).children('a').css({'color': '#64ADBC'});
			})
			$('.tiaojian .content .box:nth-child(3n)').css({'margin-right': '0'});
			// 
			$('.luqu_fangshi .content .box').hover(function () {
				$(this).children('p').stop().fadeOut();
				$(this).children('.hidden').stop().fadeIn();
			}, function () {
				$(this).children('p').stop().fadeIn();
				$(this).children('.hidden').stop().fadeOut();
			})
			// 
			var boxIndex = $('.guihua .content .box');
			var spanIndex = $('.guihua .content .xian span');
			for( var i=0; i<boxIndex.length; i++ ){
				if( i%2 != 0 ){
					$('.guihua .content .box').eq(i).css({
						'bottom': '178px',
						'left': (i * 105) + 30 + 'px'
					})
				}else{
					$('.guihua .content .box').eq(i).css({
						'top': '178px',
						'left': (i * 105) + 30 + 'px'
					})
				}
			}
			$('.guihua .content .box:nth-child(2n)>span').css({
				'top': '-14px',
				'border-color': 'transparent transparent #E1E5F9 transparent'
			})
			$(window).scroll(function () {
				if( $(window).scrollTop()>=$('.guihua').offset().top - 500 ){
					spanIndex.fadeIn(500);
					for(var i=0; i<spanIndex.length; i++){
						spanIndex.eq(i).animate({'left': 105*i + 'px'}, 2000);
					}
				}
			})
			// 
			// 
			var boxIndex1 = $('.lcfw .content .box');
			var spanIndex1 = $('.lcfw .content .xian span');
			for( var i=0; i<boxIndex1.length; i++ ){
				if( i%2 != 0 ){
					$('.lcfw .content .box').eq(i).css({
						'top': '178px',
						'left': (i * 125) + 'px'
					})
				}else{
					$('.lcfw .content .box').eq(i).css({
						'bottom': '178px',
						'left': (i * 125) + 'px'
					})
				}
			}
			$('.lcfw .content .box:nth-child(2n)>span').css({
				'top': '-14px',
				'border-color': 'transparent transparent #E4F6F9 transparent'
			})
			$(window).scroll(function () {
				if( $(window).scrollTop()>=$('.lcfw').offset().top - 500 ){
					spanIndex1.fadeIn(500);
					for(var i=0; i<spanIndex.length; i++){
						spanIndex1.eq(i).animate({'left': 125*i + 'px'}, 2000);
					}
				}
			})
			// 选项卡选项
			$('.daoshi_team .count>div.t a').eq(0).attr('class', 'active fl');
			$('.daoshi_team .count .b .bBox').eq(0).css({'display': 'block'});
			$('.daoshi_team .count>div.t a').on('click', function () {
				var index = $('.daoshi_team .count>div.t a').index($(this));
				$(this).attr('class', 'fl active').siblings('a').attr('class', 'fl');
				$('.daoshi_team .count .b .bBox').eq(index).css({'display': 'block'}).siblings('.bBox').css({'display': 'none'});
			})
			$('.rightb>div.fl').on('mouseenter', function () {
				$(this).children('.hidden').stop().fadeIn();
				$(this).children('.hiddenTitle').stop().fadeOut();
			})
			$('.rightb>div.fl').on('mouseleave', function () {
				$(this).children('.hidden').stop().fadeOut();
				$(this).children('.hiddenTitle').stop().fadeIn();
			})
			// 
			$('.xuanzhuanye .content .box').hover(function () {
				$(this).children('h3').stop().fadeOut();
				$(this).children('.hidden').stop().fadeIn();
			}, function () {
				$(this).children('h3').stop().fadeIn();
				$(this).children('.hidden').stop().fadeOut();
			})
			// 背景提升项目的鼠标移入效果
			$('.bjts .box .content>div.fr>.box:nth-child(2n)').css({'margin-right': '0'});
			$('.bjts .box .content>div.fl').on('mouseenter', function () {
				$(this).children('.hidden_a').stop().fadeOut();
				$(this).children('.hidden_b').stop().fadeIn();
			})
			$('.bjts .box .content>div.fl').on('mouseleave', function () {
				$(this).children('.hidden_a').stop().fadeIn();
				$(this).children('.hidden_b').stop().fadeOut();
			})
			
			$('.bjts .box .content>div.fr>.box').on('mouseenter', function () {
				$(this).children('.hidden_a').stop().fadeOut();
				$(this).children('.hidden_b').stop().fadeIn();
			})
			$('.bjts .box .content>div.fr>.box').on('mouseleave', function () {
				$(this).children('.hidden_a').stop().fadeIn();
				$(this).children('.hidden_b').stop().fadeOut();
			})
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
			$('.shenghuof_butong .content .box>p:nth-child(2)').css({'padding-top': '20px'})
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
