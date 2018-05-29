jQuery(document).ready(function($) {

		
		//Masonry blocks
		$blocks = $(".posts-wrapper");
	
		$blocks.imagesLoaded(function(){
			$blocks.masonry({
				itemSelector: '.post-article-container'
			});
	
			// Fade blocks in after images are ready (prevents jumping and re-rendering)
			$(".post-article-containerr").fadeIn();
		});
		
		$(document).ready( function() { setTimeout( function() { $blocks.masonry(); }, 500); });
	
		$(window).resize(function () {
			$blocks.masonry();
		});	
		
		
		// Toggle search form
		$(".search-toggle").on("click", function(){	
			$(this).toggleClass("active");
			$(".header-search").slideToggle();
			$(".header-search #s").focus();
			return false;
		});
		
		
		
	 /************Mobile Menu************/

	 	var menuButton = $('.mobile-menu-button');
	 	var globalNav = $('.mobile-navigation');


		menuButton.on("click", function(){	
			$(this).toggleClass("menu-active");
			globalNav.toggleClass("menu-active");
			globalNav.slideToggle();
		});
	
	
	
	
	
	
	// resize videos after container
		var vidSelector = ".post iframe, .post object, .post video, .widget-content iframe, .widget-content object, .widget-content iframe";	
		var resizeVideo = function(sSel) {
			$( sSel ).each(function() {
				var $video = $(this),
					$container = $video.parent(),
					iTargetWidth = $container.width();
	
				if ( !$video.attr("data-origwidth") ) {
					$video.attr("data-origwidth", $video.attr("width"));
					$video.attr("data-origheight", $video.attr("height"));
				}
	
				var ratio = iTargetWidth / $video.attr("data-origwidth");
	
				$video.css("width", iTargetWidth + "px");
				$video.css("height", ( $video.attr("data-origheight") * ratio ) + "px");
			});
		};
	
		resizeVideo(vidSelector);
	
		$(window).resize(function() {
			resizeVideo(vidSelector);
		});
	
	
//	$('.slick-slider').each(function (idx, item) {
//	   var carouselId = "carousel" + idx;
//	   this.id = carouselId;
//	   $(this).slick({
//	       arrows: true,
//	       infinite: true,
//	       speed: 300,
//	       slidesToShow: 1,
//	       slidesToScroll: 1,
//	       dots: false,
//	       autoplay: true,
//	       autoplaySpeed: 10000,
//	       speed: 1000,
//		   appendArrows: "#" + carouselId + " .prev_next",
//		          prevArrow: '<button>Previous</button>',
//		          nextArrow: '<button>Next</button>'
//	   });
//	});
//	
$('.slick-slider').each(function (idx, item) {
    var carouselId = "carousel-" + idx;
    this.id = carouselId;
    $(this).slick({
		arrows: true,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		autoplay: true,
		autoplaySpeed: 20000,
		speed: 1000,
		 prevArrow: '<button class="slick-prev slick-arrow main-btn"></button>',
		 nextArrow: '<button class="slick-next slick-arrow main-btn"></button>',
		 responsive: [
		     {
		       breakpoint: 980,
		       settings: {
		         slidesToShow: 1,
		         slidesToScroll: 1
		       }
		     },
		     {
		       breakpoint: 740,
		       settings: {
		         slidesToShow: 1,
		         slidesToScroll: 1
		       }
		     },
		     {
		       breakpoint: 320,
		       settings: {
		         slidesToShow: 1,
		         slidesToScroll: 1
		       }
		     }
		     // You can unslick at a given breakpoint now by adding:
		     // settings: "unslick"
		     // instead of a settings object
		   ]
    });
});


	
	// Smooth scroll to header
//	$('.back-top').click(function(){
//		$('html,body').animate({scrollTop: 0}, 500);
//		$(this).unbind("mouseenter mouseleave");
//	    return false;
//	});
	


});
