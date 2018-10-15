jQuery(document).ready(function(s){
//Masonry blocks
$blocks=s(".posts-wrapper"),$blocks.imagesLoaded(function(){$blocks.masonry({itemSelector:".post-article-container"}),
// Fade blocks in after images are ready (prevents jumping and re-rendering)
s(".post-article-containerr").fadeIn()}),s(document).ready(function(){setTimeout(function(){$blocks.masonry()},500)}),s(window).resize(function(){$blocks.masonry()}),
// Toggle search form
s(".search-toggle").on("click",function(){return s(this).toggleClass("active"),s(".header-search").slideToggle(),s(".header-search #s").focus(),!1});
/************Mobile Menu************/
var t=s(".mobile-menu-button"),o=s(".mobile-navigation");t.on("click",function(){s(this).toggleClass("menu-active"),o.toggleClass("menu-active"),o.slideToggle()});
// resize videos after container
var e=".post iframe, .post object, .post video, .widget-content iframe, .widget-content object, .widget-content iframe",i=function(t){s(t).each(function(){var t=s(this),o,e=t.parent().width();t.attr("data-origwidth")||(t.attr("data-origwidth",t.attr("width")),t.attr("data-origheight",t.attr("height")));var i=e/t.attr("data-origwidth");t.css("width",e+"px"),t.css("height",t.attr("data-origheight")*i+"px")})};i(e),s(window).resize(function(){i(e)}),
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
s(".slick-slider").each(function(t,o){var e="carousel-"+t;this.id=e,s(this).slick({arrows:!0,infinite:!0,slidesToShow:1,slidesToScroll:1,dots:!1,autoplay:!0,autoplaySpeed:2e4,speed:1e3,prevArrow:'<button class="slick-prev slick-arrow main-btn"></button>',nextArrow:'<button class="slick-next slick-arrow main-btn"></button>',responsive:[{breakpoint:980,settings:{slidesToShow:1,slidesToScroll:1,autoplay:!0,arrows:!0}},{breakpoint:740,settings:{slidesToShow:1,slidesToScroll:1,autoplay:!0,arrows:!0}},{breakpoint:320,settings:{slidesToShow:1,slidesToScroll:1,autoplay:!0,arrows:!0}}]})})});