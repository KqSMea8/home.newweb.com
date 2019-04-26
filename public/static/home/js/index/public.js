// document.onselectstart = function(){
//     event.returnValue = false;
// }

var navActive = window.location.pathname;
var aHref = $('.topNav .nav>div.fl>a');
var aArr = [];
for ( var i=0; i<aHref.length; i++ ) {
	aHref.eq(i).removeClass('active');
	aArr.push(aHref.eq(i).attr('href'));
}
var Active = aArr.indexOf(navActive);
if(Active == '-1'){
	aHref.removeClass('active');
}else{
	aHref.eq(Active).addClass('active');
}
// topJS
// 导航鼠标上移效果
$('.topNavBox .nav>div').on('mouseenter', function () {
	// $(this).children('.box').css({'display': 'block'});
	$(this).children('.box').stop().slideDown();
	$(this).children('a').addClass('active');
	$('.topNavBox .nav>div').not(this).children('a').removeClass('active');
})
$('.topNavBox .nav>div').on('mouseleave', function () {
	// $(this).children('.box').css({'display': 'none'});
	$(this).children('.box').stop().slideUp();
	$('.topNavBox .nav>div').children('a').removeClass('active');
	if( Active == '-1' ){
		return false;
	}
	aHref.eq(Active).addClass('active');
})

// 搜索框显示隐藏样式
$('.topNavBox .ss').hover(function () {
	$('.phoneR span').stop().animate({'width': '0'}, 400, function () {
		$('.ss .input').stop().fadeIn(400);
		$('.ss .input input').focus();
	});
	$(this).children('h3').stop().fadeOut(400);
}, function () {
	if( $(this).children('.input').children('form').children('input').val() !== '' ){
		return;
	}
	$(this).children('.input').stop().fadeOut(400, function () {
		$('.topNavBox .ss h3').stop().fadeIn(400);
		$('.phoneR span').stop().animate({'width': '162.5px'}, 400)
	});
})

// topNav滚动
var t = document.documentElement.scrollTop || document.body.scrollTop;
var scroll = true;
if(t>=100){
	$('.abcBannav').css({'display': 'block'});
	$('.topNav').css({'position': 'fixed', 'top': '-99px', 'background-color': 'rgba(255,255,255,0.98)'});
	$('.topNav').stop().animate({'top': '0'}, 500);
}
window.onscroll = function () {
	var top = document.documentElement.scrollTop || document.body.scrollTop;
	if( !scroll ){
		return;
	}
	if( top >= 100 ){
		if( $('.topNav').css('position') == 'relative' ){
			scroll = false;
			$('.abcBannav').css({'display': 'block'});
			$('.topNav').css({'position': 'fixed', 'top': '-99px', 'background-color': 'rgba(255,255,255,0.98)'});
			$('.topNav').animate({'top': '0'}, 500, function () {
				scroll = true;
			});
		}
	}else if(top == 0) {
		$('.abcBannav').css({'display': 'none'});
		$('.topNav').css({'position': 'relative'});
	}
}

// 底部JS
// 底部导航
$('.botNav .nav').on('mouseenter', function () {
	$(this).siblings('.nav').css({
		'background-color': '',
		'border-radius': '0',
	})
	$(this).siblings('.nav').children('.hidden').css({'display': 'none'});
	$(this).siblings('.nav').children('p').html('+');
	$(this).siblings('.nav').children('p').css({
		'margin-right': '11px'
	})
	
	$(this).css({
		'background-color': '#141414',
		'border-radius': '5px',
	});
	$(this).children('p').html('-');
	$(this).children('p').css({
		'margin-right': '14px'
	})
	$(this).children('.hidden').css({'display': 'block'});
})
$('.botNav .nav').on('mouseleave', function () {
	var that = $(this);
	$('.botNav').on('mouseleave', function () {
		that.css({
			'background-color': '',
			'border-radius': '0',
		});
		that.children('p').html('+');
		that.children('p').css({
			'margin-right': '11px'
		})
		that.children('.hidden').css({'display': 'none'});
	})
})

// 检测ie8
// dom必须传递 jquery对象
function ie8(dom) {
	var DEFAULT_VERSION = 8.0;  
	var ua = navigator.userAgent.toLowerCase();  
	var isIE = ua.indexOf("msie")>-1;  
	var safariVersion;  
	if(isIE){  
		safariVersion =  ua.match(/msie ([\d.]+)/)[1];  
	}  
	if(safariVersion <= DEFAULT_VERSION ){  
		alert('检测到您当前浏览器无法流畅查看页面，为了您有更完美的用户体验，请更换或升级浏览器访问！');
		if(dom){
			dom.css({'display':'block'});
		}
	}; 
}