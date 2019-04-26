<?php /*a:6:{s:75:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\sciences.html";i:1552974952;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1551955433;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1551670345;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1552959452;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1552966128;s:89:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_undergraduate.html";i:1552974870;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/sciences.css">
	</head>
		<style type="text/css">
			.swiper-slide{
				width: 1168px;
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
				<form action="<?php echo url('search/index'); ?>" method="post">
					<input type="text" name="keywords" placeholder="搜索感兴趣的内容">
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
				<h1>彬彬教育独家解读美国文理学院</h1>
				<h3>享受美式经典教育  让每一个学生都能牵手名校</h3>
				<div class="anniu">
					<a href="javascript:;" onclick="go()">为什么选择美国文理学院</a>
					<a href="javascript:;" onclick="go()" class="a1">测试与文理学院的匹配度</a>
				</div>
			</div>
		</div>
		
		<!-- banenrNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">学院概况</span>
				<span>优势解读</span>
				<span>最新排名</span>
				<span>名校案例</span>
				<span>导师团队</span>
				<span>背景提升</span>
				<span>奖学金</span>
				<span>申请规划</span>
				<span>彬彬优势</span>
			</div>
		</div>
		<div class="navHidden"></div>
		
		<!-- 美国文理学院概况 -->
		<div class="xueyuan_gaikuo wl_index gWidth1170">
			<h3 class="title">美国文理学院概况</h3>
			<div class="content clearfix">
				<img src="/static/home/img/page/wenli_xueyuan/tu1.jpg" class="fl" alt="美国文理学院概况" title="美国文理学院概况">
				<div class="fr">
					<p>Liberal Arts College,即文理学院，是美国高校的重要种类之一，以本科教育为主，特别注重全面综合教育。在大部分美国人心目中,文理学院往往代表着经典、小规模、高质量的本科教育，它们的学术声誉并不亚于哈佛、耶鲁等名校因而成为很多美国贵族教育子女的首选。例如,我们耳熟能详的美国国务卿奥尔布赖特、美国华人劳工部长赵晓岚、美国前总统肯尼迪的夫人杰奎琳都毕业于美国的文理学院。</p>
					<p>需要指出的是,这里的arts不能简单的理解成艺术,而应该是素质、能力和思想这样的软性的能力。 Liberal Arts College是相对于具体的职业教育而言的,其目标不在于教会学生某些具体的谋生的技能,而是从多方面对学生进行教育,使其成为一个高素质,有教养的文化人。因此, Liberal Arts College肯定会教授古希腊的哲学思想史,而肯定不会教授会计学。由于最初去文理学院就读的都是贵族后裔,他们也不需要担心就业压力。他们所关注的是如何提升自己的素质,提高自己的修养。因此,这里的 liberal或多或少带有某中贵族特权的色彩。</p>
				</div>
				<a href="javascript:;" onclick="go()">文理学院录取标准&gt;&gt;</a>
			</div>
		</div>
		
		<!-- 美国文理学院优势解读 -->
		<div class="youshi_jiedu wl_index">
			<div class="gWidth1170">
				<h3 class="title">美国文理学院优势解读</h3>
				<p>小规模、师生比例高、专著本科教育、坚持通才教育——是文理学院的教育哲学。</p>
				<!-- content -->
				<div class="content">
					<div class="ctop clearfix">
						<div class="box fl">
							<h3>着力培养面向社会的综合人才</h3>
							<div class="hidden">
								<p>大部分LAC只提供本科教育，但这有利于它将最大的精力花在本科上。学校要求学生接受各个方面的教育，注重思维和写作能力的培养，培养学生的沟通能力和领导能力。</p>
							</div>
						</div>
						<div class="box box2 fl">
							<h3>小班教学制，师生互动性强</h3>
							<div class="hidden">
								<p>由于学校规模小，授课一般是以十几人的小班为主，师生间互动密切，生活上也比较容易融入美国的文化。而且，文理学院资金雄厚，校友联系紧密，在实习以及就业机会上也有很大优势。</p>
							</div>
						</div>
						<div class="box box3 fl">
							<h3>本科教育质量高，继续深造基础好</h3>
							<div class="hidden">
								<p>好的文理学院的声誉绝不比哈佛、耶鲁差，学生的质量也很高。</p>
							</div>
						</div>
					</div>
					<div class="cbottom clearfix">
						<div class="box box4 fl">
							<h3>奖学金丰富，竞争力小</h3>
							<div class="hidden">
								<p>如果申请者在选学校时把奖学金放在第一位,那么LAC的机会要比University多,而且竞争也没有University激烈。以《美国新闻与世界报道》排名前20的文理学院和综合性大学作比较,可以很容易得出这个结论。</p>
							</div>
						</div>
						<div class="box box5 fl">
							<h3>录取率、升学率双高数据</h3>
							<div class="hidden">
								<p>TOP 20的美国文理学院，录取率均在30%左右，对比美国综合性大学，已经是非常高的录取率。通过美国文理学院进入研究生和博士阶段学习的学生数量甚至超过多数美国综合性大学。</p>
							</div>
						</div>
					</div>
				</div>
				<div class="anniu">
					<a href="javascript:;" onclick="go()">如何获得奖学金</a>
					<a href="javascript:;" onclick="go()" class="a1">文理学院选校标准</a>
				</div>
			</div>
		</div>
		
		<!-- 美国文理学院排名大揭秘 -->
		<div class="jiemi wl_index gWidth1170">
			<h3 class="title">美国文理学院排名大揭秘</h3>
			<!-- content -->
			<div class="content">
				<div class="ctopXx clearfix">
					<span class="active">TOP 1-25</span>
					<span>TOP 26-50</span>
					<span>TOP 51-75</span>
					<span>TOP 76-100</span>
				</div>
				<div class="table">
					<div class="table1">
						<table>
							<tr>
								<th class="pm">排名</th><th class="xname">学校名称</th><th class="ename">学校英文名称</th><th class="dq">地区</th><th class="xf">学费/年</th><th class="lq">录取率</th><th class="jxj">奖学金额度</th>
							</tr>
						</table>
					</div>
					<div class="table2">
						<table>
							<tbody>
								<tr><td>1</td><td>威廉姆斯学院</td><td>Williams College</td><td>Williamstown, MA</td><td>$55,450</td><td>15%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>2</td><td>阿默斯特学院</td><td>Amherst College</td><td>Amherst, MA</td><td>$56,426</td><td>13%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>3</td><td>斯沃斯莫尔学院</td><td>Swarthmore College</td><td>Swarthmore, PA</td><td>$52,588</td><td>11%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>3</td><td>维斯理学院</td><td>Wellesley College</td><td>Wellesley, MA</td><td>$53,732</td><td>22%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>5</td><td>鲍登学院</td><td>Bowdoin College</td><td>Brunswick, ME</td><td>$53,922</td><td>14%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>5</td><td>卡尔顿学院</td><td>Carleton College</td><td>Northfield, MN</td><td>$54,759</td><td>21%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>5</td><td>明德学院</td><td>Middlebury College</td><td>Middlebury, VT</td><td>$54,450</td><td>17%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>5</td><td>波莫纳学院</td><td>Pomona College</td><td>Claremont, CA</td><td>$52,780</td><td>8%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>9</td><td>克莱蒙特麦肯纳学院</td><td>Claremont McKenna College</td><td>Claremont, CA</td><td>$54,405</td><td>10%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>10</td><td>戴维森学院</td><td>Davidson College</td><td>Davidson, NC</td><td>$51,447</td><td>20%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>11</td><td>格林内尔学院</td><td>Grinnell College</td><td>Grinnell, IA</td><td>$52,392</td><td>29%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>11</td><td>哈弗福德学院</td><td>Haverford College</td><td>Haverford, PA</td><td>$54,592</td><td>20%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>11</td><td>史密斯学院</td><td>Smith College</td><td>Northampton, MA</td><td>$52,404</td><td>32%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>11</td><td>瓦萨尔学院</td><td>Vassar College</td><td>Poughkeepsie, NY</td><td>$56,960</td><td>24%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>11</td><td>华盛顿与李大学</td><td>Washington and Lee University</td><td>Lexington, VA</td><td>$52,455</td><td>22%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>16</td><td>科尔盖特大学</td><td>Colgate University</td><td>Hamilton, NY</td><td>$55,870</td><td>28%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>16</td><td>汉密尔顿学院</td><td>Hamilton College</td><td>Clinton, NY</td><td>$54,620</td><td>24%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>18</td><td>科尔比学院</td><td>Colby College</td><td>Waterville, ME</td><td>$55,210</td><td>16%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>18</td><td>哈维姆德学院</td><td>Harvey Mudd College</td><td>Claremont, CA</td><td>$56,876</td><td>15%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>18</td><td>西点军校</td><td>United States Military Academy</td><td>West Point, NY</td><td>N/A</td><td>10%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>18</td><td>卫斯理大学</td><td>Wesleyan University</td><td>Middletown, CT</td><td>$54,614</td><td>16%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>22</td><td>贝茨学院</td><td>Bates College</td><td>Lewiston, ME</td><td>$53,794</td><td>22%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>22</td><td>创价大学</td><td>Soka University of America</td><td>Aliso Viejo, CA</td><td>$33,146</td><td>37%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>22</td><td>美国海军学院</td><td>United States Naval Academy</td><td>Annapolis, MD</td><td>N/A</td><td>8%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>25</td><td>巴纳德学院</td><td>Barnard College</td><td>New York, NY</td><td>$55,032</td><td>15%</td><td><a onclick="go()">点击查询</a></td></tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="table">
					<div class="table1">
						<table>
							<tr>
								<th class="pm">排名</th><th class="xname">学校名称</th><th class="ename">学校英文名称</th><th class="dq">地区</th><th class="xf">学费/年</th><th class="lq">录取率</th><th class="jxj">奖学金额度</th>
							</tr>
						</table>
					</div>
					<div class="table2">
						<table>
							<tbody>
								<tr><td>27</td><td>布林莫尔学院</td><td>Bryn Mawr College</td><td>Bryn Mawr, PA</td><td>$52,360</td><td>38%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>27</td><td>科罗拉多学院</td><td>Colorado College</td><td>Colorado Springs, CO</td><td>$55,470</td><td>15%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>27</td><td>玛卡莱斯特学院</td><td>Macalester College</td><td>St. Paul, MN</td><td>$54,348</td><td>41%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>30</td><td>凯尼恩学院</td><td>Kenyon College</td><td>Gambier, OH</td><td>$55,930</td><td>34%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>30</td><td>曼荷莲女子学院</td><td>Mount Holyoke College</td><td>South Hadley, MA</td><td>$49,998</td><td>51%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>30</td><td>欧柏林学院</td><td>Oberlin College</td><td>Oberlin, OH</td><td>$55,052</td><td>34%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>30</td><td>斯克利普斯学院</td><td>Scripps College</td><td>Claremont, CA</td><td>$55,024</td><td>33%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>30</td><td>美国空军学院</td><td>United States Air Force Academy</td><td>USAF Academy, CO</td><td>N/A</td><td>12%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>35</td><td>圣十字学院</td><td>College of the Holy Cross</td><td>Worcester, MA</td><td>$52,770</td><td>40%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>36</td><td>巴克内尔大学</td><td>Bucknell University</td><td>Lewisburg, PA</td><td>$56,092</td><td>31%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>36</td><td>富兰克林与马歇尔学院</td><td>Franklin and Marshall College</td><td>Lancaster, PA</td><td>$56,550</td><td>34%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>36</td><td>拉斐特学院</td><td>Lafayette College</td><td>Easton, PA</td><td>$52,880</td><td>31%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>39</td><td>西方学院</td><td>Occidental College</td><td>Los Angeles, CA</td><td>$54,686</td><td>42%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>39</td><td>联合学院</td><td>Union College</td><td>Schenectady, NY</td><td>$55,290</td><td>37%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>41</td><td>匹泽尔学院</td><td>Pitzer College</td><td>Claremont, CA</td><td>$52,236</td><td>16%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>41</td><td>斯基德莫尔学院</td><td>Skidmore College</td><td>Saratoga Springs, NY</td><td>$54,270</td><td>25%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>43</td><td>丹尼森大学</td><td>Denison University</td><td>Granville, OH</td><td>$51,960</td><td>37%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>43</td><td>托马斯阿奎那学院</td><td>Thomas Aquinas College</td><td>Santa Paula, CA</td><td>$25,000</td><td>72%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>43</td><td>惠特曼学院</td><td>Whitman College</td><td>Walla Walla, WA</td><td>$51,764</td><td>52%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>46</td><td>中央学院</td><td>Centre College</td><td>Danville, KY</td><td>$41,700</td><td>76%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>46</td><td>康涅狄格学院</td><td>Connecticut College</td><td>New London, CT</td><td>$54,820</td><td>38%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>46</td><td>三一学院</td><td>trinity College</td><td>Hartford, CT</td><td>$56,910</td><td>34%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>49</td><td>葛底斯堡学院</td><td>Gettysburg College</td><td>Gettysburg, PA</td><td>$54,480</td><td>46%</td><td><a onclick="go()">点击查询</a></td></tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="table">
					<div class="table1">
						<table>
							<tr>
								<th class="pm">排名</th><th class="xname">学校名称</th><th class="ename">学校英文名称</th><th class="dq">地区</th><th class="xf">学费/年</th><th class="lq">录取率</th><th class="jxj">奖学金额度</th>
							</tr>
						</table>
					</div>
					<div class="table2">
						<table>
							<tbody>
								<tr><td>51</td><td>阿格尼斯斯科特学院</td><td>Agnes Scott College</td><td>Decatur, GA</td><td>$41,160</td><td>66%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>51</td><td>狄金森学院</td><td>Dickinson College</td><td>Carlisle, PA</td><td>$54,636</td><td>49%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>51</td><td>弗曼大学</td><td>Furman University</td><td>Greenville, SC</td><td>$49,532</td><td>61%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>51</td><td>罗德学院</td><td>Rhodes College</td><td>Memphis, TN</td><td>$47,890</td><td>51%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>51</td><td>斯贝尔曼学院</td><td>Spelman College</td><td>Atlanta, GA</td><td>$29,064</td><td>40%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>56</td><td>巴德学院</td><td>Bard College</td><td>Annandale on Hudson, NY</td><td>$54,680</td><td>58%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>56</td><td>德堡大学</td><td>DePauw University</td><td>Greencastle, IN</td><td>$49,704</td><td>67%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>56</td><td>劳伦斯大学</td><td>Lawrence University</td><td>Appleton, WI</td><td>$47,475</td><td>61%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>56</td><td>圣劳伦斯大学</td><td>St. Lawrence University</td><td>Canton, NY</td><td>$54,846</td><td>48%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>56</td><td>瓦伯西学院</td><td>Wabash College</td><td>Crawfordsville, IN</td><td>$43,650</td><td>64%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>61</td><td>伯里亚学院</td><td>Berea College</td><td>Berea, KY</td><td>$560</td><td>35%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>61</td><td>马里兰圣约翰学院</td><td>St. John's College</td><td>Annapolis, MD</td><td>$53,218</td><td>55%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>61</td><td>圣奥拉夫学院</td><td>St. Olaf College</td><td>Northfield, MN</td><td>$47,840</td><td>43%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>61</td><td>伊利诺伊惠顿学院</td><td>Wheaton College</td><td>Wheaton, IL</td><td>$36,420</td><td>48%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>65</td><td>卡拉马祖学院</td><td>Kalamazoo College</td><td>Kalamazoo, MI</td><td>$48,516</td><td>73%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>65</td><td>莎拉劳伦斯学院</td><td>Sarah Lawrence College</td><td>Bronxville, NY</td><td>$55,900</td><td>53%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>67</td><td>伍斯特学院</td><td>College of Wooster</td><td>Wooster, OH</td><td>$50,250</td><td>56%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>68</td><td>伯洛伊特学院</td><td>Beloit College</td><td>Beloit, WI</td><td>$50,040</td><td>54%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>68</td><td>霍巴特威廉史密斯学院</td><td>Hobart and William Smith Colleges</td><td>Geneva, NY</td><td>$55,255</td><td>61%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>68</td><td>诺克斯学院</td><td>Knox College</td><td>Galesburg, IL</td><td>$46,554</td><td>72%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>68</td><td>刘易斯克拉克学院</td><td>Lewis &amp; Clark College</td><td>Portland, OR</td><td>$50,934</td><td>71%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>72</td><td>伊利诺伊卫斯理大学</td><td>Illinois Wesleyan University</td><td>Bloomington, IL</td><td>$47,636</td><td>61%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>72</td><td>马里兰圣约翰学院</td><td>St. John's College</td><td>Santa Fe, NM</td><td>$53,218</td><td>55%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>72</td><td>普吉特湾大学</td><td>University of Puget Sound</td><td>Tacoma, WA</td><td>$49,776</td><td>84%</td><td><a onclick="go()">点击查询</a></td></tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="table">
					<div class="table1">
						<table>
							<tr>
								<th class="pm">排名</th><th class="xname">学校名称</th><th class="ename">学校英文名称</th><th class="dq">地区</th><th class="xf">学费/年</th><th class="lq">录取率</th><th class="jxj">奖学金额度</th>
							</tr>
						</table>
					</div>
					<div class="table2">
						<table>
							<tbody>
								<tr><td>76</td><td>阿勒格尼学院</td><td>Allegheny College</td><td>Meadville, PA</td><td>$47,540</td><td>68%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>76</td><td>亨德里克斯学院</td><td>Hendrix College</td><td>Conway, AR</td><td>$45,790</td><td>80%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>76</td><td>希尔斯代尔学院</td><td>Hillsdale College</td><td>Hillsdale, MI</td><td>$27,577</td><td>41%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>76</td><td>特兰西瓦尼亚大学</td><td>transylvania University</td><td>Lexington, KY</td><td>$38,750</td><td>95%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>76</td><td>维拉姆特大学</td><td>Willamette University</td><td>Salem, OR</td><td>$50,074</td><td>89%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>81</td><td>康奈尔学院</td><td>Cornell College</td><td>Mount Vernon, IA</td><td>$42,299</td><td>65%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>81</td><td>厄勒姆学院</td><td>Earlham College</td><td>Richmond, IN</td><td>$46,450</td><td>52%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>81</td><td>穆伦堡学院</td><td>Muhlenberg College</td><td>Allentown, PA</td><td>$52,595</td><td>48%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>81</td><td>普林希匹亚学院</td><td>Principia College</td><td>Elsah, IL</td><td>$29,470</td><td>91%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>81</td><td>弗吉尼亚军事学院</td><td>Virginia Military Institute</td><td>Lexington, VA</td><td>$45,706</td><td>53%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>86</td><td>圣本笃学院</td><td>College of St. Benedict</td><td>St. Joseph, MN</td><td>$45,264</td><td>81%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>86</td><td>朱尼亚塔学院</td><td>Juniata College</td><td>Huntingdon, PA</td><td>$45,597</td><td>71%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>86</td><td>伊利诺伊惠顿学院</td><td>Wheaton College</td><td>Norton, MA</td><td>$52,626</td><td>48%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>89</td><td>路德学院</td><td>Luther College</td><td>Decorah, IA</td><td>$42,290</td><td>65%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>90</td><td>古斯塔夫阿道夫学院</td><td>Gustavus Adolphus College</td><td>St. Peter, MN</td><td>$45,100</td><td>68%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>90</td><td>新佛罗里达学院</td><td>New College of Florida</td><td>Sarasota, FL</td><td>$29,944</td><td>69%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>90</td><td>里德学院</td><td>Reed College</td><td>Portland, OR</td><td>$54,200</td><td>31%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>90</td><td>西南大学</td><td>Southwestern University</td><td>Georgetown, TX</td><td>$42,000</td><td>43%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>90</td><td>乌尔西努学院</td><td>Ursinus College</td><td>Collegeville, PA</td><td>$52,050</td><td>78%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>95</td><td>奥古斯塔纳大学</td><td>Augustana College</td><td>Rock Island, IL</td><td>$42,135</td><td>59%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>95</td><td>本宁顿学院</td><td>Bennington College</td><td>Bennington, VT</td><td>$53,860</td><td>57%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>95</td><td>大西洋学院</td><td>College of the Atlantic</td><td>Bar Harbor, ME</td><td>$43,542</td><td>68%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>95</td><td>俄亥俄卫斯理大学</td><td>Ohio Wesleyan University</td><td>Delaware, OH</td><td>$45,760</td><td>71%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>95</td><td>圣安瑟伦学院</td><td>St. Anselm College</td><td>Manchester, NH</td><td>$41,500</td><td>76%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>95</td><td>圣约翰大学</td><td>St. John's University</td><td>Collegeville, MN</td><td>$44,990</td><td>80%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>95</td><td>印第安纳圣玛丽学院</td><td>St. Mary's College</td><td>Notr Dame, IN</td><td>$42,220</td><td>78%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>95</td><td>马里兰圣玛丽学院</td><td>St. Mary's College of Maryland</td><td>St. Marys City, MD</td><td>$30,568</td><td>82%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>103</td><td>奥斯汀学院</td><td>Austin College</td><td>Sherman, TX</td><td>$39,985</td><td>52%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>103</td><td>霍林斯大学</td><td>Hollins University</td><td>Roanoke, VA</td><td>$39,035</td><td>48%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>103</td><td>霍普学院</td><td>Hope College</td><td>Holland, MI</td><td>$34,010</td><td>74%</td><td><a onclick="go()">点击查询</a></td></tr>
								<tr><td>103</td><td>森林湖学院</td><td>Lake Forest College</td><td>Lake Forest, IL</td><td>$47,064</td><td>53%</td><td><a onclick="go()">点击查询</a></td></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">点击测评与文理学院的匹配度</a>
		</div>
		
		<!-- 彬彬教育让您圆梦美国名校 -->
		<div class="yuanmeng wl_index">
			<div class="gWidth1170">
				<h3 class="title">彬彬教育让您圆梦美国名校</h3>
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="slideTop clearfix">
								<div class="img fl">
									<img src="/static/home/img/page/wenli_xueyuan/logo1.png" alt="威廉姆斯学院" title="威廉姆斯学院">
								</div>
								<div class="fr">
									<h3>威廉姆斯学院</h3>
									<p>美国威廉姆斯学院建于1793年，作为美国文理学院之首，它代表着美国最引以为傲的教育精髓--规模小、质量高，专注本科，崇尚通识和人文教育。其声誉在美国丝毫不亚于耶鲁、哈佛等名校，且更为美国上流家庭所青睐。</p>
								</div>
								<a href="javascript:;" onclick="go()">马上申请</a>
							</div>
							<div class="slidedBottom clearfix">
								<div class="fl">
									<h2>案例分析</h2>
									<span><b>录取情况：</b>王同学</span>
									<p class="clearfix"><b class="fl">案例解读：</b><em class="qfr1 fl">在高考之前收到威廉姆斯学院的录取通知书，但是王同学依旧不骄不躁，沉下心来准备高考，最后高考大捷可以上中国重点名校，这个时候到底该如何选择?请看看王同学的故事吧!</em><a href="/studentstory/908.html">详情&gt;</a></p>
								</div>
								<div class="fr">
									<h3>知名校友</h3>
									<div class="clearfix">
										<div class="box fl">
											<img src="/static/home/img/page/wenli_xueyuan/wl1.png" alt="">
											<p>詹姆斯·加菲尔德</p>
											<p>美国总统</p>
										</div>
										<div class="box fl">
											<img src="/static/home/img/page/wenli_xueyuan/wl2.png" alt="">
											<p>王力宏</p>
											<p>著名音乐人</p>
										</div>
										<div class="box fl">
											<img src="/static/home/img/page/wenli_xueyuan/wl3.png" alt="">
											<p>琼恩·斯通</p>
											<p>导演 作家</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="slideTop clearfix">
								<div class="img fl">
									<img src="/static/home/img/page/wenli_xueyuan/mingdexueyuan.jpg" alt="明德学院" title="明德学院">
								</div>
								<div class="fr">
									<h3>明德学院</h3>
									<p>全美最顶级的文理学院之一，位于美国佛蒙特州明德镇，2019年在全美文理学院中排名第五。明德学院所提供的课程极为广泛，包括艺术、人文、外语、自然科学、社会科学等。</p>
								</div>
								<a href="javascript:;" onclick="go()">马上申请</a>
							</div>
							<div class="slidedBottom clearfix">
								<div class="fl">
									<h2>案例分析</h2>
									<span><b>录取情况：</b>李同学</span>
									<p class="clearfix"><b class="fl">案例解读：</b><em class="qfr1 fl">康奈尔学院仅限本科，语言要求是TOEFL79，还需要高中成绩单。但是李同学这个时候并没有托福成绩，所以，课程规划老师就开始为李同学准备托福的相关培训和模拟考试。进过三个多月的培训，最后李同学考取了一个不错的成绩。在彬彬留学其他老师的协调规划下，不仅仅为李同学打造了精彩的文书，还成功拿到了康奈尔大学的录取通知书，最终李同学也能圆了他的医学梦。</em><a href="/studentstory/910.html">详情&gt;</a></p>
								</div>
								<div class="fr">
									<h3>知名校友</h3>
									<div class="clearfix">
										<div class="box fl">
											<img src="/static/home/img/page/wenli_xueyuan/md1.png" alt="">
											<p>Lado Gurgenidze</p>
											<p>格鲁吉亚总理</p>
										</div>
										<div class="box fl">
											<img src="/static/home/img/page/wenli_xueyuan/md2.png" alt="">
											<p>William Sessions</p>
											<p>法院审判委员会副主席</p>
										</div>
										<div class="box fl">
											<img src="/static/home/img/page/wenli_xueyuan/md3.png" alt="">
											<p>Jim Davis</p>
											<p>New-balance总裁</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="btnleft btn"><img src="/static/home/img/page/LowAge/xianzuo2.png" alt=""></div>
				<div class="btnright btn"><img src="/static/home/img/page/LowAge/xianyou2.png" alt=""></div>
				<a href="javascript:;" onclick="go()">了解更多真实案例</a>
			</div>
		</div>
		
		<!-- 强大的国内外导师团队 -->
		<div class="daoshi_team wl_index">
			<div class="gWidth1170">
				<!-- title -->
				<h3 class="title">强大的国内外导师团队</h3>
				<!-- count -->
				<div class="count">
					<!-- 选项 -->
					<div class="clearfix t">
						<div class="tbox">
							<a href="javascript:;" class="fl">全程咨询导师</a><span class="fl">|</span>
							<a href="javascript:;" class="fl">海外同专业导师</a><span class="fl">|</span>
							<a href="javascript:;" class="fl">全能主申请导师</a><span class="fl">|</span>
							<a href="javascript:;" class="fl">资深流程导师</a><span class="fl">|</span>
							<a href="javascript:;" class="fl">名校外籍文笔导师</a><span class="fl">|</span>
							<a href="javascript:;" class="fl">专家督导导师</a>
						</div>
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
		
		<!-- 选择正确的背景提升 距离名校更近一步 -->
		<div class="bjts wl_index">
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
								<a href="/mxky/275.html" target="_blank">查看详情</a>
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
									<a href="/xsjs/327.html" target="_blank">查看详情</a>
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
									<a href="/xxsy/331.html" target="_blank">查看详情</a>
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
									<a href="/mqsx/294.html" target="_blank">查看详情</a>
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
									<a href="/gjyg/318.html" target="_blank">查看详情</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="anniu">
					<a href="/page/polymerization.html" target="_blank">了解更多背景提升项目</a>
					<a href="javascript:;" onclick="go()" class="a1">点击匹配背景提升活动</a>
				</div>
			</div>
		</div>
		
		<!-- 美国文理学院高额奖学金 -->
		<div class="gaoe_jxj wl_index gWidth1170">
			<h3 class="title">美国文理学院高额奖学金</h3>
			<div class="content clearfix">
				<div class="box fl">
					<img src="/static/home/img/page/wenli_xueyuan/jxj1.png" class="fl" alt="Y同学" title="Y同学">
					<div class="fr">
						<h3>Y同学</h3>
						<p class="asd">我与很多同学都拿到了威廉姆斯学院的奖学金，大概$60,000， 足以支付学费的同时，还可以拿出一部分用于生活费</p>
						<a href="javascript:;" onclick="go()" class="fr">了解详情&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/wenli_xueyuan/jxj2.png" class="fl" alt="C同学" title="C同学">
					<div class="fr">
						<h3>C同学</h3>
						<p class="asd">韦尔斯利学院有一项奖学金是针对于部分国际生发放的，在暑期每周抽出十几个小时用来勤工俭学，即可获得涵盖学费、食宿、杂费、保险等奖学金</p>
						<a href="javascript:;" onclick="go()" class="fr">了解详情&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/wenli_xueyuan/jxj3.png" class="fl" alt="W同学" title="W同学">
					<div class="fr">
						<h3>W同学</h3>
						<p class="asd">科尔比学院每年为在校一百名国际生提供价值$5,000,000的奖学金，并提供机票，可以说很幸福了，很荣幸我拿到了这项奖学金</p>
						<a href="javascript:;" onclick="go()" class="fr">了解详情&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/wenli_xueyuan/jxj4.png" class="fl" alt="L同学" title="L同学">
					<div class="fr">
						<h3>L同学</h3>
						<p class="asd">申请奖学金是需要有优异的成绩的，TOEFL和SAT成绩是申请留学奖学金重要的申请条件之一。想要申请奖学金的学弟学妹们，建议大家TOEFL成绩至少要在100+。</p>
						<a href="javascript:;" onclick="go()" class="fr">了解详情&gt;</a>
					</div>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">如何获得奖学金</a>
		</div>
		
		<!-- 美国文理学院申请规划 -->
		<div class="guihua wl_index">
			<div class="gWidth1170">
				<h3 class="title">美国文理学院申请规划</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="box">
						<ul>
							<li>
								<h3>1-3月<br />准备考试</h3>
								<p>收集标准化考试复习<br />材料，加强英语学习</p>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>5-8月<br />参加考试</h3>
								<p>完成TOEFL、SAT等<br />考试</p>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>6-8月<br />成绩冲高</h3>
								<p>标化成绩冲高，为申请学校做好准备</p>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>9月<br />选校准备</h3>
								<p>搜集院校信息<br />申请要求等材料</p>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>10-12月<br />网申</h3>
								<p>登录网申系统<br />提交申请材料</p>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>次年1-3月<br />跟踪申请</h3>
								<p>实时查看申请状态</p>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>次年3-4月<br />等待录取</h3>
								<p>等待录取结果、收到<br />录取offer确定入读院校</p>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>次年6-7月<br />签证准备</h3>
								<p>准备材料办理签证</p>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>次年8月<br />行前准备</h3>
								<p>打包行李、购买机票</p>
							</li>
						</ul>
					</div>
					<div class="box">
						<ul>
							<li>
								<h3>次年9月<br />准备入学</h3>
								<p>开启美好留学生活</p>
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
						<div>
							<span></span>
						</div>
					</div>
				</div>
				<a href="javascript:;" onclick="go()">“六位一体”导师为您提供私人订制化留学服务</a>
			</div>
		</div>
		
		<!-- 彬彬教育致力让每一个学生牵手世界名校 -->
		<div id="mydiv" class="wl_index" style="height: 695px;">
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
				<img src="/static/home/img/home/845167097512794061.png" alt="">
				<p>扫一扫<br />了解美国留学资讯</p>
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
		<script type="text/javascript">
			var t = document.documentElement.scrollTop || document.body.scrollTop;
			var scroll = true;
			if(t>=100){
				$('.abcBannav').css({'display': 'none'});
				$('.topNav').css({'position': 'static'});
			}
			// 
			var nav = $('.bannerNav').offset().top;
			$gkLength = $('.wl_index').length;
			window.onscroll = function () {
				var top = document.documentElement.scrollTop || document.body.scrollTop;
				if(top>=nav){
					$('.bannerNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999'});
					$('.navHidden').css({'display': 'block'});
				}else if(top<=$('.wl_index').eq(0).offset().top){
					$('.bannerNav').css({'position': 'static', 'top':''});
					$('.navHidden').css({'display': 'none'});
				}
				for( var i=0; i<$gkLength; i++ ){
					if( i == $gkLength - 1 ){
						if( top>=$('.wl_index').eq(i).offset().top ){
							$('.bannerNav span').removeClass('active');
							$('.bannerNav span').eq(i).addClass('active');
						}
						return;
					}
					if( top>=$('.wl_index').eq(i).offset().top && top<$('.wl_index').eq(i+1).offset().top ){
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
						$('.abcBannav').css({'display': 'none'});
						$('.topNav').css({'position': 'static'});
					}
				}else if(top == 0) {
					$('.abcBannav').css({'display': 'none'});
					$('.topNav').css({'position': 'relative'});
				}
			}
			$('.bannerNav span').on('click', function () {
				var index = $('.bannerNav span').index($(this));
				var offsetTop = $('.wl_index').eq(index).offset().top;
				$('body, html').stop().animate({scrollTop: offsetTop + 0}, 1500);
			})
			$('.bannerNav span:last-child').css({'margin-right': '0'});
			// 
			function Hover( DomName ) {
				DomName.hover(function () {
					$(this).children('h3').stop().fadeOut();
					$(this).children('.hidden').stop().fadeIn();
				}, function () {
					$(this).children('h3').stop().fadeIn();
					$(this).children('.hidden').stop().fadeOut();
				})
			}
			Hover($('.youshi_jiedu .content .ctop .box'));
			Hover($('.youshi_jiedu .content .cbottom .box'));
			$('.youshi_jiedu .content .ctop .box:last-child').css({'margin-right': '0'});
			$('.youshi_jiedu .content .cbottom .box:last-child').css({'margin-right': '0'});
			// 
			$('.jiemi .content .table').eq(0).css({'display': 'block'});
			$('.jiemi .content .ctopXx span:last-child').css({'margin-right': '0'});
			$('.jiemi .content .ctopXx span').on('click', function () {
				var index = $('.jiemi .content .ctopXx span').index($(this));
				$(this).addClass('active').siblings('span').removeClass('active');
				$('.jiemi .content .table').eq(index).stop().fadeIn().siblings('.table').css({'display': 'none'});
			})
			// 
			var Tr = $('.table2 tr');
			for( var i=0; i<Tr.length; i++){
				Tr.eq(i).children('td').eq(0).addClass('pm');
				Tr.eq(i).children('td').eq(1).addClass('xname');
				Tr.eq(i).children('td').eq(2).addClass('ename');
				Tr.eq(i).children('td').eq(3).addClass('dq');
				Tr.eq(i).children('td').eq(4).addClass('xf');
				Tr.eq(i).children('td').eq(5).addClass('lq');
				Tr.eq(i).children('td').eq(6).addClass('jxj2');
			}
			// 
			var mySwiper = new Swiper('.swiper-container',{});
			$('.btnleft').click(function() {
				mySwiper.swipePrev();
			});
			$('.btnright').click(function() {
				mySwiper.swipeNext();
			});
			// 
			$('.swiper-slide').removeAttr("style");
			// 字数限制 第一个参数传入的为一个jquery对象， 第二个参数为要限制的字数
			function LimitNumber(txt,num) {
				var str = txt.text();
				if( str.length <= num ){
					return;
				}
				str = str.substr(0,num) + '......' ;
				txt.text(str);
			}
			var text = $('.qfr1');
			for(var i=0; i<text.length; i++){
				LimitNumber(text.eq(i),80);
			}
			var text = $('.asd');
			for(var i=0; i<text.length; i++){
				LimitNumber(text.eq(i),55);
			}
			// 背景提升项目的字数限制调用
			var text = $('.qfr2');
			for(var i=0; i<text.length; i++){
				LimitNumber(text.eq(i),70);
			}
			
			var boxT = $('.qfr3');
			for(var i=0; i<boxT.length; i++){
				LimitNumber(boxT.eq(i),30);
			}
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
			$('.gaoe_jxj .content .box:nth-child(2n)').css({'margin-right': '0'});
			// 
			var boxIndex = $('.guihua .content .box');
			var spanIndex = $('.guihua .content .xian span');
			for( var i=0; i<boxIndex.length; i++ ){
				if( i%2 != 0 ){
					$('.guihua .content .box').eq(i).css({
						'bottom': '178px',
						'left': (i * 115) + 'px'
					})
				}else{
					$('.guihua .content .box').eq(i).css({
						'top': '178px',
						'left': (i * 115) + 'px'
					})
				}
			}
			$('.guihua .content .box:nth-child(2n)>span').css({
				'top': '-14px',
				'border-color': 'transparent transparent #E1E5F9 transparent'
			})
			$(window).scroll(function () {
				if( $(window).scrollTop()>=$('.guihua').offset().top - 500 ){
					spanIndex.fadeIn(500);
					for(var i=0; i<spanIndex.length; i++){
						spanIndex.eq(i).animate({'left': 115*i + 'px'}, 2000);
					}
				}
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
