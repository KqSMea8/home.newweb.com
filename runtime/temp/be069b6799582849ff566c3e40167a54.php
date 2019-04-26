<?php /*a:6:{s:77:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\seniorsqgl.html";i:1554082975;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1553677718;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1553062603;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1554184743;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1554189517;s:86:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_highSchool.html";i:1554189561;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/seniorsqgl.css">
		<style type="text/css">
			.banner h1{
				font-size: 68px;
				line-height: 88px;
				padding-top: 117px;
				padding-bottom: 6px;
				padding-left: 43px;
				text-shadow:0px 3px 4px rgba(0,0,0,0.50);
				color: #FFFFFF;
				text-align: left;
				letter-spacing: 2px;
			}
		</style>
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
		<!-- banner -->
		<div class="banner">
			<div class="gWidth1170 clearfix">
				<h1>美国高中申请全攻略</h1>
				<a href="javascript:;" onclick="go()" class="a1">点击了解留学方案</a>
				<a href="javascript:;" onclick="go()" class="a2">咨询热线：400-900-9770</a>
			</div>
		</div>
		
		<!-- 低龄留学的优势 -->
		<div class="youshi gWidth1170">
			<!-- title -->
			<h3 class="title">低龄留学的<em>优势</em></h3>
			<!-- content -->
			<div class="content clearfix">
				<div class="fl">
					<div class="biaoti">
						<span></span>
						<h4>美国中学</h4>
						<span></span>
					</div>
					<span class="sj1"></span>
					<span class="sj2"></span>
					<img src="/static/home/img/page/gaozhong_sq/zhang.png" class="zhang" alt="">
					<ul class="fr">
						<li class="clearfix">
							<div class="fr">
								<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
							</div>
							<span class="fr">优质教育资源平均分布</span>
						</li>
						<li class="clearfix">
							<div class="fr">
								<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
							</div>
							<span class="fr">普遍为选课制和学分制</span>
						</li>
						<li class="clearfix">
							<div class="fr">
								<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
							</div>
							<span class="fr">小班授课，圆桌式教学</span>
						</li>
						<li class="clearfix">
							<div class="fr">
								<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
							</div>
							<span class="fr">纯英文语言环境，快速提升英语水平</span>
						</li>
						<li class="clearfix">
							<div class="fr">
								<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
							</div>
							<span class="fr">美国名师推荐信，升入名校几率高</span>
						</li>
					</ul>
				</div>
				<div class="fr">
					<div class="biaoti">
						<span></span>
						<h4>国内中学</h4>
						<span></span>
					</div>
					<span class="sj1"></span>
					<span class="sj2"></span>
					<ul>
						<li class="clearfix">
							<div class="fl">
								<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
							</div>
							<span class="fl">优质教育资源集中在大城市</span>
						</li>
						<li class="clearfix">
							<div class="fl">
								<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
							</div>
							<span class="fl">只分文科和理科</span>
						</li>
						<li class="clearfix">
							<div class="fl">
								<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
							</div>
							<span class="fl">填鸭式授课，学生活跃度低</span>
						</li>
						<li class="clearfix">
							<div class="fl">
								<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
							</div>
							<span class="fl">缺少英文环境，英语口语薄弱</span>
						</li>
						<li class="clearfix">
							<div class="fl">
								<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
							</div>
							<span class="fl">无升学规划，选校全凭分数</span>
						</li>
					</ul>
				</div>
				<ul>
					<li>教育资源</li>
					<li>课堂体系</li>
					<li>教学特点</li>
					<li>语言环境</li>
					<li>升学状况</li>
				</ul>
			</div>
			<a href="javascript:;" onclick="go()">马上申请美国高中</a>
		</div>
		
		<!-- 美国高中申请条件 -->
		<div class="sq_tiaojian">
			<div class="gWidth1170">
				<h3 class="title">美国高中<em>申请条件</em></h3>
				<div class="content clearfix">
					<div class="box fl">
						<div class="clearfix tBox">
							<div class="fl">
								<div><img src="/static/home/img/page/9_12/icon1.png" alt=""></div>
							</div>
							<h3 class="fl">硬件条件</h3>
						</div>
						<h5><span></span>美国精品中学</h5>
						<p>GPA成绩；  SLEP成绩；  资金证明；  面试</p>
						<h5><span></span>美国普通中学</h5>
						<p>GPA成绩；  TOEFL；  SSAT美国中学入学考试；  资金证明；面试</p>
						<em><b>彬彬留学专家提醒：</b>申请的年级越高，对成绩的要求也会略高些，主要体现在托福、SSAT、面试及在校成绩等方面。</em>
						<a href="javascript:;" onclick="go()">如何提高个人成绩</a>
					</div>
					<div class="box fr">
						<div class="clearfix tBox">
							<div class="fl">
								<div><img src="/static/home/img/page/9_12/icon2.png" alt=""></div>
							</div>
							<h3 class="fl">软件条件</h3>
						</div>
						<h5><span></span>课外活动</h5>
						<p>学校的社团活动； 志愿者活动； 国际化背景； 学生研究、发明等</p>
						<h5><span></span>奖励荣誉</h5>
						<p>数学、奥数、科学竞赛； 辩论赛、英语演讲比赛、模拟联合国等</p>
						<h5><span></span>特长兴趣爱好</h5>
						<p>文艺活动：钢琴、绘画等； 体育活动：篮球、游泳等</p>
						<h5><span></span>社会实践</h5>
						<a href="javascript:;" onclick="go()">如何快速提高软件条件</a>
					</div>
				</div>
			</div>
			<!-- 美国高中申请材料 -->
			<div class="haiwaizy gWidth1170">
				<h3 class="title">美国高中<em>申请材料</em></h3>
				<div class="content clearfix">
					<div class="box1 fl">
						<img src="/static/home/img/page/gaozhong_sq/gerenjianjie.png" alt="">
						<p>个人简介</p>
					</div>
					<div class="box1 fl">
						<img src="/static/home/img/page/gaozhong_sq/zhengming.png" alt="">
						<p>在读证明</p>
					</div>
					<div class="box1 fl">
						<img src="/static/home/img/page/gaozhong_sq/chengjidan.png" alt="">
						<p>近三年成绩单</p>
					</div>
					<div class="box1 fl">
						<img src="/static/home/img/page/gaozhong_sq/shenqingbiao-.png" alt="">
						<p>学校申请表</p>
					</div>
					<div class="box1 fl">
						<img src="/static/home/img/page/gaozhong_sq/xiexin.png" alt="">
						<p>推荐信</p>
					</div>
					<div class="box1 fl">
						<img src="/static/home/img/page/gaozhong_sq/huzhao.png" alt="">
						<p>护照复印件</p>
					</div>
					<div class="box1 fl">
						<img src="/static/home/img/page/gaozhong_sq/tubiaozhizuomoban.png" alt="">
						<p>英语标准化考试成绩单</p>
					</div>
					<div class="box1 fl">
						<img src="/static/home/img/page/gaozhong_sq/zijin.png" alt="">
						<p>资金证明</p>
					</div>
				</div>
				<a href="javascript:;" onclick="go()">免费领取材料清单</a>
			</div>
		</div>
		
		<!-- 彬彬教育优质海外资源 -->
		<div class="ziyuan gWidth1170">
			<h3 class="title">彬彬教育<em>优质海外资源</em></h3>
			<!-- content -->
			<div class="content">
				<!-- 选项标题 -->
				<div class="x_title clearfix">
					<a class="active">招生官寄语抢先看</a>
					<span>|</span>
					<a>优质学校先睹为快</a>
				</div>
				<!-- 选项content -->
				<div class="x_content">
					<p>彬彬定期会引进校长团赴华来为学生面试，我们的学生享有优先录取、破格录取权。</p>
					<div class="v clearfix">
						<div class="fl box">
							<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/a487e1b85285890786208055696/gw05EfSv3aAA.mp4">
								<img src="/static/home/img/page/LowAge/zhaosheng/白山中学.jpg" alt="白山中学" title="白山中学" />
								<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
							</div>
							<span>白山中学</span>
						</div>
						<div class="fl box">
							<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/a488e8ce5285890786208057243/RfOvMDpvXuIA.mp4">
								<img src="/static/home/img/page/LowAge/zhaosheng/北林招生官.jpg" alt="北林中学" title="北林中学" />
								<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
							</div>
							<span>北林中学</span>
						</div>
						<div class="fl box">
							<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/a4adc3d45285890786208078930/1tWDZbskLW8A.mp4">
								<img src="/static/home/img/page/LowAge/zhaosheng/弗雷斯诺招生官.jpg" alt="弗雷斯诺基督学校" title="弗雷斯诺基督学校" />
								<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
							</div>
							<span>弗雷斯诺基督学校</span>
						</div>
						<div class="fl box">
							<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/a696594f5285890786208118921/m9EpcTedLo4A.mp4">
								<img src="/static/home/img/page/LowAge/zhaosheng/红木基督中学.jpg" alt="红木基督学校" title="红木基督学校" />
								<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
							</div>
							<span>红木基督学校</span>
						</div>
						<div class="fl box">
							<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/a8ea4bd05285890786208216257/GBjSdwR0dpQA.mp4">
								<img src="/static/home/img/page/LowAge/zhaosheng/胡沙克中学.jpg" alt="胡沙克中学" title="胡沙克中学" />
								<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
							</div>
							<span>胡沙克中学</span>
						</div>
						<div class="fl box">
							<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/ab897ff55285890786208359362/wX9qYOoS3uwA.mp4">
								<img src="/static/home/img/page/LowAge/zhaosheng/吉尔福伊.jpg" alt="吉尔福德伊尔中学" title="吉尔福德伊尔中学" />
								<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
							</div>
							<span>吉尔福德伊尔中学</span>
						</div>
						<div class="fl box">
							<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/ad7fc66c5285890786208401239/1qdST6rfcg4A.mp4">
								<img src="/static/home/img/page/LowAge/zhaosheng/考文垂招生官.jpg" alt="考文垂基督学校" title="考文垂基督学校" />
								<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
							</div>
							<span>考文垂基督学校</span>
						</div>
						<div class="fl box">
							<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/ab99f3565285890786208366365/Mm7uM7DiSaYA.mp4">
								<img src="/static/home/img/page/LowAge/zhaosheng/玛丽安娜中学.jpg" alt="玛丽安娜中学" title="玛丽安娜中学" />
								<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
							</div>
			 				<span>玛丽安娜中学</span>
						</div>
					</div>
					<a href="javascript:;" onclick="go()">了解近期校长来访计划</a>
				</div>
				<div class="x_content">
					<p>彬彬留学直接与海外院校合作，是众多美国中学的独家代理。</p>
					<div class="v clearfix">
						<div class="fl box">
							<div class="hover" data-videoSrc="/static/home/img/page/video/93cad5b3d087e50d4ee657006cde0e9c.mp4">
								<img src="/static/home/img/page/LowAge/白山中学.jpg" alt="伯特利教会学校" title="伯特利教会学校" />
								<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
							</div>
							<span>伯特利教会学校</span>
						</div>
						<div class="fl box">
							<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/b95ff8745285890786208931905/UUnn6fvsXOAA.mp4">
								<img src="/static/home/img/page/LowAge/hzjdxx.jpg" alt="海岸基督学校" title="海岸基督学校" />
								<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
							</div>
							<span>海岸基督学校</span>
						</div>
						<div class="fl box">
							<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/b92bcb4c5285890786208905410/kxlzKZyhKYIA.mp4">
								<img src="/static/home/img/page/LowAge/hrtxsslxx.jpg" alt="海瑞特橡树私立学校" title="海瑞特橡树私立学校" />
								<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
							</div>
							<span>海瑞特橡树私立学校</span>
						</div>
						<div class="fl box">
							<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/b9974a575285890786208963552/gA5EsEQWqUwA.mp4">
								<img src="/static/home/img/page/LowAge/hmdzx.jpg" alt="哈姆登霍尔中学" title="哈姆登霍尔中学" />
								<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
							</div>
							<span>哈姆登霍尔中学</span>
						</div>
						<div class="fl box">
							<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/ad8291125285890786208406537/RqbmXgWjHnYA.mp4">
								<img src="/static/home/img/page/LowAge/胡沙克高中.jpg" alt="胡沙克中学" title="胡沙克中学" />
								<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
							</div>
							<span>胡沙克中学</span>
						</div>
						<div class="fl box">
							<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/f1b642b25285890786209081951/hAuFC8cJoFMA.mp4">
								<img src="/static/home/img/page/LowAge/kwc.jpg" alt="考文垂基督学校" title="考文垂基督学校" />
								<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
							</div>
							<span>考文垂基督学校</span>
						</div>
						<div class="fl box">
							<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/b4dcfc345285890786208757008/nIz0bp5qXmkA.mp4">
								<img src="/static/home/img/page/LowAge/蒙特利海湾学院.jpg" alt="蒙特利海湾学院" title="蒙特利海湾学院" />
								<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
							</div>
							<span>蒙特利海湾学院</span>
						</div>
						<div class="fl box">
							<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/ae0034ba5285890786208474927/1pjcMZtVzAIA.mp4">
								<img src="/static/home/img/page/LowAge/韦伯中学.jpg" alt="韦伯中学" title="韦伯中学" />
								<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
							</div>
							<span>韦伯中学</span>
						</div>
					</div>
					<a href="javascript:;" onclick="go()">了解更多优质学校</a>
				</div>
			</div>
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
		
		<!-- 四类美国高中任你选 -->
		<div class="renNixuan">
			<div class="gWidth1170">
				<h3 class="title">四类<em>美国高中任你选</em></h3>
				<div class="content clearfix">
					<div class="box fl">
						<div class="img">
							<img src="/static/home/img/page/gaozhong_sq/145419x0883a8ja5xa19xi.png" class="fl" alt="走读高中" title="走读高中">
						</div>
						<div class="fl">
							<h4>走读高中</h4>
							<p>走读高中国际生一般入住学校周边的寄宿家庭。这类学校因不提供宿舍，主要以本地生为主，不会出现中国学生扎堆的情况。走读学校的学生与当地寄宿家庭接触频繁，能够更快使学生融入美国社会，且教学质量无可挑剔，学校选择性多。</p>
						</div>
						<a href="javascript:;" onclick="go()">申请条件</a>
					</div>
					<div class="box fl">
						<div class="img">
							<img src="/static/home/img/page/gaozhong_sq/13.png" class="fl" alt="寄宿高中" title="寄宿高中">
						</div>
						<div class="fl">
							<h4>寄宿高中</h4>
							<p>美国私立寄宿高中是指私立的、有提供学生住宿的学校。最大特色是小班授课，以及多元化的学习科目与课外活动，安全性高，美国的很多寄宿制高中以其严格的录取标准和高质量的教学水平闻名于世。</p>
						</div>
						<a href="javascript:;" onclick="go()">申请条件</a>
					</div>
					<div class="box fl">
						<div class="img">
							<img src="/static/home/img/page/gaozhong_sq/DSC_0001.png" class="fl" alt="蓝带高中" title="蓝带高中">
						</div>
						<div class="fl">
							<h4>蓝带高中</h4>
							<p>“蓝带”是美国政府通过对于学校9大指标进行综合评估，给予中小学校的至高荣誉，被誉为“教育界的奥斯卡”。仅有3.9%的美国中小学校获得过此荣誉。此类学校通常录取标准高，学习风气浓厚，教学质量高，进入常春藤类名校的比例也高。</p>
						</div>
						<a href="javascript:;" onclick="go()">申请条件</a>
					</div>
					<div class="box fl">
						<div class="img">
							<img src="/static/home/img/page/gaozhong_sq/WeChat-Image_20170913093645.png" class="fl" alt="艺术高中" title="艺术高中">
						</div>
						<div class="fl">
							<h4>艺术高中</h4>
							<p>美国艺术高中非常注重艺术训练，提供专门的艺术课程，为未来准备进入艺术学院的学生打下了良好的基础。在高中阶段的艺术课程中有音乐、舞蹈、戏剧以及平面设计、建筑设计等，这些学校在培养艺术特长的同时，也着重培养孩子的文化课程。</p>
						</div>
						<a href="javascript:;" onclick="go()">申请条件</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 有彬彬 留学更省心 -->
		<div class="shengxin gWidth1170">
			<h3 class="title">有彬彬 留学更<em>省心</em></h3>
			<div class="content clearfix">
				<div class="box fl">
					<div class="img">我们能为您做什么</div>
					<div class="bot">
						<ul>
							<li>制定留学计划，搜集标准化考试复习材料，提升语言成绩，进行家庭资金规划；</li>
							<li>锁定目标院校，了解院校申请要求； 考试辅导，考试注册；</li>
							<li>文书写作及背景材料润色； 递交申请，完善材料；</li>
							<li>确认申请结果，收获录取offer；  准备签证材料+面试辅导；</li>
							<li>安排海外寄宿家庭和监护团队；</li>
							<li>缴纳费用；安排体检；预定机票；</li>
							<li>美国接机安排；留学生行前指导。</li>
						</ul>
					</div>
				</div>
				<div class="box fr box2">
					<div class="img">学生和家长只需要做以下事情</div>
					<div class="bot">
						<ul>
							<li>提供存款证明、护照页、成绩单等纸质材料；</li>
							<li>配合参加标化考试；</li>
							<li>积极参加美高面试。</li>
						</ul>
					</div>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">了解更多服务详情</a>
		</div>
		
		<!-- 美国高中申请流程 -->
		<div class="sq_lc gWidth1170">
			<h3 class="title">美国高中<em>申请流程</em></h3>
			<!-- content -->
			<div class="content clearfix">
				<div class="fl">
					<div class="tone clearfix">
						<span><p>3-5月<br />留学规划</p></span><img src="/static/home/img/page/gaozhong_sq/liucheng1.png" alt="">
						<span><p>6月<br />选校</p></span><img src="/static/home/img/page/gaozhong_sq/liucheng1.png" alt="">
						<span><p>7-8月<br />考试培训</p></span><img src="/static/home/img/page/gaozhong_sq/liucheng1.png" alt="">
						<span><p>9月<br />参加考试</p></span><img src="/static/home/img/page/gaozhong_sq/liucheng1.png" alt="">
						<span><p>10月<br />申请材料</p></span>
					</div>
					<div class="ttwo clearfix">
						<b>制定留学计划，搜集标准化考试复习材料，加强英语学习，进行家庭资金规划</b><img src="/static/home/img/page/gaozhong_sq/liucheng2.png" alt="">
					</div>
					<div class="tthree clearfix">
						<span class="fr"><p>11月<br />参加考试</p></span><img class="fr" src="/static/home/img/page/gaozhong_sq/liucheng3.png" alt="">
						<span class="fr"><p>12月<br />寄送成绩</p></span><img class="fr" src="/static/home/img/page/gaozhong_sq/liucheng3.png" alt="">
						<span class="fr"><p>次年1-2月<br />提交申请</p></span><img class="fr" src="/static/home/img/page/gaozhong_sq/liucheng3.png" alt="">
						<span class="fr"><p>次年3月<br />收获offer</p></span><img class="fr" src="/static/home/img/page/gaozhong_sq/liucheng3.png" alt="">
						<span class="fr"><p>次年4月<br />准备入学</p></span>
					</div>
				</div>
				<div class="fr">
					<ul>
						<li><a href="javascript:;" onclick="go()">2019年美国中学申请流程</a></li>
						<li><a href="javascript:;" onclick="go()">美国中学的推荐信怎么写?</a></li>
						<li><a href="javascript:;" onclick="go()">美国中学申请的四大误区</a></li>
						<li><a href="javascript:;" onclick="go()">申请被放入wait list名单怎么办?</a></li>
						<li><a href="javascript:;" onclick="go()" class="anniu">更多疑问立即咨询</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<!-- 彬彬海外独家特色服务 -->
		<div class="ts_fw">
			<div class="gWidth1170">
				<h3 class="title">彬彬海外<em>独家特色服务</em></h3>
				<div class="content clearfix">
					<div class="box fl">
						<div class="img">
							<img src="/static/home/img/page/haiwai_jianguan/fuwu1.png" alt="寄宿家庭安置全服务" title="寄宿家庭安置全服务">
							<span>寄宿家庭安置全服务</span>
						</div>
						<p>提供寄宿家庭选择；十个月食宿费用；上、下学交通；国际学生监护；免费更换寄宿家庭</p>
						<a href="/fmfml/0-1.html" target="_blank">提前预约寄宿家庭</a>
					</div>
					<div class="box fl">
						<div class="img">
							<img src="/static/home/img/page/haiwai_jianguan/fuwu2.png" alt="住宿管理" title="住宿管理">
							<span>住宿管理</span>
						</div>
						<p>7*24紧急情况协助；匹配服务团队随时沟通；协助处理就医问题；定期家访、校访；生活矛盾处理</p>
						<a href="/page/overseashome.html" target="_blank">预约贴心无忧管家</a>
					</div>
					<div class="box fl">
						<div class="img">
							<img src="/static/home/img/page/haiwai_jianguan/fuwu3.png" alt="学业跟踪" title="学业跟踪">
							<span>学业跟踪</span>
						</div>
						<p>校规培训及介绍；成绩跟踪及反馈；选课及学习指导；升学规划；转学申请</p>
						<a href="javascript:;" onclick="go()">预约辅导老师</a>
					</div>
					<div class="box fl">
						<div class="img">
							<img src="/static/home/img/page/haiwai_jianguan/fuwu4.png" alt="留学课堂" title="留学课堂">
							<span>留学课堂</span>
						</div>
						<p>背景提升；美国风俗文化授课；名校学长传授留学经验；美国生活指导；定期组织课外活动</p>
						<a href="javascript:;" onclick="go()">定制个性化成长方案</a>
					</div>
					<div class="box fl">
						<div class="img">
							<img src="/static/home/img/page/haiwai_jianguan/fuwu5.png" alt="行前指导" title="行前指导">
							<span>行前指导</span>
						</div>
						<p>机票购买指导；行前行李准备；出入境指导；安全培训；选课、校服、疫苗体检等指导</p>
						<a href="javascript:;" onclick="go()">知己知彼，出行无忧</a>
					</div>
					<div class="box fl">
						<div class="img">
							<img src="/static/home/img/page/haiwai_jianguan/fuwu6.png" alt="其他支持服务" title="其他支持服务">
							<span>其他支持服务</span>
						</div>
						<p>ISWP心理支持服务；协助解决突发事件；法务支持；租房/买房；移民</p>
						<a href="javascript:;" onclick="go()">更多服务了解</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 彬彬教育致力让每一个学生牵手世界名校 -->
		<div id="mydiv" style="height: 695px;">
			<div class="box gWidth1170 clearfix">
				<!-- title -->
				<h3 class="title">彬彬教育致力让每一个学生<em>牵手世界名校</em></h3>
				<!-- content -->
				<div class="content gWidth1170">
					<div class="fl">
						<ul>
							<li class="li1">
								<h3>6位1体</h3>
								<p>业内首创“6位1体”服务模式；服务客户满意度高达100%</p>
							</li>
							<li class="li2">
								<h3>广资源</h3>
								<p>留学行业质量认证标准机构、国内十佳品牌诚信留学机构、CSIET评审认证留学机构</p>
							</li>
							<li class="li3">
								<h3>多重认证</h3>
								<p>留学行业质量认证标准机构、国内十佳品牌诚信<br />留学机构、CSIET评审认证留学机构</p>
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
								<p class="fr" style="width: 341px;">120000+超大申请数据库；科学手段狂揽offer</p>
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
			$('.haiwaizy .content .box1:last-child').css({'margin-right': '0'});
			//
			$('.ziyuan .x_title a').eq(0).attr('class', 'active');
			$('.ziyuan .x_content').eq(0).css({'display': 'block'});
			$('.ziyuan .x_title a').on('click', function () {
				var index = $('.ziyuan .x_title a').index($(this));
				$(this).attr('class', 'active').siblings('a').removeAttr('class');
				$('.ziyuan .x_content').eq(index).css({'display': 'block'}).siblings('.x_content').css({'display': 'none'});
			})
			//
			$('.ziyuan .x_content .v .box:nth-child(4n)').css({'margin-right': '0'});
			
			$('.ziyuan .x_content .v .box').on('click', function () {
				var videoSrc = $(this).children('.hover').attr('data-videoSrc');
				$('.tc_video').children('.video').children('video').attr('src', videoSrc);
				$('.tc_video').fadeIn();
			})
			$('.tc_video .video img').on('click', function () {
				$('.tc_video').fadeOut();
				$(this).siblings('video').removeAttr('src');
			})
			// 
			$('.renNixuan .content .box:nth-child(2n)').css({'margin-right': '0'});
			// 
			$('.ts_fw .content .box:nth-child(3n)').css({'margin-right': '0'});
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
			// 
			var textHtml = [
				'制定留学计划，搜集标准化考试复习材料，加强英语学习，进行家庭资金规划',
				'根据自身情况，锁定4-10所目标院校，了解院校申请要求,注册TOEFL考试',
				'参加TOEFL/ITEP等考试培训，索取学校申请资料',
				'注册SSAT，参加TOEFL考试，取得TOEFL分数后确定申请的学校',
				'索取各院校申请表格，填写申请材料',
				'参加SSAT考试，冲刺高分',
				'寄送成绩单，缴纳申请费，进行面试',
				'跟踪申请，确定院校在2月1日前收到所有申请资料，等待结果',
				'拿到学校录取通知，申请签证',
				'签订入学合同，开始行前准备，踏上美好留学生活！',
			];
			$('.sq_lc .content span').eq(0).addClass('active');
			$('.sq_lc .content span').hover(function () {
				var index = $('.sq_lc .content span').index($(this));
				$('.ttwo b').text(textHtml[index]);
				$('.sq_lc .content span').removeClass('active');
				$('.sq_lc .content span').eq(index).addClass('active');
			})
			
		</script>
		
	</body>
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
		.formFd button{width: 92px;height: 36px;background-color: #FFFFFF;text-align: center;line-height: 36px;font-size: 18px;border-radius: 3px;cursor:pointer;margin-top: 0;color: #333333;}
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
						sclass: Sclass ,// 低龄||高中 0  本科 1 研究生 2  -----> 初中-高中年级 7-12
						urlsite: url,
						path_source:path_source
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
