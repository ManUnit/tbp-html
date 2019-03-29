$(window).load(function() {

});

$(document).ready(function () {

	/* hamburger icon */
	// $('#menu-toggle').click(function(){
	// 	$(this).toggleClass('open');
	// 	$('.menu-onMobile').toggleClass('active');
	// 	$('.search-onMobile').toggleClass('active');
	// });


	/* refresh to top page */
	$(this).scrollTop(0);


	/* main banner slide */
	$('.main-banner .slider-control').slick({
		autoplay: true,
		dots: false,
		arrows: false,
		infinite: true,
		speed: 2500,
		autoplaySpeed: 3500,
		pauseOnHover: false,
		pauseOnFocus: false,
		fade: true,
		cssEase: 'ease'
	});

	var $product_slide = $('.products-slide .slider-control');
	$product_slide.slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		centerPadding: 0,
		arrows: false,
		speed: 1200,
		slidesToScroll: 1,
		draggable: false,
	});

	$('.nav-control .nav-slide').click(function(e) {
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
		countries: { "ENG": "ENGLISH", "TH": "THAI" },
		buttonSize: "btn-sm",
		scrollable: false,
		placeholder: false
	});

	$('.counter').countUp();


	/* select language on mobile */
	// $('#options_mobile').flagStrap({
	// 	countries: { "ENG": "ENGLISH", "TH": "THAI" },
	// 	buttonSize: "btn-sm",
	// 	scrollable: false,
	// 	placeholder: false
	// });



	/* Gmaps footer */
	// var icon_marker = {
	// 	url: 'images/icon/ico-pin.png',
	// 	size: new google.maps.Size(90, 90),
	// 	scaledSize: new google.maps.Size(90, 90),
	// 	anchor: new google.maps.Point(45,45)
	// }
	// maps_footer = new GMaps({
	// 	div: '#maps-footer',
	// 	lat: 13.605952,
	// 	lng: 100.706168
	// });
	// maps_footer.addMarker({
	// 	lat: 13.605952,
	// 	lng: 100.706168,
	// 	icon: icon_marker
	// });



	/* animate header */
	// setTimeout(function(){
	// 	$('.main-header').addClass('active');
	// 	$('.main-banner').addClass('active');
	// }, 500);



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
});



$(window).resize(function() {




});
