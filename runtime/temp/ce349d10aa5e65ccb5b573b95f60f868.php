<?php /*a:6:{s:76:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\interview.html";i:1553000768;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1551955433;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1551670345;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1553000627;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1552992994;s:86:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_highSchool.html";i:1552974318;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/interview.css">
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
				<form action="<?php echo url('search/index'); ?>" method="get">
					<input type="text" name="keywords" value="<?=$_GET['keywords']?>" placeholder="搜索感兴趣的内容">
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
				<h1>美国高中面试</h1>
				<h3>面试来了，offer还会远吗？“面霸养成”指南</h3>
				<a href="javascript:;" onclick="go()">定制专属面试辅导</a>
			</div>
		</div>
		
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">面试重要性</span>
				<span>面试疑问</span>
				<span>彬彬面试服务</span>
				<span>面试技巧</span>
				<span>维立克面试</span>
				<span>面试形式</span>
				<span>名师团队</span>
				<span>名校Offer</span>
				<span>彬彬优势</span>
			</div>
		</div>
		<div class="navHidden"></div>
		
		<!-- 美国高中面试的重要性 -->
		<div class="zhongyaoxing ms_index gWidth1170">
			<h3 class="title">美国高中面试的重要性</h3>
			<p>出色的面试，助力斩获名校Offer</p>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_mianshi/tu1.png" alt="">
					<h4>弥补不足</h4>
					<p>出色的面试，不仅可以弥补其他环节的不足，也会让面试官认为你其他方面也同样出色，对成功申请名校有重要的作用。</p>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_mianshi/tu2.png" alt="">
					<h4>考察英语水平</h4>
					<p>面试是考察英语水平最简单直接的方式，一两次的卡壳、冷场或答非所问，都可能会导致面试失败。</p>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_mianshi/tu3.png" alt="">
					<h4>进一步了解学校</h4>
					<p>学生可以进一步了解心仪学校，通过与招生官的面对面沟通，可以了解到更多的学校的信息以及自己想知道问题。</p>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_mianshi/tu4.png" alt="">
					<h4>展示自我</h4>
					<p>通过面试可以更好的展现自己，可以把自己最擅长、最想聊的话题加在个人介绍里，加深招生官的印象，提高名校申请率。</p>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">提高面试成功率</a>
		</div>
		
		<!-- 对手已经上路，而你是否还在原地踏步？ -->
		<div class="wenti ms_index">
			<div class="gWidth1170">
				<h3 class="title">对手已经上路，而你是否还在原地踏步？</h3>
				<!-- content -->
				<div class="content">
					<div class="w312" style="left: 0; top: 30px;"><p>美国高中招生官面试的目的是什么？</p></div>
					<div class="w284" style="left: 409px; top: 2px;"><p>面试官喜欢什么样的学生呢？</p></div>
					<div class="w324" style="right: 68px; top: -26px;"><p>面试该怎么做自我介绍才能让招生官记住我？</p></div>
					<div class="w284" style="left: 42px; top: 152px;"><p>面试都应该准备什么呢？</p></div>
					<div class="w284" style="left: 391px; top: 98px;"><p>面试最好的状态是什么样子的？</p></div>
					<div class="w340" style="right: 0; top: 65px;"><p>面试官问到为什么选择这所学校我该怎么回答？</p></div>
					<div class="w284" style="left: 94px; bottom: 101px;"><p>面试成功有所谓的统一模式吗？</p></div>
					<div class="w243" style="right: 174px; bottom: 217px;"><p>面试流程是怎么样的？</p></div>
					<div class="w267" style="right: 0; bottom: 126px;"><p>哪种面试方式最好呢？</p></div>
				</div>
				<div class="anniu">
					<a href="javascript:;" onclick="go()">面试流程免费咨询</a>
					<a href="javascript:;" onclick="go()">个人面试能力评估</a>
					<a href="javascript:;" onclick="go()">海外导师指导面试</a>
				</div>
			</div>
		</div>
		
		<!-- 彬彬留学面试服务 -->
		<div class="mianshi_fuwu ms_index gWidth1170">
			<h3 class="title">彬彬留学面试服务</h3>
			<p>选彬彬留学，面试自然稳操胜券</p>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<div class="div1">选校指导</div>
					<div class="div2"><em>针对学生心仪院校给出针对性指导意见。</em></div>
				</div>
				<div class="box box2 fl">
					<div class="div1">面试模拟</div>
					<div class="div2"><em>模拟面试，接近真实面试情景，让学生轻车熟路，避免紧张。</em></div>
				</div>
				<div class="box box3 fl">
					<div class="div1">全程协助</div>
					<div class="div2"><em>中美团队同时协助学生，及时沟通和联系学校，处理应对突发状况。</em></div>
				</div>
				<div class="box box4 fl">
					<div class="div1"><p>美高来华面试<br />“必经站”</p></div>
					<div class="div2"><em>每年接待大量美国顶尖高中的来访，为彬彬学子提供“现场面试”机会。</em></div>
				</div>
				<div class="box box5 fl">
					<div class="div1">技巧传授</div>
					<div class="div2"><em>传授学生面试技巧，让学生能够以简单直接的方式对话招生官。</em></div>
				</div>
			</div>
			<div class="anniu">
				<a href="javascript:;" onclick="go()">量身定制面试服务</a>
				<a href="javascript:;" onclick="go()" class="a1">免费留学热线：400-900-9770</a>
			</div>
		</div>
		
		<!-- 美国高中面试技巧 -->
		<div class="jiqiao ms_index">
			<div class="gWidth1170">
				<h3 class="title">美国高中面试技巧</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="box fl">
						<h3><span></span>个人着装</h3>
						<p>美国中学面试要注意着装，要穿着正式得体，最好能够正装出席。</p>
					</div>
					<div class="box fl">
						<h3><span></span>主动问候</h3>
						<p>电话面试时要主动问候，给老师留下良好的第一印象。你可以预先把自己觉得比较重要的问题要点写下来，到时可以提醒自己。</p>
					</div>
					<div class="box fl">
						<h3><span></span>目光交流</h3>
						<p>交流的过程中注意要与对方目光交流(Eye Contact)，加上适当的身体语言。</p>
					</div>
					<div class="box fl">
						<h3><span></span>保持放松</h3>
						<p>无论是亲自面谈、视频或电话面谈，保持最佳状态才可以发挥最好的水平，建议学生要找专业的面谈培训老师多做情景模拟练习。</p>
					</div>
					<div class="box fl">
						<h3><span></span>语速适中</h3>
						<p>面试过程中要注意讲话时的声音和感觉，要口齿清楚、音量适中。</p>
					</div>
					<div class="box fl">
						<h3><span></span>课外活动</h3>
						<p>整理一份所参加的课外活动列表，连同相应的时间和地点，可以更加凸显自身能力。</p>
					</div>
					<div class="box fl">
						<h3><span></span>注重礼仪</h3>
						<p>一定注重国际礼仪，例如握手、坐姿、主动问候、抬头挺胸并面带笑容等，都是很重要的细节，它会体现出你的个人修养。</p>
					</div>
					<div class="box fl">
						<h3><span></span>灵活应对</h3>
						<p>没有听清或没有听懂的问题可以向面试官询问，并不会对面试产生不利的影响。要时刻保持清醒、灵活的应对面试官的问题。</p>
					</div>
					<div class="box fl">
						<h3><span></span>保持互动</h3>
						<p>注意与老师保持互动。思考老师提问的问题时，一定要让老师知道你“在思考”，切忌沉默不语让老师等候。</p>
					</div>
					<div class="box fl">
						<h3><span></span>感谢信</h3>
						<p>面试后给学校写感谢信。最好在1天内给面试的老师写封感谢信、email、传真或邮寄，再次表达你对此校的兴趣，同时感谢面试老师给你的面试机会等。</p>
					</div>
				</div>
				<a href="javascript:;" onclick="go()">我有疑问</a>
			</div>
		</div>
		
		<!-- 维立克面试 -->
		<div class="mianshi ms_index gWidth1170">
			<h3 class="title">维立克面试</h3>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<h4>面试流程</h4>
					<p><span>写作测试：</span>学生在三道题目中随机抽选一道进行写作测试，测试为手写，时间为30分钟。写作题目比较开放。</p>
					<div>
						<h3>面试：</h3>
						<p>外籍面试官将对学生进行面对面的测试，并将对面试进行全程录像，时间约为10分钟。<br /><b>第1~2分钟，热身问题。</b>多为比较简单的日常沟通，如自我介绍。<br /><b>第2~3分钟，图片对比。</b>一般考官会给考生出示两张图片，然后让学生对图片进行描述和对比。<br /><b>第4~6分钟，深入交谈。</b>面试官会向学生提问一些关于学生主观想法、未来计划和喜好倾向类的问题。<br /><b>第7~8分钟，中文问题。</b>主要是考查学生的思考和表达能力，事后维立克公司会加上英文字幕并送往学校。<br /><b>第9~10分钟，自由表达。</b>展示自身亮点的好机会。</p>
					</div>
					<p><span>面试结束：</span>与招生官充分进行沟通之后的3—5天时间内会收到回复。</p>
					<a href="javascript:;" onclick="go()">了解面试详细流程</a>
				</div>
				<div class="box box1 fl">
					<h4>面试注意事项</h4>
					<p><span>面试改期：</span>如遇突发状况，可登陆维立克面试预约系统申请修改面试时间，需在面试之前72小时申请，并支付600元改期费用。</p>
					<p><span>携带物品：</span>身份证原件、护照或其他有效证件，需与确认函中的证件保持一致。</p>
					<p><span>上传证件照片：</span>面试前72小时之内需按格式上传手持证件照片，否则将被视为弃面，及时到了面试现场，也不会有面试的。</p>
					<p><span>面试穿着：</span>维立克面试录像背景是黑色的，所以尽量不要穿深色的细条纹或格子的衣服，建议着正装出席，如果学生携带装饰品进入面试现场，维立克有权拒绝学生参加面试。</p>
					<p><span>取消面试：</span>面试前15天以上可申请退款取消面试，退还5%的面试费用；面试15天之内申请退款，维立克将会取消学生面试并给予退款；面试当天未出席，也没有提前通知，面试费用将不予退还。</p>
					<p><span>参加面试次数：</span>学生一年只能申请一次维立克面试，申请面试之前要提前计算好时间，做好面试准备。</p>
					<a href="javascript:;" onclick="go()">更多注意事项</a>
				</div>
			</div>
		</div>
		
		<!-- 美国高中面试四大形式 -->
		<div class="sida_xingshi ms_index">
			<div class="gWidth1170">
				<h3 class="title">美国高中面试四大形式</h3>
				<div class="content clearfix">
					<div class="box fl">
						<h4>美国学校来华面试</h4>
						<div class="hidden">
							<h3>美国学校来华面试</h3>
							<p>每年彬彬留学会组织美国优质高中校长或招生官来中国访问，学生可以趁机抓住机会预约面试。按惯例，美国学校一般是每年10月到次年1月会到中国的北京、广州、成都等城市来面试。关注学校代表来面试的时间、地点等信息是非常重要的，抓住学校来华面试机会可以充分发挥“主场作战”的优势，节省更多时间和费用。</p>
							<a href="javascript:;" onclick="go()">我要面试</a>
						</div>
					</div>
					<div class="box box2 fl">
						<h4>Skype/电话面试</h4>
						<div class="hidden">
							<h3>Skype/电话面试</h3>
							<p>这种面试的优势在于可以异地沟通，比较省时间，也比较节省资金。Skype支持视频通话，在大洋彼岸的教授可以看到学生的样子以及所处的环境。建议同学们选择一个相对安静舒适的环境，保持良好的形象，争取给教授留下一个好的第一印象。电话面试一般会在视频面试效果不好时采用。</p>
							<a href="javascript:;" onclick="go()">我要面试</a>
						</div>
					</div>
					<div class="box box3 fl">
						<h4>学生和家长赴美参加校园面试</h4>
						<div class="hidden">
							<h3>学生和家长赴美参加校园面试</h3>
							<p>如果错过了学校来华面试的机会，学生和家长还可以赴美面试，有些学校只接受美国校园面试。面试前，需要提前预约好面试时间。越来越多的学生采纳此方式，一是招生官可以在心平气和的环境下和学生交谈，交流的时间也更长，有利于留下更深的印象；二是有更好展示自己的机会，如果家长英语好，也能与招生官交流；三是可以利用这个机会参观校园，更全面地了解学校。</p>
							<a href="javascript:;" onclick="go()">我要面试</a>
						</div>
					</div>
					<div class="box box4 fl">
						<h4>第三方面试</h4>
						<div class="hidden">
							<h3>第三方面试</h3>
							<p>有些学校需要学生提供维立克或初鉴等第三方面试成绩，只有达到相应的条件学校才会考虑是否录取学生。维立克是美国学校普遍认可的第三方录像面试。通过录像面试和写作测试全面展示学生的英语交流能力和独特性格。学生仅仅需要通过网络便可在国内预约维立克等第三方面试，获取成绩。</p>
							<a href="javascript:;" onclick="go()">我要面试</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国高中面试名师团队 -->
		<div class="mingshi_tuandui ms_index gWidth1170">
			<h3 class="title">美国高中面试名师团队</h3>
			<div class="content clearfix">
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_mianshi/daoshi1.jpg" class="fl" alt="LILY" title="LILY">
					<div class="fr">
						<h3>LILY</h3>
						<p>彬彬留学高端申请组核心成员，彬彬留学VIP客户制定申请指导老师。对于初中生以及高中生申请都有非常丰富的申请经验，她对孩子在申请过程中的指导和跟进获得了很多家长的称赞。</p>
						<a href="javascript:;" onclick="go()">更多介绍</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_mianshi/daoshi2.jpg" class="fl" alt="CHARLES" title="CHARLES">
					<div class="fr">
						<h3>CHARLES</h3>
						<p>从业7年，一直从事国际教育留学院校沟通工作，服务几千余名学生，负责学生的院校联系、学校沟通、寄宿家庭安排处理等情况；秉持“天道酬勤、人道酬诚、业道酬精”的心态，服务于每一位客户。</p>
						<a href="javascript:;" onclick="go()">更多介绍</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_mianshi/daoshi3.jpg" class="fl" alt="VINCENT" title="VINCENT">
					<div class="fr">
						<h3>VINCENT</h3>
						<p>毕业于卡耐基梅隆，现主要帮助学生进行学习及面试规划，客户满意度100%，从业多年始终如一，坚持服务至上的原则，让无数名学生成功入读心仪的学校。</p>
						<a href="javascript:;" onclick="go()">更多介绍</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_mianshi/daoshi4.jpg" class="fl" alt="WILLIAM" title="WILLIAM">
					<div class="fr">
						<h3>WILLIAM</h3>
						<p>毕业于美国丹佛大学，英语专业技能八级，获得国家人力资源与社会保障部翻译资格证书。从事美国留学业务咨询多年，帮助众多学生申请成功。</p>
						<a href="javascript:;" onclick="go()">更多介绍</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 彬彬面试辅导，成功拿下名校Offer -->
		<div class="mianshi_fudao ms_index">
			<div class="gWidth1170">
				<h3 class="title">彬彬面试辅导，成功拿下名校Offer</h3>
				<div class="content clearfix">
					<div class="box fl">
						<h3>赶上申请末班车<br />顺利收获圣维克特高中offer</h3>
						<div>
							<p class="clearfix"><b>申请年级：</b>9申10年级</p>
							<p class="clearfix"><b>申请成绩：</b>GPA：2.8  TOEFL：无</p>
							<p class="clearfix"><b style="float: left;">录取院校：</b><span>圣维克特高中<br />Saint Viator High School</span></p>
						</div>
						<h4>顾问点评：</h4>
						<p class="qfr">金同学是我17年最后报名申请的学生，他无TOEFL和SSAT成绩，还有几门课处于不及格的状态。我们决定加快整个申请进度。从整个情况来看，不是很乐观。但是我们彬彬留学用多年的留学申请经验确保了学生</p>
						<div class="anniu">
							<a href="javascript:;" onclick="go()">向TA咨询</a>
							<a href="/studentstory/737.html" class="a1" target="_blank">查看详情</a>	
						</div>
					</div>
					<div class="box fl">
						<h3>实地走访<br />完美收获文森特学院橄榄枝</h3>
						<div>
							<p class="clearfix"><b>申请年级：</b>9申10年级</p>
							<p class="clearfix"><b>申请成绩：</b>GPA：3.0  TOEFL：无</p>
							<p class="clearfix"><b style="float: left;">录取院校：</b><span>文森特学院<br />Vincentian Academy</span></p>
						</div>
						<h4>顾问点评：</h4>
						<p class="qfr">刘同学成功的最大原因是对时势的理性分析和愿意据此灵活变通。无论是最终的选校和走访的规划上，都和家长一开始的想法有所出入，但是家长基于对孩子的分析和我们的信任，做出了明智的改变，这使L同学能够抓住机会，成为美高申请大浪里的弄潮儿。正所谓深处种菱浅种稻，不深不浅种荷花，懂得因地制宜才能笑到最后。</p>
						<div class="anniu">
							<a href="javascript:;" onclick="go()">向TA咨询</a>
							<a href="/studentstory/739.html" class="a1" target="_blank">查看详情</a>	
						</div>
					</div>
					<div class="box fl">
						<h3>完美艺术生<br />收获艾迪怀德高中offe</h3>
						<div>
							<p class="clearfix"><b>申请年级：</b>9申10年级</p>
							<p class="clearfix"><b>申请成绩：</b>TOEFL：无</p>
							<p class="clearfix"><b style="float: left;">录取院校：</b><span>艾迪怀德艺术高中<br />Idyllwild Arts Academy</span></p>
						</div>
						<h4>顾问点评：</h4>
						<p class="qfr">选校时不可待，我们只能铤而走险但心中有数。董老师是为非常有经验的专业选校高手，我们一同通过对孩子的评估和判断，推荐了几所接受TOEFL申请的优质寄宿中学，并结合孩子的绘画特长，推荐了一所艺术院校</p>
						<div class="anniu">
							<a href="javascript:;" onclick="go()">向TA咨询</a>
							<a href="/studentstory/742.html" class="a1" target="_blank">查看详情</a>	
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 彬彬教育致力让每一个学生牵手世界名校 -->
		<div id="mydiv" class="ms_index" style="height: 695px;">
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
			var t = document.documentElement.scrollTop || document.body.scrollTop;
			var scroll = true;
			if(t>=100){
				$('.abcBannav').css({'display': 'none'});
				$('.topNav').css({'position': 'static'});
			}
			// 
			var nav = $('.bannerNav').offset().top;
			$gkLength = $('.ms_index').length;
			window.onscroll = function () {
				var top = document.documentElement.scrollTop || document.body.scrollTop;
				if(top>=nav){
					$('.bannerNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999'});
					$('.navHidden').css({'display': 'block'});
				}else if(top<=$('.zhongyaoxing').offset().top){
					$('.bannerNav').css({'position': 'static', 'top':''});
					$('.navHidden').css({'display': 'none'});
				}
				for( var i=0; i<$gkLength; i++ ){
					if( i == $gkLength - 1 ){
						if( top>=$('.ms_index').eq(i).offset().top ){
							$('.bannerNav span').removeClass('active');
							$('.bannerNav span').eq(i).addClass('active');
						}
						return;
					}
					if( top>=$('.ms_index').eq(i).offset().top && top<$('.ms_index').eq(i+1).offset().top ){
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
				var offsetTop = $('.ms_index').eq(index).offset().top;
				$('body, html').stop().animate({scrollTop: offsetTop + 0}, 1500);
			})
			// 
			$('.bannerNav span:last-child').css({'margin-right': '0'});
			// 
			$('.zhongyaoxing .box:last-child').css({'margin-right': '0'});
			// 
			$('.wenti .anniu a:last-child').css({'margin-right': '0'});
			// 
			$('.mianshi_fuwu .content .box').hover(function () {
				$(this).children('.div1').stop().fadeOut();
				$(this).children('.div2').stop().fadeIn();
			}, function () {
				$(this).children('.div2').stop().fadeOut();
				$(this).children('.div1').stop().fadeIn();
			})
			// 
			$('.jiqiao .content .box:nth-child(2n)').css({'margin-right': '0'});
			// 
			$('.sida_xingshi .content .box').hover(function () {
				$(this).children('h4').stop().fadeOut();
				$(this).children('.hidden').stop().fadeIn();
			}, function () {
				$(this).children('h4').stop().fadeIn();
				$(this).children('.hidden').stop().fadeOut();
			})
			// 
			$('.mingshi_tuandui .content .box:nth-child(2n)').css({'margin-right': '0'});
			// 
			// 字数限制 第一个参数传入的为一个jquery对象， 第二个参数为要限制的字数
			function LimitNumber(txt,num) {
				var str = txt.text();
				str = str.substr(0,num) + '...' ;
				txt.text(str);
			}
			var text = $('.qfr');
			for(var i=0; i<text.length; i++){
				LimitNumber(text.eq(i),96);
			}
			// 
			$('.mianshi_fudao .content .box:last-child').css({'margin-right': '0'});
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
