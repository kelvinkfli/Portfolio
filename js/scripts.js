function addOnScroll() {
	//this is an event handler for the window object
	$(window).scroll(function(){
		//EVERYTHING in here runs as soon as a scroll is detected

		// 1. this variable stores the distance from the top of the window
		var scrollDistance = $(window).scrollTop();

		// 2. this variable stores the height of a certain document
		var divHeight = $('.hero-section').height();

		// 3. this variable stores the height of the nav bar
		var navHeight = $('.hero-nav').height();
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


$(function(){
	addOnScroll();
	smoothScroll();
	var clipboard = new Clipboard('.copy-button');
	// clipboard.on('success', function(e) {
	// 	//do stuff
	// });
});

// function addOnScroll() {
// 	//this is an event handler for the window object
// 	$(window).scroll(function(){
// 		//EVERYTHING in here runs as soon as a scroll is detected
//
// 		// 1. this variable stores the distance from the top of the window
// 		var scrollDistance = $(window).scrollTop();
//
// 		// 2. this variable stores the height of a certain document
// 		var divHeight = $('the-100vh-thing?').height();
//
// 		// 3. this variable stores the height of the nav bar
// 		var navHeight = $('nav-class').height();
// 		// 3. When the scroll distance is greater than the document - navbar...
// 		if (scrollDistance > divHeight - navHeight) {
// 			// 4. DO STUFF!
// 			$('.nav-class').addClass('class-to-add');
// 		} else {
// 			$('.nav-class').removeClass('class-to-add');
// 		}
// 	})
// }
