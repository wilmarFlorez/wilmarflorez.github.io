// JavaScript Document
$(document).ready(function(){
	'use strict';
//	funcion cabecera fija
	var altura = $('.cabecera').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.cabecera').addClass('cabeceraFixed');
		} else {
			$('.cabecera').removeClass('cabeceraFixed');
			
		}
	});
 
//	funcion bonton irArriba
	$('.irArriba').click(function(){
		$('body, html').animate({
			scrollTop:'0'
		},500);
	});
	
// funcion menú responsive
	$('.lanzarMenu').on('click',function(){
		$(this).next().slideToggle();
	});
	
	 $(window).resize(function(){
    		var w = $(window).width();
    		if(w > 768 && $('.navegacionPrincipal').is(':hidden')) {
    			$('.navegacionPrincipal').removeAttr('style');
    		}
  	});

//funcion icono menu responsive
	$('.lanzarMenu').on('click', function(){
  $(this).toggleClass('active');
});
	
	
});