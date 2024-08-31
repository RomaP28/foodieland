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
	
	
	
})(jQuery);
