<?php /*a:7:{s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\collegemajor.html";i:1554198527;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1553677718;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1553062603;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1554184743;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_daoshi.html";i:1554281138;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1554189517;s:89:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_undergraduate.html";i:1554189591;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/collegemajor.css">
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
			<div class="gWidth1170">
				<h1>美国大学专业解析</h1>
				<h3>360°解读美国热门专业</h3>
				<div class="anniu">
					<a href="javascript:;" onclick="go()">热门专业咨询</a>
					<a href="javascript:;" onclick="go()" class="a1">马上定制留学方案</a>
				</div>
			</div>
		</div>
		
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">商科类</span>
				<span>工科类</span>
				<span>文科艺术类</span>
				<span>选专业技巧</span>
				<span>成功案例</span>
				<span>背景提升</span>
				<span>导师团队</span>
				<span>彬彬优势</span>
			</div>
		</div>
		<div class="navHidden"></div>
		
		<!-- 2019 USNews美国商科热门专业 -->
		<div class="shangke zhuanye_paiming zy_index">
			<div class="gWidth1170">
				<h3 class="title">2019 USNews美国商科热门专业</h3>
				<!-- content -->
				<div class="content">
					<div class="zy_title">
						<a href="javascript:;" class="active">金融专业</a><span>|</span>
						<a href="javascript:;">会计专业</a><span>|</span>
						<a href="javascript:;">经济学专业</a><span>|</span>
						<a href="javascript:;">统计学专业</a><span>|</span>
						<a href="javascript:;">市场营销学专业</a>
					</div>
					<div class="zy_box clearfix">
						<div class="box">
							<div class="fl">
								<div class="img">
									<img src="/static/home/img/page/benke_zhuanye/shangke1.jpg" alt="">
									<div class="hi1"><h2>金融专业介绍</h2></div>
									<div class="hi2"><div><h3>金融专业介绍</h3><p>金融专业是一个非常有前景的专业，个人、公司、政府和私人机构越来越依赖专业金融人员进行有效的金融管理。</p></div></div>
								</div>
								<h3><em></em>学校推荐</h3>
								<p>宾夕法尼亚大学、纽约大学、麻省理工学院、密歇根大学安娜堡分校、德克萨斯大学奥斯汀分校、加州大学伯克利分校、印第安纳大学伯明顿分校、卡耐基梅隆大学</p>
								<a href="javascript:;" onclick="go()">更多学校推荐&gt;&gt;</a>
							</div>
							<div class="fr">
								<div class="fr_box clearfix">
									<h3><em></em>就业方向</h3>
									<p>公司的金融部门，保险、证券、房地产业，政府的财政管理部门等。许多人的理想是去投资银行工作。一般初级人员的工作强度很大，工作时间很长。不同的工作单位，薪水待遇相差极大。虽然有的毕业生到华尔街的投资银行工作，可以拿到令人难以置信的高薪，但是，大多数毕业生只能在小银行或机构工作，两者待遇相差极大，并不是人人都容易暴发。</p>
									<a href="javascript:;" onclick="go()">了解更多就业去向&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业岗位</h3>
									<p>管理人员，基金经理，证券经纪人，股票分析师</p>
									<a href="javascript:;" onclick="go()">更多就业岗位信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业薪资</h3>
									<p>行业平均薪资（美国）$ 89560</p>
									<a href="javascript:;" onclick="go()">更多就业薪资信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>背景要求</h3>
									<p>美国的金融专业的院校申请比较看重学生的推荐信、实习经历。学生在准备的过程中需要做好自己的硬件成绩和软件条件的平衡，丰富自身的背景，准备好相关的成绩和材料。</p>
									<a href="javascript:;" onclick="go()">了解申请条件&gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="anniu">
							<a href="javascript:;" onclick="go()" class="aaa">点击申请美国金融专业</a>
							<a href="javascript:;" onclick="go()" class="a1">查看更多商科热门专业</a>
						</div>
					</div>
					<div class="zy_box clearfix">
						<div class="box">
							<div class="fl">
								<div class="img">
									<img src="/static/home/img/page/benke_zhuanye/shangke2.jpg" alt="">
									<div class="hi1"><h2>会计专业介绍</h2></div>
									<div class="hi2"><div><h3>会计专业介绍</h3><p>会计工作是将财政、经济的数据进行搜集、处理、总结，并将之作为指导商业管理决策的科学根据。会计学与商业管理都有着多方面的联系，如成本、税务、利润、预算等都是商业管理中很重要的一部分。专业会计师是商业管理中不可替代的重要人才。</p></div></div>
								</div>
								<h3><em></em>学校推荐</h3>
								<p>德克萨斯大学奥斯汀分校、杨百翰大学、伊利诺伊大学厄本那-香槟分校、密歇根大学安娜堡分校、宾夕法尼亚大学、加州大学伯克利分校、圣母大学、南加州大学</p>
								<a href="javascript:;" onclick="go()">更多学校推荐&gt;&gt;</a>
							</div>
							<div class="fr">
								<div class="fr_box clearfix">
									<h3><em></em>就业方向</h3>
									<p>就业市场需求量巨大，商业和工业机构都需要会计师。刚毕业的学生可能当成本会计、查税员等。大部分学生毕业后进入私营公司工作，如大、中会计师事务所；15%的毕业生自行开业提供报税服务及财务咨询。工作流动性较大，资深人员可成为公司的中高层管理人员。</p>
									<a href="javascript:;" onclick="go()">了解更多就业去向&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业岗位</h3>
									<p>审计员，法务会计咨询顾问，咨询顾问，运营服务</p>
									<a href="javascript:;" onclick="go()">更多就业岗位信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业薪资</h3>
									<p>行业平均薪资（美国）$ 67190</p>
									<a href="javascript:;" onclick="go()">更多就业薪资信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>背景要求</h3>
									<p>美国的会计专业的院校申请比较看重学生的推荐信、实习经历。学生在准备的过程中需要做好自己的硬件成绩和软件条件的平衡，丰富自身的背景，准备好相关的成绩和材料。</p>
									<a href="javascript:;" onclick="go()">了解申请条件&gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="anniu">
							<a href="javascript:;" onclick="go()" class="aaa">点击申请美国会计专业</a>
							<a href="javascript:;" onclick="go()" class="a1">查看更多商科热门专业</a>
						</div>
					</div>
					<div class="zy_box clearfix">
						<div class="box">
							<div class="fl">
								<div class="img">
									<img src="/static/home/img/page/benke_zhuanye/shangke3.jpg" alt="">
									<div class="hi1"><h2>经济学专业介绍</h2></div>
									<div class="hi2"><div><h3>经济学专业介绍</h3><p>经济学是研究资源配置、生产、分配、产品交换、消费，并分析、预测和激励经济发展的学科。近年来，经济学较多地使用数学及统计模型进行研究。大学本科要求学会使用经济学原理与方法，精确地进行数据处理，为经济管理提供理论根据。</p></div></div>
								</div>
								<h3><em></em>学校推荐</h3>
								<p>哈佛大学、麻省理工学院、普林斯顿大学、芝加哥大学、斯坦福大学、加州大学伯克利分校、西北大学</p>
								<a href="javascript:;" onclick="go()">更多学校推荐&gt;&gt;</a>
							</div>
							<div class="fr">
								<div class="fr_box clearfix">
									<h3><em></em>就业方向</h3>
									<p>未来10年职业市场需求量超过100万；在企业管理、财政、金融、保险、销售等部门工作。</p>
									<a href="javascript:;" onclick="go()">了解更多就业去向&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业岗位</h3>
									<p>研究员，投行，投资分析员</p>
									<a href="javascript:;" onclick="go()">更多就业岗位信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业薪资</h3>
									<p>行业平均薪资（美国）$ 82160</p>
									<a href="javascript:;" onclick="go()">更多就业薪资信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>背景要求</h3>
									<p>美国的经济学专业的院校申请比较看重学生的推荐信、研究经历和论文。学生在准备的过程中需要做好自己的硬件成绩和软件条件的平衡，丰富自身的背景，准备好相关的成绩和材料。</p>
									<a href="javascript:;" onclick="go()">了解申请条件&gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="anniu">
							<a href="javascript:;" onclick="go()" class="aaa">点击申请美国经济学专业</a>
							<a href="javascript:;" onclick="go()" class="a1">查看更多商科热门专业</a>
						</div>
					</div>
					<div class="zy_box clearfix">
						<div class="box">
							<div class="fl">
								<div class="img">
									<img src="/static/home/img/page/benke_zhuanye/shangke4.jpg" alt="">
									<div class="hi1"><h2>统计学专业介绍</h2></div>
									<div class="hi2"><div><h3>统计学专业介绍</h3><p>统计学是应用数学的一个分支，主要通过利用概率论建立数学模型，收集所观察系统的数据，进行量化的分析、总结，并进而进行推断和预测，为相关决策提供依据和参考。其中用到了大量的数学及其它学科的专业知识，它的使用范围几乎覆盖了社会科学和自然科学的各个领域。</p></div></div>
								</div>
								<h3><em></em>学校推荐</h3>
								<p>斯坦福大学、加州大学伯克利分校、哈佛大学、华盛顿大学、约翰霍普金斯大学、芝加哥大学</p>
								<a href="javascript:;" onclick="go()">更多学校推荐&gt;&gt;</a>
							</div>
							<div class="fr">
								<div class="fr_box clearfix">
									<h3><em></em>就业方向</h3>
									<p>市场需求较大，如果能结合其他专业，就有更大的市场竞争力。可以从事商业运筹学方面的工作和研究，当商业顾问，金融、证券分析师，教师等。</p>
									<a href="javascript:;" onclick="go()">了解更多就业去向&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业岗位</h3>
									<p>数据分析师，行业分析师，商品数据分析专员，数据挖掘工程师</p>
									<a href="javascript:;" onclick="go()">更多就业岗位信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业薪资</h3>
									<p>行业平均薪资（美国）$ 80110</p>
									<a href="javascript:;" onclick="go()">更多就业薪资信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>背景要求</h3>
									<p>美国的金融专业的院校申请比较看重学生的推荐信、实习经历。学生在准备的过程中需要做好自己的硬件成绩和软件条件的平衡，丰富自身的背景，准备好相关的成绩和材料。</p>
									<a href="javascript:;" onclick="go()">了解申请条件&gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="anniu">
							<a href="javascript:;" onclick="go()" class="aaa">点击申请美国统计学专业</a>
							<a href="javascript:;" onclick="go()" class="a1">查看更多商科热门专业</a>
						</div>
					</div>
					<div class="zy_box clearfix">
						<div class="box">
							<div class="fl">
								<div class="img">
									<img src="/static/home/img/page/benke_zhuanye/shangke5.jpg" alt="">
									<div class="hi1"><h2>市场营销学专业介绍</h2></div>
									<div class="hi2"><div><h3>市场营销学专业介绍</h3><p>美国市场营销协会把市场营销定义为：是创造、沟通与传送价值给顾客，即经营顾客关系以便让组织与其利益关系人受益的一种组织功能与程序。市场营销学作为独立的学科，它是市场营销原理和市场营销管理的结合。</p></div></div>
								</div>
								<h3><em></em>学校推荐</h3>
								<p>西北大学、宾夕法尼亚大学、杜克大学、哈佛大学、密歇根大学、斯坦福大学、哥伦比亚大学</p>
								<a href="javascript:;" onclick="go()">更多学校推荐&gt;&gt;</a>
							</div>
							<div class="fr">
								<div class="fr_box clearfix">
									<h3><em></em>就业方向</h3>
									<p>主要方向有广告公司，就是去做广告策划，主要是传播方面的，要对品牌和传播要有不错的理解，有创意能力。也可以去营销公司，这类公司偏重销售和渠道管理，多以“帮助企业建立一个区域的销售渠道并打开市场，或推动一个区域市场销量增长”为主要运营内容。</p>
									<a href="javascript:;" onclick="go()">了解更多就业去向&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业岗位</h3>
									<p>市场经理，销售经理，采购员，客服代表，市场调研员</p>
									<a href="javascript:;" onclick="go()">更多就业岗位信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业薪资</h3>
									<p>行业平均薪资（美国）$ 84550</p>
									<a href="javascript:;" onclick="go()">更多就业薪资信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>背景要求</h3>
									<p>美国的统计专业的院校申请比较看重学生的推荐信、研究经历、实习经历。学生在准备的过程中需要做好自己的硬件成绩和软件条件的平衡，丰富自身的背景，准备好相关的成绩和材料。</p>
									<a href="javascript:;" onclick="go()">了解申请条件&gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="anniu">
							<a href="javascript:;" onclick="go()" class="aaa">点击申请美国市场营销学专业</a>
							<a href="javascript:;" onclick="go()" class="a1">查看更多商科热门专业</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 2019 US.NEWS美国工科热门专业 -->
		<div class="gongke zhuanye_paiming zy_index">
			<div class="gWidth1170">
				<h3 class="title">2019 US.NEWS美国工科热门专业</h3>
				<!-- content -->
				<div class="content">
					<div class="zy_title">
						<a href="javascript:;" class="active">计算机科学</a><span>|</span>
						<a href="javascript:;">电气工程</a><span>|</span>
						<a href="javascript:;">机械工程</a><span>|</span>
						<a href="javascript:;">土木工程</a><span>|</span>
						<a href="javascript:;">化学工程</a>
					</div>
					<div class="zy_box clearfix">
						<div class="box">
							<div class="fl">
								<div class="img">
									<img src="/static/home/img/page/benke_zhuanye/gongke1.jpg" alt="">
									<div class="hi1"><h2>计算机科学专业介绍</h2></div>
									<div class="hi2"><div><h3>计算机科学专业介绍</h3><p>计算机系统工程是学习计算机系统的软件和硬件相结合的学科。学习内容有软件工程、系统软件、数据通讯、计算机组织与结构(硬件为主)、系统设计、语言处理、数学等。此专业虽然也学工业制造、工艺学、生产管理和质量控制等,不过主要还是以软件为主。</p></div></div>
								</div>
								<h3><em></em>学校推荐</h3>
								<p>麻省理工学院、卡耐基梅隆大学、加州大学伯克利分校、伊利诺伊大学厄本那-香槟分校、佐治亚理工学院、密歇根大学安娜堡分校、康奈尔大学</p>
								<a href="javascript:;" onclick="go()">更多学校推荐&gt;&gt;</a>
							</div>
							<div class="fr">
								<div class="fr_box clearfix">
									<h3><em></em>就业方向</h3>
									<p>市场需求量较大。80%的学生毕业后在公司工作，一半左右的毕业生成为计算机工程师、IT业的程序师、网络管理员，其余为计算机系统分析师、程序师或电子工程师等。</p>
									<a href="javascript:;" onclick="go()">了解更多就业去向&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业岗位</h3>
									<p>软件工程师，技术咨询，测试工程师，项目经理</p>
									<a href="javascript:;" onclick="go()">更多就业岗位信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业薪资</h3>
									<p>行业平均薪资（美国）$ 89560</p>
									<a href="javascript:;" onclick="go()">更多就业薪资信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>背景要求</h3>
									<p>软件部分需要有论文、研究经历和实习经历，建议学生在以上三方面做重点的准备，同时推荐信也很重要。学生在准备的过程中需要做好自己的硬件成绩和软件成绩的平衡，丰富自身的背景，准备好相关的成绩和材料。</p>
									<a href="javascript:;" onclick="go()">了解申请条件&gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="anniu">
							<a href="javascript:;" onclick="go()" class="aaa">点击申请美国计算机科学专业</a>
							<a href="javascript:;" onclick="go()" class="a1">查看更多商科热门专业</a>
						</div>
					</div>
					<div class="zy_box clearfix">
						<div class="box">
							<div class="fl">
								<div class="img">
									<img src="/static/home/img/page/benke_zhuanye/gongcheng2.jpg" alt="">
									<div class="hi1"><h2>电气工程专业介绍</h2></div>
									<div class="hi2"><div><h3>电气工程专业介绍</h3><p>电气工程/电子工程(Electrical Engineering,简称EE)是现代科技领域中的核心学科之一，更是当今高新技术领域中不可或缺的关键学科。斯坦福大学教授指出：今天的电气工程涵盖了几乎所有与电子、光子有关的工程行为。</p></div></div>
								</div>
								<h3><em></em>学校推荐</h3>
								<p>麻省理工学院、斯坦福大学、加州大学伯克利分校、伊利诺伊大学厄本那-香槟分校、加州理工学院、佐治亚理工学院、密歇根大学安娜堡分校、卡耐基梅隆大学、普林斯顿大学</p>
								<a href="javascript:;" onclick="go()">更多学校推荐&gt;&gt;</a>
							</div>
							<div class="fr">
								<div class="fr_box clearfix">
									<h3><em></em>就业方向</h3>
									<p>市场需求量巨大，是工程类专业中需求量排名第2位的专业。70%以上的学生毕业后在公司工作，其中的60%左右的学生从事电机电子和计算机工程师的专业工作，其他的从事管理、市场与销售、计算机编程等工作。</p>
									<a href="javascript:;" onclick="go()">了解更多就业去向&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业岗位</h3>
									<p>工程师，市场，咨询，销售，教育，培训</p>
									<a href="javascript:;" onclick="go()">更多就业岗位信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业薪资</h3>
									<p>行业平均薪资（美国）$ 82160</p>
									<a href="javascript:;" onclick="go()">更多就业薪资信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>背景要求</h3>
									<p>国内著名院校及国内 211、985,同时有相关的研究和 实习经历</p>
									<a href="javascript:;" onclick="go()">了解申请条件&gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="anniu">
							<a href="javascript:;" onclick="go()" class="aaa">点击申请美国电气工程专业</a>
							<a href="javascript:;" onclick="go()" class="a1">查看更多商科热门专业</a>
						</div>
					</div>
					<div class="zy_box clearfix">
						<div class="box">
							<div class="fl">
								<div class="img">
									<img src="/static/home/img/page/benke_zhuanye/gongcheng3.jpg" alt="">
									<div class="hi1"><h2>机械工程专业介绍</h2></div>
									<div class="hi2"><div><h3>机械工程专业介绍</h3><p>机械工程是一门涉及利用物理定律为机械系统作分析、设计、生产及维修的工程学科。这学科要求学员对应用力学、热学、物质与能量守恒等基础科学原理有巩固的认识，并利用这些知识去分析静态和动态物质系统，创造、设计实用的装置、设备、器材、器件、工具等。</p></div></div>
								</div>
								<h3><em></em>学校推荐</h3>
								<p>麻省理工学院、斯坦福大学、加州理工学院、加州大学伯克利分校、佐治亚理工学院、密歇根大学安娜堡分校、伊利诺伊大学厄本那-香槟分校、卡耐基梅隆大学、普林斯顿大学</p>
								<a href="javascript:;" onclick="go()">更多学校推荐&gt;&gt;</a>
							</div>
							<div class="fr">
								<div class="fr_box clearfix">
									<h3><em></em>就业方向</h3>
									<p>就业市场巨大。约80%的学生毕业后进入工业界工作，比如宝马，福特，GM，卡特匹勒，长春一汽等名企。</p>
									<a href="javascript:;" onclick="go()">了解更多就业去向&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业岗位</h3>
									<p>工程师，市场，咨询，销售，教育，培训</p>
									<a href="javascript:;" onclick="go()">更多就业岗位信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业薪资</h3>
									<p>行业平均薪资（美国）$ 82160</p>
									<a href="javascript:;" onclick="go()">更多就业薪资信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>背景要求</h3>
									<p>美国的院校比较看重学生的推荐信、研究经历、实习经历。学生在准备的过程中需要做好自己的硬件成绩和软件成绩的平衡，丰富自身的背景，准备好相关的成绩和材料。</p>
									<a href="javascript:;" onclick="go()">了解申请条件&gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="anniu">
							<a href="javascript:;" onclick="go()" class="aaa">点击申请美国机械工程专业</a>
							<a href="javascript:;" onclick="go()" class="a1">查看更多商科热门专业</a>
						</div>
					</div>
					<div class="zy_box clearfix">
						<div class="box">
							<div class="fl">
								<div class="img">
									<img src="/static/home/img/page/benke_zhuanye/gongcheng4.jpg" alt="">
									<div class="hi1"><h2>土木工程专业介绍</h2></div>
									<div class="hi2"><div><h3>土木工程专业介绍</h3><p>土木工程是建造各类工程设施的科学技术的统称。它既指所应用的材料、设备和所进行的勘测、设计、施工、保养维修等技术活动；也指工程建设的对象。</p></div></div>
								</div>
								<h3><em></em>学校推荐</h3>
								<p>加州大学伯克利分校、伊利诺伊大学厄本那-香槟分校、斯坦福大学、德克萨斯大学奥斯汀分校、佐治亚理工学院、普渡大学西法拉叶分校、密歇根大学安娜堡分校、麻省理工学院</p>
								<a href="javascript:;" onclick="go()">更多学校推荐&gt;&gt;</a>
							</div>
							<div class="fr">
								<div class="fr_box clearfix">
									<h3><em></em>就业方向</h3>
									<p>就业市场巨大。Aecom公司，URS公司，万达集团，中国恒大，中国建筑等都是专业匹配的企业。</p>
									<a href="javascript:;" onclick="go()">了解更多就业去向&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业岗位</h3>
									<p>技术人员，土木工程师，建筑管理人员</p>
									<a href="javascript:;" onclick="go()">更多就业岗位信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业薪资</h3>
									<p>行业平均薪资（美国）$ 82200</p>
									<a href="javascript:;" onclick="go()">更多就业薪资信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>背景要求</h3>
									<p>软件部分需要有研究经历和实习经历，建议学生在以上三方面做重点的准备，同时推荐信也很重要。学生在准备的过程中需要做好自己的硬件成绩和软件成绩的平衡，丰富自身的背景，准备好相关的成绩和材料。</p>
									<a href="javascript:;" onclick="go()">了解申请条件&gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="anniu">
							<a href="javascript:;" onclick="go()" class="aaa">点击申请美国土木工程专业</a>
							<a href="javascript:;" onclick="go()" class="a1">查看更多商科热门专业</a>
						</div>
					</div>
					<div class="zy_box clearfix">
						<div class="box">
							<div class="fl">
								<div class="img">
									<img src="/static/home/img/page/benke_zhuanye/gongcheng5.jpg" alt="">
									<div class="hi1"><h2>化学工程专业介绍</h2></div>
									<div class="hi2"><div><h3>化学工程专业介绍</h3><p>化学工程(Chemical Engineering)是现代科学技术中发展十分迅速、应用十分广泛的学科之一，对国民经济可持续发展，特别是对材料、生物、能源、环境和资源等新领域的发展具有极其重要的支撑作用。</p></div></div>
								</div>
								<h3><em></em>学校推荐</h3>
								<p>麻省理工学院、加州大学伯克利分校、加州理工学院、斯坦福大学、明尼苏达大学双城分校、德克萨斯大学奥斯汀分校、威斯康星大学麦迪逊分校、普林斯顿大学</p>
								<a href="javascript:;" onclick="go()">更多学校推荐&gt;&gt;</a>
							</div>
							<div class="fr">
								<div class="fr_box clearfix">
									<h3><em></em>就业方向</h3>
									<p>市场需求很大，化工在全美工程类专业中需求量排第3位，也是工程类专业中收入很高的专业。</p>
									<a href="javascript:;" onclick="go()">了解更多就业去向&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业岗位</h3>
									<p>工程师，市场，咨询，销售，教育，培训</p>
									<a href="javascript:;" onclick="go()">更多就业岗位信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业薪资</h3>
									<p>行业平均薪资（美国）$ 84680</p>
									<a href="javascript:;" onclick="go()">更多就业薪资信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>背景要求</h3>
									<p>美国的院校比较看重学生的推荐信、研究经历、实习经历。学生在准备的过程中需要做好自己的硬件成绩和软件成绩的平衡，丰富自身的背景，准备好相关的成绩和材料。</p>
									<a href="javascript:;" onclick="go()">了解申请条件&gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="anniu">
							<a href="javascript:;" onclick="go()" class="aaa">点击申请美国化学工程专业</a>
							<a href="javascript:;" onclick="go()" class="a1">查看更多商科热门专业</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 2019 US.News美国文科艺术专业 -->
		<div class="wenke zhuanye_paiming zy_index">
			<div class="gWidth1170">
				<h3 class="title">2019 US.News美国文科艺术专业</h3>
				<!-- content -->
				<div class="content">
					<div class="zy_title">
						<a href="javascript:;" class="active">新闻学</a><span>|</span>
						<a href="javascript:;">传播学</a><span>|</span>
						<a href="javascript:;">教育学</a><span>|</span>
						<a href="javascript:;">动画设计</a>
					</div>
					<div class="zy_box clearfix">
						<div class="box">
							<div class="fl">
								<div class="img">
									<img src="/static/home/img/page/benke_zhuanye/wenke1.jpg" alt="">
									<div class="hi1"><h2>新闻学专业介绍</h2></div>
									<div class="hi2"><div><h3>新闻学专业介绍</h3><p>新闻学专业是集中研究新闻资讯的收集、处理和传递理论与实践的专业，培养目标是使学生成为职业的新闻工作者、新闻编辑和新闻管理者。学习的内容包括新闻编辑、文稿写作、报道、新闻摄影、版面设计、图形设计、新闻史、新闻法规和政策、行业标准与道德、研究方法等。</p></div></div>
								</div>
								<h3><em></em>学校推荐</h3>
								<p>麻省理工学院、卡耐基梅隆大学、加州大学伯克利分校、伊利诺伊大学厄本那-香槟分校、佐治亚理工学院、密歇根大学安娜堡分校、康奈尔大学</p>
								<a href="javascript:;" onclick="go()">更多学校推荐&gt;&gt;</a>
							</div>
							<div class="fr">
								<div class="fr_box clearfix">
									<h3><em></em>就业方向</h3>
									<p>市场需求总体较好，但大多数毕业生不是在媒体工作，主要在政府、政治团体工作，也从事销售、司法、管理、广播电视的工作。</p>
									<a href="javascript:;" onclick="go()">了解更多就业去向&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业岗位</h3>
									<p>记者，编辑，新闻主持人</p>
									<a href="javascript:;" onclick="go()">更多就业岗位信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业薪资</h3>
									<p>行业平均薪资（美国）$ 76370</p>
									<a href="javascript:;" onclick="go()">更多就业薪资信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>背景要求</h3>
									<p>需要优秀的推荐信、发稿经历、实习经历。需要做好自己的硬件成绩和软件成绩的平衡，丰富自身的背景。</p>
									<a href="javascript:;" onclick="go()">了解申请条件&gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="anniu">
							<a href="javascript:;" onclick="go()" class="aaa">点击申请美国新闻学专业</a>
							<a href="javascript:;" onclick="go()" class="a1">查看更多商科热门专业</a>
						</div>
					</div>
					<div class="zy_box clearfix">
						<div class="box">
							<div class="fl">
								<div class="img">
									<img src="/static/home/img/page/benke_zhuanye/wenke2.jpg" alt="">
									<div class="hi1"><h2>传播学专业介绍</h2></div>
									<div class="hi2"><div><h3>传播学专业介绍</h3><p>传播专业是集中研究传播过程中各类不同方面的综合性学科，涵盖了大众传播/媒体研究、新媒体技术、政治传播、组织传播以及传播修辞等。</p></div></div>
								</div>
								<h3><em></em>学校推荐</h3>
								<p>麻省理工学院、卡耐基梅隆大学、加州大学伯克利分校、伊利诺伊大学厄本那-香槟分校、佐治亚理工学院、密歇根大学安娜堡分校、康奈尔大学</p>
								<a href="javascript:;" onclick="go()">更多学校推荐&gt;&gt;</a>
							</div>
							<div class="fr">
								<div class="fr_box clearfix">
									<h3><em></em>就业方向</h3>
									<p>市场需求总体较好，但大多数毕业生不是在媒体工作，主要在政府、政治团体工作，也从事销售、司法、管理、广播电视的工作。</p>
									<a href="javascript:;" onclick="go()">了解更多就业去向&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业岗位</h3>
									<p>记者，编辑，新闻主持人</p>
									<a href="javascript:;" onclick="go()">更多就业岗位信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业薪资</h3>
									<p>行业平均薪资（美国）$ 51440</p>
									<a href="javascript:;" onclick="go()">更多就业薪资信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>背景要求</h3>
									<p>优秀的推荐信、研究经历、实习经历。学生需要做好自己的硬件成绩和软件成绩的平衡，丰富自身的背景。</p>
									<a href="javascript:;" onclick="go()">了解申请条件&gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="anniu">
							<a href="javascript:;" onclick="go()" class="aaa">点击申请美国传播学专业</a>
							<a href="javascript:;" onclick="go()" class="a1">查看更多商科热门专业</a>
						</div>
					</div>
					<div class="zy_box clearfix">
						<div class="box">
							<div class="fl">
								<div class="img">
									<img src="/static/home/img/page/benke_zhuanye/wenke3.jpg" alt="">
									<div class="hi1"><h2>教育学专业介绍</h2></div>
									<div class="hi2"><div><h3>教育学专业介绍</h3><p>美国教育学是一个概括性概念，在研究生院的开设中，硕士的研究方向有很多，除了深受留学生欢迎的以英语作为第二外语的教学，还有儿童教育、高等教育、成人教育、心理咨询，教育社会学、教育历史学、教育心理学以及教育管理等。</p></div></div>
								</div>
								<h3><em></em>学校推荐</h3>
								<p>斯坦福大学、哈佛大学、约翰霍普金斯大学、威斯康星大学麦迪逊分校、范德堡大学、宾夕法尼亚大学、纽约大学</p>
								<a href="javascript:;" onclick="go()">更多学校推荐&gt;&gt;</a>
							</div>
							<div class="fr">
								<div class="fr_box clearfix">
									<h3><em></em>就业方向</h3>
									<p>就业市场需求一般。近一半学生毕业后到商务公司工作，职业分布较分散，有公司管理人员、中小学教师、公关、销售人员，秘书、作家、编辑、会计，等等。</p>
									<a href="javascript:;" onclick="go()">了解更多就业去向&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业岗位</h3>
									<p>市场，咨询，销售，教育，培训</p>
									<a href="javascript:;" onclick="go()">更多就业岗位信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业薪资</h3>
									<p>行业平均薪资（美国）$ 60610</p>
									<a href="javascript:;" onclick="go()">更多就业薪资信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>背景要求</h3>
									<p>美国的院校比较看重学生的推荐信、研究经历、实习经历。学生在准备的过程中需要做好自己的硬件成绩和软件成绩的平衡，丰富自身的背景。</p>
									<a href="javascript:;" onclick="go()">了解申请条件&gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="anniu">
							<a href="javascript:;" onclick="go()" class="aaa">点击申请美国教育学专业</a>
							<a href="javascript:;" onclick="go()" class="a1">查看更多商科热门专业</a>
						</div>
					</div>
					<div class="zy_box clearfix">
						<div class="box">
							<div class="fl">
								<div class="img">
									<img src="/static/home/img/page/benke_zhuanye/wenke4.jpg" alt="">
									<div class="hi1"><h2>动画设计专业介绍</h2></div>
									<div class="hi2"><div><h3>动画设计专业介绍</h3><p>动画一般以各种绘画形式作为人物造型和环境空间造型的主要表现手段,用逐格拍摄或逐帧录制的方法把绘制的画面逐一记录。三维动画是随着计算机软硬件技术的发展而产生的一新兴技术,它在计算机中建立一个虚拟的世界。</p></div></div>
								</div>
								<h3><em></em>学校推荐</h3>
								<p>加州大学洛杉矶分校、南加州大学、芝加哥艺术学院、加州艺术学院、罗彻斯特理工学院</p>
								<a href="javascript:;" onclick="go()">更多学校推荐&gt;&gt;</a>
							</div>
							<div class="fr">
								<div class="fr_box clearfix">
									<h3><em></em>就业方向</h3>
									<p>市场需求总体较好，部分优秀学生可进入2-世纪福克，迪士尼，华纳动画，皮克斯，索尼动画等知名企业。</p>
									<a href="javascript:;" onclick="go()">了解更多就业去向&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业岗位</h3>
									<p>动画设计，制作人员</p>
									<a href="javascript:;" onclick="go()">更多就业岗位信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>就业薪资</h3>
									<p>行业平均薪资（美国）$ 72400</p>
									<a href="javascript:;" onclick="go()">更多就业薪资信息&gt;&gt;</a>
								</div>
								<div class="fr_box clearfix">
									<h3><em></em>背景要求</h3>
									<p>美国的院校比较看重学生的作品。学生在准备的过程中需要做好自己的硬件成绩和作品平衡，丰富自身的背景。</p>
									<a href="javascript:;" onclick="go()">了解申请条件&gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="anniu">
							<a href="javascript:;" onclick="go()" class="aaa">点击申请美国动画设计专业</a>
							<a href="javascript:;" onclick="go()" class="a1">查看更多商科热门专业</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 彬彬导师教你如何选专业 -->
		<div class="xuanzy zy_index">
			<div class="gWidth1170">
				<h3 class="title">彬彬导师教你如何选专业</h3>
				<div class="content clearfix">
					<div class="box fl">
						<h3>花时间了解</h3>
						<div class="hi">
							<div>
								<p>对申请人来说，选择应该最适合自己的课程及专业，而不是盲目选择所谓的“最好的专业”或“最好的学校”。所以要多了解各个学院的课程，有时候本不感兴趣的专业，通过对它的了解可能会有新的看法。</p>
								<a href="javascript:;" onclick="go()">心仪专业咨询&gt;&gt;</a>
							</div>
						</div>
					</div>
					<div class="box box2 fl">
						<h3>咨询“过来人”</h3>
						<div class="hi">
							<div>
								<p>最便捷的一种方式就是咨询教授或者目标学校的高年级学生，一般教授都会给一些专业的经验和建议。同样学长会也会给出一些对各专业的了解，对于学校的专业他们是最有发言权的。</p>
								<a href="javascript:;" onclick="go()">咨询彬彬同专业导师&gt;&gt;</a>
							</div>
						</div>
					</div>
					<div class="box box3 fl">
						<h3>根据兴趣选择</h3>
						<div class="hi">
							<div>
								<p>兴趣是选择专业的首要参考点，俗话说兴趣是学习的最大动力。因此，只有结合自己专业特长和兴趣爱好，选择较易发挥自身优势和较有把握攻克的专业，才能在大学四年中学的比较轻松，以优异成绩毕业的几率也会更大。</p>
								<a href="javascript:;" onclick="go()">心仪专业申请详情&gt;&gt;</a>
							</div>
						</div>
					</div>
					<div class="box box4 fl">
						<h3>双专业</h3>
						<div class="hi">
							<div>
								<p>如果一个专业方向不能满足学术兴趣和才能发展，可以考虑双专业，选择两个类似的专业或者两个完全不同的专业，一般辅修专业要求的课程学分比主修专业少。双专业可以让学生了解和掌握两套不同的价值观、知识和词汇。</p>
								<a href="javascript:;" onclick="go()">心仪专业申请详情&gt;&gt;</a>
							</div>
						</div>
					</div>
				</div>
				<a href="javascript:;" onclick="go()">马上申请美国本科</a>
			</div>
		</div>
			
		<!-- 热门专业申请成功案例 -->
		<div class="chengAnli gWidth1170 zy_index">
			<h3 class="title">热门专业申请成功案例</h3>
			<div class="content clearfix">
				<div class="box fl">
					<div class="img"><img src="/static/home/img/page/benke_zhuanye/anl1.jpg" alt=""></div>
					<h3>合理规划 缴获美国大学4枚offer</h3>
					<p>姓名：M同学</p>
					<p>录取院校：波士顿学院</p>
					<p>录取专业：经济学</p>
					<p>考试成绩：GPA 3.6   托福103   新SAT1460</p>
					<a href="/studentstory/162.html" target="_blank">查看详情&gt;&gt;</a>
				</div>
				<div class="box fl">
					<div class="img"><img src="/static/home/img/page/benke_zhuanye/anl2.jpg" alt=""></div>
					<h3>成功收获卡耐基梅隆大学offer</h3>
					<p>姓名：S同学</p>
					<p>录取院校：卡耐基梅隆大学</p>
					<p>录取专业：电气与计算机工程</p>
					<p>考试成绩：GPA 4.0  新SAT1530</p>
					<a href="/studentstory/163.html" target="_blank">查看详情&gt;&gt;</a>
				</div>
				<div class="box fl">
					<div class="img"><img src="/static/home/img/page/benke_zhuanye/anl3.jpg" alt=""></div>
					<h3>千锤百炼 喜获加州艺术学院的录取</h3>
					<p>姓名：L同学</p>
					<p>录取院校：加州艺术学院</p>
					<p>录取专业：室内设计</p>
					<p>考试成绩：GPA 3.5  托福90</p>
					<a href="/studentstory/716.html" target="_blank">查看详情&gt;&gt;</a>
				</div>
				<div class="box fl">
					<div class="img"><img src="/static/home/img/page/benke_zhuanye/anl4.jpg" alt=""></div>
					<h3>TOP5被拒 如今爬藤上达特茅斯学院的？</h3>
					<p>姓名：W同学</p>
					<p>录取院校：达特茅斯学院</p>
					<p>录取专业：经济学</p>
					<p>考试成绩：托福101 SAT1430</p>
					<a href="/studentstory/715.html" target="_blank">查看详情&gt;&gt;</a>
				</div>
			</div>
		</div>
		
		<!-- 提升软性背景助力热门专业申请 -->
		<div class="bjts zy_index">
			<div class="gWidth1170">
				<h3 class="title">提升软性背景助力热门专业申请</h3>
				<div class="content">
					<!-- <div class="bjtsTitle">
						<a href="javascript:;" class="active">理科方向</a><span>|</span>
						<a href="javascript:;">商科方向</a><span>|</span>
						<a href="javascript:;">其他方向</a>
					</div> -->
					<div class="bjtsCon clearfix">
						<div class="fl">
							<img src="/static/home/img/page/benke_zhuanye/li1.jpg" alt="">
							<div class="h1"><h3>美国高中生物理摄影大赛</h3></div>
							<div class="h2">
								<div>
									<h3>美国高中生物理摄影大赛</h3>
									<p>科研时间：报名时间：10月1日 - 1月20日</p>
									<p>公示结果时间：7月</p>
									<a href="/xsjs/330.html" target="_blank">查看详情</a>
								</div>
							</div>
						</div>
						<div class="fr">
							<div class="box fl">
								<img src="/static/home/img/page/benke_zhuanye/shang3.jpg" alt="">
								<div class="h1"><h3>麻省理工学院经济学科研项目</h3></div>
								<div class="h2">
									<div>
										<h3>麻省理工学院经济学科研项目</h3>
										<p>科研时间：寒假，暑假，每期时间长度为3-4周；具体情况根据学生面试情况由美方进行调整</p>
										<a href="/mxky/217.html" target="_blank">查看详情</a>
									</div>
								</div>
							</div>
							<div class="box fl">·
								<img src="/static/home/img/page/benke_zhuanye/li3.jpg" alt="">
								<div class="h1"><h3>USAD学术竞赛</h3></div>
								<div class="h2">
									<div>
										<h3>USAD学术竞赛</h3>
										<p>科研时间：每年九月至十一月</p>
										<a href="/xsjs/326.html" target="_blank">查看详情</a>
									</div>
								</div>
							</div>
							<div class="box fl">
								<img src="/static/home/img/page/benke_zhuanye/li4.jpg" alt="">
								<div class="h1"><h3>哥伦比亚大学化学高分子科研</h3></div>
								<div class="h2">
									<div>
										<h3>哥伦比亚大学化学高分子科研</h3>
										<p>科研时间：寒假，暑假，每期时间长度为 3-4 周；具体情况根据学生面试情况由美方进行调整</p>
										<a href="/mxky/137.html" target="_blank">查看详情</a>
									</div>
								</div>
							</div>
							<div class="box fl">
								<img src="/static/home/img/page/benke_zhuanye/qi1.jpg" alt="">
								<div class="h1"><h3>宾夕法尼亚大学传媒/新闻科研</h3></div>
								<div class="h2">
									<div>
										<h3>宾夕法尼亚大学传媒/新闻科研</h3>
										<p>科研时间：寒、暑假，每期时间长度为3-4周，具体情况根据学生面试情况由美方进行调整</p>
										<a href="/mxky/232.html" target="_blank">查看详情</a>
									</div>
								</div>
							</div>
						</div>
					</div>
<!-- 					<div class="bjtsCon clearfix">
						<div class="fl">
							<img src="/static/home/img/page/benke_zhuanye/shang1.jpg" alt="">
							<div class="h1"><h3>哈佛大学 金融学科研</h3></div>
							<div class="h2">
								<div>
									<h3>哈佛大学 金融学科研</h3>
									<p>科研时间：寒假、暑假，时间长度为3-4周，具体情况根据学生面试情况由美方进行调整</p>
									<a href="/mxky/257.html" target="_blank">查看详情</a>
								</div>
							</div>
						</div>
						<div class="fr">
							<div class="box fl">
								<img src="/static/home/img/page/benke_zhuanye/shang2.jpg" alt="">
								<div class="h1"><h3>哈佛大学经济学科研</h3></div>
								<div class="h2">
									<div>
										<h3>哈佛大学经济学科研</h3>
										<p>科研时间：寒假，暑假，每期时间长度为3—4周；具体情况根据学生面试情况由美方进行调整</p>
										<a href="/mxky/244.html" target="_blank">查看详情</a>
									</div>
								</div>
							</div>
							<div class="box fl">
								<img src="/static/home/img/page/benke_zhuanye/shang3.jpg" alt="">
								<div class="h1"><h3>麻省理工学院经济学科研项目</h3></div>
								<div class="h2">
									<div>
										<h3>麻省理工学院经济学科研项目</h3>
										<p>科研时间：寒假，暑假，每期时间长度为3-4周；具体情况根据学生面试情况由美方进行调整</p>
										<a href="/mxky/217.html" target="_blank">查看详情</a>
									</div>
								</div>
							</div>
							<div class="box fl">
								<img src="/static/home/img/page/benke_zhuanye/shang4.jpg" alt="">
								<div class="h1"><h3>麻省理工学院金融科研项目</h3></div>
								<div class="h2">
									<div>
										<h3>麻省理工学院金融科研项目</h3>
										<p>科研时间：寒假，暑假，每期时间长度为3-4周左右；具体情况根据学生面试情况由美方进行调整</p>
										<a href="/mxky/214.html" target="_blank">查看详情</a>
									</div>
								</div>
							</div>
							<div class="box fl">
								<img src="/static/home/img/page/benke_zhuanye/shang5.jpg" alt="">
								<div class="h1"><h3>德勤公司实习</h3></div>
								<div class="h2">
									<div>
										<h3>德勤公司实习</h3>
										<p>科研时间：全年接受报名，实习时间1个月</p>
										<a href="/mqsx/265.html" target="_blank">查看详情</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="bjtsCon clearfix">
						<div class="fl">
							<img src="/static/home/img/page/benke_zhuanye/qi1.jpg" alt="">
							<div class="h1"><h3>宾夕法尼亚大学传媒/新闻科研</h3></div>
							<div class="h2">
								<div>
									<h3>宾夕法尼亚大学传媒/新闻科研</h3>
									<p>科研时间：寒、暑假，每期时间长度为3-4周，具体情况根据学生面试情况由美方进行调整</p>
									<a href="/mxky/232.html" target="_blank">查看详情</a>
								</div>
							</div>
						</div>
						<div class="fr">
							<div class="box fl">
								<img src="/static/home/img/page/benke_zhuanye/qi2.jpg" alt="">
								<div class="h1"><h3>MIT地球资源与环境科学科研项目</h3></div>
								<div class="h2">
									<div>
										<h3>MIT地球资源与环境科学科研项目</h3>
										<p>科研时间：寒暑假，每期时间长度为3—4周；具体情况根据学生面试情况由美方进行调整</p>
										<a href="/mxky/205.html" target="_blank">查看详情</a>
									</div>
								</div>
							</div>
							<div class="box fl">
								<img src="/static/home/img/page/benke_zhuanye/qi3.jpg" alt="">
								<div class="h1"><h3>杜克大学数学竞赛</h3></div>
								<div class="h2">
									<div>
										<h3>杜克大学数学竞赛</h3>
										<p>科研时间：10月、11月</p>
										<a href="/xsjs/329.html" target="_blank">查看详情</a>
									</div>
								</div>
							</div>
							<div class="box fl">
								<img src="/static/home/img/page/benke_zhuanye/qi4.jpg" alt="">
								<div class="h1"><h3>麦肯·光明实习</h3></div>
								<div class="h2">
									<div>
										<h3>麦肯·光明实习</h3>
										<p>科研时间：全年接受报名，实习时间3个月</p>
										<a href="/mqsx/309.html" target="_blank">查看详情</a>
									</div>
								</div>
							</div>
							<div class="box fl">
								<img src="/static/home/img/page/benke_zhuanye/qi5.jpg" alt="">
								<div class="h1"><h3>蓝色光标传播集团实习</h3></div>
								<div class="h2">
									<div>
										<h3>蓝色光标传播集团实习</h3>
										<p>科研时间：全年接受报名，北京/上海实习时间3个月，实习时间1个月 </p>
										<a href="/mqsx/294.html" target="_blank">查看详情</a>
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</div>
				<div class="anniu">
					<a href="javascript:;" onclick="go()">马上匹配适合自己的项目</a>
					<a href="/project/0-0-1.html" target="_blank" class="a1">点击查看更多背景提升项目</a>
				</div>
			</div>
		</div>
		
		<!-- 强大的国内外导师团队 -->
		<div class="daoshi_team zy_index">
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
		<div id="mydiv" class="zy_index" style="height: 701px;">
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
			// 
			var nav = $('.bannerNav').offset().top;
			$gkLength = $('.zy_index').length;
			window.onscroll = function () {
				var top = document.documentElement.scrollTop || document.body.scrollTop;
				if(top>=nav){
					$('.bannerNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999'});
					$('.navHidden').css({'display': 'block'});
				}else if(top<=$('.zy_index').eq(0).offset().top){
					$('.bannerNav').css({'position': 'static', 'top':''});
					$('.navHidden').css({'display': 'none'});
				}
				for( var i=0; i<$gkLength; i++ ){
					if( i == $gkLength - 1 ){
						if( top>=$('.zy_index').eq(i).offset().top ){
							$('.bannerNav span').removeClass('active');
							$('.bannerNav span').eq(i).addClass('active');
						}
						return;
					}
					if( top>=$('.zy_index').eq(i).offset().top && top<$('.zy_index').eq(i+1).offset().top ){
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
				var offsetTop = $('.zy_index').eq(index).offset().top;
				$('body, html').stop().animate({scrollTop: offsetTop + 0}, 1500);
			})
			$('.bannerNav span:last-child').css({'margin-right': '0'});
			// 
			$('.zhuanye_paiming .content .zy_box').eq(0).css({'display': 'block'});
			$('.zhuanye_paiming .content .zy_box').eq(5).css({'display': 'block'});
			$('.zhuanye_paiming .content .zy_box').eq(10).css({'display': 'block'});
			$('.zhuanye_paiming .content .zy_title a').on('click', function () {
				var index = $('.zhuanye_paiming .content .zy_title a').index($(this));
				$(this).addClass('active').siblings('a').removeClass('active');
				$('.zhuanye_paiming .content .zy_box').eq(index).stop().fadeIn().siblings('.zy_box').css({'display': 'none'});
			})
			$('.zhuanye_paiming .content .zy_box>div.box>div.fl .img').hover(function () {
				$(this).children('.hi1').stop().fadeOut().siblings('.hi2').stop().fadeIn();
			}, function () {
				$(this).children('.hi2').stop().fadeOut().siblings('.hi1').stop().fadeIn();
			})
			// 
			$('.xuanzy .box').hover(function () {
				$(this).children('h3').stop().fadeOut();
				$(this).children('.hi').stop().fadeIn();
			}, function () {
				$(this).children('.hi').stop().fadeOut();
				$(this).children('h3').stop().fadeIn();				
			})
			// 
			$('.chengAnli .content .box:last-child').css({'margin-right': '0'});
			// 
			$('.bjts .content .bjtsCon').eq(0).css({'display': 'block'});
			$('.bjts .content .bjtsTitle a').on('click', function () {
				var index = $('.bjts .content .bjtsTitle a').index($(this));
				$(this).addClass('active').siblings('a').removeClass('active');
				$('.bjts .content .bjtsCon').eq(index).stop().fadeIn().siblings('.bjtsCon').css({'display': 'none'});
			})
			
			function bjtsHover(father) {
				father.hover(function () {
					$(this).children('.h1').stop().fadeOut();
					$(this).children('.h2').stop().fadeIn();
				}, function () {
					$(this).children('.h2').stop().fadeOut();
					$(this).children('.h1').stop().fadeIn();
				})
			}
			bjtsHover($('.bjts .content .bjtsCon>div.fl'));
			bjtsHover($('.bjts .content .bjtsCon>div.fr .box'));
			$('.bjts .content .bjtsCon>div.fr .box:nth-child(2n)').css({'margin-right': '0'});
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
