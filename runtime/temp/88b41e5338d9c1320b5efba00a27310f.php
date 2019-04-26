<?php /*a:6:{s:78:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\high_school.html";i:1552986396;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1551955433;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1551670345;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1552959452;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1552979867;s:86:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_highSchool.html";i:1552974318;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/high_school.css">
	</head>
	<style type="text/css">
		.bannerTop h1{
			font-size: 70px;
			line-height: 88px;
			padding-top: 190px;
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
		
		<!-- banner -->
		<div class="bannerTop">
			<h1>美国高中留学申请指南</h1>
			<!-- 按钮 -->
			<div class="anniu clearfix">
				<a href="javascript:;" onclick="go()" class="fl one">制定专属留学规划</a><a href="javascript:;" onclick="go()" class="fl two">电话：400-900-9770</a>
			</div>
			<!-- nav -->
			<div class="bannerNav clearfix">
				<div class="gWidth1170 clearfix">
					<span class="fl active">留学疑问</span>
					<span class="fl">彬彬顶级资源</span>
					<span class="fl">名校推荐</span>
					<span class="fl">申请方案</span>
					<span class="fl">申请条件</span>
					<span class="fl">申请流程</span>
					<span class="fl">留学费用</span>
					<span class="fl">海外服务</span>
					<span class="fl">成功案例</span>
					<span class="fl">彬彬优势</span>
				</div>
			</div>
		</div>
		
		<!-- 灰背景 -->
		<div class="hBack njBox"></div>
		
		<!-- 关于申请美国高中您是否有这样的疑问 -->
		<div class="Doubt gWidth1170">
			<!-- title -->
			<div class="title">
				<h3>关于申请美国高中您是否有这样的疑问</h3>
				<span></span>
			</div>
			<!-- content -->
			<div class="content">
				<!-- top -->
				<div class="contTop clearfix">
					<div class="img fl">
						<img src="/static/home/img/page/9_12/tu1.png" alt="">
					</div>
					<div class="cc fr">
						<div class="border">
							<div class="h3">
								<h4>你的困扰</h4>
								<h5>CONFUSED</h5>
							</div>
							<ul class="clearfix">
								<li><a href="javascript:;" onclick="go()"><span></span>申请美国高中的最佳时间是什么时候？</a></li>
								<li><a href="javascript:;" onclick="go()"><span></span>国内几年级可以申请美国高中9年级？</a></li>
								<li><a href="javascript:;" onclick="go()"><span></span>申请美国高中10年级需要准备哪些材料？</a></li>
								<li><a href="javascript:;" onclick="go()"><span></span>美国高中11年级申请条件是什么？</a></li>
								<li><a href="javascript:;" onclick="go()"><span></span>美国接受12年级的高中学校多吗？</a></li>
							</ul>
							<a href="javascript:;" onclick="go()">更多&gt;</a>
						</div>
						<div class="back"></div>
					</div>
				</div>
				<!-- bottom -->
				<div class="contBottom clearfix">
					<div class="ll fl">
						<div class="border">
							<div class="h3">
								<h4>疑问解答</h4>
								<h5>QUESTION</h5>
							</div>
							<div class="problem">
								<h5>Q1：11年级申请美国的12年级，可以吗？能接受12年级的学校多吗？可以申请公立吗？</h5>
								<p>彬彬老师：很少有学校招收12年级的学生，11申11还可以考虑一下，申12不建议。即使去了美高12年级也会在申本方面十分被动，在SAT/ACT考试方面、老师推荐信等方面等都会比较被动。</p>
								<h5>Q2：申请美国高中的最佳时间是什么时候？</h5>
								<p style="margin-bottom: 5px;">彬彬老师：赴美留学的高中生数量在逐年增加，美国私立高中的招生数量却基本不会增加。名额有限，一定要趁早申请。一般来说，申请的年级越小，可以竞争的名额相对越多。通常9年级的学生名额要比10年级的名额多一些。</p>
								<p>所以还是建议同学及家长早行动、早规划、早准备，这样才可以大大提升学生申请的成功率以及对之后留学也有格外的帮助。</p>
							</div>
							<a href="javascript:;" onclick="go()">更多&gt;</a>
						</div>
						<div class="back"></div>
					</div>
					<div class="rForm fr">
						<h3>更多疑问解惑</h3>
						<input type="text" class="name" placeholder="姓名">
						<input type="text" class="phone" placeholder="电话">
						<textarea placeholder="留言"></textarea>
						<button class="button">提交</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 彬彬教育顶级资源 -->
		<div class="Resources njBox">
			<div class="gWidth1170">
				<!-- title -->
				<div class="title">
					<h3>彬彬教育顶级资源</h3>
					<span></span>
				</div>
				<p>彬彬定期会引进校长团赴华来为学生面试，我们的学生享有优先录取、破格录取权。</p>
				<!-- content -->
				<div class="content">
					<div class="conTitle clearfix">
						<span class="fl active">直面招生官</span><span class="fl">优质学校先睹为快</span>
					</div>
					<div class="conContent clearfix">
						<div class="box fl">
							<!-- 选项content -->
							<div class="x_content">
								<div class="v clearfix">
									<div class="fl box">
										<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/a487e1b85285890786208055696/gw05EfSv3aAA.mp4">
											<img src="/static/home/img/page/LowAge/zhaosheng/白山中学.jpg" alt="" />
											<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
										</div>
										<span>白山中学</span>
									</div>
									<div class="fl box">
										<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/a488e8ce5285890786208057243/RfOvMDpvXuIA.mp4">
											<img src="/static/home/img/page/LowAge/zhaosheng/北林招生官.jpg" alt="" />
											<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
										</div>
										<span>北林中学</span>
									</div>
									<div class="fl box">
										<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/a4adc3d45285890786208078930/1tWDZbskLW8A.mp4">
											<img src="/static/home/img/page/LowAge/zhaosheng/弗雷斯诺招生官.jpg" alt="" />
											<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
										</div>
										<span>弗雷斯诺基督学校</span>
									</div>
									<div class="fl box">
										<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/a696594f5285890786208118921/m9EpcTedLo4A.mp4">
											<img src="/static/home/img/page/LowAge/zhaosheng/红木基督中学.jpg" alt="" />
											<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
										</div>
										<span>红木基督学校</span>
									</div>
									<div class="fl box">
										<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/a8ea4bd05285890786208216257/GBjSdwR0dpQA.mp4">
											<img src="/static/home/img/page/LowAge/zhaosheng/胡沙克中学.jpg" alt="" />
											<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
										</div>
										<span>胡沙克中学</span>
									</div>
									<div class="fl box">
										<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/ab897ff55285890786208359362/wX9qYOoS3uwA.mp4">
											<img src="/static/home/img/page/LowAge/zhaosheng/吉尔福伊.jpg" alt="" />
											<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
										</div>
										<span>吉尔福德伊尔中学</span>
									</div>
									<div class="fl box">
										<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/ad7fc66c5285890786208401239/1qdST6rfcg4A.mp4">
											<img src="/static/home/img/page/LowAge/zhaosheng/考文垂招生官.jpg" alt="" />
											<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
										</div>
										<span>考文垂基督学校</span>
									</div>
									<div class="fl box">
										<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/ab99f3565285890786208366365/Mm7uM7DiSaYA.mp4">
											<img src="/static/home/img/page/LowAge/zhaosheng/玛丽安娜中学.jpg" alt="" />
											<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
										</div>
										<span>玛丽安娜中学</span>
									</div>
								</div>
								<div class="v clearfix">
									<div class="fl box">
										<div class="hover" data-videoSrc="/static/home/img/page/video/93cad5b3d087e50d4ee657006cde0e9c.mp4">
											<img src="/static/home/img/page/LowAge/白山中学.jpg" alt="" />
											<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
										</div>
										<span>伯特利教会学校</span>
									</div>
									<div class="fl box">
										<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/b95ff8745285890786208931905/UUnn6fvsXOAA.mp4">
											<img src="/static/home/img/page/LowAge/hzjdxx.jpg" alt="" />
											<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
										</div>
										<span>海岸基督学校</span>
									</div>
									<div class="fl box">
										<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/b92bcb4c5285890786208905410/kxlzKZyhKYIA.mp4">
											<img src="/static/home/img/page/LowAge/hrtxsslxx.jpg" alt="" />
											<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
										</div>
										<span>海瑞特橡树私立学校</span>
									</div>
									<div class="fl box">
										<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/b9974a575285890786208963552/gA5EsEQWqUwA.mp4">
											<img src="/static/home/img/page/LowAge/hmdzx.jpg" alt="" />
											<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
										</div>
										<span>汉姆顿中学</span>
									</div>
									<div class="fl box">
										<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/ad8291125285890786208406537/RqbmXgWjHnYA.mp4">
											<img src="/static/home/img/page/LowAge/胡沙克高中.jpg" alt="" />
											<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
										</div>
										<span>胡沙克中学</span>
									</div>
									<div class="fl box">
										<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/f1b642b25285890786209081951/hAuFC8cJoFMA.mp4">
											<img src="/static/home/img/page/LowAge/kwc.jpg" alt="" />
											<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
										</div>
										<span>考文垂基督学校</span>
									</div>
									<div class="fl box">
										<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/b4dcfc345285890786208757008/nIz0bp5qXmkA.mp4">
											<img src="/static/home/img/page/LowAge/蒙特利海湾学院.jpg" alt="" />
											<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
										</div>
										<span>蒙特利海湾学院</span>
									</div>
									<div class="fl box">
										<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/ae0034ba5285890786208474927/1pjcMZtVzAIA.mp4">
											<img src="/static/home/img/page/LowAge/韦伯中学.jpg" alt="" />
											<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
										</div>
										<span>韦伯中学</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a href="javascript:;" onclick="go()">了解近期招生官来访计划</a>
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
		
		<!-- 美国优质高中名校推荐 -->
		<div class="Recommend njBox gWidth1170">
			<!-- title -->
			<div class="title">
				<h3>美国优质高中名校推荐</h3>
				<span></span>
			</div>
			<!-- content -->
			<div class="content clearfix">
				<ul class="tableL fl">
					<li class="clearfix tle">
						<span class="fl" style="width: 266px;">优质走读中学</span>
						<span class="fl" style="width: 138px;">所在州</span>
						<span class="fl" style="width: 152px;">已申请成功</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">汉姆顿学校<br />Hamden Hall Country Day School</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>康涅狄格州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>189人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">罗格斯中学<br />Rutgers Preparatory School</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>新泽西州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>168人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 97%;">普林斯顿圣心学院<br />Priceton Academy of the Sacred Heart</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>新泽西州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>132人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">沃星汉姆学校<br />Walsingham Academy</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>马里兰州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>182人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">格莱内尔学校<br />Glenelg Country School</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>弗吉尼亚州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>307人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">库埃里兰中学<br />The Quarry Lane School</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>加利福尼亚州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>151人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 90%;">韦罗特主教高中<br />Bishop Verot Catholic High School</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>佛罗里达州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>196人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">圣维克特高中<br />Saint Viator High School</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>伊利诺伊州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>108人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">福莫斯学院<br />Falmouth Academy</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>马萨诸塞州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>130人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">布鲁克林友谊学校<br />Brooklyn Friends School</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>纽约州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>198人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
				</ul>
				<ul class="tableR fr">
					<li class="clearfix tle">
						<span class="fl" style="width: 266px;">优质寄宿中学</span>
						<span class="fl" style="width: 138px;">所在州</span>
						<span class="fl" style="width: 152px;">已申请成功</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">皮尔格雷姆学校<br />Pilgrim School</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>加利福尼亚州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>103人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">马克杜菲<br />The MacDuffie School</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>马萨诸塞州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>186人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">白山中学<br />The White Mountain School</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>新罕布什尔州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>176人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">艾迪怀德艺术学院<br />Idyllwild Arts Academy</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>加利福尼亚州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>105人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">柴郡中学<br />Cheshire Academy</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>康涅狄格州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>196人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">罗斯中学<br />Ross School</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>纽约州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>171人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">格里尔女子中学<br />The Grier School</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>宾夕法尼亚州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>125人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">夏威夷预备学院<br />Hawaii Preparatory Academy</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>夏威夷州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>112人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">玛丽安娜预备学校<br />Marianapolis Preparatory School</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>康涅狄格州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>130人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
					<li>
						<span class="fl" style="width: 266px;">
							<p style="width: 230px;">湖沙克中学<br />Hoosac School</p>
						</span>
						<span class="fl" style="width: 138px;">
							<p>纽约州</p>
						</span>
						<span class="fl" style="width: 152px;">
							<div>
								<p>100人</p>
								<a href="javascript:;" onclick="go()">我要申请</a>
							</div>
						</span>
					</li>
				</ul>
			</div>
		</div>
		
		<!-- 美国高中申请方案 -->
		<div class="programme njBox">
			<div class="gWidth1170">
				<!-- title -->
				<div class="title">
					<h3>美国高中申请方案</h3>
					<span></span>
				</div>
				<p>早行动、早规划、早准备，越早申请，通过率越高，学生有更多的时间熟悉美国文化及教育制度；而且有完整的美高成绩，申请美国大学时更有优势。</p>
				<div class="content clearfix">
					<div class="box fl">
						<h3>初二在读</h3>
						<span></span>
						<p>相当于美国8年级</p>
						<b>可申8/9年级</b>
					</div>
					<div class="box fl">
						<h3>初三在读</h3>
						<span></span>
						<p>相当于美国9年级</p>
						<b>可申9/10年级</b>
					</div>
					<div class="box fl">
						<h3>高一在读</h3>
						<span></span>
						<p>相当于美国10年级</p>
						<b>可申10/11年级</b>
					</div>
					<div class="box fl">
						<h3>高二在读</h3>
						<span></span>
						<p>相当于美国11年级</p>
						<b>可申11/12年级</b>
					</div>
				</div>
				<a href="javascript:;" onclick="go()">量身定制留学方案</a>
			</div>
		</div>
		
		<!-- 美国高中申请条件 -->
		<div class="condition njBox">
			<div class="gWidth1170">
				<!-- title -->
				<div class="title">
					<h3>美国高中申请条件</h3>
					<span></span>
				</div>
				<!-- content -->
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
						<em><b>彬彬留学专家提醒：</b>申请的年级越高，对成绩的要求也会略高些，主要体现在托福、SSAT、面试及在校成绩等方面</em>
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
		</div>
		
		<!-- 美国高中留学申请流程 -->
		<div class="gWidth1170 process njBox">
			<!-- title -->
			<div class="title">
				<h3>美国高中留学申请流程</h3>
				<span></span>
			</div>
			<div class="houqi_jianguan clearfix">
				<div class="box clearfix">
					<div class="swiper-container3">
						<div class="xian"></div>
						<div class="swiper-wrapper clearfix">
							<div class="swiper-slide">
								<div class="content">
									<h3>前期咨询</h3>
									<p>咨询彬彬留学专家制定整体方案</p>
									<div class="dot"></div>
									<span class="sj"></span>
									<span class="sj2"></span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="content">
									<h3>留学规划</h3>
									<p>留学规划、学习规划</p>
									<div class="dot"></div>
									<span class="sj"></span>
									<span class="sj2"></span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="content">
									<h3>确定方案</h3>
									<p>确定申请学校学习计划</p>
									<div class="dot"></div>
									<span class="sj"></span>
									<span class="sj2"></span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="content">
									<h3>背景提升</h3>
									<p>根据情况参加各种活动</p>
									<div class="dot"></div>
									<span class="sj"></span>
									<span class="sj2"></span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="content">
									<h3>材料收集</h3>
									<p>同时开启学习计划</p>
									<div class="dot"></div>
									<span class="sj"></span>
									<span class="sj2"></span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="content">
									<h3>文书规划</h3>
									<p>彬彬文案专家进行文案指导及写作</p>
									<div class="dot"></div>
									<span class="sj"></span>
									<span class="sj2"></span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="content">
									<h3>材料填写及提交材料</h3>
									<p>网申、纸申</p>
									<div class="dot"></div>
									<span class="sj"></span>
									<span class="sj2"></span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="content">
									<h3>面试辅导</h3>
									<p>专业中英文老师辅导面试环节</p>
									<div class="dot"></div>
									<span class="sj"></span>
									<span class="sj2"></span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="content">
									<h3>申请状态跟进</h3>
									<p>及时与申请人反馈申请状态</p>
									<div class="dot"></div>
									<span class="sj"></span>
									<span class="sj2"></span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="content">
									<h3>获得offer确定学校</h3>
									<p>跟进最终offer确定学校</p>
									<div class="dot"></div>
									<span class="sj"></span>
									<span class="sj2"></span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="content">
									<h3>准备签证</h3>
									<p>获得I-20留学签证</p>
									<div class="dot"></div>
									<span class="sj"></span>
									<span class="sj2"></span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="content">
									<h3>确定住宿</h3>
									<p>入学后住在学校或者寄宿家庭</p>
									<div class="dot"></div>
									<span class="sj"></span>
									<span class="sj2"></span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="content">
									<h3>行前指导</h3>
									<p>注意事项、证件、入学指导、风俗文化</p>
									<div class="dot"></div>
									<span class="sj"></span>
									<span class="sj2"></span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="content">
									<h3>顺利出国</h3>
									<p>顺利出国，完成美国高中留学课程</p>
									<div class="dot"></div>
									<span class="sj"></span>
									<span class="sj2"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="leftBtn"></div>
					<div class="rightBtn"></div>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">私人定制留学方案</a>
		</div>
		
		<!-- 美国高中留学费用 -->
		<div class="Cost gWidth1170 njBox">
			<!-- title -->
			<div class="title">
				<h3>美国高中留学费用</h3>
				<span></span>
			</div>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<div class="boxBox">
						<div class="div1">
							<h4>学费</h4>
							<p>走读、寄宿</p>
							<img src="/static/home/img/page/9_12/anniu.png" alt="">
						</div>
						<div class="div2">
							<p style="width: 270px;">走读高中：每年约45,000-75,000美元<br />寄宿高中：每年约45,000-80,000美元</p>
							<a href="javascript:;" onclick="go()">咨询具体费用</a>
						</div>
					</div>
				</div>
				<div class="box box2 fl">
					<div class="boxBox">
						<div class="div1">
							<h4>生活费</h4>
							<p>住宿、交通</p>
							<img src="/static/home/img/page/9_12/anniu.png" alt="">
						</div>
						<div class="div2">
							<p>一般每年约2万美元，纽约、波士顿、旧金山等大城市生活费用会想对高一些。（地区不同生活费用有所不同）</p>
							<a href="javascript:;" onclick="go()">咨询具体费用</a>
						</div>
					</div>
				</div>
				<div class="box box3 fl">
					<div class="boxBox">
						<div class="div1">
							<h4>其它费用</h4>
							<p>医疗、课本、活动</p>
							<img src="/static/home/img/page/9_12/anniu.png" alt="">
						</div>
						<div class="div2">
							<p>医疗费每年约500-1000美元；书本费每年约500-800美元；课外活动费用每年约300-1000美元。（具体费用根据学校而定）</p>
							<a href="javascript:;" onclick="go()">咨询具体费用</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 360°全方位服务—有彬彬留学更放心 -->
		<div class="Comprehensive njBox">
			<div class="gWidth1170">
				<!-- title -->
				<div class="title">
					<h3>360°全方位服务—有彬彬留学更放心</h3>
					<span></span>
				</div>
				<!-- content -->
				<div class="content clearfix">
					<div class="box fl">
						<div class="img">
							寄宿家庭精选
						</div>
						<div class="bot">
							<div class="clearfix">
								<span class="fl"></span>
								<p class="fl">10000+精选寄宿家庭，都是在当地有较高收入的优质家庭</p>
							</div>
							<div class="clearfix">
								<span class="fl"></span>
								<p class="fl">根据学生需求至少提供2-3个家庭供选择</p>
							</div>
							<div class="clearfix">
								<span class="fl"></span>
								<p class="fl">免费更换寄宿家庭，并且保证调换住家的时效性</p>
							</div>
						</div>
						<a href="/fmfml/0-1.html" target="_blank">提前预约寄宿家庭</a>
					</div>
					<div class="box box2 fl">
						<div class="img">
							海外无忧管家
						</div>
						<div class="bot">
							<div class="clearfix">
								<span class="fl"></span>
								<p class="fl">及时解决学生留学期间学习、生活问题</p>
							</div>
							<div class="clearfix">
								<span class="fl"></span>
								<p class="fl">把控服务质量，不定期组织实地探访，了解学生实际情况反馈家长</p>
							</div>
							<div class="clearfix">
								<span class="fl"></span>
								<p class="fl">24H紧急情况处理，随时保持联系进行处理</p>
							</div>
						</div>
						<a href="/page/overseashome.html" target="_blank">预约贴心无忧管家</a>
					</div>
					<div class="box box3 fl">
						<div class="img">
							出国衔接课程
						</div>
						<div class="bot">
							<div class="clearfix">
								<span class="fl"></span>
								<p class="fl">美国本土多年资深教学在职教师授课</p>
							</div>
							<div class="clearfix">
								<span class="fl"></span>
								<p class="fl">课程设计丰富，并拥有美国原版教材</p>
							</div>
							<div class="clearfix">
								<span class="fl"></span>
								<p class="fl">小班制授课，老师对学生关注度高，让学生快速适应中美学习差异</p>
							</div>
						</div>
						<a href="/page/goclass.html" target="_blank">获取彬彬原版教材</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 彬彬助力无数学子获得Offer -->
		<div class="getOffer njBox gWidth1170">
			<!-- title -->
			<div class="title">
				<h3>彬彬助力无数学子获得Offer</h3>
				<span></span>
			</div>
			<!-- content -->
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide clearfix">
						<div class="box fl">
							<img src="/static/home/img/page/9_12/anli1.png" class="tou" alt="">
							<div class="fr">
								<h4>顺利转学</h4>
								<p>在美触犯校规，18小时顺利转学</p>
								<a href="javascript:;" onclick="go()" class="fr">案例详情&gt;</a>
							</div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/9_12/anli2.png" class="tou" alt="">
							<div class="fr">
								<h4>执着申请</h4>
								<p>申请三次被列入waiting list，辗转逆袭</p>
								<a href="javascript:;" onclick="go()" class="fr">案例详情&gt;</a>
							</div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/9_12/anli3.png" class="tou" alt="">
							<div class="fr">
								<h4>梦圆蓝带</h4>
								<p>一年精心规划准备，成功申请圣玛丽学院</p>
								<a href="javascript:;" onclick="go()" class="fr">案例详情&gt;</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pagination" style="display: none;"></div>
		</div>
		
		<!-- 彬彬教育致力让每一个学生牵手世界名校 -->
		<div id="mydiv" class="njBox" style="height: 695px;">
			<div class="box gWidth1170 clearfix">
				<!-- title -->
				<div class="title">
					<h3>彬彬教育致力让每一个学生牵手世界名校</h3>
					<span></span>
				</div>
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
								<p>1000+校园独家代理；实地考察 真实可靠</p>
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
				$('.abcBannav').css({'display': 'none'});
				$('.topNav').css({'position': 'static'});
			}
			var spanWidth = 100 / $('.bannerNav span').length;
			var spanW = spanWidth.toFixed(1) + '%';
			$('.bannerNav span').css({'width': spanW});
			// bannerNav 滚动浮动
			var t = document.documentElement.scrollTop || document.body.scrollTop;
			$gkLength = $('.njBox').length;
			var nav = $('.bannerNav').offset().top;
			window.onscroll = function () {
				var top = document.documentElement.scrollTop || document.body.scrollTop;
				if(top>=nav){
					$('.bannerNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999', 'background-color': 'rgba(0,0,0,0.8)'});
				}else if(top<=$('.hBack').offset().top){
					$('.bannerNav').css({'position': 'absolute', 'top':'','bottom': '0', 'background-color': 'rgba(0,0,0,0.4)'});
				}
				for( var i=0; i<$gkLength; i++ ){
					if( i == $gkLength - 1 ){
						if( top>=$('.njBox').eq(i).offset().top ){
							$('.bannerNav span').removeClass('active');
							$('.bannerNav span').eq(i).addClass('active');
						}
						return;
					}
					if( top>=$('.njBox').eq(i).offset().top && top<$('.njBox').eq(i+1).offset().top ){
						$('.bannerNav span').removeClass('active');
						$('.bannerNav span').eq(i).addClass('active');
					}
				}
			}
			// 
			$('.bannerNav span').on('click', function () {
				var index = $('.bannerNav span').index($(this));
				var offsetTop = $('.njBox').eq(index).offset().top;
				$('body, html').stop().animate({scrollTop: offsetTop}, 1500);
			})
			// 
			$('.Doubt .content .contBottom .ll .border .problem p:last-child').css({'margin-bottom': '0'});
			// 
			$('.Resources .content .conTitle span:first-child').css({'border-right': '1px solid #BBB9B9'});
			$('.Resources .content .conTitle span').click(function () {
				var index = $('.Resources .content .conTitle span').index($(this));
				$(this).addClass('active').siblings('span').removeClass('active');
				$('.Resources .x_content .v').eq(index).stop().fadeIn().siblings('.v').css({'display': 'none'});
				if( index == 1 ){
					$('.Resources>div>p').html('作为业内唯一自己开发学校的留学机构，彬彬留学直接与海外院校合作，是众多美国中学的独家代理。');
					$('.Resources .content>a').html('了解更多优质学校');
				}else{
					$('.Resources>div>p').html('彬彬定期会引进校长团赴华来为学生面试，我们的学生享有优先录取、破格录取权。');
					$('.Resources .content>a').html('了解近期招生官来访计划');
				}
			})
			// 
			$('.Resources .x_content .v .box:nth-child(4n)').css({'margin-right': '0'});
			// 
			$('.Resources .x_content .v').eq(0).css({'display': 'block'});
			$('.Resources .x_content .v .box').on('click', function () {
				var videoSrc = $(this).children('.hover').attr('data-videoSrc');
				$('.tc_video').children('.video').children('video').attr('src', videoSrc);
				$('.tc_video').stop().fadeIn();
			})
			$('.tc_video .video img').click(function () {
				$('.tc_video').stop().fadeOut();
				$('.tc_video .video video').removeAttr('src');
			})
			// 
			$('.Recommend .content ul li span:nth-child(3n)').css({'border-right': 'none'});
			$('.Recommend .content ul li:last-child').css({'border-bottom': 'none'});
			// 
			$('.programme .content .box:last-child').css({'margin-right': '0'});
			// 彬彬后期监管服务css兼容性考虑
			$('.swiper-container3 .swiper-slide:nth-child(odd) .content .sj').css({
				'position': 'absolute',
				'left': '50%',
				'bottom': '-10px',
				'margin-left': '-10px',
				'border-top': '10px solid #2558B1',
				'border-left': '10px solid transparent',
				'border-right': '10px solid transparent',
				'transition': 'all .3s'
			})
			$('.swiper-container3 .swiper-slide:nth-child(odd) .content .sj2').css({
				'position': 'absolute',
				'left': '50%',
				'bottom': '-9px',
				'margin-left': '-10px',
				'border-top': '10px solid #FFFFFF',
				'border-left': '10px solid transparent',
				'border-right': '10px solid transparent',
				'transition': 'all .3s'
			})
			$('.swiper-container3 .swiper-slide:nth-child(2n) .content .sj').css({
				'position': 'absolute',
				'left': '50%',
				'top': '-10px',
				'margin-left': '-10px',
				'border-bottom': '10px solid #2558B1',
				'border-left': '10px solid transparent',
				'border-right': '10px solid transparent',
				'transition': 'all .3s'
			})
			$('.swiper-container3 .swiper-slide:nth-child(2n) .content .sj2').css({
				'position': 'absolute',
				'left': '50%',
				'top': '-9px',
				'margin-left': '-10px',
				'border-bottom': '10px solid #FFFFFF',
				'border-left': '10px solid transparent',
				'border-right': '10px solid transparent',
				'transition': 'all .3s',
			})
			$('.swiper-container3  .swiper-slide:nth-child(odd) .dot').css({
				'bottom': '-42px'
			})
			$('.swiper-container3 .swiper-slide:nth-child(2n) .dot').css({
				'top': '-42px'
			})
			$('.swiper-container3  .swiper-slide:nth-child(2n)').css({
				'padding-top': '176px'
			})
			// 彬彬后期监管服务js swiper配置
			var mySwiper3 = new Swiper('.swiper-container3',{
				slidesPerView : 6.7,
				offsetSlidesAfter : 2,
			});
			
			$('.leftBtn').click(function () {
				mySwiper3.swipePrev();
			});
			$('.rightBtn').click(function () {
				mySwiper3.swipeNext();
			});
			
			$('.Cost .content .box .boxBox').hover(function (){
				$(this).children('.div1').css({'display': 'none'});
				$(this).children('.div2').css({'display': 'inline-block'});
				$(this).css({'background-color': 'rgba(0,0,0,0.5)'});
			}, function () {
				$(this).children('.div1').css({'display': 'inline-block'});
				$(this).children('.div2').css({'display': 'none'});
				$(this).css({'background-color': 'rgba(0,0,0,0.3)'});
			})
			// 
			var mySwiper = new Swiper('.swiper-container',{
				pagination : '.pagination',
				paginationClickable : true
			});
			$('.getOffer .swiper-container .box:last-child').css({'margin-right': '0'});
			$('.getOffer .pagination span:last-child').css({'margin-right': '0'});
			// 
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
			$(window).scroll(function () {
				if( $(window).scrollTop() + 700 >= $('#mydiv').offset().top ){
					$('#mydiv .box .dq>div').css({'background-position-x': 'right'});	 
				}
				
				if( $(window).scrollTop() + 700 < $('#mydiv').offset().top ){
					$('#mydiv .box .dq>div').css({'background-position-x': 'left'});	 
				}
			})
			var t = document.documentElement.scrollTop || document.body.scrollTop;
			var scroll = true;
			if(t>=100){
				$('.topNav').css({'position': 'static'});
			}
			
			rVal($('.Doubt .content .contBottom .rForm input'));
			rVal($('.Doubt .content .contBottom .rForm textarea'));
			function rVal(Rinput) {
				var rformVal;
				Rinput.focus(function () {
					if( $(this).attr('placeholder') ){
						rformVal = $(this).attr('placeholder');
					}
					$(this).removeAttr('placeholder');
				})
				Rinput.blur(function () {
					if( rformVal ){
						$(this).attr('placeholder',rformVal);
					}
				})
			}
			// 验证手机号
			function isPhoneNo(phone) { 
				var pattern = /^1[34578]\d{9}$/; 
				return pattern.test(phone); 
			}
			$('.Doubt .content .contBottom .rForm button').on('click', function () {
				var Name = $('.Doubt .content .contBottom .rForm input.name').val();
				var Phone = $('.Doubt .content .contBottom .rForm input.phone').val();
				var Question = $('.Doubt .content .contBottom .rForm textarea').val();
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
						question: Question ,
						urlsite: url,
						page_title: $('title').eq(0).html(),
					},
					success: function (res) {
						alert(res.datas);
						$('.Doubt .content .contBottom .rForm input.name').val('');
						$('.Doubt .content .contBottom .rForm input.phone').val('');
						$('.Doubt .content .contBottom .rForm textarea').val('');
					}
				})
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
	</body>
</html>
