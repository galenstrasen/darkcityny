/* ON DOM READY
====================================*/



jQuery(document).ready(function($) {

	//RANDOM SLIDESHOW
	$('#about-slider').owlCarousel({
		items: 1,
		autoplay: true,
		animateOut: 'fadeOut',
		loop: true,
		smartSpeed: 300
	});


	$('.popup-video').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: true,
    fixedBgPos: true
	});

	$('#photo-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		}
	});

});
//END DOC.READY



(function($){


  $('#page-wrap').waypoint(function() {
    	$('body').toggleClass('scrolled');
  });

  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        || location.hostname == this.hostname) {

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

  $('.ham-wrap').click(function(){
    $(this).toggleClass('ham-wrap-open');
    $('.menu-main-menu-wrapper').toggleClass('is-open');
    if($('.ham-wrap').hasClass('ham-wrap-open')){
      $('#menu-main-menu a').on('click',function(){
        $('.menu-main-menu-wrapper').removeClass('is-open');
        $('.ham-wrap').removeClass('ham-wrap-open');
      });
    }
  });

  /* @todo - definitely need to add cookie here */
  $(window).load(function() {
    var permaPop = $('#js-perma-pop');
    if (permaPop.length) {
      permaPop.trigger('click');
      return false;
    }
  });

})(jQuery);




