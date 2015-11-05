//MainCtrl Function
function MainCtrl() {



}

//AngularJS For Our Site
var app = angular
			.module('app',['angular-loading-bar'])
			.controller('MainCtrl',MainCtrl);

//Load jQuery Here
$(document).ready(function() {
	

	//Tweak Hero Landing DIV
	var headerHeight = $('.site-header').outerHeight();
	var fullHeight = $(window).innerHeight() - headerHeight;
	var entryImage = $('.entry-image');

	$('.hero-vlad-wrapper').css({
		height: '100vh'
	});
	$('.section-test').css({
		height: fullHeight
	});
    $(entryImage).css({
        height: '30vh'
    });

	$('#vladRes').fitText(1.8);

	$('.hero-scs-owl').owlCarousel({
		loop:false,
		nav: false,
		dots: true,
		items: 4,
		margin: 50,
		navText: ['&#x27;next&#x27;','&#x27;prev&#x27;']
	});

	/*
	$('#heroVlad').hover(function() {
    $(document).bind('mousewheel DOMMouseScroll',function(){ 
        stopWheel(); 
    });
	}, function() {
    	$(document).unbind('mousewheel DOMMouseScroll');
	});
	*/

function stopWheel(e){
    if(!e){ /* IE7, IE8, Chrome, Safari */ 
        e = window.event; 
    }
    if(e.preventDefault) { /* Chrome, Safari, Firefox */ 
        e.preventDefault(); 
    } 
    e.returnValue = false; /* IE7, IE8 */
}

$('#no-hash').click(function(e) {
	e.preventDefault();
});

//Smooth Scroll -- Thanks to CSS-Tricks
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
	//Shadow
	var imgMine = $('#imgMine').outerHeight();
	var shadow = $('.shadow');
	var mineWidth = $('#imgMine').outerWidth();

	$(shadow).css({
		height : imgMine,
		width: mineWidth
	});


	//TweenLite GSAP
	var obj = $('.top-bar');

	$(obj).click(function(e) {
		var objTwo = $('#imgMine');
		var $this = $(this);
		var $chev = $('#chevArrow');
		var shadow = $('.shadow');
		var imgMine = $('#imgMine').outerHeight();

		if(!$this.hasClass('closed')) {
			TweenLite.to(objTwo,0.3,{height:0});
			TweenLite.to(shadow,0.3,{opacity:0});
			$this.addClass('closed');
			if(!$chev.hasClass('fa-chevron-down'))
			{
				$chev.removeClass('fa-chevron-up');
				$chev.addClass('fa-chevron-down');
			}

		} else {
			TweenLite.to(objTwo,0.3,{height:'auto'});
			TweenLite.to(shadow,0.3,{opacity:1});
			$this.removeClass('closed');
			$chev.removeClass('fa-chevron-down').addClass('fa-chevron-up');
		}
		e.preventDefault();
	});
});