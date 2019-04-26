<?php /*a:6:{s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\middle_school.html";i:1554884364;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1553677718;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1553062603;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1555494636;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1555494636;s:86:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_highSchool.html";i:1555038639;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/middle_school.css">
		
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
		<div class="phoneR fr" style="cursor:pointer;">
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
		<div class="topBanner">
			<div class="gWidth1170">
				<div class="box">
					<h1>美国初中留学攻略</h1>
					<p>彬彬导师为您出谋划策  助您圆梦海外名校</p>
					<a href="javascript:;" onclick="go()">我要留学</a>
				</div>
			</div>
		</div>
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170 clearfix">
				<span class="active">适合人群</span>
				<span>申请方案</span>
				<span>申请流程</span>
				<span>留学费用</span>
				<span>面试TIPS</span>
				<span>名校推荐</span>
				<span>背景提升</span>
				<span>海外服务</span>
				<span>彬彬优势</span>
			</div>
		</div>
		<div class="hnav" style="height: 60px; display: none;"></div>
		
		<!-- 哪些学生适合到美国读初中？ -->
		<div class="what qb_index gWidth1170">
			<!-- title -->
			<div class="title clearfix">
				<span class="spanl"><em></em></span>
				<h3>哪些学生适合到美国读初中?</h3>
				<span class="spanr"><em></em></span>
			</div>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<div class="poa1">性格开朗，适应能力强</div>
					<div class="poa2">
						<h4>性格开朗，适应能力强</h4>
						<p>性格开朗的学生更容易适应新环境，能够快速融入到美国初中的学习、生活中，并能快速交到好朋友，健康并快乐的在美国成长。</p>
						<a href="javascript:;" onclick="go()">免费评估适应力</a>
					</div>
				</div>
				<div class="box box2 fl">
					<div class="poa1">创造力强，有个性</div>
					<div class="poa2">
						<h4>创造力强，有个性</h4>
						<p>创造力强的孩子有点调皮，有喜好、有想法，在国内可能不够优秀，但在美国会被认为是非常有潜力的，易获得自信并在喜欢的领域中创造非凡成就。</p>
						<a href="javascript:;" onclick="go()">科学匹配最佳中学</a>
					</div>
				</div>
				<div class="box box3 fl">
					<div class="poa1">英语好，口语赞</div>
					<div class="poa2">
						<h4>英语好，口语赞</h4>
						<p>沟通是美国留学重要前提，去美国读中学需要具备良好的英语沟通能力，才能快速适应美国学习及生活。</p>
						<a href="javascript:;" onclick="go()">快速提升英语能力</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国初中申请方案 -->
		<div class="sq_fangan qb_index">
			<div class="gWidth1170">
				<!-- title -->
				<div class="title clearfix">
					<span class="spanl"><em></em></span>
					<h3>美国初中申请方案</h3>
					<span class="spanr"><em></em></span>
				</div>
				<!-- content -->
				<div class="content clearfix">
					<div class="box fl">
						<h4>小学六年级</h4>
						<span></span>
						<b>可申请美国6/7年级</b>
						<p>（相当于中国6年级/初一）</p>
						<p>提供小托福，建议提供SSAT成绩</p>
					</div>
					<div class="box fl">
						<h4>初一在读</h4>
						<span></span>
						<b>可申请美国7/8年级</b>
						<p>（相当于中国初一/初二）</p>
						<p>提供小托福，建议提供SSAT成绩</p>
					</div>
					<div class="box fl">
						<h4>初二在读</h4>
						<span></span>
						<b>可申请美国8/9年级</b>
						<p>（相当于中国初二/初三）</p>
						<p>提供小托福，建议提供SSAT成绩</p>
					</div>
				</div>
				<a href="javascript:;" onclick="go()">免费定制专属留学方案</a>
			</div>
		</div>
		
		<!-- 美国初中申请流程 -->
		<div class="sq_liucheng qb_index gWidth1170">
			<!-- title -->
			<div class="title clearfix">
				<span class="spanl"><em></em></span>
				<h3>美国初中申请流程</h3>
				<span class="spanr"><em></em></span>
			</div>
			<!-- content -->
			<div class="content clearfix">
				<div class="fl">
					<h4>美国初中申请材料</h4>
					<span></span>
					<ul>
						<li>成绩单</li>
						<li>推荐信</li>
						<li>标准化考试成绩</li>
						<li>学校申请表</li>
						<li>学校申请费</li>
						<li>银行存款证明</li>
						<li>其他有利于申请的文件</li>
					</ul>
					<a href="javascript:;" onclick="go()">需要准备哪些考试</a>
				</div>
				<div class="fr">
					<div class="tone clearfix">
						<span>留学咨询</span><img src="/static/home/img/page/7_8/jiantou3.png" alt="">
						<span>确定方案</span><img src="/static/home/img/page/7_8/jiantou3.png" alt="">
						<span>提交申请</span><img src="/static/home/img/page/7_8/jiantou3.png" alt="">
						<span>面试</span>
					</div>
					<div class="ttwo clearfix">
						<b>锁定4-10所目标学校，根据学校要求准备语言考试、标准化考试</b><img src="/static/home/img/page/7_8/jiantou2.png" alt="">
					</div>
					<div class="tthree clearfix">
						<span class="fr">获得offer</span><img class="fr" src="/static/home/img/page/7_8/jiantou1.png" alt="">
						<span class="fr">签证办理</span><img class="fr" src="/static/home/img/page/7_8/jiantou1.png" alt="">
						<span class="fr">行前指导</span><img class="fr" src="/static/home/img/page/7_8/jiantou1.png" alt="">
						<span class="fr">入学</span>
					</div>
					<a href="javascript:;" onclick="go()">咨询申请详情</a>
				</div>
			</div>
		</div>
		
		<!-- 美国初中留学费用 -->
		<div class="Cost gWidth1170 qb_index">
			<!-- title -->
			<div class="title clearfix">
				<span class="spanl"><em></em></span>
				<h3>美国初中留学费用</h3>
				<span class="spanr"><em></em></span>
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
							<p style="width: 270px;">走读中学：每年约45,000-75,000美元<br />寄宿中学：每年约45,000-80,000美元</p>
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
							<p>一般每年约2万美元，纽约、波士顿、旧金山等大城市生活费用会相对高一些。（地区不同生活费用有所不同）</p>
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
		
		<!-- 美国初中招生官推荐面试TIPS -->
		<div class="tips qb_index">
			<div class="gWidth1170">
				<!-- title -->
				<div class="title clearfix">
					<span class="spanl"><em></em></span>
					<h3>美国初中招生官推荐面试TIPS</h3>
					<span class="spanr"><em></em></span>
				</div>
				<!-- content -->
				<div class="content clearfix">
					<div class="fl">
						<h4>掌握面试技巧</h4>
						<div class="clearfix">
							<div class="box fl">
								<img src="/static/home/img/page/7_8/750aff9edd84d6bacd2664bd9b7c5e9.png" alt="了解学校的教学理念和教学特点" title="了解学校的教学理念和教学特点">
								<p>了解学校的教学理念和教学特点</p>
							</div>
							<div class="box fl">
								<img src="/static/home/img/page/7_8/171209.png" alt="突出自己最大的优势" title="突出自己最大的优势">
								<p>突出自己最大的优势</p>
							</div>
							<div class="box fl">
								<img src="/static/home/img/page/7_8/22781388045053.png" alt="表达个人的自信和坦率" title="表达个人的自信和坦率">
								<p>表达个人的自信和坦率</p>
							</div>
							<div class="box fl">
								<img src="/static/home/img/page/7_8/3946b2435db44089bce45a48576c5300_th.png" alt="需要注意的细节和礼节" title="需要注意的细节和礼节">
								<p>需要注意的细节和礼节</p>
							</div>
						</div>
						<a href="javascript:;" onclick="go()">掌握更多技巧</a>
					</div>
					<div class="fr">
						<h4>面试常见问题</h4>
						<ul>
							<li>
								<a href="javascript:;" onclick="go()"><span></span>你最近关注的事件</a><a href="javascript:;" onclick="go()"><span></span>你最喜欢的书</a>
							</li>
							<li>
								<a href="javascript:;" onclick="go()"><span></span>你的爱好</a><a href="javascript:;" onclick="go()"><span></span>你喜欢我们学校什么东西</a>
							</li>
							<li>
								<a href="javascript:;" onclick="go()"><span></span>你的目标</a><a href="javascript:;" onclick="go()"><span></span>你最喜欢以及最不喜欢的课程</a>
							</li>
							<li>
								<a href="javascript:;" onclick="go()"><span></span>谁是你的模范</a><a href="javascript:;" onclick="go()"><span></span>你为什么非常适合这个学校</a>
							</li>
							<li class="li2">
								<a href="javascript:;" onclick="go()"><span></span>你曾经和某位老师或者其他学生有过冲突吗</a>
							</li>
							<li class="li2">
								<a href="javascript:;" onclick="go()"><span></span>你的教育中最重要的部分是什么</a>
							</li>
						</ul>
						<a href="javascript:;" onclick="go()">更多面试问题</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国初中名校推荐 -->
		<div class="mingxiao_tuijian qb_index gWidth1170">
			<!-- title -->
			<div class="title clearfix">
				<span class="spanl"><em></em></span>
				<h3>美国初中名校推荐</h3>
				<span class="spanr"><em></em></span>
			</div>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<img src="/static/home/img/page/7_8/school1.png" alt="卡迪根山中学" title="卡迪根山中学">
					<div class="poa">
						<h4>卡迪根山中学</h4>
						<p>Cardigan Mountain School</p>
						<ul>
							<li>学校位置：Canaan/NH</li>
							<li>建校时间：1945</li>
							<li>班级人数：13</li>
							<li>师生比率：1:4</li>
						</ul>
						<a href="javascript:;" onclick="go()">申请详情</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/7_8/school2.png" alt="鹰溪中学" title="鹰溪中学">
					<div class="poa">
						<h4>鹰溪中学</h4>
						<p>Eaglebrook School</p>
						<ul>
							<li>学校位置：Deerfield/MA</li>
							<li>建校时间：1922</li>
							<li>班级人数：10</li>
							<li>师生比率：1:5</li>
						</ul>
						<a href="javascript:;" onclick="go()">申请详情</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/7_8/school3.png" alt="菲尔中学" title="菲尔中学">
					<div class="poa">
						<h4>菲尔中学</h4>
						<p>The Fay School</p>
						<ul>
							<li>学校位置：Southborough/MA</li>
							<li>建校时间：1866</li>
							<li>班级人数：12</li>
							<li>师生比率：1:8</li>
						</ul>
						<a href="javascript:;" onclick="go()">申请详情</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/7_8/school4.png" alt="印第安山中学" title="印第安山中学">
					<div class="poa">
						<h4>印第安山中学</h4>
						<p>Indian Mountain School</p>
						<ul>
							<li>学校位置：Lakeville/CT</li>
							<li>建校时间：1922</li>
							<li>班级人数：10</li>
							<li>师生比率：1:4</li>
						</ul>
						<a href="javascript:;" onclick="go()">申请详情</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/7_8/school5.png" alt="希尔赛德中学" title="希尔赛德中学">
					<div class="poa">
						<h4>希尔赛德中学</h4>
						<p>Hillside School</p>
						<ul>
							<li>学校位置：Marlborough/MA</li>
							<li>建校时间：1901</li>
							<li>班级人数：10</li>
							<li>师生比率：1:7</li>
						</ul>
						<a href="javascript:;" onclick="go()">申请详情</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/7_8/school6.png" alt="北郡中学" title="北郡中学">
					<div class="poa">
						<h4>北郡中学</h4>
						<p>North Country School</p>
						<ul>
							<li>学校位置：Lake Placid/NY</li>
							<li>建校时间：1938</li>
							<li>班级人数：12</li>
							<li>师生比率：1:3</li>
						</ul>
						<a href="javascript:;" onclick="go()">申请详情</a>
					</div>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">查看更多名校推荐</a>
		</div>
		
		<!-- 参加背景提升课程 提高美国名校录取几率 -->
		<div class="qb_index bjts_kc gWidth1170">
			<!-- title -->
			<div class="title clearfix">
				<span class="spanl"><em></em></span>
				<h3>参加背景提升课程 提高美国名校录取几率</h3>
				<span class="spanr"><em></em></span>
			</div>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<div class="img">插班</div>
					<div class="c">
						<p>插班是指中国学生利用不同国家学校放假和开学的时间差，赴国外走进当地的学校，进行短期学习，深度体验国外的课堂，感受多元文化。</p>
						<a href="javascript:;" onclick="go()">规划专属方案</a>	
					</div>
				</div>
				<div class="box fl">
					<div class="img img2">访校</div>
					<div class="c">
						<p>深度走访美国精英学校，体验美国特色课程，全面了解美国文化，埋下梦想的种子，提升跨文化交流的能力。</p>
						<a href="javascript:;" onclick="go()">点击开启访校之旅</a>	
					</div>
				</div>
				<div class="box fl">
					<div class="img img3">夏令营</div>
					<div class="c">
						<p>夏令营可以带领孩子们全真体验世界著名学府，拓宽国际视野，丰富人生阅历，增强主动性，培养个性以及国际化、多元化的文化理念和思维习惯。</p>
						<a href="javascript:;" onclick="go()">私人订制路线</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 彬彬海外独家特色服务 -->
		<div class="tese_fuwu qb_index">
			<div class="gWidth1170">
				<div class="title clearfix">
					<span class="spanl"><em></em></span>
					<h3>彬彬海外独家特色服务</h3>
					<span class="spanr"><em></em></span>
				</div>
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
		<div id="mydiv" class="qb_index" style="height: 695px;">
			<div class="box gWidth1170 clearfix">
				<!-- title -->
				<div class="title clearfix">
					<span class="spanl"><em></em></span>
					<h3>彬彬教育致力让每一个学生牵手世界名校</h3>
					<span class="spanr"><em></em></span>
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
				<a href="/"><img src="/static/home/img/home/logodi.png" alt="美国留学_专业的美国留学服务中介机构_彬彬教育" title="美国留学_专业的美国留学服务中介机构_彬彬教育"></a>
				<div class="clearfix">
					<img src="/static/home/img/home/dingwei.png" class="fl" alt="">
					<p class="fl">北京市朝阳区呼家楼京广中心商务楼10层</p>
				</div>
				<p class="fl ph" style="cursor:pointer;"><img src="/static/home/img/home/dianhua.png" class="fl" alt="">400-900-9770</p>
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
	.hid,.hid2{width: 148px;height: 140px;border-radius: 3px;background-color: #000000;background-color: rgba(0,0,0,0.4);position: fixed;left: 0;top: 436px;z-index: 99999;display: none;text-align: center;}
	.hid2{ width: 248px;height: 140px;left: 50%;top: 50%;display: none;margin-left: -124px;margin-top: -70px;background-color: rgba(0,0,0,0.6); }
	.hid h2,.hid2 h2{text-align: center;font-size: 16px;color: #FFFFFF;font-weight: normal;margin-top: 16px;}
	.hid p,.hid2 p{font-size: 16px;color: #FFFFFF;margin-bottom: 10px;}
	.hid input,.hid2 input{width: 120px;height: 24px;background-color: #FFFFFF;display: block;margin: 0 auto;font-size: 12px;text-indent: 6px;line-height: 24px;border-radius: 2px;margin-bottom: 8px;}
	.hid button,.hid2 button{width: 120px;height: 24px;background-color: #000000;color: #FFFFFF;font-size: 12px;line-height: 24px;border-radius: 2px;display: block;margin: 0 auto;cursor:pointer;border: none;}
	.hid>img,.hid2>img{width: 8px;height: 8px;position: absolute;right: 8px;top: 8px;cursor:pointer;}
	.hid .bbqwer,.hid2 .bbqwer{width: 306px;height: auto;background: #f5f5f5;line-height: 15px;padding: 17px 0;border: none;text-align: left;position: absolute;left: 165px;top: 10px;display: none;}
	.hid2 .bbqwer{ left: 265px; }
	.hid .bbqwer span,.hid2 .bbqwer span{font-size: 12px;color: #ff7062;display: block;    width: 255px;margin: 0 auto;text-align: left;}
	.hid .bbqwer p,.hid2 .bbqwer p{width: 255px;margin: 0 auto;margin-top: 10px;font-size: 12px;color: #ff7062;}
	.hid .bbqwer em,.hid2 .bbqwer em{width: 0;height: 0;display: block;border-style: solid;border-color: transparent #f5f5f5 transparent transparent;border-width: 10px;position: absolute;left: -20px;bottom: 10px;}
	.hid .bbqwer>b,.hid2 .bbqwer>b{font-size: 12px;line-height: 1.2em;height: 12px;right: 5px;top: 5px;font-weight: 700;font-family: 宋体;cursor: pointer; position: absolute; color: #000;}
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

<div class="hid2">
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
	$('.phoneR').on('click', function () {
		$('.hid2').stop().fadeIn();
	})
	$('.ph').on('click', function () {
		$('.hid2').stop().fadeIn();
	})
	$('.hid2>img').on('click', function () {
		$('.hid2').stop().fadeOut();
	})
	var LeftVal = '';
	$('.hid2 input').focus(function () {
		if($(this).attr('placeholder')){
			LeftVal = $(this).attr('placeholder');
		}
		$(this).removeAttr('placeholder');
		$('.hid2 .bbqwer').stop().fadeIn();
	})
	$('.hid2 input').blur(function () {
		if(LeftVal){
			$(this).attr('placeholder', LeftVal);
		}
		$('.hid2 .bbqwer').stop().fadeOut();
	})
	$('.hid2 .bbqwer>b').on('click', function () {
		$('.hid2 .bbqwer').stop().fadeOut();
	})
	$('.hid2 button').on('click', function () {
		var Phone = $('.hid2 .phone').val();
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
				$('.hid2 .phone').val('');
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
			$gkLength = $('.qb_index').length;
			window.onscroll = function () {
				var top = document.documentElement.scrollTop || document.body.scrollTop;
				if(top>=nav){
					$('.bannerNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999'});
					$('.hnav').css({'display': 'block'});
				}else if(top<=$('.what').offset().top){
					$('.bannerNav').css({'position': 'static', 'top':''});
					$('.hnav').css({'display': 'none'});
				}
				for( var i=0; i<$gkLength; i++ ){
					console.log(1);
					if( i == $gkLength - 1 ){
						if( top>=$('.qb_index').eq(i).offset().top ){
							$('.bannerNav span').removeClass('active');
							$('.bannerNav span').eq(i).addClass('active');
						}
						return;
					}
					if( top>=$('.qb_index').eq(i).offset().top - 200 && top<$('.qb_index').eq(i+1).offset().top ){
						$('.bannerNav span').removeClass('active');
						$('.bannerNav span').eq(i).addClass('active');
					}
				}
			}
			// 
			$('.bannerNav span').on('click', function () {
				var index = $('.bannerNav span').index($(this));
				var offsetTop = $('.qb_index').eq(index).offset().top;
				if( $('.bannerNav').css('position') !== 'fixde' ){
					$('body, html').stop().animate({scrollTop: offsetTop - 60}, 1500);
				}else{
					$('body, html').stop().animate({scrollTop: offsetTop}, 1500);
				}
			})
			// 
			$('.bannerNav span:last-child').css({'border-right': 'none'});
			//
			$('.what .content .box:last-child').css({'margin-right': '0'});
			$('.what .content .box').hover(function () {
				$(this).children('.poa1').stop().fadeOut();
				$(this).children('.poa2').stop().fadeIn();
			}, function () {
				$(this).children('.poa2').stop().fadeOut();
				$(this).children('.poa1').stop().fadeIn();				
			})
			// 
			$('.sq_fangan .box:last-child').css({'margin-right': '0'});
			// 
			$('.Cost .content .box .boxBox').hover(function (){
				$(this).children('.div1').css({'display': 'none'});
				$(this).children('.div2').css({'display': 'inline-block'});
				$(this).css({'background-color': 'rgba(3,32,58,0.5)'});
			}, function () {
				$(this).children('.div1').css({'display': 'inline-block'});
				$(this).children('.div2').css({'display': 'none'});
				$(this).css({'background-color': 'rgba(3,32,58,0.3)'});
			})
			// 
			$('.tips .content>div.fl .box:nth-child(2n)').css({'margin-right': '0'});
			// 
			$('.tips .content>div.fr ul li:last-child').css({'border-bottom': 'none'});
			// 
			$('.mingxiao_tuijian .content .box').hover(function () {
				$(this).children('.poa').stop().animate({'height': '286px'}, 500);
			}, function () {
				$(this).children('.poa').stop().animate({'height': '105px'}, 500);
			})
			$('.mingxiao_tuijian .content .box:nth-child(3n)').css({'margin-right': '0'});
			// 
			$('.bjts_kc .content .box:last-child').css({'margin-right': '0'});
			$('.tese_fuwu .content .box:nth-child(3n)').css({'margin-right': '0'});
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
			var textHtml = [
				'咨询彬彬留学专家制定留学方案、学习规划',
				'锁定4-10所目标学校，根据学校要求准备语言考试、标准化考试',
				'准备申请材料并提交申请',
				'彬彬教育留学专家进行面试辅导，准备面试',
				'跟踪申请状态，直到获得offer后，确定入读学校',
				'准备办理留学签证I-20',
				'进行彬彬教育行前指导培训',
				'顺利出国，完成美国初中留学课程'
			]
			$('.sq_liucheng .content>div.fr>div span').eq(0).addClass('active');
			$('.sq_liucheng .content>div.fr>div span').hover(function () {
				var index = $('.sq_liucheng .content>div.fr>div span').index($(this));
				$('.sq_liucheng .content>div.fr>div b').html(textHtml[index]);
				$('.sq_liucheng .content>div.fr>div span').removeClass('active');
				$(this).addClass('active');
			})
		</script>

		<!-- 高中表单 -->
		<!-- 浮动表单 -->
		<div class="formFd">
			<div class="gWidth1170">
				<h3>免费定制留学方案</h3>
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
	</body>
</html>
