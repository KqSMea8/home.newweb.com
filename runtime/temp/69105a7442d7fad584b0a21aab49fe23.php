<?php /*a:6:{s:81:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\apply\undergraduate.html";i:1553494385;s:80:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_head.html";i:1553677718;s:79:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_tdk.html";i:1553062603;s:83:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_navhead.html";i:1555494636;s:89:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_undergraduate.html";i:1554189591;s:82:"E:\PHPTutorial\WWW\home.newweb.com\application\home\view\common\common_bottom.html";i:1555494636;}*/ ?>
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
		<link rel="stylesheet" href="/static/home/css/apply/undergraduate.css">
		
		<!-- swiper -->
		<link rel="stylesheet" href="/static/home/css/public/swiper/idangerous.swiper.css" />
		<script src="/static/home/js/public/swiper/idangerous.swiper.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	
	<style type="text/css">
		.swiper-container .swiper-slide a{width: 100%;height: 100%;}
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
		
		<!-- top swiper -->
		<div class="swiper-container">
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
					<h3><span id="span1">98</span>%</h3>
					<em></em>
					<p>Top50大学offer录取</p>
				</div>
				<div class="fl div2">
					<h3><span id="span2">40</span>%</h3>
					<em></em>
					<p>Top30大学offer录取</p>
				</div>
				<div class="fl div3">
					<h3><span id="span3">60</span>%</h3>
					<em></em>
					<p>ED录取率</p>
				</div>
				<div class="fl div4">
					<h3><span id="span4">100</span>%</h3>
					<em></em>
					<p>常春藤盟校申请覆盖</p>
				</div>
				<div class="fl div5">
					<h3><span id="span5">2.8</span>亿</h3>
					<em></em>
					<p>奖学金累计（RMB）</p>
				</div>
			</div>
		</div>
		
		<!-- 彬彬服务模式 -->
		<div id="mydiv" style="height: 695px;">
			<div class="box clearfix">
				<!-- title -->
				<div class="title">
					<h3>彬彬服务模式</h3>
					<p>独创六位一体服务模式 践行最专业化服务体系</p>
				</div>
				<!-- content -->
				<div class="content gWidth1170">
					<div class="fl">
						<ul>
							<li class="li1">
								<h3>全程咨询导师</h3>
								<p>全程申请规划、申请时间进度把控</p>
							</li>
							<li class="li2">
								<h3>全能主导师</h3>
								<p>选校定位、推荐人筛选、简历咨询、文书咨询、面试辅导</p>
							</li>
							<li class="li3">
								<h3>海外同专业导师</h3>
								<p>职业规划咨询、选校选专业咨询建议、文书素材把关、模拟面试</p>
							</li>
						</ul>
					</div>
					<div class="dq">
						<div>
							<h3><p>行业首创<br />【六位一体】<br />辅导模式</p></h3>
							<!-- <img src="/static/home/img/apply/undergraduate/3232323232332.png" alt=""> -->
						</div>
					</div>
					<div class="fr">
						<ul>
							<li class="li1 clearfix">
								<h3>资深流程导师</h3>
								<p class="fr">网申填写辅导、成绩认证辅导、语言成绩寄送辅导、申请材料的准备指导</p>
							</li>
							<li class="li2 clearfix">
								<h3>名校外籍文笔导师</h3>
								<p class="fr">文书母语润色、词汇句法优化、素材结构建议</p>
							</li>
							<li class="li3 clearfix">
								<h3>专家督导导师</h3>
								<p class="fr">跟踪学生申请进度、定期跟踪学生的申请体验、审核学生申请方案</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 强大的国内外导师团队 -->
		<div class="daoshi_team">
			<div class="gWidth1170">
				<!-- title -->
				<div class="title">
					<h3>六位一体导师团队</h3>
					<p>独创六位一体服务模式，锤炼精锐留学专家，保障每位学子留学成功！</p>
				</div>
				<!-- count -->
				<div class="count">
					<!-- 选项 -->
					<div class="clearfix t">

						<div class="tbox">
							<?php if(is_array($list['type_list']) || $list['type_list'] instanceof \think\Collection || $list['type_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $list['type_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($key != '5'): ?>
									<a class="fl"><?php echo htmlentities($vo['tutor_type']); ?></a><span class="fl">|</span>
								<?php else: ?>
									<a class="fl"><?php echo htmlentities($vo['tutor_type']); ?></a>
								<?php endif; endforeach; endif; else: echo "" ;endif; ?>
						</div>
						
					</div>
					<!-- 内容 -->
					<div class="clearfix b">

						<?php if(is_array($list['type_list']) || $list['type_list'] instanceof \think\Collection || $list['type_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $list['type_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<div class="bBox clearfix">
								<div class="fl leftb">
									<h3><?php echo htmlentities($vo['tutor_type']); ?></h3>
									<p><?php echo htmlentities($vo['english_title']); ?></p>
									<span></span>
									<em><?php echo htmlentities($vo['describe']); ?></em>
									<em>擅长：<?php echo htmlentities($vo['adept']); ?></em>
									<div class="bBtn clearfix">
										<a onclick="go()" class="fl">匹配专属导师</a>
										<a href="/tutor/special" target="_blank" class="fl">查看更多导师</a>
									</div>
								</div>
								<div class="fr rightb">
									<?php if(is_array($vo['teacher_list']) || $vo['teacher_list'] instanceof \think\Collection || $vo['teacher_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['teacher_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
									<div class="fl">
										<img src="<?php echo htmlentities($admin_path); ?><?php echo htmlentities($val['thumbnail']); ?>" alt="<?php echo htmlentities($val['title']); ?>" title="<?php echo htmlentities($val['title']); ?>">
										<div class="hiddenTitle"><?php echo htmlentities($val['title']); ?></div>
										<div class="hidden">
											<h3><?php echo htmlentities($val['title']); ?></h3>
											<span></span>
											<?php if(!(empty($val['school']) || (($val['school'] instanceof \think\Collection || $val['school'] instanceof \think\Paginator ) && $val['school']->isEmpty()))): ?>
												<p><?php echo htmlentities($val['school']); ?></p>
											<?php endif; if(!(empty($val['major']) || (($val['major'] instanceof \think\Collection || $val['major'] instanceof \think\Paginator ) && $val['major']->isEmpty()))): ?>
												<p><?php echo htmlentities($val['major']); ?></p>
											<?php endif; if(!(empty($val['adept']) || (($val['adept'] instanceof \think\Collection || $val['adept'] instanceof \think\Paginator ) && $val['adept']->isEmpty()))): ?>
												<p><?php echo htmlentities($val['adept']); ?></p>
											<?php endif; if(!(empty($vo['rewrite']) || (($vo['rewrite'] instanceof \think\Collection || $vo['rewrite'] instanceof \think\Paginator ) && $vo['rewrite']->isEmpty()))): ?>
												<a href="/<?php echo htmlentities($vo['rewrite']); ?>/<?php echo htmlentities($val['id']); ?>.html" target="_blank">个人介绍</a>
											<?php else: ?>
												<a onclick="go()" target="_blank">与TA聊聊</a>
											<?php endif; ?>
										</div>
									</div>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</div>
							</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>

					</div>
				</div>
			</div>
		</div>
		
		<!-- 细致入微的导师服务体验  -->
		<div class="gWidth1170 xzrw">
			<!-- title -->
			<div class="title">
				<h3>专业化精准导师服务体验</h3>
			</div>
			<!-- content -->
			<div class="swiper-container1 clearfix">
				<div class="swiper-wrapper">
					<div class="swiper-slide clearfix">
						<img src="/static/home/img/apply/undergraduate/zhinagtuan.jpg" class="fl" alt="申请季陪伴智囊团" title="申请季陪伴智囊团">
						<div>
							<h3>申请季陪伴智囊团</h3>
							<p>“六位一体”所有导师为留学生提供24小时答疑服务，学生和家长有任何问题，导师们都会在最短时间内解决，尽一切必要的方式与学生和家长保持联系畅通。</p>
							<a href="javascript:;" onclick="go()" >体验导师服务</a>
						</div>
					</div>
					<div class="swiper-slide clearfix">
						<img src="/static/home/img/apply/undergraduate/shijiananpai.jpg" class="fl" alt="科学的时间安排和计划" title="科学的时间安排和计划">
						<div>
							<h3>科学的时间安排和计划</h3>
							<p>凡事预则立，不预则废。导师们会在服务开始后跟同学制定科学的时间规划，安排好咨询的进度。并且会根据学生的成长变化，与时俱进，调整计划，让学生能够提早规避掉很多申请过程当中的陷阱，让学生不再因为错过时间点而遗憾。</p>
							<a href="javascript:;" onclick="go()" >体验导师服务</a>
						</div>
					</div>
					<div class="swiper-slide clearfix">
						<img src="/static/home/img/apply/undergraduate/miqiejialiu.jpg" class="fl" alt="密切的沟通交流" title="密切的沟通交流">
						<div>
							<h3 style="margin-top: 20px;margin-bottom: 10px;">密切的沟通交流</h3>
							<p>在规划期间，主申请导师会每月跟学生沟通并更新计划，彬彬教育的老师们会主要以解决问题为最终目标，为同学们学术活动规划中大大小小的问题提供专业和富有启发性的答案。在申请季期间，主申请导师和班主任也会保持和学生的实时联系，充分开发学生的现有经历和潜能，保证申请进度有条不紊，扎扎实实地应对申请季的挑战。同时在线沟通的方式可以为国内的学生匹配到在国外专业领域学习工作的专业导师，为国内的学生分享申请的经验。</p>
							<a href="javascript:;" onclick="go()" >体验导师服务</a>
						</div>
					</div>
					<div class="swiper-slide clearfix">
						<img src="/static/home/img/apply/undergraduate/wusijaio.jpg" class="fl" alt="无死角的规划辅导" title="无死角的规划辅导">
						<div>
							<h3 style="margin-top: 10px;margin-bottom: 10px;">无死角的规划辅导</h3>
							<p style="margin-bottom: 10px;">在申请过程当中，许多背景规划、活动推荐都需要结合专业本身来确定，不同的专业有其独特的规划方案，彬彬教育通过引入专业导师，来为学生提供专业度方面的把关，避免了一些传统模式实际操作中，学生负责给自己规划，顾问负责给学生加油的倒挂现象。同时在文书辅导过程中，针对专业度强的文书，部分传统机构往往无法在文书写作方面给予学生提升和帮助，甚至套用模版。而彬彬教育则针对这个行业和学生的痛点，通过专业导师的辅导为学生提供全方位的服务。</p>
							<a href="javascript:;" onclick="go()" >体验导师服务</a>
						</div>
					</div>
				</div>
			</div>
			<div class="fr">
				<div class="haiwaiLeft haiwaiLeft1"><span></span></div>
				<div class="haiwaiRight haiwaiRight1"><span></span></div>
			</div>
		</div>
		
		<!-- 全维度高品质背景提升项目 -->
		<div class="bjts_xiangmu_box">
			<div class="bjts_xiangmu gWidth1170">
				<!-- title -->
				<div class="title">
					<h3>全维度高品质背景提升项目</h3>
					<p>全球顶尖TOP名校科研、500强名企实习等强大项目资源库为学生申请打造独一无二的优势。</p>
				</div>
				<!-- content -->
				<div class="content">
					<!-- 选项 -->
					<div class="clearfix t">
						<div class="tbox">
							<?php if(is_array($bj_list) || $bj_list instanceof \think\Collection || $bj_list instanceof \think\Paginator): $i = 0; $__LIST__ = $bj_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;
									if($key==0){
									?>
										<a class="fl active"><?php echo htmlentities($val['bg_promote_type']); ?></a><span class="fl">|</span>
									<?php	
									}else if($key==count($bj_list)-1){
									?>
										<a class="fl"><?php echo htmlentities($val['bg_promote_type']); ?></a>
									<?php
									}else{
									?>
										<a class="fl"><?php echo htmlentities($val['bg_promote_type']); ?></a><span class="fl">|</span>
									<?php
									}
								endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<!-- 内容 -->

					<?php if(is_array($bj_list) || $bj_list instanceof \think\Collection || $bj_list instanceof \think\Paginator): $key1 = 0; $__LIST__ = $bj_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val1): $mod = ($key1 % 2 );++$key1;?>
						<div class="bcontent clearfix">
							<div class="fl">
								<?php if(is_array($val1['children']['hot']) || $val1['children']['hot'] instanceof \think\Collection || $val1['children']['hot'] instanceof \think\Paginator): $key2 = 0;$__LIST__ = is_array($val1['children']['hot']) ? array_slice($val1['children']['hot'],0,1, true) : $val1['children']['hot']->slice(0,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val2): $mod = ($key2 % 2 );++$key2;?>
										<img src="<?php echo htmlentities($val2['thumbnail']); ?>" alt="<?php echo htmlentities($val2['title']); ?>" title="<?php echo htmlentities($val2['title']); ?>">
										<span class="hidden_a"><?php echo htmlentities($val2['title']); ?></span>
										<div class="hidden_b">
											<div class="juzhong">
												<h3><?php echo htmlentities($val2['title']); ?></h3>
												<p class="qfr1">适合人群：<?php echo htmlentities($val2['target_object']); ?></p>
												<a href="/<?php echo htmlentities($val1['rewrite']); ?>/<?php echo htmlentities($val2['id']); ?>.html" target="_blank">查看详情</a>
											</div>
										</div>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
							<div class="fr">
								<?php if(is_array($val1['children']['cool']) || $val1['children']['cool'] instanceof \think\Collection || $val1['children']['cool'] instanceof \think\Paginator): $key2 = 0;$__LIST__ = is_array($val1['children']['cool']) ? array_slice($val1['children']['cool'],0,4, true) : $val1['children']['cool']->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val2): $mod = ($key2 % 2 );++$key2;?>
										<div class="box fl">
											<img src="<?php echo htmlentities($val2['thumbnail']); ?>" alt="<?php echo htmlentities($val2['title']); ?>" title="<?php echo htmlentities($val2['title']); ?>">
											<span class="hidden_a"><?php echo htmlentities($val2['title']); ?></span>
											<div class="hidden_b">
												<div class="juzhong">
													<h3><?php echo htmlentities($val2['title']); ?></h3>
													<p class="qfr">适合人群：<?php echo htmlentities($val2['target_object']); ?></p>
													<a href="/<?php echo htmlentities($val1['rewrite']); ?>/<?php echo htmlentities($val2['id']); ?>.html" target="_blank">查看详情</a>
												</div>
											</div>
										</div>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
							<a href="/project/0-<?php echo htmlentities($val1['id']); ?>-1.html" target="_blank" rel="nofollow" class="fr more">
								<span></span>
							</a>
						</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					
				</div>
			</div>
		</div>
		
		<!-- 名校offer最新录取 -->
		<div class="gWidth1170">
			<!-- 名校offer最新录取 -->
			<div class="offerBox">
				<!-- title -->
				<div class="title">
					<h3>名校offer最新录取</h3>
					<p>上千名校录取offer，覆盖哈佛、普林斯顿、麻省理工、斯坦福、加州伯克利、UCLA等世界等级名校</p>
				</div>
				<!-- content -->
				<div class="content clearfix">
					<?php if(is_array($offer_list) || $offer_list instanceof \think\Collection || $offer_list instanceof \think\Paginator): $i = 0; $__LIST__ = $offer_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
						<div class="fl">
							<img class="fl" src="<?php echo htmlentities($val['icon']); ?>" alt="<?php echo htmlentities($val['title']); ?>" title="<?php echo htmlentities($val['title']); ?>">
							<img src="<?php echo htmlentities($val['pic']); ?>" class="img" alt="<?php echo htmlentities($val['title']); ?>" title="<?php echo htmlentities($val['title']); ?>">
							<div class="fr">
								<span><i><?php echo htmlentities($val['num']); ?></i>枚</span>
								<em><?php echo htmlentities($val['title']); ?></em>
							</div>
						</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					<!-- <div class="fl">
						<img class="fl" src="/static/home/img/apply/undergraduate/logo1.png" alt="">
						<img src="/static/home/img/apply/undergraduate/yuanxiao1.png" class="img" alt="">
						<div class="fr">
							<span><i id="i2">18</i>枚</span>
							<em>普林斯顿大学</em>
						</div>
					</div>
					<div class="fl">
						<img class="fl" src="/static/home/img/apply/undergraduate/logo1.png" alt="">
						<img src="/static/home/img/apply/undergraduate/yuanxiao1.png" class="img" alt="">
						<div class="fr">
							<span><i id="i3">18</i>枚</span>
							<em>普林斯顿大学</em>
						</div>
					</div>
					<div class="fl">
						<img class="fl" src="/static/home/img/apply/undergraduate/logo1.png" alt="">
						<img src="/static/home/img/apply/undergraduate/yuanxiao1.png" class="img" alt="">
						<div class="fr">
							<span><i id="i4">18</i>枚</span>
							<em>普林斯顿大学</em>
						</div>
					</div>
					<div class="fl">
						<img class="fl" src="/static/home/img/apply/undergraduate/logo1.png" alt="">
						<img src="/static/home/img/apply/undergraduate/yuanxiao1.png" class="img" alt="">
						<div class="fr">
							<span><i id="i5">18</i>枚</span>
							<em>普林斯顿大学</em>
						</div>
					</div>
					<div class="fl">
						<img class="fl" src="/static/home/img/apply/undergraduate/logo1.png" alt="">
						<img src="/static/home/img/apply/undergraduate/yuanxiao1.png" class="img" alt="">
						<div class="fr">
							<span><i id="i6">18</i>枚</span>
							<em>普林斯顿大学</em>
						</div>
					</div>
					<div class="fl">
						<img class="fl" src="/static/home/img/apply/undergraduate/logo1.png" alt="">
						<img src="/static/home/img/apply/undergraduate/yuanxiao1.png" class="img" alt="">
						<div class="fr">
							<span><i id="i7">18</i>枚</span>
							<em>普林斯顿大学</em>
						</div>
					</div>
					<div class="fl">
						<img class="fl" src="/static/home/img/apply/undergraduate/logo1.png" alt="">
						<img src="/static/home/img/apply/undergraduate/yuanxiao1.png" class="img" alt="">
						<div class="fr">
							<span><i id="i8">18</i>枚</span>
							<em>普林斯顿大学</em>
						</div>
					</div> -->
				</div>
			</div>
		
			<!-- 学长学姐传授名校申请经验 -->
			<div class="sqjy">
				<!-- title -->
				<div class="title">
					<h3>学长学姐传授名校申请经验</h3>
					<p>吸取留学申请经验 远离留学申请坑</p>
				</div>
				<!-- content -->
				<div class="content">
					<div class="swiper-container2">
						<div class="swiper-wrapper">

							<?php if(is_array($case_list) || $case_list instanceof \think\Collection || $case_list instanceof \think\Paginator): $i = 0; $__LIST__ = $case_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
								<div class="swiper-slide">
									<div class="img">
										<img src="<?php echo htmlentities($val['head_img']); ?>" alt="<?php echo htmlentities($val['student_name']); ?>" title="<?php echo htmlentities($val['student_name']); ?>">
										<div class="hidden">
											<a href="javascript:;" class="offer" data-offer="<?php echo htmlentities($val['xx_offer']); ?>">offer展示</a>
											<a href="/success/<?php echo htmlentities($val['id']); ?>.html" target="_blank">查看详情</a>
										</div>
									</div>
									<h3><a href="/success/<?php echo htmlentities($val['id']); ?>.html" target="_blank"><?php echo htmlentities($val['student_name']); ?></a></h3>
									<p><?php echo htmlentities($val['xx_name']); ?></p>
								</div>
							<?php endforeach; endif; else: echo "" ;endif; ?>

						</div>
					</div>
					<img src="/static/home/img/apply/undergraduate/xianzuo2.png" class="lll" alt="">
					<img src="/static/home/img/apply/undergraduate/xianyou2.png" class="rrr" alt="">
					<a href="javascript:;" onclick="go()">联系彬彬教育申名校</a>
				</div>
			</div>
		</div>
		<!-- offer弹出 -->
		<div class="offtt">
			<img src="" alt="">
			<span class="cha"></span>
		</div>
		
		<!-- 活动讲座 新闻列表 -->
		<div class="news">
			<div class="box gWidth1170 clearfix">
				<!-- 讲座活动 -->
				<div class="fl bL">
					<h3 class="clearfix"><a href="/activity/2-0-1.html" target="_blank">讲座活动</a><a href="/activity/2-0-1.html" rel="nofollow" class="fr" target="_blank">MORE</a></h3>
					<div class="content">
						<?php if(is_array($activity_list) || $activity_list instanceof \think\Collection || $activity_list instanceof \think\Paginator): $i = 0; $__LIST__ = $activity_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
							<div class="clearfix">
								<div class="img fl"><img src="<?php echo htmlentities($val['details_portrait']); ?>" alt="<?php echo htmlentities($val['title']); ?>" title="<?php echo htmlentities($val['title']); ?>"></div>
								<div class="fl cLeft">
									<h4><a href="/<?php echo htmlentities($val['rewrite']); ?>/<?php echo htmlentities($val['id']); ?>.html" target="_blank"><?php echo htmlentities($val['title']); ?></a></h4>
									<p>时间：<?php echo htmlentities($val['lecture_time']); ?></p>
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
				<!-- 美国本科留学资讯 -->
				<div class="fl bR">
					<h3 class="clearfix"><a href="/article/2-0-1.html" target="_blank">美国本科留学资讯</a><a href="/article/2-0-1.html" class="fr" rel="nofollow" target="_blank">MORE</a></h3>
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
										<h5><a href="/<?php echo htmlentities($val['rewrite']); ?>/<?php echo htmlentities($val2['id']); ?>.html" target="_blank"><?php echo htmlentities($val2['title']); ?></a></h5>
										<p><?php echo htmlentities(date('Y-m-d',!is_numeric($val2['add_time'])? strtotime($val2['add_time']) : $val2['add_time'])); ?></p>
									</div>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div>
		</div>
		
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
		
		<!-- top 底部公共文件 -->
		<link rel="stylesheet" href="/static/home/css/public/public.css">
		<script type="text/javascript" src="/static/home/js/public/public.js"></script>
		<!-- 数字滚动插件 -->
		<script type="text/javascript" src="/static/home/js/public/countUp.min.js"></script>
		<!-- 粒子链接 -->
		<script type="text/javascript" src="/static/home/js/public/canvas-particle.js"></script>
		<!-- jquery-ui -->
		<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script> -->
		<!-- 当前网页JS -->
		<script type="text/javascript" src="/static/home/js/apply/Benke.js"></script>
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

	</body>
</html>