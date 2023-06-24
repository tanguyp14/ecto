(function ($) {

	$('document').ready(function () {
		// Burger nav
		$('.menu-toggle').on('click', function () {
			$('header').toggleClass('header--menu-is-open');
		});
	});

	$(window).scroll(function () {
		if ($(document).scrollTop() < 700) {
			$('.back-top').addClass('hide');
		}
		else {
			$('.back-top').removeClass('hide');
		}
	});

}(jQuery));