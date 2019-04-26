<?php /*a:7:{s:78:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\collegesqgl.html";i:1554198527;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1553677718;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1553062603;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1554184743;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_daoshi.html";i:1554281138;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1554189517;s:89:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_undergraduate.html";i:1554189591;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/collegesqgl.css">
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
				<h1>美国本科留学申请全攻略</h1>
				<h3>彬彬教育 让每一个学生都能牵手名校</h3>
				<div class="anniu">
					<a  href="javascript:;" onclick="go()">早申请  早规划</a>
					<a  href="javascript:;" onclick="go()" class="a1">马上申请美国名校</a>
				</div>
			</div>
		</div>
		
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">美本特色</span>
				<span>申请条件</span>
				<span>申请规划</span>
				<span>申请流程</span>
				<span>本科转学</span>
				<span>名校推荐</span>
				<span>导师团队</span>
				<span>精彩案例</span>
				<span>背景提升</span>
				<span>留学费用</span>
				<span>彬彬优势 </span>
			</div>
		</div>
		<div class="navHidden"></div>
		
		<!-- 美国拥有全球数量最多和教学质量最高的大学 -->
		<div class="zhilang_daxue tj_index gWidth1170">
			<h3 class="title">美国拥有全球数量最多和教学质量最高的大学</h3>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<div class="bTitle">美国的大学数量全球最高，达到4180所！</div>
					<div class="bBox">
						<div class="clearfix adly">
							<span class="fl">澳大利亚</span>
							<em class="fl"></em>
							<span><i id="i1">40</i>+</span>
						</div>
						<div class="clearfix jnd">
							<span class="fl">加拿大</span>
							<em class="fl"></em>
							<span><i id="i2">100</i>+</span>
						</div>
						<div class="clearfix yg">
							<span class="fl">英国</span>
							<em class="fl"></em>
							<span><i id="i3">100</i>+</span>
						</div>
						<div class="clearfix rb">
							<span class="fl">日本</span>
							<em class="fl"></em>
							<span><i id="i4">700</i>+</span>
						</div>
						<div class="clearfix mg">
							<span class="fl">美国</span>
							<em class="fl"></em>
							<span><i id="i5">4000</i>+</span>
						</div>	
					</div>
				</div>
				<div class="box2 fl">
					<div class="bTitle">美国的大学名校多，特色显著！</div>
					<div class="bBox">
						<ul>
							<li>● 全球TOP30名校中美国大学占比高达70%</li>
							<li>● 美国拥有八大常春藤联盟</li>
							<li>● 美国拥有世界公认最优质综合性大学</li>
							<li>● 美国拥有顶尖文理学院</li>
							<li>● 美国拥有三大著名的军事院校</li>
						</ul>
					</div>
				</div>
				<div class="box2 fl">
					<div class="bTitle">美国的大学名校多，特色显著！</div>
					<div class="bBox">
						<ul>
							<li>● 美国拥有世界公认的高质量的学习项目、教师、设施和资源；</li>
							<li>● 美国教育系统在院校、学术与社会环境、入学要求、学位项目以及可供学习的专业领域方面提供无可比拟的选择；</li>
							<li>● 美国本科教育的特点是博雅教育，通过自由的课程设置、自由的专业选择和自由教育的学院氛围实现自由学习。</li>
						</ul>
					</div>
				</div>
			</div>
			<a  href="javascript:;" onclick="go()">点击匹配学校</a>
		</div>
		
		<!-- 美国本科申请条件 -->
		<div class="tiaojian tj_index">
			<div class="gWidth1170">
				<h3 class="title">美国本科申请条件</h3>
				<div class="content">
					<div class="ctitle clearfix">
						<span class="active">美国综合性大学</span>
						<span>美国文理学院</span>
						<span>美国社区大学</span>
					</div>
					<div class="cbox">
						<div class="cboxtop clearfix">
							<img src="/static/home/img/page/benke_sqtj/zh.jpg" class="fl" alt="综合性大学(University，大U)" title="综合性大学(University，大U)">
							<div class="fr">
								<h3>综合性大学(University，大U)</h3>
								<p>University就是综合性大学，属于研究型大学，该类大学是以培养研究人才为目的的高等教育机构。特点是专业门类齐全，研究活动活跃。例如哈佛大学、麻省理工学院、耶鲁大学都属于这种，有公立也有私立。</p>
								<a target="_blank" href="/page/comprehensive.html" class="fr">查看详情</a>
							</div>
						</div>
						<div class="cboxbottom clearfix">
							<div class="fl">
								<h3>申请条件</h3>
								<p><b>标准化成绩：</b>托福  (TOEFL)  /  雅思  (IELTS)、SAT (SAT1&amp;SAT2)  /  ACT、AP/IB。<a  href="javascript:;" onclick="go()">具体分数要求&gt;</a></p>
								<p><b>学术成绩：</b><br />9-12年级GPA成绩单<a  href="javascript:;" onclick="go()">GPA分数转换&gt;</a></p>
								<p><b>软性背景：</b><br />艺术特长、学术比赛、社会实践等经历<a  href="javascript:;" onclick="go()">如何提升软性背景&gt;</a></p>
							</div>
							<div class="fr">
								<h3>申请材料</h3>
								<div class="clearfix">
									<div class="box"><img src="/static/home/img/page/benke_sqtj/icon1.jpg" alt=""><span>入学申请表</span></div>
									<div class="box"><img src="/static/home/img/page/benke_sqtj/icon2.jpg" alt=""><span>推荐信</span></div>
									<div class="box"><img src="/static/home/img/page/benke_sqtj/icon3.jpg" alt=""><span>个人简历</span></div>
									<div class="box"><img src="/static/home/img/page/benke_sqtj/icon4.jpg" alt=""><span>个人陈述</span></div>
									<div class="box"><img src="/static/home/img/page/benke_sqtj/icon5.jpg" alt=""><span>高中毕业证</span></div>
									<div class="box"><img src="/static/home/img/page/benke_sqtj/icon6.jpg" alt=""><span>存款证明</span></div>
								</div>
								<a  href="javascript:;" onclick="go()" class="fr">获取全部材料清单&gt;</a>
							</div>
						</div>
					</div>
					<a  href="javascript:;" onclick="go()" class="a">马上申请美国综合性大学</a>
					<div class="cbox">
						<div class="cboxtop clearfix">
							<img src="/static/home/img/page/benke_sqtj/wl.jpg" class="fl" alt="文理学院(Liberal Arts Colleges，LAC)" title="文理学院(Liberal Arts Colleges，LAC)">
							<div class="fr">
								<h3>文理学院(Liberal Arts Colleges，LAC)</h3>
								<p>美国LAC大学俗称文理学院。往往代表着经典、小规模、高质量的本科教育。许多文理学院的学术声誉往往不亚于哈佛耶鲁等名校。其实，中国有很多出名人的都毕业于此类大学，比如宋庆龄就是毕业于卫斯理学院；当红歌星王力宏，就是从全美最好的LAC——威廉姆斯学院的音乐学院毕业的。</p>
								<a target="_blank" href="/page/sciences.html" class="fr">查看详情</a>
							</div>
						</div>
						<div class="cboxbottom clearfix">
							<div class="fl">
								<h3>申请条件</h3>
								<p><b>标准化成绩：</b>托福  (TOEFL)  /  雅思  (IELTS)、SAT (SAT1&amp;SAT2)  /  ACT、AP/IB。<a  href="javascript:;" onclick="go()">具体分数要求&gt;</a></p>
								<p><b>学术成绩：</b><br />9-12年级GPA成绩单<a  href="javascript:;" onclick="go()">GPA分数转换&gt;</a></p>
								<p><b>软性背景：</b><br />艺术特长、学术比赛、社会实践等经历<a  href="javascript:;" onclick="go()">如何提升软性背景&gt;</a></p>
							</div>
							<div class="fr">
								<h3>申请材料</h3>
								<div class="clearfix">
									<div class="box"><img src="/static/home/img/page/benke_sqtj/icon1.jpg" alt=""><span>入学申请表</span></div>
									<div class="box"><img src="/static/home/img/page/benke_sqtj/icon2.jpg" alt=""><span>推荐信</span></div>
									<div class="box"><img src="/static/home/img/page/benke_sqtj/icon3.jpg" alt=""><span>个人简历</span></div>
									<div class="box"><img src="/static/home/img/page/benke_sqtj/icon4.jpg" alt=""><span>个人陈述</span></div>
									<div class="box"><img src="/static/home/img/page/benke_sqtj/icon5.jpg" alt=""><span>高中毕业证</span></div>
									<div class="box"><img src="/static/home/img/page/benke_sqtj/icon6.jpg" alt=""><span>存款证明</span></div>
								</div>
								<a  href="javascript:;" onclick="go()" class="fr">获取全部材料清单&gt;</a>
							</div>
						</div>
					</div>
					<a  href="javascript:;" onclick="go()" class="a">马上申请美国文理学院</a>
					<div class="cbox">
						<div class="cboxtop clearfix">
							<img src="/static/home/img/page/benke_sqtj/sq.jpg" class="fl" alt="社区大学（Community College）" title="社区大学（Community College）">
							<div class="fr">
								<h3>社区大学（Community College）</h3>
								<p>美国社区大学（Community College），或可称为“两年制大学，大多是公立学校。它提供二年大学一般课程教育，学校会颁发副学士学位(Associate Degree)，你可以转到四年制大学或学院继续念书，许多学分都是大学承认的。是国际生进入优秀大学的一个跳板。</p>
								<a target="_blank" href="/page/community.html" class="fr">查看详情</a>
							</div>
						</div>
						<div class="cboxbottom clearfix">
							<div class="fl">
								<h3>申请条件</h3>
								<p>年满14周岁或高中、中专院校在读</p>
								<p>有无高中或中专毕业证书均可</p>
								<p>高一（及以上）至少一个学期成绩单</p>
								<p>无需SAT有无英语成绩均可<a  href="javascript:;" onclick="go()">了解详情&gt;</a></p>
							</div>
							<div class="fr">
								<h3>美国社区大学名人堂</h3>
								<div class="clearfix">
									<div class="box1">
										<img src="/static/home/img/page/benke_sqtj/wl1.jpg" alt="">
										<p>Walt Disney<br />迪士尼公司创始人</p>
									</div>
									<div class="box1">
										<img src="/static/home/img/page/benke_sqtj/wl2.jpg" alt="">
										<p>Steve Jobs<br />苹果公司创始人</p>
									</div>
									<div class="box1">
										<img src="/static/home/img/page/benke_sqtj/wl3.jpg" alt="">
										<p>Richard Carmona<br />前美国卫生部长</p>
									</div>
								</div>
								<a  href="javascript:;" onclick="go()" class="abox">查看更多明星校友&gt;</a>
							</div>
						</div>
					</div>
					<a  href="javascript:;" onclick="go()" class="a">马上申请美国社区大学</a>
				</div>
			</div>
		</div>
		
		<!-- 美国本科申请规划 -->
		<div class="guihua tj_index gWidth1170">
			<h3 class="title">美国本科申请规划</h3>
			<div class="content clearfix">
				<div class="box fl">
					<div class="o">
						<h3>9年级</h3>
					</div>
					<div class="hidden"><p>保持良好GPA和排名；托福基础；广泛涉及初级背景提升项目；了解美国文化及院校，准备申请材料。</p></div>
				</div>
				<div class="box box2 fl">
					<div class="o">
						<h3>10年级</h3>
					</div>
					<div class="hidden"><p>保持良好GPA和排名；托福强化80+；SAT首考1200；参加中级海外交流项目；实地深入了解美国院校；继续准备申请材料。</p></div>
				</div>
				<div class="box box3 fl">
					<div class="o">
						<h3>11年级</h3>
					</div>
					<div class="hidden"><p>保持良好GPA和排名；托福冲刺100+；SAT刷分1400；参加美国名校暑期学分课程；填写文书素材；开始头脑风暴；了解学校申请要求及文书题目。</p></div>
				</div>
				<div class="box box4 fl">
					<div class="o">
						<h3>12年级</h3>
					</div>
					<div class="hidden"><p>保持良好GPA和排名；刷分达到 托福100+；SATⅠ1400 SATⅡ2-3门；整理课外活动背景素材；备EA/ED/RD申请材料；准备面试/签证材料等。</p></div>
				</div>
			</div>
			<a  href="javascript:;" onclick="go()">定制个性化留学方案</a>
		</div>
		
		<!-- 彬彬教育申请流程服务 -->
		<div class="liucheng_fuwu tj_index">
			<div class="gWidth1170">
				<h3 class="title">彬彬教育申请流程服务</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="box">
						<ul>
							<li>
								<h3>整体规划</h3>
								<p>与学生初次沟通<br />为学生制定整体留学<br />申请规划方案</p>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>专业定位</h3>
								<p>根据学生背景情<br />况和未来发展预期<br />选择适合的申请专业</p>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>学术背景提升指导</h3>
								<p>根据学生目前<br />绩点为学生制定接下<br />来的选课战略</p>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>科研实习指导</h3>
								<p>为学生选择合<br />适的科研实习项目<br />全程指导高效实习</p>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>学校选定</h3>
								<p>根据学生背景<br />情况和未来职业发展<br />预期选择申请学校</p>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>文书创作</h3>
								<p>根据学生过往<br />经历深度挖掘背景<br />写出特色的申请文书</p>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>网上申请</h3>
								<p>将所有学生的<br />相关信息准确提供给<br />申请学校</p>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>套磁面试辅导</h3>
								<p>为学生的面试提供<br />指导和帮助</p>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>签证及行前准备</h3>
								<p>指导学生填写签<br />证申请 在机票、住宿<br />方面进行指导</p>
							</li>
						</ul>
					</div>
					<div class="xian">
						<div>
							<span></span>
						</div>
						<div>
							<span></span>
						</div>
						<div>
							<span></span>
						</div>
						<div>
							<span></span>
						</div>
						<div>
							<span></span>
						</div>
						<div>
							<span></span>
						</div>
						<div>
							<span></span>
						</div>
						<div>
							<span></span>
						</div>
						<div>
							<span></span>
						</div>
					</div>
				</div>
				<a  href="javascript:;" onclick="go()">定制个性化留学方案</a>
			</div>
		</div>
		
		<!-- 美国本科转学 -->
		<div class="zhuanxue tj_index gWidth1170">
			<h3 class="title">美国本科转学</h3>
			<p>转入名校不是梦</p>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<h3>美国本科转学条件</h3>
					<p><b>硬性条件</b><span>GPA、TOEFL/IELTS、SAT/ACT（可选）</span></p>
					<p><b>软性条件</b><span>奖项、活动、科研、实习</span></p>
					<p><b>留学申请</b><span>课程描述、选校、文书</span></p>
					<a target="_blank" href="/page/transfer.html">获取转学申请技巧</a>
				</div>
				<div class="box2 fr">
					<h3>美国本科转学适合人群</h3>
					<ul>
						<li class="clearfix"><i class="fl"></i><span class="fl">高考失误，没有进入理想学校的本科在读生</span></li>
						<li class="clearfix"><i class="fl"></i><span class="fl">专科学生，国内续本困难重重</span></li>
						<li class="clearfix"><i class="fl"></i><span class="fl">在其他国家读本科，但希望能够有机会去美国学习的学生</span></li>
						<li class="clearfix"><i class="fl"></i><span class="fl">本科学习一段时间后对学校或所学专业不感兴趣，想通过转学改变专业找到合适自己学习和发展的空间。</span></li>
						<li class="clearfix"><i class="fl"></i><span class="fl">新生申请入读美国大学没能一步到位，希望通过转学去自己的dream school。</span></li>
					</ul>
					<a  href="javascript:;" onclick="go()">我要申请本科转学</a>
				</div>
			</div>
		</div>
		
		<!-- 美国本科大学推荐 -->
		<div class="daxue_tuijian tj_index">
			<div class="gWidth1170">
				<h3 class="title">美国本科大学推荐</h3>
				<!-- content -->
				<div class="content">
					<div class="tjTitle">
						<span class="active">八大常春藤名校</span>
						<span>2019 USNews排名</span>
					</div>
					<div class="box">
						<p>常春藤盟校指的是由美国东北部地区的八所大学组成的体育赛事联盟。它们全部是美国一流名校、也是美国产生最多罗德奖学金得主的高校联盟。</p>
						<div class="clearfix">
							<div class="b fl">
								<img src="/static/home/img/page/benke_sqtj/school1.jpg" alt="哈佛大学" title="哈佛大学">
								<h3>TOP1</h3>
								<span>哈佛大学</span>
								<p>历史悠久，是全美最古老的大学之一，迄今己已培育出6位美国总统、29位诺贝尔奖得主和27名普利策奖得主。</p>
								<a  href="javascript:;" onclick="go()">学校特色&gt;</a>
							</div>
							<div class="b fl">
								<img src="/static/home/img/page/benke_sqtj/school2.jpg" alt="宾夕法尼亚大学" title="宾夕法尼亚大学">
								<h3>TOP2</h3>
								<span>宾夕法尼亚大学</span>
								<p>是美国宾夕法尼亚州费城的一所男女同校私立大学，也是美国常春藤盟校成员之一。</p>
								<a  href="javascript:;" onclick="go()">学校特色&gt;</a>
							</div>
							<div class="b fl">
								<img src="/static/home/img/page/benke_sqtj/school3.jpg" alt="耶鲁大学" title="耶鲁大学">
								<h3>TOP3</h3>
								<span>耶鲁大学</span>
								<p>是一所著名的综合性私立研究型大学。是美国历史上建立的第三所大学，它和哈佛、普林斯顿大学齐名。</p>
								<a  href="javascript:;" onclick="go()">学校特色&gt;</a>
							</div>
							<div class="b fl">
								<img src="/static/home/img/page/benke_sqtj/school4.jpg" alt="普林斯顿大学" title="普林斯顿大学">
								<h3>TOP4</h3>
								<span>普林斯顿大学</span>
								<p>是一所闻名世界的私立研究型大学，是八所常春藤盟校之一，2019年USNews美国大学综合排名第一位。</p>
								<a  href="javascript:;" onclick="go()">学校特色&gt;</a>
							</div>
							<div class="b fl">
								<img src="/static/home/img/page/benke_sqtj/school5.jpg" alt="哥伦比亚大学" title="哥伦比亚大学">
								<h3>TOP5</h3>
								<span>哥伦比亚大学</span>
								<p>一所位于美国纽约曼哈顿的世界顶级私立研究型大学，拥有世界一流的法学院、商学院、医学院、新闻学院、工程学院等。</p>
								<a  href="javascript:;" onclick="go()">学校特色&gt;</a>
							</div>
							<div class="b fl">
								<img src="/static/home/img/page/benke_sqtj/school6.jpg" alt="达特茅斯学院" title="达特茅斯学院">
								<h3>TOP6</h3>
								<span>达特茅斯学院</span>
								<p>是美国历史最悠久的世界顶尖学府，也是闻名遐迩的私立八大常春藤联盟之一。</p>
								<a  href="javascript:;" onclick="go()">学校特色&gt;</a>
							</div>
							<div class="b fl">
								<img src="/static/home/img/page/benke_sqtj/school7.jpg" alt="布朗大学" title="布朗大学">
								<h3>TOP7</h3>
								<span>布朗大学</span>
								<p>布朗大学入学竞争极为激烈，本科生录取率仅为9%，是全美录取难度最高的大学之一。</p>
								<a  href="javascript:;" onclick="go()">学校特色&gt;</a>
							</div>
							<div class="b fl">
								<img src="/static/home/img/page/benke_sqtj/school8.jpg" alt="康奈尔大学" title="康奈尔大学">
								<h3>TOP8</h3>
								<span>康奈尔大学</span>
								<p>康奈尔大学（Cornell University）是一所位于美国纽约州伊萨卡的世界顶级私立研究型大学，是著名的常春藤联盟成员。</p>
								<a  href="javascript:;" onclick="go()">学校特色&gt;</a>
							</div>
						</div>
						<div class="anniu">
							<a target="_blank" href="/page/university_ranking.html">查看更多院校排名</a>
							<a  href="javascript:;" onclick="go()" class="a1">查看藤校申请条件</a>
						</div>
					</div>
					<div class="box box2">
						<p>美国有多个机构对大学进行排名，其中最有影响力的就是由《美国新闻和世界报导》（US News）发布的美国大学排名，即 US News 排名。</p>
						<div class="clearfix bbb1">
							<div class="b fl">
								<img src="/static/home/img/page/benke_sqtj/school4.jpg" alt="普林斯顿大学" title="普林斯顿大学">
								<h3>TOP1</h3>
								<span>普林斯顿大学</span>
								<p>Princeton University</p>
								<a  href="javascript:;" onclick="go()">申请条件&gt;</a>
							</div>
							<div class="b fl">
								<img src="/static/home/img/page/benke_sqtj/school1.jpg" alt="哈佛大学" title="哈佛大学">
								<h3>TOP2</h3>
								<span>哈佛大学</span>
								<p>Harvard University</p>
								<a  href="javascript:;" onclick="go()">申请条件&gt;</a>
							</div>
							<div class="b fl">
								<img src="/static/home/img/page/benke_sqtj/school5.jpg" alt="哥伦比亚大学" title="哥伦比亚大学">
								<h3>TOP3</h3>
								<span>哥伦比亚大学</span>
								<p>Columbia University</p>
								<a  href="javascript:;" onclick="go()">申请条件&gt;</a>
							</div>
							<div class="b fl">
								<img src="/static/home/img/page/benke_sqtj/school11.png" alt="麻省理工学院" title="麻省理工学院">
								<h3>TOP3</h3>
								<span>麻省理工学院</span>
								<p>Massachusetts Institute of Technology</p>
								<a  href="javascript:;" onclick="go()">申请条件&gt;</a>
							</div>
							<div class="b fl">
								<img src="/static/home/img/page/benke_sqtj/school9.png" alt="芝加哥大学" title="芝加哥大学">
								<h3>TOP3</h3>
								<span>芝加哥大学</span>
								<p>University of Chicago</p>
								<a  href="javascript:;" onclick="go()">申请条件&gt;</a>
							</div>
							<div class="b fl">
								<img src="/static/home/img/page/benke_sqtj/school3.jpg" alt="耶鲁大学" title="耶鲁大学">
								<h3>TOP3</h3>
								<span>耶鲁大学</span>
								<p>Yale University</p>
								<a  href="javascript:;" onclick="go()">申请条件&gt;</a>
							</div>
							<div class="b fl">
								<img src="/static/home/img/page/benke_sqtj/school10.png" alt="斯坦福大学" title="斯坦福大学">
								<h3>TOP7</h3>
								<span>斯坦福大学</span>
								<p>Stanford University</p>
								<a  href="javascript:;" onclick="go()">申请条件&gt;</a>
							</div>
							<div class="b fl">
								<img src="/static/home/img/page/benke_sqtj/school12.png" alt="杜克大学" title="杜克大学">
								<h3>TOP8</h3>
								<span>杜克大学</span>
								<p>Duke University</p>
								<a  href="javascript:;" onclick="go()">申请条件&gt;</a>
							</div>
						</div>
						<div class="anniu">
							<a  href="javascript:;" onclick="go()">查看更多院校排名</a>
							<a  href="javascript:;" onclick="go()" class="a1">私人订制申请方案</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 强大的国内外导师团队 -->
		<div class="daoshi_team tj_index">
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
		
		<!-- 申请美国本科精彩案例 -->
		<div class="jingcai_anli tj_index">
			<div class="gWidth1170">
				<h3 class="title">申请美国本科精彩案例</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="box fl">
						<h3>P同学</h3>
						<p><b>录取学校：</b>埃默里大学</p>
						<p><b>TOEFL成绩：</b>105</p>
						<p><b>SAT成绩：</b>1460</p>
						<h4>顾问点评：</h4>
						<span class="qfr1">这是我给P同学定校的时候讲述的第一个有趣的故事——在Emory的学校中喝百事可乐就是不爱校!所以别喝除了可口可乐 以外的汽水。当然了，这是也戏谑，也是开启学生兴趣的源头。Emory不会考察你是否真的喝了百事，她和其她的排名前20的美国高校看重的是什么呢?</span>
						<a  href="/success/103.html" target="_blank">查看详情&gt;</a>
					</div>
					<div class="box fl">
						<h3>D同学</h3>
						<p><b>录取学校：</b>加州艺术学院</p>
						<p><b>TOEFL成绩：</b>102</p>
						<p><b>SAT成绩：</b>1470</p>
						<h4>顾问点评：</h4>
						<span class="qfr1">D同学有非常多的作品集，高中时就热爱摄影且拍摄角度新奇、眼光独到。在老师的帮助下用文书将自己的优势最大化，让招生官老师看到这个孩子独特的艺术潜力。</span>
						<a  href="/success/98.html" target="_blank">查看详情&gt;</a>
					</div>
					<div class="box fl">
						<h3>R同学</h3>
						<p><b>录取学校：</b>耶鲁大学</p>
						<p><b>TOEFL成绩：</b>113</p>
						<p><b>GPA：</b>3.92</p>
						<h4>顾问点评：</h4>
						<span class="qfr1">学生软性背景较差，需提高。这是个高端案例，申请的时候要拿捏准藤校的招生偏好。但是，好在学生自身比较自觉，目的性比较强，且性格活泼乐观，很配合我们的工作，各种信息反馈也很及时。</span>
						<a  href="/success/92.html" target="_blank">查看详情&gt;</a>
					</div>
					<div class="box box1 fl">
						<h3>张同学</h3>
						<p><b>就读学校：</b>北京邮电大学</p>
						<p><b>转入学校：</b>康奈尔大学</p>
						<p><b>学校类型：</b>综合性大学</p>
						<p><b>标化成绩：</b>TOEFL 110，GPA 3.7</p>
						<a  href="javascript:;" onclick="go()">查看详情&gt;</a>
					</div>
					<div class="box box1 fl">
						<h3>夏同学</h3>
						<p><b>就读学校：</b>帕洛玛学院</p>
						<p><b>转入学校：</b>芝加哥大学</p>
						<p><b>学校类型：</b>综合性大学</p>
						<p><b>标化成绩：</b>TOEFL 105，SAT 1380，GPA 3.7</p>
						<a  href="javascript:;" onclick="go()">查看详情&gt;</a>
					</div>
					<div class="box box1 fl">
						<h3>樊同学</h3>
						<p><b>就读学校：</b>贝尔维社区大学</p>
						<p><b>转入学校：</b>密歇根大学安娜堡分校</p>
						<p><b>学校类型：</b>综合性大学</p>
						<p><b>标化成绩：</b>TOEFL 105，GPA 3.8</p>
						<a  href="javascript:;" onclick="go()">查看详情&gt;</a>
					</div>
				</div>
				<div class="anniu">
					<a  href="javascript:;" onclick="go()">点击查看更多案例</a>
					<a  href="javascript:;" onclick="go()" class="a1">我要申请美国本科</a>
				</div>
			</div>
		</div>
		
		<!-- 选择正确的背景提升 距离名校更近一步 -->
		<div class="bjts tj_index">
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
								<a target="_blank" href="/mxky/272.html">查看详情</a>
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
									<a target="_blank" href="/xsjs/327.html">查看详情</a>
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
									<a target="_blank" href="/xxsy/331.html">查看详情</a>
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
									<a target="_blank" href="/mqsx/294.html">查看详情</a>
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
									<a target="_blank" href="/gjyg/318.html">查看详情</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="anniu">
					<a target="_blank" href="/page/polymerization.html">了解更多背景提升项目</a>
					<a  href="javascript:;" onclick="go()" class="a1">点击匹配背景提升活动</a>
				</div>
			</div>
		</div>
		
		<!-- 美国本科留学费用全解析 -->
		<div class="feiyong_jiexi tj_index">
			<div class="gWidth1170">
				<h3 class="title">美国本科留学费用全解析</h3>
				<!-- 美国不同类型大学费用不同 -->
				<div class="feiyong_butong">
					<h3 class="title">美国不同类型大学费用不同</h3>
					<div class="content clearfix">
						<div class="box fl">
							<h3>公立大学</h3>
							<p>学费：约$25000~$45000/年</p>
							<p>奖学金：约$10000-$50000/年</p>
						</div>
						<div class="box box2 fl">
							<h3>私立大学</h3>
							<p>学费：约$15000~$30000/年</p>
							<p>奖学金：约6000$-$40000/年</p>
						</div>
						<div class="box box3 fl">
							<h3>美国文理学院</h3>
							<p>学费：约$25000~$45000/年</p>
							<p>奖学金：约$10000-$50000/年</p>
						</div>
						<div class="box box4 fl">
							<h3>美国社区大学</h3>
							<p>学费：约$9000~$18000/年</p>
							<p>奖学金：约$3000-$10000/年</p>
						</div>
					</div>
					<div class="anniu">
						<a  href="javascript:;" onclick="go()">匹配美国本科院校</a>
						<a target="_blank" href="/page/collegejxj.html" class="a1">如何获得奖学金</a>
					</div>
				</div>
				<!-- 美国城市生活费用不同 -->
				<div class="shenghuof_butong">
					<h3 class="title">美国城市生活费用不同</h3>
					<div class="content clearfix">
						<div class="box fl">
							<div class="boxTop">美国特大城市</div>
							<p><b>代表城市：</b>纽约、洛杉矶、迈阿密、芝加哥、华盛顿首府等城市</p>
							<p><b>生活费用：</b>约$1000-2000/月</p>
						</div>
						<div class="box box2 fl">
							<div class="boxTop">美国大城市</div>
							<p><b>代表城市：</b>匹兹堡、西雅图、达拉斯、亚特兰大等城市</p>
							<p><b>生活费用：</b>约$800-1000/月</p>
						</div>
						<div class="box box3 fl">
							<div class="boxTop">美国三级城市</div>
							<p><b>代表城市：</b>美国南部、中西部、东南部州、德州、康州等一些地区</p>
							<p><b>生活费用：</b>约$600-800/月</p>
						</div>
						<div class="box box4 fl">
							<div class="boxTop">美国四级城市</div>
							<p><b>代表城市：</b>俄克拉荷马州、密苏里州、路易斯安那州等地区/p>
							<p><b>生活费用：</b>约$450-600/月</p>
						</div>
					</div>
					<a  href="javascript:;" onclick="go()">中美消费大对比</a>
				</div>
			</div>
		</div>
		
		<!-- 彬彬教育致力让每一个学生牵手世界名校 -->
		<div id="mydiv" class="tj_index" style="height: 695px;">
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
			$gkLength = $('.tj_index').length;
			window.onscroll = function () {
				var top = document.documentElement.scrollTop || document.body.scrollTop;
				if(top>=nav){
					$('.bannerNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999'});
					$('.navHidden').css({'display': 'block'});
				}else if(top<=$('.tj_index').eq(0).offset().top){
					$('.bannerNav').css({'position': 'static', 'top':''});
					$('.navHidden').css({'display': 'none'});
				}
				for( var i=0; i<$gkLength; i++ ){
					if( i == $gkLength - 1 ){
						if( top>=$('.tj_index').eq(i).offset().top ){
							$('.bannerNav span').removeClass('active');
							$('.bannerNav span').eq(i).addClass('active');
						}
						return;
					}
					if( top>=$('.tj_index').eq(i).offset().top - 200 && top<$('.tj_index').eq(i+1).offset().top - 200 ){
						$('.bannerNav span').removeClass('active');
						$('.bannerNav span').eq(i).addClass('active');
					}
				}
			}
			$('.bannerNav span').on('click', function () {
				var index = $('.bannerNav span').index($(this));
				var offsetTop = $('.tj_index').eq(index).offset().top;
				$('body, html').stop().animate({scrollTop: offsetTop + 0}, 1500);
			})
			$('.bannerNav span:last-child').css({'margin-right': '0'});
			// 
			var options = {
			  useEasing: true, 
			  useGrouping: true, 
			  separator: '', 
			  decimal: '.', 
			};
			var num1 = new CountUp("i1", 0, 40, 0, 1.5, options);
			var num2 = new CountUp("i2", 0, 100, 0, 1.5, options);
			var num3 = new CountUp("i3", 0, 100, 0, 1.5, options);
			var num4 = new CountUp("i4", 0, 700, 0, 1.5, options);
			var num5 = new CountUp("i5", 0, 4000, 0, 1.5, options);
			$(window).scroll(function () {
				if( $(window).scrollTop() + 500 >= $('.zhilang_daxue').offset().top ){
					num1.start();
					num2.start();
					num3.start();
					num4.start();
					num5.start();
					$('.zhilang_daxue .content .box .bBox>div.adly em').stop().animate({'width': '16px'}, 1500);
					$('.zhilang_daxue .content .box .bBox>div.jnd em').stop().animate({'width': '37px'}, 1500);
					$('.zhilang_daxue .content .box .bBox>div.yg em').stop().animate({'width': '37px'}, 1500);
					$('.zhilang_daxue .content .box .bBox>div.rb em').stop().animate({'width': '106px'}, 1500);
					$('.zhilang_daxue .content .box .bBox>div.mg em').stop().animate({'width': '191px'}, 1500);
				}
			})
			// 
			$('.zhilang_daxue .content .box2:last-child').css({'margin-right': '0'});
			$('.zhilang_daxue .content .box2:last-child .bBox ul li').css({'line-height': '24px', 'margin-bottom': '30px'});
			// 
			$('.tiaojian .content .ctitle span:last-child').css({'margin-right': '0'});
			$('.tiaojian .a').eq(0).css({'display': 'block'});
			$('.tiaojian .content .cbox').eq(0).css({'display': 'block'});
			$('.tiaojian .content .ctitle span').on('click', function () {
				var index = $('.tiaojian .content .ctitle span').index($(this));
				$(this).addClass('active').siblings('span').removeClass('active');
				$('.tiaojian .a').css({'display': 'none'});
				$('.tiaojian .content .cbox').css({'display': 'none'});
				$('.tiaojian .a').eq(index).stop().fadeIn();
				$('.tiaojian .content .cbox').eq(index).fadeIn();
			})
			$('.guihua .content .box:last-child').css({'margin-right': '0'});
			$(".guihua .content .box").on("mouseenter mouseleave", function(e) {
				var w = $(this).width();
				var h = $(this).height();
				var x = (e.pageX - this.offsetLeft - (w / 2)) * (w > h ? (h / w) : 1);
				var y = (e.pageY - this.offsetTop - (h / 2)) * (h > w ? (w / h) : 1);
				var direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180) / 90) + 3) % 4;
				var eventType = e.type;
				var dirName = new Array('上方','右侧','下方','左侧');
				var that = $(this);
				var index = $('.guihua .content .box').index($(this));
				if(e.type == 'mouseenter'){
					that.children('.hidden').css({'display': 'block'});
					if( direction == 0 ){
						that.children('.hidden').css({'top': -h + 'px', 'left': '0'});
						that.children('.hidden').stop().animate({'top': '0'});
						$('.guihua .content .box>.o').eq(index).stop().animate({'top': h + 'px'});
					}else if( direction == 1 ) {
						that.children('.hidden').css({'top': '0', 'left': w + 'px'});
						that.children('.hidden').stop().animate({'left': '0'});
						$('.guihua .content .box>.o').eq(index).stop().animate({'left': -w + 'px'});
					}else if( direction == 2 ) {
						that.children('.hidden').css({'top': h + 'px', 'left': '0'});
						that.children('.hidden').stop().animate({'top': '0'});
						$('.guihua .content .box>.o').eq(index).stop().animate({'top': -h + 'px'});
					}else if( direction == 3 ) {
						that.children('.hidden').css({'top': '0', 'left': -w + 'px'});
						that.children('.hidden').stop().animate({'left': '0'});
						$('.guihua .content .box>.o').eq(index).stop().animate({'left': w + 'px'});
					}
				}else{
					if( direction == 0 ){
						that.children('.hidden').stop().animate({'top': -h + 'px'});
						$('.guihua .content .box>.o').eq(index).css({'top': h + 'px', 'left': '0'});
						$('.guihua .content .box>.o').eq(index).stop().animate({'top': 0});
					}else if( direction == 1 ) {
						that.children('.hidden').stop().animate({'left': w + 'px'});
						$('.guihua .content .box>.o').eq(index).css({'top': 0, 'left': -w + 'px'});
						$('.guihua .content .box>.o').eq(index).stop().animate({'left': 0});
					}else if( direction == 2 ) {
						that.children('.hidden').stop().animate({'top': h + 'px'});
						$('.guihua .content .box>.o').eq(index).css({'top': -h + 'px', 'left': 0});
						$('.guihua .content .box>.o').eq(index).stop().animate({'top': 0});
					}else if( direction == 3 ) {
						that.children('.hidden').stop().animate({'left': -w + 'px'});
						$('.guihua .content .box>.o').eq(index).css({'top': 0, 'left': w + 'px'});
						$('.guihua .content .box>.o').eq(index).stop().animate({'left': 0});
					}
				}
			});
			// 
			var boxIndex = $('.liucheng_fuwu .content .box');
			var spanIndex = $('.liucheng_fuwu .content .xian span');
			for( var i=0; i<boxIndex.length; i++ ){
				if( i%2 != 0 ){
					$('.liucheng_fuwu .content .box').eq(i).css({
						'top': '178px',
						'left': (i * 130) + 'px'
					})
				}else{
					$('.liucheng_fuwu .content .box').eq(i).css({
						'bottom': '178px',
						'left': (i * 130) + 'px'
					})
				}
			}
			$('.liucheng_fuwu .content .box:nth-child(2n)>span').css({
				'top': '-14px',
				'border-color': 'transparent transparent #E1E5F9 transparent'
			})
			$(window).scroll(function () {
				if( $(window).scrollTop()>=$('.liucheng_fuwu').offset().top - 500 ){
					spanIndex.fadeIn(500);
					for(var i=0; i<spanIndex.length; i++){
						spanIndex.eq(i).animate({'left': 130*i + 'px'}, 2000);
					}
				}
			})
			// 
			$('.daxue_tuijian .content .tjTitle span:last-child').css({'margin-right': '0'});
			$('.daxue_tuijian .content .box').eq(0).css({'display': 'block'});
			$('.daxue_tuijian .content .tjTitle span').on('click', function () {
				var index = $('.daxue_tuijian .content .tjTitle span').index($(this));
				$(this).addClass('active').siblings('span').removeClass('active');
				$('.daxue_tuijian .content .box').eq(index).stop().fadeIn().siblings('.box').css({'display': 'none'});
			})
			// 
			$('.daxue_tuijian .content .box div .b:nth-child(4n)').css({'margin-right': '0'});
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
			// 字数限制 第一个参数传入的为一个jquery对象， 第二个参数为要限制的字数
			function LimitNumber(txt,num) {
				var str = txt.text();
				if( str.length <= num ){
					return;
				}
				str = str.substr(0,num) + '...' ;
				txt.text(str);
			}
			var text = $('.qfr1');
			for(var i=0; i<text.length; i++){
				LimitNumber(text.eq(i),60);
			}
			$('.jingcai_anli .content .box:nth-child(3n)').css({'margin-right': '0'});
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
			$('.shenghuof_butong .content .box>p:nth-child(2)').css({'margin-top': '28px'});
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
