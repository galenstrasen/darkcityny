
(function($) {

  'use strict';

  var SiteApp = {



    // Initialize the functions
    init: function() {

      SiteApp.MobileDetect();
      SiteApp.Preloader();
      SiteApp.Slider();
      SiteApp.Lightbox();
      SiteApp.Waypoint();
      SiteApp.ScrollTo();
      SiteApp.Animated();
      SiteApp.NavHam();
      SiteApp.PermaPop();

    },


    // Mobile Device Detection
    MobileDetect: function() {

      var ismobile = (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));

      if(ismobile == true){
        $('body').addClass('mobile');
      } else {
        $('body').addClass('no-touch');
      }

    },



    // Page Loading Progress
    Preloader: function() {

      $(window).load(function() {
        setTimeout(function() {
          $('.js-sitewrap').animate({
            opacity: 1
          }, 300);
          $('#preloader').fadeOut(300, function() {
            SiteApp.Animated();
          });
        }, 300); // delay 300 ms
      });

    },


    // Slider
    Slider: function() {

      $(document).ready(function() {

        $('#about-slider').owlCarousel({
          items: 1,
          autoplay: true,
          animateOut: 'fadeOut',
          loop: true,
          smartSpeed: 300
        });

      });

    },

    Lightbox: function() {

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

    },

    Waypoint: function() {

      $('#page-wrap').waypoint(function() {
        $('body').toggleClass('scrolled');
      });

    },

    ScrollTo: function() {

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

    },

    NavHam: function() {

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

    },

    PermaPop: function() {

      /* @todo - definitely need to add cookie here */
      //$(window).load(function() {
        var permaPop = $('#js-perma-pop');
        if (permaPop.length) {
          permaPop.trigger('click');
          return false;
        }
      //});

    },





    // Animation Effects
    Animated: function() {

      var ismobile = (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));

      function animateRun() {
        $('.animation, .animation-visible').each(function() {

          var $element = $(this);

          $element.waypoint(function() {

            var delay = 0;

            if ($element.attr('data-delay')) delay = parseInt($element.attr('data-delay'), 0);
            if (!$element.hasClass('animated')) {
              setTimeout(function() {
                $element.addClass('animated ' + $element.attr('data-animation'));
              }, delay);
            }
            delay = 0;
          }, {
            offset: '100%'
          });

        });
      }
      function animateShow() {
        $('.animation, .animation-visible').each(function() {
          $(this).addClass('animated');
        });
      }

      if(ismobile != true){
        animateRun();
        //animate();
      }
    },



    // Show All Animated Items
    ShowAnimated: function() {

      $('.animation, .animation-visible').each(function() {
        $(this).addClass('animated');
      });

    }



  };



  // Run the Main Function
  $(function() {
    SiteApp.init();
  });



})(window.jQuery);