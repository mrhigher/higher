
var ww = document.body.clientWidth;

$(document).ready(function() {
	$(".catalogmenu li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
	
	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".catalogmenu").toggle();
	});
	adjustMenu();
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 768) {
		$(".toggleMenu").css("display", "inline-block");
		if (!$(".toggleMenu").hasClass("active")) {
			$(".catalogmenu").hide();
		} else {
			$(".catalogmenu").show();
		}
		$(".catalogmenu li").unbind('mouseenter mouseleave');
		$(".catalogmenu li a.parent").unbind('click').bind('click', function(e) {
			// Необходимоо привязать к элементу ссылки для предотвращения "всплывания"
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 768) {
		$(".toggleMenu").css("display", "none");
		$(".catalogmenu").show();
		$(".catalogmenu li").removeClass("hover");
		$(".catalogmenu li a").unbind('click');
		$(".catalogmenu li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// Необходимо привязать к элементу li для предотвращения запуска события mouseleave при перемещении курсора мыши над подменю
		 	$(this).toggleClass('hover');
		});
	}
}
