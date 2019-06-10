// JavaScript Document

// Inicializacion pagepiling
$(document).ready(function() {
	"use strict";
	
	$('#pagepiling').pagepiling({
	    		menu: '#menu',
	    		anchors: ['page1', 'page2', 'page3','page4'],
	    		navigation: {
		            'textColor': '#B31C1F',					
		            'bulletsColor': '#B31C1F',
		            'position': 'right',
		            'tooltips': ['Page 1', 'Page 2', 'Page 3', 'Page 4']
		        }
			});		
});

