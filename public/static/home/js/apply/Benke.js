// swiper
var mySwiper = new Swiper('.swiper-container',{
	paginationClickable: true,
	loop: true,
	autoplay: 5 * 1000,
	speed: 500,
	autoplayDisableOnInteraction: false ,
	pagination: '.pagination',
	paginationClickable: true,
});
var mySwiper1 = new Swiper('.swiper-container1',{
	paginationClickable: true,
	loop: true,
	speed: 500,
	autoplayDisableOnInteraction: false ,
});
var mySwiper2 = new Swiper('.swiper-container2',{
	slidesPerView : 5,
	loop: true,
	offsetPxBefore : 9,
	autoplay: 4000,
	autoplayStopOnLast : true,
});
$('.swiper-container2 .swiper-slide:last-child').css({'margin-right': '0'});
$('.swiper-container2').on('mouseenter', function () {
	mySwiper2.stopAutoplay();
})
$('.swiper-container2').on('mouseleave', function () {
	mySwiper2.startAutoplay();
})

$('.haiwaiLeft').click(function () {
	mySwiper1.swipePrev();
});
$('.haiwaiRight').click(function () {
	mySwiper1.swipeNext();
});

$('.sqjy .content>img.lll').click(function () {
	mySwiper2.swipePrev();
});
$('.sqjy .content>img.rrr').click(function () {
	mySwiper2.swipeNext();
});

// 增长数字的动画
var options = {
  useEasing: true, 
  useGrouping: true, 
  separator: '', 
  decimal: '.', 
};

var num1 = new CountUp("span1", 0, 100, 0, 10.5, options);
var num2 = new CountUp("span2", 0, 40, 0, 10.5, options);
var num3 = new CountUp("span3", 0, 60, 0, 10.5, options);
var num4 = new CountUp("span4", 0, 100, 0, 10.5, options);
var num5 = new CountUp("span5", 0, 2.8, 1, 10.5, options);

var i1 = new CountUp("i1", 0, 18, 0, 6.5, options);
var i2 = new CountUp("i2", 0, 18, 0, 6.5, options);
var i3 = new CountUp("i3", 0, 18, 0, 6.5, options);
var i4 = new CountUp("i4", 0, 18, 0, 6.5, options);
var i5 = new CountUp("i5", 0, 18, 0, 6.5, options);
var i6 = new CountUp("i6", 0, 18, 0, 6.5, options);
var i7 = new CountUp("i7", 0, 18, 0, 6.5, options);
var i8 = new CountUp("i8", 0, 18, 0, 6.5, options);

num1.start();
num2.start();
num3.start();
num4.start();
num5.start();



