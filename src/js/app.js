(function ($) {

	$('document').ready(function () {
		// Burger nav
		$('.menu-toggle').on('click', function () {
			$('header').toggleClass('header--menu-is-open');
		});
	});

	$(document).ready(function () {
		var dernierLi = document.querySelector('.menu li:last-of-type a');
		var texte = dernierLi.textContent;
		var texteModifie = "";
		
		for (var i = 0; i < texte.length; i++) {
		  texteModifie += texte[i];
		
		  if ((i + 1) % 2 === 0 && i !== texte.length - 1) {
			texteModifie += ".";
		  }
		}
	
		dernierLi.textContent = texteModifie;

		$(window).scroll(function () {
			if ($(document).scrollTop() < 700) {
				$('.back-top').addClass('hide');
			}
			else {
				$('.back-top').removeClass('hide');
			}
		});
	});
}(jQuery));