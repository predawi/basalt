/**
 * Sliders and carousels scripts
 */

// Dependencies
var $ = require('jquery');
var slick = require('../vendor/slick');


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

var allVideos = $('.home-slider__item video');
$('#home-slider').on('afterChange', function(event, slick, currentSlide){
	$.each(allVideos, function( index, value ) {
		value.pause();
	});

	var currentVideo = $('.home-slider__item[data-slick-index='+currentSlide+']').find('video').get(0);
	currentVideo.play();
});

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