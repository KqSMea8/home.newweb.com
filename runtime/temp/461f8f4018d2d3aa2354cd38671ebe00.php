<?php /*a:5:{s:72:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\slate.html";i:1553666949;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1553677718;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1553062603;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1553673265;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1553677846;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/slate.css">
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
			<!-- <div class="fl">
				<a href="/page/polymerization.html" target="_blank">背景提升</a>
			</div> -->
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
		<div class="fl ss">
			<h3><img src="/static/home/img/home/sousuo.png" alt=""></h3>
			<div class="fl input">
				<form action="<?php echo url('search/index'); ?>" method="get" id="form1">
					<input type="text" id="keywords" name="keywords" autocomplete="off" value="" placeholder="搜索感兴趣的内容">
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
			<div class="gWidth1170">
				<h1>iTEP-SLATE考试</h1>
				<h2>更简单的美国高中留学语言测试</h2>
				<h3>彬彬带你一路通关</h3>
				<a href="javascript:;" onclick="go()"><em></em>报名参加SLATE考试</a>
			</div>
		</div>
		
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">SLATE介绍</span>
				<span>SLATE优势</span>
				<span>彬彬优势</span>
				<span>考试内容</span>
				<span>名校推荐</span>
				<span>考试级别</span>
				<span>考试流程</span>
			</div>
		</div>
		<div class="navHidden"></div>
		
		<!-- SLATE考试介绍 -->
		<div class="gWidth1170 p_index kaoshi_jieshao">
			<h3 class="title">SLATE考试介绍</h3>
			<!-- content -->
			<div class="content clearfix">
				<img src="/static/home/img/slate/jieshao.jpg" class="fl" alt="">
				<div class="fr">
					<p>SLATE（Secondary Level Assessment Test of English缩写）是英语水平评估测试，由美国专门从事在线英语语言能力测试评估权威机构波士顿教育服务公司提供。其目的是考核英语为第二语言的学习者的英语熟练程度。SLATE考试专门针对到美国或其他英语高中和学院留学的初高中年龄段的学生，美国75%的中学接受SLATE成绩做为外籍学生入学与分班的参考。提供SLATE成绩的学生，学校通常不需要学生再提供TOEFL成绩。</p>
					<a href="javascript:;" onclick="go()" class="fr">了解更多&gt;&gt;</a>
				</div>
			</div>
		</div>
		
		<!-- SLATE考试独特优势 -->
		<div class="dute_youshi p_index">
			<div class="gWidth1170">
				<h3 class="title">SLATE考试独特优势</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="box fl">
						<div class="hidden">
							<h3>方便实惠 ，高效快捷</h3>
							<span></span>
							<p>SLATE考试网络预约灵活方便，能够做到随约随考，1-3天就能拿成绩，90分钟考试涵盖了听、说、读、写和语法，价格实惠，考试轻松没有压力，可以多次考试，选择自己理想的成绩电邮给校方。</p>
						</div>
					</div>
					<div class="box box2 fl">
						<div class="hidden">
							<h3>发展迅猛 ，潜力巨大</h3>
							<span></span>
							<p>相比其他语言测试系统，全新的SLATE考试以其全新的理念，高效、权威、方便、通过率高的优势发展迅猛、潜力巨大。近年，在SLATE考试进入中国大陆以后，认可SLATE考试成绩的院校和国家在迅速增加。</p>
						</div>
					</div>
					<div class="box box3 fl">
						<div class="hidden">
							<h3>转变观念 ，分步到位</h3>
							<span></span>
							<p>托福、雅思成绩不理想，可以挑选并考察认可SLATE考试成绩的美国院校，迅速通过SLATE考试，将成绩电邮给校方。被校方正式录取后，再利用其与美国名校之间学分互认这一特点，经过两年的学习，进入更高层次的大学就读。</p>
						</div>
					</div>
					<div class="box box4 fl">
						<div class="hidden">
							<h3>安全踏实 ，签证率高</h3>
							<span></span>
							<p>考生通过SLATE考试取得美国初中，高中和大学的正式录取通知书，相比只拿到某大学语言课程的录取，或语言课程加大学录取的所谓“双录取”，更能证明语言能力没有问题，签证官也会认为这样的学生更安全、更稳定，自然更容易获得签证。</p>
						</div>
					</div>
				</div>
				<a href="javascript:;" onclick="go()">SLATE考试能否替代托福？</a>
			</div>
		</div>
		
		<!-- 选择彬彬SLATE考试 -->
		<div class="slate_kaoshi p_index">
			<div class="gWidth1170">
				<h3 class="title">选择彬彬SLATE考试</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="box fl">
						<h3>优势1</h3>
						<span></span>
						<h4>权威</h4>
						<p>iTEP官方指定考点</p>
					</div>
					<div class="box box2 fl">
						<h3>优势2</h3>
						<span></span>
						<h4>方便</h4>
						<p>彬彬在北京有2家考点，学生无须预约，可随时参加考试</p>
					</div>
					<div class="box box3 fl">
						<h3>优势3</h3>
						<span></span>
						<h4>快捷</h4>
						<p>2小时出分，并提供专业性"复盘"方案</p>
					</div>
				</div>
				<a href="javascript:;" onclick="go()">随报随考，名额有限</a>
			</div>
		</div>
		
		<!-- SLATE考试内容 -->
		<div class="kaoshi_neirong p_index">
			<div class="gWidth1170">
				<h3 class="title">SLATE考试内容</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="box fl">
						<div class="div1">
							<div>
								<h3>听力</h3>
								<span>考试时间：20min</span>
							</div>
						</div>
						<div class="div2">
							<div>
								<p>1.四个包含有2到3个句子的初中级难度的简短对话交流，每个对话后附带1个多项选择题。<br />2.一段2到3分钟长度中级难度的对话交流，附带4个多项选择题。 <br />3.一段4分钟长度大学水平难度的讲演，附带6个多项选择题。</p>
							</div>
						</div>
					</div>
					<div class="box box2 fl">
						<div class="div1">
							<div>
								<h3>语法</h3>
								<span>考试时间：10min</span>
							</div>
						</div>
						<div class="div2">
							<div>
								<p>包含有25个多项选择题，每项考题主要用来测试考生对英语文法结构要点的熟悉掌握程度。本测试部分内容由简入难，包括由初级到高级难度不等的词汇量，考题主要有两种样式类型，每类考题在屏幕上都会有例子进行阐述。</p>
							</div>
						</div>
					</div>
					<div class="box box3 fl">
						<div class="div1">
							<div>
								<h3>阅读</h3>
								<span>考试时间：20min</span>
							</div>
						</div>
						<div class="div2">
							<div>
								<p>1.两段低中级的约50字短文和对应的单选题；<br />2.一篇250个单词左右长度的中级难度短文，附带4个多项选择题；<br />3.一篇450个单词左右长度的大学水平难度的论文，附带6个多项选择题。</p>
							</div>
						</div>
					</div>
					<div class="box box4 fl">
						<div class="div1">
							<div>
								<h3>写作</h3>
								<span>考试时间：25min</span>
							</div>
						</div>
						<div class="div2">
							<div>
								<p>1.按照指导要求，考生需要就考题中所提供的题目写一篇论文（时间：5分钟；长度：50-75个单词）<br />2.考生需要就考题中提供的写作题目表达自己的观点，并对自己表达的观点进行正面阐述（时间：20分钟；长度：175-225个单词）。</p>
							</div>
						</div>
					</div>
					<div class="box box5 fl">
						<div class="div1">
							<div>
								<h3>口语</h3>
								<span>考试时间：5min</span>
							</div>
						</div>
						<div class="div2">
							<div>
								<p>1.考生会同时听到并看到一个简短的中低难度的问题，考生有30秒的准备时间，然后进行45秒钟的口语回答；<br />2.考生会听到一段简短的对某一问题正反两方面的论述考生然后会被要求就此论述来阐述自己的观点</p>
							</div>
						</div>
					</div>
					<div class="box box6 fl">
						<div class="div1">
							<div>
								<h3>Tips</h3>
								<!-- <span>考试时间：10min</span> -->
							</div>
						</div>
						<div class="div2">
							<div>
								<p style="font-size: 12px;">SLATE考试的阅读、听力和语法部分都是由电脑进行自动评分，考生会得到一个指数分值和与之相对应的等级（0-6）。写作和口语部分是由英语为母语的专家按照标准评分量规打分。考试的任一部分权重比例分配相当，在多项选择部分，对猜选或错选的答案不扣分。正式的分数报告会以图表格式向考生展示分数信息。以图像模式显示的技能概括，尤其能够通过考生的测评，为考生的英文五项技能的优势和不足做逐一的展示。</p>
							</div>
						</div>
					</div>
				</div>
				<a href="javascript:;" onclick="go()">如何提高SLATE考试成绩</a>
			</div>
			<div class="neirong_poa clearfix">
				<div class="gWidth1170 clearfix">
					<img src="/static/home/img/slate/logo.png" alt="">
					<div class="fr">
						<p>彬彬依据SLATE官方考试指南，根据各项语言考试特点，结合彬彬教育对语言考试的深入研究，为学员匹配相应的针对性练习和训练，训练强度大，帮助学员短期内快速提高语言成绩。</p>
						<a href="javascript:;" onclick="go()">点击获取专属提分计划</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 接受SLATE考试成绩的学校 -->
		<div class="jieshou_xuexiao gWidth1170 p_index">
			<h3 class="title">接受SLATE考试成绩的学校</h3>
			<!-- content -->
			<div class="content">
				<div class="table1">
					<table>
						<tr><th>学校中文名称</th><th>学校英文名称</th><th>学校等级</th><th>所在地区</th><th>SLATE录取要求</th></tr>
					</table>
				</div>
				<div class="table2">
					<table>
						<tr><td>汉姆顿学校</td><td>Hamden Hall Country Day School</td><td>A+</td><td>CT</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>罗格斯中学</td><td>Rutgers Preparatory School</td><td>A+</td><td>NJ</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>兰尼学院</td><td>Ranney School</td><td>A+</td><td>NJ</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>劳伦斯伍德米尔学院</td><td>Lawrence Woodmere Academy</td><td>A+</td><td>NY</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>哈利学校</td><td>The Harley School</td><td>A+</td><td>NY</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>斯泰顿岛学校</td><td>Staten Island Academy</td><td>A+</td><td>NY</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>沃星汉姆学校</td><td>Walsingham Academy</td><td>A+</td><td>VA</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>文森特学院</td><td>Vincentian Academy</td><td>A+</td><td>PA</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>桑德河学校</td><td>Saddle River Day School</td><td>A+</td><td>NJ</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>格莱内尔学校</td><td>Glenelg Country School</td><td>A+</td><td>MD</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>库埃里兰中学</td><td>The Quarry Lane School</td><td>A+</td><td>CA</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>韦罗特主教高中</td><td>Bishop Verot Catholic High School</td><td>A+</td><td>FL</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>圣维克特高中</td><td>Saint Viator High School</td><td>A+</td><td>IL</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>福莫斯学院</td><td>Falmouth Academy</td><td>A+</td><td>MA</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>主教林奇高中</td><td>Bishop Lynch High School</td><td>A+</td><td>TX</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>贝拉明预备学校</td><td>Bellarmine Preparatory School</td><td>A+</td><td>WA</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>惠灵顿学校</td><td>The Wellington School</td><td>A+</td><td>OH</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>布里梅尔学校</td><td>Brimmer & May School</td><td>A+</td><td>MA</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>主教多德高中</td><td>Bishop O'Dowd High School</td><td>A+</td><td>CA</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
						<tr><td>哈里森堡学院</td><td>Harrisburg Academy</td><td>A+</td><td>PA</td><td><a href="javascript:;" onclick="go()">点击了解</a></td></tr>
					</table>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">更多学校点击了解</a>
		</div>
		
		<!-- SLATE考试级别 -->
		<div class="kaoshi_jibie p_index">
			<div class="gWidth1170">
				<h3 class="title">SLATE考试级别</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="fl">
						<h3>SLATE考试级别</h3>
						<ul>
							<li><span>Level 0</span><em><i>初学者</i>（Beginning）</em></li>
							<li><span>Level 1</span><em><i>初级</i>（Elementary）</em></li>
							<li><span>Level 2</span><em><i>中级以下</i>（Low-Intermediate）</em></li>
							<li><span>Level 3</span><em><i>中级</i>（Intermediate）</em></li>
							<li><span>Level 4</span><em><i>中级以上</i>（High-Intermediate）</em></li>
							<li><span>Level 5</span><em><i>高级以下</i>（Low-Advanced）</em></li>
							<li><span>Level 6</span><em><i>高级</i>（Advanced）</em></li>
						</ul>
					</div>
					<div class="fr">
						<h3>SLATE-SLEP-TOEFL Jr.成绩对比表</h3>
						<img src="/static/home/img/slate/dengji.jpg" alt="">
					</div>
				</div>
				<div class="anniu">
					<a href="/informationsts/1060.html" target="_blank">如何提高Slate写作能力</a>
					<a href="javascript:;" class="a1" onclick="go()">点击获取提分计划</a>
				</div>
			</div>
		</div>
		
		<!-- SLATE考试流程 -->
		<div class="kaoshi_liucheng gWidth1170 p_index">
			<h3 class="title">SLATE考试流程</h3>
			<div class="slateOne">
				<h4><em>1</em>SLATE考试准备</h4>
				<div class="contentOne">
					<div>
						<p><b>考试时长：</b>每位应考者参加考试的时间总长度在90分钟。同时，监考师应额外预留出10分钟的时间用来给考生做考前指导及做考生问题答疑。</p>
						<p><b>考试构成：</b>本考试包含一个简短的“准备工作”部分和考试正题部分。</p>
						<p><b>准备工作部分 – 考生在考试前要完成以下部分的准备工作：</b></p>
						<p>■ <b>考生登陆：</b>要求考生输入考试用户号码和密码。</p>
						<p>■ <b>注册：</b>要求考生完成注册表格的填写。考生填写注册表格时考生的姓名和国籍的第一个字母要大写，如果考生没有相关信息可填写“N/A”。</p>
						<p>■ <b>耳机：</b>当屏幕显示有戴耳机人物的照片时，指导考生戴上耳机。</p>
						<p>■ <b>音频检测：</b>听音频录音示范时，允许考生对佩带耳机的音量大小进行调节。</p>
						<p>■ <b>录音设备：</b>安装一个小型软件设备用来对考生在口语考试部分的回答录音。</p>
						<p>■ <b>录音检测：</b>允许考生收录一小段自己的口语录音，并同考生确认是否能够清楚的听到该段录音。</p>
						<p>■ <b>限时工具：</b>向考生解释在整个考试过程中会使用定时机制。</p>
					</div>
				</div>
			</div>
			<div class="slateTwo">
				<h4><em>2</em>SLATE考试流程</h4>
				<p>考生必须至少提前于开考时间10-20分钟到场，迟到的考生不予退款或安排重考，考前监考老师辅导考生进行考生登陆、考生注册、耳麦调试、录音检测等考试准备工作</p>
				<div class="contentTwo clearfix">
					<div class="box fl">
						<div class="div1">
							<h3>考试递交方式</h3>
							<img src="/static/home/img/slate/xiangxia.png" alt="">
						</div>
						<div class="hidden">
							<p>整个考试是通过网络递交的，因此必须要在经过授权的iTEP考试中心的安全环境中进行管理。阅读、听力和语法项目部分，考生只需要就每一问题的答案进行四选一即可（阅读部分会有一些问题要求考生使用鼠标对所选项目进行拖动或进行点击插入一个新项目）。写作部分要求考生使用键盘录入正文到考题指定区域。考生可在电脑上通过耳机/耳麦听到口语部分的例子。</p>
						</div>
					</div>
					<div class="box box2 fl">
						<div class="div1">
							<h3>转换界面</h3>
							<img src="/static/home/img/slate/xiangxia.png" alt="">
						</div>
						<div class="hidden">
							<p>考生在完成阅读、听力、语法和写作任一部分后，都会看到在屏幕上显示有“下一项开始的测试是……”的界面。这些“转换界面”在不同测试部分转换时给考生15秒钟的休息，同时告之考生已经完成的测试部分和还未测试的部分。在最后的口语部分测试完成后，考生会看到一个“考试完成”界面，这个界面告诉考生等候监考官的进一部指令。</p>
						</div>
					</div>
					<div class="box box3 fl">
						<div class="div1">
							<h3>成绩发放</h3>
							<img src="/static/home/img/slate/xiangxia.png" alt="">
						</div>
						<div class="hidden">
							<p>通常情况下，考生可在考试结束后2-3个工作日内向iTEP考点查询成绩。考生的成绩单由ITEP考点负责发送。考试的阅读、听力和语法部分都是由电脑进行自动评分，考生会得到一个指数。分值和与之相对应的等级（0-6）。写作和口语部分是由英语为母语的专家按照标准的评分量规打分。正式的分数报告会以图表格式向考生展示分数信息。以图像模式显示的技能概括，能够清晰的展示学生的语言能力。</p>
						</div>
					</div>
				</div>
			</div>
			<div class="slateThree">
				<h4><em>3</em>SLATE考试注意事项</h4>
				<div class="contentTherr clearfix">
					<div class="fl">
						<img src="/static/home/img/slate/logo2.png" alt="">
						<a href="javascript:;" onclick="go()">马上参加SLATE考试</a>
					</div>
					<div class="fr">
						<p style="margin-top: 20px;">所有考试中心都是通过互联网在iTEP认证的考试中心进行。阅读，听力，和语法部分是选择题； 写作部分，考生直接输入字段指定区域；口语部分，利用和计算机连接的麦克风记录讲的部分。每个部分都有时间限制，如果考生完成一段后还有剩余的时间，可以提前进入下一节。</p>
						<p><b>每一节都有固定的时间，如果考生提前完成本节，可以用剩下的时间审查以前的部分，也可以提前进行下一节，如下：</b></p>
						<p><b>阅读和语法：</b>考生可以用额外的时间来审查和修改任何答案。</p>
						<p><b>听力：</b>听力选择只有一次，不能进行审查。</p>
						<p><b>写作：</b>有一部分固定的时间限制，但考生可提前到下一段时间到期之前。</p>
						<p><b>说：</b>说出的内容不能被修改，每个考试部分的截面都有一个设定的时间显示。</p>
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
			// 
			var nav = $('.bannerNav').offset().top;
			$gkLength = $('.p_index').length;
			window.onscroll = function () {
				var top = document.documentElement.scrollTop || document.body.scrollTop;
				if(top>=nav){
					$('.bannerNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999'});
					$('.navHidden').css({'display': 'block'});
				}else if(top<=$('.p_index').eq(0).offset().top){
					$('.bannerNav').css({'position': 'static', 'top':''});
					$('.navHidden').css({'display': 'none'});
				}
				for( var i=0; i<$gkLength; i++ ){
					if( i == $gkLength - 1 ){
						if( top>=$('.p_index').eq(i).offset().top ){
							$('.bannerNav span').removeClass('active');
							$('.bannerNav span').eq(i).addClass('active');
						}
						return;
					}
					if( top>=$('.p_index').eq(i).offset().top - 200 && top<$('.p_index').eq(i+1).offset().top - 200 ){
						$('.bannerNav span').removeClass('active');
						$('.bannerNav span').eq(i).addClass('active');
					}
				}
			}
			$('.bannerNav span').on('click', function () {
				var index = $('.bannerNav span').index($(this));
				var offsetTop = $('.p_index').eq(index).offset().top;
				$('body, html').stop().animate({scrollTop: offsetTop}, 1500);
			})
			$('.bannerNav span:last-child').css({'margin-right': '0'});
			// 
			$('.dute_youshi .content .box').hover(function () {
				$(this).children('.hidden').stop().animate({'height': '311px'});
				$(this).children('.hidden').children('h3').stop().animate({'padding-top': '29px'});
			}, function () {
				$(this).children('.hidden').stop().animate({'height': '50px'});
				$(this).children('.hidden').children('h3').stop().animate({'padding-top': '13px'});
			})
			// 
			$('.kaoshi_neirong .box').hover(function () {
				$(this).children('.div1').stop().fadeOut();
				$(this).children('.div2').stop().fadeIn();
			}, function () {
				$(this).children('.div2').stop().fadeOut();
				$(this).children('.div1').stop().fadeIn();				
			})
			// 
			var tableOne = $('.jieshou_xuexiao .content .table1');
			var tableIndex = $('.jieshou_xuexiao .content .table2');
			tdWidth(tableOne, true);
			tdWidth(tableIndex, false);
			function tdWidth (father, isTitle) {
				for ( var i=0; i<father.length; i++) {
					var fatherTr = father[i].getElementsByTagName('tr');
					for ( var k=0; k<fatherTr.length; k++ ) {
						fatherTr[k].children[0].style.width = '273px';
						fatherTr[k].children[1].style.width = '389px';
						fatherTr[k].children[2].style.width = '163px';
						fatherTr[k].children[3].style.width = '163px';
						if(isTitle){
							fatherTr[k].children[4].style.width = '176px';
						}else{
							fatherTr[k].children[4].style.width = '159px';
						}
					}
				}
			}
			// 
			$('.kaoshi_liucheng .slateTwo .contentTwo .box').hover(function () {
				$(this).children('.div1').stop().fadeOut();
				$(this).children('.hidden').stop().fadeIn();
			}, function () {
				$(this).children('.hidden').stop().fadeOut();
				$(this).children('.div1').stop().fadeIn();
			})
		</script>
		
	</body>
</html>
