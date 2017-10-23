$(document).ready(function(){
	$('.button-collapse').sideNav();

	$('.slider').slider({
		indicators: false,
		interval: 2000,
		height: 500
	});

	$('.tooltipped').tooltip({
		delay: 50
	});


    // Smooth Scroll
    $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
      	scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
    });
    } // End if
});
    $(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
});

window.sr = ScrollReveal();

sr.reveal('.brand-logo', {
	duration: 500,
	origin: 'top',
	reset: true
});

sr.reveal('.menu', {
	delay: 500,
	duration: 500,
	origin: 'top',
	reset: true
});

sr.reveal('.countdownContainer', {
	duration: 1000,
	viewFactor: 0.3,
	origin: 'left',
	reset: true
});

sr.reveal('.logo', {
	duration: 1000,
	viewFactor: 0.3,
	origin: 'right',
	reset: true
});

sr.reveal('.about-card', {
	duration: 500,
	viewFactor: 0.3,
	reset: true
});

sr.reveal('.more', {
	duration: 500,
	delay: 500,
	viewFactor: 0.3,
	reset: true
});


