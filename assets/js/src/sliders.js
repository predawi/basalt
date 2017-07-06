/**
 * Sliders and carousels scripts
 */

// Dependencies
var $ 				= require('jquery');
var slick 		= require('../vendor/slick');
var waypoint 	= require('../vendor/waypoint');

// If matchmedia desktop only : inject videos
if( matchMedia('only screen and (min-width: 768px)').matches ) {
	var video01 = '<video width="600" height="500" loop><source src="assets/videos/roche1.mp4" type="video/mp4">Your browser does not support the video tag.</video>';
	var video02 = '<video width="600" height="500" loop><source src="assets/videos/roche2.mp4" type="video/mp4">Your browser does not support the video tag.</video>';
	var video03 = '<video width="600" height="500" loop><source src="assets/videos/roche3.mp4" type="video/mp4">Your browser does not support the video tag.</video>';

	jQuery('.home-slider__item:nth-child(1)').append(video01);
	jQuery('.home-slider__item:nth-child(2)').append(video03);
	jQuery('.home-slider__item:nth-child(3)').append(video02);

	// Inite first video
	$('#home-slider').on('init', function() {
		$('.slick-current video').get(0).play();
	});
}

$('#home-slider').slick({
	arrows: false,
	draggable: true,
	centerMode: true,
	centerPadding: '0',
	slidesToShow: 1,
	initialSlide: 1,
	slide: '.home-slider__item',
	asNavFor: '#home-slider__nav',
});

// If matchmedia desktop only : bind video play on slider change
if( matchMedia('only screen and (min-width: 768px)').matches ) {
	var allVideos = $('.home-slider__item video');
	$('#home-slider').on('afterChange', function(event, slick, currentSlide){
		$.each(allVideos, function( index, value ) {
			value.pause();
		});

		var currentVideo = $('.home-slider__item[data-slick-index='+currentSlide+']').find('video').get(0);
		currentVideo.play();
	});
}


$('#home-slider__nav').slick({
	initialSlide: 1,
	slidesToShow: 1,
	slidesToScroll: 1,
	dots: false,
	vertical: true,
	centerMode: true,
	infinite: true,
	asNavFor: '#home-slider',
});

// Show section
$('.home-slider__nav').on('click','.slick-current', function(e){
	var section = $(this).attr('data-section');
	loadSection(section);
	e.preventDefault();
});
$('body').on('click', '.home-slider__nav__wrapper .section-access:not(.active)', function(e){
	var section = $('.home-slider__nav').find('.slick-current').attr('data-section');
	loadSection(section);
	e.preventDefault();
});

// Hide section
$('body').on('click','.home-slider__nav__wrapper.magnet .section-access, .base-section.loaded .section-access, .logo__link', function(e){
	unloadSection();
	e.preventDefault();
});


function loadSection(section) {

	$('.home-slider__nav__wrapper .section-access').addClass('active');

	$('.home-slider__wrapper').fadeOut(300);
	$('.home-slider__nav .home-slider__nav__item:not(.slick-current)').addClass('invisible');
	$('.home-slider__nav__wrapper').addClass('topped');
	setTimeout(function(){
		$('.home-slider__nav__wrapper').addClass('magnet');
		if( $('#'+section).attr('data-theme') ) {
			var theme = $('#'+section).attr('data-theme');
			$('body').addClass('white');
		}
	}, 500);

	setTimeout(function(){
		$('#'+section).addClass('visible');
		if( section !== 'contact' ) {
			$('#rocks').fadeIn('1000');
		}
	}, 500);
	setTimeout(function(){
		$('#'+section).addClass('loaded');

		addWaypointsImg(section);
	}, 800);
}


function unloadSection() {
	$('.home-slider__nav__wrapper .section-access').removeClass('active');
	$('body').removeClass('white');
	$('.base-section.visible').removeClass('visible loaded');
	$('#rocks').fadeOut('300');
	setTimeout(function(){
		$('.home-slider__nav__wrapper').removeClass('magnet');
	}, 300);
	setTimeout(function(){
		$('.home-slider__nav__wrapper').removeClass('topped');
	}, 500);
	setTimeout(function(){
		$('.home-slider__nav .home-slider__nav__item:not(.slick-current)').removeClass('invisible');
		$('.home-slider__wrapper').fadeIn(300);
	}, 800);
}


function addWaypointsImg(section) {

	$('#'+section+' img').each(function( index ) {

		$el = $(this);

		// Attach waypoint to circles
		waypoint[index] = new Waypoint({
			element: $el,
			handler: function() {
				this.element.addClass('montu');
				this.destroy();
			},
			offset: '50%'
		});

	});
}


