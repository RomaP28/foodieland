(function($){
	
	setTimeout(function(){
		$('#preloader').fadeOut('slow');
	}, 1200);

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
	
	if(window.matchMedia('(max-width: 768px)').matches) {
		new Swiper('.categories .swiper', {
			loop: true,
			autoplay: true,
			slidesPerView: 3,
		})
		
		new Swiper('.recipes .swiper', {
			autoplay: {
				enabled: true,
				delay: 0,
			},
			loop: true,
			speed: 12000,
			slidesPerView: 1,
			spaceBetween: space,
		})
		
		new Swiper('.day-recipes .swiper', {
			autoplay: true,
			loop: true,
			slidesPerView: 1.3,
			spaceBetween: space,
		})
	}
	
	$('.menu-header-menu-container').slideUp();
	
	$('.burger-menu').on('click', function () {
		$('.menu-header-menu-container').slideToggle();
		$('header').toggleClass('open');
	})
	
	$('.menu li').on('click', function () {
		$('.menu-header-menu-container').slideUp();
		$('header').removeClass('open');
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
