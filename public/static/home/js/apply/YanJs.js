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

// 增长数字的动画
var options = {
  useEasing: true, 
  useGrouping: true, 
  separator: '', 
  decimal: '.', 
};

var num1 = new CountUp("span1", 0, 100, 0, 2.5, options);
var num2 = new CountUp("span2", 0, 300, 0, 2.5, options);
var num3 = new CountUp("span3", 0, 2000, 0, 2.5, options);
var num4 = new CountUp("span4", 0, 99.7, 1, 2.5, options);
var num5 = new CountUp("span5", 0, 53, 0, 2.5, options);
var num6 = new CountUp("span6", 0, 9.7, 1, 2.5, options);

var n1 = new CountUp("i1", 0, 18, 0, 2.5, options);
var n2 = new CountUp("i2", 0, 18, 0, 2.5, options);
var n3 = new CountUp("i3", 0, 18, 0, 2.5, options);
var n4 = new CountUp("i4", 0, 18, 0, 2.5, options);
var n5 = new CountUp("i5", 0, 18, 0, 2.5, options);
var n6 = new CountUp("i6", 0, 18, 0, 2.5, options);
var n7 = new CountUp("i7", 0, 18, 0, 2.5, options);
var n8 = new CountUp("i8", 0, 18, 0, 2.5, options);

num1.start();
num2.start();
num3.start();
num4.start();
num5.start();
num6.start();

$(window).scroll(function () {
	if( $(window).scrollTop() + 700 >= $('.YjsSq').offset().top && $(window).scrollTop() < $('.Fwts').offset().top ){
		num1.start();
		num2.start();
		num3.start();
		num4.start();
		num5.start();
		num6.start();
	}else if ( $(window).scrollTop() < $('.YjsSq').offset().top || $(window).scrollTop() >= $('.Fwts').offset().top ) {
		num1.reset();
		num2.reset();
		num3.reset();
		num4.reset();
		num5.reset();
		num6.reset();
	}
	
	if( $(window).scrollTop() + 700 >= $('.offerBox').offset().top && $(window).scrollTop() < $('.Jybox').offset().top ){
		n1.start();
		n2.start();
		n3.start();
		n4.start();
		n5.start();
		n6.start();
		n7.start();
		n8.start();		 
	}else if ( $(window).scrollTop() < $('.offerBox').offset().top || $(window).scrollTop() >= $('.Jybox').offset().top ) {
		n1.reset();
		n2.reset();
		n3.reset();
		n4.reset();
		n5.reset();
		n6.reset();
		n7.reset();
		n8.reset();	
	}
	
	if( $(window).scrollTop() + 700 >= $('#mydiv').offset().top ){
		$('#mydiv .box .dq>div').css({'background-position-x': 'right'});	 
	}
	
	if( $(window).scrollTop() + 700 < $('#mydiv').offset().top ){
		$('#mydiv .box .dq>div').css({'background-position-x': 'left'});	 
	}
	
})

// 
$('.Fwts .box .content>div.fl').on('mouseenter', function () {
	$(this).children('.hidden').stop().fadeIn();
})
$('.Fwts .box .content>div.fl').on('mouseleave', function () {
	$(this).children('.hidden').stop().fadeOut();
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
$('.fuwu_tiyan .content .tab_content .box1').eq(0).css({'display': 'block'});
$('.fuwu_tiyan .content .tab_title>div').on('click', function () {
	var index = $('.fuwu_tiyan .content .tab_title>div').index($(this));
	$(this).attr('id', 'active').siblings('div').removeAttr('id');
	$('.fuwu_tiyan .content .tab_content .box1').eq(index).stop().fadeIn().siblings('.box1').css({'display': 'none'});
})

// 
$('.offerJy .offerBox .content>div.fl:nth-child(4n)').css({'margin-right': '0'});

// 
$('.Jybox .content .cright').eq(0).css({'display': 'block'});
$('.Jybox .content .cleft h3').on('click', function () {
	var index = $('.Jybox .content .cleft h3').index($(this));
	$(this).attr('class','fl active').siblings('h3').attr('class', 'fl');
	$('.Jybox .content .cright').eq(index).stop().fadeIn().siblings('.cright').css({'display': 'none'});
	$('.Jybox .content .cright h3').html($(this).html());
})

$('.Jybox .content .cright div.fl .b img').on('click', function () {
	var src = $(this).attr('src');
	$('.offtt').stop().fadeIn()
	$('.offtt img').attr('src', src);
})
$('.offtt span.cha').on('click', function () {
	$('.offtt').stop().fadeOut();
})

// 
// 字数限制 第一个参数传入的为一个jquery对象， 第二个参数为要限制的字数
function LimitNumber(txt,num) {
	var str = txt.text();
	if( str.length <= num ){
		return;
	}
	str = str.substr(0,num) + '...' ;
	txt.text(str);
}
var boxT = $('.Jybox .content .cright div.fl .b p.p');
for(var i=0; i<boxT.length; i++){
	LimitNumber(boxT.eq(i),135);
}

var anli = $('.anli_jianjie');
for( var i=0; i<anli.length; i++ ){
	LimitNumber(anli.eq(i), 150)
}


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

// 背景提升项目的字数限制调用
var text = $('.qfr1');
for(var i=0; i<text.length; i++){
	LimitNumber(text.eq(i),70);
}

var boxT = $('.qfr');
for(var i=0; i<boxT.length; i++){
	LimitNumber(boxT.eq(i),50);
}
// 
$('.news .box .content1>div.fl').eq(0).css({'display': 'block'});
$('.news .box .content1>ul.fl li').on('click', function () {
	var index = $('.news .box .content1>ul.fl li').index($(this));
	$(this).attr('class', 'active').siblings('li').removeAttr('class');
	$('.news .box .content1>div.fl').eq(index).css({'display': 'block'}).siblings('div').css({'display': 'none'});
})