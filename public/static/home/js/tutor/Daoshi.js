// banner上的导航
$('.banner .banNav span:last-child').css({'margin-right': '0'});
var t = document.documentElement.scrollTop || document.body.scrollTop;
var scroll = true;
if(t>=100){
	$('.abcBannav').css({'display': 'none'});
	$('.topNav').css({'position': 'static'});
}
var nav = $('.banNav').offset().top;
$gkLength = $('.daoshi_index').length;
window.onscroll = function () {
	var top = document.documentElement.scrollTop || document.body.scrollTop;
	if(top>=nav){
		$('.banNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999'});
	}else if(top<=$('#mydiv').offset().top){
		$('.banNav').css({'position': 'absolute', 'top':'','bottom': '0'});
	}
// 	var top = document.documentElement.scrollTop || document.body.scrollTop;
// 	if(top>=nav){
// 		$('.banNav').css({'position': 'fixed', 'top': '0', 'z-index': '9999'});
// 		$('.navHidden').css({'display': 'block'});
// 	}else if(top<=$('#mydiv').offset().top){
// 		$('.banNav').css({'position': 'static', 'top':'', 'bottom': 0});
// 		$('.navHidden').css({'display': 'none'});
// 	}
	for( var i=0; i<$gkLength; i++ ){
		if( i == $gkLength - 1 ){
			if( top>=$('.daoshi_index').eq(i).offset().top ){
				$('.banNav span').removeClass('active');
				$('.banNav span').eq(i).addClass('active');
			}
			return;
		}
		if( top>=$('.daoshi_index').eq(i).offset().top && top<$('.daoshi_index').eq(i+1).offset().top ){
			$('.banNav span').removeClass('active');
			$('.banNav span').eq(i).addClass('active');
		}
	}
}
$('.banNav span').on('click', function () {
	var index = $('.banNav span').index($(this));
	var offsetTop = $('.daoshi_index').eq(index).offset().top;
	$('body, html').stop().animate({scrollTop: offsetTop + 0}, 1500);
})
// banNav 滚动浮动


// 服务模式粒子效果
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

// 资讯导师效果
$('.rightb>div.fl').on('mouseenter', function () {
	$(this).children('.hidden').stop().fadeIn();
	$(this).children('.hiddenTitle').stop().fadeOut();
})
$('.rightb>div.fl').on('mouseleave', function () {
	$(this).children('.hidden').stop().fadeOut();
	$(this).children('.hiddenTitle').stop().fadeIn();
})

// 
var mySwiper = new Swiper('.swiper-container',{
	slidesPerView : 4,
	loop: true,
});

$('.leftBtn').click(function () {
	mySwiper.swipePrev();
});
$('.rightBtn').click(function () {
	mySwiper.swipeNext();
});

// 
var mySwiper2 = new Swiper('.swiper-container2',{
	slidesPerView : 5,
	loop: true,
});

$('.leftBtn1').click(function () {
	mySwiper2.swipePrev();
});
$('.rightBtn1').click(function () {
	mySwiper2.swipeNext();
});

// 
var mySwiper21 = new Swiper('.swiper-container4',{
	slidesPerView : 4,
	loop: true,
	offsetPxBefore : 10,
});
$('.leftBtn2').click(function () {
	mySwiper21.swipePrev();
});
$('.rightBtn2').click(function () {
	mySwiper21.swipeNext();
});
$('.swiper-container4 .boxb:last-child').css({'margin-right': '0'});
// 
$('.zhuanye_daoshi .box .ann a:last-child').css({'margin-right': '0'});

// 
$('.liucheng_daoshi .content .box .boxb:last-child').css({'margin-right': '0'});