$(window).scroll(function () {
	$(window).scroll(function () {
		if( $(window).scrollTop() + 700 >= $('#mydiv').offset().top ){
			$('#mydiv .box .dq>div').css({'background-position-x': 'right'});	 
		}
		
		if( $(window).scrollTop() + 700 < $('#mydiv').offset().top ){
			$('#mydiv .box .dq>div').css({'background-position-x': 'left'});	 
		}
	})
	
	if( $(window).scrollTop() >= $('#mydiv').offset().top ){
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
	
	if( $(window).scrollTop() + 500 >= $('.offerBox').offset().top && $(window).scrollTop() < $('.sqjy').offset().top ){
		i1.start();
		i2.start();
		i3.start();
		i4.start();
		i5.start();
		i6.start();
		i7.start();
		i8.start();
	}else if($(window).scrollTop() < $('.offerBox').offset().top || $(window).scrollTop() >= $('.sqjy').offset().top){
		i1.reset();
		i2.reset();
		i3.reset();
		i4.reset();
		i5.reset();
		i6.reset();
		i7.reset();
		i8.reset();
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
		count: 100,		//点个数
		color: "230,230,230", 	//点颜色
		stroke: "230,230,230", 		//线条颜色
		dist: 30000, 	//点吸附距离
		e_dist: 20000, 	//鼠标吸附加速距离
		max_conn: 10 	//点到点最大连接数
	}

	//调用
	CanvasParticle(config);
}

// 
$('.daoshi_team .count>div.t a').eq(0).attr('class', 'active fl');
$('.daoshi_team .count .b .bBox').eq(0).css({'display': 'block'});
$('.daoshi_team .count>div.t a').on('click', function () {
	var index = $('.daoshi_team .count>div.t a').index($(this));
	$(this).attr('class', 'fl active').siblings('a').attr('class', 'fl');
	$('.daoshi_team .count .b .bBox').eq(index).css({'display': 'block'}).siblings('.bBox').css({'display': 'none'});
})

// 
$('.rightb>div.fl').on('mouseenter', function () {
	$(this).children('.hidden').stop().fadeIn();
	$(this).children('.hiddenTitle').stop().fadeOut();
})
$('.rightb>div.fl').on('mouseleave', function () {
	$(this).children('.hidden').stop().fadeOut();
	$(this).children('.hiddenTitle').stop().fadeIn();
})

// 
$('.bcontent').eq(0).css({'display': 'block'});
$('.bjts_xiangmu .content>div.t a').on('click', function () {
	var index = $('.bjts_xiangmu .content>div.t a').index($(this));
	$(this).attr('class','fl active').siblings('a').attr('class','fl');
	$('.bcontent').eq(index).stop().fadeIn().siblings('.bcontent').css({'display': 'none'});
})

// 
$('.bcontent>div.fr>.box:nth-child(2n)').css({'margin-right': '0'});
$('.bcontent>div.fr>.box:nth-child(3)').css({'margin-bottom': '0'});
$('.bcontent>div.fr>.box:nth-child(4)').css({'margin-bottom': '0'});
$('.bcontent>div.fl').on('mouseenter', function () {
	$(this).children('.hidden_a').stop().fadeOut();
	$(this).children('.hidden_b').stop().fadeIn();
})
$('.bcontent>div.fl').on('mouseleave', function () {
	$(this).children('.hidden_a').stop().fadeIn();
	$(this).children('.hidden_b').stop().fadeOut();
})

$('.bcontent>div.fr>.box').on('mouseenter', function () {
	$(this).children('.hidden_a').stop().fadeOut();
	$(this).children('.hidden_b').stop().fadeIn();
})
$('.bcontent>div.fr>.box').on('mouseleave', function () {
	$(this).children('.hidden_a').stop().fadeIn();
	$(this).children('.hidden_b').stop().fadeOut();
})
// 字数限制 第一个参数传入的为一个jquery对象， 第二个参数为要限制的字数
function LimitNumber(txt,num) {
	var str = txt.text();
	if( str.length <= 70 ){
		return;
	}
	str = str.substr(0,num) + '...' ;
	txt.text(str);
}
// 背景提升项目的字数限制调用
var text = $('.qfr1');
for(var i=0; i<text.length; i++){
	LimitNumber(text.eq(i),70);
}

var boxT = $('.qfr');
for(var i=0; i<boxT.length; i++){
	LimitNumber(boxT.eq(i),30);
}

// 
$('.offerBox .content>div.fl:nth-child(4n)').css({'margin-right': '0'});

// 
$('.swiper-container2 .swiper-slide .img .hidden a:first-child').css({'margin-top': '48px'}),

$('.swiper-container2 .swiper-slide').on('mouseenter',function () {
	$(this).children('.img').children('.hidden').stop().fadeIn();
	$(this).children('h3').children('a').css({'color': '#FF7163'});
})
$('.swiper-container2 .swiper-slide').on('mouseleave',function () {
	$(this).children('.img').children('.hidden').stop().fadeOut();
	$(this).children('h3').children('a').css({'color': '#333333'});
})

$('.offer').click(function () {
	var url = $(this).attr('data-offer')
	$('.offtt').stop().fadeIn();
	$('.offtt img').attr('src', url);
})
$('.offtt .cha').click(function () {
	$('.offtt').stop().fadeOut();
})

// 
$('.news .box .content1>div.fl').eq(0).css({'display': 'block'});
$('.news .box .content1>ul.fl li').on('click', function () {
	var index = $('.news .box .content1>ul.fl li').index($(this));
	$(this).attr('class', 'active').siblings('li').removeAttr('class');
	$('.news .box .content1>div.fl').eq(index).css({'display': 'block'}).siblings('div').css({'display': 'none'});
})