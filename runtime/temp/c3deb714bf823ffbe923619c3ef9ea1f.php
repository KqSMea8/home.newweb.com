<?php /*a:6:{s:85:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\university_ranking.html";i:1553743361;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1553677718;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1553062603;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1553743361;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1553743361;s:89:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_undergraduate.html";i:1553062603;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/university_ranking.css">
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
				<h1>2019 US News 美国大学最新排名</h1>
				<h2>美国留学选校 最具参加价值的榜单</h2>
				<a href="javascript:;" onclick="go()">离梦校要求你还差多少？</a>
			</div>
		</div>
		
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">排名评分体系</span>
				<span>综排TOP100</span>
				<span>名校学生特质</span>
				<span>名校申请条件</span>
				<span>文理学院TOP100</span>
				<span>商科专业排名</span>
				<span>工程学专业排名</span>
				<span>选校技巧</span>
				<span>彬彬优势</span>
			</div>
		</div>
		<div class="navHidden"></div>
		
		<!-- 2019US News美国大学排名评分体系 -->
		<div class="pingfen_tixi p_index gWidth1170">
			<h3 class="title">2019US News美国大学排名评分体系</h3>
			<div class="content clearfix">
				<div class="fl">
					<div class="div1">
						<h3>22.5%</h3>
						<span></span>
						<p>本科学术声誉</p>
					</div>
					<div class="div2">
						<p>U.S.News 排名公式给出了权重去评判学校本科的学术出色程度；每位学术或者顾问将通过调查询问学校学术项目(1至5分)；使用到排名的分数将会是采用五分评分受访者的平均数；计算平均分前U.S.News 将会消除两个最高分和两个最低分；其中15%的总权重在大学相互评价，7.5%的总权重为高中顾问的评价。</p>
					</div>
				</div>
				<div class="fr">
					<div class="box fl">
						<div class="div1">
							<h3>22.5%</h3>
							<span></span>
							<p>毕业率和留校率</p>
						</div>
						<div class="div2">
							<p>毕业率在这里指6年毕业率，占比17.6%；留校率指那些从大一新生返校的真爱粉比例，评分占4.4%。</p>
						</div>
					</div>
					<div class="box box2 fl">
						<div class="div1">
							<h3>20%</h3>
							<span></span>
							<p>师资力量</p>
						</div>
						<div class="div2">
							<p>班级规模、师生比例、教授薪资都是这项的考察标准。</p>
						</div>
					</div>
					<div class="box box3 fl">
						<div class="div1">
							<h3>10%</h3>
							<span></span>
							<p>学生被投入资金</p>
						</div>
						<div class="div2">
							<p>这里与学费无关，是校方的财政资源通过项目和服务平均到到每个学生的花费。</p>
						</div>
					</div>
					<div class="box box4 fl">
						<div class="div1">
							<h3>7.5%</h3>
							<span></span>
							<p>毕业率表现</p>
						</div>
						<div class="div2">
							<p>这项主要是对比学校实际毕业率和预估毕业率的差距，同时今年还新增了STEM专业毕业生比例，比例越高得分越高。</p>
						</div>
					</div>
					<div class="box box5 fl">
						<div class="div1">
							<h3>12.5%</h3>
							<span></span>
							<p>生源</p>
						</div>
						<div class="div2">
							<p>此项测评考虑三个方面；SAT批判性阅读，数学部分，和ACT占六成五；U.S.News 仍然考虑全美前10%的高中生进入到全国性大学或者文理学院的比例以及前四分之一的高中谁更进入到区域型大学，此项会占到两成五；学生入学率以及校方录取率会占到剩下的一成。</p>
						</div>
					</div>
					<div class="box box6 fl">
						<div class="div1">
							<h3>5%</h3>
							<span></span>
							<p>校友捐助</p>
						</div>
						<div class="div2">
							<p>这项主要考察在世校友中给学校捐赠的校友比例。</p>
						</div>
					</div>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">如何利用评分体系合理选校</a>
		</div>
		
		<!-- 2019US News美国大学综排TOP100 -->
		<div class="zongpai_100 p_index">
			<div class="gWidth1170">
				<h3 class="title">2019US News美国大学综排TOP100</h3>
				<div class="content">
					<div class="zpTitel">
						<span class="active">TOP 1-20</span>
						<span>TOP 21-40</span>
						<span>TOP 41-60</span>
						<span>TOP 61-80</span>
						<span>TOP 81-100</span>
					</div>
					<div class="zpCon">
						<div class="table1">
							<table>
								<tr><th>排名</th><th>学校名称（中文）</th><th>学校名称（英文）</th><th>学费/年</th><th>录取率</th><th>所在城市</th><th>SAT/ACT分数要求</th></tr>
							</table>
						</div>
						<div class="table2">
							<table>
								<tr><td>1</td><td>普林斯顿大学</td><td>Princeton University</td><td>$47,140 </td><td>6%</td><td>Princeton, NJ</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>2</td><td>哈佛大学</td><td>Harvard University</td><td>$50,420 </td><td>5%</td><td>Cambridge, MA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>3</td><td>哥伦比亚大学</td><td>Columbia University</td><td>$59,430 </td><td>6%</td><td>New York, NY</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>3</td><td>麻省理工学院</td><td>Massachusetts Institute of Technology</td><td>$51,832 </td><td>7%</td><td>Cambridge, MA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>3</td><td>芝加哥大学</td><td>University of Chicago</td><td>$57,006 </td><td>9%</td><td>Chicago, IL</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>3</td><td>耶鲁大学</td><td>Yale University</td><td>$53,430 </td><td>7%</td><td>New Haven, CT</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>7</td><td>斯坦福大学</td><td>Stanford University</td><td>$51,354 </td><td>5%</td><td>Stanford, CA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>8</td><td>杜克大学</td><td>Duke University</td><td>$55,960 </td><td>10%</td><td>Durham, NC</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>8</td><td>宾夕法尼亚大学</td><td>University of Pennsylvania</td><td>$55,584 </td><td>9%</td><td>Philadelphia, PA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>10</td><td>约翰霍普金斯大学</td><td>Johns Hopkins University</td><td>$53,740 </td><td>12%</td><td>Baltimore, MD</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>10</td><td>西北大学</td><td>Northwestern University</td><td>$54,567 </td><td>9%</td><td>Evanston, IL</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>12</td><td>加州理工学院</td><td>California Institute of Technology</td><td>$52,362 </td><td>8%</td><td>Pasadena, CA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>12</td><td>达特茅斯学院</td><td>Dartmouth College</td><td>$55,035 </td><td>10%</td><td>Hanover, NH</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>14</td><td>布朗大学</td><td>Brown University</td><td>$55,656 </td><td>9%</td><td>Providence, RI</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>14</td><td>范德堡大学</td><td>Vanderbilt University</td><td>$49,816 </td><td>11%</td><td>Nashville, TN</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>16</td><td>康奈尔大学</td><td>Cornell University</td><td>$55,188 </td><td>13%</td><td>Ithaca, NY</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>16</td><td>莱斯大学</td><td>Rice University</td><td>$47,350 </td><td>16%</td><td>Houston, TX</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>18</td><td>圣母大学</td><td>University of Notre Dame</td><td>$53,391 </td><td>19%</td><td>Notre Dame, IN</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>19</td><td>加州大学洛杉矶分校</td><td>University of California, Los Angeles</td><td>$41,294 </td><td>16%</td><td>Los Angeles, CA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>19</td><td>圣路易斯华盛顿大学</td><td>Washington University in St. Louis</td><td>$53,399 </td><td>16%</td><td>St. Louis, MO</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
							</table>
						</div>
					</div>
					<div class="zpCon">
						<div class="table1">
							<table>
								<tr><th>排名</th><th>学校名称（中文）</th><th>学校名称（英文）</th><th>学费/年</th><th>录取率</th><th>所在城市</th><th>SAT/ACT分数要求</th></tr>
							</table>
						</div>
						<div class="table2">
							<table>
								<tr><td>21</td><td>艾茉莉大学</td><td>Emory University</td><td>$51,306 </td><td>22%</td><td>Atlanta, GA</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>22</td><td>乔治敦大学</td><td>Georgetown University</td><td>$54,104 </td><td>16%</td><td>Washington, DC</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>22</td><td>加州大学伯克利分校</td><td>University of California, Berkeley</td><td>$43,232 </td><td>17%</td><td>Berkeley, CA</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>22</td><td>南加州大学</td><td>University of Southern California</td><td>$56,225 </td><td>16%</td><td>Los Angeles, CA</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>25</td><td>卡耐基梅隆大学</td><td>Carnegie Mellon University</td><td>$55,465 </td><td>22%</td><td>Pittsburgh, PA</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>25</td><td>弗吉尼亚大学</td><td>University of Virginia</td><td>$48,891 </td><td>27%</td><td>Charlottesville, VA</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>27</td><td>塔夫斯大学</td><td>Tufts University</td><td>$56,382 </td><td>15%</td><td>Medford, MA</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>27</td><td>密歇根大学安娜堡分校</td><td>University of Michigan, Ann Arbor</td><td>$49,350 </td><td>27%</td><td>Ann Arbor, MI</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>27</td><td>维克森林大学</td><td>Wake Forest University</td><td>$53,322 </td><td>28%</td><td>Winston-Salem, NC</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>30</td><td>纽约大学</td><td>New York University</td><td>$51,828 </td><td>28%</td><td>New York, NY</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>30</td><td>加州大学圣塔芭芭拉分校</td><td>University of California, Santa Barbara</td><td>$42,486 </td><td>33%</td><td>Santa Barbara, CA</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>30</td><td>北卡罗来纳大学教堂山分校</td><td>University of North Carolina, Chapel Hill</td><td>$35,169 </td><td>24%</td><td>Chapel Hill, NC</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>33</td><td>加州大学尔湾分校</td><td>University of California, Irvine</td><td>$43,530 </td><td>37%</td><td>Irvine, CA</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>33</td><td>罗切斯特大学</td><td>University of Rochester</td><td>$53,926 </td><td>34%</td><td>Rochester, NY</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>35</td><td>布兰迪斯大学</td><td>Brandeis University</td><td>$55,395 </td><td>34%</td><td>Waltham, MA</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>35</td><td>佐治亚理工学院</td><td>Georgia Institute of Technology</td><td>$33,020 </td><td>23%</td><td>Atlanta, GA</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>35</td><td>佛罗里达大学</td><td>University of Florida</td><td>$28,658 </td><td>42%</td><td>Gainesville, FL</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>38</td><td>波士顿学院</td><td>Boston College</td><td>$55,464 </td><td>32%</td><td>Chestnut Hill, MA</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>38</td><td>威廉玛丽学院</td><td>College of William and Mary</td><td>$44,701 </td><td>36%</td><td>Williamsburg, VA</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
								<tr><td>38</td><td>加州大学戴维斯分校</td><td>University of California, Davis</td><td>$43,458 </td><td>44%</td><td>Davis, CA</td><td><a href='javascript:;' onclick="go()">点击查询</a></td></tr>
							</table>
						</div>
					</div>
					<div class="zpCon">
						<div class="table1">
							<table>
								<tr><th>排名</th><th>学校名称（中文）</th><th>学校名称（英文）</th><th>学费/年</th><th>录取率</th><th>所在城市</th><th>SAT/ACT分数要求</th></tr>
							</table>
						</div>
						<div class="table2">
							<table>
								<tr><td>41</td><td>加州大学圣地亚哥分校</td><td>University of California, San Diego</td><td>$42,074 </td><td>34%</td><td>La Jolla, CA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>42</td><td>波士顿大学</td><td>Boston University</td><td>$53,948 </td><td>25%</td><td>Boston, MA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>42</td><td>凯斯西储大学</td><td>Case Western Reserve University</td><td>$49,042 </td><td>33%</td><td>Cleveland, OH</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>44</td><td>东北大学</td><td>Northeastern University</td><td>$51,387 </td><td>27%</td><td>Boston, MA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>44</td><td>杜兰大学</td><td>Tulane University</td><td>$54,820 </td><td>21%</td><td>New Orleans, LA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>46</td><td>佩伯代因大学</td><td>Pepperdine University</td><td>$53,932 </td><td>40%</td><td>Malibu, CA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>46</td><td>佐治亚大学</td><td>University of Georgia</td><td>$30,404 </td><td>54%</td><td>Athens, GA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>46</td><td>伊利诺伊大学厄本那-香槟分校</td><td>University of Illinois, Urbana-Champaign</td><td>$32,568 </td><td>62%</td><td>Champaign, IL</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>49</td><td>伦斯勒理工学院</td><td>Rensselaer Polytechnic Institute</td><td>$53,880 </td><td>43%</td><td>Troy, NY</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>49</td><td>德克萨斯大学奥斯汀分校</td><td>University of Texas, Austin</td><td>$37,480 </td><td>36%</td><td>Austin, TX</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>49</td><td>威斯康辛大学麦迪逊分校</td><td>University of Wisconsin, Madison</td><td>$36,805 </td><td>54%</td><td>Madison, WI</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>49</td><td>维拉诺瓦大学</td><td>Villanova University</td><td>$53,458 </td><td>36%</td><td>Villanova, PA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>53</td><td>里海大学</td><td>Lehigh University</td><td>$52,930 </td><td>25%</td><td>Bethlehem, PA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>53</td><td>雪城大学</td><td>Syracuse University</td><td>$51,853 </td><td>47%</td><td>Syracuse, NY</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>53</td><td>迈阿密大学</td><td>University of Miami</td><td>$50,226 </td><td>36%</td><td>Coral Gables, FL</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>56</td><td>俄亥俄州立大学</td><td>Ohio State University, Columbus</td><td>$30,742 </td><td>48%</td><td>Columbus, OH</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>56</td><td>普渡大学西拉法叶分校</td><td>Purdue University, West Lafayette</td><td>$28,804 </td><td>57%</td><td>West Lafayette, IN</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>56</td><td>罗格斯大学</td><td>Rutgers University, New Brunswick</td><td>$31,282 </td><td>58%</td><td>Piscataway, NJ</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>59</td><td>宾州州立大学公园分校</td><td>Pennsylvania State University, University Park</td><td>$34,858 </td><td>50%</td><td>University Park, PA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>59</td><td>南卫理公会大学</td><td>Southern Methodist University</td><td>$54,493 </td><td>49%</td><td>Dallas, TX</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
							</table>
						</div>
					</div>
					<div class="zpCon">
						<div class="table1">
							<table>
								<tr><th>排名</th><th>学校名称（中文）</th><th>学校名称（英文）</th><th>学费/年</th><th>录取率</th><th>所在城市</th><th>SAT/ACT分数要求</th></tr>
							</table>
						</div>
						<div class="table2">
							<table>
								<tr><td>59</td><td>华盛顿大学</td><td>University of Washington</td><td>$36,898 </td><td>46%</td><td>Seattle, WA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>59</td><td>伍斯特理工学院</td><td>Worcester Polytechnic Institute</td><td>$50,530 </td><td>48%</td><td>Worcester, MA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>63</td><td>乔治华盛顿大学</td><td>George Washington University</td><td>$55,230 </td><td>41%</td><td>Washington, DC</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>63</td><td>康涅狄格大学</td><td>University of Connecticut</td><td>$38,098 </td><td>48%</td><td>Storrs, CT</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>63</td><td>马里兰大学学院公园分校</td><td>University of Maryland, College Park</td><td>$35,216 </td><td>44%</td><td>College Park, MD</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>66</td><td>杨百翰大学</td><td>Brigham Young University, Provo</td><td>$5,620 </td><td>52%</td><td>Provo, UT</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>66</td><td>克拉克大学</td><td>Clark University</td><td>$45,730 </td><td>56%</td><td>Worcester, MA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>66</td><td>克莱蒙森大学</td><td>Clemson University</td><td>$36,724 </td><td>47%</td><td>Clemson, SC</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>66</td><td>德州农工大学</td><td>Texas A&amp;M University, College Station</td><td>$36,636 </td><td>70%</td><td>College Station, TX</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>70</td><td>佛罗里达州立大学</td><td>Florida State University</td><td>$21,673 </td><td>49%</td><td>Tallahassee, FL</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>70</td><td>福坦莫大学</td><td>Fordham University</td><td>$52,248 </td><td>46%</td><td>New York, NY</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>70</td><td>史蒂文斯理工学院</td><td>Stevens Institute of Technology</td><td>$52,202 </td><td>44%</td><td>Hoboken, NJ</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>70</td><td>加州大学圣克鲁兹分校</td><td>University of California, Santa Cruz</td><td>$41,963 </td><td>51%</td><td>Santa Cruz, CA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>70</td><td>马萨诸塞大学阿默斯特分校</td><td>University of Massachusetts, Amherst</td><td>$34,570 </td><td>57%</td><td>Amherst, MA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>70</td><td>匹兹堡大学</td><td>University of Pittsburgh</td><td>$32,052 </td><td>60%</td><td>Pittsburgh, PA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>76</td><td>明尼苏达大学双城分校</td><td>University of Minnesota, Twin Cities</td><td>$30,371 </td><td>50%</td><td>Minneapolis, MN</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>76</td><td>弗吉尼亚理工学院</td><td>Virginia Tech</td><td>$31,304 </td><td>70%</td><td>Blacksburg, VA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>78</td><td>美利坚大学</td><td>American University</td><td>$48,459 </td><td>29%</td><td>Washington, DC</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>78</td><td>贝勒大学</td><td>Baylor University</td><td>$45,542 </td><td>39%</td><td>Waco, TX</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>80</td><td>纽约州立大学宾汉姆顿分校</td><td>Binghamton University, SUNY</td><td>$24,488 </td><td>40%</td><td>Binghamton, NY</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
							</table>

						</div>
					</div>
					<div class="zpCon">
						<div class="table1">
							<table>
								<tr><th>排名</th><th>学校名称（中文）</th><th>学校名称（英文）</th><th>学费/年</th><th>录取率</th><th>所在城市</th><th>SAT/ACT分数要求</th></tr>
							</table>
						</div>
						<div class="table2">
							<table>
								<tr><td>80</td><td>科罗拉多矿业学院</td><td>Colorado School of Mines</td><td>$38,584 </td><td>56%</td><td>Golden, CO</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>80</td><td>北卡罗来纳州立大学</td><td>North Carolina State University, Raleigh</td><td>$28,444 </td><td>51%</td><td>Raleigh, NC</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>80</td><td>纽约州立大学石溪分校</td><td>Stony Brook University, SUNY</td><td>$26,934 </td><td>42%</td><td>Stony Brook, NY</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>80</td><td>德克萨斯基督大学</td><td>Texas Christian University</td><td>$46,950 </td><td>41%</td><td>Fort Worth, TX</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>80</td><td>叶史瓦大学</td><td>Yeshiva University</td><td>$43,500 </td><td>63%</td><td>New York, NY</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>85</td><td>密歇根州立大学</td><td>Michigan State University</td><td>$39,750 </td><td>72%</td><td>East Lansing, MI</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>85</td><td>加州大学河滨分校</td><td>University of California, Riverside</td><td>$42,879 </td><td>57%</td><td>Riverside, CA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>85</td><td>圣地亚哥大学</td><td>University of San Diego</td><td>$49,358 </td><td>50%</td><td>San Diego, CA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>89</td><td>霍华德大学</td><td>Howard University</td><td>$26,756 </td><td>41%</td><td>Washington, DC</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>89</td><td>印第安纳大学伯明顿分校</td><td>Indiana University, Bloomington</td><td>$35,456 </td><td>76%</td><td>Bloomington, IN</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>89</td><td>芝加哥洛约拉大学</td><td>Loyola University Chicago</td><td>$44,048 </td><td>71%</td><td>Chicago, IL</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>89</td><td>马凯特大学</td><td>Marquette University</td><td>$41,870 </td><td>89%</td><td>Milwaukee, WI</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>89</td><td>纽约州立大学水牛城分校</td><td>University at Buffalo, SUNY</td><td>$27,758 </td><td>57%</td><td>Buffalo, NY</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>89</td><td>特拉华大学</td><td>University of Delaware</td><td>$34,310 </td><td>60%</td><td>Newark, DE</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>89</td><td>爱荷华大学</td><td>University of Iowa</td><td>$30,609 </td><td>86%</td><td>Iowa City, IA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>96</td><td>伊利诺伊理工学院</td><td>Illinois Institute of Technology</td><td>$47,646 </td><td>54%</td><td>Chicago, IL</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>96</td><td>迈阿密大学（俄亥俄）</td><td>Miami University, Oxford</td><td>$33,577 </td><td>68%</td><td>Oxford, OH</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>96</td><td>科罗拉多大学博尔德分校</td><td>University of Colorado, Boulder</td><td>$37,288 </td><td>80%</td><td>Boulder, CO</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>96</td><td>丹佛大学</td><td>University of Denver</td><td>$50,556 </td><td>58%</td><td>Denver, CO</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>96</td><td>旧金山大学</td><td>University of San Francisco</td><td>$48,066 </td><td>66%</td><td>San Francisco, CA</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
							</table>
						</div>
					</div>
				</div>
				<a href="javascript:;" onclick="go()">如何根据排名信息进行选校定位？</a>
			</div>
		</div>
		
		<!-- 美国顶级名校更青睐这样的学生 -->
		<div class="qinglai p_index gWidth1170">
			<h3 class="title">美国顶级名校更青睐这样的学生</h3>
			<p>知己知彼 提升申请成功率</p>
			<div class="content clearfix">
				<div class="fl">
					<div class="tbox active">
						<img src="/static/home/img/page/daxue_paiming/dj1.png" alt="哈佛大学" title="哈佛大学">
						<span>哈佛大学</span>
					</div>
					<div class="tbox">
						<img src="/static/home/img/page/daxue_paiming/dj2.png" alt="耶鲁大学" title="耶鲁大学">
						<span>耶鲁大学</span>
					</div>
					<div class="tbox">
						<img src="/static/home/img/page/daxue_paiming/dj3.png" alt="哥伦比亚大学" title="哥伦比亚大学">
						<span>哥伦比亚大学</span>
					</div>
					<div class="tbox">
						<img src="/static/home/img/page/daxue_paiming/dj4.png" alt="普林斯顿大学" title="普林斯顿大学">
						<span>普林斯顿大学</span>
					</div>
					<div class="tbox">
						<img src="/static/home/img/page/daxue_paiming/dj-1.png" alt="宾夕法尼亚大学" title="宾夕法尼亚大学">
						<span>宾夕法尼亚大学</span>
					</div>
					<div class="tbox">
						<img src="/static/home/img/page/daxue_paiming/dj6.png" alt="达特茅斯学院" title="达特茅斯学院">
						<span>达特茅斯学院</span>
					</div>
					<div class="tbox">
						<img src="/static/home/img/page/daxue_paiming/dj7.png" alt="布朗大学" title="布朗大学">
						<span>布朗大学</span>
					</div>
					<div class="tbox">
						<img src="/static/home/img/page/daxue_paiming/dj8.png" alt="康奈尔大学" title="康奈尔大学">
						<span>康奈尔大学</span>
					</div>
				</div>
				<div class="fr">
					<div>
						<p><b>哈佛大学更喜欢这样的学生：</b>诚恳的人生态度，批判性思维和创造力</p>
						<p><b>关于哈佛大学：</b>哈佛又名"波士顿市郊总科政客预科班"，由于哈佛历史悠久，总统气息严重，是总统儿女的偏爱之地，同时也是无数学霸的梦校，美国名校之首。</p>
						<a href="javascript:;" onclick="go()">获取哈佛大学申请方案&gt;&gt;</a>
					</div>
				</div>
				<div class="fr">
					<div>
						<p><b>耶鲁大学更喜欢这样的学生：</b>领导能力、有趣、活力</p>
						<p><b>关于耶鲁大学：</b>与哈佛、普林斯顿、斯坦福、麻省理工并称HYPSM，也是美国大学里有名的有钱学校，对于一旦看好的学生毫不吝啬奖学金，在文学方面的专业超级强。</p>
						<a href="javascript:;" onclick="go()">获取耶鲁大学申请方案&gt;&gt;</a>
					</div>
				</div>
				<div class="fr">
					<div>
						<p><b>哥伦比亚大学更喜欢这样的学生：</b>具有文化欣赏能力</p>
						<p><b>关于哥伦比亚大学：</b>哥伦比亚大学又称"纽约gossip girl影视基地"，另一个总统气很强的学校，特别喜欢领导力强的学生，同样是土豪校。</p>
						<a href="javascript:;" onclick="go()">获取哥伦比亚大学申请方案&gt;&gt;</a>
					</div>
				</div>
				<div class="fr">
					<div>
						<p><b>普林斯顿大学更喜欢这样的学生：</b>头脑质量、品格质量，为学校贡献的能力，起到领导作用的潜力</p>
						<p><b>关于普林斯顿大学：</b>由于建筑风格偏向宗教风格，又名"天主教大学美国大学城校区"，每年录取的中国学生极少，且整个村子的学术气息极其浓厚。 关于趣闻，小约翰·福布斯·纳什(John Forbes Nash Jr)，这个获得诺贝尔奖的精神病患者，即使在他精神病重之时，普林斯顿大学也未将他扫地出门，反而任由他在校园里游荡、开课，大学气度可见一斑。</p>
						<a href="javascript:;" onclick="go()">获取普林斯顿大学申请方案&gt;&gt;</a>
					</div>
				</div>
				<div class="fr">
					<div>
						<p><b>宾夕法尼亚大学更喜欢这样的学生：</b>优秀的学术水平，娴熟的写作、沟通能力，具有学以致用的能力</p>
						<p><b>关于宾夕法尼亚大学：</b>拥有全美前三的沃顿商学院，是所有想学商的人的梦校。宾大本身也是学霸之校，能人聚集之地，但是一定要和宾州州立大学分清。</p>
						<a href="javascript:;" onclick="go()">获取宾夕法尼亚大学申请方案&gt;&gt;</a>
					</div>
				</div>
				<div class="fr">
					<div>
						<p><b>达特茅斯学院更喜欢这样的学生：</b>杰出；领导素质，拥有特别的气质或品质，或经历或背景等</p>
						<p><b>关于达特茅斯大学：</b>达特茅斯据说在"十八线城市"，每年下雪从十一月到四月，达茅的冬天会让你大一就觉得这辈子再也不想看见雪了。特征之一就是小而精。在当今大学人数不断增长的环境下，达特茅斯学院保持着严格的招生制度，和极高的入学门槛，师生比约为1：7，堪称小型优质私立研究型大学。</p>
						<a href="javascript:;" onclick="go()">获取达特茅斯学院申请方案&gt;&gt;</a>
					</div>
				</div>
				<div class="fr">
					<div>
						<p><b>布朗大学更喜欢这样的学生：</b>偏爱术有专攻类型</p>
						<p><b>关于布朗大学：</b>"女神"校布朗的学哥学姐一个个都是6的飞起来啊，而且人超nice。作为罗德岛的学校，布朗成功的继承了罗德岛的艺术气息，还有它在美国历史上一直以来的自由（流氓）气息。布朗的学风相当自由，学生可以跨十万八千里去选课，比如：数学＋美国历史＋中世纪美术＋考古任何不靠谱的专业选择在布朗绝对不会受到阻挠。只要你修够学分，就可以毕业。一个学姐说过："在布朗活得又自由又累，教授又逗逼又严谨，同学又浪又牛逼，学校食堂又难吃又非常难吃。教会我如何做一个优秀但又不aggressive的人。</p>
						<a href="javascript:;" onclick="go()">获取布朗大学申请方案&gt;&gt;</a>
					</div>
				</div>
				<div class="fr">
					<div>
						<p><b>康奈尔大学更喜欢这样的学生：</b>领导能力、有趣、活力，音乐、艺术、科学方面，有卓越成绩</p>
						<p><b>关于康奈尔大学：</b>出名的专业：酒店管理学院、工业与劳工关系学院为全美首创。康奈尔大学的传统优势专业包括农业、兽医、工科、劳工关系、文理、经济、建筑、教育、商科、传媒、以及酒店管理等。必上课程，除了世界知名的《introduction to wine品酒课》，还有就是《equestrian马术》课，我们可是有大小5个马场！</p>
						<a href="javascript:;" onclick="go()">获取康奈尔大学申请方案&gt;&gt;</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国TOP50名校申请条件 -->
		<div class="top50_tiaojian p_index">
			<div class="gWidth1170">
				<h3 class="title">美国TOP50名校申请条件</h3>
				<div class="content clearfix">
					<div class="box fl">
						<img src="/static/home/img/page/daxue_paiming/icon1.png" alt="">
						<span></span>
						<h3>重点院校</h3>
						<p>著名高中</p>
						<a href="javascript:;" onclick="go()">年级排名对申请的影响&gt;&gt;</a>
					</div>
					<div class="box fl">
						<img src="/static/home/img/page/daxue_paiming/icon2.png" alt="">
						<span></span>
						<h3>GPA成绩</h3>
						<p>GPA需要3.7+</p>
						<a href="javascript:;" onclick="go()">如何提高GPA&gt;&gt;</a>
					</div>
					<div class="box fl">
						<img src="/static/home/img/page/daxue_paiming/icon3.png" alt="">
						<span></span>
						<h3>TOEFL成绩</h3>
						<p>TOEFL需要90+</p>
						<a href="javascript:;" onclick="go()">1对1快速提升通道&gt;&gt;</a>
					</div>
					<div class="box fl">
						<img src="/static/home/img/page/daxue_paiming/icon-1.png" alt="">
						<span></span>
						<h3>SAT成绩</h3>
						<p>SAT需要1250+</p>
						<a href="javascript:;" onclick="go()">1对1快速提升通道&gt;&gt;</a>
					</div>
					<div class="box fl">
						<img src="/static/home/img/page/daxue_paiming/icon4.png" alt="">
						<span></span>
						<h3>特长优先</h3>
						<p>有艺术特长、体育特长、学术特长等优先考虑</p>
						<a href="javascript:;" onclick="go()">如何展示个人特长&gt;&gt;</a>
					</div>
					<div class="box fl">
						<img src="/static/home/img/page/daxue_paiming/icon6.png" alt="">
						<span></span>
						<h3>竞赛奖项</h3>
						<p>获过国际竞赛等奖项的优先考虑</p>
						<a href="javascript:;" onclick="go()">需要参加哪些活动&gt;&gt;</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 2019US News美国文理学院TOP100 -->
		<div class="zongpai_100 wenli100 p_index" style="background-image: none;">
			<div class="gWidth1170">
				<h3 class="title">2019US News美国文理学院TOP100</h3>
				<div class="content">
					<div class="zpTitel">
						<span class="active">TOP 1-20</span>
						<span>TOP 21-40</span>
						<span>TOP 41-60</span>
						<span>TOP 61-80</span>
						<span>TOP 81-100</span>
					</div>
					<div class="zpCon">
						<div class="table1">
							<table>
								<tr><th>排名</th><th>学校名称（中文）</th><th>学校名称（英文）</th><th>所在城市</th><th>学费/年</th><th>录取率</th><th>SAT/ACT分数要求</th></tr>
							</table>
						</div>
						<div class="table2">
							<table>
								<tr><td>1</td><td>威廉姆斯学院</td><td>Williams College</td><td>Williamstown, MA</td><td>$55,450 </td><td>15%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>2</td><td>阿默斯特学院</td><td>Amherst College</td><td>Amherst, MA</td><td>$56,426 </td><td>13%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>3</td><td>斯沃斯莫尔学院</td><td>Swarthmore College</td><td>Swarthmore, PA</td><td>$52,588 </td><td>11%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>3</td><td>维斯理学院</td><td>Wellesley College</td><td>Wellesley, MA</td><td>$53,732 </td><td>22%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>5</td><td>鲍登学院</td><td>Bowdoin College</td><td>Brunswick, ME</td><td>$53,922 </td><td>14%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>5</td><td>卡尔顿学院</td><td>Carleton College</td><td>Northfield, MN</td><td>$54,759 </td><td>21%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>5</td><td>明德学院</td><td>Middlebury College</td><td>Middlebury, VT</td><td>$54,450 </td><td>17%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>5</td><td>波莫纳学院</td><td>Pomona College</td><td>Claremont, CA</td><td>$52,780 </td><td>8%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>9</td><td>克莱蒙特麦肯纳学院</td><td>Claremont McKenna College</td><td>Claremont, CA</td><td>$54,405 </td><td>10%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>10</td><td>戴维森学院</td><td>Davidson College</td><td>Davidson, NC</td><td>$51,447 </td><td>20%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>11</td><td>格林内尔学院</td><td>Grinnell College</td><td>Grinnell, IA</td><td>$52,392 </td><td>29%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>11</td><td>哈弗福德学院</td><td>Haverford College</td><td>Haverford, PA</td><td>$54,592 </td><td>20%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>11</td><td>史密斯学院</td><td>Smith College</td><td>Northampton, MA</td><td>$52,404 </td><td>32%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>11</td><td>瓦萨尔学院</td><td>Vassar College</td><td>Poughkeepsie, NY</td><td>$56,960 </td><td>24%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>11</td><td>华盛顿与李大学</td><td>Washington and Lee University</td><td>Lexington, VA</td><td>$52,455 </td><td>22%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>16</td><td>科尔盖特大学</td><td>Colgate University</td><td>Hamilton, NY</td><td>$55,870 </td><td>28%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>16</td><td>汉密尔顿学院</td><td>Hamilton College</td><td>Clinton, NY</td><td>$54,620 </td><td>24%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>18</td><td>科尔比学院</td><td>Colby College</td><td>Waterville, ME</td><td>$55,210 </td><td>16%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>18</td><td>哈维姆德学院</td><td>Harvey Mudd College</td><td>Claremont, CA</td><td>$56,876 </td><td>15%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>18</td><td>西点军校</td><td>United States Military Academy</td><td>West Point, NY</td><td>N/A</td><td>10%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
							</table>
						</div>
					</div>
					<div class="zpCon">
						<div class="table1">
							<table>
								<tr><th>排名</th><th>学校名称（中文）</th><th>学校名称（英文）</th><th>所在城市</th><th>学费/年</th><th>录取率</th><th>SAT/ACT分数要求</th></tr>
							</table>
						</div>
						<div class="table2">
							<table>
								<tr><td>18</td><td>卫斯理大学</td><td>Wesleyan University</td><td>Middletown, CT</td><td>$54,614 </td><td>16%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>22</td><td>贝茨学院</td><td>Bates College</td><td>Lewiston, ME</td><td>$53,794 </td><td>22%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>22</td><td>创价大学</td><td>Soka University of America</td><td>Aliso Viejo, CA</td><td>$33,146 </td><td>37%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>22</td><td>美国海军学院</td><td>United States Naval Academy</td><td>Annapolis, MD</td><td>N/A</td><td>8%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>25</td><td>巴纳德学院</td><td>Barnard College</td><td>New York, NY</td><td>$55,032 </td><td>15%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>25</td><td>里士满大学</td><td>University of Richmond</td><td>Univ. of Richmond, VA</td><td>$52,610 </td><td>33%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>27</td><td>布林莫尔学院</td><td>Bryn Mawr College</td><td>Bryn Mawr, PA</td><td>$52,360 </td><td>38%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>27</td><td>科罗拉多学院</td><td>Colorado College</td><td>Colorado Springs, CO</td><td>$55,470 </td><td>15%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>27</td><td>玛卡莱斯特学院</td><td>Macalester College</td><td>St. Paul, MN</td><td>$54,348 </td><td>41%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>30</td><td>凯尼恩学院</td><td>Kenyon College</td><td>Gambier, OH</td><td>$55,930 </td><td>34%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>30</td><td>曼荷莲女子学院</td><td>Mount Holyoke College</td><td>South Hadley, MA</td><td>$49,998 </td><td>51%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>30</td><td>欧柏林学院</td><td>Oberlin College</td><td>Oberlin, OH</td><td>$55,052 </td><td>34%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>30</td><td>斯克利普斯学院</td><td>Scripps College</td><td>Claremont, CA</td><td>$55,024 </td><td>33%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>30</td><td>美国空军学院</td><td>United States Air Force Academy</td><td>USAF Academy, CO</td><td>N/A</td><td>12%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>35</td><td>圣十字学院</td><td>College of the Holy Cross</td><td>Worcester, MA</td><td>$52,770 </td><td>40%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>36</td><td>巴克内尔大学</td><td>Bucknell University</td><td>Lewisburg, PA</td><td>$56,092 </td><td>31%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>36</td><td>富兰克林与马歇尔学院</td><td>Franklin and Marshall College</td><td>Lancaster, PA</td><td>$56,550 </td><td>34%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>36</td><td>拉斐特学院</td><td>Lafayette College</td><td>Easton, PA</td><td>$52,880 </td><td>31%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>39</td><td>西方学院</td><td>Occidental College</td><td>Los Angeles, CA</td><td>$54,686 </td><td>42%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>39</td><td>联合学院</td><td>Union College</td><td>Schenectady, NY</td><td>$55,290 </td><td>37%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
							</table>
						</div>
					</div>
					<div class="zpCon">
						<div class="table1">
							<table>
								<tr><th>排名</th><th>学校名称（中文）</th><th>学校名称（英文）</th><th>所在城市</th><th>学费/年</th><th>录取率</th><th>SAT/ACT分数要求</th></tr>
							</table>
						</div>
						<div class="table2">
							<table>
								<tr><td>41</td><td>匹泽尔学院</td><td>Pitzer College</td><td>Claremont, CA</td><td>$52,236 </td><td>16%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>41</td><td>斯基德莫尔学院</td><td>Skidmore College</td><td>Saratoga Springs, NY</td><td>$54,270 </td><td>25%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>43</td><td>丹尼森大学</td><td>Denison University</td><td>Granville, OH</td><td>$51,960 </td><td>37%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>43</td><td>托马斯阿奎那学院</td><td>Thomas Aquinas College</td><td>Santa Paula, CA</td><td>$25,000 </td><td>72%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>43</td><td>惠特曼学院</td><td>Whitman College</td><td>Walla Walla, WA</td><td>$51,764 </td><td>52%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>46</td><td>中央学院</td><td>Central College</td><td>Danville, KY</td><td>$41,700 </td><td>76%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>46</td><td>康涅狄格学院</td><td>Connecticut College</td><td>New London, CT</td><td>$54,820 </td><td>38%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>46</td><td>三一学院</td><td>Trinity College</td><td>Hartford, CT</td><td>$56,910 </td><td>34%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>49</td><td>葛底斯堡学院</td><td>Gettysburg College</td><td>Gettysburg, PA</td><td>$54,480 </td><td>46%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>49</td><td>塞沃尼南方大学</td><td>Sewanee, University of the South</td><td>Sewanee, TN</td><td>$45,120 </td><td>47%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>51</td><td>阿格尼斯斯科特学院</td><td>Agnes Scott College</td><td>Decatur, GA</td><td>$41,160 </td><td>66%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>51</td><td>狄金森学院</td><td>Dickinson College</td><td>Carlisle, PA</td><td>$54,636 </td><td>49%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>51</td><td>弗曼大学</td><td>Furman University</td><td>Greenville, SC</td><td>$49,532 </td><td>61%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>51</td><td>罗德学院</td><td>Rhodes College</td><td>Memphis, TN</td><td>$47,890 </td><td>51%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>51</td><td>斯贝尔曼学院</td><td>Spelman College</td><td>Atlanta, GA</td><td>$29,064 </td><td>40%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>56</td><td>巴德学院</td><td>Bard College</td><td>Annandale on Hudson, NY</td><td>$54,680 </td><td>58%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>56</td><td>德堡大学</td><td>DePauw University</td><td>Greencastle, IN</td><td>$49,704 </td><td>67%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>56</td><td>劳伦斯大学</td><td>Lawrence University</td><td>Appleton, WI</td><td>$47,475 </td><td>61%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>56</td><td>圣劳伦斯大学</td><td>St. Lawrence University</td><td>Canton, NY</td><td>$54,846 </td><td>48%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>56</td><td>瓦伯西学院</td><td>Wabash College</td><td>Crawfordsville, IN</td><td>$43,650 </td><td>64%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
							</table>
						</div>
					</div>
					<div class="zpCon">
						<div class="table1">
							<table>
								<tr><th>排名</th><th>学校名称（中文）</th><th>学校名称（英文）</th><th>所在城市</th><th>学费/年</th><th>录取率</th><th>SAT/ACT分数要求</th></tr>
							</table>
						</div>
						<div class="table2">
							<table>
								<tr><td>61</td><td>伯里亚学院</td><td>Berea College</td><td>Berea, KY</td><td>$560 </td><td>35%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>61</td><td>马里兰圣约翰学院</td><td>St. John's College</td><td>Annapolis, MD</td><td>$53,218 </td><td>55%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>61</td><td>圣奥拉夫学院</td><td>St. Olaf College</td><td>Northfield, MN</td><td>$47,840 </td><td>43%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>61</td><td>伊利诺伊惠顿学院</td><td>Wheaton College</td><td>Wheaton, IL</td><td>$36,420 </td><td>48%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>65</td><td>卡拉马祖学院</td><td>Kalamazoo College</td><td>Kalamazoo, MI</td><td>$48,516 </td><td>73%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>65</td><td>莎拉劳伦斯学院</td><td>Sarah Lawrence College</td><td>Bronxville, NY</td><td>$55,900 </td><td>53%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>67</td><td>伍斯特学院</td><td>College of Wooster</td><td>Wooster, OH</td><td>$50,250 </td><td>56%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>68</td><td>伯洛伊特学院</td><td>Beloit College</td><td>Beloit, WI</td><td>$50,040 </td><td>54%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>68</td><td>霍巴特威廉史密斯学院</td><td>Hobart and William Smith Colleges</td><td>Geneva, NY</td><td>$55,255 </td><td>61%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>68</td><td>诺克斯学院</td><td>Knox College</td><td>Galesburg, IL</td><td>$46,554 </td><td>72%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>68</td><td>刘易斯克拉克学院</td><td>Lewis &amp; Clark College</td><td>Portland, OR</td><td>$50,934 </td><td>71%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>72</td><td>伊利诺伊卫斯理大学</td><td>Illinois Wesleyan University</td><td>Bloomington, IL</td><td>$47,636 </td><td>61%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>72</td><td>马里兰圣约翰学院</td><td>St. John's College</td><td>Santa Fe, NM</td><td>$53,218 </td><td>55%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>72</td><td>普吉特湾大学</td><td>University of Puget Sound</td><td>Tacoma, WA</td><td>$49,776 </td><td>84%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>72</td><td>沃福德学院</td><td>Wofford College</td><td>Spartanburg, SC</td><td>$43,845 </td><td>69%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>76</td><td>阿勒格尼学院</td><td>Allegheny College</td><td>Meadville, PA</td><td>$47,540 </td><td>68%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>76</td><td>亨德里克斯学院</td><td>Hendrix College</td><td>Conway, AR</td><td>$45,790 </td><td>80%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>76</td><td>希尔斯代尔学院</td><td>Hillsdale College</td><td>Hillsdale, MI</td><td>$27,577 </td><td>41%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>76</td><td>特兰西瓦尼亚大学</td><td>Transylvania University</td><td>Lexington, KY</td><td>$38,750 </td><td>95%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>76</td><td>维拉姆特大学</td><td>Willamette University</td><td>Salem, OR</td><td>$50,074 </td><td>89%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
							</table>
		
						</div>
					</div>
					<div class="zpCon">
						<div class="table1">
							<table>
								<tr><th>排名</th><th>学校名称（中文）</th><th>学校名称（英文）</th><th>所在城市</th><th>学费/年</th><th>录取率</th><th>SAT/ACT分数要求</th></tr>
							</table>
						</div>
						<div class="table2">
							<table>
								<tr><td>81</td><td>康奈尔学院</td><td>Cornell College</td><td>Mount Vernon, IA</td><td>$42,299 </td><td>65%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>81</td><td>厄勒姆学院</td><td>Earlham College</td><td>Richmond, IN</td><td>$46,450 </td><td>52%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>81</td><td>穆伦堡学院</td><td>Muhlenberg College</td><td>Allentown, PA</td><td>$52,595 </td><td>48%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>81</td><td>普林希匹亚学院</td><td>Principia College</td><td>Elsah, IL</td><td>$29,470 </td><td>91%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>81</td><td>弗吉尼亚军事学院</td><td>Virginia Military Institute</td><td>Lexington, VA</td><td>$45,706 </td><td>53%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>86</td><td>圣本笃学院</td><td>College of St. Benedict</td><td>St. Joseph, MN</td><td>$45,264 </td><td>81%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>86</td><td>朱尼亚塔学院</td><td>Juniata College</td><td>Huntingdon, PA</td><td>$45,597 </td><td>71%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>86</td><td>伊利诺伊惠顿学院</td><td>Wheaton College</td><td>Norton, MA</td><td>$52,626 </td><td>48%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>89</td><td>路德学院</td><td>Luther College</td><td>Decorah, IA</td><td>$42,290 </td><td>65%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>90</td><td>古斯塔夫阿道夫学院</td><td>Gustavus Adolphus College</td><td>St. Peter, MN</td><td>$45,100 </td><td>68%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>90</td><td>新佛罗里达学院</td><td>New College of Florida</td><td>Sarasota, FL</td><td>$29,944 </td><td>69%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>90</td><td>里德学院</td><td>Reed College</td><td>Portland, OR</td><td>$54,200 </td><td>31%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>90</td><td>西南大学</td><td>Southwestern University</td><td>Georgetown, TX</td><td>$42,000 </td><td>43%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>90</td><td>乌尔西努学院</td><td>Ursinus College</td><td>Collegeville, PA</td><td>$52,050 </td><td>78%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>95</td><td>奥古斯塔纳大学</td><td>Augustana College</td><td>Rock Island, IL</td><td>$42,135 </td><td>59%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>95</td><td>本宁顿学院</td><td>Bennington College</td><td>Bennington, VT</td><td>$53,860 </td><td>57%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>95</td><td>大西洋学院</td><td>College of the Atlantic</td><td>Bar Harbor, ME</td><td>$43,542 </td><td>68%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>95</td><td>俄亥俄卫斯理大学</td><td>Ohio Wesleyan University</td><td>Delaware, OH</td><td>$45,760 </td><td>71%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>95</td><td>圣安瑟伦学院</td><td>St. Anselm College</td><td>Manchester, NH</td><td>$41,500 </td><td>76%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>95</td><td>圣约翰大学</td><td>St. John's University</td><td>Collegeville, MN</td><td>$44,990 </td><td>80%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>95</td><td>印第安纳圣玛丽学院</td><td>St. Mary's College</td><td>Notr Dame, IN</td><td>$42,220 </td><td>78%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>95</td><td>马里兰圣玛丽学院</td><td>St. Mary's College of Maryland</td><td>St. Marys City, MD</td><td>$30,568 </td><td>82%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>103</td><td>奥斯汀学院</td><td>Austin College</td><td>Sherman, TX</td><td>$39,985 </td><td>52%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>103</td><td>霍林斯大学</td><td>Hollins University</td><td>Roanoke, VA</td><td>$39,035 </td><td>48%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
								<tr><td>103</td><td>霍普学院</td><td>Hope College</td><td>Holland, MI</td><td>$34,010 </td><td>74%</td><td><a href="javascript:;" onclick="go()">点击查询</a></td></tr>
							</table>
						</div>
					</div>
				</div>
				<a href="javascript:;" onclick="go()">马上测试你与名校的距离</a>
			</div>
		</div>
		
		<!-- 2019US News美国本科商科专业排名 -->
		<div class="shangke_paiming p_index">
			<div class="gWidth1170">
				<h3 class="title">2019US News美国本科商科专业排名</h3>
				<p>出现在本排名中学校，其商科类本科项目均获得了国际高等商学院协会（AACSB）的认证</p>
				<div class="content">
					<div class="contentTop clearfix">
						<div class="box fl">
							<img src="/static/home/img/page/daxue_paiming/sk1.png" alt="宾夕法尼亚大学" title="宾夕法尼亚大学">
							<h3>TOP1</h3>
							<p>宾夕法尼亚大学</p>
							<a href="javascript:;" onclick="go()">申请咨询&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/daxue_paiming/sk2.png" alt="麻省理工学院" title="麻省理工学院">
							<h3>TOP2</h3>
							<p>麻省理工学院</p>
							<a href="javascript:;" onclick="go()">申请咨询&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/daxue_paiming/sk3.png" alt="加州大学伯克利分校" title="加州大学伯克利分校">
							<h3>TOP3</h3>
							<p>加州大学伯克利分校</p>
							<a href="javascript:;" onclick="go()">申请咨询&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/daxue_paiming/sk4.png" alt="密歇根大学安娜堡分校" title="密歇根大学安娜堡分校">
							<h3>TOP4</h3>
							<p>密歇根大学安娜堡分校</p>
							<a href="javascript:;" onclick="go()">申请咨询&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/daxue_paiming/sk5.png" alt="纽约大学" title="纽约大学">
							<h3>TOP5</h3>
							<p>纽约大学</p>
							<a href="javascript:;" onclick="go()">申请咨询&gt;&gt;</a>
						</div>
					</div>
					<a href="javascript:;" onclick="go()">查看完整榜单</a>
					<div class="contentBottom">
						<h3 class="title">商科专业方向及排名</h3>
						<div class="conCon clearfix">
							<div class="fl">
								<span class="active">会计学</span>
								<span>金融学</span>
								<span>创业学</span>
								<span>保险学</span>
								<span>供应链管理物流学</span>
								<span>国际商务</span>
								<span>管理</span>
								<span>管理信息系统</span>
								<span>市场营销</span>
								<span>生产运营管理</span>
								<span>定量分析</span>
							</div>
							<div class="fr">
								<div>
									<h3>会计学排名</h3>
									<ul class="clearfix">
										<li class="fl">1 德克萨斯大学奥斯汀分校</li>
										<li class="fl">2 伊利诺伊大学香槟分校</li>
										<li class="fl">3 杨百翰大学</li>
										<li class="fl">4 宾夕法尼亚大学</li>
										<li class="fl">5 密歇根大学安娜堡分校</li>
										<li class="fl">6 圣母大学</li>
										<li class="fl">7 南加州大学</li>
										<li class="fl">8 印第安纳大学伯明顿分校</li>
										<li class="fl">9 纽约大学</li>
										<li class="fl">10 俄亥俄州立大学</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>金融学排名</h3>
									<ul class="clearfix">
										<li class="fl">1 宾夕法尼亚大学</li>
										<li class="fl">2 纽约大学</li>
										<li class="fl">3 麻省理工学院</li>
										<li class="fl">4 密歇根大学安娜堡分校</li>
										<li class="fl">5 德克萨斯大学奥斯汀分校</li>
										<li class="fl">6 加州大学伯克利分校</li>
										<li class="fl">7 印第安纳大学伯明顿分校</li>
										<li class="fl">8 卡内基梅隆大学</li>
										<li class="fl">9 波士顿学院</li>
										<li class="fl">10 弗吉尼亚大学</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>创业学排名</h3>
									<ul class="clearfix">
										<li class="fl">1 巴布森学院</li>
										<li class="fl">2 麻省理工学院</li>
										<li class="fl">3 印第安纳大学伯明顿分校</li>
										<li class="fl">4 加州大学伯克利分校</li>
										<li class="fl">4 北卡罗来纳大学教堂山分校</li>
										<li class="fl">4 密歇根大学安娜堡分校</li>
										<li class="fl">7 宾夕法尼亚大学</li>
										<li class="fl">8 德克萨斯大学奥斯汀分校</li>
										<li class="fl">9 南加州大学</li>
										<li class="fl">10 亚利桑那大学</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>保险学排名</h3>
									<ul class="clearfix">
										<li class="fl">1 乔治亚大学</li>
										<li class="fl">2 威斯康星大学麦迪逊分校</li>
										<li class="fl">3 乔治亚州立大学</li>
										<li class="fl">4 天普大学</li>
										<li class="fl">5 宾夕法尼亚大学</li>
										<li class="fl">5 佛罗里达州立大学</li>
										<li class="fl">7 德克萨斯大学奥斯汀分校</li>
										<li class="fl">7 宾州州立大学帕克分校</li>
										<li class="fl">9 伊利诺伊州立大学</li>
										<li class="fl">10 伊利诺伊大学香槟分校</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>供应链管理物流学排名</h3>
									<ul class="clearfix">
										<li class="fl">1 密歇根州立大学</li>
										<li class="fl">2 亚利桑那州立大学(坦佩)</li>
										<li class="fl">3 麻省理工学院</li>
										<li class="fl">4 宾州州立大学帕克分校</li>
										<li class="fl">5 俄亥俄州立大学哥伦布分校</li>
										<li class="fl">6 田纳西大学</li>
										<li class="fl">6 密歇根大学安娜堡分校</li>
										<li class="fl">8 乔治亚理工学院</li>
										<li class="fl">8 普渡大学西拉法叶校区</li>
										<li class="fl">10 卡内基梅隆大学</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>国际商务排名</h3>
									<ul class="clearfix">
										<li class="fl">1 南卡罗来纳大学</li>
										<li class="fl">2 纽约大学</li>
										<li class="fl">3 乔治城大学</li>
										<li class="fl">4 加州大学伯克利分校</li>
										<li class="fl">5 宾夕法尼亚大学</li>
										<li class="fl">6 乔治华盛顿大学</li>
										<li class="fl">6 佛罗里达国际大学</li>
										<li class="fl">8 福特汉姆大学</li>
										<li class="fl">8 密歇根大学安娜堡分校</li>
										<li class="fl">8 东北大学</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>管理排名</h3>
									<ul class="clearfix">
										<li class="fl">1 密歇根大学安娜堡分校</li>
										<li class="fl">2 宾夕法尼亚大学</li>
										<li class="fl">3 加州大学伯克利分校</li>
										<li class="fl">4 北卡罗来纳大学教堂山分校</li>
										<li class="fl">5 弗吉尼亚大学</li>
										<li class="fl">6 纽约大学</li>
										<li class="fl">6 麻省理工学院</li>
										<li class="fl">6 印第安纳大学伯明顿分校</li>
										<li class="fl">9 德克萨斯大学奥斯汀分校</li>
										<li class="fl">10 亚利桑那州立大学(坦佩)</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>管理信息系统排名</h3>
									<ul class="clearfix">
										<li class="fl">1 麻省理工学院</li>
										<li class="fl">2 卡内基梅隆大学</li>
										<li class="fl">3 亚利桑那大学</li>
										<li class="fl">4 德克萨斯大学奥斯汀分校</li>
										<li class="fl">5 明尼苏达大学双城分校</li>
										<li class="fl">6 印第安纳大学伯明顿分校</li>
										<li class="fl">6 乔治亚理工学院</li>
										<li class="fl">8 马里兰大学帕克分校</li>
										<li class="fl">9 乔治亚州立大学</li>
										<li class="fl">10 纽约大学</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>市场营销排名</h3>
									<ul class="clearfix">
										<li class="fl">1 密歇根大学安娜堡分校</li>
										<li class="fl">2 宾夕法尼亚大学</li>
										<li class="fl">3 纽约大学</li>
										<li class="fl">4 德克萨斯大学奥斯汀分校</li>
										<li class="fl">5 北卡罗来纳大学教堂山分校</li>
										<li class="fl">6 加州大学伯克利分校</li>
										<li class="fl">7 印第安纳大学</li>
										<li class="fl">8 弗吉尼亚大学</li>
										<li class="fl">9 威斯康星大学麦迪逊分校</li>
										<li class="fl">10 圣约瑟大学</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>生产运营管理排名</h3>
									<ul class="clearfix">
										<li class="fl">1 麻省理工学院</li>
										<li class="fl">2 密歇根大学安娜堡分校</li>
										<li class="fl">3 宾夕法尼亚大学</li>
										<li class="fl">4 普渡大学西拉法叶校区</li>
										<li class="fl">5 卡内基梅隆大学</li>
										<li class="fl">6 加州大学伯克利分校</li>
										<li class="fl">7 密歇根州立大学</li>
										<li class="fl">7 乔治亚理工学院</li>
										<li class="fl">9 俄亥俄州立大学</li>
										<li class="fl">10 北卡罗来纳大学教堂山分校</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>定量分析排名</h3>
									<ul class="clearfix">
										<li class="fl">1 麻省理工学院</li>
										<li class="fl">2 卡内基梅隆大学</li>
										<li class="fl">3 宾夕法尼亚大学</li>
										<li class="fl">4 纽约大学</li>
										<li class="fl">5 德克萨斯大学奥斯汀分校</li>
										<li class="fl">6 密歇根大学安娜堡分校</li>
										<li class="fl">7 乔治亚理工学院</li>
										<li class="fl">8 普渡大学西拉法叶校区</li>
										<li class="fl">9 印第安纳大学伯明顿分校</li>
										<li class="fl">10 亚利桑那州立大学(坦佩)</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 2019US News美国本科工程学专业排名 -->
		<div class="shangke_paiming gongke p_index" style="background-image: none;">
			<div class="gWidth1170">
				<h3 class="title">2019US News美国本科工程学专业排名</h3>
				<p>出现在此排名中的工程类本科项目均获得了ABET的认证</p>
				<div class="content">
					<div class="contentTop clearfix">
						<div class="box fl">
							<img src="/static/home/img/page/daxue_paiming/gk1.png" alt="麻省理工学院" title="麻省理工学院">
							<h3>TOP1</h3>
							<p>麻省理工学院</p>
							<a href="javascript:;" onclick="go()">申请咨询&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/daxue_paiming/gk2.png" alt="斯坦福大学" title="斯坦福大学">
							<h3>TOP2</h3>
							<p>斯坦福大学</p>
							<a href="javascript:;" onclick="go()">申请咨询&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/daxue_paiming/gk3.png" alt="加州大学伯克利分校" title="加州大学伯克利分校">
							<h3>TOP2</h3>
							<p>加州大学伯克利分校</p>
							<a href="javascript:;" onclick="go()">申请咨询&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/daxue_paiming/gk4.png" alt="加州理工学院" title="加州理工学院">
							<h3>TOP4</h3>
							<p>加州理工学院</p>
							<a href="javascript:;" onclick="go()">申请咨询&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/daxue_paiming/gk5.png" alt="佐治亚理工学院" title="佐治亚理工学院">
							<h3>TOP5</h3>
							<p>佐治亚理工学院</p>
							<a href="javascript:;" onclick="go()">申请咨询&gt;&gt;</a>
						</div>
					</div>
					<a href="javascript:;" onclick="go()">查看完整榜单</a>
					<div class="contentBottom">
						<h3 class="title">工程学专业方向及排名</h3>
						<div class="conCon clearfix">
							<div class="fl">
								<span class="active">航空航天工程</span>
								<span>电子电气工程</span>
								<span>生物农业工程</span>
								<span>工业工程</span>
								<span>化学工程</span>
								<span>机械工程</span>
								<span>土木工程</span>
								<span>房地产</span>
								<span>计算机工程</span>
							</div>
							<div class="fr">
								<div>
									<h3>航空航天工程排名</h3>
									<ul class="clearfix">
										<li class="fl">1 麻省理工学院</li>
										<li class="fl">2 乔治亚理工学院</li>
										<li class="fl">3 加州理工大学</li>
										<li class="fl">4 密歇根大学安娜堡分校</li>
										<li class="fl">5 普渡大学西拉法叶校区</li>
										<li class="fl">6 斯坦福大学</li>
										<li class="fl">7 伊利诺伊大学香槟分校</li>
										<li class="fl">8 德克萨斯大学奥斯汀分校</li>
										<li class="fl">9 德州农工大学</li>
										<li class="fl">9 科罗拉多大学波尔得分校</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>电气电气工程排名</h3>
									<ul class="clearfix">
										<li class="fl">1 麻省理工学院</li>
										<li class="fl">2 加州大学伯克利分校</li>
										<li class="fl">3 斯坦福大学</li>
										<li class="fl">4 乔治亚理工学院</li>
										<li class="fl">5 伊利诺伊大学香槟分校</li>
										<li class="fl">6 加州理工大学</li>
										<li class="fl">7 密歇根大学安娜堡分校</li>
										<li class="fl">8 康奈尔大学</li>
										<li class="fl">9 卡内基梅隆大学</li>
										<li class="fl">10 德克萨斯大学奥斯汀分校</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>生物农业工程排名</h3>
									<ul class="clearfix">
										<li class="fl">1 普渡大学西拉法叶校区</li>
										<li class="fl">2 德州农工大学</li>
										<li class="fl">3 爱荷华州立大学</li>
										<li class="fl">4 加州大学戴维斯分校</li>
										<li class="fl">5 康奈尔大学</li>
										<li class="fl">5 伊利诺伊大学香槟分校</li>
										<li class="fl">7 俄亥俄州立大学哥伦布分校</li>
										<li class="fl">7 密歇根州立大学</li>
										<li class="fl">9 弗吉尼亚理工大学</li>
										<li class="fl">10 宾州州立大学帕克分校</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>工业工程排名</h3>
									<ul class="clearfix">
										<li class="fl">1 乔治亚理工学院</li>
										<li class="fl">2 密歇根大学安娜堡分校</li>
										<li class="fl">3 普渡大学西拉法叶校区</li>
										<li class="fl">4 加州大学伯克利分校</li>
										<li class="fl">5 斯坦福大学</li>
										<li class="fl">6 弗吉尼亚理工大学</li>
										<li class="fl">7 西北大学</li>
										<li class="fl">8 康奈尔大学</li>
										<li class="fl">9 宾州州立大学</li>
										<li class="fl">9 威斯康星大学麦迪逊分校</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>化学工程排名</h3>
									<ul class="clearfix">
										<li class="fl">1 麻省理工学院</li>
										<li class="fl">2 乔治亚理工学院</li>
										<li class="fl">3 加州大学伯克利分校</li>
										<li class="fl">4 德克萨斯大学奥斯汀分校</li>
										<li class="fl">5 加州理工大学</li>
										<li class="fl">6 斯坦福大学</li>
										<li class="fl">7 密歇根大学安娜堡分校</li>
										<li class="fl">8 明尼苏达大学双城分校</li>
										<li class="fl">9 特拉华大学</li>
										<li class="fl">9 威斯康星大学麦迪逊分校</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>机械工程排名</h3>
									<ul class="clearfix">
										<li class="fl">1 麻省理工学院</li>
										<li class="fl">2 乔治亚理工学院</li>
										<li class="fl">3 斯坦福大学</li>
										<li class="fl">4 加州大学伯克利分校</li>
										<li class="fl">5 密歇根大学安娜堡分校</li>
										<li class="fl">6 加州理工大学</li>
										<li class="fl">7 伊利诺伊大学香槟分校</li>
										<li class="fl">8 普渡大学西拉法叶校区</li>
										<li class="fl">9 康奈尔大学</li>
										<li class="fl">10 卡内基梅隆大学</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>土木工程排名</h3>
									<ul class="clearfix">
										<li class="fl">1 加州大学伯克利分校</li>
										<li class="fl">2 乔治亚理工学院</li>
										<li class="fl">3 伊利诺伊大学香槟分校</li>
										<li class="fl">4 德克萨斯大学奥斯汀分校</li>
										<li class="fl">5 普渡大学西拉法叶校区</li>
										<li class="fl">6 密歇根大学安娜堡分校</li>
										<li class="fl">7 斯坦福大学</li>
										<li class="fl">7 麻省理工学院</li>
										<li class="fl">9 弗吉尼亚理工大学</li>
										<li class="fl">10 德州农工大学</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>房地产工程排名</h3>
									<ul class="clearfix">
										<li class="fl">1 宾夕法尼亚大学</li>
										<li class="fl">2 威斯康星大学麦迪逊分校</li>
										<li class="fl">3 加州大学伯克利分校</li>
										<li class="fl">4 纽约大学</li>
										<li class="fl">5 乔治亚大学</li>
										<li class="fl">6 德克萨斯大学奥斯汀分校</li>
										<li class="fl">6 南加州大学</li>
										<li class="fl">8 佛罗里达大学</li>
										<li class="fl">9 康奈尔大学</li>
										<li class="fl">10 乔治亚州立大学</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
								<div>
									<h3>计算机工程排名</h3>
									<ul class="clearfix">
										<li class="fl">1 卡内基梅隆大学</li>
										<li class="fl">2 麻省理工学院</li>
										<li class="fl">3 斯坦福大学</li>
										<li class="fl">4 加州大学伯克利分校</li>
										<li class="fl">5 乔治亚理工学院</li>
										<li class="fl">6 密歇根大学安娜堡分校</li>
										<li class="fl">7 伊利诺伊大学香槟分校</li>
										<li class="fl">8 康奈尔大学</li>
										<li class="fl">9 德克萨斯大学奥斯汀分校</li>
										<li class="fl">10 华盛顿大学</li>
									</ul>
									<a href="javascript:;" onclick="go()">查看完整榜单</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 如何合理科学选校 -->
		<div class="kexue_xx p_index">
			<div class="gWidth1170">
				<h3 class="title">如何合理科学选校</h3>
				<div class="content clearfix">
					<div class="box fl">
						<h3>优势专业</h3>
						<div class="hidden">
							<p>择校时，更应该重点关注学校的优势专业。重点大学的特色学科和一般大学的优势专业，才更具有竞争力。</p>
							<a href="javascript:;" onclick="go()">你心仪的专业哪所学校更有优势？</a>
						</div>
					</div>
					<div class="box box2 fl">
						<h3>留学费用</h3>
						<div class="hidden">
							<p>不同学习阶段、专业、学校地理位置、学校等级等都会导致学费和生活费有所不同，不同学校的奖学金也有所差异。</p>
							<a href="javascript:;" onclick="go()">去美国留学一年需要多少钱？</a>
						</div>
					</div>
					<div class="box box3 fl">
						<h3>职业辅导策略</h3>
						<div class="hidden">
							<p>多了解学校的就业率、毕业生起薪、学校与企业的合作项目以及学校能为学生提供的实践机会，有利于提早规划职业道路。</p>
							<a href="javascript:;" onclick="go()">如何合理规划职业道路？</a>
						</div>
					</div>
					<div class="box box4 fl">
						<h3>院校规模及国际生比例</h3>
						<div class="hidden">
							<p>规模越大的学校，能为学生提供更多的资源和精神财富。同时国际生比例较高的学校，能提供更国际化的教育环境，利于开拓国际视野，培养文化包容心态。</p>
							<a href="javascript:;" onclick="go()">快速了解心仪学校的情况</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 彬彬教育致力让每一个学生牵手世界名校 -->
		<div id="mydiv" class="p_index" style="height: 695px;">
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
				$('body, html').stop().animate({scrollTop: offsetTop + 0}, 1500);
			})
			$('.bannerNav span:last-child').css({'margin-right': '0'});
			// 
			function hover( father ) {
				father.hover(function () {
					$(this).children('.div1').stop().fadeOut();
					$(this).children('.div2').stop().fadeIn();
				}, function () {
					$(this).children('.div2').stop().fadeOut();
					$(this).children('.div1').stop().fadeIn();					
				})
			}
			var DivFl = $('.pingfen_tixi .content>div.fl');
			var DivFr = $('.pingfen_tixi .content>div.fr .box');
			hover(DivFl);
			hover(DivFr);
			// 
			$('.zongpai_100 .content .zpTitel span:last-child').css({'margin-right': '0'});
			var Box = $('.zongpai_100 .content .zpTitel span');
			var Hidden = $('.zongpai_100 .content .zpCon');
			Hidden.eq(0).css({'display': 'block'});
			Hidden.eq(5).css({'display': 'block'});
			Box.on('click', function () {
				var index = Box.index($(this));
				$(this).addClass('active').siblings('span').removeClass('active');
				Hidden.eq(index).stop().fadeIn().siblings('.zpCon').css({'display': 'none'});
			})
			// 
			var tableOne = $('.zongpai_100 .content .zpCon .table1');
			var tableIndex = $('.zongpai_100 .content .zpCon .table2');
			tdWidth(tableOne, true);
			tdWidth(tableIndex, false);
			function tdWidth (father, isTitle) {
				for ( var i=0; i<father.length; i++) {
					var fatherTr = father[i].getElementsByTagName('tr');
					for ( var k=0; k<fatherTr.length; k++ ) {
						fatherTr[k].children[0].style.width = '122px';
						fatherTr[k].children[1].style.width = '216px';
						fatherTr[k].children[2].style.width = '215px';
						fatherTr[k].children[3].style.width = '119px';
						fatherTr[k].children[4].style.width = '119px';
						fatherTr[k].children[5].style.width = '162px';
						if(isTitle){
							fatherTr[k].children[6].style.width = '215px';
						}else{
							fatherTr[k].children[6].style.width = '199px';
						}
					}
				}
			}
			// 
			$('.qinglai .content>div.fl .tbox:nth-child(2n)').css({'margin-right': '0'});
			var Box2 = $('.qinglai .content>div.fl .tbox');
			var Hidden2 = $('.qinglai .content>div.fr');
			Hidden2.eq(0).css({'display': 'block'});
			Box2.on('click', function () {
				var index = Box2.index($(this));
				$(this).addClass('active').siblings('.tbox').removeClass('active');
				Hidden2.eq(index).stop().fadeIn().siblings('div.fr').css({'display': 'none'});
			})
			// 
			$('.top50_tiaojian .content .box:nth-child(3n)').css({'margin-right': '0'});
			// 
			$('.shangke_paiming .content .contentTop .box:last-child').css({'margin-right': '0'});
			// 
			$('.shangke_paiming .content .contentBottom .conCon>div.fl span:nth-child(2n)').css({'margin-right': '0'});
			var tabSpan = $('.shangke_paiming .content .contentBottom .conCon>div.fl span');
			var tabCon = $('.shangke_paiming .content .contentBottom .conCon>div.fr>div');
			tabCon.eq(0).css({'display': 'block'});
			tabCon.eq(11).css({'display': 'block'});
			tabSpan.on('click', function () {
				var index = tabSpan.index($(this));
				$(this).addClass('active').siblings('span').removeClass('active');
				tabCon.eq(index).stop().fadeIn().siblings('div').css({'display': 'none'});
			})
			// 
			$('.kexue_xx .content .box:last-child').css({'margin-right': '0'});
			$('.kexue_xx .content .box').hover(function () {
				$(this).children('h3').stop().fadeOut();
				$(this).children('.hidden').stop().fadeIn();
			}, function () {
				$(this).children('h3').stop().fadeIn();
				$(this).children('.hidden').stop().fadeOut();
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
