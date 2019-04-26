// Bannerswiper
var mySwiper = new Swiper('.swiper-container',{
	paginationClickable: true,
	loop: true,
	autoplay: 5 * 1000,
	speed: 500,
	autoplayDisableOnInteraction: false ,
	pagination: '.pagination',
	paginationClickable: true,
});

//五大优势css兼容考虑 
$('.youshi .box>div.fl:last-child').css({'border-right': 'none'});

// 美国中学视讯 选项卡
$('.video .x_title a').eq(0).attr('class', 'active');
$('.video .x_content').eq(0).css({'display': 'block'});
$('.video .x_title a').on('click', function () {
	var index = $('.video .x_title a').index($(this));
	$(this).attr('class', 'active').siblings('a').removeAttr('class');
	$('.video .x_content').eq(index).css({'display': 'block'}).siblings('.x_content').css({'display': 'none'});
	if( index == 1 ){
		$('.video .content>a').html('获取更多优质名校信息');
	}else if( index == 0 ){
		$('.video .content>a').html('了解近期校长来访计划');
	}
})

// video 视频鼠标上移效果
$('.video .x_content .v .box:nth-child(4n)').css({'margin-right': '0'});
$('.video .x_content .v .box').on('click', function () {
	var videoSrc = $(this).children('.hover').attr('data-videoSrc');
	$('.tc_video').children('.video').children('video').attr('src', videoSrc);
	$('.tc_video').fadeIn();
})

// 彬彬后期监管服务css兼容性考虑
$('.swiper-container2 .swiper-slide:nth-child(odd) .content .sj').css({
	'position': 'absolute',
	'left': '50%',
	'bottom': '-10px',
	'margin-left': '-10px',
	'border-top': '10px solid #D9D8D6',
	'border-left': '10px solid transparent',
	'border-right': '10px solid transparent',
	'transition': 'all .3s'
})
$('.swiper-container2 .swiper-slide:nth-child(2n) .content .sj').css({
	'position': 'absolute',
	'left': '50%',
	'top': '-10px',
	'margin-left': '-10px',
	'border-bottom': '10px solid #D9D8D6',
	'border-left': '10px solid transparent',
	'border-right': '10px solid transparent',
	'transition': 'all .3s'
})
$('.swiper-container2  .swiper-slide:nth-child(odd) .dot').css({
	'bottom': '-42px'
})
$('.swiper-container2 .swiper-slide:nth-child(2n) .dot').css({
	'top': '-42px'
})
$('.swiper-container2  .swiper-slide:nth-child(2n)').css({
	'padding-top': '176px'
})

// 彬彬后期监管服务js swiper配置
var mySwiper2 = new Swiper('.swiper-container2',{
	slidesPerView : 6.7,
	offsetSlidesAfter : 2,
	// autoplay : 1,
	// speed: 1200,
	autoplayStopOnLast : true,
});

// mySwiper2.stopAutoplay();
// 
$('.leftBtn').click(function () {
	mySwiper2.swipePrev();
});
$('.rightBtn').click(function () {
	mySwiper2.swipeNext();
});
// 
// $(window).scroll(function () {
// 	var top = $('.haiwai_jianguan').offset().top;
// 	if( $(window).scrollTop() >= top ){
// 		mySwiper2.startAutoplay();
// 	}
// })

var comtainer = document.getElementsByClassName('swiper-container2')[0];
comtainer.onmouseenter = function () {
	mySwiper2.stopAutoplay();
};
comtainer.onmouseleave = function () {
	mySwiper2.startAutoplay();
}


