<?php /*a:5:{s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\page\overseashome.html";i:1552463289;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1551955433;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1551670345;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1552990534;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1552979867;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/page/overseashome.css">
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
				<form action="<?php echo url('search/index'); ?>" method="get">
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

		<!-- banenr -->
		<div class="banner">
			<a href="javascript:;" onclick="go()">免费服务热线：400-900-9770</a>
			<span></span>
		</div>
		
		<!-- 数字 -->
		<div class="num">
			<div class="gWidth1170 clearfix">
				<div class="box box1">
					<h3><span id="span1">13</span>年</h3>
					<p>专注美国低龄留学</p>
				</div>
				<div class="box box2">
					<h3><span id="span2">1000</span>+</h3>
					<p>海外监管服务导师</p>
				</div>
				<div class="box box3">
					<h3><span id="span3">20000</span>+</h3>
					<p>成功服务留美学生</p>
				</div>
				<div class="box box4">
					<h3><span id="span4">1000</span>+</h3>
					<p>美国高中独家代理</p>
				</div>
				<div class="box box5">
					<h3><span id="span5">10000</span>+</h3>
					<p>美国合作寄宿家庭</p>
				</div>
			</div>
		</div>
		
		<!-- 留学路上的疑虑 -->
		<div class="yilv gWidth1170">
			<h3>留学路上的疑虑<span></span></h3>
			<!-- content -->
			<div class="content clearfix">
				<div class="box fl">
					<img src="/static/home/img/page/haiwai_jianguan/tu1.jpg" alt="海外求学" title="海外求学">
					<div class="boxBottom">
						<p><a href="javascript:;" onclick="go()"><span></span>对学校不满意可以转学吗？</a></p>
						<p><a href="javascript:;" onclick="go()"><span></span>学习跟不上怎么办？</a></p>
						<p><a href="javascript:;" onclick="go()"><span></span>对宿舍/寄宿家庭不满意能换吗？</a></p>
						<p><a href="javascript:;" onclick="go()"><span></span>怎么更快的融入美国生活？</a></p>
						<p><a href="javascript:;" onclick="go()"><span></span>打算申请本科需要怎么准备？</a></p>
					</div>
					<span>海外求学</span>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/haiwai_jianguan/tu2.png" alt="家长的疑惑" title="家长的疑惑">
					<div class="boxBottom">
						<p><a href="javascript:;" onclick="go()"><span></span>怎么了解孩子在美学习生活状态？</a></p>
						<p><a href="javascript:;" onclick="go()"><span></span>孩子在美的人身安全谁来保障？</a></p>
						<p><a href="javascript:;" onclick="go()"><span></span>学校对孩子的反馈家长怎么了解？</a></p>
						<p><a href="javascript:;" onclick="go()"><span></span>家长应该跟谁沟通孩子的状况？</a></p>
						<p><a href="javascript:;" onclick="go()"><span></span>谁可以辅导孩子的学习？</a></p>
					</div>
					<span>家长的疑惑</span>
				</div>
				<div class="box fl">
					<img src="/static/home/img/page/haiwai_jianguan/tu2.jpg" alt="行前准备" title="行前准备">
					<div class="boxBottom">
						<p><a href="javascript:;" onclick="go()"><span></span>都需要带哪些行李</a></p>
						<p><a href="javascript:;" onclick="go()"><span></span>出入境需要办理什么手续？</a></p>
						<p><a href="javascript:;" onclick="go()"><span></span>去留学需要带多少钱？</a></p>
						<p><a href="javascript:;" onclick="go()"><span></span>学校附近治安怎么样？</a></p>
						<p><a href="javascript:;" onclick="go()"><span></span>怎么解决住宿问题？</a></p>
					</div>
					<span>行前准备</span>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">提出您的顾虑</a>
		</div>
		
		<!-- 所有的顾虑都有了完美的解决方案 -->
		<div class="jiejue_fangan">
			<div class="gWidth1170">
				<h3>所有的顾虑都有了完美的解决方案<span></span></h3>
				<div class="content clearfix">
					<div class="box fl">
						<img src="/static/home/img/page/haiwai_jianguan/icon1.png" alt="">
						<h4>一站式贴心服务产品</h4>
						<p>从留学申请服务，到离境入美指导，帮助学生成功去美国留学。</p>
					</div>
					<div class="box fl">
						<img src="/static/home/img/page/haiwai_jianguan/icon2.png" alt="">
						<h4>定期的留学状态反馈</h4>
						<p>定期将学生的最新动态反馈给家长，帮助家长了解学生在美的学习进程。</p>
					</div>
					<div class="box fl">
						<img src="/static/home/img/page/haiwai_jianguan/icon3.png" alt="">
						<h4>每年的定期实地探访</h4>
						<p>1000余名海外服务老师，定期实地探访，了解学生学习情况，协调学生生活情况。</p>
					</div>
					<div class="box fl">
						<img src="/static/home/img/page/haiwai_jianguan/icon4.png" alt="">
						<h4>后续海外监管服务体系</h4>
						<p>全年无休，24H紧急处理学生突发状况，解决留学后续需求，做到真正的无忧留学。</p>
					</div>
				</div>
				<a href="javascript:;" onclick="go()">一键获取您的解决方案</a>
				<span></span>
			</div>
		</div>
		
		<!-- 彬彬海外独家特色服务 -->
		<div class="tese_fuwu">
			<div class="gWidth1170">
				<h3>彬彬海外独家特色服务<span></span></h3>
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
						<a href="javascript:;" onclick="go()">预约贴心无忧管家</a>
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
		
		<!-- 海外监管服务团队 -->
		<div class="fuwu_team gWidth1170">
			<div class="title">
				<h3>海外监管服务团队</h3>
				<p>彬彬教育为了给学生提供更好的服务，在国内和海外都设有后期监管团队，专人专岗24H在线，实时处理学生出现的任何问题。</p>
				<span></span>
			</div>
			<!-- 选项 -->
			<div class="fw_xuanxiang clearfix">
				<span class="active">学业支持</span>
				<span id="center">院校开发和家庭招募</span>
				<span>生活指导</span>
			</div>
			<div class="boxc">
				<img src="/static/home/img/page/LowAge/学业支持.jpg" class="back" alt="Lisa" title="Lisa">
				<div class="hidden">
					<h3>Lisa</h3>
						<span></span>
						<p>Lisa老师是哥伦比亚大学教育学硕士。她已经在美国生活十余年，深刻理解美国高等教育体系。了解东部文化生活，热爱教育事业，对美国K-12教育体系具有独到见解。</p>
						<a href="javascript:;" onclick="go()">向TA咨询</a>
					</div>
					<img src="/static/home/img/page/zoudugaozhong/bofang.jpg" data-videosrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/121de3685285890786332136502/4FuplOp9nt4A.mp4" class="bf" alt="">
			</div>
			<div class="boxc">
				<img src="/static/home/img/page/LowAge/院校开发和家庭招募.jpg" class="back" alt="Angela Gong" title="Angela Gong">
				<div class="hidden">
					<h3>Angela Gong</h3>
						<span></span>
						<p>普渡大学大学传播学学士。主要负责美国东北部地区院校开发和家庭招募工作，每年与多家优质学校建立合作关系，对招募家庭标准把控也非常严格。</p>
						<a href="javascript:;" onclick="go()">向TA咨询</a>
					</div>
					<img src="/static/home/img/page/zoudugaozhong/bofang.jpg" data-videosrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/deb0aa565285890786664841640/An90AkRbSoYA.mp4" class="bf" alt="">
			</div>
			<div class="boxc">
				<img src="/static/home/img/page/LowAge/生活指导.jpg" class="back" alt="Vicky" title="Vicky">
				<div class="hidden">
					<h3>Vicky</h3>
						<span></span>
						<p>Vicky毕业于德州大学奥斯汀分校。Vicky老师非常擅长沟通，从业三年，针对留学生初到美国的抗拒心理有自己的解决办法，深受留学生喜爱。</p>
						<a href="javascript:;" onclick="go()">向TA咨询</a>
					</div>
					<img src="/static/home/img/page/zoudugaozhong/bofang.jpg" data-videosrc="http://1256778600.vod2.myqcloud.com/8b1ff72cvodcq1256778600/121cd42f5285890786332134781/zshGuWryQv8A.mp4" class="bf" alt="">
			</div>
			<a href="javascript:;" onclick="go()">了解项目详情</a>
		</div>
		
		<!-- 弹出的视频 -->
		<div class="tc_video">
			<div class="video">
				<video src="" autoplay="autoplay" controls="controls">
					您的浏览器不支持video标签
				</video>
				<img src="/static/home/img/page/LowAge/video_gb.png" alt="">
			</div>
		</div>
		
		<!-- 因为彬彬，所以无忧 -->
		<div class="wuyou">
			<div class="gWidth1170">
				<h3>因为彬彬，所以无忧<span></span></h3>
				<div class="clearfix content">
					<img src="" class="fl" alt="客户反馈">
					<div class="fr clearfix">
						<div class="box fl active">
							<img src="/static/home/img/page/haiwai_jianguan/1.jpg" alt="客户反馈">
							<div class="hidden"></div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/haiwai_jianguan/2.jpg" alt="客户反馈">
							<div class="hidden"></div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/haiwai_jianguan/3.jpg" alt="客户反馈">
							<div class="hidden"></div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/haiwai_jianguan/4.jpg" alt="客户反馈">
							<div class="hidden"></div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/haiwai_jianguan/5.jpg" alt="客户反馈">
							<div class="hidden"></div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/haiwai_jianguan/6.jpg" alt="客户反馈">
							<div class="hidden"></div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/haiwai_jianguan/7.jpg" alt="客户反馈">
							<div class="hidden"></div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/haiwai_jianguan/8.jpg" alt="客户反馈">
							<div class="hidden"></div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/haiwai_jianguan/9.jpg" alt="客户反馈">
							<div class="hidden"></div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/haiwai_jianguan/10.jpg" alt="客户反馈">
							<div class="hidden"></div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/haiwai_jianguan/11.jpg" alt="客户反馈">
							<div class="hidden"></div>
						</div>
						<div class="box fl">
							<img src="/static/home/img/page/haiwai_jianguan/12.jpg" alt="客户反馈">
							<div class="hidden"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 我们的荣誉 -->
		<div class="rongyu gWidth1170">
			<h3>我们的荣誉<span></span></h3>
			<!-- content -->
			<div class="content clearfix">
				<img src="/static/home/img/page/haiwai_jianguan/51.jpg" class="fl" alt="2012年度诚信留学服务机构" title="2012年度诚信留学服务机构">
				<img src="/static/home/img/page/haiwai_jianguan/52.jpg" class="fl" alt="年度诚信机构奖" title="年度诚信机构奖">
				<img src="/static/home/img/page/haiwai_jianguan/53.jpg" class="fl" alt="出国留学服务行业十佳诚信机构" title="出国留学服务行业十佳诚信机构">
				<img src="/static/home/img/page/haiwai_jianguan/54.jpg" class="fl" alt="国际青年交流计划监管机构认证" title="国际青年交流计划监管机构认证">
				<img src="/static/home/img/page/haiwai_jianguan/55.jpg" class="fl" alt="建国100周年最具影响力留学服务机构" title="建国100周年最具影响力留学服务机构">
				<img src="/static/home/img/page/haiwai_jianguan/56.jpg" class="fl" alt="年度品质服务奖" title="年度品质服务奖">
				<img src="/static/home/img/page/haiwai_jianguan/57.jpg" class="fl" alt="中国十佳品牌诚信留学机构" title="中国十佳品牌诚信留学机构">
				<img src="/static/home/img/page/haiwai_jianguan/58.jpg" class="fl" alt="诚信签约单位" title="诚信签约单位">
			</div>
		</div>
		
		<!-- 彬彬教育致力于让每个学生牵手世界名校 -->
		<div id="mydiv" style="height: 695px; background: url(/static/home/img/page/haiwai_jianguan/back.jpg) no-repeat center 50%;">
			<div class="box gWidth1170 clearfix">
				<h3>彬彬教育致力于让每个学生牵手世界名校<span></span></h3>
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
			// 增长数字的动画
			var options = {
			  useEasing: true, 
			  useGrouping: true, 
			  separator: '', 
			  decimal: '.', 
			};
			
			var num1 = new CountUp("span1", 0, 13, 0, 2.5, options);
			var num2 = new CountUp("span2", 0, 1000, 0, 2.5, options);
			var num3 = new CountUp("span3", 0, 20000, 0, 2.5, options);
			var num4 = new CountUp("span4", 0, 1000, 0, 2.5, options);
			var num5 = new CountUp("span5", 0, 10000, 0, 2.5, options);
			
			num1.start();
			num2.start();
			num3.start();
			num4.start();
			num5.start();
			
			$(window).scroll(function () {
				if( $(window).scrollTop() >= $('.yilv').offset().top ){
					num1.reset();
					num2.reset();
					num3.reset();
					num4.reset();
					num5.reset();
				}else{
					num1.start();
					num2.start();
					num3.start();
					num4.start();
					num5.start();
				}
			})
			
			$('.yilv .content .box:last-child').css({'margin-right': '0'});
			
			$('.jiejue_fangan .box:last-child').css({'margin-right': '0'});

			$('.tese_fuwu .content .box:nth-child(3n)').css({'margin-right': '0'});
			
			$('.fuwu_team .fw_xuanxiang span').click(function () {
				var index = $('.fuwu_team .fw_xuanxiang span').index($(this));
				$(this).attr('class','active').siblings('span').removeAttr('class');
				$('.boxc').eq(index).stop().fadeIn().siblings('.boxc').css({'display': 'none'});
			})
			
			$('.boxc').eq(0).css({'display': 'block'});
			$('.bf').click(function () {
				var src = $(this).attr('data-videoSrc');
				$('.tc_video').children('.video').children('video').attr('src', src);
				$('.tc_video').fadeIn();
			})
			
			$('.tc_video .video img').on('click', function () {
				$('.tc_video').fadeOut();
				$(this).siblings('video').removeAttr('src');
			})	
			
			$('.wuyou .content>div.fr .box:nth-child(6n)').css({'margin-right':'0'});
			
			$('.wuyou .content>img.fl').attr('src', $('.wuyou .content>div.fr .box').eq(0).children('img').attr('src'));
			$('.wuyou .content>div.fr .box').click(function () {
				$(this).addClass('active').siblings('.box').removeClass('active');
				var src = $(this).children('img').attr('src');
				$('.wuyou .content>img.fl').attr('src', src);
			})
			
			$('.rongyu .content img:nth-child(4n)').css({'margin-right': '0'});
			$(window).scroll(function () {
				if( $(window).scrollTop() + 700 >= $('#mydiv').offset().top ){
					$('#mydiv .box .dq>div').css({'background-position-x': 'right'});	 
				}
				
				if( $(window).scrollTop() + 700 < $('#mydiv').offset().top ){
					$('#mydiv .box .dq>div').css({'background-position-x': 'left'});	 
				}
			})
		</script>
		
	</body>
</html>
