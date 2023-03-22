$(document).ready(function(){
	
	/* -- Main Slider -- */
	$('.main-slider').flickity({
        autoPlay: 3500,
		pauseAutoPlayOnHover: false,
        cellAlign: 'left',
		wrapAround: true,
		fade: true
	});
	/* -- ./Main Slider -- */
	

	/* -- Products Slider -- */
	$('.pro-slider').flickity({
        autoPlay: 3500,
		pauseAutoPlayOnHover: false,
		cellAlign: 'center',
		wrapAround: true,
		pageDots: false,
		fade: true
	});
	/* -- ./Products Slider -- */

	/* -- Open menu on mobile -- */
	$('.navbar-toggle').on('click',function(){
		$('.navbar-collapse').addClass('opened');
		$('.overlay-all').fadeIn(500);
	});
	$('.overlay-all').on('click',function(){
		$('.navbar-collapse').removeClass('opened');
		$(this).fadeOut(500);
		$('.search').removeClass('open')
	})

	$('.navbar-collapse .close').on('click',function(){
		$('.navbar-collapse').removeClass('opened');
		$('.overlay-all').fadeOut(500);
		$('.search').removeClass('open')
	})
	/* -- ./Open menu on mobile -- */

	/* -- Fixed Header -- */
	$(window).on('scroll',function(){
		if(window.pageYOffset > 400) {
			$('header').addClass('fixed');
			if(!$('header').hasClass('custom-header')) {
				$('html').css({
					'margin-top' : '74px'
				})
			}
		} else {
			$('header').removeClass('fixed');
			$('html').css({
				'margin-top' : '0'
			})
		}
	});
	/* -- ./Fixed Header -- */


	/* -- Footer Fixed Bottom -- */
	if($(window).innerHeight() > $('html').innerHeight()) {
		$('footer').addClass('fixed');
		var footer_height = $('footer').innerHeight();
		$('html').css({
			'padding-bottom': footer_height + 'px'
		})
	}
	/* -- ./Footer Fixed Bottom -- */

});