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
	
	
	
	// Smooth scroll to header
//	$('.back-top').click(function(){
//		$('html,body').animate({scrollTop: 0}, 500);
//		$(this).unbind("mouseenter mouseleave");
//	    return false;
//	});
	


});
