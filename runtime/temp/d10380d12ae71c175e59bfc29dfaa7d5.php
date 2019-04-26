<?php /*a:6:{s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\apply\high_school.html";i:1555038639;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1553677718;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1553062603;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1555494636;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1555494636;s:86:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_highSchool.html";i:1555038639;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/apply/high_school.css">
		<!-- swiper -->
		<link rel="stylesheet" href="/static/home/css/public/swiper/idangerous.swiper.css" />
		<script src="/static/home/js/public/swiper/idangerous.swiper.min.js" type="text/javascript" charset="utf-8"></script>
		
	</head>
	
	<style type="text/css">
		.banner .swiper-slide a{width: 100%;height: 100%;}
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
		<div class="swiper-container banner">
			<div class="swiper-wrapper">
				<?php if(is_array($pics) || $pics instanceof \think\Collection || $pics instanceof \think\Paginator): $i = 0; $__LIST__ = $pics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
					<div class="swiper-slide">
						<a href="<?php echo htmlentities($val['url']); ?>" style="background: url(<?php echo htmlentities($val['pic']); ?>) no-repeat center center;background-size: cover;" <?php if($val['is_target'] == '1'): ?> target="_blank" <?php endif; ?> >
						</a>
					</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="pagination"></div>
		</div>
		
		<!-- 数据 -->
		<div class="sJ">
			<div class="gWidth1170 clearfix">
				<div class="fl div1">
					<h3><span id="span1">100</span>%</h3>
					<em></em>
					<p>美国中学录取率高达100%</p>
				</div>
				<div class="fl div2">
					<h3><span id="span2">10000</span>+</h3>
					<em></em>
					<p>拥有万余家精选寄宿家庭资源，覆盖全美各州</p>
				</div>
				<div class="fl div3">
					<h3><span id="span3">500</span>+</h3>
					<em></em>
					<p>与五百余家美国优质高中保持密切合作关系</p>
				</div>
				<div class="fl div4">
					<h3>独<span id="span4">1</span></h3>
					<em></em>
					<p>国内独1拥有海外监管服务中心和海外院校开发资质留学机构</p>
				</div>
				<div class="fl div5">
					<h3>权威认证</h3>
					<em></em>
					<p>CSIET评审认证留学机构<br />iTEP官方授权指定考点</p>
				</div>
			</div>
		</div>
		
		<!-- 美国中学视讯 -->
		<div class="video">
			<div class="box gWidth1170">
				<!-- title -->
				<div class="title">
					<h3>彬彬独家顶级资源</h3>
				</div>
				<!-- content -->
				<div class="content">
					<!-- 选项标题 -->
					<div class="x_title clearfix">
						<a>直面招生官</a>
						<span>|</span>
						<a>优质名校</a>
					</div>
					<!-- 选项content -->
					<div class="x_content">
						<p>彬彬教育定期引进校长团赴华面试，我们的学生享有优先录取、破格录取权。</p>
						<div class="v clearfix">
							<?php if(is_array($zsg_list) || $zsg_list instanceof \think\Collection || $zsg_list instanceof \think\Paginator): $i = 0; $__LIST__ = $zsg_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
								<div class="fl box">
									<div class="hover" data-videoSrc="<?php echo htmlentities($val['video']); ?>">
										<img src="<?php echo htmlentities($val['cover_pic']); ?>" alt="<?php echo htmlentities($val['title']); ?>" title="<?php echo htmlentities($val['title']); ?>" />
										<img src="/static/home/img/apply/high_school/baofang.png" class="bf" alt="">
									</div>
									<span><?php echo htmlentities($val['title']); ?></span>
								</div>
							<?php endforeach; endif; else: echo "" ;endif; ?>
							<!-- 
							<div class="fl box">
								<div class="hover" data-videoSrc="/static/home/img/apply/high_school/video/6.mp4">
									<img src="/static/home/img/apply/high_school/shixun@2x.png" alt="" />
									<img src="/static/home/img/apply/high_school/baofang@2x.png" class="bf" alt="">
								</div>
								<a>
									<video class="video" autoplay="autoplay" loop="loop" muted="true" src=""></video>
								</a>
								<span>加尔塞斯纪念高中招生官寄语</span>
							</div>
							<div class="fl box">
								<div class="hover" data-videoSrc="/static/home/img/apply/high_school/video/6.mp4">
									<img src="/static/home/img/apply/high_school/shixun@2x.png" alt="" />
									<img src="/static/home/img/apply/high_school/baofang@2x.png" class="bf" alt="">
								</div>
								<a>
									<video class="video" autoplay="autoplay" loop="loop" muted="true" src=""></video>
								</a>
								<span>加尔塞斯纪念高中招生官寄语</span>
							</div>
							<div class="fl box">
								<div class="hover" data-videoSrc="/static/home/img/apply/high_school/video/6.mp4">
									<img src="/static/home/img/apply/high_school/shixun@2x.png" alt="" />
									<img src="/static/home/img/apply/high_school/baofang@2x.png" class="bf" alt="">
								</div>
								<a>
									<video class="video" autoplay="autoplay" loop="loop" muted="true" src=""></video>
								</a>
								<span>加尔塞斯纪念高中招生官寄语</span>
							</div>
							<div class="fl box">
								<div class="hover" data-videoSrc="/static/home/img/apply/high_school/video/6.mp4">
									<img src="/static/home/img/apply/high_school/shixun@2x.png" alt="" />
									<img src="/static/home/img/apply/high_school/baofang@2x.png" class="bf" alt="">
								</div>
								<a>
									<video class="video" autoplay="autoplay" loop="loop" muted="true" src=""></video>
								</a>
								<span>加尔塞斯纪念高中招生官寄语</span>
							</div>
							<div class="fl box">
								<div class="hover" data-videoSrc="/static/home/img/apply/high_school/video/6.mp4">
									<img src="/static/home/img/apply/high_school/shixun@2x.png" alt="" />
									<img src="/static/home/img/apply/high_school/baofang@2x.png" class="bf" alt="">
								</div>
								<a>
									<video class="video" autoplay="autoplay" loop="loop" muted="true" src=""></video>
								</a>
								<span>加尔塞斯纪念高中招生官寄语</span>
							</div>
							<div class="fl box">
								<div class="hover" data-videoSrc="/static/home/img/apply/high_school/video/6.mp4">
									<img src="/static/home/img/apply/high_school/shixun@2x.png" alt="" />
									<img src="/static/home/img/apply/high_school/baofang@2x.png" class="bf" alt="">
								</div>
								<a>
									<video class="video" autoplay="autoplay" loop="loop" muted="true" src=""></video>
								</a>
								<span>加尔塞斯纪念高中招生官寄语</span>
							</div>
							<div class="fl box">
								<div class="hover" data-videoSrc="/static/home/img/apply/high_school/video/6.mp4">
									<img src="/static/home/img/apply/high_school/shixun@2x.png" alt="" />
									<img src="/static/home/img/apply/high_school/baofang@2x.png" class="bf" alt="">
								</div>
								<a>
									<video class="video" autoplay="autoplay" loop="loop" muted="true" src=""></video>
								</a>
								<span>加尔塞斯纪念高中招生官寄语</span>
							</div> -->
						</div>
					</div>
					<div class="x_content">
						<p>彬彬教育直接与数百家美国优质中学达成合作，成为独家代理。</p>
						<div class="v clearfix">
							<?php if(is_array($js_list) || $js_list instanceof \think\Collection || $js_list instanceof \think\Paginator): $i = 0; $__LIST__ = $js_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
								<div class="fl box">
									<div class="hover" data-videoSrc="<?php echo htmlentities($val['video']); ?>">
										<img src="<?php echo htmlentities($val['cover_pic']); ?>" alt="" />
										<img src="/static/home/img/apply/high_school/baofang.png" class="bf" alt="">
									</div>
									<a href="">
										<video class="video" autoplay="autoplay" loop="loop" muted="true" src=""></video>
									</a>
									<span><?php echo htmlentities($val['title']); ?></span>
								</div>
							<?php endforeach; endif; else: echo "" ;endif; ?>
							

							<!-- <div class="fl box">
								<div class="hover" data-videoSrc="/static/home/img/apply/high_school/video/6.mp4">
									<img src="/static/home/img/apply/high_school/shixun@2x.png" alt="" />
									<img src="/static/home/img/apply/high_school/baofang@2x.png" class="bf" alt="">
								</div>
								<a href="">
									<video class="video" autoplay="autoplay" loop="loop" muted="true" src=""></video>
								</a>
								<span>加尔塞斯纪念高中招生官寄语</span>
							</div>
							<div class="fl box">
								<div class="hover" data-videoSrc="/static/home/img/apply/high_school/video/6.mp4">
									<img src="/static/home/img/apply/high_school/shixun@2x.png" alt="" />
									<img src="/static/home/img/apply/high_school/baofang@2x.png" class="bf" alt="">
								</div>
								<a href="">
									<video class="video" autoplay="autoplay" loop="loop" muted="true" src=""></video>
								</a>
								<span>加尔塞斯纪念高中招生官寄语</span>
							</div>
							<div class="fl box">
								<div class="hover" data-videoSrc="/static/home/img/apply/high_school/video/6.mp4">
									<img src="/static/home/img/apply/high_school/shixun@2x.png" alt="" />
									<img src="/static/home/img/apply/high_school/baofang@2x.png" class="bf" alt="">
								</div>
								<a href="">
									<video class="video" autoplay="autoplay" loop="loop" muted="true" src=""></video>
								</a>
								<span>加尔塞斯纪念高中招生官寄语</span>
							</div>
							<div class="fl box">
								<div class="hover" data-videoSrc="/static/home/img/apply/high_school/video/6.mp4">
									<img src="/static/home/img/apply/high_school/shixun@2x.png" alt="" />
									<img src="/static/home/img/apply/high_school/baofang@2x.png" class="bf" alt="">
								</div>
								<a href="">
									<video class="video" autoplay="autoplay" loop="loop" muted="true" src=""></video>
								</a>
								<span>加尔塞斯纪念高中招生官寄语</span>
							</div>
							<div class="fl box">
								<div class="hover" data-videoSrc="/static/home/img/apply/high_school/video/6.mp4">
									<img src="/static/home/img/apply/high_school/shixun@2x.png" alt="" />
									<img src="/static/home/img/apply/high_school/baofang@2x.png" class="bf" alt="">
								</div>
								<a href="">
									<video class="video" autoplay="autoplay" loop="loop" muted="true" src=""></video>
								</a>
								<span>加尔塞斯纪念高中招生官寄语</span>
							</div>
							<div class="fl box">
								<div class="hover" data-videoSrc="/static/home/img/apply/high_school/video/6.mp4">
									<img src="/static/home/img/apply/high_school/shixun@2x.png" alt="" />
									<img src="/static/home/img/apply/high_school/baofang@2x.png" class="bf" alt="">
								</div>
								<a href="">
									<video class="video" autoplay="autoplay" loop="loop" muted="true" src=""></video>
								</a>
								<span>加尔塞斯纪念高中招生官寄语</span>
							</div>
							<div class="fl box">
								<div class="hover" data-videoSrc="/static/home/img/apply/high_school/video/6.mp4">
									<img src="/static/home/img/apply/high_school/shixun@2x.png" alt="" />
									<img src="/static/home/img/apply/high_school/baofang@2x.png" class="bf" alt="">
								</div>
								<a href="">
									<video class="video" autoplay="autoplay" loop="loop" muted="true" src=""></video>
								</a>
								<span>加尔塞斯纪念高中招生官寄语</span>
							</div> -->
						</div>
					</div>
					<!-- 了解近期校长来访计划 -->
					<a href="javascript:;" onclick="go()">了解近期校长来访计划</a>
				</div>
			</div>
		</div>
		
		<!-- A+级Top中学院校 -->
		<div class="map gWidth1170">
			<!-- title -->
			<div class="title">
				<h3 style="margin-top: 23px;">彬彬名校资源库</h3>
				<p>彬彬留学美国低龄优质名校资源非常丰富，与五百余家美国高中都持有紧密合作关系，涵盖走读，寄宿，蓝带和艺术高中。</p>
			</div>
			<!-- map -->
			<div class="mapBox">
				<div class="elgz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>俄勒冈州</p>
					<div class="hidden">
						<h4>寄宿高中</h4>
						<div>
							<p>俄勒冈主教高中    Oregon Episcopal School</p>
						</div>
					</div>
				</div>
				<div class="jlfnyz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>加利福尼亚州</p>
					<div class="hidden">
						<div class="clearfix">
							<div class="fl">
								<p><b>寄宿高中</b></p>
								<p>撒切尔学校    The Thacher School</p>
								<p>凯特中学    Cate School</p>
								<p>伍德赛德中学    Woodside Priory School</p>
								<p>韦伯中学    The Webb Schools</p>
								<p>雅典纳中学    The Athenian School</p>
								<p>史蒂文森中学    Stevenson School</p>
								<p>费尔蒙特预备中学     Fairmont Preparatory Academy</p>
								<p>圣卡塔利娜学校    Santa Catalina School</p>
								<p>福临特里奇圣心学院    Flintridge Sacred Heart Academy</p>
								<p>朝圣者学校    Pilgrim School</p>
								<p><b>走读高中</b></p>
								<p>伯特利教会学校    Bethel Christian school</p>
								<p>主教阿莱马尼高中    Bishop Alemany High school</p>
								<p>莫罗天主教高中    Moreau Catholic High School</p>
								<p>唐博斯克科技学院    Don Bosco Technical Institute</p>
								<p>沙维尔学院预备高中    Xavier College Preparatory High School</p>
								<p>圣杰纳维夫高中    St. Genevieve  High School</p>
								<p>山谷基督学校     Valley Christian Schools(San Jose)</p>
								<p>艾玛森私立中学    Eldorado Emerson Private School</p>
								<p>维礼基督高中    Village Christian Schools</p>
								<p>弗雷斯诺基督学校    Fresno Christian School</p>
								<p>维卡维尔基督教学校    Vacaville Christian Schools</p>
								<p>卡佩斯诺基督学校    Capistrano Valley Christian School</p>
								<p>海瑞特基督高中    Heritage Christian School</p>
								<p>罗马琳达学院    Loma Linda Academy</p>
								<p>阿尔文诺高中    Alverno Height Academy</p>
								<p>惠提尔基督高中    Whittier Christian High School</p>
								<p>格雷斯兄弟    Grace Brethern High School</p>
								<p>库埃里兰中学    The Quarry Lane School</p>
								<p>三一古典学院    Trinity Classical Academy</p>
								<p>主教多德高中    Bishop O'Dowd High School</p>
								<p>乔治安娜布鲁斯科比预科学校    Georgiana Bruce Kirby Preparatory School</p>
								<p>国王学院    The King's Acadamy</p>
								<p>布坎南高中    Buchanan High School</p>
								<p>克洛维斯北    Clovis Unified School District</p>
								<p>旧金山基督    San Francisco Christian School</p>
								<p>桑塔玛格丽特    Santa Margarita Catholic High School</p>
								<p>杰赛拉    Jserra Catholic High School</p>
							</div>
						</div>
					</div>
				</div>
				<div class="ylsnz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>亚利桑那州</p>
					<div class="hidden">
						<h4>寄宿高中</h4>
						<div>
							<p>佛得谷学校    Verde Valley School</p>
						</div>
					</div>
				</div>
				<div class="klldz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>科罗拉多州</p>
					<div class="hidden">
						<h4>寄宿高中</h4>
						<div>
							<p>科罗拉多喷泉谷学校    Fountain Valley School of Colorado</p>
						</div>
					</div>
				</div>
				<div class="xmxgz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>新墨西哥州</p>
					<div class="hidden">
						<h4>寄宿高中</h4>
						<div>
							<p>世界联合学院    United World College USA</p>
						</div>
					</div>
				</div>
				<div class="dksxz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>德克萨斯州</p>
					<div class="hidden">
						<div>
							<p><b>寄宿高中</b></p>
							<p>霍克黛女子学校    The Hockaday School</p>
							<p>圣斯蒂芬教会学校    St. Stephen's Episcopal School</p>
							<p>威利学校    The Village School</p>
							<p>德克萨斯主教中学    TMI Episcopal</p>
							<p><b>走读高中</b></p>
							<p>主教林奇高中    Bishop Lynch High School</p>
							<p>自由基督学校    Liberty Christian School </p>
						</div>
					</div>
				</div>
				<div class="xwyz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>夏威夷州</p>
					<div class="hidden">
						<h4>寄宿高中</h4>
						<div>
							<p>伊奥拉尼学校    Iolani School</p>
						</div>
					</div>
				</div>
				<div class="flllz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>佛罗里达州</p>
					<div class="hidden">
						<div>
							<p><b>寄宿高中</b></p>
							<p>圣安德鲁学校    Saint Andrew's School</p>
							<p>博尔斯学校     The Bolles School</p>
							<p><b>走读高中</b></p>
							<p>韦罗特主教高中     Bishop Verot Catholic High School</p>
						</div>
					</div>
				</div>
				<div class="mnsdz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>明尼苏达州</p>
					<div class="hidden">
						<h4>寄宿高中</h4>
						<div>
							<p>明尼苏达国际学校    The International School of Minnesota</p>
							<p>圣约翰中学    Saint John's Preparatory School</p>
						</div>
					</div>
				</div>
				<div class="ahhz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>爱荷华州</p>
					<div class="hidden">
						<h4>寄宿高中</h4>
						<div>
							<p>马赫西学校    Maharishi School</p>
						</div>
					</div>
				</div>
				<div class="adhz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>爱达荷州</p>
					<div class="hidden">
						<h4>寄宿高中</h4>
						<div>
							<p>河石国际学校    Riverstone International School</p>
						</div>
					</div>
				</div>
				<div class="ylnz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>伊利诺伊州</p>
					<div class="hidden">
						<div>
							<p><b>寄宿高中</b></p>
							<p>湖森中学    Lake Forest Academy</p>
							<p>伍德兰兹圣心学院    Woodlands Academy of the Sacred Heart</p>
							<p><b>走读高中</b></p>
							<p>圣维克特高中    Saint Viator High School</p>
							<p>娜泽瑞斯中学    Nazareth Academy</p>
							<p>德拉萨学院    De La Salle Institute</p>
							<p>绍姆堡基督高中    Schaumburg Christian School</p>
							<p>普罗维登斯天主高中    Providence Catholic High School</p>
							<p>芝加哥拉丁学校    Latin School of Chicago</p>
							<p>北海滨日校    North Shore Country Day School</p>
						</div>
					</div>
				</div>
				<div class="mslz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>密苏里州</p>
					<div class="hidden">
						<h4>寄宿高中</h4>
						<div>
							<p>托马斯杰斐逊学校    Thomas Jefferson School</p>
						</div>
					</div>
				</div>
				<div class="mxgz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>密歇根州</p>
					<div class="hidden">
						<h4>寄宿高中</h4>
						<div>
							<p>克瑞布鲁克中学    Cranbrook Schools</p>
						</div>
					</div>
				</div>
				<div class="ydanz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>印地安那州</p>
					<div class="hidden">
						<div>
							<p><b>寄宿高中</b></p>
							<p>柯尔沃学院    Culver Academies</p>
							<p><b>走读高中</b></p>
							<p>海瑞特基督学校    Heritage Christian School</p>
						</div>
					</div>
				</div>
				<div class="tnxz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>田纳西州</p>
					<div class="hidden">
						<h4>寄宿高中</h4>
						<div>
							<p>麦卡利中学    McCallie School</p>
							<p>韦伯中学    The Webb School</p>
							<p>贝勒中学    Baylor School</p>
						</div>
					</div>
				</div>
				<div class="albmz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>阿拉巴马州</p>
					<div class="hidden">
						<div>
							<p><b>寄宿高中</b></p>
							<p>印第安泉中学    Indian Springs School</p>
							<p><b>走读高中</b></p>
							<p>圣伯纳德中学    Saint Bernard School</p>
							<p>汉姆顿学校    Hamden Hall Country Day School</p>
							<p>马斯特学校    The Master's School</p>
							<p>费斯预备学校    Faith  Preparatory Academy</p>
							<p>圣约瑟夫高中    St. Joseph High School</p>
						</div>
					</div>
				</div>
				<div class="eyez clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>俄亥俄州</p>
					<div class="hidden">
						<div>
							<p><b>寄宿高中</b></p>
							<p>西储学院    Western Reserve Academy</p>
							<p>莫米谷走读中学    Maumee Valley Country Day School</p>
							<p><b>走读高中</b></p>
							<p>帕多瓦方济会高中    Padua Franciscan High School</p>
							<p>惠灵顿学校    The Wellington School</p>
						</div>
					</div>
				</div>
				<div class="xhbsez clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>新罕布什尔州</p>
					<div class="hidden">
						<div>
							<p><b>寄宿高中</b></p>
							<p>菲利普斯埃克塞特中学    Phillips Exeter Academy</p>
							<p>圣保罗中学    St. Paul's School</p>
							<p><b>走读高中</b></p>
							<p>布雷迪主教高中    Bishop Brady High School</p>
						</div>
					</div>
				</div>
				<div class="mszsz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>马萨诸塞州</p>
					<div class="hidden">
						<div>
							<p><b>寄宿高中</b></p>
							<p>菲利普斯学校安多佛    Phillips Academy</p>
							<p>迪尔菲尔德学院    Deerfield Academy</p>
							<p>米尔顿高中    Milton Academy</p>
							<p>格里诺贵族学校    Noble and Greenough School</p>
							<p>格罗顿学校    Groton School</p>
							<p>米德尔塞克斯中学    Middlesex School</p>
							<p>圣马克学校     St. Mark's School</p>
							<p>康科德学院    Concord Academy</p>
							<p>库欣高中    Cushing Academy</p>
							<p>北野山高中    Northfield Mount Hermon School</p>
							<p>布鲁克斯学校    Brooks School</p>
							<p>达娜豪尔女子高中    Dana Hall School</p>
							<p>伽文纳中学    The Governor's Academy</p>
							<p>泰博学院    Tabor Academy</p>
							<p>威斯顿剑桥中学    The Cambridge School of Weston</p>
							<p>米斯豪司女子高中    Miss Hall's School</p>
							<p>伍斯特学院    Worcester Academy</p>
							<p>胡桃山艺术高中	    Walnut Hill School for the Arts</p>
							<p><b>走读高中</b></p>
							<p>怀延斯维尔基督中学	    Whitinsville Christian School</p>
							<p>福莫斯学院	    Falmouth Academy</p>
							<p>布拉德福德基督学校	    Bradford Christian Academy</p>
							<p>芳邦女子中学	    Fontbonne Academy</p>
							<p>伍德沃德女子学校	    The Woodward School</p>
							<p>圣约瑟夫预备高中	    Saint Joseph Prep</p>
							<p>布里梅尔学校	    Brimmer &amp; May Schools</p>
							<p>品格里中学	    Pingree School</p>
							<p>罗威尔天主教高中	    Lowell Catholic High School</p>
							<p>纽曼中学	    The Newman School</p>
						</div>
					</div>
				</div>
				<div class="lddz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>罗得岛州</p>
					<div class="hidden">
						<h4>寄宿高中</h4>
						<div>
							<p>圣乔治学校    St. George's School</p>
							<p>朴茨茅斯修道院中学    Portsmouth Abbey School</p>
						</div>
					</div>
				</div>
				<div class="xzxz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>新泽西州</p>
					<div class="hidden">
						<div>
							<p><b>寄宿高中</b></p>
							<p>劳伦斯威尔高中    The Lawrenceville School</p>
							<p>佩迪中学    Peddie School</p>
							<p>布莱尔学院    Blair Academy</p>
							<p>普林斯顿胡恩中学    The Hun School of Princeton</p>
							<p>潘宁顿中学    The Pennington School</p>
							<p><b>走读高中</b></p>
							<p>罗格斯中学    Rutgers Preparatory School </p>
							<p>兰尼学院    Ranney School</p>
							<p>兰尼学院    Saddle River Day School</p>
							<p>普林斯顿圣心学院    Princeton Academy of the Scared Heart</p>
						</div>
					</div>
				</div>
				<div class="hsdtq clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>华盛顿特区</p>
					<div class="hidden">
						<div>
							<p><b>寄宿高中</b></p>
							<p>圣奥尔本斯中学    St. Albans School</p>
							<p>西北中学    The Northwest School</p>
							<p>福利斯特里奇女子中学    Forest Ridge School of the Sacred Heart</p>
							<p><b>走读高中</b></p>
							<p>贝尔维尤基督教学校    Bellevue Christian School</p>
							<p>国王中学    King's Schools</p>
							<p>贝拉明预备学校    Bellarmine Preparatory School</p>
						</div>
					</div>
				</div>
				<div class="mllz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>马里兰州</p>
					<div class="hidden">
						<div>
							<p><b>寄宿高中</b></p>
							<p>乔治城预科学校    Georgetown Preparatory School</p>
							<p>麦克多纳学校    McDonogh School</p>
							<p>圣詹姆斯学校    Saint James School</p>
							<p><b>走读高中</b></p>
							<p>格莱内尔学校    Glenelg Country School</p>
							<p>圣母古德康索    Our Lady of Good Counsel High School</p>
						</div>
					</div>
				</div>
				<div class="bkllnz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>北卡罗来纳州</p>
					<div class="hidden">
						<h4>寄宿高中</h4>
						<div>
							<p>阿什维尔学校    Asheville School</p>
							<p>美国希伯来学院    American Hebrew Academy</p>
						</div>
					</div>
				</div>
				<div class="nyz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>纽约州</p>
					<div class="hidden">
						<div>
							<p><b>寄宿高中</b></p>
							<p>哈克里中学    Hackley School</p>
							<p>艾玛威拉德女子中学    Emma Willard School</p>
							<p>迈斯特中学    The Masters School</p>
							<p>石溪中学     The Stony Brook School</p>
							<p>湖沙克中学    Hoosac School</p>
							<p><b>走读高中</b></p>
							<p>劳伦斯伍德米尔学院    Lawrence Woodmere Academy</p>
							<p>哈利学校    The Harley School</p>
							<p>花园学校    Garden School</p>
							<p>马丁路德学校    Martin Luther School</p>
							<p>圣玛丽高中    Saint Mary’s High School</p>
							<p>圣弗朗西斯预备学校    St. Francis Preparatory School</p>
							<p>布法罗公园学校    The Park School of  Buffalo</p>
							<p>斯泰顿岛学校    Staten Island Academy</p>
							<p>布鲁克林友谊学校    Brooklyn Friends School</p>
						</div>
					</div>
				</div>
				<div class="kndgz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>康涅狄格州</p>
					<div class="hidden">
						<h4>寄宿高中</h4>
						<div>
							<p>乔特罗斯玛丽中学    Choate Rosemary Hall</p>
							<p>鲁米斯查菲高中	 The Loomis Chaffee School</p>
							<p>霍奇基斯中学	The Hotchkiss School</p>
							<p>塔夫脱中学	The Taft School</p>
							<p>肯特高中	Kent School</p>
							<p>波特女子高中	Miss Porter's School</p>
							<p>威斯敏斯特学院	 Westminster School</p>
							<p>梳士巴利男子学校	Salisbury School</p>
							<p>威斯多佛学校	Westover School</p>
							<p>庞弗雷特中学	Pomfret School</p>
						</div>
					</div>
				</div>
				<div class="bxfnyz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>宾夕法尼亚州</p>
					<div class="hidden">
						<div>
							<p><b>寄宿高中</b></p>
							<p>桑迪赛德学院	Shady Side Academy</p>
							<p>摩尔西斯堡学院	Mercersburg Academy</p>
							<p>希尔中学	The Hill School</p>
							<p>乔治高中	George School</p>
							<p>西城中学	Westtown School</p>
							<p>格里尔女子中学	Grier School</p>
							<p>林顿女子中学	Linden Hall</p>
							<p>怀俄明高中	Wyoming Seminary College Preparatory School</p>
							<p><b>走读高中</b></p>
							<p>文森特学院	Vincentian Academy</p>
							<p>哈里森堡学院	 Harrisburg Academy</p>
							<p>考文垂基督学校	  Coventry Christian Schools</p>
							<p>多克门诺高中	Dock Mennonite Academy</p>
							<p>奎格利天主中学	    Quigley Catholic High School</p>
							<p>三一高中	Trinity High School</p>
							<p>西顿拉萨尔天主教高中	Seton LaSalle Catholic High School</p>
							<p>特拉华基督	Delaware County Christian School</p>
							<p>兰开斯特蒙诺学校	Lancaster Mennonite School - Lancaster Campus</p>
						</div>
					</div>
				</div>
				<div class="fjnyz clearfix box">
					<img src="/static/home/img/apply/high_school/dingwei.png" alt="">
					<p>弗吉尼亚州</p>
					<div class="hidden">
						<div>
							<p><b>寄宿高中</b></p>
							<p>主教高中	Episcopal High School</p>
							<p>玛黛拉女子中学	The Madeira <School></School></p>
							<p>乌德贝里森林学校	Woodberry Forest School</p>
							<p>查塔姆霍尔学校	Chatham Hall</p>
							<p><b>走读高中</b></p>
							<p>沃星汉姆学校	Walsingham Academy</p>
							<p>利伯蒂基督学院	  Liberty Christian Academy</p>
							<p>弗林特山学校		Liberty Christian Academy</p>
						</div>
					</div>
				</div>
			</div>
			<a href="javascript:;" onclick="go()">你与名校只差一个彬彬教育，马上申名校</a>
		</div>
		
		<!-- 彬彬海外监管服务 -->
		<div class="haiwai_jianguan">
			<div class="box gWidth1170">
				<!-- title -->
				<div class="title">
					<h3><a href="/page/overseashome.html" target="_blank">彬彬海外监管服务</a></h3>
					<p>覆盖全美五十个州，24H全天候服务，海外监管服务导师1000+，服务在美留学生20000+，海外生活学习报告100万+，力保为每位学子提供定制化满分服务。</p>
				</div>
				<!-- 彬彬后期监管服务 -->
				<div class="houqi_jianguan clearfix">
					<h2>彬彬后期监管服务</h2>
					<div class="box clearfix">
						<div class="swiper-container2">
							<div class="xian"></div>
							<div class="swiper-wrapper clearfix">
								<div class="swiper-slide">
									<div class="content">
										<h3>海外安全培训</h3>
										<p>为学生提供海外风俗、文化、法律、安全培训。让学生在美国保证百分百安全</p>
										<div class="dot"></div>
										<span class="sj"></span>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="content">
										<h3>保险办理</h3>
										<p>协助学生办理健康、意外等保险，协助学生进行保险报销</p>
										<div class="dot"></div>
										<span class="sj"></span>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="content">
										<h3>接机服务</h3>
										<p>学生到达后，安排地接人员接待学生，送达住宿地点</p>
										<div class="dot"></div>
										<span class="sj"></span>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="content">
										<h3>酒店安排</h3>
										<p>为学生的短假期或亲友的探访短期住宿，酒店相关事宜的安排</p>
										<div class="dot"></div>
										<span class="sj"></span>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="content">
										<h3>入学适应</h3>
										<p>通过培训及快速熟悉周边环境，让学生尽快适应学习进度及生活环境</p>
										<div class="dot"></div>
										<span class="sj"></span>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="content">
										<h3>生活报告</h3>
										<p>定期为家长反馈学生在美生活情况报告</p>
										<div class="dot"></div>
										<span class="sj"></span>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="content">
										<h3>学习报告</h3>
										<p>定期为家长反馈学生在美学习成绩单翻译、校方意见反馈等。</p>
										<div class="dot"></div>
										<span class="sj"></span>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="content">
										<h3>升学规划</h3>
										<p>为学生将来的升学做好规划，针对性的学习方案</p>
										<div class="dot"></div>
										<span class="sj"></span>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="content">
										<h3>24H紧急情况处理</h3>
										<p>国内外负责人24H轮流值班，第一时间协调处理突发情况，及时解决和反馈家长需要紧急了解的情况</p>
										<div class="dot"></div>
										<span class="sj"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="leftBtn"></div>
						<div class="rightBtn"></div>
					</div>
				</div>
				<!-- 海外监管服务团队 -->
				<div class="haiwai_jg">
					<h2>海外监管服务团队</h2>
					<div class="box">
						<!-- 选项卡标题 -->
						<div class="hw_title clearfix">
							<a class="active">学业支持</a>
							<a class="">生活指导</a>
							<a class="">院校开发和家庭招募</a>
						</div>
						<!-- 选项内容 -->
						<div class="hw_content clearfix">
							<div class="swiper-container3 swiper2">
								<div class="swiper-wrapper">

									<?php if(is_array($zc_list) || $zc_list instanceof \think\Collection || $zc_list instanceof \think\Paginator): $i = 0; $__LIST__ = $zc_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
										<div class="swiper-slide">
											<img src="<?php echo htmlentities($val['cover_pic']); ?>" class="back" alt="<?php echo htmlentities($val['title']); ?>" title="<?php echo htmlentities($val['title']); ?>">
											<div class="hidden">
												<h3><?php echo htmlentities($val['title']); ?></h3>
												<span></span>
												<p><?php echo htmlentities($val['introduction']); ?></p>
												<a href="javascript:;" onclick="go()">向TA咨询</a>
											</div>
											<img src="/static/home/img/apply/high_school/baofang2.png" data-videoSrc="<?php echo htmlentities($val['video']); ?>" class="bf" alt="">
										</div>
									<?php endforeach; endif; else: echo "" ;endif; ?>

									<!-- <div class="swiper-slide">
										<img src="/static/home/img/apply/high_school/shipin2.png" class="back" alt="">
										<div class="hidden">
											<h3>Sue Trimble访谈</h3>
											<span></span>
											<p>Aaron  获哈佛大学肯尼迪学院公共管理硕士学位，并获得全额奖学金。曾就职中华人民共和国外交部新闻司，任驻菲律宾使馆发言人。Aaron 有丰富的国际教育背景和经验。</p>
											<a href="javascript:;">向TA咨询</a>
										</div>
										<img src="/static/home/img/apply/high_school/baofang2.png" data-videoSrc="/static/home/img/apply/high_school/video/6.mp4" class="bf" alt="">
									</div> -->

								</div>
							</div>
							<!-- <div class="leftBtn1" id="left1"></div>
							<div class="rightBtn1" id="right1"></div> -->
						</div>
						<div class="hw_content clearfix">
							<div class="swiper-container3 swiper3">
								<div class="swiper-wrapper">

									<?php if(is_array($zd_list) || $zd_list instanceof \think\Collection || $zd_list instanceof \think\Paginator): $i = 0; $__LIST__ = $zd_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
										<div class="swiper-slide">
											<img src="<?php echo htmlentities($val['cover_pic']); ?>" class="back" alt="<?php echo htmlentities($val['title']); ?>" title="<?php echo htmlentities($val['title']); ?>">
											<div class="hidden">
												<h3><?php echo htmlentities($val['title']); ?></h3>
												<span></span>
												<p><?php echo htmlentities($val['introduction']); ?></p>
												<a href="javascript:;" onclick="go()">向TA咨询</a>
											</div>
											<img src="/static/home/img/apply/high_school/baofang2.png" data-videoSrc="<?php echo htmlentities($val['video']); ?>" class="bf" alt="">
										</div>
									<?php endforeach; endif; else: echo "" ;endif; ?>

								</div>
							</div>
							<!-- <div class="leftBtn1" id="left2"></div>
							<div class="rightBtn1" id="right2"></div> -->
						</div>
						<div class="hw_content clearfix">
							<div class="swiper-container3 swiper4">
								<div class="swiper-wrapper">

									<?php if(is_array($zm_list) || $zm_list instanceof \think\Collection || $zm_list instanceof \think\Paginator): $i = 0; $__LIST__ = $zm_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
										<div class="swiper-slide">
											<img src="<?php echo htmlentities($val['cover_pic']); ?>" class="back" alt="<?php echo htmlentities($val['title']); ?>" title="<?php echo htmlentities($val['title']); ?>">
											<div class="hidden">
												<h3><?php echo htmlentities($val['title']); ?></h3>
												<span></span>
												<p><?php echo htmlentities($val['introduction']); ?></p>
												<a href="javascript:;" onclick="go()">向TA咨询</a>
											</div>
											<img src="/static/home/img/apply/high_school/baofang2.png" data-videoSrc="<?php echo htmlentities($val['video']); ?>" class="bf" alt="">
										</div>
									<?php endforeach; endif; else: echo "" ;endif; ?>

								</div>
							</div>
							<!-- <div class="leftBtn1" id="left3"></div>
							<div class="rightBtn1" id="right3"></div> -->
						</div>
					</div>
				</div>
				<a href="/page/overseashome.html" target="_blank" class="lj">了解项目详情</a>
			</div>
		</div>
		<!-- 弹出的视频 -->
		<div class="tc_video">
			<div class="video">
				<video src="" autoplay="autoplay" controls="controls">
					您的浏览器不支持video标签
				</video>
				<img src="/static/home/img/apply/high_school/video_gb.png" alt="">
			</div>
		</div>
		
		<!-- 彬彬海外照片集 -->
		<div class="haiwai_zhaopian gWidth1170">
			<!-- title -->
			<div class="title">
				<h3>看得见的实景 更放心的服务</h3>
			</div>
			<!-- content -->
			<div class="content">
				<!-- 选项标题 -->
				<div class="content_title clearfix">
					<a href="/fmfml/0-1.html" target="_blank" class="active">海外生活实景</a>
					<span>|</span>
					<a>重现温情瞬间</a>
				</div>
				<!-- 选项内容 -->
				<div class="content_con clearfix">
					<p style="text-align: center; font-size: 15px;margin: 20px 0 30px;">拥有万余家精选寄宿家庭资源，覆盖全美各州</p>
					<div class="swiper-container4 swiper41">
						<div class="swiper-wrapper">
							
							<div class="swiper-slide">
								<!-- 三张小图 -->
								<div class="top clearfix">
									<?php if(is_array($sj_list['list1']) || $sj_list['list1'] instanceof \think\Collection || $sj_list['list1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $sj_list['list1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($key < '3'): ?>
											<div class="img fl">
												<img src="<?php echo htmlentities($val['cover_pic']); ?>" alt="<?php echo htmlentities($val['title']); ?>" title="<?php echo htmlentities($val['title']); ?>">
												<a href="/fmcontent/<?php echo htmlentities($val['id']); ?>.html" target="_blank">
													<div class="hidden">
														<div class="p">
															<p><?php echo htmlentities($val['title']); ?></p>
														</div>
													</div>
												</a>
											</div>
										<?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</div>
								<!-- 两张大图 -->
								<div class="bottom clearfix">
									<?php if(is_array($sj_list['list1']) || $sj_list['list1'] instanceof \think\Collection || $sj_list['list1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $sj_list['list1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($key >= '3'): ?>
											<div class="img fl">
												<img src="<?php echo htmlentities($val['cover_pic']); ?>" alt="<?php echo htmlentities($val['title']); ?>" title="<?php echo htmlentities($val['title']); ?>">
												<a href="/fmcontent/<?php echo htmlentities($val['id']); ?>.html" target="_blank">
													<div class="hidden">
														<div class="p">
															<p><?php echo htmlentities($val['title']); ?></p>
														</div>
													</div>
												</a>
											</div>
										<?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</div>
							</div>
							<?php if(!(empty($sj_list['list2']) || (($sj_list['list2'] instanceof \think\Collection || $sj_list['list2'] instanceof \think\Paginator ) && $sj_list['list2']->isEmpty()))): ?>
							<div class="swiper-slide">
								<!-- 三张小图 -->
								<div class="top clearfix">
									<?php if(is_array($sj_list['list2']) || $sj_list['list2'] instanceof \think\Collection || $sj_list['list2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $sj_list['list2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($key < '3'): ?>
											<div class="img fl">
												<img src="<?php echo htmlentities($val['cover_pic']); ?>" alt="<?php echo htmlentities($val['title']); ?>" title="<?php echo htmlentities($val['title']); ?>">
												<a href="/fmcontent/<?php echo htmlentities($val['id']); ?>.html" target="_blank">
													<div class="hidden">
														<div class="p">
															<p><?php echo htmlentities($val['title']); ?></p>
														</div>
													</div>
												</a>
											</div>
										<?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</div>
								<!-- 两张大图 -->
								<div class="bottom clearfix">
									<?php if(is_array($sj_list['list2']) || $sj_list['list2'] instanceof \think\Collection || $sj_list['list2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $sj_list['list2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($key >= '3'): ?>
											<div class="img fl">
												<img src="<?php echo htmlentities($val['cover_pic']); ?>" alt="<?php echo htmlentities($val['title']); ?>" title="<?php echo htmlentities($val['title']); ?>">
												<a href="/fmcontent/<?php echo htmlentities($val['id']); ?>.html" target="_blank">
													<div class="hidden">
														<div class="p">
															<p><?php echo htmlentities($val['title']); ?></p>
														</div>
													</div>
												</a>
											</div>
										<?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</div>
							</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="fr">
						<div class="haiwaiLeft haiwaiLeft1"><span></span></div>
						<div class="haiwaiRight haiwaiRight1"><span></span></div>
					</div>
				</div>
				
				<div class="content_con clearfix">
					<p style="text-align: center; font-size: 15px;margin: 20px 0 30px;">完善的海外监管服务，让学生在国外也有家的感觉！</p>
					<div class="swiper-container5 swiper42">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<!-- 三张小图 -->
								<div class="top clearfix">
									<?php if(is_array($gh_list['list1']) || $gh_list['list1'] instanceof \think\Collection || $gh_list['list1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $gh_list['list1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($key < '3'): ?>
											<div class="img fl">
												<img src="<?php echo htmlentities($val['cover_pic']); ?>" alt="<?php echo htmlentities($val['title']); ?>" title="<?php echo htmlentities($val['title']); ?>">
													<div class="hidden">
														<div class="p">
															<p><?php echo htmlentities($val['title']); ?></p>
														</div>
													</div>
											</div>
										<?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</div>
								<!-- 两张大图 -->
								<div class="bottom clearfix">
									<?php if(is_array($gh_list['list1']) || $gh_list['list1'] instanceof \think\Collection || $gh_list['list1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $gh_list['list1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($key >= '3'): ?>
											<div class="img fl">
												<img src="<?php echo htmlentities($val['cover_pic']); ?>" alt="<?php echo htmlentities($val['title']); ?>" title="<?php echo htmlentities($val['title']); ?>">
													<div class="hidden">
														<div class="p">
															<p><?php echo htmlentities($val['title']); ?></p>
														</div>
													</div>
											</div>
										<?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</div>
							</div>
							<?php if(!(empty($gh_list['list2']) || (($gh_list['list2'] instanceof \think\Collection || $gh_list['list2'] instanceof \think\Paginator ) && $gh_list['list2']->isEmpty()))): ?>
							<div class="swiper-slide">
								<!-- 三张小图 -->
								<div class="top clearfix">
									<?php if(is_array($gh_list['list2']) || $gh_list['list2'] instanceof \think\Collection || $gh_list['list2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $gh_list['list2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($key < '3'): ?>
											<div class="img fl">
												<img src="<?php echo htmlentities($val['cover_pic']); ?>" alt="<?php echo htmlentities($val['title']); ?>" title="<?php echo htmlentities($val['title']); ?>">
													<div class="hidden">
														<div class="p">
															<p><?php echo htmlentities($val['title']); ?></p>
														</div>
													</div>
											</div>
										<?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</div>
								<!-- 两张大图 -->
								<div class="bottom clearfix">
									<?php if(is_array($gh_list['list2']) || $gh_list['list2'] instanceof \think\Collection || $gh_list['list2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $gh_list['list2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($key >= '3'): ?>
										<div class="img fl">
											<img src="<?php echo htmlentities($val['cover_pic']); ?>" alt="<?php echo htmlentities($val['title']); ?>" title="<?php echo htmlentities($val['title']); ?>">
												<div class="hidden">
													<div class="p">
														<p><?php echo htmlentities($val['title']); ?></p>
													</div>
												</div>
										</div>
										<?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</div>
							</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="fr">
						<div class="haiwaiLeft haiwaiLeft2"><span></span></div>
						<div class="haiwaiRight haiwaiRight2"><span></span></div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 彬彬低龄游学产品 -->
		<div class="diling_youxue">
			<div class="box gWidth1170">
				<!-- title -->
				<div class="title">
					<h3>彬彬海外游学服务</h3>
				</div>
				<!-- content -->
				<div class="content">
					<!-- 选项标题 -->
					<div class="diling_title clearfix">
						<a class="active">插班</a>
						<span>|</span>
						<a >访校</a>
						<span>|</span>
						<a >夏令营</a>
					</div>
					<!-- 选择内容 -->
					<div class="diling_content clearfix">
							<p>插班是指中国学生利用不同国家学校放假和开学的时间差，赴国外走进当地的学校，进行短期学习，深度体验国外的课堂，感受多元文化。</p>
							<div class="clearfix">
								<div class="fl box">
									<img src="/static/home/img/apply/high_school/chaban1.jpg" alt="收获全真学习证书" title="收获全真学习证书">
									<div class="hidden">
										<h3>收获全真学习证书</h3>
										<p>实景浸泡体验海外优质小学课程，收获学校颁发的官方学习证书。</p>
									</div>
								</div>
								<div class="fl box">
										<img src="/static/home/img/apply/high_school/chaban2.jpg" alt="提升英语综合应用能力" title="提升英语综合应用能力">
										<div class="hidden">
											<h3>提升英语综合应用能力</h3>
											<p>与海外课堂伙伴和老师密集交流，在过程中锻炼英语表达能力和跨文化交流沟通的能力。</p>
										</div>
								</div>
								<div class="fl box">
										<img src="/static/home/img/apply/high_school/chaban3.jpg" alt="体验原汁原味美式课堂" title="体验原汁原味美式课堂">
										<div class="hidden">
											<h3>体验原汁原味美式课堂</h3>
											<p>为期三周的沉浸式学习项目，置身全英语言环境，全方位体验美式教育模式。</p>
										</div>
								</div>
								<div class="fl box">
										<img src="/static/home/img/apply/high_school/chaban4.jpg" alt="收获宝贵海外学习经历" title="收获宝贵海外学习经历">
										<div class="hidden">
											<h3>收获宝贵海外学习经历</h3>
											<p>充分融入美国的教学体系和生活方式，受益海外先进的教育理念和文化熏陶，真正做到“游+学”一体化。</p>
										</div>
								</div>
							</div>
							<p style="margin-bottom: 0;margin-top: 50px;">彬彬教育提供私人一对一定制化插班服务，根据您孩子的实际情况和您的需求，为您孩子匹配最合适的海外插班课堂！</p>
						</div>
						<div class="diling_content clearfix">
							<p>利用美国当地学校开放日，进入美国精英学校，让孩子体验美高课程，了解美国文化，提升跨文化交流的能力。</p>
							<div class="clearfix">
								<div class="fl box">
										<img src="/static/home/img/apply/high_school/fangxiao1.jpg" alt="获得真实感受" title="获得真实感受">
										<div class="hidden">
											<h3>获得真实感受</h3>
											<p>深入学校了解真实校园氛围及师生交流现状，能够深切体会在美国求学的真实感受。更准确判断学校是否适合自己。</p>
										</div>
								</div>
								<div class="fl box">
										<img src="/static/home/img/apply/high_school/fangxiao2.jpg" alt="文化城市艺术采风" title="文化城市艺术采风">
										<div class="hidden">
											<h3>文化城市艺术采风</h3>
											<p>寻访纽约、罗德岛、旧金山、洛杉矶等城市的文化艺术圣地，作为自己的《访校日志》，可作为作品集用于申请高校。</p>
										</div>
								</div>
								<div class="fl box">
										<img src="/static/home/img/apply/high_school/fangxiao3.jpg" alt="提升综合能力" title="提升综合能力">
										<div class="hidden">
											<h3>提升综合能力</h3>
											<p>全面提高学生的英语应用能力、独立自主能力和跨文化交流能力，提高录取竞争力。</p>
										</div>
								</div>
								<div class="fl box">
										<img src="/static/home/img/apply/high_school/fangxiao4.jpg" alt="与学校招生官面对面交流" title="与学校招生官面对面交流">
										<div class="hidden">
											<h3>与学校招生官面对面交流</h3>
											<p>与招生官进行面对面交流，在交流过程中能够了解学校招生偏好，发现自身不足，并锻炼学生逻辑思维能力。</p>
										</div>
								</div>
							</div>
							<p style="margin-bottom: 0;margin-top: 50px;">彬彬留学提供私人定制化访校服务，学习+游览，让您的孩子收获满满！</p>
						</div>
						<div class="diling_content clearfix">
							<p>夏令营可以带领孩子们全真体验世界著名学府，拓宽国际视野，丰富人生阅历，增强主动性，培养个性以及国际化、多元化的文化理念和思维习惯。</p>
							<div class="clearfix">
								<div class="fl box">
										<img src="/static/home/img/apply/high_school/xialingying1.jpg" alt="提高英语应用能力" title="提高英语应用能力">
										<div class="hidden">
											<h3>提高英语应用能力</h3>
											<p>从开始不敢开口说话、讲英文到整个夏令营结束后的侃侃而谈，能有效提高英语应用能力。</p>
										</div>
								</div>
								<div class="fl box">
										<img src="/static/home/img/apply/high_school/xialingying2.jpg" alt="开阔视野增长见识" title="开阔视野增长见识">
										<div class="hidden">
											<h3>开阔视野增长见识</h3>
											<p>领略不一样的风光以及风土人情，通过与不同人的交流增长见识，是前进道路上的一笔宝贵的财富。</p>
										</div>
								</div>
								<div class="fl box">
										<img src="/static/home/img/apply/high_school/xialingying3.jpg" alt="培养独立能力" title="培养独立能力">
										<div class="hidden">
											<h3>培养独立能力</h3>
											<p>参加夏令营，就等于离开了父母的怀抱，能够很好的培养同学们的独立生活及独立处事的能力。</p>
										</div>
								</div>
								<div class="fl box">
										<img src="/static/home/img/apply/high_school/xialingying4.jpg" alt="为未来留学打下基础" title="为未来留学打下基础">
										<div class="hidden">
											<h3>为未来留学打下基础</h3>
											<p>提前适应美国的学习生活环境，提前适应留学生活，做好留学计划和准备，提高留学申请成功率。</p>
										</div>
								</div>
							</div>
							<p style="margin-bottom: 0;margin-top: 50px;">彬彬教育可提供私人定制路线，满足不同家长及学生的需求，切身体验外国学校生活，有效提高学生的综合能力。</p>
						</div>
					</div>
				<!-- 按钮 -->
				<a class="dingzhi" href="javascript:;" onclick="go()">点击定制</a>
			</div>
		</div>
		
		<!-- 美国低龄留学为什么选彬彬 -->
		<div class="xuan gWidth1170">
			<h3>美国低龄留学为什么选彬彬</h3>
			<div class="content clearfix">
				<div class="box fl">
					<img src="/static/home/img/apply/high_school/bin1.jpg" alt="校方资源丰富 合作密切" title="校方资源丰富 合作密切">
					<div class="hidden_a"><h4>校方资源丰富 合作密切</h4></div>
					<div class="hidden_b">
						<div>
							<h4 style="margin-bottom: 5px;">校方资源丰富 合作密切</h4>
							<p>彬彬与千余所美国高中合作密切，是众多学校的独家代理，其中包含百余所蓝带高中、寄宿高中，主要分布在加州、纽约州、波士顿、宾州等地区。<br />彬彬凭借丰富的校方资源为客户打造真正的"全美自由选择"的择校服务，并会定期引进校长团赴华为学生面试，我们的学生享有优先录取、破格录取权。</p>
						</div>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/apply/high_school/bin2.jpg" alt="一站式申请服务" title="一站式申请服务">
					<div class="hidden_a"><h4>一站式申请服务</h4></div>
					<div class="hidden_b">
						<div>
							<h4>一站式申请服务</h4>
							<p>彬彬教育提供出国考试辅导、背景提升、学业规划、职业规划、活动规划、寄宿家庭安置、海外监管等一系列留学申请服务及海外服务，直到学生顺利毕业，我们的服务才会停止。</p>
						</div>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/apply/high_school/bin3.jpg" alt="10余年专注美国低龄申请" title="10余年专注美国低龄申请">
					<div class="hidden_a"><h4>10余年专注美国低龄申请</h4></div>
					<div class="hidden_b">
						<div>
							<h4 style="margin-bottom: 10px;">10余年专注美国低龄申请</h4>
							<p>彬彬专注美国低龄留学申请十余年，平均每年斩获300多封蓝带高中offer，为了给学生们提供更极致的留学服务，十余年来我们不断研发迭代产品，从咨询、申校、文书、到游学、实习、名校科研，环环相扣，让学生全方位得到提升。彬彬留学致力于让每位“成功留学”的学生都能“留学成功”。</p>
						</div>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/apply/high_school/bin4.jpg" alt="万余例成功案例  申请经验丰富" title="万余例成功案例  申请经验丰富">
					<div class="hidden_a"><h4>万余例成功案例  申请经验丰富</h4></div>
					<div class="hidden_b">
						<div>
							<h4>万余例成功案例，申请经验丰富</h4>
							<p>彬彬教育积累了万余成功案例，拥有优质丰富的海外院校资源，是我们为广大学生提供专业留学规划服务的根本依托和优势所在。</p>
						</div>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/apply/high_school/bin5.jpg" alt="选校精准  方案灵活" title="选校精准  方案灵活">
					<div class="hidden_a"><h4>选校精准  方案灵活</h4></div>
					<div class="hidden_b">
						<div>
							<h4>选校精准，方案灵活</h4>
							<p>彬彬教育会系统化的评估学生情况，根据学生的具体情况制定针对性的留学方案，并匹配合适的院校。</p>
						</div>
					</div>
				</div>
				<div class="box fl">
					<img src="/static/home/img/apply/high_school/bin7.jpg" alt="16家境外服务中心" title="16家境外服务中心">
					<div class="hidden_a"><h4>16家境外服务中心</h4></div>
					<div class="hidden_b">
						<div>
							<h4>16家境外服务中心</h4>
							<p>彬彬教育的业务范围遍布在全球各主要城市，设有16家境外服务中心，其中包括芝加哥、华盛顿、洛杉矶、波士顿、纽约等主要城市。</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 活动讲座 新闻列表 -->
		<div class="news">
			<div class="box gWidth1170 clearfix">
				<!-- 讲座活动 -->
				<div class="fl bL">
					<h3 class="clearfix"><a href="/activity/1-0-1.html" target="_blank">讲座活动</a><a href="/activity/1-0-1.html" rel="nofollow" class="fr" target="_blank">MORE</a></h3>
					<div class="content">
						<?php if(is_array($activity_list) || $activity_list instanceof \think\Collection || $activity_list instanceof \think\Paginator): $i = 0; $__LIST__ = $activity_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
							<div class="clearfix">
								<div class="img fl"><img src="<?php echo htmlentities($val['details_portrait']); ?>" alt="<?php echo htmlentities($val['title']); ?>" title="<?php echo htmlentities($val['title']); ?>"></div>
								<div class="fl cLeft">
									<h4><a href="/<?php echo htmlentities($val['rewrite']); ?>/<?php echo htmlentities($val['id']); ?>.html" title="<?php echo htmlentities($val['title']); ?>" target="_blank"><?php echo htmlentities($val['title']); ?></a></h4>
									<p>时间：<?php echo htmlentities($val['lecture_time']); ?></p>
									<!-- <p>主讲人：<?php echo htmlentities($val['name']); ?></p> -->
									<!-- <p>地点：<?php echo htmlentities($val['lecture_venue']); ?></p> -->
								</div>
								<?php
									if( time() >= strtotime(date('Y-m-d',$val['end_time']).' 23:59:59') ){
									?>
										<a class="yyz" href="javascript:;" onclick="go()" style="background-color: #CCCCCC;">已结束</a>
									<?php
									}else{
									?>
										<a class="yyz" href="javascript:;" onclick="go()">预约中</a>
									<?php
									}
								?>
							</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
				<!-- 美国高中留学咨询 -->
				<div class="fl bR">
					<h3 class="clearfix"><a href="/article/1-0-1.html" target="_blank">美国高中留学资讯</a><a href="/article/1-0-1.html" rel="nofollow" class="fr" target="_blank">MORE</a></h3>
					<div class="content1 clearfix">
						<ul class="fl">
							<?php if(is_array($article_type_list) || $article_type_list instanceof \think\Collection || $article_type_list instanceof \think\Paginator): $i = 0; $__LIST__ = $article_type_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($key == '0'): ?>
									<li class="active"><?php echo htmlentities($val['title']); ?></li>
								<?php else: ?>
									<li class=""><?php echo htmlentities($val['title']); ?></li>
								<?php endif; endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<?php if(is_array($article_type_list) || $article_type_list instanceof \think\Collection || $article_type_list instanceof \think\Paginator): $key1 = 0; $__LIST__ = $article_type_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val1): $mod = ($key1 % 2 );++$key1;?>
							<div class="fl">
								<?php if(is_array($val1['children']) || $val1['children'] instanceof \think\Collection || $val1['children'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $val1['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val2): $mod = ($key2 % 2 );++$key2;?>
									<div>
										<h5><a href="/<?php echo htmlentities($val1['rewrite']); ?>/<?php echo htmlentities($val2['id']); ?>.html" target="_blank"><?php echo htmlentities($val2['title']); ?></a></h5>
										<p><?php echo htmlentities(date('Y-m-d',!is_numeric($val2['add_time'])? strtotime($val2['add_time']) : $val2['add_time'])); ?></p>
									</div>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 公共底部 -->
		
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

		<!-- 公共底部 -->
		
		
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
		
		
		<!-- 当前页面js -->	
		<script type="text/javascript" src="/static/home/js/apply/lowage.js"></script>
	</body>
</html>
