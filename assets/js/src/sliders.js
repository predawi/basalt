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

$('#home-slider__nav').slick({
	arrows: false,
	initialSlide: 1,
	slidesToShow: 1,
	slidesToScroll: 1,
	dots: false,
	vertical: true,
	centerMode: true,
	infinite: true,
	asNavFor: '#home-slider',
});