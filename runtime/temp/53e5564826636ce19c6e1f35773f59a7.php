<?php /*a:6:{s:77:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\seniorsort.html";i:1552974684;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1551955433;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1551670345;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1553000627;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1552992994;s:86:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_highSchool.html";i:1552974318;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/seniorsort.css">
	</head>
	<style type="text/css">
		
		.bannerTop h1{
			font-size: 64px;
			line-height: 88px;
			padding-top: 167px;
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
		<!--头部信息 end-->
		<!-- banner -->
		<div class="bannerTop">
			<div class="gWidth1170">
				<h1>美国高中学校排名</h1>
				<a href="javascript:;" onclick="go()" >心仪学校排名查询</a>
			</div>
		</div>
		
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170 clearfix">
				<span class="fl active">排名要素</span>
				<span class="fl">2019排名榜单</span>
				<span class="fl">留学费用</span>
				<span class="fl">申请方案</span>
				<span class="fl">申请要求</span>
				<span class="fl">背景提升</span>
				<span class="fl">成功案例</span>
				<span class="fl">彬彬优势</span>
			</div>
		</div>
		<div class="hnav" style="height: 56px; display: none;"></div>
		
		<!-- 美国高中排名要素深度解析 -->
		<div class="pm_index analysis gWidth1170">
			<!-- title -->
			<div class="title">
				<h3>美国高中排名要素深度解析</h3>
				<span><em></em></span>
			</div>
			<!-- content -->
			<div class="content gWidth1170 clearfix">
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_pm/icon1.png" alt="">
					<h4>硬件实力</h4>
					<p>获得捐款的数额直接影响着学校的教学设施质量。捐款越多，意味着学校拥有越多的资金实力去改善学习环境和教学设备。</p>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_pm/icon1.png" alt="">
					<h4>学术实力</h4>
					<p>课程体系越完备，师资质量越高，才能更好地帮助学生培养能力，最终进入顶尖大学。</p>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_pm/icon1.png" alt="">
					<h4>名校的入读率</h4>
					<p>学生进入常春藤大学的比例越高，证明该学校教学质量越优秀。</p>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_pm/icon1.png" alt="">
					<h4>SAT平均成绩</h4>
					<p>学校每年的SAT平均成绩是排名因素中重要的学术能力体现。</p>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_pm/icon1.png" alt="">
					<h4>国际生比例</h4>
					<p>国际学生占比代表着学校的多样性，国际生比例在3%-15%。</p>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_pm/icon1.png" alt="">
					<h4>学校规模</h4>
					<p>学生人数是否具备最基础的标准，有百人学校，也有千人大校。</p>
				</div>
			</div>
			<a href="javascript:;" onclick="go()" >更多排名标准</a>
		</div>
		
		<!-- 2019美国高中学校排名榜单 -->
		<div class="pm_index List">
			<div class="gWidth1170">
				<!-- title -->
				<div class="title">
					<h3>2019美国高中学校排名榜单</h3>
					<span><em></em></span>
				</div>
				<!-- content -->
				<div class="content">
					<div class="ccTitle clearfix">
						<a class="active">2019最佳美国寄宿高中排名</a>
						<a>2019最佳美国走读高中排名</a>
					</div>
					<div class="ccContent">
						<div class="cct clearfix">
							<span style="width: 68px;">排名</span>
							<span style="width: 368px;">学校中文名</span>
							<span style="width: 398px;">学校英文名</span>
							<span style="width: 158px;">申请条件</span>
							<span style="width: 155px;">申请咨询</span>
						</div>
						<ul class="biaoge" id="bg1">
							
						</ul>
					</div>
					<div class="ccContent">
						<div class="cct clearfix">
							<span style="width: 68px;">排名</span>
							<span style="width: 368px;">学校中文名</span>
							<span style="width: 398px;">学校英文名</span>
							<span style="width: 158px;">申请条件</span>
							<span style="width: 155px;">申请咨询</span>
						</div>
						<ul class="biaoge" id="bg2">
							
						</ul>
					</div>
				</div>
				<a href="javascript:;" onclick="go()" >更多院校排名</a>
			</div>
		</div>
		
		<!-- 美国高中留学费用 -->
		<div class="pm_index liuxue_fy gWidth1170">
			<!-- title -->
			<div class="title">
				<h3>美国高中留学费用</h3>
				<span><em></em></span>
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
							<p style="width: 270px;">走读高中：每年约45,000-75,000美元<br />寄宿高中：每年约45,000-80,000美元</p>
							<a href="javascript:;" onclick="go()" >咨询具体费用</a>
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
							<p>一般每年约2万美元，纽约、波士顿、旧金山等大城市生活费用会想对高一些。（地区不同生活费用有所不同）</p>
							<a href="javascript:;" onclick="go()" >咨询具体费用</a>
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
							<a href="javascript:;" onclick="go()" >咨询具体费用</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国高中申请方案 -->
		<div class="pm_index sq_demo gWidth1170">
			<!-- title -->
			<div class="title">
				<h3>美国高中申请方案</h3>
				<span><em></em></span>
			</div>
			<p>早行动、早规划、早准备，越早申请，通过率越高，学生有更多的时间熟悉美国文化及教育制度；而且有完整的美高成绩，申请美国大学时更有优势。</p>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<h4>初二在读</h4>
					<span></span>
					<p>相当于美国8年级</p>
					<b>可申8/9年级</b>
					<a href="javascript:;" onclick="go()" >申请详情</a>
				</div>
				<div class="box fl">
					<h4>初三在读</h4>
					<span></span>
					<p>相当于美国9年级</p>
					<b>可申9/10年级</b>
					<a href="javascript:;" onclick="go()" >申请详情</a>
				</div>
				<div class="box fl">
					<h4>高一在读</h4>
					<span></span>
					<p>相当于美国10年级</p>
					<b>可申10/11年级</b>
					<a href="javascript:;" onclick="go()" >申请详情</a>
				</div>
				<div class="box fl">
					<h4>高二在读</h4>
					<span></span>
					<p>相当于美国11年级</p>
					<b>可申11/12年级</b>
					<a href="javascript:;" onclick="go()" >申请详情</a>
				</div>
			</div>
		</div>
		
		<!-- 美国高中申请要求与步骤 -->
		<div class="pm_index yqAndBz">
			<div class="gWidth1170">
				<!-- title -->
				<div class="title">
					<h3>美国高中申请要求与步骤</h3>
					<span><em></em></span>
				</div>
				<!-- content -->
				<div class="content clearfix">
					<div class="box fl">
						<div>
							<div class="img">
								<img src="/static/home/img/page/gaozhong_pm/tu1.png" alt="申请要求" title="申请要求">
								<span>申请要求</span>
							</div>
							<div class="b">
								<h4><span></span>学术要求</h4>
								<p>在校平均分达到80%以上、含金量高的学术奖项、国内外各大竞赛奖项</p>
								<h4><span></span>标准化考试成绩</h4>
								<p>语言成绩：托福、小托福、SLEP、SLATE<br />入学考试：SSAT</p>
								<h4><span></span>申请材料</h4>
								<p>文书、PS、推荐信、家庭背景</p>
							</div>
						</div>
						<a href="javascript:;" onclick="go()" >点击了解申请详情</a>
					</div>
					<div class="box fl">
						<div>
							<div class="img">
								<img src="/static/home/img/page/gaozhong_pm/tu2.png" alt="申请步骤" title="申请步骤">
								<span>申请步骤</span>
							</div>
							<div class="b">
								<h4><span></span>搜集标准化考试复习材料，加强英语学习</h4>
								<h4><span></span>锁定目标学校，了解院校申请要求</h4>
								<h4><span></span>参加标准化考试培训并取得相应成绩</h4>
								<h4><span></span>索取院校申请表格，寄送成绩，提交申请</h4>
								<h4><span></span>拿到学校录取通知，申请签证，准备入学</h4>
							</div>
						</div>
						<a href="javascript:;" onclick="go()" >个性化定制留学方案</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 参加背景提升课程 提高美国名校录取几率 -->
		<div class="pm_index bjts_kc gWidth1170">
			<!-- title -->
			<div class="title">
				<h3>参加背景提升课程 提高美国名校录取几率</h3>
				<span><em></em></span>
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
		
		<!-- 彬彬教育名校录取榜 -->
		<div class="pm_index AdmissionList gWidth1170">
			<!-- title -->
			<div class="title">
				<h3>彬彬教育名校录取榜</h3>
				<span><em></em></span>
			</div>
			<!-- content -->
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="box fl">
							<div class="img fl">
								<div>
									<img src="/static/home/img/page/gaozhong_pm/mlh.png" alt="玛丽湖预备中学" title="玛丽湖预备中学">
								</div>
								<a href="/success/72.html" target="_blank">与TA同校</a>
							</div>
							<div class="fr">
								<h4>H同学</h4>
								<p>录取院校：玛丽湖预备中学</p>
								<p>考试成绩： slep55/67,GPA4.0</p>
								<p>定制个性化方案：彬彬指导H同学参加了语言培训项目，几次课下来就考出了合适申请的分数。培训期间老师也是不是找他聊天，试图找出他的闪光点。</p>
							</div>
						</div>
						<div class="box fl">
							<div class="img fl">
								<div>
									<img src="/static/home/img/page/gaozhong_pm/wkwejd.png" alt="瓦卡维尔基督教学校" title="瓦卡维尔基督教学校">
								</div>
								<a href="/success/94.html" target="_blank" >与TA同校</a>
							</div>
							<div class="fr">
								<h4>Z同学</h4>
								<p>录取院校：瓦卡维尔基督教学校</p>
								<p>考试成绩：GPA4.0,托福113,SSAT2400</p>
								<p>定制个性化方案：申请美国高中有一份让招生官眼前一亮的文书很重要，经过彬彬老师与我父母很好地根据我的情况制订了相应计划，这使我的申请变得容易了许多。</p>
							</div>
						</div>
						<div class="box fl">
							<div class="img fl">
								<div>
									<img src="/static/home/img/page/gaozhong_pm/klsd.png" alt="克里斯蒂安联合高中" title="克里斯蒂安联合高中">
								</div>
								<a href="/studentstory/752.html" target="_blank" >与TA同校</a>
							</div>
							<div class="fr">
								<h4>周同学</h4>
								<p>录取院校：克里斯蒂安联合高中</p>
								<p>考试成绩：GPA3.8,托福109</p>
								<p>定制个性化方案：周同学性格比较沉稳不爱表达，这对面试非常不利，最后在和彬彬留学规划老师的配合下，周同学顺利拿到克里斯蒂安联合高中录取通知书。</p>
							</div>
						</div>
						<div class="box fl">
							<div class="img fl">
								<div>
									<img src="/static/home/img/page/gaozhong_pm/mxhst.png" alt="梅西赫斯特预备高中" title="梅西赫斯特预备高中">
								</div>
								<a href="/studentstory/751.html" target="_blank" >与TA同校</a>
							</div>
							<div class="fr">
								<h4>李同学</h4>
								<p>录取院校：梅西赫斯特预备高中</p>
								<p>考试成绩：GPA3.7,托福112</p>
								<p>定制个性化方案：李同学在2015年第一次申请失败的经历严重打击了他的自信心，于是找到彬彬留学的老师给他做指导，最后成功获得四所寄宿学校的offer。</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="box fl">
							<div class="img fl">
								<div>
									<img src="/static/home/img/page/gaozhong_pm/sml.png" alt="圣玛丽高中" title="圣玛丽高中">
								</div>
								<a href="/success/126.html" target="_blank" >与TA同校</a>
							</div>
							<div class="fr">
								<h4>N同学</h4>
								<p>录取院校：圣玛丽高中</p>
								<p>考试成绩：GPA:3.5,TOEFL:100,SSAT:2150</p>
								<p>定制个性化方案：帮N同学制定申请规划和思路，一方面是展现电影制作方面的特长，一方面是向招生官冲分展现学生各方面能力。</p>
							</div>
						</div>
						<div class="box fl">
							<div class="img fl">
								<div>
									<img src="/static/home/img/page/gaozhong_pm/wsdjq.png" alt="威斯顿剑桥学校" title="威斯顿剑桥学校">
								</div>
								<a href="/success/115.html" target="_blank" >与TA同校</a>
							</div>
							<div class="fr">
								<h4>K同学</h4>
								<p>录取院校：威斯顿剑桥学校</p>
								<p>考试成绩：托福103, SSAT：2220,GPA：3.8</p>
								<p>定制个性化方案：彬彬教育给该学校的招生官写了邮件推荐这个学生，最终通过与康同学的不屑努力，顺利接到了理想学校的offer。</p>
							</div>
						</div>
						<div class="box fl">
							<div class="img fl">
								<div>
									<img src="/static/home/img/page/gaozhong_pm/wb.png" alt="韦伯中学" title="韦伯中学">
								</div>
								<a href="/success/114.html" target="_blank" >与TA同校</a>
							</div>
							<div class="fr">
								<h4>X同学</h4>
								<p>录取院校：韦伯中学</p>
								<p>考试成绩：托福105,SSAT：2100,GPA：4.0</p>
								<p>定制个性化方案：彬彬教育的导师团队为X同学制定了合理的规划和建议，且X同学无论成绩还是志愿一直都很明确，最终成功拿到了梦校的录取通知书。</p>
							</div>
						</div>
						<div class="box fl">
							<div class="img fl">
								<div>
									<img src="/static/home/img/page/gaozhong_pm/lgsy.png" alt="罗格斯预科学校" title="罗格斯预科学校">
								</div>
								<a href="/success/108.html" target="_blank" >与TA同校</a>
							</div>
							<div class="fr">
								<h4>G同学</h4>
								<p>录取院校：罗格斯预科学校</p>
								<p>考试成绩：GPA：3.5+,TOEFL：90+,SSAT：2000+</p>
								<p>定制个性化方案：成绩优异的G同学，想就读波士顿大学城的一所名校，经过家长和彬彬全方面的培训，最终以优异的成绩踏入飞往美国波士顿的航班。</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pagination"></div>
		</div>
		
		<!-- 彬彬教育致力于让每个学生牵手世界名校 -->
		<div id="mydiv" class="pm_index" style="height: 695px;">
			<div class="box gWidth1170 clearfix">
				<!-- title -->
				<div class="title">
					<h3>彬彬教育致力于让每个学生牵手世界名校</h3>
					<span><em></em></span>
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
							<!-- <img src="/static/home/img/page/7_8/a6e310318cc5a075e8e4a0a459119ad.png" alt=""> -->
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
		<script type="text/javascript" src="__JS__/newpage/canvas-particle.js"></script>
		<script type="text/javascript">
			var t = document.documentElement.scrollTop || document.body.scrollTop;
			var scroll = true;
			if(t>=100){
				$('.abcBannav').css({'display': 'none'});
				$('.topNav').css({'position': 'static'});
			}
			
			$('.bannerNav span:last-child').css({'margin-right': '0'});
			var t = document.documentElement.scrollTop || document.body.scrollTop;
			var nav = $('.bannerNav').offset().top;
			$gkLength = $('.pm_index').length;
			window.onscroll = function () {
				var top = document.documentElement.scrollTop || document.body.scrollTop;
				if(top>=nav){
					$('.bannerNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999'});
					$('.hnav').css({'display': 'block'});
				}else if(top<=$('.analysis').offset().top){
					$('.bannerNav').css({'position': 'static', 'top':''});
					$('.hnav').css({'display': 'none'});
				}
				for( var i=0; i<$gkLength; i++ ){
					if( i == $gkLength - 1 ){
						if( top>=$('.pm_index').eq(i).offset().top ){
							$('.bannerNav span').removeClass('active');
							$('.bannerNav span').eq(i).addClass('active');
						}
						return;
					}
					if( top>=$('.pm_index').eq(i).offset().top - 300 && top<$('.pm_index').eq(i+1).offset().top ){
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
				var offsetTop = $('.pm_index').eq(index).offset().top;
				$('body, html').stop().animate({scrollTop: offsetTop}, 1500);
			})
			// 
			$('.analysis .content .box:nth-child(3n)').css({'margin-right': '0'});
			// 
			$('.List .content .ccTitle a:last-child').css({'margin-right': '0'});
			$('.List .content .ccContent').eq(0).css('display', 'block');
			$('.List .content .ccTitle a').click(function () {
				var index = $('.List .content .ccTitle a').index($(this));
				$(this).addClass('active').siblings('a').removeClass('active');
				$('.List .content .ccContent').eq(index).stop().fadeIn().siblings('.ccContent').css({'display': 'none'});
			})
			$('.List .content .ccContent .biaoge span:nth-child(5n)').css({'border-right': 'none'});
			// 
			$('.liuxue_fy .content .box .boxBox').hover(function (){
				$(this).children('.div1').css({'display': 'none'});
				$(this).children('.div2').css({'display': 'inline-block'});
				$(this).css({'background-color': 'rgba(0,0,0,0.5)'});
			}, function () {
				$(this).children('.div1').css({'display': 'inline-block'});
				$(this).children('.div2').css({'display': 'none'});
				$(this).css({'background-color': 'rgba(0,0,0,0.3)'});
			})
			// 
			$('.sq_demo .content .box:last-child').css({'margin-right': '0'});
			// 
			$('.yqAndBz .content .box:last-child').css({'margin-right': '0'});
			// 
			$('.bjts_kc .content .box:last-child').css({'margin-right': '0'});
			// 
			// swiper
			var mySwiper = new Swiper('.swiper-container',{
				pagination : '.pagination',
				paginationClickable : true
			});
			$('.AdmissionList .swiper-container .box:nth-child(2n)').css({'margin-right': '0'});
			$('.AdmissionList .pagination span:last-child').css({'margin-right': '0'});
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
			// 
			$('.yqAndBz .content .box:nth-child(1)>div .b h4').css({'font-weight': 'bold'});
			$('.List .content .ccContent .biaoge li:last-child').css({'border-bottom': 'none'});
			// 
			$('.coping').css({'position': 'static'});
			// 
			$.ajax({
				url: '/home/index/content',
				data:{
					type: 1
				},
				dataType:'json',//服务器返回json格式数据
				type:'post',//HTTP请求类型
				success:function(data){
					var Bg1 = document.getElementById('bg1');
					for(var i=0; i<data.datas.length; i++){
						Bg1.innerHTML += '<li class="clearfix">'+
							'<span style="width: 68px;">'+ data.datas[i].id +'</span>'+
							'<span style="width: 368px;">'+ data.datas[i].school_name +'</span>'+
							'<span style="width: 398px;">'+ data.datas[i].english_name +'</span>'+
							'<span style="width: 158px;"><a class="a1" onclick="go()" target="_black">申请条件</a></span>'+
							'<span style="width: 154px;"><a class="a2" onclick="go()" target="_black">免费评估</a></span>'+
						'</li>';
					}
				},
			});
			$.ajax({
				url: '/home/index/content',
				data:{
					type: 2
				},
				dataType:'json',//服务器返回json格式数据
				type:'post',//HTTP请求类型
				success:function(data){
					var Bg2 = document.getElementById('bg2');
					for(var i=0; i<data.datas.length; i++){
						Bg2.innerHTML += '<li class="clearfix">'+
							'<span style="width: 68px;">'+ (i+1) +'</span>'+
							'<span style="width: 368px;">'+ data.datas[i].school_name +'</span>'+
							'<span style="width: 398px;">'+ data.datas[i].english_name +'</span>'+
							'<span style="width: 158px;"><a class="a1" onclick="go()" target="_black">申请条件</a></span>'+
							'<span style="width: 154px;"><a class="a2" onclick="go()" target="_black">免费评估</a></span>'+
						'</li>';
					}
				},
			});
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
