$(document).ready(function($) {
	"use strict";

	var window_width 	 = $(window).width(),
	window_height 		 = window.innerHeight,
	header_height 		 = $(".default-header").height(),
	header_height_static = $(".site-header.static").outerHeight(),
	fitscreen 			 = window_height - header_height;


	$(".fullscreen").css("height", window_height)
	$(".fitscreen").css("height", fitscreen);



   /* ----------------------------------------------------------- */
  /*  1. TOP SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */    

  $('.mu-top-slider').slick({
	dots: true,
	infinite: true,
	arrows: false,
	speed: 400,     
	autoplay: true,
	fade: true,
	
	cssEase: 'linear'
  });



























/*------------------------
INICIAMOS WOW
-------------------------*/
new WOW().init();

/*----------------------------------
Iniciamos smoothScroll (Scroll Suave)
--------------------------------*/
smoothScroll.init({
    speed: 1000, // Integer. How fast to complete the scroll in milliseconds
    offset: 70, // Integer. How far to offset the scrolling anchor location in pixels

});

/*---------------------------------
    OCULTAR Y MOSTRAR BOTON IR ARRIBA
 ----------------------------------*/
$(function () {
    $(window).scroll(function () {
        var scrolltop = $(this).scrollTop();
        if (scrolltop >= 50) {
            $(".ir-arriba").fadeIn();
        } else {
            $(".ir-arriba").fadeOut();
        }
    });

});

/*---------------------------------
   CABECERA ANIMADA
 ----------------------------------*/
$(window).scroll(function () {

    var nav = $('.encabezado');
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
        nav.addClass("fondo-menu");
    } else {
        nav.removeClass("fondo-menu");
    }
});


(function( $ ){
	/* ----------------------------------------------------------- */
	/*  2. MENU SMOOTH SCROLLING
	/* ----------------------------------------------------------- */

		//MENU SCROLLING WITH ACTIVE ITEM SELECTED

		// Cache selectors
		var lastId,
		topMenu = $(".menu"),
		topMenuHeight = topMenu.outerHeight()+13,
		// All list items
		menuItems = topMenu.find('a[href^=\\#]'),
		// Anchors corresponding to menu items
		scrollItems = menuItems.map(function(){
		  var item = $($(this).attr("href"));
		  if (item.length) { return item; }
		});

		// Bind click handler to menu items
		// so we can get a fancy scroll animation
		menuItems.click(function(e){
		  var href = $(this).attr("href"),
		      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+22;
		  jQuery('html, body').stop().animate({
		      scrollTop: offsetTop
		  }, 1500);
		  e.preventDefault();
		});

		// Bind to scroll
		jQuery(window).scroll(function(){
		   // Get container scroll position
		   var fromTop = $(this).scrollTop()+topMenuHeight;

		   // Get id of current scroll item
		   var cur = scrollItems.map(function(){
		     if ($(this).offset().top < fromTop)
		       return this;
		   });
		   // Get the id of the current element
		   cur = cur[cur.length-1];
		   var id = cur && cur.length ? cur[0].id : "";

		   if (lastId !== id) {
		       lastId = id;
		       // Set/remove active class
		       menuItems
		         .parent().removeClass("active")
		         .end().filter("[href=\\#"+id+"]").parent().addClass("active");
		   }
		});



	
	});











// 

// scroll
	var scrollWindow = function() {
		$(window).scroll(function(){
			var $w = $(this),
					st = $w.scrollTop(),
					navbar = $('.ftco_navbar'),
					sd = $('.js-scroll-wrap');

			if (st > 150) {
				if ( !navbar.hasClass('scrolled') ) {
					navbar.addClass('scrolled');
					navbar.append();
					$("#logo-change").hide()
					$("#link_logo").append("<img id='logo-negro' class='logo' src='assets/images/logo-simple.svg' alt='logo black'> ");
					
				
            			
				}
			} 
			if (st < 150) {
				if ( navbar.hasClass('scrolled') ) {
					navbar.removeClass('scrolled sleep');
					$("#logo-change").show();
					$("#logo-negro").remove();


				}
			} 
			if ( st > 350 ) {
				if ( !navbar.hasClass('awake') ) {
					navbar.addClass('awake');	
				}
				
				if(sd.length > 0) {
					sd.addClass('sleep');
				}
			}
			if ( st < 350 ) {
				if ( navbar.hasClass('awake') ) {
					navbar.removeClass('awake');
					navbar.addClass('sleep');
				}
				if(sd.length > 0) {
					sd.removeClass('sleep');
				}
			}
		});
	};
	scrollWindow();

// 


// navigation
var OnePageNav = function() {
	$(".smoothscroll[href^='#'], #menu-principal ul li a[href^='#']").on('click', function(e) {
		 e.preventDefault();

		 var hash = this.hash,
				 navToggler = $('.navbar-toggler');
		 $('html, body').animate({
		scrollTop: $(hash).offset().top
	  }, 700, 'easeInOutExpo', function(){
		window.location.hash = hash;
	  });


	  if ( navToggler.is(':visible') ) {
		  navToggler.click();
	  }
	});
	$('body').on('activate.bs.scrollspy', function () {
	  console.log('nice');
	})
};
OnePageNav();









});