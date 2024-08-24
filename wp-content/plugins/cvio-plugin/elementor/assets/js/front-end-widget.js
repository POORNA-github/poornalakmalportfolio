(function ($) {
	"use strict";

	/* Init Elementor Front Scripts */
	$(window).on('elementor/frontend/init', function () {

		/*
			Set full height in blocks
		*/
		var width = $(window).width();
		var height = $(window).height();

		// Global
		elementorFrontend.hooks.addAction( 'frontend/element_ready/global', function( $scope ) {

			/*
				Jarallax
			*/
			if($('.jarallax').length){
				$('.jarallax').jarallax();
			}

			/*
				Background enabled
			*/
			if($('.jarallax-video').length) {
				$('body').addClass('background-enabled');
				$('.jarallax-video').jarallax();
			}

			/*
				Started Slider
			*/
			if($('.started-carousel').length){
				var slider_container = $('.started-carousel .swiper-container');
				var is_autoplaytime = slider_container.data('autoplaytime');
				var is_loop = slider_container.data('loop');
				var started_slider = new Swiper ('.started-carousel .swiper-container', {
					init: false,
					loop: is_loop,
					spaceBetween: 0,
					effect: 'fade',
					slidesPerView: 1,
					simulateTouch: false,
					autoplay: {
						delay: is_autoplaytime,
						disableOnInteraction: false,
						waitForTransition: false,
					},
					navigation: {
						nextEl: '.started .swiper-button-next',
						prevEl: '.started .swiper-button-prev',
					},
				});
				started_slider.on('slideChange', function () {
					var index = started_slider.realIndex;
					var total = started_slider.slides.length;

					$('.started-carousel .swiper-slide').removeClass('first');
					$('.started-carousel .swiper-slide').each(function(i, slide){
						if((index-1)>=i) {
							$(slide).addClass('swiper-clip-active');
						} else {
							$(slide).removeClass('swiper-clip-active');
						}
					});
					$('.started-carousel .swiper-slide').each(function(i, slide){
						$(slide).css({'z-index': total - i});
					});
				});
				started_slider.init();
			}

		} );

		elementorFrontend.hooks.addAction( 'frontend/element_ready/widget', function( $scope ) {
		} );

	});
})(jQuery);
