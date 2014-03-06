/*****************************
 * Main script
 *****************************/
(function($){
	$.fn.sliderLoader = function(){
		$('#hdv-slider-wrap').camera({
			height: '430',
			loader: 'bar',
			pagination: false,
			thumbnails: false,
			hover: true,
			opacityOnGrid: false,
			playPause : false,
			fx:'scrollLeft',
			transPeriod: 1000,
			imagePath: 'layouts/images/slider-images/'
		});
	};

	$(document).ready(function() {	
		/* enable header sticky */
		$("header.hdv-fixed .hdv-header").sticky({ topSpacing: 0 });
		if ($("#hdv-slider-wrap").exists()){
			$.fn.sliderLoader();
		}
	});

	$.fn.exists = function(){
		return $(this).length > 0;
	}
	$(function () {
		

		if ($('html').hasClass('csstransforms3d')) {	
		
			$('.thumb').removeClass('scroll').addClass('flip');		
			$('.thumb.flip').hover(
				function () {
					$(this).find('.thumb-wrapper').addClass('flipIt');
				},
				function () {
					$(this).find('.thumb-wrapper').removeClass('flipIt');			
				}
			);
			
		} else {

			$('.thumb').hover(
				function () {
					$(this).find('.thumb-detail').stop().animate({bottom:0}, 500, 'easeOutCubic');
				},
				function () {
					$(this).find('.thumb-detail').stop().animate({bottom: ($(this).height() * -1) }, 500, 'easeOutCubic');			
				}
			);

		}
	
	});
})(jQuery);