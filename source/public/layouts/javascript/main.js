/*******************************************************************************
 * Main script
 ******************************************************************************/
(function($) {
	$.fn.sliderLoader = function() {
		$('#hdv-slider-wrap').camera({
			height : '430',
			loader : 'bar',
			pagination : false,
			thumbnails : false,
			hover : true,
			opacityOnGrid : false,
			playPause : false,
			fx : 'scrollLeft',
			transPeriod : 1000,
			imagePath : 'layouts/images/slider-images/'
		});
	};

	$.fn.exists = function() {
		return $(this).length > 0;
	};

	$.fn.searchForm = function() {

		var input = $('input#s');
		var divInput = $('div.input');
		var width = divInput.width();
		var outerWidth = divInput.parent().width() - (divInput.outerWidth() - width) - 28;
		var submit = $('#searchSubmit');
		var txt = input.val();

		input.bind('focus', function() {
			if (input.val() === txt) {
				input.val('');
			}
			$(this).animate({
				color : '#000'
			}, 300);
			$(this).parent().animate({
				width : outerWidth + 'px',
				backgroundColor : '#fff',
			}, 300, function() {
				if (!(input.val() === '' || input.val() === txt)) {
					if (!($.browser.msie && $.browser.version < 9)) {
						submit.fadeIn(300);
					} else {
						submit.css({
							display : 'block'
						});
					}
				}
			}).addClass('focus');
		}).bind('blur', function() {
			$(this).animate({
				color : '#b4bdc4'
			}, 300); // text color
			$(this).parent().animate({
				width : width + 'px',
				backgroundColor : '#e8edf1',
				paddingRight : '15px'
			}, 300, function() {
				if (input.val() === '') {
					input.val(txt);
				}
			}).removeClass('focus');
			if (!($.browser.msie && $.browser.version < 9)) {
				submit.fadeOut(100);
			} else {
				submit.css({
					display : 'none'
				});
			}
		}).keyup(function() {
			if (input.val() === '') {
				if (!($.browser.msie && $.browser.version < 9)) {
					submit.fadeOut(300);
				} else {
					submit.css({
						display : 'none'
					});
				}
			} else {
				if (!($.browser.msie && $.browser.version < 9)) {
					submit.fadeIn(300);
				} else {
					submit.css({
						display : 'block'
					});
				}
			}
		});
	};

	$.fn.categoryFlip = function() {
		if ($('html').hasClass('csstransforms3d')) {
			$('.thumb').removeClass('scroll').addClass('flip');
			$('.thumb.flip').hover(function() {
				$(this).find('.thumb-wrapper').addClass('flipIt');
			}, function() {
				$(this).find('.thumb-wrapper').removeClass('flipIt');
			});
		} else {
			$('.thumb').hover(function() {
				$(this).find('.thumb-detail').stop().animate({
					bottom : 0
				}, 500, 'easeOutCubic');
			}, function() {
				$(this).find('.thumb-detail').stop().animate({
					bottom : ($(this).height() * -1)
				}, 500, 'easeOutCubic');
			});
		}
	};
	
	$.fn.getIMDb = function(){
		$('.fhd-button').on('click', function(){
			var url = $('#imdb-id').val();
			if(url == ''){
				return;
			}

			$('.imdbInfo .info').hide();
			$('.imdbInfo .imdb-loading').show();
			
			$.ajax({
				url : "http://phphost:69/getIMDb/"+url.substring(url.lastIndexOf("/") + 1),
				type : "GET",
				dataType : "json",
				success: function(data, textStatus, xhr) {
					var info = data.imdb;
					if(info.title){
						$('#imdb-thumb').attr('src', info.thumb);
						$('#imdb-title').val(info.title);
						$('#imdb-year').val(info.year);
						
						$('#imdb-actor').val(info.actor.join(';'));
	
						$('#imdb-category').val(info.category.join(';'));
	
						$('#imdb-director').val(info.director);
						$('#imdb-duration').val(info.duration);
						$('#imdb-rate').val(info.rate);
						$('#imdb-description').val(info.description);
						
						$('.imdbInfo .info').show();
					}
                },
                error: function(xhr, textStatus, errorThrown) {
                	console.log('Error');
                },
                complete: function(data) {
                	$('.imdbInfo .imdb-loading').hide();
                }
				
			});
		});
	};
	
	$(document).ready(function() {
		/* enable header sticky */
		$("header.hdv-fixed .hdv-header").sticky({
			topSpacing : 0
		});
		if ($("#hdv-slider-wrap").exists()) {
			$.fn.sliderLoader();
		}
		$.fn.searchForm();
		$.fn.categoryFlip();
		$.fn.getIMDb();
	});
})(jQuery);