<?php /*a:7:{s:78:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\engineering.html";i:1554198527;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1553677718;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1553062603;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1554693345;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_daoshi.html";i:1554281138;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1554776607;s:84:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_graduate.html";i:1554189547;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/engineering.css">
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
			width: 1345px;
			margin-right: auto;
			margin-left: auto;
		}
		.topNav .topNavBox>a>img{
			width: 164px;
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
		.topNavBox .ss .input input {
			width: 150px;
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
			<div class="gWidth1170">
				<a href="javascript:;" onclick="go()" class="a1">立即申请</a>
				<a href="javascript:;" onclick="go()" class="a2">马上咨询</a>
			</div>
		</div>
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">录取捷报</span>
				<span>院长说申请</span>
				<span>热门专业</span>
				<span>申请难点</span>
				<span>申请规划</span>
				<span>成功案例</span>
				<span>背景提升</span>
				<span>服务模式</span>
				<span>导师团队</span>
				<span>彬彬优势</span>
			</div>
		</div>
		<div class="navHidden"></div>
		
		<!-- 彬彬工科录取捷报 -->
		<div class="luqu_jiebao gk_index">
			<div class="gWidth1170">
				<h3 class="title">彬彬工科录取捷报</h3>
				<!-- content -->
				<div class="content">
					<div class="contentTop clearfix">
						<div class="box fl">
							<h4><span id="span1">100</span>%</h4>
							<em></em>
							<p>常春藤盟校申请覆盖</p>
						</div>
						<div class="box box2 fl">
							<h4><span id="span2">300</span>+</h4>
							<em></em>
							<p>美国Top10名校录取</p>
						</div>
						<div class="box box3 fl">
							<h4><span id="span3">1000</span>+</h4>
							<em></em>
							<p>美国Top30名校录取</p>
						</div>
						<div class="box box4 fl">
							<h4><span id="span4">3.2</span>亿</h4>
							<em></em>
							<p>奖学金累计（RMB）</p>
						</div>
					</div>
					<div class="contentBottom clearfix">
						<div class="box fl">
							<h5>耶鲁大学  计算机科学录取</h5>
							<p class="name">姓名：W同学</p>
							<p>本科：俄勒冈大学  计算机信息工程</p>
							<p>GPA：3.93</p>
							<p>GRE: 318+2.5</p>
							<a href="javascript:;" onclick="go()">详情&gt;</a>
						</div>
						<div class="box fl">
							<h5>哥伦比亚大学  机械工程录取</h5>
							<p class="name">姓名：L同学</p>
							<p>本科：华中科技大学  机械自动化</p>
							<p>GPA：3.78  IELTS：7.0</p>
							<p>GRE: 318+2.5</p>
							<a href="javascript:;" onclick="go()">详情&gt;</a>
						</div>
						<div class="box fl">
							<h5>哥伦比亚大学  生物医学工程录取</h5>
							<p class="name">姓名：W同学</p>
							<p>本科：四川大学  制药工程</p>
							<p>GPA：3.64  TOEFL：103</p>
							<p>GRE: 323+3.0</p>
							<a href="javascript:;" onclick="go()">详情&gt;</a>
						</div>
						<div class="box fl">
							<h5>杜克大学  电气与电子工程录取</h5>
							<p class="name">姓名：W同学</p>
							<p>本科：天津大学  自动化专业</p>
							<p>GPA：3.78  TOEFL：107</p>
							<p>GRE: 322+3.5</p>
							<a href="javascript:;" onclick="go()">详情&gt;</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 关于工科申请  世界名校工学院院长们这么说  -->
		<div class="gk_shenqing gWidth1170 gk_index">
			<h3 class="title">关于工科申请  世界名校工学院院长们这么说</h3>
			<!-- content -->
			<div class="content clearfix">
				<div class="box box1 fl">
					<div class="img fl">
						<img src="/static/home/img/page/yanJs_gongke/tu1.png" alt="专注于本人的专业" title="专注于本人的专业">
						<span></span>
						<p>宾夕法尼亚州立大学</p>
						<p>工学院院长</p>
					</div>
					<div class="con fr">
						<h4>"专注于本人的专业"</h4>
						<p>单独的一个教育项目或者一个系的实力常常比这个大学整体的声望更为重要。如果想以后进某个工业部门，就应该注意这个硕士教育项目过去毕业生的就业状况。如果以后准备做独立的研究工作或者进学术界，就要选一个学校，其教授从事你所感兴趣的一个领域的研究工作，在那里读博士学位。</p>
						<a href="javascript:;" onclick="go()">专业选择免费指导</a>
					</div>
				</div>
				<div class="box box1 fl">
					<div class="img fl">
						<img src="/static/home/img/page/yanJs_gongke/tu2.png" alt="考虑学生们的情况" title="考虑学生们的情况">
						<span></span>
						<p>加州大学圣地亚哥分校</p>
						<p>工学院代院长</p>
					</div>
					<div class="con fr">
						<h4>"考虑学生们的情况"</h4>
						<p>不仅要了解教师，还应该看看同学们的情况。可以去访问校园、进实验室，并且同尽可能多的人交谈。学生们也可以了解一下入学人数和退学率，或者对女学生和少数民族(外籍学生)的服务等。</p>
						<a href="javascript:;" onclick="go()">快速了解梦校的学生情况</a>
					</div>
				</div>
				<div class="box fl">
					<div class="img fl">
						<img src="/static/home/img/page/yanJs_gongke/tu3.png" alt="显示对研究工作的热忱" title="显示对研究工作的热忱">
						<span></span>
						<p>西北大学</p>
						<p>生物医学工程教授</p>
					</div>
					<div class="con fr">
						<h4>"显示对研究工作的热忱"</h4>
						<p>如果你在大学阶段转过系或者得了一个理学士学位而没有做过研究工作，那么，做一下有关工程学的工作也有帮助；或者你能够指出大学课程中包含实验室试验。“这是表明你想做研究工作的某些基础”，如果你在大学的学位并非工程，那么要被录取就更难，偶有学生物或建筑的学生转向生物医学或者结构工程的。“关键是要能证明你为何要转换攻读领域的令人信服的理由”。</p>
						<a href="javascript:;" onclick="go()">马上报名名校工科科研项目</a>
					</div>
				</div>
				<div class="box fl">
					<div class="img fl">
						<img src="/static/home/img/page/yanJs_gongke/tu4.png" alt="要有良好的推荐" title="要有良好的推荐">
						<span></span>
						<p>哥伦比亚大学</p>
						<p>工学院院长</p>
					</div>
					<div class="con fr">
						<h4>"要有良好的推荐"</h4>
						<p>录取工学研究生的三大要素是：大学阶段学习成绩、GRE分数、推荐信。近些年来，推荐信作用更为增大，因为，分数泛滥使人很难分辨学生水平。哥伦比亚大学工学院院长认为，学生邀请自己大学阶段的教授写推荐信的作用更为突出，更能引起招生官的注意。</p>
						<a href="javascript:;" onclick="go()">如何写推荐信</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 工科热门专业推荐 -->
		<div class="zhuanye_tuijian gk_index">
			<div class="gWidth1170">
				<h3 class="title">工科热门专业推荐</h3>
				<!-- content -->
				<div class="content">
					<div class="xcontent clearfix">
						<div class="xbox active fl">
							<p>金融工程</p>
							<em></em>
						</div>
						<div class="xbox fl">
							<p>航空航天<br />工程</p>
							<em></em>
						</div>
						<div class="xbox fl">
							<p>电气与电子<br />工程</p>
							<em></em>
						</div>
						<div class="xbox fl">
							<p>计算机工程</p>
							<em></em>
						</div>
						<div class="xbox fl">
							<p>化学工程</p>
							<em></em>
						</div>
						<div class="xbox fl">
							<p>土木工程</p>
							<em></em>
						</div>
						<div class="xbox fl">
							<p>机械工程</p>
							<em></em>
						</div>
						<div class="xbox fl">
							<p>工业工程</p>
							<em></em>
						</div>
						<div class="xbox fl">
							<p>生物医学<br />工程</p>
							<em></em>
						</div>
					</div>
					<div class="xbottom">
						<div class="xbottom_box clearfix">
							<div class="btop clearfix">
								<div class="img fl">
									<img src="/static/home/img/page/yanJs_gongke/jinrong.png" alt="金融工程简介" title="金融工程简介">
									<div class="hidden1">金融工程简介</div>
									<div class="hidden">
										<div>
											<h4>金融工程简介</h4>
											<p>金工是一门综合了金融学、数学和计算机科学的交叉学科，在美国也叫数学金融、数量金融等，其课程通常由大学的商学院、数学系和工程学院联合授课。不仅包括金融产品设计，还包括金融产品定价、交易策略设计、金融风险管理等各个方面。</p>
											<a href="javascript:;" onclick="go()">马上申请</a>
										</div>
									</div>
								</div>
								<div class="fr">
									<div>
										<h5><span></span>背景要求</h5>
										<p>金工是对于学生背景要求最高的专业之一，学生专业背景需要为金融工程、数学、统计、计算机、经济、金融，数学要好。</p>
										<a href="javascript:;" onclick="go()">了解详情&gt;</a>
									</div>
									<div>
										<h5><span></span>就业方向</h5>
										<p>主要是培养金融界的技术工作者，职位主要集中在投资银行、对冲基金、商业银行和金融机构，就业主要在以下几个领域：基金公司、证券公司、银行等。</p>
									</div>
									<div>
										<h5><span></span>就业薪资</h5>
										<p>以卡耐基梅隆金工项目为例，学生的平均起薪(不包括奖金)为$92200+，有99%的学生夏天找到实习，80%在毕业后90天内确认找到了工作。</p>
									</div>
									<a href="javascript:;" onclick="go()">了解申请难点</a>
								</div>
							</div>
							<div class="bbot clearfix">
								<h3>名校推荐</h3>
								<div class="b clearfix">
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/kainaijimeilongdaxue.png" alt="卡内基梅隆大学" title="卡内基梅隆大学">
										<p>卡内基梅隆大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/bolukefenxiao.png" alt="纽约市立大学柏鲁克分校" title="纽约市立大学柏鲁克分校">
										<p>纽约市立大学<br />柏鲁克分校</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/school3.png" alt="普林斯顿大学" title="普林斯顿大学">
										<p>普林斯顿大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/gelunbiyadaxue.png" alt="哥伦比亚大学" title="哥伦比亚大学">
										<p>哥伦比亚大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/jiazhoudaxuebokelifenxiao.png" alt="加州大学伯克利分校" title="加州大学伯克利分校">
										<p>加州大学<br />伯克利分校</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/zhijiage.png" alt="芝加哥大学" title="芝加哥大学">
										<p>芝加哥大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
								</div>
							</div>
							<a href="javascript:;" onclick="go()">2019美国研究生金融工程专业最新排名</a>
						</div>
						<div class="xbottom_box clearfix">
							<div class="btop clearfix">
								<div class="img fl">
									<img src="/static/home/img/page/yanJs_gongke/hangkonghangtian.png" alt="航天航天工程简介" title="航天航天工程简介">
									<div class="hidden1">航天航天工程简介</div>
									<div class="hidden">
										<div>
											<h4 style="padding-bottom: 5px;">航天航天工程简介</h4>
											<p style="margin-bottom: 5px;">航空工业是目前世界上最先进，最高端的一种技术工程类产业。航空航天业在世界市场上占有重要位置，由于行业的特殊性，很多大学与世界众多跨国航空公司如波音、劳斯莱斯、英国宇航局等建立了合作从而集中进行开发研究。在专业分支上，航空航天工程主要分为工业设计、复合材料、空气/流体动力学、卫星与地球物理、控制与探测等方向。</p>
											<a href="javascript:;" onclick="go()">马上申请</a>
										</div>
									</div>
								</div>
								<div class="fr">
									<div>
										<h5><span></span>背景要求</h5>
										<p>对申请者的专业背景没有很严格的限制，除了航天专业的学生以外，材料、电子工程、物理、化工等背景的学生一样可以申请。</p>
										<a href="javascript:;" onclick="go()">了解详情&gt;</a>
									</div>
									<div>
										<h5><span></span>就业方向</h5>
										<p>航天航空工程专业就业大部分从事：操作，安装，校准和维护综合计算机/通信系统主机，模拟器，和其他数据采集，测试和测量仪器和设备，发射，跟踪，定位，评价空气和空间飞行器。也可能会记录和解释测试数据。</p>
									</div>
									<div>
										<h5><span></span>就业薪资</h5>
										<p>平均年薪：约$55040         薪酬范围：约$34380-80980</p>
									</div>
									<a href="javascript:;" onclick="go()">了解申请难点</a>
								</div>
							</div>
							<div class="bbot clearfix">
								<h3>名校推荐</h3>
								<div class="b clearfix">
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/jiazhouligong.png" alt="加州理工学院" title="加州理工学院">
										<p>加州理工学院</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/mashengligongdaxue.png" alt="麻省理工学院" title="麻省理工学院">
										<p>麻省理工学院</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/sitanfudaxue.png" alt="斯坦福大学" title="斯坦福大学">
										<p>斯坦福大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/zuozhiyaligongxueyuan.png" alt="佐治亚理工学院" title="佐治亚理工学院">
										<p>佐治亚理工学院</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/mixiegendaxue.png" alt="密歇根大学" title="密歇根大学">
										<p>密歇根大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/pududaxue.png" alt="普渡大学" title="普渡大学">
										<p>普渡大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
								</div>
							</div>
							<a href="javascript:;" onclick="go()">2019美国研究生航空航天工程专业最新排名</a>
						</div>
						<div class="xbottom_box clearfix">
							<div class="btop clearfix">
								<div class="img fl">
									<img src="/static/home/img/page/yanJs_gongke/dianqiyudianzi.png" alt="电气与电子工程简介" title="电气与电子工程简介">
									<div class="hidden1">电气与电子工程简介</div>
									<div class="hidden">
										<div>
											<h4 style="padding-bottom: 5px;">电气与电子工程简介</h4>
											<p style="margin-bottom: 5px;">电子电气工程专业是以电子学、电磁学等物理学分支为基础，涵盖电子学、电子计算机、电力工程、电信、控制工程、信号处理等子领域的一门工程学。电气与电子工程专业，是现代科技领域中的核心学科和关键学科，以电子技术的巨大进步才推动了以计算机网络为基础的信息时代的到来，并将改变人类的生活工作模式。它也是美国留学仅次于CS的热门专业。</p>
											<a href="javascript:;" onclick="go()">马上申请</a>
										</div>
									</div>
								</div>
								<div class="fr">
									<div>
										<h5><span></span>背景要求</h5>
										<p>本科为电子工程，计算机科学，生物工程，计算机工程等工科专业，或者物理，数学，生物等理科专业。</p>
										<a href="javascript:;" onclick="go()">了解详情&gt;</a>
									</div>
									<div>
										<h5><span></span>就业方向</h5>
										<p>电气工程专业毕业生能够在电气工程相关的系统运行、电信通信部门、自动控制、信息处理、实验技术、研制开发、经济管理以及电子与计算机技术应用等领域担任重要工作。</p>
									</div>
									<div>
										<h5><span></span>就业薪资</h5>
										<p>平均年薪：约$ 82160</p>
									</div>
									<a href="javascript:;" onclick="go()">了解申请难点</a>
								</div>
							</div>
							<div class="bbot clearfix">
								<h3>名校推荐</h3>
								<div class="b clearfix">
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/sitanfudaxue.png" alt="斯坦福大学" title="斯坦福大学">
										<p>斯坦福大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/mashengligongdaxue.png" alt="麻省理工学院" title="麻省理工学院">
										<p>麻省理工学院</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/jiazhoudaxuebokelifenxiao.png" alt="加州大学伯克利分校" title="加州大学伯克利分校">
										<p>加州大学<br />伯克利分校</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/yilinuoyidaxue.png" alt="伊利诺伊大学香槟分校" title="伊利诺伊大学香槟分校">
										<p>伊利诺伊大学<br />香槟分校</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/jiazhouligong.png" alt="加州理工学院" title="加州理工学院">
										<p>加州理工学院</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/zuozhiyaligongxueyuan.png" alt="佐治亚理工学院" title="佐治亚理工学院">
										<p>佐治亚理工学院</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
								</div>
							</div>
							<a href="javascript:;" onclick="go()">2019美国研究生航空航天工程专业最新排名</a>
						</div>
						<div class="xbottom_box clearfix">
							<div class="btop clearfix">
								<div class="img fl">
									<img src="/static/home/img/page/yanJs_gongke/jisuanji.png" alt="计算机工程简介" title="计算机工程简介">
									<div class="hidden1">计算机工程简介</div>
									<div class="hidden">
										<div>
											<h4>计算机工程简介</h4>
											<p>电计算机工程是一个以电机工程学和计算机科学的部分交叉领域为内容的工程学，其主要任务是设计及实现计算机系统。简言之，计算机工程学就是研究计算机如何运作并且做到更快捷更精准。其主要包括两方面：计算机软件与硬件工程。</p>
											<a href="javascript:;" onclick="go()">马上申请</a>
										</div>
									</div>
								</div>
								<div class="fr">
									<div>
										<h5><span></span>背景要求</h5>
										<p>一般院校没有规定专业背景，但申请时有理工科类背景录取机会大。部分院校有先修课要求，如本科一定要学过C++，JAVA，计算机结构，数据库等。</p>
										<a href="javascript:;" onclick="go()">了解详情&gt;</a>
									</div>
									<div>
										<h5><span></span>就业方向</h5>
										<p>CS专业毕业生在美国的就业市场一直很受欢迎，而根据不同的研究方向，主要有以下六种就业方向：网络与信息安全方向、软件编程方向、计算机网络方向、计算机科学技术方向、 多媒体动漫方向、人工智能方向。</p>
									</div>
									<div>
										<h5><span></span>就业薪资</h5>
										<p>美国软件工程师平均年薪：约$89000；高级软件工程师年薪：在$98000以上</p>
									</div>
									<a href="javascript:;" onclick="go()">了解申请难点</a>
								</div>
							</div>
							<div class="bbot clearfix">
								<h3>名校推荐</h3>
								<div class="b clearfix">
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/mashengligongdaxue.png" alt="麻省理工学院" title="麻省理工学院">
										<p>麻省理工学院</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/school4.png" alt="普林斯顿大学" title="普林斯顿大学">
										<p>普林斯顿大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/sitanfudaxue.png" alt="斯坦福大学" title="斯坦福大学">
										<p>斯坦福大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/kangnaierdaxue.png" alt="康奈尔大学" title="康奈尔大学">
										<p>康奈尔大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/kainaijimeilongdaxue.png" alt="卡内基梅陇大学" title="卡内基梅陇大学">
										<p>卡内基梅陇大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/jiazhoudaxuebokelifenxiao.png" alt="加州大学伯克利分校" title="加州大学伯克利分校">
										<p>加州大学<br />伯克利分校</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
								</div>
							</div>
							<a href="javascript:;" onclick="go()">2019美国研究生航空航天工程专业最新排名</a>
						</div>
						<div class="xbottom_box clearfix">
							<div class="btop clearfix">
								<div class="img fl">
									<img src="/static/home/img/page/yanJs_gongke/huaxue.png" alt="化学工程简介" title="化学工程简介">
									<div class="hidden1">化学工程简介</div>
									<div class="hidden">
										<div>
											<h4>化学工程简介</h4>
											<p>化学工程专业简称化工，是研究化学工业以及其他工业(如石油炼制工业、冶金工业、食品工业、印染工业等)生产过程中的共同规律，并应用这些规律来认识、解决生产中的工程问题的工程技术学科。它主要研究大规模改变物料中的化学组成及其机械和物理性质。</p>
											<a href="javascript:;" onclick="go()">马上申请</a>
										</div>
									</div>
								</div>
								<div class="fr">
									<div>
										<h5><span></span>背景要求</h5>
										<p>本科专业背景一般多为工程、数学、科学、物理、化学等理工类专业。</p>
										<a href="javascript:;" onclick="go()">了解详情&gt;</a>
									</div>
									<div>
										<h5><span></span>就业方向</h5>
										<p>在化工、炼油、冶金、能源、轻工、医药、环保和军工等部门从事工程设计、技术开发、生产技术管理和科学研究等方面的工作。</p>
									</div>
									<div>
										<h5><span></span>就业薪资</h5>
										<p>平均年薪：约$117000</p>
									</div>
									<a href="javascript:;" onclick="go()">了解申请难点</a>
								</div>
							</div>
							<div class="bbot clearfix">
								<h3>名校推荐</h3>
								<div class="b clearfix">
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/mashengligongdaxue.png" alt="麻省理工学院" title="麻省理工学院">
										<p>麻省理工学院</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/jiazhoudaxuebokelifenxiao.png" alt="加州大学伯克利分校" title="加州大学伯克利分校">
										<p>加州大学<br />伯克利分校</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/kangnaierdaxue.png" alt="康奈尔大学" title="康奈尔大学">
										<p>康奈尔大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/gelunbiyadaxue.png" alt="哥伦比亚大学" title="哥伦比亚大学">
										<p>哥伦比亚大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/kainaijimeilongdaxue.png" alt="卡内基梅陇大学" title="卡内基梅陇大学">
										<p>卡内基梅陇大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/kangnaierdaxue.png" alt="康奈尔大学" title="康奈尔大学">
										<p>康奈尔大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
								</div>
							</div>
							<a href="javascript:;" onclick="go()">2019美国研究生航空航天工程专业最新排名</a>
						</div>
						<div class="xbottom_box clearfix">
							<div class="btop clearfix">
								<div class="img fl">
									<img src="/static/home/img/page/yanJs_gongke/tumugongcheng.png" alt="土木工程简介" title="土木工程简介">
									<div class="hidden1">土木工程简介</div>
									<div class="hidden">
										<div>
											<h4>土木工程简介</h4>
											<p>美国土木工程专业是建造各类工程设施的科学技术的统称。它既指所应用的材料、设备和所进行的勘测、设计、施工、保养维修等技术活动;也指工程建设的对象。</p>
											<a href="javascript:;" onclick="go()">马上申请</a>
										</div>
									</div>
								</div>
								<div class="fr">
									<div>
										<h5><span></span>背景要求</h5>
										<p>本科背景为土木工程、应用力学、机械工程、数学、物理相应的基础课程，最好有科研背景、实习经历和发表过所申方向相关论文。</p>
										<a href="javascript:;" onclick="go()">了解详情&gt;</a>
									</div>
									<div>
										<h5><span></span>就业方向</h5>
										<p>道路、铁路、机场、桥梁、港口、通道、水坝、农田水利、管道、电站、水和水系统等建筑的规划、设计、建设、管理、建筑维护;包括建筑工程师、结构工程师、交通工程师、海洋工程师和岩土技术工程师等。</p>
									</div>
									<div>
										<h5><span></span>就业薪资</h5>
										<p>平均年薪：约$74600</p>
									</div>
									<a href="javascript:;" onclick="go()">了解申请难点</a>
								</div>
							</div>
							<div class="bbot clearfix">
								<h3>名校推荐</h3>
								<div class="b clearfix">
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/jiazhoudaxuebokelifenxiao.png" alt="加州大学伯克利分校" title="加州大学伯克利分校">
										<p>加州大学伯克利分校</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/sitanfudaxue.png" alt="斯坦福大学" title="斯坦福大学">
										<p>斯坦福大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/zuozhiyaligongxueyuan.png" alt="佐治亚理工学院" title="佐治亚理工学院">
										<p>佐治亚理工学院</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/sitanfudaxue.png" alt="德克萨斯大学奥斯汀分校" title="德克萨斯大学奥斯汀分校">
										<p>德克萨斯大学<br />奥斯汀分校</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/yilinuoyidaxue.png" alt="伊利诺伊大学香槟分校" title="伊利诺伊大学香槟分校">
										<p>伊利诺伊大学<br />香槟分校</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/pududaxue.png" alt="普渡大学" title="普渡大学">
										<p>普渡大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
								</div>
							</div>
							<a href="javascript:;" onclick="go()">2019美国研究生航空航天工程专业最新排名</a>
						</div>
						<div class="xbottom_box clearfix">
							<div class="btop clearfix">
								<div class="img fl">
									<img src="/static/home/img/page/yanJs_gongke/jixie.png" alt="机械工程简介" title="机械工程简介">
									<div class="hidden1">机械工程简介</div>
									<div class="hidden">
										<div>
											<h4>机械工程简介</h4>
											<p style="margin-bottom: 5px;">机械工程是一门涉及利用物理定律为机械系统作分析、设计、生产及维修的工程学科。机械工程所处理的，是把能量及物料转化成可使用的物品。从宏观的角度来看，我们生活中所接触的每一件物件，其制造过程均可说与机械工程有关。美国大学机械工程专业是众多工程学科中范围最广的一科。</p>
											<a href="javascript:;" onclick="go()">马上申请</a>
										</div>
									</div>
								</div>
								<div class="fr">
									<div>
										<h5><span></span>背景要求</h5>
										<p>此专业比较适合本科阶段的先修课程包括力学，动力学，热学，材料学，机械设计，数学等基础课程的学生。</p>
										<a href="javascript:;" onclick="go()">了解详情&gt;</a>
									</div>
									<div>
										<h5><span></span>就业方向</h5>
										<p>顾问工程师，工业工程师，塑料制造工程师，安全技术工程师，测试工程师，汽车工程师，生产制造工程师，设计工程师，研究开发技术人员。</p>
									</div>
									<div>
										<h5><span></span>就业薪资</h5>
										<p>平均年薪：约 $105000</p>
									</div>
									<a href="javascript:;" onclick="go()">了解申请难点</a>
								</div>
							</div>
							<div class="bbot clearfix">
								<h3>名校推荐</h3>
								<div class="b clearfix">
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/mashengligongdaxue.png" alt="麻省理工学院" title="麻省理工学院">
										<p>麻省理工学院</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/sitanfudaxue.png" alt="斯坦福大学" title="斯坦福大学">
										<p>斯坦福大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/jiazhoudaxuebokelifenxiao.png" alt="加州大学伯克利分校" title="加州大学伯克利分校">
										<p>加州大学<br />伯克利分校</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/jiazhouligong.png" alt="加州理工学院" title="加州理工学院">
										<p>加州理工学院</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/zuozhiyaligongxueyuan.png" alt="佐治亚理工学院" title="佐治亚理工学院">
										<p>佐治亚理工学院</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/mixiegendaxue.png" alt="密歇根大学" title="密歇根大学">
										<p>密歇根大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
								</div>
							</div>
							<a href="javascript:;" onclick="go()">2019美国研究生航空航天工程专业最新排名</a>
						</div>
						<div class="xbottom_box clearfix">
							<div class="btop clearfix">
								<div class="img fl">
									<img src="/static/home/img/page/yanJs_gongke/gongyegongcheng.png" alt="工业工程简介" title="工业工程简介">
									<div class="hidden1">工业工程简介</div>
									<div class="hidden">
										<div>
											<h4>工业工程简介</h4>
											<p>工业工程是对人、物料、设备、能源和信息等所组成的集成系统，进行设计、改善和实施的一门学科。它综合运用数学、物理、和社会科学的专门知识和技术，结合工程分析和设计的原理与方法，对该系统所取得的成果进行确认、预测和评价。</p>
											<a href="javascript:;" onclick="go()">马上申请</a>
										</div>
									</div>
								</div>
								<div class="fr">
									<div>
										<h5><span></span>背景要求</h5>
										<p>大多数学校并不限制专业背景是，一般情况下工程专业，自然科学学科，计算机科学，数学专业等背景都可以申请，不过理工科背景学习该专业会比较有优势。多数学校具有先修课的要求。</p>
										<a href="javascript:;" onclick="go()" style="bottom: -20px;">了解详情&gt;</a>
									</div>
									<div>
										<h5><span></span>就业方向</h5>
										<p>销售工程师、电气工程师、IE工程师、结构工程师、机械工程师、销售经理、软件工程师、工艺工程师、土建工程师、工业工程师、项目经理、技术支持工程师等</p>
									</div>
									<div>
										<h5><span></span>就业薪资</h5>
										<p>平均年薪：约 $83470</p>
									</div>
									<a href="javascript:;" onclick="go()">了解申请难点</a>
								</div>
							</div>
							<div class="bbot clearfix">
								<h3>名校推荐</h3>
								<div class="b clearfix">
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/zuozhiyaligongxueyuan.png" alt="佐治亚理工学院" title="佐治亚理工学院">
										<p>佐治亚理工学院</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/mixiegendaxue.png" alt="密歇根大学安娜堡分校" title="密歇根大学安娜堡分校">
										<p>密歇根大学<br />安娜堡分校</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/jiazhoudaxuebokelifenxiao.png" alt="加州大学伯克利分校" title="加州大学伯克利分校">
										<p>加州大学<br />伯克利分校</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/xibeidaxue.png" alt="西北大学" title="西北大学">
										<p>西北大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/kangnaierdaxue.png" alt="康奈尔大学" title="康奈尔大学">
										<p>康奈尔大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/pududaxue.png" alt="普渡大学" title="普渡大学">
										<p>普渡大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
								</div>
							</div>
							<a href="javascript:;" onclick="go()">2019美国研究生航空航天工程专业最新排名</a>
						</div>
						<div class="xbottom_box clearfix">
							<div class="btop clearfix">
								<div class="img fl">
									<img src="/static/home/img/page/yanJs_gongke/shengwuyixue.png" alt="生物医学工程简介">
									<div class="hidden1">生物医学工程简介</div>
									<div class="hidden">
										<div>
											<h4>生物医学工程简介</h4>
											<p>美国生物医学工程专业是理、工、医、生物等学科高度交叉的新兴学科。该学科致力于人的防病、治病、康复和健康，致力于为探索生命现象，提供高水平的科学方法和工程技术手段。</p>
											<a href="javascript:;" onclick="go()">马上申请</a>
										</div>
									</div>
								</div>
								<div class="fr">
									<div>
										<h5><span></span>背景要求</h5>
										<p>要求学生有较强的专业背景。</p>
										<a href="javascript:;" onclick="go()">了解详情&gt;</a>
									</div>
									<div>
										<h5><span></span>就业方向</h5>
										<p>研究机构，医院影像、设备、临床工程、信息 中心等相关科室，医疗器械相关企业、事业单位，政府相关管理部门等。</p>
									</div>
									<div>
										<h5><span></span>就业薪资</h5>
										<p>平均年薪：早期约 $70500    中期约：$122000</p>
									</div>
									<a href="javascript:;" onclick="go()">了解申请难点</a>
								</div>
							</div>
							<div class="bbot clearfix">
								<h3>名校推荐</h3>
								<div class="b clearfix">
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/yuehanhuopujinsidaxue.png" alt="约翰霍普金斯大学" title="约翰霍普金斯大学">
										<p>约翰霍普金斯大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/aibolidaxue.png" alt="埃默里大学" title="埃默里大学">
										<p>埃默里大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/jiazhoudaxueshengdiyagefenxiao.png" alt="加州大学圣地亚哥分校" title="加州大学圣地亚哥分校">
										<p>加州大学<br />圣地亚哥分校</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/zuozhiyaligongxueyuan.png" alt="佐治亚理工学院" title="佐治亚理工学院">
										<p>佐治亚理工学院</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/sitanfudaxue.png" alt="斯坦福大学" title="斯坦福大学">
										<p>斯坦福大学</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
									<div class="box fl">
										<img src="/static/home/img/page/yanJs_gongke/mashengligongdaxue.png" alt="麻省理工学院" title="麻省理工学院">
										<p>麻省理工学院</p>
										<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
									</div>
								</div>
							</div>
							<a href="javascript:;" onclick="go()">2019美国研究生航空航天工程专业最新排名</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国研究生申请难点众多 彬彬教育帮你一一击破 -->
		<div class="nandian gk_index gWidth1170">
			<h3 class="title">美国研究生申请难点众多 彬彬教育帮你一一击破</h3>
			<!-- content -->
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
		
		<!-- 美国研究生工科申请规划 -->
		<div class="guihua gk_index">
			<div class="gWidth1170">
				<h3 class="title">美国研究生工科申请规划</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="box">
						<ul>
							<li>职业/科研道路规划；</li>
							<li>确保GPA成绩；</li>
							<li>准备语言考试</li>
							<li>（托福/雅思/GRE/GMAT）；</li>
							<li>提升软性背景条件。</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>语言考试考取不错的成绩；</li>
							<li>对申请的项目做了解；</li>
							<li>参加实习科研项目，</li>
							<li>提升软性背景。</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>确定选校方案，构思文书；</li>
							<li>撰写文书，提交网申和材料；</li>
							<li>跟踪申请状态，进行套磁。</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>进行申请面试；</li>
							<li>收获名校offer；</li>
							<li>选择就读项目；</li>
							<li>办理签证，行前准备。</li>
						</ul>
						<span></span>
					</div>
					<div class="xian">
						<div>
							<span></span>
							<p>大一/大二</p>
						</div>
						<div>
							<span></span>
							<p>大三</p>
						</div>
						<div>
							<span></span>
							<p>大四上学期</p>
						</div>
						<div>
							<span></span>
							<p>大四下学期</p>
						</div>
					</div>
				</div>
				<div class="anniu">
					<a href="javascript:;" onclick="go()" class="a1">马上申请2019美国工科研究生</a>
					<a href="javascript:;" onclick="go()" class="a2">查看详细时间规划</a>
				</div>
			</div>
		</div>
		
		<!-- 学长/学姐说申请 -->
		<div class="shuo_sq gk_index gWidth1170">
			<h3 class="title">学长/学姐说申请</h3>
			<p>听过来人一席话 躲避留学申请坑</p>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<h4>W同学</h4>
					<div>
						<p><b>本科：</b>同济大学</p>
						<p><b>录取：</b>罗德岛设计学院</p>
					</div>
					<div>
						<h3>关于申请她说：</h3>
						<p>对于罗德岛这样的世界顶尖设计学院而言，作品集在申请材料和录取因素中占了相当大的比重。对于有志于申请艺术类院校的同学们而言，作品集的重要性真的是不需要赘述了。RISD在申请时，需要通过slideroom提交12-20幅学生近期最棒的艺术作品。</p>
					</div>
					<div class="anniu">
						<a href="javascript:;" onclick="go()" class="a1">向TA咨询</a>
						<a href="/success/121.html" target="_blank" class="a2">查看详情</a>
					</div>
				</div>
				<div class="box fl">
					<h4>H同学</h4>
					<div>
						<p><b>本科：</b>吉林大学</p>
						<p><b>录取：</b>杜克大学</p>
					</div>
					<div>
						<h3>关于申请她说：</h3>
						<p>杜克大学全美排名第八，EE专业也是非常优秀的专业，竞争非常激烈。我本身非常喜欢有实习或者工作经验的，但在这方面欠缺了一定的实习经历，后经过彬彬教育的推荐和规划，成功申请到美国知名的暑研项目，最后也成功收到了杜克大学的offer。</p>
					</div>
					<div class="anniu">
						<a href="javascript:;" onclick="go()" class="a1">向TA咨询</a>
						<a href="/success/56.html" target="_blank" class="a2">查看详情</a>
					</div>
				</div>
				<div class="box fl">
					<h4>W同学</h4>
					<div>
						<p><b>本科：</b>哈尔滨工业大学</p>
						<p><b>录取：</b>南加州大学</p>
					</div>
					<div>
						<h3>关于申请她说：</h3>
						<p>南加州大学的石油工程专业在全美排名中，排到第八位，是非常热门的专业，申请也较为激烈。因此我很早之前就找彬彬教育做了申请规划，后参加了一次大型企业的实习工作，并获得导师的优秀推荐信，申请也大大的加分。</p>
					</div>
					<div class="anniu">
						<a href="javascript:;" onclick="go()" class="a1">向TA咨询</a>
						<a href="/success/55.html" target="_blank" class="a2">查看详情</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 全维度高品质背景提升项目 -->
		<div class="bjts gk_index">
			<div class="gWidth1170">
				<h3 class="title">全维度高品质背景提升项目</h3>
				<p>提升软性背景助力名校申请</p>
				<!-- content -->
				<div class="content clearfix">
					<div class="box fl">
						<div class="hidden1">麻省理工学院土木工程科研项目</div>
						<div class="hidden2">
							<h3>麻省理工学院土木工程科研项目</h3>
							<p>寒暑假，每期时间长度为3-4周；具体情况根据学生面试情况由美方进行调整；报名后1周安排面试，面试前辅导学生阅读1篇专业论文。</p>
							<a href="/mxky/229.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="box box2 fl">
						<div class="hidden1">麻省理工学院生物科研</div>
						<div class="hidden2">
							<h3>麻省理工学院生物科研</h3>
							<p>寒假，暑假，具体根据学生面试情况由科研组进行调整。面试前需要阅读科研组提供的一篇专业论文。</p>
							<a href="/mxky/222.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="box box3 fl">
						<div class="hidden1">麻省理工学院机械工程科研</div>
						<div class="hidden2">
							<h3>麻省理工学院机械工程科研</h3>
							<p>寒假，暑假，每期时间长度为4周，具体情况根据学生面试情况由美方进行调整。</p>
							<a href="/mxky/107.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="box box4 fl">
						<div class="hidden1">微软 Microsoft</div>
						<div class="hidden2">
							<h3>微软 Microsoft</h3>
							<p>全年接受报名，实习时间2个月以上。</p>
							<a href="/mqsx/293.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="box box5 fl">
						<div class="hidden1">中泰国际</div>
						<div class="hidden2">
							<h3>中泰国际</h3>
							<p>全年接受报名，实习时间1个月。</p>
							<a href="/mqsx/280.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="box box6 fl">
						<div class="hidden1">因诺(上海)资产管理有限公司</div>
						<div class="hidden2">
							<h3>因诺(上海)资产管理有限公司</h3>
							<p>全年接受报名，实习时间2-3个月</p>
							<a href="/mqsx/277.html" target="_blank">查看详情</a>
						</div>
					</div>
				</div>
				<div class="anniu">
					<a href="javascript:;" onclick="go()" class="a1">快速匹配适合自己的项目</a>
					<a href="/page/polymerization.html" target="_blank" class="a2">查看更多</a>
				</div>
			</div>
		</div>
		
		<!-- 彬彬服务模式 -->
		<div class="fwms gk_index gWidth1170">
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
						<?php if(is_array($tutor_arr) || $tutor_arr instanceof \think\Collection || $tutor_arr instanceof \think\Paginator): $i = 0; $__LIST__ = $tutor_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tutor_vo): $mod = ($i % 2 );++$i;if($key != '5'): ?>
								<a href="javascript:;" class="fl"><?php echo htmlentities($tutor_vo['tutor_type']); ?></a><span class="fl">|</span>
							<?php else: ?>
								<a href="javascript:;" class="fl"><?php echo htmlentities($tutor_vo['tutor_type']); ?></a>
							<?php endif; endforeach; endif; else: echo "" ;endif; ?>
							</div>

						</div>
						<!-- 内容 -->
							<div class="clearfix b">
								<?php if(is_array($tutor_arr) || $tutor_arr instanceof \think\Collection || $tutor_arr instanceof \think\Paginator): $i = 0; $__LIST__ = $tutor_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
								<div class="bBox clearfix">
									<div class="fl leftb">
										<h3><?php echo htmlentities($val['tutor_type']); ?></h3>
										<p><?php echo htmlentities($val['english_title']); ?></p>
										<span></span>
										<em><?php echo htmlentities($val['describe']); ?></em>
										<em>擅长：<?php echo htmlentities($val['adept']); ?></em>
										<div class="bBtn clearfix">
											<a href="javascript:;" onclick="go()" class="fl">匹配专属导师</a>
											<a href="/tutor/special/" target="_blank" class="fl">查看更多导师</a>
										</div>
									</div>
									<div class="fr rightb">
										<?php if(is_array($val['tree']) || $val['tree'] instanceof \think\Collection || $val['tree'] instanceof \think\Paginator): $i = 0; $__LIST__ = $val['tree'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tree_val): $mod = ($i % 2 );++$i;?>
										<div class="fl">
											<img src="<?php echo config('admin_path');?><?php echo htmlentities($tree_val['thumbnail']); ?>" alt="Will Zhang" title="Will Zhang">
											<div class="hiddenTitle"><?php echo htmlentities($tree_val['title']); ?></div>
											<div class="hidden">
												<h3><?php echo htmlentities($tree_val['title']); ?></h3>
												<span></span>
												<?php if(!(empty($tree_val['school']) || (($tree_val['school'] instanceof \think\Collection || $tree_val['school'] instanceof \think\Paginator ) && $tree_val['school']->isEmpty()))): ?>
													<p><?php echo htmlentities($tree_val['school']); ?></p>
												<?php endif; if(!(empty($tree_val['major']) || (($tree_val['major'] instanceof \think\Collection || $tree_val['major'] instanceof \think\Paginator ) && $tree_val['major']->isEmpty()))): ?>
													<p><?php echo htmlentities($tree_val['major']); ?></p>
												<?php endif; if(!(empty($tree_val['adept']) || (($tree_val['adept'] instanceof \think\Collection || $tree_val['adept'] instanceof \think\Paginator ) && $tree_val['adept']->isEmpty()))): ?>
													<p><?php echo htmlentities($tree_val['adept']); ?></p>
												<?php endif; if(!(empty($val['rewrite']) || (($val['rewrite'] instanceof \think\Collection || $val['rewrite'] instanceof \think\Paginator ) && $val['rewrite']->isEmpty()))): ?>
													<a href="/<?php echo htmlentities($val['rewrite']); ?>/<?php echo htmlentities($tree_val['id']); ?>.html" target="_blank">个人介绍</a>
												<?php else: ?>
													<a onclick="go()" target="_blank">与TA聊聊</a>
												<?php endif; ?>
											</div>
										</div>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
								</div>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
					</div>

			</div>
		</div>
		
		<!-- 彬彬教育致力让每一个学生牵手世界名校 -->
		<div id="mydiv" class="gk_index" style="height: 695px;">
			<div class="box gWidth1170 clearfix">
				<!-- title -->
				<h3 class="title">彬彬教育致力让每一个学生牵手世界名校</h3>
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
				}else if(top<=$('.luqu_jiebao').offset().top){
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
						$('.topNav').css({'position': 'static'});
					}
				}else if(top == 0) {
					$('.topNav').css({'position': 'relative'});
				}
			}
			$('.bannerNav span').on('click', function () {
				var index = $('.bannerNav span').index($(this));
				var offsetTop = $('.gk_index').eq(index).offset().top;
				$('body, html').stop().animate({scrollTop: offsetTop + 0}, 1500);
			})
			// 
			$('.bannerNav span:last-child').css({'margin-right': '0'});
			// 增长数字的动画
			var options = {
			  useEasing: true, 
			  useGrouping: true, 
			  separator: '', 
			  decimal: '.', 
			};
			var num1 = new CountUp("span1", 0, 100, 0, 2.5, options);
			var num2 = new CountUp("span2", 0, 300, 0, 2.5, options);
			var num3 = new CountUp("span3", 0, 1000, 0, 2.5, options);
			var num4 = new CountUp("span4", 0, 2.4, 1, 2.5, options);
			num1.start();
			num2.start();
			num3.start();
			num4.start();
			// 
			$('.luqu_jiebao .content .contentBottom .box:last-child').css({'margin-right': '0'});
			// 
			$('.gk_shenqing .content .box:nth-child(2n)').css({'margin-right': '0'});
			// 
			$Xx = $('.zhuanye_tuijian .content .xcontent .xbox');
			$('.zhuanye_tuijian .content .xcontent .xbox:last-child').css({'margin-right': '0'});
			$('.zhuanye_tuijian .content .xbottom .xbottom_box').eq(0).css({'display': 'block'});
			$Xx.click(function () {
				var index = $Xx.index($(this));
				$(this).addClass('active').siblings('.xbox').removeClass('active');
				$('.xbottom_box').eq(index).stop().fadeIn().siblings('.xbottom_box').stop().fadeOut();
			})
			$('.zhuanye_tuijian .content .xbottom .xbottom_box .btop>div.fr>div:nth-child(3)').css({'margin-bottom': '12px'});
			// 
			var p = $('.zhuanye_tuijian .content .xbottom .xbottom_box .bbot .b .box p');
			for(var i=0; i<p.length; i++){
				if( p.eq(i).children('br').length !== 0 ){
					p.eq(i).css({'margin-bottom': '3px'})
					p.eq(i).siblings('img').css({'margin-bottom': '8px'});
				}
			}
			$('.zhuanye_tuijian .content .xbottom .xbottom_box .bbot .b .box:last-child').css({'margin-right': '0'});
			// 
			$('.zhuanye_tuijian .content .xbottom .xbottom_box .btop .img').hover(function () {
				$(this).children('.hidden1').stop().fadeOut();
				$(this).children('.hidden').stop().fadeIn();
			}, function () {
				$(this).children('.hidden').stop().fadeOut();
				$(this).children('.hidden1').stop().fadeIn();
			})
			// 
			$('.nandian .content>div.fl>ul li:last-child').css({'margin-bottom': '0'});
			$('.nandian .content>div.fr>ul li:last-child').css({'margin-bottom': '0'});
			$('.nandian .content>ul li:last-child').css({'margin-bottom': '0'});
			// 
			$('.shuo_sq .content .box:last-child').css({'margin-right': '0'});
			// 
			$('.bjts .content .box:nth-child(3n)').css({'margin-right': '0'});
			$('.bjts .content .box').hover(function () {
				$(this).children('.hidden1').stop().fadeOut();
				$(this).children('.hidden2').stop().fadeIn();
			}, function (){
				$(this).children('.hidden2').stop().fadeOut();
				$(this).children('.hidden1').stop().fadeIn();
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
			// 
			var boxIndex = $('.guihua .content .box');
			var spanIndex = $('.guihua .content .xian span');
			var pIndex = $('.guihua .content .xian p');
			for( var i=0; i<boxIndex.length; i++ ){
				if( i%2 != 0 ){
					$('.guihua .content .box').eq(i).css({
						'top': '230px',
						'left': (i * 268) + (32 * i) + 'px'
					})
				}else{
					$('.guihua .content .box').eq(i).css({
						'bottom': '230px',
						'left': (i * 268) + (31 * i) + 'px'
					})
				}
			}
			$('.guihua .content .box:nth-child(2n)>span').css({
				'top': '-14px',
				'border-color': 'transparent transparent #DFDCDA transparent'
			})
			for(var i=0; i<pIndex.length; i++){
				if( i%2!=0 ){
					pIndex.eq(i).css({'top': '15px'});
				}else{
					pIndex.eq(i).css({'bottom': '15px'});
				}
			}
			pIndex.eq(0).css({'left': '-35px'});
			pIndex.eq(1).css({'left': '280px'});
			pIndex.eq(2).css({'left': '553px'});
			pIndex.eq(3).css({'left': '855px', 'width': '100px'});
			// 
			$(window).scroll(function () {
				if( $(window).scrollTop() + 700 >= $('.luqu_jiebao').offset().top && $(window).scrollTop() < $('.gk_shenqing').offset().top ){
					num1.start();
					num2.start();
					num3.start();
					num4.start();
				}else if ( $(window).scrollTop() < $('.luqu_jiebao').offset().top || $(window).scrollTop() >= $('.gk_shenqing').offset().top ) {
					num1.reset();
					num2.reset();
					num3.reset();
					num4.reset();
				}
				if( $(window).scrollTop()>=$('.guihua').offset().top ){
					spanIndex.fadeIn(500);
					for(var i=0; i<spanIndex.length; i++){
						spanIndex.eq(i).animate({'left': 287 + (i-1)*300 + 'px'}, 2000, function () {
								pIndex.fadeIn(2000);
							});
						if( i==0 ){
							spanIndex.eq(i).css({'left': '-10px'});
						}
					}
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
		
	</body>
</html>