// 彬彬后期监管服务鼠标上移效果
$('.swiper-container2 .swiper-slide .content').on('mouseenter', function () {
	var index = $('.swiper-container2 .swiper-slide .content').index($(this));
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
$('.swiper-container2 .swiper-slide .content').on('mouseleave', function () {
	var index = $('.swiper-container2 .swiper-slide .content').index($(this));
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

// 海外监管服务swiper配置
var mySwiper3 = new Swiper('.swiper2',{});
$('#left1').click(function () {
	mySwiper3.swipePrev();
});
$('#right1').click(function () {
	mySwiper3.swipeNext();
});

var mySwiper4 = new Swiper('.swiper3',{});
$('#left2').click(function () {
	mySwiper4.swipePrev();
});
$('#right2').click(function () {
	mySwiper4.swipeNext();
});

var mySwiper5 = new Swiper('.swiper4',{});
$('#left3').click(function () {
	mySwiper5.swipePrev();
});
$('#right3').click(function () {
	mySwiper5.swipeNext();
});

// 海外向监管服务选项卡效果 以及 点击弹出视频
$('.hw_content').eq(0).css({'display': 'block'}).siblings('.hw_content').css({'display': 'none'});
$('.haiwai_jg .box .hw_title a').on('click', function () {
	var index = $('.haiwai_jg .box .hw_title a').index($(this));
	$(this).attr('class', 'active').siblings('a').removeAttr('class');
	$('.hw_content').eq(index).css({'display': 'block'}).siblings('.hw_content').css({'display': 'none'});
})
$('.swiper-container3 .swiper-slide img.bf').on('click', function () {
	var src = $(this).attr('data-videoSrc');
	$('.tc_video').children('.video').children('video').attr('src', src);
	$('.tc_video').fadeIn();
})

$('.tc_video .video img').on('click', function () {
	$('.tc_video').fadeOut();
	$(this).siblings('video').removeAttr('src');
})

// 彬彬海外照片集 swiper配置
$('.swiper-container4 .swiper-slide .top .img:last-child').css({'margin-right': '0'});
$('.swiper-container4 .swiper-slide .bottom .img:last-child').css({'margin-right': '0'});
$('.swiper-container5 .swiper-slide .top .img:last-child').css({'margin-right': '0'});
$('.swiper-container5 .swiper-slide .bottom .img:last-child').css({'margin-right': '0'});

var mySwiper6 = new Swiper('.swiper-container4',{});
$('.haiwaiLeft1').click(function () {
	mySwiper6.swipePrev();
});
$('.haiwaiRight1').click(function () {
	mySwiper6.swipeNext();
});

var mySwiperBox = new Swiper('.swiper-container5',{});
$('.haiwaiLeft2').click(function () {
	mySwiperBox.swipePrev();
});
$('.haiwaiRight2').click(function () {
	mySwiperBox.swipeNext();
});

// 彬彬海外照片集选项卡效果
$('.content_con').eq(0).css({'display': 'block'}).siblings('.content_con').css({'display': 'none'});
$('.haiwai_zhaopian .content_title a').on('mouseover', function () {
	var index = $('.haiwai_zhaopian .content_title a').index($(this));
	$(this).attr('class', 'active').siblings('a').removeAttr('class');
	$('.content_con').eq(index).css({'display': 'block'}).siblings('.content_con').css({'display': 'none'});
	var mySwiper6 = new Swiper('.swiper-container4',{});
	$('.haiwaiLeft1').click(function () {
		mySwiper6.swipePrev();
	});
	$('.haiwaiRight1').click(function () {
		mySwiper6.swipeNext();
	});

	var mySwiperBox = new Swiper('.swiper-container5',{});
	$('.haiwaiLeft2').click(function () {
		mySwiperBox.swipePrev();
	});
	$('.haiwaiRight2').click(function () {
		mySwiperBox.swipeNext();
	});
})

// 低领游学产品
$('.diling_youxue .diling_content').eq(0).css({'display': 'block'});
$('.diling_youxue .diling_title a').on('click', function () {
	var index = $('.diling_youxue .diling_title a').index($(this));
	$(this).attr('class', 'active').siblings('a').removeAttr('class');
	$('.diling_youxue .diling_content').eq(index).css({'display': 'block'}).siblings('.diling_content').css({'display': 'none'});
})
$('.diling_youxue .diling_content .box:last-child').css({'margin-right': '0'});
$('.diling_youxue .diling_content .box').on('mouseenter', function () {
	$(this).children('.hidden').stop().animate({'height': '169px'});
})
$('.diling_youxue .diling_content .box').on('mouseleave', function () {
	$(this).children('.hidden').stop().animate({'height': '76px'});
})

// 低领留学为什么选择彬彬
$('.xuan>.content .box:nth-child(3n)').css({'margin-right': '0'})
$('.xuan>.content .box').on('mouseenter', function () {
	$(this).children('.hidden_a').stop().fadeOut(1000);
	$(this).children('.hidden_b').stop().fadeIn(1000);
})
$('.xuan>.content .box').on('mouseleave', function () {
	$(this).children('.hidden_a').stop().fadeIn(400);
	$(this).children('.hidden_b').stop().fadeOut(400);
})

// 美国高中留学咨询选项卡
$('.news .box .content1>div.fl').eq(0).css({'display': 'block'});
$('.news .box .content1>ul.fl li').on('click', function () {
	var index = $('.news .box .content1>ul.fl li').index($(this));
	$(this).attr('class', 'active').siblings('li').removeAttr('class');
	$('.news .box .content1>div.fl').eq(index).css({'display': 'block'}).siblings('div').css({'display': 'none'});
})

// Map
$('.mapBox>.box').hover(function () {
	$(this).children('.hidden').stop().fadeIn();
	$(this).children('p').css({'color': '#FF7062'});
}, function () {
	$(this).children('.hidden').stop().fadeOut();
	$(this).children('p').css({'color': '#333333'});
})