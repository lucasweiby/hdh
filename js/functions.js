$(document).ready(function(){
	$('.button-collapse').sideNav();

	$('.modal').modal();

	$('.slider').slider({
		indicators: false,
		interval: 2000,
		height: 500
	});

	$('.tooltipped').tooltip({
		delay: 50
	});

    $('select').material_select();

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

    $(".progress").hide()
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

	$('.materialboxed').materialbox();

	$(document).ready(function(){
		$('.carousel').carousel({
			indicators: true
		}, 'next');
	});


	//Botao mais
	var integrante_n = 2;

	$('#botao-mais').click(function() {
		var integrante_anterior = integrante_n-1;
		if ($('#nome_integ'+integrante_anterior).val() == "" || $('#n_integ'+integrante_anterior).val() == "") { //ver se ja preencheu
			$('#modal1').modal('open');
		} else {
		var $integrante_mais = "<div class=\"row\">"+
									"<div class=\"input-field col s1\">"+
										"<label>"+integrante_n+"</label>"+
									"</div>"+
									"<div class=\"input-field col s7\">"+
										"<input id=\"nome_integ"+integrante_n+"\" name=\"nome_integ"+integrante_n+"\" type=\"text\" class=\"validate\" required=\"required\">"+
										"<label for=\"nome_integ"+integrante_n+"\">Nome do integrante</label>"+
									"</div>"+
									"<div class=\"input-field col s3\">"+
										"<input id=\"n_integ"+integrante_n+"\" name=\"n_integ"+integrante_n+"\" type=\"number\" class=\"validate\" required=\"required\">"+
										"<label for=\"n_integ"+integrante_n+"\" data-error=\"Digite apenas números\">Nº documento oficial com foto</label>"+
									"</div>"+
									"<div class=\"input-field col s1\">"+
									"</div>"+
								"</div>";
		$('.integrantes_cadastro').append($integrante_mais);
		integrante_n++;
		}
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

sr.reveal('.um', {
	duration: 500,
	viewFactor: 0.3,
	reset: true
});

sr.reveal('.dois', {
	duration: 500,
	viewFactor: 0.3,
	delay: 200,
	reset: true
});

sr.reveal('.margem', {
	duration: 500,
	viewFactor: 0.3,
	delay: 500,
	reset: true,
	origin: 'top'
});

sr.reveal('.about-title', {
	duration: 500,
	viewFactor: 0.3,
	reset:true,
	origin: 'top'
});

sr.reveal('.img-about', {
	duration: 500,
	viewFactor: 0.3,
	reset: true,
});

sr.reveal('.text-about', {
	duration: 500,
	viewFactor: 0.3,
	reset: true,
	delay: 300
});

sr.reveal('back', {
	duration: 500,
	viewFactor: 0.2
});

sr.reveal('.workshops', {
	duration: 500,
	viewFactor: 0.3, 
	reset: true
});

sr.reveal('.prog', {
	duration: 500,
	viewFactor: 0.3, 
	reset: true
});

sr.reveal('.line', {
	duration: 500,
	viewFactor: 0.3,
	delay: 500,
	reset: true
});

sr.reveal('.team-member', {
	viewFactor: 0.3,
	reset: true
}, 500);

sr.reveal('.hora',{
	viewFactor: 0.5,
	reset: true
}, 100);

sr.reveal('.event',{
	viewFactor: 0.5,
	reset: true
}, 100);

sr.reveal('.title', {
	duration: 500,
	viewFactor: 0.3,
	delay: 2100, 
	reset: true
});

sr.reveal('.title-cont', {
	duration: 500,
	viewFactor: 0.3,
	reset: true
});

sr.reveal('.gallery-img', {
	viewFactor: 0.3,
	reset: true
}, 100);

sr.reveal('.map-title', {
	viewFactor: 0.3,
	reset: true
});

sr.reveal('.end', {
	viewFactor: 0.3,
	delay: 500,
	reset: true
});