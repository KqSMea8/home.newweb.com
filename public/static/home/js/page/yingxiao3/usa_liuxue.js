$(function() {
	$(".header_bor_z").hover(function(e) {
		$(this).addClass("open"), $(".header_bor_zu").show(), $(".header_bor_z .zi").css("color", "#d93c32")
	}, function(e) {
		$(this).removeClass("open"), $(".header_bor_zu").hide(), $(".header_bor_z .zi").css("color", "rgb(102, 102, 102)")
	})
}), jQuery(".lx-nav .lx-navBD").slide({
	type: "menu",
	titCell: ".nav-item",
	targetCell: ".nav-bd",
	delayTime: 0,
	triggerTime: 0,
	defaultPlay: !1,
	returnDefault: !0
}), jQuery(".g_wrap3").slide({
	titCell: ".ban-hd",
	mainCell: ".ban-bd ul",
	effect: "fold",
	autoPlay: !0,
	autoPage: !0,
	interTime: 3e3
});
