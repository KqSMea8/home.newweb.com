	$('.content_c p').removeAttr('style');
	$('.content_c img').removeAttr('style');
	$('.content_c video').removeAttr('style');
	$('.content_c span').removeAttr('style');
	
	$('#top').click(function () {
		$('html,body').animate({scrollTop: '0'}, 1000);
	})
	
	// 
	$('.tuijianB .box:last-child').css({'margin-bottom': '0'});
	
	// 
	// 字数限制 第一个参数传入的为一个jquery对象， 第二个参数为要限制的字数
	function LimitNumber(txt,num) {
		var str = txt.text();
		if( str.length<=num ){
			return;
		}
		str = str.substr(0,num) + '...' ;
		txt.text(str);
	}
	// 背景提升项目的字数限制调用
	var text = $('.tuijianB .box>div.fr p');
	for(var i=0; i<text.length; i++){
		LimitNumber(text.eq(i),80);
	}
	
	
	$('.huodong_jz .box:last-child').css({'margin-bottom': '0'});
	$('.bjts_tuijian .box:last-child').css({'margin-bottom': '0'});
	