
	$('.conFlNav>div').eq(0).children('a').addClass('active');
	if(t>=100){
		$('.topNav').css({'position': 'static'});
		$('.abcBannav').css({'display': 'none'});
	}
	// 获取需要浮动元素的offsettop
	var conFlNavScrollTop = $('.conFlNav').offset().top;
	// 
	var offsetLength = $('.conFlContent>div').length;
	// 
	window.onscroll = function () {
		var top = document.documentElement.scrollTop || document.body.scrollTop;
		// 当页面滚动到一定地步 元素浮动，滚出则取消浮动
		if( top >= conFlNavScrollTop ){
			$('.conFlNav').css({'position': 'fixed', 'top': '0', 'width': '852px'});
			$('.conContent .conFr').css({'position': 'fixed', 'top': '0'});
			$('.conFlContent').css({'margin-top': '63px'});
		}else{
			$('.conFlNav').css({'position': 'static', 'top': '','left': ''});
			$('.conContent .conFr').css({'position': 'static', 'top': ''});
			$('.conFlContent').css({'margin-top': '0'});
		}

		var Hh2 = parseInt($('.conFlContent').css('height')) - parseInt($('.conFr').css('height')) + $('.conFlContent').offset().top;
    	if( top == Hh2 || top>Hh2 ){
    		$('.conFr').css({
    			'position': 'absolute',
    			'top': parseInt($('.conFlContent').css('height')) - parseInt($('.conFr').css('height')) + $('.conFlNav').height() + 'px'
    		})
    		// $('.conFlNav').css({'position': 'absolute'});
    	}
		
		for( var i=0; i<offsetLength; i++ ){
			if( top >= $('.conFlContent>div').eq(i).offset().top - 200){
				$('.conFlNav>div').children('a').removeClass('active');
				$('.conFlNav>div').eq(i).children('a').addClass('active');
			}
		}
	}
	// 
	$('.conFlNav>div a').click(function () {
		var index = $('.conFlNav>div a').index($(this));
		var offsetTop = $('.conFlContent>div').eq(index).offset().top;
		$('html, body').stop().animate({scrollTop: offsetTop - 50});
	})
	
