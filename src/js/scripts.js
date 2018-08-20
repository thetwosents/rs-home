(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away

    $('.vertical-carousel .slider').slick({
      slidesToShow: 7,
      slidesToScroll: 1,
      autoplay: true,
      speed: 600,
      autoplaySpeed: 2200,
    });
	});

} ( this, jQuery ));