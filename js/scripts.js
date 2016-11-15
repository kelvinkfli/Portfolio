function addOnScroll() {
	//this is an event handler for the window object
	$(window).scroll(function(){
		//EVERYTHING in here runs as soon as a scroll is detected

		// 1. this variable stores the distance from the top of the window
		var scrollDistance = $(window).scrollTop();

		// 2. this variable stores the height of a certain document
		var divHeight = $('.hero-section').height();

		// 3. this variable stores the height of the nav bar
		var navHeight = $('.hero-nav').outerHeight();
		// 3. When the scroll distance is greater than the document - navbar...
		if (scrollDistance > divHeight - navHeight) {
			// 4. DO STUFF!
			$('.hero-nav').addClass('hero-nav-fixed');
		} else {
			$('.hero-nav').removeClass('hero-nav-fixed');
		}
	})
}

function smoothScroll() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
}

function displayMenu(){
	$('.hero-nav-hamburger li').on('click', function(){
		$('.menu-overlay').toggleClass('menu-overlay-fix');
		$('.blur').toggleClass('blur-fix');
		$('#menu-toggle').toggleClass('toggled');
	})
	$('.menu-list li a').on('click', function(){
		$('.menu-overlay').toggleClass('menu-overlay-fix');
		$('.blur').toggleClass('blur-fix');
		$('#menu-toggle').removeClass('toggled');
	})
}

function menuHover(){
	$('.menu-list').on('mouseover', '> li', function(){
		$(this).css('color', 'rgb(117, 249, 238)')
	}).on('mouseout', '> li', function(){
		$(this).css('color', 'white');
	})
}


$(function(){
	addOnScroll();
	smoothScroll();
	displayMenu();
	menuHover();

	var bg = jQuery("body");
	jQuery(window).resize("resizeBackground");
	function resizeBackground() {
	    bg.height(jQuery(window).height());
	}
	resizeBackground();

});
