"use strict";

jQuery(document).ready(function ($) {



	/************** LightBox *********************/
	$(function () {
		$('[data-rel="lightbox"]').lightbox();
	});


	$("a.menu-toggle-btn").click(function () {
		$(".responsive_menu").stop(true, true).slideToggle();
		return false;
	});

	$(".responsive_menu a").click(function () {
		$('.responsive_menu').hide();
	});

});