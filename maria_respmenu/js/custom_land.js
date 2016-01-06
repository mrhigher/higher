$('document').ready(function() {




	$(document).mouseup(function (e)
	{
		var container = $(".nav_menu");

		if (!container.is(e.target) // if the target of the click isn't the container...
			&& container.has(e.target).length === 0) // ... nor a descendant of the container
		{
			$('.flexnav').removeClass('flexnav-show');

		}
	});

	$(document).keydown(function(e) {
		// ESCAPE key pressed
		if (e.keyCode == 27) {
			$('.flexnav').removeClass('flexnav-show');
		}
	});

	$('.phone_mask').mask('+7 (000) 000-00-00');







});
