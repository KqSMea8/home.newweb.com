<?php /*a:6:{s:75:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\commerce.html";i:1553062603;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1553677718;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1553062603;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1553743361;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1553743361;s:84:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_graduate.html";i:1553062603;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/commerce.css">
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
				<h1>美国研究生商科热门专业申请指南</h1>
				<em>全景解析 助力美国名校梦</em>
				<a href="javascript:;" onclick="go()">马上申请</a>
			</div>
		</div>
		
		<!-- nav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">录取捷报</span>
				<span>商科优势</span>
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

		<!-- 彬彬商科录取捷报 -->
		<div class="jiebao sk_index">
			<div class="gWidth1170">
				<h3 class="title">彬彬商科录取捷报</h3>
				<!-- content -->
				<div class="content">
					<div class="contentTop clearfix">
						<div class="box fl">
							<h4><span id="span1">100</span>%</h4>
							<p>常春藤盟校申请覆盖</p>
						</div>
						<div class="box fl">
							<h4><span id="span2">600</span>+</h4>
							<p>美国Top10名校录取</p>
						</div>
						<div class="box fl">
							<h4><span id="span3">1000</span>+</h4>
							<p>美国Top30名校录取</p>
						</div>
						<div class="box fl">
							<h4><span id="span4">50</span>+</h4>
							<p>全奖博士录取</p>
						</div>
						<div class="box fl">
							<h4><span id="span5">5.4</span>亿</h4>
							<p>奖学金累计（RMB）</p>
						</div>
						<div class="box fl">
							<h4><span id="span6">500</span>+</h4>
							<p>累计推荐世界500强实习</p>
						</div>
					</div>
					<div class="contentBottom clearfix">
						<div class="box fl">
							<h4>麻省理工  金融学录取</h4>
							<ul>
								<li>姓名：J同学</li>
								<li>本科：新加坡南洋理工  数学与经济</li>
								<li>GPA：4.84   TOEFL：114</li>
								<li>GRE: 329</li>
							</ul>
							<a href="javascript:;" onclick="go()">详情&gt;</a>
						</div>
						<div class="box fl">
							<h4>约翰霍普金斯大学  金融学录取</h4>
							<ul>
								<li>姓名：T同学</li>
								<li>本科：南京大学  经济学</li>
								<li>GPA：4.26   IELTS：7.5</li>
								<li>GMAT: 720</li>
							</ul>
							<a href="javascript:;" onclick="go()">详情&gt;</a>
						</div>
						<div class="box fl">
							<h4>圣路易斯华盛顿大学  会计学录取</h4>
							<ul>
								<li>姓名：Z同学</li>
								<li>本科：山东财经大学  会计学</li>
								<li>GPA：3.64   TOEFL：102</li>
								<li>GMAT: 710</li>
							</ul>
							<a href="javascript:;" onclick="go()">详情&gt;</a>
						</div>
						<div class="box fl">
							<h4>约翰霍普金斯大学  金融学录取</h4>
							<ul>
								<li>姓名：Y同学</li>
								<li>本科：俄亥俄州立大学  金融</li>
								<li>GPA：3.10   免托</li>
								<li>GMAT: 710</li>
							</ul>
							<a href="javascript:;" onclick="go()">详情&gt;</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国商科具有绝对优势 读商科就选美国 -->
		<div class="youshi sk_index">
			<div class="gWidth1170">
				<h3 class="title">美国商科具有绝对优势 读商科就选美国</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="contentLeft fl">
						<div class="box box1 active">
							<span>聚集全球<br />顶尖名校</span>
						</div>
						<div class="box box2">
							<span>名企多<br />薪资高</span>
						</div>
						<div class="box box3">
							<span>就业政策<br />利好</span>
						</div>
					</div>
					<div class="contentRight fr">
						<h4>全球顶尖商学院集中于美国</h4>
						<p>《经济学人》 2018全球商学院排名 TOP100 和《金融时报》全球商学院排名数据：</p>
						<div>
							<span>国家</span>
							<span>经济学人</span>
							<span>金融时报</span>
							<span>美国</span>
							<span>53/100</span>
							<span>50/100</span>
							<span>英国</span>
							<span>15/100</span>
							<span>15/100</span>
						</div>
						<em>美国拥有很多世界级顶尖商学院，包括宾夕法尼亚大学沃顿商学院、哈佛商学院、芝加哥大学布斯商学院。</em>
						<i>TOP100高校，有 64 个金融和金融相关硕士，个别学校会授予金融经济学硕士和国际金融硕士。</i>
						<a href="javascript:;" onclick="go()">1V1免费制定申请方案</a>
					</div>
					<div class="contentRight fr">
						<h4>美国商科就业能力强</h4>
						<p>2017年公布Fortune Magazine 500强排行榜中，美国企业有到<b>132</b>家，占<b>26.4%</b> ，具有绝对优势。</p>
						<i>作为高投资的专业，商科留学生毕业后的回报率尤其受到关注。调研数据表明，<b>商科毕业生平均起薪约8.7万美元/年</b>，拥有<b>5年以上工作经历</b>的商科毕业生现在的年收入已经基本实现了薪资翻倍，<b>达到约16.2万美元/年</b>。</i>
						<a href="javascript:;" onclick="go()">1V1免费制定申请方案</a>
					</div>
					<div class="contentRight cr fr">
						<h4>美国就业政策向商科倾斜</h4>
						<div class="clearfix">
							<div class="fl">
								<p>商科学生毕业后可利用12 个月 OPT（实习期）时间留在美国寻找工作和实习机会，<b>部分商科专业的项目可以享受额外 24 个月 OPT 延长的待遇</b>。</p>
								<i>Open Doors数据表明，赴美就读研究生课程的学生数量进一步增加，已经接近40万人。其中需要着重关注的是在美国以OPT（Optional Training）身份实习的学生数量比上一年提升了23%。</i>
							</div>
							<div class="img fr">
								<img src="/static/home/img/page/yanJs_shangke/u1026.jpg" alt="">
								<p>(Open Doors数据)</p>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">1V1免费制定申请方案</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 商科热门专业推荐 -->
		<div class="zhuanyeTuijian sk_index gWidth1170">
			<h3 class="title">商科热门专业推荐</h3>
			<!-- content -->
			<div class="content">
				<div class="contentXx clearfix">
					<div class="Xx fl active"><p>金融</p><span></span></div>
					<div class="Xx fl"><p>会计</p><span></span></div>
					<div class="Xx fl"><p>市场营销</p><span></span></div>
					<div class="Xx fl"><p>人力资源</p><span></span></div>
					<div class="Xx fl"><p>物流管理</p><span></span></div>
					<div class="Xx fl"><p>数据科学</p><span></span></div>
					<div class="Xx fl"><p>管理信息<br />系统</p><span></span></div>
					<div class="Xx fl"><p>MBA</p><span></span></div>
					<div class="Xx fl"><p>商业分析</p><span></span></div>
				</div>
				<div class="xbottom">
					<div class="xbottom_box clearfix">
						<div class="btop clearfix">
							<div class="img fl">
								<img src="/static/home/img/page/yanJs_shangke/jinrong.jpg" alt="金融简介" title="金融简介">
								<div class="hidden1">金融简介</div>
								<div class="hidden">
									<div>
										<h4>金融简介</h4>
										<p>金融硕士名称主要为MSF( Master of finance) or M.Fin.( Master in Finance)。两者都是为未来有志于从事金融分析、投资管理和公司金融战略和管理方面的专业人士开设的职业硕士项目,核心课程更多集中在投资分析、公司金融、金融管理或者财务管理方面。</p>
										<a href="javascript:;" onclick="go()">马上申请</a>
									</div>
								</div>
							</div>
							<div class="fr">
								<div>
									<h5><span></span>背景要求</h5>
									<p>一般院校没有规定专业背景，但申请时有商科类背景录取机会大（文理科也可申，最好有辅修或选修数学和商科类课程）；<br />部分强调数学能力；部分强调数学能力；部分院校有先修课要求。</p>
									<a href="javascript:;" onclick="go()">了解详情&gt;</a>
								</div>
								<div>
									<h5><span></span>就业方向</h5>
									<p>银行，证券公司，信托公司，基金公司，保险经纪公司，管理咨询公司，上市公司财务部门，社保局。</p>
								</div>
								<div>
									<h5><span></span>就业薪资</h5>
									<p>第一年平均年薪：约$70000-80000</p>
								</div>
								<a href="javascript:;" onclick="go()">了解申请难点</a>
							</div>
						</div>
						<div class="bbot clearfix">
							<h3>名校推荐</h3>
							<div class="b clearfix">
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/binxifaniyadaxue.png" alt="宾夕法尼亚大学" title="宾夕法尼亚大学">
									<p>宾夕法尼亚大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/zhijiagedaxue.png" alt="芝加哥大学" title="芝加哥大学">
									<p>芝加哥大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/niuyuedaxue.png" alt="纽约大学" title="纽约大学">
									<p>纽约大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/gelunbiyadaxue.png" alt="哥伦比亚大学" title="哥伦比亚大学">
									<p>哥伦比亚大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/sitanfudaxue.png" alt="斯坦福大学" title="斯坦福大学">
									<p>斯坦福大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/mashengligongdaxue.png" alt="麻省理工学院" title="麻省理工学院">
									<p>麻省理工学院</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">2019美国研究生金融专业最新排名</a>
					</div>
					<div class="xbottom_box clearfix">
						<div class="btop clearfix">
							<div class="img fl">
								<img src="/static/home/img/page/yanJs_shangke/kuaiji.jpg" alt="会计简介" title="会计简介">
								<div class="hidden1">会计简介</div>
								<div class="hidden">
									<div>
										<h4>会计简介</h4>
										<p>会计学是以研究财务活动和成本资料的收集，分类，综合，分析和解释的基础上形成协助决策的信息系统，以有效地管理经济的一门应用学科。会计学的研究对象是资金的运动。</p>
										<a href="javascript:;" onclick="go()">马上申请</a>
									</div>
								</div>
							</div>
							<div class="fr">
								<div>
									<h5><span></span>背景要求</h5>
									<p>最好有财务背景，商科背景或较好的数学能力或数据分析能力，强烈推荐有财务相关工作或实习经验。</p>
									<a href="javascript:;" onclick="go()">了解详情&gt;</a>
								</div>
								<div>
									<h5><span></span>就业方向</h5>
									<p>四大会计师事务所，企业财务，会计师，分析师</p>
								</div>
								<div>
									<h5><span></span>就业薪资</h5>
									<p>平均年薪：约$73670</p>
								</div>
								<a href="javascript:;" onclick="go()">了解申请难点</a>
							</div>
						</div>
						<div class="bbot clearfix">
							<h3>名校推荐</h3>
							<div class="b clearfix">
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/dekesasidaxueaositingfenxiao.png" alt="德克萨斯大学奥斯汀分校" title="德克萨斯大学奥斯汀分校">
									<p>德克萨斯大学奥斯汀分校</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/binxifaniyadaxue.png" alt="宾夕法尼亚大学" title="宾夕法尼亚大学">
									<p>宾夕法尼亚大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/yilinuoyidaxue.png" alt="伊利诺伊大学香槟分校" title="伊利诺伊大学香槟分校">
									<p>伊利诺伊大学香槟分校</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/mixiegendaxue.png" alt="密歇根大学" title="密歇根大学">
									<p>密歇根大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/yangbaihandaxue.png" alt="杨百翰大学" title="杨百翰大学">
									<p>杨百翰大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/sitanfudaxue.png" alt="斯坦福大学" title="斯坦福大学">
									<p>斯坦福大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">2019美国研究生会计专业最新排名</a>
					</div>
					<div class="xbottom_box clearfix">
						<div class="btop clearfix">
							<div class="img fl">
								<img src="/static/home/img/page/yanJs_shangke/shichangyingxiao.jpg" alt="市场营销简介" title="市场营销简介">
								<div class="hidden1">市场营销简介</div>
								<div class="hidden">
									<div>
										<h4>市场营销简介</h4>
										<p>美国市场营销协会把市场营销定义为：是创造、沟通与传送价值给顾客，即经营顾客关系以便让组织与其利益关系人受益的一种组织功能与程序。从本质上来说：市场营销学就是研究市场交换活动中供需双方的行为以及关系。</p>
										<a href="javascript:;" onclick="go()">马上申请</a>
									</div>
								</div>
							</div>
							<div class="fr">
								<div>
									<h5><span></span>背景要求</h5>
									<p>不需要本科必须是市场营销，但市场营销方面的专业背景更有优势;人文社科、商科、经济、数学、工程类专业都能申请。</p>
									<a href="javascript:;" onclick="go()">了解详情&gt;</a>
								</div>
								<div>
									<h5><span></span>就业方向</h5>
									<p>管理分析，市场调研，销售代表，公关专员，广告，市场，推广，公众关系以及销售经理。</p>
								</div>
								<div>
									<h5><span></span>就业薪资</h5>
									<p>平均年薪：约$50000-60000</p>
								</div>
								<a href="javascript:;" onclick="go()">了解申请难点</a>
							</div>
						</div>
						<div class="bbot clearfix">
							<h3>名校推荐</h3>
							<div class="b clearfix">
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/xibeidaxue.png" alt="西北大学" title="西北大学">
									<p>西北大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/binxifaniyadaxue.png" alt="宾夕法尼亚大学" title="宾夕法尼亚大学">
									<p>宾夕法尼亚大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/dukedaxue.png" alt="杜克大学" title="杜克大学">
									<p>杜克大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/hafodaxue.png" alt="哈佛大学" title="哈佛大学">
									<p>哈佛大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/mixiegendaxue.png" alt="密歇根大学安娜堡分校" title="密歇根大学安娜堡分校">
									<p>密歇根大学安娜堡分校</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/sitanfudaxue.png" alt="斯坦福大学" title="斯坦福大学">
									<p>斯坦福大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">2019美国研究生市场营销专业最新排名</a>
					</div>
					<div class="xbottom_box clearfix">
						<div class="btop clearfix">
							<div class="img fl">
								<img src="/static/home/img/page/yanJs_shangke/renliziyuan.jpg" alt="人力资源简介" title="人力资源简介">
								<div class="hidden1">人力资源简介</div>
								<div class="hidden">
									<div>
										<h4>人力资源简介</h4>
										<p>企业管理中主要部门职能之一，着重于帮助现代企业解决企业人力资本运用的问题，其基本原则是：在正确的时间把正确的人安排在正确的岗位上。</p>
										<a href="javascript:;" onclick="go()">马上申请</a>
									</div>
								</div>
							</div>
							<div class="fr">
								<div>
									<h5><span></span>背景要求</h5>
									<p>多数学校对申请者本科专业没有严格要求，但有些学校会偏向于招收有相关背景的学生，如心理学、行为科学等。</p>
									<a href="javascript:;" onclick="go()">了解详情&gt;</a>
								</div>
								<div>
									<h5><span></span>就业方向</h5>
									<p>人力资源总监、人事经理、薪资经理、培训经理及主管、招聘经理及主管、企业管理咨询项目调研、企业高层或职业经理人、转行到业务部门、管理咨询师、培训师、专业人士和知识管理总监。</p>
								</div>
								<div>
									<h5><span></span>就业薪资</h5>
									<p>平均年薪：约$73500</p>
								</div>
								<a href="javascript:;" onclick="go()">了解申请难点</a>
							</div>
						</div>
						<div class="bbot clearfix">
							<h3>名校推荐</h3>
							<div class="b clearfix">
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/kangnaierdaxue.png" alt="康奈尔大学" title="康奈尔大学">
									<p>康奈尔大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/nanjiazhoudaxue.png" alt="南加州大学" title="南加州大学">
									<p>南加州大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/mingnisudadaxue.png" alt="明尼苏达大学双城分校" title="明尼苏达大学双城分校">
									<p>明尼苏达大学双城分校</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/yilinuoyidaxue.png" alt="伊利诺伊大学香槟分校" title="伊利诺伊大学香槟分校">
									<p>伊利诺伊大学香槟分校</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/mixiegenzhoulidaxue.png" alt="密歇根州立大学" title="密歇根州立大学">
									<p>密歇根州立大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/luogesidaxue.png" alt="罗格斯大学" title="罗格斯大学">
									<p>罗格斯大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">2019美国研究生人力资源专业最新排名</a>
					</div>
					<div class="xbottom_box clearfix">
						<div class="btop clearfix">
							<div class="img fl">
								<img src="/static/home/img/page/yanJs_shangke/wuliuguanli.jpg" alt="物流管理简介" title="物流管理简介">
								<div class="hidden1">物流管理简介</div>
								<div class="hidden">
									<div>
										<h4 style="padding-top: 26px;">物流管理简介</h4>
										<p style="margin-bottom: 10px;">作为一个交叉性的学科，物流管理专业综合了多门学科的研究方法和特点，包括运筹学、信息管理学、市场，甚至会计和金融等等学科。美国的物流管理专业一般设在管理学院、商学院或者工程学院里，属于交叉性强的学科，所以要求申请人背景多元化，并且有一定的工作经验。同时，由于物流管理专业在美国乃至全球的就业市场都非常好，所以申请竞争十分激烈。</p>
										<a href="javascript:;" onclick="go()">马上申请</a>
									</div>
								</div>
							</div>
							<div class="fr">
								<div>
									<h5><span></span>背景要求</h5>
									<p>有管理专业背景的申请者适合申请商学院下的物流，有数理分析，计算机方面的知识，比较适合申请工学院下面的物流专业。</p>
									<a href="javascript:;" onclick="go()">了解详情&gt;</a>
								</div>
								<div>
									<h5><span></span>就业方向</h5>
									<p>国际货代业、物流仓储设备行业、港口经营业、物流信息技术。</p>
								</div>
								<div>
									<h5><span></span>就业薪资</h5>
									<p>平均年薪：职业早期约$63800</p>
								</div>
								<a href="javascript:;" onclick="go()">了解申请难点</a>
							</div>
						</div>
						<div class="bbot clearfix">
							<h3>名校推荐</h3>
							<div class="b clearfix">
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/mixiegenzhoulidaxue.png" alt="密歇根州立大学" title="密歇根州立大学">
									<p>密歇根州立大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/mashengligongdaxue.png" alt="麻省理工学院" title="麻省理工学院">
									<p>麻省理工学院</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/yalisangnazhoulidaxue.png" alt="亚利桑那州立大学" title="亚利桑那州立大学">
									<p>亚利桑那州立大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/ehaiezhoulidaxue.png" alt="俄亥俄州立大学" title="俄亥俄州立大学">
									<p>俄亥俄州立大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/binzhouzhoulidaxue.png" alt="宾州州立大学公园分校" title="宾州州立大学公园分校">
									<p>宾州州立大学公园分校</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/luogesidaxue.png" alt="罗格斯大学" title="罗格斯大学">
									<p>罗格斯大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">2019美国研究生物流管理专业最新排名</a>
					</div>
					<div class="xbottom_box clearfix">
						<div class="btop clearfix">
							<div class="img fl">
								<img src="/static/home/img/page/yanJs_shangke/shujukexue.jpg" alt="数据科学简介" title="数据科学简介">
								<div class="hidden1">数据科学简介</div>
								<div class="hidden">
									<div>
										<h4>数据科学简介</h4>
										<p>数据科学主要有两个内涵：一个是研究数据本身，研究数据的各种类型、状态、属性及变化形式和变化规律；另一个是为自然科学和社会科学研究提供一种新的方法，称为科学研究的数据方法，其目的在于揭示自然界和人类行为现象和规律。</p>
										<a href="javascript:;" onclick="go()">马上申请</a>
									</div>
								</div>
							</div>
							<div class="fr">
								<div>
									<h5><span></span>背景要求</h5>
									<p>数学类、工程类、科学类、统计类、经济学(学过计算机课程)都可以尝试申请此专业。</p>
									<a href="javascript:;" onclick="go()">了解详情&gt;</a>
								</div>
								<div>
									<h5><span></span>就业方向</h5>
									<p>机器学习工程师，数据分析员，数据科学家</p>
								</div>
								<div>
									<h5><span></span>就业薪资</h5>
									<p>在硅谷，入门级的数据科学家的收入已经是6位数了(美元)</p>
								</div>
								<a href="javascript:;" onclick="go()">了解申请难点</a>
							</div>
						</div>
						<div class="bbot clearfix">
							<h3>名校推荐</h3>
							<div class="b clearfix">
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/hafodaxue.png" alt="哈佛大学" title="哈佛大学">
									<p>哈佛大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/gelunbiyadaxue.png" alt="哥伦比亚大学" title="哥伦比亚大学">
									<p>哥伦比亚大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/kainaijimeilongdaxue.png" alt="卡耐基梅隆大学" title="卡耐基梅隆大学">
									<p>卡耐基梅隆大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/nanjiazhoudaxue.png" alt="南加州大学" title="南加州大学">
									<p>南加州大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/binxifaniyadaxue.png" alt="宾夕法尼亚大学" title="宾夕法尼亚大学">
									<p>宾夕法尼亚大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/bulangdaxue.png" alt="布朗大学" title="布朗大学">
									<p>布朗大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">2019美国研究生数据科学专业最新排名</a>
					</div>
					<div class="xbottom_box clearfix">
						<div class="btop clearfix">
							<div class="img fl">
								<img src="/static/home/img/page/yanJs_shangke/guanlixinxixitong.jpg" alt="管理信息系统简介" title="管理信息系统简介">
								<div class="hidden1">管理信息系统简介</div>
								<div class="hidden">
									<div>
										<h4>管理信息系统简介</h4>
										<p>管理信息系统MIS是一门结合计算机技术、管理科学、电子商务应用的新学科。它的最大特点就是把上述三门技术特别好的结合了起来，并且伴随着ERP系统之类的企业信息管理软件的迅速蔓延，很多企业都空前地重视起信息的整合和利用。</p>
										<a href="javascript:;" onclick="go()">马上申请</a>
									</div>
								</div>
							</div>
							<div class="fr">
								<div>
									<h5><span></span>背景要求</h5>
									<p>大多数项目对申请者的本科专业背景并没有强烈要求;拥有统计学、数学、计算机学科背景对申请更加有利。</p>
									<a href="javascript:;" onclick="go()">了解详情&gt;</a>
								</div>
								<div>
									<h5><span></span>就业方向</h5>
									<p>可以从事系统、软件的开发；系统、网络的管理工作；企事业的信息处理及管理。笼统来讲，可以是商业分析师、系统及软件开发师、技术支持、网络工程师、项目主管等等。</p>
								</div>
								<div>
									<h5><span></span>就业薪资</h5>
									<p>平均年薪：约$95000</p>
								</div>
								<a href="javascript:;" onclick="go()">了解申请难点</a>
							</div>
						</div>
						<div class="bbot clearfix">
							<h3>名校推荐</h3>
							<div class="b clearfix">
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/mashengligongdaxue.png" alt="麻省理工" title="麻省理工">
									<p>麻省理工</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/dekesasidaxueaositingfenxiao.png" alt="德克萨斯大学奥斯汀分校" title="德克萨斯大学奥斯汀分校">
									<p>德克萨斯大学奥斯汀分校</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/kainaijimeilongdaxue.png" alt="卡耐基梅隆大学" title="卡耐基梅隆大学">
									<p>卡耐基梅隆大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/yalisannadaxue.png" alt="亚利桑那大学" title="亚利桑那大学">
									<p>亚利桑那大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/niuyuedaxue.png" alt="纽约大学" title="纽约大学">
									<p>纽约大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/luoqiesitedaxue.png" alt="罗切斯特大学" title="罗切斯特大学">
									<p>罗切斯特大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">2019美国研究生管理信息系统专业最新排名</a>
					</div>
					<div class="xbottom_box clearfix">
						<div class="btop clearfix">
							<div class="img fl">
								<img src="/static/home/img/page/yanJs_shangke/MBA.jpg" alt="MBA简介" title="MBA简介">
								<div class="hidden1">MBA简介</div>
								<div class="hidden">
									<div>
										<h4 style="padding-top: 26px;">MBA简介</h4>
										<p style="width: 435px;margin-bottom: 10px;">MBA一种专业硕士学位，与一般硕士研究生有所不同。首先是培养目标不同，MBA是培养能够胜任工商企业和经济管理部门高层管理工作需要的务实型、复合型和应用型高层次管理人才，特别强调在掌握现代管理理论和方法的基础上，通过商业案例分析、实战观摩、分析与决策技能训练等培养学生的实际操作技能，使学生接受知识与技能、个性与心理、目标与愿望等方面的挑战，更具有职业竞争的实力，而其他研究生则侧重于理论学习、学术研究。</p>
										<a href="javascript:;" onclick="go()">马上申请</a>
									</div>
								</div>
							</div>
							<div class="fr">
								<div>
									<h5><span></span>背景要求</h5>
									<p>MBA极其重视工作经验，MBA对专业背景并没有太大限制，比较看重申请人的管理方面的经验或者潜力。</p>
									<a href="javascript:;" onclick="go()">了解详情&gt;</a>
								</div>
								<div>
									<h5><span></span>就业方向</h5>
									<p>金融机构的经理，咨询公司的顾问，世界五百强的管理培训生，合伙创业。</p>
								</div>
								<div>
									<h5><span></span>就业薪资</h5>
									<p>平均年薪：早期约$60000-80000</p>
								</div>
								<a href="javascript:;" onclick="go()">了解申请难点</a>
							</div>
						</div>
						<div class="bbot clearfix">
							<h3>名校推荐</h3>
							<div class="b clearfix">
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/hafodaxue.png" alt="哈佛大学" title="哈佛大学">
									<p>哈佛大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/zhijiagedaxue.png" alt="芝加哥大学" title="芝加哥大学">
									<p>芝加哥大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/binxifaniyadaxue.png" alt="宾夕法尼亚大学沃顿商学院" title="宾夕法尼亚大学沃顿商学院">
									<p>宾夕法尼亚大学<br />沃顿商学院</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/sitanfudaxue.png" alt="斯坦福大学" title="斯坦福大学">
									<p>斯坦福大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/mashengligongdaxue.png" alt="麻省理工学院" title="麻省理工学院">
									<p>麻省理工学院</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/xibeidaxue.png" alt="西北大学" title="西北大学">
									<p>西北大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">2019美国研究生MBA专业最新排名</a>
					</div>
					<div class="xbottom_box clearfix">
						<div class="btop clearfix">
							<div class="img fl">
								<img src="/static/home/img/page/yanJs_shangke/shangyefenxi.jpg" alt="商业分析简介" title="商业分析简介">
								<div class="hidden1">商业分析简介</div>
								<div class="hidden">
									<div>
										<h4>商业分析简介</h4>
										<p>商业分析就是利用数据分析和统计的方法，来分析企业之前的商业表现，从而通过分析结果来对未来的商业战略进行预测和指导 。</p>
										<a href="javascript:;" onclick="go()">马上申请</a>
									</div>
								</div>
							</div>
							<div class="fr">
								<div>
									<h5><span></span>背景要求</h5>
									<p>美国商业分析院校对申请背景没有明确限制，但申请主体还是集中在商科领域背景。</p>
									<a href="javascript:;" onclick="go()">了解详情&gt;</a>
								</div>
								<div>
									<h5><span></span>就业方向</h5>
									<p>主要是金融领域、咨询公司、市场营销与市场分析、互联网公司等。</p>
								</div>
								<div>
									<h5><span></span>就业薪资</h5>
									<p>平均年薪：约$84754</p>
								</div>
								<a href="javascript:;" onclick="go()">了解申请难点</a>
							</div>
						</div>
						<div class="bbot clearfix">
							<h3>名校推荐</h3>
							<div class="b clearfix">
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/hafodaxue.png" alt="哈佛大学" title="哈佛大学">
									<p>哈佛大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/zhijiagedaxue.png" alt="芝加哥大学" title="芝加哥大学">
									<p>芝加哥大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/binxifaniyadaxue.png" alt="宾夕法尼亚大学沃顿商学院" title="宾夕法尼亚大学沃顿商学院">
									<p>宾夕法尼亚大学<br />沃顿商学院</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/sitanfudaxue.png" alt="斯坦福大学" title="斯坦福大学">
									<p>斯坦福大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/mashengligongdaxue.png" alt="麻省理工学院" title="麻省理工学院">
									<p>麻省理工学院</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
								<div class="box fl">
									<img src="/static/home/img/page/yanJs_shangke/gelunbiyadaxue.png" alt="哥伦比亚大学" title="哥伦比亚大学">
									<p>哥伦比亚大学</p>
									<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
								</div>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">2019美国研究生商业分析专业最新排名</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国研究生申请难点众多 彬彬教育帮你一一击破 -->
		<div class="jipo sk_index">
			<div class="gWidth1170">
				<h3 class="title">美国研究生申请难点众多 彬彬教育帮你一一击破</h3>
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
		</div>
		
		<!-- 美国研究生商科申请规划 -->
		<div class="guihua sk_index">
			<div class="gWidth1170">
				<h3 class="title">美国研究生商科申请规划</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="box">
						<ul>
							<li>职业/科研道路规划；</li>
							<li>确保GPA成绩；准备语言考试</li>
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
						<ul style="padding: 11.82px 0;">
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
					<a href="javascript:;" onclick="go()" class="a1">马上申请2019美国商科研究生</a>
					<a href="javascript:;" onclick="go()" class="a2">查看详细时间规划</a>
				</div>
			</div>
		</div>
		
		<!-- 学长/学姐说申请 -->
		<div class="shuoBox sk_index">
			<div class="shuo_sq gWidth1170">
				<h3 class="title">学长/学姐说申请</h3>
				<p>听过来人一席话 躲避留学申请坑</p>
				<!-- content -->
				<div class="content clearfix">
					<div class="box fl">
						<h4>Z同学</h4>
						<div>
							<p><b>本科：</b>对外经贸大学</p>
							<p><b>录取：</b>约翰霍普金斯大学</p>
						</div>
						<div>
							<h3>关于申请她说：</h3>
							<p>我在大三上学期的寒假结束了才决定好出国，之前半年有这个想法，但是一直在比较中介机构，了解申请条件，还没有决定和开始准备。然后寒假末的时候，通过同学介绍来到了彬彬教育，他们为我做了详细的分析和规划</p>
						</div>
						<div class="anniu">
							<a href="javascript:;" onclick="go()" class="a1">向TA咨询</a>
							<a href="/success/109.html" target="_blank" class="a2">查看详情</a>
						</div>
					</div>
					<div class="box fl">
						<h4>L同学</h4>
						<div>
							<p><b>本科：</b>宾州州立大学</p>
							<p><b>录取：</b>哥伦比亚大学</p>
						</div>
						<div>
							<h3>关于申请她说：</h3>
							<p>我没有参加过任何标化考试，本科期间参加的项目实习也比较少。仅凭本科GPA与本科专业教授的三封推荐信，拿到了NYU和哥大和sps学院的同时录取。在文书上，彬彬导师帮助我寻找到自己的亮点与过人之处，让招生官感受到我与学院理念的契合。</p>
						</div>
						<div class="anniu">
							<a href="javascript:;" onclick="go()" class="a1">向TA咨询</a>
							<a href="/success/96.html" target="_blank" class="a2">查看详情</a>
						</div>
					</div>
					<div class="box fl">
						<h4>W同学</h4>
						<div>
							<p><b>本科：</b>纽约州立大学布法罗分校</p>
							<p><b>录取：</b>约翰霍普金斯大学</p>
						</div>
						<div>
							<h3>关于申请她说：</h3>
							<p>刚开始我并不明确自己要申请的专业方向，而且托福成绩不高，但值得开心的是我的GPA还是不错的，软背景也很丰富，曾经在国内某大型金融机构进行实习，并拿到了推荐信和实习证明。</p>
						</div>
						<div class="anniu">
							<a href="javascript:;" onclick="go()" class="a1">向TA咨询</a>
							<a href="/success/91.html" target="_blank" class="a2">查看详情</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 全维度高品质背景提升项目 -->
		<div class="bjts sk_index">
			<div class="gWidth1170">
				<h3 class="title">全维度高品质背景提升项目</h3>
				<p>提升软性背景助力名校申请</p>
				<!-- content -->
				<div class="content clearfix">
					<div class="box fl">
						<a href="/mxky/257.html" class="hidden1" target="_blank">哈佛大学金融学科研</a>
					</div>
					<div class="box box2 fl">
						<a href="/mxky/214.html" class="hidden1" target="_blank">麻省理工学院金融科研项目</a>
					</div>
					<div class="box box3 fl">
						<a href="/mxky/263.html" class="hidden1" target="_blank">卡耐基梅隆大学计算机专业</a>
					</div>
					<div class="box box4 fl">
						<a href="/mqsx/311.html" class="hidden1" target="_blank">埃森哲公司</a>
					</div>
					<div class="box box5 fl">
						<a href="/mqsx/297.html" class="hidden1" target="_blank">群邑集团</a>
					</div>
					<div class="box box6 fl">
						<a href="/mqsx/301.html" class="hidden1" target="_blank">中国银联</a>
					</div>
				</div>
				<div class="anniu">
					<a href="javascript:;" onclick="go()" class="a1">快速匹配适合自己的项目</a>
					<a href="/page/polymerization.html" target="_blank" class="a2">查看更多</a>
				</div>
			</div>
		</div>
		
		<!-- 彬彬服务模式 -->
		<div id="mydiv" class="fwms sk_index" style="background-color: #eeeeee;">
			<div class="gWidth1170">
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
		</div>
				
		<!-- 强大的国内外导师团队 -->
		<div class="daoshi_team sk_index">
			<div class="gWidth1170">
				<!-- title -->
				<h3 class="title">强大的国内外导师团队</h3>
				<!-- count -->
				<div class="count">
					<!-- 选项 -->
					<div class="clearfix t">
						<a href="javascript:;" class="fl">全程咨询导师</a><span class="fl">|</span>
						<a href="javascript:;" class="fl">海外同专业导师</a><span class="fl">|</span>
						<a href="javascript:;" class="fl">全能主申请导师</a><span class="fl">|</span>
						<a href="javascript:;" class="fl">资深流程导师</a><span class="fl">|</span>
						<a href="javascript:;" class="fl">名校外籍文笔导师</a><span class="fl">|</span>
						<a href="javascript:;" class="fl">专家督导导师</a>
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
				
		<!-- 彬彬教育致力让每一个学生牵手世界名校 -->
		<div class="sk_index mydiv" style="height: 627px;">
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
						<!-- <p><a href="/page/polymerization.html" target="_blank">背景提升</a></p> -->
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
			var nav = $('.bannerNav').offset().top;
			$gkLength = $('.sk_index').length;
			window.onscroll = function () {
				var top = document.documentElement.scrollTop || document.body.scrollTop;
				if(top>=nav){
					$('.bannerNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999'});
					$('.navHidden').css({'display': 'block'});
				}else if(top<=$('.jiebao').offset().top){
					$('.bannerNav').css({'position': 'static', 'top':''});
					$('.navHidden').css({'display': 'none'});
				}
				for( var i=0; i<$gkLength; i++ ){
					if( i == $gkLength - 1 ){
						if( top>=$('.sk_index').eq(i).offset().top ){
							$('.bannerNav span').removeClass('active');
							$('.bannerNav span').eq(i).addClass('active');
						}
						return;
					}
					if( top>=$('.sk_index').eq(i).offset().top - 100 && top<$('.sk_index').eq(i+1).offset().top ){
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
				var offsetTop = $('.sk_index').eq(index).offset().top;
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
			var num2 = new CountUp("span2", 0, 600, 0, 2.5, options);
			var num3 = new CountUp("span3", 0, 1000, 0, 2.5, options);
			var num4 = new CountUp("span4", 0, 50, 0, 2.5, options);
			var num5 = new CountUp("span5", 0, 2.12, 2, 2.5, options);
			var num6 = new CountUp("span6", 0, 500, 0, 2.5, options);
			num1.start();
			num2.start();
			num3.start();
			num4.start();
			num5.start();
			num6.start();
			// 
			$('.jiebao .contentBottom .box:last-child').css({'margin-right': '0'});
			// 
			$('.youshi .contentRight').eq(0).css({'display': 'block'});
			$('.youshi .contentLeft .box').on('click', function () {
				var index = $('.youshi .contentLeft .box').index($(this));
				$(this).addClass('active').siblings('.box').removeClass('active');
				$('.youshi .contentRight').eq(index).stop().fadeIn().siblings('.contentRight').css({'display': 'none'});
			})
			// 
			$('.zhuanyeTuijian .content .contentXx .Xx:last-child').css({'margin-right': '0'});
			var XuanX = $('.zhuanyeTuijian .content .contentXx .Xx');
			$('.xbottom_box').eq(0).css({'display': 'block'});
			XuanX.on('click', function () {
				var index = XuanX.index($(this));
				$(this).addClass('active').siblings('.Xx').removeClass('active');
				$('.xbottom_box').eq(index).stop().fadeIn().siblings('.xbottom_box').fadeOut();
			})
			// 
			$('.zhuanyeTuijian .content .xbottom .xbottom_box .bbot .b .box:last-child').css({'margin-right': '0'});
			// 
			var p = $('.zhuanyeTuijian .content .xbottom .xbottom_box .bbot .b .box p');
			for(var i=0; i<p.length; i++){
				if( p.eq(i).children('br').length !== 0 ){
					p.eq(i).css({'margin-bottom': '3px'})
					p.eq(i).siblings('img').css({'margin-bottom': '8px'});
				}
			}
			// 
			$('.zhuanyeTuijian .content .xbottom .xbottom_box .btop .img').hover(function () {
				$(this).children('.hidden1').stop().fadeOut();
				$(this).children('.hidden').stop().fadeIn();
			}, function () {
				$(this).children('.hidden').stop().fadeOut();
				$(this).children('.hidden1').stop().fadeIn();
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
				'border-color': 'transparent transparent #F3EDE8 transparent'
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
				if( $(window).scrollTop() + 700 >= $('.jiebao').offset().top && $(window).scrollTop() < $('.youshi').offset().top ){
					num1.start();
					num2.start();
					num3.start();
					num4.start();
					num5.start();
					num6.start();
				}else if ( $(window).scrollTop() < $('.jiebao').offset().top || $(window).scrollTop() >= $('.youshi').offset().top ) {
					num1.reset();
					num2.reset();
					num3.reset();
					num4.reset();
					num5.reset();
					num6.reset();
				}
				if( $(window).scrollTop()>=$('.guihua').offset().top - 500 ){
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
			// 
			$('.shuo_sq .content .box:last-child').css({'margin-right': '0'});
			// 
			$('.bjts .content .box:nth-child(3n)').css({'margin-right': '0'});
			// 选项卡选项
			$('.daoshi_team .count>div>a').eq(0).attr('class', 'active fl');
			$('.daoshi_team .count .b .bBox').eq(0).css({'display': 'block'});
			$('.daoshi_team .count>div>a').on('click', function () {
				var index = $('.daoshi_team .count>div>a').index($(this));
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
				if( $(window).scrollTop() + 700 >= $('.mydiv').offset().top ){
					$('.mydiv .box .dq>div').css({'background-position-x': 'right'});	 
				}
				
				if( $(window).scrollTop() + 700 < $('.mydiv').offset().top ){
					$('.mydiv .box .dq>div').css({'background-position-x': 'left'});	 
				}
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