// 
$('.rightBox').eq(0).attr('class', 'rightBox active').siblings('.rightBox').attr('class', 'rightBox');
$('.tabLeft li').eq(0).attr('class', 'active');
// 名校外籍导师 tab 选项卡效果
$('.tabLeft li').click(function (){
	var index = $('.tabLeft li').index(this);
	$(this).attr('class', 'active');
	$('.tabLeft li').not(this).attr('class', '');
	$('.rightBox').eq(index).attr('class', 'rightBox active').siblings('.rightBox').attr('class', 'rightBox');
})
// 
var mySwiper5 = new Swiper('.swiper', {
	onSlideChangeEnd: function(swiper){
		var activeSlide = $('.swiper .swiper-slide-active')[0];
		// var SlideYm = swiper.slides.indexOf(activeSlide);
		var activeBox = $('.swiper .swiper-slide-active').eq(0).children('.tabLeft').children('li').eq(0);
		$('.tabLeft li').removeClass('active');
		activeBox.addClass('active');
		var index = $('.tabLeft li').index(activeBox);
		$('.rightBox').eq(index).attr('class', 'rightBox active').siblings('.rightBox').attr('class', 'rightBox');
    }
});
$('.btnL').click(function () {
	mySwiper5.swipePrev();
})
$('.btnR').click(function () {
	mySwiper5.swipeNext();
})
var mySwiper4 = new Swiper('.swiper', {});
$('.btnL').click(function () {
	mySwiper4.swipePrev();
})
$('.btnR').click(function () {
	mySwiper4.swipeNext();
})

// 
$('.dudao_daoshi .box .content .conBox .bb:nth-child(3n)').css({'margin-right': '0'});

// 
// 
$('.fuwu_tiyan .content .tab_content .box1').eq(0).css({'display': 'block'});
$('.fuwu_tiyan .content .tab_title>div').on('click', function () {
	var index = $('.fuwu_tiyan .content .tab_title>div').index($(this));
	$(this).attr('id', 'active').siblings('div').removeAttr('id');
	$('.fuwu_tiyan .content .tab_content .box1').eq(index).stop().fadeIn().siblings('.box1').css({'display': 'none'});
})

// 彬彬后期监管服务css兼容性考虑
$('.swiper-container3 .swiper-slide:nth-child(odd) .content .sj').css({
	'position': 'absolute',
	'left': '50%',
	'bottom': '-9px',
	'margin-left': '-10px',
	'border-top': '10px solid #D9D8D6',
	'border-left': '10px solid transparent',
	'border-right': '10px solid transparent',
	'transition': 'all .3s'
})
$('.swiper-container3 .swiper-slide:nth-child(2n) .content .sj').css({
	'position': 'absolute',
	'left': '50%',
	'top': '-9px',
	'margin-left': '-10px',
	'border-bottom': '10px solid #D9D8D6',
	'border-left': '10px solid transparent',
	'border-right': '10px solid transparent',
	'transition': 'all .3s'
})
$('.swiper-container3  .swiper-slide:nth-child(odd) .dot').css({
	'bottom': '-42px'
})
$('.swiper-container3 .swiper-slide:nth-child(2n) .dot').css({
	'top': '-42px'
})
$('.swiper-container3  .swiper-slide:nth-child(2n)').css({
	'padding-top': '176px'
})
// 彬彬后期监管服务js swiper配置
var mySwiper3 = new Swiper('.swiper-container3',{
	slidesPerView : 6.7,
	offsetSlidesAfter : 2,
	// autoplay : 1,
	// speed: 1200,
	// autoplayStopOnLast : true,
});

// mySwiper3.stopAutoplay();

$('.leftBtn').click(function () {
	mySwiper3.swipePrev();
});
$('.rightBtn').click(function () {
	mySwiper3.swipeNext();
});
// 彬彬后期监管服务鼠标上移效果
$('.swiper-container3 .swiper-slide .content').on('mouseenter', function () {
	var index = $('.swiper-container3 .swiper-slide .content').index($(this));
	if( index%2==0 ){
		$(this).children('.sj').css({
			'border-top': '10px solid #FF715D'
		})
	}else{
		$(this).children('.sj').css({
			'border-bottom': '10px solid #FF715D'
		})
	}
})
$('.swiper-container3 .swiper-slide .content').on('mouseleave', function () {
	var index = $('.swiper-container3 .swiper-slide .content').index($(this));
	if( index%2==0 ){
		$(this).children('.sj').css({
			'border-top': '10px solid #D9D8D6'
		})
	}else{
		$(this).children('.sj').css({
			'border-bottom': '10px solid #D9D8D6'
		})
	}
})
//
$(window).scroll(function () {
	if( $(window).scrollTop() + 700 >= $('#mydiv').offset().top ){
		$('#mydiv .box .dq>div').css({'background-position-x': 'right'});	 
	}
	
	if( $(window).scrollTop() + 700 < $('#mydiv').offset().top || $(window).scrollTop() + 100 > $('#mydiv').offset().top ){
		$('#mydiv .box .dq>div').css({'background-position-x': 'left'});	 
	}
})