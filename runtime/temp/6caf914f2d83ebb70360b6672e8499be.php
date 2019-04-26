<?php /*a:6:{s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\seniorcompass.html";i:1552974740;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1551955433;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1551670345;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1552959452;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1552979867;s:86:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_highSchool.html";i:1552974318;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/school_selection.css">
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
				<h1>美国高中选校攻略</h1>
				<h3>网罗美国优质高中  让您同样的分数  上更好的学校</h3>
				<a href="javascript:;" onclick="go()">全面评估个人能力</a>
			</div>
		</div>
		
		<!-- bannerNav -->
		<div class="bannerNav">
			<div class="gWidth1170">
				<span class="active">选校因素</span>
				<span>选校技巧</span>
				<span>高中特点</span>
				<span>顶级高中</span>
				<span>选校误区</span>
				<span>高中申请</span>
				<span>彬彬优势</span>
			</div>
		</div>
		<div class="navHidden"></div>
		
		<!-- 美国高中选校必须考虑的十大因素 -->
		<div class="shida_yinsu xx_index gWidth1170">
			<h3 class="title">美国高中选校必须考虑的十大因素</h3>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_xuanxiao/icon1.png" alt="">
					<h4>学校类型</h4>
					<div class="hidden">
						<h4>学校类型</h4>
						<p>美国高中分为公立和私立高中，私立高中又分为走读高中、寄宿高中、艺术高中、宗教高中和军校高中。</p>
						<a href="javascript:;" onclick="go()">学校类型咨询 &gt;&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_xuanxiao/icon2.png" alt="">
					<h4>毕业生走向</h4>
					<div class="hidden">
						<h4>毕业生走向</h4>
						<p>往年毕业生升入TOP100大学的人数越多，说明该校师资力量、学术水平等综合能力越强。</p>
						<a href="javascript:;" onclick="go()">升学率查询 &gt;&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_xuanxiao/icon3.png" alt="">
					<h4>美国高中排名</h4>
					<div class="hidden">
						<h4>美国高中排名</h4>
						<p>学校排名可以作为选校的参考，但不能作为选校的主要依据，要客观对待学校排名情况。</p>
						<a href="/page/seniorsort.html" target="_blank">2019最新排名 &gt;&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_xuanxiao/icon4.png" alt="">
					<h4>考试成绩</h4>
					<div class="hidden">
						<h4>考试成绩</h4>
						<p>托福、SAT、SSAT平均成绩分数，可以反映出一个学校的整体教学质量。</p>
						<a href="javascript:;" onclick="go()">提高个人成绩 &gt;&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_xuanxiao/icon5.png" alt="">
					<h4>师资力量</h4>
					<div class="hidden">
						<h4>师资力量</h4>
						<p>主要看教师的资质年限以及教学经验是否丰富，其次看教师是否是硕士及以上学历。</p>
						<a href="javascript:;" onclick="go()">师资力量查询 &gt;&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_xuanxiao/icon6.png" alt="">
					<h4>建校时间</h4>
					<div class="hidden">
						<h4>建校时间</h4>
						<p>美国有很多历史悠久的高中，建议选择超过40年建校历史的学校，这些学校有一定的教学理念积累。</p>
						<a href="javascript:;" onclick="go()">查询学校历史 &gt;&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_xuanxiao/icon7.png" alt="">
					<h4>学校课程</h4>
					<div class="hidden">
						<h4>学校课程</h4>
						<p>除基础课程外，有AP课程/荣誉课程/IB课程的学校更有利于学生学习和兴趣爱好的培养。</p>
						<a href="javascript:;" onclick="go()">获取美高原版教材 &gt;&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_xuanxiao/icon8.png" alt="">
					<h4>地理位置</h4>
					<div class="hidden">
						<h4>地理位置</h4>
						<p>美国有50个州，分为东海岸、西海岸、北部、南部四个区域，大部分学生选择东海岸和西海岸。</p>
						<a href="javascript:;" onclick="go()">彬彬导师帮助选校 &gt;&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_xuanxiao/icon9.png" alt="">
					<h4>国际生比例</h4>
					<div class="hidden">
						<h4>国际生比例</h4>
						<p>国际生比例5%-15%为最佳，过多英语环境会弱化，过少学生适应美国文化周期长。</p>
						<a href="javascript:;" onclick="go()">国际生比例查询 &gt;&gt;</a>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/gaozhong_xuanxiao/icon10.png" alt="">
					<h4>住宿形式</h4>
					<div class="hidden">
						<h4>住宿形式</h4>
						<p>美国私立高中分为寄宿高中和走读高中，寄宿高中利于培养学生的独立能力，走读高中有利于提升语言能力。</p>
						<a href="/fmfml/0-1.html" target="_blank">预约寄宿家庭 &gt;&gt;</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国高中选校技巧，合适的才是最好的 -->
		<div class="xuanxiao_jiqiao xx_index">
			<div class="gWidth1170">
				<h3 class="title">美国高中选校技巧，合适的才是最好的</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="box fl">
						<img src="/static/home/img/page/gaozhong_xuanxiao/xx1.jpg" alt="全面了解美国高中" title="全面了解美国高中">
						<div>
							<h3>全面了解美国高中</h3>
							<p>去美国读高中之前，首先要了解每所学校的特点，如学校的性质、建校历史、学术水平、师资力量、硬件设施、社团活动、地理位置、宗教背景等。</p>
							<a href="javascript:;" onclick="go()">院校详情了解</a>
						</div>
					</div>
					<div class="box fl">
						<img src="/static/home/img/page/gaozhong_xuanxiao/xx2.jpg" alt="了解学校录取要求" title="了解学校录取要求">
						<div>
							<h3>了解学校录取要求</h3>
							<p>各校实力水平不同，录取标准也不同，顶尖高中要求托福成绩的同时也要求SSAT成绩，部分学校可以接受SLEP，选择学校时应该考虑自身能力。</p>
							<a href="javascript:;" onclick="go()">具体分数要求</a>
						</div>
					</div>
					<div class="box fl">
						<img src="/static/home/img/page/gaozhong_xuanxiao/xx3.jpg" alt="确定选校侧重点" title="确定选校侧重点">
						<div>
							<h3>确定选校侧重点</h3>
							<p>每个学校都有各自的特色，有STEM强校、有注重体育发展的学校、也有在艺术领域突出学校，在选校时候应该先确定好自己选校的侧重点。</p>
							<a href="javascript:;" onclick="go()">领域强校精选</a>
						</div>
					</div>
					<div class="box fl">
						<img src="/static/home/img/page/gaozhong_xuanxiao/xx4.jpg" alt="给自己精准定位" title="给自己精准定位">
						<div>
							<h3>给自己精准定位</h3>
							<p>首先要有清晰的选校目标，然后结合个人的学术成绩和兴趣爱好，选择适合自己的学校。</p>
							<a href="javascript:;" onclick="go()">个人能力评估</a>
						</div>
					</div>
					<div class="box fl">
						<img src="/static/home/img/page/gaozhong_xuanxiao/xx5.jpg" alt="多元化选择" title="多元化选择">
						<div>
							<h3>多元化选择</h3>
							<p>彬彬导师建议学生选校时，选出3-6所，除了传统的教学模式外，可以选择文化比较多元化的学校，接受新的事物更利于开阔眼界。</p>
							<a href="javascript:;" onclick="go()">了解多元化学校</a>
						</div>
					</div>
					<div class="box fl">
						<img src="/static/home/img/page/gaozhong_xuanxiao/xx6.jpg" alt="学校类型" title="学校类型">
						<div>
							<h3>学校类型</h3>
							<p>美国私立高中分为寄宿高中和走读高中，寄宿高中更适合性格独立，自我管理能力强的学生，而走读高中有利于提升语言能力。</p>
							<a href="javascript:;" onclick="go()">优质学校推荐</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国高中特点 -->
		<div class="gaozhong_tedian xx_index gWidth1170">
			<h3 class="title">美国高中特点</h3>
			<div class="content clearfix">
				<div class="box fl">
					<div>
						<h3>公立高中</h3>
						<p>千人大校，国际生比较少，获政府支持，免全年学费，只能以交换生身份就读1年。</p>
						<a href="javascript:;" onclick="go()">申请公立高中</a>
					</div>
				</div>
				<div class="box box2 fl">
					<div>
						<h3>私立高中</h3>
						<p>教学质量和学术条件比较优越，学习氛围浓厚，校园设施一流，国际生可长期入读，直到高中毕业。</p>
						<a href="javascript:;" onclick="go()">私立高中申请条件</a>
					</div>
				</div>
				<div class="box box3 fl">
					<div>
						<h3>寄宿高中</h3>
						<p>住在学校宿舍，安全性较高，社团活动也比较丰富，可以快速融入校园生活，适合自主能力强的学生。</p>
						<a href="javascript:;" onclick="go()">点击详细了解</a>
					</div>
				</div>
				<div class="box box4 fl">
					<div>
						<h3>走读高中</h3>
						<p>住在寄宿家庭，可以快速提高语言成绩，小班授课，课程多样化，师生比例低，社团活动丰富。</p>
						<a href="javascript:;" onclick="go()">预约寄宿家庭</a>
					</div>
				</div>
				<div class="box box5 fl">
					<div>
						<h3>单性别学校</h3>
						<p>历史悠久，教学严谨，可以更好的发展学生潜力，培养领袖型人才。</p>
						<a href="javascript:;" onclick="go()">免费评估学校</a>
					</div>
				</div>
				<div class="box box6 fl">
					<div>
						<h3>宗教学校</h3>
						<p>宗教学校学风严谨，教会氛围浓厚，管理严格，教堂往往成为同学老师集会地点，宗教学校不会强制学生信教。</p>
						<a href="javascript:;" onclick="go()">了解宗教学校</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 美国顶级高中推荐 -->
		<div class="List xx_index">
			<div class="gWidth1170">
				<!-- title -->
				<h3 class="title">美国顶级高中推荐</h3>
				<!-- content -->
				<div class="content">
					<div class="ccTitle clearfix">
						<a class="active">美国顶级寄宿高中</a>
						<a>美国顶级走读高中</a>
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
				<div class="anniu">
					<a href="javascript:;" onclick="go()" class="a1">更多院校排名</a>
					<a href="javascript:;" onclick="go()">免费评估心仪学校</a>
				</div>
			</div>
		</div>
		
		<!-- 美国高中选校误区 -->
		<div class="xuanxiao_wuqu xx_index gWidth1170">
			<h3 class="title">美国高中选校误区</h3>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<h3><em></em>排名越高越好？</h3>
					<p>不能过分依赖排名，建议选择学校时去学校实地参观，考察实际情况。</p>
				</div>
				<div class="box fl">
					<h3><em></em>怎样考虑孩子自身的竞争力？</h3>
					<p>选校时，要考虑孩子在学校大概排名情况，避免造成太大的学习压力。</p>
				</div>
				<div class="box fl">
					<h3><em></em>寄宿制高中优于走读制高中？</h3>
					<p>寄宿高中：适合自我管理能力强的学生<br />走读高中：快速提高语言能力</p>
				</div>
				<div class="box fl">
					<h3><em></em>纯性别学校一定不好吗？</h3>
					<p>男孩和女孩在青少年时期的发育上存在差异，因此教育可以做到更具针对性。</p>
				</div>
				<div class="box fl">
					<h3><em></em>AP课程越多越好？</h3>
					<p>AP课程开设很多，会给孩子带来更多的压力，结合自身实力选择学校。</p>
				</div>
				<div class="box fl">
					<h3><em></em>蓝带高中就一定好吗？</h3>
					<p>蓝带高中是衡量高中教育质量的重要依据，但不能被蓝带高中字样所误导。</p>
				</div>
				<div class="box fl">
					<h3><em></em>国际生比例低的学校好？</h3>
					<p>陌生环境中，未成年学生交流和学习较艰难，一般在5%-15%之间为最佳。</p>
				</div>
				<div class="box fl">
					<h3><em></em>SSAT是衡量学校教学质量的唯一依据？</h3>
					<p>SSAT平均分是衡量学校教学质量的参考标准，但不是唯一参考标准。</p>
				</div>
				<div class="box fl">
					<h3><em></em>学校地理位置怎么选？</h3>
					<p>根据自身的情况选择学校所在州，地点，周边环境，以及学校的设施，安全第一。</p>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">更多选校问题咨询</a>
		</div>
		
		<!-- 美国高中申请 -->
		<div class="gaozhong_shenqing xx_index">
			<div class="gWidth1170">
				<h3 class="title">美国高中申请</h3>
				<!-- content -->
				<div class="content clearfix">
					<div class="ctop clearfix">
						<div class="tbox fl">
							<img src="/static/home/img/page/gaozhong_xuanxiao/gz1.png" alt="">
							<span></span>
							<p>一站式申请服务</p>
							<em>专属留学方案，集前期考试培训与后期申请指导于一体。</em>
						</div>
						<div class="tbox fl">
							<img src="/static/home/img/page/gaozhong_xuanxiao/gz2.png" alt="">
							<span></span>
							<p>众多合作资源</p>
							<em>众多院校独家代理，享有优先录取、破格录取。</em>
						</div>
						<div class="tbox fl">
							<img src="/static/home/img/page/gaozhong_xuanxiao/gz3.png" alt="">
							<span></span>
							<p>SLATE官方考点</p>
							<em>彬彬为iTEP Slate官方授权考点，为考生提供专业语言测试及成绩分析。</em>
						</div>
						<div class="tbox fl">
							<img src="/static/home/img/page/gaozhong_xuanxiao/gz4.png" alt="">
							<span></span>
							<p>稳步提升成绩</p>
							<em>精英导师授课，不仅传授技巧，更注重能力提升。</em>
						</div>
						<div class="tbox fl">
							<img src="/static/home/img/page/gaozhong_xuanxiao/gz5.png" alt="">
							<span></span>
							<p>出国衔接课程</p>
							<em>美国原版教材，并有海外精英讲师授课。</em>
						</div>
					</div>
					<div class="cbottom clearfix">
						<div class="box fl">
							<h3>美国高中申请条件</h3>
							<p><b>硬件条件：</b>GPA成绩；TOEFL；SSAT美国中学入学考试；资金证明；面试</p>
							<p><b>软件条件：</b>学校的社团活动、志愿者活动、学生研究发明、荣誉奖励、兴趣爱好、社会实践</p>
							<a href="javascript:;" onclick="go()">美国高中申请条件详情</a>
						</div>
						<div class="box box2 fl">
							<h3>美国高中留学费用</h3>
							<p><b>学费：</b>寄宿高中（$35,000-$55,000/年）；走读高中（$45,000-$70,000/年）</p>
							<p><b>其他费用：</b>生活费（约$6,000-$20,000/年）；医疗费（约$500-$1,000/年）；书本费（约$500-$800/年）；课外活动费（约$300-$1,000/年）</p>
							<a href="javascript:;" onclick="go()">咨询心仪学校费用</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 彬彬教育致力让每一个学生牵手世界名校 -->
		<div id="mydiv" class="xx_index" style="height: 695px;">
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
		<script type="text/javascript">
			var t = document.documentElement.scrollTop || document.body.scrollTop;
			var scroll = true;
			if(t>=100){
				$('.abcBannav').css({'display': 'none'});
				$('.topNav').css({'position': 'static'});
			}
			// 
			var nav = $('.bannerNav').offset().top;
			$gkLength = $('.xx_index').length;
			window.onscroll = function () {
				var top = document.documentElement.scrollTop || document.body.scrollTop;
				if(top>=nav){
					$('.bannerNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999'});
					$('.navHidden').css({'display': 'block'});
				}else if(top<=$('.shida_yinsu').offset().top){
					$('.bannerNav').css({'position': 'static', 'top':''});
					$('.navHidden').css({'display': 'none'});
				}
				for( var i=0; i<$gkLength; i++ ){
					if( i == $gkLength - 1 ){
						if( top>=$('.xx_index').eq(i).offset().top ){
							$('.bannerNav span').removeClass('active');
							$('.bannerNav span').eq(i).addClass('active');
						}
						return;
					}
					if( top>=$('.xx_index').eq(i).offset().top && top<$('.xx_index').eq(i+1).offset().top ){
						$('.bannerNav span').removeClass('active');
						$('.bannerNav span').eq(i).addClass('active');
					}
				}
			}
			$('.bannerNav span').on('click', function () {
				var index = $('.bannerNav span').index($(this));
				var offsetTop = $('.xx_index').eq(index).offset().top;
				$('body, html').stop().animate({scrollTop: offsetTop + 0}, 1500);
			})
			// 
			$('.shida_yinsu .content .box:nth-child(5n)').css({'margin-right': '0'});
			$('.shida_yinsu .content .box').hover(function () {
				$(this).children('img').stop().fadeOut();
				$(this).children('h4').stop().fadeOut();
				$(this).children('.hidden').stop().fadeIn();
			}, function () {
				$(this).children('img').stop().fadeIn();
				$(this).children('h4').stop().fadeIn();
				$(this).children('.hidden').stop().fadeOut();
			})
			// 
			$('.xuanxiao_jiqiao .content .box:nth-child(3n)').css({'margin-right': '0'});
			// 
			$('.gaozhong_tedian .content .box:nth-child(3n)').css({'margin-right': '0'});
			// 
			$('.List .content .ccTitle a:last-child').css({'margin-right': '0'});
			$('.List .content .ccContent').eq(0).css('display', 'block');
			$('.List .content .ccTitle a').click(function () {
				var index = $('.List .content .ccTitle a').index($(this));
				$(this).addClass('active').siblings('a').removeClass('active');
				$('.List .content .ccContent').eq(index).stop().fadeIn().siblings('.ccContent').css({'display': 'none'});
			})
			$('.List .content .ccContent .biaoge span:nth-child(5n)').css({'border-right': 'none'});
			$('.List .content .ccContent .biaoge li:last-child').css({'border-bottom': 'none'});
			// 
			$('.xuanxiao_wuqu .content .box:nth-child(2n)').css({'margin-right': '0'});
			// 
			$('.gaozhong_shenqing .content .ctop .tbox').hover(function () {
				$(this).children('img').stop().fadeOut();
				$(this).children('span').stop().animate({'top': '66px'});
				var that = $(this);
				$(this).children('p').stop().animate({'top': '21px'}, function () {
					that.children('em').stop().fadeIn();
				});
			}, function () {
				$(this).children('em').stop().fadeOut();
				$(this).children('img').stop().fadeIn();
				$(this).children('span').stop().animate({'top': '93px'});
				$(this).children('p').stop().animate({'top': '118px'});
			})
			// 
			$('.gaozhong_shenqing .content .ctop .tbox:last-child').css({'margin-right': '0'});
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
			$.ajax({
				url: '/home/index/content',
				data:{
					type: 3
				},
				dataType:'json',//服务器返回json格式数据
				type:'post',//HTTP请求类型
				success:function(data){
					var Bg1 = document.getElementById('bg1');
					for(var i=0; i<data.datas.length; i++){
						Bg1.innerHTML += '<li class="clearfix">'+
							'<span style="width: 68px;">'+ (i+1) +'</span>'+
							'<span style="width: 368px;">'+ data.datas[i].school_name +'</span>'+
							'<span style="width: 398px;">'+ data.datas[i].english_name +'</span>'+
							'<span style="width: 158px;"><a class="a1">申请条件</a></span>'+
							'<span style="width: 154px;"><a class="a2" href="javascript:;" onclick="go()" target="_blank" >免费评估</a></span>'+
						'</li>';
					}
				},
			});
			$.ajax({
				url: '/home/index/content',
				data:{
					type: 4
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
							'<span style="width: 158px;"><a class="a1">申请条件</a></span>'+
							'<span style="width: 154px;"><a class="a2">免费评估</a></span>'+
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
