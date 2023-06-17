(function($){
	$(document).ready(function($) {
		$('.big_slider').slick({
			mobileFirst: true,
			dots: false,
			autoplay: true,
			autoplaySpeed: 6500,
			slidesToShow: 1,
			slidesToScrool: 1,
			dots: true,
			arrows: false
		});
	});
})(jQuery);