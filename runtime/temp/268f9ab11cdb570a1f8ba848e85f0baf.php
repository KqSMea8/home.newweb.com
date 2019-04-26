<?php /*a:6:{s:77:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\attnd_high.html";i:1552974481;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1551955433;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1551670345;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1552990534;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1552992994;s:86:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_highSchool.html";i:1552974318;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/attnd_high.css" />

	</head>
	<style>
		.banner{background: url(/static/home/img/page/zoudugaozhong/beijingtu.png) no-repeat center center;background-size: cover;width: 100%;height: 532px;}
		.banner h1{
			font-size: 64px;
			line-height: 88px;
			padding-top: 144px;
			padding-bottom: 6px;
			font-weight: normal;
			/* text-shadow:0px 3px 4px rgba(0,0,0,0.72); */
			color: #FFFFFF;
			text-align: center;
		}
		.v .box{width: 270px;height: 210px;box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);border-radius: 3px;text-align: center;margin-right: 16px;margin-bottom: 20px;cursor: pointer; transition: all 0.5s;}
		.v .box:hover{box-shadow: 0px 3px 16px rgba(0, 0, 0, 0.5);}
		.v .box .hover{position: relative;}
		.v .box .hover img{width: 248px;height: 143px;text-align: center;margin-top: 10px;}
		.v .box span{font-size: 14px;color: #333333;margin-top: 6px;display: block;margin-left: 9px;font-weight: bold;}
		.v .box video{width: 248px;height: 150px;margin-left: 8px;margin-top: 8px;}
		.v .box .hover{position: relative;}
		.v .box .hover img.bf{width: 49px;height: 49px;position: absolute;left: 50%;top: 50%;margin-top: -24.5px;margin-left: -24.5px;}
		.v .box video{background-color: #000000;display: none;}
		.title{font-size: 38px;font-weight: bold;color: rgba(0, 0, 0, 1);text-align: center;margin:0px 0 48px 0;padding-top: 80px;}
		/* 按钮 */
		
		.anniu {width: 648px;position: absolute;bottom: 141px;left: 50%;margin-left: -324px; text-align: center;}
		.anniu a {width: 226px;height: 50px;text-align: center;line-height: 52px;font-size: 22px;background-color:#FFFFFF;color: #7F95D1;display: inline-block;}		
		.anniu a:hover {background-color:#7F95D1;color: #FFFFFF;}
		.buttons:hover{background:rgba(127,149,209,1);border: 1px solid rgba(127,149,209,1);color:rgba(255,255,255,1);}
		.buttons{width:352px;height:50px;background:#fff;border-radius:4px;font-size:20px;color:rgba(127,149,209,1);line-height:50px;text-align: center;margin:50px auto;border: 1px solid rgba(127,149,209,1);;}
		.feature{width:100%;height:1213px;background:url(/static/home/img/page/zoudugaozhong/zoudugaozhongtedian.jpg) no-repeat center center;background-size:cover;}
		.titles{font-size:38px;font-weight:bold;color:rgba(0,0,0,1);text-align: center;padding-top: 80px;letter-spacing: 2px;}
		.yaosu{width:100%;height:778px;background: #fff;}
		.term{width:554px;height:432px;background:url(/static/home/img/page/zoudugaozhong/yingxingtiaojian.jpg)  no-repeat center center;background-size:cover;}
		.bgc{width:550px;height:432px;background: #D6E4FF;}
		.titless{font-size:38px;font-weight:bold;color:rgba(0,0,0,1);text-align: center;padding-top: 80px;margin-bottom:54px;}
		.yingxing{cursor: pointer;width:60px;height:187px;background:rgba(127,149,209,1);position: absolute;top: 0px;left:-24px;font-size:26px;font-weight:bold;color:rgba(255,255,255,1);text-align: center;}
		.yingxing span{width: 50px;display: block;margin:20px auto;}
		.tiaojian{cursor: pointer;width:60px;height:187px;background:rgba(127,149,209,1);position: absolute;right:-30px;bottom: 0px;font-size:26px;font-weight:bold;color:rgba(255,255,255,1);text-align: center;}
		.tiaojian span{width: 50px;display: block;margin:20px auto;}
		.border{position: relative;}
		.contents{margin:46px 0 0 62px;}
		.contents p{font-size:18px;color:rgba(255,255,255,1);color:#fff;margin-top:10px;}
		.contents span{font-size:16px;display:block;color:rgba(255,255,255,1);margin-top:6px;}
		.contents a{font-size:18px;font-family:MicrosoftYaHei;color:rgba(133,165,255,1);margin-top: 12px;}
		.contents a:hover{text-decoration: underline;}
		.contentss{margin: 36px 0 0 62px;}
		.contentss p{font-size:18px;color:rgba(255,255,255,1);color:#fff;margin-top:10px;color:#000000;}
		.contentss span{font-size:16px;display:block;color:rgba(255,255,255,1);margin-top:6px;color: #000;}
		.contentss a{font-size:18px;font-family:MicrosoftYaHei;color:rgba(133,165,255,1);margin-top: 12px;}
		.bannerNav {width: 100%;height: 60px;background-color: #EEEEEE;line-height: 60px;font-size: 0;}
		.bannerNav>div {height: 60px;}
		.bannerNav span {font-size: 17px;margin-right:42px;cursor: pointer;}
		.bannerNav span.active {color: #A28450;}
		.quanmian{width:100%;height:624px;background:url(/static/home/img/page/zoudugaozhong/shenqingfuwu.jpg) no-repeat center center;background-size:cover;}
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
		<!--banner-->
		<div class="banner">
			<h1>美国顶级走读高中申请指南</h1>
			<!-- 按钮 -->
			<div class="anniu clearfix">
				<a href="javascript:;" onclick="go()"  class="one" style="margin-right: 100px;">获取留学规划</a>
				<a href="javascript:;" onclick="go()"  class="two">开启选校测评</a>
			</div>
		</div>
		<!--banner-->
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">顶级走读高中</span>
				<span>走读高中特点</span>
				<span>申请要素</span>
				<span>申请服务</span>
				<span>背景提升</span>
				<span>留学课堂</span>
				<span>监管服务</span>
				<span>寄宿家庭安置</span>
				<span>精彩案例</span>
				<span>彬彬优势</span>
			</div>
		</div>
		<div class="bei gk_index huadou">
		<div class="gWidth1170 ">
			<div class="title">
				彬彬助您冲击美国顶级走读高中
			</div>
			<div class="v clearfix">
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
					<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/f1b642b25285890786209081951/hAuFC8cJoFMA.mp4">
						<img src="/static/home/img/page/LowAge/kwc.jpg" alt="考文垂基督学校" title="考文垂基督学校" />
						<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
					</div>
					<span>考文垂基督学校</span>
				</div>
				<div class="fl box">
					<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/6209e4d4vodtranscq1256778600/5a13c9b05285890786445177401/v.f20.mp4">
						<img src="/static/home/img/page/LowAge/wst.jpg" alt="文森特学院" title="文森特学院" />
						<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
					</div>
					<span>文森特学院</span>
				</div>
				<div class="fl box">
					<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/6209e4d4vodtranscq1256778600/59dbdbf45285890786445144474/v.f20.mp4">
						<img src="/static/home/img/page/LowAge/swkt.jpg" alt="圣维克特高中" title="圣维克特高中" />
						<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
					</div>
					<span>圣维克特高中</span>
				</div>
				<div class="fl box">
					<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/6209e4d4vodtranscq1256778600/59db47525285890786445143293/v.f20.mp4">
						<img src="/static/home/img/page/LowAge/plsd.jpg" alt="普林斯顿圣心学院" title="普林斯顿圣心学院" />
						<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
					</div>
					<span>普林斯顿圣心学院</span>
				</div>
				<div class="fl box">
					<div class="hover" data-videoSrc="http://1256778600.vod2.myqcloud.com/6209e4d4vodtranscq1256778600/579968785285890786445055819/v.f20.mp4">
						<img src="/static/home/img/page/LowAge/aew.jpg" alt="阿尔文诺高中" title="阿尔文诺高中" />
						<img src="/static/home/img/page/LowAge/baofang@2x.png" class="bf" alt="">
					</div>
					<span>阿尔文诺高中</span>
				</div>
			</div>
			<a href="javascript:;" onclick="go()"  class="buttons">点击申请走读高中</a>
		</div>
		</div>
		<!-- 彬彬教育致力让每一个学生牵手世界名校 -->
		
		<!--走读高中特点-->
		<div class="feature gk_index">
			<div class="titles">美国走读高中特点</div>
			<div class="gWidth1170">
				<div class="dasdsa clearfix">
					<div class="lefts fl">
						<ul>
							<li style="margin-top:-46px;"><div class="disanbk">住宿条件</div><span>走读高中的学生住在寄宿家庭。</span></li>
							<li><div class="disanbk">国际生比例</div><span>走读高中的国际学生比例在1%-8%之间，多为美国当地学生。</span></li>
							<li><div class="disanbk">招生情况</div><span>走读高中招生名额不受学校宿舍床位的限制，招生人数多，且学校数量要多于寄宿中学，而且录取率高。</span></li>
						</ul>
					</div>
					<div class="lefts1 fl">
						<ul>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<div class="centers fl">
						<ul>
							<li>
								<div class="raidus"><span></span></div>
							</li>
							<li>
								
							</li>
							<li>
								<div class="raidus"><span></span></div>
							</li>
							<li>

							</li>
							<li>
								<div class="raidus"><span></span></div>
							</li>
							<li>

							</li>
							<li>
								<div class="raidus"><span></span></div>
							</li>
							<li>

							</li>
							<li>
								<div class="raidus"><span></span></div>
							</li>
							<li>

							</li>
							<li>
								<div class="raidus"><span></span></div>
							</li>
							
							<li>

							</li>
						</ul>
					</div>
					<div class="rights1 fl">
						<ul>
							<li style="margin-top: 140px;"></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<div class="rights fl">
						<ul>
							<li style="margin-top: 88px;"><div class="disanbk" style="right: 0px;">课余活动</div><span style="padding-top:34px;">走读高中的学生在参加学校活动的同时更多的是参加家庭活动，寄宿家庭的家长会把寄宿的国际学生当作是家庭的一份子， 愿意带着孩子一起参加各种社交活动，结识美国新朋友。</span></li>
							<li><div class="disanbk"  style="right: 0px;">地理位置</div><span>走读高中一般在市区生活周边。</span></li>
							<li><div class="disanbk"  style="right: 0px;">学费情况</div><span>走读高中的费用比寄宿中学低。走读中学一年学费和生活费一般在＄40,000-＄75,000。</span></li>
						</ul>
					</div>
				</div>	
			</div>
			<a href="javascript:;" onclick="go()"  class="buttons" style="margin: 0 auto;">我要申请走读高中</a>
		</div>
		<!--走读高中特点-->

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
							<a href="javascript:;" onclick="go()" >如何提高个人成绩</a>
						</div>
						<div class="contents">
							<p>● 美国精品中学</p>
							<span>GPA成绩；TOEFL；SSAT美国中学入学考试；资金证明；面试</span>
							<a href="javascript:;" onclick="go()" >如何提高个人成绩</a>
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
							<a href="javascript:;" onclick="go()" >我要提高软性背景</a>
						</div>
					</div>
					
				</div>
				<a href="javascript:;" onclick="go()"  class="buttons">你与美国名校只有一步之遥</a>
			</div>
		</div>
		<!--美国高中申请要素-->
		
		<!--全面申请服务-->
		<div class="quanmian gk_index">
			<div class="titles">
				全面的申请服务
			</div>
			<div class="gWidth1170">
				<div class="txts">
					<ul class="clearfix">
						<li><span>海归精英顾问<br />全程规划留学方案</span><div class="triangle_border_down"></div></li>
						<li>背景提升</li>
						<li><span>数千所优质院校<br />大数据智能匹配</span><div class="triangle_border_down"></div></li>
						<li>文书规划</li>
						<li><span>全真模拟美国面试<br />轻松冲刺名校</span><div class="triangle_border_down"></div></li>
						<li>获取Offer</li>
						<li><span>海外团队定期探访<br />24h紧急情况处理</span><div class="triangle_border_down"></div></li>
					</ul>
				</div>
				
				<div class="txts1">
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
				<div class="txts2">
					<ul class="clearfix">
						<li>留学规划</li>
						<li><span>打造个人软实力<br />进阶美国名校</span><div class="triangle_border_up"></div></li>
						<li>选校指导</li>
						<li><span>美式思维创作<br />录取率100%</span><div class="triangle_border_up"></div></li>
						<li>面试辅导</li>
						<li><span>每位同学至少获得<br />2份以上录取offer</span><div class="triangle_border_up"></div></li>
						<li>海外服务</li>
					</ul>
				</div>
				<a href="javascript:;" onclick="go()"  class="buttons">点击申请美国名校</a>
			</div>
		</div>
		<!--全面申请服务-->
		<style type="text/css">
			.disanbk{width:154px;height:48px;background:rgba(127,149,209,1);text-align: center;line-height:48px;font-size:22px;font-weight:bold;color: #fff;position: absolute;top:-28px;}
			.dasdsa{margin-top: 80px;}
			.lefts1{margin-top: 14px;}
			.lefts1 li{width:128px;height:2px;border-bottom:1px solid rgba(151,151,151,1);margin-bottom: 274px;}
			.lefts li{width:439px;height:138px;background:rgba(155,155,155,0.27);margin-bottom: 138px;position: relative;}
			.lefts li span{font-size:16px;color:rgba(0,0,0,1);display: block;text-align:left;margin-left:26px;padding-top:48px;}
			.rights1{margin-top: 14px;}
			.rights1 li{width:128px;height:2px;border-bottom:1px solid rgba(151,151,151,1);margin-top: 274px;}
			.rights li{position: relative;width:439px;height:138px;background:rgba(155,155,155,0.27);margin-top:138px;}
			.rights li span{font-size:16px;color:rgba(0,0,0,1);display: block;text-align:left;margin:0 26px 0 26px;padding-top:40px;}
			.centers li:nth-child(even){width:2px;height:102px;border-left:2px solid rgba(207,207,207,1);margin-left: 16px;}
			.raidus{width:34px;height:34px;border:1px solid rgba(127,149,209,1);border-radius:50px;}
			.raidus span{width:24px;height:24px;background:rgba(127,149,209,1);border-radius:50px;display: block;margin: 5px auto;}
			/*向下*/
			.triangle_border_down{width:0;height:0;border-width:10px 10px 0;border-style:solid;border-color:rgba(155,155,155,0.27) transparent transparent;/*灰 透明 透明 */margin:29px auto;position:relative;}
			.triangle_border_up{width:0;height:0;border-width:0 10px 10px;border-style:solid;border-color:transparent transparent rgba(155,155,155,0.27);/*透明 透明  灰*/margin:40px auto;position:relative;bottom: 130px;}
			.txts{margin-top:50px;}
			.txts li{float:left;}
			.txts li span{margin-top:28px;display: block;}
			.txts li:nth-child(even){font-size:22px;font-weight:500;color:rgba(127,149,209,1);margin:72px 38px 0 38px;}
			.txts li:nth-child(odd){width:164px;height:109px;background:rgba(155,155,155,0.27);border-radius:4px 4px 4px 0px;text-align: center;line-height:26px;}
			.txts1{margin: 20px 0 20px 62px;}
			.txts1 li{float: left;}
			.txts1 li:nth-child(even){width:152px;height:1px;border-bottom:1px dashed rgba(151,151,151,1);margin-top:6px;}
			.txts1 li:nth-child(odd){width:16px;height:16px;background:rgba(127,149,209,1);border-radius: 50%;}
			.txts2 li{float:left;}
			.txts2 li span{margin-top:28px;display: block;}
			.txts2 li:nth-child(odd){font-size:22px;font-weight:500;color:rgba(127,149,209,1);margin:0px 38px 0 38px;}
			.txts2 li:nth-child(even){width:164px;height:109px;background:rgba(155,155,155,0.27);border-radius:4px 4px 4px 0px;text-align: center;line-height:26px;}
		</style>
		<!--定制背景活动-->
		<div class="flexsb gk_index">
			<div class="gWidth1170">
				<div class="titles">定制背景提升活动</div>
				<div class="zation clearfix">
					<div class="custom">
						<img src="/static/home/img/page/zoudugaozhong/chaban.jpg" alt="插班" title="插班" />
						<div class="shadow">
							<h3>插班</h3>
							<div class="bordere">
								<span>中国学生利用不同国家学校放假和开学的时间差，赴国外走进当地的学校，进行短期学习，深度体验国外的课堂，感受多元文化。</span>
							</div>
						</div>
					</div>
					<div class="custom">
						<img src="/static/home/img/page/zoudugaozhong/fangxiao.jpg" alt="访校" title="访校" />
						<div class="shadow">
							<h3>访校</h3>
							<div class="bordere">
								<span>利用美国当地学校开放日，进入美国精英学校，让孩子体验美高课程，了解美国文化，提升跨文化交流的能力</span>
							</div>
						</div>
					</div>
					<div class="custom" style="margin-right:0px;">
						<img src="/static/home/img/page/zoudugaozhong/fugaiquanlei.jpg" alt="夏令营" title="夏令营" />	
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
				<a href="javascript:;" onclick="go()"  class="buttons">马上进行私人定制</a>
			</div>
		</div>
		<!--定制背景活动-->
		<style>
			.black p span{font-weight: bold;}
			.text.on{display:block;}
		</style>
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
							<a href="javascript:;" onclick="go()" >我要申请免费试听</a>
						</div>
					</div>
					<div class="white">
						<div class="black">
							<h4>语言课程</h4>
							<p><span>课程目的：</span>提前熟悉美国英语课程要求，提高英语水平。</p>
							<p><span>课程涵盖：</span>英语（语言文学）、英语写作、英语听说、 ESL等。</p>
							<p><span>适用年级: </span>7-12年级</p>
							<a href="javascript:;" onclick="go()" >我要申请免费试听</a>
						</div>
					</div>
					<div class="white" style="margin-right: 0px;">
						<div class="black">
							<h4>数学课程</h4>
							<p><span>课程目的：</span>帮助了解美国数学课程侧重点，着重知识的应用能力。</p>
							<p><span>课程涵盖：</span>数学、高等函数、微积分与向量、统计学等。</p>
							<p><span>适用年级: </span>7-12年级</p>
							<a href="javascript:;" onclick="go()" >我要申请免费试听</a>
						</div>
					</div>
					<div class="white">
						<div class="black">
							<h4>自然科学课程</h4>
							<p><span>课程目的：</span>紧抓2019AP考点、难点、全程学习，突破5分轻松冲刺美国名校。 </p>
							<p><span>课程涵盖：</span>AP文学与创作、AP微积、AB/BC、AP统计、AP宏观经济等，37个学科均可授课。 </p>
							<p><span>适用年级: </span>7-12年级</p>
							<a href="javascript:;" onclick="go()" >我要申请免费试听</a>
						</div>
					</div>
					<div class="white">
						<div class="black">
							<h4>社会科学课程</h4>
							<p><span>课程目的：</span>海外精英讲师授课，快速并准确了解美国背景及发展历史。 </p>
							<p><span>课程涵盖：</span>美国地理、美国历史、世界历史、经济、心理学、政府和政治、美国政治、圣经等。</p>
							<p><span>适用年级: </span>7-12年级</p>
							<a href="javascript:;" onclick="go()" >我要申请免费试听</a>
						</div>
					</div>
					<div class="white"  style="margin-right: 0px;">
						<div class="black">
							<h4>艺术课程</h4>
							<p><span>课程目的：</span>美国本土资深艺术教师授课，帮你提高艺术基础，指点学生如何突破瓶颈。 </p>
							<p><span>课程涵盖：</span>视觉设计、音乐、创意写作、舞蹈、电影&数字媒体等。</p>
							<p><span>适用年级: </span>7-12年级</p>
							<a href="javascript:;" onclick="go()" >我要申请免费试听</a>
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
					<div class="boxs fl">
						<div class="hidden1">寄宿家庭安置全服务</div>
						<div class="hidden2">
							<h3>寄宿家庭安置全服务</h3>
							<p>提供寄宿家庭选择十个月食宿费用<br />上、下学交通国际学生监护免费寄宿家庭更换</p>
							<a href="javascript:;" onclick="go()" >查看详情</a>
						</div>
					</div>
					<div class="boxs box2 fl">
						<div class="hidden1">住宿管理</div>
						<div class="hidden2">
							<h3>住宿管理</h3>
							<p>7*24紧急情况协助匹配服务团队<br />随时沟通协助处理出现、<br />就医等定期家访、校访生活矛盾处理</p>
							<a href="javascript:;" onclick="go()" >查看详情</a>
						</div>
					</div>
					<div class="boxs box3 fl" style="margin-right: 0px;">
						<div class="hidden1">学业跟踪</div>
						<div class="hidden2">
							<h3>学业跟踪</h3>
							<p>校规培训及介绍成绩跟踪及反馈<br />选课及学习指导升学规划转学申请</p>
							<a href="javascript:;" onclick="go()" >查看详情</a>
						</div>
					</div>
					<div class="boxs box4 fl">
						<div class="hidden1">留学课堂</div>
						<div class="hidden2">
							<h3>留学课堂</h3>
							<p>背景提升美国风俗文化授课名校学长<br />传授留学经验美国生活指导定期组织课外活动</p>
							<a href="javascript:;" onclick="go()" >查看详情</a>
						</div>
					</div>
					<div class="boxs box5 fl">
						<div class="hidden1">行前指导</div>
						<div class="hidden2">
							<h3>行前指导</h3>
							<p>机票购买指导行前行李准备<br />出入境指导安全培训选课、校服、疫苗体检等指导</p>
							<a href="javascript:;" onclick="go()" >查看详情</a>
						</div>
					</div>
					<div class="boxs box6 fl" style="margin-right: 0px;">
						<div class="hidden1">其他支持服务</div>
						<div class="hidden2">
							<h3>其他支持服务</h3>
							<p>ISWP心理支持服务 / 法务支持<br /> 协助解决突发事件 / 租房/买房/移民</p>
							<a href="javascript:;" onclick="go()" >查看详情</a>
						</div>
					</div>
				</div>
				</div>	
			</div>
		</div>
		<!--彬彬海外监管服务-->
		
		<!--海外监管服务团队-->
		<div class="serve">
			 <div class="titles">海外监管服务团队</div>
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
					<img src="/static/home/img/page/LowAge/学业支持.jpg" class="back" alt="Lisa" title="Lisa">
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
			 <a href="javascript:;" onclick="go()"   class="buttons">点击查看更多监管服务</a>
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
		
		<!--寄宿家庭安置全服务-->
		<div class="safe gk_index">
			<div class="titles">寄宿家庭安置全服务</div>
			<div class="gWidth1170">
			<div class="anquan">
				<ul class="clearfix">
					<li><a href="javascript:;" onclick="go()" ><img src="/static/home/img/page/zoudugaozhong/fugaiquanlei2.jpg" alt="10000+寄宿家庭覆盖全类" title="10000+寄宿家庭覆盖全类" /><div class="texte">10000+寄宿家庭覆盖全类</div></a></li>
					<li><a href="javascript:;" onclick="go()" ><img src="/static/home/img/page/zoudugaozhong/beijngdiaocha.jpg" alt="寄宿家庭背景调查" title="寄宿家庭背景调查" /><div class="texte">寄宿家庭背景调查</div></a></li>
					<li style="margin-right: 0px;"><a href="javascript:;" onclick="go()" ><img src="/static/home/img/page/zoudugaozhong/shisufeiyong.jpg" alt="包含学年食宿费用" title="包含学年食宿费用" /><div class="texte">包含学年食宿费用</div></a></li>
					<li><a href="javascript:;" onclick="go()" ><img src="/static/home/img/page/zoudugaozhong/shangxiaxuejiaotongchaobianli.jpg" alt="上下学交通超便利" title="上下学交通超便利" /><div class="texte">上下学交通超便利</div></a></li>
					<li><a href="javascript:;" onclick="go()" ><img src="/static/home/img/page/zoudugaozhong/jianhuzhize.jpg" alt="国际学生监护职责" title="国际学生监护职责" /><div class="texte">国际学生监护职责</div></a></li>
					<li style="margin-right: 0px;"><a href="javascript:;" onclick="go()" ><img src="/static/home/img/page/zoudugaozhong/genghuan.jpg" alt="免费更换寄宿家庭" title="免费更换寄宿家庭" /><div class="texte">免费更换寄宿家庭</div></a></li>
				</ul>
			</div>	
			<a href="javascript:;" onclick="go()"  class="buttons">点击了解更多服务内容</a>
			</div>
		
		</div>
		<!--寄宿家庭安置全服务-->
		<!--申请走读高中精彩案例-->
		<div class="case gk_index">
			<div class="titles">申请走读高中精彩案例</div>
			<p class="diand">前辈分享真实案例 留学之路避免入坑</p>
			<div class="gWidth1170">
				<div class="shaiz clearfix">
					<ul class="clearfix">
						<li>
							<img src="/static/home/img/page/zoudugaozhong/ma1.jpg" alt="马同学" title="马同学"/>
							<div class="boxshdows">马同学</div>
							<div class="guang">
								<h2>软性实力不足 阶段性规划进军体育强校</h2>
								<p>马同学申请的时候差不多快要过年了，申请资料递交的比较晚，加之语言成绩太低，软性背景不足，但一心想要申请美国体育强校西北基督教高中，在彬彬留学规划师120%的努力下终拿到学校的录取。 </p>
								<h4>●录取院校：西北基督教高中</h4>
								<a href="/studentstory/728.html" style="left: 65%;" target="_blank">案例详情</a>
							</div>
						</li>
						<li style="margin-right: 0px;">
							<img src="/static/home/img/page/zoudugaozhong/ma2.jpg" alt="田同学" title="田同学"/>
							<div class="boxshdows">田同学</div>
							<div class="guang">
								<h2>申请较晚 材料递交及时赢得蓝带高中招生官的青睐！</h2>
								<p>田同学和家长来到彬彬留学咨询已经5月份，这时候申请美国高中最佳的时机已经过去，但是由于材料递交的及时，赢得了圣维克特高中skype面试的机会，并得到面试官的喜爱拿下该校录取。  </p>
								<h4>●录取院校：圣维克特高中</h4>
								<a href="/studentstory/729.html" style="left: 65%;" target="_blank">案例详情</a>
							</div>
						</li>
						<li> 
							<div class="guang">
								<h2>文书展现亮点 数学学霸喜获杰赛拉高中offer</h2>
								<p>家长在选校方面一直举棋不定，在认真考虑的同时我们的留学规划师也给出了最专业的建议，终定校维礼基督高中。  </p>
								<h4>●录取学校：杰赛拉高中</h4>
								<a href="/studentstory/150.html" target="_blank">案例详情</a>
							</div>
							<img src="/static/home/img/page/zoudugaozhong/ma3.jpg" alt="Kevin" title="Kevin"/>
							<div class="boxshdows" style="right:0px;">Kevin</div>
						
						</li>
						<li style="margin-right: 0px;">
							<div class="guang">
								<h2>也曾执意排名 拨乱反正收到奎格利天主中学录取</h2>
								<p>在家长执意的美国高中排名的时候，彬彬留学申请老师为家长和曹同学深度解说了美国高中排名情况以及该从哪些方面去正确看待排名，由此打开了家长的心结，顺利定校奎格利天主中学并收到录取。</p>
								<h4>●录取学校：奎格利天主中学</h4>
								<a href="/studentstory/734.html" target="_blank">案例详情</a>
							</div>
							<img src="/static/home/img/page/zoudugaozhong/ma4.jpg" alt="曹同学" title="曹同学"/>
							<div class="boxshdows"  style="right:0px;">曹同学</div>
						</li>
					</ul>
				</div>
				<a href="javascript:;" onclick="go()"  class="buttons">查看更多案例</a>
			</div>
		</div>
		<!--申请走读高中精彩案例-->
		<style type="text/css">
			.tc_video{width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); position: fixed; top: 0; left: 0; display: none;}
			.tc_video .video{width: 1100px; height: 540px; background-color: #000000; position: absolute; left: 50%; top: 50%; margin-top: -270px; margin-left: -550px;}
			.tc_video .video video{width: 100%; height: 100%; background-color: #000000;}
			.tc_video .video img{width: 18px; height: 18px; position: absolute; right: 15px; top: 15px; cursor: pointer;}
			.acindexs.on{display:block;}
			.acindexs{display: none;}
			.acindexs h4{font-size:18px;color:rgba(0,0,0,1);margin:30px 0 30px 0;text-align: center;} 
			.acindexs .hidden{width: 50%;height: 416px;background-color: rgba(0,0,0,0.5);position: absolute;top:54px;right: 0;color: #fff;padding-left: 72px;box-sizing: border-box;}
			.acindexs .hidden h3{font-size: 32px;margin-top: 95px;margin-bottom: 17px;font-weight: normal;}
			.acindexs .hidden span{width: 48px;height: 2px;background-color:rgba(127,149,209,1);display: block;margin-bottom: 27px;}
			.acindexs .hidden p{font-size: 14px;width: 464px;line-height: 24px;margin-bottom: 34px;}
			.acindexs .hidden a{width: 122px;height: 34px;color: #fff;border: 1px solid #fff;text-align: center;line-height: 34px;border-radius: 5px;font-size: 16px;}
			.acindexs .hidden a:hover{background-color: rgba(127,149,209,1); border-color: rgba(127,149,209,1);}
			.bf{width: 64px;height: 64px;position: absolute;left: 50%;top: 50%;margin: -32px 0 0 -32px;cursor:pointer;}
			.tabs{width:100%;margin-top:46px;}
			.tabs ul{width: 70%;margin: 10px auto;}
			.tabs li{float: left;font-size:22px;color:rgba(0,0,0,1);letter-spacing: 1px;width:33%;text-align: center;cursor: pointer;}
			.tabs li em{width:139px;height:6px;background:rgba(127,149,209,1);display:block;margin: 10px auto;display: none;}
			.tabs li.on em{display: block;color: rgba(127,149,209,1);}
			.boxshdows{text-align: center;width:285px;height:60px;background:rgba(0,0,0,.5);position: absolute;bottom:0px;font-size:26px;font-weight:500;color:rgba(255,255,255,1);line-height:60px;}
			.guang{width:244px;float: left;margin:0 20px;position: static;}
			.guang a{width:130px;height:34px;background:rgba(127,149,209,1);border-radius:4px;line-height: 34px;text-align: center;display:inline-block;color: #fff;position: absolute;bottom: 30px;left: 15%;}
			.guang a:hover{opacity: 0.8;}
			.guang h2{font-size:18px;font-weight:500;color:rgba(0,0,0,1);margin: 20px 0px 16px 0px;}
			.guang P{font-size:14px;font-weight:400;margin-top:16px;}
			.guang h4{font-size:14px;font-weight:600;margin-top:20px;}
			.shaiz li{float: left;width:570px;height:342px;background: #D6E4FF;margin:30px 30px 0 0;position: relative;}
			.shaiz li img{float: left;width:285px;height:342px;}
			.case{width:100%;height:1100px;background: url(/static/home/img/page/zoudugaozhong/jingcaianlibeijng.jpg) no-repeat center center;background-size: cover;}
			.anquan li{position: relative;float: left;margin: 30px 30px 0 0;width:370px;height:226px;overflow: hidden;}
			.anquan li img{width:370px;height:222px;overflow: hidden;}
			.anquan li>a>.texte{position: absolute;top: 0px;left: 0px;width:370px;height:222px;background:rgba(0,0,0,.3);color:#fff;text-align: center;font-size: 24px;font-weight: bold;line-height: 214px;}
			.anquan li>a{transition: all 0.4s ease-in-out;} 
			.anquan li>a:hover{transform: scale(1.2);}
			.safe{width:100%;height:820px;}
			.serve{width:100%;height:980px;background: url(/static/home/img/page/zoudugaozhong/haiwaijianguanfuwubeijing.jpg) no-repeat center center;background-size: cover;margin-top: 60px;}
			.boxs{width: 364px; height: 224px; background: url(/static/home/img/page/zoudugaozhong/jisujiatinganzhifuwu.jpg) no-repeat center center; background-size: cover; position: relative; margin-right:37px; margin-top:30px;}
			.box2{background: url(/static/home/img/page/zoudugaozhong/zhusuguanli.jpg) no-repeat center center;width: 364px;height: 224px;background-size: cover;}
			.box3{background: url(/static/home/img/page/zoudugaozhong/xueyegenzong.jpg) no-repeat center center;width: 364px;height: 224px;background-size: cover;}
			.box4{background: url(/static/home/img/page/zoudugaozhong/liuxueketang.jpg) no-repeat center center;width: 364px;height: 224px;background-size: cover;}
			.box5{background: url(/static/home/img/page/zoudugaozhong/xingqianzhidao.jpg) no-repeat center center;width: 364px;height: 224px;background-size: cover;}
			.box6{background: url(/static/home/img/page/zoudugaozhong/qitazhichifuwu.jpg) no-repeat center center;width: 364px;height: 224px;background-size: cover;}
			.boxs .hidden1{position: absolute; left: 0; top: 0; width: 100%; height: 100%; font-size: 20px; color: #FFFFFF; font-weight: bold; text-align: center; line-height: 224px; background:rgba(0,0,0,.5); display: block;}.boxs .hidden2{position: absolute; left: 0; top: 0; width: 100%;height: 100%;background: rgba(23,14,1,0.6);color: #FFFFFF;text-align: center;display: none;}
			.boxs .hidden2  a{width:163px;height:36px;border-radius:4px;border:1px solid rgba(255,255,255,1);font-size:16px;font-weight:bold;color:rgba(255,255,255,1);line-height:36px;letter-spacing:2px;margin: 20px auto;}
			.boxs .hidden2 a:hover{background-color: rgba(127,149,209,1); border-color: rgba(127,149,209,1);}
			.boxs .hidden2 h3 {font-size: 18px;padding-top: 34px;padding-bottom: 20px;}
			.diand{text-align: center;margin-top:20px;}
			.liuxue li{float: left;margin:20px 30px 0 0;}
			.images img{width:370px;height:210px;}
			.black{width:300px;height:363px;border:2px solid rgba(127,149,209,1);margin: 18px auto;padding: 0 20px;}
			.black h4{font-size:24px;font-weight:bold;color:rgba(0,0,0,1);text-align: center;margin:18px auto;}
			.black p{font-size:16px;color:rgba(0,0,0,1);margin-top:24px;}
			.black a{width:201px;height:40px;border-radius:4px;border:2px solid rgba(127,149,209,1);margin:40px auto;text-align: center;line-height:40px;transition: all 0.2s ease-in-out;}
			.black a:hover{background: #7F95D1;color: #fff;}
			.white{width:370px;height:399px;background: #fff;float: left;margin:0 30px 20px 0;}
			.white:nth-child(2){margin-top:36px;}
			.white:nth-child(5){margin-top:36px;}
			.text{font-size:18px;color:rgba(0,0,0,1);text-align: center;line-height: 28px;margin-top: 50px;display: none;}
			.zation{margin-top: 60px;}
			.custom{width:370px;height:273px;float: left;margin-right:30px;position: relative;overflow:hidden;}
			.custom img{width:370px;height:273px;}
			.shadow{width:370px;height:273px;background: rgba(0,0,0,.5);position: absolute;left: 0px;top:204px;transition: all 0.4s ease-in-out;}
			.shadow:hover{top: 0px;}
			.shadow h3{font-size:24px;font-weight:bold;color:#fff;text-align: center;margin: 22px 0 20px 0;}
			.bordere{width:320px;height:169px;margin:10px auto;}
			.bordere span{color: #fff;padding: 0 24px;display: block;color:rgba(255,255,255,1);line-height:21px;margin-top: 30px;}
			.classroom{width:100%;height:1114px;background:url(/static/home/img/page/zoudugaozhong/zhuanshuketang.jpg) no-repeat center center;background-size:cover;}
		</style>

		<div id="mydiv" class="" style="height:628px;">
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
		
			$('.custom').hover(function(){
				$('.text').eq($(this).index()).addClass('on').siblings().removeClass('on');
			});
		 
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
		
			$('.boxs').hover(function () {
				$(this).children('.hidden1').stop().fadeOut();
				$(this).children('.hidden2').stop().fadeIn();
			}, function (){
				$(this).children('.hidden2').stop().fadeOut();
				$(this).children('.hidden1').stop().fadeIn();
			})
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
				$('body, html').stop().animate({scrollTop: offsetTop + 10}, 1500);
				if( index == $('.bannerNav span').length - 1 ){
					
				}
			})
			// 
			$('.bannerNav span:last-child').css({'margin-right': '0'});
			$(' .v .box:nth-child(4n)').css({'margin-right': '0'});
		
		$('.v').eq(0).css({
			'display': 'block'
		});
		$('.v .box').on('click', function() {
			var videoSrc = $(this).children('.hover').attr('data-videoSrc');
			$('.tc_video').children('.video').children('video').attr('src', videoSrc);
			$('.tc_video').stop().fadeIn();
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
	
</html>