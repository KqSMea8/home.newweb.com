// 背景提升重要性鼠标移入效果
$('.bjts_zyx .box>div.fr .box:nth-child(2n)').css({'margin-right': '0'});
$('.bjts_zyx .box>div.fr .box').on('mouseenter', function () {
	$(this).children('.hidden').attr('class', 'hidden play');
})
$('.bjts_zyx .box>div.fr .box').on('mouseleave', function () {
	$(this).children('.hidden').attr('class', 'hidden');
})

// 字数限制 第一个参数传入的为一个jquery对象， 第二个参数为要限制的字数
function LimitNumber(txt,num) {
	var str = txt.text();
	if( str.length <= num ){
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
	LimitNumber(boxT.eq(i),35);
}

// 背景提升项目的鼠标移入效果
$('.bjts .box .content>div.fr>.box:nth-child(2n)').css({'margin-right': '0'});
$('.bjts .box .content>div.fl').on('mouseenter', function () {
	$(this).children('.hidden_a').stop().fadeOut();
	$(this).children('.hidden_b').stop().fadeIn();
})
$('.bjts .box .content>div.fl').on('mouseleave', function () {
	$(this).children('.hidden_a').stop().fadeIn();
	$(this).children('.hidden_b').stop().fadeOut();
})

$('.bjts .box .content>div.fr>.box').on('mouseenter', function () {
	$(this).children('.hidden_a').stop().fadeOut();
	$(this).children('.hidden_b').stop().fadeIn();
})
$('.bjts .box .content>div.fr>.box').on('mouseleave', function () {
	$(this).children('.hidden_a').stop().fadeIn();
	$(this).children('.hidden_b').stop().fadeOut();
})

// 
$('.cgyl .box>a>div:nth-child(odd) span').css({
	'bottom': '0',
	'border-color': 'transparent transparent #DEDEDF transparent'
})
$('.cgyl .box>a>div:nth-child(even) span').css({
	'top': '0',
	'border-color': '#DEDEDF transparent transparent transparent'
})
// 
$('.fuwu_liucheng .box>div div.fl:last-child').css({'margin-right': '0'});