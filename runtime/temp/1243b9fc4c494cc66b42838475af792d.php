<?php /*a:6:{s:78:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\blue_ribbon.html";i:1552974630;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1551955433;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1551670345;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1552959452;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1552979867;s:86:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_highSchool.html";i:1552974318;}*/ ?>
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
	<link rel="stylesheet" href="/static/home/css/page/blue_ribbon.css" />
</head>
<style type="text/css">
		.banner {background: url(/static/home/img/page/landai/banner.jpg) no-repeat center center;background-size: cover;width: 100%;height: 532px;position: relative;}
		.bannerNav {width: 100%;height: 60px;background-color: #EEEEEE;line-height: 60px;font-size: 0;}
		.bannerNav>div {height: 60px;}
		.bannerNav span {font-size:17px;cursor: pointer;width: 11%;text-align: center;display: inline-block;}
		.bannerNav span.active {color:#A28450;font-weight:bold;}
		.anniu{position: absolute;bottom:100px;left:44%;}
		.anniu a{border:1px solid rgba(209,166,127,1);letter-spacing: 1px;font-size:24px;z-index: 111;width:239px;height:50px;color:rgba(209,166,127,1);border-radius:4px;line-height:50px;text-align: center;transition:all 0.2s ease-in-out;}
		.anniu a:hover{background:rgba(209,166,127,1);color: #fff;}
		.tedian{width:100%;height:623px;background: #fff;}
		.titles{font-size: 38px;font-weight: bold;color: rgba(0, 0, 0, 1);text-align: center;margin: 0px 0 5px 0;padding-top: 80px;}
		
		.boxs {width:226px;height:248px;background: url(/static/home/img/page/landai/cheng.png) no-repeat center center;background-size: cover;position: relative;margin-right:10px;}
		.box2{background: url(/static/home/img/page/landai/jingyingjiayu.png) no-repeat center center;width:226px;height:248px;background-size: cover;}
		.box3{background: url(/static/home/img/page/landai/ylhj.png) no-repeat center center;width:226px;height:248px;background-size: cover;margin-right: 0px;}
		.box4{background: url(/static/home/img/page/landai/yqyg.png) no-repeat center center;width:226px;height:248px;background-size: cover;}
		.box5{background: url(/static/home/img/page/landai/zyzd.png) no-repeat center center;width:226px;height:248px;background-size: cover;}
		.boxs .hidden1 {position: absolute;left: 0;top: 0;width: 100%;height: 100%;font-size: 20px;color: #FFFFFF;font-weight: bold;text-align: center;line-height: 248px;background:rgba(0,0,0,.5);display: block;}
		.boxs .hidden2 {position: absolute;left: 0;top: 0;width: 100%;height: 100%;background: rgba(23,14,1,0.6);color: #FFFFFF;text-align: center;display: none;}
		.boxs .hidden2  a{width:163px;height:36px;border-radius:4px;border:1px solid rgba(255,255,255,1);font-size:16px;font-weight:bold;color:rgba(255,255,255,1);line-height:36px;letter-spacing:2px;margin: 20px auto;}
		.boxs .hidden2 h3 {font-size: 18px;padding-top: 34px;padding-bottom: 20px;}
		.boxs .hidden2 p{padding: 0 15px;}
		.button {width: 352px;height: 50px;background:#fff;border-radius: 4px;font-size: 20px;color:#D1A67F;line-height: 50px;text-align: center;margin: 50px auto;border: 1px solid #D1A67F;}
		.button:hover{background:#D1A67F;color: #fff;}
		.lodge{background:url(/static/home/img/page/landai/360.png) no-repeat center center; background-size:cover;width:100%;height:598px;}
		.liuxue{margin-top: 40px;}
		.top_rank{margin-top:40px;}
		/* .top_rank tr{display: block;}
		.top_rank th{text-align: center;height:40px;font-weight: normal;box-sizing: border-box;}
    	.top_rank td {text-align: center;height:40px;box-sizing: border-box;display: inline-block;}

		.top_rank td{font-size:16px;font-weight:400;text-align: center;height:40px;line-height:40px;} */
		.top_rank li{color: #fff;float: left;width:154px;height:70px;line-height:70px;text-align: center;font-size: 16px;background:#D1A67F;box-sizing: border-box;border-left: 1px solid #fff;text-align: center;}
		.hiddenn table{border-collapse: collapse;width: 100%;}
		.hiddenn table th{height: 50px;line-height: 50px;background-color: #D1A67F;color: #FFFFFF;}
		.hiddenn table,.hiddenn table tr{border: 1px solid #D1A67F;}
		.hiddenn table td,.hiddenn table th{border-left: 1px solid #D1A67F;}
		.hiddenn tr td{height:40px;line-height:40px;text-align: center;font-size: 15px;box-sizing: border-box;overflow: hidden;}
		.hiddenn tr td a:hover{color: #D1A67F;}
		.lodges{width:100%;height:730px;}
		.liuxues{margin-top: 40px;}
		.boxss {width:370px;height:443px;background: url(/static/home/img/page/landai/llll.png) no-repeat center center;background-size: cover;position: relative;margin-right:30px;}
		.box22{background: url(/static/home/img/page/landai/ggggg.png) no-repeat center center;width:370px;height:443px;background-size: cover;}
		.box33{background: url(/static/home/img/page/landai/zzzzz.png) no-repeat center center;width:370px;height:443px;background-size: cover;}		
		.boxss .hidden11 {position: absolute;left: 0;top: 0;width: 100%;height: 100%;font-size:38px;color: #FFFFFF;font-weight: bold;text-align: center;line-height:430px;background:rgba(0,0,0,.5);display: block;}
		.boxss .hidden22 {position: absolute;left: 0;top: 0;width: 100%;height: 100%;background: rgba(23,14,1,0.6);color: #FFFFFF;text-align: center;display: none;}
		.boxss .hidden22 a{width:163px;height:36px;border-radius:4px;font-size:16px;font-weight:bold;color:rgba(255,255,255,1);line-height:36px;letter-spacing:2px;margin: 20px auto;}
		.boxss .hidden22 a:hover{opacity: 0.8;}
		.boxss .hidden22 h3 {font-size: 18px;padding-top:24px;padding-bottom:10px;}
		.boxss .hidden22 h4{text-align:left;margin: 20px 0 0 20px;}
		.boxss .hidden22 p{padding: 0 15px;text-align:left;margin-left: 20px;margin-top:10px;padding-left: 0;}
		
		.liuxues{margin-top: 40px;}
		.boxsss {width:370px;height:238px;background: url(/static/home/img/page/landai/jg.png) no-repeat center center;background-size: cover;position: relative;margin-right:30px;}
		.box222{background: url(/static/home/img/page/landai/jx.png) no-repeat center center;width:370px;height:238px;background-size: cover;}
		.box333{background: url(/static/home/img/page/landai/xjkc.png) no-repeat center center;width:370px;height:238px;background-size: cover;}		
		.boxsss .hidden111 {letter-spacing: 2px;position: absolute;left: 0;top: 0;width: 100%;height: 100%;font-size:24px;color: #FFFFFF;font-weight: bold;text-align: center;line-height:230px;background:rgba(0,0,0,.5);display: block;}
		.boxsss .hidden222 {position: absolute;left: 0;top: 0;width: 100%;height: 100%;background: rgba(23,14,1,0.6);color: #FFFFFF;text-align: center;display: none;}
		.boxsss .hidden222 a{width:163px;height:36px;border-radius:4px;border:1px solid rgba(255,255,255,1);font-size:16px;font-weight:bold;color:rgba(255,255,255,1);line-height:36px;letter-spacing:2px;position: absolute;bottom: 10px;left: 50%;margin-left: -81.5px;}
		.boxsss .hidden222 a:hover{background-color: #D1A67F;border-color: #D1A67F;}
		.boxsss .hidden222 h3 {font-size: 18px;padding-top:26px;padding-bottom:16px;}
		.boxsss .hidden222 h4{text-align:left;margin: 20px 0 0 20px;}
		.boxsss .hidden222 p{padding: 0 15px;text-align:left;margin-left: 30px;margin-top:10px;}
		.tudifl{width: 333px;margin-left:90px;}
		.tudicet img{width:190px;height:185px;margin:35px 50px;}
		.tudifr{width: 333px;}
		.faya h4{font-size:18px;color:rgba(0,0,0,1)}
		.faya a{width:161px;height:36px;border-radius:4px;border:1px solid rgba(209,166,127,1);text-align: center;line-height:36px;color: #D1A67F;margin: 20px 0 0 126px;}
		.faya a:hover{background: #D1A67F;color: #fff;}
		.fayas a:hover{background: #D1A67F;color: #fff;}
		.fayas{width:330px;margin-top:30px;}
		.fayas h4{font-size: 18px;color:rgba(0,0,0,1);}
		.fayas a{width:161px;height:36px;border-radius:4px;border:1px solid rgba(209,166,127,1);text-align: center;line-height:36px;color: #D1A67F;    margin: 20px auto;}
		.dada{margin-top:60px;}
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
		<!--banner-->
		<div class="banner">
			<h1>美国蓝带高中</h1>
			<!-- 按钮 -->
			<div class="anniu">
				<a href="javascript:;" onclick="go()" class="one">申请蓝带高中</a>
			</div>
		</div>
		<!--banner-->
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">蓝带高中特点</span>
				<span>蓝带高中优势</span>
				<span>学校推荐</span>
				<span>注意事项</span>
				<span>优秀案例</span>
				<span>申请流程</span>
				<span>留学费用</span>
				<span>海外服务</span>
				<span style="margin-right: 0px;">彬彬优势</span>
			</div>
		</div>
		<!--美国蓝带高中特点-->
		<div class="tedian gk_index huadou">
			<div class="titles">
				美国蓝带高中特点
			</div>
			<div class="gWidth1170 dada clearfix">
				<div class="tudifl fl">
					<div class="faya">
						<h4>数量少，美国只有3.9%的学校可以进入蓝带学校的排列中。</h4>
						<a href="javascript:;" onclick="go()">查询美国蓝带高中 </a>
					</div>
					<div class="faya" style="margin-top: 60px;">
						<h4>教学质量高，超前教育普遍，学习风气浓厚</h4>
						<a href="javascript:;" onclick="go()">学校详情了解</a>
					</div>
				</div>
				<div class="tudicet fl">
				 	<img src="/static/home/img/page/landai/tedian.png" alt="蓝带高中特点" title="蓝带高中特点"/>
				 	<div class="fayas" >
					<h4>学校老师要求严格，每天每门功课都有小测验，成绩全部记录，定期报告家长。</h4>
					<a href="javascript:;" onclick="go()">蓝带高中课程查询</a>
				</div>
				</div>
				<div class="tudifr fl">
					<div class="faya">
						<h4>竞争激烈，与国内中学相似，注重分数和排名</h4>
						<a href="javascript:;" onclick="go()">蓝带高中排名查询</a>
					</div>
					<div class="faya" style="margin-top: 60px;">
						<h4>学费不高，办学经费主要来自教会和校友捐赠</h4>
						<a href="javascript:;" onclick="go()">蓝带高中留学费用</a>
					</div>
				</div>
			</div>
			
		</div>
		
		<!--美国蓝带高中特点-->
		
	<!--美国寄宿高中特点-->
	<div class="lodge gk_index">
		<div class="gWidth1170">
			<div class="titles">
				美国蓝带高中优势
			</div>
			<div class="liuxue">
					<div class="content clearfix">
					<div class="boxs fl">
						<div class="hidden1" >卓越的成就感</div>
						<div class="hidden2">
							<h3>卓越的成就感</h3>
							<p>美国蓝带高中的教育以卓越和均等为核心，追求所有学生卓越成就，具有强烈的使命感。对于每一名学生的发展与成长都极为关注,不会让一名学生落后。</p>
						</div>
					</div>
					<div class="boxs box2 fl">
						<div class="hidden1">精英教育</div>
						<div class="hidden2">
							<h3>精英教育</h3>
							<p>美国蓝带高中数量很少，以培养卓有成就的精英为教育目标。学校开设了很多AP课程，毕业率均超过90%以上，而且大部分毕业生均能考入美国名校</p>
						</div>
					</div>
					<div class="boxs box5 fl">
						<div class="hidden1">专业升学指导团队</div>
						<div class="hidden2">
							<h3>专业升学指导团队</h3>
							<p>紧密结合学生情况，从入学第一年起就对每位同学进行个性化指导，帮助学生申请美国大学且适合的专业。</p>
						</div>
					</div>
					<div class="boxs box4 fl">
						<div class="hidden1">要求严格</div>
						<div class="hidden2">
							<h3>要求严格</h3>
							<p>美国蓝带高中对学生的要求极为严格。每天每门功课都有小测验，成绩全部计入总成绩，一次没考好总成绩和学校排名都会受影响，并及时与家长反馈。</p>
						</div>
					</div>
					<div class="boxs box3 fl">
						<div class="hidden1">一流的环境</div>
						<div class="hidden2">
							<h3>一流的环境</h3>
							<p>大部分美国蓝带高中的地理位置非常良好，交通便利。无论是硬件设施、师资力量以及教学环境上，均在全美中学中首屈一指。</p>
						</div>
					</div>
				</div>
				<a href="javascript:;" onclick="go()" class="button">马上申请心仪学校</a>
			</div>
		</div>
	</div>
	<!--美国寄宿高中特点-->
	
	<!--美国蓝带高中推荐-->
	<div class="gWidth1170 gk_index">
		<div class="titles">
			美国蓝带高中学校推荐
		</div>
			<div class="top_rank">
				
				<div class="hiddenn">
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
						    <th>院校名称</th>
						    <th>院校英文名称</th>
						    <th>成立时间</th>
						    <th>所属地区</th>
						    <th>马上申请</th>
						</tr>
					<tbody>
						<tr>
							<td>罗格斯中学</td>
							<td>Rutgers Preparatory School</td>
							<td>1766年</td>
							<td>新泽西州</td>
							<td><a href="javascript:;" onclick="go()">马上申请</a></td>
						</tr>
						<tr><td>劳伦斯伍德米尔学校</td><td>Lawrence Woodmere Academy</td><td>1912年</td><td>纽约</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>贵格菁英中学</td><td>Friends Select School</td><td>1689年</td><td>费城</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>斯泰顿岛中学</td><td>Staten Island Academy</td><td>1862年</td><td>纽约</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>莫斯布朗中学</td><td>Moses Brown School</td><td>1784年</td><td>罗得岛州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>惠勒学校</td><td>The Wheeler School</td><td>1889年</td><td>罗得岛州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>阿秉堂教友会中学</td><td>Abington Friends School</td><td>1697年</td><td>宾夕法尼亚州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>墨尔本中央天主高中</td><td>Melbourne Central Catholic High School</td><td>1961年</td><td>佛罗里达州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>圣拉菲尔中学</td><td>Saint Raphael Academy</td><td>1924年</td><td>圣拉菲尔中学</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
						<tr><td>哈德里根中学</td><td>Bishop Hendricken High School</td><td>1959年</td><td>罗德岛州</td><td><a href="javascript:;" onclick="go()">马上申请</a></td></tr>
					</tbody>
					</table>
				</div>
			</div>
		
	</div>
	<!--美国蓝带高中推荐-->
	
	<!--申请蓝带高中注意事项-->
	<div class="band gk_index">
		<div class="titles">
			申请蓝带高中注意事项
		</div>
		<div class="gWidth1170 clearfix">
			<div class="raidus">
				<ul >
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			
			<div class="radiuss">
				<ul>
					<li>
						<div class="after">
							<h4>申请要慎重</h4>
							<em></em>
							<p>普通学校的尖子生转学到蓝带学区，很可能就成了落后生。所以想要申请蓝带学校的家长孩子一定要做好充分的准备。</p>	
						</div>
					</li>
					<li>
						<div class="after">
							<h4>功课要抓紧</h4>
							<em></em>
							<p>到美国蓝带中学就读，一定要注意抓功课。如果孩子不在学校之外下功夫努力加油，他根本就进不了快班。这就是美国蓝带中学的超前教育。</p>	
						</div>
					</li>
					<li>
						<div class="after">
							<h4>减少课外活动</h4>
							<em></em>
							<p>为了确保学习成绩，为孩子选择课外活动时要量力而行。如果孩子在蓝带学校的成绩不理想，最好减少课外活动，等到成绩提高之后，再逐渐增加课外活动。</p>	
						</div>
					</li>
					<li>
						<div class="after">
							<h4>无需考试</h4>
							<em></em>
							<p>对于美国公立蓝带学校来说，并不需要特别的入学考试。只要家宅位于蓝带学区内，每个家庭中的所有学龄儿童都可自动进入蓝带学校。</p>	
						</div>
					</li>
				</ul>
			</div>
		</div>
		<a href="javascript:;" onclick="go()" class="button">更多注意事项</a>
	</div>
	<!--申请蓝带高中注意事项-->
	
	<!--美国蓝带高中优秀学生案例-->
		<div class="lodges gk_index">
		<div class="gWidth1170">
			<div class="titles">
				美国蓝带高中优秀学生案例
			</div>
			<div class="liuxues">
				<div class="content clearfix">
					<div class="boxss fl">
						<div class="hidden11" >L同学</div>
						<div class="hidden22">
							<h3>L同学</h3>
							<h4>个人档案</h4>
							<p>教育背景：首都师范大学附属中学</p>
							<p>录取学校：布雷迪主教高中</p>
							<h4>成长足迹</h4>
							<p>在读时间：2012年9月-2016年7月</p>
							<p>语言成绩：托福102</p>
							<p>兴趣爱好：手工 绘画</p>
							<p>实践背景：2013年-2017年，担任班长<br />2013年-2016年，学生会副主席 <br />2015年，参加公益社会实践项目</p>
							<a href="/studentstory/709.html" class="knows" target="_blank">了解案例详情</a>
						</div>
					</div>
					<div class="boxss box22 fl">	
						<div class="hidden11">S同学</div>
						<div class="hidden22">
							<h3>S同学</h3>
							<h4>个人档案</h4>
							<p>教育背景：北京师范大学第二附属中学</p>
							<p>录取学校：圣维克特高中</p>
							<h4>成长足迹</h4>
							<p>在读时间：2014年9月-2018年7月</p>
							<p>语言成绩：slate 4.0 GPA：3.5</p>
							<p>兴趣爱好：排球 跳舞</p>
							<p>实践背景： 2013年-2017年，担任班长<br /> 2013年-2016年，学生会副主席 <br />2015年，排球比赛获奖</p>
							<a href="/studentstory/710.html" class="knows" target="_blank">了解案例详情</a>
						</div>
					</div>
					<div class="boxss box33 fl" style="margin-right: 0px;">
						<div class="hidden11">C同学</div>
						<div class="hidden22">
							<h3>C同学</h3>
							<h4>个人档案</h4>
							<p>教育背景：北京某重点中学</p>
							<p>录取学校：加尔塞斯纪念中学</p>
							<h4>成长足迹</h4>
							<p>在读时间：2013年9月-2017年7月</p>
							<p>语言成绩：TOEFL JR 745</p>
							<p>兴趣爱好：阅读 计算机</p>
							<p>实践背景：2013年参加青少年计算机比赛<br /> 2015年参加辩论类夏令营<br /> 2016年参加学术竞赛</p>
							<a href="/studentstory/148.html" class="knows" target="_blank">了解案例详情</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--美国蓝带高中优秀学生案例-->
	<style type="text/css">
		.knows{width:200px!important;height:30px!important;background:rgba(209,166,127,1);border-radius:4px;margin: 10px auto;line-height: 30px!important;}
		.triangle_border_down {
		    width: 0;
		    height: 0;
		    border-width: 10px 10px 0;
		    border-style: solid;
		    border-color: #FDE7D3 transparent transparent;
		    margin: 29px auto;
		    position: relative;
		    bottom: 30px;
    		left: 0px;
		}
		.triangle_border_up {
		    width: 0;
		    height: 0;
		    border-width: 0 10px 10px;
		    border-style: solid;
		    border-color: transparent transparent #FDE7D3;
		    margin: 40px auto;
		    position: relative;
		    bottom: 148px;
		}
		.shenqing{width:100%;height:598px;background:url(/static/home/img/page/landai/sqlc.png) no-repeat center center;background-size:cover;}
		.wao{margin-top:40px;}
	</style>
	<!--美国蓝带高中申请流程-->
	<div class="shenqing gk_index">
		<div class="titles">
			美国蓝带高中申请流程
		</div>
		<div class="gWidth1170 wao">
			<div class="sqtop">
				<ul class="clearfix">
					<li>留学规划<div class="triangle_border_down"></div></li>
					<li>选校指导<div class="triangle_border_down"></div></li>
					<li>面试辅导<div class="triangle_border_down"></div></li>
					<li>后续服务<div class="triangle_border_down"></div></li>
				</ul>
			</div>
			<div class="sqcenter">
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
				</ul>
			</div>
			<div class="sqbtm">
				<ul class="clearfix">
					<li>学生评估<div class="triangle_border_up"></div></li>
					<li>背景提升<div class="triangle_border_up"></div></li>
					<li>文书规划<div class="triangle_border_up"></div></li>
					<li>获得offer<div class="triangle_border_up"></div></li>
				</ul>
			</div>
		</div>
		<div class="anniuy clearfix">
			<a href="javascript:;" onclick="go()" class="fl two">申请流程详细规划</a>
			<a href="javascript:;" onclick="go()" class="fl two" style="margin-right: 0px;">蓝带高中入学要求</a>
		</div>
	</div>
	<!--美国蓝带高中申请流程-->
	<div class="classroom gk_index">
			<h3 class="titles" style="margin-bottom: 60px;">蓝带高中留学费用</h3>
			<div class="gWidth1170">
				<div class="train clearfix">
					<div class="white">
						<div class="black">
							<h4>学费</h4>
							<p>寄宿学校：每年约$45,000-$55,000 </p>
							<p>走读学校：每年约$20,000-$30,000 </p>
							<p style="color: #9C9C9C;">（具体费用请参考学校官网）</p>
							<a href="javascript:;" onclick="go()">咨询具体学费</a>
						</div>
					</div>
					<div class="white">
						<div class="black">
							<h4>生活费</h4>
							<p>一般每年约$20,000，纽约、波士顿、旧金山等大城市生活费用会想对高一些。</p>
							<p style="color: #9C9C9C;">（具体费用根据学校而定）</p>
							<a href="javascript:;" onclick="go()">咨询具体生活费</a>
						</div>
					</div>
					<div class="white" style="margin-right: 0px;">
						<div class="black">
							<h4>其他费用</h4>
							<p>医疗费每年约$500-$1000；书本费每年约$500-$800；课外活动费用每年约$300-$1000。</p>
							<p style="color: #9C9C9C;">（具体费用根据学校而定）</p>
							<a href="javascript:;" onclick="go()">咨询具体费用</a>
						</div>
					</div>
				</div>	
			</div>
		</div>
	<!--360°全方位服务——有彬彬留学更放心-->
	<div class="bearing gk_index">
		<div class="gWidth1170">
			<div class="titles">360°全方位服务——有彬彬留学更放心</div>
			<div class="liuxues">
				<div class="content clearfix">
					<div class="boxsss fl">
						<div class="hidden111" >寄宿家庭精选</div>
						<div class="hidden222">
							<h3>寄宿家庭精选</h3>
							<p>1.10000+精选寄宿家庭，都是在当地有较高收入的优质家庭<br />2.根据学生需求至少提供2-3个家庭供选择 <br />3.免费更换寄宿家庭，并且保证调换住家的时效性</p>
							<a href="/fmfml/0-1.html" target="_blank">预约寄宿家庭</a>
						</div>
					</div>
					<div class="boxsss box222 fl">
						<div class="hidden111">特色海外监管服务</div>
						<div class="hidden222">
							<h3>特色海外监管服务</h3>
							<p>1.及时解决学生留学期间学习、生活问题<br />2.把控服务质量，不定期组织实地探访，了解学生实际情况反馈家长 <br />3.24H紧急情况处理，随时保持联系进行处理 </p>
							<a href="/page/overseashome.html" target="_blank">预约贴心无忧管家</a>
						</div>
					</div>
					<div class="boxsss box333 fl" style="margin-right: 0px;">
						<div class="hidden111">出国衔接课程</div>
						<div class="hidden222">
							<h3>出国衔接课程</h3>
							<p>1.美国本土多年资深教学在职教师授课 <br />2.课程设计丰富，并拥有美国原版教材  <br />3.小班制授课，老师对学生关注度高，让学生快速适应中美学习差异</p>
							<a href=" /page/goclass.html" target="_blank">点击获取原版教材</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--360°全方位服务——有彬彬留学更放心-->
	<style type="text/css">
		.bearing{width:100%;height:488px;background:url(/static/home/img/page/landai/360.png) no-repeat center center;background-size:cover;}
		.anniuy {width:700px;margin:60px auto;}
		.anniuy a.two {background-color: #fff;color: #D1A67F;margin-right: 100px;}

		.anniuy a {width:278px;height:50px;text-align: center;line-height: 52px;font-size: 22px;color: #FFFFFF;border: 1px solid #D1A67F;}
		.anniuy a:hover{background: #D1A67F;color: #fff;}
		.classroom{width:100%;height:581px;background:#fff;}
		.black{width:300px;height:260px;border:2px solid #D1A67F;margin:12px auto;padding:0 20px;}
		.black h4{font-size:24px;font-weight:bold;color:rgba(0,0,0,1);text-align: center;margin:18px auto;}
		.black p{font-size:16px;color:rgba(0,0,0,1);margin-top:20px;text-align: center;}
		.black a{width:201px;height:40px;border-radius:4px;border:2px solid #D1A67F;margin:20px auto;text-align: center;line-height:40px;transition: all 0.2s ease-in-out;}
		.black a:hover{background: #D1A67F;color: #fff;}
		.white{width:370px;height:285px;background: #fff;float: left;margin:0 30px 20px 0;box-shadow:0px 2px 8px 0px rgba(0,0,0,0.17);}
		.white:nth-child(2){margin-top:36px;}
		.white:nth-child(5){margin-top:36px;}
		.sqtop li{width:136px;height:99px;background:#FDE7D3;float:left;margin-left: 150px;font-weight: bold;text-align: center;line-height: 99px;margin-bottom: 20px;}
		.sqbtm li{float:left;width:136px;height:99px;background:#FDE7D3;float:left;margin-right: 150px;font-weight: bold;text-align: center;line-height: 99px;margin-top: 20px;}
		.sqcenter li{float:left;}
		.sqcenter{margin-left: 56px;}
		.sqcenter li:nth-child(odd){width:20px;height:20px;background:rgba(209,166,127,1);border-radius:50%;}
		.sqcenter li:nth-child(even){width:126px;height:2px;border-bottom:2px dashed #D1A67F;margin-top:8px;}
		.after{margin-left: 49px;}
		.band{width:100%;height:1091px;background:url(/static/home/img/page/landai/gzzysx.png) no-repeat center center;background-size:cover;margin-top:60px;}
		.raidus{float:left;margin:104px 20px 0 0;}
		.radiuss{float:left;}
		.radiuss li h4{font-size:20px;font-weight:bold;color:rgba(0,0,0,1);padding-top: 22px;}
		.radiuss li p{font-size:18px;color:rgba(0,0,0,1)}
		.radiuss li em{width:70px;height:2px;background:rgba(209,166,127,1);display: block;margin: 10px 0 18px 0;}
		.radiuss li{width:1080px;height:162px;background:#F9E6D5;border-radius:8px;margin-top: 30px;}
		.raidus li:nth-child(odd){width:30px;height:30px;background:rgba(209,166,127,1);border-radius:50%;}
		.raidus li:nth-child(even){height:155px;width:2px;border-left: 1px dashed #D1A67F;margin-left: 14px;}
	</style>
	<!--海外监管服务团队-->
	<div id="mydiv" class="ys_index" style="height:628px;margin-top: 50px;">
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
			$('body, html').stop().animate({scrollTop: offsetTop}, 1500);
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
	$('.boxs').hover(function () {
		$(this).children('.hidden1').stop().fadeOut();
		$(this).children('.hidden2').stop().fadeIn();
	}, function (){
		$(this).children('.hidden2').stop().fadeOut();
		$(this).children('.hidden1').stop().fadeIn();
	})
	
	$('.boxss').hover(function () {
		$(this).children('.hidden11').stop().fadeOut();
		$(this).children('.hidden22').stop().fadeIn();
	}, function (){
		$(this).children('.hidden22').stop().fadeOut();
		$(this).children('.hidden11').stop().fadeIn();
	})
	$('.boxsss').hover(function () {
		$(this).children('.hidden111').stop().fadeOut();
		$(this).children('.hidden222').stop().fadeIn();
	}, function (){
		$(this).children('.hidden222').stop().fadeOut();
		$(this).children('.hidden111').stop().fadeIn();
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
	<style type="text/css">
		.formFd button{border: none;color: #333333;margin: 0;}
	</style>

</html>