<?php /*a:6:{s:74:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\science.html";i:1552975363;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1551955433;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1551670345;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1552959452;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1552979867;s:84:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_graduate.html";i:1552975275;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/science.css">
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
				<h1>美国研究生理科热门专业申请指南</h1>
				<em>专业解析&nbsp;&nbsp;用专业影响人生</em>
				<a href="javascript:;" onclick="go()">点击匹配你的心仪专业</a>
			</div>
		</div>
		
		<!-- nav -->
		<div class="bannerNav">
			<div class="gWidth1170 clearfix">
				<span class="active">录取捷报</span>
				<span>热门专业</span>
				<span>申请难点</span>
				<span>提高竞争力</span>
				<span>申请规划</span>
				<span>成功案例</span>
				<span>软性背景提升</span>
				<span>服务模式</span>
				<span>导师服务团队</span>
				<span>彬彬优势</span>
			</div>
		</div>
		<div class="navHidden"></div>
		
		<!-- 彬彬理科专业录取捷报 -->
		<div class="luquJiebao lk_index">
			<div class="gWidth1170">
				<h3 class="title">彬彬理科专业录取捷报</h3>
				<!-- content -->
				<div class="content">
					<div class="contentTop clearfix">
						<div class="box fl">
							<h4><span id="span1">100</span>%</h4>
							<em></em>
							<p>常春藤盟校申请覆盖</p>
						</div>
						<div class="box box2 fl">
							<h4><span id="span2">2000</span>+</h4>
							<em></em>
							<p>美国TOP50名校录取</p>
						</div>
						<div class="box box3 fl">
							<h4><span id="span3">99</span>%</h4>
							<em></em>
							<p>获得心仪学校offer</p>
						</div>
						<div class="box box4 fl">
							<h4><span id="span4">2.8</span>亿</h4>
							<em></em>
							<p>申请奖学金总额</p>
						</div>
					</div>
					<div class="contentBottom clearfix">
						<div class="box fl">
							<h5>加州理工学院  计算机录取</h5>
							<p class="name">姓名：J同学</p>
							<p>本科：北京外国语大学 计算机专业</p>
							<p>GPA：3.92</p>
							<p>GRE：332</p>
							<a href="javascript:;" onclick="go()">详情&gt;</a>
						</div>
						<div class="box fl">
							<h5>哥伦比亚大学 心理学录取</h5>
							<p class="name">姓名：H同学</p>
							<p>本科：波士顿大学 心理学专业</p>
							<p>GPA：3.07</p>
							<p>GRE：311</p>
							<a href="javascript:;" onclick="go()">详情&gt;</a>
						</div>
						<div class="box fl">
							<h5>约翰霍普金斯大学 统计学专业</h5>
							<p class="name">姓名：Y同学</p>
							<p>本科：埃默里大学 统计学专业</p>
							<p>GPA：3.1</p>
							<p>GRE：320</p>
							<a href="javascript:;" onclick="go()">详情&gt;</a>
						</div>
						<div class="box fl">
							<h5>加州理工学院  化学录取</h5>
							<p class="name">姓名：G同学</p>
							<p>本科：上海外国语大学  化学专业</p>
							<p>GPA：3.4</p>
							<p>GRE：319</p>
							<a href="javascript:;" onclick="go()">详情&gt;</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国研究生理科热门专业推荐 -->
		<div class="zhuanyeTuijian lk_index gWidth1170">
			<h3 class="title">美国研究生理科热门专业推荐</h3>
			<!-- content -->
			<div class="content">
				<div class="contentXx clearfix">
					<div class="Xx fl active">物理专业<span></span></div>
					<div class="Xx fl">化学专业<span></span></div>
					<div class="Xx fl">数学专业<span></span></div>
					<div class="Xx fl">生物科学专业<span></span></div>
					<div class="Xx fl">统计学专业<span></span></div>
					<div class="Xx fl">计算机专业<span></span></div>
					<div class="Xx fl">心理学专业<span></span></div>
				</div>
				<div class="xbottom">
					<div class="xbottom_box clearfix">
						<div class="btop clearfix">
							<div class="img fl">
								<img src="/static/home/img/page/yanJs_like/wuli.jpg" alt="物理专业介绍" title="物理专业介绍">
								<div class="hidden1">物理专业介绍</div>
								<div class="hidden">
									<div>
										<h4>物理专业介绍</h4>
										<p>物理学主要研究自然规律和能量与物质之间的关系，通过数学公式来解释理论并做出推测，其覆盖范围小至粒子原子的运动形式，大到天体行星和宇宙的奥秘。基本原理是一种对自然规律和世间事物的理解与总结，许多人将物理学当做学习和就职其他领域的跳板。</p>
										<a href="javascript:;" onclick="go()">马上申请</a>
									</div>
								</div>
							</div>
							<div class="fr">
								<div>
									<h5><span></span>背景要求</h5>
									<p>需具备物理、工程等专业本科背景。</p>
									<a href="javascript:;" onclick="go()">了解详情&gt;</a>
								</div>
								<div>
									<h5><span></span>就业方向</h5>
									<p>可以留在大学当教授或者进入研究机构从事科研工作。对于很多物理Ph.D.，特别是国外学位的同学来说，也有不少人选择进入公司的研发部门。</p>
								</div>
								<div>
									<h5><span></span>就业薪资</h5>
									<p>初期平均起薪约$50,803，中期的平均薪资将达到$90,575-$113,000不等。</p>
								</div>
								<a href="javascript:;" onclick="go()">了解申请难点</a>
							</div>
						</div>
						<div class="bbot clearfix">
							<h3>名校推荐</h3>
							<div class="b clearfix">
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/mashengligongdaxue.png" alt="麻省理工学院" title="麻省理工学院">
									<p>麻省理工学院</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/pulisidundaxue.jpg" alt="普林斯顿大学" title="普林斯顿大学">
									<p>普林斯顿大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/hafodaxue.jpg" alt="哈佛大学" title="哈佛大学">
									<p>哈佛大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/sitanfudfaxue.jpg" alt="斯坦福大学" title="斯坦福大学">
									<p>斯坦福大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/jiazhouligong.png" alt="加州理工大学" title="加州理工大学">
									<p>加州理工大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/kangnaierdaxue.png" alt="康奈尔大学" title="康奈尔大学">
									<p>康奈尔大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">2019美国研究生物理专业最新排名</a>
					</div>
					<div class="xbottom_box clearfix">
						<div class="btop clearfix">
							<div class="img fl">
								<img src="/static/home/img/page/yanJs_like/huaxue.jpg" alt="化学专业介绍" title="化学专业介绍">
								<div class="hidden1">化学专业介绍</div>
								<div class="hidden">
									<div>
										<h4>化学专业介绍</h4>
										<p>化学是一门研究物质的性质、组成、结构以及变化规律的基础自然科学。研究的对象涉及物质之间的相互关系，或物质和能量之间的关联。</p>
										<a href="javascript:;" onclick="go()">马上申请</a>
									</div>
								</div>
							</div>
							<div class="fr">
								<div>
									<h5><span></span>背景要求</h5>
									<p>需具备化学专业的学位，或与化学相关专业的学位，如药学、生物、医学、化学工程，材料科学与工程等专业；非化学及其相关专业的本科学位，需具备相关的前提课程和研究背景。</p>
									<a href="javascript:;" onclick="go()">了解详情&gt;</a>
								</div>
								<div>
									<h5><span></span>就业方向</h5>
									<p>化学类专业毕业生可以在科研机构或者一些组织的科研部门工作，例如化学工程、医疗保健或其他相关行业等。</p>
								</div>
								<div>
									<h5><span></span>就业薪资</h5>
									<p>平均年薪约$59,870。</p>
								</div>
								<a href="javascript:;" onclick="go()">了解申请难点</a>
							</div>
						</div>
						<div class="bbot clearfix">
							<h3>名校推荐</h3>
							<div class="b clearfix">
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/mashengligongdaxue.png" alt="麻省理工学院" title="麻省理工学院">
									<p>麻省理工学院</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/mixiegendaxue.png" alt="密歇根安娜堡分校" title="密歇根安娜堡分校">
									<p>密歇根安娜堡分校</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/jiazhoudaxuebokelifenxiao.jpg" alt="加州大学伯克利分校" title="加州大学伯克利分校">
									<p>加州大学伯克利分校</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/sitanfudfaxue.jpg" alt="斯坦福大学" title="斯坦福大学">
									<p>斯坦福大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/jiazhouligong.png" alt="加州理工大学" title="加州理工大学">
									<p>加州理工大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/xibeidaxue.png" alt="西北大学" title="西北大学">
									<p>西北大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">2019美国研究生化学专业最新排名</a>
					</div>
					<div class="xbottom_box clearfix">
						<div class="btop clearfix">
							<div class="img fl">
								<img src="/static/home/img/page/yanJs_like/shuxue.jpg" alt="数学专业介绍" title="数学专业介绍">
								<div class="hidden1">数学专业介绍</div>
								<div class="hidden">
									<div>
										<h4>数学专业介绍</h4>
										<p>数学是研究数量、结构、变化以及空间模型等概念的一门学科。透过抽象化和逻辑推理的使用，由计数、计算、量度和对物体形状及运动的观察中产生。数学的基本要素是：逻辑和直观、分析和推理、共性和个性。</p>
										<a href="javascript:;" onclick="go()">马上申请</a>
									</div>
								</div>
							</div>
							<div class="fr">
								<div>
									<h5><span></span>背景要求</h5>
									<p>数学专业需要学生具备较强的探索，推测，逻辑推理能力。</p>
									<a href="javascript:;" onclick="go()">了解详情&gt;</a>
								</div>
								<div>
									<h5><span></span>就业方向</h5>
									<p>毕业后收入较高、工作相关度高、提升较快的专业主要集中在计算机、金融、信息安全、软件工程等相关行业领域。而数学专业毕业生大多从事相关行业的技术岗位，如精算师、银行、证券业工作、程序员、数据分析师等。</p>
								</div>
								<div>
									<h5><span></span>就业薪资</h5>
									<p>平均年薪在$60,000-$110,000之间。</p>
								</div>
								<a href="javascript:;" onclick="go()">了解申请难点</a>
							</div>
						</div>
						<div class="bbot clearfix">
							<h3>名校推荐</h3>
							<div class="b clearfix">
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/mashengligongdaxue.png" alt="麻省理工学院" title="麻省理工学院">
									<p>麻省理工学院</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/pulisidundaxue.jpg" alt="普林斯顿大学" title="普林斯顿大学">
									<p>普林斯顿大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/jiazhoudaxuebokelifenxiao.jpg" alt="加州大学伯克利分校" title="加州大学伯克利分校">
									<p>加州大学伯克利分校</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/sitanfudfaxue.jpg" alt="斯坦福大学" title="斯坦福大学">
									<p>斯坦福大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/zhijiagedaxue.jpg" alt="芝加哥大学" title="芝加哥大学">
									<p>芝加哥大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/gelunbiyadaxue.png" alt="哥伦比亚大学" title="哥伦比亚大学">
									<p>哥伦比亚大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">2019美国研究生数学专业最新排名</a>
					</div>
					<div class="xbottom_box clearfix">
						<div class="btop clearfix">
							<div class="img fl">
								<img src="/static/home/img/page/yanJs_like/shengwukexue.jpg" alt="生物科学专业介绍" title="生物科学专业介绍">
								<div class="hidden1">生物科学专业介绍</div>
								<div class="hidden">
									<div>
										<h4>生物科学专业介绍</h4>
										<p>生物科学专业是自然科学的一大门类，是系统的阐述与自然生命特性有关的重大课题的科学。生命科学由经验主义出发，广泛研究生命的所有方面，包括生命起源、演化、分布、构造、发育、功能、行为、与环境的互动关系，以及生物分类学等。</p>
										<a href="javascript:;" onclick="go()">马上申请</a>
									</div>
								</div>
							</div>
							<div class="fr">
								<div>
									<h5><span></span>背景要求</h5>
									<p>对数学要求较高，比如：微积分、微分方程、线性代数等；要有物理和工程的背景；有机化学、无机化学等化学背景；生物或生命科学相关课程；计算机背景。</p>
									<a href="javascript:;" onclick="go()">了解详情&gt;</a>
								</div>
								<div>
									<h5><span></span>就业方向</h5>
									<p>生物科学专业毕业的学生可以进入高等院校、科研单位从事基础研究或者进入企业从事应用研究、高新技术开发或企业管理。</p>
								</div>
								<div>
									<h5><span></span>就业薪资</h5>
									<p>初期平均年薪在$43,916左右，中期薪资水平可达$165,210左右。</p>
								</div>
								<a href="javascript:;" onclick="go()">了解申请难点</a>
							</div>
						</div>
						<div class="bbot clearfix">
							<h3>名校推荐</h3>
							<div class="b clearfix">
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/mashengligongdaxue.png" alt="麻省理工学院" title="麻省理工学院">
									<p>麻省理工学院</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/hafodaxue.jpg" alt="哈佛大学" title="哈佛大学">
									<p>哈佛大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/jiazhoudaxuebokelifenxiao.jpg" alt="加州大学伯克利分校" title="加州大学伯克利分校">
									<p>加州大学伯克利分校</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/sitanfudfaxue.jpg" alt="斯坦福大学" title="斯坦福大学">
									<p>斯坦福大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/jiazhouligong.png" alt="加州理工大学" title="加州理工大学">
									<p>加州理工大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/yuehanhuopujinsidaxue.png" alt="约翰·霍普金斯大学" title="约翰·霍普金斯大学">
									<p>约翰·霍普金斯大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">2019美国研究生生物科学专业最新排名</a>
					</div>
					<div class="xbottom_box clearfix">
						<div class="btop clearfix">
							<div class="img fl">
								<img src="/static/home/img/page/yanJs_like/tongjixue.jpg" alt="统计学专业介绍" title="统计学专业介绍">
								<div class="hidden1">统计学专业介绍</div>
								<div class="hidden">
									<div>
										<h4>统计学专业介绍</h4>
										<p>统计学主要利用概率论建立教学模型，收集所观察系统的数据，进行量化的分析、总结，并进而进行推断和预测，为相关决策提供依据和参考。 它以数学作为基本工具，但又比数学更有实际用途。</p>
										<a href="javascript:;" onclick="go()">马上申请</a>
									</div>
								</div>
							</div>
							<div class="fr">
								<div>
									<h5><span></span>背景要求</h5>
									<p>需要具备：数学、物理、化学、计算机的基础知识。</p>
									<a href="javascript:;" onclick="go()">了解详情&gt;</a>
								</div>
								<div>
									<h5><span></span>就业方向</h5>
									<p>统计人员就业领域非常广泛，包括制造业，制药业，保险业，政府机构，咨询公司，农业研究。还有精算科学领域，统计程序，运筹学，以及数学分析领域。</p>
								</div>
								<div>
									<h5><span></span>就业薪资</h5>
									<p>平均年薪约$75,000。</p>
								</div>
								<a href="javascript:;" onclick="go()">了解申请难点</a>
							</div>
						</div>
						<div class="bbot clearfix">
							<h3>名校推荐</h3>
							<div class="b clearfix">
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/huashengdundaxue.jpg" alt="华盛顿大学" title="华盛顿大学">
									<p>华盛顿大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/hafodaxue.jpg" alt="哈佛大学" title="哈佛大学">
									<p>哈佛大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/jiazhoudaxuebokelifenxiao.jpg" alt="加州大学伯克利分校" title="加州大学伯克利分校">
									<p>加州大学伯克利分校</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/sitanfudfaxue.jpg" alt="斯坦福大学" title="斯坦福大学">
									<p>斯坦福大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/zhijiagedaxue.jpg" alt="芝加哥大学" title="芝加哥大学">
									<p>芝加哥大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/yuehanhuopujinsidaxue.png" alt="约翰·霍普金斯大学" title="约翰·霍普金斯大学">
									<p>约翰·霍普金斯大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">2019美国研究生统计学专业最新排名</a>
					</div>
					<div class="xbottom_box clearfix">
						<div class="btop clearfix">
							<div class="img fl">
								<img src="/static/home/img/page/yanJs_like/jisuanji.jpg" alt="计算机专业介绍" title="计算机专业介绍">
								<div class="hidden1">计算机专业介绍</div>
								<div class="hidden">
									<div>
										<h4>计算机专业介绍</h4>
										<p>计算机是系统性研究信息与计算的理论基础以及它们在计算机系统中如何实现与应用的实用技术的学科。它通常被形容为对那些创造、描述以及转换信息的算法处理的系统研究。</p>
										<a href="javascript:;" onclick="go()">马上申请</a>
									</div>
								</div>
							</div>
							<div class="fr">
								<div>
									<h5><span></span>背景要求</h5>
									<p>需要具有高质量的计算机方面工作经验、实习经验，或者在学校内参加过编程项目，有丰富的研究参与经历。</p>
									<a href="javascript:;" onclick="go()">了解详情&gt;</a>
								</div>
								<div>
									<h5><span></span>就业方向</h5>
									<p>高级程序员，系统分析人员，网络管理者，数据库经理，软件开发人员，金融分析人员。</p>
								</div>
								<div>
									<h5><span></span>就业薪资</h5>
									<p>平均年薪在$109,000-$161,520之间。</p>
								</div>
								<a href="javascript:;" onclick="go()">了解申请难点</a>
							</div>
						</div>
						<div class="bbot clearfix">
							<h3>名校推荐</h3>
							<div class="b clearfix">
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/mashengligongdaxue.png" alt="麻省理工学院" title="麻省理工学院">
									<p>麻省理工学院</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/kanaijimeilongdaxue.jpg" alt="卡耐基梅隆大学" title="卡耐基梅隆大学">
									<p>卡耐基梅隆大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/jiazhoudaxueluoshanjifenxiao.jpg" alt="加州大学伯克利分校" title="加州大学伯克利分校">
									<p>加州大学伯克利分校</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/yilinuoyidaxue.png" alt="伊利诺伊大学香槟分校" title="伊利诺伊大学香槟分校">
									<p>伊利诺伊大学香槟分校</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/sitanfudfaxue.jpg" alt="斯坦福大学" title="斯坦福大学">
									<p>斯坦福大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/kangnaierdaxue.png" alt="康奈尔大学" title="康奈尔大学">
									<p>康奈尔大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">2019美国研究生计算机专业最新排名</a>
					</div>
					<div class="xbottom_box clearfix">
						<div class="btop clearfix">
							<div class="img fl">
								<img src="/static/home/img/page/yanJs_like/xinlixue.jpg" alt="心理学专业介绍" title="心理学专业介绍">
								<div class="hidden1">心理学专业介绍</div>
								<div class="hidden">
									<div>
										<h4>心理学专业介绍</h4>
										<p>心理学是一个极需要理科思维的学科，统计基础是必须的，各种理论的推导都是建立在严密的逻辑推理的基础上。心理学是一个涉及面非常广的学科，主要集中在临床心理学、社会心理学、咨询心理学、教育心理学。</p>
										<a href="javascript:;" onclick="go()">马上申请</a>
									</div>
								</div>
							</div>
							<div class="fr">
								<div>
									<h5><span></span>背景要求</h5>
									<p>具备统计、数学、生物、计算机背景的申请者更有竞争力。</p>
									<a href="javascript:;" onclick="go()">了解详情&gt;</a>
								</div>
								<div>
									<h5><span></span>就业方向</h5>
									<p>除了治疗抑郁症等心理疾病，心理学人才在工商业、教育等行业中开始受到重用，以及市场营销部门、人力资源管理部门和专业心理咨询师。</p>
								</div>
								<div>
									<h5><span></span>就业薪资</h5>
									<p>平均年薪在$30,000-$150,000不等。</p>
								</div>
								<a href="javascript:;" onclick="go()">了解申请难点</a>
							</div>
						</div>
						<div class="bbot clearfix">
							<h3>名校推荐</h3>
							<div class="b clearfix">
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/jiazhoudaxueluoshanjifenxiao.jpg" alt="加州大学洛杉矶分校" title="加州大学洛杉矶分校">
									<p>加州大学洛杉矶分校</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/mixiegendaxue.png" alt="密歇根安娜堡分校" title="密歇根安娜堡分校">
									<p>密歇根安娜堡分校</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/jiazhoudaxuebokelifenxiao.jpg" alt="加州大学伯克利分校" title="加州大学伯克利分校">
									<p>加州大学伯克利分校</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/sitanfudfaxue.jpg" alt="斯坦福大学" title="斯坦福大学">
									<p>斯坦福大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/binxifanayadaxue.jpg" alt="宾夕法尼亚大学" title="宾夕法尼亚大学">
									<p>宾夕法尼亚大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_like/hafodaxue.jpg" alt="哈佛大学" title="哈佛大学">
									<p>哈佛大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">2019美国研究生心理学专业最新排名</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国研究生申请难点众多 彬彬教育帮你一一击破 -->
		<div class="jipo lk_index">
			<div class="gWidth1170">
				<h3 class="title">美国研究生申请难点众多 彬彬教育帮你一一击破</h3>
				<div class="content clearfix">
					<div class="fl">
						<div class="poa">
							<span></span>
							<h4>申请难点</h4>
							<span></span>
						</div>
						<span class="sj1"></span>
						<span class="sj2"></span>
						<ul>
							<li>国内学生无法直接获取意向院校的一手信息，只能通过官网或其他网站获取浅显的信息。国内学生缺乏与海外院校及导师沟通的技巧和经验，加上二三线城市信息资源不那么丰富，导致学生和家长无法获取最直接的信息。</li>
							<li>因中美文化不同，国内申请者无法站在申请院校的角度深刻理解录取要求。尤其因为英语非母语，往往会导致面试和文书无法体现个人能力和素质。</li>
							<li>国内申请生习惯于套用模板，或全权委托部分中介公司递交，导致申请材料雷同，影响最终录取。</li>
							<li>多数海外院校及专业依据自身特点，有自己的审核录取标准，国内学生过于模板化，导致影响录取。</li>
						</ul>
					</div>
					<div class="fr">
						<div class="poa">
							<span></span>
							<h4>彬彬击破</h4>
							<span></span>
						</div>
						<span class="sj1"></span>
						<span class="sj2"></span>
						<ul>
							<li>彬彬教育独有海外同专业导师团队，覆盖全美50州、TOP 100名校各专业，打破信息不对称，让学生及时掌握第一手信息，并为学生提供专业建议和职业发展规划。</li>
							<li>彬彬教育拥有海外精英教师团队，纯英语教学环境，一对一辅导，量身定制课程，帮助学生迅速提升语言口语能力，为美国研究生留学申请做好充分准备。</li>
							<li>名校外籍导师作为彬彬教育的核心团队，成员均来自美国TOP 20名校，修读专业为语言学、教育学等文科专业，对学生文书写作要点及注意事项具有丰富的经验和理解。拒绝模板化，为学生申请名校增光添彩。</li>
							<li>彬彬教育独有强大的教育资源和背景提升项目库，在提升硬性条件的同时，针对申请院校喜好，选择录取概率最大和最能体现学生水平的背景提升项目，让学生脱离流水线般的申请模式，拥有最个性化的个人简历！</li>
						</ul>
					</div>
					<ul>
						<li>信息不对称</li>
						<li>语言文化差异</li>
						<li>文书模板化</li>
						<li>审核标准多样化</li>
					</ul>
				</div>
				<a href="javascript:;" onclick="go()">名校录取率逐年降低 联系彬彬提高申请率</a>
			</div>
		</div>
		
		<!-- 如何提高自身竞争力 -->
		<div class="jingZl lk_index gWidth1170">
			<h3 class="title">如何提高自身竞争力</h3>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<div class="back"></div>
					<div class="text">
						<h4>· 提升GPA、GRE+TOEFL ·</h4>
						<p>GPA是最能直接体现学习能力和对专业知识把握能力的因素，GRE和TOEFL这两项标准化考试，随着考试次数限制的放宽，近年来申请人的G/T成绩也水涨船高。</p>
						<a href="javascript:;" onclick="go()">如何提高成绩</a>
					</div>
				</div>
				<div class="box fl">
					<div class="back"></div>
					<div class="text">
						<h4>· 夯实科研基础 ·</h4>
						<p>招生官更愿意招收在某些领域有过科研经历、甚至取得过一定成就，发表过高质量论文的学生，以便学生被录取后能够快速融入团队，参与研究课题。</p>
						<a href="javascript:;" onclick="go()">参加科研项目</a>
					</div>
				</div>
				<div class="box fl">
					<div class="back"></div>
					<div class="text">
						<h4>· 专业匹配度 ·</h4>
						<p>根据自身科研项目经历的优势来选择适合学校的硕士项目和方向，将会是今后在申请竞争中获得成功重要的因素之一。尽早选择自己感兴趣的领域，提前规划自己的科研方向，提升科研、实习方面的背景。</p>
						<a href="javascript:;" onclick="go()">专业申请指导</a>
					</div>
				</div>
				<div class="box fl">
					<div class="back"></div>
					<div class="text">
						<h4>· 维护良好的人际关系 ·</h4>
						<p>拓展人脉是提升自己竞争力必须注重的。好的师生关系以及和学长学姐的顺畅沟通，无论在科研背景的提成过程中，或者是选校申请、寻找推荐人等阶段，都会为申请人带来更多的机会。</p>
						<a href="javascript:;" onclick="go()">与学姐/学长沟通</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国研究生理科申请规划 -->
		<div class="likeGuihua lk_index">
			<div class="gWidth1170">
				<h3 class="title">美国研究生理科申请规划</h3>
				<!-- content -->
				<div class="content">
					<div class="cTop clearfix">
						<div class="box fl">
							<div class="img">
								<h4>大一学生</h4>
								<p>您需要准备</p>
							</div>
							<ul>
								<li><em></em>GPA</li>
								<li><em></em>英语基础学习</li>
								<li><em></em>课外活动积累</li>
							</ul>
							<a href="javascript:;" onclick="go()">我有疑问&gt;&gt;</a>
						</div>
						<img src="/static/home/img/page/yanJs_like/right.png" class="fl" alt="">
						<div class="box fl">
							<div class="img" style="background-image: url(/static/home/img/page/yanJs_like/daer.jpg);">
								<h4>大二学生</h4>
								<p>您需要准备</p>
							</div>
							<ul style="padding-left: 56px;">
								<li><em></em>GPA</li>
								<li><em></em>专业核心课程积累</li>
								<li><em></em>TOEFL备考</li>
								<li><em></em>初步了解美国院校、专业</li>
								<li><em></em>暑假可尝试初级科研、实习</li>
							</ul>
							<a href="javascript:;" onclick="go()">我有疑问&gt;&gt;</a>
						</div>
						<img src="/static/home/img/page/yanJs_like/right.png" class="fl" alt="">
						<div class="box fl">
							<div class="img" style="background-image: url(/static/home/img/page/yanJs_like/dasan.jpg);">
								<h4>大三学生</h4>
								<p>您需要准备</p>
							</div>
							<ul style="padding-left: 40px;">
								<li><em></em>GPA</li>
								<li><em></em>专业核心课程积累</li>
								<li><em></em>TOEFL/GRE备考冲刺</li>
								<li><em></em>明确申请院校、申请专业目标</li>
								<li><em></em>寒暑假展开高质量科研实习项目</li>
							</ul>
							<a href="javascript:;" onclick="go()">我有疑问&gt;&gt;</a>
						</div>
					</div>
					<div class="concc clearfix">
						<img src="/static/home/img/page/yanJs_like/bottom.png" class="fr" alt="">
					</div>
					<div class="cBottom">
						<div class="img">
							<h4 style="padding: 0;line-height: 84px;">大四学生</h4>
						</div>
						<div class="bBB">
							<div class="bBBtop clearfix">
								<h4 class="fl">您需要准备</h4>
								<div class="fl">
									<div class="tttt">
										<span style="margin-right: 112px;">9月-10月</span>
										<span style="margin-right: 66px;">11月-12月</span>
										<span style="margin-right: 50px;">次年1月-2月</span>
										<span style="margin-right: 79px;">3月-4月</span>
										<span style="margin-right: 51px;">5月-6月</span>
										<span style="margin-right: 86px;">7月</span>
										<span>8月</span>
									</div>
									<div class="bbbb clearfix">
										<ul class="fl" style="width: 93px;margin-right: 96px;">
											<li>存款证明</li>
											<li>成绩单</li>
											<li>联系推荐人</li>
										</ul>
										<ul class="fl" style="width: 103px;margin-right: 51px;">
											<li>托福/GRE刷分</li>
										</ul>
										<ul class="fl" style="width: 101px;margin-right: 51px;">
											<li>面试/套磁</li>
											<li>等待申请结果</li>
										</ul>
										<ul class="fl" style="width: 95px;margin-right: 50px;">
											<li>录取</li>
											<li>确定就读学校和专业</li>
										</ul>
										<ul class="fl" style="width: 42px;margin-right: 75px;">
											<li>签证</li>
											<li>体检</li>
										</ul>
										<ul class="fl" style="width: 65px;margin-right: 50px;">
											<li>行前准备</li>
											<li>订机票</li>
										</ul>
										<ul class="fl">
											<li>赴美入学</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="bBBbottom clearfix">
								<h4 class="fl">彬彬教育帮您</h4>
								<div class="fl">
									<ul class="fl" style="width: 139px;margin-right: 50px;">
										<li>选校</li>
										<li>文书亮点挖掘构思</li>
										<li>推荐信选择</li>
										<li>联系学校、初步套磁</li>
									</ul>
									<ul class="fl" style="width: 103px;margin-right: 51px;">
										<li>文书搞定</li>
										<li>(初稿、修改、润色、定稿)</li>
										<li>网申完成</li>
									</ul>
									<ul class="fl" style="width: 101px;margin-right: 52px;">
										<li>面试/套磁辅导</li>
										<li>补递材料</li>
										<li>跟进申请状态</li>
										<li>跟踪申请结果</li>
									</ul>
									<ul class="fl" style="width: 94px;margin-right: 50px;">
										<li>选校分析</li>
										<li>定金</li>
										<li>I-20表格申请</li>
									</ul>
									<ul class="fl" style="width: 65px;margin-right: 52px;">
										<li>指导签证</li>
										<li>指导体检</li>
									</ul>
									<ul class="fl">
										<li>行前指导</li>
									</ul>
								</div>
							</div>
							<a href="javascript:;" onclick="go()">我有疑问&gt;&gt;</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 学长/学姐说申请 -->
		<div class="shuo_sq lk_index gWidth1170">
			<h3 class="title">学长/学姐说申请</h3>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<h4>L同学</h4>
					<div>
						<p><b>本科：</b>211院校</p>
						<p><b>录取：</b>卡耐基梅隆大学</p>
					</div>
					<div>
						<h3>关于申请她说：</h3>
						<p>在大三下期，我和彬彬导师确定了方向，因为彬彬的陪伴，我在申请方面很有自信，出色的标化，完美的文书，精英的背景，不论哪一条道路，都会致胜，最终也获得了卡耐基梅隆大学的offer，彬彬让我真正的走向她之前不可想象的辉煌之路。</p>
					</div>
					<div class="anniu">
						<a href="javascript:;" onclick="go()" class="a1">向TA咨询</a>
						<a href="/success/111.html" target="_blank" class="a2">查看详情</a>
					</div>
				</div>
				<div class="box fl">
					<h4>W同学</h4>
					<div>
						<p><b>本科：</b>上海交通大学</p>
						<p><b>录取：</b>华盛顿大学圣路易斯分校</p>
					</div>
					<div>
						<h3>关于申请她说：</h3>
						<p>华大圣路易斯分校CS专业是非常抢手的热门专业，我申请的时候时间已经非常紧张了，我也没有很多的精力再去准备，在软性背景提上，彬彬教育帮我申请UCLA的CSST暑研项目，边准备变科研实习，然后补充材料，最后也是顺利的完成申请。</p>
					</div>
					<div class="anniu">
						<a href="javascript:;" onclick="go()" class="a1">向TA咨询</a>
						<a href="/success/57.html" target="_blank" class="a2">查看详情</a>
					</div>
				</div>
				<div class="box fl">
					<h4>M同学</h4>
					<div>
						<p><b>本科：</b>北京邮电大学</p>
						<p><b>录取：</b>纽约大学</p>
					</div>
					<div>
						<h3>关于申请她说：</h3>
						<p>我的托福成绩较低，且GRE还没开始备考，因此彬彬导师建议我将主要精力放在语言考试上，争取在申请开始前考出理想的GT分数。由于我当时正在实习，准备时间相对比较紧张，无法同时兼顾GRE和托福，申请之路还是非常艰难的。</p>
					</div>
					<div class="anniu">
						<a href="javascript:;" onclick="go()" class="a1">向TA咨询</a>
						<a href="/success/27.html" target="_blank" class="a2">查看详情</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 背景提升，打造专属软实力 -->
		<div class="bjts lk_index">
			<div class="gWidth1170">
				<h3 class="title">背景提升，打造专属软实力</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="box fl">
						<a href="/mxky/225.html" class="hidden1" target="_blank">麻省理工学院数学统计专业科研</a>
					</div>
					<div class="box box2 fl">
						<a href="/mxky/275.html" class="hidden1" target="_blank">麻省理工学院量子光学物理项目</a>
					</div>
					<div class="box box3 fl">
						<a href="/mxky/263.html" class="hidden1" target="_blank">卡耐基梅隆大学 计算机专业项目</a>
					</div>
					<div class="box box4 fl">
						<a href="/mxky/252.html" class="hidden1" target="_blank">哈佛大学生物医学科研</a>
					</div>
					<div class="box box5 fl">
						<a href="/mqsx/293.html" class="hidden1" target="_blank">微软 Microsoft</a>
					</div>
					<div class="box box6 fl">
						<a href="/mqsx/265.html" class="hidden1" target="_blank">德勤公司</a>
					</div>
				</div>
				<div class="anniu">
					<a href="javascript:;" onclick="go()" class="a1">快速匹配适合自己的项目</a>
					<a href="/page/polymerization.html" target="_blank" class="a2">查看更多</a>
				</div>
			</div>
		</div>
		
		<!-- 彬彬服务模式 -->
		<div class="fwms lk_index gWidth1170">
			<h3 class="title">彬彬服务模式</h3>
			<!-- contnet -->
			<div class="content clearfix">
				<div class="bigBox">
					<div class="box"><p>行业首创<br />【六位一体】<br />辅导模式</p></div>
					<span class="yuan1"></span>
					<span class="yuan2"></span>
					<span class="yuan3"></span>
					<span class="yuan4"></span>
					<span class="yuan5"></span>
					<span class="yuan6"></span>
					<div class="text1 text">
						<h3>全程咨询导师</h3>
						<p>全程申请规划、申请时间进度把控</p>
					</div>
					<div class="text2 text">
						<h3>资深流程导师</h3>
						<p>网申填写辅导、成绩认证辅导、语言成绩寄送辅导、<br />申请材料准备辅导</p>
					</div>
					<div class="text3 text">
						<h3>名校外籍导师</h3>
						<p>文书母语润色、词汇句法优化、素材结构建议</p>
					</div>
					<div class="text4 text">
						<h3>专家督导导师</h3>
						<p>跟踪学生申请进度、定期跟踪学生的申请体验、审核学生申请方案</p>
					</div>
					<div class="text5 text">
						<h3>全能主导申请师</h3>
						<p>全程申请规划、申请时间进度把控、选校定位、推荐人<br />筛选、简历咨询、文书咨询、面试辅导</p>
					</div>
					<div class="text6 text">
						<h3>海外同专业导师</h3>
						<p>职业规划咨询、选校选专业咨询建议、文书素材把关、<br />模拟面试</p>
					</div>
				</div>
			</div>
		</div>
				
		<!-- 强大的国内外导师团队 -->
		<div class="daoshi_team lk_index">
			<div class="gWidth1170">
				<!-- title -->
				<h3 class="title">强大的国内外导师团队</h3>
				<!-- count -->
				<div class="count">
					<!-- 选项 -->
					<div class="clearfix t">
						<a href="javascript:;" class="fl">全程咨询导师</a><span class="fl">|</span>
						<a href="javascript:;" class="fl">海外同专业导师</a><span class="fl">|</span>
						<a href="javascript:;" class="fl">全能主申请导师</a><span class="fl">|</span>
						<a href="javascript:;" class="fl">资深流程导师</a><span class="fl">|</span>
						<a href="javascript:;" class="fl">名校外籍文笔导师</a><span class="fl">|</span>
						<a href="javascript:;" class="fl">专家督导导师</a>
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
				
		<!-- 彬彬教育致力让每一个学生牵手世界名校 -->
		<div id="mydiv" class="lk_index" style="height: 695px;">
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
				$('.topNav').css({'position': 'static'});
				$('.abcBannav').css({'display': 'none'});
			}
			
			var nav = $('.bannerNav').offset().top;
			$gkLength = $('.lk_index').length;
			window.onscroll = function () {
				var top = document.documentElement.scrollTop || document.body.scrollTop;
				if(top>=nav){
					$('.bannerNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999'});
					$('.navHidden').css({'display': 'block'});
				}else if(top<=$('.luquJiebao').offset().top){
					$('.bannerNav').css({'position': 'static', 'top':''});
					$('.navHidden').css({'display': 'none'});
				}
				for( var i=0; i<$gkLength; i++ ){
					if( i == $gkLength - 1 ){
						if( top>=$('.lk_index').eq(i).offset().top ){
							$('.bannerNav span').removeClass('active');
							$('.bannerNav span').eq(i).addClass('active');
						}
						return;
					}
					if( top>=$('.lk_index').eq(i).offset().top && top<$('.lk_index').eq(i+1).offset().top ){
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
				var offsetTop = $('.lk_index').eq(index).offset().top;
				$('body, html').stop().animate({scrollTop: offsetTop + 0}, 1500);
			})
			// 
			$('.bannerNav div span:last-child').css({'margin-right': '0'});
			// 
			$('.luquJiebao .content .contentBottom .box:last-child').css({'margin-right': '0'});
			// 增长数字的动画
			var options = {
			  useEasing: true, 
			  useGrouping: true, 
			  separator: '', 
			  decimal: '.', 
			};
			var num1 = new CountUp("span1", 0, 100, 0, 2.5, options);
			var num2 = new CountUp("span2", 0, 2000, 0, 2.5, options);
			var num3 = new CountUp("span3", 0, 99, 0, 2.5, options);
			var num4 = new CountUp("span4", 0, 2, 0, 2.5, options);
			num1.start();
			num2.start();
			num3.start();
			num4.start();
			// 
			$('.zhuanyeTuijian .content .contentXx .Xx:last-child').css({'margin-right': '0'});
			var XuanX = $('.zhuanyeTuijian .content .contentXx .Xx');
			$('.xbottom_box').eq(0).css({'display': 'block'});
			XuanX.on('click', function () {
				var index = XuanX.index($(this));
				$(this).addClass('active').siblings('.Xx').removeClass('active');
				$('.xbottom_box').eq(index).stop().fadeIn().siblings('.xbottom_box').fadeOut();
			})
			// 
			$('.zhuanyeTuijian .content .xbottom .xbottom_box .bbot .b .box:last-child').css({'margin-right': '0'});
			// 
			var p = $('.zhuanyeTuijian .content .xbottom .xbottom_box .bbot .b .box p');
			for(var i=0; i<p.length; i++){
				if( p.eq(i).children('br').length !== 0 ){
					p.eq(i).css({'margin-bottom': '3px'})
					p.eq(i).siblings('img').css({'margin-bottom': '8px'});
				}
			}
			// 
			$('.zhuanyeTuijian .content .xbottom .xbottom_box .btop .img').hover(function () {
				$(this).children('.hidden1').stop().fadeOut();
				$(this).children('.hidden').stop().fadeIn();
			}, function () {
				$(this).children('.hidden').stop().fadeOut();
				$(this).children('.hidden1').stop().fadeIn();
			})
			//
			$('.jingZl .content .box:nth-child(2n)').css({'margin-right': '0'});
			$('.jingZl .content .box').hover(function () {
				$(this).addClass('hover');
			}, function () {
				$(this).removeClass('hover');
			})
			// 
			$('.shuo_sq .content .box:last-child').css({'margin-right': '0'});
			// 
			$('.bjts .content .box:nth-child(3n)').css({'margin-right': '0'});
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
			$(window).scroll(function () {
				if( $(window).scrollTop() + 700 >= $('#mydiv').offset().top ){
					$('#mydiv .box .dq>div').css({'background-position-x': 'right'});	 
				}
				
				if( $(window).scrollTop() + 700 < $('#mydiv').offset().top ){
					$('#mydiv .box .dq>div').css({'background-position-x': 'left'});	 
				}
			})
			// 选项卡选项
			$('.daoshi_team .count>div>a').eq(0).attr('class', 'active fl');
			$('.daoshi_team .count .b .bBox').eq(0).css({'display': 'block'});
			$('.daoshi_team .count>div>a').on('click', function () {
				var index = $('.daoshi_team .count>div>a').index($(this));
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
			$(window).scroll(function () {
				if( $(window).scrollTop() + 700 >= $('.luquJiebao').offset().top && $(window).scrollTop() < $('.zhuanyeTuijian').offset().top ){
					num1.start();
					num2.start();
					num3.start();
					num4.start();
				}else if ( $(window).scrollTop() < $('.luquJiebao').offset().top || $(window).scrollTop() >= $('.zhuanyeTuijian').offset().top ) {
					num1.reset();
					num2.reset();
					num3.reset();
					num4.reset();
				}
			})
		</script>

		<!-- 研究生表单 -->
		<!-- 浮动表单 -->
		<div class="formFd">
			<div class="gWidth1170">
				<h3>美国研究生留学VIP申请</h3>
				<input type="text" class="name" placeholder="姓名：" />
				<input type="text" class="phone" placeholder="电话：" />
				<input type="text" class="zhuanye" placeholder="申请专业">
				<button class="button">提交</button>
				<img src="/static/home/img/clear2.png" alt="">
			</div>
		</div>
		<div class="formGb"><p>美国硕士<br />VIP申请</p></div>
		
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
