<?php /*a:7:{s:75:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\transfer.html";i:1554198527;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1553677718;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1553062603;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1554184743;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_daoshi.html";i:1554198526;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1554189517;s:89:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_undergraduate.html";i:1554189591;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/transfer.css" />
	</head>
	<style type="text/css">
		.banner{background: url(/static/home/img/page/benke_zhuanxue/banner.jpg) no-repeat center center;background-size: cover;width: 100%;height: 532px;}
		.title{margin:0px 0 50px 0;font-size:38px;font-weight:bold;text-align: center;padding-top: 80px;}
		.titles{margin:0px 0 50px 0;font-size:38px;font-weight:bold;text-align: center;padding-top: 80px;}
		.anniu {position: absolute;bottom: 130px;left:32%;width: 800px;}
		.anniu img{margin-bottom:30px;}
		.anniu a {width: 272px;height:44px;text-align: center;line-height:44px;font-size: 20px;color:#7FA0D1;margin-left:180px;box-shadow:0px 2px 4px rgba(0,0,0,0.26);background: #fff;}		
		.anniu a:hover {background-color:#7F8BD1;color: #FFFFFF;}
		.bannerNav {width: 100%;height: 60px;background-color: #EEEEEE;line-height: 60px;font-size: 0;}
		.bannerNav>div {height: 60px;}
		.bannerNav span {font-size: 17px;margin-right:54px;cursor: pointer;}
		.bannerNav span.active {color:#7FA0D1;font-weight: bold;}
		.crowd li{float: left;width:212px;height:212px;border:1px solid #B6D0F6;text-align: center;margin-right: 26px;box-sizing: border-box;}
		.crowd li img{margin: 32px 0 20px 0;}
		.crowd li p{padding: 0 14px;font-size: 15px;}
		.phone{width:660px;margin:40px auto;}
		.phone a{width:272px;height:40px;background:rgba(255,255,255,1);box-shadow:0px 3px 6px rgba(0,0,0,0.23);border-radius:3px;text-align:center;line-height: 40px;display: inline-block;color: #7FA0D1;}
		.phone a:hover{background:#B6D0F6;color: #fff;}
		.english{margin-top: -130px;text-align: center;}
		.english h3 {font-size: 18px;font-weight: bold;line-height:60px;color: #fff;}
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
			<!-- 按钮 -->
			<div class="anniu clearfix">
				<img src="/static/home/img/page/benke_zhuanxue/wenzi.png" alt="" />
				<a href="javascript:;" onclick="go()" class="fl one">美国大学奖学金申请方案</a>
			</div>
		</div>
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">适合人群</span>
				<span>转学条件</span>
				<span>常见问题</span>
				<span>转学规划</span>
				<span>专业选择</span>
				<span>精彩案例</span>
				<span>导师团队</span>
				<span>背景提升</span>
				<span>服务流程</span>
				<span style="margin-right: 0px;">彬彬优势</span>
			</div>
		</div>
		
		<!--美国转学适合人群-->
		<div class="usa_zx gk_index huadou">
			<div class="title">
				美国转学适合人群
			</div>
			<div class="crowd gWidth1170">
				<ul class="clearfix">
					<li>
						<img src="/static/home/img/page/benke_zhuanxue/icon1.png" alt="" />
						<p>高考失误, 没有进入理想学校的本科在读生</p>
					</li>
					<li>
						<img src="/static/home/img/page/benke_zhuanxue/icon2.png" alt="" />
						<p>专科学生,国内续本困难重重</p>
					</li>
					<li>
						<img src="/static/home/img/page/benke_zhuanxue/icon3.png" alt="" />
						<p>在其他国家读本科,但希望能够有机会去美国学习</p>
					</li>
					<li>
						<img src="/static/home/img/page/benke_zhuanxue/icon4.png" alt="" />
						<p>本科学习一段时间后对学校或所学专业不感兴趣，想通过转学改变专业找到合适自己学习和发展的空间。</p>
					</li>
					<li style="margin-right:0px;">
						<img src="/static/home/img/page/benke_zhuanxue/icon5.png" alt="" />
						<p>新生申请入读美国大学没能一步到位，希望通过转学去自己的dream school</p>
					</li>
				</ul>
			</div>
			<div class="phone">
				<a href="javascript:;" onclick="go()" class="" style="margin-right:60px;">转学需要哪些申请材料</a>
				<a href="javascript:;" onclick="go()" class="">美国本科转学要求</a>
			</div>
		</div>
		
		<!--美国转学适合人群-->
		
		<!--美国本科转学条件-->
		<div class="xinsuan gk_index">
			<div class="title">
				美国本科转学条件
			</div>
			<div class="zhuanxue gWidth1170">
				<ul class="clearfix">
					<li>
						<img src="/static/home/img/page/benke_zhuanxue/tj1.jpg" alt="GPA要求" title="GPA要求" />
						<div class="english">
							<h3>GPA要求</h3>
						</div>
						<div class="hanhu">
							<p>所有大学对于学生的GPA非常看重，尤其是排名靠前学校更是对GPA有限制</p>
						</div>
					</li>
					<li>
						<img src="/static/home/img/page/benke_zhuanxue/tj2.jpg" alt="课程描述" title="课程描述" />
						<div class="english"><h3>课程描述</h3></div>
						<div class="hanhu">
							<p>对于目前在国内读大学，申请转学美国的学生而言这是十分重要的一项材料需要申请者提供所有想转学分的课程内容英文描述这决定了你从大几开始读</p>
						</div>
					</li>
					<li>
						<img src="/static/home/img/page/benke_zhuanxue/tj3.jpg" alt="语言成绩" title="语言成绩" />
						<div class="english"><h3>语言成绩</h3></div>
						<div class="hanhu">
							<p>国际学生除了提交托福成绩外，某些top50大学，还需要学生提交SAT成绩</p>
						</div>
					</li>
					<li style="margin-right: 0px;">
						<img src="/static/home/img/page/benke_zhuanxue/tj4.jpg" alt="推荐信" title="推荐信" />
						<div class="english"><h3>推荐信</h3></div>
						<div class="hanhu">
							<p>推荐信在申请因素中占据了一席之地。一般转学生的推荐信要求3封以上，分别是高中consular，建议高中班主任或者校长;大学consular，推荐大学系主任。专业课老师，最好选择申请专业相关的老师。</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="phone">
				<a href="javascript:;" onclick="go()" class="" style="margin-right:60px;">本科转学如何写文书</a>
				<a href="javascript:;" onclick="go()" class="">本科转学申请截止日期</a>
			</div>
		</div>
		<!--美国本科转学条件-->
		
		<!--美国本科转学常见问题-->
		<div class="common gk_index">
			<div class="title" style="margin-bottom: 30px;">
				美国本科转学常见问题
			</div>
			<div class="commons gWidth1170">
				<ul class="clearfix">
					<li>
						<div class="ones">
							<h3><em>◆</em>美国本科转学申请时间是什么时候?</h3>
							<p>一般建议提前至少一年半准备。各个学校关于本科转学申请的截止时间不同，一般转学申请的截止时间比较晚，在3月1日到4月1日之间，但部分学校是和freshman申请一样的时间。
							十二月前结束所有的考试，一月前写好PAPER和ESSAY，二月左右填好申请表，二月底将材料寄出。</p>
						</div>
						<div class="ones">
							<h3><em>◆</em>美国转学是否需要提供TOEFL成绩?</h3>
							<p>从国内去美国转学需要TOEFL成绩，美国国内转学，少部分学校在美国学习两年以上可以不提交。</p>
						</div>
						<div class="ones">
							<h3><em>◆</em>美国转学需要提交SAT成绩吗?</h3>
							<p> 已修学分<20-30, 需要已修学分>30, 大部分不需要；对于超级名校还是要考的，而且还要SAT2；基本上是已经读完大一后申请就不用考SAT了。</p>
						</div>
					</li>
					<li style="margin-left: 80px;">
						<div class="ones">
							<h3><em>◆</em>什么时候申请转学最合适？</h3>
							<p>（1）大一结束转学，适合准备充分的学生；<br />
								（2）大二结束转学，学校选择面最广；<br />
								（3）大三结束转学，损失一定学分（大部分院校转学最多只承认转两年学分）；<br />       
								（4）大四毕业转学，转第二学位。<br />
							</p>
						</div>
						<div class="ones">
							<h3><em>◆</em>美国大学转学本科阶段的GPA多少才够呢?</h3>
							<p>对于转学生本科阶段的GPA是决定录取的关键因素之一， 基本要求GPA>2.5-2.75(4分制)，奖学金要求GPA>3.5。</p>
						</div>
						<div class="ones">
							<h3><em>◆</em>美国哪些大学接受本科转学?</h3>
							<p>截止2019年1月1日，除了普林斯顿大学以外，美国USnews排名前100的其他学校全部接受本科转学。</p>
						</div>
					</li>
				</ul>
			</div>
			<a href="javascript:;" onclick="go()" class="button">更多问题在线咨询</a>
		</div>
		<!--美国本科转学常见问题-->
		<style>
			.damen{margin: 60px auto;}
			.flowtop li{float:left;width:150px;margin-left:66px;text-align: center;}
			.flowcet{margin:30px 0 30px 64px;}
			.flowcet li{float:left;width:150px;}
			.flowcet li:nth-child(odd){width:12px;height:12px;background:rgba(127,160,209,1);border-radius:50%;}
			.flowcet li:nth-child(even){width:90px;height:1px;border-bottom: 1px solid #BEBCBC;margin-top: 4px;}
			.flowbtm li{float:left;width:150px;margin-right:56px;text-align: center;}
		</style>
		
		<!--美国本科转学规划-->
		<div class="guihua gk_index">	
			<div class="title">美国本科转学规划</div>
			<div class="damen gWidth1170">		
			<div class="flowtop">
				<ul class="clearfix">
					<li style="margin-left: 92px;">
						<h3>3-6月</h3>
						<h4>参加考试</h4>
						<p>完成TOEFL、SAT<br/>等考试</p>
					</li>
					<li>
						<h3>9月</h3>
						<h4>选校准备</h4>
						<p>搜集院校信息、<br/>申请要求等材料</p>
					</li>
					<li style="margin-left: 50px;">
						<h3>次年1-3月</h3>
						<h4>跟踪申请</h4>
						<p>实时查看申请状态</p>
					</li>
					<li>
						<h3>次年6-7月</h3>
						<h4>签证准备</h4>
						<p>准备材料办理签证</p>
					</li>
					<li  style="margin-left: 50px;">
						<h3>次年9月</h3>
						<h4>准备入学</h4>
						<p>开启美好留学生活</p>
					</li>
				</ul>
			</div>
			
			<div class="flowcet">
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
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			
			<div class="flowbtm">
				<ul class="clearfix">
					<li>
						<h3>1-3月</h3>
						<h4>准备考试</h4>
						<p>收集标准化考试复习<br/>材料，加强英语学习</p>
					</li>
					<li>
						<h3>6-8月</h3>
						<h4>成绩冲高</h4>
						<p>标化成绩冲高，<br/>为申请学校做好准备</p>
					</li>
					<li>
						<h3>10-12月</h3>
						<h4>网申</h4>
						<p>登录网申系统<br />提交申请材料</p>
					</li>
					<li>
						<h3>次年3-4月</h3>
						<h4>等待录取</h4>
						<p>等待录取结果、收到<br />录取offer确定入读院校</p>
					</li>
					<li>
						<h3>次年8月</h3>
						<h4>行前准备</h4>
						<p>打包行李、购买机票</p>
					</li>
				</ul>
			</div>
			<a href="javascript:;" onclick="go()" class="button">开启转学规划</a>
			</div>
		</div>
		
		<!--美国本科转学规划-->
		
		<!--彬彬导师教你如何选专业-->
		<div class="teacher gk_index">
			<div class="title">
				彬彬导师教你如何选专业
			</div>
			<div class="zhuanxues gWidth1170">
				<ul class="clearfix">
					<li>
						<img src="/static/home/img/page/benke_zhuanxue/zy1.jpg" alt="花时间了解" title="花时间了解" />
						<div class="englishs">
							<h3>花时间了解</h3>
						</div>
						<div class="hanhus">
							对申请人来说，选择应该最适合自己的课程及专业，而不是盲目选择所谓的“最好的专业”或“最好的学校”。所以要多了解各个学院的课程，有时候本不感兴趣的专业，通过对它的了解可能会有新的看法。
							<a href="javascript:;" onclick="go()">心仪专业咨询>></a>
						</div>
					</li>
					<li>
						<img src="/static/home/img/page/benke_zhuanxue/zy2.jpg" alt="咨询“过来人”" title="咨询“过来人”" />
						<div class="englishs">
							<h3>咨询“过来人”</h3>
						</div>
						<div class="hanhus">推荐信在申请因素中占据了一席之地。一般转学生的推荐信要求3封以上，分别是高中consular，建议高中班主任或者校长;大学consular，推荐大学系主任。专业课老师，最好选择申请专业相关的老师。
							<a href="javascript:;" onclick="go()">心仪专业咨询>></a>
						</div>
					</li>
					<li>
						<img src="/static/home/img/page/benke_zhuanxue/zy3.jpg" alt="根据兴趣选择" title="根据兴趣选择" />
						<div class="englishs">
							<h3>根据兴趣选择</h3>
						</div>
						<div class="hanhus">推荐信在申请因素中占据了一席之地。一般转学生的推荐信要求3封以上，分别是高中consular，建议高中班主任或者校长;大学consular，推荐大学系主任。专业课老师，最好选择申请专业相关的老师。
							<a href="javascript:;" onclick="go()">心仪专业咨询>></a>
						</div>
					</li>
					<li style="margin-right: 0px;">
						<img src="/static/home/img/page/benke_zhuanxue/zy4.jpg" alt="双专业" title="双专业" />
						<div class="englishs">
							<h3>双专业</h3>
						</div>
						<div class="hanhus">推荐信在申请因素中占据了一席之地。一般转学生的推荐信要求3封以上，分别是高中consular，建议高中班主任或者校长;大学consular，推荐大学系主任。专业课老师，最好选择申请专业相关的老师。
							<a href="javascript:;" onclick="go()">心仪专业咨询>></a>
						</div>
					</li>
				</ul>
			</div>
			<a href="javascript:;" onclick="go()" class="button">马上申请美国本科转学</a>
		</div>
		<!--彬彬导师教你如何选专业-->
		
		<!--本科转学精彩案例-->
		<div class="cases gk_index">
			<div class="title">
				本科转学精彩案例
			</div>
			<div class="case gWidth1170">
				 <ul class="clearfix">
				 	<li>
				 		<img src="/static/home/img/page/benke_zhuanxue/al1.jpg" alt="Y同学" title="Y同学"/>
				 		<div class="content">
				 			<p>姓名：Y同学</p>
				 			<p>就读院校：北京邮电大学</p>
				 			<p>录取院校：山麓及迪安萨社区大学</p>
				 			<p>学校类型:综合大学</p>
				 			<p>语言成绩:TOEFL 110+，GPA 3.8+</p>
				 			<a href="javascript:;" onclick="go()">查看详情>></a>
				 		</div>
				 	</li>
				 	<li>
				 		<img src="/static/home/img/page/benke_zhuanxue/al2.jpg" alt="夏同学" title="夏同学"/>
				 		<div class="content">
				 			<p>姓名：夏同学</p>
				 			<p>就读院校：帕洛玛学院</p>
				 			<p>转入学校：芝加哥大学</p>
				 			<p>学校类型：综合性大学</p>
				 			<p>标化成绩：TOEFL 105，SAT 1380，GPA 3.7</p>
				 			<a href="javascript:;" onclick="go()">查看详情>></a>
				 		</div>
				 	</li>
				 	<li style="margin-right: 0px;">
				 		<img src="/static/home/img/page/benke_zhuanxue/al3.jpg" alt="樊同学" title="樊同学"/>
				 		<div class="content">
				 			<p>姓名：樊同学</p>
				 			<p>就读学校：贝尔维社区大学</p>
				 			<p>转入学校：密歇根大学安娜堡分校</p>
				 			<p>学校类型：综合性大学</p>
				 			<p>标化成绩：TOEFL 105，GPA 3.8</p>
				 			<a href="javascript:;" onclick="go()">查看详情>></a>
				 		</div>
				 	</li>
				 </ul>
			</div>
			<div class="phone">
				<a href="javascript:;" onclick="go()" class="" style="margin-right:60px;">查看更多精彩案例</a>
				<a href="javascript:;" onclick="go()" class="">马上申请美国本科转学</a>
			</div>
		</div>
		<!--本科转学精彩案例-->
		
		<style type="text/css">
			.shows{margin-top: -120px;text-align: center;}
			.shows h3{color: #fff;font-size: 20px;}
			.shows1{position:absolute;top:0px;left: 0px;text-align: center;color: #fff;width:364px;height:224px;background:rgba(0,0,0,.5);display:none;}
			.shows1 h3{font-size:18px;font-weight:bold;margin-top:60px;}
			.shows1 p{font-size:14px;font-weight:400;margin:40px 30px;text-align:left;}
			.shows1 a{width:104px;height:30px;border:1px solid rgba(255,255,255,1);text-align: center;line-height: 30px;border-radius:3px;color: #fff;margin: 20px auto;}
			.item li{width:364px;height:224px;float: left;margin:30px 38px 0 0;position: relative;}
			.item li img{width: 100%;height: 100%;}
		</style>
	<!-- 强大的国内外导师团队 -->
	<div class="daoshi_team gk_index">
		<!-- 导师 -->
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
		
		
		<!--选择正确的背景提升 距离名校更近一步-->
		<div class="hoist gk_index">
			<div class="title">
				选择正确的背景提升 距离名校更近一步
			</div>
			<div class="item gWidth1170">
				<ul class="clearfix">
					<li>
						<img src="/static/home/img/page/benke_zhuanxue/tu1.jpg" alt="哈佛大学经济学科研项目" title="哈佛大学经济学科研项目" />
						<div class="shows">
							<h3>哈佛大学经济学科研项目</h3>
						</div>
						<div class="shows1">
							<p>面向对象：欲申请美国常青藤名校经济学、金融相关专业的高中生、大学生<br />科研时间：寒假，暑假，每期时间长度为3—4周；具体情况根据学生面试情况由美方进行调整</p>
							<a href="/mxky/244.html" target="_blank">查看详情</a>
						</div>
					</li>
					<li>
						<img src="/static/home/img/page/benke_zhuanxue/tu2.jpg" alt="波士顿大学音乐科研项目" title="波士顿大学音乐科研项目" />
						<div class="shows">
							<h3>波士顿大学音乐科研项目</h3>
						</div>
						<div class="shows1">
							<p>面向对象：欲申请美国名校乐器表演，作曲，音乐学，音乐教育等专业的高中生、大学生<br />科研时间：寒暑假，具体情况根据学生情况由美方进行调整</p>
							<a href="/mxky/236.html" target="_blank">查看详情</a>
						</div>
					</li>
					<li style="margin-right: 0px;">
						<img src="/static/home/img/page/benke_zhuanxue/tu3.jpg" alt="麻省理工学院建筑设计与城市规划科研" title="麻省理工学院建筑设计与城市规划科研" />
						<div class="shows" style="margin-top:-140px;">
							<h3>麻省理工学院<br />建筑设计与城市规划科研</h3>
						</div>
						<div class="shows1">
							<p>面向对象：欲申请美国常青藤名校建筑设计、城市设计、景观设计等设计类相关专业的高中生、大学生<br />科研时间：寒假，暑假，每期时间长度为3-4周</p>
							<a href="/mxky/209.html" target="_blank">查看详情</a>
						</div>
					</li>
					<li>
						<img src="/static/home/img/page/benke_zhuanxue/tu4.jpg" alt="微软 Microsoft" title="微软 Microsoft" />
						<div class="shows">
							<h3>微软 Microsoft</h3>
						</div>
						<div class="shows1">
							<p>面向对象：申请海外计算机科学、计算机工程、软件等相关研究生专业的学生<br />科研时间：全年接受报名，实习时间2个月以上</p>
							<a href="/mqsx/293.html" target="_blank">查看详情</a>
						</div>
					</li>
					<li>
						<img src="/static/home/img/page/benke_zhuanxue/tu5.jpg" alt="贝克麦坚时（Baker & McKenzie）" title="贝克麦坚时（Baker & McKenzie）" />
						<div class="shows" style="margin-top:-140px;">
							<h3>贝克麦坚时<br />（Baker & McKenzie）</h3>
						</div>
						<div class="shows1">
							<p>面向对象：法律相关专业的学生<br />科研时间：全年接受报名，实习时间2个月以上</p>
							<a href="/mqsx/283.html" target="_blank">查看详情</a>
						</div>
					</li>
					<li  style="margin-right: 0px;">
						<img src="/static/home/img/page/benke_zhuanxue/tu6.jpg" alt="普华永道（审计方向）" title="普华永道（审计方向）" />
						<div class="shows">
							<div class="disa">
								<h3>普华永道（审计方向）</h3>	
							</div>
						</div>
						<div class="shows1">
							<p>面向对象：申请海外会计、审计及财务管理等相关研究生专业的本科生<br/>科研时间：Rolling招生，实习期1-2个月</p>
							<a href="/mqsx/259.html" target="_blank">查看详情</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!--选择正确的背景提升 距离名校更近一步-->
		
		<div class="scheme gk_index"><br />
			<div class="titles" style="padding-top: 30px;">美国大学奖学金申请方案</div>
			<div class="gWidth1170 fan">
				<div class="plan_top">
					<ul class="clearfix">
						<li>
							<h3>整体规划</h3>
							<p>与学生初次沟通<br />为学生制定整体留学申<br/>请规划方案</p>
							<div class="triangle_border_down"></div>
						</li>
						<li>
							<h3>学术背景提升指导</h3>
							<p>根据学生目前绩点<br />为学生制定接下来的选<br/>课战略</p>
							<div class="triangle_border_down"></div>
						</li>
						<li>
							<h3>学校选定</h3>
							<p>根据学生背景情况<br />和未来职业发展预期<br />选择申请学校</p>
							<div class="triangle_border_down"></div>
						</li>
						<li>
							<h3>网上申请</h3>
							<p>将所有学生的相关信息<br />准确提供给申请学校</p>
							<div class="triangle_border_down"></div>
						</li>
						<li style="margin-right: 0px;">
							<h3>签证及行前准备</h3>
							<p>指导学生填写签证申请 <br/>在机票、住宿方面进行指导</p>
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
							<h3>专业定位</h3>
							<p>根据学生背景情况和未<br />来发展预期 选择适合的<br />申请专业</p>
						</li>
						<li>
							<div class="triangle_border_up"></div>
							<h3>科研实习指导</h3>
							<p>为学生选择合适的科研<br />实习项目 全程指导高效实习</p>
						</li>
						<li>
							<div class="triangle_border_up"></div>
							<h3>文书创作</h3>
							<p>根据学生过往经历深度<br />挖掘背景 写出特色的申<br />请文书</p>
						</li>
						<li>
							<div class="triangle_border_up"></div>
							<h3>套磁面试辅导</h3>
							<p>为学生的面试提供指导<br />和帮助</p>
						</li>
					</ul>
				</div>
				<a href="javascript:;" onclick="go()" style="margin-top: 50px;" class="button">量身定制留学方案</a>
			</div>
		</div>
		<style>
		.triangle_border_up { width: 0;height: 0;border-width: 0 10px 10px;border-style: solid;border-color: transparent transparent #D4E3F9;margin:0px auto;position: relative;bottom: 10px;}
		.triangle_border_down {width: 0;height: 0;border-width: 10px 10px 0;border-style: solid; border-color: #D4E3F9 transparent transparent;margin:40px auto;position: relative;}
		.plan_cet{margin:40px 0 0 88px;}
		.plan_cet li:nth-child(even){width: 152px;height:1px;border-top: 1px solid #BEBCBC;    margin-top: 6px;}
		.plan_cet li:nth-child(odd){width:12px;height:12px;background:rgba(127,139,209,1);border-radius:50%;}
		.plan_cet li{float: left;}
		.plan_btm{margin: 30px 0 0 22px;}
		.plan_btm li{float: left;width:180px;height:125px;background:#D4E3F9;border-radius:5px;margin-left: 66px;text-align: center;}
		.plan_btm li h3{margin:0px 0 6px 0;font-size: 18px;}   
		.plan_top li{float: left;width:180px;height:125px;background:#D4E3F9;border-radius:5px;margin-right:66px;text-align: center;}
		.plan_top li h3{font-size: 18px;margin: 14px 0 6px 0;}
		.plan_top li p{font-size:15px;height:40px;}
		.scheme{width:100%;height:640px;background: url(/static/home/img/page/benke_jiangxuejin/beijing-1.jpg) no-repeat center center;background-size:cover;margin-top: 90px;}
		/* 彬彬导师团队 */
		.daoshi_team{
			width: 100%;
			height: 825px;
			background-color: #F6F6F6;
			overflow: hidden;
			margin-top: 90px;
		}
		.daoshi_team h3.title{
			padding-top: 79px;
		}
		
		.daoshi_team .count>div.t{
			font-size: 16px;
			width: 912px;
			margin: 0 auto;
			margin-bottom: 28px;
		}
		.daoshi_team .count>div.t span{
			padding: 0 25px;
			color: #707070;
		}
		.daoshi_team .count>div.t a{
			color: #232426;
			padding-bottom: 10px;
		}
		.daoshi_team .count>div.t a:hover{
			color: #F71E35;
		}
		.daoshi_team .count>div.t a.active{
			color: #F71E35;
			border-bottom: 2px solid #F71E35;
		}
		
		.daoshi_team .count>div.b .bBox{
			display: none;
		}
		.daoshi_team .count>div.b .leftb{
			margin-top: 50px;
		}
		.daoshi_team .count>div.b .leftb h3{
			font-size: 30px;
			color: #333333;
			font-weight: 400;
			margin-bottom: 6px;
		}
		.daoshi_team .count>div.b .leftb p{
			font-size: 24px;
			color: #333333;
			opacity: 0.6;
			filter:alpha(opacity=60);
			margin-bottom: 23px;
		}
		.daoshi_team .count>div.b .leftb span{
			width: 72px;
			height: 4px;
			background-color: #454545;
			opacity: 0.8;
			filter:alpha(opacity=80);
			display: block;
			margin-bottom: 32px;
		}
		.daoshi_team .count>div.b .leftb em{
			width: 367px;
			display: block;
			font-size: 15px;
			color: #333333;
			line-height: 24px;
			margin-bottom: 50px;
		}
		.daoshi_team .count>div.b .leftb div.bBtn a{
			width: 154px;
			height: 34px;
			border: 1px solid #333333;
			line-height: 34px;
			font-size: 16px;
			text-align: center;
			border-radius: 5px;
			margin-right: 28px;
		}
		.daoshi_team .count>div.b .leftb div.bBtn a:hover{
			color: #fff;
			border-color: #F71E35;
			background-color: #F71E35;
		}
		
		.daoshi_team .count>div.b .rightb{
			width: 716px;
		}
		.daoshi_team .count>div.b .rightb>div.fl{
			width: 220px;
			height: 232px;
			border-radius: 5px;
			overflow: hidden;
			position: relative;
			box-shadow:0px 3px 6px rgba(0,0,0,0.16);
			margin-left: 18px;
			margin-bottom: 20px;
		}
		.daoshi_team .count>div.b .rightb>div.fl img{
			width: 100%;
			height: 100%;
		}
		.daoshi_team .count>div.b .rightb>div.fl .hidden{
			width: 100%;
			height: 100%;
			text-align: center;
			background-color: rgba(0,0,0,0.46);
			border-radius: 5px;
			position: absolute;
			left: 0;
			bottom: 0;
			display: none;
		}
		.daoshi_team .count>div.b .rightb>div.fl .hidden h3{
			font-size: 22px;
			color: #fff;
			font-weight: 400;
			margin-top: 31px;
			margin-bottom: 15px;
		}
		.daoshi_team .count>div.b .rightb>div.fl .hidden span{
			width: 40px;
			height: 1px;
			background-color: #fff;
			display: block;
			margin: 0 auto;
			margin-bottom: 21px;
			opacity: 0.8;
			filter:alpha(opacity=80);
		}
		.daoshi_team .count>div.b .rightb>div.fl .hidden p{
			color: #fff;
			font-size: 14px;
			line-height: 24px;
			margin-bottom: 22px;
		}
		.daoshi_team .count>div.b .rightb>div.fl .hidden a{
			font-size: 14px;
			color: #fff;
			width: 98px;
			height: 28px;
			border: 1px solid #fff;
			text-align: center;
			line-height: 28px;
			border-radius: 5px;
			display: block;
			margin: 0 auto;
		}
		.daoshi_team .count>div.b .rightb>div.fl .hidden a:hover{
			color: #fff;
			border-color: #F71E35;
			background-color: #F71E35;
		}
		.daoshi_team .count>div.b .rightb>div.fl .hiddenTitle{
			width: 100%;
			height: 52px;
			background-color: rgba(0,0,0,0.46);
			text-align: center;
			line-height: 52px;
			font-size: 22px;
			color: #fff;
			position: absolute;
			bottom: 0;
			left: 0;
		}
			.content{margin: 24px 0 0 38px;}
			.content p{margin-top:4px;height:22px;overflow: hidden;}
			.content a{color: #7FA0D1;text-align: right;margin-top: 16px;margin-right:30px;}
			.content a:hover{text-decoration: underline;}
			.case li {float: left;width:352px;height:382px;background:rgba(255,255,255,1);box-shadow:0px 2px 4px rgba(0,0,0,0.13);border-radius:3px;margin-right:56px;}
			.teacher{width:100%;height:574px;background: #F6F6F6;}
			.zhuanxues li{float: left;width:272px;height:212px;margin-right: 26px;box-sizing: border-box;position: relative;}
			.guihua{width:100%;height:623px;}
			.button:hover {background: #D4E3F9;color: #fff;}
			.button {
			    width: 272px;
			    height: 40px;
			    background: #fff;
			    border-radius: 3px;
			    color:#7FA0D1;
			    margin: 60px auto auto auto;
			    text-align: center;
			    line-height: 40px;
			    box-shadow: 0px 3px 6px rgba(0,0,0,0.23);
			}
			.ones{margin-top:40px;}
			.ones h3{font-size: 18px;margin-bottom: 10px;}
			.ones h3 em{color: #7FA0D1;display: inline-block;margin-right: 6px;}
			.ones p{font-size: 15px;line-height: 22px;margin-left: 16px;}
			.commons li{width:518px;float:left;}
			.common{width:100%;height:755px;background:url(/static/home/img/page/benke_zhuanxue/beijing1.jpg) no-repeat center center;background-size:cover;margin-top: 60px;}
			.hanhu{width:100%;height:100%;background:rgba(0,0,0,.5);position: absolute;top: 0px;left: 0px;color: #fff;display: none;text-align: center;}
			.hanhu:before{content: '';width: 0;height: 100%;display: inline-block;vertical-align: middle;}
			.hanhu p{display: inline-block;vertical-align: middle;width: 232px;text-align: left;}
			.xinsuan{height:500px;}
			.zhuanxue{height:206px;}
			.zhuanxue li{float: left;margin-right: 26px;position: relative;height: 192px;width: 272px;}
			.zhuanxue li img{width:272px;height:192px;}
			.englishs{margin-top: -130px;text-align: center;}
			.englishs h3 {font-size: 18px;font-weight: bold;line-height: 30px; color: #fff;}
			.hanhus{width:232px;height:198px;background:rgba(0,0,0,.5);position: absolute;top: 0px;left: 0px;color: #fff;padding:14px 20px 0 20px;display: none;}
			.hanhus a{color: #fff;text-align: right;margin-top:16px;text-decoration:underline;}
		</style>
		<div id="mydiv" class="ys_index gk_index" style="height:588px;">
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
				$('body, html').stop().animate({scrollTop: offsetTop + 50}, 1500);
			})
		$('.zhuanxue li').hover(function(){
			$(this).children('.english').stop().fadeOut();
			$(this).children('.hanhu').stop().fadeIn();
			}, function (){
			$(this).children('.hanhu').stop().fadeOut();
			$(this).children('.english').stop().fadeIn();
		});
		$('.zhuanxues li').hover(function(){
			$(this).children('.englishs').stop().fadeOut();
			$(this).children('.hanhus').stop().fadeIn();
			}, function (){
			$(this).children('.hanhus').stop().fadeOut();
			$(this).children('.englishs').stop().fadeIn();
		});
		
	$('.tbox').on('click','a',function(e){
		$(this).addClass('on').siblings().removeClass('on');
		$('.bBox').eq($(this).index()).addClass('on').siblings().removeClass('on');
		console.log($('.bBox').eq($(this).index()).length);
	});
	// 背景提升项目的鼠标移入效果
	$('.rightb .fl').hover(function(){
		$(this).children('.hiddenTitle').stop().fadeOut();
		$(this).children('.hidden').stop().fadeIn();
		}, function (){
		$(this).children('.hidden').stop().fadeOut();
		$(this).children('.hiddenTitle').stop().fadeIn();
	});
	$('.item li').hover(function(){
			$(this).children('.shows').stop().fadeOut();
			$(this).children('.shows1').stop().fadeIn();
			}, function (){
			$(this).children('.shows1').stop().fadeOut();
			$(this).children('.shows').stop().fadeIn();
		});
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
	</script>

	<style>
		.formFd button{margin: 0;color: #333333;}
		.formFd input{margin-top: 0;margin-bottom: 0;}
	</style>

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
