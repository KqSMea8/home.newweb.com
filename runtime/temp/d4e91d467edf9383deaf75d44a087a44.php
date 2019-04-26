<?php /*a:6:{s:76:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\community.html";i:1552974967;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1551955433;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1551670345;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1552959452;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1552966128;s:89:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_undergraduate.html";i:1552974870;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/community.css">
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
				<h1>美国社区大学  通向美国名校的捷径</h1>
				<h3>彬彬教育 让每一个学生都能牵手名校</h3>
				<a href="javascript:;" onclick="go()">立即获取专属申请方案</a>
			</div>
		</div>
		
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">社区大学简介</span>
				<span>社区大学特色</span>
				<span>适合人群</span>
				<span>明星校友</span>
				<span>最新排名</span>
				<span>精彩案例</span>
				<span>费用解读</span>
				<span>申请条件流程</span>
				<span>导师团队</span>
				<span>背景提升</span>
				<span>彬彬优势</span>
			</div>
		</div>
		<div class="navHidden"></div>
		
		<!-- 美国社区大学简介 -->
		<div class="daxue_jianjie sq_index gWidth1170">
			<h3 class="title">美国社区大学简介</h3>
			<!-- content -->
			<div class="content clearfix">
				<img src="/static/home/img/page/shequ_daxue/sq1.jpg" class="fl" alt="美国社区大学简介" title="美国社区大学简介">
				<div class="fr">
					<p>美国社区大学（Community College）是美国本科教育类型的一种，两年制院校，为学生提供本科第一年和第二年的通识教育。课程设置分学术性和实用性，两年课程结束之后学校为学生提供副学士学位。学生通过社区大学完成两年的课程后，可转入美国综合性大学完成后两年的专业课程，最后拿到学士学位。借社区大学作为跳板，“逆袭”名校之路，被称为就读美国名校的最佳途径。</p>
					<a href="javascript:;" onclick="go()">马上申请社区大学&gt;&gt;</a>
				</div>
			</div>
		</div>
		
		<!-- 美国社区大学五大特色 -->
		<div class="tese sq_index">
			<div class="box gWidth1170">
				<!-- title -->
				<h3 class="title">美国社区大学五大特色</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="fl">
						<img src="/static/home/img/page/shequ_daxue/ts1.jpg" alt="进入美国名校的“桥梁”" title="进入美国名校的“桥梁”">
						<span class="hidden_a"><div><span class="shequImg3 icon1"></span><p>进入美国名校的“桥梁”</p></div></span>
						<div class="hidden_b">
							<div class="juzhong">
								<p>美国两年制社区大学和四年制大学实行“2+2”转学制度，大多数社区大学和四年制大学签有转学协议，从而确保社区大学的学分可以在四年制学位课程中得到承认。</p>
								<a href="javascript:;" onclick="go()">查看详情</a>
							</div>
						</div>
					</div>
					<div class="fr">
						<div class="box fl">
							<img src="/static/home/img/page/shequ_daxue/ts2.jpg" alt="学费低，资金担保低" title="学费低，资金担保低">
							<span class="hidden_a"><div><span class="shequImg3 icon2"></span><p>学费低，资金担保低</p></div></span>
							<div class="hidden_b">
								<div class="juzhong">
									<p>社区大学每年学费在5000美元左右，而美国公立大学学费每年一般在2万美元左右，私立大学每年学费在3.5万美元左右。</p>
									<a href="javascript:;" onclick="go()">查看详情</a>
								</div>
							</div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/shequ_daxue/ts3.jpg" alt="小班授课，教授专职教学" title="小班授课，教授专职教学">
							<span class="hidden_a"><div><span class="shequImg3 icon3"></span><p>小班授课，教授专职教学</p></div></span>
							<div class="hidden_b">
								<div class="juzhong">
									<p>社区大学提供小班教学，平均每班人数少于30人，并且所有教师专职教学，不会出现综合性大学研究生助教上课的情况。社区大学课程以通识教育教育为主，重点在于帮助每一位学生。</p>
									<a href="javascript:;" onclick="go()">查看详情</a>
								</div>
							</div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/shequ_daxue/ts4.jpg" alt="入学门槛低" title="入学门槛低">
							<span class="hidden_a"><div><span class="shequImg3 icon4"></span><p>入学门槛低</p></div></span>
							<div class="hidden_b">
								<div class="juzhong">
									<p>社区大学一般都提供专门的ESL语言培训，所以学生申请时不用提供托福和SAT成绩。学生入学后可进入ESL英语培训中心参加英语培训。</p>
									<a href="javascript:;" onclick="go()">查看详情</a>
								</div>
							</div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/shequ_daxue/ts5.jpg" alt="入学灵活，申请时间短" title="入学灵活，申请时间短">
							<span class="hidden_a"><div><span class="shequImg3 icon5"></span><p>入学灵活，申请时间短</p></div></span>
							<div class="hidden_b">
								<div class="juzhong">
									<p>入读社区大学专业课程，一般可9月份、1月份入学，如果需先参加ESL英语培训，则只要ESL有开课，就可以申请入学。和四年制大学需提前9－12个月申请不同，社区大学一般3－5个月就可以办理完申请、签证和入学的全部手续，为广大学生和家长节省了大量宝贵时间。</p>
									<a href="javascript:;" onclick="go()">查看详情</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a href="javascript:;" onclick="go()">我要申请美国社区大学</a>
			</div>
		</div>
		
		<!-- 美国社区大学适合人群 -->
		<div class="heshi_renqun sq_index gWidth1170">
			<h3 class="title">美国社区大学适合人群</h3>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<span class="shequImg rq1"></span>
					<!-- <img src="/static/home/img/page/shequ_daxue/rq1.png" alt=""> -->
					<p>9-11年级在读学生</p>
				</div>
				<div class="box fl">
					<span class="shequImg rq2"></span>
					<!-- <img src="/static/home/img/page/shequ_daxue/rq2.png" alt=""> -->
					<p>工薪阶层家庭并有留学想法的学生</p>
				</div>
				<div class="box fl">
					<span class="shequImg rq3"></span>
					<!-- <img src="/static/home/img/page/shequ_daxue/rq3.png" alt=""> -->
					<p>喜欢小班制授课的学生</p>
				</div>
				<div class="box fl">
					<span class="shequImg rq4"></span>
					<!-- <img src="/static/home/img/page/shequ_daxue/rq4.png" alt=""> -->
					<p>高考成绩不理想但有梦想的学生</p>
				</div>
				<div class="box fl">
					<span class="shequImg rq5"></span>
					<!-- <img src="/static/home/img/page/shequ_daxue/rq5.png" alt=""> -->
					<p>已就读国内大学但有出国想法的学生</p>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">点击匹配美国社区大学</a>
		</div>
		
		<!-- 美国社区大学名人堂 -->
		<div class="mingrenTang sq_index gWidth1170">
			<h3 class="title">美国社区大学名人堂</h3>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="/static/home/img/page/shequ_daxue/mrt1.jpg" alt="Walt Disney" title="Walt Disney">
						<h4>Walt Disney</h4>
						<p>迪士尼公司创始人</p>
					</div>
					<div class="swiper-slide">
						<img src="/static/home/img/page/shequ_daxue/mrt2.jpg" alt="Steve Jobs" title="Steve Jobs">
						<h4>Steve Jobs</h4>
						<p>苹果公司创始人</p>
					</div>
					<div class="swiper-slide">
						<img src="/static/home/img/page/shequ_daxue/mrt3.jpg" alt="Richard Carmona" title="Richard Carmona">
						<h4>Richard Carmona</h4>
						<p>前美国卫生部长</p>
					</div>
					<div class="swiper-slide">
						<img src="/static/home/img/page/shequ_daxue/mrt4.jpg" alt="Clinton Eastwood" title="Clinton Eastwood">
						<h4>Clinton Eastwood</h4>
						<p>美国著名电影演员、导演、制片人</p>
					</div>
					<div class="swiper-slide">
						<img src="/static/home/img/page/shequ_daxue/mrt5.jpg" alt="Arnold Schwarzenegger" title="Arnold Schwarzenegger">
						<h4>Arnold Schwarzenegger</h4>
						<p>国际巨星 息影后成为美国加州州长</p>
					</div>
					<div class="swiper-slide">
						<img src="/static/home/img/page/shequ_daxue/mrt6.jpg" alt="Eileen Marie Collins" title="Eileen Marie Collins">
						<h4>Eileen Marie Collins</h4>
						<p>史上第一位女性航天飞机指挥官</p>
					</div>
					<div class="swiper-slide">
						<img src="/static/home/img/page/shequ_daxue/mrt7.jpg" alt="George Lucas" title="George Lucas">
						<h4>George Lucas</h4>
						<p>《星球大战》电影系列制片人兼导演</p>
					</div>
				</div>
			</div>
			<div class="btnleft btn"><img src="/static/home/img/page/shequ_daxue/zuo.png" alt=""></div>
			<div class="btnright btn"><img src="/static/home/img/page/shequ_daxue/you.png" alt=""></div>
			<a href="javascript:;" onclick="go()">查看更多明星校友</a>
		</div>
		
		<!-- 美国社区大学TOP 10排名榜 -->
		<div class="topTen sq_index">
			<div class="gWidth1170">
				<h3 class="title">美国社区大学TOP 10排名榜</h3>
				<div class="content">
					<table>
						<tr><th>排名</th><th>学校名称</th><th>学校英文名称</th><th>可转入大学</th><th>我要申请</th></tr>
						<tr><td>1</td><td>圣马特奥社区学院</td><td>College of San Mateo</td><td>美国加州大学</td><td><a onclick="go()">马上申请</a></td></tr>
						<tr><td>2</td><td>圣莫尼卡学院</td><td>Santa Monica College</td><td>加利福尼亚大学<br />加州州立大学</td><td><a onclick="go()">马上申请</a></td></tr>
						<tr><td>3</td><td>岱伯洛谷学院</td><td>Diablo Valley College</td><td>美国加州大学</td><td><a onclick="go()">马上申请</a></td></tr>
						<tr><td>4</td><td>美国山麓-迪安萨社区学院</td><td>Foothill-De Anza Community College</td><td>美国加州大学<br />斯坦福大学</td><td><a onclick="go()">马上申请</a></td></tr>
						<tr><td>5</td><td>圣芭芭拉城市学院</td><td>Santa Barbara City College</td><td>美国加州大学<br />耶鲁大学</td><td><a onclick="go()">马上申请</a></td></tr>
						<tr><td>6</td><td>肯尼亚达学院</td><td>Canada College</td><td>美国加州大学</td><td><a onclick="go()">马上申请</a></td></tr>
						<tr><td>7</td><td>尔湾社区学院</td><td>Irvine Valley College</td><td>美国加州大学</td><td><a onclick="go()">马上申请</a></td></tr>
						<tr><td>8</td><td>奥洛尼学院</td><td>Ohlone College</td><td>加州州立大学</td><td><a onclick="go()">马上申请</a></td></tr>
						<tr><td>9</td><td>帕洛玛学院</td><td>Palomar College</td><td>美国加州大学</td><td><a onclick="go()">马上申请</a></td></tr>
						<tr><td>10</td><td>米拉科斯达学院</td><td>Mira Costa College</td><td>圣地亚哥大学<br />圣地亚哥州立大学</td><td><a onclick="go()">马上申请</a></td></tr>
					</table>
				</div>
				<a href="javascript:;" onclick="go()">马上申请，离名校更近一步</a>
			</div>
		</div>
		
		<!-- 从美国社区大学升入名校精彩案例 -->
		<div class="anli sq_index gWidth1170">
			<h3 class="title">从美国社区大学升入名校精彩案例</h3>
			<div class="swiper-container2">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<h3>游戏王逆袭山麓及迪安萨社区大学</h3>
						<div>
							<p><b>姓名：</b>Y同学</p>
							<p><b>录取院校：</b>山麓及迪安萨社区大学</p>
							<p><b>升入院校：</b>加州大学伯克利分校</p>
						</div>
						<h4>案例解析：</h4>
						<p>郑同学非常爱玩游戏，学习成绩不是很如意。跟着兴趣走最后成功进入山麓及迪安萨社区大学，并且两年后顺利进入加利福尼亚大学伯克利分校。</p>
						<div class="anniu">
							<a href="javascript:;" onclick="go()">向TA咨询</a>
							<a href="/studentstory/765.html" target="_blank" class="a1">查看详情</a>
						</div>
					</div>
					<div class="swiper-slide">
						<h3>远离高考压力 选择美国留学</h3>
						<div>
							<p><b>姓名：</b>李同学</p>
							<p><b>录取院校：</b>海蓝恩社区学院</p>
							<p><b>升入院校：</b>东华盛顿大学</p>
						</div>
						<h4>案例解析：</h4>
						<p>在二零一七年六月份莘莘学子挤在高考独木桥上的时候，李同学远离高考的压力，计划远赴美国，开辟自己的新天地。先获得海蓝恩社区学院的录取通知书，入校后参加了HCC与东华盛顿大学合作开设的“2+2+1MBA”课程。</p>
						<div class="anniu">
							<a href="javascript:;" onclick="go()">向TA咨询</a>
							<a href="/studentstory/767.html" target="_blank" class="a1">查看详情</a>
						</div>
					</div>
					<div class="swiper-slide">
						<h3>孝顺的孩子运气不会差 奥林匹克学院也成就了他的梦想</h3>
						<div>
							<p><b>姓名：</b>杨同学</p>
							<p><b>录取院校：</b>奥林匹克学院</p>
							<p><b>升入院校：</b>旧金山州立大学</p>
						</div>
						<h4>案例解析：</h4>
						<p>在追寻梦想与满足父母的期待之间做选择，杨同学选择先满足父母的愿望，然后再去追寻自己的梦想，最后他不仅满足了父母的期待也顺利实现了自己的梦想。</p>
						<div class="anniu">
							<a href="javascript:;" onclick="go()">向TA咨询</a>
							<a href="/studentstory/764.html" target="_blank" class="a1">查看详情</a>
						</div>
					</div>
					<!-- <div class="swiper-slide">
						<h3 style="padding-bottom: 20px;">弃学一年 重新踏上学子路 成功升入纽约州立大学</h3>
						<div>
							<p><b>姓名：</b>史同学</p>
							<p><b>录取院校：</b>美国檀香山社区大学</p>
							<p><b>升入院校：</b>纽约州立大学</p>
						</div>
						<h4>案例解析：</h4>
						<p>高中毕业之后，进入社会工作了一年，也是坎坎坷坷四处碰壁，这才认识到知识和学历的重要性。史同学决定重新踏上求学的征程，开启自己崭新的人生。皇天不负有心人，史同学不仅申请到美国檀香山社区大学，最后成功进入到纽约州立大学。</p>
						<div class="anniu">
							<a href="javascript:;" onclick="go()">向TA咨询</a>
							<a href="/studentstory/763.html" target="_blank" class="a1">查看详情</a>
						</div>
					</div>
					<div class="swiper-slide">
						<h3>迂回前进 成功进入斯坦福大学</h3>
						<div>
							<p><b>姓名：</b>唐同学</p>
							<p><b>录取院校：</b>山麓及迪安萨社区大学</p>
							<p><b>升入院校：</b>斯坦福大学</p>
						</div>
						<h4>案例解析：</h4>
						<p>要想进入理想的大学，战略上要统筹，战术上也要懂得迂回。在唐同学与彬彬老师的良好配合下，成功进入斯坦福大学。</p>
						<div class="anniu">
							<a href="javascript:;" onclick="go()">向TA咨询</a>
							<a href="/studentstory/766.html" target="_blank" class="a1">查看详情</a>
						</div>
					</div>
					<div class="swiper-slide">
						<h3>解决签证问题 牵手埃尔金社区学院</h3>
						<div>
							<p><b>姓名：</b>张同学</p>
							<p><b>录取院校：</b>埃尔金社区学院</p>
							<p><b>上次拒签时间：</b>2016年8月</p>
							<p><b>获签时间：</b>2017年1月</p>
						</div>
						<h4>案例解析：</h4>
						<p>张同学在办理签证的时候由于心理紧张再加上本身英语就不是很流畅，导致第一次拒签。在彬彬签证顾问老师的指导下，张同学不仅签证成功还申请到埃尔金社区学院，更发掘了自身的潜力。</p>
						<div class="anniu">
							<a href="javascript:;" onclick="go()">向TA咨询</a>
							<a href="/studentstory/761.html" target="_blank" class="a1">查看详情</a>
						</div>
					</div> -->
				</div>
			</div>
			<div class="btnleft1 btn"><img src="/static/home/img/page/shequ_daxue/zuo.png" alt=""></div>
			<div class="btnright1 btn"><img src="/static/home/img/page/shequ_daxue/you.png" alt=""></div>
			<a href="javascript:;" onclick="go()">点击查看更多案例</a>
		</div>
		
		<!-- 美国社区大学&美国综合性大学留学费用大PK -->
		<div class="pk sq_index">
			<div class="gWidth1170">
				<h3 class="title">美国社区大学&amp;美国综合性大学留学费用大PK</h3>
				<div class="content clearfix">
					<div class="box fl">
						<h3>美国社区大学学费</h3>
						<p>社区大学约$5,000~$8,000/年*2年</p>
						<p><b>+</b></p>
						<p>综合大学约$25,000/年*2年，</p>
						<p><b>四年后毕业共约$60,000~$66,000</b></p>
						<a href="javascript:;" onclick="go()">美国本科留学费用全解析</a>
					</div>
					<div class="box fl" style="line-height: 30px;">
						<h3>美国综合性大学学费</h3>
						<p>约$25,000/年*4年，</p>
						<p><b>四年毕业后共约$100,000</b></p>
						<a href="javascript:;" onclick="go()">了解更多留学相关费用</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国社区大学申请条件 -->
		<div class="tiaojian sq_index gWidth1170">
			<h3 class="title">美国社区大学申请条件</h3>
			<div class="content clearfix">
				<div class="box fl">
					<span class="shequImg2 tj1"></span>
					<!-- <img src="/static/home/img/page/shequ_daxue/tj1.png" alt=""> -->
					<span></span>
					<p>年满14周岁<br />或高中、中专院校在读</p>
				</div>
				<div class="box fl">
					<span class="shequImg2 tj2"></span>
					<!-- <img src="/static/home/img/page/shequ_daxue/tj2.png" alt=""> -->
					<span></span>
					<p>有无高中或<br />中专毕业证书均可</p>
				</div>
				<div class="box fl">
					<span class="shequImg2 tj3"></span>
					<!-- <img src="/static/home/img/page/shequ_daxue/tj3.png" alt=""> -->
					<span></span>
					<p>高一（及以上）<br />至少一个学期成绩单</p>
				</div>
				<div class="box fl">
					<span class="shequImg2 tj4"></span>
					<!-- <img src="/static/home/img/page/shequ_daxue/tj4.png" alt=""> -->
					<span></span>
					<p>无需SAT<br />有无英语成绩均可</p>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">快速匹配社区大学</a>
		</div>
		
		<!-- 美国社区大学申请流程 -->
		<div class="liucheng gWidth1170">
			<h3 class="title">美国社区大学申请流程</h3>
			<div class="content clearfix">
				<div class="box fl">
					<div class="o">
						<h3>01</h3>
						<p>选择社区院校</p>
					</div>
					<div class="hidden"><p>彬彬留学顾问根据学生自身条件进行准确定位，选择合适的学校</p></div>
				</div>
				<div class="box box2 fl">
					<div class="o">
						<h3>02</h3>
						<p>准备申请材料</p>
					</div>
					<div class="hidden"><p>高中/初中/中专/技校的成绩单、简历、学历证明或者在读证明等材料的提交</p></div>
				</div>
				<div class="box box3 fl">
					<div class="o">
						<h3>03</h3>
						<p>面试</p>
					</div>
					<div class="hidden"><p>由彬彬留学顾问老师辅导做好面试准备</p></div>
				</div>
				<div class="box box4 fl">
					<div class="o">
						<h3>04</h3>
						<p>申请签证</p>
					</div>
					<div class="hidden"><p>面试通过后，携带相关证明办理签证</p></div>
				</div>
				<div class="box box5 fl">
					<div class="o">
						<h3>05</h3>
						<p>行前准备</p>
					</div>
					<div class="hidden"><p>机票，衣物、学习用品、药品等各种物品及心理的准备</p></div>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">申请名校快人一步</a>
		</div>
		
		<!-- 强大的国内外导师团队 -->
		<div class="daoshi_team sq_index">
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
		
		<!-- 选择正确的背景提升 距离名校更近一步 -->
		<div class="bjts sq_index">
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
								<a href="/mxky/275.html" target="_blank">查看详情</a>
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
									<a href="/xsjs/327.html" target="_blank">查看详情</a>
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
									<a href="/xxsy/331.html" target="_blank">查看详情</a>
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
									<a href="/mqsx/294.html" target="_blank">查看详情</a>
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
									<a href="/gjyg/318.html" target="_blank">查看详情</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="anniu">
					<a href="/page/polymerization.html" target="_blank">了解更多背景提升项目</a>
					<a href="javascript:;" onclick="go()" class="a1">点击匹配背景提升活动</a>
				</div>
			</div>
		</div>
		
		<!-- 彬彬教育致力让每一个学生牵手世界名校 -->
		<div id="mydiv" class="sq_index" style="height: 695px;">
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
			$gkLength = $('.sq_index').length;
			window.onscroll = function () {
				var top = document.documentElement.scrollTop || document.body.scrollTop;
				if(top>=nav){
					$('.bannerNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999'});
					$('.navHidden').css({'display': 'block'});
				}else if(top<=$('.sq_index').eq(0).offset().top){
					$('.bannerNav').css({'position': 'static', 'top':''});
					$('.navHidden').css({'display': 'none'});
				}
				for( var i=0; i<$gkLength; i++ ){
					if( i == $gkLength - 1 ){
						if( top>=$('.sq_index').eq(i).offset().top ){
							$('.bannerNav span').removeClass('active');
							$('.bannerNav span').eq(i).addClass('active');
						}
						return;
					}
					if( top>=$('.sq_index').eq(i).offset().top && top<$('.sq_index').eq(i+1).offset().top ){
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
						$('.topNav').css({'position': 'static'});
					}
				}else if(top == 0) {
					$('.topNav').css({'position': 'relative'});
				}
			}
			$('.bannerNav span').on('click', function () {
				var index = $('.bannerNav span').index($(this));
				var offsetTop = $('.sq_index').eq(index).offset().top;
				$('body, html').stop().animate({scrollTop: offsetTop + 0}, 1500);
			})
			$('.tese .box .content>div.fr>.box:nth-child(2n)').css({'margin-right': '0'});
			$('.tese .box .content>div.fl').on('mouseenter', function () {
				$(this).children('.hidden_a').stop().fadeOut();
				$(this).children('.hidden_b').stop().fadeIn();
			})
			$('.tese .box .content>div.fl').on('mouseleave', function () {
				$(this).children('.hidden_a').stop().fadeIn();
				$(this).children('.hidden_b').stop().fadeOut();
			})
			
			$('.tese .box .content>div.fr>.box').hover(function () {
				$(this).children('.hidden_a').stop().fadeOut();
				$(this).children('.hidden_b').stop().fadeIn();
			}, function () {
				$(this).children('.hidden_a').stop().fadeIn();
				$(this).children('.hidden_b').stop().fadeOut();
			})
			// 
			$('.heshi_renqun .content .box:last-child').css({'margin-right': '0'});
			// swiper
			var mySwiper = new Swiper('.swiper-container',{
				slidesPerView : 4,
				offsetPxBefore : 2,
			})
			$('.mingrenTang .swiper-slide').removeAttr("style");
			$('.mingrenTang .swiper-slide:last-child').css({'margin-right': '0'});
			$('.btnleft').click(function() {
				mySwiper.swipePrev();
			});
			$('.btnright').click(function() {
				mySwiper.swipeNext();
			});
			var mySwiper2 = new Swiper('.swiper-container2',{
				slidesPerView : 3,
				loop: true ,
			})
			$('.btnleft1').click(function() {
				mySwiper2.swipePrev();
			});
			$('.btnright1').click(function() {
				mySwiper2.swipeNext();
			});
			$('.anli .swiper-container2 .swiper-slide:last-child').css({'margin-right': '0'});
			// 
			$('.pk .content .box:last-child').css({'margin-right': '0'});
			// 
			$('.tiaojian .content .box:last-child').css({'margin-right': '0'});
			// 
			$('.liucheng .content .box:last-child').css({'margin-right': '0'});
			$(".liucheng .content .box").on("mouseenter mouseleave", function(e) {
				var w = $(this).width();
				var h = $(this).height();
				var x = (e.pageX - this.offsetLeft - (w / 2)) * (w > h ? (h / w) : 1);
				var y = (e.pageY - this.offsetTop - (h / 2)) * (h > w ? (w / h) : 1);
				var direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180) / 90) + 3) % 4;
				var eventType = e.type;
				var dirName = new Array('上方','右侧','下方','左侧');
				var that = $(this);
				var index = $('.liucheng .content .box').index($(this));
				if(e.type == 'mouseenter'){
					that.children('.hidden').css({'display': 'block'});
					if( direction == 0 ){
						that.children('.hidden').css({'top': -h + 'px', 'left': '0'});
						that.children('.hidden').stop().animate({'top': '0'});
						$('.liucheng .content .box>.o').eq(index).stop().animate({'top': h + 'px'});
					}else if( direction == 1 ) {
						that.children('.hidden').css({'top': '0', 'left': w + 'px'});
						that.children('.hidden').stop().animate({'left': '0'});
						$('.liucheng .content .box>.o').eq(index).stop().animate({'left': -w + 'px'});
					}else if( direction == 2 ) {
						that.children('.hidden').css({'top': h + 'px', 'left': '0'});
						that.children('.hidden').stop().animate({'top': '0'});
						$('.liucheng .content .box>.o').eq(index).stop().animate({'top': -h + 'px'});
					}else if( direction == 3 ) {
						that.children('.hidden').css({'top': '0', 'left': -w + 'px'});
						that.children('.hidden').stop().animate({'left': '0'});
						$('.liucheng .content .box>.o').eq(index).stop().animate({'left': w + 'px'});
					}
				}else{
					if( direction == 0 ){
						that.children('.hidden').stop().animate({'top': -h + 'px'});
						$('.liucheng .content .box>.o').eq(index).css({'top': h + 'px', 'left': '0'});
						$('.liucheng .content .box>.o').eq(index).stop().animate({'top': 0});
					}else if( direction == 1 ) {
						that.children('.hidden').stop().animate({'left': w + 'px'});
						$('.liucheng .content .box>.o').eq(index).css({'top': 0, 'left': -w + 'px'});
						$('.liucheng .content .box>.o').eq(index).stop().animate({'left': 0});
					}else if( direction == 2 ) {
						that.children('.hidden').stop().animate({'top': h + 'px'});
						$('.liucheng .content .box>.o').eq(index).css({'top': -h + 'px', 'left': 0});
						$('.liucheng .content .box>.o').eq(index).stop().animate({'top': 0});
					}else if( direction == 3 ) {
						that.children('.hidden').stop().animate({'left': -w + 'px'});
						$('.liucheng .content .box>.o').eq(index).css({'top': 0, 'left': w + 'px'});
						$('.liucheng .content .box>.o').eq(index).stop().animate({'left': 0});
					}
				}
			});
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
