jQuery(document).ready(function($){
	$('.banner-slider-wrap').slick({
	  dots: false,
	  infinite: true,
	  speed: 500,
	  autoplay: true,
	  arrows: false
	});

    $('.slider-featured-wrap').slick({
      dots: false,
      infinite: true,
      speed: 500,
      autoplay: true,
      arrows: false
    });

	$('.trending-slider-carousel').slick({
      infinite: true,
      autoplaySpeed: 7000,
      arrows: false,
      slidesToShow: 4,
      slidesToScroll: 2,
      responsive: [
          {
            breakpoint: 990,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
              infinite: true,
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          }
      ]
    });

    $('.blog-post-wrapper').slick({
      infinite: true,
      autoplaySpeed: 7000,
      arrows: false,
      slidesToShow: 3,
      slidesToScroll: 2,
      responsive: [
          {
            breakpoint: 990,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
      ]
    });

	new CBPFWTabs( document.getElementById( 'tabs' ) );

	/**
         * Set timer countdown in seconds with callback
         */
        date = getRelativeDate(7, 9);
        document.getElementById('date2-str').innerHTML = date.toString();

        /**
         * Set theme and captions
         */
        $('#countdown-3').timeTo({
            timeTo: date,
            displayDays: 2,
            theme: "black",
            displayCaptions: true,
            fontSize: 48,
            captionSize: 14
        });

           $('#countdown-4').timeTo({
            timeTo: date,
            displayDays: 2,
            theme: "black",
            displayCaptions: true,
            fontSize: 48,
            captionSize: 14
        });

        /**
         * Simple digital clock
         */

        function getRelativeDate(days, hours, minutes){
            var date = new Date((new Date()).getTime() + 60000 /* milisec */ * 60 /* minutes */ * 24 /* hours */ * days /* days */);

            date.setHours(hours || 0);
            date.setMinutes(minutes || 0);
            date.setSeconds(0);

            return date;
        }
	var MqL = 1170;
	//move nav element position according to window width
	moveNavigation();
	$(window).on('resize', function(){
		(!window.requestAnimationFrame) ? setTimeout(moveNavigation, 300) : window.requestAnimationFrame(moveNavigation);
	});

	//mobile - open lateral menu clicking on the menu icon
	$('.nav-trigger').on('click', function(event){
		event.preventDefault();
		if( $('.main-content').hasClass('nav-is-visible') ) {
			closeNav();
			$('.overlay').removeClass('is-visible');
		} else {
			$(this).addClass('nav-is-visible');
			$('.primary-nav').addClass('nav-is-visible');
			$('.main-header').addClass('nav-is-visible');
			$('.main-content').addClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				$('body').addClass('overflow-hidden');
			});
			toggleSearch('close');
			$('.overlay').addClass('is-visible');
		}
	});

	//open search form
	$('.search-trigger').on('click', function(event){
		event.preventDefault();
		toggleSearch();
		closeNav();
	});

	//close lateral menu on mobile
	$('.overlay').on('swiperight', function(){
		if($('.primary-nav').hasClass('nav-is-visible')) {
			closeNav();
			$('.overlay').removeClass('is-visible');
		}
	});
	$('.nav-on-left .overlay').on('swipeleft', function(){
		if($('.primary-nav').hasClass('nav-is-visible')) {
			closeNav();
			$('.overlay').removeClass('is-visible');
		}
	});
	$('.overlay').on('click', function(){
		closeNav();
		toggleSearch('close')
		$('.overlay').removeClass('is-visible');
	});


	//prevent default clicking on direct children of .primary-nav
	$('.primary-nav').children('.has-children').children('a').on('click', function(event){
		event.preventDefault();
	});
	//open submenu
	$('.has-children').children('a').on('click', function(event){
		if( !checkWindowWidth() ) event.preventDefault();
		var selected = $(this);
		if( selected.next('ul').hasClass('is-hidden') ) {
			//desktop version only
			selected.addClass('selected').next('ul').removeClass('is-hidden').end().parent('.has-children').parent('ul').addClass('moves-out');
			selected.parent('.has-children').siblings('.has-children').children('ul').addClass('is-hidden').end().children('a').removeClass('selected');
			$('.overlay').addClass('is-visible');
		} else {
			selected.removeClass('selected').next('ul').addClass('is-hidden').end().parent('.has-children').parent('ul').removeClass('moves-out');
			$('.overlay').removeClass('is-visible');
		}
		toggleSearch('close');
	});

	//submenu items - go back link
	$('.go-back').on('click', function(){
		$(this).parent('ul').addClass('is-hidden').parent('.has-children').parent('ul').removeClass('moves-out');
	});

	function closeNav() {
		$('.nav-trigger').removeClass('nav-is-visible');
		$('.main-header').removeClass('nav-is-visible');
		$('.primary-nav').removeClass('nav-is-visible');
		$('.has-children ul').addClass('is-hidden');
		$('.has-children a').removeClass('selected');
		$('.moves-out').removeClass('moves-out');
		$('.main-content').removeClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
			$('body').removeClass('overflow-hidden');
		});
	}

	function toggleSearch(type) {
		if(type=="close") {
			//close serach
			$('.search').removeClass('is-visible');
			$('.search-trigger').removeClass('search-is-visible');
			$('.overlay').removeClass('search-is-visible');
		} else {
			//toggle search visibility
			$('.search').toggleClass('is-visible');
			$('.search-trigger').toggleClass('search-is-visible');
			$('.overlay').toggleClass('search-is-visible');
			if($(window).width() > MqL && $('.search').hasClass('is-visible')) $('.search').find('input[type="search"]').focus();
			($('.search').hasClass('is-visible')) ? $('.overlay').addClass('is-visible') : $('.overlay').removeClass('is-visible') ;
		}
	}

	function checkWindowWidth() {
		//check window width (scrollbar included)
		var e = window,
            a = 'inner';
        if (!('innerWidth' in window )) {
            a = 'client';
            e = document.documentElement || document.body;
        }
        if ( e[ a+'Width' ] >= MqL ) {
			return true;
		} else {
			return false;
		}
	}

	function moveNavigation(){
		var navigation = $('.nav');
  		var desktop = checkWindowWidth();
        if ( desktop ) {
			navigation.detach();
			navigation.insertBefore('.header-buttons');
		} else {
			navigation.detach();
			navigation.insertAfter('.main-content');
		}
	}
});
