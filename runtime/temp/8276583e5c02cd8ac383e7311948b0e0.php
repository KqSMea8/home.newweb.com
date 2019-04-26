<?php /*a:6:{s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\comprehensive.html";i:1553062603;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1553677718;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1553062603;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1553743361;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1553743361;s:89:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_undergraduate.html";i:1553062603;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/comprehensive.css">
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
				<h1>美国综合大学申请全指导</h1>
				<h3>未雨绸缪备申请  稳操胜券拿offer</h3>
				<a href="javascript:;" onclick="go()">马上申请</a>
			</div>
		</div>
		
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">综合大学优势</span>
				<span>院校排名</span>
				<span>申请条件</span>
				<span>申请难点</span>
				<span>导师团队</span>
				<span>offer战绩</span>
				<span>背景提升</span>
				<span>时间规划</span>
				<span>留学费用</span>
				<span>彬彬优势</span>
			</div>
		</div>
		<div class="navHidden"></div>
		
		<!-- 美国综合大学优势 -->
		<div class="daxue_youshi zh_index gWidth1170">
			<h3 class="title">美国综合大学优势</h3>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<h3>重视学术研究</h3>
					<img src="/static/home/img/page/zonghe_daxue/xia.png" alt="">
					<div class="hidden">
						<p>教学设备先进，师资力量雄厚，高质量教学得到极高保证。此外，学生还可以接触到研究生院的教授，对学生未来的学习和就业都会产生很大的影响。</p>
						<a href="javascript:;" onclick="go()">了解最新科研项目</a>
					</div>
				</div>
				<div class="box box2 fl">
					<h3>专业更细化</h3>
					<img src="/static/home/img/page/zonghe_daxue/xia.png" alt="">
					<div class="hidden">
						<p>学校提供的学术专业涉及范围广泛，专业课，基础课和选修课种类多样，选择范围广泛，更有助于学生学到更深层次，更广领域的知识。</p>
						<a href="javascript:;" onclick="go()">如何选择适合的专业</a>
					</div>
				</div>
				<div class="box box3 fl">
					<h3>国际知名度比较高</h3>
					<img src="/static/home/img/page/zonghe_daxue/xia.png" alt="">
					<div class="hidden">
						<p>像哈佛，耶鲁，哥大等都是闻名于世的综合类大学，声誉特别高，社会接受度和接纳度都比较高，可以带给学生更多的实习经历和就业机会。</p>
						<a href="javascript:;" onclick="go()">马上申请美国名校</a>
					</div>
				</div>
				<div class="box box4 fl">
					<h3>校友圈强大</h3>
					<img src="/static/home/img/page/zonghe_daxue/xia.png" alt="">
					<div class="hidden">
						<p>美国综合类大学在校学生人数比较多，尤其是公立大学，人数基本保持在几万，学生可以大力发展校友关系，为自己未来的就业发展打下良好的人际基础。</p>
						<a href="javascript:;" onclick="go()">如何增加校友关系</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国综合大学排名TOP100 -->
		<div class="top100 zh_index">
			<div class="gWidth1170">
				<h3 class="title">美国综合大学排名TOP100</h3>
				<p>2019 US NEWS美国大学排名 选校参考神器</p>
				<!-- content -->
				<div class="content clearfix">
					<div class="ctop clearfix">
						<div class="box fl">
							<img src="/static/home/img/page/zonghe_daxue/school1.png" alt="普林斯顿大学" title="普林斯顿大学">
							<h3>TOP1</h3>
							<p>普林斯顿大学</p>
							<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/zonghe_daxue/school2.png" alt="哈佛大学" title="哈佛大学">
							<h3>TOP2</h3>
							<p>哈佛大学</p>
							<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/zonghe_daxue/school3.png" alt="哥伦比亚大学" title="哥伦比亚大学">
							<h3>TOP3</h3>
							<p>哥伦比亚大学</p>
							<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/zonghe_daxue/school4.png" alt="麻省理工学院" title="麻省理工学院">
							<h3>TOP3</h3>
							<p>麻省理工学院</p>
							<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/zonghe_daxue/school5.png" alt="芝加哥大学" title="芝加哥大学">
							<h3>TOP3</h3>
							<p>芝加哥大学</p>
							<a href="javascript:;" onclick="go()">马上申请&gt;&gt;</a>
						</div>
					</div>
					<div class="cbottom clearfix">
						<div class="cxx">
							<span class="active">TOP1-20</span>
							<span>TOP21-40</span>
							<span>TOP41-60</span>
							<span>TOP61-80</span>
							<span>TOP81-100</span>
						</div>
						<div class="table">
							<table>
								<thead>
									<tr><th>排名</th><th>学校名称</th><th>学校英文名称</th><th>学费/年</th><th>录取率</th><th>所在城市</th><th>SAT/ACT分数要求</th></tr>
								</thead>
								<tr>
									<td>3</td>
									<td>耶鲁大学</td>
									<td>Yale University</td>
									<td>$53,430</td>
									<td>7%</td>
									<td>New Haven, CT</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>7</td>
									<td>斯坦福大学</td>
									<td>Stanford University</td>
									<td>$51,354</td>
									<td>5%</td>
									<td>Stanford, CA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>8</td>
									<td>杜克大学</td>
									<td>Duke University</td>
									<td>$55,960</td>
									<td>10%</td>
									<td>Durham, NC</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>8</td>
									<td>宾夕法尼亚大学</td>
									<td>University of Pennsylvania</td>
									<td>$55,584</td>
									<td>9%</td>
									<td>Philadelphia, PA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>10</td>
									<td>约翰霍普金斯大学</td>
									<td>Johns Hopkins University</td>
									<td>$53,740</td>
									<td>12%</td>
									<td>Baltimore, MD</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>10</td>
									<td>西北大学</td>
									<td>Northwestern University</td>
									<td>$54,567</td>
									<td>9%</td>
									<td>Evanston, IL</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>12</td>
									<td>加州理工学院</td>
									<td>California Institute of Technology</td>
									<td>$52,362</td>
									<td>8%</td>
									<td>Pasadena, CA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>12</td>
									<td>达特茅斯学院</td>
									<td>Dartmouth College</td>
									<td>$55,035</td>
									<td>10%</td>
									<td>Hanover, NH</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>14</td>
									<td>布朗大学</td>
									<td>Brown University</td>
									<td>$55,656</td>
									<td>9%</td>
									<td>Providence, RI</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>14</td>
									<td>范德堡大学</td>
									<td>Vanderbilt University</td>
									<td>$49,816</td>
									<td>11%</td>
									<td>Nashville, TN</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>16</td>
									<td>康奈尔大学</td>
									<td>Cornell University</td>
									<td>$55,188</td>
									<td>13%</td>
									<td>Ithaca, NY</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>16</td>
									<td>莱斯大学</td>
									<td>Rice University</td>
									<td>$47,350</td>
									<td>16%</td>
									<td>Houston, TX</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>18</td>
									<td>圣母大学</td>
									<td>University of Notre Dame</td>
									<td>$53,391</td>
									<td>19%</td>
									<td>Notre Dame, IN</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>19</td>
									<td>加州大学洛杉矶分校</td>
									<td>University of California, Los Angeles</td>
									<td>$41,294</td>
									<td>16%</td>
									<td>Los Angeles, CA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>19</td>
									<td>圣路易斯华盛顿大学</td>
									<td>Washington University in St. Louis</td>
									<td>$53,399</td>
									<td>16%</td>
									<td>St. Louis, MO</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
							</table>
						</div>
						<div class="table">
							<table>
								<thead>
									<tr><th>排名</th><th>学校名称</th><th>学校英文名称</th><th>学费/年</th><th>录取率</th><th>所在城市</th><th>SAT/ACT分数要求</th></tr>
								</thead>
								<tr>
									<td>21</td>
									<td>艾茉莉大学</td>
									<td>Emory University</td>
									<td>$51,306</td>
									<td>22%</td>
									<td>Atlanta, GA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>22</td>
									<td>乔治敦大学</td>
									<td>Georgetown University</td>
									<td>$54,104</td>
									<td>16%</td>
									<td>Washington, DC</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>22</td>
									<td>加州大学伯克利分校</td>
									<td>University of California, Berkeley</td>
									<td>$43,232</td>
									<td>17%</td>
									<td>Berkeley, CA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>22</td>
									<td>南加州大学</td>
									<td>University of Southern California</td>
									<td>$56,225</td>
									<td>16%</td>
									<td>Los Angeles, CA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>25</td>
									<td>卡耐基梅隆大学</td>
									<td>Carnegie Mellon University</td>
									<td>$55,465</td>
									<td>22%</td>
									<td>Pittsburgh, PA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>25</td>
									<td>弗吉尼亚大学</td>
									<td>University of Virginia</td>
									<td>$48,891</td>
									<td>27%</td>
									<td>Charlottesville, VA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>27</td>
									<td>塔夫斯大学</td>
									<td>Tufts University</td>
									<td>$56,382</td>
									<td>15%</td>
									<td>Medford, MA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>27</td>
									<td>密歇根大学安娜堡分校</td>
									<td>University of Michigan, Ann Arbor</td>
									<td>$49,350</td>
									<td>27%</td>
									<td>Ann Arbor, MI</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>27</td>
									<td>维克森林大学</td>
									<td>Wake Forest University</td>
									<td>$53,322</td>
									<td>28%</td>
									<td>Winston-Salem, NC</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>30</td>
									<td>纽约大学</td>
									<td>New York University</td>
									<td>$51,828</td>
									<td>28%</td>
									<td>New York, NY</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>30</td>
									<td>加州大学圣塔芭芭拉分校</td>
									<td>University of California, Santa Barbara</td>
									<td>$42,486</td>
									<td>33%</td>
									<td>Santa Barbara, CA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>30</td>
									<td>北卡罗来纳大学教堂山分校</td>
									<td>University of North Carolina, Chapel Hill</td>
									<td>$35,169</td>
									<td>24%</td>
									<td>Chapel Hill, NC</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>33</td>
									<td>加州大学尔湾分校</td>
									<td>University of California, Irvine</td>
									<td>$43,530</td>
									<td>37%</td>
									<td>Irvine, CA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>33</td>
									<td>罗切斯特大学</td>
									<td>University of Rochester</td>
									<td>$53,926</td>
									<td>34%</td>
									<td>Rochester, NY</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>35</td>
									<td>布兰迪斯大学</td>
									<td>Brandeis University</td>
									<td>$55,395</td>
									<td>34%</td>
									<td>Waltham, MA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>35</td>
									<td>佐治亚理工学院</td>
									<td>Georgia Institute of Technology</td>
									<td>$33,020</td>
									<td>23%</td>
									<td>Atlanta, GA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>35</td>
									<td>佛罗里达大学</td>
									<td>University of Florida</td>
									<td>$28,658</td>
									<td>42%</td>
									<td>Gainesville, FL</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>38</td>
									<td>波士顿学院</td>
									<td>Boston College</td>
									<td>$55,464</td>
									<td>32%</td>
									<td>Chestnut Hill, MA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>38</td>
									<td>威廉玛丽学院</td>
									<td>College of William and Mary</td>
									<td>$44,701</td>
									<td>36%</td>
									<td>Williamsburg, VA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>38</td>
									<td>加州大学戴维斯分校</td>
									<td>University of California, Davis</td>
									<td>$43,458</td>
									<td>44%</td>
									<td>Davis, CA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
							</table>
						</div>
						<div class="table">
							<table>
								<thead>
									<tr><th>排名</th><th>学校名称</th><th>学校英文名称</th><th>学费/年</th><th>录取率</th><th>所在城市</th><th>SAT/ACT分数要求</th></tr>
								</thead>
								<tr>
									<td>41</td>
									<td>加州大学圣地亚哥分校</td>
									<td>University of California, San Diego</td>
									<td>$42,074</td>
									<td>34%</td>
									<td>La Jolla, CA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>42</td>
									<td>波士顿大学</td>
									<td>Boston University</td>
									<td>$53,948</td>
									<td>25%</td>
									<td>Boston, MA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>42</td>
									<td>凯斯西储大学</td>
									<td>Case Western Reserve University</td>
									<td>$49,042</td>
									<td>33%</td>
									<td>Cleveland, OH</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>44</td>
									<td>东北大学</td>
									<td>Northeastern University</td>
									<td>$51,387</td>
									<td>27%</td>
									<td>Boston, MA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>44</td>
									<td>杜兰大学</td>
									<td>Tulane University</td>
									<td>$54,820</td>
									<td>21%</td>
									<td>New Orleans, LA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>46</td>
									<td>佩伯代因大学</td>
									<td>Pepperdine University</td>
									<td>$53,932</td>
									<td>40%</td>
									<td>Malibu, CA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>46</td>
									<td>佐治亚大学</td>
									<td>University of Georgia</td>
									<td>$30,404</td>
									<td>54%</td>
									<td>Athens, GA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>46</td>
									<td>伊利诺伊大学厄本那-香槟分校</td>
									<td>University of Illinois, Urbana-Champaign</td>
									<td>$32,568</td>
									<td>62%</td>
									<td>Champaign, IL</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>49</td>
									<td>伦斯勒理工学院</td>
									<td>Rensselaer Polytechnic Institute</td>
									<td>$53,880</td>
									<td>43%</td>
									<td>Troy, NY</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>49</td>
									<td>德克萨斯大学奥斯汀分校</td>
									<td>University of Texas, Austin</td>
									<td>$37,480</td>
									<td>36%</td>
									<td>Austin, TX</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>49</td>
									<td>威斯康辛大学麦迪逊分校</td>
									<td>University of Wisconsin, Madison</td>
									<td>$36,805</td>
									<td>54%</td>
									<td>Madison, WI</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>49</td>
									<td>维拉诺瓦大学</td>
									<td>Villanova University</td>
									<td>$53,458</td>
									<td>36%</td>
									<td>Villanova, PA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>53</td>
									<td>里海大学</td>
									<td>Lehigh University</td>
									<td>$52,930</td>
									<td>25%</td>
									<td>Bethlehem, PA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>53</td>
									<td>雪城大学</td>
									<td>Syracuse University</td>
									<td>$51,853</td>
									<td>47%</td>
									<td>Syracuse, NY</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>53</td>
									<td>迈阿密大学</td>
									<td>University of Miami</td>
									<td>$50,226</td>
									<td>36%</td>
									<td>Coral Gables, FL</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>56</td>
									<td>俄亥俄州立大学</td>
									<td>Ohio State University, Columbus</td>
									<td>$30,742</td>
									<td>48%</td>
									<td>Columbus, OH</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>56</td>
									<td>普渡大学西拉法叶分校</td>
									<td>Purdue University, West Lafayette</td>
									<td>$28,804</td>
									<td>57%</td>
									<td>West Lafayette, IN</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>56</td>
									<td>罗格斯大学</td>
									<td>Rutgers University, New Brunswick</td>
									<td>$31,282</td>
									<td>58%</td>
									<td>Piscataway, NJ</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>59</td>
									<td>宾州州立大学公园分校</td>
									<td>Pennsylvania State University, University Park</td>
									<td>$34,858</td>
									<td>50%</td>
									<td>University Park, PA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>59</td>
									<td>南卫理公会大学</td>
									<td>Southern Methodist University</td>
									<td>$54,493</td>
									<td>49%</td>
									<td>Dallas, TX</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>59</td>
									<td>华盛顿大学</td>
									<td>University of Washington</td>
									<td>$36,898</td>
									<td>46%</td>
									<td>Seattle, WA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>59</td>
									<td>伍斯特理工学院</td>
									<td>Worcester Polytechnic Institute</td>
									<td>$50,530</td>
									<td>48%</td>
									<td>Worcester, MA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
							</table>
						</div>
						<div class="table">
							<table>
								<thead>
									<tr><th>排名</th><th>学校名称</th><th>学校英文名称</th><th>学费/年</th><th>录取率</th><th>所在城市</th><th>SAT/ACT分数要求</th></tr>
								</thead>
								<tr>
									<td>63</td>
									<td>乔治华盛顿大学</td>
									<td>George Washington University</td>
									<td>$55,230</td>
									<td>41%</td>
									<td>Washington, DC</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>63</td>
									<td>康涅狄格大学</td>
									<td>University of Connecticut</td>
									<td>$38,098</td>
									<td>48%</td>
									<td>Storrs, CT</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>63</td>
									<td>马里兰大学学院公园分校</td>
									<td>University of Maryland, College Park</td>
									<td>$35,216</td>
									<td>44%</td>
									<td>College Park, MD</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>66</td>
									<td>杨百翰大学</td>
									<td>Brigham Young University, Provo</td>
									<td>$5,620</td>
									<td>52%</td>
									<td>Provo, UT</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>66</td>
									<td>克拉克大学</td>
									<td>Clark University</td>
									<td>$45,730</td>
									<td>56%</td>
									<td>Worcester, MA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>66</td>
									<td>克莱蒙森大学</td>
									<td>Clemson University</td>
									<td>$36,724</td>
									<td>47%</td>
									<td>Clemson, SC</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>66</td>
									<td>德州农工大学</td>
									<td>Texas A&M University, College Station</td>
									<td>$36,636</td>
									<td>70%</td>
									<td>College Station, TX</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>70</td>
									<td>佛罗里达州立大学</td>
									<td>Florida State University</td>
									<td>$21,673</td>
									<td>49%</td>
									<td>Tallahassee, FL</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>70</td>
									<td>福坦莫大学</td>
									<td>Fordham University</td>
									<td>$52,248</td>
									<td>46%</td>
									<td>New York, NY</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>70</td>
									<td>史蒂文斯理工学院</td>
									<td>Stevens Institute of Technology</td>
									<td>$52,202</td>
									<td>44%</td>
									<td>Hoboken, NJ</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>70</td>
									<td>加州大学圣克鲁兹分校</td>
									<td>University of California, Santa Cruz</td>
									<td>$41,963</td>
									<td>51%</td>
									<td>Santa Cruz, CA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>70</td>
									<td>马萨诸塞大学阿默斯特分校</td>
									<td>University of Massachusetts, Amherst</td>
									<td>$34,570</td>
									<td>57%</td>
									<td>Amherst, MA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>70</td>
									<td>匹兹堡大学</td>
									<td>University of Pittsburgh</td>
									<td>$32,052</td>
									<td>60%</td>
									<td>Pittsburgh, PA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>76</td>
									<td>明尼苏达大学双城分校</td>
									<td>University of Minnesota, Twin Cities</td>
									<td>$30,371</td>
									<td>50%</td>
									<td>Minneapolis, MN</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>76</td>
									<td>弗吉尼亚理工学院</td>
									<td>Virginia Tech</td>
									<td>$31,304</td>
									<td>70%</td>
									<td>Blacksburg, VA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>78</td>
									<td>美利坚大学</td>
									<td>American University</td>
									<td>$48,459</td>
									<td>29%</td>
									<td>Washington, DC</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>78</td>
									<td>贝勒大学</td>
									<td>Baylor University</td>
									<td>$45,542</td>
									<td>39%</td>
									<td>Waco, TX</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>80</td>
									<td>纽约州立大学宾汉姆顿分校</td>
									<td>Binghamton University, SUNY</td>
									<td>$24,488</td>
									<td>40%</td>
									<td>Binghamton, NY</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>80</td>
									<td>科罗拉多矿业学院</td>
									<td>Colorado School of Mines</td>
									<td>$38,584</td>
									<td>56%</td>
									<td>Golden, CO</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>80</td>
									<td>北卡罗来纳州立大学</td>
									<td>North Carolina State University, Raleigh</td>
									<td>$28,444</td>
									<td>51%</td>
									<td>Raleigh, NC</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>80</td>
									<td>纽约州立大学石溪分校</td>
									<td>Stony Brook University, SUNY</td>
									<td>$26,934</td>
									<td>42%</td>
									<td>Stony Brook, NY</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>80</td>
									<td>德克萨斯基督大学</td>
									<td>Texas Christian University</td>
									<td>$46,950</td>
									<td>41%</td>
									<td>Fort Worth, TX</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>80</td>
									<td>叶史瓦大学</td>
									<td>Yeshiva University</td>
									<td>$43,500</td>
									<td>63%</td>
									<td>New York, NY</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
							</table>
						</div>
						<div class="table">
							<table>
								<thead>
									<tr><th>排名</th><th>学校名称</th><th>学校英文名称</th><th>学费/年</th><th>录取率</th><th>所在城市</th><th>SAT/ACT分数要求</th></tr>
								</thead>
								<tr>
									<td>85</td>
									<td>密歇根州立大学</td>
									<td>Michigan State University</td>
									<td>$39,750</td>
									<td>72%</td>
									<td>East Lansing, MI</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>85</td>
									<td>加州大学河滨分校</td>
									<td>University of California, Riverside</td>
									<td>$42,879</td>
									<td>57%</td>
									<td>Riverside, CA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>85</td>
									<td>圣地亚哥大学</td>
									<td>University of San Diego</td>
									<td>$49,358</td>
									<td>50%</td>
									<td>San Diego, CA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>89</td>
									<td>霍华德大学</td>
									<td>Howard University</td>
									<td>$26,756</td>
									<td>41%</td>
									<td>Washington, DC</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>89</td>
									<td>印第安纳大学伯明顿分校</td>
									<td>Indiana University, Bloomington</td>
									<td>$35,456</td>
									<td>76%</td>
									<td>Bloomington, IN</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>89</td>
									<td>芝加哥洛约拉大学</td>
									<td>Loyola University Chicago</td>
									<td>$44,048</td>
									<td>71%</td>
									<td>Chicago, IL</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>89</td>
									<td>马凯特大学</td>
									<td>Marquette University</td>
									<td>$41,870</td>
									<td>89%</td>
									<td>Milwaukee, WI</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>89</td>
									<td>纽约州立大学水牛城分校</td>
									<td>University at Buffalo, SUNY</td>
									<td>$27,758</td>
									<td>57%</td>
									<td>Buffalo, NY</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>89</td>
									<td>特拉华大学</td>
									<td>University of Delaware</td>
									<td>$34,310</td>
									<td>60%</td>
									<td>Newark, DE</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>89</td>
									<td>爱荷华大学</td>
									<td>University of Iowa</td>
									<td>$30,609</td>
									<td>86%</td>
									<td>Iowa City, IA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>96</td>
									<td>伊利诺伊理工学院</td>
									<td>Illinois Institute of Technology</td>
									<td>$47,646</td>
									<td>54%</td>
									<td>Chicago, IL</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>96</td>
									<td>迈阿密大学（俄亥俄）</td>
									<td>Miami University, Oxford</td>
									<td>$33,577</td>
									<td>68%</td>
									<td>Oxford, OH</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>96</td>
									<td>科罗拉多大学博尔德分校</td>
									<td>University of Colorado, Boulder</td>
									<td>$37,288</td>
									<td>80%</td>
									<td>Boulder, CO</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>96</td>
									<td>丹佛大学</td>
									<td>University of Denver</td>
									<td>$50,556</td>
									<td>58%</td>
									<td>Denver, CO</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
								<tr>
									<td>96</td>
									<td>旧金山大学</td>
									<td>University of San Francisco</td>
									<td>$48,066</td>
									<td>66%</td>
									<td>San Francisco, CA</td>
									<td><a href="javascript:;" onclick="go()">点击查询</a></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="anniu">
						<a href="javascript:;" onclick="go()">联系彬彬获取一对一定制化留学申请方案</a>
						<a href="javascript:;" onclick="go()" class="a1">出国留学咨询热线：400-900-9770</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国综合大学申请条件 -->
		<div class="shenqing_tiaojian zh_index gWidth1170">
			<h3 class="title">美国综合大学申请条件</h3>
			<div class="content clearfix">
				<div class="box fl">
					<div class="img">
						<h3>标准化考试</h3>
						<p>托福(TOEFL)    雅思(IELTS)   SAT(SAT1 & SAT2)  ACT   AP   IB</p>
						<a href="javascript:;" onclick="go()">了解梦校成绩要求&gt;&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<div class="img">
						<h3>学术成绩</h3>
						<p>美国高中四年制，申请美国本科时，通常会要求9-12年级(国内初三到高三)成绩单。</p>
						<a href="javascript:;" onclick="go()">成绩单准备需注意哪些问题&gt;&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<div class="img">
						<h3>个人能力和课外活动</h3>
						<p>与学习能力一样，招生委员会可以从你对课外活动和其他个人能力的描述中，了解、发现和挖掘你自身独特竞争力和价值。</p>
						<a href="javascript:;" onclick="go()">了解如何提升自身背景&gt;&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<div class="img">
						<h3>文书</h3>
						<p>彬彬教育依据学生的专业方向匹配海外顶级名校背景导师修改和润色文书，美式思维助力申请名校。</p>
						<a href="javascript:;" onclick="go()">马上匹配名校导师&gt;&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<div class="img">
						<h3>面试</h3>
						<p>不同的学校差别很大，是否有面试因学校而异，想进名校的申请者还是要尽早做准备 。</p>
						<a href="javascript:;" onclick="go()">了解面试技巧&gt;&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<div class="img">
						<h3>推荐信</h3>
						<p>对于申请人在其他申请材料中所呈现出来的各种品质加以证实，并且体现申请人的学术能力、在校综合能力以及对于自己周围环境产生影响的能力。</p>
						<a href="javascript:;" onclick="go()">推荐信写作指导&gt;&gt;</a>
					</div>
				</div>
			</div>
			<div class="anniu">
				<a href="javascript:;" onclick="go()">了解详细的申请条件要求</a>
				<a href="javascript:;" onclick="go()" class="a1">出国留学咨询热线：400-900-9770</a>
			</div>
		</div>
		
		<!-- 美国综合大学申请难点分析 -->
		<div class="nandian_fenxi zh_index">
			<div class="gWidth1170">
				<h3 class="title">美国综合大学申请难点分析</h3>
				<div class="content">
					<div class="ctop clearfix">
						<div class="box fl">
							<div class="fl">难点一</div>
							<div class="fr">
								<h3>名校竞争激烈</h3>
								<p>全球80%的拔尖学生竞争美国名校，20%的国际生录取名额。</p>
							</div>
						</div>
						<div class="box fl">
							<div class="fl">难点二</div>
							<div class="fr">
								<h3>名校录取不同</h3>
								<p>美国大学评审体系中，软性不可量化的综合素质因素也决定最后的录取。</p>
							</div>
						</div>
						<div class="box fl">
							<div class="fl">难点三</div>
							<div class="fr">
								<h3>申请流程复杂多变</h3>
								<p>全美国强调多样性的文化，导致不同大学有着不同的评审流程。</p>
							</div>
						</div>
					</div>
					<div class="img clearfix">
						<div class="fl"><img src="/static/home/img/page/zonghe_daxue/xiangxia.png" alt=""></div>
						<div class="fl"><img src="/static/home/img/page/zonghe_daxue/xiangxia.png" alt=""></div>
						<div class="fl"><img src="/static/home/img/page/zonghe_daxue/xiangxia.png" alt=""></div>
					</div>
					<div class="cbottom clearfix">
						<div class="box fl">
							<h3>彬彬击破</h3>
							<p>彬彬留学拥有一支资深外籍导师团队，成员均毕业于美国名校，曾从事学校招生、教育等相关工作。通过外籍导师的辅导学生可以提升目标院校的申请竞争点。</p>
						</div>
						<div class="box fl">
							<h3>彬彬击破</h3>
							<p>彬彬留学导师遍布美国名校，全面覆盖美国Top 50名校各个大部分专业。经过精准匹配，专业导师在辅导学生申请过程中，其相似的专业背景、长时间的积累的专业素养和更深厚的专业基础，能够为学生的申请提供更坚实的保障。</p>
						</div>
						<div class="box fl">
							<h3>彬彬击破</h3>
							<p>彬彬留学的海外同专业导师团队作为彬彬教育独家特色之一，拥有非常强大的名校优秀校友资源，且校友均毕业于美国滕门名校，作为学长学姐海外同专业导师可以有针对性的指导学生的申请。</p>
						</div>
					</div>
				</div>
				<div class="anniu">
					<a href="javascript:;" onclick="go()">名校录取率逐年走低  联系彬彬提高成功率</a>
					<a href="javascript:;" onclick="go()" class="a1">出国留学咨询热线：400-900-9770</a>
				</div>
			</div>
		</div>
		
		<!-- 强大的国内外导师团队 -->
		<div class="daoshi_team zh_index">
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
		
		<!-- 专业的团队 创造更辉煌的申请结果 -->
		<div class="shenqing_jieguo zh_index">
			<div class="gWidth1170">
				<h3 class="title">专业的团队 创造更辉煌的申请结果</h3>
				<!-- content -->
				<div class="content">
					<div class="ctop clearfix">
						<div class="box fl">
							<img class="fl" src="/static/home/img/page/zonghe_daxue/pulinsidun.png" alt="普林斯顿大学" title="普林斯顿大学">
							<img src="/static/home/img/page/zonghe_daxue/pulinsidun.jpg" class="img" alt="普林斯顿大学" title="普林斯顿大学">
							<div class="fr">
								<h3><span>4</span>枚</h3>
								<p>普林斯顿大学</p>
							</div>
						</div>
						<div class="box fl">
							<img class="fl" src="/static/home/img/page/zonghe_daxue/hafo.png" alt="哈佛大学" title="哈佛大学">
							<img src="/static/home/img/page/zonghe_daxue/hafo.jpg" class="img" alt="哈佛大学" title="哈佛大学">
							<div class="fr">
								<h3><span>2</span>枚</h3>
								<p>哈佛大学</p>
							</div>
						</div>
						<div class="box fl">
							<img class="fl" src="/static/home/img/page/zonghe_daxue/zhijiage.png" alt="芝加哥大学" title="芝加哥大学">
							<img src="/static/home/img/page/zonghe_daxue/zhijiage.jpg" class="img" alt="芝加哥大学" title="芝加哥大学">
							<div class="fr">
								<h3><span>14</span>枚</h3>
								<p>芝加哥大学</p>
							</div>
						</div>
						<div class="box fl">
							<img class="fl" src="/static/home/img/page/zonghe_daxue/yelu.png" alt="耶鲁大学" title="耶鲁大学">
							<img src="/static/home/img/page/zonghe_daxue/yelu.jpg" class="img" alt="耶鲁大学" title="耶鲁大学">
							<div class="fr">
								<h3><span>8</span>枚</h3>
								<p>耶鲁大学</p>
							</div>
						</div>
					</div>
					<div class="cbottom clearfix">
						<div class="box fl">
							<h3>G同学</h3>
							<p><b>考试成绩：</b>GPA:3.92/4.0，TOEFL:111</p>
							<p><b>录取结果：</b>弗吉尼亚大学</p>
							<a href="/success/123.html" target="_blank">详情&gt;</a>
						</div>
						<div class="box fl">
							<h3>X同学</h3>
							<p><b>考试成绩：</b>T110, SAT: 1530, SAT2,GPA：4.0</p>
							<p><b>录取结果：</b>西北大学</p>
							<a href="/success/117.html" target="_blank">详情&gt;</a>
						</div>
						<div class="box fl">
							<h3>Y同学</h3>
							<p><b>考试成绩：</b>托福98, SAT：1550,SAT2：2400,GPA：3.8</p>
							<p><b>录取结果：</b>康奈尔大学</p>
							<a href="/success/116.html" target="_blank">详情&gt;</a>
						</div>
						<div class="box fl">
							<h3>X同学</h3>
							<p><b>考试成绩：</b>GPA: 3.7,TOEFL100,SAT 1460</p>
							<p><b>录取结果：</b>纽约大学</p>
							<a href="/success/110.html" target="_blank">详情&gt;</a>
						</div>
					</div>
					<div class="anniu">
						<a href="javascript:;" onclick="go()">想要与他/她们成为校友？彬彬教育帮你实现</a>
						<a href="javascript:;" onclick="go()" class="a1">查看更多</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 提高软性背景 助力名校申请 -->
		<div class="bjts zh_index">
			<div class="gWidth1170">
				<h3 class="title">提高软性背景 助力名校申请</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="box fl">
						<a href="/xxsy/332.html" target="_blank" class="hidden1">加州大学伯克利分校</a>
					</div>
					<div class="box box2 fl">
						<a href="/xxsy/331.html" target="_blank" class="hidden1">斯坦福国际精英大学先修项目</a>
					</div>
					<div class="box box3 fl">
						<a href="/xsjs/327.html" target="_blank" class="hidden1">哈佛-麻省理工数学锦标赛</a>
					</div>
					<div class="box box4 fl">
						<a href="/xxsy/325.html" target="_blank" class="hidden1">科学类夏令营</a>
					</div>
					<div class="box box5 fl">
						<a href="/xxsy/324.html" target="_blank" class="hidden1">数学类夏令营</a>
					</div>
					<div class="box box6 fl">
						<a href="/xxsy/278.html" target="_blank" class="hidden1">顶级夏校</a>
					</div>
				</div>
				<div class="anniu">
					<a href="javascript:;" onclick="go()">快速匹配适合自己的背景提升项目</a>
					<a href="/page/polymerization.html" target="_blank" class="a1">查看更多</a>
				</div>
			</div>
		</div>
		
		<!-- 美国综合大学申请时间规划 -->
		<div class="guihua zh_index">
			<div class="gWidth1170">
				<h3 class="title">美国综合大学申请时间规划</h3>
				<p>合理规划 让留学申请更有条不紊</p>
				<!-- content -->
				<div class="content clearfix">
					<div class="box">
						<ul>
							<li>
								<h3>前期规划</h3>
								<p>选定留学机构准备语言培训</p>
							</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>提前规划</h3>
								<p>出国考试制定留学规划</p>
							</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>背景提升</h3>
								<p>参加课外活动提升背景实力</p>
							</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>初步规划</h3>
								<p>申请选校文书申请资料准备</p>
							</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>深度规划</h3>
								<p>学校申请<br />状态跟踪</p>
							</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>等待录取</h3>
								<p>确定学校<br />等待面试</p>
							</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>入学准备</h3>
								<p>准备签证<br />联系学校</p>
							</li>
						</ul>
						<span></span>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>启程入校</h3>
								<p>行前准备</p>
							</li>
						</ul>
						<span></span>
					</div>
					<div class="xian">
						<div>
							<span></span>
							<p>2-4月</p>
						</div>
						<div>
							<span></span>
							<p>5-8月</p>
						</div>
						<div>
							<span></span>
							<p>8-9月</p>
						</div>
						<div>
							<span></span>
							<p>9-11月</p>
						</div>
						<div>
							<span></span>
							<p>11-12月</p>
						</div>
						<div>
							<span></span>
							<p>次年1-4月</p>
						</div>
						<div>
							<span></span>
							<p>次年4-7月</p>
						</div>
						<div>
							<span></span>
							<p>次年7-8月</p>
						</div>
					</div>
				</div>
				<div class="anniu">
					<a href="javascript:;" onclick="go()">免费制定个性化申请规划</a>
					<a href="javascript:;" onclick="go()" class="a1">出国留学咨询热线：400-900-9770</a>
				</div>
			</div>
		</div>
		
		<!-- 美国本科留学费用 -->
		<div class="Cost zh_index gWidth1170">
			<!-- title -->
			<h3 class="title">美国本科留学费用</h3>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<div class="boxBox">
						<div class="div1">
							<h4>学费</h4>
							<img src="/static/home/img/page/9_12/anniu.png" alt="">
						</div>
						<div class="div2">
							<p style="width: 270px;">私立大学：约$25000～45000/年<br />公立大学：约$15000～30000/年</p>
						</div>
					</div>
				</div>
				<div class="box box2 fl">
					<div class="boxBox">
						<div class="div1">
							<h4>生活费</h4>
							<img src="/static/home/img/page/9_12/anniu.png" alt="">
						</div>
						<div class="div2">
							<p><b>一级城市：</b>纽约、洛杉矶、芝加哥、华盛顿首府等城市</p>
							<p><b>生活费：</b>约 $1000-2000/月</p><br />
							<p><b>二级城市：</b>匹兹堡、西雅图、达拉斯、亚特兰大等城市</p>
							<p><b>生活费：</b>约 $800-1000/月</p><br />
							<p><b>三级城市：</b>南部、中西部、东南部州、德州、康州等地区</p>
							<p><b>生活费：</b>约 $600-800/月</p><br />
							<p><b>四级城市：</b>俄克拉荷马州、密苏里州、路易斯安那州等地区</p>
							<p><b>生活费：</b>约$450-600/月</p>
						</div>
					</div>
				</div>
				<div class="box box3 fl">
					<div class="boxBox">
						<div class="div1">
							<h4>申请/签证费用</h4>
							<img src="/static/home/img/page/9_12/anniu.png" alt="">
						</div>
						<div class="div2">
							<p>申请费：每校平均需50-75美元</p>
							<p>邮寄费：寄送T、G成绩的费用30-100多美元</p>
							<p>寄快递费：每封信180元人民币</p>
							<p>TOEFL、GRE成绩均为每份15美元</p>
							<p>美国签证费：申请费为160美元</p>
						</div>
					</div>
				</div>
			</div>
			<div class="anniu">
				<a href="javascript:;" onclick="go()">免费制定个性化申请规划</a>
				<a href="javascript:;" onclick="go()" class="a1">出国留学咨询热线：400-900-9770</a>
			</div>
		</div>
		
		<!-- 彬彬教育致力让每一个学生牵手世界名校 -->
		<div id="mydiv" class="zh_index" style="height: 695px;">
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
			$gkLength = $('.zh_index').length;
			window.onscroll = function () {
				var top = document.documentElement.scrollTop || document.body.scrollTop;
				if(top>=nav){
					$('.bannerNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999'});
					$('.navHidden').css({'display': 'block'});
				}else if(top<=$('.zh_index').eq(0).offset().top){
					$('.bannerNav').css({'position': 'static', 'top':''});
					$('.navHidden').css({'display': 'none'});
				}
				for( var i=0; i<$gkLength; i++ ){
					if( i == $gkLength - 1 ){
						if( top>=$('.zh_index').eq(i).offset().top ){
							$('.bannerNav span').removeClass('active');
							$('.bannerNav span').eq(i).addClass('active');
						}
						return;
					}
					if( top>=$('.zh_index').eq(i).offset().top && top<$('.zh_index').eq(i+1).offset().top ){
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
						$('.abcBannav').css({'display': 'none'});
					}
				}else if(top == 0) {
					$('.topNav').css({'position': 'relative'});
					$('.abcBannav').css({'display': 'none'});
				}
			}
			$('.bannerNav span').on('click', function () {
				var index = $('.bannerNav span').index($(this));
				var offsetTop = $('.zh_index').eq(index).offset().top;
				$('body, html').stop().animate({scrollTop: offsetTop + 0}, 1500);
			})
			$('.bannerNav span:last-child').css({'margin-right': '0'});
			// 
			$('.daxue_youshi .content .box').hover(function () {
				$(this).children('h3').stop().fadeOut();
				$(this).children('img').stop().fadeOut();
				$(this).children('.hidden').stop().fadeIn();
			}, function () {
				$(this).children('h3').stop().fadeIn();
				$(this).children('img').stop().fadeIn();
				$(this).children('.hidden').stop().fadeOut();
			})
			// 
			$('.top100 .content .ctop .box:last-child').css({'margin-right': '0'});
			// 
			$('.top100 .content .cbottom .table').eq(0).css({'display': 'block'});
			$('.top100 .content .cbottom .cxx span').on('click', function () {
				var index = $('.top100 .content .cbottom .cxx span').index($(this));
				$(this).addClass('active').siblings('span').removeClass('active');
				$('.top100 .content .cbottom .table').eq(index).stop().fadeIn().siblings('.table').css({'display': 'none'});
			})
			// 
			$('.shenqing_tiaojian .content .box').hover(function () {
				$(this).children('.img').children('a').css({'color': '#ffffff'});
				$(this).children('.img').children('p').css({'color': '#ffffff'});
				$(this).children('.img').children('h3').css({'color': '#ffffff'});
			}, function () {
				$(this).children('.img').children('a').css({'color': '#4A5CC1'});
				$(this).children('.img').children('p').css({'color': '#333333'});
				$(this).children('.img').children('h3').css({'color': '#333333'});
			})
			// 
			$('.shenqing_tiaojian .content .box:nth-child(3n)').css({'margin-right': '0'});
			// 
			$('.nandian_fenxi .content .ctop .box:last-child').css({'margin-right': '0'});
			$('.nandian_fenxi .content .img>div:last-child').css({'margin-right': '0'});
			$('.nandian_fenxi .content .cbottom .box:last-child').css({'margin-right': '0'});
			// 
			$('.shenqing_jieguo .content .ctop .box:last-child').css({'margin-right': '0'});
			$('.shenqing_jieguo .content .cbottom .box p:nth-child(2)').css({'padding-top': '15px'});
			$('.shenqing_jieguo .content .cbottom .box:last-child').css({'margin-right': '0'});
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
			$('.bjts .content .box:nth-child(3n)').css({'margin-right': '0'});
			// 
			var boxIndex = $('.guihua .content .box');
			var spanIndex = $('.guihua .content .xian span');
			var pIndex = $('.guihua .content .xian p');
			for( var i=0; i<boxIndex.length; i++ ){
				if( i%2 != 0 ){
					$('.guihua .content .box').eq(i).css({
						'top': '178px',
						'left': (i * 135) + 40 + 'px'
					})
				}else{
					$('.guihua .content .box').eq(i).css({
						'bottom': '178px',
						'left': (i * 135) + 40 + 'px'
					})
				}
			}
			for(var i=0; i<pIndex.length; i++){
				if( i%2!=0 ){
					pIndex.eq(i).css({'bottom': '25px'});
				}else{
					pIndex.eq(i).css({'top': '25px'});
				}
			}
			pIndex.eq(0).css({'left': '-10px'});
			pIndex.eq(1).css({'left': '122px'});
			pIndex.eq(2).css({'left': '260px'});
			pIndex.eq(3).css({'left': '389px'});
			pIndex.eq(4).css({'left': '520px'});
			pIndex.eq(5).css({'right': '229px'});
			pIndex.eq(6).css({'right': '92px'});
			pIndex.eq(7).css({'right': '-43px'});
			$('.guihua .content .box:nth-child(2n)>span').css({
				'top': '-14px',
				'border-color': 'transparent transparent #E1E5F9 transparent'
			})
			$(window).scroll(function () {
				if( $(window).scrollTop()>=$('.guihua').offset().top - 500 ){
					spanIndex.fadeIn(500);
					for(var i=0; i<spanIndex.length; i++){
						spanIndex.eq(i).animate({'left': 135*i + 'px'}, 2000, function () {
								pIndex.fadeIn(2000);
							});
					}
				}
			})
			// 
			$('.Cost .content .box .boxBox').hover(function (){
				$(this).children('.div1').css({'display': 'none'});
				$(this).children('.div2').css({'display': 'inline-block'});
				$(this).css({'background-color': 'rgba(6,4,2,0.64)'});
			}, function () {
				$(this).children('.div1').css({'display': 'inline-block'});
				$(this).children('.div2').css({'display': 'none'});
				$(this).css({'background-color': 'rgba(6,4,2,0.3)'});
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


