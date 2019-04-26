<?php /*a:6:{s:81:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\collegecompass.html";i:1553062603;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1553677718;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1553062603;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1554184743;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1554189517;s:89:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_undergraduate.html";i:1554189591;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/collegecompass.css">
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
				<h1>美国本科留学选校指南</h1>
				<h2>留学选校必读  适合自己的才是最好的</h2>
				<a  href="javascript:;" onclick="go()">快速匹配院校</a>
			</div>
		</div>
		
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">选校标准</span>
				<span>学校类型</span>
				<span>选校技巧</span>
				<span>选校误区</span>
				<span>背景提升</span>
				<span>申请条件</span>
				<span>申请流程</span>
				<span>彬彬优势</span>
			</div>
		</div>
		<div class="navHidden"></div>
		
		<!-- 美国本科留学八大选校标准 -->
		<div class="xuanxiao_biaozhun zn_index gWidth1170">
			<h3 class="title">美国本科留学八大选校标准</h3>
			<div class="content clearfix">
				<div class="box fl">
					<span class="benkeliuxueImg icon1"></span>
					<!-- <img src="/static/home/img/page/benke_xuanxiao/icon1.png" alt=""> -->
					<span></span>
					<p>教学质量</p>
					<div class="hidden">
						<p>美国各地区经济主体不一，东北部经济发达，将来实习就业的机会比较多，比较适合学习商科专业；想申请理工类专业的话，可以考虑加州；想申请农业类院校，可考虑美国中部。</p>
						<a  href="javascript:;" onclick="go()">名校教学对比&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<span class="benkeliuxueImg icon2"></span>
					<!-- <img src="/static/home/img/page/benke_xuanxiao/icon2.png" alt=""> -->
					<span></span>
					<p>入学条件要求</p>
					<div class="hidden">
						<p>大部分学校都需要提供语言成绩以及申请材料，还要了解该校是否需要面试、需要哪些材料、有哪些申请要求以及申请截止日期等等，避免浪费不必要的申请费用。</p>
						<a target="_blank" href="/page/collegesqgl.html">详细申请材料&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<span class="benkeliuxueImg icon3"></span>
					<!-- <img src="/static/home/img/page/benke_xuanxiao/icon3.png" alt=""> -->
					<span></span>
					<p>学校排名</p>
					<div class="hidden">
						<p>学校排名可作为选校参考之一，一般以Peter-sons Guide、US News 以及World Report为准。在选校时应根据系排名而非校排名，切忌不可集中选择名次太接近的学校。</p>
						<a target="_blank" href="/page/university_ranking.html">2019年 US News 排名&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<span class="benkeliuxueImg icon4"></span>
					<!-- <img src="/static/home/img/page/benke_xuanxiao/icon4.png" alt=""> -->
					<span></span>
					<p>地理位置</p>
					<div class="hidden">
						<p>美国各地区经济主体不一，东北部经济发达，将来实习就业的机会比较多，比较适合学习商科专业；想申请理工类专业的话，可以考虑加州；想申请农业类院校，可考虑美国中部。</p>
						<a  href="javascript:;" onclick="go()">名校云集位置&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<span class="benkeliuxueImg icon5"></span>
					<!-- <img src="/static/home/img/page/benke_xuanxiao/icon5.png" alt=""> -->
					<span></span>
					<p>奖学金</p>
					<div class="hidden">
						<p>美国大学一般会说明奖学金的发放政策，如有无针对国际学生的奖学金、数额、名额、申请要求等，申请奖学金，尤其是许多文理学院，越早申请获得的机会越大。</p>
						<a target="_blank" href="/page/collegejxj.html">奖学金申请条件&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<span class="benkeliuxueImg icon6"></span>
					<!-- <img src="/static/home/img/page/benke_xuanxiao/icon6.png" alt=""> -->
					<span></span>
					<p>留学费用</p>
					<div class="hidden">
						<p>不同学习阶段、专业、学校地理位置、学校等级等都会导致学费和生活费有所不同，不同学校的奖学金也有所差异。</p>
						<a target="_blank" href="/page/collegemoney.html">留学费用清单&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<span class="benkeliuxueImg icon7"></span>
					<!-- <img src="/static/home/img/page/benke_xuanxiao/icon7.png" alt=""> -->
					<span></span>
					<p>专业选择</p>
					<div class="hidden">
						<p>择校时，更应该重点关注学校的优势专业。重点大学的特色学科和一般大学的优势专业，才更具有竞争力。</p>
						<a target="_blank" href="/page/collegemajor.html">热门专业排名&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<span class="benkeliuxueImg icon8"></span>
					<!-- <img src="/static/home/img/page/benke_xuanxiao/icon8.png" alt=""> -->
					<span></span>
					<p>就业实习机会</p>
					<div class="hidden">
						<p>有些学校开设的课程与当地工商机构建教合作，学生们可以从理论以及实际操作中学习。</p>
						<a  href="javascript:;" onclick="go()">就业实习申请&gt;</a>
					</div>
				</div>
			</div>
			<a  href="javascript:;" onclick="go()">点击匹配学校</a>
		</div>
		
		<!-- 美国本科留学学校类型 -->
		<div class="xuexiao_leixing zn_index">
			<div class="gWidth1170">
				<h3 class="title">美国本科留学学校类型</h3>
				<div class="content">
					<div class="lxTitle">
						<span class="active">美国综合大学</span>
						<span>美国文理学院</span>
						<span>美国社区大学</span>
					</div>
					<div class="divbox">
						<p>优势特点：知名度高、学费较低、各专业学科齐全、研究项目丰富、就业机会多、教学质量高</p>
						<table class="table1">
							<tr><th>排名</th><th>学校名称</th><th>明星校友</th><th>所在城市</th><th>学费/年</th><th>奖学金额度</th></tr>
						</table>
						<div class="table2">
							<table>
								<tr><td>1</td><td>普林斯顿大学</td><td>华罗庚</td><td>Princeton, NJ</td><td>$47,140</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>2</td><td>哈佛大学</td><td>梁思成 范玮琪</td><td>Cambridge, MA</td><td>$50,420</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>3</td><td>哥伦比亚大学</td><td>杨澜 胡适</td><td>New York, NY</td><td>$59,430</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>3</td><td>麻省理工学院</td><td>钱学森 张朝阳</td><td>Cambridge, MA</td><td>$51,832</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>3</td><td>芝加哥大学</td><td>李政道 杨振宁</td><td>Chicago, IL</td><td>$57,006</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>3</td><td>耶鲁大学</td><td>詹天佑 施汝为</td><td>New Haven, CT</td><td>$53,430</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>7</td><td>斯坦福大学</td><td>朱棣文 李泽楷</td><td>Stanford, CA</td><td>$51,354</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>8</td><td>杜克大学</td><td>吴中伦 程津培</td><td>Durham, NC</td><td>$55,960</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>8</td><td>宾夕法尼亚大学</td><td>郎咸平 林徽因</td><td>Philadelphia, PA</td><td>$55,584</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>10</td><td>约翰霍普金斯大学</td><td>吴军 李国华</td><td>Baltimore, MD</td><td>$53,740</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>10</td><td>西北大学</td><td>John A.Peple</td><td>Evanston, IL</td><td>$54,567</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>12</td><td>加州理工学院</td><td>钱学森 周培源</td><td>Pasadena, CA</td><td>$52,362</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>12</td><td>达特茅斯学院</td><td>曾子墨 林欣禾</td><td>Hanover, NH</td><td>$55,035</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>14</td><td>布朗大学</td><td>刘兆汉</td><td>Providence, RI</td><td>$55,656</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>14</td><td>范德堡大学</td><td>宋嘉树</td><td>Nashville, TN</td><td>$49,816</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>16</td><td>康奈尔大学</td><td>茅以升 任鸿隽</td><td>Ithaca, NY</td><td>$55,188</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>16</td><td>莱斯大学</td><td>刘维宁</td><td>Houston, TX</td><td>$47,350</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>18</td><td>圣母大学</td><td>-</td><td>Notre Dame, IN</td><td>$53,391</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>19</td><td>加州大学洛杉矶分校</td><td>Louis J.Ignarro（UCLA药理学教授）</td><td>Los Angeles, CA</td><td>$41,294</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>19</td><td>圣路易斯华盛顿大学</td><td>吴征 姚洋</td><td>St. Louis, MO</td><td>$53,399</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>21</td><td>埃默里大学</td><td>韩启德</td><td>Atlanta, GA</td><td>$51,306</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>22</td><td>乔治城大学</td><td>Bill Clinton（美国前总统）</td><td>Washington, DC</td><td>$54,104</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>22</td><td>加州大学伯克利分校</td><td>马启思 丘成桐</td><td>Berkeley, CA</td><td>$43,232</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>22</td><td>南加州大学</td><td>蔡同荣</td><td>Los Angeles, CA</td><td>$56,225</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>25</td><td>卡耐基梅隆大学</td><td>茅以升 李开复</td><td>Pittsburgh, PA</td><td>$55,465</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>25</td><td>弗吉尼亚大学</td><td>Woodrow Wilson（美国第28任总统）</td><td>Charlottesville, VA</td><td>$48,891</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>27</td><td>塔夫斯大学</td><td>刘小明（著名音乐教育家）</td><td>Medford, MA</td><td>$56,382</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>27</td><td>密歇根大学安娜堡分校</td><td>朱光亚 朱敬一</td><td>Ann Arbor, MI</td><td>$49,350</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>27</td><td>维克森林大学</td><td>程超</td><td>Winston-Salem, NC</td><td>$53,322</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>30</td><td>纽约大学</td><td>李昌钰 林芳华</td><td>New York, NY</td><td>$51,828</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
							</table>
						</div>
					</div>
					<div class="divbox">
						<p>优势特点：专注就业时的综合技能、师资雄厚、注重通才教育和素质培养、奖学金丰厚、小班教学、安全性更高</p>
						<table class="table1">
							<tr><th>排名</th><th>学校名称</th><th>明星校友</th><th>所在城市</th><th>学费/年</th><th>奖学金额度</th></tr>
						</table>
						<div class="table2">
							<table>
								<tr><td>1</td><td>威廉姆斯学院</td><td>王力宏</td><td>Williamstown, MA</td><td>$53,550</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>2</td><td>艾姆赫斯特学院</td><td>美国前总统卡尔文柯立芝</td><td>Amherst, MA</td><td>$54,310</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>3</td><td>斯沃斯莫尔学院</td><td>-</td><td>Swarthmore, PA</td><td>$46,060</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>3</td><td>韦尔斯利学院</td><td>宋美龄 冰心</td><td>Wellesley, MA</td><td>$51,148</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>5</td><td>鲍登学院</td><td>Edwin M. Lee</td><td>Brunswick, ME</td><td>$51,848</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>5</td><td>明德学院</td><td>-</td><td>Middlebury, VT</td><td>$62,456</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>5</td><td>波莫纳学院</td><td>梅兰芳</td><td>Claremont, CA</td><td>$51,075</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>5</td><td>卡尔顿学院</td><td>梁思礼</td><td>Northfield, MN</td><td>$52,782</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>9</td><td>卡莱门麦肯纳学院</td><td>Henry Kravis  George Roberts</td><td>Claremont, CA</td><td>$37,160</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>10</td><td>戴维森学院</td><td>斯蒂芬·库里</td><td>Davidson, NC</td><td>$49,949</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>11</td><td>格林内尔学院</td><td>-</td><td>Grinnell, IA</td><td>$52,392</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>11</td><td>哈弗福德学院</td><td>George P. Smith</td><td>Haverford, PA</td><td>$54,592</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>11</td><td>史密斯学院</td><td>芭芭拉·布什</td><td>Northampton, MA</td><td>$52,404</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>11</td><td>瓦萨尔学院</td><td>安妮·海瑟薇</td><td>Poughkeepsie, NY</td><td>$56,960</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>11</td><td>华盛顿与李大学</td><td>Matt Bevin</td><td>Lexington, VA</td><td>$52,455</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>16</td><td>科尔盖特大学</td><td>邓肯.尼德奥尔</td><td>Hamilton, NY</td><td>$55,870</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>16</td><td>汉密尔顿学院</td><td>-</td><td>Clinton, NY</td><td>$54,620</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>18</td><td>科尔比学院</td><td>本杰明·富兰克林·巴特勒</td><td>Waterville, ME</td><td>$55,210</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>18</td><td>哈维姆德学院</td><td>George Nelson</td><td>Claremont, CA</td><td>$56,876</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>18</td><td>西点军校</td><td>德怀特 艾森豪威尔（美国第34任总统）</td><td>West Point, NY</td><td>N/A</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>18</td><td>卫斯理大学</td><td>陈家强</td><td>Middletown, CT</td><td>$54,614</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>22</td><td>贝茨学院</td><td>-</td><td>Lewiston, ME</td><td>$53,794</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>22</td><td>创价大学</td><td>-</td><td>Aliso Viejo, CA</td><td>$33,146</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>22</td><td>美国海军学院</td><td>-</td><td>Annapolis, MD</td><td>N/A</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>25</td><td>巴纳德学院</td><td>康同璧</td><td>New York, NY</td><td>$55,032</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>25</td><td>里士满大学</td><td>-</td><td>Univ. of Richmond, VA</td><td>$52,610</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>27</td><td>布林莫尔学院</td><td>德鲁·福斯特（哈佛大学第一任女校长）</td><td>Bryn Mawr, PA</td><td>$52,360</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>27</td><td>科罗拉多学院</td><td>-</td><td>Colorado Springs, CO</td><td>$55,470</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>27</td><td>玛卡莱斯特学院</td><td>-</td><td>St. Paul, MN</td><td>$54,348</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>30</td><td>凯尼恩学院</td><td>-</td><td>Gambier, OH</td><td>$55,930</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
							</table>
						</div>
					</div>
					<div class="divbox">
						<p>优势特点：入学门槛低、名校跳板、学费低廉、申请时间短、小班授课、入学时间灵活</p>
						<table class="table4">
							<tr><th>学校名称</th><th>所在城市</th><th>可转大学</th><th>在线评估</th></tr>
						</table>
						<div class="table3">
							<table>
								<tr><td>硅谷圣马特奥三学院</td><td>San Mateo, California</td><td>哈佛大学、斯坦福大学、麻省理工学院</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>圣马特奥社区学院</td><td>San Francisco</td><td>美国加州大学</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>圣莫尼卡学院</td><td>Santa Monica</td><td>加州大学洛杉矶分校、美国南加州大学</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>岱伯洛谷学院</td><td>Pleasant Hill</td><td>美国加州大学</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>迪安萨社区学院</td><td>Cupertino</td><td>加利福尼亚大学、斯坦福大学</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>圣芭芭拉城市学院</td><td>Santa Barbara</td><td>加州大学、耶鲁大学等</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>肯尼亚达学院</td><td>State of California</td><td>加利福尼亚大学、加州大学等</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>尔湾社区学院</td><td>State of California</td><td>加利福尼亚大学、加州大学等</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>奥洛尼学院</td><td>San Francisco Bay Area</td><td>加州州立大学</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>帕洛玛学院</td><td>San Marcos</td><td>加州大学</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>米拉柯斯达学院</td><td>San Diego</td><td>圣地亚哥大学、圣地亚哥州立大学</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>伯克利城市学院</td><td>Peralta District</td><td>加州大学伯克利分校</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>费城学院</td><td>Philadelphia</td><td>密歇根州立大学</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
								<tr><td>橘郡海岸学院</td><td>State of California</td><td>加州大学洛杉矶分校</td><td><a  href="javascript:;" onclick="go()">免费评估</a></td></tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国本科留学选校技巧 -->
		<div class="xx_jq zn_index gWidth1170">
			<h3 class="title">美国本科留学选校技巧</h3>
			<div class="content clearfix">
				<div class="box fl">
					<h3>不要被费用吓到</h3>
					<div class="hidden">
						<p>由于美国留学人数的增多，导致越来越多留学生名落孙山，因此预留备选学校是非常关键的。可根据自己的选校条件筛选出候选大学的列表；也可按综合性大学和文理学院分类筛选候选列表。</p>
						<a  href="javascript:;" onclick="go()">如何挑选备选学校&gt;&gt;</a>
					</div>
				</div>
				<div class="box box2 fl">
					<h3>预留备选学校</h3>
					<div class="hidden">
						<p>美国留学费用在每个家庭的决策过程中起着很大的作用，但不要让它决定了你的选择。有很多学校都提供助学金和奖学金，所以表面上的全额学费，最终可能只需要付其中的一部分。</p>
						<a  href="javascript:;" onclick="go()">美国留学费用清单&gt;&gt;</a>
					</div>
				</div>
				<div class="box box3 fl">
					<h3>国际生比例</h3>
					<div class="hidden">
						<p>在全球化深入发展的今天，我们比以往更看重的是与生活、学习经历和文化不同的人交流，因为更利于学生全面发展。所以学校录取各个国家的学生的百分比也非常重要。</p>
						<a  href="javascript:;" onclick="go()">如何提高沟通能力&gt;&gt;</a>
					</div>
				</div>
				<div class="box box4 fl">
					<h3>位置环境</h3>
					<div class="hidden">
						<p>许多人选校时只考虑排名高的学校，而忽视了地理位置。其实很多研究型大学都在偏僻的小镇，因此只考虑学校排名而不考虑位置，在一定程度上存在着就业的风险。</p>
						<a  href="javascript:;" onclick="go()">目标学校位置&gt;&gt;</a>
					</div>
				</div>
				<div class="box box5 fl">
					<h3>衡量声誉</h3>
					<div class="hidden">
						<p>在所谓的常青藤学校、各类排名的炒作下，学校的声誉似乎变成了数字。学生选校时需要考虑的是一个学校在地区的综合口碑，不要因为表面而忽视了内在。</p>
						<a  href="javascript:;" onclick="go()">目标学校评估&gt;&gt;</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国本科留学选校误区 -->
		<div class="xuanxiao_wuqu zn_index gWidth1170">
			<h3 class="title">美国本科留学选校误区</h3>
			<div class="content clearfix">
				<div class="box fl">
					<h3>只看重学校排名</h3>
					<p>学校排名是选校的重要依据，但并不能作为选校的唯一标准，只能把它作为一个参考，关键要看该学校是否真的适合自己。</p>
				</div>
				<div class="box fl">
					<h3>只认大牌教授</h3>
					<p>名教授不一定就是好老师，许多大学里的教授做研究水平一流，但对教学却不屑一顾或不感兴趣，在这样的名师下学习 “ 有名无实 ” </p>
				</div>
				<div class="box fl">
					<h3>提前做申请准备</h3>
					<p>各校的基本申请要求、截止日期、材料清单等，准备过程是费时费力的，申请者应及早花时间弄清招生程序，以免延误。</p>
				</div>
				<div class="box fl">
					<h3>被宣传材料吸引</h3>
					<p>选校时应深入了解每个学校的特点和长处，看看在漂亮的照片后面是否有掩盖的弱点，要理想对比各个学校的真实水平。</p>
				</div>
				<div class="box fl">
					<h3>抛开自己选学校</h3>
					<p>很多学生在选校时只考虑学校如何，而忽视了自身条件，选校前首先要清楚自己的留学的目的是什么，这所学校是否真的适合自己。</p>
				</div>
				<div class="box fl">
					<h3>无视转学学分</h3>
					<p>在选择转学学校的时候需要认真了解该学校的美国留学本科转学分政策，可以到学校官网查看学校开设的课程说明，或者直接联系转学学校询问能转多少个学分。</p>
				</div>
			</div>
			<div class="anniu">
				<a  href="javascript:;" onclick="go()">更多选校问题咨询</a>
				<a  href="javascript:;" onclick="go()" class="a1">留学咨询热线：400-900-9770</a>
			</div>
		</div>
		
		<!-- 全维度高品质背景提升项目 -->
		<div class="bjts_xm zn_index">
			<div class="gWidth1170">
				<h3 class="title">全维度高品质背景提升项目</h3>
				<p>提升软性背景助力名校申请</p>
				<div class="content clearfix">
					<div class="box fl">
						<div class="div1">斯坦福国际精英大学先修项</div>
						<div class="hidden">
							<h3>斯坦福国际精英大学先修项</h3>
							<p>科研时间：2019年8月6日 - 8月18日（13天）</p>
							<a  href="/xxsy/331.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="box box2 fl">
						<div class="div1">加州大学伯克利分校暑期夏校项目</div>
						<div class="hidden">
							<h3>加州大学伯克利分校暑期夏校项目</h3>
							<p>科研时间：2019年7月14日-7月27。</p>
							<a  href="/xxsy/332.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="box box3 fl">
						<div class="div1">科学类夏令营</div>
						<div class="hidden">
							<h3>科学类夏令营</h3>
							<p>科研时间：每年暑假开始招生。</p>
							<a  href="/xxsy/325.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="box box4 fl">
						<div class="div1">数学类夏令营</div>
						<div class="hidden">
							<h3>数学类夏令营</h3>
							<p>科研时间：每年暑期。</p>
							<a  href="/xxsy/324.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="box box5 fl">
						<div class="div1">麻省理工学院-物理-量子光学物理、通讯物理项目</div>
						<div class="hidden">
							<h3>麻省理工学院-物理-量子光学物理、通讯物理项目</h3>
							<p>科研时间：寒假，暑假，每期时间长度为4周；具体情况根据学生面试情况由美方进行调整。</p>
							<a  href="/mxky/275.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="box box6 fl">
						<div class="div1">哈佛大学 金融学科研</div>
						<div class="hidden">
							<h3>哈佛大学 金融学科研</h3>
							<p>科研时间：寒假、暑假，时间长度为3-4周，具体情况根据学生面试情况由美方进行调整。</p>
							<a  href="/mxky/257.html" target="_blank">查看详情</a>
						</div>
					</div>
				</div>
				<a  href="javascript:;" onclick="go()">更多背景提升项目</a>
			</div>
		</div>
		
		<!-- 美国本科留学申请条件 -->
		<div class="tiaojian zn_index gWidth1170">
			<h3 class="title">美国本科留学申请条件</h3>
			<div class="content clearfix">
				<div class="box fl">
					<h3>标准化考试</h3>
					<p>托福(TOEFL)    雅思(IELTS)   SAT(SAT1 &amp; SAT2)  ACT   AP   IB</p>
					<a  href="javascript:;" onclick="go()">咨询目标大学考试要求 &gt;&gt;</a>
				</div>
				<div class="box fl">
					<h3>学术成绩</h3>
					<p>因为美国高中是四年制，所以申请美国本科时，通常会要求9-12年级（国内初三到高三）的成绩单。</p>
					<a  href="javascript:;" onclick="go()">班级排名对申请的重要性 &gt;&gt;</a>
				</div>
				<div class="box fl">
					<h3>个人能力和课外活动</h3>
					<p>与学习能力一样，招生委员会可以从学生对课外活动和其他个人能力的描述中，了解到学生的个人品性。</p>
					<a  href="javascript:;" onclick="go()">个人能力提升 &gt;&gt;</a>
				</div>
				<div class="box fl">
					<h3>文书</h3>
					<p>彬彬教育专业文书导师进行指导，美式思维助力申请美国名校。</p>
					<a  href="javascript:;" onclick="go()">文书如何挖掘亮点 &gt;&gt;</a>
				</div>
				<div class="box fl">
					<h3>面试</h3>
					<p>不同学校的面试也不相同，有些学校面试时必须的，而有些学校则可以不用通过面试，想进名校的申请者还是尽早做准备比较好。</p>
					<a  href="javascript:;" onclick="go()">获取面试技巧 &gt;&gt;</a>
				</div>
				<div class="box fl">
					<h3>推荐信</h3>
					<p>通过推荐信可以对申请人在其他申请材料中所呈现出来的各种品质加以证实，并且可以体现申请人的人际交往能力，以及对自己周围环境产生影响的能力。</p>
					<a  href="javascript:;" onclick="go()">推荐信写作指导 &gt;&gt;</a>
				</div>
			</div>
		</div>
		
		<!-- 美国本科留学申请流程 -->
		<div class="liucheng zn_index">
			<div class="gWidth1170">
				<h3 class="title">美国本科留学申请流程</h3>
				<div class="content">
					<div class="one clearfix">
						<div class="box fl"><p>提前规划<br />出国考试<br />背景提升<br />暑假安排</p></div>
						<div class="box fl"><p>申请选校<br />文书创作<br />申请材料<br />初步规划</p></div>
						<div class="box fl"><p>学校申请<br />状态跟踪<br />深度规划<br />调整选校</p></div>
						<div class="box fl"><p>准备面试<br />等待录取<br />确定学校</p></div>
						<div class="box fl"><p>准备签证<br />联系学校<br />行前准备</p></div>
					</div>
					<div class="two clearfix">
						<h3>本科申请流程</h3>
						<div>
							<div class="box">6月-8月</div>
							<div class="box">9月-11月</div>
							<div class="box">11月-次年1月</div>
							<div class="box">1月-4月</div>
							<div class="box">5月-8月</div>
							<em></em>
						</div>
					</div>
					<div class="three clear">
						<img src="/static/home/img/page/benke_xuanxiao/xia.png" alt="">
						<img src="/static/home/img/page/benke_xuanxiao/xia.png" alt="">
						<img src="/static/home/img/page/benke_xuanxiao/xia.png" alt="">
						<img src="/static/home/img/page/benke_xuanxiao/xia.png" alt="">
						<img src="/static/home/img/page/benke_xuanxiao/xia.png" alt="">
					</div>
					<div class="four clearfix">
						<h3 class="fl">彬彬服务内容</h3>
						<div class="fl">
							<div class="box fl"><p>罗列申请材料清单<br />规划申请方案<br />定制活动规划<br />文书材料收集</p></div>
							<div class="box fl"><p>选校指导<br />文书构思指导<br />简历和推荐信写作指导<br />早申请批次指导<br />邮寄早申请材料</p></div>
							<div class="box fl"><p>正常申请批次指导<br />完成所有学校的申请<br />材料邮寄<br />跟进申请状态<br />调整选校方案确定选校</p></div>
							<div class="box fl"><p>面试技巧指导<br />跟踪申请状态<br />补递材料</p></div>
							<div class="box fl"><p>签证指导<br />联系学校<br />心理辅导<br />行前指导</p></div>
						</div>
					</div>
				</div>
				<a  href="javascript:;" onclick="go()">量身定制留学方案</a>
			</div>
		</div>
		
		<!-- 彬彬教育致力让每一个学生牵手世界名校 -->
		<div id="mydiv" class="zn_index" style="height: 695px;">
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
			$gkLength = $('.zn_index').length;
			window.onscroll = function () {
				var top = document.documentElement.scrollTop || document.body.scrollTop;
				if(top>=nav){
					$('.bannerNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999'});
					$('.navHidden').css({'display': 'block'});
				}else if(top<=$('.zn_index').eq(0).offset().top){
					$('.bannerNav').css({'position': 'static', 'top':''});
					$('.navHidden').css({'display': 'none'});
				}
				for( var i=0; i<$gkLength; i++ ){
					if( i == $gkLength - 1 ){
						if( top>=$('.zn_index').eq(i).offset().top ){
							$('.bannerNav span').removeClass('active');
							$('.bannerNav span').eq(i).addClass('active');
						}
						return;
					}
					if( top>=$('.zn_index').eq(i).offset().top - 200 && top<$('.zn_index').eq(i+1).offset().top - 200 ){
						$('.bannerNav span').removeClass('active');
						$('.bannerNav span').eq(i).addClass('active');
					}
				}
			}
			$('.bannerNav span').on('click', function () {
				var index = $('.bannerNav span').index($(this));
				var offsetTop = $('.zn_index').eq(index).offset().top;
				$('body, html').stop().animate({scrollTop: offsetTop + 0}, 1500);
			})
			$('.bannerNav span:last-child').css({'margin-right': '0'});
			// 
			$('.xuanxiao_biaozhun .content .box:nth-child(4n)').css({'margin-right': '0'});
			$('.xuanxiao_biaozhun .content .box').hover(function () {
				$(this).children('img').stop().fadeOut();
				$(this).children('span').stop().fadeOut();
				$(this).children('p').stop().fadeOut();
				$(this).children('.hidden').stop().fadeIn();
			}, function () {
				$(this).children('img').stop().fadeIn();
				$(this).children('span').stop().fadeIn();
				$(this).children('p').stop().fadeIn();
				$(this).children('.hidden').stop().fadeOut();
			})
			// 
			$('.xuexiao_leixing .content .lxTitle span:last-child').css({'margin-right': '0'});
			$('.xuexiao_leixing .content .divbox').eq(0).css({'display': 'block'});
			$('.xuexiao_leixing .content .lxTitle span').on('click', function () {
				var index = $('.xuexiao_leixing .content .lxTitle span').index($(this));
				$(this).addClass('active').siblings('span').removeClass('active');
				$('.xuexiao_leixing .content .divbox').eq(index).stop().fadeIn().siblings('.divbox').css({'display': 'none'});
			})
			// 
			var tableOne = $('.xuexiao_leixing .content .divbox .table1');
			var tableIndex = $('.xuexiao_leixing .content .divbox .table2');
			tdWidth(tableOne, true);
			tdWidth(tableIndex, false);
			function tdWidth (father, isTitle) {
				for ( var i=0; i<father.length; i++) {
					var fatherTr = father[i].getElementsByTagName('tr');
					for ( var k=0; k<fatherTr.length; k++ ) {
						fatherTr[k].children[0].style.width = '94px';
						fatherTr[k].children[1].style.width = '264px';
						fatherTr[k].children[2].style.width = '290px';
						fatherTr[k].children[3].style.width = '190px';
						fatherTr[k].children[4].style.width = '150px';
						if(isTitle){
							fatherTr[k].children[5].style.width = '175px';
						}else{
							fatherTr[k].children[5].style.width = '158px';
						}
					}
				}
			}
			
			$('.xuexiao_leixing .content .divbox .table4 th').eq(0).css({'width': '253px'});
			$('.xuexiao_leixing .content .divbox .table4 th').eq(1).css({'width': '308px'});
			$('.xuexiao_leixing .content .divbox .table4 th').eq(2).css({'width': '477px'});
			$('.xuexiao_leixing .content .divbox .table4 th').eq(3).css({'width': '130px'});
			// 
			$('.xx_jq .content .box').hover(function () {
				$(this).children('h3').stop().fadeOut();
				$(this).children('.hidden').stop().fadeIn();
			}, function () {
				$(this).children('h3').stop().fadeIn();
				$(this).children('.hidden').stop().fadeOut();
			})
			// 
			$('.xuanxiao_wuqu .content .box:nth-child(3n)').css({'margin-right': '0'});
			// 
			$('.bjts_xm .content .box:nth-child(3n)').css({'margin-right': '0'});
			$('.bjts_xm .content .box').hover(function () {
				$(this).children('.div1').stop().fadeOut();
				$(this).children('.hidden').stop().fadeIn();
			}, function () {
				$(this).children('.div1').stop().fadeIn();
				$(this).children('.hidden').stop().fadeOut();
			})
			// 
			$('.tiaojian .content .box').hover(function () {
				$(this).css({'color': '#ffffff', 'background-color': '#000000', 'background-image': 'url(/static/home/img/page/benke_xuanxiao/20190226142529.png)'});
				$(this).children('a').css({'color': '#ffffff'});
				
			}, function () {
				$(this).css({'color': '#333333', 'background-color': '#F9F9F8', 'background-image': 'url(/static/home/img/page/benke_xuanxiao/20190226142517.png)'});
				$(this).children('a').css({'color': '#DB873F'});
			})
			$('.tiaojian .content .box:nth-child(3n)').css({'margin-right': '0'});
			// 
			$('.liucheng .content .one .box:last-child').css({'margin-right': '0'});
			$('.liucheng .content .two>div .box').eq(0).css({'top': '-17px', 'left': '20px'});
			$('.liucheng .content .two>div .box').eq(1).css({'top': '-17px', 'left': '229px'});
			$('.liucheng .content .two>div .box').eq(2).css({'top': '-17px', 'left': '437px'});
			$('.liucheng .content .two>div .box').eq(3).css({'top': '-17px', 'left': '643px'});
			$('.liucheng .content .two>div .box').eq(4).css({'top': '-17px', 'left': '852px'});
			$('.liucheng .content .three img:last-child').css({'margin-right': '0'});
			$('.liucheng .content .four>div.fl .box:last-child').css({'margin-right': '0'});
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
