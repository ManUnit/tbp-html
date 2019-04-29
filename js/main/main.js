$(window).load(function() {

});

$(document).ready(function () {

	/* hamburger icon */
	$('#menu-toggle').click(function(){
		$(this).toggleClass('open');
		$('.menu-onMobile').toggleClass('active');
		$('.main-header .menu-wrapper').toggleClass('active');
		$('body').toggleClass('noScroll');
	});

	$('.popup-menu').click(function(){
		$(this).toggleClass('open');
		$('.menu-responsive').addClass('active');
		$('.popup-close').addClass('active');
		$('body').toggleClass('noScroll');
	});

	$('.popup-close').click(function(){
		$('.menu-responsive').removeClass('active');
		$('.popup-close').removeClass('active');
		$('body').toggleClass('noScroll');
	});


	/* refresh to top page */
	$(this).scrollTop(0);


	/* main banner slide */
	$('.main-banner .slider-control').slick({
		autoplay: true,
		dots: false,
		arrows: false,
		infinite: true,
		speed: 1200,
		autoplaySpeed: 3500,
		pauseOnHover: false,
		pauseOnFocus: false,
		// fade: true,
		// cssEase: 'ease'
	});

	/* animate header */
	setTimeout(function(){
		$('.main-header').addClass('active');
		$('.main-banner').addClass('active');
	}, 500);

	var $product_slide = $('.products-slide .slider-control');
	$product_slide.slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		centerPadding: 0,
		arrows: true,
		speed: 1200,
		slidesToScroll: 1,
		draggable: false
	});

	var $industries_slide = $('.industries-mobile .slider-control');
	$industries_slide.slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		centerPadding: 0,
		arrows: true,
		speed: 1200,
		slidesToScroll: 1,
		draggable: true
	});

	$('.nav-products .nav-control .nav-slide').click(function(e) {
		e.preventDefault();
		var slideno = $(this).data('slide');
		$product_slide.slick('slickGoTo', slideno - 1);
		$('.nav-slide').removeClass('active');
		$(this).addClass('active');
	});

	$('.bar-rating').barrating({
		theme: 'css-stars',
		showSelectedRating: false,
		readonly: true
	});

	/* select language */
	$('#options').flagStrap({
		countries: { "ENG": "EN", "TH": "TH" },
		buttonSize: "btn-sm",
		scrollable: false,
		placeholder: false
	});

	$('.counter').countUp();


	// $(".hasScroll").mCustomScrollbar({
	// 	scrollButtons: {
	// 		enable: false
	// 	},
	// 	theme: "dark-thick",
	// 	scrollbarPosition: "inside"
	// });

	// $(".xScroll").mCustomScrollbar({
	// 	axis:"x",
	// 	theme:"dark-thin",
	// 	autoExpandScrollbar:true,
	// 	advanced:{autoExpandHorizontalScroll:true}
	// });

	$('.scroll-event').viewportChecker({
		classToAdd: 'expand',
		offset: 200
	});

	jQuery(document).ready(function(){
		var accordionsMenu = $('.cd-accordion-menu');

		if( accordionsMenu.length > 0 ) {

			accordionsMenu.each(function(){
				var accordion = $(this);
				//detect change in the input[type="checkbox"] value
				accordion.on('change', 'input[type="checkbox"]', function(){
					var checkbox = $(this);
					console.log(checkbox.prop('checked'));
					( checkbox.prop('checked') ) ? checkbox.siblings('ul').attr('style', 'display:none;').slideDown(300) : checkbox.siblings('ul').attr('style', 'display:block;').slideUp(300);
				});
			});
		}
	});

	if ($(window).width() <= 767) {
	    $('.scroll-event').addClass('expand');
	}

	$('.tab-menu li').mouseenter(function () {
		var ct_id = $(this).attr('data-id');

		$('.tab-menu li a').removeClass('active');
		$(this).find('a').addClass('active');
		$('.tab-list').removeClass('active');
		$('.tab-list.tab-' + ct_id).addClass('active');
	});

	$('.link-menu li').mouseenter(function () {
		var lv1_id = $(this).attr('tab-id');
		var lv2_id = $(this).attr('data-id');

		$('.link-menu li a').removeClass('active');
		$(this).find('a').addClass('active');
		$('.link-detail').removeClass('active');
		$('.link-detail.tab-' + lv1_id + '-' + lv2_id).addClass('active');
		console.log(lv1_id + '-' + lv2_id);
	});
});





$(window).resize(function() {

});
