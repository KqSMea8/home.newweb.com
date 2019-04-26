<?php /*a:6:{s:78:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\seniormoney.html";i:1553045963;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1551955433;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1551670345;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1553000627;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1552992994;s:86:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_highSchool.html";i:1552974318;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/seniormoney.css">
	</head>
	<style type="text/css">
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
				<h1>美国高中留学费用大揭秘</h1>
				<a href="javascript:;" onclick="go()">美国高中留学一年多少钱</a>
			</div>
		</div>
		
		<!-- 美国行前费用早知道 -->
		<div class="fy gWidth1170">
			<h3>美国行前费用早知道</h3>
			<div class="content">
				<div class="contentTop clearfix">
					<div class="box fl">
						<img src="/static/home/img/page/gaozhong_feiyong/icon1.png" alt="">
						<span></span>
						<p>考试报名费用</p>
						<div class="hidden">
							<div>
								<h4>考试报名费用</h4>
								<p>TOEFL考试：$ 268</p>
								<p>TOEFL Junior考试：$ 60</p>
								<p>Slate考试：$ 140</p>
								<p>SSAT考试：初级 $157；高级 $257</p>
								<p>SAT考试：约$100</p>
							</div>
						</div>
					</div>
					<div class="box fl">
						<img src="/static/home/img/page/gaozhong_feiyong/xuexiaocopy.png" alt="">
						<span></span>
						<p>学校申请费</p>
						<div class="hidden">
							<div>
								<h4>学校申请费</h4>
								<p>每个学校：$90-800</p>
								<p>材料邮寄：$25-35</p>
							</div>
						</div>
					</div>
					<div class="box fl">
						<img src="/static/home/img/page/gaozhong_feiyong/huzhao.png" alt="">
						<span></span>
						<p>护照签证</p>
						<div class="hidden">
							<div>
								<h4>护照签证</h4>
								<p>办理护照：RMB 200</p>
								<p>签证费：$ 200</p>
								<p>SEVIS费：$ 200</p>
							</div>
						</div>
					</div>
					<div class="box fl">
						<img src="/static/home/img/page/gaozhong_feiyong/jipiao.png" alt="">
						<span></span>
						<p>体检机票</p>
						<div class="hidden">
							<div>
								<h4>体检机票</h4>
								<p>体检：约RMB 2000</p>
								<p>机票：约RMB 6000-13000</p>
							</div>
						</div>
					</div>
				</div>
				<div class="contentBottom clearfix">
					<p><a href="javascript:;" onclick="go()"><span></span>美国高中留学总费用?</a></p>
					<p><a href="javascript:;" onclick="go()"><span></span>美国留学每年需要多少生活费?</a></p>
					<p><a href="javascript:;" onclick="go()"><span></span>留学机构的收费标准?</a></p>
					<p><a href="javascript:;" onclick="go()"><span></span>去美国应该办哪种银行卡?</a></p>
					<p><a href="javascript:;" onclick="go()"><span></span>美国各类型中学收费标准是什么?</a></p>
					<p><a href="javascript:;" onclick="go()"><span></span>去美国读高中需要准备多少保证金?</a></p>
					<span>留学美国热门话题</span>
				</div>
				<a href="javascript:;" onclick="go()">点击了解更多费用详情</a>
			</div>
		</div>
		
		<!-- 美国城市生活费用不同 -->
		<div class="difference">
			<div class="gWidth1170">
				<h3>美国城市生活费用不同</h3>
				<div class="content clearfix">
					<div class="box fl box1">
						<h4>美国特大城市</h4>
						<p class="city"><b>代表城市：</b>纽约、洛杉矶、迈阿密、芝加哥、华盛顿首府等城市</p>
						<p><b>生活费用：</b>约 $1000-2000/月</p>
					</div>
					<div class="box fl box2">
						<h4>美国大城市</h4>
						<p class="city"><b>代表城市：</b>匹兹堡、西雅图、达拉斯、亚特兰大等城市</p>
						<p><b>生活费用：</b>约 $800-1000/月</p>
					</div>
					<div class="box fl box3">
						<h4>美国三级城市</h4>
						<p class="city"><b>代表城市：</b>美国南部、中西部、东南部州、德州、康州等一些地区</p>
						<p><b>生活费用：</b>约 $600-800/月</p>
					</div>
					<div class="box fl box4">
						<h4>美国四级城市</h4>
						<p class="city"><b>代表城市：</b>俄克拉荷马州、密苏里州、路易斯安那州等地区</p>
						<p><b>生活费用：</b>约 $450-600/月</p>
					</div>
				</div>
				<a href="javascript:;" onclick="go()">中美消费大对比</a>
			</div>
		</div>
		
		<!-- 美国高中费用标准 -->
		<div class="biaozhun gWidth1170">
			<h3>美国高中费用标准</h3>
			<div class="content clearfix">
				<div class="box fl">
					<h4>私立走读中学</h4>
					<p>每学年约$ 45,000-$ 75,000</p>
					<span>（全覆盖）</span>
					<a href="javascript:;" onclick="go()">我要申请</a>
				</div>
				<div class="box fl">
					<h4>私立寄宿中学</h4>
					<p>每学年约$ 45,000-$ 80,000</p>
					<span>（全覆盖）</span>
					<a href="javascript:;" onclick="go()">我要申请</a>
				</div>
				<div class="box fl">
					<h4>艺术中学</h4>
					<p>每学年约$ 55,000-$ 85,000</p>
					<span>（全覆盖）</span>
					<a href="javascript:;" onclick="go()">我要申请</a>
				</div>
				<div class="box fl">
					<h4>蓝带中学</h4>
					<p>每学年约$ 40,000-$ 75,000</p>
					<span>（全覆盖）</span>
					<a href="javascript:;" onclick="go()">我要申请</a>
				</div>
				<div class="box fl">
					<h4>公立中学</h4>
					<p>免学费</p>
					<span></span>
					<a href="javascript:;" onclick="go()">我要申请</a>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">美国高中费用详情</a>
		</div>
		
		<!-- 高性价比美国优质中学推荐 -->
		<div class="zs_tuijian">
			<h3>高性价比美国优质中学推荐</h3>
			<div class="content gWidth1170">
				<div class="cTitle clearfix">
					<span class="active">优质走读中学推荐</span>
					<span>优质寄宿中学推荐</span>
				</div>
				<div class="cContent">
					<ul>
						<li class="clearfix tt">
							<span style="width: 322px;">学校名称</span>
							<span style="width: 122px;">地区</span>
							<span style="width: 465px;">学校优势</span>
							<span style="width: 96px;">留学费用</span>
							<span style="width: 159px;">已成功申请</span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">Saint Viator High School圣维克特高中</p></span>
							<span style="width: 122px;"><p style="text-align: center;">伊利诺伊州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">双蓝带学校；伊利诺伊州六所常春藤高中之一；STEM理工学校；苹果杰出荣誉学校。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$14353</p></span>
							<span style="width: 159px;"><div><p>189人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">Priceton Academy of the Sacred Heart<br />普林斯顿圣心学院</p></span>
							<span style="width: 122px;"><p style="text-align: center;">伊利诺伊州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">地理位置优越，靠近普林斯顿大学，治安良好，完善的教学设备，体育文艺项目众多，丰富的夏令营活动，100%升学率。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$35250</p></span>
							<span style="width: 159px;"><div><p>168人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">Hamden Hall Country Day School<br />汉姆顿学校</p></span>
							<span style="width: 122px;"><p style="text-align: center;">康涅狄格州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">康州私立学校排名第5；每年有15%毕业生进入常春藤名校。2/3以上的毕业生获得有高竞争力的大学或学院的录取，15%的12年级生荣获国家优等奖学金。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$35250</p></span>
							<span style="width: 159px;"><div><p>123人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">Rutgers Preparatory School<br />罗格斯中学</p></span>
							<span style="width: 122px;"><p style="text-align: center;">新泽西州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">学校建于1766年，是新泽西州最古老的贵族高中。师资力量强，%的教师拥有硕士及以上文凭，且多名都是来自于普林斯顿大学等常青藤名校。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$40875</p></span>
							<span style="width: 159px;"><div><p>182人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">Walsingham Academy<br />沃星汉姆学校</p></span>
							<span style="width: 122px;"><p style="text-align: center;">弗吉尼亚州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">综合教学实力强劲，多次获得美国蓝丝带奖，学校90%以上的教师都拥有硕士或博士学位，1：9的师生比例保证每位学生都能受到老师照顾，iPad教学。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$16500</p></span>
							<span style="width: 159px;"><div><p>107人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">Glenelg Country School<br />格莱内尔学校</p></span>
							<span style="width: 122px;"><p style="text-align: center;">马里兰州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">巴尔的摩地区的顶尖预备学校，教学质量盛名在外。2017年，100%的学生升入四年制大学，不仅如此，学生一共获得了730万美元的奖学金，大大减轻大学高昂费用的负担。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$33590</p></span>
							<span style="width: 159px;"><div><p>151人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">The Quarry Lane School<br />库埃里兰中学</p></span>
							<span style="width: 122px;"><p style="text-align: center;">加利福尼亚州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">80%学校教师是硕士及以上学历，毕业于MIT、普林斯顿、斯坦福等世界名校，学术竞争力强，学校高中毕业生被录取的高校几乎涵盖美国所有顶尖知名大学。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$39000</p></span>
							<span style="width: 159px;"><div><p>196人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">Bishop Verot Catholic High School<br />韦罗特主教高中</p></span>
							<span style="width: 122px;"><p style="text-align: center;">佛罗里达州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">学校创立于1962年，是佛罗里达州最优秀的私立高中之一，升学率高达99%。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$15700</p></span>
							<span style="width: 159px;"><div><p>108人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">Falmouth Academy<br />福莫斯学院</p></span>
							<span style="width: 122px;"><p style="text-align: center;">马萨诸塞州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">本校是一所小型的、学术严谨的，提供7-12年级课程的全日制学校。阅读、写作、口语技能、分析和批判性思维是学校教学中非常重视的内容。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$29995</p></span>
							<span style="width: 159px;"><div><p>130人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">Brooklyn Friends School<br />布鲁克林友谊学校</p></span>
							<span style="width: 122px;"><p style="text-align: center;">纽约州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">学校升学率100%，许多学生顺利进入常春藤名校。SAT成绩优秀分数高达1270，ACT平均分为28分，远高于全美平均水平。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$39800</p></span>
							<span style="width: 159px;"><div><p>198人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
					</ul>
				</div>
				<div class="cContent">
					<ul>
						<li class="clearfix tt">
							<span style="width: 322px;">学校名称</span>
							<span style="width: 122px;">地区</span>
							<span style="width: 465px;">学校优势</span>
							<span style="width: 96px;">留学费用</span>
							<span style="width: 159px;">已成功申请</span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">Pilgrim School<br />皮尔格雷姆学校</p></span>
							<span style="width: 122px;"><p style="text-align: center;">加利福尼亚州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">100%的升学率，学校的学生20%能进入常春藤名校，70%能被US NEWS排名前五十的大学录取。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$74900</p></span>
							<span style="width: 159px;"><div><p>103人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">The MacDuffie School<br />马克杜菲学校</p></span>
							<span style="width: 122px;"><p style="text-align: center;">马萨诸塞州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">本校拥有高级职称的教授比例是64%，且有很多教师毕业于哈佛、耶鲁、哥伦比亚、普林斯顿等世界名校。小班教学，1:7师生比，学生关注度高。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$59050</p></span>
							<span style="width: 159px;"><div><p>186人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">The White Mountain School<br />白山中学</p></span>
							<span style="width: 122px;"><p style="text-align: center;">新罕布什尔州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">学校拥有富有特色的教学设施和项目：理科教学楼用的都是可再生、可循环利用的能源，如太阳能发电，为环境保护、节能减排做出了一些贡献。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$63700</p></span>
							<span style="width: 159px;"><div><p>176人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">Idyllwild Arts Academy<br />艾迪怀德艺术学院</p></span>
							<span style="width: 122px;"><p style="text-align: center;">加利福尼亚州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">学校师资力量雄厚，艺术课程的老师都是经验丰富的专业人士，文化课程设置也达到了一流综合类大学的申请标准。学校拥有经过医学认证的专业医生和全职注册护士，24小时护理学生健康。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$67091</p></span>
							<span style="width: 159px;"><div><p>105人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">Cheshire Academy<br />柴郡中学</p></span>
							<span style="width: 122px;"><p style="text-align: center;">康涅狄格州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">美国最古老的寄宿中学之一，223年的建校历史，最早一批接收国际学生的学校，拥有悠久的文化历史底蕴与丰富的国际学生管理经验。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$61750</p></span>
							<span style="width: 159px;"><div><p>196人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">Ross School<br />罗斯中学</p></span>
							<span style="width: 122px;"><p style="text-align: center;">纽约州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">学校多次被评为全美蓝带中学，在纽约州私立学校排名10，该校教学理念先进科学，超前教育普遍，学习风气浓厚。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$74250</p></span>
							<span style="width: 159px;"><div><p>171人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">The Grier School<br />格里尔女子中学</p></span>
							<span style="width: 122px;"><p style="text-align: center;">宾夕法尼亚州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">学校创建于1853年，是宾夕法尼亚州一所非常老牌的女子寄宿学校。65%的教师拥有硕士及以上学位，毕业生获得国家级奖学金。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$54500</p></span>
							<span style="width: 159px;"><div><p>125人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">Hawaii Preparatory Academy<br />夏威夷预备学院</p></span>
							<span style="width: 122px;"><p style="text-align: center;">夏威夷州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">本校所提供的独特的课程和课外活动均根据其特殊的地理位置和气候来设置。例如海洋科学研究、海龟研究、水肺潜水证书等。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$64500</p></span>
							<span style="width: 159px;"><div><p>112人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">Marianapolis Preparatory School<br />玛丽安娜预备学校</p></span>
							<span style="width: 122px;"><p style="text-align: center;">康涅狄格州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">学校给学生提供非常细节化的升学指导，学校给学生从9年级开始就开始进行指引，将与升学有关的事件全部标出，并进行个性化的指导，开设多种升学研讨会。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$57898</p></span>
							<span style="width: 159px;"><div><p>130人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
						<li class="clearfix">
							<span style="width: 322px;"><p style="width: 176px; text-align: center; line-height: 20px;">Hoosac School<br />湖沙克中学</p></span>
							<span style="width: 122px;"><p style="text-align: center;">纽约州</p></span>
							<span style="width: 465px;"><p style="width: 413px; line-height: 20px;">教育资源丰富，55%的教师拥有硕士及以上学位，学校始终坚持小班授课，师生比例1:5，以保证对每一个学生的关心和指导。</p></span>
							<span style="width: 96px;"><p style="width: 56px;">$62700</p></span>
							<span style="width: 159px;"><div><p>100人</p><a href="javascript:;" onclick="go()">我要申请</a></div></span>
						</li>
					</ul>
				</div>
				<p><em>*</em>此报价为预估费用，每年可能会有5%-15%的浮动</p>
				<a href="javascript:;" onclick="go()">私人订制留学方案</a>
			</div>
		</div>
		
		<!-- 学长学姐告诉你 省钱也能很潇洒 -->
		<div class="xiaosa gWidth1170">
			<h3>学长学姐告诉你 省钱也能很潇洒</h3>
			<div class="content clearfix">
				<div class="box box1 fl">
					<div class="img fl">美国公交车文化</div>
					<div class="fr">
						<p>学生在学校规定范围内可以免费搭乘公共交通工具。美国的公交车也很便宜，大约1.5美金/次，外出可以省掉一大笔费用！</p>
					</div>
				</div>
				<div class="box box2 fl">
					<div class="img fl">美国大促节日</div>
					<div class="fr">
						<p>美国的电影院、健身房都有面向学生的折扣活动。学弟学妹们在逛商场和超市的时候要记得主动询问商家是否有折扣，多多留意自己的信箱里是否有优惠券，会有意想不到的惊喜哦！</p>
					</div>
				</div>
				<div class="box box3 fl">
					<div class="img fl">美国各地美食</div>
					<div class="fr">
						<p>美国餐厅的消费相对比较高，尤其是中餐，如果偶尔想要去外面吃饭的话，可以选择麦当劳的美式中餐，加州大华超市的自助盒饭价格都很亲民，省钱的同时还可以解一解对中餐的相思之苦。</p>
					</div>
				</div>
				<div class="box box4 fl">
					<div class="img fl">美国“白菜价”服装</div>
					<div class="fr">
						<p>美国衣服是较为便宜的，在一些工厂直销店和特价商店会有比较好的价格。通常在八月中或圣诞节前后是打折季。</p>
					</div>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">最佳省钱攻略看这里</a>
		</div>
		
		<!-- 彬彬教育监管服务 -->
		<div class="jianguan">
			<div class="gWidth1170">
				<h3>彬彬教育监管服务</h3>
				<div class="content clearfix">
					<div class="box fl">
						<div class="img">
							<img src="/static/home/img/page/haiwai_jianguan/fuwu1.png" alt="寄宿家庭安置全服务" title="寄宿家庭安置全服务">
							<span>寄宿家庭安置全服务</span>
						</div>
						<p>提供寄宿家庭选择；十个月食宿费用；上、下学交通；国际学生监护；免费寄宿家庭更换</p>
						<a href="/fmfml/0-1.html" target="_blank">提前预约寄宿家庭</a>
					</div>
					<div class="box fl">
						<div class="img">
							<img src="/static/home/img/page/haiwai_jianguan/fuwu2.png" alt="住宿管理" title="住宿管理">
							<span>住宿管理</span>
						</div>
						<p>7*24紧急情况协助；匹配服务团队随时沟通；协助处理出现、就医等；定期家访、校访；生活矛盾处理</p>
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
						<a  href="javascript:;" onclick="go()">更多服务了解</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 彬彬教育致力于让每个学生牵手世界名校 -->
		<div id="mydiv" class="pm_index" style="height: 695px;">
			<div class="box gWidth1170 clearfix">
				<!-- title -->
				<div class="title">
					<h3>彬彬教育致力于让每个学生牵手世界名校</h3>
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
		<!-- 粒子链接 -->
		<script type="text/javascript" src="/static/home/js/page/canvas-particle.js"></script>
		<script type="text/javascript">
			$('.fy .content .contentTop .box').hover(function () {
				$(this).children('.hidden').stop().fadeIn();
			}, function () {
				$(this).children('.hidden').stop().fadeOut();
			})
			
			$('.fy .content .contentTop .box:last-child').css({'margin-right': '0'});
			
			$('.difference .content>.box:last-child').css({'margin-right': '0'});
			
			$('.biaozhun .content .box:last-child').css({'margin-right': '0'});
			
			$('.zs_tuijian .content .cTitle span:last-child').css({'margin-right': '0'});
			
			$('.zs_tuijian .content .cContent').eq(0).css({'display': 'block'});
			$('.zs_tuijian .content .cTitle span').eq(0).addClass('active');
			$('.zs_tuijian .content .cTitle span').click(function () {
				var index = $('.zs_tuijian .content .cTitle span').index($(this));
				$(this).addClass('active').siblings('span').removeClass('active');
				$('.zs_tuijian .content .cContent').eq(index).stop().fadeIn().siblings('.cContent').css({'display': 'none'});
				if(index == 0){
					$('.zs_tuijian .content>p').html('<em>*</em>留学费用包括学费、寄宿费、餐费、管理费。此报价为预估费用，每年可能会有5%-15%的浮动');
				}else{
					$('.zs_tuijian .content>p').html('<em>*</em>费用包括学费、寄宿费、餐费。此报价为预估费用，每年可能会有5%-15%的浮动');
				}
			})
			
			$('.zs_tuijian .content .cContent ul li span:last-child').css({'border-right': 'none'});
			
			$('.zs_tuijian .content .cContent ul li:last-child').css({'border-bottom': 'none'});
			
			$('.zs_tuijian .content .cContent ul li:nth-child(even)').css({'background-color': '#F5F5F6'});
			
			$('.xiaosa .content .box:nth-child(2n)').css({'margin-right': '0'});
			
			$('.jianguan .content .box:nth-child(3n)').css({'margin-right': '0'});
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
