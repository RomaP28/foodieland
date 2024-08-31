(function($){
	
	var space = 40 / 1440 * innerWidth;
	
	new Swiper('.hero .swiper', {
		loop: true,
		autoplay: true,
		slidesPerView: 1.12,
		delay: 10,
		speed: 1500,
		disableOnInteraction: false,
		centeredSlides: true,
		spaceBetween: space,
	})
	
	$(window).scroll(function() {
		var $height = $(window).scrollTop();
		if($height > 50) {
			$('header').addClass('active');
		} else {
			$('header').removeClass('active');
		}
	});
	
	$('.add-to-favorite').on('click', function() {
		$(this).toggleClass('favorite')
	})
	
	
})(jQuery);
